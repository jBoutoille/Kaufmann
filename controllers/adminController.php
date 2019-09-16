<?php 

    // ACCUEIL ADMIN LOGGED - Dashboard
    function getAdmin(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/adminView.php';            
        }
        else{
            require './views/admin/loginView.php';
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
        header('Location: ./?page=gk-admin');
    }

?>