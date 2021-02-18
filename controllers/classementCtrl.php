<?php 

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Results.php');

$result = new Results();
$results = $result-> ????();

include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/classement.php');

include(dirname(__FILE__).'/../views/templates/footer.php');