-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 14 Novembre 2014 à 10:26
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `listeclient`
--

CREATE TABLE IF NOT EXISTS `listeclient` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `token` int(11) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `listeclient`
--

INSERT INTO `listeclient` (`nom`, `prenom`, `tel`, `mail`, `login`, `password`, `token`) VALUES
('karim', 'mben ali', 12345678, 'azeaze@sdqd.th', 'amine', '1234', 0),
('azeazeazea', 'azeazeazea', 12345678, 'azeaze@aze.sqd', 'azeazeazea', 'eazeazea', 5),
('client2', 'Client2', 12345678, 'azer@azer@az', 'azer', 'azer', 54),
('client', 'client', 20202020, 'client@esprit.tn', 'client', 'client', 0),
('azeqsdqd', 'qsxwcxcqdqs', 12345612, 'azes@qs.vv', 'client5', 'pass', 0),
('hamdihhhh', 'kkkkk', 11111111, 'fazgrgr@hff.fr', 'hamdi', '2255', 0),
('QSqsQSqsQSqs', 'XWX<WX<W', 14521254, 'aze@aze.am', 'medam', 'qsdxasxada', 0),
('trabelsi', 'med amine', 55998787, 'medamine.trabelsignia@esprit.tn', 'medamine', 'trabelsi', 276),
('q', 'qsd', 20202020, 'qcxcqcq@sdqs.ss', 'medamineqsdqsdq', 'sdqsd', 0),
('mazouni', 'med anes', 21768569, 'medanes.mazouni@esprit.tn', 'medanes', 'mazouni', 666),
('hhhh', 'hhhhh', 66666666, 'fkjkdg@gmail.com', 'ons', 'ons', 0),
('treza', 'treza', 98765432, 'tre@tre.tr', 'treza', 'treza', 0);

-- --------------------------------------------------------

--
-- Structure de la table `listeentraineur`
--

CREATE TABLE IF NOT EXISTS `listeentraineur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `spec` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `listeentraineur`
--

INSERT INTO `listeentraineur` (`id`, `nom`, `prenom`, `tel`, `mail`, `spec`) VALUES
(3, 'trabelsi', 'amine', 55998787, 'medamine.trabelsignia@esprit.tn', 'Bikram'),
(5, 'yahyoui', 'amine', 25364589, 'medamine.yahyoui@esprit.tn', 'Anusara'),
(15, 'mazouni', 'anes', 69854751, 'medanes.mazouni@esprit.tn', 'Restorative');

-- --------------------------------------------------------

--
-- Structure de la table `listeseance`
--

CREATE TABLE IF NOT EXISTS `listeseance` (
  `heure` int(11) NOT NULL,
  `jour` varchar(10) NOT NULL,
  `id_entraineur` int(11) NOT NULL,
  `nbr_places_res` int(11) NOT NULL,
  `nbr_places_total` int(11) NOT NULL,
  PRIMARY KEY (`heure`,`jour`),
  KEY `id_entraineur` (`id_entraineur`),
  KEY `id_entraineur_2` (`id_entraineur`),
  KEY `id_entraineur_3` (`id_entraineur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `listeseance`
--

INSERT INTO `listeseance` (`heure`, `jour`, `id_entraineur`, `nbr_places_res`, `nbr_places_total`) VALUES
(8, 'dimanche', 5, 1, 20),
(8, 'lundi', 15, 20, 20),
(8, 'mercredi', 3, 1, 20),
(10, 'mardi', 3, 2, 16),
(10, 'samedi', 3, 0, 20),
(10, 'vendredi', 3, 5, 20),
(12, 'dimanche', 3, 1, 15),
(12, 'jeudi', 5, 1, 21),
(12, 'lundi', 5, 2, 20),
(14, 'vendredi', 3, 1, 23),
(16, 'mercredi', 3, 1, 23),
(16, 'samedi', 5, 1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `logsadmin`
--

CREATE TABLE IF NOT EXISTS `logsadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `logsadmin`
--

INSERT INTO `logsadmin` (`id`, `login`, `password`) VALUES
(1, 'amine', 'trabelsi'),
(2, 'anes', 'mazouni'),
(3, 'medamine', 'yahyoui'),
(4, 'khaled', '12');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `prenom`, `tel`, `mail`, `message`) VALUES
(4, 'mazouni', 'anes', 36589741, 'medanes.mazouni@esprit.tn', 'TEST TEST TEST TEST TEST TEST mmmm'),
(6, 'yahyoui', 'med amine', 24838331, 'medamine.yahyoui@esprit.tn', 'TEST TEST TEST TEST TEST'),
(7, 'trabelsi gnia', 'med amine', 55998787, 'medamine.trabelsignia@esprit.tn', 'TEST TEST TEST TEST TEST'),
(16, 'azeaeaze', 'azeazeaze', 12345678, 'aaa@aa.sd', 'azeazeae');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `mail`, `subject`, `message`) VALUES
(2, 'medamine.trabelsignia@esprit.tn', 'aaaaass', 'qsdqsdq');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `jour` varchar(10) NOT NULL,
  `heure` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  PRIMARY KEY (`jour`,`heure`,`login`),
  KEY `jour` (`jour`),
  KEY `heure` (`heure`),
  KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`jour`, `heure`, `login`) VALUES
('dimanche', 8, 'medamine'),
('mercredi', 8, 'medamine'),
('mardi', 10, 'medamine'),
('dimanche', 12, 'medamine'),
('vendredi', 14, 'medamine'),
('mercredi', 16, 'medamine'),
('samedi', 16, 'medamine');

-- --------------------------------------------------------

--
-- Structure de la table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `Visit_IP` varchar(255) NOT NULL,
  `Visit_Referer` varchar(255) NOT NULL,
  `Visit_date` varchar(255) NOT NULL,
  `Visit_page` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `listeseance`
--
ALTER TABLE `listeseance`
  ADD CONSTRAINT `listeseance_ibfk_1` FOREIGN KEY (`id_entraineur`) REFERENCES `listeentraineur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
