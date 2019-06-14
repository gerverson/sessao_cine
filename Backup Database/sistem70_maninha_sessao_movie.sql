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
-- Table structure for table `sessao_movie`
--

DROP TABLE IF EXISTS `sessao_movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessao_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` int(11) DEFAULT NULL,
  `classificacao` int(11) DEFAULT NULL,
  `sinopse` longtext COLLATE utf8_unicode_ci,
  `imagem` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessao_movie`
--

LOCK TABLES `sessao_movie` WRITE;
/*!40000 ALTER TABLE `sessao_movie` DISABLE KEYS */;
INSERT INTO `sessao_movie` VALUES (16,'Vingadores: Ultimato',1,3,'Avengers: Endgame (no Brasil, Vingadores: Ultimato[1]) é um futuro filme estadunidense de super-herói de 2019, baseado na equipe Os Vingadores da Marvel Comics, produzido pela Marvel Studios','4f3271bdc4f005068ed56a234c047813.jpg'),(17,'Star Wars: Episódio IX',8,4,'Star Wars: Episódio IX é um futuro filme estadunidense do tipo space opera épico de aventura','d924c5facde1ad8839a801e59fd33bf5.jpg'),(18,'O Rei Leão 2',1,1,'The Lion King é um futuro filme épico musical de drama estadunidense de 2019','4f6c50139962cbf26a5a019de8e8c959.jpg'),(19,'Filme IFTO',5,3,'Filme teste ','ca8653291290bbd6a25a2eadc1daca64.png');
/*!40000 ALTER TABLE `sessao_movie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-14 17:09:50
