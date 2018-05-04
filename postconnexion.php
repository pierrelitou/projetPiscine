<?php 
session_start();
if(!include("connexionbdd.php"))
{
	echo 'problème de connexion';
}
else
{
	$reponse1="null";
	$reponse2="null";
	
	$idutilisateur= $_POST['idutilisateur'];
	$password = $_POST['password'];
	
	$requete = "SELECT idutilisateur,password FROM `utilisateur` WHERE idutilisateur='".$idutilisateur."' AND password='".$password."'";
	
	
	$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
	while($data=$res->fetch_array())
	{
		$reponse1 = $data['idutilisateur'];
		$reponse2 = $data['password'];
	}
		
	if(($reponse1 == $idutilisateur)&&($reponse2 == $password))
	{
		if(isset ($_POST['rester']))
		{
			if(isset($idutilisateur))
			{
				setcookie('idutilisateur',$idutilisateur,time() + 365*24*3600,null, null, false, true);
			}
			if(isset($password))
			{
				setcookie('password',$password,time() + 365*24*3600,null, null, false, true);
			}
			$idutilisateur = $_COOKIE['idutilisateur'];
			$password = $_COOKIE['password'];
		}
		$nom = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),"SELECT nom FROM `utilisateur` WHERE idutilisateur='".$idutilisateur."'");
		$prenom = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),"SELECT prenom FROM `utilisateur` WHERE idutilisateur='".$idutilisateur."'");
		$sexe = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),"SELECT sexe FROM `utilisateur` WHERE idutilisateur='".$idutilisateur."'");
		$datenaissance = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),"SELECT datedenaissance FROM `utilisateur` WHERE idutilisateur='".$idutilisateur."'");
		$datecreation = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),"SELECT datecreation FROM `utilisateur` WHERE idutilisateur='".$idutilisateur."'");
		
		$_SESSION['mail']=$idutilisateur;
		$_SESSION['mdp']=$password;
		$_SESSION['nom']=$nom;
		$_SESSION['prenom']=$prenom;
		$_SESSION['sexe']=$sexe;
		$_SESSION['date']=$datenaissance;
		$_SESSION['datecreation']=$datecreation;
		
		mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
		header('Location: vous.php');
	}
	else
	{
		echo "L'adresse mail saisie et le mot de passe ne correspondent à aucun profil chez nous !<br>";
		echo " cliquez ";
		echo "<a  href='connexion.php' > ici </a> pour revenir en arrière";
	}
	
}
?>