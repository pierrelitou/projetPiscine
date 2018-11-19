<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Projet Piscine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="vous2.css">
	</head>
	<body>
		<header>
			<?php include("bandeau.php");?>
		</header>
		
		<aside>
		</aside>
		
		<main>
		<br>
		<?php 
		$requete = "SELECT photoprofil fROM `utilisateur` WHERE idutilisateur='".$_SESSION['mail']."'";
		$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
		$reponse="null";
		while($data=$res->fetch_array())
		{
			$reponse = $data['photoprofil'];
		}
		mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));

		?>
			<div id="cadreinfo">
				<img src = "<?php echo $reponse; ?>" id="photo"><br>
					<div id="cadresecondaireinfo">
					</div>
			</div>
			<div id="cadrepage">
					<center><h2> Vos compétences </h2></center>
					<?php 
						$requete = "SELECT contenu FROM `competence` WHERE idutilisateur='".$_SESSION['mail']."'";
						$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
						while($data=$res->fetch_array())
						{
							echo ('&nbsp;- '.$data['contenu'].'<br>');
						}
						mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
					?>
				
				
				<form method="post" action = "ajoutcompetence.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="ajoutcompetence" class="bouton" value="Ajouter Competence"  >
				</form>
			
			</div>
		</main>
		
		<aside>
		</aside>
		
		<footer>
			<?php include("footer.php");?>
		</footer>
	<body>
<html>