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
		<form method="post" action="traitementmodifnom.php">
			Saisir votre ancien nom&nbsp;&nbsp; :&nbsp; <input type="text" name="anciennom"><br><br>
			Saisir votre nouveau nom : <input type="text" name="nouveaunom"><br><br>
			<input type="submit" name="valider" class="bout2" >
		</form>
	</div>
<body>
<footer>
	<?php include("footer.php"); ?>
</footer>