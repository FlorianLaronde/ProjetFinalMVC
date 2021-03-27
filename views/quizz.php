    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">
                <h3>Quizz</h3>
                <form action="" method="POST">

                    <?php $i=0; foreach($recupAllQuestion as $question) { $i++; ?>
                        <div>
                            <h5> <?= $question->questionQuizz ?> </h5>
                        </div>

                        <div>
                            <label for="answer"> <?= $question->goodAnswers ?> </label>
                            <input type="radio" id="answer" name="answer<?=$i ?>" value="<?= $i ?>" >
                        </div>

                        <div>
                            <label for="answer"> <?= $question->badAnswers1 ?> </label>
                            <input type="radio" id="answer" name="answer<?= $i ?>" >
                        </div>

                        <div>
                            <label for="answer"> <?= $question->badAnswers2 ?> </label>
                            <input type="radio" id="answer" name="answer<?= $i ?>" >
                        </div>

                        <div>
                            <label for="answer"> <?= $question->badAnswers3 ?> </label>
                            <input type="radio" id="answer" name="answer<?= $i ?>" >
                        </div>

                    <?php } ?>

                        <div>
                            <a class="btn btn-info" type="submit" href="/controllers/quizzDoneCtrl.php">Valider mon questionnaire</a>
                        </div>

                </form>
            </div>
        </div>
    </div>