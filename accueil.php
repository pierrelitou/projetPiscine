<?php
session_start();
include("connexionbdd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="accueil1.css">
</head>
<body>
	
	<header>
		<?php include 'bandeau.php'; ?>
	</header>
	
	<aside id="reseau">
		<?php
		 include 'tableReseau.php'; 
		 ?>
	</aside>
	
	<main>
		<div>
			<form method="post" action="post_publication.php">
				<textarea cols="50" rows="3" name="contenu"></textarea>
				<!--faire bouton pour ajouter photo et 1 pour ajouter vidéo!-->
				<input type="submit" name="publier" id="publier">
				
			</form>
		
		</div>

		<div id="afficher">
			<?php
			$requete="SELECT * FROM `post` ORDER BY `datepost`;";
			$resultat=mysqli_query($bdd,$requete);
			while($reponse=$resultat->fetch_array()){
				$requete2="SELECT `nom`, `prenom` FROM `utilisateur` WHERE `idutilisateur`= '".$reponse['idutilisateur']."'";
				
				$resultat2=mysqli_query($bdd,$requete2);
				?>
				<div id="publication">
				<?php
				while($reponse2=$resultat2->fetch_array()){
					echo ($reponse2['nom']." ".$reponse2['prenom']."<br>".$reponse['datepost']."<br>".$reponse['contenu']."<br><br>");
					?>

					<form method="post" action="commentaire.php">
						<textarea cols="35" rows="1" name="commentaire"></textarea>
						<select name="publieur" class="cacher">
								<option value="<?php echo($reponse['idpost']); ?>"></option>
						</select>
						<input type="submit" name="commenter" value="commenter">
					</form>
					<form method="post" action="jaime.php">
						<select name="jaime" class="cacher">
							<option value="<?php  echo($reponse['idpost']);  ?>"></option>
						</select>
						<?php
						?>
						<input type="submit" name="aimer" value="j'aime">
					</form>
					<?php
				}
				?>
				</div>
				<?php

			}

			?>
		</div>
	
	</main>

	<aside id="contact">
		<?php
		include 'tableContact.php'; 
		?>
	</aside>

	<footer>
		<?php 
		include 'footer.php'; 
		?>
	</footer>

</body>
</html>