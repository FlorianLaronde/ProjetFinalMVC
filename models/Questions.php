<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Questions {

    private $_questionQuizz;
    private $_goodAnswers;
    private $_badAnswers1;
    private $_badAnswers2;
    private $_badAnswers3;
    private $_id_quizz;
    private $_pdo;


    public function __construct($questionQuizz = NULL, $goodAnswers = NULL, $badAnswers1 = NULL, $badAnswers2 = NULL, $badAnswers3 = NULL, $id_quizz = NULL ) {

        $this->_questionQuizz = $questionQuizz;
        $this->_goodAnswers = $goodAnswers;
        $this->_badAnswers1 = $badAnswers1;
        $this->_badAnswers2 = $badAnswers2;
        $this->_badAnswers3 = $badAnswers3;
        $this->_id_quizz = $id_quizz;
        $this->_pdo = Database::getInstance();
        
    }

    // création des questions d'un quizz
    public function createQuestions($questionQuizz,  $goodAnswers,  $badAnswers1,  $badAnswers2,  $badAnswers3, $id_quizz){
        try{
            $sql = 'INSERT INTO `questions` 
                    (`questionQuizz`, `goodAnswers`, `badAnswers1`, `badAnswers2`, `badAnswers3`, `id_quizz`)
                    VALUES (:questionQuizz, :goodAnswers, :badAnswers1, :badAnswers2, :badAnswers3, :id_quizz);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':questionQuizz', $questionQuizz, PDO::PARAM_STR);
            $stmt->bindValue(':goodAnswers', $goodAnswers, PDO::PARAM_STR);
            $stmt->bindValue(':badAnswers1', $badAnswers1, PDO::PARAM_STR);
            $stmt->bindValue(':badAnswers2', $badAnswers2, PDO::PARAM_STR);
            $stmt->bindValue(':badAnswers3', $badAnswers3, PDO::PARAM_STR);
            $stmt->bindValue(':id_quizz', $id_quizz, PDO::PARAM_INT);
            if($stmt->execute()){
                return $this->_pdo;
            } else {
                return 1;
            }
        } catch(PDOException $e){
            return 2;
            
        }
    }


     // Mise à jour d'une question selon un id
     public function updateQuestion($id){
        try {
            $sql = 'UPDATE `questions` 
                SET `_questionQuizz` = :_questionQuizz, `goodAnswers` = :goodAnswers, `badAnswers1` = :badAnswers1, `badAnswers2` = :badAnswers2, `badAnswers3` = :badAnswers3
                WHERE `questions`.`id` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':_questionQuizz', $this->__questionQuizz, PDO::PARAM_STR);
            $stmt->bindValue(':goodAnswers', $this->_goodAnswers, PDO::PARAM_STR);
            $stmt->bindValue(':badAnswers1', $this->_badAnswers1, PDO::PARAM_STR);
            $stmt->bindValue(':badAnswers2', $this->_badAnswers2, PDO::PARAM_STR);
            $stmt->bindValue(':badAnswers3', $this->_badAnswers3, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return ($stmt->execute());
        } catch (PDOException $e) {
            return false;
        }
        
    }


     // Suppression d'une question selon un id
     public function deleteQuestions($id){
        $sql = 'DELETE from `questions` WHERE `id` = :id;';
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return ($stmt->execute());
    }




    // Récupération de toutes les infos d'une question selon un id
    public static function getQuestion($id){
        
        $pdo = Database::getInstance();
    
        try{
            $sql = 'SELECT * FROM `questions` 
                    WHERE `id` = :id;';
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id',$id,PDO::PARAM_INT);
            $sth->execute();
            return($sth->fetch());
        }
        catch(PDOException $e){
            return false;
        }
    
    }
    
    // Récupération de toutes les infos de toutes les questions
    public function getAllQuestions($id){
        $sql = 'SELECT * from `questions`;';
        $stmt = $this->_pdo->query($sql);
        return ($stmt->fetchAll());
    }

  


}

