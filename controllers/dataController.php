<?php 

    function dataTraitment(){
        if(isset($_POST['formlogin'])){
            $AM = new AdminManager();
            $AM->TryConnexion();
            header('Location: ./?page=gk-admin');
        }
    }

    // RECUPERATION DE LA SESSION UTILISATEUR
    if(isset($_SESSION['sessionToken'])){
        $_TOKEN = $_SESSION['sessionToken'];
    }
    else{
        $_TOKEN = NULL;
    }

?>