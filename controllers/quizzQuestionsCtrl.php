<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'quizzQuestions';

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizzQuestions.php');

include(dirname(__FILE__).'/../views/templates/footer.php');