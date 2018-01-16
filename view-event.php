<?php
include_once 'header.php';
?>

<main>
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

  <div class="container">
    <section class="">
      <div class="row">
        <div id="event-view">

          <div id="event-name">
            <h1>LELONG.MY: CLASS 101 - NOW EVERYBODY CAN SELL ONLINE! (ENGLISH)</h1>
            <i>tag (if any)</i>
          </div>

          <hr>

          <div id="event-detail">
            <h1>Event Details: </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel enim at tellus euismod convallis. Pellentesque bibendum tortor ut magna aliquam, a mattis ante consectetur. Nulla venenatis, arcu in feugiat finibus, arcu arcu finibus felis, sit amet ornare ligula leo id sem. Proin a diam porttitor, tincidunt tortor eget, imperdiet turpis. Nunc sit amet lacus tellus. Nulla maximus tellus nec nulla iaculis accumsan. Maecenas nec nulla lacus.</p>

            <p>Mauris ac eros sit amet ipsum eleifend mattis vel quis ex. Etiam mollis sed ligula vitae fermentum. Maecenas velit leo, semper in interdum et, tincidunt a metus. Sed dignissim sit amet augue sed consequat. Praesent pretium mi ut purus pulvinar aliquam. Duis finibus suscipit porttitor. Donec ipsum nisi, lobortis nec ex interdum, aliquam posuere ipsum. Nam a faucibus urna, vel gravida enim. Pellentesque vel nibh ac tortor congue accumsan laoreet sit amet ex. Morbi dictum laoreet purus quis scelerisque. Maecenas lobortis, orci id posuere sollicitudin, augue tortor ultricies leo, sit amet pellentesque ex erat vel quam. Donec rhoncus mi velit, eget semper enim dictum et. Ut id placerat mauris. Vestibulum bibendum nibh vel quam porta, vitae porttitor ex congue.</p>
          </div>

          <div id="event-datetime">
            <h1>When: </h1>
            Monday, 29 October 2018 at 09:00 - Friday, 2 November 2018 at 17:00
          </div>

          <div id="event-location">
            <h1>Where: </h1>
            <strong>MMU Cyberjaya Tennis Courts</strong><br>
            Jalan Multimedia,<br> Multimedia University,<br> 63100 Cyberjaya,<br> Selangor, Malaysia

          </div>

          <div id="event-location">
            <h1>Organiser: </h1>
            The Avengers (if any)
          </div>

          <!-- supporting images here-->  
          <?php
          if (true) {
            echo '<div id="event-img">';
            echo '<img src="../img/banner-browse-event.jpg">';
            // echo '<img src="../img/if_twitter_six_107069.png">';
            echo '</div>';
          } 
          ?>

          <!-- Check if tickets left -->
          <?php
          if (true) {
            echo '<button id="regBtn" type="submit" value="Register">Register</button>';

            echo '<div id="regModal" class="modal">';
            echo '<div class="modal-content">';
            echo '<span class="close">&times;</span>';
            echo '<h3>Register information</h3>';
            echo '<br>';
            echo '<form method="post" action="#">';
            echo '<div class="info-form">';
            echo '<input type="hidden" name="eventID" value="eventID"/>';
            echo '<label>Name: <input type="text" name="name" autofocus required/></label>';
            echo '<br><br>';
            echo '<label>E-mail Address: <input type="text" name="email" required/></label>';
            echo '<br><br>';
            echo '<label>Contact Number: <input type="tel" name="phone" pattern="^\d{3}-\d{7}$" required/></label>';
            echo '<br><br>';
            echo '<input type="submit" value="Submit" id="reg-btn">';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
          } 
          else {
            echo '<div id="no-ticket">Sold Out!</div>';
          } 
          ?>
        </div>
      </div>

    </section>
  </div>




</main>
<style type="text/css">

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.info-form label {
  padding: 10px 0px;
}

#reg-btn {
  font-size: 100%;
  font-family: Catamaran;
  margin: 0 auto;
  background-color: #5C6BC0;
  color: #fff;
  font-weight: 400;
  text-decoration: none;
  display: block;
  border: 1.5px solid #283593;
}

#event-view {
  padding: 20px 20px;
  display: block;
  background-color: white;
  font-family: Catamaran;
  font-size: 16px;
}

#event-view h1 {
  font-family: Catamaran;
  font-size: 18px;
  color: #111;
  text-transform: uppercase;
  padding: 30px 0px 10px 0px;
}

#event-view h3 {
  font-family: Catamaran;
  font-size: 18px;
  color: #111;
  text-transform: uppercase;
  padding: 10px 0px 10px 0px;
}

#event-view button {
  font-size: 16px;
  font-family: Catamaran;
  margin: 0 auto;
  background-color: #5C6BC0;
  color: #fff;
  font-weight: 400;
  margin-top: 15px;
  text-decoration: none;
  display: block;
  padding: 6px 8px;
  box-shadow: 1.5px 5px 10px #888888;
  text-transform: uppercase;
  border: 1.5px solid #283593;
  bottom: 14px;
  left: calc(50% - 40px);
}

#event-view button:hover {
  background-color: #3F51B5;
  box-shadow: 2px 7px 12px #888888;
}

#no-ticket {
  font-size: 16px;
  font-family: Catamaran;
  margin: 0 auto;
  color: red;
  text-align: center;
  font-weight: 400;
  margin-top: 30px;
  text-decoration: none;
  display: block;
  padding: 6px 8px;
  border: 1.5px solid red;
  bottom: 14px;
  left: calc(50% - 40px);
  width: 10%
}

#event-img img {
  max-width: 960px;
  min-width: 500px;
  margin: 30px auto 15px auto; 
  display: block;
}

</style>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById('regModal');

// Get the button that opens the modal
var btn = document.getElementById("regBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<?php
include_once 'footer.php';
?>
