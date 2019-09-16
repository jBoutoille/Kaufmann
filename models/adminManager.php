<?php 
    // classe de gestion admin

    //// CETTE CLASSE EST A APPELER EN PREMIER LIEU CAR ELLE SE CONNECTE A LA BDD
    
    //// -> PERMET DE SE CONNECTER ET DECONNECTER D'UN COMPTE ADMIN
    //// -> PERMET DE RECUPERER LES INFORMATIONS SITE VITRINE STOCKEES EN BDD
    //// -> PERMET D'AFFICHER LES DONNEES FORMULAIRES UTILISATEURS
    //// -> PERMET DE CREER DES NOUVEAUX ARTICLES EN BDD
    //// -> PERMET D'AFFICHER LES CANDIDATURES ET NEWSLETTER (peut être télécharger la liste des mails en txt)


    class AdminManager {

        // Fonction de connection à la BDD
        public function dbConnect(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=kaufmann;charset=utf8', 'root', 'root');
                return $db;
            }catch (Exception $e){
                throw new Exception('Connexion SQL impossible');
            }
        }

        // Fonction pour mettre un token de session random à un utilisateur 
        public function setToken($id){
            try{
                $token = openssl_random_pseudo_bytes(150);
                $hex = bin2hex($token);
                $db = $this->dbConnect();
                $req = $db->prepare("UPDATE users SET session_token = :tok WHERE users.id = :theid");
                $req->bindParam(':tok',$hex,PDO::PARAM_STR);
                $req->bindParam(':theid',$id,PDO::PARAM_INT);
                $req->execute();
                return $hex;
            } catch (Exception $e){
                throw new Exception('erreur intégration ' . $type . ' cookie en base');
            }    
        }

        // Fonction pour retirer le token de session d'un utilisateur (deconnexion)
        public function unsetToken($token){
            try{
                $db = $this->dbConnect();
                $req = $db->prepare("UPDATE users SET `session_token` = '' WHERE users.session_token = :tok");
                $req->bindParam(':tok',$token,PDO::PARAM_STR);
                $req->execute();
            } catch (Exception $e){
                throw new Exception('erreur intégration token cookie en base');
            }    
        }

        // Fonction pour mettre à jour la date et heure de dernière connection
        public function setLastConnexionDate($id){
            try{
                $db = $this->dbConnect();
                $req = $db->prepare("UPDATE users SET time_last_connect = CURRENT_TIMESTAMP WHERE users.id = :theid");
                $req->bindParam(':theid',$id,PDO::PARAM_INT);
                $req->execute();
            } catch (Exception $e){
                throw new Exception('erreur intégration token cookie en base');
            }    
        }

    }



?>