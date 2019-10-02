<?php 

    session_start();   

    function startsWith ($string, $startString) 
    { 
        $len = strlen($startString); 
        return (substr($string, 0, $len) === $startString); 
    } 
    function endsWith($currentString, $target)
    {
        $length = strlen($target);
        if ($length == 0) {
            return true;
        }
        return (substr($currentString, -$length) === $target);
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './models/phpmailer/PHPMailer.php';
    require './models/phpmailer/SMTP.php';
    require './models/phpmailer/Exception.php';

    require './models/AdminManager.php';
    require './models/InfosManager.php';
    require './models/VisitorManager.php';
    require './models/MailManager.php';

    require './controllers/visitorController.php';
    require './controllers/adminController.php';
    require './controllers/dataController.php';

    try
    {

// TRAITEMENT DES FORMULAIRES -------------------
        if(isset($_GET['treatment']))
            { dataTreatment(); }


// PARTIE VISITEUR --------------------------------
    // PAGE D'ACCUEIL - ONE PAGE
        elseif(empty($_GET))
            { getIndex(); }
    // PAGE D'ACTUALITES
        elseif(isset($_GET['page']) && $_GET['page'] == 'actualite')
            { getActualite(); }
    // PAGE DES MENTIONS LEGALES
        elseif(isset($_GET['page']) && $_GET['page'] == 'mentions-legales')
            { getMentions(); }
    // PAGE DE CONFIDENTIALITE
        elseif(isset($_GET['page']) && $_GET['page'] == 'politique-de-confidentialite')
            { getConfidentialite(); }
    // PAGE DE RDV
        elseif(isset($_GET['page']) && $_GET['page'] == 'rendez-vous')
            { getRdv(); }
    // PAGE DE CV
        elseif(isset($_GET['page']) && $_GET['page'] == 'rejoignez-nous')
            { getCv(); }


// PARTIE ADMIN ----------------------------------
    // DASHBOARD
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && empty($_GET['p1']))
            { getAdmin(); }
    // CONFIGURATION -> SITE
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'config-site')
            { getAdminConfigSite(); }
    // CONFIGURATION -> COORDONNEES
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'config-coordonnees')
            { getAdminConfigCoordonnees(); }
    // CONFIGURATION -> HORAIRES
    elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'config-horaires')
            { getAdminConfigHoraires(); }
    // MODIFICATIONS -> HEADER
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-header')
            { getAdminHeader(); }
    // MODIFICATIONS -> LE CABINET
        elseif(isset($_GET['page']) && $_GET['page'] == 'gk-admin' && 
            isset($_GET['p1']) && $_GET['p1'] == 'edit-lecabinet')
            { getAdminLecabinet(); }
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


// PARTIE GESTION MAILS ----------------------------------
    // CONFIRMER L'INSCRIPTION A LA NEWSLETTER
        elseif(isset($_GET['action']) && $_GET['action'] == 'confirmNewsletter')
        { mailConfirm(); }

    // SUPPRIMER L'INSCRIPTION A LA NEWSLETTER
        elseif(isset($_GET['action']) && $_GET['action'] == 'deleteNewsletter')
        { mailDelete(); }


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