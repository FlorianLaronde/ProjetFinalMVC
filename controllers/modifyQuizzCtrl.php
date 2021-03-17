<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Quizztheme.php');


$cssFile = 'quizzList';

// Récupération le titre du quizz
$allQuizzTitle = new Quizz();
$recupQuizzTitle = $allQuizzTitle->getAllQuizz();


if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = intval(trim(filter_input(INPUT_POST, 'id_quizzTheme', FILTER_SANITIZE_NUMBER_INT)));
      if(empty($id)){
          $errorsArray['id_error'] = 'Erreur questionQuizz ';
      }

    $title = trim(filter_input(INPUT_POST, 'title',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
      if(empty($title)){
          $errorsArray['title_error'] = 'Erreur questionQuizz ';
      }

    $allQuizzTitle = new Quizz($title);
    $result = $allQuizzTitle->updateQuizz($id);

    header('location: /controllers/quizzListCtrl.php');
}







include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/modifyQuizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');