<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Quizztheme.php');


$cssFile = 'quizzList';

// Récupération le titre du quizz
$allQuizzTitle = new Quizz();
$recupQuizzTitle = $allQuizzTitle->getAllQuizz();

// Récupération le thème du quizz
$allQuizzTheme = new QuizzTheme();
$recupQuizzTheme = $allQuizzTheme->getAll();
var_dump($recupQuizzTheme);



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Nettoyage de l'id du rdv passé en GET dans l'url
    $id = intval(trim(filter_input(INPUT_POST, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));

}



include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizzList.php');

include(dirname(__FILE__).'/../views/templates/footer.php');