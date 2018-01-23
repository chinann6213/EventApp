<?php
  session_start();

  $user = $_SESSION['eventtap_usr'];

  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "event_app";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


  if ($_POST['action']) {
      if ($_POST['action'] == "CHECK_AU") {
          $sql = "SELECT id FROM organizer WHERE account = '$user'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) { // account is verified
          }
          else {
              echo "ERR_ORG_ID";
              exit();
          }
      }
      if (!isset($_POST['title']) || $_POST['title'] == ""  || !isset($_POST['content']) || $_POST['content'] == "" || !isset($_POST['lat']) || $_POST['lat'] == "" || !isset($_POST['lng']) || $_POST['lng'] == "" || !isset($_POST['location']) || $_POST['location'] == "" || !isset($_POST['participant']) || $_POST['participant'] == "") {
          echo "Please fill in all the required fields!";
          exit();
      }
      $start_date = date("Y-m-d", strtotime($_POST['start_date']));
      $end_date = date("Y-m-d", strtotime($_POST['end_date']));
      $time = $_POST['time'];
      $title = $_POST['title'];
      $content = mysqli_real_escape_string($conn, $_POST['content']);

      if (isset( $_POST['images'])) {
         $images = $_POST['images'];
         $featured_img = $images[0]['img_src'];
      }
      else {
          $images = null;
          $featured_img = null;
      }
      $lat = round($_POST['lat'], 4);
      $lng = round($_POST['lng'], 4);
      $location = $_POST['location'];
      $participant = $_POST['participant'];
      $category = $_POST['category'];
      if (isset($category) || $category != "") {
          if (!preg_match('/^[A-Za-z0-9, ]+$/i', $category)) {
              echo "ERR_CATEGORY_TXT";
              exit();
          }
          if (strpos($category, " ") != '') {
              echo "ERR_CATEGORY_SPACE";
              exit();
          }
      }
      else {
          $category = "";
      }
      $meta_title = $title;
      $meta_desc = $content;//substr($content, 0, 50) + "...";

    if ($_POST['action'] == "create") {

        $sql = "SELECT id FROM organizer WHERE account = '$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($oid = mysqli_fetch_assoc($result)) {
                $organizer_id = $oid['id'];
            }
        }
        else {
            echo "ERR_ORG_ID";
            exit();
        }


      $sql = "INSERT INTO event (event_title, event_content, event_start_date, event_end_date, event_start_time, event_longitude, event_latitude, location, event_author, event_meta_title, event_meta_description, event_featured_img, participant, organizer_id, category) VALUES ('$title', '$content', '$start_date', '$end_date', '$time', '$lng', '$lat', '$location', '$user', '$meta_title', '$meta_desc', '$featured_img', '$participant', '$organizer_id', '$category')";
      $status = "SUCCESS";
      if (mysqli_query($conn, $sql)) {
          if ($images != null) {
              $sql = "SELECT event_id FROM event WHERE event_author='$user' AND event_title='$title' ORDER BY event_id DESC LIMIT 1";
              $result = mysqli_query($conn, $sql);
              echo mysqli_error($conn);
              while ($eid = mysqli_fetch_assoc($result)) {
                  $event_id = $eid['event_id'];
              }
              $img = "";
              for ($i = 0; $i < count($images); $i ++) {
                $img .= "('".$images[$i]['img_src']."', '".$images[$i]['img_alt']."', '".$images[$i]['img_cap']."', '".$user."', '".$event_id."'),";
              }
              $img = rtrim($img,",");
              $sql = "INSERT INTO gallery (img_src, img_alt, img_cap, img_owner, event_id) VALUES $img";
              if (mysqli_query($conn, $sql)) {
                $status = "SUCCESS";
              }
              else {
                echo mysqli_error($conn);
              }
          }
          echo $status;
      }
      else {
        echo mysqli_error($conn);
      }
    }
    else if ($_POST['action'] == "update") {
        $event_id = $_POST['event_id'];
        $sql = "UPDATE event SET
            event_title = '$title',
            event_content = '$content',
            event_start_date = '$start_date',
            event_end_date = '$end_date',
            event_start_time = '$time',
            event_longitude = '$lng',
            event_latitude = '$lat',
            location = '$location',
            event_meta_title = '$meta_title',
            event_meta_description = '$meta_desc',
            event_featured_img = '$featured_img',
            participant = '$participant'
            WHERE event_id = '$event_id'
            AND event_author = '$user'
        ";
        if (mysqli_query($conn, $sql)) {
            echo "SUCCESS";
            mysqli_close($conn);
            exit();
        } else {
          echo mysqli_error($conn);
        }
    }
  }
 ?>
