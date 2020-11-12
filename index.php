<!DOCTYPE html>
<html>

<head>
  <title>XSS</title> 
</head>


<body>

	<form action="index.php" method="GET">

		<input type="text" name="zoekopdracht" placeholder="Zoekopdracht">
		<button type="submit">Zoek</button>

	</form>


	<?php
		echo "<br>";

		if(isset($_GET['zoekopdracht'])) {
			echo "De zoekopdracht is: " . $_GET['zoekopdracht'];
			echo "<br>";
			echo "Geen resultaat gevonden!";
		}

		//Opdracht 1: Er komt een melding waar "XSS voorbeeld" op staat, en er komt te staan dat de zoekopdracht "Coole website?" is.
		//Opdracht 2: "Geen resultaat gevonden!" wordt blauw
		//Opdracht 3: Je kunt de input filteren zodat het niet mogelijk is bepaalde leestekens in te voeren
	?>

</body>

</html>