$(document).ready(function() {
  function initMap() {
    var myLatLng = {lat: 41.508742, lng: 0.120850};
    var mapProp = new google.maps.Map(document.getElementById("googleMap"), {
      center: myLatLng,
      zoom: 5,
      scrollwheel: false
    });
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: mapProp
    });
  }

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

})