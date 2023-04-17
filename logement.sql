-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 avr. 2023 à 07:58
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `logement`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `numag` int(10) NOT NULL AUTO_INCREMENT,
  `nomag` varchar(20) NOT NULL,
  `adresseag` varchar(10) NOT NULL,
  `telag` varchar(10) NOT NULL,
  PRIMARY KEY (`numag`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`numag`, `nomag`, `adresseag`, `telag`) VALUES
(1, 'nnn', 'lll', '0342156122'),
(2, 'Boss', 'Tana', '0365498721');

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

DROP TABLE IF EXISTS `appartement`;
CREATE TABLE IF NOT EXISTS `appartement` (
  `numapp` int(10) NOT NULL AUTO_INCREMENT,
  `nomapp` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `adresseapp` varchar(50) NOT NULL,
  `nbpiece` int(10) NOT NULL,
  `prix` int(20) NOT NULL,
  PRIMARY KEY (`numapp`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`numapp`, `nomapp`, `pays`, `adresseapp`, `nbpiece`, `prix`) VALUES
(3, 'Tranomora', 'Mada', 'Andrainjato Fianarantsoa', 32, 2333),
(2, 'ninah', 'mada', 'ici', 3, 600365);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `numcli` int(10) NOT NULL AUTO_INCREMENT,
  `nomcli` varchar(50) NOT NULL,
  `prenomcli` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `cincli` varchar(12) NOT NULL,
  `adressecli` varchar(50) NOT NULL,
  `telcli` varchar(10) NOT NULL,
  PRIMARY KEY (`numcli`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`numcli`, `nomcli`, `prenomcli`, `sexe`, `cincli`, `adressecli`, `telcli`) VALUES
(6, 'nanah', 'ayden', 'Homme', '213654789654', 'tana', '3215897456'),
(5, 'Vanah', 'Cyprielle', 'Femme', '987456321032', 'ici', '3214569874');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `numvente` int(10) NOT NULL AUTO_INCREMENT,
  `nomcli` varchar(10) NOT NULL,
  `nomag` varchar(10) NOT NULL,
  `nomapp` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `prix` varchar(20) NOT NULL,
  PRIMARY KEY (`numvente`),
  UNIQUE KEY `numcli` (`nomcli`),
  UNIQUE KEY `numag` (`nomag`),
  UNIQUE KEY `numapp` (`nomapp`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`numvente`, `nomcli`, `nomag`, `nomapp`, `date`, `prix`) VALUES
(1, 'vanah', 'nnn', 'ninah', '2023-04-18', '200'),
(2, 'Nicolas', 'Boss', 'Tranomora', '2023-04-11', '233');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
