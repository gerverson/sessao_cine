-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 162.241.3.6    Database: sistem70_maninha
-- ------------------------------------------------------
-- Server version	5.7.23-23

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
-- Table structure for table `sessao_session`
--

DROP TABLE IF EXISTS `sessao_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessao_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filme_id` int(11) DEFAULT NULL,
  `valor` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inicio` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `termino` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qtd_acentos` int(11) DEFAULT NULL,
  `sala` int(11) DEFAULT NULL,
  `cancelar` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessao_session`
--

LOCK TABLES `sessao_session` WRITE;
/*!40000 ALTER TABLE `sessao_session` DISABLE KEYS */;
INSERT INTO `sessao_session` VALUES (17,16,'35.00','10/04/2019','08:00','09:50',40,2,0),(18,16,'30.00','17/04/2019','19:00','20:50',40,2,0),(19,17,'45.00','13/02/2019','13:00','15:00',50,3,0),(20,17,'50.00','27/02/2019','01:00','03:00',30,5,1),(21,18,'30.00','06/02/2019','17:00','18:20',40,2,0),(22,18,'30.00','04/02/2019','21:00','23:00',250,2,0);
/*!40000 ALTER TABLE `sessao_session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-14 17:09:33
