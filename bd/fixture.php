<?php

require_once("admin/functions/access.php");

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
) ENGINE=InnoDB AUTO_INCREMENT=1
            DEFAULT CHARACTER SET utf8   
            COLLATE utf8_general_ci;
LOCK TABLES `site` WRITE;
INSERT INTO `site` VALUES (1,'home','Home','<p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p><p>Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo Home texto ilustrativo ilustrando texto para exemplo</p>',0),(2,'empresa','A Empresa','<p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p><p>Nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo nossa empresa texto ilustrativo ilustrando texto para exemplo</p>',1),(3,'servicos','Nossos serviços','<p>Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo</p><p>Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo Serviços texto ilustrativo ilustrando texto para exemplo</p>',1),(4,'produtos','Nossos produtos','<p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p><p>Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo Produtos texto ilustrativo ilustrando texto para exemplo</p>',1),(5,'contato','Contato','Preencha ás informações e nos envie.',1),(6,'busca','Busca',NULL,0),(7,'sucesso','Sucesso',NULL,0),(8,'404','Página não encontrada','Você solicitou uma página que não existe.',0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
LOCK TABLES `users` WRITE;
UNLOCK TABLES;") or die(print_r($conn->errorInfo(), true));


$options=['salt'=>"Frase segura de exemplo apenas",'cost'=>10];
$password=password_hash("admin123",PASSWORD_DEFAULT,$options);
$query = "INSERT INTO users VALUES(null,:name,:username,:email,:password,:status)";
$stmt = $conn->prepare($query);
$stmt->bindValue(":name","Admin", PDO::PARAM_STR);
$stmt->bindValue(":username","admin", PDO::PARAM_STR);
$stmt->bindValue(":password",$password, PDO::PARAM_STR);
$stmt->bindValue(":email","admin@site.com", PDO::PARAM_STR);
$stmt->bindValue(":status","1", PDO::PARAM_INT);
$stmt->execute();


} catch (\PDOException $e) {
    die("Erro: ". $e->getMessage());
}
?>