<?php 
require_once dirname(__FILE__).'/../utils/Database.php';

class User {
    private $_pseudo;
    private $_mail;
    private $_password;
    private $_admin;
    private $_userActif;
    private $_pdo;



    public function __construct($pseudo = NULL, $mail = NULL, $password = NULL, $admin = NULL, $userActif = NULL) {

        $this->_pseudo = $pseudo;
        $this->_mail = $mail;
        $this->_password = $password;
        $this->_admin = $admin;
        $this->_userActif = $userActif;
        $this->_pdo = Database::getInstance();
        
    }

  
    // set le pseudo on définit quelque chose
    public function setPseudo($pseudo){
        $this->_pseudo = $pseudo;
    }

    // set le mail
    public function setMail($mail){
        $this->_mail = $mail;
    }

    // set le password
    public function setPassword($password){
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $this->_password = $password_hash;
    }

    // set le admin
    public function setadmin($admin){
        $this->_admin = $admin;
    }

    public function getUserLogin($mail, $password){

        $sql = "SELECT *  FROM `users` WHERE `mail` = :mail ;";
        $stmt = $this->_pdo->prepare($sql);

        // association des paramètres  
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        if($stmt->execute()){ // envoie de la requête
            $user = $stmt->fetch();
            if($user){
                // retourne l'id user si le mot de passe est vérifié
                if(password_verify($password, $user->password)){
                    return $user;
                } 
            }
        }
        return false;
    }
    
    // création d'un nouvel utilisateur
    public function create(){
        try{
            $sql = 'INSERT INTO `users` 
                    (`pseudo`, `mail`, `password`, `admin`)
                    VALUES (:pseudo, :mail, :password, :admin);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':pseudo', $this->_pseudo, PDO::PARAM_STR);
            $stmt->bindValue(':mail', $this->_mail, PDO::PARAM_STR);
            $stmt->bindValue(':password', $this->_password, PDO::PARAM_STR);
            $stmt->bindValue(':admin', $this->_admin, PDO::PARAM_BOOL);
            if($stmt->execute()){
                return $this->_pdo->lastInsertId();
            } else {
                return false;
            }
        } catch(PDOException $e){
            return false;
            
        }
    }

    // Récupération de toutes les infos d'un user selon un id
    public static function get($id){
        
        $pdo = Database::getInstance();

        try{
            $sql = 'SELECT * FROM `users` 
                    WHERE `id_users` = :id;';
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id',$id,PDO::PARAM_INT);
            $sth->execute();
            return($sth->fetch());
        }
        catch(PDOException $e){
            return false;
        }

    }

    // Récupération de toutes les infos de tous les users
    public function getAll(){
        $sql = 'SELECT * from `users`;';
        $stmt = $this->_pdo->query($sql);
        return ($stmt->fetchAll());
    }


    // Mise à jour d'un user selon un id
    public function update($id){
        try {
            $sql = 'UPDATE `users` 
                SET `pseudo` = :pseudo, `mail` = :mail, `password` = :password 
                WHERE `id_users` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':pseudo', $this->_pseudo, PDO::PARAM_STR);
            $stmt->bindValue(':mail', $this->_mail, PDO::PARAM_STR);
            $stmt->bindValue(':password', $this->_password, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return ($stmt->execute());
        } catch (PDOException $e) {
            return $e;
        }
        
    }


      // Mise à jour d'un user selon un id
      public function updateWithoutPassword($id){
        try {
            $sql = 'UPDATE `users` 
                SET `pseudo` = :pseudo, `mail` = :mail
                WHERE `id_users` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':pseudo', $this->_pseudo, PDO::PARAM_STR);
            $stmt->bindValue(':mail', $this->_mail, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return ($stmt->execute());
        } catch (PDOException $e) {
            return $e;
        }
        
    }

    // Suppression d'un user selon un id
    public function delete($id){
        $sql = 'DELETE from `users` WHERE `id_users` = :id;';
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return ($stmt->execute());
    }




    // Partie inscription par mail **************************************

    public function confirmMail(){
        try{
            $sql = 'INSERT INTO `users` 
                    (`key`, `confirm`)
                    VALUES (:key, :confirm);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':key', $this->_key, PDO::PARAM_INT);
            $stmt->bindValue(':confirm', $this->_confirm, PDO::PARAM_INT);
            if($stmt->execute()){
                return $this->_pdo->lastInsertId();
            } else {
                return false;
            }
        } catch(PDOException $e){
            return false;
            
        }
    }


    // récupérer l'adresse mail d'un user
    public static function getMail($mail){
        
        $pdo = Database::getInstance();

        try{
            $sql = 'SELECT * FROM `users` 
                    WHERE `mail` = :mail;';
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':mail',$mail,PDO::PARAM_INT);
            $sth->execute();
            return($sth->fetch());
        }
        catch(PDOException $e){
            return false;
        }

    }

    // récupérer l'id et la clé d'un user 
    // public static function getIdAndKeyUser($getIdUser, $getKeyUser){
        
    //     $pdo = Database::getInstance();

    //     try{
    //         $sql = 'SELECT * FROM `users` 
    //                 WHERE `id_user` = :id; AND `key` = :key';
    //         $sth = $pdo->prepare($sql);
    //         $sth->bindValue(':getIdUser',$getIdUser,PDO::PARAM_INT);
    //         $sth->bindValue(':getKeyUser',$getKeyUser,PDO::PARAM_INT);
    //         $sth->execute();
    //         return($sth->fetch());
    //     }
    //     catch(PDOException $e){
    //         return false;
    //     }

    // }



    public function updateMail($id){
        try {
            $sql = 'UPDATE `users` 
                SET `confirm` = :confirm
                WHERE `id_users` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':confirm', $this->_confirm, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return ($stmt->execute());
        } catch (PDOException $e) {
            return $e;
        }
        
    }


    public function createPoints($id){
        try{
            $sql = 'INSERT INTO `results` 
                    (`id_users`)
                    VALUES (:id_users);';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':id_users', $id, PDO::PARAM_INT);
            if($stmt->execute()){
                return $this->_pdo->lastInsertId();
            } else {
                return false;
            }
        } catch(PDOException $e){
            return false;
            
        }
    }


    
    public function updatePoint($point, $id){
        try {
                $sql = 'UPDATE `results` 
                    SET `points` = :point + `points`, `nombreQuizz` = `nombreQuizz` + 1
                    WHERE `id_users` = :id;';
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':point', $point, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return ($stmt->execute());
        } catch (PDOException $e) {
            return $e;
        }
        
    }


}





    




