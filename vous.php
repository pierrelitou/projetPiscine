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
				<a href="changerimage.php"><img src = "<?php echo $reponse; ?>" id="photo"></a><br>
					<div id="cadresecondaireinfo">
					</div>
			</div>
			<div id="cadrepage">
				<div id="cadreactivite">
					<h3> Vos activités sur le réseau </h3>
				</div>
			
				<div id="cadrecompetence">
					<h3> Vos compétences </h3>
					<?php 
						$requete = "SELECT contenu FROM `competence` WHERE idutilisateur='".$_SESSION['mail']."' LIMIT 0, 5 ";
						$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
						while($data=$res->fetch_array())
						{
							echo ('&nbsp;- '.$data['contenu'].'<br>');
						}
						mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
					?>
				</div>
				
				<form method="post" action = "ajoutcompetence.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="ajoutcompetence" class="bou" value="Ajouter Competence"  >
				</form>
				<form method="post" action = "affichecompetence.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="affichecompetence" class="bou" value="Afficher toutes les Competence" >
				</form>
			
				<div id="cadreformation">
					<h3> Vos formations </h3>
					<?php 
						$requete = "SELECT datedebut, datefin, nomformation FROM `formation` WHERE idutilisateur='".$_SESSION['mail']."' LIMIT 0, 5 ";
						$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
						while($data=$res->fetch_array())
						{
							echo ('&nbsp;- Début : '.$data['datedebut']." Fin : ".$data['datefin']." Nom : ".$data['nomformation'].'<br>');
						}
						mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
					?>
				</div>
				
				<form method="post" action = "ajoutformation.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="ajoutformation" class="bou" value="Ajouter Formation"  >
				</form>
				<form method="post" action = "afficheformation.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="afficheformation" class="bou" value="Afficher toutes les Formations" >
				</form>
				
				<div id="cadreexperience">
					<h3> Vos expériences </h3>
					<?php 
						$requete = "SELECT contenu FROM `experience` WHERE idutilisateur='".$_SESSION['mail']."' LIMIT 0, 5 ";
						$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
						while($data=$res->fetch_array())
						{
							echo ('&nbsp;- '.$data['contenu'].'<br>');
						}
						mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
					?>
				</div>
				
				<form method="post" action = "ajoutexperience.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="ajoutexperience" class="bou" value="Ajouter Expérience"  >
				</form>
				<form method="post" action = "afficheexperience.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="afficheexperience" class="bou" value="Afficher toutes les Expériences" >
				</form>
				
				<div id="cadreinteret">
					<h3> Vos centres d'intérêts </h3>
					<?php 
						$requete = "SELECT contenu FROM `centreinteret` WHERE idutilisateur='".$_SESSION['mail']."' LIMIT 0, 5 ";
						$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
						while($data=$res->fetch_array())
						{
							echo ('&nbsp;- '.$data['contenu'].'<br>');
						}
						mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
					?>
				</div>
				
				<form method="post" action = "ajoutinteret.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="ajoutinteret" class="bou" value="Ajouter Centre d'intérêt"  >
				</form>
				<form method="post" action = "afficheinteret.php" id="bandeau" >
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="afficheinteret" class="bou" value="Afficher tous les Centres d'intérêts" >
				</form>
				</div>
			</div>
			<div id="contact">
				<?php include("tableContact.php"); ?>
			</div>
		</main>
		
		<aside>
		</aside>
		
		<footer>
			<?php include("footer.php");?>
		</footer>
	<body>
<html>
