-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 nov. 2022 à 16:03
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
-- Base de données : `movie_db`
--
CREATE DATABASE IF NOT EXISTS `movie_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `movie_db`;

-- --------------------------------------------------------

--
-- Structure de la table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `directors`
--

INSERT INTO `directors` (`id`, `first_name`, `last_name`, `gender`, `nationality`, `birth_date`) VALUES
(1, 'George', 'Lucas', 'male', 'American', '1944-05-14'),
(2, 'David', 'Fincher', 'male', 'American', '1962-08-28'),
(3, 'Dan', 'Gilroy', 'male', 'American', '1959-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `director_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `poster`, `release_date`, `director_id`) VALUES
(1, 'Fight Club', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu pretium nunc. Proin vitae lorem odio. Phasellus a rutrum sem, laoreet convallis arcu. Ut quis lobortis ipsum. Mauris et tempus leo. Nulla ultrices fringilla rutrum. Aliquam congue iaculis augue, eu ultricies nisl varius a.', 'fightclub.jpg', '1999-10-04', 2),
(2, 'Seven', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu pretium nunc. Proin vitae lorem odio. Phasellus a rutrum sem, laoreet convallis arcu. Ut quis lobortis ipsum. Mauris et tempus leo. Nulla ultrices fringilla rutrum. Aliquam congue iaculis augue, eu ultricies nisl varius a.', 'seven.jpg', '1995-09-22', 2),
(3, 'Star Wars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu pretium nunc. Proin vitae lorem odio. Phasellus a rutrum sem, laoreet convallis arcu. Ut quis lobortis ipsum. Mauris et tempus leo. Nulla ultrices fringilla rutrum. Aliquam congue iaculis augue, eu ultricies nisl varius a.', 'starwars.jpg', '1999-05-19', 1),
(4, 'Nightcrawler', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu pretium nunc. Proin vitae lorem odio. Phasellus a rutrum sem, laoreet convallis arcu. Ut quis lobortis ipsum. Mauris et tempus leo. Nulla ultrices fringilla rutrum. Aliquam congue iaculis augue, eu ultricies nisl varius a.', 'nightcrawler.jpg', '2014-10-31', 3),
(6, 'Indiana Jones', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu pretium nunc. Proin vitae lorem odio. Phasellus a rutrum sem, laoreet convallis arcu. Ut quis lobortis ipsum. Mauris et tempus leo. Nulla ultrices fringilla rutrum. Aliquam congue iaculis augue, eu ultricies nisl varius a.', 'indiana.jpg', '1977-11-17', 1),
(13, 'Ready Player one', 'zefazoejfaozjefoajzeofj,aozjef', 'readyplayerone.jpg', '2018-08-03', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(8, 'simon', 'simon@gmail.com', '$2y$10$QtktqjR34yM1ZoVByGaMjOX1GiiM/PITI29HdtMyAIe9MbFJxmvCe'),
(9, 'pragya', 'pragya@gmail.com', '$2y$10$gDBQy1eHD/gAc0ulU7EeZ.yA7.f.k0nDzcmy.YOXtDuuzA5Jh5I5S');

-- --------------------------------------------------------

--
-- Structure de la table `watchlist`
--

CREATE TABLE `watchlist` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `watchlist`
--

INSERT INTO `watchlist` (`movie_id`, `user_id`) VALUES
(1, 9),
(2, 9),
(4, 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `director_id` (`director_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`movie_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`);

--
-- Contraintes pour la table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
