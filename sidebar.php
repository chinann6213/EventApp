<?php
    // check user login code here
?>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/sidebar.css">
  </head>
  <body>
    <div id="nav-sidebar">
      <div id="user-login-details" class="main-item">Hi, Batman</div>
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
        <div class="sub-item" id="create">Create Event</div>
        <div class="sub-item" id="manage">Manage Event</div>
        <div class="sub-item" id="category">Categories</div>
      </div>
      <div class="main-item" id="gallery">
        <a>
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
              <path d="M0 0v8h8v-8h-8zm1 1h6v3l-1-1-1 1 2 2v1h-1l-4-4-1 1v-3z" />
            </svg>
            <span>Gallery</span>
          </p>
        </a>
      </div>
      <div class="main-item" id="about-us">
        <a>
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
