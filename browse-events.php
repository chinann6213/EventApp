<?php
  include_once 'header.php';
?>

<main>
  <section class="index-banner">
    <div class="vertical-center">
      <h1>Events For You</h1>
      <h2>Find your next event here !</h2>
      <div class="search-container">
        <form action="" method="post">
          <input type="text" placeholder="Search for next event.." name="search"/>
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </section>

  <div class="container">
    <section class="index-event-list">
      <h1>Events</h1>

      <!-- query for all events and list out here from database --> 

    </section>
  </div>
</main>

<?php
  include_once 'footer.php';
?>
