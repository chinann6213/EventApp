<?php include_once "sidebar.php" ?>

<link rel="stylesheet" href="css/manage-event.css">

<div id="event-manager">
  <div id="me-header">
    <p>Manage Event</p>
    <input id="search" type="text" placeholder="search your event" />
  </div>
  <div id="me-container">
      <table cellspacing="0">
        <thead>
            <tr>
                <th scope="col" id="check-table"><input id="select-all" class="styled-checkbox" type="checkbox" /><label for="select-all"></label></th>
                <th scope="col" id="event-detail"><p>Events</p></th>
                <th scope="col" id="event-location"><p>Location</p></th>
                <th scope="col" id="event-date"><p>Date Created</p></th>
                <th scope="col" id="event-action"><p>Action</p></th>
            </tr>
        </thead>
        <tbody id="event-body">
        </tbody>
      </table>
  </div>
</div>

<script type="text/javascript" src="js/manage-event.js"></script>
