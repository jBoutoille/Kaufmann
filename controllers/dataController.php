<?php 

    // traitement des données formulaires
    function dataTreatment(){
        
        // Formulaire de connexion au panel admin
        if(isset($_POST['formAdminLogin'])){
            $AM = new AdminManager();
            $AM->TryConnexion();
            header('Location: ./?page=gk-admin');
        }

        // Formulaire de configuration du site
        elseif(isset($_POST['formAdminConfig1'])){
            
        }

        // Formulaire de configuration des coordonnées
        elseif(isset($_POST['formAdminConfig2'])){
  
        }

        // Formulaire d'édition de la section HEADER
        elseif(isset($_POST['formAdminEditHeader'])){
 
        }

        // Formulaire d'édition de la section LE CABINET
        elseif(isset($_POST['formAdminEditLecabinet'])){
  
        }

        // Formulaire d'édition de la section EXPERTISE
        elseif(isset($_POST['formAdminEditExpertise'])){
 
        }

        // Formulaire d'édition de la section SERVICES
        elseif(isset($_POST['formAdminEditServices'])){

        }

        // Formulaire d'édition de la section CONTACT
        elseif(isset($_POST['formAdminEditContact'])){

        }

        // Formulaire d'édition de la section NEWSLETTER
        elseif(isset($_POST['formAdminEditNewsletter'])){
 
        }

        // Formulaire d'édition de la section FOOTER
        elseif(isset($_POST['formAdminEditFooter'])){
  
        }

        // AUCUN FORMULAIRE
        else{
            require './views/others/404View.php';
        }
    }

    // RECUPERATION DE LA SESSION UTILISATEUR
    if(isset($_SESSION['sessionToken'])){
        $_TOKEN = $_SESSION['sessionToken'];
    }
    else{
        $_TOKEN = NULL;
    }

    // RECUPERATION DES TABLES
    $infos = new InfosManager();
    $RConfig = $infos->recupConfig();



?>