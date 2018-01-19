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
         table_item += '<td class="select"><label><input id="'+data[i]['event_id']+'" class="styled-checkbox" type="checkbox" /><label for="'+data[i]['event_id']+'"></label></label></td>';
         table_item += '<td class="event-detail">';
         table_item += '<h4>'+data[i]['event_title']+'</h4>';
         table_item += '<p class="event-date">From '+data[i]['event_start_date']+' to '+data[i]['event_end_date']+'</p>';
         table_item += '<p class="event-content">'+data[i]['event_content']+'</p>';
         table_item += '</td>'
         table_item += '<td>'+data[i]['location']+'</td>'
         table_item += '<td>'+data[i]['event_created_time']+'</td>'
         table_item += '<td><button class="edit" value="'+data[i]['event_id']+'">Edit</button><span> | </span><button class="delete" value="'+data[i]['event_id']+'">Delete</button></td>'
         table_item += '</tr>'
     }
     $("#event-body").html("").append(table_item);
  })
})
