<?php
    // classe de gestion des informations du site

    //// -> PERMET D'UPDATER TOUTES LES INFOS DU SITE DANS LA BASE
    //// -> PERMET DE RECUPERER TOUTES LES INFOS DE LA BASE DANS DES VARIABLES

    class InfosManager extends AdminManager {

        // Fonction de connection à la BDD
        public function dbC(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=kaufmann;charset=utf8', 'root', 'root');
                return $db;
            }catch (Exception $e){
                throw new Exception('Connexion SQL impossible');
            }
        }

        public function recupConfig(){
            $test = 1;
            $bdd = $this->dbC();
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $bdd->query("SELECT * FROM gkconfig");
            $data = $query->fetch();
            return $data;

        }

    }
?>