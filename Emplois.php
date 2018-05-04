<?php 
session_start();
$_SESSION['mail']="benjamin.fornaciari@edu.ece.fr";
?>
<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Emplois.css">
</head>
<body>
	
	<header>
		<?php include("bandeau.php"); ?>
	</header>
	
	<aside id="reseau">
		<?php
		 include("tableReseau.php"); 
		 ?>
	</aside>
	
	<main>
		<form>
			<div>
			 Type de contrat : <select name="contrat" id="contrat">
           <option value="Choisissez">Choisissez un type de contrat</option>
           <option value="Stage">Stage</option>
           <option value="Alternance">Alternance</option>
           <option value="Job étudiant">Job étudiant</option>
           <option value="Thèse">Thèse</option>
           <option value="CDD">CDD</option>
           <option value="CDI">CDI</option>
           <option value="Intérimaire">Intérimaire</option>
       </select> <br>
			Durée : <select name="duree" id="duree">
			<option value="Choisissez une durée">Choisissez une durée</option>
			<option value="Moins de 3 mois">Moins de 3 mois</option>
			<option value="Entre 3 et 6 mois">Entre 3 et 6 mois</option>
			<option value="Entre 6 et 12 mois">Entre 6 et 12 mois<option>
			<option value="Entre 12 et 24 mois">Entre 12 et 24 mois</option>
			<option value="Plus de 24 mois">Plus de 24 mois</option>
			</select><br>
			Métier / Domaine : <select name="domaine" id="domaine">
			<option value="Achat">Achat</option>
			<option value="Aeronauique / Mécanique">Aeronauique / Mécanique</option>
			<option value="Agroalimentaire">Agroalimentaire</option>
			<option value="Architecture">Architecture</option>
			<option value="Art / Culture / Mode">Art / Culture / Mode</option>
			<option value="Audit / Comptabilité">Audit / Comptabilité</option>
			<option value="Automatisme">Automatisme</option>
			<option value="Automobile">Automobile</option>
			<option value="Banque / Assurance">Banque / Assurance</option>
			<option value="Bâtiments / Travaux publiques">Bâtiments / Travaux publiques</option>
			<option value="Chimie / Biologie">Chimie / Biologie</option>
			<option value="Commerce / Vente">Commerce / Vente</option>
			<option value="Communication / Community Management / Publicité">Communication / Community Management / Publicité</option>
			<option value="Défense / Fonction publique">Défense / Fonction publique</option>
			<option value="Design">Design</option>
			<option value="Dévellopement informatique">Dévellopement informatique</option>
			<option value="Droit / Notariat / Fiscalité">Droit / Notariat / Fiscalité</option>
			<option value="Economie">Economie</option>
			<option value="Electronique / Electrotechnique">Electronique / Electrotechnique</option>
			<option value="Entrepreneuriat">Entrepreneuriat</option>
			<option value="Environnement / Ecologie / Agriculture">Environnement / Ecologie / Agriculture</option>
			<option value="Evénementiel">Evénementiel</option>
			<option value="Finance / Contrôle de gestion">Finance / Contrôle de gestion</option>
			<option value="Génie Civil">Génie Civil</option>
			<option value="Géologie / Géochimie / Géophysique">Géologie / Géochimie / Géophysique</option>
			<option value="Graphisme / Multimedia">Graphisme / Multimedia</option>
			<option value="Hôtellerie / Restauration / Tourisme">Hôtellerie / Restauration / Tourisme</option>
			<option value="Immobilier">Immobilier</option>
			<option value="Industrie">Industrie</option>
			<option value="Ingénierie / Gestion de production">Ingénierie / Gestion de production</option>
			<option value="Journalisme / RP / Edition">Journalisme / RP / Edition</option>
			<option value="Langues">Langues</option>
			<option value="Logistique">Logistique</option>
			<option value="Management / Gestion de projet">Management / Gestion de projet</option>
			<option value="Marketing">Marketing</option>
			<option value="Mathématiques / Statistiques">Mathématiques / Statistiques</option>
			<option value="Médical / Paramédical">Médical / Paramédical</option>
			<option value="Physique">Physique</option>
			<option value="Qualité / Sécurité / Hygiène">Qualité / Sécurité / Hygiène</option>
			<option value="Ressources Humaines">Ressources Humaines</option>
			<option value="Sciences Humaines">Sciences Humaines</option>
			<option value="Sciences Politiques">Sciences Politiques</option>
			<option value="Secrétariat / Administration">Secrétariat / Administration</option>
			<option value="Sport / Bien-être / Soin">Sport / Bien-être / Soin</option>
			<option value="Système d'information / Urbanisation des SI">Système d'information / Urbanisation des SI</option>
			<option value="Système / Réseaux / Télécommunications">Système / Réseaux / Télécommunications</option>
			<option value="Travail Social / Animation / Enfance">Travail Social / Animation / Enfance</option>
			</select><br>
			Niveau d'étude : <select name="niveau" id="niveau">
			<option value="Indifférent">Indifférent</option>
			<option value="Bac Pro, BEP, CAP">Bac Pro, BEP, CAP</option>
			<option value="Bac">Bac</option>
			<option value="BTS, DUT, Bac +2">BTS, DUT, Bac +2</option>
			<option value="Licence, M1, Bac +3/4">Licence, M1, Bac +3/4</option>
			<option value="Master, Titre d'Ingénieur, Bac +5">Master, Titre d'Ingénieur, Bac +5</option>
			<option value="Doctorat, Bac +8">Doctorat, Bac +8</option>
			</select> <br>
			
			<input type="submit" name="Recherche" id="Recherche" value="Recherche">
			</div>
			<br>
			<div>
			Vous recherchez des talents ?
			<input type="button" name="Publier une offre d'emploi" value="Publier une offre d'emploi" onClick="window.location = 'Publieroffre.php'">
			</div>
			<div id="Emplois">
			<?php	
			$bdd = mysqli_connect("localhost", "root", "", "piscine");
			$requete="SELECT * FROM `emploi` LIMIT 0, 20;";
			$donnee=mysqli_query($bdd, $requete);
			while($resultat=$donnee->fetch_array()){
				/*$requete2="SELECT * FROM 'utilisateur' WHERE 'idutilisateur'=`".resultat['idutilisateur']."`";
				$donnee2=mysqli_query($bdd,$requete2);
				while(resultat2=$donnee2->fetch_array()){
					echo
				}*/
				echo $resultat['description'];
			}
			?>
			
			</div>
		</form>
	</main>

	<aside id="reseau">
		<?php
		 include("tableContact.php"); 
		 ?>
	</aside>
	
	<footer>
		<?php 
		include("footer.php"); 
		?>
	</footer>

</body>
</html>