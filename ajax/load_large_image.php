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

$img_src = $_POST['img_src'];

$sql = "SELECT * FROM gallery WHERE img_src='$img_src'";
$result = mysqli_query($conn, $sql);
while ($i = mysqli_fetch_assoc($result)) {
    $image = array(
        'src' => $i['img_src'],
        'alt' => $i['img_alt'],
        'cap' => $i['img_cap']
    );
    echo json_encode($image);
}

?>
