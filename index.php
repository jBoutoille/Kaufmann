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

        // GET LOGOUT -> Execute la déconnexion et redirige vers l'index 
        elseif(isset($_GET['logout'])){
            getLogout();
        }

        // GET PAGE = CONTACT -> Affiche la page Contact
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact'){
            getContact();
        }

        // GET PAGE = ACTUALITE -> Affiche la page Actualité
        elseif(isset($_GET['page']) && $_GET['page'] == 'actualite'){
            getActualite();
        }

        // si URL introuvable, redirection vers l'index
        else{
            getIndex();
        }
    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

?>