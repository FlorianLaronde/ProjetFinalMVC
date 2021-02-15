<?php include('views\templates\header.php'); ?>

<?php include('views\templates\navbar.php') ?>

    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
                <div class="col-lg-12" id="contentOnVideo">
                    <h2>Quizz</h2>
                    <div id="questionQuizz">
                    <div id="chooseQuizz" class="column col-lg-6">
                        <button  class="btn btn-danger" type="">Quizz thème X</button>
                        <br>
                        <button  class="btn btn-danger" type="">Quizz thème X</button>
                        <br>
                        <button  class="btn btn-danger" type="">Quizz thème X</button>
                        <br>
                        <button  class="btn btn-danger" type="">Quizz thème X</button>
                        <br>
                        <button  class="btn btn-danger" type="">Quizz aléatoire</button>
                    </div>
                    <div id="divTrait"></div>
                    <div id="createQuizz" class="column col-lg-6">
                        <button  class="btn btn-danger" type="">Créer un quizz</button>
                        <br>
                        <button  class="btn btn-danger" type="">Modifier un quizz</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('views\templates\footer.php'); ?>