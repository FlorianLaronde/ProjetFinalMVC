<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'quizz';

$id_quizz = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));


$allQuestion = new Questions();
$recupAllQuestion = $allQuestion->getQuestion($id_quizz);

$recupAnswersUser = $allQuestion->recupAnswer($id_quizz);
$goodAnswers = [count($recupAnswersUser)];

$i=0; 
foreach ($recupAnswersUser as $value) {
    $goodAnswers[$i] = $value->goodAnswers;
$i++;
}












// $results = array_diff($recupAnswersUser, $goodAsnwers);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // réponse 
    $answer = trim(filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    var_dump($answer);
    die;
    if(empty($answer)){
        $errorsArray['answer_error'] = ' answer';

    }

}

// var_dump($_POST);

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');