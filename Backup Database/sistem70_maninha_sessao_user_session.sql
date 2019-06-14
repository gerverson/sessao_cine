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
-- Table structure for table `sessao_user_session`
--

DROP TABLE IF EXISTS `sessao_user_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessao_user_session` (
  `idsessao` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessao_user_session`
--

LOCK TABLES `sessao_user_session` WRITE;
/*!40000 ALTER TABLE `sessao_user_session` DISABLE KEYS */;
INSERT INTO `sessao_user_session` VALUES (21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(21,9),(18,9),(18,9),(18,9),(17,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(18,9),(17,9),(22,13);
/*!40000 ALTER TABLE `sessao_user_session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-14 17:09:55
