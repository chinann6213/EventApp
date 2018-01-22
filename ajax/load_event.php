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
    while ($data = mysqli_fetch_assoc($result)) {

        $start_day = $data['event_start_date'];
        $end_day = $data['event_end_date'];

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $today = date("Y-m-d");
        $today_time = strtotime($today);
        $start_time = strtotime($start_day);
        $end_time = strtotime($end_day);
        // echo $today_time;
        if ($start_time < $today_time) {
            $status = '<span style="color: red;">Expired</span>';
        }
        else if ($start_time > $today_time) {
            $status = '<span style="color: blue;">Upcoming</span>';
        }
        else if ($today_time >= $start_time && $end_time >= $start_time) {
            $status = '<span style="color: green;">Ongoing</span>';
        }

        $e = array(
            "event_id" => $data['event_id'],
            "event_title" => $data['event_title'],
            "event_content" => shorten_string(strip_tags($data['event_content']), 50),
            "event_start_date" => $start_day,
            "event_end_date" => $end_day,
            "event_created_time" => $data['event_created_date'],
            "event_status" => $status,
            "event_location" => $data['location']
        );
        $event[] = $e;
    }
    echo json_encode($event);
} else {
    echo mysqli_error($conn);
}

function shorten_string($string, $wordsreturned)

{
    $retval = $string;
    $array = explode(' ', $string);
    if (count($array)<= $wordsreturned) {
        $retval = $string;
    }
    else {
        array_splice($array, $wordsreturned);
        $retval = implode(' ', $array).' ...';
    }
    return $retval;
}

 ?>
