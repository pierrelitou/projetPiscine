<!DOCTYPE html>
<html>
<head>
	<title>Projet Piscine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="modifmotdepasse.css" >
</head>
<body>
	<header>
		<?php include("bandeau.php");?>
	</header>
	<br>
	<div id="formulaire">
		<form method="post" action="traitementmodifmotdepasse">
			Saisir votre ancien mot de passe&nbsp;&nbsp; : &nbsp;<input type="password" name="ancienmdp"><br><br>
			Saisir votre nouveau mot de passe : <input type="password" name="nouveaumdp"><br><br><br>
			<input type="submit" name="valider" class="bout2" >
		</form>
	</div>
<body>
<footer>
	<?php include("footer.php"); ?>
</footer>