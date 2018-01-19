$(document).ready(function() {
    $(".main-item").removeClass("active");
    $("#about-us svg").removeClass("fill-svg");
    $("#about-us").addClass("active");
    $("#about-us svg").addClass("fill-svg");

    // materialized text input
    $(document).on("focus", ".event-input", function(){
      $(this).parent().addClass("input-active input-complete");
    });

    $(document).on("focusout", ".event-input", function(){
      if($(this).val() === "")
        $(this).parent().removeClass("input-complete");
        $(this).parent().removeClass("input-active");
    })

    // $("form").submit();
})
