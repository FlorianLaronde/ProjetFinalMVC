<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/User.php');

$cssFile = 'quizzAddQuestion';


$allQuestions = new Questions();

$recupQuestions = $allQuizz->getQuestions();





include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/quizzAddQuestion.php');

include(dirname(__FILE__).'/../views/templates/footer.php');