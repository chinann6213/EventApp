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

$event_id = $_GET['event-id'];
$sql = "SELECT * FROM event WHERE event_id = '$event_id'";
$results = mysqli_query($conn, $sql);
while($event_data = mysqli_fetch_assoc($results)) {
    $event_title = $event_data['event_title'];
    $event_content = $event_data['event_content'];
    $event_
}


?>

<html>
    <head>
        
    </head>
    <body>
        <h1><?php echo $event_title; ?></h1>

        <div id="event-content">
            <?php echo $event_content; ?>
        </div>
    </body>
</html>
