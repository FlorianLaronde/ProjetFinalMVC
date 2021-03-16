<?php 

session_start();

require_once dirname(__FILE__).'/../models/User.php';
require_once dirname(__FILE__).'/../utils/regex.php';
require_once dirname(__FILE__).'/../functions/auth.php';


$cssFile = 'myAccount';

$errorsArray = array();

$id =  $_SESSION['id'];

// Appel à la méthode statique permettant de récupérer toutes les infos d'un utilisateur
$user = User::get($id);

// Si l'utilisateur n'existe pas, on redirige vers l'index
if(!$user){
    header('location: /index.php');
}



include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/myAccount.php');

include(dirname(__FILE__).'/../views/templates/footer.php');