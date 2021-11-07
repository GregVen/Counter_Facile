-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 07 nov. 2021 à 12:35
-- Version du serveur : 5.7.24
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `count`
--

-- --------------------------------------------------------

--
-- Structure de la table `compteurs`
--

CREATE TABLE `compteurs` (
  `idCompteurs` int(11) NOT NULL,
  `idMachine` int(11) NOT NULL,
  `A4NB_Debut` int(11) DEFAULT NULL,
  `A4C_Debut` int(11) DEFAULT NULL,
  `A3NB_Debut` int(11) DEFAULT NULL,
  `A3C_Debut` int(11) DEFAULT NULL,
  `A4NB_Fin` int(11) DEFAULT NULL,
  `A4C_Fin` int(11) DEFAULT NULL,
  `A3NB_Fin` int(11) DEFAULT NULL,
  `A3C_Fin` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compteurs`
--

INSERT INTO `compteurs` (`idCompteurs`, `idMachine`, `A4NB_Debut`, `A4C_Debut`, `A3NB_Debut`, `A3C_Debut`, `A4NB_Fin`, `A4C_Fin`, `A3NB_Fin`, `A3C_Fin`, `Date`) VALUES
(1, 1, 23, 34, 23, 31, 89, 90, 36, 67, NULL),
(2, 2, 34, 44, 44, 24, 55, 55, 55, 55, NULL),
(3, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 19, 81717, 31421, NULL, NULL, 81717, 31421, NULL, NULL, NULL),
(11, 20, 0, 0, NULL, NULL, 0, 0, NULL, NULL, NULL),
(12, 21, 81717, 31421, NULL, NULL, 81717, 31421, NULL, NULL, NULL),
(13, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `machines`
--

CREATE TABLE `machines` (
  `idMachines` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Adresse_IP` varchar(30) DEFAULT NULL,
  `Etat` int(5) NOT NULL DEFAULT '0',
  `en_Ligne` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `machines`
--

INSERT INTO `machines` (`idMachines`, `Nom`, `Adresse_IP`, `Etat`, `en_Ligne`) VALUES
(19, 'nompÃ©pÃ©', '192.168.1.145', 0, 0),
(24, 'cffzezefefihpih', '1.1.1.1', 0, 1),
(25, 'zeze', '1.2.2.2', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `snmp_oid`
--

CREATE TABLE `snmp_oid` (
  `idSNMP` int(11) NOT NULL,
  `constructeur` varchar(100) NOT NULL,
  `OID_Total_C` varchar(300) NOT NULL,
  `OID_Total_NB` varchar(300) NOT NULL,
  `OID_Total_A3C` varchar(300) NOT NULL,
  `OID_Total_A3NB` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `snmp_oid`
--

INSERT INTO `snmp_oid` (`idSNMP`, `constructeur`, `OID_Total_C`, `OID_Total_NB`, `OID_Total_A3C`, `OID_Total_A3NB`) VALUES
(1, 'Xerox', '.1.3.6.1.4.1.253.8.53.13.2.1.6.1.20.33', '.1.3.6.1.4.1.253.8.53.13.2.1.6.1.20.34', '.1.3.6.1.4.1.253.8.53.13.2.1.6.1.20.43', '.1.3.6.1.4.1.253.8.53.13.2.1.6.1.20.43');

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

CREATE TABLE `tarifs` (
  `idTarif` int(11) NOT NULL,
  `format` varchar(20) NOT NULL,
  `cout` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tarifs`
--

INSERT INTO `tarifs` (`idTarif`, `format`, `cout`) VALUES
(1, 'A4 Noire', 22),
(2, 'A4 Couleur', 40),
(3, 'A3 Noire', 12),
(4, 'A3 Couleur', 17);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userID`, `login`, `password`, `id_Role`) VALUES
(1, 'admin', '$2y$10$dU3aTcmFOYI6pXpAkmX4xuaVS7QT02YgudeANfS7.Q4UHY49Ahl/K', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compteurs`
--
ALTER TABLE `compteurs`
  ADD PRIMARY KEY (`idCompteurs`);

--
-- Index pour la table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`idMachines`);

--
-- Index pour la table `snmp_oid`
--
ALTER TABLE `snmp_oid`
  ADD PRIMARY KEY (`idSNMP`);

--
-- Index pour la table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`idTarif`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compteurs`
--
ALTER TABLE `compteurs`
  MODIFY `idCompteurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `machines`
--
ALTER TABLE `machines`
  MODIFY `idMachines` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `snmp_oid`
--
ALTER TABLE `snmp_oid`
  MODIFY `idSNMP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `idTarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
