<?php include_once "sidebar.php" ?>

<link rel="stylesheet" href="css/about-us.css">

<div id="about-us-wrapper">
    <div id="au-header">
        <p>About Us</p>
    </div>

    <div id="au-container">
        <div id="logo-upload">
            <label id="rem-logo">&times;</label>
            <img id="preview-logo" />
            <label>
                <p>Drag your logo here</p>
                <p>or</p>
                <span>Upload</span>
                <input id="org-logo" type="file" name="logo" accept="image/*" />
            </label>
        </div>

        <div class="form-input" id="event-title">
          <label for="title" class="input-lbl">Enter Your Company Name Here... </label>
          <input type="text" class="event-input" id="organizer-name" />
        </div>

        <div class="form-input" id="event-title">
          <label for="title" class="input-lbl">Enter Your Contact Number Here... </label>
          <input type="tel" class="event-input" id="organizer-contact" />
        </div>

        <div class="form-input" id="event-title">
          <label for="title" class="input-lbl">Enter Your Email Here... </label>
          <input type="email" class="event-input" id="organizer-email" />
        </div>

        <input id="save-info" type="submit" value="Submit" validate />
    </div>

    <script type="text/javascript" src="js/about-us.js"></script>
</div>