$(document).ready(function() {
  // sidebar css effect
  $(".main-item").removeClass("active");
  $("#manage-event svg").removeClass("fill-svg");
  $("#manage-event").addClass("active");
  $("#manage-event svg").addClass("fill-svg");

  $(".sub-item").removeClass("active");
  $("#manage").addClass("active");
  $(".manage-event").slideDown();

  // load event
  var table_item = "";

  $.post("ajax/load_event.php", function(response) {
     var data = JSON.parse(response);
     console.log(data.length)
     for (var i = 0; i < data.length; i ++ ) {
         table_item += '<tr>'
         table_item += '<td data-label="Select" class="select"><label><input id="'+data[i]['event_id']+'" class="styled-checkbox" type="checkbox" /><label for="'+data[i]['event_id']+'"></label></label></td>';
         table_item += '<td data-label="Events" class="event-detail">';
         table_item += '<p class="e_t">'+data[i]['event_title']+'</p>';
         table_item += '<p class="event-date">From '+data[i]['event_start_date']+' to '+data[i]['event_end_date']+'</p>';
         table_item += '<p class="event-content">'+data[i]['event_content']+'</p>';
         table_item += '</td>'
         table_item += '<td data-label="Location">'+data[i]['event_location']+'</td>'
         table_item += '<td data-label="Created">'+data[i]['event_created_time']+'</td>'
         table_item += '<td data-label="Action"><button class="edit" value="'+data[i]['event_id']+'">Edit</button><span> | </span><button class="delete" value="'+data[i]['event_id']+'">Delete</button></td>'
         table_item += '</tr>'
     }
     $("#event-body").html("").append(table_item);
     var x = document.getElementById("event-body").childNodes;
     for (var i = 0; i < x.length; i ++) {
         x[i].childNodes[0].getElementsByTagName("input")[0].checked = true
         console.log(x[i].childNodes[0].getElementsByTagName("input")[0])
     }
  })

  // edit event
  $(document).on("click", ".edit", function() {
      location.href = "edit-event.php?event_id=" + $(this).attr("value");
  })

    const mq = window.matchMedia( "(max-width: 320px)" );
    if (mq.matches) {
        $("#me-container").prepend($("#search"))
    } else {
        // window width is less than 500px
    }




})
