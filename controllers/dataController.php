<?php 

    // traitement des données formulaires
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
            $p4 = htmlspecialchars($_POST['adminConfig1Client']);
            $IM->updateConfig1($p1,$p2,$p3,$p4);
            header('Location: ./?page=gk-admin&p1=config');
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
            header('Location: ./?page=gk-admin&p1=config');
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

        // Formulaire de prise de rendez-vous
        elseif(isset($_POST['formVisitorRdv'])){
            $p1 = htmlspecialchars($_POST['visitorRdvNom']);
            $p2 = htmlspecialchars($_POST['visitorRdvPrenom']);
            $p3 = htmlspecialchars($_POST['visitorRdvActivite']);
            $p4 = htmlspecialchars($_POST['visitorRdvTelephone']);
            $p5 = htmlspecialchars($_POST['visitorRdvMail']);
            $p6 = htmlspecialchars($_POST['visitorRdvMessge']);
        }

        // Formulaire d'envois de candidatures spontannées
        elseif(isset($_POST['formVisitorCandidature'])){
            $p1 = htmlspecialchars($_POST['visitorCandidatureNom']);
            $p2 = htmlspecialchars($_POST['visitorCandidaturePrenom']);
            $p3 = htmlspecialchars($_POST['visitorCandidaturePoste']);
            $p4 = htmlspecialchars($_POST['visitorCandidatureMessage']);
            $p5 = htmlspecialchars($_POST['visitorCandidatureFile1']);
            $p6 = htmlspecialchars($_POST['visitorCandidatureFile2']);

        }

        // Formulaire de Newsletter
        elseif(isset($_POST['formVisitorNewsletter'])){
            $p1 = htmlspecialchars($_POST['visitorNewsletterMail']);
            $VM->insertNewsletter($p1);
            header('Location: ./');
        }

        // AUCUN FORMULAIRE
        else{
            require './views/others/404View.php';
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