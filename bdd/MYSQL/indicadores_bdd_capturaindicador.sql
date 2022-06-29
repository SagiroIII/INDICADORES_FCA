CREATE DATABASE  IF NOT EXISTS `indicadores_bdd` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `indicadores_bdd`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: indicadores_bdd
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `capturaindicador`
--

DROP TABLE IF EXISTS `capturaindicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `capturaindicador` (
  `idCapturaIndicador` int NOT NULL AUTO_INCREMENT,
  `DatosReal` float NOT NULL,
  `programa_idPrograma` int NOT NULL,
  `programa_nivelprograma_idNivelPrograma` int NOT NULL,
  `indicador_idIndicador` int NOT NULL,
  `usuarios_idUsuario` int NOT NULL,
  `periodo_idPeriodo` varchar(6) NOT NULL,
  PRIMARY KEY (`idCapturaIndicador`,`programa_idPrograma`,`programa_nivelprograma_idNivelPrograma`,`indicador_idIndicador`,`usuarios_idUsuario`,`periodo_idPeriodo`),
  KEY `fk_capturaindicador_programa1_idx` (`programa_idPrograma`,`programa_nivelprograma_idNivelPrograma`),
  KEY `fk_capturaindicador_indicador1_idx` (`indicador_idIndicador`),
  KEY `fk_capturaindicador_usuarios1_idx` (`usuarios_idUsuario`),
  KEY `fk_capturaindicador_periodo1_idx` (`periodo_idPeriodo`),
  CONSTRAINT `fk_capturaindicador_indicador1` FOREIGN KEY (`indicador_idIndicador`) REFERENCES `indicador` (`idIndicador`),
  CONSTRAINT `fk_capturaindicador_periodo1` FOREIGN KEY (`periodo_idPeriodo`) REFERENCES `periodo` (`idPeriodo`),
  CONSTRAINT `fk_capturaindicador_programa1` FOREIGN KEY (`programa_idPrograma`, `programa_nivelprograma_idNivelPrograma`) REFERENCES `programa` (`idPrograma`, `nivelprograma_idNivelPrograma`),
  CONSTRAINT `fk_capturaindicador_usuarios1` FOREIGN KEY (`usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capturaindicador`
--

LOCK TABLES `capturaindicador` WRITE;
/*!40000 ALTER TABLE `capturaindicador` DISABLE KEYS */;
/*!40000 ALTER TABLE `capturaindicador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-29 11:18:57
