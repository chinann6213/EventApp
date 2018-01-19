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

$sql = "SELECT * FROM event WHERE event_author = '$user'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $event = [];
    while ($data = mysqli_fetch_assoc($conn, $sql)) {
        $e = array(
            "event_id" => $data['event_id'],
            "event_title" => $data['event_title'],
            "event_content" => strip_tags($data['event_content']),
            "event_start_date" => $data['event_start_date'],
            "event_end_date" => $data['event_end_date'],
            "event_created_time" => $data['event_created_date'],
            "event_location" => $data['location']
        );
        $event[] = $e;
    }
    echo $event;
} else {
    echo mysqli_error($conn);
}

 ?>
