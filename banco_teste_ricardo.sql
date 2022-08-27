CREATE DATABASE  IF NOT EXISTS `teste` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `teste`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: teste
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id_funcionario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `comissaopend` decimal(9,2) NOT NULL DEFAULT '0.00',
  `status` tinyint NOT NULL DEFAULT '1',
  `telefone` varchar(45) DEFAULT NULL,
  `permissao` char(5) DEFAULT NULL,
  `comissaoprod` char(5) DEFAULT NULL,
  `salariofixo` char(45) DEFAULT NULL,
  `comissaoserv` char(5) DEFAULT NULL,
  `funcionariocol` varchar(5) DEFAULT NULL,
  `percentual` decimal(9,2) DEFAULT NULL,
  `caminho_imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (12,'Ricardo Bavaresco',NULL,'ASDF',0.00,1,'99554668788','N','N','N','N',NULL,0.00,'../imagens/fimusi.jpg');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocao`
--

DROP TABLE IF EXISTS `promocao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promocao` (
  `id_promocao` int NOT NULL AUTO_INCREMENT,
  `valor_servico` decimal(10,0) NOT NULL DEFAULT '0',
  `descricao` varchar(200) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `data_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_promocao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocao`
--

LOCK TABLES `promocao` WRITE;
/*!40000 ALTER TABLE `promocao` DISABLE KEYS */;
INSERT INTO `promocao` VALUES (1,50,'Testando',1,'2022-08-18 19:53:18');
/*!40000 ALTER TABLE `promocao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servico` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(200) NOT NULL,
  `valor_servico` decimal(10,0) NOT NULL DEFAULT '0',
  `tempo` time NOT NULL,
  `logo_servico` longblob,
  `descricao_servico` varchar(255) DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `data_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,'CABELO + BARBA',60,'01:00:00',NULL,'',1,'2022-07-25 14:40:21'),(2,'CABELO',30,'00:30:00',NULL,'',1,'2022-08-04 10:52:01'),(3,'BARBA',30,'00:30:00',NULL,'',1,'2022-08-04 10:52:13'),(4,'ALISAMENTO',70,'01:00:00',NULL,'',1,'2022-08-04 10:52:32'),(5,'SOBRANCELHA',10,'00:30:00',NULL,'',1,'2022-08-04 10:52:56'),(6,'COLORIMETRIA',130,'01:30:00',NULL,'',1,'2022-08-04 10:53:30'),(7,'LUZES',90,'01:00:00',NULL,'',1,'2022-08-04 10:53:46'),(8,'CABELO + SOBRANCELHA',40,'00:30:00',NULL,'',0,'2022-08-04 21:19:14'),(9,'PEZINHO',10,'00:10:00',NULL,'',0,'2022-08-06 17:47:54'),(10,'MAQUINA NA BARBA',10,'00:10:00',NULL,'',0,'2022-08-06 17:48:19');
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico_promocao`
--

DROP TABLE IF EXISTS `servico_promocao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servico_promocao` (
  `id_promocao` int NOT NULL,
  `id_servico` int NOT NULL,
  PRIMARY KEY (`id_promocao`,`id_servico`),
  KEY `servico_servico_promocao_fk` (`id_servico`),
  CONSTRAINT `promocao_servico_promocao_fk` FOREIGN KEY (`id_promocao`) REFERENCES `promocao` (`id_promocao`),
  CONSTRAINT `servico_servico_promocao_fk` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico_promocao`
--

LOCK TABLES `servico_promocao` WRITE;
/*!40000 ALTER TABLE `servico_promocao` DISABLE KEYS */;
INSERT INTO `servico_promocao` VALUES (1,7);
/*!40000 ALTER TABLE `servico_promocao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-26 21:31:20
