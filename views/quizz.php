    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">
                <form action="" method="POST">

                    <?php $i=0; foreach($recupAllQuestion as $question) { $i++;                      
                        $ramdom = rand(1,4); ?>
                        <div>
                            <h5 class="form-control"> <?= $question->questionQuizz ?> </h5>
                        </div>
                        <?php
                                if($ramdom === 1) {  ?>

                        <div>
                            <label for="answer<?=$i ?>1"> <?= $question->goodAnswers ?> </label>
                            <input type="radio" id="answer<?=$i ?>1" name="answer[<?=$i ?>]" value="<?= $question->goodAnswers ?>" >
                        </div>
                            <?php } ?>
                        <div>
                            <label for="answer<?=$i ?>2"> <?= $question->badAnswers1 ?> </label>
                            <input type="radio" id="answer<?=$i ?>2" name="answer[<?=$i ?>]" value="<?= $question->badAnswers1 ?>" >
                        </div>


                      <?php  if ($ramdom === 2) {  ?>
                        <div>
                            <label for="answer<?=$i ?>1"> <?= $question->goodAnswers ?> </label>
                            <input type="radio" id="answer<?=$i ?>1" name="answer[<?=$i ?>]" value="<?= $question->goodAnswers ?>" >
                        </div>
                      <?php } ?>
                        <div>
                            <label for="answer<?=$i ?>3"> <?= $question->badAnswers2 ?> </label>
                            <input type="radio" id="answer<?=$i ?>3" name="answer[<?=$i ?>]" value="<?= $question->badAnswers2 ?>" >
                        </div>


                        <?php  if ($ramdom === 3) {  ?>
                        <div>
                            <label for="answer<?=$i ?>1"> <?= $question->goodAnswers ?> </label>
                            <input type="radio" id="answer<?=$i ?>1" name="answer[<?=$i ?>]" value="<?= $question->goodAnswers ?>" >
                        </div>
                      <?php } ?>
                        <div>
                            <label for="answer<?=$i ?>4"> <?= $question->badAnswers3 ?> </label>
                            <input type="radio" id="answer<?=$i ?>4" name="answer[<?=$i ?>]" value="<?= $question->badAnswers3 ?>" >
                        </div>


                        <?php  if ($ramdom === 4) {  ?>
                        <div>
                            <label for="answer<?=$i ?>1"> <?= $question->goodAnswers ?> </label>
                            <input type="radio" id="answer<?=$i ?>1" name="answer[<?=$i ?>]" value="<?= $question->goodAnswers ?>" >
                        </div>
                      <?php } ?>

                    <?php } ?>

                        <div>
                            <button class="btn btn-outline-dark w-50" type="submit">Valider mon questionnaire</button>
                        </div>

                </form>
            </div>
        </div>
    </div>