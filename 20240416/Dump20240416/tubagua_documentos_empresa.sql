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
-- Table structure for table `documentos_empresa`
--

DROP TABLE IF EXISTS `documentos_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documentos_empresa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cliente_id` int NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos_empresa`
--

LOCK TABLES `documentos_empresa` WRITE;
/*!40000 ALTER TABLE `documentos_empresa` DISABLE KEYS */;
INSERT INTO `documentos_empresa` VALUES (2,'Patente Ferrominas.pdf',7855,'2022-08-10'),(3,'FerroElectricos Nva Esperanza-Panajachel.pdf',5837,'2022-08-20'),(4,'Ferreteria Santa Maria-solola.pdf',7902,'2022-08-20'),(5,'Ferreteria el Manantial-Solola.pdf',7905,'2022-08-20'),(6,'Ferreteria la Promesa-Solola.pdf',7911,'2022-08-20'),(7,'Ferreteria la Bendicion- Solola.pdf',7907,'2022-08-20'),(8,'Ferreteria San Luis- totonicapan.pdf',7912,'2022-08-20'),(9,'Ferreteria la Economica -Solola.pdf',2983,'2022-08-20'),(10,'bendicion.pdf',7907,'2022-08-20'),(11,'promesa.pdf',7911,'2022-08-20'),(12,'manantial.pdf',7905,'2022-08-20'),(13,'manantial.pdf',7902,'2022-08-20'),(14,'ferreteria el obrero solicitud credito.pdf',7906,'2022-08-20'),(16,'rtu gensis.pdf',6036,'2022-08-20'),(17,'patente genesis.pdf',6036,'2022-08-20'),(18,'Solicitud Credito Geneses.pdf',6036,'2022-08-20'),(19,'Ferrimax-Solola.pdf',7919,'2022-08-20'),(20,'FERRETERIA LA FE -RETALHULEU.pdf',7926,'2022-08-29'),(21,'FERRETERIA SIPAO PATZUN.pdf',7929,'2022-08-29'),(22,'FABRICA Y FERRETERIA MEGABLOCK - CHIMALTENANGO.pdf',7921,'2022-08-29'),(23,'FERRETERIA EL POLOCHIC- LA TINTA.pdf',3693,'2022-08-29'),(24,'CONSTRUBLOCK JJ - ALATA VERAPAZ.pdf',7930,'2022-08-29'),(25,'Papeleria Barrita.pdf',7175,'2022-08-30'),(26,'ELMER DEL CID ESCUINTLA.pdf',7936,'2022-09-05'),(27,'MULTISERVICIOS CASSA- SANTIAGO SACATEPEQUEZ.pdf',7951,'2022-09-05'),(28,'FERRETERIA FELCARS CHIMALTENANGO.pdf',7935,'2022-09-05'),(29,'Ferreteria el Sol Chimaltenango.pdf',7945,'2022-09-05'),(30,'FERRETERIA GRICOY SAN MARTIN JILOTEPEQUE.pdf',7944,'2022-09-05'),(31,'FERRETERIA EMANUEL PATZU.pdf',7937,'2022-09-05'),(32,'JOSE BOC- SAN PEDRO SACATEPEQUZ.pdf',7952,'2022-09-05'),(33,'REQUERIMIENTO DE PAGO CARLOS ESTRADA.pdf',19,'2022-09-05'),(34,'MULTIVENTAS JAVI MAZATENANGO.pdf',7933,'2022-09-12'),(35,'FERRETERIA PROGRESO SAN MARCOS.pdf',7958,'2022-09-12'),(36,'FERROCENTRO BARAHONA SACATEPEQUEZ.pdf',7964,'2022-09-12'),(37,'MINIFERRETERIA ADONAI MOYUTA.pdf',7962,'2022-09-13'),(38,'FERRETERIA LA BENDICION - VILLALOBOS.pdf',7939,'2022-09-16'),(39,'FERRETERIA EL PAISANO SOLOLA.pdf',6575,'2022-09-17'),(40,'FERRETERIA CARRANZA CHICHICASTENANGO.pdf',7975,'2022-09-17'),(41,'AGROFERRETERA ADRIANA BELEN - YUPILTEPEQUE JUTIAPA.pdf',7981,'2022-09-28'),(42,'DISTRIBUIDORA Y FERRETERIA SAN RAFAEL - JEREZ JUTIAPA.pdf',7982,'2022-09-28'),(43,'TECNOLOGIA DIGITAL ENMANUEL-JALAPA.pdf',8000,'2022-09-28'),(45,'FERROAGRICOLA EL BUEN SAMARITANO SOLOLA.pdf',8018,'2022-09-28'),(46,'COMERCIAL EL BUEN SAMARITANO-SOLOLA.pdf',8015,'2022-09-28'),(47,'MISCELANEA ROSALITO - SOLOLA.pdf',7999,'2022-09-28'),(48,'FERRETERIA MAX-SOLOLA.pdf',7989,'2022-09-28'),(49,'Ferreteria Jireh - Guatemala ciudad.pdf',7302,'2022-10-04'),(50,'Aniversario 2022.pdf',237,'2022-10-04'),(51,'AQUA EQUIPOS S.A - CHIMALTENANGO..pdf',8048,'2022-10-10'),(52,'FERRETERIA RYN CUILAPA.pdf',8019,'2022-10-10'),(53,'SERVIPUNTO BETHEL SANTA ROSA.pdf',8026,'2022-10-10'),(54,'FERRETERIA LOS DOS HERMANOS - SAN MARCOS..pdf',8088,'2022-10-17'),(55,'FERRETERIA EL NANCE SAN MARCOS.pdf',7978,'2022-10-17'),(56,'FERRETERIA SANTIZO-SAN MARCOS.pdf',7973,'2022-10-17'),(57,'FERRETERIA LA JOYA- SAN MARCOS.pdf',7980,'2022-10-17'),(58,'CONSTRUCTORA Y FERRETERI RAMIREZ SAN ADRES.pdf',7979,'2022-10-17'),(59,'COMERCIALIZADORA MORALEZ RETALHYULEU.pdf',6879,'2022-10-17'),(60,'FERRETERIA MATERIALES SAN JOSE - SAN MARTIN JILOTEPEQUE CHIMALTENANGO.pdf',8071,'2022-10-17'),(61,'FERRETERIA OCCIDENTAL - SAN JUAN COMALAPA.pdf',8063,'2022-10-17'),(62,'FERRETERIA FERCA - SANTIAGO SACATEPEQUEZ.pdf',8085,'2022-10-17'),(63,'FERRETERIA ROY- RETALHULEU.pdf',8028,'2022-11-15'),(64,'TORNILLO LA INTERRAMERICANA-CHIMALTENANGO.pdf',8095,'2022-11-15'),(65,'FERRTERIA JANES- JUTIAPA.pdf',5637,'2022-11-15'),(66,'FERRETERIA LOS PRIMOS ZACAPA.pdf',8161,'2022-11-15'),(67,'FERRETERIA EL PORVENIR SAN MARCOS.pdf',8100,'2022-11-15'),(68,'DEYSIN CHILIN SACATEPEQUEZ.pdf',8168,'2022-11-15'),(69,'NICOLAS SISAY SANTIAGO ATITLAN.pdf',8123,'2022-11-15'),(70,'FERRETERIA EL BUEN PRECIO - SAN JUAN SACATEPEQUEZ.pdf',8180,'2022-11-15'),(71,'FERRETERIA ZAMORA-JUTIAPA.pdf',8217,'2022-11-17'),(72,'CamScanner 11-16-2022 17.05.pdf',8220,'2022-11-21'),(73,'Patente Comercio  Ferreteria Susy.pdf',8214,'2022-11-21'),(74,'SOlicitud Credit.pdf',8220,'2022-11-21'),(75,'FERRETERIA LA CIENEGA - SANTA LUCIA UTATLAN SOLOLA.pdf',8159,'2022-11-22'),(76,'FERRETERIA EMANUEL - ALDEA BARRANCHE TOTONICAPAN.pdf',3888,'2022-11-22'),(77,'EDGAR JOAQUIN GUARON CHOLI - TECPAN CHIMALTENANGO..pdf',8216,'2022-11-22'),(78,'FERREPUESTOS LA LLAVE - SANTO DOMINGO XENACOJ SACATEPEQUEZ.pdf',8227,'2022-11-22'),(79,'FERRETERIA DON PANCHO - EL RODEO SAN MARCOS.pdf',6434,'2022-11-28'),(80,'FERRO ELECTRICA MIRANDA - CASERIO TRAPICHE SAN MARCOS.pdf',8243,'2022-11-28'),(81,'FERRETERIA LA BENDICIÓN - MERCADO SANTA CRUZ LOCAL 143 MEZQUITAL VILLA NUEVA.pdf',8245,'2022-11-28'),(82,'CamScanner 12-15-2022 19.49-1.pdf',8290,'2022-12-16'),(83,'MULTINEGOCIOS CAMILO - KM 163 SANTA CATARINA IXHUATAN SOLOLA.pdf',8286,'2022-12-22'),(84,'DISTRIBUIDORA CATALINA -  BARRIO PAXACUL NUEVA SANTA CATARINA SOLOLA.pdf',8283,'2022-12-22'),(85,'FERRETERIA DON GUILLERMO -  CALLE PAULA 2-25 ZONA 2 BARRIO SAN SEBASTIAN TOTONICAPAN.pdf',2950,'2022-12-22'),(86,'A15956 REC 20882 depósito.jpeg',5614,'2023-01-19'),(87,'A15956 REC 20882 depósito.jpeg',5614,'2023-01-19'),(88,'Chivo Papeleria.pdf',8571,'2023-02-14'),(89,'Solicitud de crédito ALF-MAXAV Alfredo Max. Ferreteria El Buen Precio_0001.pdf',8550,'2023-03-01'),(90,'solicitud de crédito FVH-JUT Ferreteria Vista Hermosa_0001.pdf',8594,'2023-03-01'),(91,'solicitud de crédito COM-BEVER Comercial La Bendicion_0001.pdf',8531,'2023-03-01'),(92,'solicitud de crédito CHI-MACOB Yoselin Nohemi Caal Ac. Ferreteria Chismack_0001.pdf',8539,'2023-03-01'),(93,'solicitud de crédito LUB-RIAV Lubri-Ferreteria La Fe. Iris Vielman_0001.pdf',8532,'2023-03-01'),(94,'solicitud de crédito FCP-FMAV Pablo Humberto Tox. Ferreteria Comercial Ferro Metro_0001.pdf',8549,'2023-03-01'),(95,'solicitud de crédito L3H-MAR JOHAN LEAO LOPEZ RODAS_0001.pdf',8538,'2023-03-01'),(96,'solicitud de crédito RIO-QUE Ferreteria Rios_0001.pdf',8537,'2023-03-01'),(97,'solicitud de crédito REN-ACQUE FERRETERIA EL RENACER_0001.pdf',8572,'2023-03-01'),(98,'solicitud de crédito CHE-REQUI FERRETERIA CONSTRUHERRERA_0001.pdf',8302,'2023-03-01'),(99,'solicitud de crédito LOI-DYMAR Loidy Mayeli Diaz Ravanales_0001.pdf',8348,'2023-03-01'),(100,'solicitud de crédito COM-BECOB Comercial la Bendicion_0001.pdf',8573,'2023-03-01'),(101,'patente de comercio Ferretería Elizabeth_0001.pdf',8403,'2023-03-01'),(102,'SAT Ferretería Elizabeth_0001.pdf',8403,'2023-03-01'),(103,'solicitud de crédito Ferretería Elizabeth nit 51536862_0001.pdf',8403,'2023-03-01'),(104,'constancia sat José Felipe Gutierrez Tohom_0001.pdf',8313,'2023-03-01'),(105,'DPI José Felipe Gutierrez Tohom.pdf',8313,'2023-03-01'),(106,'Patente comercio José Felipe Gutierrez Tohom_0001.pdf',8313,'2023-03-01'),(107,'solicitud de crédito José Felipe Gutierrez Tohom_0001.pdf',8313,'2023-03-01'),(109,'constancia SAT Martín Mejía Ralac_0001.pdf',8324,'2023-03-01'),(110,'DPI Martín Mejía Ralac_0001.pdf',8324,'2023-03-01'),(111,'solicitud de crédito Martín Mejía Ralac_0001.pdf',8324,'2023-03-01'),(112,'solicitud de crédito Ferretería y Agroservicio El Ahorro nit 114978506_0001.pdf',8397,'2023-03-01'),(113,'solicitud de crédito TFO-COBAN Ernesto Itzep Martin nit 281002184_0001.pdf',8308,'2023-03-01'),(114,'solicitud de crédito MAR-IAVER Comercial Elvita nit 16252802_0001.pdf',8430,'2023-03-01'),(115,'solicitud de crédito MEJ-IASUC Francisco Mejia nit 26434083_0001.pdf',8427,'2023-03-01'),(116,'solicitud de crédito ALV-LOZAC Comercializadora López nit 2337214011805.pdf',8490,'2023-03-01'),(117,'solicitud de crédito TEJ-ANCHQ FERRETERÍA LOS TEJARROS, SAN LORENZO CHIQUIMULA.pdf',8444,'2023-03-01'),(118,'Solicitud Damasco.pdf',8671,'2023-03-06'),(119,'lesvin dpi.pdf',8492,'2023-03-08'),(120,'Solicitud de crédito de Ferretería Maya Nit 55132138 vend 002 Sololá..pdf',8759,'2023-04-13'),(121,'Solicitud de crédito de Maquinas y Equipos Conois Nit 97033383 Ayutla San Marco.pdf',8720,'2023-04-13'),(122,'002 solicitud de crédito FER-MASUC Ferro y Map nit 3594104-9.pdf',8650,'2023-04-13'),(123,'004 solicitud de crédito PUN-TOCHI Ferretería El Punto nit 4311274-9.pdf',8595,'2023-04-13'),(124,'004 solicitud de crédito DNA-MACHI Distribuidora y Ferretería Nuevo Amanecer nit 638063-8.pdf',4673,'2023-04-13'),(125,'004 solicitud de crédito CHI-COSAC Maria Chicop nit 10665027-0.pdf',8329,'2023-04-13'),(126,'004 solicitud de crédito CAN-DACHI Ferretería El Candado nit 1824112-3.pdf',6589,'2023-04-13'),(127,'008 solicitud de crédito SYS-JAL Ferretería SyS nit 113357958.pdf',8396,'2023-04-13'),(128,'020 solicitud de crédito BEN-DICIOFerretería La Bendición Marta Lidia Escalante nit 49423703.pdf',8399,'2023-04-13'),(130,'DPI.pdf',7542,'2023-04-24'),(131,'CONSTANCIA DE INSCRIPCIÓN Y ACTUALIZACIÓN DE DATOS AL REGISTRO TRIBUTARIO UNIFICADO.pdf',7542,'2023-04-24'),(132,'Patente de Comercio de Empresa.pdf',7542,'2023-04-24'),(133,'DPI.pdf',5603,'2023-04-25'),(134,'Solicitud de crédito nit 117803170 Ferre La Sierra_0001.pdf',8813,'2023-05-15'),(135,'Requerimiento de pago cruz rene sontay.pdf',7119,'2023-05-17'),(136,'008 solicitud de crédito JEN-NIJUT Maria de Los Angeles Guerra Martinez nit 11594100-2.pdf',8244,'2023-06-01'),(137,'002 solicitud de crédito MOR-ALREU COMERCIALIZADORA MORALES nit 3527051-9.pdf',8025,'2023-06-01'),(138,'002 solicitud de crédito  FMA-YASUC Ferro Maya Nit 4209466-6.pdf',8901,'2023-06-05'),(139,'002 solicitud de crédito PLA-ZAREU Ferriplaza nit 10827467-5.pdf',8888,'2023-06-09'),(140,'002 solicitud de crédito ADS-REU FERRETERIA ATRIOS DEL SUR, S.A nit 11798483-3.pdf',8858,'2023-06-09'),(142,'Estado de Cuenta _ Cliente 7284.pdf',9210,'2023-09-27'),(143,'NUEVA DIRECCION AGROVENTAS LA CASA DEL AGRICULTOR (1).pdf',6692,'2023-09-27'),(144,'SAT - RTU agroventas.pdf',6692,'2023-09-27'),(145,'002 Solicitud de crédito FKE-NISUC FERRETERÍA KENIA-SAN LORENZO SUCHITEPEQUEZ - NIT 4003512-3.pdf',9245,'2023-10-03'),(146,'008 Solicitud de crédito POR-VEJUT Ferretería el Porvenir Nit 185760-6 El Progreso Jutiapa.pdf',9012,'2023-10-03'),(147,'002 Solicitud de crédito DIS-PCSUC FERRETERÍA PACIFIC-MAZATENANGO SUCHITEPEZ- NIT 7547783-1.pdf',9257,'2023-10-03'),(148,'002 Solicitud de crédito CAL-ELSUC FERRETERÍA CALEL - MAZATENANGO SUCHITEPEQUEZ, NIT 10784864-3.pdf',9246,'2023-10-03'),(149,'ferre y constr el shady.pdf',9185,'2023-10-04'),(150,'Marta Julia de la Cruz - Mazatenango.pdf',9078,'2023-10-04'),(151,'Elefante.pdf',7512,'2023-10-25'),(152,'14-11-2023 solicitud regalos por aniversario ferre san sebastian Reu.pdf',237,'2023-11-14'),(153,'14-11-2023 solicitud regalos por convivio navideño ferrofuerte darwin vasquez.pdf',6557,'2023-11-14'),(154,'Oasis.pdf',6157,'2023-11-24'),(155,'Papelería Grupo Dige GV.pdf',82,'2024-01-02'),(156,'1.jpeg',8087,'2024-01-12'),(157,'1.jpeg',8087,'2024-01-12'),(158,'002 solicitud de crédito WIL-IAQUE WILLIAM ALVARADO CF.pdf',9622,'2024-04-02'),(159,'002 solicitud de crédito MAB-UNSUC MULTIFER LA ABUNDANCIA nit 5993581-2.pdf',9627,'2024-04-02');
/*!40000 ALTER TABLE `documentos_empresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:15:45
