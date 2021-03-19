<?php 

session_start();

require_once dirname(__FILE__).'/../models/User.php';
require_once dirname(__FILE__).'/../utils/regex.php';

$cssFile = 'inscription';

$errorsArray = array();

$admin = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    
    if(!empty($pseudo)){
        $testRegex = preg_match(REGEXP_PSEUDO,$pseudo);

        if($testRegex == false){
            $errorsArray['pseudo_error'] = 'Merci de choisir un pseudo valide';
        }
    }else{
        $errorsArray['pseudo_error'] = 'Le champ est obligatoire';
    }

    // ***************************************************************

    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));

    if(!empty($mail)){
        $testMail = filter_var($mail, FILTER_VALIDATE_EMAIL);
        if($testMail == false){
            $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
        }
    }else{
        $errorsArray['mail_error'] = 'Le champ est obligatoire';
    }

    // PASSWORD et CONFIRM_PASSWORD
    if(!empty($_POST['password']) && !empty($_POST['confirmPassword'])){
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if($password != $confirmPassword){
            $errorsArray['password_error'] = 'Les passwords ne correspondent pas '; 
        } else {
            $testRegex = preg_match(REGEXP_PASS,$password);
            if($testRegex == false){
                $errorsArray['password_error'] = 'Merci de choisir un mdp valide répondant aux critères suivants (Au moins 8 car, 1 Maj, 1 min, 1chiffre, 1 special Char)';
            }
        }
    } else {
        $errorsArray['password_error'] = 'Les champs password sont obligatoires';
    }

    if(empty($errorsArray)){
        $user = new User();
        $user->setPseudo($pseudo);
        $user->setMail($mail);
        $user->setPassword($password);
        $user->setAdmin($admin);
        $resultCreatedUser = $user->create();

        if($resultCreatedUser===false){
            $errorsArray['register_error'] = 'Enregistrement impossible (le mail existe déjà ?)';
        }
        if(empty($errorsArray)){
            // Mail d'envoi de vérification du compte
            // mail();
            // Ici on authentifie directement l'utilisateur enregistré
            $_SESSION['id'] = $resultCreatedUser;
            $_SESSION['pseudo'] = $pseudo;
            header('location: /index.php');
        }
    }
}






 

include(dirname(__FILE__).'/../views/templates/header.php');

   include(dirname(__FILE__). '/../views/inscription.php');

include(dirname(__FILE__).'/../views/templates/footer.php');

?>