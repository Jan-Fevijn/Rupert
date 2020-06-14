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
				<h1>Werkwijze:</h1>
				<p>Om de helpdesk te kunnen gebruiken moet je inloggen met het account en wachtwoord dat je gekregen hebt.</p>
				<h2>Probleem melden.</h2>
				<p>Problemen melden kan via een <a href="contact.php">contact formulier</a>.</p>
				<p>
					<ol>
						<li>
							<p>Selecteer het probleem dat je ondervindt uit de lijst van soorten tickets (klik hiertoe op het pijltje en selecteer het meest toepasselijke).</p>
						</li>
						<li>
							<p>Geef wat extra info over het probleem door het veld onder "Bericht:" in te vullen. Geef zeker door in welk lokaal, waar precies in het lokaal en wat er precies scheelt. Bijvoorbeeld: lokaal A1.46, achteraan 2de pc van rechts, toetsenbord, knop “W” geeft slecht contact. </p>
						</li>
						<li>
							<p>Vul het antwoord in van de controlevraag.</p>
						</li>
						<li>
							<p>Klik op de knop "Verzenden".</p>
						</li>
					</ol>
				</p>
				<h2><a href="tickets.php">Tickets</a></h2>
				<p>Om je <a href="tickets.php">tickets</a> te bekijken:</p>
				<p>
					<ol>
						<li>
							<p>Klik op de knop "Bekijk hier je lopende tickets".</p>
						</li>
						<li>
							<p>Nu kun je je lopende tickets bekijken en ze verwijderen.</p>
							<p>Als je een ticket niet meer ziet, dan betekent dat het probleem nu zou moeten opgelost zijn.</p>
							<p>Als je toch nog hetzelfde probleem ondervindt, maak je gerust het ticket opnieuw aan.</p>
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