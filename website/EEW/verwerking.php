<?php
	session_start();
	include "conn.php"
?>
<?php
//echo "dit is een test";

if (isset($_POST["form1"])) {
	// verwerking van form 1
	if (isset($_POST["jouw_naam"]) and isset($_POST["jouw_wachtwoord"]) and $_POST["jouw_naam"] != "" and $_POST["jouw_wachtwoord"] != "") {
		//controleren naam en ww
		$sql = "SELECT * FROM leerkracht";

		$resultaat = $conn->query($sql);

		if ($resultaat->num_rows > 0) {
			while($row = $resultaat->fetch_assoc()){
				echo $row["LeerkrachtNaam"];
				echo $_SESSION["login"];
				if ($row["LeerkrachtNaam"] == $_POST["jouw_naam"]) {
					$paswoord = MD5($_POST["jouw_wachtwoord"]);
					if ($paswoord == $row["LeerkrachtWachtwoord"]) {
						session_start(); 
						$_SESSION["login"] = $_POST["jouw_naam"];
#opvragen id leerkracht
						$_SESSION["leerkrachtID"] = $row["idLeerkracht"];

						echo "<script>console.log('Debug Objects: " . $_SESSION["login"] . "' )</script>";
						header("location:_index.php");
					}
				}
			}
			if ($_SESSION["login"] != $_POST["jouw_naam"]) {
				header("location:index.php");
			}			
		}else{
			echo ("geen resultaat");
		}
	}else{
		header("location:index.php");
	}

}



if (isset($_GET["codex"])) {
	echo $_GET["codex"];
	echo "<br>";


	//conect to db
	// conn.open

	//opbouw van mijn query
	$sql = "insert into gbrs ('naam','code') values ('kareltje','" . $_GET["codex"] . "')";
	echo $sql;

	// door te sturen naar je db
}

?>