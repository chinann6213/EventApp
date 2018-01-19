
function initMap() {
  var myLatLng = {lat: parseFloat(mylat), lng: parseFloat(mylng)};
  var mapProp = new google.maps.Map(document.getElementById("googleMap"), {
    center: myLatLng,
    zoom: 15,
    scrollwheel: false
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: mapProp
  });
}

function inputValidation(name, email, phone) {
  var name_bool = [name.length > 0 ? true : false]
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var regex2 = /^\d{3}-\d{7}$/;
  return name_bool, regex.test(email), regex2.test(phone) 
}


$(document).ready(function() {
  var datetime = moment(startdate).format("dddd, MMMM Do YYYY") + " at " + starttime + " - " + moment(enddate).format("dddd, MMMM Do YYYY");
  $("#event-datetime").html(function(){
    return datetime;
  });

  google.maps.event.addDomListener(window, 'load', initMap);
  // When the user clicks on the button, open the modal 
  $("#regBtn").click(function() {
    $(".modal").css("display", "block");
    $(".modal-mask").css("display", "block");
    $('html, body').animate({
      scrollTop: $(".container").offset().top
    }, 700);
  })

  // When the user clicks anywhere outside of the modal, close it
  $(".modal-mask").click(function() {
    $(".modal").hide();
    $(".modal-mask").hide();
  })

  // Close button
  $(".modal-close").click(function() {
    $(".modal").hide();
    $(".modal-mask").hide();
  })

  // materialized text input
  $(document).on("focus", ".event-input", function(){
    $(this).parent().addClass("input-active input-complete");
  });

  $(document).on("focusout", ".event-input", function(){
    if($(this).val() === "")
      $(this).parent().removeClass("input-complete");
    $(this).parent().removeClass("input-active");
  })


  // Register
  $("#reg-submit").click(function() {
    var id = event_id;
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    if(inputValidation(name, email, phone)) {
      $.post("ajax/register.php", {
        action: "create",     
        id: id,
        name: name,
        email: email,
        phone: phone,
      }, function(response) {
      // redirect to ticket page
      var ticket_id = response;
      alert(response);
      location.href = "../ticket.php?event_id="+event_id+"&ticket_id="+ticket_id;
    })
    }


    
  })

})

