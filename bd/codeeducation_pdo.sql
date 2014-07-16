CREATE DATABASE  IF NOT EXISTS `codeeducation_pdo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `codeeducation_pdo`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: codeeducation_pdo
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
INSERT INTO `site` VALUES (1,'home','Home','<p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p>',0),(2,'empresa','A Empresa','<p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p><p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p>',1),(3,'servicos','Nossos serviços','<p>Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo</p><p>Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo</p>',1),(4,'produtos','Nossos produtos','<p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p><p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p>',1),(5,'contato','Contato',NULL,1),(6,'busca','Busca',NULL,0),(7,'sucesso','Sucesso',NULL,0),(8,'404','Página não encontrada','Você solicitou uma página que não existe.',0);
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-15 23:01:38
