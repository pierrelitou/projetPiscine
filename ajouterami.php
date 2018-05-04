<?php
session_start();
include("connexionbdd.php");
//INSERT INTO `ami` (`idami`, `idutilisateur1`, `idutilisateur2`, `dateamitie`) VALUES (NULL, 'pierre.litou@edu.ece.fr', 'jean2@edu-ece.fr', '2018-05-03'), (NULL, 'jean2@edu-ece.fr', 'pierre.litou@edu.ece.fr', '2018-05-03');

$nouvami=$_POST['choix'];
$requete="INSERT INTO `ami` (`idami`, `idutilisateur1`, `idutilisateur2`, `dateamitie`) VALUES (NULL, '".$_SESSION['mail']."', '".$nouvami."', '2018-05-03'), (NULL, '".$nouvami."', '".$_SESSION['mail']."', '2018-05-03')";

mysqli_query($bdd,$requete);

$requete="SELECT `nom`,`prenom` FROM `utilisateur` WHERE `idutilisateur`='".$_SESSION['mail']."'";
$resultat=mysqli_query($bdd,$requete);
while ($reponse=$resultat->fetch_array()) {
	$notif=$reponse['nom']." ".$reponse['prenom']." vous a ajouté en ami le ".date("Y-m-d");
}


$requete="INSERT INTO `notification`(`idnotification`,`idutilisateur`,`datenotification`,`contenu`) VALUES (NULL,'".$nouvami."','".date("Y-m-d")."','".$notif."')";
mysqli_query($bdd,$requete);
header('location: accueil.php');

