
    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row">

            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">
                <div class="text-center">
                    <h2>Modifier title et theme quizz</h2>

                    <form action="" method="POST">
                
                            <div class="form-group">
                                <label for="id_quizzTheme"></label>
                                <select class="form-control mb-4" name="id_quizzTheme" id="id_quizzTheme" required>
                                    <option selected>Choisissez un thème du quizz</option>

                                    <?php foreach($allTheme as $theme) {?>

                                    <option value="<?=$theme->id_quizzTheme?>">    <?=$theme->themes?></option>
                                    
                                    <?php } ?>

                                </select>
                                    <div id="idQuizz_error" class="form-text"><?= $errorsArray['idQuizz_error'] ?? ''?></div>
                            </div>

                            <div class="form-group">
                                <label for="title">Choisissez un titre</label>
                                <input value="<?=$quizzTitle?>"  name="title" id="title" type="text" class="form-control" pattern="[A-Za-z-éèêëàâäôöûüç' ]+">
                                <div id="title_error" class="form-text"><?= $errorsArray['title_error'] ?? ''?></div>
                            </div>
        
                        
                            <button class="btn btn-outline-dark mb-5" type="submit">Modifier mon titre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>