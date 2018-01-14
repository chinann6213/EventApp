<?php
  include_once 'header.php';
  require_once('sql/mysqli_connect.php');

  DEFINE ("maxQuery", 8);

  $query = "SELECT event_title, event_content, event_start_date, event_end_date
  FROM event ORDER BY event_id DESC LIMIT 8";

  $response = @mysqli_query($dbc, $query);

  $title = array();
  $description = array();
  $startDate = array();
  $endDate = array();

  while ($row = mysqli_fetch_assoc($response)){
    $title[] = $row['event_title'];
    $description[] = $row['event_content'];
    $startDate[] = $row['event_start_date'];
    $endDate[] = $row['event_end_date'];
  }

  function cutString(&$item){
    $item = substr($item, 0, 55) . '...';
  }

  array_walk($description, "cutString");
?>

<main>
  <?php
    include_once 'index-banner.php'
  ?>
  <div class="container">
    <section class="index-event-list">
      <h1>Events for you</h1>

      <?php
        $loopCount = 0;

        foreach($title as $e_title){
          if (($loopCount % 2) == 0){
            echo '<div class="row">';
          }

          echo '<div class="column">';
          echo '<div id="event-card">';
          echo '<h1>' . $e_title . '</h1>';
          echo '<h2>' . $description[$loopCount] . '</h2>';
          echo '<h3> Date: ' . $startDate[$loopCount] . ' - ' . $endDate[$loopCount] . '</h3>';
          echo '<button type="submit" value="Register">Register</button>';
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
