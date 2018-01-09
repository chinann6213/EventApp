<?php
  include_once 'header.php';
?>

<main>
  <section class="index-banner">
    <div class="vertical-center">
      <h1>Welcome to EventApp</h1>
      <h2>Find your next event here !</h2>
      <div class="search-container">
        <form action="" method="post">
          <input type="text" placeholder="Search for next event.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </section>
  <div class="wrapper">
    <section class="index-event-list">
      <h1>Events for you</h1>
    </section>
  </div>
</main>

<?php
  include_once 'footer.php';
?>
