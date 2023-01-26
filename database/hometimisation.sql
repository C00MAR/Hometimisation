-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 03 juin 2022 à 14:49
-- Version du serveur : 5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hometimisation`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `articles_id` int(11) NOT NULL,
  `articles_title` varchar(255) NOT NULL,
  `articles_content` text NOT NULL,
  `articles_img_link` varchar(255) NOT NULL,
  `articles_theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`articles_id`, `articles_title`, `articles_content`, `articles_img_link`, `articles_theme`) VALUES
(14, 'Ecologie', '<p>qsdfqsd</p>', 'img-blog/', 'ecolo'),
(15, 'Economie', '<p>sfsdfsdf</p>', 'img-blog/', 'econo'),
(16, 'News', '<p>news</p>', 'img-blog/', 'news');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_name` varchar(25) NOT NULL,
  `review_title` varchar(100) NOT NULL,
  `review_star` int(1) NOT NULL,
  `review_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`review_id`, `review_name`, `review_title`, `review_star`, `review_comment`) VALUES
(1, 'Marc', 'titre', 4, 'Test Test'),
(3, 'MOUREAU', 'TITLE', 2, 'sdfhnsoikfhgndos hodfghb douf ghodfhgdf '),
(4, 'MOUREAU', 'TITLE', 2, 'dsfsdfsdfsdfsfsd');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_nom` varchar(50) NOT NULL,
  `users_prenom` varchar(50) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_referal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_nom`, `users_prenom`, `users_email`, `users_password`, `users_referal`) VALUES
(1, 'root', 'root', 'root@root', '$2y$10$YvxBaayydwIS3GspPfUFXe7GrLdv94dIUKvb1VFK75fe3wSZa/n26', 'SQB52'),
(2, '', '', '', '$2y$10$fDkZxzljG/NAY21v/4nDx.8Oz6yoV475yCFK5pKjTG/.kPHt4GPjq', 'SQB52'),
(3, 'qsdqsd', 'qsdq', 'sd@sd.Com', '$2y$10$IzzGVStOPKeSpZhFPT3kQuetOxnuwN6MQw6I9U9hiYr..IpBBNbHK', 'SQB52'),
(4, '', '', '', '$2y$10$FDm8qAX/V3SAHHOhp9SEAeuSMg6KKRZaQ9/f.iGfeRStLlYW7JeD2', 'SQB52'),
(5, 'sdf', 'sdf', 'sdf@sdf.sd', '$2y$10$z6MfXWitda/EUbmAhHupBeda30FhzqJTUoKFqbwZ/MEYQ2yKA.hwG', 'SQB52'),
(6, 'qsd', 'qsd', 'qsd@qsd.qsd', '$2y$10$VK5xBH2UHnemcdX3bVD/5OLRoi7b8o4hC5kCaH8ubS4FLe1T1A.zy', 'document.write(generateRandomString(6))'),
(7, 'qsd', 'qsd', 'qsd@sd.qsd', '$2y$10$1Xkb/o5wzEqyhyR1/hU/veawiE9y4At4YtJnyITTdlr/rhRJ7Kivq', 'document.write(generateRandomString(6))'),
(8, 'qsd', 'qsd', 'qsd@sd.qsd', '$2y$10$.y.Q5iKagthtg2SKq2D9HOFduR2/7NAkKqfka8mdcRCmVdgGarZma', '<script>result1</script>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `review_id` (`review_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `articles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
