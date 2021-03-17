<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Quizztheme {

    private $_themes;
    private $_pdo;

    public function __construct($themes = NULL) {

        $this->_themes = $themes;
        $this->_pdo = Database::getInstance();
        
    }


      // création d'un quizz
      public function createQuizz(){
        try{
            $sql = 'INSERT INTO `quizztheme` 
                    (`themes`)
                    VALUES (:themes);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':themes', $this->_themes, PDO::PARAM_STR);
            if($stmt->execute()){
                return $this->_pdo;
            } else {
                return false;
            }
        } catch(PDOException $e){
            return false;
            
        }
    }


    // Mise à jour d'un quizz selon un id
    public function updateQuizz($id){
        try {
            $sql = 'UPDATE `quizztheme` 
                SET `themes` = :themes
                WHERE `quizztheme`.`id` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':themes', $this->_themes, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return ($stmt->execute());
        } catch (PDOException $e) {
            return false;
        }
        
    }


     // Suppression d'un quizz selon un id
     public function deleteQuizz($id){
         var_dump($id);
         die;
        $sql = 'DELETE from `quizztheme` WHERE `id_quizzTheme` = :id;';
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execute()){
            return $this->_pdo->lastInsertId();
        } else {
            return false;
        }
    }

    public static function getAll(){

        $pdo = Database::getInstance();

        try{
            $sql = 'SELECT * 
                    FROM `quizztheme`
                    ;';
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll();
        }
        catch(PDOException $e){
            return false;
        }

    }



  


}