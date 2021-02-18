<?php

    include(dirname(__FILE__).'/views/templates/header.php');


    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
        // require_once(dirname(__FILE__).'/controllers/');
     } else {
         include(dirname(__FILE__).'/views/home.php');
     }


    include(dirname(__FILE__).'/views/templates/footer.php');

    ?>