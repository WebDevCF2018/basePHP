-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 fév. 2018 à 15:21
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `affiche`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `temps` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `texte`, `auteur`, `temps`) VALUES
(1, 'dfsg', 'dfgfh', 'moi', '2018-02-16 13:47:45'),
(2, 'Mon premier article', '— Affiche un message et termine le script courant', 'Mike', '2018-02-20 14:01:24'),
(3, 'coucou', 'dfggf tefyt rgyhgyh', 'Lulu  !', '2018-02-20 14:03:36'),
(4, 'dfyh', 'gtjh', 'ghkjkuikl', '2018-02-20 14:04:37'),
(5, '11111111', 'kljklj', 'kljklj', '2018-02-20 14:05:39'),
(6, 'vfh', 'gb', 'dgfbh', '2018-02-20 14:07:46'),
(7, 'cdvfbg', 'dgfbh', 'vgfbhn', '2018-02-20 14:07:50'),
(8, 'dfhdgfh', 'gfbhngrth', 'rghtghghrtgh rgfhrtgfh', '2018-02-20 14:07:56'),
(9, 'gfh', 'dfgryh', 'rgyuyu', '2018-02-20 14:20:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
