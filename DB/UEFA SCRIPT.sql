CREATE DATABASE  IF NOT EXISTS `uefa` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `uefa`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: progra4db.cmzh0m6dfbbz.us-east-1.rds.amazonaws.com    Database: uefa
-- ------------------------------------------------------
-- Server version	8.0.28

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `CEDULA` varchar(20) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  PRIMARY KEY (`CEDULA`),
  UNIQUE KEY `CEDULA_UNIQUE` (`CEDULA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES ('111','698d51a19d8a121ce581499d7b701668');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipos` (
  `NOMBRE` varchar(50) NOT NULL,
  `PAIS` varchar(50) NOT NULL,
  `GRUPO` char(1) DEFAULT NULL,
  `PJ` int DEFAULT '0',
  `PG` int DEFAULT '0',
  `PP` int DEFAULT '0',
  `PE` int DEFAULT '0',
  `GF` int DEFAULT '0',
  `GC` int DEFAULT '0',
  `GD` int DEFAULT '0',
  `PTS` int DEFAULT '0',
  PRIMARY KEY (`NOMBRE`),
  UNIQUE KEY `NOMBRE_UNIQUE` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos`
--

LOCK TABLES `equipos` WRITE;
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` VALUES ('ATLETICO','ESPAÑA','F',0,0,0,0,0,0,0,0),('BORUSSIA','ALEMANIA','F',0,0,0,0,0,0,0,0),('BRUGGE','BELGICA','C',0,0,0,0,0,0,0,0),('CARTAGO','COSTA RICA','F',0,0,0,0,0,0,0,0),('CHELSEA','INGLATERRA','D',0,0,0,0,0,0,0,0),('CITY','INGLATERRA','D',0,0,0,0,0,0,0,0),('DORTMUND','ALEMANIA','A',1,1,0,0,2,1,1,3),('DYNAMO','UCRANIA','A',2,0,2,0,2,5,-3,0),('HEREDIA','COSTA RICA','B',0,0,0,0,0,0,0,0),('INTER','ITALIA','C',0,0,0,0,0,0,0,0),('JUVENTUS','ITALIA','C',0,0,0,0,0,0,0,0),('LDA','COSTA RICA','C',0,0,0,0,0,0,0,0),('LEIPZIG','ALEMANIA','A',1,0,0,1,1,1,0,1),('LIVERPOOL','INGLATERRA','B',0,0,0,0,0,0,0,0),('LOSC','FRANCIA','E',0,0,0,0,0,0,0,0),('MADRID','ESPAÑA','B',0,0,0,0,0,0,0,0),('MALMO','SUECIA','E',0,0,0,0,0,0,0,0),('MILAN','ITALIA','H',0,0,0,0,0,0,0,0),('PARIS','FRANCIA','H',0,0,0,0,0,0,0,0),('PORTO','PORTUGAL','F',0,0,0,0,0,0,0,0),('ROMA','ITALIA','D',0,0,0,0,0,0,0,0),('SALZBURG','AUSTRIA','A',2,1,0,1,4,2,2,4),('SAPRISSA','COSTA RICA','G',0,0,0,0,0,0,0,0),('SEVILLA','ESPAÑA','E',0,0,0,0,0,0,0,0),('SHAKHTAR','UCRANIA','G',0,0,0,0,0,0,0,0),('SHERIFF','MOLDAVIA','G',0,0,0,0,0,0,0,0),('SPORTING','PORTUGAL','E',0,0,0,0,0,0,0,0),('UNITED','INGLATERRA','H',0,0,0,0,0,0,0,0),('VILLAREAL','ESPAÑA','H',0,0,0,0,0,0,0,0),('WOLFBURG','ALEMANIA','B',0,0,0,0,0,0,0,0),('YOUNG','SUIZA','G',0,0,0,0,0,0,0,0),('ZANIT','RUSIA','D',0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_a`
--

DROP TABLE IF EXISTS `partidos_a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_a` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS1` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS2` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_a`
--

LOCK TABLES `partidos_a` WRITE;
/*!40000 ALTER TABLE `partidos_a` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_b`
--

DROP TABLE IF EXISTS `partidos_b`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_b` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS10` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS20` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_b`
--

LOCK TABLES `partidos_b` WRITE;
/*!40000 ALTER TABLE `partidos_b` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_b` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_c`
--

DROP TABLE IF EXISTS `partidos_c`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_c` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS100` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS200` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_c`
--

LOCK TABLES `partidos_c` WRITE;
/*!40000 ALTER TABLE `partidos_c` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_c` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_d`
--

DROP TABLE IF EXISTS `partidos_d`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_d` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS1000` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS2000` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_d`
--

LOCK TABLES `partidos_d` WRITE;
/*!40000 ALTER TABLE `partidos_d` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_d` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_e`
--

DROP TABLE IF EXISTS `partidos_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_e` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS10000` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS20000` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_e`
--

LOCK TABLES `partidos_e` WRITE;
/*!40000 ALTER TABLE `partidos_e` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_e` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_f`
--

DROP TABLE IF EXISTS `partidos_f`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_f` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS100000` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS200000` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_f`
--

LOCK TABLES `partidos_f` WRITE;
/*!40000 ALTER TABLE `partidos_f` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_f` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_g`
--

DROP TABLE IF EXISTS `partidos_g`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_g` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS1000000` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS2000000` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_g`
--

LOCK TABLES `partidos_g` WRITE;
/*!40000 ALTER TABLE `partidos_g` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_g` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos_h`
--

DROP TABLE IF EXISTS `partidos_h`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos_h` (
  `ID_PARTIDO` int NOT NULL AUTO_INCREMENT,
  `LOCAL` varchar(50) NOT NULL,
  `VISITANTE` varchar(50) NOT NULL,
  `GOLES_LOCAL` int DEFAULT '0',
  `GOLES_VISITANTE` int DEFAULT '0',
  PRIMARY KEY (`ID_PARTIDO`),
  UNIQUE KEY `ID_PARTIDO_UNIQUE` (`ID_PARTIDO`),
  KEY `fk_PARTIDOS_EQUIPOS1_idx` (`LOCAL`),
  KEY `fk_PARTIDOS_EQUIPOS2_idx` (`VISITANTE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS10000000` FOREIGN KEY (`LOCAL`) REFERENCES `equipos` (`NOMBRE`),
  CONSTRAINT `fk_PARTIDOS_EQUIPOS20000000` FOREIGN KEY (`VISITANTE`) REFERENCES `equipos` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos_h`
--

LOCK TABLES `partidos_h` WRITE;
/*!40000 ALTER TABLE `partidos_h` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos_h` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-18 21:39:21
