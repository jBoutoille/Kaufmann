<?php 

    // ACCUEIL ADMIN LOGGED - Dashboard
    function getAdmin(){
        if(isset($_SESSION['sessionToken'])){
            // RECUPERATION DES TABLES
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RHeader = $infos->recupHeader();
            $RCabinet = $infos->recupCabinet();
            $RExpertise = $infos->recupExpertise();
            $RServices = $infos->recupServices();
            $RContact = $infos->recupContact();
            $RNewsletter = $infos->recupNewsletter();
            $RFooter = $infos->recupFooter();
            require './views/admin/adminView.php';            
        }
        else{
            if(isset($_SESSION['notif'])){
                $notif = $_SESSION['notif'];
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
    function getAdminLecabinet(){
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
        session_start();
        $_SESSION['notif'] = '<div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle"></i> Vous venez de vous déconnecter</div>';
        header('Location: ./?page=gk-admin');
    }
    
?>