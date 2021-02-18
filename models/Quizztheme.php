<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Questions {

    private $_themes;
    private $_pdo;

    public function __construct($themes = NULL) {

        $this->_themes = $themes;
        $this->_pdo = Database::connect();
        
    }



  


}