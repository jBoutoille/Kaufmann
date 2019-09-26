<?php 
    // classe de gestion des formulaires visiteurs

    //// PERMET DE RECUPERER LES DONNEES UTILISATEUR 
    class VisitorManager extends AdminManager {

        public function insertNewsletter($mail){
            $token = openssl_random_pseudo_bytes(25);
            $hex = bin2hex($token);
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("INSERT INTO newsletter (mail , temp_mail , datetime , mail_token) VALUES (NULL, :mail, CURRENT_TIMESTAMP, :token)");
            $query->bindParam(':mail',$mail);
            $query->bindParam(':token',$hex);
            $query->execute();
            return $hex;
        }

    }

?>