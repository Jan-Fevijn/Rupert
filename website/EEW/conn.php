<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "usbw";
	$dbname = "gip"
?>
<?php 
	#Maak je connectie
	$conn = new mysqli($servername, $username, $password, $dbname);

	#controle van je connectie
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		//echo "alles ok<br>";
	}
?>
