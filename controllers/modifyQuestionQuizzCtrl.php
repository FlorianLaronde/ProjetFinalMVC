<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'modifyQuestionQuizz';
$errorsArray = [];

$id_questions = intval(trim(filter_input(INPUT_GET, 'id_questions', FILTER_SANITIZE_NUMBER_INT)));


$question = new Questions();
$allQuestion = $question->getAllQuestion($id_questions);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // question
    $questionQuizz = trim(filter_input(INPUT_POST, 'questionQuizz', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(empty($questionQuizz)){
        $errorsArray['question_error'] = 'Erreur questionQuizz ';
    }

    // réponse 1
    $answer1 = trim(filter_input(INPUT_POST, 'answer1', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(empty($answer1)){
        $errorsArray['answer1_error'] = 'Erreur answer1';
    }

    // réponse 2
    $answer2 = trim(filter_input(INPUT_POST, 'answer2', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));   
    if(empty($answer2)){
        $errorsArray['answer2_error'] = 'Erreur answer2';
    }

    // réponse 3
    $answer3 = trim(filter_input(INPUT_POST, 'answer3', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));  
    if(empty($answer3)){
        $errorsArray['answer3_error'] = 'Erreur answer3';
    }

    // réponse 4
    $answer4 = trim(filter_input(INPUT_POST, 'answer4', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(empty($answer4)){
        $errorsArray['answer4_error'] = 'Erreur answer4';
    }


    if(empty($errorsArray) ){
        $question = new Questions($questionQuizz, $answer1, $answer2, $answer3, $answer4);
        $result = $question->updateQuestion($id_questions);
        // on récupère les dernières valeurs à afficher après la modif
        $allQuestion = $question->getAllQuestion($id_questions);
        
      }

}





include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/modifyQuestionQuizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');