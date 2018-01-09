$(document).ready(function() {
  $(".main-item").removeClass("active");
  $("#manage-event svg").removeClass("fill-svg");
  $("#manage-event").addClass("active");
  $("#manage-event svg").addClass("fill-svg");

  $(".sub-item").removeClass("active");
  $("#create").addClass("active");
  $(".manage-event").slideDown();

  $(".event-input").focus(function(){
    $(this).parent().addClass("input-active input-complete");
  });

  $(".event-input").focusout(function(){
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
    var fd = new FormData();
    for (var x = 0; x < this.files.length; x++) {
      console.log(this.files[x]);
      fd.append( 'image[]', this.files[x] );
    }
    $.ajax({
      url: 'ajax/upload_images.php',
      data: fd,
      processData: false,
      contentType: false,
      type: 'POST',
      success: function(data){
        console.log(data)
        var data = JSON.parse(data);
        // for (var i = 0; i < data.length; i ++){
        //   $("#image-slider").append('<div class="img-cont"><img width="100%" src="' + data[i] + '"/></div>');
        // }
      }
    });
  })
})
