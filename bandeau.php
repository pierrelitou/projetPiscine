<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bandeau.css">
	</head>
	<body>
		
		<div id="header">
			<img src="logoece.jpg" id="logo"><!--mettre le logo choisi!-->
			<div id="bandeau">
					<!-- Ne pas oublier de remplacer les pages -->
					<form method="post" action = "parametres.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Paramètres" class="bouton" value="Paramètres" id="bandeau" >
					</form>
					
					<form method="post" action = "emplois.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Emplois" class="bouton" value="Emplois" id="bandeau" >
					</form>
					
					<form method="post" action = "notifications.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Notifications" class="bouton" value="Notifications" id="bandeau" >
					</form>
					
					<form method="post" action = "reseau.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Mon réseau" class="bouton" value="Mon réseau" id="bandeau" >
					</form>
					
					<form method="post" action = "vous.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Vous" class="bouton" value="Vous" id="bandeau" >
					</form>
					
					<form method="post" action = "accueil.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Accueil" class="bouton" value="Accueil" id="bandeau">
					</form>
					
					<form method="post" action = "" id="bandeau" >
						&nbsp;&nbsp;<input type="submit" name=" Rechercher" class="bouton" value="Rechercher" id="bandeau" >
						&nbsp;&nbsp;<input type="text" name="zoneRecherche" value="Rechercher" id="bandeau" >
					</form>
	
			</div>
		</div>
	</body>
</html>