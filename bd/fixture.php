<?php

require_once("./functions/access.php");

try {
    $conn = new \PDO("mysql:host=$host", $user, $pass);

    $conn->exec("
        CREATE DATABASE  IF NOT EXISTS `codeeducation_pdo`
        CHARACTER SET utf8
        DEFAULT CHARACTER SET utf8
        COLLATE utf8_general_ci
        DEFAULT COLLATE utf8_general_ci;     
        USE `codeeducation_pdo`;
        DROP TABLE IF EXISTS `site`;
        CREATE TABLE `site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10
            DEFAULT CHARACTER SET utf8   
            COLLATE utf8_general_ci;
LOCK TABLES `site` WRITE;
INSERT INTO `site` VALUES (1,'home','Home','<p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p>',0),(2,'empresa','A Empresa','<p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p><p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p>',1),(3,'servicos','Nossos serviços','<p>Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo</p><p>Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo</p>',1),(4,'produtos','Nossos produtos','<p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p><p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p>',1),(5,'contato','Contato',NULL,1),(6,'busca','Busca',NULL,0),(7,'sucesso','Sucesso',NULL,0),(8,'404','Página não encontrada','Você solicitou uma página que não existe.',0);
UNLOCK TABLES;") or die(print_r($conn->errorInfo(), true));

} catch (\PDOException $e) {
    die("Erro: ". $e->getMessage());
}
?>