-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 06 mars 2018 à 13:23
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `cfphpunit`
--
CREATE DATABASE IF NOT EXISTS `cfphpunit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cfphpunit`;

-- --------------------------------------------------------

--
-- Structure de la table `arti`
--

DROP TABLE IF EXISTS `arti`;
CREATE TABLE IF NOT EXISTS `arti` (
  `idarti` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `publie` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idarti`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arti`
--

INSERT INTO `arti` (`idarti`, `titre`, `texte`, `publie`) VALUES
(1, 'Orlando Sa en Chine, c\'est fait !', 'Comme nous vous l\'annoncions ce mercredi matin dans ce même article, le transfert d\'Orlando Sa en Chine sera bel et bien finalisé ce mercredi. C\'est Henan Jianye, 14e du championnat 2017 et sauvé de justesse au sein de l\'élite, qui s\'offrira l\'attaquant portugais. Tout est réglé pour ce transfert de dernière minute, il ne reste plus qu\'à attendre l\'officialisation du Standard et/ou d\'Henan Jianye pour considérer la transaction comme officielle.\r\n\r\n\r\nHenan Jianye a convaincu Sa et le Standard !\r\nRevirement de situation dans le dossier d\'Orlando Sa ! Alors que le Standard se fendait d\'un communiqué mardi après-midi précisant que le Portugais et le club avaient décidé de repousser les offres chinoises, ce mercredi, la donne a totalement changé !\r\nSelon nos informations, Orlando Sa serait sur le point de signer en Chine. Dans notre édition papier de ce mercredi, nous faisons état d\'une ultime offre repoussée par Bruno Venanzi en ce début de semaine. Cette offre de 7M€ émanait du club de Henan Jianye, basé dans la province du Zhengzhou, qui a terminé 14e du défunt championnat et coaché par le T1 croate, Dragan Talajic. C\'est bien dans ce même club que l\'attaquant de 29 ans pourrait finalement s\'engager !\r\n\r\nLe montant de la transaction s\'élèverait à 8M€. Il s\'agit donc d\'un énorme revirement de situation à quelques heures de la clôture du marché des transferts en Chine (ce mercredi 17h). Très affecté ces derniers jours par la volonté de sa direction de le retenir à Liège (où il avait encore un contrat de deux ans) alors qu\'une opportunité unique se présentait à lui, Orlando Sa aura donc accueilli avec soulagement le changement de cap opéré par les décideurs liégeois qui ont finalement compris qu\'il n\'était pas toujours bon de retenir un joueur contre son gré et ce, même si Orlando Sa aurait continué à se comporter en professionnel s\'il était resté à Sclessin.\r\n\r\nS\'il s\'agit d\'une énorme plus value financière, rappelons qu\'Orlando Sa est arrivé librement au Standard le 31 août 2016, ce départ n\'en reste pas moins une grosse perte sportive pour le Standard. Car qu\'on le veuille au non, le visage du Standard n\'est pas le même avec ou sans son meilleur buteur (10 buts cette saison, 30 en un an et demi et 62 matches disputés). Ricardo Sa Pinto devrait donc tenter de se qualifier pour les PO1 et remporter la Coupe le 17 mars prochain sans son meilleur attaquant même si à l\'heure actuelle, rien n\'est encore fait.', '2018-02-28 13:15:46'),
(2, 'Kim Kardashian ou la difficulté d’être devenue Kim K', 'Qu’on aime ou pas Kim Kardashian, impossible de nier le fait qu’elle est devenue en quelques années un véritable phénomène de société. Probablement l’une des femmes les plus influentes de la planète, elle est aussi à la tête d’un empire financier et cosmétique qui vaut des millions de dollars.\r\n\r\nC’est pour cela que la plus populaire des Kardashian s’est exprimée samedi dernier à la conférence Create & Cultivate à Los Angeles. «Les voyages gratuits, l’avion gratuit, tout gratuit…. j’adore partager !, confie Kim pour commencer. Quand je reçois gratuitement des choses, j’en donne littéralement à tous mes amis et à ma famille».\r\n\r\nLire aussi > Ce que la campagne pour #Yeezy6 dit du culte de la personnalité des Kardashian-West\r\n\r\n« Parfois je ne ressemble à rien »\r\nMais Kim a également parlé de la difficulté d’être devenue un personnage public archi-médiatisé. Parfois, la célébrité est un poids pour l’épouse de Kanye West. «Parfois je ne ressemble à rien. J’aimerais seulement pouvoir sortir manger des churros et n’avoir personne sur le dos», confie-t-elle en référence à tous les paparazzi l’entourant à chacune des ses sorties. Kim termine la conférence avec sa définition du bonheur, visiblement influencée par les événements passés à Paris. «Les choses matérielles ne me rendent plus heureuse, maintenant, confesse-t-elle. Pour mon anniversaire, Kanye m’a amené deux jours dans cet hôtel de l’Utah, nous avons dormi tout le séjour. C’était tellement amusant ! Tout le monde a parfois besoin de prendre une pause». Le nouveau visage de Kim K.', '2018-02-12 22:00:00'),
(3, 'Les hommes touchent au moins 5 fois par jour leurs parties intimes en toute conscience', 'Selon une étude commandée par la marque et réalisée par Ivox*, les hommes avouent se toucher les testicules de manière consciente fréquemment : 5.6 fois en moyenne par jour. Pourquoi ? pour 58.2% d\'entre eux, il s\'agit de les remettre en place. L’hygiène est la seconde raison invoquée (pour 49,9 % des répondants) suivie de près par les démangeaisons, qui est la troisième raison la plus invoquée (37,9 %).\r\n\r\nLa santé, comme notamment pour l’auto examen des testicules, arrive péniblement à la dernière place du classement, avec seulement 5,5 % des hommes belges la mentionnant pour justifier le fait de toucher leurs parties intimes. Or, le cancer des testicules est un des cancers le plus souvent diagnostiqué chez les jeunes hommes. Un auto-examen des testicules peut permettre de détecter très rapidement des modifications au niveau de ceux-ci et permet ainsi, en cas de problème, de commencer le traitement le plus tôt possible.\r\n\r\nPourtant, peu d\'hommes se sentent concernés : près de trois quarts des hommes belges interrogés (74,5 %) déclarent ne pas être au courant de l’existence d’une technique d’auto-examen des testicules. Et malgré l’arrivée officielle en 2011 de la fondation Movember en Belgique, seuls 26,3 % des hommes belges connaissent l’existence de cette fondation. the Movember Foundation est la plus grande organisation mondiale qui lutte pour la santé masculine. La fondation s\'attaque aux plus graves problèmes de santé auxquels sont confrontés les hommes tels le cancer de la prostate, le cancer des testicules, la santé mentale et la prévention du suicide. Plus d\'info sur l\'antenne belge de Movember, ici.\r\n\r\nA bon entendeur...\r\n\r\n* Enquête réalisée par iVOX auprès de 1000 hommes belges, échantillon représentatif en termes de langue, sexe, âge et diplômes. La marge d\'erreur est de 3,02 %.', '2017-01-31 22:00:00'),
(4, 'Marché de l\'art: tous les indicateurs repassent au vert, selon Artprice', 'Avec une progression de 20% en 2017, le marché de l\'art est au beau fixe et s\'affirme de plus en plus \"comme un véritable placement alternatif\", selon le rapport annuel d\'Artprice publié mercredi.\r\n\r\nAprès deux années de repli, le produit des ventes aux enchères de \"Fine Art\" dans le monde s\'est élevé à 14,9 milliards de dollars contre 12,45 milliards en 2016, indique le rapport du leader mondial des banques de données sur la cotation et les indices de l\'art, dont l\'AFP a l\'exclusivité.\r\n\r\nLe \"Fine Art\" comprend les peintures, sculptures, dessins, photographies, estampes, vidéos, installations, tapisseries. Antiquités, biens culturels anonymes et mobilier ne sont pas pris en compte.\r\n\r\nCette nette reprise touche le marché occidental comme le marché chinois et \"se ressent à travers toutes les gammes de prix\", même si ces performances ont été d\'abord réalisées de part et d\'autre grâce à des ventes records historiques.\r\n\r\n- Boom des transactions en ligne -\r\n\r\n\"Tous les indicateurs sont au vert comme jamais depuis trente ans\", souligne le président-fondateur d\'Artprice, Thierry Ehrmann, pointant notamment le \"parfait\" taux d\'invendus (34%). \"Les grandes puissances du marché de l\'art montrent, de concert, tous les signes d\'une croissance ferme et durable\", assure le rapport.\r\n\r\nLe redressement constaté est du en grande partie au dynamisme des marchés américains (+ 27%) et britannique (+ 13%). La vente record par Christie\'s à New York du \"Salvator Mundi\" de Léonard de Vinci (450 millions de dollars) a boosté les résultats aux Etats-Unis : cette transaction représente à elle seule 9% du marché américain et 3% du marché mondial.\r\n\r\nMalgré le record pour une oeuvre d’art en Asie (140 millions d\'euros) atteint par une série de douze paysages de Qi Bashi, la Chine a terminé l\'année 2017 en baisse de 8%. Avec 5,1 milliards de dollars de chiffre d\'affaires, elle devance de peu son rival américain (4,9 milliards de dollars).\r\n\r\nSigne du retour de la croissance, les excellents résultats du deuxième semestre 2017 dans les principaux pays: +53% pour les Etats-Unis, +48% pour la France, +26% pour la Grande-Bretagne, +20% pour la Chine, +18% pour l\'Allemagne.\r\n\r\nLa performance du marché français tient à la qualité des œuvres proposées, le nombre de lots vendus étant resté stable. Ainsi le seuil du million de dollars a été dépassé à 79 reprises, culminant à 29,5 millions, meilleure enchère en France depuis 2010.\r\n\r\nEn 20 ans, le marché mondial de l’art s\'est profondément transformé: le chiffre d’affaires a progressé de 456%, 59 pays sont acteurs au lieu de 34, le nombre d\'artistes a doublé, le nombre de lots mis en vente a progressé de 221% et celui de lots vendus de 128%.\r\n\r\n\"L’industrie muséale”, le fait que le nombre de création de musées ne cesse d\'augmenter, est le principal moteur de cette spectaculaire ascension, avec le boom de l\'art contemporain.\r\n\r\nMais l\'évolution la plus notable est la montée en puissance des transactions en ligne. 98% des 6.300 maisons de ventes dans le monde sont aujourd\'hui présentes sur internet. Elles n\'étaient que 3% en 2005.\r\n\r\n- \'Effet Léonard\'\r\n\r\nL\'année 2017 a été aussi marquée par des enchères records pour 37.000 artistes. Pour autant, moins d\'un millier d’œuvres ont passé le seuil du million de dollars et la moitié des 413.000 lots adjugés l\'an dernier l\'ont été à mille euros et moins.\r\n\r\nToutes les périodes sont en progression: + 92,6% pour l\'art ancien grâce à \"l\'effet Léonard\", +27% pour le 19e siècle, +24% pour l\'art moderne, +18,5% pour l\'art d\'après-guerre et +25% pour l\'art contemporain.\r\n\r\nSans surprise, Léonard de Vinci est en tête du Top 500 des artistes par produit de ventes. Il est suivi par Pablo Picasso, Jean-Michel Basquiat, Andy Warhol et Qi Baishi.\r\n\r\nLe top 10 est très composite avec 4 Chinois (Qi Baishi, Zhang Daqian, Fu Baoshi, Zao Wou-Ki), 3 européens (Léonard de Vinci, Picasso, Monet) et 3 américains (Cy Twombly, Basquiat et Warhol). Au total, figurent dans ce classement 231 artistes européens, 162 asiatiques, 82 nord-américains.', '2018-02-14 12:35:24');

-- --------------------------------------------------------

--
-- Structure de la table `categ`
--

DROP TABLE IF EXISTS `categ`;
CREATE TABLE IF NOT EXISTS `categ` (
  `idcateg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(60) NOT NULL COMMENT 'slug => titre sans espaces ni caractères spéciaux, il est UQ unique',
  `titre` varchar(60) NOT NULL,
  `description` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`idcateg`),
  UNIQUE KEY `slug_UNIQUE` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categ`
--

INSERT INTO `categ` (`idcateg`, `slug`, `titre`, `description`) VALUES
(1, 'economie', 'Économie', 'Il est impossible de fixer à cette école de pensée des contours précis, que ce soit en termes de dates, d’auteurs ou de thèses. Les auteurs postérieurs en ont donné des définitions différentes, incluant ou excluant certains auteurs et privilégiant certaines thèses, selon qu’ils souhaitaient présenter leurs propres positions comme en rupture avec les positions présumées « classiques » ou au contraire cohérentes avec elles.'),
(2, 'faits-divers', 'Faits Divers', 'Si leur importance paraît souvent secondaire, les faits divers peuvent parfois avoir une portée plus large. C\'est ainsi que l\'affaire Paul Voise est régulièrement présentée comme ayant joué un rôle dans le résultat de l\'élection présidentielle française de 2002.'),
(3, 'sports', 'Sports', 'Le sport est un ensemble d\'exercices physiques ou mentaux se pratiquant sous forme de jeux individuels ou collectifs pouvant donner lieu à des compétitions. Le sport est un phénomène quasi universel dans le temps et dans l\'espace humain. La Grèce antique, la Rome antique, Byzance, l\'Occident médiéval puis moderne, mais aussi l\'Amérique précolombienne ou l\'Asie, sont tous marqués par l\'importance du sport. Certaines périodes sont surtout marquées par des interdits.'),
(4, 'finance', 'Finance', 'La finance recouvre un domaine d\'activité — celui du financement — qui consiste à fournir l\'argent nécessaire à la réalisation d\'une opération économique. Ce domaine concerne aussi bien les individus, les ménages que les entreprises publiques ou privées, mais aussi les États.'),
(5, 'arts-et-divertissements', 'Arts et Divertissements', 'Un divertissement est une activité qui permet aux hommes d\'occuper leur temps libre en s\'amusant et de se détourner ainsi de leurs préoccupations. Les divertissements forment l\'essentiel de la famille plus large des loisirs : par exemple, une conversation, amicale et plutôt inattendue, entre anciens collaborateurs sera un loisir notable dans l\'entreprise sans être un divertissement.');

-- --------------------------------------------------------

--
-- Structure de la table `categ_has_arti`
--

DROP TABLE IF EXISTS `categ_has_arti`;
CREATE TABLE IF NOT EXISTS `categ_has_arti` (
  `categ_idcateg` int(10) UNSIGNED NOT NULL,
  `arti_idarti` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`categ_idcateg`,`arti_idarti`),
  KEY `fk_categ_has_arti_arti1_idx` (`arti_idarti`),
  KEY `fk_categ_has_arti_categ_idx` (`categ_idcateg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categ_has_arti`
--

INSERT INTO `categ_has_arti` (`categ_idcateg`, `arti_idarti`) VALUES
(1, 1),
(3, 1),
(2, 3),
(1, 4),
(5, 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categ_has_arti`
--
ALTER TABLE `categ_has_arti`
  ADD CONSTRAINT `fk_categ_has_arti_arti1` FOREIGN KEY (`arti_idarti`) REFERENCES `arti` (`idarti`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_categ_has_arti_categ` FOREIGN KEY (`categ_idcateg`) REFERENCES `categ` (`idcateg`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
