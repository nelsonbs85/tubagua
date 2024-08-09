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
-- Table structure for table `credito_vendedor`
--

DROP TABLE IF EXISTS `credito_vendedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credito_vendedor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint NOT NULL DEFAULT '1',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modifica` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vendedor_id` int NOT NULL,
  `rango1` decimal(10,2) DEFAULT NULL,
  `rango2` decimal(10,2) DEFAULT NULL,
  `rango3` decimal(10,2) DEFAULT NULL,
  `rango4` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credito_vendedor`
--

LOCK TABLES `credito_vendedor` WRITE;
/*!40000 ALTER TABLE `credito_vendedor` DISABLE KEYS */;
INSERT INTO `credito_vendedor` VALUES (1,1,'2023-11-22 20:53:07','2023-11-22 20:53:07',76,232157.95,34700.00,23211.30,72037.34),(2,1,'2023-11-23 19:37:10','2023-11-23 19:37:10',5,226721.73,56425.84,33061.64,49232.87),(3,1,'2023-11-24 16:14:54','2023-11-24 16:14:54',76,202709.73,73542.35,21003.70,75079.94),(4,1,'2023-11-28 00:37:11','2023-11-28 00:37:11',11,296219.89,104664.84,28280.00,82902.36),(5,1,'2023-12-12 02:31:58','2023-12-12 02:31:58',8,210755.56,124905.32,46195.92,129502.67),(6,1,'2024-01-04 20:25:16','2024-01-04 20:25:16',4,136469.88,222527.09,59153.43,50865.94),(7,1,'2024-01-04 22:04:09','2024-01-04 22:04:09',7,94947.86,126586.14,19292.70,57256.25),(8,1,'2024-01-04 22:07:00','2024-01-04 22:07:00',7,94947.86,126586.14,19292.70,57256.25),(9,1,'2024-01-04 22:08:47','2024-01-04 22:08:47',7,94947.86,126586.14,19292.70,57256.25),(10,1,'2024-01-04 23:45:57','2024-01-04 23:45:57',4,136469.88,222527.09,59153.43,50865.94),(11,1,'2024-01-04 23:48:47','2024-01-04 23:48:47',76,86462.53,111461.07,72051.14,69490.29),(12,1,'2024-01-04 23:58:48','2024-01-04 23:58:48',76,86462.53,111461.07,72051.14,69490.29),(13,1,'2024-01-05 00:00:28','2024-01-05 00:00:28',76,86462.53,111461.07,72051.14,69490.29),(14,1,'2024-01-05 00:01:03','2024-01-05 00:01:03',9,29602.44,4736.56,0.00,0.00),(15,1,'2024-01-05 04:53:46','2024-01-05 04:53:46',76,86462.53,111461.07,72051.14,69490.29),(16,1,'2024-01-06 16:50:26','2024-01-06 16:50:26',5,96352.13,200775.80,40777.11,29896.72),(17,1,'2024-01-06 16:55:06','2024-01-06 16:55:06',4,123255.01,216939.17,68271.84,50865.94),(18,1,'2024-01-25 20:29:22','2024-01-25 20:29:22',52,162624.92,62358.62,41347.54,6987.45),(19,1,'2024-01-27 15:38:49','2024-01-27 15:38:49',6,300681.93,119670.71,47329.67,56486.68),(20,1,'2024-01-29 23:10:44','2024-01-29 23:10:44',66,235985.27,94555.55,89304.87,51516.47),(21,1,'2024-03-09 17:42:32','2024-03-09 17:42:32',8,272268.65,169842.18,8632.30,72998.60),(22,1,'2024-03-09 17:56:14','2024-03-09 17:56:14',8,272268.65,169192.18,8632.30,72998.60),(23,1,'2024-03-12 01:24:45','2024-03-12 01:24:45',4,222611.87,120197.13,6638.70,34522.10),(24,1,'2024-03-12 01:26:05','2024-03-12 01:26:05',5,226308.32,135745.45,13223.30,47173.05),(25,1,'2024-03-12 01:26:32','2024-03-12 01:26:32',6,300695.12,223829.79,33471.85,46103.11),(26,1,'2024-03-12 01:28:02','2024-03-12 01:28:02',7,392063.24,89211.07,16612.34,34585.45),(27,1,'2024-03-12 01:28:17','2024-03-12 01:28:17',8,250622.49,127480.75,11743.38,71103.00),(28,1,'2024-03-12 01:29:03','2024-03-12 01:29:03',10,369108.61,123433.60,16877.90,95549.49),(29,1,'2024-03-12 01:30:53','2024-03-12 01:30:53',11,477987.60,136210.68,22448.85,157389.64),(30,1,'2024-03-12 01:31:08','2024-03-12 01:31:08',21,349711.83,95429.70,6800.00,9098.35),(31,1,'2024-03-12 01:34:03','2024-03-12 01:34:03',29,289809.66,178036.73,21803.98,74469.41),(32,1,'2024-03-12 01:37:25','2024-03-12 01:37:25',30,147388.28,42038.30,12647.00,57101.49),(33,1,'2024-03-12 01:38:17','2024-03-12 01:38:17',31,98439.96,56122.63,22882.20,24646.86),(34,1,'2024-03-12 01:39:13','2024-03-12 01:39:13',52,366407.29,179635.02,19007.91,19952.09),(35,1,'2024-03-12 01:39:22','2024-03-12 01:39:22',66,226384.86,187480.71,48771.00,68805.45),(36,1,'2024-03-12 01:41:08','2024-03-12 01:41:08',76,221972.47,112161.42,6717.10,78736.20),(37,1,'2024-03-14 16:05:40','2024-03-14 16:05:40',2,31168.32,9191.98,3683.89,0.00),(38,1,'2024-03-26 16:01:57','2024-03-26 16:01:57',11,399468.96,225463.69,60187.14,99922.95),(39,1,'2024-04-12 01:03:45','2024-04-12 01:03:45',4,205342.83,111718.27,67533.05,26598.74),(40,1,'2024-04-12 01:05:44','2024-04-12 01:05:44',5,210032.47,133760.33,35034.42,37219.77),(41,1,'2024-04-12 01:07:25','2024-04-12 01:07:25',6,330464.30,186519.74,56711.78,42272.11),(42,1,'2024-04-12 01:13:36','2024-04-12 01:13:36',7,197805.25,258403.83,42702.20,45692.79),(43,1,'2024-04-12 01:15:27','2024-04-12 01:15:27',8,244834.20,216535.50,56374.65,72817.20),(44,1,'2024-04-12 01:17:14','2024-04-12 01:17:14',10,319477.58,235707.69,55019.01,70005.77),(45,1,'2024-04-12 01:18:50','2024-04-12 01:18:50',11,302110.58,273516.53,62963.29,51220.13),(46,1,'2024-04-12 01:20:55','2024-04-12 01:20:55',21,317657.23,103992.45,25840.24,3610.00),(47,1,'2024-04-12 01:22:39','2024-04-12 01:22:39',29,287285.46,182514.45,58391.95,67108.85),(48,1,'2024-04-12 01:25:55','2024-04-12 01:25:55',30,123754.64,97753.44,15815.20,54424.82),(49,1,'2024-04-12 01:27:37','2024-04-12 01:27:37',31,80065.98,63243.55,36917.25,39818.56),(50,1,'2024-04-12 01:29:07','2024-04-12 01:29:07',52,225288.70,199252.44,69155.26,32061.34),(51,1,'2024-04-12 01:30:43','2024-04-12 01:30:43',52,225288.70,199252.44,69155.26,32061.34),(52,1,'2024-04-12 01:31:26','2024-04-12 01:31:26',66,264903.08,174607.96,124142.68,54365.60),(53,1,'2024-04-12 01:33:20','2024-04-12 01:33:20',76,248234.56,111595.59,68569.95,78163.80);
/*!40000 ALTER TABLE `credito_vendedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:08:13
