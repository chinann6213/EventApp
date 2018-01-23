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
          $passwordError = "Incorrect email or password";
          echo "<script type='text/javascript'>alert('$passwordError');window.location.href='index.php';</script>";
          exit();
        }elseif($hashedPwdCheck == true){
          //Login if true
          if(isset($_POST['rememberme'])){
            $hashed_cookie = password_hash($email, PASSWORD_BCRYPT, ["cost" => 8]);
            $email = $row['email'];
            $sql = "UPDATE users SET hashed_cookie='$hashed_cookie' WHERE email='$email'";
            mysqli_query($dbc, $sql);
            setcookie('eventtap_usr_hashed',$hashed_cookie,time()+2678400);
          }
          session_start();
          $_SESSION['u_fname'] = $row['fname'];
          $_SESSION['u_lname'] = $row['lname'];
          $_SESSION['u_username'] = $row['username'];
          $_SESSION['eventtap_usr'] = $row['email'];
          $_SESSION['u_birthdate'] = $row['birthdate'];
          $_SESSION['u_tel'] = $row['tel'];
          header("Location:index.php?login=success");
          exit();
        }
      }
    }
  }
}
