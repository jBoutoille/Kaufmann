<?php 

    function getIndex(){
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
        require './views/visitor/indexView.php';
    }

    function getActualite(){
        // RECUPERATION DES TABLES
        $infos = new InfosManager();
        $RConfig = $infos->recupConfig();
        $RFooter = $infos->recupFooter();
        require './views/visitor/actualiteView.php';
    }

    function get404(){
        require './views/others/404View.php';
    }

    function getRdv(){
        // RECUPERATION DES TABLES
        $infos = new InfosManager();
        $RConfig = $infos->recupConfig();
        $RFooter = $infos->recupFooter();
        require './views/visitor/formOne.php';
    }

    function getCv(){
        // RECUPERATION DES TABLES
        $infos = new InfosManager();
        $RConfig = $infos->recupConfig();
        $RFooter = $infos->recupFooter();
        require './views/visitor/formTwo.php';
    }

    function getMentions(){
        // RECUPERATION DES TABLES
        $infos = new InfosManager();
        $RConfig = $infos->recupConfig();
        $RFooter = $infos->recupFooter();
        require './views/visitor/mentionsView.php';
    }

    function getConfidentialite(){
        // RECUPERATION DES TABLES
        $infos = new InfosManager();
        $RConfig = $infos->recupConfig();
        $RFooter = $infos->recupFooter();
        require './views/visitor/confidentialiteView.php';
    }

    function getInformations(){
        // RECUPERATION DES TABLES
        $infos = new InfosManager();
        $RConfig = $infos->recupConfig();
        $RFooter = $infos->recupFooter();
        if(isset($_SESSION['notif-infosICON'])){
            $infosICON = $_SESSION['notif-infosICON'];
        }
        else{
            $infosICON = "fa-exclamation-circle";
        }
        if(isset($_SESSION['notif-infosH1'])){
            $infosH1 = $_SESSION['notif-infosH1'];
        }
        else{
            $infosH1 = "Erreur inconnue";
        }
        if(isset($_SESSION['notif-infosP'])){
            $infosP = $_SESSION['notif-infosP'];
        }
        else{
            $infosP = "Une erreur inconnue est survenue.";
        }
        if(isset($_SESSION['notif-infosLINK'])){
            $infosLINK = $_SESSION['notif-infosLINK'];
        }
        else{
            $infosLINK = "./";
        }
        if(isset($_SESSION['notif-infosLINKTEXT'])){
            $infosLINKTEXT = $_SESSION['notif-infosLINKTEXT'];
        }
        else{
            $infosLINKTEXT = "Retourner à l'accueil";
        }
        require './views/visitor/formInfosView.php';
        $_SESSION['notif-infosICON'] = NULL;
        $_SESSION['notif-infosH1'] = NULL;
        $_SESSION['notif-infosP'] = NULL;
        $_SESSION['notif-infosLINK'] = NULL;
        $_SESSION['notif-infosLINKTEXT'] = NULL;
    }
?>