-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 déc. 2023 à 22:40
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ioto`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `utilisateur` varchar(40) NOT NULL,
  `motdepasse` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`nom`, `prenom`, `utilisateur`, `motdepasse`) VALUES
('LE PERSON', 'Eliott', 'test', 'mdp');

-- --------------------------------------------------------

--
-- Structure de la table `flashs`
--

CREATE TABLE `flashs` (
  `numero` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `prix` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `flashs`
--

INSERT INTO `flashs` (`numero`, `nom`, `image`, `prix`) VALUES
(3, 'Flash 3', 'flash_3.png', 120),
(4, 'Flash 4', 'flash_4.png', 100.99),
(5, 'Flash 5', 'flash_5.png', 100),
(6, 'Flash 1', 'flash_1.png', 50),
(7, 'Flash 2', 'flash_2.png', 150),
(8, 'Flash 3', 'flash_3.png', 100),
(9, 'Flash 4', 'flash_4.png', 150),
(10, 'Flash 5', 'flash_5.png', 850),
(11, 'Flash 1', 'flash_1.png', 1250),
(12, 'Flash 2', 'flash_2.png', 1000.99);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `flashs`
--
ALTER TABLE `flashs`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `flashs`
--
ALTER TABLE `flashs`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
