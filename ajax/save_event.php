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

 ?>
