<?php 
session_start();

if (ISSET($_GET['id_user']) AND !empty($_GET['id_user']) AND ISSET($_GET['key']) AND !empty($_GET['id_user'])) {
    $getIdUser = $_GET['id_user'];
    $getKeyUser = $_GET['key'];

    $recupUser = getIdAndKeyUser();

    if($recupUser->rowCount() > 0) {
        $userInfos = $recupUser->fetch();
        if ($userInfos['confirm'] != 1 ) {

            $updateConfirmationn = updateMail(); // à voir

            $_SESSION['key'] = $getKeyUser;
            header('location: /index.php'); 
        } else {
            $_SESSION['key'] = $getKeyUser;
            header('location: /index.php');
        }
    } else {
        echo 'Votre clé ou identifiant est incorrecte';
    }

} else {
    echo 'Aucun utilisateur trouvé';
}
?>