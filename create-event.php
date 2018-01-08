<?php include_once "sidebar.php" ?>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
<link rel="stylesheet" href="css/create-event.css">
<div id="create-event">
  <div id="ce-header"><p>Create Event</p></div>
  <div id="ce-container">
    <div class="form-input" id="event-title">
      <label for="title" class="input-lbl">Enter Your Event Title Here... </label>
      <input type="text" class="event-input" id="title" />
    </div>

    <p class="tell-event-detail">Tell your event details here... </p>
    <div id="summernote"></div>

    <p class="tell-event-detail">Add supporting images for your event here... </p>
  </div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
<script type="text/javascript" src="js/create-event.js"></script>
</body>
</html>
