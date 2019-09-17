<?php 

    // ACCUEIL ADMIN LOGGED - Dashboard
    function getAdmin(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/adminView.php';            
        }
        else{
            if(isset($_SESSION['notif'])){
                $notif = '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> ' . $_SESSION['notif'] . '</div>';
            }
            else{
                $notif = NULL;
            }
            require './views/admin/loginView.php';
            $notif = NULL;
            $_SESSION['notif'] = NULL;
        }
    }

    // CONFIGURATION DU SITE
    function getAdminConfig(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/configView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // MODIFICATIONS
    function getAdminHeader(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editHeaderView.php';
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminPresentation(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editPresentationView.php';
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminExpertise(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editExpertiseView.php';
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminServices(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editServicesView.php';
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminContact(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editContactView.php';
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminNewsletter(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editNewsletterView.php';
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminFooter(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/editFooterView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // GESTION DE LA NEWSLETTER
    function adminNewsletter(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/newsletterView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // GESTION DE L'ACTUALITE
    function adminActualite(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/actualiteView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // CANDIDATURES RECUES
    function adminCandidatures(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/candidaturesView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // SE DECONNECTER
    function adminLogout($_TOKEN){
        $AM = new AdminManager();
        $AM->unsetToken($_TOKEN);
        $_SESSION['sessionToken'] = NULL;
        session_destroy();
        header('Location: ./?page=gk-admin');
    }

?>