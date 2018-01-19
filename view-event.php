<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="css/view-event.css">
<main>
  <div class="container">
    <div id="event-view">

      <div id="event-name">
        <h1>LELONG.MY: CLASS 101 - NOW EVERYBODY CAN SELL ONLINE! (ENGLISH)</h1> Monday, 29 October 2018 at 09:00 - Friday, 2 November 2018 at 17:00
        <br><i>tag (if any)</i>
      </div>

      <hr>

      <div id="event-detail">
        <h1>Event Details: </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel enim at tellus euismod convallis. Pellentesque bibendum tortor ut magna aliquam, a mattis ante consectetur. Nulla venenatis, arcu in feugiat finibus, arcu arcu finibus felis, sit amet ornare ligula leo id sem. Proin a diam porttitor, tincidunt tortor eget, imperdiet turpis. Nunc sit amet lacus tellus. Nulla maximus tellus nec nulla iaculis accumsan. Maecenas nec nulla lacus.</p>

        <p>Mauris ac eros sit amet ipsum eleifend mattis vel quis ex. Etiam mollis sed ligula vitae fermentum. Maecenas velit leo, semper in interdum et, tincidunt a metus. Sed dignissim sit amet augue sed consequat. Praesent pretium mi ut purus pulvinar aliquam. Duis finibus suscipit porttitor. Donec ipsum nisi, lobortis nec ex interdum, aliquam posuere ipsum. Nam a faucibus urna, vel gravida enim. Pellentesque vel nibh ac tortor congue accumsan laoreet sit amet ex. Morbi dictum laoreet purus quis scelerisque. Maecenas lobortis, orci id posuere sollicitudin, augue tortor ultricies leo, sit amet pellentesque ex erat vel quam. Donec rhoncus mi velit, eget semper enim dictum et. Ut id placerat mauris. Vestibulum bibendum nibh vel quam porta, vitae porttitor ex congue.</p>
      </div>

      <div id="event-location">
        <h1>Where: </h1>
        <strong>MMU Cyberjaya Tennis Courts</strong><br>
        Jalan Multimedia, Multimedia University, 63100 Cyberjaya, Selangor, Malaysia
      </div>

      <div id="googleMap"></div>

      <div id="event-location">
        <h1>Organiser: </h1>
        The Avengers (if any)
      </div>

      <!-- supporting images here-->  
      <?php
      if (true) {
        echo '<div id="event-img">';
        echo '<div><img src="../img/banner-browse-event.jpg"></div>';
        echo '<div><<img src="../img/if_twitter_six_107069.png"></div>';
        
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

<script type="text/javascript" src="js/view-event.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWAtE05RIq6Wd1xmHsLd2BXbC2fd0xhs&callback=initMap"></script>


<?php
include_once 'footer.php';
?>
