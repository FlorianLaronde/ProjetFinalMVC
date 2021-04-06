<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Questions.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');


$cssFile = 'quizzList';

$id_quizz = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));

$allQuestion = new Questions();
$recupQuestion = $allQuestion->getQuestion($id_quizz);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $id = intval(trim(filter_input(INPUT_POST, 'id_questions', FILTER_SANITIZE_NUMBER_INT)));
}



include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/questionList.php');

include(dirname(__FILE__).'/../views/templates/footer.php');