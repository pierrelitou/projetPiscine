<?php 
session_start();
$lien= $_POST['lienimage'];

	
	$requete = "UPDATE `utilisateur` SET `photoprofil` = '".$lien."' WHERE `utilisateur`.`idutilisateur` = '".$_SESSION['mail']."';";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: vous.php');
	
?>