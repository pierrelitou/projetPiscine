<?php 
$mail= $_POST['mail'];
$reponse='';
$requete0 = "SELECT password fROM `utilisateur` WHERE idutilisateur='".$mail."'";

$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete0);

while($data=$res->fetch_array())
	{
		$reponse = $data['password'];
	}
$mail="dany78500@live.fr";
$message = "Bonjour ".$mail.". Voici votre mot de passse : ".$reponse."";



//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour ".$mail.". Voici votre mot de passse : ".$reponse."";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========
$passage_ligne="\n";
//=====Création du header de l'e-mail.
$header = "From: \"WeaponsB\"<dany78500@live.fr>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <dany78500@live.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========

?>