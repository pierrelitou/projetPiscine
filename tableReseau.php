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

		#contact{

		}

		#invisible{
			visibility: hidden;
		}
	</style>
</head>
<body>
	<div id="cadreContact">
		<h3>Etendez votre Réseau</h3>
		<?php  
			$bdd = mysqli_connect('localhost', 'root', '', 'piscine');
			$requete="SELECT * FROM `utilisateur` WHERE `idutilisateur` != '".$_SESSION['mail']."';";
			$resultat=mysqli_query($bdd,$requete);
			while($reponse=$resultat->fetch_array()){
				echo" ".$reponse['nom']." ".$reponse['prenom']."<br>";
				$requete2="SELECT COUNT(`idutilisateur2`) FROM `ami` WHERE `idutilisateur1` = '".$_SESSION['mail']."' AND `idutilisateur2` = '".$reponse['idutilisateur']."'";
						?>
						<form>
							<select name="choix" id="invisible">
								<option value="<?php echo "".$contact['idutilisateur'].""; ?>"></option>
							</select>
							<input type="submit" name="ajouter" value="ajouter">
						</form>
					<?php
			}
		?>
		
	</div>
</body>
</html>
