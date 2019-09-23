<?php
    // classe de gestion des informations du site

    //// -> PERMET D'UPDATER TOUTES LES INFOS DU SITE DANS LA BASE
    //// -> PERMET DE RECUPERER TOUTES LES INFOS DE LA BASE DANS DES VARIABLEs

    class infosManager extends adminManager {

        public function updateConfig(){
            parent::dbConnect();
        }

    }
?> 