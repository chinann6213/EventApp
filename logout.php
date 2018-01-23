<?php

if(isset($_POST['submit'])){
	session_start();
	session_unset();
	session_destroy();
	if(isset($_COOKIE['eventtap_usr_hashed'])){
		$email = $_COOKIE['eventtap_usr_hashed'];
		setcookie('eventtap_usr_hashed',$email,time()-1);
	}
	header("Location:index.php");
	exit();
}