
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#cadreContact
		{
			height: 300px;
			width: 350px;
			border:hidden;
			background-color: rgb(231,245,243);
			text-align: center;

		}
		#invisible{
			visibility: hidden;
		}

		#ami{
			padding: 5px;
			 
		}
	</style>
</head>
<body>
	<div id="cadreContact">
		<h3>Contact</h3>
		<?php  
			$bdd = mysqli_connect('localhost', 'root', '', 'piscine');
			$requete="SELECT `idutilisateur2` FROM `ami` WHERE `idutilisateur1`='".$_SESSION['mail']."' ";
			$resultat=mysqli_query($bdd,$requete);
			while($reponse=$resultat->fetch_array()){
				$requete2="SELECT `nom`,`prenom` FROM `utilisateur` WHERE `idutilisateur`='".$reponse['idutilisateur2']."'";
				$resultat2=mysqli_query($bdd,$requete2);
				while($reponse2=$resultat2->fetch_array()){
					?>
					<div id="ami">
						<?php
						echo $reponse2['nom']." ".$reponse2['prenom'];
						?>
						<form method="post" action="">
							<select name=choix id=invisible>
								<option value="<?php echo "".$contact['idutilisateur'].""; ?>"></option>
							</select>
							<input type="submit" name="message" value="envoyer un message">
						</form>
						</div>
					<?php
				}
			}
		?>
	</div>
</body>
</html>