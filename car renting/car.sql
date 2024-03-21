-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 11 Décembre 2023 à 02:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `car`
--

-- --------------------------------------------------------

--
-- Structure de la table `utulisateur`
--

CREATE TABLE IF NOT EXISTS `utulisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utulisateur`
--

INSERT INTO `utulisateur` (`id`, `username`, `email`, `password`, `avatar`) VALUES
(1, 'gharbirayen', 'rayen14685@gmail.com', '123', '"C:\\wamp\\www\\car renting\\car renting\\images\\DSC_0529 (1).jpg"'),
(2, 'hiba', 'srtrtrtrtrt@gmail.com', '0000', 'aazzaa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `imatriculation` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(100) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `puissance` varchar(100) NOT NULL,
  `nb_place` int(11) NOT NULL,
  `nb_porte` int(11) NOT NULL,
  `poids` varchar(100) NOT NULL,
  `cylindre` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`imatriculation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`imatriculation`, `model`, `marque`, `couleur`, `puissance`, `nb_place`, `nb_porte`, `poids`, `cylindre`, `prix`, `image`) VALUES
(14, 'dgggfg', '', '', '', 0, 0, '', 0, 0, 'img7.png'),
(15, 'dddd', '', '', '', 0, 0, '', 0, 0, 'img7.png'),
(16, 'ggdfg', '', '', '', 0, 0, '', 0, 0, 'img12.png'),
(28, 'rang roover', 'evoque', 'blue', '54', 5, 4, '2300KG', 12, 12000, 'img10.png'),
(29, 'dswg', 'dxgb', '', '', 0, 0, '', 0, 0, 'img6.png'),
(30, 'gch', ' vb', '', '', 0, 0, '', 0, 0, 'img3.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
