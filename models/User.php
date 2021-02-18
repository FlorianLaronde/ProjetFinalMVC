<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class User {
    
    private $_pseudo;
    private $_mail;
    private $_password;
    private $_admin;
    private $_userActif;
    private $_pdo;



    public function __construct($pseudo = NULL, $mail = NULL, $password = NULL, $admin = NULL, $userActif = NULL) {

        $this->_pseudo = $pseudo;
        $this->_mail = $mail;
        $this->_password = $password;
        $this->_admin = $admin;
        $this->_userActif = $userActif;
        $this->_pdo = Database::connect();
        
    }


}

