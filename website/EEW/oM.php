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
        <h1>Wie ben ik?</h1>
        <p>Ik ben een leerling van 6ITN, Atheneum Jan Fevijn ten Assebroek. Mijn naam is Rupert Van Den Eynde (18 jaar) uit Koolkerke, Brugge.</p>
        <h1>Hoe werkt het?</h1>
        <p>Dat kun je <a href="hWH.php">hier</a> zien.</p>
        <h1>Omschrijving van mijn eindwerk.</h1>
        <p>Mijn opdracht voor mijn eindwerk was het een leerkracht mogelijk te maken een probleem te melden aan de ICT-beheerder van Atheneum Jan Fevijn.</p>
        <p>Hiertoe heb ik geleerd mails te versturen via php (programmeertaal), wat niet zonder slag of stoot ging. Leerkrachten laten inloggen met hun smartschool account ging niet omdat  ik daar geen toegang tot had. Ik heb een redelijk simpele login methode gekozen die toch redelijk veilig is : voor het inloggen kent de ICT beheerder de leerkracht een complex wachtwoord toe. De leerkracht kan dit bewaren op zijn/haar smartschoolaccount (aangezien dat account normaal extra goed beschermd is). </p>
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
