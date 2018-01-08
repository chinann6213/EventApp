$(document).ready(function() {
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
      // $('#summernote').summernote('lineHeight', '20px');
})
