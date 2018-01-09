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

    <p class="tell-event-detail">Pick a starting time for your event here: </p>
    <div id="time-picker" onselectstart='return false;' >
      <div class="hour time">
        <svg class="minus-time" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
          <path d="M4 0l-4 4 1.5 1.5 2.5-2.5 2.5 2.5 1.5-1.5-4-4z" transform="translate(0 1)" />
        </svg>
        <input id="hour" onClick="this.setSelectionRange(0, this.value.length)" type="text" min="1" max="12" value="09" />
        <svg class="add-time" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
          <path d="M1.5 0l-1.5 1.5 4 4 4-4-1.5-1.5-2.5 2.5-2.5-2.5z" transform="translate(0 1)" />
        </svg>
      </div>
      <div class="minute time">
        <svg class="minus-time" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
          <path d="M4 0l-4 4 1.5 1.5 2.5-2.5 2.5 2.5 1.5-1.5-4-4z" transform="translate(0 1)" />
        </svg>
        <input id="minute" onClick="this.setSelectionRange(0, this.value.length)" type="text" min="0" max="59" value="00" />
        <svg class="add-time" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
          <path d="M1.5 0l-1.5 1.5 4 4 4-4-1.5-1.5-2.5 2.5-2.5-2.5z" transform="translate(0 1)" />
        </svg>
      </div>
      <div class="time"><button id="time-am-pm">AM</button></div>
    </div>

    <div style="clear:both;"></div>

    <div class="form-input" id="event-title">
      <label for="title" class="input-lbl">Enter Your Event Title Here... </label>
      <input type="text" class="event-input" id="title" />
    </div>

    <p class="tell-event-detail">Tell your event details here... </p>
    <div id="summernote"></div>

    <p class="tell-event-detail">Add supporting images for your event here... </p>

    <div id="temp-upload"></div>

    <div style="clear:both;"></div>
    <div class="uploader-wrapper"><label id="upload-img" for="image-uploader">Add Images</label></div>
    <iframe style="display:none;" width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
    <form id="image-form" action="ajax/upload_images.php" method="POST" target="dummyframe" enctype="multipart/form-data">
      <input id="image-uploader" name="image[]" type="file" accept="image/*" multiple />
    </form>

    <p class="tell-event-detail">Set your event location here... </p>
    <input type="text" class="event-input" id="location" placeholder="Enter your event location" />
    <div id="map"></div>

    <div><button id="create-event-button">Create Event</button></div>
  </div>
</div>

<div class="modal-mask"></div>
<div id="inform-created-modal" class="modal modal-medium">
  <div class="modal-header"><p>Event Created.</p></div>
  <div class="modal-body"><p>Please proceed to <strong><a>Manage Event</a></strong> if you need to do any changes to the event created. Thank you.</p></div>
  <div class="modal-footer"><button class="modal-close">Close</button></div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDNih61ibtoFGiQCdQhlNrC_zdMdZtcIk&libraries=places"></script>
<script type="text/javascript" src="js/create-event.js"></script>
</body>
</html>
