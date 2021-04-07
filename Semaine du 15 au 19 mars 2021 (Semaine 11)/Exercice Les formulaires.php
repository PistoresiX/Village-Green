<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <title>Exo 5 js</title>
</head>
<body>
<div class="container">
        

    <header>
        <div class="row">
            <div class="col-2">
                <img src="../PHP/jarditou_logo.jpg" class="img-fluid rounded float-left" alt="Image responsive" title="Image responsive"></div>
            <div class="col-10">
                <h3 class="text-right">La qualité depuis 70 ans</h3></div>
        </div>        
    </header>   
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>   
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <p class="mb-0 text-dark">Jarditou.com</p>
                    
                    <ul class="navbar-nav">                       
                        <li class="nav-item">
                            <a class="nav-link" href="../BOOTSTRAP/Bootstrap Acceuil.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../BOOTSTRAP/Bootstrap tableau.html">Tableau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../BOOTSTRAP/Bootstrap Contact.html">Contact</a>
                        </li>
                </div>
                    <form class="form-inline">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="text" id="codePromo" placeholder="Votre promotion">     
                            </div>
                                <button type="submit" class="btn btn-outline-success">Rechercher</button>
                    </form>            
                 </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img src="../PHP/promotion.jpg" class="img-fluid m-auto" alt="Image promotion" title="Promotion">
            </div>
        </div>


       


<div class="row">
    <div class="col-12">
        <form action="C:\wamp\www\PHP\script.php" method="GET"  id="formulaire_contact">
            
                <h1>Vos coordonées</h1>

                <div class="form-group">
                    <label for="name">Nom*</label>
                    <input type="text" class="form-control" name="nom" placeholder="Veuillez saisir votre nom" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "nom") 
                        {
                          echo"Le nom doit être renseigné.";  
                        }
                        ?>                            
                    <label for="name">Prénom*</label>
                    <input type="text" class="form-control"name="prenom" placeholder="Veuillez saisir votre prénom" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "prenom") 
                        {
                            echo"Le prénom doit être renseigné.";  
                        }
                        ?> 
                    <div id="erreurPrenom" class="Erreur"></div>
                </div>      
                <label>Sexe*</label>
                <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "sexe") 
                        {
                          echo"Le sexe doit être renseigné.";  
                        }
                        ?>
                    <label class="form-check-label" id="feminin">Féminin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "sexe") 
                        {
                          echo"Le sexe doit être renseigné.";  
                        }
                        ?>
                    <label class="form-check-label" id="masculin">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "sexe") 
                        {
                          echo"Le sexe doit être renseigné.";  
                        }
                        ?>
                    <label class="form-check-label" id="neutre">Neutre</label>
                </div>
                </div>

                <div class="form-group">      
                    <label for="name">Date de naissance*</label>
                    <input type="date" class="form-control" name="birth" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>"> 
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "birth") 
                        {
                          echo"La date d'anniversaire doit être renseigné.";  
                        }
                        ?>       
                    <div id="erreurDate" class="Erreur"></div>
                </div>

                <div class="form-group">
                    <label for="code">Code Postal*</label>
                    <input id="codepostal" type="cp" class="form-control" name="cp" placeholder="Code Postal" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "cp") 
                        {
                          echo"Le CP doit être renseigné.";  
                        }
                        ?>
                    <div id="erreurCP" class="Erreur"></div>

                    <label for="adresse">Adresse</label>
                    <input type="adresse" class="form-control" name="Adresse" id="adresse" placeholder="Adresse">
                    <div id="erreurAdr" class="Erreur"></div>

                    <label for="city">Ville</label>
                    <input id="ville" type="city" class="form-control" name="ville" placeholder="Ville">
                    <div id="erreurVille" class="Erreur"></div>

                    <label for="courriel">Email*</label>
                    <input id="mail" type="" class="form-control" name="courriel" placeholder="dave.loper@afpa.fr" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>">
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "courriel") 
                        {
                          echo"Le mail doit être renseigné.";  
                        }
                        ?>
                    <div id="erreurMail" class="Erreur"></div>
                </div>

                <h1>Votre demande</h1>

                <div class="form-group">
                    <label for="sujet">Sujet*</label>
                    <select class="form-control" name="sujet" id="sujet">
                        <option value="1">Veuillez séléctionner un sujet</option>
                        <option value="2">Mes commandes</option>
                        <option value="3">Question sur un produit</option>
                        <option value="4">Réclamation</option>
                        <option value="5">Autres</option>           
                    </select>
                    <div id="erreurSujet" class="Erreur"></div> 

                    <label for="question">Votre question*</label>
                    <div class="input-group" >
                    <textarea class="form-control" id="question" aria-label="With textarea" value="<?php if(isset($_GET['erreur']) && ($_GET['erreur'] )) ?>"></textarea>
                        <?php 
                        if ( isset($_GET["erreur"]) && ($_GET["erreur"]) == "textarea") 
                        {
                          echo"Le champ doit être renseigné.";  
                        }
                        ?>
                    </div> 
                    <div id="erreurQuest" class="Erreur"></div>   
                    <br>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="form-check-input" id="accept">
                        J'accepte le traitement informatique de ce formulaire.<br>
                        <div id="erreurAccept" class="Erreur"></div>
                    </div>

                    <button id="envoie" type="submit" class="btn btn-dark">Envoyer</button>
                    <button type="reset" class="btn btn-dark">Annuler</button>
                </div>
    </form>
    </div>
</div>
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>   
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                   
                    
                    <ul class="navbar-nav">                       
                        <li class="nav-item">
                            <a class="nav-link" href="../BOOTSTRAP/Bootstrap Acceuil.html">mentions légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../BOOTSTRAP/Bootstrap Acceuil.html">horaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../BOOTSTRAP/Bootstrap Acceuil.html">plan du site</a>
                        </li>
                    </ul>
                </div>
                   
                    </form>            
                 </nav>
            </div>
        </div>
</div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <script src="../JAVA SCRIPT/Evaluation javascript Exercice 5.js"></script>
</body>
</html>