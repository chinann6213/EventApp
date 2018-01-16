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
    if ($_POST['action'] == "create") {
      $start_date = date("Y-m-d", strtotime($_POST['start_date']));
      $end_date = date("Y-m-d", strtotime($_POST['end_date']));
      $time = $_POST['time'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $images = $_POST['images'];
      $lat = round($_POST['lat'], 4);
      $lng = round($_POST['lng'], 4);
      $meta_title = $title;
      $meta_desc = $content;//substr($content, 0, 50) + "...";
      $featured_img = $images[0]['img_src'];
      $sql = "INSERT INTO event (event_title, event_content, event_start_date, event_end_date, event_start_time, event_longitude, event_latitude, event_author, event_meta_title, event_meta_description, event_featured_img) VALUES ('$title', '$content', '$start_date', '$end_date', '$time', '$lng', '$lat', '$user', '$meta_title', '$meta_desc', '$featured_img')";
      if (mysqli_query($conn, $sql)) {
        $img = "";
        for ($i = 0; $i < count($images); $i ++) {
          $img .= "('".$images[$i]['img_src']."', '".$images[$i]['img_alt']."', '".$images[$i]['img_cap']."', '".$user."'),";
        }
        $img = rtrim($img,",");
        $sql = "INSERT INTO gallery (img_src, img_alt, img_cap, img_owner) VALUES $img";
        if (mysqli_query($conn, $sql)) {
          echo "success";
        }
        else {
          echo mysqli_error($conn);
        }
      }
      else {
        echo mysqli_error($conn);
      }
    }
    else if ($_POST['action'] == "update") {

    }
  }
 ?>
