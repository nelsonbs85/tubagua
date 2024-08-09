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
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `codant` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nombre` varchar(145) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tipo` int NOT NULL DEFAULT '1',
  `costo_local` decimal(10,2) DEFAULT NULL,
  `precio_local` decimal(10,2) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` VALUES (1,1,'FLE-TE',NULL,'Flete de Transporte',1,0.00,30.00,'2020-09-09 06:33:58',NULL,1),(2,0,'AER-EOS',NULL,'Flete Transporte Aereos',1,0.00,20.00,'2020-09-09 06:33:58',NULL,1),(3,0,'GAR-ANTIA',NULL,'Seguro y Garantia de Mercaderia',0,0.00,0.01,'2020-09-09 06:33:58',NULL,1),(4,0,'CRO-PA',NULL,'Flete Transporte Cropa',1,0.00,20.00,'2020-09-09 06:34:25',NULL,1),(6,1,'DES-CUE',NULL,'Por Descuento No Aplicado',1,0.00,0.01,'2020-11-11 13:06:51',NULL,1),(7,1,'RET-EN',NULL,'Por Retencion Aplicada',1,0.00,0.01,'2020-11-18 10:21:55',NULL,1),(8,1,'DIF-PREC',NULL,'Por Diferencia de Precio en Mercaderia',1,0.00,0.01,'2020-12-22 08:51:29',NULL,1),(9,1,'OTR-MOTIV',NULL,'Devolucion de compuerta pesada de 1 en Factura No A729',1,0.00,0.01,'2021-03-06 16:22:22',NULL,1),(10,1,'OTR-MOTI2',NULL,'Por devolucion de 10 brocas ',1,0.00,40.00,'2021-05-15 08:49:24',NULL,1),(11,1,'OTR-MOTI3',NULL,'Por Devolucion de Valvulas para ducha Tipo L',1,0.00,856.69,'2021-05-19 14:34:18',NULL,1),(12,1,'OTR-MOTI4',NULL,'Por Devolucion de Brocas para Madera Tirabuzon',1,0.00,1155.60,'2021-05-19 14:45:42',NULL,1),(13,1,'OTR-MOTI5',NULL,'Devolucion de 40 codos 1x45 Fact A2929',1,0.00,167.20,'2021-06-07 11:54:46',NULL,1),(15,1,'OTR-MOTI6',NULL,'Seguros Fact A2929 y A2930',1,0.00,24.98,'2021-06-07 11:55:33',NULL,1),(16,1,'ANU-LA1',NULL,'Anulacion Completa de la Factura No. A3291',1,0.00,968.63,'2021-07-16 16:58:06',NULL,1),(17,1,'ANU-LA2',NULL,'Anulacion Completa de la Factura No. A3789',1,0.00,618.00,'2021-07-19 12:05:26',NULL,1),(18,1,'ANU-LA3',NULL,'Anulacion Completa de la Factura No. A2050',1,0.00,451.98,'2021-08-05 12:29:10',NULL,1),(19,1,'OTR-MOTI7',NULL,'Por Devolucion de Mercaderia',1,0.00,700.00,'2021-08-09 10:07:57',NULL,1),(20,1,'OTR-MOTI8',NULL,'Faltante de Mercaderia',1,0.00,69.40,'2021-08-09 11:46:08',NULL,1),(21,1,'OTR-MOTI9',NULL,'Anulacion Completa de la Factura No. A4871',1,0.00,438.90,'2021-08-09 11:46:08',NULL,1),(22,1,'MOT-IVO10',NULL,'Anulacion Completa de la Factura No. A1741',1,0.00,2104.50,'2021-08-23 08:41:02',NULL,1),(23,1,'MOT-IVO11',NULL,'Por devolucion de 12 grilletes de 1',1,0.00,1284.00,'2021-09-04 10:42:56',NULL,1),(24,1,'MOT-IVO12',NULL,'Anulacion Completa de la Factura No. A4054',1,0.00,148.37,'2021-09-04 11:37:56',NULL,1),(25,1,'MOT-IVO13',NULL,'Faltante de Producto: 6 Tee 2 1/2',1,0.00,248.28,'2021-09-06 13:18:10',NULL,1),(26,1,'MOT-IVO14',NULL,'Faltante de Producto: 6 Valvula Bola Palanca Zinc 200 de 1 1/2\"',1,0.00,456.00,'2021-09-06 17:11:19',NULL,1),(27,1,'MOT-IVO15',NULL,'Faltante de Producto: 12 Cheque Horizontal Laton de 1',1,0.00,600.00,'2021-09-06 17:17:35',NULL,1),(29,1,'MOT-IVO16',NULL,'Por devolucion de 12 FAMA 9770',1,0.00,288.00,'2021-09-13 16:20:14',NULL,1),(30,1,'MOT-IVO17',NULL,'Por devolucion de 1 FAMA 3581',1,0.00,53.00,'2021-09-18 08:47:56',NULL,1),(31,1,'MOT-IVO18',NULL,'Por devolucion de 1 llave de ducha Y-15508',1,0.00,80.00,'2021-09-18 08:59:25',NULL,1),(32,1,'MOT-IVO19',NULL,'Descuento de Garantias de Facturas A5904 y A5411',1,0.00,57.64,'2021-10-08 08:57:55',NULL,1),(33,1,'MOT-IVO20',NULL,'Saldo a Favor por pago de mas ',1,0.00,685.00,'2021-10-23 09:03:28',NULL,1),(34,1,'MOT-IVO21',NULL,'Por devolucion de 21 FAMA 9967',1,0.00,336.00,'2021-11-02 13:48:45',NULL,1),(35,1,'MOT-IVO22',NULL,'Por devolucion de 21 FAMA 9967',1,0.00,357.00,'2021-11-13 12:00:32',NULL,1),(36,1,'MOT-IVO23',NULL,'Por devolucion de 4 brochas de 4',1,0.00,22.00,'2021-11-17 12:45:57',NULL,1),(37,1,'MOT-IVO24',NULL,'Por devolucion de 10 Cepillo de Alambre de 5',1,0.00,66.00,'2021-11-17 12:46:50',NULL,1),(38,1,'MOT-IVO25',NULL,'Por devolucion de 16 brochas de 5',1,0.00,116.00,'2021-11-17 12:48:08',NULL,1),(39,1,'MOT-IVO26',NULL,'Fatante de Producto: 12 Compuertas Pesadas de 1',1,0.00,984.00,'2022-01-20 12:33:26',NULL,1),(40,1,'MOT-IVO27',NULL,'Por devolucion de valvula de bola 1/2 Cromada Y-10108',1,0.00,27.00,'2022-01-22 11:31:07',NULL,1),(41,1,'MOT-IVO28',NULL,'Por devolucion de 1  FAMA 2200',1,0.00,34.00,'2022-01-22 11:38:22',NULL,1),(42,1,'MOT-IVO29',NULL,'Por Devolucion de ced Harnero al Fuego 1/2 C-26210',1,0.00,396.00,'2022-01-29 12:33:55',NULL,1),(43,1,'MOT-IVO30',NULL,'Por Compra de Valvulas de Bola PVC Lisas ',1,0.00,240.84,'2022-02-14 13:49:48',NULL,1),(44,1,'DEV-00001',NULL,'Por 300 Codo Liso 90 PVC de 1 1/2',1,0.00,1440.00,'2022-02-21 12:57:45',NULL,1),(45,1,'DEV-00002',NULL,'Por 100 Tee lisa PVC de 1 1/2',1,0.00,940.00,'2022-02-21 12:57:45',NULL,1),(46,1,'DEV-00003',NULL,'Por 100 Adaptador Macho PVC de 1 1/2',1,0.00,360.00,'2022-02-21 12:57:45',NULL,1),(47,1,'DEV-00004',NULL,'Por 2 unidades de Brocha de 1 1/2',1,0.00,4.00,'2022-02-21 13:03:24',NULL,1),(48,1,'DEV-00005',NULL,'Por 1 unidades de Brocha de 2 1/2',1,0.00,3.16,'2022-02-21 13:03:24',NULL,1),(49,1,'DEV-00006',NULL,'Por 24 Destapadores de Inodoro de 5',1,0.00,288.00,'2022-02-21 20:39:11',NULL,1),(50,1,'DEV-00007',NULL,'Por 21 Compuertas medianas de 1/2 Y-11008',1,0.00,567.00,'2022-02-26 09:14:14',NULL,1),(51,1,'SEG-URO',NULL,'Garantia y Seguro de Mercaderia',1,0.00,0.01,'2022-05-17 08:52:41',NULL,1),(52,1,'REC-HAZO',NULL,'Por Cobro de Cheque Rechazado',1,0.00,100.00,'2022-06-06 11:05:15',NULL,1),(53,1,'DEV-00008',NULL,'400 Y-14226 Chorro de 3/4 Zinc Mediano',1,0.00,7284.00,'2022-06-15 13:13:42',NULL,1),(54,1,'MUE-STRA',NULL,'Por 1 muestrario',1,0.00,4.90,'2022-07-20 12:24:36',NULL,1),(55,1,'PRO-PAGO',NULL,'Por Descuento Pronto Pago',1,0.00,0.01,'2023-12-04 14:13:12',NULL,1),(56,1,'DEV-PRODU',NULL,'Devolucion Producto',1,0.00,0.01,'2023-12-19 09:12:11',NULL,1),(57,1,'STR-NCMP',NULL,'Stretch Negro Completo',1,45.00,45.00,'2024-03-08 09:00:59',NULL,1),(58,1,'STR-NCOR',NULL,'Stretch Negro Cortado',1,24.33,24.33,'2024-03-08 09:01:00',NULL,1),(59,1,'STR-TCMP',NULL,'Stretch Transparente Completo',1,45.00,45.00,'2024-03-08 09:01:00',NULL,1),(60,1,'STR-TCOR',NULL,'Stretch Transparente Cortado',1,24.33,24.33,'2024-03-08 09:01:00',NULL,1),(61,1,'CIN-TA',NULL,'Cinta Para Empaque',1,6.98,6.98,'2024-03-08 09:01:00',NULL,1),(62,1,'PIT-A',NULL,'Pita para Empaque',1,0.01,40.00,'2024-03-08 09:01:00',NULL,1),(63,1,'BOT-AS',NULL,'Botas Punta Acero',1,0.01,700.00,'2024-03-08 09:01:01',NULL,1);
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 18:56:30
