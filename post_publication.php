<?php
session_start();
include('connexionbdd.php');
if(isset($_POST['contenu'])){
	$requete="INSERT INTO `post` (`idpost`, `idutilisateur`, `datepost`, `contenu`) VALUES (NULL, '".$_SESSION['mail']."', '".date('Y-m-d')."', '".$_POST['choix']."');";
	mysqli_query($bdd,$requete);
}
header('location: accueil.php');
?>