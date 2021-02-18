<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Quizz {

    private $_pdo;
    
    public function __construct() {

        $this->_pdo = Database::connect();
        
    }



  


}