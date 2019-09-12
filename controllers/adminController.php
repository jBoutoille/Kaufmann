<?php 

    require './models/adminManager.php';

    // DASHBOARD
    function getAdmin(){
        require './views/adminView.php';
    }

    // CONFIGURATION DU SITE
    function adminConfigInfos(){
        $navChecker = 'configInfos';
    }
    function adminConfigSEO(){
        $navChecker = 'configInfos';
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
    function adminLogout(){

    }

?>