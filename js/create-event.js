$(document).ready(function() {
  $(".main-item").removeClass("active");
  $("#manage-event svg").removeClass("fill-svg");
  $("#manage-event").addClass("active");
  $("#manage-event svg").addClass("fill-svg");

  $(".sub-item").removeClass("active");
  $("#create").addClass("active");
  $(".manage-event").slideDown();

  $(document).on("focus", ".event-input", function(){
    $(this).parent().addClass("input-active input-complete");
  });

  $(document).on("focusout", ".event-input", function(){
    if($(this).val() === "")
      $(this).parent().removeClass("input-complete");
      $(this).parent().removeClass("input-active");
  })

  $('#summernote').summernote({
    placeholder: 'Write your event details here...',
    height: 300,
    maxheight: null,
    minheight: null,
    toolbar: [
      ['undo'],
      ['redo'],
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['link', ['linkDialogShow', 'unlink']],
      ['table', ['table']]
    ],
    lineHeight: '20px'
  });

  // EVENT CALENDAR
  $('#from-calendar').datepicker({
    inline: true,
    firstDay: 0,
    showOtherMonths: true,
    dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  });

  $('#to-calendar').datepicker({
    inline: true,
    firstDay: 0,
    showOtherMonths: true,
    dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  });

  var today = $('#from-calendar').datepicker("getDate");
  today = new Date(today)
  today = moment().year(today.getFullYear()).month(today.getMonth()).date(today.getDate());
  var setToday = today.format('MMMM D, YYYY')

  $("#from-date").html(setToday);
  $("#to-date").html(setToday);

  $(document).on("change", "#from-calendar", function() {
    var selected = $('#from-calendar').datepicker("getDate");
    selected = new Date(selected)
    selected = moment().year(selected.getFullYear()).month(selected.getMonth()).date(selected.getDate());
    var setSelected = selected.format('MMMM D, YYYY')
    console.log(today.format('MMMM D, YYYY'))
    $("#from-date").html(setSelected);
    $(this).slideUp(100);
    $("#to-calendar").slideDown(100);
  })
  $(document).on("change", "#to-calendar", function() {
    var selected = $('#to-calendar').datepicker("getDate");
    selected = new Date(selected)
    selected = moment().year(selected.getFullYear()).month(selected.getMonth()).date(selected.getDate());
    var setSelected = selected.format('MMMM D, YYYY')
    console.log(today.format('MMMM D, YYYY'))
    $("#to-date").html(setSelected);
    $(this).slideUp(100);
  })

  $(".event-date").click(function() {
    $(this).find(".calendar").slideToggle(100)
  })
  $(document).click(function (e) {
    var target = e.target;
    if (!$('.event-date').is(target) && $('.event-date').has(e.target).length === 0) {
      $(this).find(".calendar").slideUp(100)
    }
  })

  // upload Images
  $(document).on("change", "#image-uploader", function() {
    var dim;
    var fd = new FormData();
    for (var x = 0; x < this.files.length; x++) {
      fd.append( 'image[]', this.files[x] );
    }
    $.ajax({
      url: 'ajax/upload_images.php',
      data: fd,
      processData: false,
      contentType: false,
      type: 'POST',
      success: function(data){
        var data = JSON.parse(data);
        if (data[0] == "error") {
          alert(data)
        }
        else {
          for (var i = 0; i < data.length; i ++){
            if (data[i]['img_width'] > data[i]['img_height']) dim = 'style="height: 100%;"';
            else if (data[i]['img_width'] < data[i]['img_height']) dim = 'style="width: 100%;"';
            else dim = 'style="height: 100%;"';

            $("#temp-upload").append('<div class="temp-img-card"><div class="temp-img"><img '+dim+' src="'+ data[i]['img_src'] +'" /></div><div class="temp-img-details"><div class="form-input"><label for="title" class="input-lbl">Image Alt </label><input type="text" class="event-input" /></div><div class="form-input"><label for="title" class="input-lbl">Image Caption </label><input type="text" class="event-input" /></div></div></div>');
            if (i % 2 == 0) {
              $("#temp-upload").append('<div class="divider"></div>');
            }
          }
        }
      }
    });
  })

  // google location service
  function initialize() {
    var mapOptions = {
      center: {lat: 4.2105, lng: 101.9758},
      zoom: 8,
      scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);

    var input = /** @type {HTMLInputElement} */(
        document.getElementById('location'));

    // Create the autocomplete helper, and associate it with
    // an HTML text input box.
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
      map: map
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });

    // Get the full place details when the user selects a place from the
    // list of suggestions.
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      infowindow.close();
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        return;
      }

      if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
      } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);
      }

      // Set the position of the marker using the place ID and location.
      marker.setPlace(/** @type {!google.maps.Place} */ ({
        placeId: place.place_id,
        location: place.geometry.location
      }));
      marker.setVisible(true);

      infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
          'Location: ' + place.geometry.location + '<br>' +
          place.formatted_address + '</div>');
      infowindow.open(map, marker);
    });
  }

  // Run the initialize function when the window has finished loading.
  google.maps.event.addDomListener(window, 'load', initialize);

  // modal
  $(".modal-close").click(function() {
    $(".modal").hide();
    $(".modal-mask").hide();
  })
})
