<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/User.php');

$cssFile = 'updateAccount';


// Initialisation du tableau d'erreurs
$errorsArray = [];

// on récupère l'id de session
$id = $_SESSION['id'];
$user = new User();
// Appel à la méthode statique permettant de récupérer toutes les infos d'un utilisateur
$pass_hash = '';
$viewUser = $user->get($id);

$pseudo = $viewUser->pseudo;
$mail = $viewUser->mail;
/*************************************************************/

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Pseudo
    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($pseudo)){
        // On test la valeur
        $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$pseudo);

        if($testRegex == false){
            $errorsArray['pseudo_error'] = 'Merci de choisir un pseudo valide';
        }
    }else{
        $errorsArray['pseudo_error'] = 'Le champ est obligatoire';
    }

    
    // EMAIL
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));

    //On test si le champ n'est pas vide
    if(!empty($mail)){
        $testMail = filter_var($mail, FILTER_VALIDATE_EMAIL);
        if($testMail == false){
            $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
        }
    }else{
        $errorsArray['mail_error'] = 'Le champ est obligatoire';
    }
    

    // -------------verification de l'ancien mot de passe-----------------
    $lastPassword = $_POST['lastPassword'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $verifyPassword = password_verify($lastPassword, $viewUser->password);
    $testRegexPassword = preg_match(REGEXP_PASS, $password);



    // ancien mdp vide
    if(!$lastPassword && ($password or $confirmPassword)) {
            $errorsArray['password_error'] = 'Vous devez entrer votre ancien mdp'; // Validé
   
        // nouveau mdp vide
    } else if($lastPassword && (!$password or !$confirmPassword)) {
            $errorsArray['password_error'] = 'Votre nouveau mot de passe est vide'; // validé

        // les mdp ne correspondent pas
    } else if($lastPassword && ($password != $confirmPassword)) {
            $errorsArray['password_error'] = 'Vous devez entrer le même mdp'; // Validé

        // ancien mdp invalide
    }  else if($lastPassword && !$verifyPassword) {
            $errorsArray['password_error'] = 'Votre ancien mdp n\'est pas bon'; // Validé

        // nouveau mdp invalide
    } else if($verifyPassword && $password == $confirmPassword && !$testRegexPassword) { // Validé
            $errorsArray['password_error'] = 'Le nouveau mdp n\'est pas valide';
            
    } 

    if(empty($errorsArray) ){
        if(empty($lastPassword)) {
            
            $user = new User($pseudo, $mail);
            $result = $user->updateWithoutPassword($id);

        } else {
            // hashage du password
            $password = password_hash($password, PASSWORD_DEFAULT);
            $user = new User($pseudo, $mail, $password);
            // appel à la méthode update avec en paramètre l'id
            $result = $user->update($id);
        }
        header('location: /controllers/myAccountCtrl.php');
    }


    // **************************************************************


    
}







include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/updateAccount.php');

include(dirname(__FILE__).'/../views/templates/footer.php');