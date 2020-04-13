SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `dwaya` ;
CREATE SCHEMA IF NOT EXISTS `dwaya` ;
USE `dwaya` ;

-- -----------------------------------------------------
-- Table `dwaya`.`wilaya`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`wilaya` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`wilaya` (
  `idwilaya` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_wilaya` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idwilaya`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dwaya`.`commune`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`commune` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`commune` (
  `idcommune` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_commune` VARCHAR(45) NOT NULL,
  `idwilaya` INT(11) NOT NULL,
  PRIMARY KEY (`idcommune`, `idwilaya`),
  CONSTRAINT `fk_commune_wilaya1`
    FOREIGN KEY (`idwilaya`)
    REFERENCES `dwaya`.`wilaya` (`idwilaya`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_commune_wilaya1_idx` ON `dwaya`.`commune` (`idwilaya` ASC);


-- -----------------------------------------------------
-- Table `dwaya`.`quartie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`quartie` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`quartie` (
  `idquartie` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_quartie` VARCHAR(45) NOT NULL,
  `idcommune` INT(11) NOT NULL,
  PRIMARY KEY (`idquartie`, `idcommune`),
  CONSTRAINT `fk_quartie_commune1`
    FOREIGN KEY (`idcommune`)
    REFERENCES `dwaya`.`commune` (`idcommune`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_quartie_commune1_idx` ON `dwaya`.`quartie` (`idcommune` ASC);


-- -----------------------------------------------------
-- Table `dwaya`.`specialite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`specialite` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`specialite` (
  `idspecialite` INT NOT NULL AUTO_INCREMENT,
  `nom_sep` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idspecialite`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dwaya`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`users` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`users` (
  `idusers` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_user` VARCHAR(45) NULL,
  `prenom_user` VARCHAR(45) NULL,
  `add_user` VARCHAR(100) NULL,
  `email_user` VARCHAR(100) NOT NULL,
  `tel_user` VARCHAR(20) NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `code_confirme` VARCHAR(10) NOT NULL,
  `active` BLOB NOT NULL,
  `accept` BLOB NOT NULL,
  `niveau` INT(2) NOT NULL,
  `idquartie` INT(11) NULL,
  `idspecialite` INT NULL,
  PRIMARY KEY (`idusers`),
  CONSTRAINT `fk_users_quartie1`
    FOREIGN KEY (`idquartie`)
    REFERENCES `dwaya`.`quartie` (`idquartie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_specialite1`
    FOREIGN KEY (`idspecialite`)
    REFERENCES `dwaya`.`specialite` (`idspecialite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `username_UNIQUE` ON `dwaya`.`users` (`username` ASC);

CREATE UNIQUE INDEX `email_user_UNIQUE` ON `dwaya`.`users` (`email_user` ASC);

CREATE INDEX `fk_users_quartie1_idx` ON `dwaya`.`users` (`idquartie` ASC);

CREATE INDEX `fk_users_specialite1_idx` ON `dwaya`.`users` (`idspecialite` ASC);


-- -----------------------------------------------------
-- Table `dwaya`.`type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`type` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`type` (
  `idtype` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_type` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idtype`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dwaya`.`medicament`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`medicament` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`medicament` (
  `idmedicament` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_medicament` VARCHAR(100) NOT NULL,
  `labo_medicament` VARCHAR(100) NOT NULL,
  `idtype` INT(11) NOT NULL,
  PRIMARY KEY (`idmedicament`, `idtype`),
  CONSTRAINT `fk_medicament_type1`
    FOREIGN KEY (`idtype`)
    REFERENCES `dwaya`.`type` (`idtype`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_medicament_type1_idx` ON `dwaya`.`medicament` (`idtype` ASC);


-- -----------------------------------------------------
-- Table `dwaya`.`ordonnance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`ordonnance` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`ordonnance` (
  `idordonnance` INT NOT NULL AUTO_INCREMENT,
  `num_ordonnance` INT(11) NOT NULL,
  `data_ordonnance` DATE NOT NULL,
  `data_achet_ord` DATE NULL,
  `id_med` INT(11) NOT NULL,
  `id_patient` INT(11) NOT NULL,
  `valide_par` INT(11) NULL,
  PRIMARY KEY (`idordonnance`, `id_med`, `id_patient`),
  CONSTRAINT `fk_ordonnance_users1`
    FOREIGN KEY (`id_med`)
    REFERENCES `dwaya`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordonnance_users2`
    FOREIGN KEY (`id_patient`)
    REFERENCES `dwaya`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordonnance_users3`
    FOREIGN KEY (`valide_par`)
    REFERENCES `dwaya`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_ordonnance_users1_idx` ON `dwaya`.`ordonnance` (`id_med` ASC);

CREATE INDEX `fk_ordonnance_users2_idx` ON `dwaya`.`ordonnance` (`id_patient` ASC);

CREATE INDEX `fk_ordonnance_users3_idx` ON `dwaya`.`ordonnance` (`valide_par` ASC);


-- -----------------------------------------------------
-- Table `dwaya`.`medicament_has_ordonnance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`medicament_has_ordonnance` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`medicament_has_ordonnance` (
  `idmedicament` INT(11) NOT NULL,
  `idordonnance` INT NOT NULL,
  `quantite` INT(3) NOT NULL,
  PRIMARY KEY (`idmedicament`, `idordonnance`),
  CONSTRAINT `fk_medicament_has_ordonnance1_medicament1`
    FOREIGN KEY (`idmedicament`)
    REFERENCES `dwaya`.`medicament` (`idmedicament`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicament_has_ordonnance1_ordonnance1`
    FOREIGN KEY (`idordonnance`)
    REFERENCES `dwaya`.`ordonnance` (`idordonnance`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_medicament_has_ordonnance1_ordonnance1_idx` ON `dwaya`.`medicament_has_ordonnance` (`idordonnance` ASC);

CREATE INDEX `fk_medicament_has_ordonnance1_medicament1_idx` ON `dwaya`.`medicament_has_ordonnance` (`idmedicament` ASC);


-- -----------------------------------------------------
-- Table `dwaya`.`disponiblite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dwaya`.`disponiblite` ;

CREATE TABLE IF NOT EXISTS `dwaya`.`disponiblite` (
  `idmedicament` INT(11) NOT NULL,
  `id_ph` INT(11) NOT NULL,
  `quantite` INT(10) NOT NULL,
  `prix_med` FLOAT NOT NULL,
  PRIMARY KEY (`idmedicament`, `id_ph`),
  CONSTRAINT `fk_medicament_has_users_medicament1`
    FOREIGN KEY (`idmedicament`)
    REFERENCES `dwaya`.`medicament` (`idmedicament`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicament_has_users_users1`
    FOREIGN KEY (`id_ph`)
    REFERENCES `dwaya`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_medicament_has_users_users1_idx` ON `dwaya`.`disponiblite` (`id_ph` ASC);

CREATE INDEX `fk_medicament_has_users_medicament1_idx` ON `dwaya`.`disponiblite` (`idmedicament` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
