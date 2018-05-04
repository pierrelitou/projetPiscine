<!DOCTYPE html>
<html>
<head>
	<title>Projet Piscine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="parametres.css">
</head>
<body>
	<header>
		<?php include("bandeau.php");?>
	</header>
	<aside>
	</aside>
		
	<main>
		<div id="cadreCentre">
			<h2> Paramètres de votre compte </h2> 
			<form method="post" action = "" >
				<h3>Paramètres de sécurité &nbsp;  
				<input type="submit" name="modificationmotdepasse" class="boutonparam" value="Modifier votre mot de passe"  ></h3>
			</form>
			
			<form method="post" action = "" >
				<h3>Paramètres de généraux
				<input type="submit" name="modificationprénom" class="boutonparam" value="Modifier votre prénom"  ></h3>
			</form>
			<br>
			<form method="post" action = "" >
				<input type="submit" name="modificationnom" class="boutonparam2" value="Modifier votre nom"  >
			</form>
			<br>
			<form method="post" action = "" >
				<input type="submit" name="modificationdatenaissance" class="boutonparam2" value="Modifier votre date de naissance"  >
			</form>
		</div>
	</main>
	
	<aside>
	</aside>
		
	<footer>
		<?php include("footer.php");?>
	</footer>