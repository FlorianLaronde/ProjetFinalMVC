<?php include('views\templates\header.php'); ?>

<?php include('views\templates\navbar.php') ?>

    <!-- Fullscreen Video Background -->
    <div class="container-fluid px-0" id="myVideo">
        <div class="row">

            <video autoplay muted loop class="position-fixed">
                <source src="assets/img/BackgroundVideo/myVideo1.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div id="contentOnVideo">

            </div>
        </div>
    </div>

<?php include('views\templates\footer.php'); ?>