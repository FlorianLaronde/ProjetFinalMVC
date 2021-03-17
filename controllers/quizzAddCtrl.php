<?php 

session_start();

require_once(dirname(__FILE__).'/../models/Quizz.php');
require_once(dirname(__FILE__).'/../models/QuizzTheme.php');
require_once(dirname(__FILE__).'/../utils/regex.php');

$cssFile = 'quizzAdd';

$quizzTheme = new Quizztheme();

$errorsArray = [];

// on vient récupérer les thèmes pour le select
$allQuizzTheme = $quizzTheme->getAll(); // pour ma modif
$quizzTitle = new Quizz();

$id_users = $_SESSION['id'];

// ***************************************************************************************

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    
    if(empty($title)){
       
        $errorsArray['title_error'] = 'Le champ est obligatoire';
    
    }

    //   id du quizz
    $id_quizzTheme = intval(trim(filter_input(INPUT_POST, 'id_quizzTheme', FILTER_SANITIZE_NUMBER_INT)));
  

    if(empty($id_quizzTheme)){

        $errorsArray['id_quizzTheme_error'] = 'Le champ n\'est pas rempli';
        
    }


    // *********************************************************************************************
    
       // Si il n'y a pas d'erreurs, on enregistre un nouveau quizz
      if(empty($errorsArray)){  

        $quizzTitle = new Quizz();
        $result = $quizzTitle->createQuizz($title,$id_quizzTheme, $id_users);     
        header('location: /controllers/quizzListCtrl.php');
        

     


        if($result===false){
            $errorsArray['register_error'] = 'Enregistrement impossible';
        }
      }

}





include(dirname(__FILE__).'/../views/templates/header.php');    

    include(dirname(__FILE__). '/../views/quizzAdd.php');

include(dirname(__FILE__).'/../views/templates/footer.php');