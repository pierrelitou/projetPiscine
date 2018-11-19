<?php 
$ancienmotdepasse= $_POST['ancienmdp'];
$nouveaumotdepasse = $_POST['nouveaumdp'];
$reponse='';
$requete0 = "SELECT password fROM `utilisateur` WHERE idutilisateur='".$_COOKIE['idutilisateur']."'";

$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete0);

while($data=$res->fetch_array())
	{
		$reponse = $data['password'];
	}
if($reponse != $ancienmotdepasse)
{
	echo "L'ancien  mot de passe saisi ne correspond pas à celui enregistré dans la base de données <br><br>";
	echo " cliquez ";
	echo "<a  href='parametres.php' > ici </a> pour revenir en arrière";
}
	
else
{
		$requete = "UPDATE `utilisateur` SET `password` = '".$nouveaumotdepasse."' WHERE `utilisateur`.`idutilisateur` = '".$_COOKIE['idutilisateur']."'";

		mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
		mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
		header('Location: parametres.php');
	
}
?>