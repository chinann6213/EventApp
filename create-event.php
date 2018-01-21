<?php include_once "sidebar.php" ?>
<title>Create Event @EventTap</title>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
<link rel="stylesheet" href="css/create-event.css">
<div id="create-event">
  <div id="ce-header">
    <p>
        <svg id="menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
            <path d="M0 0v1h8v-1h-8zm0 2.97v1h8v-1h-8zm0 3v1h8v-1h-8z" transform="translate(0 1)" />
        </svg>
        <span>Create Event</span>
    </p>
    <button id="create-event-button">Create Event</button>
  </div>
  <div id="ce-container">
    <div>
      <p class="tell-event-detail">Set your event date here... <span class="required">* required</span></p>
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
    </div>

    <div>
      <p class="tell-event-detail">Pick a starting time for your event here: <span class="required">* required</span></p>
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
        <div class="time colon">:</div>
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
    </div>

    <div style="clear:both;"></div>

    <div class="form-input" id="event-title">
      <label for="title" class="input-lbl">Enter Your Event Title Here... <span class="required">* required</span></label>
      <input type="text" class="event-input" id="title" />
    </div>

    <div>
      <p class="tell-event-detail">Tell your event details here... <span class="required">* required</span></p>
      <div id="summernote"></div>
    </div>

    <div>
        <p class="tell-event-detail">Set the maximum number of participants here... <span class="required">* required</span></p>
        <input type="number" id="participant" value=30 />
    </div>

    <div>
        <p class="tell-event-detail">Set the your event category for searching here... (Optional)</p>
        <span class="required">Note: Maximum of 4 categories available without <strong>spaces</strong> and <strong>symbols</strong>.</span>
        <div id="event-category">
            <div class="event-category">
                <span>Category : </span>
                <input type="text" /><svg class="remove-category" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
                  <path d="M3 0c-.55 0-1 .45-1 1h-1c-.55 0-1 .45-1 1h7c0-.55-.45-1-1-1h-1c0-.55-.45-1-1-1h-1zm-2 3v4.81c0 .11.08.19.19.19h4.63c.11 0 .19-.08.19-.19v-4.81h-1v3.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-3.5h-1v3.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-3.5h-1z" />
                </svg><svg class="add-category" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
                  <path d="M3 0v3h-3v2h3v3h2v-3h3v-2h-3v-3h-2z" />
                </svg>
            </div>
        </div>
    </div>

    <div>
      <p class="tell-event-detail">Add supporting images for your event here... </p>
      <div id="temp-upload"></div>
      <div style="clear:both;"></div>
      <div>
        <div class="uploader-wrapper"><label id="upload-img" for="image-uploader">Add Images</label></div>
        <iframe style="display:none;" width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
        <form id="image-form" action="ajax/upload_images.php" method="POST" target="dummyframe" enctype="multipart/form-data">
          <input id="image-uploader" name="image[]" type="file" accept="image/*" multiple />
        </form>
      </div>
    </div>

    <div>
      <p class="tell-event-detail">Set your event location here... <span class="required">* required</span></p>
      <input type="text" class="event-input" id="location" placeholder="Enter your event location" />
      <div id="map"></div>
    </div>
  </div>
</div>

<div class="modal-mask"></div>
<div id="inform-created-modal" class="modal modal-medium">
  <div class="modal-header"><p>Event Created</p></div>
  <div class="modal-body"><p>Please proceed to <strong><a href="manage-event.php">Manage Event</a></strong> if you need to do any further changes to the event created.</p></div>
  <div class="modal-footer"><button class="modal-close">Close</button></div>
</div>

<div id="alert-about-modal" class="modal modal-medium">
  <div class="modal-header"><p>Alert</p></div>
  <div class="modal-body"><p>Please fill up your company information at <strong><a target="blank" href="about-us.php">About Us</a></strong> section before creating any events.</p></div>
  <div class="modal-footer"><a target="blank" href="about-us.php"><button class="modal-redirect">Fill Up</button></a><button class="modal-close">Cancel</button></div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDNih61ibtoFGiQCdQhlNrC_zdMdZtcIk&libraries=places"></script>
<script type="text/javascript" src="js/create-event.js"></script>
</body>
</html>
