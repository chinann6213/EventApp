<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Event App</title>
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
  <div class="modal modal-medium" style="width:30%;height:70%;display:block;">
  <div class="modal-header">
    <span class="close1">&times;</span>
    <p>Sign in to see more events</p>
  </div>
  <div class="modal-body" style="margin-top: 15%">
    <div id="register-box">
    <form action="db1.php" method="post">
      <p>
        <label>Username:
          <input type="text" name="username">
        </label>
      </p>
      <p>
        <label>Password:
          <input type="password" name="password">
        </label>
      </p>
      <button type="submit" name='submit'>Log In</button>
      <br><label class="register" id="btnSignup">Haven't register yet? Sign up here</label>
    </form>
   </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
    </div>
    <!-- sign in end -->
    <!-- sign up -->
  <div class="modal" id="user-modal">
  <div class="modal modal-medium" style="width:30%;top:75%;display:block">
  <div class="modal-header">
    <span class="close">&times;</span>
    <p>Fill your information</p>
  </div>
  <div class="modal-body">

    <div id="signup">
      <form action="db.php" method="post" style="margin-top:15%">
            <div id="wrap">
              <p>
                <label>First Name:
                  <input type="text" name="first" placeholder="First Name...">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Last Name:
                  <input type="text" name="last" placeholder="Last Name...">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Username:
                  <input type="text" name="username" placeholder="Username...">
                </label>
              </p>
            </div>
            <div id="wrap">
              <p>
                <label>Password:
                  <input type="password" name="password" placeholder="Password...">
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
                  <input type="text" name="telnumber" placeholder="Phone Number...">
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
    <a href="index.php" class="header-brand">EventApp</a>
    <nav class="main-nav">
      <ul>
        <li><a href="">Create Event</a></li> <!-- if user logged in -->
        <li><a href="">My Event</a></li> <!-- if use logged in -->
        <li><label class="signin_btn" id="btnSignin">Sign In</label></li> <!-- if user hasn't login -->
      </ul>
    </nav>
  </header>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    // Get the modal
    var modal_signIn = document.getElementById('signIn-modal');

    // Get the button that opens the modal
    var btn_signIn = document.getElementById("btnSignin");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    var modal_user = document.getElementById('user-modal');

    var btn_user = document.getElementById('btnSignup');

    var span1 = document.getElementsByClassName('close1')[0];

    // When the user clicks on the button, open the modal 
    btn_signIn.onclick = function() {
      modal_signIn.style.display = "block";
    }

    //When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal_user.style.display = "none";
    }

    //When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal_signIn) {
        modal_signIn.style.display = "none";

      }
      if(event.target == modal_user){
        modal_user.style.display = "none";
      }
    }

    span1.onclick = function() {
      modal_signIn.style.display = "none";
    }

    btn_user.onclick = function(){
      modal_signIn.style.display = "none";
      modal_user.style.display = "block";
    }

  </script>
  <style type="text/css">
    header { background-color: black; z-index: 9999; }
  </style>