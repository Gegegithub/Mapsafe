-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 juin 2024 à 15:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_accident`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Genre` text NOT NULL,
  `Age` text NOT NULL,
  `Naissance` text NOT NULL,
  `Email` text NOT NULL,
  `telephone` text NOT NULL,
  `mdp` text NOT NULL,
  `confirme_mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `Nom`, `Prenom`, `Genre`, `Age`, `Naissance`, `Email`, `telephone`, `mdp`, `confirme_mdp`) VALUES
(13, 'MPIGA', 'JESSE', ' MASCULIN', '24', '27/04/2000', 'mpigajesse@gmail.com', '+212779635687', '$2y$10$1oILqWwoJu9PdcZGtPRr8eFHvHv8116gWHLgD6jAzzBfJ3Ar88gWa', '1234'),
(15, 'BIRANGOU', 'Georges', 'Homme', '20', '06/11/2002', 'georgesg062@Gmail.com', '0709274190', '$2y$10$.P5bQbNHEBTtJaeL9GoaHelhvvTH5NmrBrZRUTwOGggsqEtkur/Li', '$2y$10$qMGTW8IaqfCQMypjEKLSEONQP6DUbuKp4JEpTn8Ku1Cu8W4Z5fQoy'),
(16, 'Clark', 'Kent', ' MASCULIN', '20', '27/04/2000', 'Clark@gmail.com', '0709274190', '$2y$10$77FRwr8ia8g80UmCI1fIVO4PXo.xjtG1v2nifCrTv.kQ/nM1MAkSS', '$2y$10$Hjdi2DIa86086KIy4Y7rS.d.ZoYi4U33w71eoZRd3Edzi70hwCoh.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
