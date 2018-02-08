<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>EventTap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/sign-up.css">
  <link rel="stylesheet" href="css/sign-in.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Cormorant+Garamond" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- sign in -->
  <div class="modal" id="signIn-modal">
  <div class="signin-modal-medium">
      <span class="close1">&times;</span>
  <div class="signin-modal-header">
    <p>Sign in to see more events</p>
  </div>
  <div class="signin-modal-body">
    <div id="register-box">
    <form action="signinDB.php" method="post">
      <p>
        <label>Email:
          <input type="text" id="email" name="email">
        </label>
      </p>
      <p>
        <label>Password:
          <input type="password" id="password" name="password">
        </label>
      </p>
      <input id="check-rmb" type="checkbox" name="rememberme"><label for="check-rmb" id="rmb-me"><span>Remember Me</span></label>
      <div style="clear:both;"></div>
      <label class="register" id="btnSignup">Haven't register yet? <strong>Sign up here</strong></label>
      <br /><button type="submit" name='submit'>Log In</button>

    </form>
   </div>
      </div>
      <div class="signin-modal-footer"></div>
    </div>
  </div>
    </div>
    <!-- sign in end -->
    <!-- sign up -->
  <div class="modal" id="user-modal">
  <div class="modal modal-medium">
      <span class="close">&times;</span>
  <div class="modal-header">
    <p>Fill your information</p>
  </div>
  <div class="modal-body">

    <div id="signup">
      <form action="signupDB.php" method="post">
            <div id="wrap">
              <p>
                <label>First Name:
                  <input type="text" name="first">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Last Name:
                  <input type="text" name="last">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Username:
                  <input type="text" name="username">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Password:
                  <input type="password" name="password">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>E-mail:
                  <input type="email" name="email" placeholder="example@domain.com">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Date Of Birth:
                  <input type="date" name="birthdate">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Phone Number:
                  <input type="text" name="telnumber" placeholder="+6 012 - 3456 789">
                </label>
              </p>
            </div>
          <button type="submit" name="submit">Get Started</button>
          </form>
        </div>
      </div>
      <div class="modal-footer"></div>
    </div>
    </div>
    </
    <!-- sign up end-->
  <header>
    <a href="index.php" class="header-brand">EventTap</a>
    <nav class="main-nav">
      <?php
        if(isset($_SESSION['eventtap_usr'])){
          $fname = isset($_SESSION['u_fname'])? $_SESSION['u_fname']:"Guest";
          echo "
          <ul>
          <li><p>Hi, $fname </p></li>
          <li><a href='create-event.php'>Create Event</a></li>
          <li><a href='manage-event.php'>Manage Event</a></li>
          <li>
            <form action='logout.php' method='POST'>
            <button class='logout' type='submit' name='submit'>Logout</button></form>
          </li>
          </ul>";
        }else{
          echo "<ul>
          <li><a href='#' onClick='checkbox()'>Create Event</a></li>
          <li><a href='#' onClick='checkbox()'>Manage Event</a></li>
          <li><label class='signin_btn' id='btnSignin'>Sign In</label></li>
          </ul>";
        }
      ?>
    </nav>
  </header>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/sign-in.js"></script>
  <style type="text/css">
    header { background-color: #111; z-index: 9999; }
  </style>

<?php
  if(isset($_COOKIE['eventtap_usr_hashed'])){
    $email = $_COOKIE['eventtap_usr_hashed'];
    echo "<script>
      document.getElementById('email').value = '$email';
      </script>";
  }
?>
