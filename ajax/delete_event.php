<?php
session_start();

$user = "chinann6213@gmail.com"; // $_SESSION['user'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "event_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$eid = $_POST['event_id'];
$sql = "DELETE FROM event WHERE event_id = '$eid' AND event_author = '$user'";
if (mysqli_query($conn, $sql)) {
    $sql = "DELETE FROM gallery WHERE event_id = '$eid' AND img_owner = '$user'";
    if (mysqli_query($conn, $sql)) {
        echo "SUCCESS";
        exit();
    }
    else {
        echo mysqli_error($conn);
    }
}
else {
    echo mysqli_error($conn);
}

?>
