<?php 

    session_start();   

    function startsWith ($string, $startString) 
    { 
        $len = strlen($startString); 
        return (substr($string, 0, $len) === $startString); 
    } 

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
    // PAGE D'ACCUEIL - ONE PAGE
        elseif(empty($_GET))
            { getIndex(); }
    // PAGE DE CONTACT / DEMANDE DE DEVIS
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact')
            { getDevis(); }
    // PAGE DE CONTACT / NOUS REJOINDRE
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact')
            { getRejoindre(); }
    // PAGE D'ACTUALITES
        elseif(isset($_GET['page']) && $_GET['page'] == 'actualite')
            { getActualite(); }
    // PAGE DES MENTIONS LEGALES
        elseif(isset($_GET['page']) && $_GET['page'] == 'mentions-legales')
            { getMentions(); }


// PARTIE ADMIN ----------------------------------
    // DASHBOARD
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && empty($_GET['p1']))
            { getAdmin(); }
    // CONFIGURATION DU SITE
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'config')
            { getAdminConfig(); }
    // MODIFICATIONS -> HEADER
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-header')
            { getAdminHeader(); }
    // MODIFICATIONS -> PRESENTATION
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-presentation')
            { getAdminPresentation(); }
    // MODIFICATIONS -> EXPERTISE
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-expertise')
            { getAdminExpertise(); }
    // MODIFICATIONS -> SERVICES
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-services')
            { getAdminServices(); }
    // MODIFICATIONS -> CONTACT
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-contact')
            { getAdminContact(); }
    // MODIFICATIONS -> NEWSLETTER
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-newsletter')
            { getAdminNewsletter(); }
    // MODIFICATIONS -> FOOTER
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-footer')
            { getAdminFooter(); }
    // GESTION DE LA NEWSLETTER
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'newsletter')
            { adminNewsletter(); }
    // GESTION DE L'ACTUALITE
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'actualite')
            { adminActualite(); }
    // CANDIDATURES RECUES
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'candidatures')
            { adminCandidatures(); }
    // SE DECONNECTER
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