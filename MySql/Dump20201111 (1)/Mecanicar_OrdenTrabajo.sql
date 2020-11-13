-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: Mecanicar
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `OrdenTrabajo`
--

DROP TABLE IF EXISTS `OrdenTrabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `OrdenTrabajo` (
  `Id_Ot` int(255) NOT NULL AUTO_INCREMENT,
  `NumOrden` int(100) DEFAULT NULL,
  `Nombre_Sucursal` varchar(255) DEFAULT NULL,
  `Estado` varchar(200) DEFAULT NULL,
  `Detalles` varchar(600) DEFAULT NULL,
  `Detalles_repuestos` varchar(255) DEFAULT NULL,
  `IdUser` int(255) DEFAULT NULL,
  `IdJefe` int(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Ot`),
  KEY `IdUser` (`IdUser`),
  KEY `IdJefe` (`IdJefe`),
  CONSTRAINT `ordentrabajo_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `Usuario` (`Id_Us`),
  CONSTRAINT `ordentrabajo_ibfk_2` FOREIGN KEY (`IdJefe`) REFERENCES `JefeTaller` (`Id_Jt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OrdenTrabajo`
--

LOCK TABLES `OrdenTrabajo` WRITE;
/*!40000 ALTER TABLE `OrdenTrabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `OrdenTrabajo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-11 18:15:56
