<?php 
session_start();
$datedebut= $_POST['datedebut'];
$datefin= $_POST['datefin'];
$nomformation= $_POST['nomformation'];
	
	$requete = "INSERT INTO `formation` (`idformation`, `idutilisateur`, `datedebut`, `datefin`, `nomformation`) VALUES (NULL, '".$_SESSION['mail']."', '".$datedebut."', '".$datefin."', '".$nomformation."');";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: vous.php');
	
?>