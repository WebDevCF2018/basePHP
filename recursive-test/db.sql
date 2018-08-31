-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 31 août 2018 à 14:07
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `recursive`
--
CREATE DATABASE IF NOT EXISTS `recursive` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `recursive`;

-- --------------------------------------------------------

--
-- Structure de la table `categs`
--

DROP TABLE IF EXISTS `categs`;
CREATE TABLE IF NOT EXISTS `categs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(180) NOT NULL,
  `niveau` int(10) UNSIGNED NOT NULL,
  `ordre` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categs`
--

INSERT INTO `categs` (`id`, `titre`, `niveau`, `ordre`) VALUES
(1, 'Premier', 0, NULL),
(2, 'Deuxième', 0, NULL),
(3, 'Troisième', 0, NULL),
(4, 's-premier-1', 1, NULL),
(5, 's-premier-2', 1, NULL),
(6, 's-deuxième-1', 2, NULL),
(7, 's-deuxième-2', 2, NULL),
(8, 's-deuxième-3', 2, NULL),
(9, 's-troisième-1', 3, NULL),
(10, 'ss-premier-1-1', 4, NULL),
(11, 'ss-premier-1-2', 4, NULL),
(12, 'ss-premier-2-1', 5, NULL),
(13, 'ss-premier-2-2', 5, NULL),
(14, 'ss-premier-2-3', 5, NULL),
(15, 'ss-premier-2-2-1', 13, NULL),
(16, 'ss-premier-2-2-2', 13, NULL),
(17, 'ss-premier-2-2-3', 13, NULL);
COMMIT;
