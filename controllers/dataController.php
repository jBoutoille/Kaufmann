<?php 

    // FONCTION DE TRAITEMENT DES DONNEES UTILISATEUR
    function dataTreatment(){


        // Création de l'objet de gestion du compte Administrateur
        $AM = new AdminManager();
        // Création de l'objet de gestion des informations du site
        $IM = new InfosManager();
        // Création de l'objet ge gestion des formulaires visiteurs
        $VM = new VisitorManager();


        // Formulaire de connexion au panel admin
        if(isset($_POST['formAdminLogin'])){
            $AM->TryConnexion();
            header('Location: ./?page=gk-admin');
        }

        // Formulaire de configuration du site
        elseif(isset($_POST['formAdminConfig1'])){
            $p1 = htmlspecialchars($_POST['adminConfig1NomSite']);
            $p2 = htmlspecialchars($_POST['adminConfig1Description']);
            $p3 = htmlspecialchars($_POST['adminConfig1URL']);
            if(!endsWith($p3,"/")){
                $p3 = $p3 . '/';
            }
            $p4 = htmlspecialchars($_POST['adminConfig1Client']);
            $IM->updateConfig1($p1,$p2,$p3,$p4);
            header('Location: ./?page=gk-admin&p1=config-site');
        }

        // Formulaire de configuration des coordonnées
        elseif(isset($_POST['formAdminConfig2'])){
            $p1 = htmlspecialchars($_POST['adminConfig2Adresse']);
            $p2 = htmlspecialchars($_POST['adminConfig2CP']);
            $p3 = htmlspecialchars($_POST['adminConfig2Ville']);
            $p4 = htmlspecialchars($_POST['adminConfig2Mail']);
            $p5 = htmlspecialchars($_POST['adminConfig2Telephone']);
            $p6 = htmlspecialchars($_POST['adminConfig2Fax']);
            $IM->updateConfig2($p1,$p2,$p3,$p4,$p5,$p6);
            header('Location: ./?page=gk-admin&p1=config-coordonnees');
        }

        // Formulaire de configuration des horaires
        elseif(isset($_POST['formAdminConfig3'])){
            $p1 = htmlspecialchars($_POST['adminConfig3Lundi']);
            $p2 = htmlspecialchars($_POST['adminConfig3Mardi']);
            $p3 = htmlspecialchars($_POST['adminConfig3Mercredi']);
            $p4 = htmlspecialchars($_POST['adminConfig3Jeudi']);
            $p5 = htmlspecialchars($_POST['adminConfig3Vendredi']);
            $p6 = htmlspecialchars($_POST['adminConfig3Samedi']);
            $p7 = htmlspecialchars($_POST['adminConfig3Dimanche']);
            $IM->updateConfig3($p1,$p2,$p3,$p4,$p5,$p6,$p7);
            header('Location: ./?page=gk-admin&p1=config-horaires');
        }

        // Formulaire d'édition de la section HEADER
        elseif(isset($_POST['formAdminEditHeader'])){
            $p1 = htmlspecialchars($_POST['adminEditHeaderType']);
            $p2 = htmlspecialchars($_POST['adminEditHeaderTitre']);
            $p3 = htmlspecialchars($_POST['adminEditHeaderDescription']);
            $IM->updateHeader($p1,$p2,$p3);
            header('Location: ./?page=gk-admin&p1=edit-header');
        }

        // Formulaire d'édition de la section LE CABINET
        elseif(isset($_POST['formAdminEditLecabinet'])){
            $p1 = htmlspecialchars($_POST['adminEditLecabinetTitre']);
            $p2 = htmlspecialchars($_POST['adminEditLecabinet1er']);
            $p3 = htmlspecialchars($_POST['adminEditLecabinet2eme']);
            $IM->updateCabinet($p1,$p2,$p3);
            header('Location: ./?page=gk-admin&p1=edit-lecabinet');
        }

        // Formulaire d'édition de la section EXPERTISE
        elseif(isset($_POST['formAdminEditExpertise'])){
            $p1 = htmlspecialchars($_POST['adminEditExpertiseTitre']);
            $p2 = htmlspecialchars($_POST['adminEditExpertiseTxt1']);
            $p3 = htmlspecialchars($_POST['adminEditExpertiseTxt2']);
            $p4 = htmlspecialchars($_POST['adminEditExpertiseChiffre1']);
            $p5 = htmlspecialchars($_POST['adminEditExpertiseChiffre2']);
            $p6 = htmlspecialchars($_POST['adminEditExpertiseTitreChiffre1']);
            $p7 = htmlspecialchars($_POST['adminEditExpertiseTitreChiffre2']);
            $IM->updateExpertise($p1,$p2,$p3,$p4,$p5,$p6,$p7);
            header('Location: ./?page=gk-admin&p1=edit-expertise');
        }

        // Formulaire d'édition de la section SERVICES
        elseif(isset($_POST['formAdminEditServices'])){
            $p1 = htmlspecialchars($_POST['adminEditServicesTitre']);
            $p2 = htmlspecialchars($_POST['adminEditServices1Titre']);
            $p3 = htmlspecialchars($_POST['adminEditServices1Description']);
            $p4 = htmlspecialchars($_POST['adminEditServices1SS1']);
            $p5 = htmlspecialchars($_POST['adminEditServices1SS2']);
            $p6 = htmlspecialchars($_POST['adminEditServices1SS3']);
            $p7 = htmlspecialchars($_POST['adminEditServices1SS4']);
            $p8 = htmlspecialchars($_POST['adminEditServices1SS5']);
            $p9 = htmlspecialchars($_POST['adminEditServices2Titre']);
            $p10 = htmlspecialchars($_POST['adminEditServices2Description']);
            $p11 = htmlspecialchars($_POST['adminEditServices2SS1']);
            $p12 = htmlspecialchars($_POST['adminEditServices2SS2']);
            $p13 = htmlspecialchars($_POST['adminEditServices2SS3']);
            $p14 = htmlspecialchars($_POST['adminEditServices2SS4']);
            $p15 = htmlspecialchars($_POST['adminEditServices3Titre']);
            $p16 = htmlspecialchars($_POST['adminEditServices3Description']);
            $p17 = htmlspecialchars($_POST['adminEditServices3SS1']);
            $p18 = htmlspecialchars($_POST['adminEditServices3SS2']);
            $p19 = htmlspecialchars($_POST['adminEditServices3SS3']);
            $p20 = htmlspecialchars($_POST['adminEditServices3SS4']);
            $p21 = htmlspecialchars($_POST['adminEditServices3SS5']);
            $IM->updateServices($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21);
            header('Location: ./?page=gk-admin&p1=edit-services');
        }

        // Formulaire d'édition de la section CONTACT
        elseif(isset($_POST['formAdminEditContact'])){
            $p1 = htmlspecialchars($_POST['adminEditContactTitre']);
            $p2 = htmlspecialchars($_POST['adminEditContactCoordonnees']);
            $p3 = htmlspecialchars($_POST['adminEditContactDescBtn1']);
            $p4 = htmlspecialchars($_POST['adminEditContactBtn1']);
            $p5 = htmlspecialchars($_POST['adminEditContactDescBtn2']);
            $p6 = htmlspecialchars($_POST['adminEditContactBtn2']);
            $IM->updateContat($p1,$p2,$p3,$p4,$p5,$p6);
            header('Location: ./?page=gk-admin&p1=edit-contact');
        }

        // Formulaire d'édition de la section NEWSLETTER
        elseif(isset($_POST['formAdminEditNewsletter'])){
            $p1 = htmlspecialchars($_POST['adminEditNewsletterTitre']);
            $p2 = htmlspecialchars($_POST['adminEditNewsletterTxtForm']);
            $p3 = htmlspecialchars($_POST['adminEditNewsletterTxtBtn']);
            $IM->updateNewsletter($p1,$p2,$p3);
            header('Location: ./?page=gk-admin&p1=edit-newsletter');
        }

        // Formulaire d'édition de la section FOOTER
        elseif(isset($_POST['formAdminEditFooter'])){
            $p1 = htmlspecialchars($_POST['adminEditFooterTitreCoordonnees']);
            $p2 = htmlspecialchars($_POST['adminEditFooterLinkedin']);
            $p3 = htmlspecialchars($_POST['adminEditFooterCopyrights']);
            $IM->updateFooter($p1,$p2,$p3);
            header('Location: ./?page=gk-admin&p1=edit-footer');
        }

        // Formulaire de Newsletter
        elseif(isset($_POST['formVisitorNewsletter'])){

            $MM = new MailManager();
            $p1 = htmlspecialchars($_POST['visitorNewsletterMail']);

            if($MM->checkNewsletterExist($p1) == true){
                echo 'Vous êtes déjà abonné à notre Newsletter';
            }
            elseif (!filter_var($p1, FILTER_VALIDATE_EMAIL)) {
                echo 'Veuillez entrer une adresse mail valide';
            }
            else{
                $token = $VM->insertNewsletter($p1);
                $RConfig = $IM->recupConfig();
                
                require './views/mailer/newsletterConfirm.php';

                // Création de l'objet de gestion d'envoi de newsletter
                $mailNewsletter = new PHPMailer\PHPMailer\PHPMailer();

                // Paramètres SMTP
                require './config.php';
                $mailNewsletter->IsSMTP(); // activation des fonctions SMTP
                $mailNewsletter->SMTPAuth = true; // on l’informe que ce SMTP nécessite une autentification
                $mailNewsletter->SMTPSecure = $SMTPsecure; // protocole utilisé pour sécuriser les mails 'ssl' ou 'tls'
                $mailNewsletter->Host = $SMTPhost; // définition de l’adresse du serveur SMTP : 25 en local, 465 pour ssl et 587 pour tls
                $mailNewsletter->Port = $SMTPport; // définition du port du serveur SMTP
                $mailNewsletter->Username = $SMTPuser; // le nom d’utilisateur SMTP
                $mailNewsletter->Password = $SMTPpass; // son mot de passe SMTP
                $mailNewsletter->CharSet = 'UTF-8';
            
                // Paramètres du mail
                $mailNewsletter->AddAddress($p1,$p1); // ajout du destinataire
                $mailNewsletter->From = $SMTPuser; // adresse mail de l’expéditeur
                $mailNewsletter->FromName = $SMTPname; // nom de l’expéditeur
                $mailNewsletter->AddReplyTo($SMTPuser,$SMTPname); // adresse mail et nom du contact de retour
                $mailNewsletter->IsHTML(true);
                $mailNewsletter->Subject = "Veuillez confirmer votre inscription à notre Newsletter";
                $mailNewsletter->Body = $mailContent;
                $mailNewsletter->AltBody = $mailContentText;

                // Envoi du mail
                if(!$mailNewsletter->Send()) { 
                    echo "Mail Error: " . $mailNewsletter->ErrorInfo; // affichage des erreurs, s’il y en a
                } 
                else {
                    echo "Le mail a bien été envoyé !";
                }
            }

        }

        // Formulaire de prise de rendez vous
        elseif(isset($_POST['formVisitorRdv'])){
            $nom = htmlspecialchars($_POST['visitorRdvNom']);
            $prenom = htmlspecialchars($_POST['visitorRdvPrenom']);
            $activite = htmlspecialchars($_POST['visitorRdvActivite']);
            $telephone = htmlspecialchars($_POST['visitorRdvTelephone']);
            $mail = htmlspecialchars($_POST['visitorRdvMail']);
            $message = htmlspecialchars($_POST['visitorRdvMessage']);

            $finalFromName = ucfirst($nom) . " " . ucfirst($prenom);
            $RConfig = $IM->recupConfig();

            require './views/mailer/rdvMailView.php';
        
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                echo 'Veuillez entrer une adresse mail valide';
            }
            else{
                // Création de l'objet de gestion d'envoi de mail Prise de RDV
                $mailRdv = new PHPMailer\PHPMailer\PHPMailer();

                // Paramètres SMTP
                require './config.php';
                $mailRdv->IsSMTP(); // activation des fonctions SMTP
                $mailRdv->SMTPAuth = true; // on l’informe que ce SMTP nécessite une autentification
                $mailRdv->SMTPSecure = $SMTPsecure; // protocole utilisé pour sécuriser les mails 'ssl' ou 'tls'
                $mailRdv->Host = $SMTPhost; // définition de l’adresse du serveur SMTP : 25 en local, 465 pour ssl et 587 pour tls
                $mailRdv->Port = $SMTPport; // définition du port du serveur SMTP
                $mailRdv->Username = $SMTPuser; // le nom d’utilisateur SMTP
                $mailRdv->Password = $SMTPpass; // son mot de passe SMTP
                $mailRdv->CharSet = 'UTF-8';

                // Paramètres du mail
                $mailRdv->AddAddress($SMTPuser,$SMTPuser); // ajout du destinataire
                $mailRdv->From = $SMTPuser; // adresse mail de l’expéditeur
                $mailRdv->FromName = $SMTPname; // nom de l’expéditeur
                $mailRdv->AddReplyTo($mail,$finalFromName); // adresse mail et nom du contact de retour
                $mailRdv->IsHTML(true);
                $mailRdv->Subject = "Demande de rendez-vous via le site G.KAUFMANN - De " . $finalFromName;
                $mailRdv->Body = $mailContent;
                $mailRdv->AltBody = $mailContentText;

                // Envoi du mail
                if(!$mailRdv->Send()) { 
                    echo "Mail Error: " . $mailRdv->ErrorInfo; // affichage des erreurs, s’il y en a
                } 
                else {
                    echo "Le mail a bien été envoyé !";
                }
            }
        }

        // Formulaire de candidature
        elseif(isset($_POST['formVisitorCandidature'])){
            $nom = htmlspecialchars($_POST['visitorCandidatureNom']);
            $prenom = htmlspecialchars($_POST['visitorCandidaturePrenom']);
            $mail  = htmlspecialchars($_POST['visitorCandidatureMail']);
            $telephone = htmlspecialchars($_POST['visitorCandidatureTelephone']);
            $poste = htmlspecialchars($_POST['visitorCandidaturePoste']);
            $message = htmlspecialchars($_POST['visitorCandidatureMessage']);

            $fichierCV = $_FILES['fileOne'];
            $fichierLM = $_FILES['fileTwo'];
            $fichierCVext = pathinfo($fichierCV['name'], PATHINFO_EXTENSION);
            $fichierLMext = pathinfo($fichierLM['name'], PATHINFO_EXTENSION);

            if ($fichierCV['size'] > 5000000 || $fichierLM['size'] > 5000000){
                echo 'Fichier trop volumineux';
            }
            elseif($fichierCVext != "pdf" || $fichierCVext != "PDF" || $fichierLMext != "pdf" || $fichierLMext != "PDF"){
                echo 'Format de fichier incorrect, utilisez le format PDF uniquement';
            }
            else{
                $finalFromName = ucfirst($nom) . " " . ucfirst($prenom);
                $RConfig = $IM->recupConfig();
                
                require './views/mailer/candidMailView.php';
    
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    echo 'Veuillez entrer une adresse mail valide';
                }
                else{
                    $mailCandid = new PHPMailer\PHPMailer\PHPMailer();
    
                    require './config.php';
                    $mailCandid->IsSMTP();
                    $mailCandid->SMTPAuth = true;
                    $mailCandid->SMTPSecure = $SMTPsecure;
                    $mailCandid->Host = $SMTPhost;
                    $mailCandid->Port = $SMTPport;
                    $mailCandid->Username = $SMTPuser;
                    $mailCandid->Password = $SMTPpass;
                    $mailCandid->CharSet = 'UTF-8';
    
                    $mailCandid->AddAddress($SMTPuser,$SMTPuser);
                    $mailCandid->From = $SMTPuser;
                    $mailCandid->FromName = $SMTPname;
                    $mailCandid->AddReplyTo($mail,$finalFromName);
                    $mailCandid->IsHTML(true);
                    $mailCandid->Subject = "Candidature spontannée via le site G.KAUFMANN - De " . $finalFromName;
                    $mailCandid->Body = $mailContent;
                    $mailCandid->AltBody = $mailContentText;
    
                    $mailCandid->AddAttachment($_FILES['fileOne']['tmp_name'], "CV_" . $nom . "_" . $prenom . ".pdf");
                    $mailCandid->AddAttachment($_FILES['fileTwo']['tmp_name'], "LM_" . $nom . "_" . $prenom . ".pdf");
    
                    if(!$mailCandid->Send()) { 
                        echo "Mail Error: " . $mailCandid->ErrorInfo;
                    } 
                    else {
                        echo "Le mail a bien été envoyé !";
                    }
                }
            }
        }

        // AUCUN FORMULAIRE
        else{
            require './views/others/404View.php';
        }
    }

    // FONCTION DE CONFIRMATION DE MAIL
    function mailConfirm(){
        if(!isset($_GET['id']) || !isset($_GET['mail']) || empty($_GET['id']) || empty($_GET['mail'])){
            require './views/others/404View.php';
        }
        else{
            $MM = new MailManager();
            $token = $_GET['id'];
            $mail = $_GET['mail'];
            if($MM->checkNewsletterToken($mail,$token) == true){
                if($MM->checkNewsletterExist($mail) == true){
                    echo 'Vous êtes déjà abonné à notre Newsletter';
                }
                else{
                    $MM->confirmAnEmail($mail,$token);
                    echo 'Vous êtes désormais abonné à notre Newsletter';
                }
            }
            else{
                require './views/others/404View.php';
            }
        }
    }

    function mailDelete(){
        if(!isset($_GET['id']) || !isset($_GET['mail']) || empty($_GET['id']) || empty($_GET['mail'])){
            require './views/others/404View.php';
        }
        else{
            $MM = new MailManager();
            $token = $_GET['id'];
            $mail = $_GET['mail'];
            if($MM->checkNewsletterToken($mail,$token) == true){
                $MM->deleteAnEmail($mail,$token);
                echo 'Vous venez de supprimer votre adresse mail de la liste de notre newsletter.';
            }
            else{
                require './views/others/404View.php';
            }
        }
    }

    // RECUPERATION DE LA SESSION UTILISATEUR
    if(isset($_SESSION['sessionToken'])){
        $_TOKEN = $_SESSION['sessionToken'];
    }
    else{
        $_TOKEN = NULL;
    }
    
?>