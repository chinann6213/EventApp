<?php
  include_once 'header.php';
  require_once('sql/mysqli_connect.php');

  if (isset($_POST['search-btn'])) {
    $search = mysqli_real_escape_string($dbc, $_POST['search']);
    $sql = "SELECT * FROM event WHERE event_title LIKE '%$search%' OR event_content LIKE
        '%$search%' OR event_author LIKE '%$search%' OR event_meta_title LIKE '%$search%'
        OR event_meta_description LIKE '%$search%'";
    $result = mysqli_query($dbc, $sql);

    $queryResult = mysqli_num_rows($result);

    $eventsResult = array();

    if($queryResult > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $eventResult = array("title" => $row['event_title'],
                        "content" => substr($row['event_content'], 0, 55) . '...', // cut the string to avoid lengthy description on main page.
                        "startdate" => $row['event_start_date'],
                        "enddate" => $row['event_end_date']);

        $eventsResult[] = $eventResult;
      }
    } else {

    }
  }
?>

  <main>
    <?php
      include_once 'index-banner.php'
    ?>
    <div class="container">
      <section class="index-event-list">
        <h1>Search Results</h1>

        <?php
          $loopCount = 0; // loopcount to create new row and enclosed row.

          if(!$queryResult > 0){
            echo '<h2 style="text-align: center; font-family: Catamaran; font-size:20px;
            "> No search result found <h2>';
          }

          foreach($eventsResult as $event){
            if (($loopCount % 2) == 0){
              echo '<div class="row">';
            }

            echo '<div class="column">';
            echo '<div id="event-card">';
            echo '<h1>' . $event['title'] . '</h1>';
            echo '<h2>' . $event['content'] . '</h2>';
            echo '<h3> Date: ' . $event['startdate'] . ' - ' . $event['enddate']. '</h3>';
            echo '<button type="submit" value="Register">Register</button>';
            echo '</div> </div>';

            if(($loopCount % 2) != 0){
              echo '</div>';
            }

            $loopCount = $loopCount + 1;
          }
        ?>

      </section>

      <a href="browse-events.php" class="see-more-btn">Browse Events</a>
    </div>
  </main>

  <?php
    include_once 'footer.php';
  ?>
