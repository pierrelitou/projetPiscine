<!DOCTYPE html>
<html>
<head>
	<title>Projet Piscine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="modifmotdepasse.css">
</head>
<body>
	<header>
		<?php include("bandeau.php");?>
	</header>
	<br>
	<div id="formulaire">
		<form method="post" action="traitementmodifdatenaissance.php">
			Saisir votre ancienne date de naissance : <input type="date" name="anciendatenaissance"><br><br>
			Saisir votre nouvel date de naissance : <input type="date" name="nouveldatenaissance"><br><br>
			<input type="submit" name="valider" class="bouton" >
		</form>
	</div>
<body>
<footer>
	<?php include("footer.php"); ?>
</footer>