<?php
session_start();
include('connexionbdd.php');
$requete="INSERT INTO `aime` (`idlike`, `idpost`, `idutilisateur`, `datelike`) VALUES (NULL, '".$_POST['jaime']."', '".$_SESSION['mail']."', '".date("Y-m-d")."');";
mysqli_query($bdd,$requete);
header('location: accueil.php');//completer pour créer une notif
?>