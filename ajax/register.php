<?php
  session_start();

  $user = "ganqitze@gmail.com"; // $_SESSION['user'];

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
      $event_id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      $sql = "INSERT INTO registered_user (name, email, contact, event_id) VALUES ('$name', '$email', '$contact', '$event_id')";
      if (mysqli_query($conn, $sql)) {
        echo "success";
      }
      else {
        echo mysqli_error($conn);
      }
    }
  }
 ?>
