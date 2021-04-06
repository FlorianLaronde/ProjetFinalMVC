
    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row">

            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo1.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">
                <form method="POST">
                    <h2>Mes informations</h2>
                    <div class="form-group">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" value="<?= $pseudo ?? '' ?>" class="form-control" id="pseudo" name="pseudo" pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
                        <div class="valid-feedback">Parfait!</div>
                        <div class="invalid-feedback">Merci de choisir un nouveau pseudo valide.</div>
                    </div>

                    <div class="form-group">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" value="<?= $mail ?? '' ?>" class="form-control" id="mail" name="mail" aria-describedby="inputGroupPrepend"
                                >
                        <div class="valid-feedback">Parfait!</div>
                        <div class="invalid-feedback">Merci de choisir une nouvelle adresse mail valide.</div>
                    </div>

                    <div class="form-group">
                        <label for="lastPassword" class="form-label">Ancien mot de passe</label>
                        <input type="password" class="form-control" id="lastPassword" name="lastPassword" 
                        aria-describedby="inputGroupPrepend">
                        <div class="valid-feedback">Parfait!</div>
                        <div class="invalid-feedback">Ancien mot de passe incorrect.</div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" 
                        aria-describedby="inputGroupPrepend" >
                        <div class="valid-feedback">Parfait!</div>
                        <div class="invalid-feedback">Nouveau mot de passe incorrect.</div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirmer nouveau mot de passe</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" 
                        aria-describedby="inputGroupPrepend">
                        <div class="valid-feedback">Parfait!</div>
                        <div class="invalid-feedback">Confirmation nouveau mot de passe incorrect.</div>
                    </div>

                    <button type="submit" class="btn btn-outline-info mb-3">Modifier mon compte</button>

                </form>
            </div>
        </div>
    </div>

