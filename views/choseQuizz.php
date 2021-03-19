    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div class="col-12" id="contentOnVideo">
                <h2 class="text-center">Quizz</h2>
                <div class="d-flex col-12">
                    <div class="col-6 text-left">

                        <?php $i=0; foreach($allQuizzTitle as $quizz) { $i++; ?>

                        <button onclick="window.location.href='/controllers/quizzCtrl.php?id_quizz=<?=$quizz->id_quizz?>'" class="btn"><span>Quizz <?= $i  ?> : <?=$quizz->title ?> (<?= $quizz->themes ?>)</span></button>

                        <?php } ?>

                        <button onclick="window.location.href='/controllers/quizzListCtrl.php'" class="btn mt-5 mb-5"><span>Créer un quizz</span></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
