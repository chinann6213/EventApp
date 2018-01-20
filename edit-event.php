<?php include_once "sidebar.php";

session_start();

$user = "chinann6213@gmail.com"; // $_SESSION['user'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "event_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$event_id = $_GET['event_id'];

$sql = "SELECT * FROM event WHERE event_author = '$user' AND event_id='$event_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($data = mysqli_fetch_assoc($result)) {
        $event_id = $data['event_id'];
        $event_title = $data['event_title'];
        $event_content = $data['event_content'];
        $event_start_date = $data['event_start_date'];
        $event_end_date = $data['event_end_date'];
        $event_start_time = $data['event_start_time'];
        $event_longitude = $data['event_longitude'];
        $event_latitude = $data['event_latitude'];
        $event_location = $data['location'];
        $event_participant = $data['participant'];
    }
    $sql = "SELECT * FROM gallery WHERE img_owner = '$user' AND event_id='$event_id'";
    $result = mysqli_query($conn, $sql);
    $img_array = array();
    while ($data = mysqli_fetch_assoc($result)) {
        $img = array(
            "src" => $data['img_src'],
            "alt" => $data['img_alt'],
            "cap" => $data['img_cap']
        );
        $img_array[] = $img;
    }
    $img_array = json_encode($img_array);
} else {
    echo mysqli_error($conn);
}

?>
<script>
    var e_id = "<?php echo $event_id; ?>";
    var e_title = "<?php echo $event_title; ?>";
    var e_content = '<?php echo $event_content; ?>';
    var e_sdate = "<?php echo $event_start_date; ?>";
    var e_edate = "<?php echo $event_end_date; ?>";
    var e_stime = "<?php echo $event_start_time; ?>";
    var e_long = "<?php echo $event_longitude; ?>";
    var e_lat = "<?php echo $event_latitude; ?>";
    var e_loc = "<?php echo $event_location; ?>";
    var e_part = "<?php echo $event_participant; ?>";
    var e_imgarr = <?php echo $img_array; ?>;

</script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
<link rel="stylesheet" href="css/create-event.css">
<div id="create-event">
  <div id="ce-header">
      <p>
          <svg id="menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
              <path d="M0 0v1h8v-1h-8zm0 2.97v1h8v-1h-8zm0 3v1h8v-1h-8z" transform="translate(0 1)" />
          </svg>
          <span>Edit Event</span>
      </p>
    <button id="save-event-button">Save Event</button>
  </div>
  <div id="ce-container">
    <div>
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
    </div>

    <div>
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
      <label for="title" class="input-lbl">Enter Your Event Title Here... </label>
      <input type="text" class="event-input" id="title" />
    </div>

    <div>
      <p class="tell-event-detail">Tell your event details here... </p>
      <div id="summernote"></div>
    </div>

    <div>
        <p class="tell-event-detail">Set the maximum number of participants here...</p>
        <input type="number" id="participant" value=30 />
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
      <p class="tell-event-detail">Set your event location here... </p>
      <input type="text" class="event-input" id="location" placeholder="Enter your event location" />
      <div id="map"></div>
    </div>
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
<script type="text/javascript" src="js/edit-event.js"></script>
</body>
</html>
