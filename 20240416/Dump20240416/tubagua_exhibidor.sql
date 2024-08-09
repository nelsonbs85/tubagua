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
-- Table structure for table `exhibidor`
--

DROP TABLE IF EXISTS `exhibidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exhibidor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cliente_id` int NOT NULL,
  `fecha_ultima_entrega` date DEFAULT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '1',
  `observaciones` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cliente_id_UNIQUE` (`cliente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=463 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exhibidor`
--

LOCK TABLES `exhibidor` WRITE;
/*!40000 ALTER TABLE `exhibidor` DISABLE KEYS */;
INSERT INTO `exhibidor` VALUES (1,346,'2022-06-23','1','Quedo de comprar 2 carretes mas para completar el combo'),(2,6538,'2022-06-23','1',''),(3,7688,'2022-06-23','1',''),(4,7691,'2022-07-01','1','Se le mandaron 2 exhibidores'),(5,6693,'2022-07-01','1',''),(6,6501,'2022-07-01','1',''),(7,6843,'2022-07-01','1',''),(8,7021,'2022-07-01','1',''),(9,6291,'2022-07-01','1',''),(10,7716,'2022-07-01','1',''),(11,7574,'2022-07-01','1',''),(12,2891,'2022-07-01','1',''),(13,7389,'2022-07-12','1',''),(14,7726,'2022-07-12','1',''),(15,5695,'2022-07-12','1',''),(16,6709,'2022-07-12','1',''),(17,5907,'2022-07-12','1',''),(18,5997,'2022-07-12','1',''),(19,7003,'2022-07-12','1',''),(20,149,'2022-07-12','1',''),(21,6373,'2022-07-12','1',''),(22,6100,'2022-07-12','1',''),(23,7235,'2022-07-12','1',''),(24,5715,'2022-07-12','1',''),(25,6394,'2022-07-12','1',''),(26,7729,'2022-07-12','1',''),(27,2037,'2022-07-12','1',''),(28,5818,'2022-07-17','1',''),(29,7590,'2022-07-18','1',''),(30,6763,'2022-07-19','1',''),(31,7218,'2022-07-20','1',''),(32,7737,'2022-07-21','1',''),(33,6837,'2022-07-22','1',''),(34,6694,'2022-07-23','1',''),(35,5581,'2022-07-24','1',''),(36,3788,'2022-07-25','1',''),(37,7089,'2022-07-26','1',''),(38,5793,'2022-07-27','1',''),(39,6834,'2022-07-22','1',''),(40,4504,'2022-07-22','1',''),(41,7512,'2022-07-22','1',''),(42,7280,'2022-07-22','1',''),(43,6114,'2022-08-08','1',''),(44,7379,'2022-08-08','1','falta la cadena de 1/8 pero la compro en 05/04/2022 con la factura # 10282 y aun tiene por esa razon no la pidio, se le comento a Requelmer y autorizo que se le mande el exhibidor..'),(45,7667,'2022-08-08','1',''),(46,6701,'2022-08-08','1',''),(47,6913,'2022-08-08','1',''),(48,381,'2022-08-08','1',''),(49,5694,'2022-08-08','1',''),(50,6534,'2022-08-08','1',''),(51,4027,'2022-08-08','1','02-02-2024: Con este serian 3 exhibidores que se le mandan al cliente. Segun indica carlos es para sus hermanos y su mama ya que entre todos tienen 4 ferreterias'),(52,5257,'2022-08-08','1',''),(53,7768,'2022-08-08','1',''),(54,7522,'2022-08-08','1',''),(55,7668,'2022-08-08','1',''),(56,7459,'2022-08-08','1',''),(57,7781,'2022-08-08','1',''),(58,7387,'2022-08-08','1',''),(59,6673,'2022-08-08','1',''),(60,7386,'2022-08-08','1',''),(61,6040,'2022-08-08','1',''),(62,179,'2022-08-08','1',''),(63,6689,'2022-08-08','1',''),(64,7693,'2022-08-08','1','Se le mandaron 2 exhibidores'),(65,7797,'2022-08-08','1','2'),(66,5193,'2022-08-08','1','URGENTE'),(67,7606,'2022-08-15','1','3'),(68,6995,'2022-08-15','1','4'),(69,4925,'2022-08-15','1','5'),(70,7052,'2022-08-15','1','6'),(71,7803,'2022-08-15','1','7'),(72,7525,'2022-08-15','1','8'),(73,6931,'2022-08-15','1','9'),(74,5685,'2022-08-15','1','10'),(75,281,'2022-08-08','1','11'),(76,7795,'2022-08-12','1','12'),(77,7758,'2022-08-15','1','13'),(78,7901,'2022-08-15','1','14'),(79,7482,'2022-09-26','1','Al cliente se le dio el exhibidor el 26-09-2022'),(81,8043,'2022-10-20','1',''),(82,7190,'2022-10-19','1',''),(83,6556,'2022-10-20','1',''),(85,8118,'2022-10-28','1',NULL),(86,6806,'2022-11-03','1',''),(87,5976,'2022-10-28','1',''),(88,7327,'2022-11-03','1',''),(89,354,'2022-11-03','1',''),(90,8141,'2022-11-04','1',''),(91,8100,'2022-11-04','1',''),(92,3681,'2022-11-09','1',''),(93,3888,'2024-02-07','1',''),(94,8151,'2022-11-10','1',''),(95,8164,'2022-11-10','1',''),(105,6314,NULL,'0',NULL),(109,6610,'2023-02-03','1',''),(110,7858,'2022-11-14','1',''),(111,8173,'2022-11-11','1',''),(112,7872,'2022-11-10','1',''),(114,8182,'2022-11-21','1',''),(116,8181,'2022-11-21','1',''),(117,8196,'2022-11-21','1',''),(118,6886,'2022-11-21','1',''),(119,5598,'2023-10-26','1',''),(120,8212,NULL,'1',NULL),(121,8204,'2024-01-24','1',''),(122,6821,'2024-02-09','1',''),(123,7167,'2022-11-23','1',''),(124,8214,'2022-11-28','1',''),(125,133,'2023-09-16','1',''),(126,5814,'2022-11-25','1',''),(127,8226,'2022-11-28','1',''),(128,4605,'2022-11-28','1',''),(129,6424,'2022-11-29','1',''),(130,80,'2024-01-19','1',''),(131,7748,'2022-09-23','1',''),(132,7955,'2022-11-29','1',''),(133,8200,'2022-11-29','1',''),(134,6065,'2024-01-16','1',''),(135,7894,'2022-12-08','1',''),(136,7322,'2022-12-08','1',''),(137,4053,'2023-05-04','1',''),(138,181,'2022-12-08','1',''),(139,6410,'2022-12-13','1',''),(140,6987,'2024-01-22','1',''),(141,6434,'2022-12-16','1',''),(142,7762,'2023-06-13','1',''),(143,299,'2022-12-16','1',''),(144,8252,'2022-12-19','1',''),(145,8253,'2022-12-19','1',''),(146,6961,'2023-05-13','1',''),(147,8171,'2022-12-19','1',''),(148,8287,'2022-12-16','1',''),(149,8291,'2022-12-19','1',''),(150,8098,'2022-12-19','1',''),(151,5899,'2023-06-21','1',''),(152,5666,'2023-06-21','1',''),(153,1527,'2023-06-22','1',''),(154,8820,'2023-05-03','1',''),(160,6790,'2024-02-13','1',''),(161,8954,'2023-06-20','1',''),(162,203,'2023-07-01','1',''),(163,6053,'2023-06-30','1',''),(164,8764,'2023-06-30','1',''),(165,7709,'2023-06-27','1',''),(166,8311,'2023-06-29','1',''),(174,5113,'2023-07-18','1',''),(175,8858,'2023-07-18','1',''),(176,9052,'2023-07-18','1',''),(177,8031,'2023-07-18','1',''),(178,8896,'2023-07-18','1',''),(191,6915,'2023-07-18','1',''),(192,8059,'2023-07-18','1',''),(193,6554,'2023-06-28','1',''),(194,8498,'2024-01-18','1',''),(195,8091,'2022-10-17','1',''),(196,2813,'2023-05-09','1',''),(197,7823,'2023-07-26','1',''),(198,7002,'2023-10-19','1',''),(206,8000,'2023-08-12','1',''),(211,5647,'2023-08-12','1',''),(212,8791,'2023-08-12','1',''),(217,6630,'2023-08-15','1',''),(218,5982,'2023-08-16','1',''),(219,7874,'2023-08-12','1',''),(220,5703,'2024-01-26','1',''),(221,5960,'2023-08-12','1',''),(222,4496,'2023-11-07','1',''),(227,8782,'2023-08-15','1',''),(228,8593,'2023-08-21','1',''),(229,5845,'2023-08-21','1',''),(230,8397,'2023-08-15','1',''),(231,8993,'2023-08-21','1',''),(232,7128,'2023-08-21','1',''),(233,8751,'2024-01-15','1',''),(234,6188,'2023-08-21','1',''),(235,8895,'2023-08-21','1',''),(236,8613,'2024-01-17','1',''),(237,2752,'2024-02-01','1',''),(238,250,'2023-08-07','1','Se le mandaron 2 exhibidores'),(239,6443,'2023-08-24','1',''),(240,6533,'2023-08-24','1',''),(241,9006,'2023-08-24','1',''),(242,8894,'2023-08-29','1',''),(243,8550,'2023-08-24','1',''),(244,272,'2023-08-10','1',''),(245,9108,'2023-08-24','1',''),(246,8271,'2023-08-24','1',''),(252,8061,'2023-08-24','1',''),(253,8124,'2024-09-12','1',''),(254,8216,'2023-09-12','1',''),(255,5978,'2023-09-12','1',''),(256,7721,'2023-09-12','1',''),(257,6621,'2023-09-12','1',''),(258,6629,'2023-09-12','1',''),(259,8469,'2023-09-13','1',''),(260,9058,'2023-09-12','1',''),(261,9187,'2023-09-12','1',''),(262,5716,'2023-09-29','1',''),(263,5645,'2023-09-29','1',''),(264,9181,'2023-09-29','1',''),(265,5120,'2023-09-29','1',''),(266,9179,'2023-09-29','1',''),(267,6417,'2023-09-29','1',''),(268,9204,'2023-09-29','1',''),(269,8434,'2023-10-26','1',''),(270,7521,'2024-02-01','1',''),(271,8461,'2023-09-29','1',''),(277,6730,'2023-09-29','1',''),(278,337,'2023-09-29','1',''),(279,8908,'2023-11-03','1',''),(280,9086,'2023-11-03','1',''),(281,7824,'2023-11-03','1',''),(282,7556,'2023-11-03','1',''),(283,5731,'2023-09-12','1',''),(284,6680,'2023-11-03','1',''),(285,9138,'2023-11-03','1',''),(286,5913,'2023-11-08','1',''),(287,3812,'2024-02-16','1',''),(288,6569,'2023-11-03','1',''),(289,7264,'2023-11-08','1',''),(290,8104,'2023-10-06','1',''),(291,5491,'2023-11-03','1',''),(294,6809,'2023-11-04','1',''),(295,9143,'2023-11-04','1',''),(304,9234,'2023-11-06','1',''),(305,6311,'2023-11-15','1',''),(306,9311,'2023-12-04','1',''),(307,8478,'2023-12-13','1',''),(308,9221,'2024-01-03','1',''),(309,7939,NULL,'0',NULL),(310,8547,'2024-01-05','1',''),(311,53,'2024-01-13','1',''),(312,8113,'2024-01-16','1',''),(313,6122,'2024-01-31','0',''),(314,9452,'2024-01-31','1',''),(315,9280,'2024-01-31','1',''),(316,5995,'2024-01-31','1',''),(317,9235,'2024-02-02','1','Cliente tioene exhibidor normal y de cubetas. Uno lo tiene el papa y el otro el hijo.'),(318,7699,'2024-02-02','1',''),(319,8681,'2024-02-02','1',''),(320,8351,'2024-02-05','1',''),(332,8373,'2024-02-05','1',''),(333,6575,'2024-02-05','1',''),(334,6993,'2024-02-05','1',''),(335,8827,'2024-02-05','1',''),(336,6118,'2024-02-06','1',''),(337,7919,'2024-02-09','1',''),(338,6647,'2024-02-06','1',''),(339,9177,'2024-02-09','1',''),(340,9437,'2024-02-09','1',''),(341,8169,'2024-02-09','1',''),(342,8921,'2024-02-09','1',''),(343,9205,'2024-02-14','1',''),(344,9488,'2024-02-14','1',''),(345,9491,'2024-02-14','1',''),(346,9281,'2024-02-12','1',''),(347,6283,'2024-02-14','1',''),(348,142,'2024-02-16','1',''),(349,7105,'2024-02-16','1',''),(354,8060,'2024-02-16','1',''),(355,9238,'2024-02-16','1',''),(356,9168,'2024-02-16','1',''),(357,6904,'2024-02-13','1',''),(358,9293,'2024-02-16','1',''),(359,8089,'2024-02-23','1',''),(360,8957,'2024-02-22','1',''),(361,4141,'2024-02-23','1',''),(362,6407,'2024-02-23','1',''),(363,6364,'2024-02-23','1',''),(364,9076,'2024-02-23','1',''),(365,6944,'2024-02-23','1',''),(366,2909,'2024-02-23','1',''),(367,9232,'2024-02-23','1',''),(368,7739,'2024-02-23','1',''),(369,8901,'2024-02-23','0',''),(373,6271,'2024-02-23','1',''),(388,3586,'2024-02-23','1',''),(389,5648,'2024-02-23','1',''),(390,8221,'2024-02-23','1',''),(391,9075,'2024-02-23','1',''),(392,8260,'2024-02-22','1',''),(393,7220,'2024-02-23','1',''),(394,9445,'2024-02-23','1',''),(395,6425,NULL,'1',NULL),(396,6191,'2024-02-23','1',''),(397,105,'2024-02-22','1',''),(398,8058,'2024-02-23','1',''),(399,7879,'2024-02-23','1',''),(423,9258,'2024-02-23','1',''),(424,8802,'2024-02-26','1',''),(425,8394,NULL,'1',NULL),(426,6618,'2024-02-29','1',''),(427,7775,'2024-03-27','1',''),(428,8583,'2024-03-27','1',''),(429,7210,'2024-03-04','1',''),(430,6453,'2024-03-04','1',''),(431,5858,'2024-03-04','1',''),(432,8910,'2024-03-04','1',''),(433,9142,'2024-03-04','1',''),(434,8707,'2024-03-04','1',''),(435,6989,'2024-03-04','1',''),(436,8867,'2024-04-01','1',''),(448,233,'2024-04-09','1',''),(449,8648,'2024-04-07','1',''),(450,9610,'2024-04-12','1',''),(451,8544,'2024-04-15','1',''),(452,9673,'2024-08-02','1',''),(453,9672,'2024-08-04','1',''),(462,5730,NULL,'1',NULL);
/*!40000 ALTER TABLE `exhibidor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:07:47
