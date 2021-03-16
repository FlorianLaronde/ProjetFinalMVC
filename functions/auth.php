<?php 

function is_connected() : bool {
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connected']);

}


function force_user_connection () : void {
    if(!is_connected()) {
        header('location: /controllers/connexionCtrl.php');
        exit();
    }
}