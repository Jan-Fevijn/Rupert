<h1> keuze :</h1>
<div id='automaat'> <br>
	<?php 
	   $sql ="SELECT * FROM project3.locatiebrood inner join soortbrood on soortbrood.idSoortBrood = locatiebrood.idSoortBrood WHERE locatiebrood.hoeveelheid >0  order by locatieCode ";
	   $result = $conn->query($sql);

	if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {

  	echo("<div id='brood'>");
  	echo("<h2> ". $row['naamBrood'] ." </h2>");
  	echo("druk : " . $row['locatieCode']);
  	echo("<br>€" . $row['prijs']);
  	echo("</div>");
   	}
	} else {
   	echo "Niets gevonden.";
	}
	?><br>
</div>