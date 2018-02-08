<footer>
  <?php
        if(isset($_SESSION['eventtap_usr'])){
          echo "
          <ul class='footer-links-main'>
          <li><p>Use EventApp</p></li>
          <li><a href='index.php'>Home</a></li>
          <li><a href='create-event.php'>Create Event</a></li>
          <li><a href='manage-event.php'>Manage Event</a></li>
          <li>
            <form action='logout.php' method='POST'>
            <button class='logout1' type='submit' name='submit'>Logout</button></form>
          </li>
          </ul>";
        }else{
          echo "<ul class='footer-links-main'>
          <li><a href='index.php'>Home</a></li>
          <li><a href='#' onClick='checkbox()'>Create Event</a></li>
          <li><a href='#' onClick='checkbox()'>Manage Event</a></li>
          <li><label class='signin_btn' id='btnSignin' onClick='checkbox1()'>Sign In</label></li>
          </ul>";
        }
  ?>
  
  <div class="footer-sm">
    <a href="#">
      <img src="img/if_facebook_six_107120.png" alt="facebook-icon">
    </a>
    <a href="#">
      <img src="img/if_instagram_six_107098.png" alt="instagram-icon">
    </a>
    <a href="#">
      <img src="img/if_twitter_six_107069.png" alt="twitter-icon">
    </a>
  </div>
</footer>
</body>
</html>
