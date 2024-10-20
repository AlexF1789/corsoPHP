-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: java
-- ------------------------------------------------------
-- Server version	11.4.3-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `risposte`
--

DROP TABLE IF EXISTS `risposte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `risposte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `risposta` varchar(290) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risposte`
--

LOCK TABLES `risposte` WRITE;
/*!40000 ALTER TABLE `risposte` DISABLE KEYS */;
INSERT INTO `risposte` VALUES (2,'{\"everProgrammato\":\"0\",\"solveProblems\":\"0\",\"languages\":[\"C\",\"Java\",\"PHP\"],\"algoVScode\":\"0\",\"futureSkill\":\"0\",\"scaredUni\":\"0\",\"webDeveloped\":\"0\",\"usedCMS\":\"0\",\"knowDB\":\"0\",\"knowCS\":\"0\",\"knowServer\":\"0\",\"knowLinux\":\"0\",\"knowCrypt\":\"0\",\"knowEtE\":\"0\",\"knowHTTPS\":\"0\"}'),(3,'{\"everProgrammato\":\"1\",\"solveProblems\":\"1\",\"languages\":[],\"algoVScode\":\"1\",\"futureSkill\":\"1\",\"scaredUni\":\"1\",\"webDeveloped\":\"1\",\"usedCMS\":\"1\",\"knowDB\":\"1\",\"knowCS\":\"1\",\"knowServer\":\"1\",\"knowLinux\":\"1\",\"knowCrypt\":\"1\",\"knowEtE\":\"1\",\"knowHTTPS\":\"1\"}'),(4,'{\"everProgrammato\":\"ND\",\"solveProblems\":\"ND\",\"languages\":[],\"algoVScode\":\"ND\",\"futureSkill\":\"ND\",\"scaredUni\":\"ND\",\"webDeveloped\":\"ND\",\"usedCMS\":\"ND\",\"knowDB\":\"ND\",\"knowCS\":\"ND\",\"knowServer\":\"ND\",\"knowLinux\":\"ND\",\"knowCrypt\":\"ND\",\"knowEtE\":\"ND\",\"knowHTTPS\":\"ND\"}'),(5,'{\"everProgrammato\":\"0\",\"solveProblems\":\"0\",\"languages\":[\"Java\",\"Python\"],\"algoVScode\":\"1\",\"futureSkill\":\"0\",\"scaredUni\":\"0\",\"webDeveloped\":\"1\",\"usedCMS\":\"1\",\"knowDB\":\"0\",\"knowCS\":\"0\",\"knowServer\":\"1\",\"knowLinux\":\"1\",\"knowCrypt\":\"0\",\"knowEtE\":\"ND\",\"knowHTTPS\":\"1\"}'),(6,'{\"everProgrammato\":\"0\",\"solveProblems\":\"0\",\"languages\":[\"Java\",\"Python\"],\"algoVScode\":\"1\",\"futureSkill\":\"0\",\"scaredUni\":\"0\",\"webDeveloped\":\"1\",\"usedCMS\":\"1\",\"knowDB\":\"0\",\"knowCS\":\"0\",\"knowServer\":\"1\",\"knowLinux\":\"1\",\"knowCrypt\":\"0\",\"knowEtE\":\"ND\",\"knowHTTPS\":\"1\"}'),(7,'{\"everProgrammato\":\"0\",\"solveProblems\":\"0\",\"languages\":[\"C\",\"Python\",\"HTML\",\"SQL\"],\"algoVScode\":\"1\",\"futureSkill\":\"0\",\"scaredUni\":\"0\",\"webDeveloped\":\"1\",\"usedCMS\":\"1\",\"knowDB\":\"0\",\"knowCS\":\"0\",\"knowServer\":\"1\",\"knowLinux\":\"1\",\"knowCrypt\":\"0\",\"knowEtE\":\"ND\",\"knowHTTPS\":\"1\"}');
/*!40000 ALTER TABLE `risposte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'java'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-11 21:28:00
