<?php 
/*

    IDEE DE NOM DE SITE / MAILS

        Nom du site : www.gkaufmann.fr
        Mail: contact@gkaufmann.fr
             no-reply@gkaufmann.fr
    
    LISTE DES URLS

        https://gkaufmann.fr/
        https://gkaufmann.fr/mentions-legales/
        https://gkaufmann.fr/rendez-vous/
        https://gkaufmann.fr/nous-rejoindre/
        https://gkaufmann.fr/actualite/
        https://gkaufmann.fr/gk-admin/
        https://gkaufmann.fr/gk-admin/config/
        https://gkaufmann.fr/gk-admin/edit-header/
        https://gkaufmann.fr/gk-admin/edit-lecabinet/
        https://gkaufmann.fr/gk-admin/edit-expertise/
        https://gkaufmann.fr/gk-admin/edit-services/
        https://gkaufmann.fr/gk-admin/edit-contact/
        https://gkaufmann.fr/gk-admin/edit-newsletter/
        https://gkaufmann.fr/gk-admin/edit-footer/
        https://gkaufmann.fr/gk-admin/newsletter/
        https://gkaufmann.fr/gk-admin/actualite/
        https://gkaufmann.fr/gk-admin/candidatures/

    CODE COULEUR

        bleu :                      background-color: rgba(11,36,91,0.8);
        titres et icones :          background-color: rgba(11,36,91,1);
        filtre :                    background-color: rgba(5,18,87,0.35);
        blanc :                     background-color: rgba(255,255,255,1);
        gris :                      background-color: rgba(64,64,64,1);

    FONTS 
    
        ROBOTO - texte
        THRYOMANES - titres

    UTILISATION DES VARIABLES CSS

        Déclaration tout en haut du premier CSS du head : 
        * {
            --mavariable : #123321 ;
            --ma-variable-2 : #321123 ;
        }

        Utilisation des variables :
        #maclass {
            background-color : var(--mavariable) ;
            color : var(--ma-variable-2) ;
        }

    LISTE DES FORMULAIRES

        ADMIN FORMS

            formAdminLogin
                inputs: 
                    Nom d'utilisateur : adminLoginUser
                    Mot de passe : adminLoginPw
            formAdminConfig1
                inputs:
                    Nom du site : adminConfig1NomSite
                    Description du site : adminConfig1Description
                    URL du site : adminConfig1URL
                    Lien espace client : adminConfig1Client
            formAdminConfig2
                inputs:
                    Adresse : adminConfig2Adresse
                    Code postal : adminConfig2CP
                    Ville : adminConfig2Ville
                    E-mail : adminConfig2Mail
                    Téléphone : adminConfig2Telephone
                    FAX : adminConfig2Fax
            formAdminEditHeader
                inputs:
                    Type de société : adminEditHeaderType
                    Titre du site : adminEditHeaderTitre
                    Sous titres : adminEditHeaderDescription
            formAdminEditLecabinet
                inputs:
                    Titre de la section : adminEditLecabinetTitre
                    1er paragraphe : adminEditLecabinet1er
                    2eme paragraphe : adminEditLecabinet2eme
            formAdminEditExpertise
                inputs:
                    Titre de la section : adminEditExpertiseTitre
                    Texte 1 : adminEditExpertiseTxt1
                    Texte 2 : adminEditExpertiseTxt2
                    Chiffre 1 : adminEditExpertiseChiffre1
                    Chiffre 2 : adminEditExpertiseChiffre2
                    Titre Chiffre 1 : adminEditExpertiseTitreChiffre1
                    Titre Chiffre 2 : adminEditExpertiseTitreChiffre2
            formAdminEditServices
                inputs:
                    Titre de la section : adminEditServicesTitre
                    Titre du service 1 : adminEditServices1Titre
                    Description service 1 : adminEditServices1Description
                    Service 1 - Sous Service 1 : adminEditServices1SS1
                    Service 1 - Sous Service 2 : adminEditServices1SS2
                    Service 1 - Sous Service 3 : adminEditServices1SS3
                    Service 1 - Sous Service 4 : adminEditServices1SS4
                    Service 1 - Sous Service 5 : adminEditServices1SS5
                    Titre du service 2 : adminEditServices2Titre
                    Description service 2 : adminEditServices2Description
                    Service 2 - Sous Service 1 : adminEditServices2SS1
                    Service 2 - Sous Service 2 : adminEditServices2SS2
                    Service 2 - Sous Service 3 : adminEditServices2SS3
                    Service 2 - Sous Service 4 : adminEditServices2SS4
                    Titre du service 3 : adminEditServices3Titre
                    Description service 3 : adminEditServices3Description
                    Service 3 - Sous Service 1 : adminEditServices3SS1
                    Service 3 - Sous Service 2 : adminEditServices3SS2
                    Service 3 - Sous Service 3 : adminEditServices3SS3
                    Service 3 - Sous Service 4 : adminEditServices3SS4
                    Service 3 - Sous Service 5 : adminEditServices3SS5
            formAdminEditContact
                inputs: 
                    Titre de la section : adminEditContactTitre
                    Titre bloc coordonnées : adminEditContactCoordonnees
                    Description Bouton 1 : adminEditContactDescBtn1
                    Texte dans le bouton 1 : adminEditContactBtn1
                    Description Bouton 2 : adminEditContactDescBtn2
                    Texte dans le bouton 2 : adminEditContactBtn2
            formAdminEditNewsletter
                inputs:
                    Titre de la section : adminEditNewsletterTitre
                    Texte dans l'input : adminEditNewsletterTxtForm
                    Texte dans le bouton : adminEditNewsletterTxtBtn
            formAdminEditFooter
                inputs:
                    Titre du bloc Coordonnées : adminEditFooterTitreCoordonnees
                    Lien Linkedin : adminEditFooterLinkedin
                    Copyrights du site : adminEditFooterCopyrights
                
        VISITOR FORMS

            formVisitorRdv
                inputs:
                    Nom : visitorRdvNom
                    Prénom : visitorRdvPrenom
                    Activité : visitorRdvActivite
                    Téléphone : visitorRdvTelephone
                    E-Mail : visitorRdvMail
                    Message : visitorRdvMessage
            formVisitorCandidature
                inputs:
                    Nom : visitorCandidatureNom
                    Prénom : visitorCandidaturePrenom
                    E-mail : visitorCandidatureMail
                    Téléphone : visitorCandidatureTelephone
                    Poste recherché : visitorCandidaturePoste
                    Message : visitorCandidatureMessage
                    Fichier CV : fileOne
                    Fichier Lettre de motivation : fileTwo
            formVisitorNewsletter
                inputs:
                    Mail : visitorNewsletterMail
*/
?>

