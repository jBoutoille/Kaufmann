<?php 

    function dataTraitment(){
        if(isset($_POST['formlogin'])){
            
        }
    }

    // RECUPERATION DE LA SESSION UTILISATEUR
    if(isset($_SESSION['sessionToken'])){
        $_TOKEN = $_SESSION['sessionToken'];
    }
    else{
        $_TOKEN = '';
    }

?>