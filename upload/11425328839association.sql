-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: association
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `date_of_birth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_id`
--

DROP TABLE IF EXISTS `comment_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment_id` (
  `comment_id` int(30) NOT NULL AUTO_INCREMENT,
  `comment_text` varchar(1000) NOT NULL,
  `time` varchar(30) NOT NULL,
  `post_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_id`
--

LOCK TABLES `comment_id` WRITE;
/*!40000 ALTER TABLE `comment_id` DISABLE KEYS */;
INSERT INTO `comment_id` VALUES (1,'wqeqwe wqe ew qwe ','1 19th of 2015 07:05:55 PM',12,1),(2,'wqeqwe wqe ew qwe ','1 19th of 2015 07:08:22 PM',12,1),(3,'23211423c3343c43x3','1 19th of 2015 07:12:09 PM',12,16),(4,'jdhjkfhfd\r\ndfdfsf','1 19th of 2015 09:48:08 PM',16,16),(5,'wwqeqwewqeqwe','1 19th of 2015 10:00:32 PM',16,16),(6,'qweqe qrewqwqwewqe qweq w','1 19th of 2015 10:00:46 PM',17,16),(7,'sdadasdasdsd sdasdas d','1 19th of 2015 10:07:46 PM',17,16),(8,'dfsdfd fdf dfdf sdsf fdd df f','1 19th of 2015 10:08:37 PM',12,16),(9,'To ???????????? ki hoise?\r\n','1 19th of 2015 10:09:24 PM',18,1),(10,'KI SHOB HABIJABI????????','1 19th of 2015 10:11:41 PM',15,1),(11,'&#2453;&#2495;&#2459;&#2497; &#2453;&#2495;&#2459;&#2497; &#8234;#&#8206;&#2455;&#2509;&#2480;&#2497;&#2474;&#8236; &#2469;&#2503;&#2453;&#2503; &#2476;&#2503;&#2480; &#2489;&#2527;&#2503; &#2479;&#2503;&#2468;&#2503; &#2437;&#2472;&#2503;&#2453; &#2438;&#2472;&#2472;&#2509;&#2470; &#2482;&#2494;&#2455;&#2503; &#2404;\r\n&#2468;&#2494;&#2439; &#2455;&#2509;&#2480;&#2497;&#2474; &#2482;&#2495;&#2477; &#2453;&#2480;&#2495; !','1 19th of 2015 10:13:09 PM',15,1),(12,'jjknkjnk\r\n','1 20th of 2015 01:05:01 AM',13,1),(13,'asdaskjds sad sda','1 21st of 2015 06:19:26 PM',12,1),(14,'dkshdskd a jsdfkjajk OKK','1 21st of 2015 06:20:36 PM',23,1),(15,'','1 21st of 2015 10:16:35 PM',56,1),(16,'https://www.facebook.com/','1 21st of 2015 11:02:22 PM',57,1),(17,'','Fri, 23 Jan 2015 16:42:38 PM',62,1),(18,'this is masum','Sat, 24 Jan 2015 12:41:47 PM',12,1),(19,'wqeqwewqewqeq e wqe wqe','Sat, 24 Jan 2015 15:52:35 PM',65,1),(20,'sdadasdadasd asdad a','Sat, 31 Jan 2015 05:53:14 AM',82,1),(21,'dasdasdad asd asdsa ','Sat, 31 Jan 2015 05:54:03 AM',82,16),(22,'sdasd','Sat, 31 Jan 2015 10:57:36 AM',82,1),(23,'','Sat, 31 Jan 2015 10:58:08 AM',80,1),(24,'sasasasasasasasassa','Sat, 31 Jan 2015 15:53:47 PM',84,1),(25,'gyjygffgvh bnb','Tue, 03 Feb 2015 18:42:16 PM',80,16),(254,'qwqweq erwqrqrewqrew rewr ew rew','Fri, 20 Feb 2015 21:21:25 PM',102,17),(255,'sadad sad d sdaddfasfd','Fri, 20 Feb 2015 21:21:33 PM',102,17),(256,'234oi1u4312u4e','Fri, 20 Feb 2015 21:36:33 PM',102,17),(257,'efrewjrwejffdhf bfdhfaf','Fri, 20 Feb 2015 21:37:15 PM',102,1),(259,'erkekjkjewr eerereej je bjbbj','Fri, 20 Feb 2015 21:39:17 PM',102,1),(260,'ffsdfdsf','Fri, 20 Feb 2015 21:41:44 PM',102,1),(261,'fwedf','Fri, 20 Feb 2015 21:42:32 PM',102,1),(262,'wrer','Fri, 20 Feb 2015 21:44:23 PM',102,1),(266,'fdfsfs','Fri, 20 Feb 2015 21:45:48 PM',102,1),(267,'dfdf','Fri, 20 Feb 2015 21:45:52 PM',102,1),(268,'ggsdddfgfgfdg','Fri, 20 Feb 2015 21:45:59 PM',102,1),(270,'wqewqeqwe','Fri, 20 Feb 2015 21:47:22 PM',103,1),(271,'dafdsfsf','Sun, 22 Feb 2015 08:04:56 AM',103,17),(272,'fsdafsdf','Sun, 22 Feb 2015 08:05:00 AM',103,17),(273,'sadasd sd sadsa','Sun, 22 Feb 2015 08:05:09 AM',103,17),(274,'wrwuir','Sun, 22 Feb 2015 08:32:57 AM',103,17),(275,'dfsdfds','Mon, 23 Feb 2015 16:37:05 PM',104,17),(276,'vfgfdhgdgjhfgjh','Wed, 25 Feb 2015 11:40:04 AM',104,17),(277,'efrdfsdf','Thu, 26 Feb 2015 15:28:28 PM',105,16);
/*!40000 ALTER TABLE `comment_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_effect`
--

DROP TABLE IF EXISTS `event_effect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_effect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(100) NOT NULL,
  `going` int(100) NOT NULL,
  `maybe` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_effect`
--

LOCK TABLES `event_effect` WRITE;
/*!40000 ALTER TABLE `event_effect` DISABLE KEYS */;
INSERT INTO `event_effect` VALUES (34,8,16,0),(36,11,16,0),(37,12,16,0),(38,11,1,0),(39,8,1,0),(40,8,17,0),(41,11,17,0),(42,12,17,0),(43,12,1,0),(44,13,1,0),(45,13,16,0),(46,14,1,0),(47,13,17,0),(48,15,1,0),(49,15,17,0),(50,16,17,0),(51,16,1,0),(52,17,17,0),(53,14,17,0),(54,16,16,0),(55,17,16,0),(56,15,16,0),(57,14,16,0),(58,18,16,0),(59,30,16,0),(60,0,16,0),(61,0,17,0),(62,0,17,0),(63,0,17,0),(64,0,17,0),(65,0,17,0),(66,0,17,0),(67,0,17,0),(68,0,17,0),(69,0,17,0),(70,0,17,0),(71,0,17,0),(72,0,17,0),(73,0,17,0),(74,0,17,0),(75,0,17,0),(76,0,17,0),(77,0,17,0),(78,0,17,0),(79,0,17,0),(80,0,17,0),(81,0,17,0),(82,0,17,0),(83,30,17,0),(84,30,1,0),(85,0,1,0),(86,0,1,0),(87,30,1,0),(88,17,1,0),(89,17,1,0),(90,17,1,0),(91,17,1,0),(92,17,1,0),(93,17,1,0),(94,17,1,0),(95,17,1,0),(96,17,1,0),(97,17,1,0),(98,17,1,0),(99,17,1,0),(100,17,1,0),(101,31,1,0),(102,32,1,0),(103,32,17,0),(104,31,17,0),(105,31,17,0),(106,31,17,0),(107,31,17,0),(108,31,17,0),(109,31,17,0),(110,31,17,0),(111,31,17,0),(112,31,17,0),(113,32,16,0),(114,32,16,0),(115,32,16,0),(116,32,16,0),(117,32,16,0),(118,32,16,0),(119,32,16,0),(120,32,16,0),(121,32,16,0),(122,32,16,0),(123,32,16,0),(124,32,16,0),(125,32,16,0),(126,32,16,0),(127,32,16,0),(128,32,16,0),(129,32,16,0),(130,32,16,0),(131,32,16,0),(132,32,16,0),(133,32,16,0),(134,32,16,0),(135,32,16,0),(136,32,16,0),(137,32,16,0),(138,32,16,0),(139,8,16,0),(140,8,16,0),(141,8,16,0),(142,8,16,0),(143,8,16,0),(144,8,16,0),(145,8,16,0),(146,8,16,0),(147,8,16,0),(148,8,16,0),(149,33,16,0),(150,31,16,0),(151,33,17,0),(152,34,16,0),(153,37,16,0),(154,37,17,0),(155,36,17,0),(156,38,17,0),(157,34,17,0),(158,35,17,0),(159,0,16,0),(160,38,1,0),(161,37,1,0),(162,36,1,0),(163,35,1,0),(164,33,1,0);
/*!40000 ALTER TABLE `event_effect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_table`
--

DROP TABLE IF EXISTS `event_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_table` (
  `event_id` int(30) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(500) NOT NULL,
  `user_id` int(30) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_table`
--

LOCK TABLES `event_table` WRITE;
/*!40000 ALTER TABLE `event_table` DISABLE KEYS */;
INSERT INTO `event_table` VALUES (8,'dsdsa','asdas','asdadsad','2015-02-04','12:59',16,'../upload/161422982679background3.jpg'),(11,'saa','asa','asasaasa','2015-02-04','12:59',16,'../upload/161422985399background2.jpg'),(12,'sdsd','sdsad','sdadsa','2015-02-04','00:00',16,'../upload/161423155196google.jpg'),(13,'sadad','sadasd','asdads','2015-02-03','12:59',1,'../upload/11423159437image3.jpg'),(14,'cholo cholo Dhaka cholo','Dorkari','At shahbag','2015-02-11','12:59',1,'../upload/11423211553kuet1.jpg'),(15,'dada k maro','sadadasdadadad','amar room a','2015-02-14','11:58',1,'../upload/114238535505.jpg'),(16,'','','','0000-00-00','',17,'../upload/171424440851'),(17,'fdwfdsf','sdafsdfs','dfsfsfffd','2015-02-02','12:59',17,'../upload/171424474200background.jpg'),(30,'sdad','sadasd','ssfs','2015-03-04','00:59',16,'../upload/161424477617Red Army Poster.jpg'),(31,'xczc','zxcxzc','xczc','2015-02-04','12:59',1,'../upload/11424481147Red Army Poster.jpg'),(32,'xzczxc','zxcxzc','xcz','2015-02-03','12:00',1,'../upload/11424481212AlbumArtSmall.jpg'),(33,'zxxzxzx','zx','zxzx','2015-02-03','23:00',16,'../upload/161424482891desktop.ini'),(34,'xfbv','xvbxcvb','uytfuj','2015-02-11','12:59',16,'../upload/161424483533button_submit.png'),(35,'fdwfdsf','g','ytui','2015-02-03','12:59',16,'../upload/161424486769collaborators_funge.jpg'),(36,'asd','asdsa','hjh','2015-02-02','12:00',16,'../upload/161424486874collaborators_parque.jpg'),(37,'sda','fdds','fdfsffds','2015-02-25','12:59',16,'../upload/161424486908collaborators_uva.jpg'),(38,'Vara bus a basha jaoa','eta motaamot jachai er jonno','fulbari gate','2015-02-26','12:59',17,'../upload/171424592997collaborators_uva.jpg');
/*!40000 ALTER TABLE `event_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_comment`
--

DROP TABLE IF EXISTS `photo_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_comment` (
  `comment_id` int(30) NOT NULL,
  `comment_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_comment`
--

LOCK TABLES `photo_comment` WRITE;
/*!40000 ALTER TABLE `photo_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_post`
--

DROP TABLE IF EXISTS `photo_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_post` (
  `post_id` int(30) NOT NULL,
  `photo_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_post`
--

LOCK TABLES `photo_post` WRITE;
/*!40000 ALTER TABLE `photo_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `post_id` int(30) NOT NULL AUTO_INCREMENT,
  `post_text` varchar(1000) NOT NULL,
  `time` varchar(30) NOT NULL,
  `post_header` varchar(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (80,'ewqeeeeeeeeeeeeeeeeee eqeqeqweqw eqe qwe qwe','Sat, 31 Jan 2015 06:03:59 AM','',1,''),(81,'','Sat, 31 Jan 2015 06:04:08 AM','',1,'../upload/1142268064805.gif'),(82,'dffdfsfd f fd ','Sat, 31 Jan 2015 06:52:56 AM','',1,'../upload/11422683576Folder.jpg'),(83,'','Sat, 31 Jan 2015 11:58:19 AM','',1,'../upload/11422701899eula.1033.txt'),(84,'asasasasasassasasasaasasasas saa s','Sat, 31 Jan 2015 16:52:44 PM','',16,''),(85,'','Sun, 01 Feb 2015 12:16:35 PM','',16,''),(86,'','Tue, 03 Feb 2015 16:31:13 PM','',16,''),(87,'','Tue, 03 Feb 2015 16:42:48 PM','',16,''),(88,'','Tue, 03 Feb 2015 16:47:56 PM','',16,''),(89,'','Tue, 03 Feb 2015 19:42:32 PM','',16,'../upload/161422988952background3.jpg'),(90,'What if your life were so Amazing that you could do what you wished for? Imagine how it will be if you finally had that one golden chance to make your heartbeat go wild and feel truly alive!','Fri, 06 Feb 2015 09:43:22 AM','',1,''),(91,'wdasdfds dvcccccccccccccccc','Thu, 12 Feb 2015 20:59:19 PM','',17,''),(92,'','Thu, 12 Feb 2015 21:44:17 PM','',17,''),(93,'dsadadasdsadd dd sdsd sd sd ','Fri, 13 Feb 2015 10:47:25 AM','',16,''),(94,'gfgfggfdgfgfggfgf','Fri, 13 Feb 2015 16:20:21 PM','',17,''),(95,'fdgfghffhffd fd fd dfhg hgh ghg','Fri, 13 Feb 2015 19:49:13 PM','',1,''),(96,'','Fri, 13 Feb 2015 19:49:45 PM','',1,'../upload/114238533858.jpg'),(97,'','Mon, 16 Feb 2015 05:06:23 AM','',17,''),(98,'','Thu, 19 Feb 2015 16:48:20 PM','',17,'../upload/171424360900coursera.txt'),(99,'','Thu, 19 Feb 2015 16:49:23 PM','',17,'../upload/171424360963$filename'),(100,'','Thu, 19 Feb 2015 16:50:13 PM','',17,'../upload/171424361013Space.ppt'),(101,'fsdgfdfgd gf gfdg fg fdg fd','Thu, 19 Feb 2015 19:32:53 PM','',17,''),(102,'zxzcxzcxz','Fri, 20 Feb 2015 14:59:01 PM','',17,'../upload/171424440741background.jpg'),(103,'hi I am masum Al Masba.afagf g gaufa fbakfd','Fri, 20 Feb 2015 22:47:18 PM','',1,''),(104,'','Sun, 22 Feb 2015 09:36:16 AM','',17,''),(105,'','Thu, 26 Feb 2015 16:14:28 PM','',16,'../upload/161424963668P1010242.JPG'),(106,'','Thu, 26 Feb 2015 16:49:54 PM','',16,''),(107,'','Thu, 26 Feb 2015 16:49:58 PM','',16,''),(108,'','Thu, 26 Feb 2015 16:50:04 PM','',16,''),(109,'','Thu, 26 Feb 2015 16:50:20 PM','',16,''),(110,'','Thu, 26 Feb 2015 16:52:59 PM','',16,''),(111,'','Thu, 26 Feb 2015 16:53:00 PM','',16,''),(112,'','Thu, 26 Feb 2015 16:53:02 PM','',16,''),(113,'','Thu, 26 Feb 2015 16:53:03 PM','',16,''),(114,'','Thu, 26 Feb 2015 16:53:04 PM','',16,''),(115,'','Thu, 26 Feb 2015 16:53:05 PM','',16,''),(116,'','Thu, 26 Feb 2015 16:53:11 PM','',16,''),(117,'','Thu, 26 Feb 2015 16:53:12 PM','',16,''),(118,'','Thu, 26 Feb 2015 16:53:12 PM','',16,''),(119,'','Thu, 26 Feb 2015 16:53:12 PM','',16,''),(120,'','Thu, 26 Feb 2015 16:53:13 PM','',16,''),(121,'','Thu, 26 Feb 2015 16:53:14 PM','',16,''),(122,'','Thu, 26 Feb 2015 16:53:23 PM','',16,''),(123,'','Thu, 26 Feb 2015 16:53:36 PM','',16,''),(124,'','Thu, 26 Feb 2015 16:55:01 PM','',16,''),(125,'','Thu, 26 Feb 2015 17:02:58 PM','',16,''),(126,'','Thu, 26 Feb 2015 17:03:48 PM','',16,'');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_like`
--

DROP TABLE IF EXISTS `post_like`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_like` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_like`
--

LOCK TABLES `post_like` WRITE;
/*!40000 ALTER TABLE `post_like` DISABLE KEYS */;
INSERT INTO `post_like` VALUES (1,103,16),(2,103,16),(3,102,16),(4,101,16),(5,103,16),(6,103,16),(7,103,16),(8,103,16),(9,103,16),(10,103,16),(11,103,16),(12,103,16),(13,103,16),(14,104,16),(15,104,16),(16,104,16),(17,104,16),(18,104,16),(19,104,16),(20,104,16),(21,104,16),(22,104,16),(23,104,16),(24,104,16),(25,104,16),(26,104,16),(27,104,16),(28,104,16),(29,104,16),(30,104,16),(31,104,16),(32,104,16),(33,104,16),(34,104,16),(35,102,16),(36,102,16),(37,102,16),(38,102,16),(39,102,16),(40,102,16),(41,102,16),(42,102,16),(43,102,16),(44,102,16),(45,102,16),(46,101,16),(47,104,16),(48,103,16),(49,102,16),(50,100,16),(51,99,16),(52,98,16),(53,97,16),(54,96,16),(55,95,16),(56,93,16),(57,94,16),(58,93,16),(59,92,16),(60,91,16),(61,92,16),(62,96,16),(63,90,16),(64,89,16),(65,88,16),(66,87,16),(67,86,16),(68,85,16),(69,84,16),(70,83,16),(71,82,16),(72,81,16),(73,80,16),(74,97,17),(75,102,1),(76,103,17),(77,105,16),(78,104,16),(79,105,16),(80,105,16),(81,105,16),(82,104,16),(83,107,16),(84,107,16),(85,109,16),(86,109,16);
/*!40000 ALTER TABLE `post_like` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `school` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `university` varchar(200) NOT NULL,
  `pro_pic` varchar(5000) NOT NULL,
  `cover_photo` varchar(5000) NOT NULL,
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('Masum Al Mesbah','male','asdsd','2015-02-17','masumcpscr12@gmail.com','01770900052','Rangpur Cantt.','Rangpur Cantt.','KUET','../upload/11424714299background.jpg','../upload/11424714179See Red Army in Theaters.jpg',1),('HM Abdul Fattah','male','1','2015-02-20','hmabdulfattah@gmail.com','01751151728','Rangpur Zilla School','Rangpur Govt. College','KUET','../upload/161424714908P1010234.JPG','../upload/161424966245P1010253.JPG',16),('Abdul Aziz','male','1','1993-11-15','aziz@gmail.com','01753258105','Hativanga A B High School,Jamalpur','Sayed Nazrul Islam College','KUET','../upload/171424714610cover.jpg','../upload/171424714610background.jpg',17);
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-27  1:36:01
