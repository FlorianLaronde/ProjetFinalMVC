<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Quizztheme.php');

$cssFile = 'quizz';


include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');