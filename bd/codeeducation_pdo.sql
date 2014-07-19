CREATE DATABASE  IF NOT EXISTS `codeeducation_pdo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `codeeducation_pdo`;
-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: codeeducation_pdo
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (1,'home','Home','<p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p>',0),(2,'empresa','A Empresa','<p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p><p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p>',1),(3,'servicos','Nossos serviÃ§os','<p>ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo</p><p>ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo ServiÃ§os texto ilustrativo ilustrando texto para exemplo</p>',1),(4,'produtos','Nossos produtos','<p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p><p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p>',1),(5,'contato','Contato',NULL,1),(6,'busca','Busca',NULL,0),(7,'sucesso','Sucesso',NULL,0),(8,'404','PÃ¡gina nÃ£o encontrada','VocÃª solicitou uma pÃ¡gina que nÃ£o existe.',0);
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Eder Silva','edersilva','contato@edersilva.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.W4vUjn6NZllN9l33BOtPJfGr85CQ/E2',1),(2,'fgfgfg','gfgfg','contato@ederrrrrsilva.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.W4vUjn6NZllN9l33BOtPJfGr85CQ/E2',0),(5,'dffdfdfdfd','fdfdfdddddddddfdf','contato@ederrrrrdddddsilva.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.W4vUjn6NZllN9l33BOtPJfGr85CQ/E2',1),(6,'dffdfdffgfgfgdfd','fdfdfddffddfdf','contatfffo@ederrrrrdddddsilvdddda.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI..UHmaoCvTjnEZcm//.06GO9fEUV1336',1),(7,'Mariana','mariana','mariana@maddri.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.L.ihlPf1zCnLPmxhE.xLwHyveJSI7Xi',1),(8,'Joaquim','joaquim','joaquim@j.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.4ugQ4fUhgC5gQywXwVzS5oB.N6lM6pi',1),(9,'Angela Maria de Abreu','angela','angela@angela.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.3mKdKm/0VZjxLzxaYog3x6F6qM8TFS2',1),(10,'JosÃ© Silva','jose','koioo@ioui.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.W4vUjn6NZllN9l33BOtPJfGr85CQ/E2',1),(13,'Eder da Silva','edersilvaddf','contatdo@edersilva.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.96NaoGPcvggI/3yKnaf3f0XksV2pTSK',1),(14,'VÃ³ Luciana','loka','loka@loka.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.bG4n2Y/RA15S8MG4hjCkFBaqi/mulKm',1),(15,'dfdf','luciana','lokddda@loka.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.Zfg8bYWlDUouHslh.Cm4WsU6oTZ2Zi2',1),(16,'fgfgghgh','lokarrr','loksssa@loka.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.IY/d5OcoFrBroehRC/uR0v5KXfHJAI2',0),(17,'gfgfgg','gfgfddddg','fffgfgfgg@fuui.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.gV2jGMmfnppNVrkLD31CxXu082WDzBe',1),(18,'Jessica','jessica','jessica@j.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.96NaoGPcvggI/3yKnaf3f0XksV2pTSK',1),(19,'fgfgfg','jessiddca','jessicda@j.com','$2y$10$RnJhc2Ugc2VndXJhIGRlI.W4vUjn6NZllN9l33BOtPJfGr85CQ/E2',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-19 18:03:53
