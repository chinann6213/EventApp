$(document).ready(function() {
  $(".main-item").click(function() {

  })

  $(".sub-item").click(function() {

  })

  $("#menu, #slide-in").click(function() {
      $("#nav-sidebar").animate({width:'toggle'},350);
  })

    window.addEventListener("beforeunload", function (e) {
        var confirmationMessage = "You have unsaved changes. Confirm exit?";

        (e || window.event).returnValue = confirmationMessage;     //Gecko + IE
        return confirmationMessage;                                //Webkit, Safari, Chrome etc.
    });

})
