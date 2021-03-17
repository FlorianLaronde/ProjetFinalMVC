<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'modifyQuestionQuizz';

$errorsArray = [];

// on récupère l'id du quizz
$id = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT))); ;

$question = new Questions();
// Appel à la méthode statique permettant de récupérer toutes les infos d'une question
$allQuestion = $question->getQuestion($id);

$questionQuizz = $allQuestion->questionQuizz;
$goodAnswers = $allQuestion->goodAnswers;
$badAnswers1 = $allQuestion->badAnswers1;
$badAnswers2 = $allQuestion->badAnswers2;
$badAnswers3 = $allQuestion->badAnswers3;
die;


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

    
     // Si il n'y a pas d'erreurs, on enregistre une nouvelle question
     if(empty($errorsArray)){ 
              
        $questions = new Questions();
        $result = $questions->createQuestions($questionQuizz,  $answer1,  $answer2,  $answer3,  $answer4, $id_quizz);   
       
        if($result===false){
            $errorsArray['result_error'] = 'Enregistrement impossible';
        }
      }



      if(empty($errorsArray) ){
            $question = new Questions($questionQuizz, $goodAnswers, $badAnswers1, $badAnswers2, $badAnswers3);
            $result = $question->updateQuestion($id);
      }

}





include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/modifyQuestionQuizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');