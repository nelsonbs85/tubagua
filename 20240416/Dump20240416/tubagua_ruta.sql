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
-- Table structure for table `ruta`
--

DROP TABLE IF EXISTS `ruta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ruta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `vendedor_id` int DEFAULT NULL,
  `nombre` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruta`
--

LOCK TABLES `ruta` WRITE;
/*!40000 ALTER TABLE `ruta` DISABLE KEYS */;
INSERT INTO `ruta` VALUES (1,1,2,'Ruta Of','2020-09-23 16:15:52',NULL,'Unica Ruta para oficina',1),(2,1,4,'002-Ruta 1','2020-09-23 16:15:52',NULL,'Ruta 1 Carlos',1),(3,1,5,'004-Ruta 1 ','2020-09-23 16:15:52',NULL,'Ruta 1 - Chimaltenango 1',1),(4,1,6,'006-Ruta 1','2020-09-23 16:15:52',NULL,'Ruta 1 Willy',1),(5,1,7,'008-Ruta 1','2020-09-23 16:15:52',NULL,'Ruta 1 Oscar',1),(6,1,8,'010-Ruta 1','2020-09-23 16:15:52',NULL,'Ruta 1 Guillermo',1),(7,1,2,'Ruta Anu','2020-09-24 22:22:10',NULL,'Fact Anuladas',1),(8,1,4,'002-Ruta 2','2020-09-29 14:48:12',NULL,'Ruta 2 Carlos',1),(9,1,5,'004-Ruta 2','2020-09-29 14:48:12',NULL,'Ruta 2 - Chimaltenango 2',1),(10,1,6,'006-Ruta 2','2020-09-29 14:48:12',NULL,'Ruta 2 Willy',1),(11,1,7,'008-Ruta 2','2020-09-29 14:48:12',NULL,'Ruta 2 Oscar',1),(12,1,8,'010-Ruta 2','2020-09-29 14:48:12',NULL,'Ruta 2 Guillermo',1),(13,1,4,'002-Ruta 3','2020-10-06 12:24:22',NULL,'Ruta 3 Carlos',1),(14,1,5,'004-Ruta 3 ','2020-10-06 12:24:22',NULL,'Ruta 3 - Sacatepequez ',1),(15,1,6,'006-Ruta 3','2020-10-06 12:24:22',NULL,'Ruta 3 Willy',1),(16,1,7,'008-Ruta 3','2020-10-06 12:24:22',NULL,'Ruta 3 Emerson',1),(17,1,4,'002-Ruta 4','2020-10-13 13:41:49',NULL,'Ruta 4 Juan Pablo',1),(18,1,5,'004-Ruta 4 ','2020-10-13 13:41:49',NULL,'Ruta 4 - Solola',1),(19,1,6,'006-Ruta 4','2020-10-13 13:41:49',NULL,'Ruta 4 Willy',1),(20,1,7,'008-Ruta 4','2020-10-13 13:41:49',NULL,'Ruta 4 Emerson',1),(21,1,10,'012-Ruta 1','2020-11-10 09:45:14',NULL,'Ruta 1 - JArturo',1),(22,1,10,'012-Ruta 2','2020-11-10 09:45:14',NULL,'Ruta 2 - JArturo',1),(23,1,10,'012-Ruta 3','2020-11-10 09:45:14',NULL,'Ruta 3 - JArturo',1),(25,1,6,'006-Ruta 5','2020-11-12 09:01:30',NULL,'Ruta 5 - Willy',1),(26,1,10,'012-Ruta 4','2021-01-12 09:01:30',NULL,'Ruta 3.5 - JArturo',1),(27,1,11,'014-Ruta 1','2021-06-01 08:15:28',NULL,'Ruta 1 - Quetzaltenango 1',1),(28,1,11,'014-Ruta 2 ','2021-06-01 08:15:28',NULL,'Ruta 2 - Quetzaltenango 2',1),(29,1,11,'014-Ruta 3','2021-06-01 08:15:28',NULL,'Ruta 3 - San Marcos Baja',1),(30,1,11,'014-Ruta 4','2021-06-01 08:15:28',NULL,'Ruta 4 - San Marcos Alta',1),(31,0,4,'002-Ruta 5','2021-07-22 08:42:13',NULL,'Ruta 5 - Carlos',1),(32,1,21,'016-Ruta 1','2021-07-27 10:01:56',NULL,'Ruta 1 - Quiche p1',1),(33,1,21,'016-Ruta 2 ','2021-07-27 10:01:56',NULL,'Ruta 2 - Quiche p2',1),(34,1,21,'016-Ruta 3 ','2021-07-27 10:01:56',NULL,'Ruta 3 - Quiche p3',1),(36,1,21,'016-Ruta 4','2021-08-24 10:04:15',NULL,'Ruta 4 - Quiche p4',1),(37,1,8,'010-Ruta 3','2021-10-12 10:55:07',NULL,'Ruta 3 - Izabal',1),(38,0,21,'016-Ruta 5','2021-11-22 09:29:13',NULL,'Ruta 5 - Zacapa',1),(39,1,9,'Ruta Of Kuv','2021-12-22 20:54:43',NULL,'Ruta Kuval',1),(40,1,30,'020-Ruta 1','2022-01-31 21:02:27',NULL,'Ruta 1 - 020',1),(41,1,30,'020-Ruta 2','2022-01-31 21:02:27',NULL,'Ruta 2 - 020',1),(42,1,30,'020-Ruta 3','2022-01-31 21:02:27',NULL,'Ruta 3 - 020',1),(43,1,30,'020-Ruta 4','2022-01-31 21:02:27',NULL,'Ruta 4 - 020',1),(44,1,31,'022-Ruta 1','2022-01-31 21:02:27',NULL,'Ruta 1 - 022',1),(45,1,31,'022-Ruta 2','2022-01-31 21:02:27',NULL,'Ruta 2 - 022',1),(46,1,31,'022-Ruta 3','2022-01-31 21:02:27',NULL,'Ruta 3 - 022',1),(47,1,31,'022-Ruta 4','2022-01-31 21:02:27',NULL,'Ruta 4 - 022',1),(48,1,29,'018-Ruta 1','2022-03-11 16:16:39',NULL,'018 - Ruta 1',1),(49,0,29,'018-Ruta 2','2022-03-11 16:16:39',NULL,'018 - Ruta 2',1),(50,1,29,'018-Ruta 3','2022-03-11 16:16:39',NULL,'018 - Ruta 3',1),(51,1,29,'018-Ruta 4','2022-03-11 16:16:39',NULL,'018 - Ruta 4',1),(52,1,29,'018-Ruta 5','2022-03-26 13:12:55',NULL,'Ruta 5 - 018',1),(53,1,30,'020-Ruta 5','2022-06-24 16:29:10',NULL,'020 - Ruta 5',NULL),(54,0,31,'022-Ruta 5','2022-06-24 16:29:10',NULL,'022 - Ruta 5',1),(56,0,7,'008-Ruta 1.5','2022-08-06 12:04:53',NULL,'Ruta 1.5 - 008',1),(57,0,11,'014-Ruta 2.5','2022-09-02 08:59:15',NULL,'Ruta 2.5 - 014',1),(58,0,5,'004-Ruta 5','2022-09-08 08:33:49',NULL,'Ruta 5 - 004',1),(59,1,52,'024-Ruta 1','2022-12-30 19:58:35',NULL,'024-R1-Toto',1),(60,1,52,'024-Ruta 2','2022-12-30 19:58:35',NULL,'024-R2-Toto',1),(61,1,52,'024-Ruta 3','2022-12-30 19:58:35',NULL,'024-R3-Sol',1),(62,1,52,'024-Ruta 4','2022-12-30 19:58:35',NULL,'024-R4-Sol',1),(63,1,8,'010-Ruta 4','2023-01-24 10:01:52',NULL,'Ruta 4 - 010',1),(64,1,8,'010-Ruta 5','2023-02-14 15:08:09',NULL,'Ruta 5 - 010',1),(65,1,66,'026-Ruta 1','2023-05-11 09:55:12',NULL,'Ruta 1 - 026',1),(66,1,66,'026-Ruta 2','2023-05-11 09:55:13',NULL,'Ruta 2 - 026',1),(67,1,66,'026-Ruta 3','2023-05-11 09:55:13',NULL,'Ruta 3 - 026',1),(68,1,66,'026-Ruta 4','2023-05-11 09:55:13',NULL,'Ruta 4 - 026',1),(69,1,76,'028-Ruta 1','2023-09-07 20:35:56',NULL,'028 - Ruta 1',1),(70,1,76,'028-Ruta 2','2023-09-07 20:35:57',NULL,'028 - Ruta 2',1),(71,1,76,'028-Ruta 3','2023-09-07 20:35:57',NULL,'028 - Ruta 3',1),(72,1,76,'028-Ruta 4','2023-09-07 20:35:57',NULL,'028 - Ruta 4',1);
/*!40000 ALTER TABLE `ruta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 18:33:21
