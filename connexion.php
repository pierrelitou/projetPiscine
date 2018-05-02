<!DOCTYPE html>
<html>
<head>
	<title>Projet Piscine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="connexion.css">
</head>
<body>
	
	<header>
		<img src="logoece.jpg" id="logo"><!--mettre le logo choisi!-->
		<div id="inscription">
			<form method="post" action="">
				mail : 
				<input type="text" name="idutilisateur" value="adresse mail">
				password :
				<input type="password" name="password"><span>
				rester connecté :
				<input type="checkbox" name="rester">
				<input type="submit" name="connexion" class="bouton" id="connexion">
			</form>
		</div>
	</header>
	
	<main>
		<h2>Bienvenue sur ECE piscine</h2>
		<p>Vous pouvez vous baigner dans vos contacts professionnels.<br> Si vous n'avez pas encore de compte inscrivez vous ! </p>
		<p>Si vous avez déja un compte connectez vous !</p>


	</main>
	
	<aside>
		<h3>inscription</h3>
		<form method="post" action="">
			Adresse mail : <input type="text" name="adresse"><br><br>
			Nom : <input type="text" name="nom"><br><br>
			Prenom : <input type="text" name="Prenom"><br><br>
			date de naissance : <input type="date" name="date"><br><br>
			sexe : <input type="radio" id="homme" name="sexe" value="homme" checked>
    		<label for="homme"> homme </label>
    		<input type="radio" id="femme" name="sexe" value="femme">
    		<label for="femme"> femme </label><br><br>
			mot de passe : <input type="password" name="mdp"><br><br>
			<input type="submit" name="s'inscrire" class="bouton"><br>
		</form>

	</aside>
	
	<footer>
		<?php
		include("footer.php");
		?>
	</footer>

</body>
</html>