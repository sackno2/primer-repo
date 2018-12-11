<!DOCTYPE HTML>
<html>

<?php require("includes/head.php"); ?>

<body>
  <div id="main">
    <?php require("includes/header.php"); ?>
    <div id="site_content">
      <div id="sidebar_container">
        <div id="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="450" src="images/1.jpg" alt="photo_one" /></li>
            <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li>
            <li><img width="450" height="450" src="images/3.jpg" alt="photo_three" /></li>
            <li><img width="450" height="450" src="images/4.jpg" alt="photo_four" /></li>
            <li><img width="450" height="450" src="images/5.jpg" alt="photo_five" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Blog</h1>
        <div id="blog_container">
          <div class="blog"><h2>Nov</h2><h3>22nd</h3></div>
          <h4 class="select"><a href="#">Magazine Photo-Shoot on the Isle-Of-Islay</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">read more.....</a></p>
          <div class="blog"><h2>Oct</h2><h3>25th</h3></div>
          <h4><a href="#">Wedding Shoot in Edinburgh</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">read more.....</a></p>
        </div>
        <p></p>
      </div>
    </div>
    <?php require("include/footer.php"); ?>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
