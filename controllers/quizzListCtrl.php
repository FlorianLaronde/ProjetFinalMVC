<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Quizztheme.php');
require_once(dirname(__FILE__).'/../models/Questions.php');

$cssFile = 'quizzList';

// Nettoyage de l'id du rdv passé en GET dans l'url
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));

// Récupération de toutes les infos de toutes les questions
$allQuizz = new Quizztheme();
$getAllQuizz = $allQuizz->createQuizz();

$recupQuizzTheme = $allQuizz->getAll();



include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/quizzList.php');

include(dirname(__FILE__).'/../views/templates/footer.php');