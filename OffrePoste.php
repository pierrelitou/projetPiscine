<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Emplois.css">
</head>
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


if (strlen($entreprise) == 0 || strlen($titre) == 0 || strlen($mission) == 0 || strlen($debut) == 0 || strlen($ville) == 0 || strlen($profil) == 0 || $contrat == "Choisissez" || $duree == "Choisissez une durée"){
	?>
		<header>
		<?php include("bandeau.php"); ?>
	</header>
	
	<aside id="reseau">
		<?php
		 include("tableReseau.php"); 
		 ?>
	</aside>
	<main>
	
	<?php
	echo ("Veuillez remplir tous les champs et/ou sélectionner des contrats/durées valables");
	echo ("<br>");
	?>
		<form>
<input type="button" name="Retour" value="Retour" onClick="window.location = 'Emplois.php'">
</form>
	</main>
		<aside id="reseau">
		<?php
		 include("tableContact.php"); 
		 ?>
	</aside>
	
	<footer>
		<?php 
		include("footer.php"); 
		?>
	</footer>
<?php
}
else {
$texte = "L entreprise ".$entreprise." offre un job de ".$titre." et a pour mission ".$mission.". La duree pour ce poste est de ".$duree." et le type de contrat est un contrat ".$contrat." dans le domaine de ".$domaine." et dans la ville de ".$ville.". Le profil recherché est le suivant : ".$profil." et le niveau d étude est ".$niveau.".";
$bdd = mysqli_connect("localhost", "root", "", "piscine");


$today = date("Y-m-d");

$requete = "INSERT INTO `emploi` (`idemploi`, `idutilisateur`, `dateemploi`, `description`) VALUES (NULL, '".$_SESSION['mail']."', '".$today."', '".$texte."')";
mysqli_query($bdd, $requete);
header("location: Emplois.php");
}

?>
</html>