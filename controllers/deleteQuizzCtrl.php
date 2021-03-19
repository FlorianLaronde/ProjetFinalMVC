<?php
require_once(dirname(__FILE__) . '/../models/Quizz.php');

$id = intval(trim(filter_input(INPUT_GET, 'id_quizz', FILTER_SANITIZE_NUMBER_INT)));

$allQuizzTitle = new Quizz();
$deleteQuizz = $allQuizzTitle->deleteQuizz($id);

header('location: /controllers/quizzListCtrl.php');
