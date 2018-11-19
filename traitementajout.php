<?php 
session_start();
$competence= $_POST['competence'];
	
	$requete = "INSERT INTO `competence` (`idcompetence`, `idutilisateur`, `contenu`) VALUES (NULL, '".$_SESSION['mail']."', '".$competence."')";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: vous.php');
	
?>