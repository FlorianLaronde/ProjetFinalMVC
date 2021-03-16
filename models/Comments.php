<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Comments {

    private $_comments;
    private $_pdo;

    public function __construct($comments = NULL) {

        $this->_comments = $comments;
        $this->_pdo = Database::getInstance();
        
    }


}