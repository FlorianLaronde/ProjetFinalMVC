    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div>
                <div class="col-lg-12" id="contentOnVideo">
                    <h2>Bienvenue</h2>
                    <form method="POST" action="">
                            <!-- Pseudo -->
                            <div class="form-group">
                                <label for="mail ">Mail :</label>
                                <input id='mail' name="mail" type="email" class="form-control" required autofocus>
                                <span id="ErrorPseudo"></span>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Mot de passe :</label>
                                <input id='password' name="password" type="password" class="form-control" required>
                                <span id="ErrorPassword"></span>
                            </div>
                        
                        <div id="contentVideoButton">
                            <button class="btn btn-info" type="submit">Connexion</button>
                        </div>
                    </form>
                    <div id="contentVideo">
                        <p>Merci de vous connecter pour confirmer votre Mail.<a href="/controllers/inscriptionCtrl.php">ici</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


