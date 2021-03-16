<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/User.php');

$cssFile = 'quizzDone';



include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/quizzDone.php');

include(dirname(__FILE__).'/../views/templates/footer.php');