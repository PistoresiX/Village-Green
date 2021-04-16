<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire</title>
    <?php
    require "connexion_bdd.php";
    $db = connexionBase();
    // $pro_id = $_GET["pro_id"];
    // $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;

    // $result = $db->query($requete);
    // $produit = $result->fetch(PDO::FETCH_OBJ);
    ?>
</head>

<body>

    <div class="container">

        <h3 class="text-center">Modifier ou Ajouter un produit</h3>

        <form class="was-validated" action="produits_ajout_script.php" method="POST">
            <div class="form-group">
                <label for="rérérence">Référence</label>
                <input type="text" class="form-control" name="ref" id="ref" value="">
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <input type="text" class="form-control" name="categorie" id="categorie" value="">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" name="image" id="image" value="">
            </div>
            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input type="text" class="form-control" name="libelle" id="libelle" value="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <input class="form-control" name="exampleFormControlTextarea1" id="exampleFormControlTextarea1" value=""
                    rows="2">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text" class="form-control" name="prix" id="prix" value="">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" class="form-control" name="stock" id="stock" value="">
            </div>
            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input type="text" class="form-control" name="couleur" id="couleur" value="">
            </div>

            <div>
                Date d'ajout :
            </div>
            Date de modification :
            <div>
            </div>

            Produit bloqué&nbsp :
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="bloque"><input class="form-check-input" type="radio" name="bloque"
                        id="bloque" value=1>Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="bloque"><input class="form-check-input" type="radio" name="bloque"
                        id="bloque" value=0>Non</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-dark">Ajouter</button>
                <a class="btn btn-dark" href="index.php" role="button">Retour</a>
        </form>


    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>