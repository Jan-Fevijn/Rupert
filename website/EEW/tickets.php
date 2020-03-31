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
				<form action="tickets.php" method="POST">
					<select name="productKeuze">
					<?php
						$sql = "SELECT * FROM ticket JOIN soortticket inner join leerkracht on `ticket`.`leerkracht` = `leerkracht`.`idLeerkracht` and `ticket`.`ticketSoort` = `soortticket`.`idsoortTicket` WHERE `idLeerkracht` = 3";
						$resultaat = $conn->query($sql);
						if ($resultaat->num_rows > 0) {
							while($row = $resultaat->fetch_assoc()) { 
								echo "<option value ='" . $row["leerkracht"] . "'>" . $row["ticketSoort"] . " " . $row["soortTicketNaam"] . "" . $row["beschrijvingTicket"] . "</option>" . "<br>";
							}
						} else {
							echo "<option>niets gevonden</option>";
					 	}
					$conn->close();
					?>
					</select>
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