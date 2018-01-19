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

    $.post("ajax/load_organizer.php", function(response) {
        if (response != "") {
            var data = JSON.parse(response);
            if (data['logo'] != "") {
                $('#preview-logo').attr('src', data['logo']);
                $("#logo-upload label").hide();
                $("#rem-logo").show();
            }
            if (data['name'] !== "") {
                $("#organizer-name").parent().addClass("input-active input-complete");
                $("#organizer-name").val(data['name']);
            }

            if (data['contact'] !== "") {
                $("#organizer-contact").parent().addClass("input-active input-complete");
                $("#organizer-contact").val(data['contact']);
            }

            if (data['email'] !== "") {
                $("#organizer-email").parent().addClass("input-active input-complete");
                $("#organizer-email").val(data['email']);
            }


        }

    })

    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#preview-logo').attr('src', e.target.result);
          $("#logo-upload div").hide();
          $("#rem-logo").show();
          $('#preview-logo').show();
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#org-logo").change(function() {
      readURL(this);
    });

     $("#rem-logo").click(function() {
         $(this).parent().find('img').removeAttr("src");
         $("#org-logo").val("")
         $("#logo-upload div").show();
         $("#rem-logo").hide();
         $('#preview-logo').hide();
     })

     $("#save-info").click(function() {
         var name = $("#organizer-name").val();
         var contact = $("#organizer-contact").val();
         var email = $("#organizer-email").val();
         var logo = $("#preview-logo").attr("src");

         $.post("ajax/save_organizer.php", {
             name: name,
             contact: contact,
             email: email,
             logo: logo
         }, function(response) {
             alert(response)
         })
     })
})
