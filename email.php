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

if (isset($_GET['event_id']) and isset($_GET['ticket_id'])){
  $event_id = $_GET['event_id'];
  $ticket_id = $_GET['ticket_id'];

  $sql = "SELECT * FROM event WHERE event_id = '$event_id'";
  $results = mysqli_query($conn, $sql);
  while($event_data = mysqli_fetch_assoc($results)) {
    $event_title = $event_data['event_title'];
    $event_start_date = $event_data['event_start_date'];
    $event_start_time = $event_data['event_start_time'];
    $event_end_date = $event_data['event_end_date'];
    $event_location = $event_data['location'];
    $event_organiser_id = $event_data['organizer_id'];
  }

  $sql2 = "SELECT * FROM registered_user WHERE ticket_id = '$ticket_id'";
  $results2 = mysqli_query($conn, $sql2);
  while($user_data = mysqli_fetch_assoc($results2)) {
   $user_name = $user_data['name'];
 }

 $sql3 = "SELECT * FROM organizer WHERE id = '$event_organiser_id'";
 $results3 = mysqli_query($conn, $sql3);
 while($organiser_data = mysqli_fetch_assoc($results3)) {
  $event_organiser_name = $organiser_data['name'];
  $event_organiser_contact = $organiser_data['contact'];
  $event_organiser_email = $organiser_data['email'];
}

} 

?>

<link rel="stylesheet" href="css/email.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<main>
  <div class="container">
    <div id="ticket-card">
      <p>Holla, <label><?php echo $user_name; ?></label></p>
      <p>Ref No.: #<label><?php echo $ticket_id; ?></label></p>
      <p>Thank you for registering <label><?php echo $event_title; ?></label>.</p> 
      <p>
       About this event:
       <ul>
        <li>Organised by</li><i class="material-icons">contacts</i>
        <span><?php echo $event_organiser_name; ?></span><i class="material-icons">contact_mail</i>
        <span><?php echo $event_organiser_email; ?></span><i class="material-icons">contact_phone</i>
        <span><?php echo $event_organiser_contact; ?></span> 
        
        <li>Where</li><i class="material-icons">location_on</i>
        <span><?php echo $event_location; ?></span> 
        <li>When</li><i class="material-icons">date_range</i>
        <span id="event-datetime"></span> 
      </ul>

    </p>

    <p>Please print the ticket and display upon entering the event.</p>
    <p>See you there!</p>
  </div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script type="text/javascript">
  var startdate = "<?php echo $event_start_date?>";
  var starttime = "<?php echo $event_start_time?>";
  var enddate = "<?php echo $event_end_date?>";  
  var datetime = moment(startdate).format("dddd, MMMM Do YYYY") + " at " + starttime + " - " + moment(enddate).format("dddd, MMMM Do YYYY");

  $("#event-datetime").html(function(){
    return datetime;
  });
</script>

<?php
include_once 'footer.php';
?>
