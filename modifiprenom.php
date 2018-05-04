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
		<form method="post" action="traitementmodifprenom.php">
			Saisir votre ancien prénom : <input type="text" name="ancienprenom"><br><br>
			Saisir votre nouveau prénom : <input type="text" name="nouveauprenom"><br><br>
			<input type="submit" name="valider" class="bouton" >
		</form>
	</div>
<body>
<footer>
	<?php include("footer.php"); ?>
</footer>