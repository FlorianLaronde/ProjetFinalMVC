<?php 
session_start();

require_once dirname(__FILE__).'/../utils/regex.php';
require_once dirname(__FILE__).'/../models/Comments.php';

$cssFile = 'activities';

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/activities.php');

include(dirname(__FILE__).'/../views/templates/footer.php');

?>