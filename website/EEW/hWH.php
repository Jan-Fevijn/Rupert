<!DOCTYPE HTML>
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
        <h1>Hoe het werkt :</h1>
        <h2>Probleem melden</h2>
        <p>Om een probleem te melden, ga je naar het <a href="contact.php">contact formulier</a>.</p>
        <p>
          <ol>
            <li>
              <p>Vul je voor- en achternaam in bij "Naam".</p>
            </li>
            <li>
              <p>Kies het probleem dat je hebt uit de lijst van soorten tickets (klik op het pijltje en klik dan op juist of meest toepaselijke)</p>
            </li>
            <li>
              <p>Vul het antwoord in van de spamvraag.</p>
            </li>
            <li>
              <p>Druk op de knop "Verzenden"</p>
            </li>
          </ol>
        </p>
        <h2><a href="tickets.php">Tickets</a></h2>
        <p>Om je <a href="tickets.php">tickets</a> te bekijken:</p>
        <p>
          <ol>
            <li>
              <p>Log in of registreer indien je nog geen account hebt.</p>
            </li>
            <li>
              <p>Klik op de knop "Bekijk je tickets".</p>
            </li>
            <li>
              <p>Nu kun je je tickets bekijken en ze bewerken of ze verwijderen.</p>
            </li>
          </ol>
        </p>
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