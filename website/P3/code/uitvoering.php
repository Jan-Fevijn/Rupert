<?php
date_default_timezone_set("Europe/Brussels");
	include("dbConn.php");
	#als van 1ste pagina
	if (isset($_POST['nummerBestelling']) and !isset($_POST['hoeveelheidBestelling'])) {
		$text =	$_POST['nummerBestelling'];
		$_SESSION['besteldBrood'] = $text;
 		#query voor opvragen hoeveelheid en prijs van gekozen brood
		$sql = "SELECT hoeveelheid, prijs FROM project3.soortbrood inner join project3.locatiebrood where soortbrood.idSoortBrood =".$_POST['nummerBestelling'] ."";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			#aantal broden wordt getoond aan de klant
			echo $row['hoeveelheid'] . " voor " . $row['prijs'] . " euro per brood.";
		}
		#als de hoeveelheid brood werd doorgestuurd (deze pagina: uitvoering.php)
	} elseif(isset($_POST['bestelln'])){
		#query om te kunnen controleren of er nog genoeg brood over is van het gekozen brood
		$sqli = "SELECT hoeveelheid FROM project3.soortbrood inner join project3.locatiebrood where soortbrood.idSoortBrood =".$_SESSION['besteldBrood']."";
		$result = $conn->query($sqli);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			#als er evenveel brood besteld werd dan er nog over was
			if ($row['hoeveelheid'] == $_POST['hoeveelheidBestelling'] or $row['hoeveelheid'] >= $_POST['hoeveelheidBestelling']) {
				$nieuweHoeveelheid = $row['hoeveelheid'] - $_POST['hoeveelheidBestelling'];
				#echo $nieuweHoeveelheid;
				#echo $_SESSION['besteldBrood'];
				$updateSql = "UPDATE `project3`.`locatiebrood` SET `hoeveelheid` = '".$nieuweHoeveelheid."' WHERE (`idLocatieBrood` = '".$_SESSION['besteldBrood']."')";
				#echo $updateSql;
				$resultaat = $conn->query($updateSql);
				if ($nieuweHoeveelheid === 0) {
					echo "Brood is uitverkocht nu <br>";
				}
				
				$insertSql = "INSERT INTO `project3`.`bestelling` (`codeKlant`, `idSoortBrood`, `idLocatieBrood`, `datumBestelling`) VALUES ('".$_SESSION['codeKlant']."', '".$_SESSION['besteldBrood']."', '".$_SESSION['besteldBrood']."', '".date("Y-m-d")."')";
				if ($_SESSION['besteldBrood'] === 1) {
					$broodBroden = " brood";
				}else{
					$broodBroden = " broden";
				}
				echo "Er zijn nog ".$nieuweHoeveelheid . " broden over en u heeft " . $_POST['hoeveelheidBestelling']. $broodBroden . " gekocht";
			}
		#als $_POST['nummerBestelling'] en $_POST['hoeveelheidBestelling'] beide '!isset' zijn, gebeurt alleen als user op de niet gebruikelijke manier op de pagina terecht komt
	}else{
		header("location:bestellen.php");
	}
}
?>
<form id='machineknoppen' action='uitvoering.php' method="POST">

	<div id='mNummer'>
		<!--Hier ziet gebruiker zijn/haar input-->
	</div>
	<input id='bestelNr' type='hidden' name='hoeveelheidBestelling'>
	<input class='mb' type='button' value='1' name='mb' onclick="valueAdd(1)">
	<input class='mb' type='button' value='2' name='mb' onclick="valueAdd(2)">
	<input class='mb' type='button' value='3' name='mb' onclick="valueAdd(3)">
	<input class='mb' type='button' value='4' name='mb' onclick="valueAdd(4)">
	<input class='mb' type='button' value='5' name='mb' onclick="valueAdd(5)">
	<input class='mb' type='button' value='6' name='mb' onclick="valueAdd(6)">
	<input class='mb' type='button' value='7' name='mb' onclick="valueAdd(7)">
	<input class='mb' type='button' value='8' name='mb' onclick="valueAdd(8)">
	<input class='mb' type='button' value='9' name='mb' onclick="valueAdd(9)">
	<input class='mb' type='button' value='c' name='c' onclick="valueAdd('c')">
	<input class='mb' type='button' value='0' name='mb' onclick="valueAdd(0)">
	<input class='order' type='submit' value='bestellen' name='bestelln'>
</form>
<script>
function valueAdd(waarde) {
	if (waarde === 'c') {
		document.getElementById("mNummer").innerHTML = '';
		document.getElementById("bestelNr").value = '';
	} else {
		document.getElementById("mNummer").innerHTML += waarde;
		document.getElementById("bestelNr").value += waarde;
	}
}
</script>