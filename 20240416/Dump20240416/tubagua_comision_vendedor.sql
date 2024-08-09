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
-- Table structure for table `comision_vendedor`
--

DROP TABLE IF EXISTS `comision_vendedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comision_vendedor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `vendedor_id` int NOT NULL,
  `comision_id` int NOT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comision_vendedor`
--

LOCK TABLES `comision_vendedor` WRITE;
/*!40000 ALTER TABLE `comision_vendedor` DISABLE KEYS */;
INSERT INTO `comision_vendedor` VALUES (1,1,2,2,'2021-04-28 15:18:30',NULL,1),(3,1,4,1,'2021-04-28 15:18:30',NULL,1),(4,1,5,1,'2021-04-28 15:18:30',NULL,1),(5,1,6,1,'2021-04-28 15:18:30',NULL,1),(6,1,7,1,'2021-04-28 15:18:30',NULL,1),(7,1,8,1,'2021-04-28 15:18:30',NULL,1),(8,1,9,2,'2021-04-28 15:18:30',NULL,1),(9,1,10,1,'2021-04-28 15:18:30',NULL,1),(10,1,11,1,'2021-07-01 15:08:05',NULL,1),(11,1,21,1,'2021-08-31 15:25:26',NULL,1),(12,1,29,1,'2022-03-29 16:14:58',NULL,1),(13,1,30,1,'2022-03-29 16:14:58',NULL,1),(14,1,31,1,'2022-03-29 16:14:58',NULL,1),(15,1,52,1,'2023-01-27 16:26:13',NULL,1),(16,1,66,1,'2023-05-11 16:26:13',NULL,1),(17,1,76,1,'2023-09-13 15:50:08',NULL,1);
/*!40000 ALTER TABLE `comision_vendedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:08:18