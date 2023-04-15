-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: projetomvc
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `tblsafaccess`
--

DROP TABLE IF EXISTS `tblsafaccess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblsafaccess` (
  `cosafsession` bigint NOT NULL,
  `dcip` varchar(45) DEFAULT NULL,
  `dcagent` varchar(250) DEFAULT NULL,
  `dcport` varchar(10) DEFAULT NULL,
  `couseuser` int DEFAULT NULL,
  `dtaccess` datetime DEFAULT NULL,
  `dcaccess` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsafaccess`
--

LOCK TABLES `tblsafaccess` WRITE;
/*!40000 ALTER TABLE `tblsafaccess` DISABLE KEYS */;
INSERT INTO `tblsafaccess` VALUES (2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36546',0,'2023-04-09 10:01:13','*authenticate session - variable created.'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36546',0,'2023-04-09 10:01:13','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36546',0,'2023-04-09 10:01:13','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36554',0,'2023-04-09 10:01:14','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36554',0,'2023-04-09 10:01:15','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36554',0,'2023-04-09 10:01:15','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41020',0,'2023-04-09 10:04:44','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41020',0,'2023-04-09 10:04:45','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41020',0,'2023-04-09 10:04:45','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54190',0,'2023-04-09 10:04:58','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54190',0,'2023-04-09 10:04:58','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54190',0,'2023-04-09 10:04:58','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54200',0,'2023-04-09 10:04:58','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54200',0,'2023-04-09 10:04:58','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54200',0,'2023-04-09 10:04:58','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34840',0,'2023-04-09 10:05:11','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34840',0,'2023-04-09 10:05:11','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34840',0,'2023-04-09 10:05:12','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34854',0,'2023-04-09 10:05:12','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34854',0,'2023-04-09 10:05:12','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34854',0,'2023-04-09 10:05:12','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40046',0,'2023-04-09 10:05:55','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40046',0,'2023-04-09 10:05:55','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40046',0,'2023-04-09 10:05:55','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40062',0,'2023-04-09 10:05:55','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40062',0,'2023-04-09 10:05:55','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40062',0,'2023-04-09 10:05:55','Access Page: index.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43480',0,'2023-04-09 10:06:04','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43480',1,'2023-04-09 10:06:05','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43480',1,'2023-04-09 10:06:05','Access Page: main.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43468',1,'2023-04-09 10:06:08','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43468',1,'2023-04-09 10:06:08','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43468',1,'2023-04-09 10:06:08','Access Page: user.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36442',1,'2023-04-09 10:07:53','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36442',1,'2023-04-09 10:07:53','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36442',1,'2023-04-09 10:07:53','Access Page: main.View.php'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36448',1,'2023-04-09 10:07:53','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36448',1,'2023-04-09 10:07:54','*authenticate session - ip and ag equals...'),(2304091001125415,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36448',1,'2023-04-09 10:07:54','Access Page: main.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',0,'2023-04-09 11:17:10','*authenticate session - variable created.'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',0,'2023-04-09 11:17:10','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',0,'2023-04-09 11:17:10','Access Page: index.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',0,'2023-04-09 11:17:13','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',1,'2023-04-09 11:17:14','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',1,'2023-04-09 11:17:14','Access Page: main.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',1,'2023-04-09 11:18:02','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',0,'2023-04-09 11:18:02','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',0,'2023-04-09 11:18:02','Access Page: index.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',0,'2023-04-09 11:18:05','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',1,'2023-04-09 11:18:05','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',1,'2023-04-09 11:18:05','Access Page: main.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42392',1,'2023-04-09 11:18:06','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',1,'2023-04-09 11:19:00','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',0,'2023-04-09 11:19:00','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',0,'2023-04-09 11:19:00','Access Page: index.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',0,'2023-04-09 11:19:02','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',1,'2023-04-09 11:19:02','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',1,'2023-04-09 11:19:02','Access Page: main.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40976',1,'2023-04-09 11:19:03','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','33178',1,'2023-04-09 11:20:29','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','48558',1,'2023-04-09 11:20:41','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41164',1,'2023-04-09 11:21:12','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','53436',1,'2023-04-09 11:21:22','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','58610',1,'2023-04-09 11:21:32','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','59220',1,'2023-04-09 11:21:45','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','60710',1,'2023-04-09 11:21:56','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','33800',1,'2023-04-09 11:22:13','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','44756',1,'2023-04-09 11:22:42','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36728',1,'2023-04-09 11:23:39','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','48276',1,'2023-04-09 11:24:19','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','53134',1,'2023-04-09 11:25:01','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42516',1,'2023-04-09 11:25:23','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','50726',1,'2023-04-09 11:25:50','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42614',1,'2023-04-09 11:27:13','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','60818',1,'2023-04-09 11:27:52','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49024',1,'2023-04-09 11:28:04','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49024',1,'2023-04-09 11:28:04','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49024',1,'2023-04-09 11:28:04','Access Page: main.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49028',1,'2023-04-09 11:28:05','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49028',1,'2023-04-09 11:28:05','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49028',1,'2023-04-09 11:28:05','Access Page: user.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','49028',1,'2023-04-09 11:28:07','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43592',1,'2023-04-09 11:28:56','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','60290',1,'2023-04-09 11:32:05','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','48912',1,'2023-04-09 11:32:20','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','48920',1,'2023-04-09 11:32:23','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55520',1,'2023-04-09 11:32:33','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55520',1,'2023-04-09 11:32:33','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55520',1,'2023-04-09 11:32:33','Access Page: user.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55520',1,'2023-04-09 11:32:35','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55530',1,'2023-04-09 11:32:37','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55530',1,'2023-04-09 11:32:37','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55530',1,'2023-04-09 11:32:37','Access Page: user.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','55530',1,'2023-04-09 11:32:38','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','34184',1,'2023-04-09 11:34:44','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','47964',1,'2023-04-09 11:34:53','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','47964',1,'2023-04-09 11:34:57','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','47964',1,'2023-04-09 11:34:57','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','47964',1,'2023-04-09 11:34:57','Access Page: main.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','42732',1,'2023-04-09 11:35:15','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','54472',1,'2023-04-09 11:36:23','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','40746',1,'2023-04-09 11:36:59','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41044',1,'2023-04-09 11:37:00','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41044',1,'2023-04-09 11:37:00','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41044',1,'2023-04-09 11:37:01','Access Page: user.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','41044',1,'2023-04-09 11:37:02','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','46592',1,'2023-04-09 11:37:56','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','46592',1,'2023-04-09 11:37:56','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','46592',1,'2023-04-09 11:37:56','Access Page: user.View.php'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','46598',1,'2023-04-09 11:37:57','*authenticate session - ip and ag equals...'),(2304091117103801,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','57974',1,'2023-04-09 11:38:25','*authenticate session - ip and ag equals...');
/*!40000 ALTER TABLE `tblsafaccess` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsafaccounterror`
--

DROP TABLE IF EXISTS `tblsafaccounterror`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblsafaccounterror` (
  `cosafaccounterror` bigint NOT NULL AUTO_INCREMENT,
  `cosafsession` bigint NOT NULL,
  `dcip` varchar(15) NOT NULL,
  `dcdetail` longblob NOT NULL,
  `dterror` datetime NOT NULL,
  PRIMARY KEY (`cosafaccounterror`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsafaccounterror`
--

LOCK TABLES `tblsafaccounterror` WRITE;
/*!40000 ALTER TABLE `tblsafaccounterror` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblsafaccounterror` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsafsession`
--

DROP TABLE IF EXISTS `tblsafsession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblsafsession` (
  `cosafsession` bigint NOT NULL,
  `couseuser` int DEFAULT NULL,
  `dcip` varchar(15) DEFAULT NULL,
  `dcagent` varchar(250) DEFAULT NULL,
  `dcport` varchar(10) DEFAULT NULL,
  `costatus` int DEFAULT NULL,
  PRIMARY KEY (`cosafsession`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsafsession`
--

LOCK TABLES `tblsafsession` WRITE;
/*!40000 ALTER TABLE `tblsafsession` DISABLE KEYS */;
INSERT INTO `tblsafsession` VALUES (2304091001125415,1,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','36546',1),(2304091117103801,1,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','43274',1);
/*!40000 ALTER TABLE `tblsafsession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluseuser`
--

DROP TABLE IF EXISTS `tbluseuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbluseuser` (
  `couseuser` int NOT NULL AUTO_INCREMENT,
  `dcname` varchar(100) NOT NULL,
  `dcmail` varchar(200) NOT NULL,
  `dcpass` varchar(20) NOT NULL,
  `costatus` int NOT NULL,
  `dtcreated` datetime NOT NULL,
  PRIMARY KEY (`couseuser`,`dcmail`),
  UNIQUE KEY `dcmail_UNIQUE` (`dcmail`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluseuser`
--

LOCK TABLES `tbluseuser` WRITE;
/*!40000 ALTER TABLE `tbluseuser` DISABLE KEYS */;
INSERT INTO `tbluseuser` VALUES (1,'Cesar Smith','cesar.smith@gmail.com','1234',1,'2023-04-02 21:10:44'),(8,'Karen Smith','karendssmith@gmail.com','1234',1,'2023-04-08 19:59:03');
/*!40000 ALTER TABLE `tbluseuser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-15  8:26:55
