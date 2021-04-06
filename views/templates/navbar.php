 <!-- Création Navbar -->
 <div class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <nav id="navbar" class="col navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <!-- Horloge -->
                <div id="clock">
                    <div id="clock-face">
                        <div id="hours" class="hand"></div>
                        <div id="minutes" class="hand"></div>
                        <div id="seconds" class="hand"></div>
                    </div>
                </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span></button>
                    <div id="navbarContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ">
                            <li class="nav-item active"> <a class="aNavbar nav-link" href="/controllers/homeCtrl.php">Accueil</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/controllers/activitiesCtrl.php">Actualités</a> </li>
                      
                            <?php if(!isset($_SESSION['pseudo'])){?>
                                <li class="nav-item zoom">
                                    <a class="nav-link text-white text-change ml-md-5" href="/controllers/connexionCtrl.php">Connexion</a>
                                </li>
                                <li class="nav-item zoom">
                                    <a class="nav-link text-white text-change ml-md-5" href="/controllers/inscriptionCtrl.php">Inscription</a>
                                </li>
                                <?php }else{?>
                                    <li class="nav-item"> <a class="nav-link" href="/controllers/choseQuizzCtrl.php">Quizz</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="/controllers/rankingCtrl.php">Classement</a> </li>
                                 <li class="nav-item"> <a class="nav-link" href="/controllers/myAccountCtrl.php">Mon compte</a> </li>
                                <li class="nav-item zoom">
                                    <a class="nav-link text-danger text-change ml-md-5" href="/controllers/signoutCtrl.php">Déconnexion</a>
                                </li>
                                <li class="nav-item zoom">
                                    <a class="nav-link text-white text-change ml-md-5" href="">Bonjour <?= $_SESSION['pseudo']?></a>
                                </li>
                            <?php }?>

                        </ul>
                        
                </div>
            </nav>
        </div>
    </div>
</div>