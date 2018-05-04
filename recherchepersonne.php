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

		<div id="afficher">
			<?php
				$recherche = $_POST['zoneRecherche'];
				$requete = "SELECT prenom, nom, profession FROM `utilisateur` WHERE (prenom LIKE '%".$recherche."%' OR nom LIKE'%".$recherche."%') AND idutilisateur!='".$_SESSION['mail']."'";
		
				$res=mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
				while($data=$res->fetch_array())
						{
							echo ('&nbsp;- '.$data['prenom']." ".$data['nom']." ".$data['profession']."&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit'  class='bouton' value='Ajouter'><br>");
						}
				mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
			
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