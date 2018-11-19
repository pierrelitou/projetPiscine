<?php 
session_start();
$_SESSION['mail']="benjamin.fornaciari@edu.ece.fr";
?>
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
			<form method="post" action="recherche.php">
			<input type="text" name="keywords">
			<input type="submit" value="Rechercher">
			</form>
				
			<br>
			<div>
			Vous recherchez des talents ?
			<form>
			<input type="button" name="Publier une offre d'emploi" value="Publier une offre d'emploi" onClick="window.location = 'Publieroffre.php'"> <input type="button" name="Vos_annonces" value="Vos annonces" onClick="window.location = 'Vos_Annonces.php'">
			<br></div>
			<div id="Emplois">
			<?php	
			$bdd = mysqli_connect("localhost", "root", "", "piscine");
			$requete="SELECT * FROM `emploi` LIMIT 0, 20;";
			$donnee=mysqli_query($bdd, $requete);
			while($resultat=$donnee->fetch_array()){
				$requete2="SELECT * FROM `utilisateur` WHERE `idutilisateur`='".$resultat['idutilisateur']."'";
				$donnee2=mysqli_query($bdd,$requete2);
				while($resultat2=$donnee2->fetch_array()){
					echo("<br>");echo ("Annonce publié par : ");echo $resultat2['nom'];echo (" ");echo $resultat2['prenom'];
				}
				echo("<br>");
				echo ("Offre d'emploi numéro ");
				echo $resultat['idemploi'];
				echo("<br>");
				echo $resultat['description']; 
				echo("<br>");
				?>
				<form>
				<input type="button" name="Postuler" value="Postuler" onClick="window.location = 'Postuler.php'">
				<?php
				echo("<br>");
				echo("<br>");
			}
			?>
			
			</div>
		</form>
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