<?php//tout fonctionne
session_start();
if(!(include("connexionbdd.php"))){
	echo "erreur";
}
else{
	//faire le blindage pour que tout le mode ne puisse pas rentrer
	$mail=$_POST['adresse'];
	$nom=$_POST['nom'];
	$prenom=$_POST['Prenom'];
	$date=$_POST['date'];
	$sexe=$_POST['sexe'];
	$mdp=$_POST['mdp'];
	$datecreation=date("Y-m-d");

	$requete="INSERT INTO `utilisateur` (`idutilisateur`, `password`, `administrateur`, `prenom`, `nom`, `datedenaissance`, `sexe`, `tel`, `profession`, `habitat`, `datecreation`) VALUES ('".$mail."', '".$mdp."', '0', '".$prenom."', '".$nom."', '".$date."', '".$sexe."', '', '', '', '".$datecreation."');";
	mysqli_query($bdd, $requete);

	mysqli_close($bdd);
	$_SESSION['mail']=$mail;
	$_SESSION['mdp']=$mdp;
	$_SESSION['nom']=$nom;
	$_SESSION['prenom']=$prenom;
	$_SESSION['date']=$date;
	$_SESSION['sexe']=$sexe;
	$_SESSION['datecreation']=$datecreation;

	
	header('Location: accueil.php');
}
?>





