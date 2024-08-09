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
-- Table structure for table `tipos_egreso`
--

DROP TABLE IF EXISTS `tipos_egreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_egreso` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `fecha_alta` datetime DEFAULT NULL,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_egreso`
--

LOCK TABLES `tipos_egreso` WRITE;
/*!40000 ALTER TABLE `tipos_egreso` DISABLE KEYS */;
INSERT INTO `tipos_egreso` VALUES (1,1,'MUE-STRAS','Muestras',NULL,'2020-10-01 03:56:04',NULL,1),(2,1,'AJU-STE','Ajuste Inventario',NULL,'2020-10-01 03:56:04',NULL,1),(3,1,'MAL-EST','Mal Estado',NULL,'2020-10-01 03:57:24',NULL,1),(4,1,'FAC-','Factura',NULL,'2020-10-04 11:45:30',NULL,1),(5,1,'AFA-CSIMP','Anulacion Factura Sin Imprimir',NULL,'2020-10-05 02:47:51',NULL,1),(6,1,'ANC-','Anulacion Nota Credito',NULL,'2020-11-13 12:48:51',NULL,1),(7,1,'MOV-','Movimiento entre bodegas',NULL,NULL,NULL,1),(8,1,'AJUS-MNL','Ajuste Manual de Inventario',NULL,'2023-12-20 12:01:15',NULL,72);
/*!40000 ALTER TABLE `tipos_egreso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:08:09
