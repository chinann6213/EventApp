<?php
include_once 'header.php';
?>


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
<style type="text/css">

#event-view { padding: 20px 20px; display: block; background-color: white; font-family: Catamaran; font-size: 16px; } 
#event-view h1 { font-family: Catamaran; font-size: 18px; color: #111; text-transform: uppercase; padding: 30px 0px 10px 0px; } 

#googleMap { width:70%; height:300px; }

#regBtn { font-size: 16px; font-family: Catamaran; margin: 0 auto; background-color: #5C6BC0; color: #fff; font-weight: 400; margin-top: 15px; text-decoration: none; display: block; padding: 6px 8px; box-shadow: 1.5px 5px 10px #888888; text-transform: uppercase; border: 1.5px solid #283593; bottom: 14px; left: calc(50% - 40px); }
#regBtn:hover { background-color: #3F51B5; box-shadow: 2px 7px 12px #888888; }

#no-ticket { font-size: 16px; font-family: Catamaran; margin: 0 auto; color: red; text-align: center; font-weight: 400; margin-top: 30px; text-decoration: none; display: block; padding: 6px 8px; border: 1.5px solid red; bottom: 14px; left: calc(50% - 40px); width: 10%; }

/*Get it from https://codepen.io/dudleystorey/pen/Kgofa*/
#event-img { padding: .5vw; font-size: 0; display: -ms-flexbox; -ms-flex-wrap: wrap; -ms-flex-direction: column; -webkit-flex-flow: row wrap; flex-flow: row wrap; display: -webkit-box; display: flex; }
#event-img div { -webkit-box-flex: auto; -ms-flex: auto; flex: auto; width: 200px; margin: .5vw; }
#event-img div img { width: 100%; height: auto; }
@media screen and (max-width: 400px) {
  #event-img div { margin: 0; }
  #event-img { padding: 0; }  
}

.modal-mask { display: none; z-index: 2; background: rgba(0,0,0,0.8); position: fixed; left: 0; top: 0; width: 100%; height: 100%; }
.modal-medium { display: none; z-index: 3; padding: 1.5rem;  position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); width: 40%; background: #fff; }
.modal-header p { color: #673AB7; line-height: 100%; font-size: 2rem; font-weight: bold; }
.modal-body { margin: 1rem 0 2rem 0; }
.modal-footer button { float: right; background: #673AB7; width: 100px; height: 40px; font-size: 1rem; color: #fff; }

.form-input { padding: 1rem 0 0 0; position: relative; }
.input-lbl { font-weight: bold; display: block; font-size: 1rem; transform: translateY(20px); color: #7E57C2; transition: all 0.5s; }
.event-input { position: relative; background: transparent; width: 100%; border: none; outline: none; padding: 0.5rem 0; font-size: 1rem; }
.form-input::after, .form-input::before { content: ""; position: absolute; display: block; width: 100%; height: 2px; background-color: #7E57C2; bottom: 0; left: 0; transition: all 0.5s; }
.form-input::after { background-color: #000; transform: scaleX(0); }
.input-active .input-lbl { color: #000; }
.input-active::after { transform: scaleX(1); }
.input-complete .input-lbl { font-size: 16px; transform: translateY(0); }

</style>

<script type="text/javascript">

  function initMap() {
    var myLatLng = {lat: 41.508742, lng: 0.120850};
    var mapProp = new google.maps.Map(document.getElementById("googleMap"), {
      center: myLatLng,
      zoom: 5,
      scrollwheel: false
    });
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: mapProp
    });
  }

  // When the user clicks on the button, open the modal 
  $("#regBtn").click(function() {
    $(".modal").css("display", "block");
    $(".modal-mask").css("display", "block");
    $('html, body').animate({
      scrollTop: $(".container").offset().top
    }, 700);
  })

    // When the user clicks anywhere outside of the modal, close it
    $(".modal-mask").click(function() {
      $(".modal").hide();
      $(".modal-mask").hide();
    })

    // Close button
    $(".modal-close").click(function() {
      $(".modal").hide();
      $(".modal-mask").hide();
    })

    // materialized text input
    $(document).on("focus", ".event-input", function(){
      $(this).parent().addClass("input-active input-complete");
    });

    $(document).on("focusout", ".event-input", function(){
      if($(this).val() === "")
        $(this).parent().removeClass("input-complete");
      $(this).parent().removeClass("input-active");
    })


  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWAtE05RIq6Wd1xmHsLd2BXbC2fd0xhs&callback=initMap"></script>

  <?php
  include_once 'footer.php';
  ?>
