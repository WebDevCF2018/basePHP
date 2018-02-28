-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema exe_32
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema exe_32
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exe_32` DEFAULT CHARACTER SET utf8 ;
USE `exe_32` ;

-- -----------------------------------------------------
-- Table `exe_32`.`categ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_32`.`categ` (
  `idcateg` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` VARCHAR(60) NOT NULL COMMENT 'slug => titre sans espaces ni caractères spéciaux, il est UQ unique',
  `titre` VARCHAR(60) NOT NULL,
  `description` VARCHAR(600) NULL,
  PRIMARY KEY (`idcateg`),
  UNIQUE INDEX `slug_UNIQUE` (`slug` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_32`.`arti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_32`.`arti` (
  `idarti` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(100) NOT NULL,
  `texte` TEXT NOT NULL,
  `publie` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idarti`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_32`.`categ_has_arti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_32`.`categ_has_arti` (
  `categ_idcateg` INT UNSIGNED NOT NULL,
  `arti_idarti` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`categ_idcateg`, `arti_idarti`),
  INDEX `fk_categ_has_arti_arti1_idx` (`arti_idarti` ASC),
  INDEX `fk_categ_has_arti_categ_idx` (`categ_idcateg` ASC),
  CONSTRAINT `fk_categ_has_arti_categ`
    FOREIGN KEY (`categ_idcateg`)
    REFERENCES `exe_32`.`categ` (`idcateg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categ_has_arti_arti1`
    FOREIGN KEY (`arti_idarti`)
    REFERENCES `exe_32`.`arti` (`idarti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
