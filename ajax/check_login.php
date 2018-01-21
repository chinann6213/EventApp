<?php
$cost = 8;

$username = $_POST['username'];
$password = $_POST['password'];

// if action is login
if (action = "login") {
    // check if username exists in db
    if ($username exists) {
        // select the hashed password and verify with password

        // if user tick remember me
        if ($_POST['remember_me'] === true) {

            $hashed_pw = password_hash($password, PASSWORD_BCRYPT, ["cost" => $cost]);
            // store the hashed_pw into db

            // setting up cookies
            $cookie_name = 'eventtap_usr_cookies';
            setcookie($cookie_name, hashed_pw, time() + (86400 * 30), "/"); // 86400 = 1 day

            // setting up sessions
            session_start();
            $_SESSION['eventtap_usr'] = USER_EMAIL;

            // redirect user to create event
        }
    }
}
else {
    // if user click crate event, check if cookies exists
    // get cookies
    if (!isset($_COOKIES['eventtap_usr_cookies'])) {
        // show sign in
    }
    else {// check if cookies is in db table
        $check = $_COOKIES['eventtap_usr_cookies'];
        $sql = "SELECT username, cookies FROM dbtable WHERE cookies='$check'";
        // if db table has the cookie
        // set the username session
    }
}



 ?>
