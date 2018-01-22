<?php include_once "sidebar.php" ?>
<title>Manage Event @EventTap</title>
<link rel="stylesheet" href="css/manage-event.css">

<div id="event-manager">
  <div id="me-header">
    <p>
        <svg id="menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8">
            <path d="M0 0v1h8v-1h-8zm0 2.97v1h8v-1h-8zm0 3v1h8v-1h-8z" transform="translate(0 1)" />
        </svg>
        <span>Manage Event</span>
    </p>
    <input id="search" type="text" placeholder="search event" />
  </div>
  <div id="me-container">
      <table id="table" cellspacing="0">
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

<div class="modal-mask"></div>
<div id="warn-delete-modal" class="modal modal-medium">
  <div class="modal-header"><p>Warning</p></div>
  <div class="modal-body"><p>Delete selected event? Event that has been deleted <strong>cannot</strong> be recovered.</p></div>
  <div class="modal-footer"><button class="modal-confirm">Confirm</button><button class="modal-close">Cancel</button></div>
</div>

<div id="attendant-modal" class="modal modal-medium">
  <div class="modal-header"><p>Attendant List</p></div>
  <div class="modal-body"></div>
  <div class="modal-footer"><button class="modal-close">Cancel</button></div>
</div>

<script type="text/javascript" src="js/manage-event.js"></script>
