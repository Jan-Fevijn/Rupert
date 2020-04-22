<?php
	include 'conn.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<h1>Kies een gerecht</h1>
	<select class="menuSelect">
		<option selected>Selecteer een menu</option>
<?php
	$sql = "SELECT idgerecht, naam FROM gerecht";
	$resultaat = $conn->query($sql);

	if ($resultaat->num_rows > 0) {
		echo "hallo";
		while ($row = $resultaat->fetch_assoc()) {
			echo "<option value'" . $row["idgerecht"] . "'>'" . $row["naam"] . "'</option>";
		}
	} else {
		echo "Geen resultaten.";
	}
?>
	</select>
	<table>
		<thead>
		<tr>
			<th>ID product</th>
			<th>Naam</th>
			<th>ID winkel</th>
		</tr>
	</thead>
	<tbody>
	<?php
		if ($conn->connect_error) {
			die("Connectie mislukt: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM product where idproduct"



	?>
	</table>
</div>
</body>
</html>