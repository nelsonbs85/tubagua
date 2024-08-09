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
-- Table structure for table `cheque_rech_motivo`
--

DROP TABLE IF EXISTS `cheque_rech_motivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cheque_rech_motivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `fecha_alta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cheque_rech_motivo`
--

LOCK TABLES `cheque_rech_motivo` WRITE;
/*!40000 ALTER TABLE `cheque_rech_motivo` DISABLE KEYS */;
INSERT INTO `cheque_rech_motivo` VALUES (1,'Sin Fondos Disponibles',NULL,'2021-06-22 18:36:13',NULL,1),(2,'No se Pudo Confirmar',NULL,'2021-06-22 18:36:13',NULL,1),(3,'Mala Firma',NULL,'2021-06-22 18:36:13',NULL,1),(4,'Mala Redaccion',NULL,'2021-06-22 18:36:13',NULL,1),(5,'Revocatoria de Orden de Pago',NULL,'2021-06-29 10:40:03',NULL,1),(6,'Cliente Deposita',NULL,'2022-06-17 18:31:13',NULL,1),(7,'Cliente Cambio Fecha ',NULL,'2022-06-17 18:31:13',NULL,1),(8,'Cliente Cancelo Cheque',NULL,'2022-09-29 08:15:08',NULL,1),(9,'Cliente  Reporto Como Perdido',NULL,'2022-09-29 08:15:08',NULL,1),(10,'Cliente  Reporto Como Robado',NULL,'2022-09-29 08:15:08',NULL,1),(11,'Cuenta Cancelada',NULL,'2022-12-08 09:37:52',NULL,1),(12,'Talonario No Confirmado',NULL,'2023-12-12 11:34:03',NULL,1);
/*!40000 ALTER TABLE `cheque_rech_motivo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 18:32:41
