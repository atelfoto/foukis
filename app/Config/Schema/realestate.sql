-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Décembre 2014 à 15:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `realestate`
--

-- --------------------------------------------------------

--
-- Structure de la table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=142 ;

--
-- Contenu de la table `areas`
--

INSERT INTO `areas` (`id`, `name`, `value`) VALUES
(1, 'ACHARNE', 'ACHARNE'),
(2, 'ACHARNE CHARAFGI', 'ACHARNE CHARAFGI'),
(3, 'AFIDNES', 'AFIDNES'),
(4, 'AGIA PARASKEVI', 'AGIA PARASKEVI'),
(5, 'AGIOS DIMITRIOS', 'AGIOS DIMITRIOS'),
(6, 'AGIOS IOANNIS RENTIS', 'AGIOS IOANNIS RENTIS'),
(7, 'AGIOS STEFANOS', 'AGIOS STEFANOS'),
(8, 'ALIMOS', 'ALIMOS'),
(9, 'ANAVYSSOS', 'ANAVYSSOS'),
(10, 'ANIXI', 'ANIXI'),
(11, 'ANO LIOSIA', 'ANO LIOSIA'),
(12, 'ARGYROUPOLI', 'ARGYROUPOLI'),
(13, 'ARTEMIDA', 'ARTEMIDA'),
(14, 'ASPROPYRGOS', 'ASPROPYRGOS'),
(15, 'ATHENS', 'ATHENS'),
(16, 'AVLONA', 'AVLONA'),
(17, 'CHALANDRI', 'CHALANDRI'),
(18, 'CHALANDRI ANO', 'CHALANDRI ANO'),
(19, 'CHALANDRI KATO', 'CHALANDRI KATO'),
(20, 'CHOLARGOS', 'CHOLARGOS'),
(21, 'CHRYSTOUPOLI', 'CHRYSTOUPOLI'),
(22, 'DAFNI', 'DAFNI'),
(23, 'DILESI', 'DILESI'),
(24, 'DIONYSOS', 'DIONYSOS'),
(25, 'EGALEO', 'EGALEO'),
(26, 'EGINA', 'EGINA'),
(27, 'EKALI', 'EKALI'),
(28, 'EKALI NEA', 'EKALI NEA'),
(29, 'ELLINIKO', 'ELLINIKO'),
(30, 'FILOTHEI', 'FILOTHEI'),
(31, 'FILOTHEI NEA', 'FILOTHEI NEA'),
(32, 'FREATTYDA', 'FREATTYDA'),
(33, 'FYLI', 'FYLI'),
(34, 'GALATSI', 'GALATSI'),
(35, 'GALATSI KRITIKA', 'GALATSI KRITIKA'),
(36, 'GALATSI KYPRIADOU', 'GALATSI KYPRIADOU'),
(37, 'GALATSI LAMPRINI', 'GALATSI LAMPRINI'),
(38, 'GERAKAS', 'GERAKAS'),
(39, 'GLYFADA', 'GLYFADA'),
(40, 'GLYFADA DIKIGORIKA', 'GLYFADA DIKIGORIKA'),
(41, 'GLYFADA GOLF', 'GLYFADA GOLF'),
(42, 'GLYFADA TERPSITHEA', 'GLYFADA TERPSITHEA'),
(43, 'IDRA', 'IDRA'),
(44, 'ILION', 'ILION'),
(45, 'ILIOUPOLI ANO', 'ILIOUPOLI ANO'),
(46, 'IMITTOS', 'IMITTOS'),
(47, 'IRAKLIO', 'IRAKLIO'),
(48, 'KALAMOS', 'KALAMOS'),
(49, 'KALLITHEA', 'KALLITHEA'),
(50, 'KALOGREZA', 'KALOGREZA'),
(51, 'KALYVIA THORIKOU', 'KALYVIA THORIKOU'),
(52, 'KAMATERO', 'KAMATERO'),
(53, 'KAMINIA', 'KAMINIA'),
(54, 'KAPANDRITI', 'KAPANDRITI'),
(55, 'KEFALARI', 'KEFALARI'),
(56, 'KERATEA', 'KERATEA'),
(57, 'KESARIANI', 'KESARIANI'),
(58, 'KIFISIA', 'KIFISIA'),
(59, 'KIFISIA ADAMES', 'KIFISIA ADAMES'),
(60, 'KIFISIA KATO', 'KIFISIA KATO'),
(61, 'KIFISIA NEA', 'KIFISIA NEA'),
(62, 'KINETA', 'KINETA'),
(63, 'KOROPI', 'KOROPI'),
(64, 'KORYDALLOS', 'KORYDALLOS'),
(65, 'KOUVARAS', 'KOUVARAS'),
(66, 'KYTHIRA', 'KYTHIRA'),
(67, 'LAGONISI', 'LAGONISI'),
(68, 'LAVRIO', 'LAVRIO'),
(69, 'LOUTSA', 'LOUTSA'),
(70, 'LYKOVRUSI', 'LYKOVRUSI'),
(71, 'MAGOULA', 'MAGOULA'),
(72, 'MANDRA', 'MANDRA'),
(73, 'MARATHONAS', 'MARATHONAS'),
(74, 'MARKOPOULO MESOGION', 'MARKOPOULO MESOGION'),
(75, 'MAROUSI', 'MAROUSI'),
(76, 'MAROUSI AGIOS THOMAS', 'MAROUSI AGIOS THOMAS'),
(77, 'MAROUSI PARADISOS', 'MAROUSI PARADISOS'),
(78, 'MAROUSI PSALIDI', 'MAROUSI PSALIDI'),
(79, 'MEGARA', 'MEGARA'),
(80, 'MELISSIA', 'MELISSIA'),
(81, 'METAMORFOSI', 'METAMORFOSI'),
(82, 'MOSCHATO', 'MOSCHATO'),
(83, 'NEA ERYTHREA', 'NEA ERYTHREA'),
(84, 'NEA ERYTHREA MORTERO', 'NEA ERYTHREA MORTERO'),
(85, 'NEA FILADELFIA', 'NEA FILADELFIA'),
(86, 'NEA IONIA', 'NEA IONIA'),
(87, 'NEA IONIA ALSOUPOLI', 'NEA IONIA ALSOUPOLI'),
(88, 'NEA IONIA KALOGREZA', 'NEA IONIA KALOGREZA'),
(89, 'NEA IONIA PEFKAKIA', 'NEA IONIA PEFKAKIA'),
(90, 'NEA MAKRI', 'NEA MAKRI'),
(91, 'NEA SMYRNI', 'NEA SMYRNI'),
(92, 'NEO FALIRO', 'NEO FALIRO'),
(93, 'NEOS VOUTZAS ', 'NEOS VOUTZAS '),
(94, 'NIKEA', 'NIKEA'),
(95, 'NTRAFI', 'NTRAFI'),
(96, 'PALEA FOKEA', 'PALEA FOKEA'),
(97, 'PALEO FALIRO', 'PALEO FALIRO'),
(98, 'PALLINI', 'PALLINI'),
(99, 'PALLINI PANORAMA', 'PALLINI PANORAMA'),
(100, 'PARNITHA', 'PARNITHA'),
(101, 'PATISIA ANO', 'PATISIA ANO'),
(102, 'PEANIA', 'PEANIA'),
(103, 'PEFKI', 'PEFKI'),
(104, 'PENTELI', 'PENTELI'),
(105, 'PENTELI NEA', 'PENTELI NEA'),
(106, 'PENTELI PALEA', 'PENTELI PALEA'),
(107, 'PERAMA', 'PERAMA'),
(108, 'PERISSOS', 'PERISSOS'),
(109, 'PERISTERI', 'PERISTERI'),
(110, 'PETROUPOLI', 'PETROUPOLI'),
(111, 'PIKERMI', 'PIKERMI'),
(112, 'PIKERMI DIONI', 'PIKERMI DIONI'),
(113, 'PIREAS', 'PIREAS'),
(114, 'PIREAS EVANGELISTRIAS', 'PIREAS EVANGELISTRIAS'),
(115, 'POLITIA', 'POLITIA'),
(116, 'PORTO GERMENO', 'PORTO GERMENO'),
(117, 'PORTO RAFTI', 'PORTO RAFTI'),
(118, 'PSYCHIKO', 'PSYCHIKO'),
(119, 'RHAFINA', 'RHAFINA'),
(120, 'RHAFINA MATI', 'RHAFINA MATI'),
(121, 'RHODOPOLI', 'RHODOPOLI'),
(122, 'SALAMINA', 'SALAMINA'),
(123, 'SARONIDA', 'SARONIDA'),
(124, 'SEPOLIA ', 'SEPOLIA '),
(125, 'SPATA', 'SPATA'),
(126, 'TAVROS', 'TAVROS'),
(127, 'THRAKOMAKEDONES', 'THRAKOMAKEDONES'),
(128, 'TRIZINA', 'TRIZINA'),
(129, 'VARI', 'VARI'),
(130, 'VARKIZA', 'VARKIZA'),
(131, 'VARYMPOMPI', 'VARYMPOMPI'),
(132, 'VOULA', 'VOULA'),
(133, 'VOULA DIKIGORIKA', 'VOULA DIKIGORIKA'),
(134, 'VOULA PANORAMA', 'VOULA PANORAMA'),
(135, 'VOULA PIGADAKIA', 'VOULA PIGADAKIA'),
(136, 'VOULIAGMENI', 'VOULIAGMENI'),
(137, 'VRAVRONA', 'VRAVRONA'),
(138, 'VRILISSIA', 'VRILISSIA'),
(139, 'VYRONAS', 'VYRONAS'),
(140, 'XAIDARI', 'XAIDARI'),
(141, 'ZOGRAFOU', 'ZOGRAFOU');

-- --------------------------------------------------------

--
-- Structure de la table `carrousels`
--

CREATE TABLE IF NOT EXISTS `carrousels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `button` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `carrousels`
--

INSERT INTO `carrousels` (`id`, `name`, `slug`, `created`, `image`, `content`, `button`, `title`, `online`) VALUES
(1, 'Real Estate in Greece', 'big', '2014-12-21 22:01:05', 'slider-1', 'Your realty professionals', 'Sign up today', 'Firstslide', 1),
(2, 'Offer your property', 'big', '2014-12-21 22:01:05', 'slider-2', '', 'Sign up today', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `characteristics`
--

CREATE TABLE IF NOT EXISTS `characteristics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `characteristics`
--

INSERT INTO `characteristics` (`id`, `name`, `value`) VALUES
(1, 'Furnished', 'Furnished'),
(2, 'Near_Metro', 'Near Metro'),
(3, 'Parking', 'Parking'),
(4, 'Commercial_use', 'also for Commercial Use'),
(5, 'View', 'View'),
(6, 'Leased_out', 'Leased Out'),
(7, 'Central_spot', 'In a very central spot');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `url` varchar(100) NOT NULL,
  `created` timestamp NOT NULL,
  `online` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `created`, `online`) VALUES
(1, 'Registre national cadastral', 'http://www.ktimatologio.gr', '2014-12-21 09:45:05', 1),
(2, 'MinistÃ¨re de lâ€™ environnement et de lâ€™ amÃ©nagement du territoire.', 'http://www.minenv.gr', '2014-12-21 09:45:05', 1),
(3, 'Organisation du logement ouvrier', 'http://www.oek.g', '2014-12-21 10:15:16', 1),
(4, 'Caisse des dÃ©pÃ´ts et consignations', 'http://www.tpd.org.gr', '2014-12-21 10:15:16', 1),
(5, 'Association des agents immobiliers dâ€™ AthÃ¨nes', 'http://www.e-akinita.gr', '2014-12-21 13:03:24', 1),
(6, 'FÃ©dÃ©ration des agents immobilier grec', 'http://www.sek.gr', '2014-12-21 13:14:41', 1),
(7, 'SecrÃ©tariat gÃ©nÃ©rale de lâ€™immigration hellÃ©nique ', 'http://www.ggae.gr', '2014-12-21 13:16:27', 1),
(8, 'Carte dÃ©taillÃ©e de GrÃ¨ce', 'http://world.maporama.com/idl/maporama', '2014-12-21 13:22:08', 1),
(9, 'philippe wagner', 'http://www.philippewagner.com', '2014-12-21 14:40:25', 1);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ref` varchar(60) DEFAULT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ref` (`ref`),
  KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `offerings`
--

CREATE TABLE IF NOT EXISTS `offerings` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `proporty_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `size` int(11) NOT NULL,
  `year` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `details` varchar(250) NOT NULL,
  `created` timestamp NOT NULL,
  `rent` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text,
  `type` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `online` int(1) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(1) DEFAULT '0',
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1` (`user_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  `modified` datetime NOT NULL,
  `dateYear` year(4) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `states_id` (`state_id`),
  KEY `areas_id` (`area_id`),
  KEY `status_id` (`status_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `properties`
--

INSERT INTO `properties` (`id`, `name`, `content`, `state_id`, `area_id`, `status_id`, `type_id`, `size`, `price`, `created`, `online`, `modified`, `dateYear`, `bedrooms`, `level`) VALUES
(1, 'ATTICA, NEA SMYRNI, IN A VERY CENTRAL SPOT', 'An detached store that consists of ground floor of 380 sq.m. and loft of 250 sq.m. which has wooden floor. In a very luxuriously condition. In a very central spot. Ideal for any kind of commercial spot.', 5, 91, 2, 1, 630, '5000000.00', '2014-12-22 19:56:36', 1, '2014-12-24 11:24:13', 1966, 2, 3),
(2, 'IN A GOOD SPOT', 'The apartment has 2 bedrooms with wooden floor and built-in wardrobes and balconies, 1 bedroom with wooden floor and built-in wardrobes, a hall with wooden floor, 1 w.c. with false roofs, an office with wooden floor, a dressing room, 2 bathrooms, a kitchen with newly kitchen''s furniture and false roofs, living/ dinning room with wooden floor, security door, balcony with awnings. It is fully renovated. Near metro station. In a nice area.', 5, 15, 2, 2, 175, '1500000.00', '2014-12-22 21:12:18', 1, '2014-12-22 00:00:00', 2000, 4, 4),
(3, 'IN A GOOD SPOT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, 2, 1, 400, '2000000.00', '2014-12-24 01:24:16', 1, '2014-12-24 02:24:16', 1966, 1, 2),
(4, 'sans nom', '', 5, 2, 2, 2, 394, '1850000.00', '2014-12-24 10:14:32', 1, '2014-12-24 12:00:36', 1970, 4, 1),
(5, 'sans nom', '', 1, 1, 1, 1, 100, '1000000.00', '2014-12-24 10:48:55', 1, '2014-12-24 12:00:58', 1989, 3, 1),
(6, 'sans nom', '', 1, 1, 1, 1, 100, '1000000.00', '2014-12-24 10:50:47', 1, '2014-12-24 11:50:47', 2014, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `states`
--

INSERT INTO `states` (`id`, `name`, `value`) VALUES
(1, 'ACHAIA', 'ACHAIA'),
(2, 'ALVANIA', 'ALVANIA'),
(3, 'ARGOLIDA', 'ARGOLIDA'),
(4, 'ARKADIA', 'ARKADIA'),
(5, 'ATTICA', 'ATTICA'),
(6, 'CHALKIDIKI', 'CHALKIDIKI'),
(7, 'CHANIA', 'CHANIA'),
(8, 'CHIOS', 'CHIOS'),
(9, 'DODEKANISA', 'DODEKANISA'),
(10, 'EFRYTANIA', 'EFRYTANIA'),
(11, 'ETOLOAKARNANIA', 'ETOLOAKARNANIA'),
(12, 'EVOIA', 'EVOIA'),
(13, 'FOKIDA', 'FOKIDA'),
(14, 'FTHIOTIDA', 'FTHIOTIDA'),
(15, 'GREVENA', 'GREVENA'),
(16, 'ILIA', 'ILIA'),
(17, 'IOANNINA', 'IOANNINA'),
(18, 'IRAKLIO', 'IRAKLIO'),
(19, 'KARDITSA', 'KARDITSA'),
(20, 'KAVALA', 'KAVALA'),
(21, 'KEFALLINIA', 'KEFALLINIA'),
(22, 'KERKYRA', 'KERKYRA'),
(23, 'KORINTHOS', 'KORINTHOS'),
(24, 'KYKLADES', 'KYKLADES'),
(25, 'LAKONIA', 'LAKONIA'),
(26, 'LARISA', 'LARISA'),
(27, 'LASITHI', 'LASITHI'),
(28, 'LEFKADA', 'LEFKADA'),
(29, 'LESVOS', 'LESVOS'),
(30, 'LETONIA', 'LETONIA'),
(31, 'MAGNISIA', 'MAGNISIA'),
(32, 'MESSINIA', 'MESSINIA'),
(33, 'PREVEZA', 'PREVEZA'),
(34, 'RHETHYMNO', 'RHETHYMNO'),
(35, 'RHODOPI', 'RHODOPI'),
(36, 'SAMOS', 'SAMOS'),
(37, 'THESPROTIA', 'THESPROTIA'),
(38, 'TRIKALA', 'TRIKALA'),
(39, 'VIOTIA', 'VIOTIA'),
(40, 'VOULGARIA', 'VOULGARIA'),
(41, 'ZAKYNTHOS', 'ZAKYNTHOS');

-- --------------------------------------------------------

--
-- Structure de la table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `value`) VALUES
(1, 'choisir', ''),
(2, 'For Sale', 'For Sale'),
(6, 'Giving in exchange for', 'Giving in exchange for'),
(7, 'To Let', 'To Let');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `name`, `value`) VALUES
(1, 'House', 'House'),
(2, 'Apartment', 'Apartment'),
(3, 'Land', 'Land'),
(4, 'Duplex / Triplex Apartment', 'Duplex / Triplex Apartment'),
(5, 'Single Floor Apartment', 'Single Floor Apartment'),
(6, 'Agricultural Land Plot', 'Agricultural Land Plot'),
(7, 'Studio', 'Studio'),
(8, 'Studio Apartment', 'Studio Apartment'),
(9, 'Villa', 'Villa'),
(10, 'Penthouse', 'Penthouse'),
(11, 'Store Room', 'Store Room'),
(12, 'Shop', 'Shop'),
(13, 'Building', 'Building'),
(14, 'Office ', 'Office '),
(15, ' Hotel', ' Hotel'),
(17, 'Bungalow', 'Bungalow'),
(19, 'Business', 'Business'),
(26, 'Craft-based space', 'Craft-based space'),
(27, 'Apartment block', 'Apartment block'),
(28, 'Industrial space', 'Industrial space');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `avatar` int(1) DEFAULT '1',
  `active` int(1) DEFAULT '0',
  `token` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`, `firstname`, `lastname`, `avatar`, `active`, `token`, `created`, `modified`, `role`) VALUES
(4, 'philippe', 'atelfoto@msn.com', 'c213b1286de7a88b4892b626d676e56fb68773ed', NULL, NULL, 1, 1, '', '2014-12-20 01:38:46', '2014-12-20 01:39:35', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
