<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
	
	<header>
		<?php include("bandeau.php"); ?>
	</header>
	
	<aside id="reseau">
		<?php
		 include("tableReseau.php"); 
		 ?>
	</aside>
	
	<main>
		<div>
			<form method="post" action="">
				<textarea cols="50" rows="3" name="contenu"></textarea>
				<!--faire bouton pour ajouter photo et 1 pour ajouter vidéo!-->
				<input type="submit" name="publier" id="publier">
				
			</form>
		
		</div>

		<div id="afficher">
			<!--on affiche les publications les plus recentes.!-->
		</div>
	
	</main>

	<aside id="contact">
		<?php
		include("tableContact.php"); 
		?>
	</aside>

	<footer>
		<?php 
		include("footer.php"); 
		?>
	</footer>

</body>
</html>