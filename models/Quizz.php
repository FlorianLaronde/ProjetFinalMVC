<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Quizz {

    private $_pdo;
    private $_title;
    private $_id_quizzTheme;
    
    public function __construct($title = NULL, $id_quizzTheme = NULL) {

        $this->_title = $title;
        $this->_id_quizzTheme = $id_quizzTheme;
        $this->_pdo = Database::getInstance();
        
    }

    // Jointure pour : title(theme)
    public static function getAllQuizz(){

        $pdo = Database::getInstance();

        try{
            $sql = 'SELECT * 
                    FROM `quizz`, `quizztheme`
                    WHERE `quizz`.`id_quizzTheme` = `quizztheme`.`id_quizzTheme`
                    ;';
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll();
        }
        catch(PDOException $e){
            return false;
        }

    }



    public function createQuizz($title, $id_quizzTheme, $id_users){
        try{
            $sql = 'INSERT INTO `quizz` (`title`, `id_quizzTheme`, `id_users`) 
                    VALUES (:title, :id_quizzTheme, :id_users);';
            $sth = $this->_pdo->prepare($sql);
            $sth->bindValue(':title',$title,PDO::PARAM_STR);
            $sth->bindValue(':id_quizzTheme',$id_quizzTheme,PDO::PARAM_INT);
            $sth->bindValue(':id_users',$id_users,PDO::PARAM_INT);

            if($sth->execute()){
                return $this->_pdo->lastInsertId();
            } else {
                return false;
            }
        }
        catch(PDOException $e){
            
            return false;
        }

    }


     // Suppression d'un quizz selon un id
     public function deleteQuizz($id){
       $sql = 'DELETE from `quizz` WHERE `id_quizz` = :id;';
       $stmt = $this->_pdo->prepare($sql);
       $stmt->bindValue(':id', $id, PDO::PARAM_INT);
       if($stmt->execute()){
           return $this->_pdo->lastInsertId();
       } else {
           return false;
       }
   }


   // Mise à jour d'un quizz selon un id
   public function updateQuizz($id){

    try {
        $sql = 'UPDATE `quizz` 
            SET `title` = :title, `id_quizztheme` = :id_quizztheme
            WHERE `quizz`.`id_quizz` = :id;';
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':title', $this->_title, PDO::PARAM_STR);
        $stmt->bindValue(':id_quizztheme', $this->_id_quizzTheme, PDO::PARAM_INT);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        
        return ($stmt->execute());
    } catch (PDOException $e) {
        return false;
    }
    
}


public static function get($id){
        
    $pdo = Database::getInstance();

    try{
        $sql = 'SELECT * FROM `quizz` 
                WHERE `id_quizz` = :id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id',$id,PDO::PARAM_INT);
        $sth->execute();
        return($sth->fetch());
    }
    catch(PDOException $e){
        return false;
    }
    

}



  


}