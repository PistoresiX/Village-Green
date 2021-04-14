<?php
include("entete.php");
?>
<body>
<div class="container">
        

    <header>
        <div class="row">
            <div class="col-2">
                <img src="../BOOTSTRAP/jarditou_html_zip/images/jarditou_logo.jpg" class="img-fluid rounded float-left d-none d-lg-block" alt="Image responsive" title="Image responsive"></div>
            <div class="col-10">
                <h3 class="text-right d-none d-lg-block">Tout le jardin</h3></div>
        </div>        
    </header>        
    
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                     <p class="mb-0 text-dark">Jarditou.com</p> 
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    
                    
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
                    </ul>
                </div>
                    <form class="form-inline d-none d-lg-block">
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
                <img src="../BOOTSTRAP/jarditou_html_zip/images/promotion.jpg" class="img-fluid m-auto" alt="Image promotion" title="Promotion">
            </div>
        </div>

        <div class="row m-auto">
            <div class="col-8 shadow p-3 bg-white">
                <h2>L'entreprise</h2>
                <p class="text-left">Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme</p>
                <p class="text-left">Créée il a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main motorisés</p>
                <p class="text-left">Implantés à Amiens, nous intervenons dans tout le département de la somme : Albert, Doullens, Péronne, Abbeville, Corbie</p>
                <h2>Qualité</h2>
                <p class="text-left">Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant votre projet. Vous serez séduit par notre expertise,
                    nos compétences et notre sérieux</p>
                <h2>Devis gratuit</h2>
                <p>Vous pouvez bien sûr nous contacter pour de plus amples informations ou pour une demande d'intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.
                    Lorem ipsum dolor si amet consectetur adipisicing elit. Dolores enim voluptatibus soluta perferendis exercitationem eum nisi nesciunt quod quidem, ficilis, sequi
                    explicabo illo ex consequatur amet quibusdam reprehenderit assumenda modi laborum placeat?
                </p>
            </div>
            <div class="col-12 bg-warning col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <h2 class="text-center">[Colonne de droite]</h2>
            </div>
        </div>
        <br>
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
<?php
include("pieddepage.php");
?>