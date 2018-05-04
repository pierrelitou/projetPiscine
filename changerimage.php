<?php session_start(); ?>
<?php include("bandeau.php"); ?>

<body>
	<center><form method="post" action="traitementchangerphoto.php">
	
		<?php
			$requete = "SELECT photoprofil fROM `utilisateur` WHERE idutilisateur='".$_SESSION['mail']."'";
			$res = mysqli_query(mysqli_connect('localhost', 'root', '','piscine'),$requete);
			$reponse="null";
			while($data=$res->fetch_array())
			{
				$reponse = $data['photoprofil'];
			}
			mysqli_close(mysqli_connect('localhost', 'root', '','piscine'));
		?>
		<img src = "<?php echo $reponse; ?>" id="photo" height="500" width="500"></a><br> 
		Saisir le lien de votre nouvelle image : <input type="text" name="lienimage"><br><br>
		<input type="submit" name="changerphoto" class="bouton" value="Changer photo de profil"><br>
	</form></center>
<body>
<footer>
	<?php include("footer.php"); ?>
</footer>
