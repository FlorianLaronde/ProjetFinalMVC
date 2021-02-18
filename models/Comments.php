<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Comments {

    private $_comments;
    private $_pdo;

    public function __construct($comments = NULL) {

        $this->_comments = $comments;
        $this->_pdo = Database::connect();
        
    }


    public function createComment() {
        try {
            $sql1 = "INSERT INTO `comments` (`comments`)
            VALUES (:comments)";
    
            // Prépare une requête à l'exécution et retourne un objet
            $stmt = $this->_pdo->prepare($sql1);
            // Associe une valeur à un paramètre (marqueur nominatif)
            $stmt -> bindValue (':comments', $this->_comments, PDO::PARAM_STR);
    
            // Exécute une requête préparée
           return($stmt ->execute());


        } catch (PDOException $e) {

            return false;
        }
    }


    public function deleteComment() {
        try {
        


        } catch (PDOException $e) {

     
    }


}
