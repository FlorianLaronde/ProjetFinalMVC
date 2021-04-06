<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Results.php');
require_once(dirname(__FILE__).'/../models/User.php');

$cssFile = 'ranking';

$player = new Results();
$players = $player->calculPoints();

$recupPseudo = $player->recupPseudoUser();




include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/ranking.php');

include(dirname(__FILE__).'/../views/templates/footer.php');