<?php 
    // classe de gestion admin

    //// CETTE CLASSE EST A APPELER EN PREMIER LIEU CAR ELLE SE CONNECTE A LA BDD
    
    //// -> PERMET DE SE CONNECTER ET DECONNECTER D'UN COMPTE ADMIN DE MANIERE SECURISEE


    class AdminManager {

        // Fonction de connection à la BDD
        public function dbConnect(){
            try{
                require './config.php';;
                $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser , $dbpass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            }catch (Exception $e){
                throw new Exception('Connexion SQL impossible');
            }
        }

        // PUBLIC FUNCTION TO LOGIN AN ACCOUNT FROM formlogin
        public function TryConnexion(){
            try{
                $user = htmlspecialchars($_POST['adminLoginUser']);
                $pw = htmlspecialchars($_POST['adminLoginPw']);
                $bdd = $this->dbConnect();
                $query = $bdd->prepare("SELECT * FROM users WHERE username = :username");
                $query->bindParam(':username',$user,PDO::PARAM_STR);
                $query->execute();
                $data = $query->fetch();
        
                if($user != $data['username']){
                    $_SESSION['notif'] = '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Identifiant invalide</div>';
                }
                else{
                    if(password_verify($pw,$data['password'])){
                        $id = $data['id'];
                        $token = $this->setToken($id);
                        $this->setLastConnexionDate($id);
                        $_SESSION['sessionToken'] = $token;
                    }
                    else {
                        $_SESSION['notif'] = '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Identifiant invalide</div>';
                    }
                }
            }
            catch (Exception $e){
                throw new Exception('Erreur lors de la connexion au compte');
            }    
        }

        // Fonction pour se deconnecter du panel
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

        // Fonction pour mettre un token de session random à un utilisateur 
        public function setToken($id){
            try{
                $token = openssl_random_pseudo_bytes(25);
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
