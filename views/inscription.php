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
                    <form action="" method="POST">
                            <!-- Pseudo -->
                            <div class="form-group">
                                <label for="pseudo ">Pseudo :</label>
                                <input id='pseudo' name="pseudo" type="text" class="form-control" required autofocus
                                pattern="[A-Za-z-éèêëàâäôöûüç0-9\-\.]+">
                                <div id="pseudo_error" class="form-text"><?= $errorsArray['pseudo_error'] ?? ''?></div>
                            </div>

                            <!-- Mail -->
                            <div class="form-group">
                                <label for="mail ">Mail :</label>
                                <input id='mail' name="mail" type="email" class="form-control" required>
                                <div id="mail_error" class="form-text"><?= $errorsArray['mail_error'] ?? ''?></div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Mot de passe :</label>
                                <input id='password' name="password" type="password" class="form-control" required>
                                <div id="password_error" class="form-text"><?= $errorsArray['password_error'] ?? ''?></div>
                            </div>

                            <!-- ConfirmPassword -->
                            <div class="form-group">
                                <label for="confirmPassword">Confirmation du mot de passe :</label>
                                <input id='confirmPassword' name="confirmPassword" type="password" class="form-control"
                                    required>
                                <div id="confirmPassword_error" class="form-text"><?= $errorsArray['confirmPassword_error'] ?? ''?></div>
                                
                            </div>
                        <div id="contentVideoButton">
                            <button name="valider" class="btn btn-info" type="submit">Inscription</button>
                        </div>
                    </form>
                    <div id="contentVideo">
                        <p>Déjà inscrit ? Connecter vous juste <a href="/controllers/connexionCtrl.php">ici</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- *********************************************************************** -->

<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Les mots de passe ne correspondent pas!");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

</script>


