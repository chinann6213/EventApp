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
                <th id="check-table"><input id="select-all" class="styled-checkbox" type="checkbox" /><label for="select-all"></label></th>
                <th valign="middle" id="event-detail"><p>Events</p></th>
                <th id="event-location"><p>Location</p></th>
                <th id="event-date"><p>Date Created</p></th>
                <th id="event-action"><p>Action</p></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="select"><label><input id="item-1" class="styled-checkbox" type="checkbox" /><label for="item-1"></label></label></td>
                <td class="event-detail">
                    <h4>Title</h4>
                    <p class="event-date">From 18 January 2018 to 20 Jnuary 2018</p>
                    <p class="event-content">Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123</p>
                </td>
                <td>Kuala Lumpur</td>
                <td>20 January 2018, 20:02</td>
                <td><button class="edit">Edit</button><span> | </span><button class="delete">Delete</button></td>
            </tr>

            <tr>
                <td class="select"><label><input id="item-2" class="styled-checkbox" type="checkbox" /><label for="item-2"></label></label></td>
                <td class="event-detail">
                    <h4>Title</h4>
                    <p class="event-date">From 18 January 2018 to 20 Jnuary 2018</p>
                    <p class="event-content">Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123</p>
                </td>
                <td>Kuala Lumpur</td>
                <td>20 January 2018, 20:02</td>
                <td><button class="edit">Edit</button><span> | </span><button class="delete">Delete</button></td>
            </tr>

            <tr>
                <td class="select"><label><input id="select-all" class="styled-checkbox" type="checkbox" /><label for="select-all"></label></label></td>
                <td class="event-detail">
                    <h4>Title</h4>
                    <p class="event-date">From 18 January 2018 to 20 Jnuary 2018</p>
                    <p class="event-content">Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123 Content 123123123</p>
                </td>
                <td>Kuala Lumpur</td>
                <td>20 January 2018, 20:02</td>
                <td><button class="edit">Edit</button><span> | </span><button class="delete">Delete</button></td>
            </tr>
        </tbody>
      </table>
  </div>
</div>

<script type="text/javascript" src="js/manage-event.js"></script>
