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


    public static function calculPoints(){
        $pdo = Database::getInstance();
        try{
            $sql = 'SELECT * 
                    FROM `results`
                    ORDER BY `points` DESC';
    
            $stmt = $pdo->query($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch(PDOException $e){
            return 0;
        }
        
    }

    public function recupPseudoUser(){
        
        try{
            $sql = 'SELECT * 
                    FROM `users`, `results` 
                    WHERE `users` . `id_users`= `results` . `id_users` 
                    ORDER BY `points` DESC;';
            $stmt = $this->_pdo->query($sql);
            $stmt->execute();
            return($stmt->fetchAll());
        }
        catch(PDOException $e){
            return false;
        }
    
    }


}