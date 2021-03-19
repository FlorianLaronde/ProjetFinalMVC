<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'quizz';

$id = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));

$allQuestion = new Questions();
$recupAllQuestion = $allQuestion->getQuestion($id);

$recupAnswersUser = [];

$goodAsnwers = [$question->goodAnswers];

$results = array_diff($recupAnswersUser, $goodAsnwers);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // réponse 
    $answer1 = trim(filter_input(INPUT_POST, 'answer1', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(empty($answer1)){
        $errorsArray['answer1_error'] = 'Erreur answer1';
    }


    if(empty($errorsArray)){ 

    }

}

// var_dump($_POST);

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');