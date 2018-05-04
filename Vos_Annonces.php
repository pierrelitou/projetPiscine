<?php 	
session_start();
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
	<p>Vos annonces : </p>
	<?php	
			$bdd = mysqli_connect("localhost", "root", "", "piscine");
			$requete="SELECT * FROM `emploi` LIMIT 0, 20;";
			$donnee=mysqli_query($bdd, $requete);
			while($resultat=$donnee->fetch_array()){
				$requete2="SELECT * FROM `utilisateur` WHERE `idutilisateur`='".$resultat['idutilisateur']."'";
				$donnee2=mysqli_query($bdd,$requete2);
				while($resultat2=$donnee2->fetch_array()){
					if($_SESSION['mail'] == $resultat['idutilisateur']){
						echo("<br>");
						echo ("Offre d'emploi numéro ");
						echo $resultat['idemploi'];
						echo("<br>");
						echo $resultat['description']; 
						echo("<br>");
	?>
						<form method="post" action="SuppressionOffre.php">
						<select name="Supprimer" class="cacher">
							<option value="<?php echo "".$resultat['idemploi']."";?>"></option>
						</select>
						<style type="text/css">
						.cacher
						{
						visibility: hidden;

						}
						</style>
						<input type="submit" name="Supprmer" value="Supprimer l'annonce" >
						</form>
						<br>
						<?php
					}
					else{
						echo("Vous n'avez aucune annonces");
					}
						
				}
			}
						?>	
	<br><br>
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