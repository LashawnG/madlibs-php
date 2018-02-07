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
		<h2>Onkunde</h2>
		<form action="onkunde-result.php" method="GET">
  Wat zou je graag willen kunnen?
  <input type="text" name="kunnen"><br>
  Met welke persoon kun je goed opschieten?
  <input type="text" name="persoon"><br>
  Wat is je favoriete getal?
  <input type="text" name="getal"><br>
  Wwat heb je altijd bij je als je op vakantie gaat?
  <input type="text" name="vakantie"><br>
  Wat is je beste persoonlijke eigenschap?
  <input type="text" name="eigenschap"><br>
  Wat is je slechtste persoonlijke eigenschap?
  <input type="text" name="slecht"><br>
  Wat is het ergste dat je kan overkomen?
  <input type="text" name="ergste"><br>
  <input class="verstuur" type="submit" value="versturen">
</form>
	</article>
</body>
</html>