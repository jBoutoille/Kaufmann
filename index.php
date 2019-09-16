<?php 

    session_start();   

    require './models/adminManager.php';
    require './models/visitorManager.php';

    require './controllers/visitorController.php';
    require './controllers/adminController.php';
    require './controllers/dataController.php';

    try
    {

        // TRAITEMENT DES FORMULAIRES -------------------
        if(isset($_GET['treatment']))
            { dataTraitment(); }


        // PARTIE VISITEUR --------------------------------
        elseif(empty($_GET))
            { getIndex(); }
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact')
            { getContact(); }
        elseif(isset($_GET['page']) && $_GET['page'] == 'actualite')
            { getActualite(); }


        // PARTIE ADMIN ----------------------------------
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin')
            { getAdmin(); }
        elseif(isset($_GET['action']) && $_GET['action'] == 'logout')
            { adminLogout(); }


        // URL INTROUVABLE
        else
            { get404(); }

    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

?>