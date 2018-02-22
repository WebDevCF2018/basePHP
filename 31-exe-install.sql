-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema exe_31
-- -----------------------------------------------------
-- schéma pour notre exe_31

-- -----------------------------------------------------
-- Schema exe_31
--
-- schéma pour notre exe_31
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exe_31` DEFAULT CHARACTER SET utf8 ;
USE `exe_31` ;

-- -----------------------------------------------------
-- Table `exe_31`.`auteur`
-- -----------------------------------------------------
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


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
