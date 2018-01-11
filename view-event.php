<?php
include_once 'header.php';
?>

<main>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
          <!-- images here-->

          <!-- Check if General User or Admin -->
          <?php if(True): ?>
            <button type="submit" value="Register">Register</button>
          <?php endif; ?>
        </div>
      </div>

    </section>
  </div>
</main>
<style type="text/css">

#event-view {
  /*box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);*/
  /*transition: 0.3s;*/
  padding: 20px 20px;
  display: block;
  background-color: white;
  font-family: 'Roboto', sans-serif;
}

#event-view hr {
  /*background-color: red;*/
}
/*

/*#event-card:hover {
  box-shadow: 0 10px 18px 0 rgba(0,0,0,0.2);
  }*/

  #event-view h1 {
    font-family: Catamaran;
    /*color: #3F51B5;*/
    font-size: 18px;
    color: #111;
    text-transform: uppercase;
    padding: 30px 0px 10px 0px;
  }

  #event-view button {
    /*position: absolute;*/
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

</style>


<?php
include_once 'footer.php';
?>
