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
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `imagen` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'noimage.png',
  `fecha_alta` datetime DEFAULT NULL,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'FAM-A','FAMA',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(2,'CHI-NA','China',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(3,'GLO-BE','Globe',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(4,'TIG-ER','TIGER',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(5,'TRI-CIRCL','Tri-Circle',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(6,'USA-K','USA-K',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(7,'GUA-','Guatemala',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(8,'NIB-CO','Nibco',NULL,'noimage.png','2020-08-04 20:31:52',NULL,1),(9,'FSS-','F.S',NULL,'noimage.png','2020-09-28 16:25:54',NULL,1),(10,'LUN-KEN','Lunkenheim',NULL,'noimage.png','2020-09-28 16:26:10',NULL,1),(11,'URR-EA','URREA',NULL,'noimage.png','2020-09-28 16:26:49',NULL,1),(12,'STO-HAM','Stockham',NULL,'noimage.png','2020-09-28 16:27:16',NULL,1),(13,'WAL-WORTH','Walworth',NULL,'noimage.png','2020-09-28 16:27:41',NULL,1),(14,'SMI-TH','Smith',NULL,'noimage.png','2020-09-28 16:28:04',NULL,1),(15,'USA','USA',NULL,'noimage.png','2020-09-28 16:28:32',NULL,1),(16,'MIP-EL','Mipel',NULL,'noimage.png','2020-09-28 16:29:08',NULL,1),(17,'ITA-LY','Italy',NULL,'noimage.png','2020-09-28 16:29:56',NULL,1),(18,'OHI-BRASS','Ohio Brass',NULL,'noimage.png','2020-09-28 16:30:43',NULL,1),(19,'POW-WHI','Powell Whi',NULL,'noimage.png','2020-09-28 16:31:23',NULL,1),(20,'HAW-K','Hawk',NULL,'noimage.png','2020-09-28 16:31:57',NULL,1),(21,'OTR-OS','Otros',NULL,'noimage.png','2020-09-28 16:33:45',NULL,1),(22,'MAT-CO','Matco',NULL,'noimage.png','2020-09-28 16:34:26',NULL,1),(23,'REG-E','Rege',NULL,'noimage.png','2020-09-28 16:35:14',NULL,1),(24,'ING-TERRA','Inglaterra',NULL,'noimage.png','2020-09-28 16:36:10',NULL,1),(25,'DUR-AVAL','Duraval',NULL,'noimage.png','2020-09-28 16:37:12',NULL,1),(26,'RED-WHITE','Red White',NULL,'noimage.png','2020-09-28 16:39:21',NULL,1),(27,'PUB-CO','Pubco',NULL,'noimage.png','2020-09-28 16:42:13',NULL,1),(28,'JAP-ON','Japon',NULL,'noimage.png','2020-09-28 16:43:42',NULL,1),(29,'CRA-NE','Crane',NULL,'noimage.png','2020-09-28 16:45:27',NULL,1),(30,'CRO-WN','Crown',NULL,'noimage.png','2020-11-30 13:08:14',NULL,1),(31,'DUR-MAN','Durman',NULL,'noimage.png','2021-07-15 16:07:06',NULL,1),(32,'KUV-AL','Kuval',NULL,'noimage.png','2021-10-11 11:46:33',NULL,1),(33,'ULT-RALON','Ultralon',NULL,'noimage.png','2022-02-03 16:15:45',NULL,1),(34,'HEL-BERT','HELBERT','','noimage.png','2022-10-05 10:45:20',NULL,1),(35,'CEL-ASA','Celasa',NULL,'noimage.png',NULL,NULL,1),(36,'MAS-ACA','Masaca','','noimage.png',NULL,NULL,1),(37,'ANC-LO','Anclo','','noimage.png',NULL,NULL,1),(38,'LAN-CO','Lanco','','noimage.png',NULL,NULL,1);
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:15:58
