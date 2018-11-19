<!DOCTYPE html>

<html>
<head>
	<style type="text/css">
		#cadreContact
		{
			min-height: 500px;
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
			$tableau=array();
			while($reponse=$resultat->fetch_array()){
				$requete2="SELECT COUNT(`idutilisateur2`) FROM `ami` WHERE `idutilisateur1` = '".$_SESSION['mail']."' AND `idutilisateur2` = '".$reponse['idutilisateur']."'";
				$reponse2=mysqli_query($bdd,$requete2);
				while ($resultat2=$reponse2->fetch_array()) {
						array_push($tableau, array('ami' => $resultat2['0'] ,'nom'=>$reponse['nom'],'prenom'=>$reponse['prenom'],'mail'=> $reponse['idutilisateur']));
				}
				
			}
			foreach ($tableau as $key => $value) {
				if($value['ami']==0){

						echo $value['nom']." ".$value['prenom'];
						?>
						<form method="post" action="ajouterami.php">
							<select name="choix" id="invisible">
								<option value="<?php echo "".$value['mail'].""; ?>"></option>
							</select>
							<input type="submit" name="ajouter" value="ajouter">
						</form>
						<?php
				}
			}
	
		?>
		
	</div>
</body>
</html>
