
    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row">

            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo2.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">
                <div class="card mt-5 mb-5">
                    <h3 class="mt-1 mb-3">Mes informations personnelles</h3>
                    <div style="text-transform: uppercase;" class="card-header"><?=htmlentities($user->pseudo)?></div>
                    <div class="card-body">
                        <p class="card-text">Adresse mail :<?=htmlentities($user->mail)?></p>
                        <p class="card-text">Mot de passe : *************</p>
                        <a href="/controllers/updateAccountCtrl.php" class="btn btn-info">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
