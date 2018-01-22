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


if (isset($_POST['action'])) {
    if ($_POST['action'] == "view") {
        $event_id = $_POST['event_id'];
        $sql = "SELECT email, ticket_id FROM registered_user WHERE event_id=38";
        $result = mysqli_query($conn, $sql);
        $attendant = '<div class="att-header"><span>Attendant Email</span><span class="tid-header">Ticket ID</span></div>';
        if (mysqli_num_rows($result) > 0) {
            while($a = mysqli_fetch_assoc($result)) {
                $attendant .= '<div class="attendant"><span>'.$a['email'].'</span><span class="tid">'.$a['ticket_id'].'</span></div>';
            }
            echo $attendant;
        }
        else {
            echo $attendant .= '<p style="text-align: center;margin: 8px 16px;">No Attendant Found Currently.</p>';
        }
    }
}

 ?>
