<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Results {

    private $_points;
    private $_pdo;

    public function __construct($points = NULL) {

        // Hydratation de l'objet contenant la connexion à la BDD
        $this->_points = $points;
        $this->_pdo = Database::getInstance();
        
    }

    public function calculPoints() {
        try{
            $sql = 'INSERT INTO `results` (`points`) 
                    VALUES (:points)';
            
            $sth = $this->_pdo->prepare($sql);
            $sth->bindValue(':points',$this->_points,PDO::PARAM_STR);
 
            return $sth->execute();
        }
        catch(PDOException $e){
            return $e->getCode();
        }
    }

}