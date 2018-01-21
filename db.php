<?php
session_start();

  if(isset($_POST['submit'])){
  	  include_once'mysqli_connect.php';
  	  $first = $_POST['first'];
	  $last = $_POST['last'];
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $email = $_POST['email'];
	  $birthdate = $_POST['birthdate'];
	  $birthdate = date('Y-m-d', strtotime(str_replace('-','/',$birthdate)));
	  $telnumber = $_POST['telnumber'];

	  //check empty field
	  if(empty($first) || empty($last) || empty($username) || empty($password) || empty($email) || empty($birthdate) || empty($telnumber)){
	  	header("Location: sign-up.php?signup=empty");
	  	exit();
	  }else{
	  	$sql = "SELECT * FROM users WHERE username='$username'";
	  	$result = mysqli_query($link,$sql);
	  	$resultCheck = mysqli_num_rows($result);

	  	if ($resultCheck>0){
	  		header("Location:sign-up.php?signup=usertaken");
	  		exit();
	  	}else{
	  		//hash password
	  		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
	  		$sql = "INSERT INTO users (fname, lname, username, pwd, email, birthdate, tel) VALUES ('$first','$last','$username','$hashedPwd','$email','$birthdate','$telnumber');";
	  		mysqli_query($link, $sql);
	  		header("Location:sign-up.php?signup=success");
	  	}
	  }
  }else{
  	  header("Location:sign-up.php");
  	  exit();
  }