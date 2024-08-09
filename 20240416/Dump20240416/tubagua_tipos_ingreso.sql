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
-- Table structure for table `tipos_ingreso`
--

DROP TABLE IF EXISTS `tipos_ingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_ingreso` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `fecha_alta` datetime DEFAULT NULL,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  `oc` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_ingreso`
--

LOCK TABLES `tipos_ingreso` WRITE;
/*!40000 ALTER TABLE `tipos_ingreso` DISABLE KEYS */;
INSERT INTO `tipos_ingreso` VALUES (1,1,'OCO-','Orden de Compra','Ordenes de compra ya sea locales o al extranjero','2020-08-25 04:14:10',NULL,1,1),(2,1,'MOV-','Movimiento entre Bodegas','Cuando se mueve un producto de una bodega a otra','2020-08-25 04:17:55','0000-00-00 00:00:00',1,0),(3,1,'NCR-ED','Nota de Credito','Cuando el producto regresa por medio de una nota','2020-08-25 04:17:58',NULL,1,0),(4,1,'DEV-','Anulacion de Factura','Cuando se devuelve Producto y hay que anular la factura. Esto cuando ya se firmo la factura. La fact no se borra, se pone a active = 0 para que quede registro de la anulacion. Esto porque al firmar ya se desuenta del inventario. Sino se ha firmado no importa','2020-08-25 04:18:01',NULL,1,0),(5,1,'AJU-STE','Ajuste Inventario','Cuando se cuenta inventario y hay q ajustarlo con lo q hay. Se quita o ingreso dependiendo el caso','2020-08-25 04:18:05',NULL,1,0),(6,1,'AJUS-MNL','Ajuste Manual de Inventario','Ajuste Manual de Inventario','2023-12-20 11:49:49',NULL,72,0);
/*!40000 ALTER TABLE `tipos_ingreso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:14:29
