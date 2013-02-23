CREATE DATABASE  IF NOT EXISTS `steelcity` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `steelcity`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: steelcity
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` longtext,
  `companytype_id` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phonenum` varchar(45) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL,
  `long` varchar(45) DEFAULT NULL,
  `hoursop` varchar(45) DEFAULT NULL,
  `daysop` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (3,'Knoxville Center','414 Bausman St. (off Mathews Ave)\r\n','2','2013-02-23 21:42:47','2013-02-23 21:42:47','414 Bausman St. Pittsburgh PA','412-665-8341','40.413235','-79.993014','24','7'),(4,'East End Center','\"(West Homewood/East Liberty)\r\nNorth Dallas Ave. at Hamilton Ave.\"\r\n','2','2013-02-23 21:44:12','2013-02-23 21:44:12','North Dallas Ave. at Hamilton Ave',' (412-665-3609)','40.456264','-79.904742','8a-2p','Mon-Fri'),(5,'Hazelwood Center ','\"Melanchton Ave.\r\noff 5200 block of Second Ave.\"\r\n','2','2013-02-23 21:46:20','2013-02-23 21:46:20','\"Melanchton Ave. off 5200 block of Second Ave','(412-422-6524)','40.42499','-79.95305','8a-2p','Mon-Fri'),(6,'West End Center ','\"Next to Herschel Field \r\n(from Steuben St., turn on Herschel St., turn right on Hassler St. and pass salt igloo)\"\r\n','2','2013-02-23 21:47:50','2013-02-23 21:51:34','Herschel Field ','(412-937-3054)','40.439016','-80.045605','8a-2p','Mon-Fri'),(7,'Strip District ','31st & Railroad Streets (under the 31st Street bridge next to refuse collection offices)\r\n','2','2013-02-23 21:48:55','2013-02-23 21:51:49','31st & Railroad Streets','(412-255-2631)','40.461111','-79.972959','24','7'),(8,'Construction Junction','','3','2013-02-23 21:50:51','2013-02-23 21:53:18','214 N. Lexington Ave. ','(412-243-5025) ','40.449963','-79.898341','8a-8p','7'),(9,'Appliance Warehouse','','3','2013-02-23 21:53:06','2013-02-23 21:53:06','523 Bingham Street Pittsburgh, PA 15203','(412) 247-4460','40.429416','-79.993489','8a-8p','7'),(10,'National Kidney Foundation','National Kidney Foundation accepts donations of running and non-running automobiles. ','1','2013-02-23 21:55:29','2013-02-23 21:56:30','607 Penn Ave Pittsburgh, PA 15222','(800) 488-2277','40.442787','-80.001962','9a-5p','Mon-Fri'),(11,'A & B Salvage','','1','2013-02-23 21:59:00','2013-02-23 21:59:00','Rural Road 1 Harmony, PA 16037','(724) 452-5865','40.801454','-80.127283','9a-5p','7'),(12,'Tomson\'s Scrap Metals','','1','2013-02-23 22:00:03','2013-02-23 22:00:03','2100 ï»¿Karnes Road  Natrona Heights, PA 1506','(724) 224-3933','40.623038','-79.729845','9a-5p','7'),(13,'Best Buy','','3','2013-02-23 22:01:12','2013-02-23 22:01:12','680 ï»¿Waterfront Dr E Homestead, PA 15120','(412) 476-8061','40.412397','-79.90425','8a-8p','7');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companytypes`
--

DROP TABLE IF EXISTS `companytypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companytypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` longtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companytypes`
--

LOCK TABLES `companytypes` WRITE;
/*!40000 ALTER TABLE `companytypes` DISABLE KEYS */;
INSERT INTO `companytypes` VALUES (1,'Charity','Charity ie goodwill','2013-02-23 14:58:07','2013-02-23 14:58:07'),(2,'Public Works','Ie City Council','2013-02-23 14:58:44','2013-02-23 14:58:44'),(3,'Business','Ie BestBuy','2013-02-23 14:59:10','2013-02-23 14:59:10'),(4,'Full Service Scrap Yard','A full service scrap yard, requires hauling and unloading or heavy materials','2013-02-23 21:57:13','2013-02-23 21:57:27');
/*!40000 ALTER TABLE `companytypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guidelines`
--

DROP TABLE IF EXISTS `guidelines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guidelines` (
  `id` int(11) NOT NULL,
  `product_company_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` longtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guidelines`
--

LOCK TABLES `guidelines` WRITE;
/*!40000 ALTER TABLE `guidelines` DISABLE KEYS */;
/*!40000 ALTER TABLE `guidelines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` longtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (7,'WHITE OFFICE (OR COPY) PAPER','Loose ONLY\r\n','2013-02-23 21:18:02','2013-02-23 21:19:10'),(3,'ALL BOTTLESÂ ',' (Aluminum, Glass, Plastic) & Cans & Plastic Containers 1,2,3,4 & 5\r\n','2013-02-23 21:16:56','2013-02-23 21:19:15'),(4,'NEWSPAPER','Tied or loose or in paper bag\r\n','2013-02-23 21:17:20','2013-02-23 21:19:23'),(5,'CORRUGATED CARDBOARD','Must be dry & flat\r\n','2013-02-23 21:17:30','2013-02-23 21:19:30'),(6,'MAGAZINES, CATALOGS & PAPERBOARD','Flatten ALL paperboard\r\n','2013-02-23 21:17:42','2013-02-23 21:19:37'),(8,'MIXED/COLORED PAPER & JUNK MAIL','Loose or in paper bag\r\n','2013-02-23 21:18:11','2013-02-23 21:19:44'),(9,'TELEPHONE BOOKSÂ ','Loose ONLY\r\n','2013-02-23 21:18:21','2013-02-23 21:19:52'),(10,'YARD DEBRIS','grass clippings, hedges, tree clippings,shrubs, leaves) (Loose or in paper bag â€“ No plastic bags\r\n','2013-02-23 21:18:33','2013-02-23 21:20:02'),(11,'SCRAP METAL','Loose ONLY\r\n','2013-02-23 21:18:44','2013-02-23 21:18:53'),(12,'SCRAP TIRES','Tires ONLYâ€” No rims\r\n','2013-02-23 21:20:18','2013-02-23 21:20:18'),(13,'Freon - Refrigerator ','Call Ahead\r\n','2013-02-23 21:20:41','2013-02-23 21:20:41'),(14,'Freon - Air Conditioner','Call Ahead','2013-02-23 21:22:30','2013-02-23 21:22:30'),(15,'Freon - Other','Call Ahead','2013-02-23 21:22:45','2013-02-23 21:22:45'),(16,'Cell Phones - Working','','2013-02-23 21:23:27','2013-02-23 21:23:27'),(17,'Cell Phones - Non-Working','','2013-02-23 21:23:38','2013-02-23 21:23:38'),(18,'Desktop Computers ','','2013-02-23 21:23:45','2013-02-23 21:23:45'),(19,'Game Consoles ','','2013-02-23 21:23:52','2013-02-23 21:23:52'),(20,'LCD Computer Monitors ','','2013-02-23 21:23:57','2013-02-23 21:23:57'),(21,'LCD Televisions ','','2013-02-23 21:24:02','2013-02-23 21:24:02'),(22,'CRT Televisions','','2013-02-23 21:24:08','2013-02-23 21:24:08'),(23,'MP3 Players ','Call Ahead','2013-02-23 21:24:19','2013-02-23 21:24:19'),(24,'Office Machines','Call Ahead','2013-02-23 21:24:33','2013-02-23 21:24:33'),(25,'Computer ï»¿Peripherals - External','Call Ahead\r\n','2013-02-23 21:24:43','2013-02-23 21:24:43'),(26,'CFL Bulbs','Call Ahead\r\n','2013-02-23 21:24:51','2013-02-23 21:24:51'),(27,'Printer Cartridges','Call Ahead','2013-02-23 21:25:00','2013-02-23 21:25:00'),(28,'Paint & Paint Chemicals','Call Ahead','2013-02-23 21:25:17','2013-02-23 21:25:17'),(29,'Batteries','Call ahead','2013-02-23 21:25:29','2013-02-23 21:25:29'),(30,'Automobile','Call Ahead','2013-02-23 21:25:43','2013-02-23 21:25:43'),(31,'Propane Tanks','Call Ahead','2013-02-23 21:25:51','2013-02-23 21:25:51');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_companies`
--

DROP TABLE IF EXISTS `products_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_companies`
--

LOCK TABLES `products_companies` WRITE;
/*!40000 ALTER TABLE `products_companies` DISABLE KEYS */;
INSERT INTO `products_companies` VALUES (17,9,3),(16,8,3),(15,6,3),(14,5,3),(13,4,3),(12,3,3),(11,7,3),(18,10,3),(19,11,3),(20,12,3),(21,7,4),(22,3,4),(23,4,4),(24,5,4),(25,6,4),(26,8,4),(27,9,4),(28,10,4),(29,11,4),(30,12,4),(31,7,5),(32,3,5),(33,4,5),(34,5,5),(35,6,5),(36,8,5),(37,9,5),(38,10,5),(39,11,5),(40,12,5),(80,12,6),(79,11,6),(78,10,6),(77,9,6),(76,8,6),(75,6,6),(74,5,6),(73,4,6),(72,3,6),(71,7,6),(90,12,7),(89,11,7),(88,10,7),(87,9,7),(86,8,7),(85,6,7),(84,5,7),(83,4,7),(82,3,7),(81,7,7),(103,15,8),(102,14,8),(101,13,8),(100,9,8),(99,8,8),(98,6,8),(97,5,8),(96,4,8),(95,3,8),(94,7,8),(91,13,9),(92,14,9),(93,15,9),(106,30,10),(107,11,11),(108,12,11),(109,16,11),(110,17,11),(111,18,11),(112,19,11),(113,20,11),(114,21,11),(115,22,11),(116,23,11),(117,24,11),(118,25,11),(119,26,11),(120,27,11),(121,28,11),(122,29,11),(123,30,11),(124,31,11),(125,11,12),(126,12,12),(127,20,12),(128,21,12),(129,22,12),(130,23,12),(131,24,12),(132,25,12),(133,26,12),(134,27,12),(135,28,12),(136,29,12),(137,30,12),(138,31,12),(139,16,13),(140,17,13),(141,18,13),(142,19,13),(143,20,13),(144,21,13),(145,22,13),(146,23,13),(147,24,13),(148,25,13),(149,26,13),(150,27,13);
/*!40000 ALTER TABLE `products_companies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-23 17:15:19
