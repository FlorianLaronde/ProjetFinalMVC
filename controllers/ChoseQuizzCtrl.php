<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');

$cssFile = 'choseQuizz';

$id_quizz = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));

// Récupération le titre du quizz
$allQuizzTitle = Quizz::getAllQuizz();

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/choseQuizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');

?>