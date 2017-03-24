-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: wwei1db
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `libadmin`
--

DROP TABLE IF EXISTS `libadmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libadmin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libadmin`
--

LOCK TABLES `libadmin` WRITE;
/*!40000 ALTER TABLE `libadmin` DISABLE KEYS */;
INSERT INTO `libadmin` VALUES (1,'wei','93309b7923985338206249565a3bd816'),(2,'test','1afc1cf8268bc62b752265c658a8fd38'),(3,'111','974564df032e344b55b3dc80ba029f5b'),(4,'2','ea650e3e0ffeee92f0ba42c90613f7f6'),(5,'3','c2c68e09d65c6c2fca34473fd3fb586f'),(6,'5','354a9b560e02cc3ae036db44ebcfeb19'),(7,'0','83a6c019fd8d11d6257b22b92857a8bc'),(8,'9','d176f9a1a98a2eaa8dee30dee8322d63'),(9,'Pauline Nicholas','1f01842615bd41d9da1cfba5ad270a51'),(10,'pnichola','d3c4c9cd0defc703b7398beb1f6f73e3');
/*!40000 ALTER TABLE `libadmin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-24 10:31:58
