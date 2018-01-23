<?php
session_start();

$user = $_SESSION['eventtap_usr'];

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
    $img = array();
    $sql = "SELECT img_src FROM gallery WHERE event_id = '$eid' AND img_owner = '$user'";
    $result = mysqli_query($conn, $sql);
    while ($del = mysqli_fetch_assoc($result)) {
        $img[] = "../".$del['img_src'];
    }
    for ($i = 0; $i < count($img); $i ++) {
        unlink($img[$i]);
    }
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
