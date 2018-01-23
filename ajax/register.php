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

  if ($_POST['action']) {
    if ($_POST['action'] == "create") {
      $event_id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      $sql = "INSERT INTO registered_user (name, email, contact, event_id) VALUES ('$name', '$email', '$contact', '$event_id')";
      if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE event SET participant = participant - 1 WHERE event_id = '$event_id'";
        if (mysqli_query($conn, $sql)) {

          // Get Ticket ID as Reference Number
          $sql = "SELECT ticket_id FROM registered_user WHERE email = '$email' ORDER BY ticket_id DESC LIMIT 1";
          $results = mysqli_query($conn, $sql);
          while($user_data = mysqli_fetch_assoc($results)) {
            $ticket_id = $user_data['ticket_id'];
          }

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


          // $to = $email;
          // $subject = "Email from EventApp";
          // $message = "hello WOrld";
          // $headers = "MIME-Version: 1.0" . "\r\n";
          // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          // $headers .= 'From: <webmaster@example.com>' . "\r\n";

          // if(mail($to,$subject,$message,$headers)) {

          //   echo '<p>Your message has been sent!</p>';
          // } else {
          //   echo '<p>Something went wrong, go back and try again!</p>';
          // }



          echo $ticket_id;
          exit();
          // echo "success";

        }
        else {
          echo mysqli_error($conn);
        }
        echo "success";
      }
      else {
        echo mysqli_error($conn);
      }
    }
  }
  ?>
