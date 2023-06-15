-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 15 juin 2023 à 08:21
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `becode`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Prénom` varchar(20) NOT NULL,
  `Anniversaire` int NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `School` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `Nom`, `Prénom`, `Anniversaire`, `Sexe`, `School`) VALUES
(1, 'Addis', 'Jodie', 30, 'F', 'La Louvière'),
(2, 'Addis', 'Jodie', 30, 'F', 'La Louvière'),
(3, 'Di Bernardo', 'Nikko', 27, 'M', 'Charleroi'),
(4, 'Cadau', 'Louka', 21, 'M', 'Namur'),
(5, 'Dias Marques', 'Ethan', 26, 'M', 'Addy'),
(6, 'Mayeur', 'Benjamin', 25, 'M', 'Bruxelles'),
(7, 'Fassin', 'Marine', 34, 'F', 'Charleroi'),
(8, 'Petit', 'Alexandra', 31, 'F', 'Addy'),
(9, 'Grard', 'Steve', 38, 'M', 'Braine-Le-Compte'),
(10, 'Lecorney', 'Delphine', 45, 'F', 'Addy'),
(11, 'Moerman', 'Thomas', 27, 'M', 'Addy'),
(12, 'Cyphas', 'Noa', 19, 'M', 'La Louvière');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
