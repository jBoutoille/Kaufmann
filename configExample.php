<?php 

    /// FICHIER DE CONFIGURATION GLOBALE DU SITE
    /////////////// INFORMATIONS ///////////////
    //
    // Pour que le site fonctionne, il faut obligatoirement suivre
    // les instructions çi dessous.
    //
    // SETUP :
    //  1) Créer un fichier "config.php" à la racine du site
    //  2) Copier le contenu de ce fichier çi dans "config.php"
    //  3) Remplissez vos informations dans "config.php" selon vos besoins
    //
    ////////////////////////////////////////////

    // Paramètres de connexion à la base de données
    ///////////////////////////////////////////////
    $dbhost = ""; // Hôte de la base
    $dbname = ""; // Nom de la base
    $dbuser = ""; // Identifiant de la base
    $dbpass = ""; // Mot de passe de la base

    // Paramètres d'envoi de mails - Config SMTP
    ///////////////////////////////////////////////
    $SMTPname = ""; // Nom de l'expéditeur
    $SMTPuser = ""; // Adresse mail de l'expéditeur
    $SMTPpass = ""; // Mot de passe de l'expéditeur
    $SMTPsecure = ""; // Protocole SMTP à utiliser (localhost, ssl, tls)
    $SMTPhost = ""; // Hôte SMTP selon l'adresse mail de l'expéditeur
    $SMTPport = ""; // Port SMTP à utiliser (25 = localhost, 465 = ssl, 567 = tls)
    
?>