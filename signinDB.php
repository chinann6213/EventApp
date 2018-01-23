<?php
session_start();
if(isset($_POST['submit'])){
  require_once('sql/mysqli_connect.php');
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)){
    $loginEmpty = "Please enter your email and password";
      echo "<script type='text/javascript'>alert('$loginEmpty');window.location.href='index.php';</script>";
      exit();
  }else{
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($dbc, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck<1){
      $emailError = "Incorrect email or password";
      echo "<script type='text/javascript'>alert('$emailError');window.location.href='index.php';</script>";
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
          if(isset($_POST['rememberme'])){
            setcookie('email',$email,time()+2678400);
          }
          session_start();
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
