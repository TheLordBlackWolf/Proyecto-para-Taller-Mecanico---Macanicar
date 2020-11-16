-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: DB_TallerMecanico
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
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `Id_Us` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(200) NOT NULL DEFAULT '',
  `Apellido` char(255) DEFAULT NULL,
  `Rut` varchar(14) NOT NULL DEFAULT '',
  `Correo` varchar(255) NOT NULL,
  `Clave` varchar(30) NOT NULL,
  `Direccion` varchar(300) DEFAULT NULL,
  `Celular` int(11) DEFAULT NULL,
  `TipoUsuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Us`),
  UNIQUE KEY `Rut` (`Rut`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'sebastian','albornoz','196791108','seba@gmail.com ','seba123','calle feliz ',1111111,'Cliente'),(5,'cami','rojas','1111111','rojas@hotmail.com ','rojas123','calle feliz ',133,NULL),(10,'diego','diego','1234552','diego@gmail.com ','diego123','calle diego ',13312212,NULL),(11,'Camila','Guerrera','19432122','guerrera@hotmail.com ','123456789','calle guerrera ',13312214,NULL),(12,'sebastian','Albornoz','193111579','seba@gmail.com ','seba123','calle viva ',964367533,NULL),(14,'Manuel','Carvajal','19878990','manuela@gmail.com ','manu123','calle holi ',987876755,'Cliente'),(15,'maria','juana','11111111','maria@gmail.com ','mari123','calle maria ',55544545,'empleado'),(21,'veronica','camilo','100575043','vero@gmail.com ','vero123','calle moris ',988881315,'cliente'),(24,'hghghjgj','albornoz','19679110','seba@gmail.com ','12345','calle calle ',131231231,'cliente'),(26,'MARIA DE LOS ANGELES','BLANCO','192111579','maria@gmail.com ','MARIA123','CALLE MARIA ',955889977,'cliente'),(28,'jose','perez','1111111111','jose@hotmail.com ','12345','calle jose ',987878787,'cliente'),(33,'Carin','Blanco','156561118','carin@gmail.com ','carin123','calle Carin ',978787878,'cliente');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-16 19:00:02
