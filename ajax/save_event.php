<?php
  session_start();

  $user = "chinann6213@gmail.com"; // $_SESSION['user'];

  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "event_app";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if ($_POST['action']) {
      if (!isset($_POST['title']) || $_POST['title'] == ""  || !isset($_POST['content']) || $_POST['content'] == "" || !isset($_POST['lat']) || $_POST['lat'] == "" || !isset($_POST['lng']) || $_POST['lng'] == "" || !isset($_POST['location']) || $_POST['location'] == "" || !isset($_POST['participant']) || $_POST['participant'] == "") {
          echo "Please fill in all the required fields!";
          exit();
      }
      $start_date = date("Y-m-d", strtotime($_POST['start_date']));
      $end_date = date("Y-m-d", strtotime($_POST['end_date']));
      $time = $_POST['time'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $img = "";
      if (isset( $_POST['images'])) {
         $images = $_POST['images'];
         $featured_img = $images[0]['img_src'];
         for ($i = 0; $i < count($images); $i ++) {
           $img .= "('".$images[$i]['img_src']."', '".$images[$i]['img_alt']."', '".$images[$i]['img_cap']."', '".$user."'),";
         }
         $img = rtrim($img,",");
      }
      else {
          $images = null;
          $featured_img = null;
      }
      $lat = round($_POST['lat'], 4);
      $lng = round($_POST['lng'], 4);
      $location = $_POST['location'];
      $participant = $_POST['participant'];
      $meta_title = $title;
      $meta_desc = $content;//substr($content, 0, 50) + "...";

    if ($_POST['action'] == "create") {

      $sql = "INSERT INTO event (event_title, event_content, event_start_date, event_end_date, event_start_time, event_longitude, event_latitude, location, event_author, event_meta_title, event_meta_description, event_featured_img, participant) VALUES ('$title', '$content', '$start_date', '$end_date', '$time', '$lng', '$lat', '$location', '$user', '$meta_title', '$meta_desc', '$featured_img', '$participant')";
      $status = "Success";
      if (mysqli_query($conn, $sql)) {
          if ($img != "") {
              $sql = "INSERT INTO gallery (img_src, img_alt, img_cap, img_owner) VALUES $img";
              if (mysqli_query($conn, $sql)) {
                $status = "Success";
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
            echo "success";
        } else {
          echo mysqli_error($conn);
        }
    }
  }
 ?>
