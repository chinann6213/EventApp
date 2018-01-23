
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

  if (name_bool[0] === false) return "Please insert your name";
  else if (!regex.test(email)) return "Please insert a valid email. Eg JohnDoe@email.com";
  else if (!regex2.test(phone)) return "Please insert a contact number. Eg 012-3456789 ";
  else return true;
}


$(document).ready(function() {
  var datetime = moment(startdate).format("dddd, MMMM Do YYYY") + " at " + starttime + " - " + moment(enddate).format("dddd, MMMM Do YYYY");
  $("#event-datetime").html(function(){
    return datetime;
  });

  var category = event_categories.split(',');
  console.log(category);
  $("#event-categories").html(function() {
    var categories = "";
    for (var i = 0; i < category.length; i++) {
      categories += '<span id="event-category">#' + category[i] + '</span>';
    }
    return categories;
  })

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
    var validator = inputValidation(name, email, phone);
    if(validator===true) {
      $.post("ajax/register.php", {
        action: "create",
        id: id,
        name: name,
        email: email,
        phone: phone,
      }, function(response) {
        // redirect to ticket page
        var ticket_id = response;
        // alert(response);
        location.href = "../ticket.php?event_id="+event_id+"&ticket_id="+ticket_id;
      })
    } else {
      alert(validator);
    }




  })

  $("#event-img img").each(function() {
    var img = this;
    //or however you get a handle to the IMG
    var width = img.clientWidth;
    var height = img.clientHeight;
    if (width >height) img.style.height = "100%";
    else if (width < height) img.style.width = "100%";
    else img.style.height = "100%";
  })

  $(document).on("click", "#event-img img", function() {
      var img = this;
      var img_src = $(this).attr("src");
      console.log(img_src)
      $.post("ajax/load_large_image.php", {
          img_src:img_src
      }, function(response) {
          var data = JSON.parse(response);
          var img = '<figure><img src="' +img_src+ '" alt="' +data['alt']+ '"/><figcaption>' +data['cap']+ '</figcaption></figure>';
          var width = img.clientWidth;
          var height = img.clientHeight;

          $("#view-img-modal .modal-body").html("").append(img);
          if (width >height) $("#view-img-modal .modal-body img").css('height', '100%');
          else if (width < height) $("#view-img-modal .modal-body img").css('width', '100%');
          else $("#view-img-modal .modal-body img").css('height', '100%');
          $("#view-img-modal").show();
          $(".modal-mask").show();
      })

  })

})
