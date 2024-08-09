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
-- Table structure for table `descuento_categoria`
--

DROP TABLE IF EXISTS `descuento_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `descuento_categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria_id` int NOT NULL,
  `cliente_id` int NOT NULL,
  `porcentaje` float NOT NULL,
  `observaciones` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuento_categoria`
--

LOCK TABLES `descuento_categoria` WRITE;
/*!40000 ALTER TABLE `descuento_categoria` DISABLE KEYS */;
INSERT INTO `descuento_categoria` VALUES (7,7,1,20,'20% FAMA'),(8,1,1,30,'30% Ferreteria menos los cedazos'),(11,3,1,30,''),(12,2,1,30,''),(17,213,1,15,''),(31,7,1949,10,''),(32,1,1949,10,''),(33,217,1949,10,''),(34,213,1949,10,''),(35,8,1949,10,''),(36,2,1949,10,''),(37,3,1949,10,''),(43,8,68,20,''),(52,7,6,25,''),(53,1,6,25,''),(54,6,6,15,''),(55,4,6,15,''),(56,5,6,15,''),(57,213,6,10,''),(58,8,6,25,''),(59,2,6,25,''),(60,3,6,25,''),(61,6,1,20,''),(62,4,1,20,''),(63,5,1,20,''),(66,7,2,20,''),(71,6,8671,15,''),(74,5,8671,15,''),(75,7,8671,15,''),(76,1,8671,15,''),(77,213,8671,15,''),(78,4,8671,15,''),(79,2,8671,15,''),(80,3,8671,15,''),(81,4,5595,10,''),(82,6,5595,10,''),(83,5,5595,10,''),(84,7,5595,10,''),(85,1,5595,10,''),(86,213,5595,10,''),(87,2,5595,10,''),(88,3,5595,10,''),(89,6,7325,15,''),(90,5,7325,15,''),(91,7,7325,15,''),(92,1,7325,15,''),(93,213,7325,15,''),(94,4,7325,15,''),(95,2,7325,15,''),(97,3,7325,15,''),(100,6,1949,15,''),(101,5,1949,15,''),(102,4,1949,15,''),(109,282,9493,25,''),(111,5,9493,25,''),(113,6,9493,30,''),(114,7,9493,25,''),(115,1,9493,25,''),(116,213,9493,25,''),(117,4,9493,25,''),(118,2,9493,25,''),(119,3,9493,25,''),(120,6,68,25,''),(121,5,68,25,''),(122,7,68,25,''),(123,1,68,25,''),(124,4,68,25,''),(125,2,68,25,''),(126,3,68,25,'');
/*!40000 ALTER TABLE `descuento_categoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:07:34
