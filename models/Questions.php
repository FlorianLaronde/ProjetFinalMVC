<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Questions {

    private $_questionsQuizz;
    private $_goodAnswers;
    private $_badAnswers1;
    private $_badAnswers2;
    private $_badAnswers3;
    private $_pdo;


    public function __construct($questionsQuizz = NULL, $goodAnswers = NULL, $badAnswers1 = NULL, $badAnswers2 = NULL, $badAnswers3 = NULL) {

        $this->_questionsQuizz = $questionsQuizz;
        $this->_goodAnswers = $goodAnswers;
        $this->_badAnswers1 = $badAnswers1;
        $this->_badAnswers2 = $badAnswers2;
        $this->_badAnswers3 = $badAnswers3;
        $this->_pdo = Database::connect();
        
    }



  


}

