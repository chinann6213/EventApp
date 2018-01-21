<?php
session_start();

  if(isset($_POST['submit'])){
  	  require_once('sql/mysqli_connect.php');
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
	  	$emptyMessage = "Do not leave empty field";
	  	echo "<script type='text/javascript'>alert('$emptyMessage');window.location.href='index.php';</script>";
	  	exit();

	  }else{
	  	$sql = "SELECT * FROM users WHERE email='$email'";
	  	$result = mysqli_query($dbc,$sql);
	  	$resultCheck = mysqli_num_rows($result);

	  	if ($resultCheck>0){
	  		$takenMessage = "Email has already been taken, please try again";
	  		echo "<script type='text/javascript'>alert('$takenMessage');window.location.href='index.php';</script>";
	  		exit();
	  	}else{
	  		//hash password
	  		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
	  		$sql = "INSERT INTO users (fname, lname, username, pwd, email, birthdate, tel) VALUES ('$first','$last','$username','$hashedPwd','$email','$birthdate','$telnumber');";
	  		mysqli_query($dbc, $sql);
	  		$registerMessage = "Registration success!";
	  		echo "<script type='text/javascript'>alert('$registerMessage');window.location.href='index.php';</script>";
	  	}
	  }
  }else{
  	  header("Location:index.php");
  	  exit();
  }