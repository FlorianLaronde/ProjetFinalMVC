<?php 

session_start();

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/Quizztheme.php');

$cssFile = 'quizzAdd';

// Nettoyage de l'id passé en GET dans l'url
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));

$quizzTheme = new Quizztheme();
$allQuizzTheme = $quizzTheme->getAll();


// ***************************************************************************************

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    
    if(!empty($title)){
        $testRegex = preg_match(REGEXP_PSEUDO,$title);

        if($testRegex == false){
            $errorsArray['title_error'] = 'Merci de choisir un title valide';
        }
    }else{
        $errorsArray['title_error'] = 'Le champ est obligatoire';
    }

    //   id du quizz
    $idQuizz = trim(filter_input(INPUT_POST, 'idQuizz', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    if(!empty($idQuizz)){
        $testRegex = preg_match(REGEXP_DATE,$idQuizz);
  
        if($testRegex == false){
            $errorsArray['idQuizz_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
        }
    }else{
        $errorsArray['idQuizz_error'] = 'Le champ n\'est pas rempli';
    }


    // *********************************************************************************************

       // Si il n'y a pas d'erreurs, on enregistre un nouveau quizz
    $quizzTitle = new Quizz($title);
    var_dump($quizzTitle);
    if(empty($errorsArray) ){
        var_dump($errorsArray);
        $result = $quizzTitle->createQuizz();
        var_dump($result);
        die;
        if($result===true){
            header('location: /controllers/quizzListCtrl.php');
        } else {
            // Si l'enregistrement s'est mal passé, on affiche à nouveau le formulaire de création avec un message d'erreur.
            $msgCode = $result;
        }
    }

}





include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/quizzAdd.php');

include(dirname(__FILE__).'/../views/templates/footer.php');