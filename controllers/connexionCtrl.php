<?php 
session_start();

require_once dirname(__FILE__).'/../models/User.php';
require_once dirname(__FILE__).'/../utils/regex.php';

$cssFile = 'connexion';
$errorsArray = array();

$mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));

// on vérifie si les champs ne sont pas vides 
if(!empty($_POST['mail']) && !empty($_POST['password'])){
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $user = new User($mail, $password);
    $user = $user->getUserLogin($mail, $password);

    // si $user true alors
    if($user){
        $_SESSION['id'] = $user->id_users;
        $_SESSION['pseudo'] = $user->pseudo;
        header('location: /index.php');
    } else {
        $errorsArray['login_error'] = 'Votre login ou mot de passe n\'est pas reconnu';
    }
}

include(dirname(__FILE__).'/../views/templates/header.php');

    include(dirname(__FILE__). '/../views/connexion.php');

include(dirname(__FILE__).'/../views/templates/footer.php');

?>