<?php
session_start();
?>
<?php
$Supprimer = $_POST['Supprimer'];
$bdd = mysqli_connect("localhost", "root", "", "piscine");
$requete="DELETE FROM `emploi` WHERE `emploi`.`idemploi` = ".$Supprimer."";
$donnee=mysqli_query($bdd, $requete);
header("location: Vos_Annonces.php");
?>
