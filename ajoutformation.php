<?php include("bandeau.php"); ?>

<body>
	<center><form method="post" action="traitementajoutformation.php">
		<h2>Ajouter une Formation à votre profil </h3>
		Date de Début : <input type="date" name="datedebut"><br>
		Date de Fin : <input type="date" name="datefin"><br>
		Nom : <input type="text" name="nomformation"><br><br>
		<input type="submit" name="Ajouter cette Formation" class="bouton" value="Ajouter Formation"><br>
	</form></center>
<body>
<footer>
	<?php include("footer.php"); ?>
</footer>
