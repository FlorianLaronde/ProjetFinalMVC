<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__) . '/../models/User.php');

$cssFile = 'home';

// Récupération de la valeur recherchée et on nettoie
$s = trim(filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING));

// Compte le nombre d'éléments au total selon la recherche
$countItems = User::count($s);


include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/home.php');

include(dirname(__FILE__).'/../views/templates/footer.php');