<?php 

    session_start();   

    require 'controllers/visitorController.php';
    require 'controllers/adminController.php';

    try
    {
        // PAS DE GET -> Affiche la page Accueil
        if(empty($_GET)){
            getIndex();
        }

        // GET LOGOUT -> Execute la déconnexion et Affiche la page Accueil
        elseif(isset($_GET['action']) && $_GET['action'] == 'logout'){
            adminLogout();
        }

        // GET PAGE = CONTACT -> Affiche la page Contact
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact'){
            getContact();
        }

        // GET PAGE = ACTUALITE -> Affiche la page Actualité
        elseif(isset($_GET['page']) && $_GET['page'] == 'actualite'){
            getActualite();
        }

        // GET PAGE = ACTUALITE -> Affiche la page Admin
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin'){
            getAdmin();
        }

        // si URL introuvable, redirection vers l'index
        else{
            get404();
        }

    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

?>