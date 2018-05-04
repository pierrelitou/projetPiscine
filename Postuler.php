<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Emplois.css">
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
	<p>Une notificiation a été envoyé au créateur de l'annonce </p>
	<form>
	<input type="button" name="Retour" value="Retour" onClick="window.location = 'Emplois.php'">
	</form>
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