<?php 
$anciendatenaissance= $_POST['anciendatenaissance'];
$nouveldatenaissance = $_POST['nouveldatenaissance'];
$reponse='';
$requete0 = "SELECT datedenaissance fROM `utilisateur` WHERE idutilisateur='".$_COOKIE['idutilisateur']."'";

$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete0);

while($data=$res->fetch_array())
	{
		$reponse = $data['datedenaissance'];
	}
if($reponse != $anciendatenaissance)
{
	echo "L'ancienne  date de naissance saisie ne correspond pas à celui enregistré dans la base de données <br><br>";
	echo " cliquez ";
	echo "<a  href='parametres.php' > ici </a> pour revenir en arrière";
}
	
else
{
	
	$requete = "UPDATE `utilisateur` SET `datedenaissance` = '".$nouveldatenaissance."' WHERE idutilisateur = '".$_COOKIE['idutilisateur']."'";
	mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
	header('Location: parametres.php');
	
}
?>