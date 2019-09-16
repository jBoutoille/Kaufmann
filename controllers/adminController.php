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
    function adminConfigInfos(){
        
    }
    function adminConfigSEO(){

    }

    // MODIFICATIONS
    function adminModifHeader(){

    }
    function adminModifPresentation(){
        
    }
    function adminModifExpertise(){
        
    }
    function adminModifServices(){
        
    }
    function adminModifContact(){
        
    }
    function adminModifNewsletter(){
        
    }
    function adminModifFooter(){
        
    }

    // GESTION DE LA NEWSLETTER
    function adminNewsletter(){

    }

    // GESTION DE L'ACTUALITE
    function adminActualite(){

    }

    // CANDIDATURES RECUES
    function adminCandidatures(){

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