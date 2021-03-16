<?php

require_once dirname(__FILE__).'/../utils/config.php'; 

class Database{

    private static $_pdo;

    public static function getInstance(){
        try{
            if(is_null(self::$_pdo)){
                self::$_pdo = new PDO(DSN, LOGIN, PASSWORD);
                self::$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }
            
        }catch(PDOException $e){
           echo 'erreur de connexion à la BDD : '. $e->getMessage();
        }
        return self::$_pdo;

    }
}


// try {
//     if ($_SESSION['role'] == "eleve") {
//         $bdd = new PDO('mysql:host=localhost;dbname=TP-2;charset=utf8', 'eleve', 'eleve');
//     }
//     if ($_SESSION['role'] == "enseignant") {
//         $bdd = new PDO('mysql:host=localhost;dbname=TP-2;charset=utf8', 'enseignant', 'enseignant');
//     }




// class Database {
//     public static function connect() {

//     $dsn = 'mysql:host=localhost;dbname=projet_lamanu';
//     $login = 'florian_admin';
//     $password = 'florian';
//     static $_pdo;

//         try{
//             $pdo = new PDO($dsn, $login, $password);
//             // Permet de fournir des informations complémentaires lors de la capture des exceptions avec try Catch
//             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             // Permet de délivrer un jeu de résultats sous forme d'objet.
//             $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//         }
//         catch(PDOException $e){
//         echo 'erreur de connexion à la BDD : '. $e->getMessage();
//         }

//             return $pdo;
//         }
    
// }

?>