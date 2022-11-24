-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 24 nov. 2022 à 09:50
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
-- Base de données : `spotify`
--
CREATE DATABASE IF NOT EXISTS `spotify` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `spotify`;

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `name`, `bio`, `gender`, `date_of_birth`) VALUES
(1, 'Justin Bieber', 'Canadian', 'Male', '1992-03-01'),
(2, 'Twice', 'Jihyo (My Bias), MoMo, Mina, Tzuyu, Sana, Nayeon, Jeongyeon, Chaeyoung, Dahyun', 'Female', '2016-02-01'),
(3, 'BTS', 'V, Suga, Jimin, J-Hope, RM (My Bias), Jin, JungKook.', 'Male', '2014-04-01'),
(4, 'BlackPink', 'Jisoo(My Bias), Rosé, Jennie, Lisa', 'Female', '2017-11-01'),
(5, 'Red Velvet', 'Irene, Joy, Yeri (My Bias), Wendy, Seulgi', 'Female', '2014-01-01'),
(6, 'Seventeen', 'Kim Mingyu, Yoon Jeonghan, Wonwoo, Hoshi, DK, Joshua Hong (My Bias), Wen Junhui, Woozi, S.Coups, Vernon, Xu Minghao, Dino', 'Male', '2015-05-01');

-- --------------------------------------------------------

--
-- Structure de la table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `songs`
--

INSERT INTO `songs` (`id`, `title`, `release_date`, `artist_id`) VALUES
(1, 'Baby', '2008-05-01', 1),
(2, 'Georgia', '2021-12-01', 1),
(3, 'Scientist', '2021-12-01', 2),
(4, 'Cry for Me', '2022-05-01', 2),
(5, 'Breakthrough', '2022-05-01', 2),
(6, 'As if it\'s Your Last', '2022-05-02', 4),
(7, 'Pose', '2022-04-10', 5),
(8, 'Boy With Love', '2017-05-01', 3),
(9, 'Pretty U', '2018-02-01', 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
