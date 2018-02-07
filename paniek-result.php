<?php






?>


<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Mad Libs</h1>
	<header><p class="header">Er heerst paniek...</p><p class="header1">Onkunde</p></header>
	<article>
		<h2>Er heerst paniek...</h2>
		
		<p>Er heerst paniek in het koninkrijk Gallifrey. Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer Lashawn</p>
		<p>"Lashawn! Het is een ramp! Het is een schande!"</p>
		<p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>
		<p>"Mijn <?php echo $_GET["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_GET["speelgoed"]; ?> voor hem gekocht!"</p>
		<p>"Majesteit, uw <?php echo $_GET["huisdier"]; ?> komt vast vanzelf weer terug."</p>
		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd leren <?php echo $_GET["bezig"]; ?>?"</p>
		<p>Maar Sire, daar kunt u toch uw <?php echo $_GET["geld"]; ?> voor gebruiken?</p>
		<p>"Lashawn, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had"</p>
		<p>"<?php echo $_GET["bezig"]; ?> ,Sire"</p>
	</article>
</body>
</html
