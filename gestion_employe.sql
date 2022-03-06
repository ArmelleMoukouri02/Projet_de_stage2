-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 04 avr. 2021 à 19:36
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : 
DROP DATABASE IF EXISTS gestion_employe;
CREATE DATABASE `gestion_employe`;
USE gestion_employe;
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `ID_EMPLOYE_` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `NOM_EMPLOYE` varchar(50) NOT NULL,
  `PRENOM_EMPLOYE` varchar(50) NOT NULL,
  `IDENTIFIANT_EMPLOYE` varchar(35) NOT NULL,
  `MOT_DE_PASSE_EMPLOYE` varchar(20) NOT NULL,
  `TITRE` varchar(40) DEFAULT NULL,
  `ROLE` varchar(25) DEFAULT NULL,
  `IS_ADMIN` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE `presence` (
  `ID_PRESENCE` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ID_EMPLOYE_` int(11) NOT NULL,
  `HEURE` time DEFAULT NULL,
  `ACTION` enum('connexion','deconnexion','confirmation') DEFAULT NULL,
  `DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `presence`
--
ALTER TABLE `presence`
  ADD KEY `FK_AVOIR` (`ID_EMPLOYE_`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `presence`
--
ALTER TABLE `presence`
  ADD CONSTRAINT `FK_AVOIR` FOREIGN KEY (`ID_EMPLOYE_`) REFERENCES `employe` (`ID_EMPLOYE_`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
