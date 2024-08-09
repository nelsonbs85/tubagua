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
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int DEFAULT '1',
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nombre` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pais_id` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `direccion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefono1` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefono2` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `celular1` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `celular2` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(145) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,1,'RAP-INDCO','Rapid Industry Co., Ltd.','2','Flat 604, South Building, No.389 Ba Yi Road West, Changsha, Hunan, China 410001',NULL,NULL,NULL,NULL,NULL,'2020-08-10 22:21:30',NULL,NULL,1),(2,1,'HUA-LIAN','Hualianda Trading Co., Limited','3','RM 19C LockHart CTR 301-307, Lockhart RD, Wan Chai, Hong Kong','0086-318-7524018','00886-318-7523505',NULL,NULL,NULL,'2020-08-10 22:27:19',NULL,NULL,1),(3,1,'ZHE-XPVL','Zhejiang Xier Plastic Valve Lead Co., LTD','2','Daoxu Industrial Zone, Shangyu area, Shaoxing City, Zhejiang Province, China',NULL,NULL,NULL,NULL,NULL,'2020-08-10 22:31:49',NULL,NULL,1),(4,1,'NAN-JING','Nanjing Top Hardwares Co., Ltd.','2','Room 1818-1819, Liao Building, 323 Zhongyang Road, Nanjing City, Jiangsu, China',NULL,'86 13605185873',NULL,NULL,NULL,'2020-08-10 22:33:58',NULL,NULL,1),(5,1,'JIA-XING','Jiaxing Weiming Fluorine Co., Ltd.','2','No.633 Xingzhen Road, Xincheng Town, Jiaxing, Zhejiang, China',NULL,NULL,NULL,NULL,NULL,'2020-08-10 22:36:44',NULL,NULL,1),(6,1,'TAI-ZHOU','Taizhou Xuoxin Plastics Co., Ltd.','2','No.68 Jingang Road, Jiangkou Street, Huangyan, Taizhou, Zhejiang, China','86-576-84035982','86-576-84035983',NULL,NULL,NULL,'2020-08-10 22:39:23',NULL,NULL,1),(7,1,'LIN-YI','Linyi Galaxy & Pro-Dragon Trading Co., Ltd.','2','Zhaojia Village, Jiuqu Town, Hedong District, Linyi City, Shandong China',NULL,NULL,NULL,NULL,NULL,'2020-08-10 22:41:57',NULL,NULL,1),(8,1,'HAN-GZHOU','Hangzhou Ag Machinery Co.m Ltd.','2','C706, New Century Centre, Xiaoshan, Hangzhou, China','0086-571-82657992','0086-571-82657993',NULL,NULL,'ag@agjacuzzi.com','2020-08-11 09:08:12',NULL,NULL,1),(9,1,'NIN-GBOWF','Ningbo Western Fitting Co., Ltd.','2','510-511 Block B No.39 Alley Huanche West Road Southern Part Haishu District Ningbo China',NULL,NULL,NULL,NULL,NULL,'2020-09-07 16:15:39',NULL,NULL,1),(10,1,'KUV-Z05','Kuval, S.A','1','27 calle 37-50 Zona 5, Comercial la Joya Bodega 11',NULL,NULL,NULL,NULL,'kuvalgt@outlook.com','2020-09-08 20:18:10',NULL,NULL,1),(11,1,'BOJ-ACK','Bo-Jack Trading Co., Ltd.','3',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-21 16:22:54',NULL,NULL,1),(12,1,'PRO-GMB','Promatech Trading GMBH','4',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-21 16:22:54',NULL,NULL,1),(13,1,'IMA-FEZ05','IMAFE, S.A.','1','Arco 5-7 Casa 72 Jardines de la Asuncion Zona 5, Guatemala, Guatemala','',NULL,'40433328',NULL,NULL,'2020-09-24 16:02:43',NULL,NULL,1),(14,1,'DIS-PACIF','Distribuidora El Pacifico, S.A','1','2a. Ave 1a. Calle 1-74 Zona 9, Guatemala, Guatemala',NULL,NULL,NULL,NULL,NULL,'2020-09-28 14:57:38',NULL,NULL,1),(15,1,'CEM-ACO','Nuevos Almacenes','1',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-28 15:25:34',NULL,NULL,1),(16,1,'VAL-CALI','Proveedor Valvs De Calidad','1',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-28 17:15:00',NULL,NULL,1),(17,1,'HIN-SAZ05','Herramientas Industriales, S.A.','1','27 Calle 37-50 Zona 5, Comercial La Joya Bodega No. 2',NULL,NULL,NULL,NULL,NULL,'2020-09-30 17:23:28',NULL,NULL,1),(18,1,'TRM-INTTC','Trm International Trading Co., Limited','2',NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-01 15:47:26',NULL,NULL,1),(19,1,'TUB-AGUA','Tubagua, S.A.','1',NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-15 13:54:56',NULL,NULL,1),(20,1,'DUR-MAN','Durman Esquivel Guatemala S.A','1','Km 19.5 Carretera al Pacifico Villa Nueva, Guatemala',NULL,NULL,NULL,NULL,NULL,'2020-10-27 21:02:06',NULL,NULL,1),(21,1,'ACH-WMESH','Anping County Huaxing Wire Mesh Co., Ltd.','2',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-24 11:44:56',NULL,NULL,1),(22,1,'FAM-','FAMA Technology Foundry S.A. de C.V.','5',NULL,NULL,NULL,NULL,NULL,NULL,'2021-06-29 08:45:31',NULL,NULL,1),(23,1,'TRU-MY','Zhenjiang Trumy Industrial Co., Ltd.','2',NULL,NULL,NULL,NULL,NULL,NULL,'2021-09-29 10:33:07',NULL,NULL,1),(24,1,'SHA-LOM','Distribuidora y Ferreteria Shalom','1','4ta avenida 4-00 Zona 5, Villa Nueva, Guatemala','35111164','66316119','56725288','50601979',NULL,'2021-10-05 12:03:41',NULL,NULL,1),(25,1,'ULT-RALOM','Industrias Plásticas Ultratlón S.A. de C.V','5',NULL,NULL,NULL,NULL,NULL,NULL,'2022-01-12 15:52:37',NULL,NULL,1),(26,1,'SUP-LIMAS','Suplimaster','1','1 avenida 6-26, Zona 2, Chichimecas, Villa Canales, Guatemala',NULL,NULL,NULL,NULL,NULL,'2022-01-14 08:24:21',NULL,NULL,1),(27,1,'ASE-NCO','Asenco, S.A','1','8 Calle 13-47 Granja San Cristobal, Zona 8 Mixmo',NULL,NULL,NULL,NULL,NULL,'2022-02-01 08:39:14',NULL,NULL,1),(28,1,'DON-CRUZ','Valvulas y Reposaderas Don Cruz','1',NULL,'5380 6771',NULL,'5380 6771',NULL,NULL,'2022-02-11 13:18:12',NULL,NULL,1),(29,1,'AST-URIA','Distribuidora y Ferreteria Asturias, S.A.','1','3ra. avenida 2-62 zona 9, Guatemala, Guatemala',NULL,NULL,NULL,NULL,NULL,'2022-02-28 13:00:18',NULL,NULL,1),(30,1,'CAR-LOLO','Carlos Lopez','1',NULL,'36176300',NULL,'36176300',NULL,NULL,'2022-05-27 13:45:30',NULL,NULL,1),(31,1,'NHH-PRO','Ningbo Hope Hardware Products Co., Ltd.','2',NULL,NULL,NULL,NULL,NULL,NULL,'2022-06-17 19:42:53',NULL,NULL,1),(32,1,'CRO-WN','Shanghai Crown International Trading Co., Ltd.		','2',NULL,NULL,NULL,NULL,NULL,NULL,'2022-06-28 08:38:09',NULL,NULL,1),(33,1,'DIS-BM','BM comercializadora - Melanie Bonilla','1',NULL,'32090423',NULL,'38083407',NULL,'bm.comercializadora.gt@gmail.com','2022-08-19 13:35:26',NULL,NULL,1),(34,1,'TAI-KELE','Taizhoy Kele Hose Industry Co Ltd','2',NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-17 14:39:06',NULL,NULL,1),(35,1,'HSI-ITRA','High Sheen Industry And International Trades','2',NULL,NULL,NULL,NULL,NULL,NULL,'2023-06-21 11:48:40',NULL,NULL,1),(36,1,'CEL-ASA','Celasa','1',NULL,NULL,NULL,NULL,NULL,NULL,'2023-06-30 13:20:27',NULL,NULL,1),(37,1,'ANC-LO','Difassa - Anclo','1','27 calle 37-50 Zona 5, Comercial la Joya Bodega 9','56396764',NULL,NULL,NULL,'rgdifassaguatemala2023@gmail.com','2023-11-09 11:38:27',NULL,NULL,1),(38,1,'POL-SUR','Poliductos La Sureña','1','Lote 20 sector D Residenciales luisa Alejandra 1 zona 10 San Miguel Petapa, Guatemala',NULL,NULL,NULL,NULL,NULL,'2024-01-11 13:54:16',NULL,NULL,1),(39,1,'PIP-SAGT','PIPSA','1','KM 123 CALLE PRINCIPAL CA 0137 BARRIO BARRANCA SECA ZONA 4 Teculutan Zacapa','','','','','','2024-01-31 16:03:23',NULL,'',1),(40,1,'ANP-RENQI','Anping Renqi Wire Mesh Products','2','','','','','','','2024-02-02 11:18:16',NULL,'',1),(41,1,'PAI-SA','Paisa','1','4a Avenida 4-37 zona 8, Ciudad San Cristóbal, Mixco, Guatemala ','22440500','','','','','2024-03-07 08:35:29',NULL,'',1),(42,1,'POL-EDG','COMRI-REPPGUA Poliductos','1','','','','','','','2024-04-13 11:04:45',NULL,'',1);
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:07:28
