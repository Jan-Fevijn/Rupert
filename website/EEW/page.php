<!DOCTYPE HTML>
<html>
<head>
  <?php
    include "head.php"
  ?>
</head>
<body>
<div id="bg">
    <img src="images/abc.jpg" alt="home">
</div>
  <div id="main">
    <header>
      <?php 
        include "header.php"
      ?>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <?php
          include "sidebar_content.php"
        ?>
      </div>
      <div class="content">
        <h1>A Page</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <?php
      include "footer.php"
    ?>
  </div>
  <?php
    include "scripts.php"
  ?>
</body>
</html>
