-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 fév. 2018 à 10:13
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exe_31`
--
CREATE DATABASE IF NOT EXISTS `exe_31` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE exe_31;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS "auteur" ;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idauteur`, `pseudo`, `mdp`, `nom`, `prenom`) VALUES
(1, 'VictorHugo', 'VictorHugo', 'Hugo', 'Victor'),
(2, 'JohnFante', 'JohnFante', 'Fante', 'John'),
(3, 'JeanPaulSartre', 'JeanPaulSartre', 'Sartre', 'Jean-Paul'),
(4, 'MarkTwain', 'MarkTwain', 'Twain', 'Mark');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS "image" ;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`idimage`, `description`, `url`, `livre_idlivre`) VALUES
(2, 'Gallimard', 'https://media.senscritique.com/media/000000135024/source_big/Choses_vues.gif', 1),
(3, 'Détruire la misère - V.H.', 'http://cdn-scraplogo.pearltrees.com/24/af/24af6a30b18eea2bcb60b84dbc1a8451-pearlsquare.jpg?v=2', 2),
(4, 'chien stupide', 'https://www.daily-passions.com/wp-content/uploads/2018/01/MonchienStupide-1-488x520.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS "livre" ;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idlivre`, `titre`, `description`, `parution`, `auteur_idauteur`) VALUES
(1, 'Choses vues', 'Choses vues est un recueil de notes et de mémoires de Victor Hugo, publié à titre posthume sous la forme de deux séries, en 1887 et en 1900.\r\n\r\nDans ce recueil, Hugo relate les événements survenus au cours de son existence, par exemple la mort de Talleyrand, le Retour des cendres de Napoléon, le procès de l\'affaire Teste-Cubières, la fuite de Louis-Philippe après la révolution de 1848, la chute de Napoléon III ou l\'avènement de la Troisième République.', '1900-02-05', 1),
(2, 'Détruire la misère', 'Je ne suis pas, messieurs, de ceux qui croient qu’on peut supprimer la souffrance en ce monde ; la souffrance est une loi divine ; mais je suis de ceux qui pensent et qui affirment qu’on peut détruire la misère.\r\n\r\nRemarquez-le bien, messieurs, je ne dis pas diminuer, amoindrir, limiter, circonscrire, je dis détruire. La misère est une maladie du corps social comme la lèpre était une maladie du corps humain...', '1849-10-10', 1),
(3, 'Mon chien Stupide', 'L\'irruption d\'un chien au comportement imprévisible, ses nouveaux propriétaires l\'appelleront Stupide, dans la vie d\'un romancier quinquagénaire, Henry J. Molise, et de sa famille au bord du Pacifique. Le comique y côtoie le tragique. Le souvenir d\'un autre chien, Rocco hante aussi le narrateur. C\'est le moment de commencer l\'amer bilan de sa vie.', '1987-01-01', 2),
(4, 'L\'Infortuné Fiancé d\'Aurélia', 'Le narrateur anonyme de l\'histoire a reçu un courrier d\'une jeune femme, Aurélia Maria, qui lui demande conseil au sujet de son fiancé. Ce dernier, dont elle est très amoureuse...', '1864-02-26', 4);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
