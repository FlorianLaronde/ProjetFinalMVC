<?php
require_once(dirname(__FILE__) . '/../models/Questions.php');

$id = intval(trim(filter_input(INPUT_GET, 'id_questions', FILTER_SANITIZE_NUMBER_INT)));

$allQuestion = new Questions();
$deleteQuestion = $allQuestion->deleteQuestions($id);
header('location: /controllers/quizzListCtrl.php');

?>


