
    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row">

            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo2.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">
                <div class="text-center">
                    <h2>Créer un nouveau quizz</h2>

                        <form method="POST" action="">

                            <label for="title">Choisissez un titre</label>
                            <input name="title" id="title" type="text" class="form-control" pattern="[A-Za-z-éèêëàâäôöûüç' ]+">

                            <label class="form-label" for="idQuizz"></label>
                            <select class="form-control mb-4" name="idQuizz" id="idQuizz" required>
                                <option selected>Choisissez un thème du quizz</option>

                                <?php foreach($allQuizzTheme as $newquizz) {?>

                                <option value="<?=$newquizz->id?>">    <?=$newquizz->themes?></option>
                                
                                <?php } ?>

                            </select>
                            <div id="idPatients_error" class="form-text"><?= $errorsArray['idPatients_error'] ?? ''?></div>
                        
                            <a href="" class="btn btn-info" type="submit">Créer mon quizz</a>

                        </form>
                </div>
            </div>
        </div>
    </div>