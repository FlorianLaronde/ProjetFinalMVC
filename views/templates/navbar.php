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
                            <li class="nav-item active">
                                <a class="aNavbar nav-link" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="activites.php">Activités</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="/controllers/userRegisterCtrl.php">Inscription</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="quizz.php">Quizz</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="classement.php">Classement</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="monCompte.php">Mon compte</a></li>
                        </ul>
                        <div id="divInscriptionConnexion">
                            <ul class="d-flex">
                                <li>  <a href="/controllers/userLoginCtrl.php" class="btn btn-dark btn-lg">Se connecter</a></li>
                                <!-- A vérifier -->
                                <li> <a href=""><img src="" alt="S'inscrire"></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>