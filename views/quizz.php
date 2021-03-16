    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
                <div id="contentOnVideo">
                    <div class="col-12 border border-dark mt-5">

                        <h3 class="text-center">Quizz thème dynamique</h3>

                        <div class="questionDiv">
                            <p>Question : <strong>Dynamique</strong></p>
                        </div>

                        <div>
                            <div class="d-flex">   
                                    <a href="#" class="btn btn-info">Réponse A</a>
                                
                                    <a href="#" class="btn btn-info">Réponse B</a>
                            
                            </div>
                            <div class="d-flex">
                                    <a href="#" class="btn btn-info">Réponse C</a>
        
                                    <a href="#" class="btn btn-info">Réponse D</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <a href="/controllers/quizzCtrl.php?=questions<?php ?> " type="submit" class="btn btn-info mt-5 mb-5">Valider ma réponse</a>
                    </div>
             
            </div>
        </div>
    </div>