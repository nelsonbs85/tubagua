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
-- Table structure for table `motivo_fel_anulacion_nc`
--

DROP TABLE IF EXISTS `motivo_fel_anulacion_nc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `motivo_fel_anulacion_nc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descripcion_corta` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivo_fel_anulacion_nc`
--

LOCK TABLES `motivo_fel_anulacion_nc` WRITE;
/*!40000 ALTER TABLE `motivo_fel_anulacion_nc` DISABLE KEYS */;
INSERT INTO `motivo_fel_anulacion_nc` VALUES (1,'Devolución por error del Cliente (Buen Estado)',1,'2023-11-27 21:30:57','2023-11-28 19:48:59','Dev Error Cliente'),(2,'Devolución por error del Vendedor (Buen Estado)',1,'2023-11-27 21:30:57','2023-11-28 19:50:03','Dev Error Vend'),(3,'Devolución por Mal Estado',1,'2023-11-27 21:30:57','2023-11-28 19:49:00','Dev Mal Estado'),(4,'Se facturo pero no le llego el producto',1,'2023-11-27 21:30:57','2023-11-28 19:49:00','Fact sin Entrega'),(5,'Se facturo pero no le llego el pedido',1,'2023-11-27 21:30:57','2023-11-28 19:49:00','Ped no Entregado'),(6,'Anular factura con Nota Credito',1,'2023-11-27 21:30:57','2023-11-28 19:49:00','Anulación Fact con NC'),(7,'Cambio directo (Boleta azul)',1,'2023-11-27 21:30:57','2023-11-27 21:30:57','Cambio Directo'),(8,'Descuento por fardo',1,'2023-11-27 21:30:57','2023-11-28 19:49:00','Desc por Fardo'),(9,'Descuento por pronto pago',1,'2023-11-27 21:30:57','2023-11-28 19:49:01','Desc Pronto Pago'),(10,'Descuento no aplicado en general',1,'2023-11-27 21:30:57','2023-11-28 19:49:01','Desc no Aplicado'),(11,'Recolección por falta de pago',1,'2023-11-27 21:30:57','2023-11-27 21:30:57','Recolección No Pago'),(12,'Flete',1,'2023-11-27 21:30:57','2023-11-27 21:30:57','Flete'),(13,'Para Cuadrar una Factura',1,'2023-11-30 16:27:22','2023-11-30 16:27:22','P/Cuadrar Fact');
/*!40000 ALTER TABLE `motivo_fel_anulacion_nc` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:06:18
