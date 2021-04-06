<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'quizz';

$errorsArray = [];

$id_quizz = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));


$allQuestion = new Questions();
$recupAllQuestion = $allQuestion->getQuestion($id_quizz);

$recupAnswersUser = $allQuestion->recupAnswer($id_quizz);
$goodAnswers = [];

// on vient récupérer les bonnes réponses de la table questions où l'on vient redéfinir sous un bon format pour avoir
// accès aux valeurs de comparaison
foreach ($recupAnswersUser as $key=>$value) {
    $goodAnswers[$key] = $value['goodAnswers'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // réponse 
    $answer = $_POST['answer'];

    if(count($answer)<=9) {
        $errorsArray['erreur'] = 'erreur form' ;
    } else {
        $result = count(array_intersect($goodAnswers, $answer));
        header('location: /controllers/quizzDoneCtrl.php?result='.$result.'');

    }

}


include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');