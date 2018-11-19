<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Notifications.css">
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
			<div id="Notifications">
			<!--On affiche les notifications les plus récentes!-->
			</div>
	</main>

	<aside id="reseau">
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