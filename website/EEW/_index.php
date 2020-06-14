<!DOCTYPE HTML>
<?php
session_start();
echo "<script>console.log('Debug Objects: " . $_SESSION["login"] . "' )</script>";
  if ($_SESSION["login"] == "") {
    header("location:index.php");
  }


#$test = MD5("a");
#echo $test;
?>

<html>
<head>
  <title>Jan Fevijn Helpdesk</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
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
          include "sidebar_content.php";
        ?>
      </div>
      <div class="content">
        <h1>Welkom op mijn site</h1>
        <p>Indien je een probleem hebt dat computer-gerelateerd is, kun je <a href="contact.php">hier</a> contact opnemen met de ICT-beheerder van <a href="https://kaas-sgr25.smartschool.be/">Atheneum Jan Fevijn</a>.</p>
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