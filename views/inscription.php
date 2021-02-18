    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div>
                <div class="col-lg-12" id="contentOnVideo">
                    <h2>Bienvenue</h2>
                    <form action="" method="POST">
                        <!-- Pseudo -->
                        <div class="form-group">
                            <label for="pseudo ">Pseudo :</label>
                            <input id='pseudo' name="pseudo" type="text" class="form-control" required autofocus>
                            <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
                        </div>

                        <!-- Mail -->
                        <div class="form-group">
                            <label for="mail ">Mail :</label>
                            <input id='mail' name="mail" type="text" class="form-control" required>
                            <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="Password">Mot de passe :</label>
                            <input id='Password' name="Pseudo" type="password" class="form-control" required>
                            <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
                        </div>

                        <!-- ConfirmPassword -->
                        <div class="form-group">
                            <label for="confirmPassword ">Confirmation du mot de passe :</label>
                            <input id='confirmPassword' name="confirmPassword" type="password" class="form-control"
                                required>
                            <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
                            
                        </div>
                    </form>
                    <div id="contentVideoButton">
                        <button class="btn btn-danger" type="reset">Annuler</button>
                        <button class="btn btn-info" type="submit">Connexion</button>
                    </div>
                    <div id="contentVideo">
                        <p>Déjà inscrit ? Connecter vous juste <a href="connexion.html">ici</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <a class="aNavbar nav-link" href="index.html">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="activites.html">Activités</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="inscription.html">Inscription</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="quizz.html">Quizz</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="classement.html">Classement</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="monCompte.html">Mon compte</a></li>
                        </ul>
                        <div id="divInscriptionConnexion">
                            <ul class="d-flex">
                                <li> <button type="button" class="btn btn-dark btn-lg">Se connecter</button></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>

