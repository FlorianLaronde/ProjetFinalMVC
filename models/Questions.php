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
                SET `questionQuizz` = :questionQuizz, `goodAnswers` = :goodAnswers, `badAnswers1` = :badAnswers1, `badAnswers2` = :badAnswers2, `badAnswers3` = :badAnswers3
                WHERE `questions`.`id_questions` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':questionQuizz', $this->_questionQuizz, PDO::PARAM_STR);
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


      // Suppression d'un quizz selon un id
      public function deleteQuestions($id){
        $sql = 'DELETE from `questions` WHERE `id_questions` = :id;';
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execute()){
            return $this->_pdo->lastInsertId();
        } else {
            return false;
        }
    }



    // Récupération de toutes les infos d'une question selon un id
    public function getQuestion($id){
        
        try{
            $sql = 'SELECT * 
                    FROM `quizz`, `questions` 
                    WHERE `quizz` . `id_quizz`= `questions` . `id_quizz` 
                    AND `questions` .`id_quizz` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return($stmt->fetchAll());
        }
        catch(PDOException $e){
            return false;
        }
    
    }
    
    // Récupération de toutes les infos de toutes les questions
    public function getAllQuestions(){
        $sql = 'SELECT * from `questions`;';
        $stmt = $this->_pdo->query($sql);
        return ($stmt->fetchAll());
    }

  


}

