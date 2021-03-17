
    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row bg-danger justify-content-center">

        
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo2.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div class="col-8" id="contentOnVideo">
                <form method="POST" action="">
                    <h2 class="text-center" >Modifier les questions d'un quizz</h2>
                    <div class="form-group">
                        <label for="questionQuizz" class="form-label">Question 1</label>
                        <input type="text" value="<?= $questionQuizz ?? '' ?>" class="form-control" id="questionQuizz" name="questionQuizz">
                    </div>

                    <div class="form-group">
                        <label for="answer1" class="form-label">Réponse A</label>
                        <input type="text" value="<?= $answer1 ?? '' ?>" class="form-control" id="answer1" name="answer1" aria-describedby="inputGroupPrepend">
                    </div>

                    <div class="form-group">
                        <label for="answer2" class="form-label">Réponse B</label>
                        <input type="text"  value="<?= $answer2 ?? '' ?>" class="form-control" id="answer2" name="answer2" 
                        aria-describedby="inputGroupPrepend">
                    </div>

                    <div class="form-group">
                        <label for="answer3" class="form-label">Réponse C</label>
                        <input type="text"  value="<?= $answer3 ?? '' ?>" class="form-control" id="answer3" name="answer3" 
                        aria-describedby="inputGroupPrepend" >
                    </div>

                    <div class="form-group">
                        <label for="answer4" class="form-label">Réponse D</label>
                        <input type="text"  value="<?= $answer4 ?? '' ?>" class="form-control" id="answer4" name="answer4" 
                        aria-describedby="inputGroupPrepend">
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier une question</button>

                </form>
            </div>
        </div>
    </div>