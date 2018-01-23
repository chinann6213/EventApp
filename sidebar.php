<?php
    session_start();

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "event_app";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_COOKIE['eventtap_usr_hashed'])) {
        $cookie = $_COOKIE['eventtap_usr_hashed'];
        $sql = "SELECT fname, username, email FROM users WHERE hashed_cookie='$cookie'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($u = mysqli_fetch_assoc($result)) {
                $first_name = $u['fname'];
                $_SESSION['eventtap_usr'] = $u['email'];
            }
        }
    }
    else {
        if (!isset($_SESSION['eventtap_usr'])) {
            header('Location: index.php');
            die();
        }
        else {
            $email = $_SESSION['eventtap_usr'];
            $sql = "SELECT fname FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            while ($name = mysqli_fetch_assoc($result)) {
                $first_name = $name['fname'];
            }
        }
    }

?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/sidebar.css">
  </head>
  <body>
    <div id="nav-sidebar">
        <svg id="slide-in" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
          <path d="M3 0v1h4v5h-4v1h5v-7h-5zm-1 2l-2 1.5 2 1.5v-1h4v-1h-4v-1z" />
        </svg>
      <div id="user-login-details" class="main-item">
          Hi, <?php echo $first_name; ?>
          <img src="img/profile.jpg" />
          <a href="ajax/logout.php">Logout</a>
      </div>
      <div class="main-item" id="manage-event">
        <a href="create-event.php">
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
              <path d="M0 0v2h7v-2h-7zm0 3v4.91c0 .05.04.09.09.09h6.81c.05 0 .09-.04.09-.09v-4.91h-7zm1 1h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1z" />
            </svg>
            <span>Event Manager</span>
          </p>
        </a>
      </div>
      <div class="manage-event">
        <div class="sub-item" id="create"><a href="create-event.php">Create Event</a></div>
        <div class="sub-item" id="manage"><a href="manage-event.php">Manage Event</a></div>
      </div>
      <div class="main-item" id="about-us">
        <a href="about-us.php">
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
              <path d="M3 0c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zm-1.5 2.5c-.83 0-1.5.67-1.5 1.5h1c0-.28.22-.5.5-.5s.5.22.5.5-1 1.64-1 2.5c0 .86.67 1.5 1.5 1.5s1.5-.67 1.5-1.5h-1c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-.36 1-1.84 1-2.5 0-.81-.67-1.5-1.5-1.5z" transform="translate(2)"/>
            </svg>
            <span>About Us</span>
          </p>
        </a>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
