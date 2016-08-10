-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Janvier 2015 à 17:13
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=143 ;

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
(141, 'ZOGRAFOU', 'ZOGRAFOU'),
(142, 'SERIFOS', 'SERIFOS');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=268 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `ref`, `ref_id`, `file`, `position`) VALUES
(1, 'Property', 5, '/img/uploads/2014/12/7515_1s.jpg', 0),
(2, 'Property', 5, '/img/uploads/2014/12/12783_1l.jpg', 0),
(3, 'Property', 5, '/img/uploads/2014/12/12783_1s.jpg', 0),
(4, 'Property', 5, '/img/uploads/2014/12/12783_2l.jpg', 0),
(5, 'Property', 5, '/img/uploads/2014/12/12783_2s.jpg', 0),
(6, 'Property', 5, '/img/uploads/2014/12/house.jpg', 0),
(7, 'Property', 3, '/img/uploads/2014/12/7515_1s-1.jpg', 0),
(22, 'Property', 6, '/img/uploads/6/2014/12/12783-1s.jpg', 0),
(146, 'Property', 13, '/img/property/13/00000-9l .jpg', 0),
(147, 'Property', 13, '/img/property/13/00000 9s.jpg', 0),
(148, 'Property', 13, '/img/property/13/00000 1l.jpg', 0),
(149, 'Property', 13, '/img/property/13/00000 1s.jpg', 0),
(151, 'Property', 7, '/img/property/7/10393-1l.jpg', 0),
(153, 'Property', 8, '/img/property/8/10681-1l.jpg', 0),
(155, 'Property', 12, '/img/property/12/2053-1l.jpg', 0),
(156, 'Property', 17, '/img/property/17/17794-1l.jpg', 0),
(157, 'Property', 17, '/img/property/17/17794-1s.jpg', 0),
(158, 'Property', 17, '/img/property/17/17794-2l.jpg', 0),
(159, 'Property', 17, '/img/property/17/17794-2s.jpg', 0),
(160, 'Property', 17, '/img/property/17/17794-3l.jpg', 0),
(161, 'Property', 17, '/img/property/17/17794-3s.jpg', 0),
(162, 'Property', 17, '/img/property/17/17794-4l.jpg', 0),
(163, 'Property', 17, '/img/property/17/17794-4s.jpg', 0),
(164, 'Property', 17, '/img/property/17/17794-5l.jpg', 0),
(165, 'Property', 17, '/img/property/17/17794-5s.jpg', 0),
(166, 'Property', 17, '/img/property/17/17794-6l.jpg', 0),
(167, 'Property', 17, '/img/property/17/17794-6s.jpg', 0),
(168, 'Property', 17, '/img/property/17/17794-7l.jpg', 0),
(169, 'Property', 17, '/img/property/17/17794-7s.jpg', 0),
(170, 'Property', 17, '/img/property/17/17794-8l.jpg', 0),
(171, 'Property', 17, '/img/property/17/17794-8s.jpg', 0),
(172, 'Property', 18, '/img/property/18/11829-1l.jpg', 0),
(173, 'Property', 18, '/img/property/18/11829-1s.jpg', 0),
(174, 'Property', 18, '/img/property/18/11829-2l.jpg', 0),
(175, 'Property', 18, '/img/property/18/11829-2s.jpg', 0),
(176, 'Property', 18, '/img/property/18/11829-3l.jpg', 0),
(177, 'Property', 18, '/img/property/18/11829-3s.jpg', 0),
(178, 'Property', 18, '/img/property/18/11829-4l.jpg', 0),
(179, 'Property', 18, '/img/property/18/11829-4s.jpg', 0),
(180, 'Property', 18, '/img/property/18/11829-5l.jpg', 0),
(181, 'Property', 18, '/img/property/18/11829-5s.jpg', 0),
(182, 'Property', 18, '/img/property/18/11829-6l.jpg', 0),
(183, 'Property', 18, '/img/property/18/11829-6s.jpg', 0),
(184, 'Property', 18, '/img/property/18/11829-7l.jpg', 0),
(185, 'Property', 18, '/img/property/18/11829-7s.jpg', 0),
(186, 'Property', 19, '/img/property/19/14045-1l.jpg', 0),
(187, 'Property', 19, '/img/property/19/14045-1s.jpg', 0),
(188, 'Property', 19, '/img/property/19/14045-4l.jpg', 0),
(189, 'Property', 19, '/img/property/19/14045-4s.jpg', 0),
(190, 'Property', 20, '/img/property/20/17239-1l.jpg', 0),
(191, 'Property', 20, '/img/property/20/17239-1s.jpg', 0),
(192, 'Property', 20, '/img/property/20/17239-2l.jpg', 0),
(193, 'Property', 20, '/img/property/20/17239-2s.jpg', 0),
(194, 'Property', 20, '/img/property/20/17239-3l.jpg', 0),
(195, 'Property', 20, '/img/property/20/17239-4l.jpg', 0),
(196, 'Property', 20, '/img/property/20/17239-4s.jpg', 0),
(197, 'Property', 20, '/img/property/20/17239-5l.jpg', 0),
(198, 'Property', 20, '/img/property/20/17239-5s.jpg', 0),
(199, 'Property', 20, '/img/property/20/17239-6l.jpg', 0),
(200, 'Property', 20, '/img/property/20/17239-6s.jpg', 0),
(201, 'Property', 20, '/img/property/20/17239-7l.jpg', 0),
(202, 'Property', 20, '/img/property/20/17239-8l.jpg', 0),
(203, 'Property', 20, '/img/property/20/17239-8s.jpg', 0),
(204, 'Property', 20, '/img/property/20/17239-9l.jpg', 0),
(205, 'Property', 20, '/img/property/20/17239-9s.jpg', 0),
(206, 'Property', 20, '/img/property/20/17239-10l.jpg', 0),
(207, 'Property', 20, '/img/property/20/17239-10s.jpg', 0),
(208, 'Property', 20, '/img/property/20/17239-11l.jpg', 0),
(209, 'Property', 20, '/img/property/20/17239-11s.jpg', 0),
(210, 'Property', 20, '/img/property/20/17239-12l.jpg', 0),
(211, 'Property', 20, '/img/property/20/17239-12s.jpg', 0),
(212, 'Property', 21, '/img/property/21/14960-1l.jpg', 0),
(213, 'Property', 21, '/img/property/21/14960-1s.jpg', 0),
(214, 'Property', 21, '/img/property/21/14960-2l.jpg', 0),
(215, 'Property', 21, '/img/property/21/14960-2s.jpg', 0),
(216, 'Property', 21, '/img/property/21/14960-3l.jpg', 0),
(217, 'Property', 21, '/img/property/21/14960-3s.jpg', 0),
(218, 'Property', 21, '/img/property/21/14960-5l.jpg', 0),
(219, 'Property', 21, '/img/property/21/14960-5s.jpg', 0),
(220, 'Property', 21, '/img/property/21/14960-6l.jpg', 0),
(221, 'Property', 21, '/img/property/21/14960-6s.jpg', 0),
(222, 'Property', 21, '/img/property/21/14960-7l.jpg', 0),
(223, 'Property', 21, '/img/property/21/14960-7s.jpg', 0),
(224, 'Property', 21, '/img/property/21/14960-8l.jpg', 0),
(225, 'Property', 21, '/img/property/21/14960-8s.jpg', 0),
(226, 'Property', 21, '/img/property/21/14960-9l.jpg', 0),
(227, 'Property', 21, '/img/property/21/14960-9s.jpg', 0),
(228, 'Property', 22, '/img/property/22/16694-1l.jpg', 0),
(229, 'Property', 22, '/img/property/22/16694-1s.jpg', 0),
(230, 'Property', 22, '/img/property/22/16694-2l.jpg', 0),
(231, 'Property', 22, '/img/property/22/16694-2s.jpg', 0),
(232, 'Property', 22, '/img/property/22/16694-3l.jpg', 0),
(233, 'Property', 22, '/img/property/22/16694-3s.jpg', 0),
(234, 'Property', 22, '/img/property/22/16694-4l.jpg', 0),
(235, 'Property', 22, '/img/property/22/16694-4s.jpg', 0),
(236, 'Property', 22, '/img/property/22/16694-5l.jpg', 0),
(237, 'Property', 22, '/img/property/22/16694-5s.jpg', 0),
(238, 'Property', 22, '/img/property/22/16694-6l.jpg', 0),
(239, 'Property', 22, '/img/property/22/16694-6s.jpg', 0),
(240, 'Property', 22, '/img/property/22/16694-7l.jpg', 0),
(241, 'Property', 23, '/img/property/23/2752-1l.jpg', 0),
(242, 'Property', 23, '/img/property/23/2752-1s.jpg', 0),
(243, 'Property', 23, '/img/property/23/2752-2s.jpg', 0),
(244, 'Property', 23, '/img/property/23/2752-3l.jpg', 0),
(245, 'Property', 23, '/img/property/23/2752-3s.jpg', 0),
(246, 'Property', 23, '/img/property/23/2752-4l.jpg', 0),
(247, 'Property', 23, '/img/property/23/2752-4s.jpg', 0),
(248, 'Property', 23, '/img/property/23/2752-5l.jpg', 0),
(249, 'Property', 23, '/img/property/23/2752-5s.jpg', 0),
(250, 'Property', 24, '/img/property/24/16689-1l.jpg', 0),
(251, 'Property', 24, '/img/property/24/16689-1s.jpg', 0),
(252, 'Property', 24, '/img/property/24/16689-2l.jpg', 0),
(253, 'Property', 24, '/img/property/24/16689-2s.jpg', 0),
(254, 'Property', 24, '/img/property/24/16689-3l.jpg', 0),
(255, 'Property', 24, '/img/property/24/16689-3s.jpg', 0),
(256, 'Property', 24, '/img/property/24/16689-4l.jpg', 0),
(257, 'Property', 24, '/img/property/24/16689-4s.jpg', 0),
(258, 'Property', 24, '/img/property/24/16689-5l.jpg', 0),
(259, 'Property', 24, '/img/property/24/16689-5s.jpg', 0),
(260, 'Property', 24, '/img/property/24/16689-6l.jpg', 0),
(261, 'Property', 24, '/img/property/24/16689-6S.jpg', 0),
(262, 'Property', 24, '/img/property/24/16689-7l.jpg', 0),
(263, 'Property', 24, '/img/property/24/16689-7s.jpg', 0),
(264, 'Property', 24, '/img/property/24/16689-8l.jpg', 0),
(265, 'Property', 24, '/img/property/24/16689-8s.jpg', 0),
(266, 'Property', 24, '/img/property/24/16689-9l.jpg', 0),
(267, 'Property', 24, '/img/property/24/16689-9s.jpg', 0);

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
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `content`, `type`, `created`, `online`, `user_id`) VALUES
(2, 'accueil', 'accueil', '<div class="row ">\r\n<div class="col-md-12">\r\n<h2>The leading real estate company in Athens</h2>\r\n<p>Our real estate company was successfully established in 1994. We undertake any type of real estate whether it be from sales to rent, for buildings, hotels, land etc all over Greece.</p>\r\n<p>We are situated in the heart of Athens in Kaniggos 32 and Solomou corner. Our company employs 40 permanent staff, most of them being coworkers. The heads are Mr Theofanis Foukis and Mrs Rezin-Zaklin-Mari Wagner.</p>\r\n<p>Up to the present day our company has undertaken over 15.000 properties all over Greece with a high standard of credibility, professionalism. Our extensive experience guarantees the irreproachable co-operation and the great satisfaction offering our clients legal, notarial and technical support.</p>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', NULL, '2014-12-31 20:42:39', 0, NULL),
(3, 'services', 'services', '<h2>R&eacute;novations</h2>\r\n<p>Notre agence d&eacute;sirant &eacute;tendre ses services &agrave; votre avantage, entreprend tous les travaux de r&eacute;novations de votre logement, qu''il s''agit d''un simple rafra&icirc;chissement de peinture jusqu''aux travaux les plus exigeants et compos&eacute;s que vous ayez, en comprenant:</p>\r\n<ul>\r\n<li>des interventions architecturales.</li>\r\n<li>des installations hydrauliques et &eacute;lectriques.</li>\r\n<li>des changements d''&eacute;quipements dans les espaces fonctionnels.</li>\r\n<li>des remplacements ou r&eacute;novations de planchers ...etc.</li>\r\n</ul>\r\n<p>D&rsquo;un petit studio jusqu''&agrave; l''h&ocirc;tel.</p>\r\n<p>Tous les travaux ci-dessus sont ex&eacute;cut&eacute;s par des &eacute;quipes techniques de la soci&eacute;t&eacute;, en observant des prescriptions s&eacute;v&egrave;res de qualit&eacute;. Les travaux se r&eacute;alisent sous surveillance sur tous les stades. L''ach&egrave;vement des travaux en date pr&eacute;vue fait partie &eacute;galement de ce comcepte.</p>\r\n<h2>Cr&eacute;dit</h2>\r\n<p>Notre agence peut &eacute;galement vous renseigner en ce qui concerne les cr&eacute;dits &agrave; condition d''&ecirc;tre r&eacute;sident en union europ&eacute;enne et d''avoir les coordonn&eacute;es n&eacute;cessaires. Les acheteurs qui ne sont pas r&eacute;sidant de l''union europ&eacute;enne ou qui n''ont pu obtenir un cr&eacute;dit, doivent s''adresser uniquement aux pays ou ils sont r&eacute;sidants.</p>\r\n<p>Topographes</p>\r\n<p>Notre agence dispose de topographes sp&eacute;cialis&eacute;s, d&rsquo;ing&eacute;nieurs qui entreprennent des travaux de tout genre, topographies, d&eacute;livrances d&rsquo;autorisations etc. Pour plus d&rsquo;informations contacter notre bureau au tel : +30 210 3306333- +30 210 3306595 fax +30 210 3846846</p>', NULL, '2014-12-31 20:44:35', 1, NULL),
(4, 'informations', 'informations', '<h2>Frais d &lsquo;Agence</h2>\r\n<p><strong>Frais de vente ou d&rsquo;achat d&rsquo;un bien immobilier</strong></p>\r\n<p>-Vous avez d&eacute;cid&eacute; de vendre ou d&rsquo;acheter un bien immobilier, nous vous presentons, ci-dessous les d&eacute;marches &agrave; suivre et vos obligations envers l&rsquo; avocat, le notaire et l&rsquo; agence immobilier.</p>\r\n<p><strong>Avocat :</strong></p>\r\n<p>-La pr&eacute;sence d&rsquo;un avocat sp&eacute;cialis&eacute; vous est indispensable pour chaque transaction immobili&egrave;re. -Cet avocat doit &ecirc;tre sp&eacute;cialise sur ce type de march&eacute;, il vous &eacute;vite toutes erreurs possible. -Sa pr&eacute;sence est obligatoire pour un montant sup&eacute;rieur &agrave; la somme de 29.347 Euros. -Son tarif est attribu&eacute; par la loi, de 1,2% du prix du contrat, mais il peut varier &eacute;galement selon le cas. -L&rsquo;acheteur est devancieux &eacute;galement envers son avocat pour le contr&ocirc;le des titres de propri&eacute;t&eacute;. -Au cas ou vous n&rsquo;auriez pas d&rsquo;avocat, notre agence est dans la possibilit&eacute; de vous en procurer un.</p>\r\n<p><strong>Notaire :</strong></p>\r\n<p>- Le notaire est un fonctionnaire non r&eacute;mun&eacute;r&eacute; par l&rsquo;&eacute;tat. Il est nomm&eacute; par le ministre de la justice et ses obligations sont de prot&eacute;ger les biens publiques et de la s&eacute;curit&eacute; du droit publique. - Les frais de notaire sont &agrave; la charge de l&rsquo;acheteur et sont de l&rsquo;ordre de 1,2% de la valeur du contract&eacute; plus 130 Euro. 9% de ce montant est d&eacute;pos&eacute; &agrave; la caisse des pots, 6% &agrave; la caisse des assurances immobili&egrave;re et 80% en tant de r&eacute;mun&eacute;ration du notaire. Chaque dubliquadat est facture d&rsquo;un montant de 9,27 Euros. - Le r&ocirc;le du notaire sp&eacute;cialis&eacute; dans le domaine immobilier est particuli&egrave;rement important pour la bonne et de la forme du droit de la formulation de chaque accord &agrave; la signature du contrat. Le notaire doit &ecirc;tre une personne de confiance.</p>\r\n<p><strong>Caisse des cadastres :</strong></p>\r\n<p>- Les frais de transaction, doivent &ecirc;tre pay&eacute; par l&rsquo;acheteur. Ceux-ci s&rsquo;&eacute;l&egrave;vent &agrave; 4,75% et sont &eacute;values sur la valeur du contrat.</p>\r\n<p><strong>L&rsquo; agent immobilier</strong>&nbsp;- L&rsquo;agent immobilier per&ccedil;oit en tant que salaire un pourcentage de 2 %, qui est calcul&eacute; sur le prix r&eacute;el du bien immobilier + TVA 19%. Les courtiers per&ccedil;oivent leur r&eacute;mun&eacute;ration seulement lorsque l&rsquo;affaire qu&rsquo; il sont entreprise arrive au notaire.</p>\r\n<h2>Pieces justificatives</h2>\r\n<p><strong>Pour l&rsquo;achat d&rsquo;un bien immobilier :</strong>&nbsp;a) photocopie d&rsquo;une pi&egrave;ce d&rsquo;identit&eacute;. (Passeport) b) d&eacute;claration du num&eacute;ro du fixe Pour la vente d&rsquo;un bien immobilier :</p>\r\n<ol type="a">\r\n<li>photocopie d&rsquo;une pi&egrave;ce d&rsquo;identit&eacute;. (Passeport)</li>\r\n<li>titres de possession du bien immobilier.</li>\r\n<li>permis de construction.</li>\r\n<li>topographie du terrain plus plan de la construction.</li>\r\n<li>d&eacute;claration sur l&rsquo;honneur (N) .2238/94 valid&eacute;e des services des imp&ocirc;ts grec (&Delta;&Omicron;&Upsilon;) ou certificat si le bien immobilier est lou&eacute;.</li>\r\n<li>d&eacute;claration sur l&rsquo;honneur (N).2459/97 valid&eacute;e par le service des imp&ocirc;ts grec (&Delta;&Omicron;&Upsilon;)</li>\r\n<li>lorsque le bien immobilier provient de prestation parentale , de don ou d&rsquo;h&eacute;ritage , un document prescrit par le service des imp&ocirc;ts , (&Delta;&Omicron;&Upsilon;),lequel pr&eacute;cise que le propri&eacute;taire ne doit rien au service du fixe.</li>\r\n<li>Le &Tau;.&Alpha;.&Pi;. fournie par la municipalit&eacute; o&ugrave; se trouve le bien immobilier, plus la derni&egrave;re facture de &Delta;.&Epsilon;.&Eta;. (service d&rsquo;&eacute;lectricit&eacute;) et le contract&eacute;.</li>\r\n<li>contact du bail, si le bien est lou&eacute;.</li>\r\n<li>si vous avez construit votre bien immobilier, un certificat de &Iota;.&Kappa;.&Alpha;. (assurance).</li>\r\n</ol>', NULL, '2014-12-31 20:46:59', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id2` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `mediaQuantities` int(3) NOT NULL,
  `state_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `dateYear` year(4) NOT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `level` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  `modified` datetime NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `states_id` (`state_id`),
  KEY `areas_id` (`area_id`),
  KEY `status_id` (`status_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `properties`
--

INSERT INTO `properties` (`id`, `id2`, `name`, `content`, `mediaQuantities`, `state_id`, `area_id`, `status_id`, `type_id`, `media_id`, `dateYear`, `bedrooms`, `size`, `level`, `price`, `online`, `modified`, `created`) VALUES
(1, 10001, 'ATTICA, NEA SMYRNI, IN A VERY CENTRAL SPOT', '<p>An detached store that consists of ground floor of 380 sq.m. and loft of 250 sq.m. which has wooden floor. In a very luxuriously condition. In a very central spot. Ideal for any kind of commercial spot.</p>', 0, 5, 91, 2, 1, 0, 1983, 2, 630, '3', '5000000.00', 0, '2014-12-31 23:03:13', '2014-12-22 19:56:36'),
(2, 10002, 'IN A GOOD SPOT', '<p>The apartment has 2 bedrooms with wooden floor and built-in wardrobes and balconies, 1 bedroom with wooden floor and built-in wardrobes, a hall with wooden floor, 1 w.c. with false roofs, an office with wooden floor, a dressing room, 2 bathrooms, a kitchen with newly kitchen''s furniture and false roofs, living/ dinning room with wooden floor, security door, balcony with awnings. It is fully renovated. Near metro station. In a nice area.</p>', 0, 5, 15, 2, 2, 0, 1970, 4, 175, '4', '1500000.00', 0, '2014-12-29 12:19:13', '2014-12-22 21:12:18'),
(3, 10003, 'IN A GOOD SPOT', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 4, 1, 1, 2, 1, 7, 1970, 1, 400, '2', '2000000.00', 0, '2014-12-30 19:29:03', '2014-12-24 01:24:16'),
(7, 10393, '10393', '<pre class="prettyprint linenums lang-html">A detached maisonette that consists of semi-basement floor (that has 1 big room, garage for 2 cars, a ramp, boiler room, 1 w.c., 2 storerooms, 1 master bedroom with built-in wardrobes), ground floor (that has security door, 1 big room with oaken floor, veranda with a view, 1 w.c., swimming pool of 25 sq.m.), 1st floor (that has living/ dinning room with wooden floor and fireplace, veranda with a view, 1 w.c., kitchen with oaken floor and balcony with a view to the mountain) and 2nd floor (that has 1 master bedroom with oaken floor and built-in wardrobes and balcony with a view to the mountain, 1 bathroom, 2 bedrooms with oaken floor and built-in wardrobes and balconies with a view towards the mountain). The maisonette also has autonomous heating, elevator, air conditioning, ventilation system. Luxurious construction. In a beautiful location, in a tranquil area. </pre>', 9, 5, 136, 2, 4, 151, 2010, 6, 500, '2', '2500000.00', 1, '2015-01-20 00:56:28', '2014-12-26 16:54:13'),
(8, 10681, '10681', '<p><br /> The maisonette consists of basement with its own entrance (that has a hall, garage, 2 w.c., kitchen, 1 bedroom with built-in wardrobes and air conditioning, 1 bedroom with 2 entrances and built-in wardrobes and air conditioning, playroom with fireplace, a bar), ground floor (that has security door, a hall, independent kitchen with a balcony, 1 w.c., living/ dinning room with marble floor and fireplace, veranda) and 1st floor (that has 1 master bedroom with oaken floor and built-in wardrobes and balcony, 2 bedrooms with oaken floor and built-in wardrobes and balconies with a view, 1 bathroom). The maisonette also has autonomous heating, air conditioning to each floor, entrance cameras, double windows, electrical shutters, boiler, garden and a swimming pool. Luxurious construction. In a beautiful location<strong>.Â </strong></p>', 9, 5, 132, 2, 4, 153, 2010, 6, 420, '1', '2500000.00', 1, '2015-01-20 01:49:20', '2014-12-26 17:20:40'),
(12, 2053, '2053', '<p>It is an amphitheatric building plot or 10.263 sqm.. With unlimited and unspoiled sea view. 600 meters from the sea. In a beautiful location.Â </p>', 4, 24, 142, 2, 6, 155, 1970, 1, 10263, '1', '130000.00', 1, '2015-01-20 08:26:01', '2014-12-29 12:02:48'),
(13, 13, 'test', '', 2, 1, 1, 1, 1, 146, 1970, 1, 1, '1', '1.00', 0, '2015-01-20 10:44:29', '2014-12-30 20:08:49'),
(17, 17794, '17794', '', 8, 5, 72, 2, 19, 156, 1980, 0, 250, 'Ground Floor', '250000.00', 1, '2015-01-20 10:11:50', '2015-01-20 07:40:10'),
(18, 11829, 'In A very central spot', '', 7, 5, 91, 2, 12, 172, 1979, NULL, 630, 'basement', '5000000.00', 1, '2015-01-20 11:59:42', '2015-01-20 09:35:52'),
(19, 14045, 'IN A GOOD SPOT', '', 2, 5, 132, 2, 3, 186, 2015, NULL, 14500, '', '10000000.00', 1, '2015-01-20 12:00:10', '2015-01-20 09:42:01'),
(20, 17239, '', '<p>Level: Semibassement</p><p>until 3rd</p>', 11, 5, 58, 8, 4, 190, 2009, 7, 410, '3 rd', '3000.00', 1, '2015-01-20 12:03:07', '2015-01-20 10:05:11'),
(21, 14960, 'Luxurious construction', '<p>The house consists of basement, ground floor, 1st floor and attic of total surface of 360 sq.m. and has 5 bedrooms (one of which is a master one), 3 bathrooms, 2 w.c., 2 fully equipped kitchens, 3 fireplaces, autonomous heating, boiler, wooden floor (on the ground floor and 1st floor), air condition (to all floors), big verandas, attic with wood, laundry room, boiler room with 2.000 m3 petrol tank, central TV aerial, alarm system, elevator, close parking space for 5 cars, billiard. Built in a 670 sq.m. plot formed with threes and grass, bbq, automatic watering, fully lighting of the garden and swimming pool. There is a 2nd house of 80 sq.m., on two levels. Super luxurious construction.</p><p>size 440</p><p>on a block 670</p><p>level semibassement</p><p>until 1st</p>', 8, 5, 99, 8, 1, 212, 2001, 6, 440, '1 st', '2800.00', 1, '2015-01-20 12:03:33', '2015-01-20 10:14:05'),
(22, 16694, '', '<p>Portocheli</p><p>size:450 on a block 1500sq/m</p><p>Level: ground floor</p><p>until:2nd</p>', 7, 3, 1, 8, 1, 228, 2011, 7, 450, 'Ground Floor', '45000.00', 1, '2015-01-20 12:05:41', '2015-01-20 10:24:29'),
(23, 2752, '', '<p>A seaside land of 13 stremmata. With unlimited and unspoiled sea view. In a beautiful location. In exchange for 35%. Ideal for traditional houses, villas or tourist accommodations.</p><p>Â </p><p>area SYKI</p>', 5, 31, 1, 6, 6, 241, 2015, NULL, 1300, '', '0.00', 1, '2015-01-20 12:02:40', '2015-01-20 10:32:24'),
(24, 16689, '', '<p>DELFI</p><p>ON A BLOCK 350SQ/M</p><p>UNTIL 5TH</p>', 9, 13, 1, 8, 15, 250, 1990, NULL, 1300, 'Ground Floor', '4500.00', 1, '2015-01-20 12:06:05', '2015-01-20 10:41:56');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `value`) VALUES
(1, 'choisir', ''),
(2, 'For Sale', 'For Sale'),
(6, 'Giving in exchange for', 'Giving in exchange for'),
(7, 'To Let', 'To Let'),
(8, 'For Rent -Offer', 'For Rent -Offer');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`, `firstname`, `lastname`, `avatar`, `active`, `token`, `created`, `modified`, `role`) VALUES
(4, 'philippe', 'atelfoto@msn.com', 'c213b1286de7a88b4892b626d676e56fb68773ed', NULL, NULL, 1, 1, '', '2014-12-20 01:38:46', '2014-12-20 01:39:35', 'member'),
(5, 'regine', NULL, 'passwordregine', 'regine', 'regine', 1, 0, NULL, '2015-01-20 14:53:43', '2015-01-20 14:53:43', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
