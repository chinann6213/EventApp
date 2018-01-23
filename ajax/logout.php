<?php

session_start();
$_SESSION = array();
session_destroy();

if (isset($_COOKIE['eventtap_usr_hashed'])) {
    unset($_COOKIE['eventtap_usr_hashed']);
    setcookie('eventtap_usr_hashed', '', time() - 99999999);
}

header('Location: ../index.php');
die();

 ?>
