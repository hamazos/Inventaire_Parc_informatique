-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 23 oct. 2020 à 15:53
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portable`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

CREATE TABLE `bureau` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `caracteristique` varchar(30) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `utilisteur` varchar(50) NOT NULL,
  `systeme` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `caracteristique`, `etat`, `utilisteur`, `systeme`) VALUES
(1, 'PC0HWMGN', 'PAS', 'LENOVO Desktop', 'LENOVO', '10KW005NFM', 'Intel(R) Core(TM) i3-6100 CPU ', 'BON', 'Léo ', 'Windows'),
(2, 'P900AGZ8', 'PAS', 'LENOVO All in One', 'LENOVO', 'F0B4004NAL', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'Léo ', 'Windows'),
(3, 'P900STYL', 'PAS', 'LENOVO All in One', 'LENOVO', 'ThinkCentre E63z', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'Raphaël ', 'Windows'),
(4, 'P90179YZ', 'PAS', 'LENOVO All in One', 'LENOVO', 'ThinkCentre E63z', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'lenovo-stage', 'Windows'),
(5, 'P901DS2T', 'PAS', 'LENOVO All in One', 'LENOVO', 'ThinkCentre E63z', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'lenovo-stage2', 'Windows'),
(6, 'PC0HWMFD', 'PAS', 'LENOVO Desktop', 'LENOVO', '10KW005NFM', 'Intel(R) Core(TM) i3-6100 CPU ', 'BON', 'Raphaël ', 'Windows'),
(7, '9QPMBB2', 'PAS', 'Dell Inc. Mini Tower', 'Dell Inc.', 'OptiPlex 7020', 'Intel(R) Core(TM) i5-4590 CPU ', 'BON', 'Gabriel -SEBAI', 'Windows'),
(8, 'VS82048921', 'PAS', 'LENOVO All in One', 'LENOVO', '10149', 'Intel(R) Core(TM) i3-4160T CPU', 'BON', 'Gabriel ESSAIED', 'Windows'),
(9, 'PC0HWMGQ', 'PAS', 'LENOVO Desktop', 'LENOVO', '10KW005NFM', 'Intel(R) Core(TM) i3-6100 CPU ', 'BON', 'Gabriel ', 'Windows'),
(10, 'S1H02V11', 'PAS', 'LENOVO Desktop', 'LENOVO', 'ThinkCentre E73z', 'Intel(R) Core(TM) i3-4160 CPU ', 'BON', 'BANI', 'Windows'),
(11, 'CZC744705M', 'PAS', 'HP All in One', 'HP', 'HP ProOne 400 G3 20.0-in Non-T', 'Intel(R) Core(TM) i3-7100T CPU', 'BON', 'BENAHMED', 'Windows'),
(12, 'YJ00GRNV', 'PAS', 'LENOVO All in One', 'LENOVO', '10QW0008FM', 'Intel(R) Core(TM) i5-7400T CPU', 'BON', 'NAIIM', 'Windows'),
(13, 'P900AGYB', 'PAS', 'LENOVO All in One', 'LENOVO', 'F0B4004NAL', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'MAAOUIA', 'Windows'),
(14, 'P900AL9W', 'PAS', 'LENOVO All in One', 'LENOVO', 'F0B4004LAL', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'NEDA', 'Windows'),
(15, 'MP1AUTYY', 'PAS', 'LENOVO All in One', 'LENOVO', '10NQ002JFM', 'Intel(R) Core(TM) i5-7400T CPU', 'BON', 'JLASSI', 'Windows'),
(16, 'P900ALBE', 'PAS', 'LENOVO All in One', 'LENOVO', 'F0B4004LAL', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'ZOUARI', 'Windows'),
(17, 'PC0MNQ92', 'PAS', 'LENOVO Desktop', 'LENOVO', '10NK001AFM', 'Intel(R) Core(TM) i3-7100 CPU ', 'BON', 'BENSALH', 'Windows'),
(18, 'PC0HWMCR', 'PAS', 'LENOVO Desktop', 'LENOVO', '10KW005NFM', 'Intel(R) Core(TM) i3-6100 CPU ', 'BON', 'BOUCHNIBA', 'Windows'),
(19, 'C2VRYN2', 'PAS', 'Dell Inc. Desktop', 'Dell Inc.', 'OptiPlex 3060', 'Intel(R) Core(TM) i3-8100 CPU ', 'BON', 'RADIOBLV', 'Windows'),
(20, 'CZC7498VSY', 'PAS', 'HP All in One', 'HP', 'HP ProOne 400 G3 20.0-in Non-T', 'Intel(R) Core(TM) i3-7100T CPU', 'BON', 'ROUISSI', 'Windows'),
(21, 'CZC9353MSN', 'PAS', 'Hewlett-Packard Desktop', 'Hewlett-Packard', 'HP Compaq dx2420 Microtower', 'Intel(R) Core(TM)2 Duo CPU E75', 'BON', 'RIMA', 'Windows'),
(22, 'CZC7498VTL', 'PAS', 'HP All in One', 'HP', 'HP ProOne 400 G3 20.0-in Non-T', 'Intel(R) Core(TM) i3-7100T CPU', 'BON', 'RIMA', 'Windows'),
(23, 'P901DS2K', 'PAS', 'LENOVO All in One', 'LENOVO', 'ThinkCentre E63z', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'EKAYA', 'Windows'),
(24, 'YJ00GRMY', 'PAS', 'LENOVO All in One', 'LENOVO', '10QW0008FM', 'Intel(R) Core(TM) i5-7400T CPU', 'BON', 'ouerghi', 'Windows'),
(25, '5RB3ZG2', 'PAS', 'Dell Inc. Desktop', 'Dell Inc.', 'Vostro 3650', 'Intel(R) Core(TM) i3-6100 CPU ', 'BON', 'SAID', 'Windows'),
(26, 'CZC73772Y6', 'PAS', 'HP All in One', 'HP', 'HP ProOne 400 G3 20.0-in Non-T', 'Intel(R) Core(TM) i3-7100T CPU', 'BON', 'SLIMI', 'Windows'),
(27, 'YJ00GR6G', 'PAS', 'LENOVO All in One', 'LENOVO', '10QW0008FM', 'Intel(R) Core(TM) i5-7400T CPU', 'BON', 'GUIZENI', 'Windows'),
(28, 'CZC7498VTJ', 'PAS', 'HP All in One', 'HP', 'HP ProOne 400 G3 20.0-in Non-T', 'Intel(R) Core(TM) i3-7100T CPU', 'BON', 'KILANI', 'Windows'),
(29, 'PC0MNQ6V', 'PAS', 'LENOVO Desktop', 'LENOVO', '10NK001AFM', 'Intel(R) Core(TM) i3-7100 CPU ', 'BON', 'SAMIRA', 'Windows'),
(30, '8CC7210YH1', 'PAS', 'HP All in One', 'HP', '22-b001nk', 'Intel(R) Core(TM) i5-6200U CPU', 'BON', 'HICHRI', 'Windows'),
(31, '8CC72113TG', 'PAS', 'HP All in One', 'HP', '20-c002nk', 'Intel(R) Core(TM) i3-6100U CPU', 'BON', 'SEDKI', 'Windows'),
(32, 'MP1AUTZ8', 'PAS', 'LENOVO All in One', 'LENOVO', '10NQ002JFM', 'Intel(R) Core(TM) i5-7400T CPU', 'BON', 'SRRCD-BLV', 'Windows'),
(33, 'BDJY3J2', 'PAS', 'Dell Inc. All in One', 'Dell Inc.', 'OptiPlex 7440 AIO', 'Intel(R) Core(TM) i5-6500 CPU ', 'BON', 'BAKLOUTI', 'Windows'),
(34, 'PC0CSZ47', 'PAS', 'LENOVO Desktop', 'LENOVO', '10L3000BFM', 'Intel(R) Core(TM) i3-6100 CPU ', 'BON', 'DEROUICHE', 'Windows'),
(35, 'Default string', 'PAS', 'MSI Desktop', 'MSI', 'MS-7996', 'Intel(R) Core(TM) i7-6700 CPU ', 'BON', 'BENARBIA', 'Windows'),
(36, 'P900ALBH', 'PAS', 'LENOVO All in One', 'LENOVO', 'F0B4004LAL', 'Intel(R) Core(TM) i3-4005U CPU', 'BON', 'SEGHIR', 'Windows'),
(37, 'CZC7447050', 'PAS', 'HP All in One', 'HP', 'HP ProOne 400 G3 20.0-in Non-T', 'Intel(R) Core(TM) i3-7100T CPU', 'BON', 'ZIED-BELAID', 'Windows');

-- --------------------------------------------------------

--
-- Structure de la table `fax`
--

CREATE TABLE `fax` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `emplacement` varchar(50) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fax`
--

INSERT INTO `fax` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `emplacement`, `etat`) VALUES
(1, '21M0BT1F', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(2, '21M0BT1G', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', '1er etage cloire c', 'BON'),
(3, '21M0BT1H', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', '1er etage cloire c', 'BON'),
(4, '1', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(5, '21M0BT1J', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'EN PANNE'),
(6, '21M0BT1K', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'ABONDONNER'),
(7, '21M0BT1L', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', '1er etage cloire c', 'EN PANNE');

-- --------------------------------------------------------

--
-- Structure de la table `imprimante`
--

CREATE TABLE `imprimante` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `emplacement` varchar(50) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `imprimante`
--

INSERT INTO `imprimante` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `emplacement`, `etat`) VALUES
(1, '1709N0105262', '0000002054', 'PC PORT ASUS STRIX GL703VM', 'ASUS', 'GL703VM', '1er etage cloire c', 'BON'),
(2, '1', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'GL703VM', '1er etage cloire c', 'EN PANNE'),
(3, '21M0BT1', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(4, '21M0BT1P', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(5, '21M0BT1O', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', '1er etage cloire c', 'BON'),
(6, '21M0BT1Y', '0000002001', 'PC PORTABLE DELL 5520', 'ASUS', 'GL703VM', 'EN STOCK', 'ABONDONNER'),
(7, '21M0BT1T', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'EN PANNE');

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
--

CREATE TABLE `inventaire` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `caracteristique` varchar(30) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `utilisteur` varchar(30) NOT NULL,
  `systeme` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inventaire`
--

INSERT INTO `inventaire` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `caracteristique`, `etat`, `utilisteur`, `systeme`) VALUES
(1, '5CD85212LF', '0000005553', 'HP LAPTOP PROBOOK 450 (NCSC) B', 'HP', 'ROBOOK 450', 'i7', 'BON', 'BUREAU BANI', 'Windows'),
(2, '0000005568', '0000005568', 'HP LAPTOP PROBOOK 450 (NCSC) B', 'HP', 'ROBOOK 450', 'i7', 'BON', 'BUREAU BANI', 'Windows'),
(3, '5CD85212LC', '0000005548', 'HP LAPTOP PROBOOK 450 (NCSC) M', 'HP', 'ROBOOK 450', 'i7', 'BON', 'EN STOCK', 'Windows'),
(4, '0000005560', '0000005560', 'HP LAPTOP PROBOOK 450 (NCSC)BG', 'HP', 'ROBOOK 450', 'i7', 'BON', 'BUREAU BANI', 'Windows'),
(5, '0000005573', '0000005573', 'HP LAPTOP PROBOOK 450 NCSC (BM', 'HP', 'ROBOOK 450', 'i7', 'BON', 'BUREAU BANI', 'Windows'),
(6, '0000005563', '0000005563', 'HP LAPTOP PROBOOK 450(NCSC) GA', 'HP', 'ROBOOK 450', 'i7', 'BON', 'BUREAU BANI', 'Windows'),
(7, '0000001062', '0000001062', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', 'GIZBANI', 'Windows'),
(8, '0000001125', '0000001125', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', 'GIZCUN', 'Windows'),
(9, '0000001126', '0000001126', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', 'BUREAU THILO', 'Windows'),
(10, '0000001127', '0000001127', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', ' THILO', 'Windows'),
(11, '0000001128', '0000001128', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', 'Jade ', 'Windows'),
(12, '0000001129', '0000001129', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', 'Nice', 'Windows'),
(13, '0000001130', '0000001130', 'HP PROBOOK 470 (GIZ)', 'HP', 'PROBOOK 470', 'i5', 'BON', 'BECHA', 'Windows'),
(14, '0000004102', '0000004102', 'LENOVO PC PORTABLE IP 300 i5 -', 'LENOVO', 'IP 300', 'i5', 'BON', 'Jade ', 'Windows'),
(15, '0000004103', '0000004103', 'LENOVO PC PORTABLE IP 300 i5 -', 'LENOVO', 'IP 300', 'i5', 'BON', 'WAEL ', 'Windows'),
(16, '0000004104', '0000004104', 'LENOVO PC PORTABLE IP 300 i5 -', 'LENOVO', 'IP 300', 'i5', 'BON', 'Jade ', 'Windows'),
(17, 'PF0FUTD0', '0000004105', 'LENOVO PC PORTABLE IP 300 i5 -', 'LENOVO', 'IP 300', 'i5', 'BON', 'DSI', 'Windows'),
(18, '0000004106', '0000004106', 'LENOVO PC PORTABLE IP 300 i5 -', 'LENOVO', 'IP 300', 'i5', 'BON', 'NON TROUVER', 'Windows'),
(19, 'GLYWZN2', '0000004543', 'ORDINATEUR PORTABLE DELL 3567', 'DELL', 'DELL 3567', 'i7', 'BON', 'Alice  ARFEOUI', 'Windows'),
(20, '0000005215', '0000005215', 'ORDINATEUR PORTABLE DELL 3567', 'DELL', 'DELL 3567', 'i7', 'BON', 'Alice  HAMDI', 'Windows'),
(21, '0000005216', '0000005216', 'ORDINATEUR PORTABLE DELL 3567', 'DELL', 'DELL 3567', 'i7', 'BON', 'SALLE PRESIDENT', 'Windows'),
(22, 'CJYWZNZ', '0000005217', 'ORDINATEUR PORTABLE DELL 3567', 'DELL', 'DELL 3567', 'i7', 'BON', 'JAMILA ', 'Windows'),
(23, '0000005218', '0000005218', 'ORDINATEUR PORTABLE DELL 3567', 'DELL', 'DELL 3567', 'i7', 'BON', 'OMNIA ', 'Windows'),
(24, 'PFP0FUTD0', '0000004892', 'ORDINATEUR PORTABLE LENOVO E51', 'LENOVO', '80Q7', 'i5', 'BON', 'EN STOCK', 'Windows'),
(25, '0000004189', '0000004189', 'PC ASUS XFR 8750', 'ASUS', 'XFR 8750', 'i7', 'BON', 'HSSAN', 'Windows'),
(26, '0000004279', '0000004279', 'PC ASUS XFR 8750', 'ASUS', 'XFR 8750', 'i7', 'BON', 'WASSIM ', 'Windows'),
(27, '0000004280', '0000004280', 'PC ASUS XFR 8750', 'ASUS', 'XFR 8750', 'i7', 'BON', 'MED MINSALI', 'Windows'),
(28, '0000004281', '0000004281', 'PC ASUS XFR 8750', 'ASUS', 'XFR 8750', 'i7', 'BON', 'Alice ARBIA', 'Windows'),
(29, 'K1808N0003700', '0000004282', 'PC ASUS XFR 8750', 'ASUS', 'XFR 8750', 'i7', 'EN PANNE', 'EN STOCK', 'Windows'),
(30, 'JN0CX04M808024', '0000003290', 'PC PORT ASUS STRIX GL703VM i7', 'ASUS', 'STRIX GL703VM', 'i7', 'BON', 'Alice SAID', 'Windows'),
(31, '0000004550', '0000004550', 'PC PORT MSI GS 43 7RE-086FRI7 ', 'MSI', 'GS 43 7RE-086FRI7 7700', 'i7', 'EN PANNE', 'EN STOCK', 'Windows'),
(32, '1709N0105262', '0000005308', 'PC PORT MSI GS 43 7RE-086FRI7 ', 'MSI', 'GS 43 7RE-086FRI7 7700', 'i7', 'BON', 'Alice  WEST', 'Windows'),
(33, 'K1709N0105231', '0000005309', 'PC PORT MSI GS 43 7RE-086FRI7 ', 'MSI', 'GS 43 7RE-086FRI7 7700', 'i7', 'BON', 'ZIED Louise ', 'Windows'),
(34, 'PC PORT MSI GS 43 7RE-086FRI7 ', '0000005310', 'PC PORT MSI GS 43 7RE-086FRI7 ', 'MSI', 'GS 43 7RE-086FRI7 7700', 'i7', 'BON', 'NAIM Alice ', 'Windows'),
(35, 'J1NOCX4M797027', '0000002054', 'PC PORTABLE ASUS GAMER ROG GL7', 'ASUS', 'ROG GL703VM', 'i7', 'BON', 'Alice ', 'Windows'),
(36, 'J1N0CX04M79502A', '0000002287', 'PC PORTABLE ASUS GAMER ROG GL7', 'ASUS', 'ROG GL703VM', 'i7', 'BON', 'Alice ', 'Windows'),
(37, '0000002288', '0000002288', 'PC PORTABLE ASUS GAMER ROG GL7', 'ASUS', 'ROG GL703VM', 'i7', 'BON', 'Jade ', 'Windows'),
(38, '0000003427', '0000003427', 'PC PORTABLE ASUS VIVO BOOK 15 ', 'ASUS', 'VIVO BOOK 15', 'i7', 'BON', 'GIZ', 'Windows'),
(39, 'JHLD8N1', '0000001500', 'PC PORTABLE DELL 5510', 'DELL', 'DELL 5510', 'i5', 'BON', 'EN STOCK', 'Windows'),
(40, '0000001501', '0000001501', 'PC PORTABLE DELL 5510', 'DELL', 'DELL 5510', 'i5', 'BON', 'BUREAU OM', 'Windows'),
(41, 'DHLD8N1', '0000001999', 'PC PORTABLE DELL 5510', 'DELL', 'DELL 5510', 'i5', 'BON', 'EN STOCK', 'Windows'),
(42, '0000002000', '0000002000', 'PC PORTABLE DELL 5520', 'DELL', 'DELL 5520', 'i5', 'BON', 'PERDU BELGHITH', 'Windows'),
(43, '21M0BT1', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'DELL 5520', 'i5', 'BON', 'Jade Louise ', 'Windows'),
(44, '21G2BT1', '0000003279', 'PC PORTABLE DELL 5520', 'DELL', 'DELL 5520', 'i5', 'EN PANNE', 'OMNIA', 'Windows'),
(45, '0000004530', '0000004530', 'PC PORTABLE MAC PRO REF932 E/A', 'MAC', 'PRO REF932 E/A', 'i7', 'BON', 'Jade ', 'Windows'),
(46, '0000001979', '0000001979', 'PORTABLE HP PROBOOK 6550B', 'HP', 'PROBOOK 6550B', 'i5', 'BON', 'Louise LACHTAR', 'Windows'),
(47, '0000001980', '0000001980', 'PORTABLE HP PROBOOK 6550B', 'HP', 'PROBOOK 6550B', 'i5', 'BON', 'EN STOCK', 'Windows'),
(48, '0000001981', '0000001981', 'PORTABLE HP PROBOOK 6550B', 'HP', 'PROBOOK 6550B', 'i5', 'BON', 'OLFA CHAHBI', 'Windows'),
(49, 'CNU0362YB3', '0000001982', 'PORTABLE HP PROBOOK 6550B', 'HP', 'PROBOOK 6550B', 'i5', 'BON', 'NOURDINE ZOUARI-AUDIT', 'Windows'),
(50, 'CNU0362YFD', '0000001983', 'PORTABLE HP PROBOOK 6550B', 'HP', 'PROBOOK 6550B', 'i5', 'BON', 'BUREAU DES MOYENS GENERAUX', 'Windows');

-- --------------------------------------------------------

--
-- Structure de la table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `ref_cat` int(11) NOT NULL,
  `numero_serie` varchar(50) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `panne` varchar(255) NOT NULL,
  `fornisseur` varchar(255) NOT NULL,
  `duree_aproximative` varchar(10) NOT NULL,
  `date_sortie` date NOT NULL,
  `date_retour` date NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `e_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photocopie`
--

CREATE TABLE `photocopie` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `emplacement` varchar(50) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photocopie`
--

INSERT INTO `photocopie` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `emplacement`, `etat`) VALUES
(1, 'a', 'a', 'a', 'a', 'aaa', 'a', 'BON'),
(2, '001', '001', 'epson l565', 'epson', 'l565', 'bure', 'BON'),
(3, '002', '002', 'e', 'zz', 'zz', '1er etage cloire c', 'BON'),
(4, '004', '004', 'rr', 'rr', 'LATITUDE', 'EN STOCK', 'BON'),
(5, '21M0BT1', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'EN PANNE'),
(6, 'a01', '1', '1', 'ASUS', 'GL703VM', '1er etage cloire c', 'BON'),
(7, '21M0BT10P', '1', '1', 'ASUS', 'GL703VM', 'EN STOCK', 'ABONDONNER'),
(8, 'J1NOCX4M797027', '0000003290', 'PC PORT ASUS STRIX GL703VM', '1', 'PROBOOK 6550B', '1er etage cloire c', 'BON'),
(9, '21M0BT1P', '0000003290', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'EN PANNE');

-- --------------------------------------------------------

--
-- Structure de la table `scanner`
--

CREATE TABLE `scanner` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `emplacement` varchar(50) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scanner`
--

INSERT INTO `scanner` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `emplacement`, `etat`) VALUES
(1, '21M0BT1W', '0000002001', '1', 'ASUS', 'LATITUDE', 'EN STOCK', 'BON'),
(2, '21M0BT1X', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(3, '21M0BT1C', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(4, '21M0BT1V', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(5, '21M0BT1B', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'BON'),
(6, '21M0BT1N', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', '1er etage cloire c', 'BON'),
(7, '21M0BT1Q', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'EN PANNE'),
(8, '21M0BT1D', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'EN STOCK', 'ABONDONNER'),
(9, '21M0BT1S', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', '1er etage cloire c', 'EN PANNE');

-- --------------------------------------------------------

--
-- Structure de la table `serveur`
--

CREATE TABLE `serveur` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(30) NOT NULL,
  `code_inventaire` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `caracteristique` varchar(30) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `utilisteur` varchar(50) NOT NULL,
  `systeme` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `serveur`
--

INSERT INTO `serveur` (`id`, `numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `caracteristique`, `etat`, `utilisteur`, `systeme`) VALUES
(1, '21M0BT1H', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'BON', 'Emma Emma ', 'Windows 7 Professionnel'),
(2, '21M0BT1G', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'BON', 'Emma Emma ', 'Windows 7 Professionnel'),
(3, '21M0BT1F', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'BON', 'Emma Louise ', 'Windows 7 Professionnel'),
(4, '21M0BT1M', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'BON', 'Emma Louise ', 'Windows 7 Professionnel'),
(5, '21M0BT1Z', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'BON', 'Emma Louise ', 'Windows 7 Professionnel'),
(6, '21M0BT1E', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'EN PANNE', 'EN STOCK', 'Windows 10 professionel'),
(7, '21M0BT1R', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'ABONDONNER', 'EN STOCK', 'Windows 7 Professionnel'),
(8, '1', '0000002001', 'PC PORTABLE DELL 5520', 'DELL', 'LATITUDE', 'i5', 'EN PANNE', 'Emma Louise ', 'Windows 7 Professionnel');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `prevlege` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `prevlege`) VALUES
(1, 'hamza', 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fax`
--
ALTER TABLE `fax`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imprimante`
--
ALTER TABLE `imprimante`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photocopie`
--
ALTER TABLE `photocopie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scanner`
--
ALTER TABLE `scanner`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `serveur`
--
ALTER TABLE `serveur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bureau`
--
ALTER TABLE `bureau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `fax`
--
ALTER TABLE `fax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `imprimante`
--
ALTER TABLE `imprimante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `inventaire`
--
ALTER TABLE `inventaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photocopie`
--
ALTER TABLE `photocopie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `scanner`
--
ALTER TABLE `scanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `serveur`
--
ALTER TABLE `serveur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
