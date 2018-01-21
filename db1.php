<?php
session_start();

if(isset($_POST['submit'])){
  include 'mysqli_connect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) || empty($password)){
    $loginEmpty = "Please enter your username and password";
      echo "<script type='text/javascript'>alert('$loginEmpty');window.location.href='index.php';</script>";
      exit();
  }else{
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck<1){
      $usernameError = "Incorrect username or password";
      echo "<script type='text/javascript'>alert('$usernameError');window.location.href='index.php';</script>";
      exit();
    }else{
      if($row = mysqli_fetch_assoc($result)){
        //dehash password
        $hashedPwdCheck = password_verify($password,$row['pwd']);
        if($hashedPwdCheck == false){
          $passwordError = "Incorrect username or password";
          echo "<script type='text/javascript'>alert('$passwordError');window.location.href='index.php';</script>";
          exit();
        }elseif($hashedPwdCheck == true){
          //Login if true
          $_SESSION['u_fname'] = $row['fname'];
          $_SESSION['u_lname'] = $row['lname'];
          $_SESSION['u_username'] = $row['username'];
          $_SESSION['u_email'] = $row['email'];
          $_SESSION['u_birthdate'] = $row['birthdate'];
          $_SESSION['u_tel'] = $row['tel'];
          header("Location:index.php?login=success");
          exit();
        }
      }
    }
  }
}