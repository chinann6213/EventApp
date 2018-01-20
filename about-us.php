<?php include_once "sidebar.php" ?>

<link rel="stylesheet" href="css/about-us.css">

<div id="about-us-wrapper">
    <div id="au-header">

        <p>
            <svg id="menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
                <path d="M0 0v1h8v-1h-8zm0 2.97v1h8v-1h-8zm0 3v1h8v-1h-8z" transform="translate(0 1)" />
            </svg>
            <span>About Us</span>
        </p>
    </div>

    <div id="au-container">
        <p>Upload Your Company Logo Here... (Optional)</p>

        <div id="for-logo">
            <label for="org-logo">
                <div id="logo-upload">
                    <img id="preview-logo" />
                    <label id="rem-logo">&times;</label>
                    <div>
                        <p>Drag your logo here</p>
                        <p>or</p>
                        <span>Upload</span>
                        <input id="org-logo" type="file" name="logo" accept="image/*" />
                    </div>
                </div>
            </label>
        </div>


        <div class="form-input" id="event-title">
          <label for="title" class="input-lbl">Enter Your Company Name Here... <span class="required">* required</span></label>
          <input type="text" class="event-input" id="organizer-name" />
        </div>

        <div class="form-input" id="event-title">
          <label for="title" class="input-lbl">Enter Your Contact Number Here... <span class="required">* required</span></label>
          <input type="tel" class="event-input" id="organizer-contact" />
        </div>

        <div class="form-input" id="event-title">
          <label for="title" class="input-lbl">Enter Your Email Here... <span class="required">* required</span></label>
          <input type="email" class="event-input" id="organizer-email" />
        </div>

        <input id="save-info" type="submit" value="Submit" validate />
    </div>

    <script type="text/javascript" src="js/about-us.js"></script>
</div>
