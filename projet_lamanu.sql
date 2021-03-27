-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 mars 2021 à 12:47
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_lamanu`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_news` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraphs` mediumtext NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_questions` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `questionQuizz` varchar(255) NOT NULL,
  `goodAnswers` varchar(255) NOT NULL,
  `badAnswers1` varchar(255) NOT NULL,
  `badAnswers2` varchar(255) NOT NULL,
  `badAnswers3` varchar(255) NOT NULL,
  `id_quizz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_questions`, `time`, `questionQuizz`, `goodAnswers`, `badAnswers1`, `badAnswers2`, `badAnswers3`, `id_quizz`) VALUES
(12, 0, 'Combien Saturne possede t-elle de lunes ?', '82', '54', '72', '34', 52),
(13, 0, 'Quelle est la plus grosse planete du systeme solaire ?', 'Jupiter', 'Saturne', 'Neptune', 'Uranus', 52),
(14, 0, 'Quelle est la planete la plus eloignee du Soleil ?', 'Neptune', 'Uranus', 'Saturne', 'Jupiter', 52),
(15, 0, 'Quelle est la temperature moyenne sur Mars ?', 'environ -65°', 'Environ -5°', 'Environ-30°', 'Environ -15°', 52),
(16, 0, 'Quelle age la Terre a t-elle ?', 'Environ 4,6 milliards d\'annees', 'Environ 3,6 milliards d\'annees', 'Environ 5,6 milliards d\'annees', 'Environ 10,6 milliards d\'annees', 52),
(17, 0, 'Comment nomme t-on Venus ?', 'L\'etoile du berger', 'Canopus', 'Betelgeuse', 'Altair', 52),
(18, 0, 'Combien Uranus possÃ¨de t-elle d\'anneaux ?', '13', '12', '14', '15', 52),
(19, 0, 'Quelle est la planÃ¨te la plus rapide du systeme solaire ?', 'Mercure', 'Terre', 'Mars', 'Venus', 52),
(21, 0, 'Laquelle de ces planetes est la plus ancienne ?', 'Pluton', 'Mars', 'Mercure', 'Eris', 52),
(22, 0, 'Laquelle de ces planetes est la plus ancienne ?', 'Pegasi 51', 'Kepler', 'Galileo', 'Janssen', 52),
(23, 0, 'Quelle est la galaxie la plus proche de la Voix Lactee ?', 'Galaxie du cigare', 'Petit Nuage de Magellan', 'Galaxie du Tournesol', 'Andromede', 53),
(24, 0, 'Combien y a t-il d\'etoiles dans la Voix Lactee ?', '200 Ã  400 milliards', '400 Ã  600 milliards', '600 Ã  800 milliards', '800 Ã  1000 milliards', 53),
(25, 0, 'Combien y a t-il de planetes dans la Voix Lactee ?', '50 milliards', '100 milliards', '150 milliards', '200 milliards', 53),
(26, 0, 'Combien de bras spiraux possede la Voix Lactee ?', '3', '4', '5', '6', 53),
(27, 0, 'Quel age a la Voix Lactee ?', 'Environ 10,6 milliards d\'annees', 'Environ 11,6 milliards d\'annees', 'Environ 12,6 milliards d\'annees', 'Environ 13,6 milliards d\'annees', 53),
(28, 0, 'Quel trou noir supermassif se situe au centre de notre galaxie ?', 'Sagittarius A*', 'M87*', 'Abell 400', 'OJ 287', 53),
(29, 0, 'Quel est le diametre de notre galaxie en annee lumiere(al) ?', 'Environ 60 al', 'Environ 90 al', 'Environ 120 al', 'Environ 150 al', 53),
(30, 0, 'Notre galaxie fait partie des galaxies :', 'Spirales', 'IrrÃ©guliÃ¨res', 'Lenticulaires', 'Elliptiques', 53);

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

CREATE TABLE `quizz` (
  `id_quizz` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_quizzTheme` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id_quizz`, `id_users`, `id_quizzTheme`, `title`) VALUES
(52, 20, 1, 'Quizz general'),
(53, 20, 3, 'Quizz general');

-- --------------------------------------------------------

--
-- Structure de la table `quizztheme`
--

CREATE TABLE `quizztheme` (
  `id_quizzTheme` int(11) NOT NULL,
  `themes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizztheme`
--

INSERT INTO `quizztheme` (`id_quizzTheme`, `themes`) VALUES
(1, 'Planetes'),
(2, 'SystemeSolaire'),
(3, 'VoixLactee'),
(4, 'Terre'),
(5, 'ObjetDangereux');

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

CREATE TABLE `results` (
  `id_results` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_quizz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `userActif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `pseudo`, `mail`, `password`, `admin`, `userActif`) VALUES
(12, 'FlorianAdmin', 'fllaronde@gmail.com', '$2y$10$NeUPqvsdh3PkgAfMw2DQB.szSV6I0zPYukeOyUXYsKVpVnhcv0qua', 1, 0),
(20, 'Test', 'test@gmail.com', '$2y$10$xfOVilcOSdM23evGgqP3v.UX0CAiEpBepUyB8uYRRCPpPyskQacc.', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `articles_users_FK` (`id_users`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`),
  ADD KEY `comments_articles_FK` (`id_news`),
  ADD KEY `comments_users0_FK` (`id_users`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_questions`),
  ADD KEY `questions_quizz_FK` (`id_quizz`);

--
-- Index pour la table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`id_quizz`),
  ADD KEY `quizz_users_FK` (`id_users`),
  ADD KEY `quizz_quizzTheme0_FK` (`id_quizzTheme`);

--
-- Index pour la table `quizztheme`
--
ALTER TABLE `quizztheme`
  ADD PRIMARY KEY (`id_quizzTheme`);

--
-- Index pour la table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id_results`),
  ADD KEY `results_users_FK` (`id_users`),
  ADD KEY `results_quizz0_FK` (`id_quizz`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `id_quizz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `quizztheme`
--
ALTER TABLE `quizztheme`
  MODIFY `id_quizzTheme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `results`
--
ALTER TABLE `results`
  MODIFY `id_results` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_articles_FK` FOREIGN KEY (`id_news`) REFERENCES `articles` (`id_news`),
  ADD CONSTRAINT `comments_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quizz_FK` FOREIGN KEY (`id_quizz`) REFERENCES `quizz` (`id_quizz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quizz`
--
ALTER TABLE `quizz`
  ADD CONSTRAINT `quizz_quizzTheme0_FK` FOREIGN KEY (`id_quizzTheme`) REFERENCES `quizztheme` (`id_quizzTheme`),
  ADD CONSTRAINT `quizz_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_quizz0_FK` FOREIGN KEY (`id_quizz`) REFERENCES `quizz` (`id_quizz`),
  ADD CONSTRAINT `results_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
