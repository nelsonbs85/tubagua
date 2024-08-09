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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `padre` int NOT NULL,
  `tipo` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `observaciones` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=342 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'FER','Ferreteria',0,'C',NULL,'2022-02-17 13:53:58',NULL,1),(2,'VLAT','Valulas de Laton y Zinc',0,'C','','2022-02-17 13:53:58',NULL,1),(3,'VPVC','Valvulas de PVC',0,'C',NULL,'2022-02-17 13:53:58',NULL,1),(4,'PVC','Accesorios de PVC',0,'C',NULL,'2022-02-17 13:53:58',NULL,1),(5,'DRJ','Accesorio Drenaje PVC',0,'C','','2022-02-17 13:53:58',NULL,1),(6,'CPVC','Accesorio de CPVC',0,'C',NULL,'2022-02-17 13:53:58',NULL,1),(7,'FAM','FAMA',0,'C',NULL,'2022-02-17 13:53:58',NULL,1),(9,'BIS-AGRA','Bisagras',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(10,'BRO-CA','Brocas',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(11,'BRO-CHA','Brochas',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(12,'FEL-PA','Felpa',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(13,'DUC-HA','Ducha',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(14,'CAD-ENA','Cadena',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(15,'CGG-T','ChuGriGuaTe',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(16,'CAN-DADO','Candado',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(17,'CED-AZO','Cedazo',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(18,'CEP-CON','Cepillo y Conector',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(19,'CLA-VO','Clavo',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(20,'COP-AS','Copas',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(21,'CRA-CUCHA','Crayon y Cuchara',1,'SC','','2022-02-17 14:44:26',NULL,1),(22,'DES-AGÜE','Desagüe',1,'SC','','2022-02-17 14:44:26',NULL,1),(23,'DES-ARMAD','Desarmador',1,'SC','','2022-02-17 14:44:26',NULL,1),(24,'DEG-HA','DesExGraHa',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(25,'ESP-ATULA','Espatulas',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(26,'HIL-ANZUE','Hilo y Anzuelo',1,'SC','','2022-02-17 14:44:26',NULL,1),(27,'LLA-VECCO','Llave Cola Corona',1,'SC','','2022-02-17 14:44:26',NULL,1),(28,'MAN-MART','Manecilla Y Martillo',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(29,'REM-ACHE','Remache Pop',1,'SC','','2022-02-17 14:44:26',NULL,1),(30,'USA-REPIL','Reposaderas, Valvs Para Pila y Tortillera',1,'SC','','2022-02-17 14:44:26',NULL,1),(31,'ROD-OGIRA','Rodos Giratorios',1,'SC','','2022-02-17 14:44:26',NULL,1),(32,'TEF-LON','Teflon',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(33,'TOR-NILLO','Tornillos',1,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(34,'VAL-BOLA','Valvulas de Bola',2,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(35,'COM-PUERT','Compuertas',2,'SC','','2022-02-17 14:44:26',NULL,1),(36,'FLO-TE','Flote Para Tanque',2,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(37,'CHE-HORIZ','Cheque Horizontal',2,'SC','','2022-02-17 14:44:26',NULL,1),(38,'CHE-VERTI','Cheque Vertical',2,'SC','','2022-02-17 14:44:26',NULL,1),(39,'CHE-UNIY','Cheque Universal Tipo Y',2,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(40,'CON-LLAVE','Contrallaves',2,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(41,'CRU-AIRE','Llave Tipo Cruz y Valvula de Aire',2,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(42,'LLA-DUCHA','Llave para Ducha',2,'SC',NULL,'2022-02-17 16:30:21',NULL,1),(43,'CHO-RRO','Llaves de Chorro',2,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(44,'LLA-LAVAM','Llave para Lavamanos',2,'SC','','2022-02-17 14:44:26',NULL,1),(45,'PVC-BOLA','Valvulas de Bola PVC',3,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(46,'CHQ-VEPVC','Cheque Vertical PVC',3,'SC','','2022-02-17 14:44:26',NULL,1),(47,'PVC-CHORR','Llave de Chorro PVC',3,'SC','','2022-02-17 14:44:26',NULL,1),(48,'PVC-UNION','Uniones PVC',4,'SC','','2022-02-17 14:44:26',NULL,1),(49,'PVC-CODO','Codo PVC',4,'SC','','2022-02-17 14:44:26',NULL,1),(50,'PVC-TAPON','Tapon PVC',4,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(51,'PVC-ABRAZ','Silleta-Flanger-Aspersor-Abrazaderas PVC',4,'SC','','2022-02-17 14:44:26',NULL,1),(52,'PVC-CRUYE','Cruz y Yee PVC',4,'SC','','2022-02-17 14:44:26',NULL,1),(53,'PVC-TEE','Tee PVC',4,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(54,'PVC-COPAD','Copla y Adaptadores PVC',4,'SC','','2022-02-17 14:44:26',NULL,1),(55,'PVC-REDUC','Reducidores PVC',4,'SC','','2022-02-17 14:44:26',NULL,1),(56,'PVC-DRCOD','Codo Drenaje PVC',5,'SC','','2022-02-17 14:44:26',NULL,1),(57,'DRE-YEETE','Yee y Tee y Cruz Drenaje PVC',5,'SC','','2022-02-17 14:44:26',NULL,1),(58,'DRE-UNIPV','Union Drenaje PVC',5,'SC','','2022-02-17 14:44:26',NULL,1),(59,'DRE-TAPON','Tapon Drenaje PVC',5,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(60,'DRE-REDUC','Reducidor Drenaje PVC',5,'SC','','2022-02-17 14:44:26',NULL,1),(61,'COD-CPVC','Codo CPVC',6,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(62,'TEE-CPVC','Tee CPVC',6,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(63,'COP-CPVC','Copla CPVC',6,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(64,'TAP-CPVC','Tapon CPVC',6,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(65,'ADP-CPVC','Adaptador CPVC',6,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(66,'RED-CPVC','Reducidor CPVC',6,'SC',NULL,'2022-02-17 14:44:26',NULL,1),(67,'SAN-TRAMA','Para Sanitario, Lavatrastos y Lavamanos',7,'SC','','2022-02-17 14:44:26',NULL,1),(68,'FAM-MANGU','Mangueras de Abasto',7,'SC','','2022-02-17 14:44:26',NULL,1),(69,'ABR-AZADE','Abrazadera',1,'SC','','2022-02-17 16:19:30',NULL,1),(70,'ABR-GALV','Abrazadera Galvanizada',69,'SSC',NULL,'2022-02-17 16:39:03',NULL,1),(71,'PUL-PESAD','Bisagra Pulida Pesada',9,'SSC','','2022-02-17 16:39:03',NULL,1),(72,'CUA-SINTO','Bisagra Cuadrada Sin Tornillo',9,'SSC','','2022-02-17 16:39:03',NULL,1),(73,'LAT-CONTO','Bisagra Latonada con Tornillo',9,'SSC','','2022-02-17 16:39:03',NULL,1),(74,'GAB-INETE','Bisagra Para Gabinete',9,'SSC','','2022-02-17 16:39:03',NULL,1),(75,'CAR-CILIN','Bisagra de Cartucho Cilindrica',9,'SSC','','2022-02-17 16:39:03',NULL,1),(76,'CAR-BANDE','Bisagra de Cartucho Con Bandera',9,'SSC','','2022-02-17 16:39:03',NULL,1),(77,'BRO-CRETO','Broca para Concreto Raíz 1/2',10,'SSC','','2022-02-17 16:39:03',NULL,1),(78,'MAD-TIRAB','Broca para Madera Tirabuzon Barreno',10,'SSC','','2022-02-17 16:39:03',NULL,1),(79,'MAD-PALEB','Broca para Madera Paleta Barreno',10,'SSC','','2022-02-17 16:39:03',NULL,1),(80,'BRO-HIERR','Broca para Hierro',10,'SSC','','2022-02-17 16:39:03',NULL,1),(81,'MAN-MADER','Brocha Mango Madera Filamento Sintetico',11,'SSC','','2022-02-17 16:39:03',NULL,1),(82,'FEL-RODIL','Felpa Para Rodillo',12,'SSC','','2022-02-17 16:39:03',NULL,1),(83,'CAB-DUCHA','Cabeza de Ducha',13,'SSC','','2022-02-17 16:39:03',NULL,1),(84,'BRA-CHAPE','Ducha de Brazo con Chapeta',13,'SSC','','2022-02-17 16:39:03',NULL,1),(85,'CAD-SACO','Cadena en Saco',14,'SSC','','2022-02-17 16:39:03',NULL,1),(86,'CAD-ROLLO','Cadena en Rollo',14,'SSC','','2022-02-17 16:39:03',NULL,1),(87,'CHU-CHO','Chuchos',15,'SSC','','2022-02-17 16:39:03',NULL,1),(88,'GRI-LLETE','Grillete',15,'SSC','','2022-02-17 16:39:03',NULL,1),(89,'GUA-CABO','Guardacabo',15,'SSC','','2022-02-17 16:39:03',NULL,1),(90,'TEN-SOR','Tensor',15,'SSC','','2022-02-17 16:39:03',NULL,1),(91,'HIE-CROWN','Candado Hierro Fundido CROWN',16,'SSC','','2022-02-17 16:39:03',NULL,1),(92,'HIE-GLOBE','Candado Hierro Fundido GLOBE',16,'SSC','','2022-02-17 16:39:03',NULL,1),(93,'LAT-LIVGL','Candado Laton Liviano GLOBE',16,'SSC','','2022-02-17 16:39:03',NULL,1),(94,'PUL-PEGLO','Candado Laton Pulido PEsado GLOBE',16,'SSC','','2022-02-17 16:39:03',NULL,1),(95,'LAT-OVAPE','Candado Laton Oval Pesado GLOBE',16,'SSC','','2022-02-17 16:39:03',NULL,1),(96,'LAT-LABPE','Candado Laton Labrado Pesado GLOBE',16,'SSC','','2022-02-17 16:39:03',NULL,1),(97,'LAT-ARCOG','Candado Laton Pesado Arco Grande',16,'SSC','','2022-02-17 16:39:03',NULL,1),(98,'MOS-VIDRI','Cedazo Mosquitero Fibra de Vidrio',17,'SSC','','2022-02-17 16:39:03',NULL,1),(99,'MOS-METAL','Cedazo Mosquitero Metal',17,'SSC','','2022-02-17 16:39:03',NULL,1),(100,'HAR-ELECT','Cedazo Harnero Electrogalvanizado',17,'SSC','','2022-02-17 16:39:03',NULL,1),(101,'HAR-FUEGO','Cedazo Harnero al Fuego',17,'SSC','','2022-02-17 16:39:03',NULL,1),(102,'GAL-FUEGO','Cedazo Gallinero Galv. Al Fuego',17,'SSC','','2022-02-17 16:39:03',NULL,1),(103,'CEP-ILLO','Cepillo',18,'SSC','','2022-02-17 16:39:03',NULL,1),(104,'CON-YPLAS','Conector plastico Tipo Y para lavadora',18,'SSC','','2022-02-17 16:39:03',NULL,1),(105,'CLA-CRETO','Clavo para concreto',19,'SSC','','2022-02-17 16:39:03',NULL,1),(106,'CRO-ERAIZ','Copa Cromada Estriada Raiz',20,'SSC','','2022-02-17 16:39:03',NULL,1),(107,'HEX-BRUJI','Copa Hexagonal para Bujias ',20,'SSC','','2022-02-17 16:39:03',NULL,1),(108,'CRA-CARPI','Crayon para Carpintero',21,'SSC','','2022-02-17 16:39:03',NULL,1),(109,'CUC-ALBAÑ','Cuchara para Albañil',21,'SSC','','2022-02-17 16:42:00',NULL,1),(110,'LAV-PCROM','Desagüe Lavamanos Plástico Cromado',22,'SSC','','2022-02-17 16:42:00',NULL,1),(111,'SIF-PCROM','Desagüe y Sifón Lavamanos Plástico Cromado',22,'SSC','','2022-02-17 16:42:00',NULL,1),(112,'GAV-CASTI','Desarmador Tipo Gabinete Castigadera',23,'SSC','','2022-02-17 16:42:00',NULL,1),(113,'CAS-TIGAD','Desarmador Castigadera',23,'SSC','','2022-02-17 16:42:00',NULL,1),(114,'DES-PHILL','Desarmador Phillips',23,'SSC','','2022-02-17 16:42:00',NULL,1),(115,'DES-INODO','Destapador para Inodoro',24,'SSC','','2022-02-17 16:42:00',NULL,1),(116,'EXT-TRAST','Extension para Lavatrastos',24,'SSC','','2022-02-17 16:42:00',NULL,1),(117,'GRA-PAFAJ','Grapa Para Faja',24,'SSC','','2022-02-17 16:42:00',NULL,1),(118,'HAL-ADOR','Halador',24,'SSC','','2022-02-17 16:42:00',NULL,1),(119,'ESP-MMADE','Espatula Mango Madera',25,'SSC','','2022-02-17 16:42:00',NULL,1),(120,'ESP-MPLAS','Espatula Mango Plastico',25,'SSC','','2022-02-17 16:42:00',NULL,1),(121,'HIL-USAK','Hilo Para Pescar USA-K',26,'SSC','','2022-02-17 16:42:00',NULL,1),(122,'HIL-ULTRA','Hilo par pescar ULTRALOM',26,'SSC','','2022-02-17 16:42:00',NULL,1),(123,'COL-CORON','Llave Cola Corona',27,'SSC','','2022-02-17 16:42:00',NULL,1),(124,'MAN-ESANI','Manecilla para Sanitario',28,'SSC','','2022-02-17 16:42:00',NULL,1),(125,'MAR-TIUÑA','Martillo de Uña',28,'SSC','','2022-02-17 16:42:53',NULL,1),(126,'REM-POP','Remache Pop ',29,'SSC','','2022-02-17 16:42:53',NULL,1),(127,'ALA-ANCHA','Remache Pop Ala Ancha',29,'SSC','','2022-02-17 16:42:53',NULL,1),(128,'USA-RCALU','Reposadera Cuadrada de Aluminio',30,'SSC','','2022-02-17 16:42:53',NULL,1),(129,'USA-RRALU','Reposadera Redonda de Aluminio',30,'SSC','','2022-02-17 16:42:53',NULL,1),(130,'USA-PIALU','Valvulas de Aluminio para Pila',30,'SSC','','2022-02-17 16:42:53',NULL,1),(131,'USA-RCBRO','Reposadera Cuadrada de Bronce',30,'SSC','','2022-02-17 16:42:53',NULL,1),(132,'USA-PILBR','Valvula de Bronce para Pila',30,'SSC','','2022-02-17 16:42:53',NULL,1),(133,'ROD-HULE','Rodo Giratorio de Hule',31,'SSC','','2022-02-17 16:42:53',NULL,1),(134,'ROD-METAL','Rodo Giratorio de Metal',31,'SSC','','2022-02-17 16:42:53',NULL,1),(135,'TEF-LOUNI','Teflon  por Unidad',32,'SSC','','2022-02-17 16:42:53',NULL,1),(136,'ALT-TEUNI','Teflon Alta Tension Unidad',32,'SSC','','2022-02-17 16:42:53',NULL,1),(137,'ALT-TEBL2','Teflon Alta Tension Blister de 2',32,'SSC','','2022-02-17 16:42:53',NULL,1),(138,'ALT-TEBL3','Teflon Alta Tension Blister de 3',32,'SSC','','2022-02-17 16:42:53',NULL,1),(139,'POL-HPBRO','Tornillo Polser Hexagonal Punta Broca',33,'SSC','','2022-02-17 16:42:53',NULL,1),(140,'POL-HBROS','Tornillo Polser Hexagonal Busca Rosca',33,'SSC','','2022-02-17 16:42:53',NULL,1),(141,'MAD-PHILL','Tornillo Para Madera Phillips',33,'SSC','','2022-02-17 16:42:53',NULL,1),(142,'MAD-SPAXP','Tornillo Para Madera Spax Punta Pozidrive',33,'SSC','','2022-02-17 16:42:53',NULL,1),(143,'YES-ORDIN','Tornillo Tablayeso Rosca Ordinaria',33,'SSC','','2022-02-17 16:42:53',NULL,1),(144,'BOL-ZINC','Valvulas de Bola Zinc',34,'SSC','','2022-02-17 16:42:53',NULL,1),(145,'BOL-CROMA','Valvulas de Bola Latón Cromado',34,'SSC','','2022-02-17 16:42:53',NULL,1),(146,'BOL-LATON','Valvulas de Bola Laton',34,'SSC','','2022-02-17 16:42:53',NULL,1),(147,'COM-MEDIA','Compuerta Tipo Mediana',35,'SSC','','2022-02-17 16:42:53',NULL,1),(148,'COM-PESAD','Compuerta Tipo Pesada',35,'SSC','','2022-02-17 16:42:53',NULL,1),(149,'FLO-TANQU','Flote para Tanque',36,'SSC','','2022-02-17 16:42:53',NULL,1),(150,'HOR-MEDIA','Cheque Horizontal Mediano',37,'SSC','','2022-02-17 16:42:53',NULL,1),(151,'VER-MEDIA','Cheque Vertical Mediano',38,'SSC','','2022-02-17 16:42:53',NULL,1),(152,'CHQ-UNIY','Cheque Universal Tipo Y',39,'SSC','','2022-02-17 16:42:53',NULL,1),(153,'CON-PARED','Contrallave a la Pared',40,'SSC','','2022-02-17 16:42:53',NULL,1),(154,'CON-PISO','Contrallave al Piso',40,'SSC','','2022-02-17 16:42:53',NULL,1),(155,'LLA-CRUZ','Llave Tipo Cruz',41,'SSC','','2022-02-17 16:42:53',NULL,1),(156,'LLA-ALIVI','Llave de Alivio (Aire)',41,'SSC','','2022-02-17 16:42:53',NULL,1),(157,'BOL-DUCHL','Llave de Bola Ducha Tipo L',42,'SSC','','2022-02-17 16:42:53',NULL,1),(158,'BOL-DUACR','Llave de Bola Ducha Mango Acrilico',42,'SSC','','2022-02-17 16:42:53',NULL,1),(159,'GLO-DUCHA','Llave de Globo Ducha',42,'SSC','','2022-02-17 16:42:53',NULL,1),(160,'BOL-CZINC','Chorro Bola Zinc 1/2 - 3/4',43,'SSC','','2022-02-17 16:42:53',NULL,1),(161,'BOL-CLATO','Llave Chorro Bola Laton 1/2 - 3/4',43,'SSC','','2022-02-17 16:42:53',NULL,1),(162,'CHO-ZINC','Llave Chorro Zinc',43,'SSC','','2022-02-17 16:42:53',NULL,1),(163,'CHO-LATON','Llave Chorro Laton',43,'SSC','','2022-02-17 16:42:53',NULL,1),(164,'LAV-PLCRO','Llave Para Lavamanos Plástico Cromado',44,'SSC','','2022-02-17 16:42:53',NULL,1),(165,'PVC-MARIP','Valvula de Bola Lisa Mariposa PVC',45,'SSC','','2022-02-17 16:42:53',NULL,1),(166,'PVC-LIPAL','Valvula de Bola Lisa Palanca PVC',45,'SSC','','2022-02-17 16:42:53',NULL,1),(167,'PVC-LI2PI','Valvula de Bola Lisa PVC 2 Piezas Mango Acero Inox',45,'SSC','','2022-02-17 16:42:53',NULL,1),(168,'PVC-BOLRO','Valvula de Bola Con Rosca PVC',45,'SSC','','2022-02-17 16:42:53',NULL,1),(169,'PIE-PVCLI','Valvula de Pie Lisa PVC',46,'SSC','','2022-02-17 16:42:53',NULL,1),(170,'VAL-PIERO','Valvula de Pie con Rosca',46,'SSC','','2022-02-17 16:42:53',NULL,1),(171,'CHO-RRPVC','Chorro PVC',47,'SSC','','2022-02-17 16:42:53',NULL,1),(172,'PVC-UUNIV','Union Universal',48,'SSC','','2022-02-17 16:42:53',NULL,1),(173,'PVC-REPAR','Union Compresion (Reparacion)',48,'SSC','','2022-02-17 16:42:53',NULL,1),(174,'PVC-LIS90','Codo Liso a 90 PVC',49,'SSC','','2022-02-17 16:42:53',NULL,1),(175,'PVC-ROS90','Codo Liso a 90 Con Rosca PVC',49,'SSC','','2022-02-17 16:42:53',NULL,1),(176,'PVC-LIS45','Codo Liso a 45 PVC',49,'SSC','','2022-02-17 16:42:53',NULL,1),(177,'PVC-HLISO','Tapon Hembra Liso PVC',50,'SSC','','2022-02-17 16:42:53',NULL,1),(178,'PVC-HROSC','Tapon Hembra con Rosca PVC',50,'SSC','','2022-02-17 16:42:53',NULL,1),(179,'PVC-MROSC','Tapon Macho con Rosca PVC',50,'SSC','','2022-02-17 16:42:53',NULL,1),(180,'PVC-SILLE','Silleta PVC',51,'SSC','','2022-02-17 16:42:53',NULL,1),(181,'PVC-CRUZ','Cruz PVC',52,'SSC','','2022-02-17 16:42:53',NULL,1),(182,'PVC-YEE','Yee PVC',52,'SSC','','2022-02-17 16:42:53',NULL,1),(183,'PVC-TEELI','Tee Lisa PVC',53,'SSC','','2022-02-17 16:42:53',NULL,1),(184,'PVC-TEROS','Tee con Rosca PVC',53,'SSC','','2022-02-17 16:42:53',NULL,1),(185,'PVC-UNILI','Copla (union) Lisa PVC',54,'SSC','','2022-02-17 16:42:53',NULL,1),(186,'PVC-ADPHE','Adaptador Hembra (Copla con Rosca) PVC',54,'SSC','','2022-02-17 16:42:53',NULL,1),(187,'PVC-ADPMA','Adaptador Macho PVC',54,'SSC','','2022-02-17 16:42:53',NULL,1),(188,'PVC-REDLI','Reducidor Liso PVC',55,'SSC','','2022-02-17 16:42:53',NULL,1),(189,'PVC-REROS','Reducidor con Rosca PVC',55,'SSC','','2022-02-17 16:42:53',NULL,1),(190,'PVC-DRE90','Codo Drenaje PVC a 90',56,'SSC','','2022-02-17 16:42:53',NULL,1),(191,'PVC-DRE45','Codo Drenaje PVC a 45',56,'SSC','','2022-02-17 16:42:53',NULL,1),(192,'PVC-DRETE','Tee Drenaje PVC',57,'SSC','','2022-02-17 16:42:53',NULL,1),(193,'CPV-TERED','Tee Reducida CPVC',57,'SSC','','2022-02-17 16:42:53',NULL,1),(194,'PVC-YEDRE','Yee Drenaje PVC',57,'SSC','','2022-02-17 16:42:53',NULL,1),(195,'DRE-COPVC','Copla (Union) Drenaje PVC',58,'SSC','','2022-02-17 16:42:53',NULL,1),(196,'DRE-TAPHE','Tapon Hembra Drenaje',59,'SSC','','2022-02-17 16:42:53',NULL,1),(197,'DRE-REDPV','Reducidor Drenaje PVC',60,'SSC','','2022-02-17 16:42:53',NULL,1),(198,'C90-CPVC','Codo a 90 CPVC',61,'SSC','','2022-02-17 16:42:53',NULL,1),(199,'C45-CPVC','Codo a 45 CPVC',61,'SSC','','2022-02-17 16:42:53',NULL,1),(200,'TEE-LCPVC','Tee Lisa CPVC',62,'SSC','','2022-02-17 16:42:53',NULL,1),(201,'COP-LCPVC','Copla Lisa CPVC',63,'SSC','','2022-02-17 16:42:53',NULL,1),(202,'TAP-HCPVC','Tapon Hembra CPVC',64,'SSC','','2022-02-17 16:42:53',NULL,1),(203,'ADP-HCPVC','Adaptador Hembra CPVC',65,'SSC','','2022-02-17 16:42:53',NULL,1),(204,'TAP-MCPVC','Adaptador Macho CPVC',65,'SSC','','2022-02-17 16:42:53',NULL,1),(205,'RED-BCPVC','Reducidor Bushing CPVC',66,'SSC','','2022-02-17 16:42:53',NULL,1),(206,'FAM-SANI','Accesorios para Sanitario',67,'SSC','','2022-02-17 16:42:53',NULL,1),(207,'DES-SIFON','Desague y Sifones para Lavamanos y Lavadoras',67,'SSC','','2022-02-17 16:42:53',NULL,1),(208,'BRI-REPEM','Brida, Empaque,Manecilla Y reposadera',67,'SSC','','2022-02-17 16:42:53',NULL,1),(209,'FAM-SAPIT','Sapitos',67,'SSC','','2022-02-17 16:42:53',NULL,1),(210,'MAN-TRAMA','Para Lavamanos, Lavatrastos y Sanitario',68,'SSC','','2022-02-17 16:42:53',NULL,1),(211,'MAN-GSANI','Mangueras Solo para Sanitarios',68,'SSC','','2022-02-17 16:42:53',NULL,1),(213,'PRO-NACIO','Producto Nacional',0,'C','Valvulas para pila, reposaderas aluminio y bronce','2022-03-30 12:02:18',NULL,1),(214,'VAL-PILA','Valvulas para Pila',213,'SC','','2022-03-30 12:03:29',NULL,1),(215,'PIL-ALUMI','Valvulas para Pila Aluminio',214,'SSC','','2022-03-30 12:04:08',NULL,1),(216,'PIL-BRONC','Valvulas para Pila de Bronce',214,'SSC','','2022-03-30 12:04:43',NULL,1),(217,'OTR-OS','Otros',0,'C','Para poner lo q no se sabe donde','2022-07-25 14:54:47',NULL,1),(218,'SUB-OTROS','Sub Otros',217,'SC','','2022-07-25 14:55:37',NULL,1),(219,'SUB-SUOTR','Sub Sub Otros',218,'SSC','aca van los q no se sabe donde de momento','2022-07-25 14:56:17',NULL,1),(220,'ANZ-UELO','Anzuelo para Pescar',26,'SSC','','2022-07-27 11:01:26',NULL,1),(221,'REP-OSNAC','Reposaderas',213,'SC','','2022-07-27 11:04:41',NULL,1),(222,'TOR-TILLE','Tortillera',213,'SC','','2022-07-27 11:05:02',NULL,1),(223,'PLO-MO','Plomo',213,'SC',NULL,'2022-07-27 11:05:33',NULL,1),(224,'LET-NUM','Letras y Numeros ',213,'SC',NULL,'2022-07-27 11:06:12',NULL,1),(225,'REP-CALUM','Reposadera Cuadrada de Aluminio',221,'SSC','','2022-07-27 11:08:13',NULL,1),(226,'REP-CBRON','Reposadera Cuadradad de Bronce',221,'SSC','','2022-07-27 11:08:59',NULL,1),(227,'REP-CZINC','Reposadera Cuadrada de Zinc',221,'SSC',NULL,'2022-07-27 11:08:59',NULL,1),(228,'REP-REALU','Reposadera Redonda de Aluminio',221,'SSC','','2022-07-27 11:09:31',NULL,1),(229,'TOR-ALUMI','Tortilleras de Aluminio',222,'SSC','','2022-07-27 11:10:45',NULL,1),(230,'PLO-BRMAD','Plomo Bronce con Nuez de Madera',223,'SSC','','2022-07-27 11:11:42',NULL,1),(231,'LET-ALUMI','Letras en Aluminio',224,'SSC','','2022-07-27 11:13:17',NULL,1),(232,'NUM-ALUMI','Numeros en Aluminio',224,'SSC','','2022-07-27 11:13:17',NULL,1),(233,'DRE-TAPMA','Tapon Macho Drenaje',59,'SSC','','2022-07-27 11:14:49',NULL,1),(234,'DRE-TAPVE','Tapon Ventilacion para Drenaje',59,'SSC','','2022-07-27 11:15:28',NULL,1),(235,'CRU-ZPVC','Cruz CPVC',6,'SC','','2022-07-27 11:16:29',NULL,1),(236,'CRU-LCPVC','Cruz Lisa CPVC',235,'SSC','','2022-07-27 11:17:06',NULL,1),(237,'PVC-HOR','Cheque Horizontal PVC',3,'SC',NULL,'2022-07-27 11:18:01',NULL,1),(238,'HOR-LPVC','Cheque Horizontal Liso PVC',237,'SSC',NULL,'2022-07-27 11:21:34',NULL,1),(239,'CAD-PERGA','Cadena para Perro Galvanizada de 1.6mm x 6 pies',14,'SSC','','2022-07-27 11:23:07',NULL,1),(240,'CON-DOBLE','Contrallave Doble',40,'SSC',NULL,'2022-07-27 11:24:07',NULL,1),(241,'CHO-ZC','Llave Chorro Zinc Cromada',43,'SSC',NULL,'2022-07-27 11:25:57',NULL,1),(242,'SAT-CONTO','Bisagra Satinada Con Tornillo',9,'SSC','','2022-07-27 11:27:15',NULL,1),(243,'COM-MEDRW','Compuerta Tipo Mediana RW',35,'SSC','','2022-09-08 17:31:24',NULL,1),(244,'COM-PESRW','Compuerta Tipo Pesada RW',35,'SSC','','2022-09-08 17:31:24',NULL,1),(245,'DRE-GRI90','Codo Drenaje GRIS PVC a 90 ',56,'SSC','','2022-09-22 13:45:19',NULL,1),(246,'TEE-DREGR','Tee Drenaje GRIS PVC',57,'SSC','','2022-09-22 13:53:25',NULL,1),(247,'MAN-GUERA','Mangueras USA-K',1,'SC','','2022-09-29 14:59:19',NULL,1),(248,'MPVC-TNA','Manguera Flex PVC Tuerca Nylon-Acero',247,'SSC','','2022-09-29 14:59:48',NULL,1),(249,'USA-RCZIN','Reposadera Cuadrada Zinc',30,'SSC','','2022-10-28 09:47:08',NULL,1),(250,'PUL-LIVIA','Bisagra Pulida Liviana',9,'SSC','','2022-12-15 14:59:03',NULL,3),(251,'LAT-ANTIG','Bisagra Pesada Laton Antiguo p/Puerta c/Tornillo',9,'SSC','','2022-12-15 18:58:21',NULL,3),(252,'COB-ANTIG','Bisagra Pesada Cobre Antiguo p/Puerta c/Tornillo',9,'SSC','','2022-12-15 18:59:29',NULL,3),(253,'PES-SATIN','Bisagra Pesada Satinada p/Puerta c/Tornillo',9,'SSC','','2022-12-15 19:00:24',NULL,3),(255,'CAD-PERNI','Cadena Para Perro Niquelada Con Correa',14,'SSC','','2022-12-15 19:11:46',NULL,3),(256,'REP-CLATO','Reposadera Cuadrada de Latón',30,'SSC','','2022-12-16 14:15:17',NULL,3),(258,'MPVC-TAC','Manguera Flex PVC Tuerca Acero',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(259,'MPVC-YTNA','Manguera Flex PVC Tipo Y Tuerca Nylon-Acero',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(260,'MPVC-YTAC','Manguera Flex PVC Tipo Y Tuerca Acero',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(261,'MALU-YTNA','Manguera Flex ALUM Tipo Y Tuerca Nylon-Acero',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(262,'MALU-YTAC','Manguera Flex ALUM Tipo Y Tuerca Acero',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(263,'MAIN-YTLA','Manguera Flex ACERO INOX Tipo Y Tuerca Laton',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(264,'MAN-LAVAD','Manguera Flex Para Llenado de Lavadora',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(265,'MAIN-TNA','Manguera Flex ACERO INOX Tuerca Nylon-Acero',247,'SSC',NULL,'2023-02-15 16:23:10',NULL,1),(266,'PEG-AME','Pegamento',1,'SC','','2023-04-28 12:45:38',NULL,1),(267,'PEG-PVC','Pegamento PVC Transparente Durman',266,'SSC','','2023-04-28 12:46:08',NULL,1),(270,'HIL-ROJO','Hilo Para Pescar ROJO',26,'SSC','','2023-05-13 09:31:10',NULL,1),(271,'ROD-HFRE','Rodo de Hule de Planchita Giratorio con Freno',31,'SSC','','2023-05-16 15:57:15',NULL,1),(272,'PEG-AZPVC','Pegamento PVC Azul Wet Bonding Durman ',266,'SSC','','2023-05-18 14:48:16',NULL,1),(276,'PLO-MOBA','Plomo Bronce Punta Acero',223,'SSC','','2023-05-25 16:54:08',NULL,1),(278,'BRA-CHA','Brazo y Chapeta para Ducha',13,'SSC','','2023-06-12 14:40:13',NULL,1),(279,'DUC-COMP','Ducha Completa',42,'SSC','','2023-06-12 14:50:12',NULL,1),(280,'DUC-CABEZ','Cabezo de Ducha Plastica',42,'SSC','','2023-06-12 14:50:39',NULL,1),(281,'BRZ-CHAP','Brazo y Chapeta Para Ducha',42,'SSC','','2023-06-12 14:51:21',NULL,1),(282,'CON-DUIT','Conduit',0,'C','','2023-06-27 21:35:27',NULL,1),(283,'CAJ-A','Cajas Conduit',282,'SC','','2023-06-27 21:36:24',NULL,1),(284,'CAJ-PLAST','Cajas Plasticas',283,'SSC','','2023-06-27 21:38:50',NULL,1),(286,'CAJ-METAL','Cajas Metalicas',283,'SSC','','2023-06-27 21:39:37',NULL,1),(287,'CON-ECTOR','Conector Conduit',282,'SC','','2023-06-27 21:40:45',NULL,1),(288,'UNI-ON','Union (Copla) Conduit',282,'SC','','2023-06-27 21:41:43',NULL,1),(289,'CUR-VA','Curva 90 (Vuelta) Conduit',282,'SC','','2023-06-27 21:42:08',NULL,1),(291,'CON-NARAN','Conector Conduit Naranja',287,'SSC','','2023-06-27 21:43:21',NULL,1),(298,'CON-GRIS','Conector Conduit GRIS',287,'SSC','','2023-06-27 21:46:44',NULL,1),(299,'UNI-GRIS','Union (Copla) Gris',288,'SSC','','2023-06-27 21:47:16',NULL,1),(300,'UNI-NARAN','Union (Copla) Naranja',288,'SSC','','2023-06-27 21:47:57',NULL,1),(301,'CUR-GRIS','Curva 90 (Vuelta) GRIS',289,'SSC','','2023-06-27 21:48:54',NULL,1),(302,'CUR-NARAN','Curva 90 (Vuelta) NARANJA',289,'SSC','','2023-06-27 21:49:42',NULL,1),(303,'TUB-COND','Tubo Conduit',282,'SC','','2023-06-27 21:52:55',NULL,1),(304,'TUB-GRIS','Tubo Conduit Gris',303,'SSC','','2023-06-27 21:53:21',NULL,1),(305,'TUB-NARAN','Tubo Conduit Naranja',303,'SSC','','2023-06-27 21:53:58',NULL,1),(307,'POL-DUCTO','Poliducto',303,'SSC','','2023-06-27 21:55:01',NULL,1),(308,'CDU-ABR','Abrazaderas',282,'SC','','2023-06-28 02:10:05',NULL,1),(309,'CDU-ABR1O','Abrazadera 1 Oreja',308,'SSC','','2023-06-28 02:12:36',NULL,1),(310,'CDU-ABR2O','Abrazadera 2 Orejas',308,'SSC','','2023-06-28 02:12:58',NULL,1),(311,'CDU-ABRHA','Abrazadera Para Cielo Hanger',308,'SSC','','2023-06-28 02:13:48',NULL,1),(312,'DRJ-CHEQE','Cheques Antiretorno',5,'SC','','2023-06-28 20:14:04',NULL,1),(313,'DRJ-CHQH','Cheque Horizontal Antiretorno',312,'SSC','','2023-06-28 20:14:38',NULL,1),(314,'DRJ-CRUZ','Cruz Drenaje PVC',57,'SSC','','2023-07-06 11:55:12',NULL,1),(315,'FER-COL','Colador Lavatrastos',24,'SSC','','2023-07-18 14:16:56',NULL,1),(316,'TUB-CPVC','Tubo CPVC',6,'SC','','2023-10-10 09:53:22',NULL,1),(317,'CPVC-TUBO','Tuberia CPVC',316,'SSC','','2023-10-10 09:53:43',NULL,1),(318,'CAD-CUBET','Cadena en Cubeta',14,'SSC','','2023-11-15 14:06:31',NULL,79),(319,'REP-PVC','Reposaderas PVC',4,'SC','','2023-12-08 11:45:14',NULL,1),(320,'REP-OPVC','Reposadera PVC',319,'SSC','','2023-12-08 11:46:33',NULL,1),(321,'VAL-CPVC','Valvulas CPVC',6,'SC','','2023-12-08 11:52:20',NULL,1),(322,'VAL-BCPVC','Valvulas de Bola CPVC',321,'SSC','','2023-12-08 11:52:43',NULL,1),(323,'DEP-BE','Depurable Buen Estado',0,'C','','2023-12-28 15:40:39',NULL,1),(325,'DEP-TODO','Todos',323,'SC','','2023-12-28 15:44:03',NULL,1),(326,'DEP-OTRO','Otros',325,'SSC','','2023-12-28 15:44:22',NULL,1),(327,'PEG-CPVC','Pegamento CPVC',266,'SSC','','2024-02-22 09:49:59',NULL,79),(328,'FLA-NGE','Flanger',51,'SSC','','2024-02-27 09:38:43',NULL,79),(329,'Flexitubo','Flexitubo',282,'SC','','2024-03-07 18:09:00',NULL,1),(330,'FLE-NEG','Flexitubo Negro',329,'SSC','','2024-03-07 18:09:26',NULL,1),(331,'FLE-NAR','Flexitubo Naranja',329,'SSC','','2024-03-07 18:09:41',NULL,1),(333,'FLE-CEL','Flexitubo Celeste',329,'SSC','','2024-03-07 18:14:10',NULL,1),(334,'TUB-EMT','Tuberia EMT Conduit',303,'SSC','','2024-04-11 10:00:58',NULL,1),(335,'CON-EMT','Conector EMT ',287,'SSC','','2024-04-11 10:06:38',NULL,1),(336,'VUE-EMT','Vuelta EMT',289,'SSC','','2024-04-11 10:11:36',NULL,1),(337,'UNI-EMT','Union (Copla) EMT',288,'SSC','','2024-04-11 10:15:50',NULL,1),(338,'MEZ-DORA','Mezcladoras para Ducha',42,'SSC','','2024-04-15 08:44:56',NULL,1),(339,'ABR-PVC','Abrazaderas PVC',51,'SSC','','2024-04-15 17:26:17',NULL,1),(340,'ASP-ERSOR','Aspersor Plastico',51,'SSC','','2024-04-15 17:26:50',NULL,1),(341,'TEE-DRED','Tee Reducida Para Drenaje',57,'SSC','','2024-04-15 17:58:49',NULL,1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:17:08