<?php
    // var_dump($_POST);

    // Récupération des données du formulaires
    $ref = $_POST['ref'];
    $categorie = $_POST['categorie'];
    $image = $_POST['image'];
    $libelle = $_POST['libelle'];
    $exampleFormControlTextarea1 = $_POST['exampleFormControlTextarea1'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $couleur = $_POST['couleur'];
    $bloque = $_POST['bloque'];
    $d_ajout = date("y/m/d");

    var_dump($ref);
    var_dump($categorie);
    var_dump($image);
    var_dump($libelle);
    var_dump($exampleFormControlTextarea1);
    var_dump($prix);
    var_dump($stock);
    var_dump($couleur);
    var_dump($bloque);


    // Preparation de la connexion BDD.
    require_once("connexion_bdd.php");
    $db = connexionBase("localhost","root","","jarditou");

    // Préparation de la requete.
    $requete = $db->prepare("INSERT INTO produits(pro_ref, pro_cat_id, pro_photo, pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_d_ajout)
    VALUES(:ref,:categorie,:photo,:libelle,:exampleFormControlTextarea1,:prix,:stock,:couleur,:d_ajout)");
    $requete->bindValue(":ref",$ref);
    $requete->bindValue(":categorie",$categorie);
    $requete->bindValue(":photo",$image);
    $requete->bindValue(":libelle",$libelle);
    $requete->bindValue(":exampleFormControlTextarea1",$exampleFormControlTextarea1);
    $requete->bindValue(":prix",$prix);
    $requete->bindValue(":stock",$stock);
    $requete->bindValue(":couleur",$couleur);
    $requete->bindValue(":d_ajout",$d_ajout);

    // Execution de la requête
    $resultat = $requete->execute();
    // var_dump($resultat);

    header("Location:tableau_produits.php");
?>