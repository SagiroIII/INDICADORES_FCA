-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema indicadores_bdd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema indicadores_bdd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `indicadores_bdd` DEFAULT CHARACTER SET utf8mb3 ;
USE `indicadores_bdd` ;

-- -----------------------------------------------------
-- Table `indicadores_bdd`.`indicador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores_bdd`.`indicador` (
  `idIndicador` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Meta` FLOAT NOT NULL,
  `Descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idIndicador`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `indicadores_bdd`.`nivelprograma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores_bdd`.`nivelprograma` (
  `idNivelPrograma` INT NOT NULL AUTO_INCREMENT,
  `NivelPrograma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNivelPrograma`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `indicadores_bdd`.`programa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores_bdd`.`programa` (
  `idPrograma` INT NOT NULL AUTO_INCREMENT,
  `Programa` VARCHAR(45) NOT NULL,
  `nivelprograma_idNivelPrograma` INT NOT NULL,
  PRIMARY KEY (`idPrograma`, `nivelprograma_idNivelPrograma`),
  INDEX `fk_programa_nivelprograma_idx` (`nivelprograma_idNivelPrograma` ASC) VISIBLE,
  CONSTRAINT `fk_programa_nivelprograma`
    FOREIGN KEY (`nivelprograma_idNivelPrograma`)
    REFERENCES `indicadores_bdd`.`nivelprograma` (`idNivelPrograma`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `indicadores_bdd`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores_bdd`.`usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `indicadores_bdd`.`periodo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores_bdd`.`periodo` (
  `idPeriodo` VARCHAR(6) NOT NULL,
  `Periodo` INT NOT NULL,
  `Semestre` INT NOT NULL,
  PRIMARY KEY (`idPeriodo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `indicadores_bdd`.`capturaindicador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores_bdd`.`capturaindicador` (
  `idCapturaIndicador` INT NOT NULL AUTO_INCREMENT,
  `DatosReal` FLOAT NOT NULL,
  `programa_idPrograma` INT NOT NULL,
  `programa_nivelprograma_idNivelPrograma` INT NOT NULL,
  `indicador_idIndicador` INT NOT NULL,
  `usuarios_idUsuario` INT NOT NULL,
  `periodo_idPeriodo` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`idCapturaIndicador`, `programa_idPrograma`, `programa_nivelprograma_idNivelPrograma`, `indicador_idIndicador`, `usuarios_idUsuario`, `periodo_idPeriodo`),
  INDEX `fk_capturaindicador_programa1_idx` (`programa_idPrograma` ASC, `programa_nivelprograma_idNivelPrograma` ASC) VISIBLE,
  INDEX `fk_capturaindicador_indicador1_idx` (`indicador_idIndicador` ASC) VISIBLE,
  INDEX `fk_capturaindicador_usuarios1_idx` (`usuarios_idUsuario` ASC) VISIBLE,
  INDEX `fk_capturaindicador_periodo1_idx` (`periodo_idPeriodo` ASC) VISIBLE,
  CONSTRAINT `fk_capturaindicador_indicador1`
    FOREIGN KEY (`indicador_idIndicador`)
    REFERENCES `indicadores_bdd`.`indicador` (`idIndicador`),
  CONSTRAINT `fk_capturaindicador_programa1`
    FOREIGN KEY (`programa_idPrograma` , `programa_nivelprograma_idNivelPrograma`)
    REFERENCES `indicadores_bdd`.`programa` (`idPrograma` , `nivelprograma_idNivelPrograma`),
  CONSTRAINT `fk_capturaindicador_usuarios1`
    FOREIGN KEY (`usuarios_idUsuario`)
    REFERENCES `indicadores_bdd`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_capturaindicador_periodo1`
    FOREIGN KEY (`periodo_idPeriodo`)
    REFERENCES `indicadores_bdd`.`periodo` (`idPeriodo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
