<?php
    // classe de gestion des informations du site

    //// -> PERMET D'UPDATER TOUTES LES INFOS DU SITE DANS LA BASE
    //// -> PERMET DE RECUPERER TOUTES LES INFOS DE LA BASE DANS DES VARIABLES

    class InfosManager extends AdminManager {

        // METHODES DE RECUPERATIONS DES INFOS DU SITE AVEC UN RETURN
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

        // METHODES DE MISES A JOUR DES INFOS VIA FORMULAIRES ADMIN
        public function updateConfig1($p1,$p2,$p3,$p4){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkconfig SET configNomSite = :p1 , configDescription = :p2 , configURL = :p3 , configClient = :p4");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->bindParam(':p4',$p4,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateConfig2($p1,$p2,$p3,$p4,$p5,$p6){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkconfig SET configAdresse = :p1 , configCP = :p2 , configVille = :p3 , configMail = :p4 , configTelephone = :p5 , configFax = :p6");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->bindParam(':p4',$p4,PDO::PARAM_STR);
            $query->bindParam(':p5',$p5,PDO::PARAM_STR);
            $query->bindParam(':p6',$p6,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateHeader($p1,$p2,$p3){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkheader SET headerType = :p1 , headerTitre = :p2 , headerDesc = :p3");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateCabinet($p1,$p2,$p3){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkcabinet SET cabinetTitre = :p1 , cabinetTxt1 = :p2 , cabinetTxt2 = :p3");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateExpertise($p1,$p2,$p3,$p4,$p5,$p6,$p7){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkexpertise SET expertiseTitre = :p1 , expertiseTxt1 = :p2 , expertiseTxt2 = :p3 , expertiseChiffre1 = :p4 , expertiseChiffre2 = :p5 , expertiseTitre1 = :p6 , expertiseTitre2 = :p7");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->bindParam(':p4',$p4,PDO::PARAM_STR);
            $query->bindParam(':p5',$p5,PDO::PARAM_STR);
            $query->bindParam(':p6',$p6,PDO::PARAM_STR);
            $query->bindParam(':p7',$p7,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateServices($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkservices SET servicesTitre = :p1 , services1Titre = :p2 , services1Desc = :p3 , services1SS1 = :p4 , services1SS2 = :p5 , services1SS3 = :p6 , services1SS4 = :p7 , services1SS5 = :p8 , services2Titre = :p9 , services2Desc = :p10 , services2SS1 = :p11 , services2SS2 = :p12 , services2SS3 = :p13 , services2SS4 = :p14 , services3Titre = :p15 , services3Desc = :p16 , services3SS1 = :p17 , services3SS2 = :p18 , services3SS3 = :p19 , services3SS4 = :p20 , services3SS5 = :p21");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->bindParam(':p4',$p4,PDO::PARAM_STR);
            $query->bindParam(':p5',$p5,PDO::PARAM_STR);
            $query->bindParam(':p6',$p6,PDO::PARAM_STR);
            $query->bindParam(':p7',$p7,PDO::PARAM_STR);
            $query->bindParam(':p8',$p8,PDO::PARAM_STR);
            $query->bindParam(':p9',$p9,PDO::PARAM_STR);
            $query->bindParam(':p10',$p10,PDO::PARAM_STR);
            $query->bindParam(':p11',$p11,PDO::PARAM_STR);
            $query->bindParam(':p12',$p12,PDO::PARAM_STR);
            $query->bindParam(':p13',$p13,PDO::PARAM_STR);
            $query->bindParam(':p14',$p14,PDO::PARAM_STR);
            $query->bindParam(':p15',$p15,PDO::PARAM_STR);
            $query->bindParam(':p16',$p16,PDO::PARAM_STR);
            $query->bindParam(':p17',$p17,PDO::PARAM_STR);
            $query->bindParam(':p18',$p18,PDO::PARAM_STR);
            $query->bindParam(':p19',$p19,PDO::PARAM_STR);
            $query->bindParam(':p20',$p20,PDO::PARAM_STR);
            $query->bindParam(':p21',$p21,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateContat($p1,$p2,$p3,$p4,$p5,$p6){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkcontact SET contactTitre = :p1 , contactCoordonnees = :p2 , contactDescBtn1 = :p3 , contactBtn1 = :p4 , contactDescBtn2 = :p5 , contactBtn2 = :p6");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->bindParam(':p4',$p4,PDO::PARAM_STR);
            $query->bindParam(':p5',$p5,PDO::PARAM_STR);
            $query->bindParam(':p6',$p6,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateNewsletter($p1,$p2,$p3){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gknewsletter SET newsletterTitre = :p1 , newsletterTxtForm = :p2 , newsletterTxtBtn = :p3");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->excute();
        }

        public function updateFooter($p1,$p2,$p3){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE gkfooter SET footerTitreCoordonnees = :p1 , footerLinkedin = :p2 , footerCopyrights = :p3");
            $query->bindParam(':p1',$p1,PDO::PARAM_STR);
            $query->bindParam(':p2',$p2,PDO::PARAM_STR);
            $query->bindParam(':p3',$p3,PDO::PARAM_STR);
            $query->excute();
        }
    }
?>