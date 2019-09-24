-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 sep. 2019 à 09:38
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kaufmann`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidatures`
--

DROP TABLE IF EXISTS `candidatures`;
CREATE TABLE IF NOT EXISTS `candidatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `poste` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `date_envoi` datetime NOT NULL,
  `lien_cv` varchar(104) NOT NULL,
  `lien_lm` varchar(104) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gkcabinet`
--

DROP TABLE IF EXISTS `gkcabinet`;
CREATE TABLE IF NOT EXISTS `gkcabinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabinetTitre` varchar(1000) NOT NULL,
  `cabinetTxt1` varchar(1000) NOT NULL,
  `cabinetTxt2` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkcabinet`
--

INSERT INTO `gkcabinet` (`id`, `cabinetTitre`, `cabinetTxt1`, `cabinetTxt2`) VALUES
(1, '| Le cabinet', 'Indépendant et à taille humaine, notre cabinet, à vocation régionale, est implanté sur la côte d\'opale. Au service d\'une clientèle variée, nous accompagnons depuis longtemps les acteurs économiques majeurs du territoire. Nous vous assistons dans toutes les étapes de la vie de votre entreprise et mettons à votre disposition l\'ensemble de nos compétences en matière de comptabilité, d\'audit, de fiscalité, de droit social.', 'En matière associative, nous sommes en mesure de répondre à vos principaux besoins notamment en expertise comptable ou en commissariat aux comptes. Notre expertise en matière de fiscalité personnelle fait également partie de nos compétences reconnues.');

-- --------------------------------------------------------

--
-- Structure de la table `gkconfig`
--

DROP TABLE IF EXISTS `gkconfig`;
CREATE TABLE IF NOT EXISTS `gkconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `configNomSite` varchar(1000) NOT NULL,
  `configDescription` varchar(1000) NOT NULL,
  `configURL` varchar(1000) NOT NULL,
  `configClient` varchar(1000) NOT NULL,
  `configAdresse` varchar(1000) NOT NULL,
  `configCP` varchar(1000) NOT NULL,
  `configVille` varchar(1000) NOT NULL,
  `configMail` varchar(1000) NOT NULL,
  `configTelephone` varchar(1000) NOT NULL,
  `configFax` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkconfig`
--

INSERT INTO `gkconfig` (`id`, `configNomSite`, `configDescription`, `configURL`, `configClient`, `configAdresse`, `configCP`, `configVille`, `configMail`, `configTelephone`, `configFax`) VALUES
(1, 'Cabinet G.KAUFMANN', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'https://gkaufmann.fr/', 'http://185.23.139.150/iSuiteExpert/?CNX=CNX&CAB=CGK', '5 Place d\'Angleterre', '62200', 'Boulogne-sur-Mer', 'contact@gkaufmann.fr', '03 21 30 19 19', '03 91 18 65 65');

-- --------------------------------------------------------

--
-- Structure de la table `gkcontact`
--

DROP TABLE IF EXISTS `gkcontact`;
CREATE TABLE IF NOT EXISTS `gkcontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contactTitre` varchar(1000) NOT NULL,
  `contactCoordonnees` varchar(1000) NOT NULL,
  `contactDescBtn1` varchar(1000) NOT NULL,
  `contactBtn1` varchar(1000) NOT NULL,
  `contactDescBtn2` varchar(1000) NOT NULL,
  `contactBtn2` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkcontact`
--

INSERT INTO `gkcontact` (`id`, `contactTitre`, `contactCoordonnees`, `contactDescBtn1`, `contactBtn1`, `contactDescBtn2`, `contactBtn2`) VALUES
(1, '| Contact', 'Coordonnées :', 'Obtenir un rendez-vous de comptable et d\'experts-comptables', 'DEMANDER UN RDV', 'Rejoindre notre équipe', 'ENVOYER UN CV');

-- --------------------------------------------------------

--
-- Structure de la table `gkexpertise`
--

DROP TABLE IF EXISTS `gkexpertise`;
CREATE TABLE IF NOT EXISTS `gkexpertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expertiseTitre` varchar(1000) NOT NULL,
  `expertiseTxt1` varchar(1000) NOT NULL,
  `expertiseTxt2` varchar(1000) NOT NULL,
  `expertiseChiffre1` varchar(1000) NOT NULL,
  `expertiseChiffre2` varchar(1000) NOT NULL,
  `expertiseTitre1` varchar(1000) NOT NULL,
  `expertiseTitre2` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkexpertise`
--

INSERT INTO `gkexpertise` (`id`, `expertiseTitre`, `expertiseTxt1`, `expertiseTxt2`, `expertiseChiffre1`, `expertiseChiffre2`, `expertiseTitre1`, `expertiseTitre2`) VALUES
(1, 'Notre expertise en quelques chiffres :', 'Pourquoi faire du cabinet G.KAUFMANN votre partenaire ? Présent à Boulogne/Mer, nos compétences multiples ainsi que notre expertise feront de nous un allié de poids.', 'Confiez-nous vos retards de comptabilité, la gestion de vos projets, ou toute autres besoins.', '350', '40', 'Clients', 'Années d\'expertises');

-- --------------------------------------------------------

--
-- Structure de la table `gkfooter`
--

DROP TABLE IF EXISTS `gkfooter`;
CREATE TABLE IF NOT EXISTS `gkfooter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `footerTitreCoordonnees` varchar(1000) NOT NULL,
  `footerLinkedin` varchar(1000) NOT NULL,
  `footerCopyrights` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkfooter`
--

INSERT INTO `gkfooter` (`id`, `footerTitreCoordonnees`, `footerLinkedin`, `footerCopyrights`) VALUES
(1, 'CONTACT', 'https://www.linkedin.com/in/benjamin-cauchet-642792153/', '© 2019 G.KAUFMANN');

-- --------------------------------------------------------

--
-- Structure de la table `gkheader`
--

DROP TABLE IF EXISTS `gkheader`;
CREATE TABLE IF NOT EXISTS `gkheader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headerType` varchar(1000) NOT NULL,
  `headerTitre` varchar(1000) NOT NULL,
  `headerDesc` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkheader`
--

INSERT INTO `gkheader` (`id`, `headerType`, `headerTitre`, `headerDesc`) VALUES
(1, 'S.A.R.L', 'G.KAUFMANN', 'Expertise comptable, Audit, Conseil & Accompagement');

-- --------------------------------------------------------

--
-- Structure de la table `gknewsletter`
--

DROP TABLE IF EXISTS `gknewsletter`;
CREATE TABLE IF NOT EXISTS `gknewsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsletterTitre` varchar(1000) NOT NULL,
  `newsletterTxtForm` varchar(1000) NOT NULL,
  `newsletterTxtBtn` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gknewsletter`
--

INSERT INTO `gknewsletter` (`id`, `newsletterTitre`, `newsletterTxtForm`, `newsletterTxtBtn`) VALUES
(1, 'Abonnez vous à notre Newsletter', 'ENTREZ VOTRE E-MAIL', 'S\'ABONNER');

-- --------------------------------------------------------

--
-- Structure de la table `gkservices`
--

DROP TABLE IF EXISTS `gkservices`;
CREATE TABLE IF NOT EXISTS `gkservices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicesTitre` varchar(1000) NOT NULL,
  `services1Titre` varchar(1000) NOT NULL,
  `services1Desc` varchar(1000) NOT NULL,
  `services1SS1` varchar(1000) NOT NULL,
  `services1SS2` varchar(1000) NOT NULL,
  `services1SS3` varchar(1000) NOT NULL,
  `services1SS4` varchar(1000) NOT NULL,
  `services1SS5` varchar(1000) NOT NULL,
  `services2Titre` varchar(1000) NOT NULL,
  `services2Desc` varchar(1000) NOT NULL,
  `services2SS1` varchar(1000) NOT NULL,
  `services2SS2` varchar(1000) NOT NULL,
  `services2SS3` varchar(1000) NOT NULL,
  `services2SS4` varchar(1000) NOT NULL,
  `services3Titre` varchar(1000) NOT NULL,
  `services3Desc` varchar(1000) NOT NULL,
  `services3SS1` varchar(1000) NOT NULL,
  `services3SS2` varchar(1000) NOT NULL,
  `services3SS3` varchar(1000) NOT NULL,
  `services3SS4` varchar(1000) NOT NULL,
  `services3SS5` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gkservices`
--

INSERT INTO `gkservices` (`id`, `servicesTitre`, `services1Titre`, `services1Desc`, `services1SS1`, `services1SS2`, `services1SS3`, `services1SS4`, `services1SS5`, `services2Titre`, `services2Desc`, `services2SS1`, `services2SS2`, `services2SS3`, `services2SS4`, `services3Titre`, `services3Desc`, `services3SS1`, `services3SS2`, `services3SS3`, `services3SS4`, `services3SS5`) VALUES
(1, '| Nos services', 'AUDIT', 'Nous intervenons au titre de vos besoins en matière de :', 'Commissariat aux comptes', 'Audit Contractuel', 'Commissariat à la transformation', 'Commissariat à la fusion', 'Audit d\'acquisition', 'EXPERTISE COMPTABLE (comptabilité, fiscalité, social, juridique)', 'Nous vous proposons un accompagnement sur mesure en comptabilité, fiscalité, social et juridique :', 'Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie)', 'Associations (tenue, accompagnement, révision)', 'Particuliers (impôts sur le revenu, IFI, conseil patrimonial)', 'Entreprises (tenue complète, comptabilité partagée, révision, secrétariat juridique, paie, déclarations fiscales, consolidation)', 'CONSEIL/ACCOMPAGNEMENT', 'Partenaire privilégié du dirigeant, nous vous assistons sur de nombreux thèmes :', 'Création/reprise de sociétés', 'Mise en place de tableaux de bords', 'Prévisionnels', 'Évaluation de sociétés', 'Mise à disposition de logiciels spécifiques à nos différents métiers (logiciels de comptabilité, de facturation, de notes de frais, de caisse...)');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `temp_mail` varchar(100) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `mail_token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(60) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `session_token` varchar(100) DEFAULT NULL,
  `time_last_connect` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `session_token` (`session_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`, `session_token`, `time_last_connect`) VALUES
(1, 'test', 'test', 'test@test', 'admin', '2019-09-16 00:00:00', '2a9d0958d67eb94fef3f7625b6b9c87c585e596a6e5ea6a931', '2019-09-24 09:09:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
