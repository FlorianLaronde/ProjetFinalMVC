
    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row bg-danger justify-content-center">

        
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div class="col-10" id="contentOnVideo">
                <form method="POST" action="">

                        <h2 class="text-center" >Modifier des questions d'un quizz</h2>
                        <div class="form-group">
                            <label for="questionQuizz" class="form-label">Question 1</label>
                            <input type="text" value="<?= $allQuestion->questionQuizz ?? '' ?>" class="form-control" id="questionQuizz" name="questionQuizz">
                        </div>

                        <div class="form-group">
                            <label for="answer1" class="form-label">Réponse A</label>
                            <input type="text" value="<?= $allQuestion->goodAnswers ?? '' ?>" class="form-control" id="answer1" name="answer1" aria-describedby="inputGroupPrepend">
                        </div>

                        <div class="form-group">
                            <label for="answer2" class="form-label">Réponse B</label>
                            <input type="text"  value="<?= $allQuestion->badAnswers1 ?? '' ?>" class="form-control" id="answer2" name="answer2" 
                            aria-describedby="inputGroupPrepend">
                        </div>

                        <div class="form-group">
                            <label for="answer3" class="form-label">Réponse C</label>
                            <input type="text"  value="<?= $allQuestion->badAnswers2 ?? '' ?>" class="form-control" id="answer3" name="answer3" 
                            aria-describedby="inputGroupPrepend" >
                        </div>

                        <div class="form-group">
                            <label for="answer4" class="form-label">Réponse D</label>
                            <input type="text"  value="<?= $allQuestion->badAnswers3 ?? '' ?>" class="form-control" id="answer4" name="answer4" 
                            aria-describedby="inputGroupPrepend">
                        </div>


                    <button type="submit" class="btn btn-outline-dark mb-5">Modifier une question</button>

                </form>
            </div>
        </div>
    </div>