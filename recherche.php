<?php
$keywords = $_POST['keywords'];
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
	<?php
				echo ("<br>");
				echo ("Résultat de la recherche :");
				echo ("<br>");
				echo ("<br>");
            if(strlen($keywords) >= 1) {
				$bdd = mysqli_connect("localhost", "root", "", "piscine");
				$req = " SELECT * FROM `emploi` WHERE description LIKE '%".$keywords."%';";
				$donnee3=mysqli_query($bdd,$req);
				while($resultat2=$donnee3->fetch_array()){
				echo ("Offre d'emploi numéro ");
				echo $resultat2['idemploi'];
				echo("<br>");
				echo $resultat2['description']; 
				echo("<br>");
				echo("<br>");
				
            }
        }
		else {
			$bdd = mysqli_connect("localhost", "root", "", "piscine");
			$requete="SELECT * FROM `emploi` LIMIT 0, 20;";
			$donnee=mysqli_query($bdd, $requete);
			while($resultat=$donnee->fetch_array()){
				/*$requete2="SELECT * FROM 'utilisateur' WHERE 'idutilisateur'=`".resultat['idutilisateur']."`";
				$donnee2=mysqli_query($bdd,$requete2);
				while(resultat2=$donnee2->fetch_array()){
					echo
				}*/
				echo ("Offre d'emploi numéro ");
				echo $resultat['idemploi'];
				echo("<br>");
				echo $resultat['description']; 
				echo("<br>");
				echo("<br>");
			}
	}
?>
<form>
<input type="button" name="Retour" value="Retour" onClick="window.location = 'Emplois.php'">

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