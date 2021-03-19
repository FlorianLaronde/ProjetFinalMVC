<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Quizztheme.php');


$cssFile = 'quizzList';

// Récupération le titre du quizz
$quizzTheme = new Quizztheme();
$allTheme = $quizzTheme->getAll();

$id_quizz = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));

$quizzTitle = Quizz::get($id_quizz)->title;




if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id_quizzTheme = intval(trim(filter_input(INPUT_POST, 'id_quizzTheme', FILTER_SANITIZE_NUMBER_INT)));
      if(empty($id)){
          $errorsArray['id_error'] = 'Erreur questionQuizz ';
      }

    $title = trim(filter_input(INPUT_POST, 'title',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
      if(empty($title)){
          $errorsArray['title_error'] = 'Erreur questionQuizz ';
      }

    $allQuizzTitle = new Quizz($title, $id_quizzTheme);
    $result = $allQuizzTitle->updateQuizz($id_quizz);
    header('location: /controllers/quizzListCtrl.php');
}







include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/modifyQuizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');