<?php
  include_once 'header.php';
  require_once('sql/mysqli_connect.php');

  $query = "SELECT event_id, event_title, event_content, event_start_date, event_end_date
  FROM event ORDER BY event_id DESC LIMIT 8";

  $response = @mysqli_query($dbc, $query);

  $events = array();

  // store the result of query into a two dimensional array
  while ($row = mysqli_fetch_assoc($response)){
    $event = array("eventid" => $row['event_id'],
                    "title" => $row['event_title'],
                    "content" => substr(strip_tags($row['event_content']), 0, 55) . '...', // cut the string to avoid lengthy description on main page.
                    "startdate" => $row['event_start_date'],
                    "enddate" => $row['event_end_date']);

    $events[] = $event;
  }

?>

<main>
  <?php
    include_once 'index-banner.php'
  ?>
  <div class="container">
    <section class="index-event-list">
      <h1>Upcoming Events</h1>

      <?php
        $loopCount = 0; // loopcount to create new row and enclosed row.

        foreach($events as $event){
          if (($loopCount % 2) == 0){
            echo '<div class="row">';
          }

          echo '<div class="column">';
          echo '<div id="event-card">';
          echo '<h1>' . $event['title'] . '</h1>';
          echo '<h2>' . $event['content'] . '</h2>';
          echo '<h3> Date: From ' . $event['startdate'] . ' To ' . $event['enddate']. '</h3>';
          echo '<a href="view-event.php?event_id=' . $event['eventid'] .  '"><button type="submit" value="Register">Register</button></a>';
          echo '</div> </div>';

          if(($loopCount % 2) != 0){
            echo '</div>';
          }

          $loopCount = $loopCount + 1;
        }
      ?>

    </section>

    <a href="browse-events.php" class="see-more-btn">See More</a>
  </div>
</main>

<?php
  include_once 'footer.php';
?>
