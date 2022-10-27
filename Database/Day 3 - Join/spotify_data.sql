-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 14:38
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

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

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `name`, `biography`, `birth_year`, `gender`) VALUES
(1, 'Justin Bieber', 'babybaby ooouuhh', 1994, 'Male'),
(2, 'Nepal', 'Nepal is a French rapper and beatmaker that cares a lot about anonymity. He only shows himself hooded.', 1990, 'Male'),
(3, 'Madonna', 'Queen of POP !', 1958, 'Female'),
(4, 'Metallica', 'blablablalba', 1981, 'Male');

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `type`) VALUES
(1, 'Pop'),
(2, 'Rock'),
(3, 'Hip-Hop'),
(4, 'Jazz'),
(5, 'Funk'),
(6, 'Soul');

--
-- Déchargement des données de la table `songs`
--

INSERT INTO `songs` (`id`, `title`, `release_date`, `artist_id`, `categ_id`) VALUES
(2, 'Baby', '2010-10-10', 1, 1),
(3, 'Like a virgin', '1984-10-18', 3, 1),
(4, 'Like a prayer', '1989-10-11', 3, 1),
(5, 'Malik Al Mawt', '2019-10-03', 2, 3),
(6, 'Rien d\'spécial', '2016-10-11', 2, 3),
(7, 'Nothing else matters', '1991-10-11', 4, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
