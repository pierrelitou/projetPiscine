<?php
session_start();
$entreprise = $_POST['entreprise'];
$titre = $_POST['titre'];
$mission = $_POST['mission'];
$debut = $_POST['debut'];
$contrat = $_POST['contrat'];
$duree = $_POST['duree'];
$domaine = $_POST['domaine'];
$ville = $_POST['ville'];
$profil = $_POST['profil'];
$niveau = $_POST['niveau'];

$texte = "L entreprise ".$entreprise." offre un job de ".$titre." et a pour mission ".$mission.". La duree pour ce poste est de ".$duree." et le type de contrat est un contrat ".$contrat." dans le domaine de ".$domaine." et dans la ville de ".$ville.". Le profil recherché est le suivant : ".$profil." et le niveau d étude est ".$niveau.".";
$bdd = mysqli_connect("localhost", "root", "", "piscine");


$today = date("Y-m-d");

$requete = "INSERT INTO `emploi` (`idemploi`, `idutilisateur`, `dateemploi`, `description`) VALUES (NULL, '".$_SESSION['mail']."', '".$today."', '".$texte."')";
mysqli_query($bdd, $requete);

header("location: Emplois.php");

?>