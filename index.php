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
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && empty($_GET['p1']))
            { getAdmin(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'config')
            { getAdminConfig(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'header')
            { getAdminHeader(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'presentation')
            { getAdminPresentation(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'expertise')
            { getAdminExpertise(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'services')
            { getAdminServices(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'contact')
            { getAdminContact(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'newsletter')
            { getAdminNewsletter(); }

        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'footer')
            { getAdminFooter(); }

        elseif(isset($_GET['action']) && $_GET['action'] == 'logout')
            { adminLogout($_TOKEN); }


        // URL INTROUVABLE
        else
            { get404(); }

    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

    // DESTRUCTION DES NOTIFICATIONS
    $notif = NULL;

?>