-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 avr. 2021 à 02:55
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- 
drop database if exists ancocokids;
CREATE database ancocokids;
use ancocokids;

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ArtId` int(11) NOT NULL AUTO_INCREMENT,
  `FourId` int(11) NOT NULL,
  `CatId` int(11) NOT NULL,
  `ArtNom` varchar(254) DEFAULT NULL,
  `PrixArt` int(11) DEFAULT NULL,
  `QteArt` int(11) DEFAULT NULL,
  `Tauxremise` int(11) DEFAULT NULL,
  `ArtDescription` varchar(254) DEFAULT NULL,
  `TVA` decimal(4,2) DEFAULT NULL,
  `ArtImage` varchar(100) NOT NULL,
  PRIMARY KEY (`ArtId`),
  KEY `FK_Association_3` (`FourId`),
  KEY `FK_Association_4` (`CatId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ArtId`, `FourId`, `CatId`, `ArtNom`, `PrixArt`, `QteArt`, `Tauxremise`, `ArtDescription`, `TVA`, `ArtImage`) VALUES
(1, 1, 2, 'poussette', 15000, 50, 5, 'poussette tout terrain', '19.25', 'Poussette tout terrain.jpg'),
(2, 1, 2, 'landeau poussette', 10000, 50, 5, 'landeau poussette', '19.25', 'landeau_poussette.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `CatId` int(11) NOT NULL AUTO_INCREMENT,
  `CatNom` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`CatId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`CatId`, `CatNom`) VALUES
(1, 'Produit laitier'),
(2, 'Accessoire bebe');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ClientId` int(11) NOT NULL AUTO_INCREMENT,
  `ClientNom` varchar(254) NOT NULL,
  `ClientPrenom` varchar(254) DEFAULT NULL,
  `ClientSexe` char(1) NOT NULL,
  `ClientAdresse` varchar(254) DEFAULT NULL,
  `ClientTelephone` int(11) DEFAULT NULL,
  `ClientMotdePasse` varchar(254) NOT NULL,
  `ClientLogin` varchar(254) NOT NULL,
  `ClientVille` varchar(254) NOT NULL,
  `IS_ADMIN` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ClientId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ClientId`, `ClientNom`, `ClientPrenom`, `ClientSexe`, `ClientAdresse`, `ClientTelephone`, `ClientMotdePasse`, `ClientLogin`, `ClientVille`, `IS_ADMIN`) VALUES
(1, 'tiako', 'cedric', 'M', '', 698756145, 'bonjour', 'tiako1998@gmail.com', 'Douala', 0),
(2, 'Moukourie', 'armelle', 'F', 'Rue 34', 672608187, 'azerty@@', 'moukouriarmelle@gmail.com', 'Douala', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `CmdId` int(11) NOT NULL AUTO_INCREMENT,
  `CmdDate` datetime DEFAULT NULL,
  `ClientId` int(11) NOT NULL,
  PRIMARY KEY (`CmdId`),
  KEY `FK_Association_10` (`ClientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnation`
--

DROP TABLE IF EXISTS `donnation`;
CREATE TABLE IF NOT EXISTS `donnation` (
  `DonId` int(11) NOT NULL AUTO_INCREMENT,
  `DonNom` varchar(254) DEFAULT NULL,
  `QteDon` int(11) DEFAULT NULL,
  `NatureDon` varchar(254) DEFAULT NULL,
  `ClientId` int(11) NOT NULL,
  PRIMARY KEY (`DonId`),
  KEY `FK_Association_1` (`ClientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `FourId` int(11) NOT NULL AUTO_INCREMENT,
  `FourNom` varchar(254) DEFAULT NULL,
  `FourPrenom` varchar(254) DEFAULT NULL,
  `FourAdresse` varchar(254) DEFAULT NULL,
  `FourTelephone` int(11) DEFAULT NULL,
  `Fouremail` varchar(254) DEFAULT NULL,
  FourMotdePasse varchar(254) DEFAULT NULL,
  `FourEntreprise` varchar(50) NOT NULL,
  PRIMARY KEY (`FourId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisseur`
--
INSERT INTO `fournisseur` (`FourId`, `FourNom`, `FourPrenom`, `FourAdresse`, `FourTelephone`, `Fouremail`,FourMotdePasse, `FourEntreprise`) VALUES
(1, 'TIAKO', 'CEDRIC', 'rue barnabe', 698756145, 'tiako1998@gmail.com','inconue', 'JUMIA');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `LigCmd_Id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtId` int(11) NOT NULL,
  `CmdId` int(11) NOT NULL,
  `QteCmd` int(11) DEFAULT NULL,
  `DateLigCmd` datetime DEFAULT NULL,
  PRIMARY KEY (`LigCmd_Id`),
  KEY `FK_Association_6` (`ArtId`),
  KEY `FK_Association_7` (`CmdId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne_commande`
--


-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `LivId` int(11) NOT NULL AUTO_INCREMENT,
  `ModeLiv_Id` int(11) NOT NULL,
  `LivDate` datetime DEFAULT NULL,
  `LivDescription` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`LivId`),
  KEY `FK_Association_5` (`ModeLiv_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livraison_effectuee`
--

DROP TABLE IF EXISTS `livraison_effectuee`;
CREATE TABLE IF NOT EXISTS `livraison_effectuee` (
  `LivEff_Id` int(11) NOT NULL AUTO_INCREMENT,
  `CmdId` int(11) NOT NULL,
  `LivId` int(11) NOT NULL,
  `DateLivEff` datetime DEFAULT NULL,
  `NbreLivEff` int(11) DEFAULT NULL,
  PRIMARY KEY (`LivEff_Id`),
  KEY `FK_Association_8` (`CmdId`),
  KEY `FK_Association_9` (`LivId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modelivraison`
--

DROP TABLE IF EXISTS `modelivraison`;
CREATE TABLE IF NOT EXISTS `modelivraison` (
  `ModeLiv_Id` int(11) NOT NULL AUTO_INCREMENT,
  `ModeLivNom` varchar(254) DEFAULT NULL,
  `ModeLiv_Description` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`ModeLiv_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_Association_3` FOREIGN KEY (`FourId`) REFERENCES `fournisseur` (`FourId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Association_4` FOREIGN KEY (`CatId`) REFERENCES `categorie` (`CatId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_Association_10` FOREIGN KEY (`ClientId`) REFERENCES `client` (`ClientId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `donnation`
--
ALTER TABLE `donnation`
  ADD CONSTRAINT `FK_Association_1` FOREIGN KEY (`ClientId`) REFERENCES `client` (`ClientId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_Association_6` FOREIGN KEY (`ArtId`) REFERENCES `article` (`ArtId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Association_7` FOREIGN KEY (`CmdId`) REFERENCES `commande` (`CmdId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `FK_Association_5` FOREIGN KEY (`ModeLiv_Id`) REFERENCES `modelivraison` (`ModeLiv_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livraison_effectuee`
--
ALTER TABLE `livraison_effectuee`
  ADD CONSTRAINT `FK_Association_8` FOREIGN KEY (`CmdId`) REFERENCES `commande` (`CmdId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Association_9` FOREIGN KEY (`LivId`) REFERENCES `livraison` (`LivId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


