<?php
session_start();
include('connexionbdd.php');
if(isset($_POST['commentaire'])){
	$requete="INSERT INTO `commentaire` (`idcommentaire`, `idpost`, `idutilisateur`, `datecommentaire`, `contenu`) VALUES (NULL, '".$_POST['publieur']."', '".$_SESSION['mail']."', '".date("Y-m-d")."', '".$_POST['commentaire']."');";
	mysqli_query($bdd,$requete);


}
header('location: accueil.php');//completer pour créer une notif
?>