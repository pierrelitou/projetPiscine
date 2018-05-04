<?php
$login = $_POST['mail'];
$reponse = "";
$requete = "SELECT password fROM `utilisateur` WHERE idutilisateur='".$login."'";
$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);

while($data=$res->fetch_array())
	{
		$reponse = $data['password'];
	}

mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));

$header="MIME-Version: 1.0\r\n";
$header.='From:"ECE piscine"<daniel.clarocarvalho@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<br />
			Voici votre nouveau mot de passe :"'.$reponse.'"
			<br />
			<img src="http://www.primfx.com/mailing/separation.png"/>
		</div>
	</body>
</html>
';

mail($login, "ECE PISCINE WEBSERVER", $message, $header);
echo 'Consulter votre boite mail pour connaitre votre mot de passe <br><br>';
echo " cliquez ";
echo "<a  href='connexion.php' > ici </a> pour revenir a la page d'accueil ";
?>
