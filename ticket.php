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
  $sql = "SELECT * FROM registered_user, event WHERE event.event_id = '$event_id' AND registered_user.ticket_id = '$ticket_id'";
  $results = mysqli_query($conn, $sql);
  while($data = mysqli_fetch_assoc($results)) {
    $event_title = $data['event_title'];
    $user_name = $data['name'];
    
  }

} 

?>

<link rel="stylesheet" href="css/ticket.css">
<main>
  <div class="container">
    <div id="ticket-card">
      <p>Holla <label><?php echo $user_name; ?></label></p>
      <p>Ref #: <label><?php echo $ticket_id; ?></label> </p>
      <p>Thank you for registering <label><?php echo $event_title; ?></label>.</p> 
      <p>
         Event details:
        <ul>
          <li>Organised by</li>
          <li>Where</li>
          <li>When</li>
        </ul>
                
      </p>

      <p>Please print the ticket and display upon entering the event.</p>
      <p>See you there!</p>
    </div>
  </div>
</main>



<?php
include_once 'footer.php';
?>
