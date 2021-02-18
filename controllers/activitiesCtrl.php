<?php 

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Articles.php');

$article = new Articles();
$articles = $article-> ????();

include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/activities.php');

include(dirname(__FILE__).'/../views/templates/footer.php');