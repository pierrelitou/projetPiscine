<?php
session_start();
include('connexionbdd.php');
if(isset($_POST['commentaire'])){
	$requete="INSERT INTO `commentaire` (`idcommentaire`, `idpost`, `idutilisateur`, `datecommentaire`, `contenu`) VALUES (NULL, '".$_POST['publieur']."', '".$_SESSION['mail']."', '".date("Y-m-d")."', '".$_POST['commentaire']."');";
	mysqli_query($bdd,$requete);

	$requete="SELECT `nom`,`prenom` FROM `utilisateur` WHERE `idutilisateur`='".$_SESSION['mail']."'";
	$resultat=mysqli_query($bdd,$requete);
	while ($reponse=$resultat->fetch_array()) {
		$notif=$reponse['nom']." ".$reponse['prenom']." a commenté votre publication le ".date("Y-m-d");
	}
	
	$requete="SELECT idutilisateur FROM commentaire where idcommentaire='".$_POST['publieur']."'";
	$resultat=mysqli_query($bdd,$requete);
	while ($reponse=$resultat->fetch_array()) {
		$iduser=$reponse['idutilisateur'];
	}

	$requete="INSERT INTO `notification`(`idnotification`,`idutilisateur`,`datenotification`,`contenu`) VALUES (NULL,'".$iduser."','".date("Y-m-d")."','".$notif."')";
	mysqli_query($bdd,$requete);
	header('location: accueil.php');
}
header('location: accueil.php');//completer pour créer une notif
?>