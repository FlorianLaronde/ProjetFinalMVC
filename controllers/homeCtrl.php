<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');

$cssFile = 'home';


include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/home.php');

include(dirname(__FILE__).'/../views/templates/footer.php');