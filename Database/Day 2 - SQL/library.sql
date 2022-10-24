-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 oct. 2022 à 16:41
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
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `biography` text NOT NULL,
  `birth_year` year(4) NOT NULL,
  `gender` enum('Female','Male') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id`, `name`, `biography`, `birth_year`, `gender`) VALUES
(1, 'J.K. Rowling', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pharetra arcu. Aenean sapien eros, dapibus in pellentesque at, eleifend id urna. Pellentesque a ante a ex hendrerit commodo sed at nisi. Donec vitae laoreet felis. Suspendisse dignissim tellus sit amet odio feugiat ornare. Etiam eget purus ac tortor vehicula consequat.', 1965, 'Female'),
(2, 'Herman Melville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pharetra arcu. Aenean sapien eros, dapibus in pellentesque at, eleifend id urna. Pellentesque a ante a ex hendrerit commodo sed at nisi. Donec vitae laoreet felis. Suspendisse dignissim tellus sit amet odio feugiat ornare. Etiam eget purus ac tortor vehicula consequat.', 1910, 'Male');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `author_id` int(11) NOT NULL,
  `publication_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `author_id`, `publication_date`) VALUES
(4, 'Harry Potter 1', 12, 1, '1999-10-11'),
(5, 'Harry Potter 3', 50, 1, '2005-10-12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
