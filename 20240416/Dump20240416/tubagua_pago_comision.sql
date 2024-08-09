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
-- Table structure for table `pago_comision`
--

DROP TABLE IF EXISTS `pago_comision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pago_comision` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `nombre` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago_comision`
--

LOCK TABLES `pago_comision` WRITE;
/*!40000 ALTER TABLE `pago_comision` DISABLE KEYS */;
INSERT INTO `pago_comision` VALUES (1,1,'Comisiones hasta Marzo 2021','2020-10-01','2021-03-31','Calculo desde que inicio la empresa (2020) hasta el 31 de Marzo 2021','2021-04-29 10:42:14',NULL,1),(2,1,'Comisiones Abril y Mayo 2021','2021-04-01','2021-05-31','Comisiones del mes de abril y mayo 2021','2021-07-01 14:08:38',NULL,1),(3,1,'Comisiones Junio 2021','2021-06-01','2021-06-30','Comisiones mes de Junio 2021','2021-07-01 14:36:58',NULL,1),(4,1,'Comisiones Julio 2021','2021-07-01','2021-07-31','Comisiones mes de Julio 2021','2021-08-24 10:19:49',NULL,1),(5,1,'Comisiones Agosto 2021','2021-08-01','2021-08-31','Comisiones del Mes de Agosto 2021','2021-09-22 09:37:54',NULL,1),(6,1,'Comision hasta Septiembre 24 del 2021 ven 014','2021-09-01','2021-09-23','Comision del ven 014 Daniel Portocarrero. Calculada hasta el 23-09-2021. ','2021-09-24 09:18:38',NULL,1),(7,1,'Comisiones Septiembre 2021','2021-09-01','2021-09-30','Comisiones del Mes de Septiembre 2021','2021-10-26 09:33:02',NULL,1),(8,1,'Comisiones Octubre 2021','2021-10-01','2021-10-29','Comisiones del Mes de Octubre 2021','2021-10-29 13:10:40',NULL,1),(9,1,'Comisiones Noviembre 2021','2021-11-01','2021-11-30','Comisione sdel Mes de Noviembre 2021','2021-11-30 09:41:13',NULL,1),(10,1,'Comisiones Diciembre 2021','2021-12-01','2021-12-31','Comisiones del Mes de Diciembre 2021','2021-12-30 16:08:57',NULL,1),(11,1,'Comisiones Enero 2022','2022-01-01','2022-01-31','Comisiones del Mes de Enero 2022','2022-01-31 14:06:25',NULL,1),(12,1,'Comisiones Febrero 2022','2022-02-01','2022-02-28','Comisiones del Mes de Febrero 2022','2022-02-26 17:22:37',NULL,1),(13,1,'Comisiones hasta Marzo 14 2022 Ven 014','2022-03-01','2022-03-14','Comisiones Ven 014 Esvin Calculado hasta el 14 de marzo 2022','2022-03-14 23:15:30',NULL,1),(14,1,'Comision 002 mes de Marzo 2022','2022-03-01','2022-03-31','Comisiones 002 por reestructuracion de ruta','2022-03-29 15:36:54',NULL,1),(15,1,'Comisiones Marzo 2022','2022-03-01','2022-03-31','Comisiones del Mes de Marzo 2022','2022-03-29 16:52:48',NULL,1),(16,1,'Comisiones Abril 2022','2022-04-01','2022-04-27','Comisiones del Mes de Abril 2022','2022-05-30 13:59:27',NULL,1),(17,1,'Comisiones Mayo 2022','2022-04-28','2022-05-28','Comisiones del Mes de Mayo 2022','2022-05-30 13:59:27',NULL,1),(18,1,'Comisiones Junio 2022','2022-05-29','2022-06-29','Comisiones del Mes de Junio 2022','2022-06-30 15:25:39',NULL,1),(19,1,'Comisiones Julio 2022','2022-06-29','2022-07-28','Comisiones del Mes de Julio 2022','2022-07-29 12:19:57',NULL,1),(20,1,'Comisiones Agosto 2022','2022-08-29','2022-08-29','Comisiones del Mes de Agosto 2022','2022-08-30 11:29:34',NULL,1),(21,1,'Comisiones  018  Septiembre 2022','2022-08-30','2022-08-26','Comisiones del Mes de Septiembre 2022','2022-08-30 16:32:31',NULL,1),(22,1,'Comisiones Octubre 2022','2022-09-29','2022-10-27','Comisiones del Mes de Octubre 2022','2022-10-28 18:49:00',NULL,1),(23,1,'Comisiones Noviembre 2022','2022-11-01','2022-11-29','Comisiones del Mes de Noviembre 2022','2022-11-29 15:28:43',NULL,1),(24,1,'Comisiones Diciembre 2022','2022-12-01','2022-12-28','Comisiones del Mes de Diciembre 2022','2022-12-28 12:34:50',NULL,1),(25,1,'Comisiones Enero 2023','2022-12-29','2023-01-28','Comisiones del Mes de Enero 2023','2023-01-23 14:11:56',NULL,1),(26,1,'Comisiones Febrero 2023','2023-01-29','2023-02-28','Comisiones del Mes de Febrero 2023','2023-03-01 14:11:56',NULL,1),(27,1,'Comisiones Marzo 2023','2023-02-28','2023-03-29','Comisiones del Mes de Marzo 2023','2023-03-30 15:18:50',NULL,1),(28,1,'Comisiones Abril 2023','2023-03-30','2023-04-29','Comisiones del Mes de Abril 2023','2023-05-11 15:41:02',NULL,1),(29,1,'Comisiones Mayo 2023','2023-04-30','2023-05-30','Comisiones del Mes de Mayo 2023','2023-05-11 15:41:02',NULL,1),(30,1,'Comisiones Junio 2023','2023-05-31','2023-06-28','Comisiones del Mes de Junio 2023','2023-05-11 15:41:02',NULL,1),(31,1,'Comisiones Julio 2023','2023-07-01','2023-07-01','Comisiones del Mes de Julio 2023','2023-07-11 15:41:02',NULL,1),(32,1,'Comisiones Agosto 2023','2023-08-01','2023-08-31','Comisiones del Mes de Agosto 2023','2023-08-11 15:41:02',NULL,1),(33,1,'Comisiones Septiembre 2023','2023-09-01','2023-09-30','Comisiones del Mes de Septiembre 2023','2023-10-19 15:46:06',NULL,1),(34,1,'Comisiones Octubre 2023','2023-10-01','2023-10-31','Comisiones del Mes de Octubre 2023','2023-10-19 15:48:33',NULL,1),(35,1,'Comisiones Noviembre 2023','2023-11-01','2023-11-30','Comisiones del Mes de Noviembre 2023','2023-10-19 15:48:33',NULL,1),(36,1,'Comisiones Diciembre 2023','2023-12-01','2023-12-31','Comisiones del Mes de Diciembre 2023','2023-10-19 15:48:34',NULL,1),(37,1,'Comisiones Enero 2024 Jose Cifuentes','2024-01-01','2024-01-18','Comisiones del Mes de Enero 2024 Jose Cifuentes','2024-01-19 11:16:50',NULL,1),(38,1,'Comisiones Enero 2024 Javier Calito','2024-01-01','2024-01-20','Comisiones del Mes de Enero 2024 Javier Calito','2024-01-19 11:16:50',NULL,1),(39,1,'Comisiones Enero 2024','2024-01-01','2024-01-31','Comisiones del Mes de Enero 2024','2024-02-01 15:35:53',NULL,1),(40,1,'Comisiones Febrero 2024','2024-02-01','2024-02-29','Comisiones del Mes de Febrero 2024','2024-02-01 15:41:35',NULL,1),(41,1,'Comisiones Marzo 2024','2024-03-01','2024-03-31','Comisiones del Mes de Marzo 2024','2024-03-22 18:50:14',NULL,1);
/*!40000 ALTER TABLE `pago_comision` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:05:59
