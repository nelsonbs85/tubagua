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
-- Table structure for table `transporte`
--

DROP TABLE IF EXISTS `transporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transporte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `fecha_alta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL DEFAULT '0',
  `transporte_default` int DEFAULT '0',
  `transporte_secundario` int DEFAULT '0',
  `transporte_terciario` int DEFAULT '0',
  `kuval` int NOT NULL DEFAULT '0',
  `nuestro_transporte` int NOT NULL DEFAULT '0',
  `recogen` int NOT NULL DEFAULT '0',
  `vend_ruta` int NOT NULL DEFAULT '0',
  `otros` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transporte`
--

LOCK TABLES `transporte` WRITE;
/*!40000 ALTER TABLE `transporte` DISABLE KEYS */;
INSERT INTO `transporte` VALUES (1,1,'GUA-TEX','Guatex',NULL,'2020-08-07 11:15:47',NULL,1,1,0,0,0,0,0,0,0),(2,1,'AER-EO','Aereos',NULL,'2020-08-07 11:15:47',NULL,1,0,0,1,0,0,0,0,0),(3,1,'NUE-STRO','Nuestro',NULL,'2020-08-07 11:15:47',NULL,1,0,0,0,0,1,0,0,0),(4,1,'REC-OGEN','Recogen',NULL,'2020-08-07 11:15:48',NULL,1,0,0,0,0,0,1,0,0),(5,1,'CRO-PA','Cropa',NULL,'2020-08-07 11:15:49',NULL,1,0,1,0,0,0,0,0,0),(6,1,'VEN-RUTA','Vend Ruta',NULL,'2020-10-02 11:15:49',NULL,1,0,0,0,0,0,0,1,0),(7,0,'MUL-CARGA','MultiCarga',NULL,'2020-10-02 11:15:49',NULL,1,0,0,0,0,0,0,0,1),(8,0,'CUN-ASOL','Cuna del Sol',NULL,'2020-10-22 11:15:49',NULL,1,0,0,0,0,0,0,0,1),(9,0,'COA-CARGA','Coatecarga',NULL,'2020-11-05 08:06:20',NULL,1,0,0,0,0,0,0,0,1),(10,0,'BET-HEL','BETHEL',NULL,'2020-11-05 09:18:11',NULL,1,0,0,0,0,0,0,0,1),(11,0,'OVA-LLE','Ovalle',NULL,'2020-11-12 09:38:36',NULL,1,0,0,0,0,0,0,0,1),(12,0,'HUE-HUETE','Huehuetecos',NULL,'2020-11-18 10:46:06',NULL,1,0,0,0,0,0,0,0,1),(13,0,'SAT-URNO','Saturno',NULL,'2020-12-11 08:35:30',NULL,1,0,0,0,0,0,0,0,1),(14,0,'LOS-DOS','Los Dos',NULL,'2021-03-02 14:30:01',NULL,1,0,0,0,0,0,0,0,1),(15,0,'ALE-XAN','Alexander',NULL,'2021-03-16 17:22:08',NULL,1,0,0,0,0,0,0,0,1),(16,0,'AGU-ILAEX','Aguila Express',NULL,'2021-03-24 16:41:53',NULL,1,0,0,0,0,0,0,0,1),(17,0,'DEL-SUR','Del Sur',NULL,'2021-04-19 12:25:11',NULL,1,0,0,0,0,0,0,0,1),(18,0,'LOS-ALTOS','Lopez Los Altos',NULL,'2021-04-20 08:12:30',NULL,1,0,0,0,0,0,0,0,1),(19,0,'GON-ZALEZ','Gonzales',NULL,'2021-05-13 14:46:43',NULL,1,0,0,0,0,0,0,0,1),(20,0,'DAV-ID','David',NULL,'2021-06-02 10:36:45',NULL,1,0,0,0,0,0,0,0,1),(21,0,'ALV-VAREZ','Alvarez',NULL,'2021-06-04 11:49:18',NULL,1,0,0,0,0,0,0,0,1),(22,0,'XEL-CARGA','Xela Carga',NULL,'2021-06-30 11:00:55',NULL,1,0,0,0,0,0,0,0,1),(23,0,'ALE-X','Alex',NULL,'2021-07-01 18:10:34',NULL,1,0,0,0,0,0,0,0,1),(24,0,'SHA-DAY','SHADAY',NULL,'2021-08-04 16:53:10',NULL,1,0,0,0,0,0,0,0,1),(26,0,'SHA-LOM','Shalom',NULL,'2021-08-19 12:15:48',NULL,1,0,0,0,0,0,0,0,1),(27,0,'GUA-CARGA','GuateCarga',NULL,'2021-09-02 08:46:57',NULL,1,0,0,0,0,0,0,0,1),(28,0,'FRA-NCIS','Francis',NULL,'2021-09-02 09:34:55',NULL,1,0,0,0,0,0,0,0,1),(29,0,'XIN-ABAJ','Xinabajul',NULL,'2021-11-24 10:55:39',NULL,1,0,0,0,0,0,0,0,1),(30,0,'JOR-DAN','Jordan',NULL,'2021-12-07 10:07:01',NULL,1,0,0,0,0,0,0,0,1),(31,0,'PRI-XINA','Princesa Xina',NULL,'2022-01-05 14:14:52',NULL,1,0,0,0,0,0,0,0,1),(32,0,'FEN-IX','Fenix',NULL,'2022-02-25 14:00:59',NULL,1,0,0,0,0,0,0,0,1),(33,1,'KUV-AL','Kuval, S.A',NULL,'2022-07-22 17:47:17',NULL,0,0,0,0,1,0,0,0,0);
/*!40000 ALTER TABLE `transporte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:17:15
