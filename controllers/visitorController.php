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
?>