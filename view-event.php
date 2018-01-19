<?php
include_once 'header.php';

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
    $event_location = $event_data['location'];
  }

} 

?>

<link rel="stylesheet" href="css/view-event.css">
<main>
  <div class="container">
    <div id="event-view">

      <div id="event-title">
        <h1><?php echo $event_title; ?></h1>
        <p id="event-datetime"></p>
        <!-- <br><i>tag (if any)</i> -->
      </div>

      <hr>

      <div id="event-detail">
        <h1>Event Details: </h1>
        <span><?php echo $event_content; ?></span>        
      </div>

      <div id="event-location">
        <h1>Organised by: </h1>
        The Avengers (if any)
      </div>

      <div id="event-location">
        <h1>Where: </h1>
        <strong><?php echo $event_location; ?></strong><br>
        <!-- Jalan Multimedia, Multimedia University, 63100 Cyberjaya, Selangor, Malaysia -->
      </div>

      <div id="googleMap"></div> 

      <!-- supporting images here-->  
      <?php
      if (true) {
        echo '<div id="event-img">';
        echo '<span><img src="../img/banner-browse-event.jpg"></span>';
        echo '<span><<img src="../img/if_twitter_six_107069.png"></span>';
        
        echo '</div>';
      } 
      ?>

      <!-- Check if tickets left -->
      <?php
      if (true) {
       echo '<button id="regBtn" value="Register">Register</button>';
       echo '<div class="modal-mask"></div>';
       echo '<div id="reg-modal" class="modal modal-medium">';
       echo '<div class="modal-header"><p>Register Information</p></div>';
       echo '<div class="modal-body">';
       echo '<div class="form-input" id="reg-info">';
       echo '<label for="name" class="input-lbl">Name </label>';
       echo '<input type="text" class="event-input" id="name" required/>';
       echo '</div>';
       echo '<div class="form-input" id="reg-info">';
       echo '<label for="email" class="input-lbl">E-mail Address </label>';
       echo '<input type="text" class="event-input" id="email" required/>';
       echo '</div>';
       echo '<div class="form-input" id="reg-info">';
       echo '<label for="phone" class="input-lbl">Contact Number </label>';
       echo '<input type="tel" class="event-input" id="phone" pattern="^\d{3}-\d{7}$" required/></label>';
       echo '</div>';
       echo '<br><br>';
       echo '<div class="modal-footer">';
       echo '<button class="modal-close">Close</button>';
       echo '<button id="reg-submit">Submit</button>';

       echo '</div>';
       echo '</div>';
       echo '</div>';
     } 
     else {
      echo '<div id="no-ticket">Sold Out!</div>';
    } 
    ?>

  </div>
</main>
<script>
  var startdate = "<?php echo $event_start_date?>";
  var starttime = "<?php echo $event_start_time?>";
  var enddate = "<?php echo $event_end_date?>";  
  var mylat = "<?php echo $event_latitude?>";
  var mylng = "<?php echo $event_longitude?>";
</script>
<script type="text/javascript" src="js/view-event.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWAtE05RIq6Wd1xmHsLd2BXbC2fd0xhs&callback=initMap"></script>


<?php
include_once 'footer.php';
?>
