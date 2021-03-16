<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Quizz {

    private $_pdo;
    private $_title;
    
    public function __construct($title = NULL) {

        $this->_title = $title;
        $this->_pdo = Database::getInstance();
        
    }



    public static function getAllQuizz(){
        
        $pdo = Database::getInstance();

        try{
            $sql = 'SELECT * FROM `quizz`';
            $stmt = $pdo->query($sql);
            return($stmt->fetchAll());
        }
        catch(PDOException $e){
            return false;
        }

    }


    // set le title
    public function setTtile($title){
        $this->_title = $title;
    }


     // création d'un quizz
     public function createQuizz(){
        try{
            $sql = 'INSERT INTO `quizz` 
                    (`title`)
                    VALUES (:title);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':title', $this->_title, PDO::PARAM_STR);
            if($stmt->execute()){
                return $this->_pdo;
            } else {
                return false;
            }
        } catch(PDOException $e){
            return false;
            
        }
    }




  


}