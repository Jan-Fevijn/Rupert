<form id='machineknoppen' action='uitvoering.php' method="POST">

	<div id='mNummer'>

	</div>
	<input id='bestelNr' type='hidden' name='nummerBestelling'>
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
	<input class='order'  type='submit' value='bestellen' name='order'>
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