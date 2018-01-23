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

$sql = "SELECT * FROM organizer WHERE account='$user'";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($data = mysqli_fetch_assoc($result)) {
        $o = array(
            "logo" => $data['logo'],
            "name" => $data['name'],
            "contact" => $data['contact'],
            "email" => $data['email']
        );
        echo json_encode($o);
    }

    mysqli_close($conn);
}
else {
    echo "No Data Found";
}
 ?>
