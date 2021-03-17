
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



                        <form action="" method="POST">
                            <!-- Pseudo -->
                            <div class="form-group">
                                <label for="id_quizzTheme"></label>
                                <select class="form-control mb-4" name="id_quizzTheme" id="id_quizzTheme" required>
                                    <option selected>Choisissez un thème du quizz</option>

                                    <?php foreach($allQuizzTheme as $newquizz) {?>

                                    <option value="<?=$newquizz->id_quizzTheme?>">    <?=$newquizz->themes?></option>
                                    
                                    <?php } ?>

                                </select>
                                    <div id="idQuizz_error" class="form-text"><?= $errorsArray['idQuizz_error'] ?? ''?></div>
                            </div>

                            <!-- Mail -->
                            <div class="form-group">
                                <label for="title">Choisissez un titre</label>
                                <input name="title" id="title" type="text" class="form-control" pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
                                <div id="title_error" class="form-text"><?= $errorsArray['title_error'] ?? ''?></div>
                            </div>

                    
                                
                            </div>


                            <button class="btn btn-info" type="submit">Créer mon quizz</button>
                  
                    </form>
                </div>
            </div>
        </div>
    </div>