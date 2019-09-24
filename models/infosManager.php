<?php
    // classe de gestion des informations du site

    //// -> PERMET D'UPDATER TOUTES LES INFOS DU SITE DANS LA BASE
    //// -> PERMET DE RECUPERER TOUTES LES INFOS DE LA BASE DANS DES VARIABLES

    class InfosManager extends AdminManager {

        public function recupConfig(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkconfig");
            $data = $query->fetch();
            return $data;
        }

        public function recupHeader(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkheader");
            $data = $query->fetch();
            return $data;
        }

        public function recupCabinet(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkcabinet");
            $data = $query->fetch();
            return $data;
        }

        public function recupExpertise(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkexpertise");
            $data = $query->fetch();
            return $data;
        }

        public function recupServices(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkservices");
            $data = $query->fetch();
            return $data;
        }

        public function recupContact(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkcontact");
            $data = $query->fetch();
            return $data;
        }

        public function recupNewsletter(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gknewsletter");
            $data = $query->fetch();
            return $data;
        }

        public function recupFooter(){
            $bdd = $this->dbConnect();
            $query = $bdd->query("SELECT * FROM gkfooter");
            $data = $query->fetch();
            return $data;
        }
    }
?>