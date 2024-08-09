-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: tubaguagt.com    Database: tubagua
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

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
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pais_id` int NOT NULL,
  `fecha_alta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'ALT-VER','Alta Verapaz',1,'2020-08-07 09:48:11',NULL,1),(2,'BAJ-VER','Baja Verapaz',1,'2020-08-07 09:48:11',NULL,1),(3,'CHI-MAL','Chimaltenango',1,'2020-08-07 09:48:11',NULL,1),(4,'CHI-QUI','Chiquimula',1,'2020-08-07 09:48:12',NULL,1),(5,'ELP-ROGRE','El Progreso ',1,'2020-08-07 09:48:12',NULL,1),(6,'ESC-UIN','Escuintla',1,'2020-08-07 09:48:12',NULL,1),(7,'GUA-TE','Guatemala',1,'2020-08-07 09:48:12',NULL,1),(8,'HUE-HUE','Huehuetenango',1,'2020-08-07 09:48:12',NULL,1),(9,'IZA-BAL','Izabal',1,'2020-08-07 09:48:12',NULL,1),(10,'JAL-APA','Jalapa',1,'2020-08-07 09:48:12',NULL,1),(11,'JUT-IAPA','Jutiapa',1,'2020-08-07 09:48:12',NULL,1),(12,'PET-EN','Peten',1,'2020-08-07 09:48:12',NULL,1),(13,'QUE-TZAL','Quetzaltenango',1,'2020-08-07 09:48:12',NULL,1),(14,'QUI-CHE','Quiche',1,'2020-08-07 09:48:12',NULL,1),(15,'REU-','Retalhuleu',1,'2020-08-07 09:48:12',NULL,1),(16,'SAC-ATEP','Sacatepequez',1,'2020-08-07 09:48:12',NULL,1),(17,'SAN-MAR','San Marcos',1,'2020-08-07 09:48:12',NULL,1),(18,'SAN-TAROS','Santa Rosa',1,'2020-08-07 09:48:12',NULL,1),(19,'SOL-OLA','Solola',1,'2020-08-07 09:48:13',NULL,1),(20,'SUC-HI','Suchitepequez ',1,'2020-08-07 09:48:13',NULL,1),(21,'TOT-O','Totonicapan',1,'2020-08-07 09:48:13',NULL,1),(22,'ZAC-APA','Zacapa',1,'2020-08-07 09:48:13',NULL,1),(23,'CIU-DAD','Ciudad',1,'2021-09-08 13:32:19',NULL,1);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:16:13
