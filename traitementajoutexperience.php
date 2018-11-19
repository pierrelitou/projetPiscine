<?php 
session_start();
$experience= $_POST['experience'];

	
	$requete = "INSERT INTO `experience` (`idexperience`, `idutilisateur`, `contenu`) VALUES (NULL, '".$_SESSION['mail']."', '".$experience."'); ";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: vous.php');
	
?>