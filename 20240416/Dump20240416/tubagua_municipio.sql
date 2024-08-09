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
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `municipio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `departamento_id` int NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modifica` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=343 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'ALV-COB','Cobán',1,'2020-08-07 09:51:48',NULL,1),(2,'ALV-SCRUZ','Santa Cruz Verapaz',1,'2020-08-07 09:51:48',NULL,1),(3,'ALV-SCV','San Cristóbal Verapaz',1,'2020-08-07 09:51:48',NULL,1),(4,'ALT-TAC','Tactic',1,'2020-08-07 09:51:48',NULL,1),(5,'ALT-TAMAH','Tamahú',1,'2020-08-07 09:51:48',NULL,1),(6,'ALT-TUC','Tucurú',1,'2020-08-07 09:51:48',NULL,1),(7,'ALT-PANZ','Panzós',1,'2020-08-07 09:51:48',NULL,1),(8,'ALT-SENA','Senahú',1,'2020-08-07 09:51:48',NULL,1),(9,'ALT-PEDRO','San Pedro Carchá',1,'2020-08-07 09:51:48',NULL,1),(10,'ALT-SANCH','San Juan Chamelco',1,'2020-08-07 09:51:48',NULL,1),(11,'ALT-LANQ','Lanquín',1,'2020-08-07 09:51:48',NULL,1),(12,'ALT-CAHAB','Cahabón',1,'2020-08-07 09:51:49',NULL,1),(13,'ALT-CHIS','Chisec',1,'2020-08-07 09:51:49',NULL,1),(14,'ALT-CHAH','Chahal',1,'2020-08-07 09:51:49',NULL,1),(15,'ALT-FBCAS','Fray Bartolomé De Las Casas',1,'2020-08-07 09:51:49',NULL,1),(16,'ALT-SCATT','Santa Catalina La Tinta',1,'2020-08-07 09:51:49',NULL,1),(17,'ALT-RAX','Raxruhá',1,'2020-08-07 09:51:49',NULL,1),(18,'ALT-SALA','Salamá',2,'2020-08-07 09:51:49',NULL,1),(19,'ALT-SMCHI','San Miguel Chicaj',2,'2020-08-07 09:51:49',NULL,1),(20,'20','Rabinal',2,'2020-08-07 09:51:49',NULL,1),(21,'21','Cubulco',2,'2020-08-07 09:51:49',NULL,1),(22,'22','Granados',2,'2020-08-07 09:51:49',NULL,1),(23,'23','El Chol',2,'2020-08-07 09:51:49',NULL,1),(24,'24','San Jerónimo',2,'2020-08-07 09:51:50',NULL,1),(25,'25','Purulhá',2,'2020-08-07 09:51:50',NULL,1),(26,'26','Chimaltenango',3,'2020-08-07 09:51:50',NULL,1),(27,'27','San José Poaquil',3,'2020-08-07 09:51:50',NULL,1),(28,'28','San Martín Jilotepeque',3,'2020-08-07 09:51:50',NULL,1),(29,'29','Comalapa',3,'2020-08-07 09:51:50',NULL,1),(30,'30','Santa Apolonia',3,'2020-08-07 09:51:50',NULL,1),(31,'31','Tecpán Guatemala',3,'2020-08-07 09:51:50',NULL,1),(32,'32','Patzún',3,'2020-08-07 09:51:50',NULL,1),(33,'33','Pochuta',3,'2020-08-07 09:51:50',NULL,1),(34,'34','Patzicía',3,'2020-08-07 09:51:50',NULL,1),(35,'35','Santa Cruz Balanyá',3,'2020-08-07 09:51:50',NULL,1),(36,'36','Acatenango',3,'2020-08-07 09:51:50',NULL,1),(37,'37','Yepocapa',3,'2020-08-07 09:51:50',NULL,1),(38,'38','San Andrés Itzapa',3,'2020-08-07 09:51:50',NULL,1),(39,'39','Parramos',3,'2020-08-07 09:51:51',NULL,1),(40,'40','Zaragoza',3,'2020-08-07 09:51:51',NULL,1),(41,'41','El Tejar',3,'2020-08-07 09:51:51',NULL,1),(42,'42','Chiquimula',4,'2020-08-07 09:51:51',NULL,1),(43,'43','San José La Arada',4,'2020-08-07 09:51:51',NULL,1),(44,'44','San Juan Ermita',4,'2020-08-07 09:51:51',NULL,1),(45,'45','Jocotán',4,'2020-08-07 09:51:51',NULL,1),(46,'46','Camotán',4,'2020-08-07 09:51:51',NULL,1),(47,'47','Olopa',4,'2020-08-07 09:51:51',NULL,1),(48,'48','Esquipulas',4,'2020-08-07 09:51:51',NULL,1),(49,'49','Concepción Las Minas',4,'2020-08-07 09:51:51',NULL,1),(50,'50','Quezaltepeque',4,'2020-08-07 09:51:51',NULL,1),(51,'51','San Jacinto',4,'2020-08-07 09:51:51',NULL,1),(52,'52','Ipala',4,'2020-08-07 09:51:52',NULL,1),(53,'53','Guastatoya',5,'2020-08-07 09:51:52',NULL,1),(54,'54','Morazán',5,'2020-08-07 09:51:52',NULL,1),(55,'55','San Agustín Acasaguastlán',5,'2020-08-07 09:51:52',NULL,1),(56,'56','San Cristóbal Acasaguastlán',5,'2020-08-07 09:51:52',NULL,1),(57,'57','El Jícaro',5,'2020-08-07 09:51:52',NULL,1),(58,'58','Sansare',5,'2020-08-07 09:51:52',NULL,1),(59,'59','Sanarate',5,'2020-08-07 09:51:52',NULL,1),(60,'60','San Antonio La Paz',5,'2020-08-07 09:51:52',NULL,1),(61,'61','Escuintla',6,'2020-08-07 09:51:52',NULL,1),(62,'62','Santa Lucía Cotzumalguapa',6,'2020-08-07 09:51:52',NULL,1),(63,'63','La Democracia',6,'2020-08-07 09:51:53',NULL,1),(64,'64','Siquinalá',6,'2020-08-07 09:51:53',NULL,1),(65,'65','Masagua',6,'2020-08-07 09:51:53',NULL,1),(66,'66','Tiquisate',6,'2020-08-07 09:51:53',NULL,1),(67,'67','La Gomera',6,'2020-08-07 09:51:53',NULL,1),(68,'68','Guanagazapa',6,'2020-08-07 09:51:53',NULL,1),(69,'69','San José',6,'2020-08-07 09:51:53',NULL,1),(70,'70','Iztapa',6,'2020-08-07 09:51:53',NULL,1),(71,'71','Palin',6,'2020-08-07 09:51:53',NULL,1),(72,'72','San Vicente Pacaya',6,'2020-08-07 09:51:53',NULL,1),(73,'73','Nueva Concepción',6,'2020-08-07 09:51:53',NULL,1),(74,'74','Guatemala',7,'2020-08-07 09:51:53',NULL,1),(75,'75','Santa Catarina Pinula',7,'2020-08-07 09:51:53',NULL,1),(76,'76','San José Pinula',7,'2020-08-07 09:51:54',NULL,1),(77,'77','San José Del Golfo',7,'2020-08-07 09:51:54',NULL,1),(78,'78','Palencia',7,'2020-08-07 09:51:54',NULL,1),(79,'79','Chinautla',7,'2020-08-07 09:51:54',NULL,1),(80,'80','San Pedro Ayampuc',7,'2020-08-07 09:51:54',NULL,1),(81,'81','Mixco',7,'2020-08-07 09:51:54',NULL,1),(82,'82','San Pedro Sacatepéquez',7,'2020-08-07 09:51:54',NULL,1),(83,'83','San Juan Sacatepéquez',7,'2020-08-07 09:51:54',NULL,1),(84,'84','San Raymundo',7,'2020-08-07 09:51:54',NULL,1),(85,'85','Chuarrancho',7,'2020-08-07 09:51:54',NULL,1),(86,'86','Fraijanes',7,'2020-08-07 09:51:54',NULL,1),(87,'87','Amatitlán',7,'2020-08-07 09:51:54',NULL,1),(88,'88','Villa Nueva',7,'2020-08-07 09:51:54',NULL,1),(89,'89','Villa Canales',7,'2020-08-07 09:51:54',NULL,1),(90,'90','San Miguel Petapa',7,'2020-08-07 09:51:55',NULL,1),(91,'91','Huehuetenango',8,'2020-08-07 09:51:55',NULL,1),(92,'92','Chiantla',8,'2020-08-07 09:51:55',NULL,1),(93,'93','Malacatancito',8,'2020-08-07 09:51:55',NULL,1),(94,'94','Cuilco',8,'2020-08-07 09:51:55',NULL,1),(95,'95','Nentón',8,'2020-08-07 09:51:55',NULL,1),(96,'96','San Pedro Necta',8,'2020-08-07 09:51:55',NULL,1),(97,'97','Jacaltenango',8,'2020-08-07 09:51:55',NULL,1),(98,'98','Soloma',8,'2020-08-07 09:51:55',NULL,1),(99,'99','Ixtahuacán',8,'2020-08-07 09:51:55',NULL,1),(100,'100','Santa Bárbara',8,'2020-08-07 09:51:56',NULL,1),(101,'101','La Libertad',8,'2020-08-07 09:51:56',NULL,1),(102,'102','La Democracia',8,'2020-08-07 09:51:56',NULL,1),(103,'103','San Miguel Acatán',8,'2020-08-07 09:51:56',NULL,1),(104,'104','San Rafael La Independencia',8,'2020-08-07 09:51:56',NULL,1),(105,'105','Todos Santos Cuchumatán',8,'2020-08-07 09:51:56',NULL,1),(106,'106','San Juan Atitán',8,'2020-08-07 09:51:56',NULL,1),(107,'107','Santa Eulalia',8,'2020-08-07 09:51:56',NULL,1),(108,'108','San Mateo Ixtatán',8,'2020-08-07 09:51:56',NULL,1),(109,'109','Colotenango',8,'2020-08-07 09:51:56',NULL,1),(110,'110','San Sebastián Huehuetenango',8,'2020-08-07 09:51:56',NULL,1),(111,'111','Tectitán',8,'2020-08-07 09:51:57',NULL,1),(112,'112','Concepción Huista',8,'2020-08-07 09:51:57',NULL,1),(113,'113','San Juan Ixcoy',8,'2020-08-07 09:51:57',NULL,1),(114,'114','San Antonio Huista',8,'2020-08-07 09:51:57',NULL,1),(115,'115','San Sebastián Coatán',8,'2020-08-07 09:51:57',NULL,1),(116,'116','Barillas',8,'2020-08-07 09:51:57',NULL,1),(117,'117','Aguacatán',8,'2020-08-07 09:51:57',NULL,1),(118,'118','San Rafael Petzal',8,'2020-08-07 09:51:57',NULL,1),(119,'119','San Gaspar Ixchil',8,'2020-08-07 09:51:57',NULL,1),(120,'120','Santiago Chimaltenango',8,'2020-08-07 09:51:57',NULL,1),(121,'121','Santa Ana Huista',8,'2020-08-07 09:51:58',NULL,1),(122,'122','Unión Cantinil',8,'2020-08-07 09:51:58',NULL,1),(123,'123','Puerto Barrios',9,'2020-08-07 09:51:58',NULL,1),(124,'124','Lívingston',9,'2020-08-07 09:51:58',NULL,1),(125,'125','El Estor',9,'2020-08-07 09:51:58',NULL,1),(126,'126','Morales',9,'2020-08-07 09:51:58',NULL,1),(127,'127','Los Amates',9,'2020-08-07 09:51:58',NULL,1),(128,'128','Jalapa',10,'2020-08-07 09:51:59',NULL,1),(129,'129','San Pedro Pinula',10,'2020-08-07 09:51:59',NULL,1),(130,'130','San Luis Jilotepeque',10,'2020-08-07 09:51:59',NULL,1),(131,'131','San Manuel Chaparrón',10,'2020-08-07 09:51:59',NULL,1),(132,'132','San Carlos Alzatate',10,'2020-08-07 09:51:59',NULL,1),(133,'133','Monjas',10,'2020-08-07 09:51:59',NULL,1),(134,'134','Mataquescuintla',10,'2020-08-07 09:51:59',NULL,1),(135,'135','Jutiapa',11,'2020-08-07 09:51:59',NULL,1),(136,'136','El Progreso',11,'2020-08-07 09:51:59',NULL,1),(137,'137','Santa Catarina Mita',11,'2020-08-07 09:51:59',NULL,1),(138,'138','Agua Blanca',11,'2020-08-07 09:51:59',NULL,1),(139,'139','Asunción Mita',11,'2020-08-07 09:51:59',NULL,1),(140,'140','Yupiltepeque',11,'2020-08-07 09:51:59',NULL,1),(141,'141','Atescatempa',11,'2020-08-07 09:52:00',NULL,1),(142,'142','Jerez',11,'2020-08-07 09:52:00',NULL,1),(143,'143','El Adelanto',11,'2020-08-07 09:52:00',NULL,1),(144,'144','Zapotitlán',11,'2020-08-07 09:52:00',NULL,1),(145,'145','Comapa',11,'2020-08-07 09:52:00',NULL,1),(146,'146','Jalpatagua',11,'2020-08-07 09:52:00',NULL,1),(147,'147','Conguaco',11,'2020-08-07 09:52:00',NULL,1),(148,'148','Moyuta',11,'2020-08-07 09:52:00',NULL,1),(149,'149','Pasaco',11,'2020-08-07 09:52:00',NULL,1),(150,'150','San José Acatempa',11,'2020-08-07 09:52:00',NULL,1),(151,'151','Quesada',11,'2020-08-07 09:52:00',NULL,1),(152,'152','Flores',12,'2020-08-07 09:52:00',NULL,1),(153,'153','San José',12,'2020-08-07 09:52:00',NULL,1),(154,'154','San Benito',12,'2020-08-07 09:52:01',NULL,1),(155,'155','San Andrés',12,'2020-08-07 09:52:01',NULL,1),(156,'156','La Libertad',12,'2020-08-07 09:52:01',NULL,1),(157,'157','San Francisco',12,'2020-08-07 09:52:01',NULL,1),(158,'158','Santa Ana',12,'2020-08-07 09:52:01',NULL,1),(159,'159','Dolores',12,'2020-08-07 09:52:01',NULL,1),(160,'160','San Luis',12,'2020-08-07 09:52:01',NULL,1),(161,'161','Sayaxché',12,'2020-08-07 09:52:01',NULL,1),(162,'162','Melchor De Mencos',12,'2020-08-07 09:52:01',NULL,1),(163,'163','Poptún',12,'2020-08-07 09:52:01',NULL,1),(164,'164','Las Cruces',12,'2020-08-07 09:52:01',NULL,1),(165,'165','El Chal',12,'2020-08-07 09:52:01',NULL,1),(166,'166','Quetzaltenango',13,'2020-08-07 09:52:01',NULL,1),(167,'167','Salcajá',13,'2020-08-07 09:52:02',NULL,1),(168,'168','Olintepeque',13,'2020-08-07 09:52:02',NULL,1),(169,'169','San Carlos Sija',13,'2020-08-07 09:52:02',NULL,1),(170,'170','Sibilia',13,'2020-08-07 09:52:02',NULL,1),(171,'171','Cabricán',13,'2020-08-07 09:52:02',NULL,1),(172,'172','Cajolá',13,'2020-08-07 09:52:02',NULL,1),(173,'173','San Miguel Sigüilá',13,'2020-08-07 09:52:02',NULL,1),(174,'174','Ostuncalco',13,'2020-08-07 09:52:02',NULL,1),(175,'175','San Mateo',13,'2020-08-07 09:52:02',NULL,1),(176,'176','Concepción Chiquirichapa',13,'2020-08-07 09:52:02',NULL,1),(177,'177','San Martín Sacatepéquez',13,'2020-08-07 09:52:02',NULL,1),(178,'178','Almolonga',13,'2020-08-07 09:52:02',NULL,1),(179,'179','Cantel',13,'2020-08-07 09:52:02',NULL,1),(180,'180','Huitán',13,'2020-08-07 09:52:02',NULL,1),(181,'181','Zunil',13,'2020-08-07 09:52:03',NULL,1),(182,'182','Colomba',13,'2020-08-07 09:52:03',NULL,1),(183,'183','San Francisco La Unión',13,'2020-08-07 09:52:03',NULL,1),(184,'184','El Palmar',13,'2020-08-07 09:52:03',NULL,1),(185,'185','Coatepeque',13,'2020-08-07 09:52:03',NULL,1),(186,'186','Génova',13,'2020-08-07 09:52:03',NULL,1),(187,'187','Flores Costa Cuca',13,'2020-08-07 09:52:03',NULL,1),(188,'188','La Esperanza',13,'2020-08-07 09:52:03',NULL,1),(189,'189','Palestina De Los Altos',13,'2020-08-07 09:52:03',NULL,1),(190,'190','Santa Cruz Del Quiché',14,'2020-08-07 09:52:03',NULL,1),(191,'191','Chiché',14,'2020-08-07 09:52:03',NULL,1),(192,'192','Chinique',14,'2020-08-07 09:52:04',NULL,1),(193,'193','Zacualpa',14,'2020-08-07 09:52:04',NULL,1),(194,'194','Chajul',14,'2020-08-07 09:52:04',NULL,1),(195,'195','Chichicastenango',14,'2020-08-07 09:52:04',NULL,1),(196,'196','Patzité',14,'2020-08-07 09:52:04',NULL,1),(197,'197','San Antonio Ilotenango',14,'2020-08-07 09:52:04',NULL,1),(198,'198','San Pedro Jocopilas',14,'2020-08-07 09:52:04',NULL,1),(199,'199','Cunén',14,'2020-08-07 09:52:04',NULL,1),(200,'200','San Juan Cotzal',14,'2020-08-07 09:52:04',NULL,1),(201,'201','Joyabaj',14,'2020-08-07 09:52:04',NULL,1),(202,'202','Nebaj',14,'2020-08-07 09:52:04',NULL,1),(203,'203','San Andrés Sajcabajá',14,'2020-08-07 09:52:04',NULL,1),(204,'204','Uspantán',14,'2020-08-07 09:52:04',NULL,1),(205,'205','Sacapulas',14,'2020-08-07 09:52:04',NULL,1),(206,'206','San Bartolomé Jocotenango',14,'2020-08-07 09:52:05',NULL,1),(207,'207','Canillá',14,'2020-08-07 09:52:05',NULL,1),(208,'208','Chicamán',14,'2020-08-07 09:52:05',NULL,1),(209,'209','Ixcán',14,'2020-08-07 09:52:05',NULL,1),(210,'210','Pachalum',14,'2020-08-07 09:52:05',NULL,1),(211,'211','Retalhuleu',15,'2020-08-07 09:52:06',NULL,1),(212,'212','San Sebastián',15,'2020-08-07 09:52:06',NULL,1),(213,'213','Santa Cruz Muluá',15,'2020-08-07 09:52:06',NULL,1),(214,'214','San Martín Zapotitlán',15,'2020-08-07 09:52:06',NULL,1),(215,'215','San Felipe',15,'2020-08-07 09:52:06',NULL,1),(216,'216','San Andrés Villa Seca',15,'2020-08-07 09:52:06',NULL,1),(217,'217','Champerico',15,'2020-08-07 09:52:06',NULL,1),(218,'218','Nuevo San Carlos',15,'2020-08-07 09:52:06',NULL,1),(219,'219','El Asintal',15,'2020-08-07 09:52:06',NULL,1),(220,'220','Antigua Guatemala',16,'2020-08-07 09:52:06',NULL,1),(221,'221','Jocotenango',16,'2020-08-07 09:52:06',NULL,1),(222,'222','Pastores',16,'2020-08-07 09:52:07',NULL,1),(223,'223','Sumpango',16,'2020-08-07 09:52:07',NULL,1),(224,'224','Santo Domingo Xenacoj',16,'2020-08-07 09:52:07',NULL,1),(225,'225','Santiago Sacatepéquez',16,'2020-08-07 09:52:07',NULL,1),(226,'226','San Bartolomé Milpas Altas',16,'2020-08-07 09:52:07',NULL,1),(227,'227','San Lucas Sacatepéquez',16,'2020-08-07 09:52:07',NULL,1),(228,'228','Santa Lucía Milpas Altas',16,'2020-08-07 09:52:07',NULL,1),(229,'229','Magdalena Milpas Altas',16,'2020-08-07 09:52:07',NULL,1),(230,'230','Santa María de Jesús',16,'2020-08-07 09:52:07',NULL,1),(231,'231','Ciudad Vieja',16,'2020-08-07 09:52:07',NULL,1),(232,'232','San Miguel Dueñas',16,'2020-08-07 09:52:07',NULL,1),(233,'233','Alotenango',16,'2020-08-07 09:52:07',NULL,1),(234,'234','San Antonio Aguas Calientes',16,'2020-08-07 09:52:07',NULL,1),(235,'235','Santa Catarina Barahona',16,'2020-08-07 09:52:08',NULL,1),(236,'236','San Marcos',17,'2020-08-07 09:52:08',NULL,1),(237,'237','San Pedro Sacatepéquez',17,'2020-08-07 09:52:08',NULL,1),(238,'238','San Antonio Sacatepéquez',17,'2020-08-07 09:52:08',NULL,1),(239,'239','Comitancillo',17,'2020-08-07 09:52:08',NULL,1),(240,'240','San Miguel Ixtahuacán',17,'2020-08-07 09:52:08',NULL,1),(241,'241','Concepción Tutuapa',17,'2020-08-07 09:52:08',NULL,1),(242,'242','Tacaná',17,'2020-08-07 09:52:08',NULL,1),(243,'243','Sibinal',17,'2020-08-07 09:52:08',NULL,1),(244,'244','Tajumulco',17,'2020-08-07 09:52:08',NULL,1),(245,'245','Tejutla',17,'2020-08-07 09:52:08',NULL,1),(246,'246','San Rafael Pie De La Cuesta',17,'2020-08-07 09:52:09',NULL,1),(247,'247','Nuevo Progreso',17,'2020-08-07 09:52:09',NULL,1),(248,'248','El Tumbador',17,'2020-08-07 09:52:09',NULL,1),(249,'249','El Rodeo',17,'2020-08-07 09:52:09',NULL,1),(250,'250','Malacatán',17,'2020-08-07 09:52:09',NULL,1),(251,'251','Catarina',17,'2020-08-07 09:52:09',NULL,1),(252,'252','Ayutla',17,'2020-08-07 09:52:09',NULL,1),(253,'253','Ocós',17,'2020-08-07 09:52:09',NULL,1),(254,'254','San Pablo',17,'2020-08-07 09:52:09',NULL,1),(255,'255','El Quetzal',17,'2020-08-07 09:52:09',NULL,1),(256,'256','La Reforma',17,'2020-08-07 09:52:10',NULL,1),(257,'257','Pajapita',17,'2020-08-07 09:52:10',NULL,1),(258,'258','Ixchiguán',17,'2020-08-07 09:52:10',NULL,1),(259,'259','San José Ojetenam',17,'2020-08-07 09:52:10',NULL,1),(260,'260','San Cristóbal Cucho',17,'2020-08-07 09:52:10',NULL,1),(261,'261','Sipacapa',17,'2020-08-07 09:52:10',NULL,1),(262,'262','Esquipulas Palo Gordo',17,'2020-08-07 09:52:10',NULL,1),(263,'263','Río Blanco',17,'2020-08-07 09:52:10',NULL,1),(264,'264','San Lorenzo',17,'2020-08-07 09:52:10',NULL,1),(265,'265','La Blanca',17,'2020-08-07 09:52:10',NULL,1),(266,'266','Cuilapa',18,'2020-08-07 09:52:10',NULL,1),(267,'267','Barberena',18,'2020-08-07 09:52:11',NULL,1),(268,'268','Santa Rosa De Lima',18,'2020-08-07 09:52:11',NULL,1),(269,'269','Casillas',18,'2020-08-07 09:52:11',NULL,1),(270,'270','San Rafael Las Flores',18,'2020-08-07 09:52:11',NULL,1),(271,'271','Oratorio',18,'2020-08-07 09:52:11',NULL,1),(272,'272','San Juan Tecuaco',18,'2020-08-07 09:52:11',NULL,1),(273,'273','Chiquimulilla',18,'2020-08-07 09:52:11',NULL,1),(274,'274','Taxisco',18,'2020-08-07 09:52:11',NULL,1),(275,'275','Santa María Ixhuatán',18,'2020-08-07 09:52:12',NULL,1),(276,'276','Guazacapán',18,'2020-08-07 09:52:12',NULL,1),(277,'277','Santa Cruz Naranjo',18,'2020-08-07 09:52:12',NULL,1),(278,'278','Pueblo Nuevo Viñas',18,'2020-08-07 09:52:12',NULL,1),(279,'279','Nueva Santa Rosa',18,'2020-08-07 09:52:12',NULL,1),(280,'280','Sololá',19,'2020-08-07 09:52:12',NULL,1),(281,'281','San José Chacayá',19,'2020-08-07 09:52:12',NULL,1),(282,'282','Santa María Visitación',19,'2020-08-07 09:52:12',NULL,1),(283,'283','Santa Lucía Utatlán',19,'2020-08-07 09:52:12',NULL,1),(284,'284','Nahualá',19,'2020-08-07 09:52:12',NULL,1),(285,'285','Santa Catarina Ixtahuacán',19,'2020-08-07 09:52:13',NULL,1),(286,'286','Santa Clara La Laguna',19,'2020-08-07 09:52:13',NULL,1),(287,'287','Concepción',19,'2020-08-07 09:52:13',NULL,1),(288,'288','San Andrés Semetabaj',19,'2020-08-07 09:52:13',NULL,1),(289,'289','Panajachel',19,'2020-08-07 09:52:13',NULL,1),(290,'290','Santa Catarina Palopó',19,'2020-08-07 09:52:13',NULL,1),(291,'291','San Antonio Palopó',19,'2020-08-07 09:52:13',NULL,1),(292,'292','San Lucas Tolimán',19,'2020-08-07 09:52:13',NULL,1),(293,'293','Santa Cruz La Laguna',19,'2020-08-07 09:52:13',NULL,1),(294,'294','San Pablo La Laguna',19,'2020-08-07 09:52:13',NULL,1),(295,'295','San Marcos La Laguna',19,'2020-08-07 09:52:14',NULL,1),(296,'296','San Juan La Laguna',19,'2020-08-07 09:52:14',NULL,1),(297,'297','San Pedro La Laguna',19,'2020-08-07 09:52:14',NULL,1),(298,'298','Santiago Atitlán',19,'2020-08-07 09:52:14',NULL,1),(299,'299','Mazatenango',20,'2020-08-07 09:52:14',NULL,1),(300,'300','Cuyotenango',20,'2020-08-07 09:52:14',NULL,1),(301,'301','San Francisco Zapotitlán',20,'2020-08-07 09:52:14',NULL,1),(302,'302','San Bernardino',20,'2020-08-07 09:52:14',NULL,1),(303,'303','San José El Ídolo',20,'2020-08-07 09:52:14',NULL,1),(304,'304','Santo Domingo Suchitepéquez',20,'2020-08-07 09:52:14',NULL,1),(305,'305','San Lorenzo',20,'2020-08-07 09:52:14',NULL,1),(306,'306','Samayac',20,'2020-08-07 09:52:14',NULL,1),(307,'307','San Pablo Jocopilas',20,'2020-08-07 09:52:14',NULL,1),(308,'308','San Antonio Suchitepéquez',20,'2020-08-07 09:52:15',NULL,1),(309,'309','San Miguel Panán',20,'2020-08-07 09:52:15',NULL,1),(310,'310','San Gabriel',20,'2020-08-07 09:52:15',NULL,1),(311,'311','Chicacao',20,'2020-08-07 09:52:15',NULL,1),(312,'312','Patulul',20,'2020-08-07 09:52:15',NULL,1),(313,'313','Santa Bárbara',20,'2020-08-07 09:52:15',NULL,1),(314,'314','San Juan Bautista',20,'2020-08-07 09:52:15',NULL,1),(315,'315','Santo Tomás La Unión',20,'2020-08-07 09:52:15',NULL,1),(316,'316','Zunilito',20,'2020-08-07 09:52:15',NULL,1),(317,'317','Pueblo Nuevo',20,'2020-08-07 09:52:15',NULL,1),(318,'318','Río Bravo',20,'2020-08-07 09:52:15',NULL,1),(319,'319','San José La Máquina',20,'2020-08-07 09:52:15',NULL,1),(320,'320','Totonicapán',21,'2020-08-07 09:52:15',NULL,1),(321,'321','San Cristóbal Totonicapán',21,'2020-08-07 09:52:16',NULL,1),(322,'322','San Francisco El Alto',21,'2020-08-07 09:52:16',NULL,1),(323,'323','San Andrés Xecul',21,'2020-08-07 09:52:16',NULL,1),(324,'324','Momostenango',21,'2020-08-07 09:52:16',NULL,1),(325,'325','Santa María Chiquimula',21,'2020-08-07 09:52:16',NULL,1),(326,'326','Santa Lucía La Reforma',21,'2020-08-07 09:52:16',NULL,1),(327,'327','San Bartolo',21,'2020-08-07 09:52:16',NULL,1),(328,'328','Zacapa',22,'2020-08-07 09:52:16',NULL,1),(329,'329','Estanzuela',22,'2020-08-07 09:52:16',NULL,1),(330,'330','Río Hondo',22,'2020-08-07 09:52:17',NULL,1),(331,'331','Gualán',22,'2020-08-07 09:52:17',NULL,1),(332,'332','Teculután',22,'2020-08-07 09:52:17',NULL,1),(333,'333','Usumatlán',22,'2020-08-07 09:52:17',NULL,1),(334,'334','Cabañas',22,'2020-08-07 09:52:17',NULL,1),(335,'335','San Diego',22,'2020-08-07 09:52:17',NULL,1),(336,'336','La Unión',22,'2020-08-07 09:52:17',NULL,1),(337,'337','Huité',22,'2020-08-07 09:52:17',NULL,1),(338,'338','San Jorge',22,'2020-08-07 09:52:17',NULL,1),(339,'339','Sipacate',6,'2020-08-07 09:52:18',NULL,1),(340,'340','Monterrico',18,'2020-08-07 09:52:18',NULL,1),(341,'341',' ',23,'0000-00-00 00:00:00',NULL,1);
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:15:21
