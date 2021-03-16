<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class News {
    private $_title;
    private $_paragraphs;
    private $_pdo;

    public function __construct($title = NULL, $paragraphs = NULL ) {

        // $this->_id = $id;
        $this->_title = $title;
        $this->_paragraphs = $paragraphs;
        $this->_pdo = Database::getInstance();
        
    }


    public function createNews() {
        try {
            $sql1 = "INSERT INTO `news` (`title`, `paragraphs`)
            VALUES (:title, :paragraphs)";
    
            // Prépare une requête à l'exécution et retourne un objet
            $stmt = $this->_pdo->prepare($sql1);
            // Associe une valeur à un paramètre (marqueur nominatif)
            $stmt -> bindValue (':title', $this->_title, PDO::PARAM_STR);
            $stmt -> bindValue (':paragraphs', $this->_paragraphs, PDO::PARAM_STR);
    
            // Exécute une requête préparée
           return($stmt ->execute());


        } catch (PDOException $e) {

            return false;
        }
    }



    public function DeleteNews() {
        try {
    

        } catch (PDOException $e) {

            return false;
        }
    }




}