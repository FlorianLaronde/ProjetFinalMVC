    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
                <div class="col-12 text-center" id="contentOnVideo">

                    <h3>Félicitations</h3>

                   <p>Vouz avez terminé le quizz    !</p>
                   <p>Vous avez obtenu la note de <?= $result ?> !</p>
                   <a href="/controllers/ChoseQuizzCtrl.php" class="btn btn-outline-dark">Retour aux quizz</a>
            </div>
        </div>
    </div>