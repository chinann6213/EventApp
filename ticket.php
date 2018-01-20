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
  }

  $sql2 = "SELECT * FROM registered_user WHERE ticket_id = '$ticket_id'";
  $results2 = mysqli_query($conn, $sql2);
  while($user_data = mysqli_fetch_assoc($results2)) {
   $user_name = $user_data['name'];
   $user_email = $user_data['email'];
 }

} 

?>

<link rel="stylesheet" href="css/ticket.css">
<main>
  <div class="container">
    <div id="ticket-card">
      <p>Holla, <label><?php echo $user_name; ?></label></p>
      <p>Ref No.: #<label><?php echo $ticket_id; ?></label></p>
      <p>Thank you for registering <label><?php echo $event_title; ?></label>.</p> 
      <p><p>The order confirmation ticket has been sent to <a href="mailto:$user_email"><?php echo $user_email?></label>.</p>
      </div>
    </div>
  </main>

  <?php
  include_once 'footer.php';
  ?>
