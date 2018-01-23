$(document).ready(function() {
  // sidebar css effect
  $(".main-item").removeClass("active");
  $("#manage-event svg").removeClass("fill-svg");
  $("#manage-event").addClass("active");
  $("#manage-event svg").addClass("fill-svg");

  $(".sub-item").removeClass("active");
  $("#manage").addClass("active");
  $(".manage-event").slideDown();

  $(document).on("click", "ul", function() {
      $(this).find("li").slideToggle();
  })
  $(document).on("click", "li", function() {
      $("ul li:first-child").html($(this).html())
  })
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
         table_item += '<td class="event-location" data-label="Location">'+data[i]['event_location']+'</td>'
         table_item += '<td class="event-time" data-label="Created">'+data[i]['event_created_time']+"<br>"+data[i]['event_status']+'</td>'
         table_item += '<td data-label="Action"><ul class="action-dropdown"><li value="">Select…</li><li value="">Select…</li><li class="edit" value="'+data[i]['event_id']+'">Edit</li><li class="delete" value="'+ data[i]['event_id'] +'">Delete</li><li class="view-attendee" value="'+ data[i]['event_id'] +'">View Attendee</li></ul></td>'
         table_item += '</tr>'
     }
     $("#event-body").html("").append(table_item);
  })

  // select all
  document.getElementById("select-all").onclick  = function() {
      var x = document.getElementById("event-body").childNodes;
      for (var i = 0; i < x.length; i ++) {
          if (x[i].childNodes[0].getElementsByTagName("input")[0].checked == true) {
              x[i].childNodes[0].getElementsByTagName("input")[0].checked = false
          }
          else {
              x[i].childNodes[0].getElementsByTagName("input")[0].checked = true
          }
      }
  }

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

    // search table
    function searchTable() {

      var input, filter, table, tr, td, i;
      input = document.getElementById("search");
      filter = input.value.toUpperCase();
      body = document.getElementById("event-body");
      tr = body.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td_event = tr[i].getElementsByTagName("td")[0];
        td_location = tr[i].getElementsByTagName("td")[2];
        td_date = tr[i].getElementsByTagName("td")[3];
          if (td_event.innerHTML.toUpperCase().indexOf(filter) > -1 || td_location.innerHTML.toUpperCase().indexOf(filter) > -1 || td_date.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
      }
    }
    document.getElementById("search").onkeyup = searchTable;

    // delete event
    $(document).on("click", ".delete", function() {
        var dom = $(this).parent().parent().parent();
        var eid = $(this).val();
        $(".modal-mask").show();
        $("#warn-delete-modal").slideDown();
        $(".modal-confirm").click(function() {
            $.post('ajax/delete_event.php', {
                event_id: eid
            }, function(response) {
                if (response == "SUCCESS") {
                    dom.remove();
                }
                else {
                    alert("Unable to delete, please try again later or contact us.");
                }
            })
        })
    })

    // modal
    $(".modal-close, .modal-confirm").click(function() {
      $(".modal").fadeOut();
      $(".modal-mask").hide();
    })

    $(document).on("click", ".view-attendee", function() {
        var eid = $(this).val();
        $.post('ajax/view_attendant.php', {
            action: "view",
            event_id: eid
        }, function(response) {
            $("#attendant-modal").find(".modal-body").html("").append(response);
            $(".modal-mask").show();
            $("#attendant-modal").slideDown();
        })
    })

})
