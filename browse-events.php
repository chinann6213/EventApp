<?php
  include_once 'header.php';
?>

<main>
  <?php
    include_once 'index-banner.php'
  ?>
  <div class="container">
    <section class="index-event-list">
      <h1>Events</h1>

      <?php
        require_once('sql/mysqli_connect.php');
        $result_per_page = 10;

        $query = 'SELECT event_id, event_title, event_content, event_start_date, event_end_date FROM event';
        $response = mysqli_query($dbc, $query);
        $number_of_results = mysqli_num_rows($response);

        $number_of_pages = ceil($number_of_results/$result_per_page);

        if(!isset($_GET['page'])) {
          $page = 1;
        } else {
          $page = $_GET['page'];
        }

        $this_page_first_result = ($page-1) * $result_per_page;

        $query = 'SELECT event_id, event_title, event_content, event_start_date, event_end_date FROM event LIMIT ' . $this_page_first_result . ',' . $result_per_page;
        $response = mysqli_query($dbc, $query);

        while ($row = mysqli_fetch_assoc($response)){
          $event = array("eventid" => $row['event_id'],
                          "title" => $row['event_title'],
                          "content" => substr(strip_tags($row['event_content']), 0, 55) . '...', // cut the string to avoid lengthy description on main page.
                          "startdate" => $row['event_start_date'],
                          "enddate" => $row['event_end_date']);

          $events[] = $event;
        }

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

      <div class="center">
        <div class="pagination">
          <?php
            for ($page=1;$page<=$number_of_pages;$page++) {
              echo '<a href="browse-events.php?page=' . $page . '">' . $page . '</a> ';
            }
          ?>
        </div>
      </div>
    </section>
  </div>
</main>

<?php
  include_once 'footer.php';
?>
