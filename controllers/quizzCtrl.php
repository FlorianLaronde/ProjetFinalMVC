<?php 

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');

$quizz = new Quizz();
$quizz1 = $quizz-> ???();

include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/quizz.php');

include(dirname(__FILE__).'/../views/templates/footer.php');