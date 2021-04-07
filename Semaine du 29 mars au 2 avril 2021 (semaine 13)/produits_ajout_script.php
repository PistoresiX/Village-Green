<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Atelier PHP N°4 - Récupération etenregistrement des données</title>
</head>
<body> 
<?php
require "securite.php";
require "connexion_bdd.php";
$db = connexionBase();

$id = valid_donnees($_POST['id']);
$ref = valid_donnees($_POST['ref']);
$categorie = valid_donnees($_POST['categorie']);
$image = valid_donnees($_POST['image']);
$libelle = valid_donnees($_POST['libelle']);
$exampleFormControlTextarea1 = valid_donnees($_POST['exampleFormControlTextarea1']);
$prix = valid_donnees($_POST['prix']);
$stock = valid_donnees($_POST['stock']);
$couleur = valid_donnees($_POST['couleur']);
$datea = valid_donnees($_POST['datea']);
$datem = valid_donnees($_POST['datem']);
$bloque = valid_donnees($_POST['bloque']);


$requete = "INSERT INTO produits ( pro_ref, pro_cat_id, pro_photo, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_d_ajout, pro_d_modif, pro_bloque ) VALUES ($ref, $categorie, $image, $libelle, $exampleFormControlTextarea1, $prix, $stock, $couleur, $datea, $datem, $bloque)";

$resultat = $db->query($requete);

if ($resultat)
echo "<p>Les infos ont été ajoutées</p>";
else
echo "<p>Erreur</p>";



var_dump($_POST);

?>
</body>
</html> 