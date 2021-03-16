<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');

$cssFile = 'choseQuizz';

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/choseQuizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');