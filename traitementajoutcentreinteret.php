<?php 
session_start();
$centreinteret= $_POST['centreinteret'];

	
	$requete = "INSERT INTO `centreinteret` (`idcentreinteret`, `idutilisateur`, `contenu`) VALUES (NULL, '".$_SESSION['mail']."', '".$centreinteret."');";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: vous.php');
	
?>