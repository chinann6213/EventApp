<?php include_once "sidebar.php" ?>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
<link rel="stylesheet" href="css/create-event.css">
<div id="create-event">
  <div id="ce-header"><p>Create Event</p></div>
  <div id="ce-container">
    <p class="tell-event-detail">Set your event date here... </p>
    <div class="event-date">
      <span>From: </span><span class="date-txt" id="from-date"></span>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
        <path d="M0 0l4 4 4-4h-8z" transform="translate(0 2)" />
      </svg>
      <div id="from-calendar" class="calendar"></div>
    </div>

    <div class="event-date">
      <span>To: </span><span class="date-txt" id="to-date"></span>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
        <path d="M0 0l4 4 4-4h-8z" transform="translate(0 2)" />
      </svg>
      <div id="to-calendar" class="calendar"></div>
    </div>

    <div class="form-input" id="event-title">
      <label for="title" class="input-lbl">Enter Your Event Title Here... </label>
      <input type="text" class="event-input" id="title" />
    </div>

    <p class="tell-event-detail">Tell your event details here... </p>
    <div id="summernote"></div>

    <p class="tell-event-detail">Add supporting images for your event here... </p>

    <div id="temp-upload">
      <div class="temp-img-card">
        <div class="temp-img"><img src="images/chinann6213/moon-3031977_1920.jpg" /></div>
        <div class="temp-img-details">
          <div class="form-input">
            <label for="title" class="input-lbl">Image Alt </label>
            <input type="text" class="event-input" />
          </div>
          <div class="form-input">
            <label for="title" class="input-lbl">Image Caption </label>
            <input type="text" class="event-input" />
          </div>
        </div>
      </div>

      <div class="divider"></div>
      <div class="temp-img-card">
        <div class="temp-img"><img src="images/chinann6213/moon-3031977_1920.jpg" /></div>
        <div class="temp-img-details">
          <div class="form-input">
            <label for="title" class="input-lbl">Image Alt </label>
            <input type="text" class="event-input" />
          </div>
          <div class="form-input">
            <label for="title" class="input-lbl">Image Caption </label>
            <input type="text" class="event-input" />
          </div>
        </div>
      </div>

      <div class="temp-img-card">
        <div class="temp-img"><img src="images/chinann6213/moon-3031977_1920.jpg" /></div>
        <div class="temp-img-details">
          <div class="form-input">
            <label for="title" class="input-lbl">Image Alt </label>
            <input type="text" class="event-input" />
          </div>
          <div class="form-input">
            <label for="title" class="input-lbl">Image Caption </label>
            <input type="text" class="event-input" />
          </div>
        </div>
      </div>
      <!-- <div style="clear:both;"></div> -->
    </div>

    <div style="clear:both;"></div>
    <div class="uploader-wrapper"><label id="upload-img" for="image-uploader">Add Images</label></div>
    <iframe style="display:none;" width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
    <form id="image-form" action="ajax/upload_images.php" method="POST" target="dummyframe" enctype="multipart/form-data">
      <input id="image-uploader" name="image[]" type="file" accept="image/*" multiple />
    </form>

    <!-- <p class="tell-event-detail">Set your event location here... </p>
    <p>write something herer</p> -->
  </div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script type="text/javascript" src="js/create-event.js"></script>
</body>
</html>
