<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<form method='POST'>
		<label for='codeKlant'>
		<input type='text' id='codeKlant' name='codeKlant'> 
		<input type='submit'>
	</form>
	<?php 
		include("code/dbConn.php");
			if (isset($_POST['codeKlant'])) {
				$codeKlant = $_POST['codeKlant'];
				if (is_numeric($codeKlant)) {
					echo($codeKlant);
					$sql = "SELECT codeKlant from klant where codeKlant = $codeKlant ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$_SESSION['codeKlant'] = $codeKlant;
							$_SESSION['machineNumber'] = 0;
							header("location: code/bestellen.php ");
						} 
					} else {
							header("location: index.php ");
					}
				}
			}
	?>
</body>
</html>