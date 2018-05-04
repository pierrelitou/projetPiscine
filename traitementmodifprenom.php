<?php 
$ancienprenom= $_POST['ancienprenom'];
$nouveauprenom = $_POST['nouveauprenom'];
$reponse='';
$requete0 = "SELECT prenom fROM `utilisateur` WHERE idutilisateur='".$_COOKIE['idutilisateur']."'";

$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete0);

while($data=$res->fetch_array())
	{
		$reponse = $data['prenom'];
	}
if($reponse != $ancienprenom)
{
	echo "L'ancien  prénom saisi ne correspond pas à celui enregistré dans la base de données <br><br>";
	echo " cliquez ";
	echo "<a  href='parametres.php' > ici </a> pour revenir en arrière";
}
	
else
{
	
	$requete = "UPDATE `utilisateur` SET `prenom` = '".$nouveauprenom."' WHERE idutilisateur = '".$_COOKIE['idutilisateur']."'";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: parametres.php');
	
}
?>