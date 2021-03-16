<?php 

require_once(dirname(__FILE__).'/../utils/Database.php');

class Questions {

    private $_questionsQuizz;
    private $_goodAnswers;
    private $_badAnswers1;
    private $_badAnswers2;
    private $_badAnswers3;
    private $_pdo;


    public function __construct($questionsQuizz = NULL, $goodAnswers = NULL, $badAnswers1 = NULL, $badAnswers2 = NULL, $badAnswers3 = NULL) {

        $this->_questionsQuizz = $questionsQuizz;
        $this->_goodAnswers = $goodAnswers;
        $this->_badAnswers1 = $badAnswers1;
        $this->_badAnswers2 = $badAnswers2;
        $this->_badAnswers3 = $badAnswers3;
        $this->_pdo = Database::getInstance();
        
    }

    // création des questions d'un quizz
    public function createQuestions(){
        try{
            $sql = 'INSERT INTO `questions` 
                    (`questionsQuizz`, `goodAnswers`, `badAnswers1`, `badAnswers2`, `badAnswers3`)
                    VALUES (:questionsQuizz, :goodAnswers, :badAnswers1, :badAnswers2, :badAnswers3);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':questionsQuizz', $this->_questionsQuizz, PDO::PARAM_STR);
            $stmt->bindValue(':goodAnswers', $this->_goodAnswers, PDO::PARAM_BOOL);
            $stmt->bindValue(':badAnswers1', $this->_badAnswers1, PDO::PARAM_BOOL);
            $stmt->bindValue(':badAnswers2', $this->_badAnswers2, PDO::PARAM_BOOL);
            $stmt->bindValue(':badAnswers3', $this->_badAnswers3, PDO::PARAM_BOOL);
            if($stmt->execute()){
                return $this->_pdo;
            } else {
                return false;
            }
        } catch(PDOException $e){
            return false;
            
        }
    }


     // Mise à jour d'une question selon un id
     public function updateQuestions($id){
        try {
            $sql = 'UPDATE `questions` 
                SET `questionsQuizz` = :questionsQuizz, `goodAnswers` = :goodAnswers, `badAnswers1` = :badAnswers1, `badAnswers2` = :badAnswers2, `badAnswers3` = :badAnswers3
                WHERE `questions`.`id` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':questionsQuizz', $this->_questionsQuizz, PDO::PARAM_STR);
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
    public static function getQuestions($id){
        
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

