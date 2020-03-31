<?php
  include "conn.php"
?>
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
			<div id="logo">
				<div id="logo_text">
					<h1><a href="_index.html">Helpdesk website voor: <span class="logo_colour" href="https://www.janfevijn.be/">Atheneum Jan Fevijn</span></a></h1>
					<h2>Gemaakt door: Rupert Van Den Eynde</h2>
				</div>
			</div>
			<nav></nav>
		</header>
		<div id="site_content">
			<div id="sidebar_container">
				<?php
          include "sidebar_content.php";
        ?>
			</div>
			<div class="content">
				<form>
					<p><span>Naam: </span><input class="contact" type="text" name="jouw_naam"> <!-- value="<?php echo $jouwNaam; ?>" />--></p>
					<p><span>Wachtwoord: </span><input class="contact" type="text" name="jouw_wachtwoord"></p>
					<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Verzenden" /></p>
				</form>
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