<?php
    // classe de gestion des mails

    //// -> PERMET DE GERER LES ACTIONS DEMANDEES PAR MAIL

    class MailManager extends AdminManager {
    
        // Fonction qui modifie l'entrée d'un mail pour la newsletter pour la confirmer
        public function confirmAnEmail($mail,$token){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("UPDATE newsletter SET mail = :mail , temp_mail = NULL , datetime = CURRENT_TIMESTAMP, mail_token = NULL WHERE mail_token = :token");
            $query->bindParam(':mail',$mail);
            $query->bindParam(':token',$token);
            $query->execute();
        }

        public function checkNewsletterExist($mail){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("SELECT * FROM newsletter WHERE mail = :mail");
            $query->bindParam(':mail',$mail);
            $query->execute();
            $count = count($query->fetchAll());
            if($count > 0){
                return true;
            } else {
                return false;
            }
        }

        // Fonction pour vérifier le token d'un mail pour la newsletter
        public function checkNewsletterToken($mail,$token){
            $bdd = $this->dbConnect();
            $query = $bdd->prepare("SELECT * FROM newsletter WHERE temp_mail = :mail AND mail_token = :token");
            $query->bindParam(':mail',$mail);
            $query->bindParam(':token',$token);
            $query->execute();
            $count = count($query->fetchAll());
            if($count > 0){
                return true;
            } else {
                return false;
            }
        }
    
    }