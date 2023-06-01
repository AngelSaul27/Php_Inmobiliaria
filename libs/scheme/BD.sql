-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: dark_block
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `broker`
--

DROP TABLE IF EXISTS `broker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `broker` (
  `bro_id` int NOT NULL AUTO_INCREMENT,
  `bro_fk_user` int NOT NULL,
  PRIMARY KEY (`bro_id`),
  KEY `fk_broker_user1_idx` (`bro_fk_user`),
  CONSTRAINT `fk_broker_user1` FOREIGN KEY (`bro_fk_user`) REFERENCES `user` (`use_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `broker`
--

LOCK TABLES `broker` WRITE;
/*!40000 ALTER TABLE `broker` DISABLE KEYS */;
/*!40000 ALTER TABLE `broker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cite`
--

DROP TABLE IF EXISTS `cite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cite` (
  `cit_id` int NOT NULL,
  `day` date NOT NULL,
  `time` time NOT NULL,
  `cit_fk_properties` int NOT NULL,
  `cit_fk_user` int NOT NULL,
  PRIMARY KEY (`cit_id`),
  KEY `fk_cite_properties1_idx` (`cit_fk_properties`),
  KEY `fk_cite_user1_idx` (`cit_fk_user`),
  CONSTRAINT `fk_cite_properties1` FOREIGN KEY (`cit_fk_properties`) REFERENCES `properties` (`pro_id`),
  CONSTRAINT `fk_cite_user1` FOREIGN KEY (`cit_fk_user`) REFERENCES `user` (`use_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cite`
--

LOCK TABLES `cite` WRITE;
/*!40000 ALTER TABLE `cite` DISABLE KEYS */;
/*!40000 ALTER TABLE `cite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorite` (
  `fav_id` int NOT NULL,
  `fav_date` date NOT NULL,
  `fav_fk_user` int NOT NULL,
  `fav_fk_properties` int NOT NULL,
  PRIMARY KEY (`fav_id`),
  KEY `fk_favorite_user1_idx` (`fav_fk_user`),
  KEY `fk_favorite_properties1_idx` (`fav_fk_properties`),
  CONSTRAINT `fk_favorite_properties1` FOREIGN KEY (`fav_fk_properties`) REFERENCES `properties` (`pro_id`),
  CONSTRAINT `fk_favorite_user1` FOREIGN KEY (`fav_fk_user`) REFERENCES `user` (`use_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(100) NOT NULL,
  `pro_description` varchar(255) NOT NULL,
  `pro_type` varchar(45) NOT NULL,
  `pro_price` int NOT NULL,
  `pro_rooms` int NOT NULL,
  `pro_bathrooms` int NOT NULL,
  `pro_address` varchar(75) NOT NULL,
  `pro_pais` varchar(75) NOT NULL,
  `pro_ciudad` varchar(75) NOT NULL,
  `pro_cover` varchar(255) NOT NULL,
  `pro_date_publication` date NOT NULL,
  `pro_broker` int NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `fk_properties_broker1_idx` (`pro_broker`),
  CONSTRAINT `fk_properties_broker1` FOREIGN KEY (`pro_broker`) REFERENCES `broker` (`bro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question` (
  `que_id` int NOT NULL,
  `que_message` varchar(45) NOT NULL,
  `que_date` date NOT NULL,
  `que_fk_user` int NOT NULL,
  PRIMARY KEY (`que_id`),
  KEY `fk_contact_user1_idx` (`que_fk_user`),
  CONSTRAINT `fk_contact_user1` FOREIGN KEY (`que_fk_user`) REFERENCES `user` (`use_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reply` (
  `rep_id` int NOT NULL,
  `rep_answer` varchar(45) NOT NULL,
  `rep_date` date NOT NULL,
  `rep_fk_contact` int NOT NULL,
  `rep_fk_broker` int NOT NULL,
  PRIMARY KEY (`rep_id`),
  KEY `fk_reply_contact1_idx` (`rep_fk_contact`),
  KEY `fk_reply_broker1_idx` (`rep_fk_broker`),
  CONSTRAINT `fk_reply_broker1` FOREIGN KEY (`rep_fk_broker`) REFERENCES `broker` (`bro_id`),
  CONSTRAINT `fk_reply_contact1` FOREIGN KEY (`rep_fk_contact`) REFERENCES `question` (`que_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `rol_id` int NOT NULL AUTO_INCREMENT,
  `rol_name` char(12) NOT NULL,
  PRIMARY KEY (`rol_id`),
  UNIQUE KEY `rol_name_UNIQUE` (`rol_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (2,'admin'),(3,'broker'),(1,'cliente');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `use_id` int NOT NULL AUTO_INCREMENT,
  `use_name` varchar(75) NOT NULL,
  `use_email` varchar(75) NOT NULL,
  `use_password` varchar(255) NOT NULL,
  `use_date` date NOT NULL,
  `use_phone` char(10) DEFAULT NULL,
  `use_fk_role` int NOT NULL,
  PRIMARY KEY (`use_id`),
  UNIQUE KEY `use_email_UNIQUE` (`use_email`),
  KEY `fk_user_role_idx` (`use_fk_role`),
  CONSTRAINT `fk_user_role` FOREIGN KEY (`use_fk_role`) REFERENCES `role` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Alex','alex@gmail.com','password','2023-05-20','9933458949',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-21 10:43:07
