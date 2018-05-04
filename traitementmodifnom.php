<?php 
$anciennom= $_POST['anciennom'];
$nouveaunom = $_POST['nouveaunom'];
$reponse='';
$requete0 = "SELECT nom fROM `utilisateur` WHERE idutilisateur='".$_COOKIE['idutilisateur']."'";

$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete0);

while($data=$res->fetch_array())
	{
		$reponse = $data['nom'];
	}
if($reponse != $anciennom)
{
	echo "L'ancien  nom saisi ne correspond pas à celui enregistré dans la base de données <br><br>";
	echo " cliquez ";
	echo "<a  href='parametres.php' > ici </a> pour revenir en arrière";
}
	
else
{
	
	$requete = "UPDATE `utilisateur` SET `nom` = '".$nouveaunom."' WHERE idutilisateur = '".$_COOKIE['idutilisateur']."'";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: parametres.php');
	
}
?>