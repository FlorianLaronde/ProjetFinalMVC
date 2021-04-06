<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/User.php');

$cssFile = 'quizzDone';

$result = intval(trim(filter_input(INPUT_GET, 'result', FILTER_SANITIZE_NUMBER_INT)));
$id = $_SESSION['id'];

$updatePoint = new User();
$updatePoint->updatePoint($result, $id);



include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/quizzDone.php');

include(dirname(__FILE__).'/../views/templates/footer.php');