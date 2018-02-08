    // Get the modal
    var modal_signIn = document.getElementById('signIn-modal');

    // Get the button that opens the modal
    var btn_signIn = document.getElementById("btnSignin");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    var modal_user = document.getElementById('user-modal');

    var btn_user = document.getElementById('btnSignup');

    var span1 = document.getElementsByClassName('close1')[0];

    // When the user clicks on the button, open the modal
    btn_signIn.onclick = function() {
      modal_signIn.style.display = "block";
    }

    //When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal_user.style.display = "none";
    }

    //When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal_signIn) {
        modal_signIn.style.display = "none";

      }
      if(event.target == modal_user){
        modal_user.style.display = "none";
      }
    }

    span1.onclick = function() {
      modal_signIn.style.display = "none";
    }

    btn_user.onclick = function(){
      modal_signIn.style.display = "none";
      modal_user.style.display = "block";
    }

    function checkbox(){
      var message = "Please log in first!";
      alert(message);
      modal_signIn.style.display = "block";
    }

    function checkbox1(){
      modal_signIn.style.display = "block";
    }