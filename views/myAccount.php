
    <!-- Fullscreen Video Background -->
    <div class="container-fluid" id="myVideo">
        <div id="contentOnVideo" class="row justify-center-center">

            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo1.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div class="col-12">
                <div class="card mb-5">
                    <h3 class="mt-1 mb-3">Mes informations personnelles sur mon compte</h3>
                    <div class="card-header">Pseudo : <strong><?=htmlentities($user->pseudo)?></strong></div>
                    <div class="card-body">
                        <p class="card-text u">Adresse mail : <strong><?=htmlentities($user->mail)?></strong></p>
                        <p class="card-text">Mot de passe : <strong>*************</strong></p>
                        <a href="/controllers/updateAccountCtrl.php" class="btn btn-outline-info">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
