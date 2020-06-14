<!DOCTYPE HTML>
<html>
<?php
	session_start();
	include "conn.php"
?>
<?php
	if ($_SESSION["login"] == "") {
		header("location:index.php");
	}
?>
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
				<p>Als je een ticket niet meer ziet, dan betekent dat het probleem nu zou moeten opgelost zijn. Als je toch nog hetzelfde probleem ondervindt, maak je gerust het ticket opnieuw aan.</p>
				<form action="tickets.php" method="POST">
					<input type="hidden" name="bewerken">
					<select name="ticketKeuze">
						<?php
							$sql = "SELECT * FROM ticket JOIN soortticket inner join leerkracht on `ticket`.`leerkracht` = `leerkracht`.`idLeerkracht` and `ticket`.`ticketSoort` = `soortticket`.`idsoortTicket` WHERE `idLeerkracht` =" . $_SESSION["leerkrachtID"] . " and `afgehandelt` = 0";
							$resultaat = $conn->query($sql);
							if ($resultaat->num_rows > 0) {
								while($row = $resultaat->fetch_assoc()) { 
									echo "<option value ='" . $row["idticket"] . "'>" . $row["soortTicketNaam"] . ". Extra info: " . $row["beschrijvingTicket"] . "</option>" . "<br>";
								}
							} else {
								echo "<option>niets gevonden</option>";
							}
							$conn->close();
						?>
					</select>
					<input type="submit" name="verwijderen" value=" Verwijderen ">
				</form>
				<?php
					if (isset($_POST["ticketKeuze"])) {
						include "conn.php";
						$sqli = "SELECT * FROM ticket JOIN soortticket inner join leerkracht on `ticket`.`leerkracht` = `leerkracht`.`idLeerkracht` and `ticket`.`ticketSoort` = `soortticket`.`idsoortTicket` WHERE `idticket` =" . $_POST["ticketKeuze"];
						#echo $sqli;
						$resultaat = $conn->query($sqli);
						if ($resultaat->num_rows > 0) {
								$sql = "UPDATE ticket SET afgehandelt = 1 WHERE idticket = ". $_POST["ticketKeuze"];
								$resultaat = $conn->query($sql);
						} else {
							echo "error";
						}
						$conn->close();
						header("location:tickets.php"); #zorgt dat leerkracht ziet dat het ticket weg is
					}
				?>
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