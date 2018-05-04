<?php
session_start();
include('connexionbdd.php');
$requete="INSERT INTO `aime` (`idlike`, `idpost`, `idutilisateur`, `datelike`) VALUES (NULL, '".$_POST['jaime']."', '".$_SESSION['mail']."', '".date("Y-m-d")."');";
mysqli_query($bdd,$requete);

$requete="SELECT `nom`,`prenom` FROM `utilisateur` WHERE `idutilisateur`='".$_SESSION['mail']."'";
$resultat=mysqli_query($bdd,$requete);
while ($reponse=$resultat->fetch_array()) {
	$notif=$reponse['nom']." ".$reponse['prenom']." aime votre publication le ".date("Y-m-d");
}
$requete="SELECT idutilisateur FROM post where idpost='".$_POST['jaime']."'";
$resultat=mysqli_query($bdd,$requete);
while ($reponse=$resultat->fetch_array()) {
	$iduser=$reponse['idutilisateur'];
}

$requete="INSERT INTO `notification`(`idnotification`,`idutilisateur`,`datenotification`,`contenu`) VALUES (NULL,'".$iduser."','".date("Y-m-d")."','".$notif."')";
mysqli_query($bdd,$requete);
header('location: accueil.php');
?>