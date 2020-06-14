<?php
  include "conn.php"
?>
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception; 
	require("PHPMailer-master/src/Exception.php");
	require("PHPMailer-master/src/PHPMailer.php");
	require("PHPMailer-master/src/SMTP.php");
?>
<?php
	session_start();
  if ($_SESSION["login"] == "") {
    header("location:index.php");
  }
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
				<h1>Contacteer de ICT-beheerder hier</h1>
				<p></p>
				<?php
					$_SESSION["bericht"] = "";
					$yourmessage = "";
					$jouwNaam = "";
					$naar = 'sendmail@atheneumjanfevijn.be';
					$onderwerp = 'Enquiry from the website';
					$contact_submitted = 'Je bericht werd verstuurd.';
					if (isset($_POST['contact_submitted'])) {
						$return = "\r";
						$jouwNaam = stripslashes(strip_tags($_SESSION["login"]));
						$_SESSION["bericht"] = stripslashes(strip_tags($_POST['your_message']));
						$contact_naam = "Naam leerkracht: ".$jouwNaam;
						$bericht_text = "Bericht: " . $_SESSION["bericht"];
						$bericht_sql = $_SESSION["bericht"];
						$user_answer = trim(htmlspecialchars($_POST['user_answer']));
						$answer = trim(htmlspecialchars($_POST['answer']));
						$bericht = $contact_naam . $return . $bericht_text;
						if ($jouwNaam != "" && $_SESSION["bericht"] != "" && substr(md5($user_answer),5,10) === $answer) {
							$jouwNaam = '';
							$_SESSION["bericht"] = '';
							$mail = new PHPMailer();
							$mail->IsSMTP();
							$mail->Mailer = "smtp";
							$mail->SMTPDebug  = 0;  
							$mail->SMTPAuth   = TRUE;
							$mail->SMTPSecure = "tls";
							$mail->Port       = 587;
							$mail->Host       = "smtp.gmail.com";
							$mail->Username   = "sendmail@atheneumjanfevijn.be";
							$mail->Password   = "sendmail123!";
							$mail->IsHTML(true);
							$mail->AddAddress("sendmail@atheneumjanfevijn.be", "sendmail");
							$mail->SetFrom("no-replay@atheneumjanfevijn.be", "info");
							$mail->Subject = $_POST["ticketS"];
							$content = "<b>" . $bericht . "</b>";
							
							$mail->MsgHTML($content); 
							if(!$mail->Send()) {
								echo "Fout bij het zenden van email.";
								var_dump($mail);
							} else {
								echo '<p style="color: green;"><strong>'.$contact_submitted.'</strong></p>';
#toevoegen ticket
								$mysql = "SELECT idsoortTicket FROM soortticket WHERE soortTicketNaam ='". $_POST["ticketS"] ."'";

								$resultaat = $conn->query($mysql);

								if ($resultaat->num_rows > 0) {
									while($row = $resultaat->fetch_assoc()){
										$idTicket = $row["idsoortTicket"];
									}		
								}
								include "conn.php";
								$sqli = "INSERT INTO ticket (ticketSoort,leerkracht,beschrijvingTicket) VALUES (" . $idTicket . "," . $_SESSION["leerkrachtID"] . ",'" . $bericht_sql . "')";

								if ($conn->query($sqli) === true) {
									echo "Gelukt";
								}else{
									echo "Error";
									echo $sqli;
								}
#eind toevoegen ticket

							}
						}
						else echo '<p style="color: red;">Vul aub je naam, een geldig email addres, je bericht en het antwoord op het simpele rekenvraagje in voor het verzenden van je bericht.</p>';
					}
					$number_1 = rand(1, 9);
					$number_2 = rand(1, 9);
					$answer = substr(md5($number_1+$number_2),5,10);
				?>
				<form id="contact" action="contact.php" method="post">
					<div class="form_settings">
						<span>Soort ticket:</span>
						<select name="ticketS">
						<?php
							$sql = "SELECT soortTicketNaam FROM soortticket";
							$resultaat = $conn->query($sql);
								if ($resultaat->num_rows > 0) {
									while($row = $resultaat->fetch_assoc()) { 
									echo "<option value ='" . $row["soortTicketNaam"] . "'>" . $row["soortTicketNaam"] . "</option>" . "<br>";
									}
								} else {
						 			echo "<option>niets gevonden</option>";
							}
							echo "</br>";
							$conn->close();
						?>
						</select>
						<br/><br/>
						<p>Geef wat extra info over het probleem door het veld onder "Bericht:" in te vullen. Geef zeker door in welk lokaal, waar precies in het lokaal en wat er precies scheelt.</p>
						<p><span>Bericht: </span><br/><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
						<p style="line-height: 1.7em;">Antwoord op deze controlevraag:</p>
						<p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
						<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Verzenden" /></p>
					</div>
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