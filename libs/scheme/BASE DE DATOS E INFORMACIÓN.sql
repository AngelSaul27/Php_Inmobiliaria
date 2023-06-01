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
-- Table structure for table `acesor`
--

DROP TABLE IF EXISTS `acesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acesor` (
  `bro_id` int NOT NULL AUTO_INCREMENT,
  `bro_fk_user` int NOT NULL,
  PRIMARY KEY (`bro_id`),
  KEY `fk_broker_user1_idx` (`bro_fk_user`),
  CONSTRAINT `fk_broker_user1` FOREIGN KEY (`bro_fk_user`) REFERENCES `usuario` (`use_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acesor`
--

LOCK TABLES `acesor` WRITE;
/*!40000 ALTER TABLE `acesor` DISABLE KEYS */;
INSERT INTO `acesor` VALUES (1,4),(2,5),(3,9),(4,11),(5,18),(6,22),(7,23),(8,27),(9,32),(10,33),(11,37),(12,41),(13,44),(14,47),(15,50),(16,52),(17,56),(18,57),(19,58),(20,59),(21,61),(22,62),(23,70),(24,72),(25,73),(26,74),(27,76),(28,77),(29,79),(31,86),(32,88),(33,89),(34,96),(35,98),(36,100);
/*!40000 ALTER TABLE `acesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cita` (
  `cit_id` int NOT NULL AUTO_INCREMENT,
  `cit_day` date NOT NULL,
  `cit_time` time NOT NULL,
  `cit_fk_properties` int NOT NULL,
  `cit_fk_user` int NOT NULL,
  PRIMARY KEY (`cit_id`),
  KEY `fk_cite_properties1_idx` (`cit_fk_properties`),
  KEY `fk_cite_user1_idx` (`cit_fk_user`),
  CONSTRAINT `fk_cite_properties1` FOREIGN KEY (`cit_fk_properties`) REFERENCES `propiedad` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cite_user1` FOREIGN KEY (`cit_fk_user`) REFERENCES `usuario` (`use_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (3,'2023-05-31','10:22:00',2,1);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorito`
--

DROP TABLE IF EXISTS `favorito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorito` (
  `fav_id` int NOT NULL AUTO_INCREMENT,
  `fav_date` date NOT NULL,
  `fav_fk_user` int NOT NULL,
  `fav_fk_properties` int NOT NULL,
  PRIMARY KEY (`fav_id`),
  KEY `fk_favorite_user1_idx` (`fav_fk_user`),
  KEY `fk_favorite_properties1_idx` (`fav_fk_properties`),
  CONSTRAINT `fk_favorite_properties1` FOREIGN KEY (`fav_fk_properties`) REFERENCES `propiedad` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_favorite_user1` FOREIGN KEY (`fav_fk_user`) REFERENCES `usuario` (`use_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorito`
--

LOCK TABLES `favorito` WRITE;
/*!40000 ALTER TABLE `favorito` DISABLE KEYS */;
INSERT INTO `favorito` VALUES (5,'2023-05-24',1,1),(7,'2023-05-25',1,2),(8,'2023-05-25',6,1),(9,'2023-05-26',1,44),(10,'2023-05-26',1,42);
/*!40000 ALTER TABLE `favorito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pregunta` (
  `que_id` int NOT NULL AUTO_INCREMENT,
  `que_message` varchar(45) NOT NULL,
  `que_date` date NOT NULL,
  `que_fk_user` int NOT NULL,
  `que_name` varchar(75) NOT NULL,
  `que_email` varchar(75) NOT NULL,
  PRIMARY KEY (`que_id`),
  KEY `fk_contact_user1_idx` (`que_fk_user`),
  CONSTRAINT `fk_contact_user1` FOREIGN KEY (`que_fk_user`) REFERENCES `usuario` (`use_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta`
--

LOCK TABLES `pregunta` WRITE;
/*!40000 ALTER TABLE `pregunta` DISABLE KEYS */;
INSERT INTO `pregunta` VALUES (1,'asd','2023-05-25',1,'Kendra Buckmaster','cliente@gmail.com'),(2,'ASDASD','2023-05-25',1,'Kendra Buckmaster','cliente@gmail.com'),(3,'asddddddddddddd','2023-05-25',1,'Kendra Buckmaster','cliente@gmail.com'),(6,'asd','2023-05-25',6,'Rosalind Fernando','admin@gmail.com'),(7,'asd','2023-05-26',4,'Shamus Fitchen','broker@gmail.com');
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedad`
--

DROP TABLE IF EXISTS `propiedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedad` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(100) NOT NULL,
  `pro_description` text NOT NULL,
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
  CONSTRAINT `fk_properties_broker1` FOREIGN KEY (`pro_broker`) REFERENCES `acesor` (`bro_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedad`
--

LOCK TABLES `propiedad` WRITE;
/*!40000 ALTER TABLE `propiedad` DISABLE KEYS */;
INSERT INTO `propiedad` VALUES (1,'Casa en Renta en fraccionamiento mexico','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',51776,2,2,'37220 Gale Point','Mexico','Benito Juarez','https://i.ibb.co/HgDZvcZ/7.webp','2023-04-25',18),(2,'Casa en Renta en mexico','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',850236,1,3,'92 Fieldstone Circle','Mexico','Buenavista','https://i.ibb.co/8rq2869/5.webp','2023-05-19',22),(3,'Casa en Renta en fraccionamiento mexico','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',965616,1,2,'00 Victoria Street','Mexico','Vicente Guerrero','https://i.ibb.co/MZfJPpg/2.jpg','2023-05-06',6),(4,'Casa en Renta en fraccionamiento en indeco','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',2251,4,2,'684 Graceland Avenue','Mexico','Lazaro Cardenas','https://i.ibb.co/3SB69wN/3.jpg','2023-05-11',10),(5,'Casa en Renta en fraccionamiento en villahermosa','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',45679,5,4,'18190 Sachs Alley','Mexico','La Palma','https://i.ibb.co/LZXGcLq/4.webp','2023-05-01',3),(6,'Casa en Renta en fraccionamiento en tabasco','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',423545,2,3,'864 Coolidge Lane','Mexico','Las Palmas','https://i.ibb.co/kcTY3cq/4.jpg','2023-05-18',21),(7,'Casa en Renta en fraccionamiento en mexico','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Renta',256925,5,4,'27422 Prairieview Road','Mexico','Francisco I Madero','https://i.ibb.co/cxYfzND/5.jpg','2023-05-09',36),(8,'Automotive','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Venta',678448,5,3,'978 Eagan Trail','Mexico','Benito Juarez','https://picsum.photos/800/800','2022-08-24',29),(9,'Sports','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Venta',708785,4,1,'00 Banding Way','Mexico','Las Palmas','https://picsum.photos/800/800','2022-12-04',25),(10,'Outdoors','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Venta',976586,4,3,'8 Jenifer Center','Mexico','Azteca','https://picsum.photos/800/800','2022-06-23',35),(11,'Outdoors','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Venta',788556,4,2,'22 American Alley','Mexico','San Jose','https://picsum.photos/800/800','2022-12-21',35),(12,'Outdoors','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Venta',562549,3,2,'17 Susan Hill','Mexico','El Refugio','https://picsum.photos/800/800','2023-03-14',20),(13,'Health','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','Venta',957168,1,4,'3 Hoard Crossing','Mexico','Vicente Guerrero','https://picsum.photos/800/800','2023-04-02',27),(14,'Health','Displ transverse fx shaft of r ulna, 7thQ','Venta',963999,2,3,'07196 Magdeline Road','Mexico','Emiliano Zapata','https://picsum.photos/800/800','2022-08-11',31),(15,'Games','Other and unspecified cord compression','Venta',6538,1,4,'13 Memorial Alley','Mexico','El Refugio','https://picsum.photos/800/800','2023-03-14',3),(16,'Jewelry','Unspecified open wound of unspecified ear, initial encounter','Renta',448876,1,4,'3 Northfield Trail','Mexico','Los Pinos','https://picsum.photos/800/800','2022-10-24',3),(17,'Health','Breakdown (mechanical) of other urinary catheter, init','Venta',62394,5,1,'26319 Jenifer Crossing','Mexico','La Soledad','https://picsum.photos/800/800','2022-06-17',26),(18,'Grocery','Displaced transverse fracture of shaft of unsp radius, init','Venta',202472,1,3,'3987 Cascade Lane','Mexico','San Miguel','https://picsum.photos/800/800','2023-03-26',2),(19,'Shoes','Posterior subluxation of unspecified ulnohumeral joint','Renta',274835,4,3,'8 Reinke Alley','Mexico','San Isidro','https://picsum.photos/800/800','2022-09-02',20),(20,'Clothing','Nondisp fx of neck of third metacarpal bone, right hand','Venta',194628,1,2,'50 Acker Alley','Mexico','Lazaro Cardenas','https://picsum.photos/800/800','2022-12-20',6),(21,'Sports','Traumatic rupture of unsp ligament of finger at MCP/IP jt','Venta',213251,1,4,'9 Valley Edge Junction','Mexico','San Pedro','https://picsum.photos/800/800','2022-10-17',15),(22,'Clothing','Nondisp commnt fx shaft of humer, l arm, 7thP','Venta',791003,2,4,'6646 Tennessee Drive','Mexico','Loma Alta','https://picsum.photos/800/800','2022-09-30',3),(23,'Games','Displacement of int fix of bones of foot and toes','Venta',304443,2,2,'13592 Prairieview Terrace','Mexico','Hidalgo','https://picsum.photos/800/800','2022-09-28',20),(24,'Tools','Inj muscle and tendon of back wall of thorax, init encntr','Venta',753487,5,4,'72260 Bunker Hill Place','Mexico','San Francisco','https://picsum.photos/800/800','2023-03-10',36),(25,'Movies','Displ unsp condyle fx low end l femr, 7thC','Venta',675920,4,1,'783 Graedel Avenue','Mexico','La Palma','https://picsum.photos/800/800','2023-05-03',16),(26,'Kids','Nondisp fx of ant wall of l acetab, subs for fx w routn heal','Venta',343003,1,4,'013 Washington Avenue','Mexico','Santa Maria','https://picsum.photos/800/800','2023-05-16',22),(27,'Toys','Unsp superficial injury of unsp eyelid and periocular area','Venta',307682,5,1,'1 Eliot Circle','Mexico','Benito Juarez','https://picsum.photos/800/800','2022-06-21',28),(28,'Industrial','Other abnormalities of plasma proteins','Venta',446899,4,2,'8577 Esch Center','Mexico','Altavista','https://picsum.photos/800/800','2023-03-28',19),(29,'Sports','Person inj wh brd/alit from special agri vehicle, sequela','Venta',680845,2,1,'35315 Riverside Hill','Mexico','Emiliano Zapata','https://picsum.photos/800/800','2023-03-17',10),(30,'Clothing','Blister (nonthermal), left hip, subsequent encounter','Venta',362690,5,1,'8739 Lukken Court','Mexico','Buenavista','https://picsum.photos/800/800','2023-03-07',26),(31,'Music','Displacement of unspecified vascular grafts, init encntr','Venta',179247,2,4,'5 Cambridge Center','Mexico','Las Flores','https://picsum.photos/800/800','2022-08-31',6),(32,'Industrial','Parosmia','Venta',383590,1,2,'8945 Carey Circle','Mexico','Vista Hermosa','https://picsum.photos/800/800','2022-10-13',24),(33,'Games','Mech compl of other urinary stent, sequela','Renta',781864,5,2,'78955 Elgar Drive','Mexico','Bellavista','https://picsum.photos/800/800','2023-02-26',1),(34,'Computers','Fourth [trochlear] nerve palsy, right eye','Renta',643475,3,2,'31215 Karstens Place','Mexico','La Esperanza','https://picsum.photos/800/800','2023-01-10',31),(35,'Automotive','Small cell B-cell lymphoma, lymph nodes of multiple sites','Renta',9902,5,2,'79543 Farragut Avenue','Mexico','La Palma','https://picsum.photos/800/800','2022-06-29',21),(37,'Health','Unsp comp of fb acc left in body fol punctr/cath, sequela','Venta',124782,5,2,'69 Little Fleur Junction','Mexico','San Martin','https://picsum.photos/800/800','2023-05-21',20),(38,'Tools','Other specified air transport accidents','Venta',931754,2,4,'38 Lillian Center','Mexico','La Loma','https://picsum.photos/800/800','2022-05-29',12),(39,'Beauty','Path fx in neopltc dis, unsp site, subs for fx w malunion','Venta',465955,4,1,'00476 2nd Pass','Mexico','Benito Juarez','https://picsum.photos/800/800','2022-09-07',8),(40,'Grocery','Maternal care for Anti-A sensitization, second tri, fetus 5','Venta',284149,5,2,'530 Carpenter Point','Mexico','Hidalgo','https://picsum.photos/800/800','2023-05-03',21),(41,'Games','Candidal otitis externa','Venta',926481,1,3,'41052 Harbort Pass','Mexico','Alameda','https://picsum.photos/800/800','2023-05-11',16),(42,'Movies','Other sprain of right hip, sequela','Venta',286950,3,1,'21194 Morningstar Avenue','Mexico','Las Animas','https://picsum.photos/800/800','2023-02-02',8),(43,'Movies','Oth fx shaft of left ulna, init for opn fx type 3A/B/C','Venta',184271,1,3,'276 Banding Place','Mexico','Las Flores','https://picsum.photos/800/800','2022-12-10',4),(44,'Music','Other disorders of fluid, electrolyte and acid-base balance','Venta',585277,4,2,'9799 Dixon Alley','Mexico','Rancho Viejo','https://picsum.photos/800/800','2023-03-14',27),(46,'Toys','Frostbite with tissue necrosis of left arm, sequela','Venta',84220,2,4,'17 Glacier Hill Road','Mexico','Rancho Nuevo','https://picsum.photos/800/800','2022-07-10',36),(47,'Automotive','Encounter for fit/adjst of complete left artificial arm','Venta',81732,1,4,'81 Coleman Circle','Mexico','Los Mangos','https://picsum.photos/800/800','2022-10-01',25),(48,'Music','Terrorism w nuclear weapons, publ sfty offcl injured, init','Venta',252617,5,4,'9 Springview Hill','Mexico','Magisterial','https://picsum.photos/800/800','2022-10-31',36),(49,'Beauty','Benign neoplasm of endocrine gland, unspecified','Venta',384102,5,3,'727 Duke Drive','Mexico','Jose Maria Morelos','https://picsum.photos/800/800','2022-07-15',35),(50,'Electronics','Bipolar disord, crnt epsd depress, severe, w psych features','Venta',802631,5,3,'49 Grasskamp Terrace','Mexico','La Mesa','https://picsum.photos/800/800','2023-03-29',28),(51,'Toys','Disp fx of med condyle of unsp tibia, 7thC','Venta',581268,5,4,'9 Columbus Road','Mexico','Buenos Aires','https://picsum.photos/800/800','2022-12-16',17),(52,'Clothing','Vaccines and biological substances','Venta',882667,5,4,'701 Vahlen Lane','Mexico','La Concepcion','https://picsum.photos/800/800','2023-03-11',6),(53,'Jewelry','Complete traumatic amputation at elbow level, left arm, subs','Venta',386634,4,3,'0275 Gina Court','Mexico','Vista Hermosa','https://picsum.photos/800/800','2022-08-18',10),(55,'Beauty','Nondisp fx of sternal end of left clavicle, init for opn fx','Venta',262590,4,1,'6 Parkside Court','Mexico','Las Palmas','https://picsum.photos/800/800','2022-05-25',26),(56,'Tools','Fx humerus fol insrt ortho implnt/prosth/bone plt, left arm','Venta',480899,2,4,'1 Havey Way','Mexico','Hidalgo','https://picsum.photos/800/800','2022-07-29',20),(57,'Books','Nondisp transverse fx shaft of r tibia, 7thE','Venta',528554,1,2,'95822 Monument Terrace','Mexico','Emiliano Zapata','https://picsum.photos/800/800','2023-02-19',22),(58,'Outdoors','Other specified dorsopathies, lumbosacral region','Venta',681245,2,4,'0763 Springview Court','Mexico','Guadalupe Victoria','https://picsum.photos/800/800','2023-01-31',4),(59,'Movies','Inj unsp musc/fasc/tend at shldr/up arm, right arm, init','Venta',352361,1,4,'47 Marquette Circle','Mexico','El Zapote','https://picsum.photos/800/800','2023-05-04',1),(60,'Toys','Occupant of rail trn/veh injured by fall from rail trn/veh','Venta',74465,3,3,'914 Summer Ridge Way','Mexico','San Francisco','https://picsum.photos/800/800','2023-04-18',27),(61,'Jewelry','Congenital stricture of urethra','Venta',881479,2,2,'7 Arapahoe Terrace','Mexico','San Francisco','https://picsum.photos/800/800','2022-11-29',31),(62,'Grocery','Exposure keratoconjunctivitis, left eye','Venta',948704,4,2,'1189 La Follette Pass','Mexico','El Limon','https://picsum.photos/800/800','2022-12-26',5),(63,'Music','Assault by unspecified means','Venta',543402,5,4,'7176 3rd Terrace','Mexico','San Pedro','https://picsum.photos/800/800','2023-03-13',31),(64,'Games','Toxic eff of fluorine gas and hydrogen fluoride, asslt, sqla','Venta',68609,4,1,'73392 Kedzie Street','Mexico','Buenos Aires','https://picsum.photos/800/800','2022-10-21',7),(65,'Automotive','Laceration of oth blood vessels at lower leg level, unsp leg','Venta',21038,5,3,'6 Bartillon Alley','Mexico','San Isidro','https://picsum.photos/800/800','2022-11-03',14),(66,'Garden','Other injury of spleen, subsequent encounter','Venta',627046,5,1,'509 Northview Drive','Mexico','El Rosario','https://picsum.photos/800/800','2023-01-22',31),(67,'Jewelry','Unspecified ptosis of unspecified eyelid','Venta',92104,3,3,'7679 Ronald Regan Court','Mexico','Las Palmas','https://picsum.photos/800/800','2022-10-02',18),(68,'Clothing','Hypermetropia, bilateral','Venta',663511,1,2,'39371 Huxley Trail','Mexico','Alameda','https://picsum.photos/800/800','2023-03-26',3),(69,'Clothing','Typhoid fever, unspecified','Venta',92306,5,4,'45694 Reinke Lane','Mexico','Ojo de Agua','https://picsum.photos/800/800','2023-02-13',16),(70,'Sports','Disloc of proximal interphaln joint of right thumb, init','Venta',644086,4,4,'3 La Follette Parkway','Mexico','Nueva Esperanza','https://picsum.photos/800/800','2022-11-13',19),(71,'Automotive','Other physeal fracture of right calcaneus, 7thD','Venta',722543,1,4,'267 Waywood Lane','Mexico','San Jose','https://picsum.photos/800/800','2022-11-07',18),(72,'Health','Unsp injury of heart, unsp w or w/o hemopericardium, sequela','Venta',805628,3,4,'0196 Independence Plaza','Mexico','Loma Bonita','https://picsum.photos/800/800','2023-01-24',6),(73,'Kids','Nondisp oblique fx shaft of r femr, 7thD','Venta',402412,2,1,'15 Kingsford Center','Mexico','Santo Tomas','https://picsum.photos/800/800','2023-01-23',34),(74,'Home','Pedl cyc pasngr inj in clsn w nonmtr vehicle nontraf, sqla','Venta',501500,4,3,'02877 Atwood Hill','Mexico','La Soledad','https://picsum.photos/800/800','2023-04-13',11),(75,'Automotive','Burns of 70-79% of body surface w 70-79% third degree burns','Venta',809398,5,3,'50170 5th Place','Mexico','El Paraiso','https://picsum.photos/800/800','2022-10-06',14),(76,'Movies','Prem separtn of placenta w oth coag defect, first trimester','Venta',82110,3,2,'50686 Hoard Hill','Mexico','Jardin','https://picsum.photos/800/800','2022-07-14',17),(77,'Computers','Unsp inj unsp blood vess at wrs/hnd lv of unsp arm, subs','Venta',230832,1,1,'17 Canary Point','Mexico','La Esperanza','https://picsum.photos/800/800','2023-04-07',15),(78,'Toys','Corrosion of third degree of left ankle, subs encntr','Venta',376296,1,4,'20 Pleasure Way','Mexico','Emiliano Zapata','https://picsum.photos/800/800','2023-05-09',13),(79,'Sports','Sltr-haris Type I physl fx low end unsp femr, 7thG','Venta',255419,3,2,'877 Lien Circle','Mexico','Dante Delgado','https://picsum.photos/800/800','2023-04-04',23),(80,'Automotive','Asphyxiation due to smothering under pillow, assault, init','Venta',259802,2,1,'942 Rockefeller Circle','Mexico','El Alamo','https://picsum.photos/800/800','2023-05-09',25),(81,'Outdoors','Path fx in neopltc dis, r humerus, subs for fx w nonunion','Venta',143667,2,3,'8381 Browning Plaza','Mexico','Morelos','https://picsum.photos/800/800','2022-11-05',20),(82,'Clothing','Nondisp fx of prox phalanx of fngr, subs for fx w routn heal','Venta',328129,2,3,'0914 Sachtjen Trail','Mexico','Fovissste','https://picsum.photos/800/800','2022-11-17',31),(83,'Toys','Nondisp fx of med phalanx of r lit fngr, 7thK','Venta',521849,1,2,'05884 Jana Place','Mexico','Revolucion','https://picsum.photos/800/800','2022-08-26',17),(84,'Health','Oth comp of spinal and epidur anesth during preg, third tri','Venta',281189,3,1,'83 American Street','Mexico','Ojo de Agua','https://picsum.photos/800/800','2023-04-20',11),(85,'Shoes','Leakage of vascular dialysis catheter, subsequent encounter','Venta',722473,2,4,'8738 Donald Court','Mexico','El Porvenir','https://picsum.photos/800/800','2022-07-01',23),(86,'Home','Embolism and thrombosis of other specified veins','Venta',856502,5,2,'6436 Shelley Point','Mexico','Revolucion Verde','https://picsum.photos/800/800','2023-01-21',3),(87,'Tools','Disp fx of lateral epicondyl of unsp humer, 7thD','Venta',766895,3,3,'4099 Luster Avenue','Mexico','Las Palmas','https://picsum.photos/800/800','2022-09-05',27),(88,'Health','Carcinoma in situ of rectosigmoid junction','Venta',657400,5,4,'86 Bonner Center','Mexico','Independencia','https://picsum.photos/800/800','2023-02-15',27),(89,'Industrial','Other superficial bite of unspecified front wall of thorax','Venta',778400,1,1,'80468 Bowman Place','Mexico','Benito Juarez','https://picsum.photos/800/800','2023-05-21',34),(90,'Grocery','Path fracture in neoplastic disease, left fibula, sequela','Venta',178259,5,3,'081 Bunting Junction','Mexico','Solidaridad','https://picsum.photos/800/800','2023-02-24',14),(91,'Health','Displacement of implanted testicular prosthesis, sequela','Venta',439577,4,3,'7 Golf View Road','Mexico','Independencia','https://picsum.photos/800/800','2022-08-06',10),(92,'Music','Nondisp fx of med phalanx of r lit fngr, 7thD','Venta',303816,5,2,'2554 Straubel Drive','Mexico','Vista Hermosa','https://picsum.photos/800/800','2022-12-31',33),(93,'Music','Maternal care for face, brow and chin presentation, fetus 1','Venta',354278,4,1,'71016 Dottie Street','Mexico','Francisco I Madero','https://picsum.photos/800/800','2022-08-07',28),(94,'Clothing','Injury of optic tract and pathways, left eye','Venta',503025,4,3,'0 Lerdahl Drive','Mexico','San Antonio','https://picsum.photos/800/800','2023-01-26',31),(95,'Jewelry','Nondisp fx of dist phalanx of r rng fngr, 7thP','Venta',155328,1,3,'6308 Corry Terrace','Mexico','Vicente Guerrero','https://picsum.photos/800/800','2023-04-10',31),(97,'Clothing','Fx unsp part of unsp clavicle, subs for fx w delay heal','Venta',32919,3,4,'401 Calypso Hill','Mexico','La Joya','https://picsum.photos/800/800','2022-07-15',16),(98,'Toys','Oth fx first MC bone, right hand, subs for fx w delay heal','Venta',117405,1,4,'9 Graedel Place','Mexico','San Francisco','https://picsum.photos/800/800','2023-01-06',13),(99,'Computers','Unsp inj flxr musc/fasc/tend l idx fngr at wrs/hnd lv, subs','Venta',32869,4,4,'1823 Tomscot Road','Mexico','Los Angeles','https://picsum.photos/800/800','2023-03-01',20),(100,'Toys','Oth inflammatory spondylopathies, thoracolumbar region','Venta',752348,4,3,'35 Warbler Place','Mexico','Emiliano Zapata','https://picsum.photos/800/800','2022-09-13',3);
/*!40000 ALTER TABLE `propiedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuesta`
--

DROP TABLE IF EXISTS `respuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `respuesta` (
  `rep_id` int NOT NULL AUTO_INCREMENT,
  `rep_answer` varchar(45) NOT NULL,
  `rep_date` date NOT NULL,
  `rep_fk_contact` int NOT NULL,
  `rep_fk_broker` int NOT NULL,
  PRIMARY KEY (`rep_id`),
  KEY `fk_reply_contact1_idx` (`rep_fk_contact`),
  KEY `fk_reply_broker1_idx` (`rep_fk_broker`),
  CONSTRAINT `fk_reply_broker1` FOREIGN KEY (`rep_fk_broker`) REFERENCES `acesor` (`bro_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_reply_contact1` FOREIGN KEY (`rep_fk_contact`) REFERENCES `pregunta` (`que_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuesta`
--

LOCK TABLES `respuesta` WRITE;
/*!40000 ALTER TABLE `respuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuesta` ENABLE KEYS */;
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
INSERT INTO `role` VALUES (3,'acesor'),(2,'admin'),(1,'cliente');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
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
  CONSTRAINT `fk_user_role` FOREIGN KEY (`use_fk_role`) REFERENCES `role` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Kendra Buckmaster','cliente@gmail.com','cliente','2022-09-01','6517468382',1),(2,'Jobyna Southern','jsouthern1@google.com.hk','009p5j34el','2023-02-10','5044102188',1),(3,'Constanta Winston','cwinston2@bbc.co.uk','706q6e79iz','2022-08-17','5089256419',1),(4,'Shamus Fitchen','broker@gmail.com','broker','2023-02-13','5106445625',3),(5,'Hazel Shillitoe','hshillitoe4@pbs.org','883j4u78ip','2022-08-14','5135273735',3),(6,'Rosalind Fernando','admin@gmail.com','admin','2023-02-14','1843243164',2),(7,'Rhody De Benedictis','rde6@twitter.com','757w4h92wd','2022-08-03','6929399460',2),(8,'Thor Mantripp','tmantripp7@wikia.com','782e1i35xb','2022-10-02','7924272309',2),(9,'Matthieu Butland','mbutland8@infoseek.co.jp','695v6g38oc','2022-11-06','9675494880',3),(10,'Hallsy MacShirie','hmacshirie9@dailymotion.com','660w2s95cv','2022-12-03','7561821741',1),(11,'Colman Bullent','cbullenta@rambler.ru','243p6w12vq','2022-10-11','8201665185',3),(12,'Tani Splain','tsplainb@arizona.edu','564t6l83gx','2023-04-13','8854600499',1),(13,'Reider Hilley','rhilleyc@eventbrite.com','392s9g59wb','2022-10-01','1258525537',2),(14,'Raynard Daft','rdaftd@cnet.com','792x3c18zn','2023-05-10','4379681242',1),(15,'Maurie Salmoni','msalmonie@japanpost.jp','152d4l51lt','2022-08-14','8135624549',2),(16,'Micah Garza','mgarzaf@indiatimes.com','336l1w14hi','2023-03-26','4181105039',2),(17,'De witt Robelin','dwittg@hibu.com','468r8y39un','2023-05-13','5636326671',1),(18,'Martita Kernan','mkernanh@engadget.com','969w0k49bm','2022-12-10','5621605042',3),(19,'Katya Ciccarelli','kciccarellii@unesco.org','942v6a86aj','2022-07-24','1983731918',1),(20,'Fairleigh Delamar','fdelamarj@about.com','371k0c38ne','2022-10-29','1426199665',1),(21,'Marline Dy','mdyk@gov.uk','662u1f14jz','2022-12-14','6422541984',2),(22,'Tim Purslow','tpurslowl@gov.uk','637r7d22yp','2022-10-20','1638107514',3),(23,'Iggie Jeffs','ijeffsm@slideshare.net','210n9u49st','2022-10-24','5808159408',3),(24,'Bartholomeus Polly','bpollyn@cbslocal.com','388i9m13yc','2023-05-03','9045853076',1),(25,'Leonerd Thackston','lthackstono@seesaa.net','769f9f43em','2022-07-30','1358992668',2),(26,'Ingaborg Pennetta','ipennettap@usda.gov','553q9s15lx','2022-05-26','4804479312',2),(27,'Georges Quartley','gquartleyq@chronoengine.com','800c1v95ca','2023-01-25','8643542057',3),(28,'Garner Tender','gtenderr@psu.edu','800d4w42tc','2022-07-15','4265594195',2),(29,'Analiese Richard','arichards@imageshack.us','511t1v82ze','2022-11-24','5628058953',1),(30,'Adrian Bottomore','abottomoret@techcrunch.com','754a9k12gh','2022-08-20','1209435586',2),(31,'Wells Keenlayside','wkeenlaysideu@pagesperso-orange.fr','914m8s76hc','2022-09-22','4776670411',2),(32,'Guilbert Gergus','ggergusv@spiegel.de','787g2x78mw','2022-07-08','9189072411',3),(33,'Prue Smoughton','psmoughtonw@github.com','888g0m02ww','2023-02-07','8974428645',3),(34,'Bertie Matantsev','bmatantsevx@virginia.edu','170j4b32pe','2022-10-05','9827730641',1),(35,'Dolly Heam','dheamy@marketwatch.com','770f4r62xd','2022-07-24','5198959786',2),(36,'Chelsae Abbot','cabbotz@auda.org.au','159d3w59ln','2022-09-08','9514991449',1),(37,'Albert Dunstan','adunstan10@unicef.org','444m6r83ch','2023-01-30','2556481743',3),(38,'Arlina Spragge','aspragge11@state.tx.us','294r5q41gg','2023-02-16','2406937539',1),(39,'Gram Gierhard','ggierhard12@illinois.edu','760s4y12fg','2023-02-17','2206964542',2),(40,'Orran Surgeoner','osurgeoner13@state.gov','701q3e05pf','2022-09-29','7419411988',1),(41,'Gearalt Cantua','gcantua14@seesaa.net','496f7n00th','2023-02-11','2157548131',3),(42,'Foster Dowglass','fdowglass15@feedburner.com','346c1p22wt','2023-04-03','2625187902',1),(43,'Rudie Rattray','rrattray16@w3.org','554b6s62ev','2023-01-18','2882136040',2),(44,'Ana Matschke','amatschke17@webeden.co.uk','008w3o13dl','2023-02-13','3035389621',3),(45,'Frances Das','fdas18@columbia.edu','687e6o64cp','2022-11-26','5001254513',2),(46,'Sandra Rickasse','srickasse19@stanford.edu','606e5i70ms','2023-04-03','3251995480',2),(47,'Doralynne Gumbley','dgumbley1a@ebay.com','550o4f63gp','2022-10-28','1168102514',3),(48,'Marty Scottesmoor','mscottesmoor1b@behance.net','478n7m95dq','2022-08-14','1847826675',1),(49,'Harley Gaffer','hgaffer1c@gizmodo.com','093m2g20mq','2022-11-11','6948158991',1),(50,'Kirsten Tuting','ktuting1d@lycos.com','585k5l50ag','2023-02-27','9473329460',3),(51,'Chastity Kubista','ckubista1e@discuz.net','232i0g33fd','2022-08-25','1815822998',2),(52,'Cacilie Kach','ckach1f@nytimes.com','487i8z58mv','2022-09-27','6469968109',3),(53,'Louis Lawley','llawley1g@addtoany.com','785u9u51ru','2023-03-24','5876738625',2),(54,'Bryn Crich','bcrich1h@t-online.de','362h2d13dp','2022-08-19','4843730010',2),(55,'Corbet Wintersgill','cwintersgill1i@tripod.com','572f9j31ic','2023-02-10','4745194270',1),(56,'Gerrie Zarfai','gzarfai1j@cisco.com','666w7b50rx','2023-02-24','7156145269',3),(57,'Shellie Smoughton','ssmoughton1k@businesswire.com','593w0z72so','2023-05-15','6101327450',3),(58,'Moishe Rasmus','mrasmus1l@engadget.com','680a5m21yv','2023-05-21','3321028120',3),(59,'Mignon Jozefczak','mjozefczak1m@themeforest.net','551y3t93id','2022-05-27','4421016283',3),(60,'Delphinia Fothergill','dfothergill1n@people.com.cn','819j9o63mg','2022-06-15','5237311636',2),(61,'Cosme Measor','cmeasor1o@bloglines.com','312g8n35ck','2023-04-28','8475190152',3),(62,'Yolanthe Riste','yriste1p@ocn.ne.jp','979o6k49bj','2022-08-04','1634201174',3),(63,'Harwilll Hands','hhands1q@google.de','930t9z23sc','2022-11-17','6045662143',1),(64,'Ami Trimming','atrimming1r@nifty.com','980f4d68ls','2022-09-28','1603094399',1),(65,'Jecho Tumelty','jtumelty1s@google.fr','620v9e01fu','2022-09-06','8209710242',1),(66,'Rosene Coffey','rcoffey1t@mlb.com','669g9u88ig','2022-09-25','7538784691',2),(67,'Colette Ilott','cilott1u@umich.edu','041r4j50ih','2022-12-19','5151492620',2),(68,'Eolande Hewins','ehewins1v@chronoengine.com','354n3y44it','2022-10-26','4445893149',2),(69,'Seward Camolli','scamolli1w@purevolume.com','524t7m97eh','2022-09-14','3126933263',1),(70,'Kellina Igglesden','kigglesden1x@jigsy.com','247r7m22gd','2023-05-05','1685506292',3),(71,'Mildrid Henker','mhenker1y@ning.com','447b3u84ea','2023-02-14','4477495598',2),(72,'Hildagarde Hilldrup','hhilldrup1z@live.com','461g5g06sk','2023-05-05','9067228671',3),(73,'Urson Giorgeschi','ugiorgeschi20@is.gd','312h8v74uv','2022-10-11','5619071460',3),(74,'Gayle Letteresse','gletteresse21@reverbnation.com','854q6w71kp','2023-04-15','9767468976',3),(75,'Morgan Torald','mtorald22@wiley.com','925b5o29uu','2022-05-31','4155425115',1),(76,'Daffy Harding','dharding23@technorati.com','761e4g70fv','2022-10-21','2072563086',3),(77,'Sebastian Chong','schong24@mapy.cz','725d5k77fd','2022-11-17','7473161101',3),(78,'Tess Clinton','tclinton25@skyrock.com','892g4q23jw','2023-03-05','6727381954',1),(79,'Astrix Hecks','ahecks26@cbc.ca','977k5h03op','2023-02-16','5263605730',3),(81,'Lita Silmon','lsilmon28@deviantart.com','563r8r13bw','2023-05-22','2758557353',2),(82,'Andriette Atlay','aatlay29@histats.com','141p3l93lz','2023-04-19','2143351189',1),(84,'Cole Crush','ccrush2b@paginegialle.it','363t9h35zn','2022-12-20','4938572225',1),(85,'Carmencita Tourmell','ctourmell2c@yellowbook.com','917d8c90nj','2023-04-15','2832815040',2),(86,'Jemie Quimby','jquimby2d@china.com.cn','946i1j28dd','2022-08-31','9032065376',3),(87,'Laraine Lawfull','llawfull2e@harvard.edu','095q5i99cn','2022-09-13','1443337796',1),(88,'Elise Rhule','erhule2f@live.com','993e9p80kb','2023-04-10','4076304111',3),(89,'Darb Rolfi','drolfi2g@nationalgeographic.com','914o7f90ve','2023-05-09','6928506601',3),(90,'Tobin Chew','tchew2h@narod.ru','514l6t23vc','2022-08-22','4982175783',1),(91,'Townie Diter','tditer2i@parallels.com','912q5e85zx','2022-09-04','8277713735',2),(92,'Inglebert McClory','imcclory2j@ihg.com','824w7r59sv','2022-11-19','4156454011',1),(93,'Brittni Cavell','bcavell2k@merriam-webster.com','992u8f83fy','2022-06-21','9361177046',1),(94,'Brooks Girod','bgirod2l@census.gov','251d5t03dw','2023-02-23','9126243302',2),(95,'Vin Bater','vbater2m@stanford.edu','407x1x25sq','2022-10-16','2122048946',2),(96,'Halie Gealle','hgealle2n@irs.gov','712q6t70tr','2023-01-11','1166025208',3),(97,'Candide Tarburn','ctarburn2o@vk.com','716l2j83rs','2022-06-13','7376196508',1),(98,'Renell McGeachey','rmcgeachey2p@networksolutions.com','908q4j60au','2022-09-20','3661183568',3),(99,'Magnum Pineaux','mpineaux2q@redcross.org','155q4a86sc','2022-05-31','7915124474',2),(100,'Lolita Soaper','lsoaper2r@miibeian.gov.cn','401y6t58fq','2023-01-12','6071587861',3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-27  0:55:24
