CREATE TABLE IF NOT EXISTS `exe_31`.`auteur` (
  `idauteur` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'clef primaire (PK ), on choisit toujours l\'unsigned (UN) et l\'auto incrément (AI)',
  `pseudo` VARCHAR(60) NOT NULL COMMENT 'contient le le pseudo de l\'utilisateur en varchar 60 (s\'adapte si le pseudo est plus court => gain de taille). On le met en unique (UQ), ce qui empèche d\'avoir 2 pseudos identiques',
  `mdp` VARCHAR(64) NOT NULL COMMENT 'mot de passe',
  `nom` VARCHAR(80) NOT NULL,
  `prenom` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`idauteur`),
  UNIQUE INDEX `username_UNIQUE` (`pseudo` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_31`.`livre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_31`.`livre` (
  `idlivre` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(120) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `parution` DATE NOT NULL,
  `auteur_idauteur` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idlivre`),
  INDEX `fk_livre_auteur_idx` (`auteur_idauteur` ASC),
  CONSTRAINT `fk_livre_auteur`
    FOREIGN KEY (`auteur_idauteur`)
    REFERENCES `exe_31`.`auteur` (`idauteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_31`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_31`.`image` (
  `idimage` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(60) NULL,
  `url` VARCHAR(300) NOT NULL,
  `livre_idlivre` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idimage`),
  INDEX `fk_image_livre1_idx` (`livre_idlivre` ASC),
  CONSTRAINT `fk_image_livre1`
    FOREIGN KEY (`livre_idlivre`)
    REFERENCES `exe_31`.`livre` (`idlivre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `auteur` (`idauteur`, `pseudo`, `mdp`, `nom`, `prenom`) VALUES
(1, 'VictorHugo', 'VictorHugo', 'Hugo', 'Victor'),
(2, 'JohnFante', 'JohnFante', 'Fante', 'John'),
(3, 'JeanPaulSartre', 'JeanPaulSartre', 'Sartre', 'Jean-Paul'),
(4, 'MarkTwain', 'MarkTwain', 'Twain', 'Mark');

INSERT INTO `livre` (`idlivre`, `titre`, `description`, `parution`, `auteur_idauteur`) VALUES
(1, 'Choses vues', 'Choses vues est un recueil de notes et de mémoires de Victor Hugo, publié à titre posthume sous la forme de deux séries, en 1887 et en 1900.\r\n\r\nDans ce recueil, Hugo relate les événements survenus au cours de son existence, par exemple la mort de Talleyrand, le Retour des cendres de Napoléon, le procès de l\'affaire Teste-Cubières, la fuite de Louis-Philippe après la révolution de 1848, la chute de Napoléon III ou l\'avènement de la Troisième République.', '1900-02-05', 1),
(2, 'Détruire la misère', 'Je ne suis pas, messieurs, de ceux qui croient qu’on peut supprimer la souffrance en ce monde ; la souffrance est une loi divine ; mais je suis de ceux qui pensent et qui affirment qu’on peut détruire la misère.\r\n\r\nRemarquez-le bien, messieurs, je ne dis pas diminuer, amoindrir, limiter, circonscrire, je dis détruire. La misère est une maladie du corps social comme la lèpre était une maladie du corps humain...', '1849-10-10', 1),
(3, 'Mon chien Stupide', 'L\'irruption d\'un chien au comportement imprévisible, ses nouveaux propriétaires l\'appelleront Stupide, dans la vie d\'un romancier quinquagénaire, Henry J. Molise, et de sa famille au bord du Pacifique. Le comique y côtoie le tragique. Le souvenir d\'un autre chien, Rocco hante aussi le narrateur. C\'est le moment de commencer l\'amer bilan de sa vie.', '1987-01-01', 2),
(4, 'L\'Infortuné Fiancé d\'Aurélia', 'Le narrateur anonyme de l\'histoire a reçu un courrier d\'une jeune femme, Aurélia Maria, qui lui demande conseil au sujet de son fiancé. Ce dernier, dont elle est très amoureuse...', '1864-02-26', 4);

INSERT INTO `image` (`idimage`, `description`, `url`, `livre_idlivre`) VALUES
(2, 'Gallimard', 'https://media.senscritique.com/media/000000135024/source_big/Choses_vues.gif', 1),
(3, 'Détruire la misère - V.H.', 'http://cdn-scraplogo.pearltrees.com/24/af/24af6a30b18eea2bcb60b84dbc1a8451-pearlsquare.jpg?v=2', 2),
(4, 'chien stupide', 'https://www.daily-passions.com/wp-content/uploads/2018/01/MonchienStupide-1-488x520.jpg', 3);