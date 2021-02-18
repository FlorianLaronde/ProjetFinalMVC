<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Results {

    private $_points;
    private $_pdo;

    public function __construct($points = NULL) {

        $this->_points = $points;
        $this->_pdo = Database::connect();
        
    }



  


}