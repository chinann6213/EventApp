<?php
session_start();

$user = "ganqitze@gmail.com"; // $_SESSION['user'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "event_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['event_id'])){
    $event_id = $_GET['event_id'];
    $sql = "SELECT * FROM event WHERE event_id = '$event_id'";
    $results = mysqli_query($conn, $sql);
    while($event_data = mysqli_fetch_assoc($results)) {
        $event_title = $event_data['event_title'];
        $event_content = $event_data['event_content'];
        $event_start_date = $event_data['event_start_date'];
        $event_start_time = $event_data['event_start_time'];
        $event_end_date = $event_data['event_end_date'];
        $event_longitude = $event_data['event_longitude'];
        $event_latitude = $event_data['event_latitude'];
    }

} 


?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/view-event.css">
    <script type="text/javascript" src="js/view-event.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWAtE05RIq6Wd1xmHsLd2BXbC2fd0xhs&callback=initMap"></script>
</head>
<body>
    <div class="container">
        <div id="event-view">
            <div>
                <h1><?php echo $event_title; ?></h1>
                <span id="event-date">
                    <?php echo $event_start_date.' at '.$event_start_time.' - '.$event_end_date; ?>
                </span>
                <!-- Monday, 29 October 2018 at 09:00 - Friday, 2 November 2018 at 17:00 -->
                <!-- <br><i>tag (if any)</i> -->
            </div>

            <hr>

            <div id="event-detail">
                <h1>Event Details: </h1>
                <?php echo $event_content; ?>
            </div>




        </div>
    </div>

</body>
</html>
