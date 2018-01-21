<?php
session_start();

if(isset($_POST['submit'])){
  include 'mysqli_connect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) || empty($password)){
    header("Location:sign-in.php?login=empty");
  }else{
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck<1){
      header("Location:index.php?login=error1");
      exit();
    }else{
      if($row = mysqli_fetch_assoc($result)){
        //dehash password
        $hashedPwdCheck = password_verify($password,$row['pwd']);
        if($hashedPwdCheck == false){
          header("Location:index.php?login=error2");
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