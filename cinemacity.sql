-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: cinemacity
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `seat_fk` int(11) NOT NULL,
  `user_fk` varchar(45) NOT NULL,
  `film_fk` varchar(45) NOT NULL,
  `hall_fk` varchar(45) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB AUTO_INCREMENT=815 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES (1,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(2,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(3,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(4,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(5,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(6,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(7,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(8,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(9,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(10,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(11,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(12,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(13,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(14,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(15,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(16,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(17,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(18,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(19,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(20,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(21,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(22,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(23,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(24,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(25,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(26,'The Shawshank Redemption',1994,'https://upload.wikimedia.org/wikipedia/ro/thumb/c/cb/The_Shawshank_Redemption.jpg/250px-The_Shawshank_Redemption.jpg'),(27,'The Godfather',1972,'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),(28,'12 Angry Men',1957,'https://upload.wikimedia.org/wikipedia/en/9/91/12_angry_men.jpg'),(29,'Pulp Fiction',1994,'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'romance'),(2,'drama'),(3,'science-fiction'),(4,'action'),(5,'horror'),(6,'thriller'),(7,'romance'),(8,'drama'),(9,'science-fiction'),(10,'action'),(11,'horror'),(12,'thriller'),(13,'romance'),(14,'drama'),(15,'science-fiction'),(16,'action'),(17,'horror'),(18,'thriller'),(19,'romance'),(20,'drama'),(21,'science-fiction'),(22,'action'),(23,'horror'),(24,'thriller'),(25,'romance'),(26,'drama'),(27,'science-fiction'),(28,'action'),(29,'horror'),(30,'thriller'),(31,'romance'),(32,'drama'),(33,'science-fiction'),(34,'action'),(35,'horror'),(36,'thriller');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hall` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `numberofseats` int(11) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hall`
--

LOCK TABLES `hall` WRITE;
/*!40000 ALTER TABLE `hall` DISABLE KEYS */;
INSERT INTO `hall` VALUES (1,'Iulius Cluj 1',100),(2,'Iulius Cluj 2',30),(3,'Victoria',70),(4,'Arta',50),(5,'Iulius Cluj 1',100),(6,'Iulius Cluj 2',30),(7,'Victoria',70),(8,'Arta',50),(9,'Iulius Cluj 1',100),(10,'Iulius Cluj 2',30),(11,'Victoria',70),(12,'Arta',50),(13,'Iulius Cluj 1',100),(14,'Iulius Cluj 2',30),(15,'Victoria',70),(16,'Arta',50),(17,'Iulius Cluj 1',100),(18,'Iulius Cluj 2',30),(19,'Victoria',70),(20,'Arta',50),(21,'Iulius Cluj 1',100),(22,'Iulius Cluj 2',30),(23,'Victoria',70),(24,'Arta',50);
/*!40000 ALTER TABLE `hall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movietogenre`
--

DROP TABLE IF EXISTS `movietogenre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movietogenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_fk` varchar(45) NOT NULL,
  `genre_fk` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1219 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movietogenre`
--

LOCK TABLES `movietogenre` WRITE;
/*!40000 ALTER TABLE `movietogenre` DISABLE KEYS */;
INSERT INTO `movietogenre` VALUES (1,'The Shawshank Redemption',' romance'),(2,'The Godfather',' drama'),(3,'12 Angry Men','science-fiction'),(4,'Pulp Fiction','action'),(5,'The Shawshank Redemption',' romance'),(6,'The Godfather',' drama'),(7,'12 Angry Men','science-fiction'),(8,'Pulp Fiction','action'),(9,'The Shawshank Redemption','drama'),(10,'The Shawshank Redemption','romance'),(11,'The Shawshank Redemption','drama'),(12,'The Shawshank Redemption','action'),(13,'The Godfather','action'),(14,'The Godfather','drama'),(15,'12 Angry Men','crime'),(16,'Pulp Fiction','action'),(17,'The Shawshank Redemption','drama'),(18,'The Shawshank Redemption','action'),(19,'The Godfather','action'),(20,'The Godfather','drama'),(21,'12 Angry Men','crime'),(22,'Pulp Fiction','action'),(23,'The Shawshank Redemption','drama'),(24,'The Shawshank Redemption','action'),(25,'The Godfather','action'),(26,'The Godfather','drama'),(27,'12 Angry Men','crime'),(28,'Pulp Fiction','action'),(29,'The Shawshank Redemption','drama'),(30,'The Shawshank Redemption','action'),(31,'The Godfather','action'),(32,'The Godfather','drama'),(33,'12 Angry Men','crime'),(34,'Pulp Fiction','action'),(35,'The Shawshank Redemption','drama'),(36,'The Shawshank Redemption','action'),(37,'The Godfather','action'),(38,'The Godfather','drama'),(39,'12 Angry Men','crime'),(501,'12 Angry Men','crime'),(502,'Pulp Fiction','action'),(503,'The Shawshank Redemption','drama'),(504,'The Shawshank Redemption','action'),(505,'The Godfather','action'),(506,'The Godfather','drama'),(507,'12 Angry Men','crime'),(508,'Pulp Fiction','action'),(509,'The Shawshank Redemption','drama'),(510,'The Shawshank Redemption','action'),(511,'The Godfather','action'),(512,'The Godfather','drama'),(513,'12 Angry Men','crime');
/*!40000 ALTER TABLE `movietogenre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movietohall`
--

DROP TABLE IF EXISTS `movietohall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movietohall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_fk` varchar(45) NOT NULL,
  `hall_fk` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1222 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movietohall`
--

LOCK TABLES `movietohall` WRITE;
/*!40000 ALTER TABLE `movietohall` DISABLE KEYS */;
INSERT INTO `movietohall` VALUES (5,'The Shawshank Redemption','Iulius Cluj 1'),(6,'The Godfather','Victoria'),(7,'12 Angry Men','Victoria'),(8,'Pulp Fiction','Arta'),(9,'The Shawshank Redemption','Iulius Cluj 1'),(10,'The Godfather','Victoria'),(11,'12 Angry Men','Victoria'),(12,'Pulp Fiction','Arta'),(13,'The Shawshank Redemption','Iulius Cluj 1'),(14,'The Shawshank Redemption','Victoria'),(15,'The Shawshank Redemption','Iulius Cluj 1'),(16,'The Shawshank Redemption','Victoria'),(17,'The Godfather','Victoria'),(18,'12 Angry Men','Victoria'),(19,'Pulp Fiction','Arta'),(20,'Pulp Fiction','Victoria'),(21,'The Shawshank Redemption','Iulius Cluj 1'),(22,'The Shawshank Redemption','Victoria'),(23,'The Godfather','Victoria'),(24,'12 Angry Men','Victoria'),(25,'Pulp Fiction','Arta'),(26,'Pulp Fiction','Victoria'),(27,'The Shawshank Redemption','Iulius Cluj 1'),(28,'The Shawshank Redemption','Victoria'),(29,'The Godfather','Victoria'),(30,'12 Angry Men','Victoria'),(31,'Pulp Fiction','Arta'),(32,'Pulp Fiction','Victoria'),(33,'The Shawshank Redemption','Iulius Cluj 1'),(34,'The Shawshank Redemption','Victoria');
/*!40000 ALTER TABLE `movietohall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_fk` varchar(45) NOT NULL,
  `hall_fk` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES (1,'The Shawshank Redemption','Iulius Cluj 1','2011-11-11 00:00:00'),(2,'The Godfather','Victoria','2011-11-11 00:00:00'),(3,'12 Angry Men','Victoria','2011-11-11 00:00:00'),(4,'The Shawshank Redemption','Iulius Cluj 1','2011-11-11 00:00:00'),(5,'The Godfather','Victoria','2011-11-11 00:00:00'),(6,'12 Angry Men','Victoria','2011-11-11 00:00:00'),(7,'Pulp Fiction','Arta','2011-11-11 00:00:00'),(8,'The Shawshank Redemption','Iulius Cluj 1','2011-11-11 00:00:00'),(9,'The Godfather','Victoria','2011-11-12 00:00:00'),(10,'12 Angry Men','Victoria','2011-11-12 00:00:00'),(11,'Pulp Fiction','Arta','2011-12-12 00:00:00'),(12,'The Shawshank Redemption','Iulius Cluj 1','2012-12-12 00:00:00'),(13,'The Shawshank Redemption','Victoria','2012-12-12 00:00:00'),(14,'The Shawshank Redemption','Iulius Cluj 1','2011-11-11 11:11:11'),(15,'The Godfather','Victoria','2012-12-12 12:12:12'),(16,'12 Angry Men','Victoria','2011-11-11 11:11:11'),(17,'Pulp Fiction','Arta','2011-11-11 11:11:11'),(18,'The Shawshank Redemption','Iulius Cluj 1','2012-12-12 12:12:12'),(19,'The Godfather','Victoria','2012-12-12 12:12:12'),(20,'12 Angry Men','Victoria','2011-11-11 11:11:11'),(21,'Pulp Fiction','Arta','2012-12-12 02:02:02'),(22,'The Shawshank Redemption','Iulius Cluj 1','2011-11-11 11:11:11'),(23,'The Shawshank Redemption','Victoria','2011-11-11 11:11:11');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`pk`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'Jege ','kwreg@example.com','3e212f071f9fceba16708bb1ae023b66'),(3,'Kana Jambe','kanajambe@example.com','3e212f071f9fceba16708bb1ae023b66'),(4,'georgi.marian@yahoo.com','','a152e841783914146e4bcd4f39100686'),(12,'asdfgf','asdfgf@gmail.com','a152e841783914146e4bcd4f39100686'),(13,'asdfg','asdfg@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(14,'qwerty','qwerty@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4'),(15,'zxcvb','zxcvb@y.g','e10adc3949ba59abbe56e057f20f883e'),(16,'qwertyuiop','qwertyuiop@qwewrt.com','e10adc3949ba59abbe56e057f20f883e'),(17,'merepere','merepere@yahoo.com','e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertype` (
  `usertype` varchar(42) NOT NULL,
  `users_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertype`
--

LOCK TABLES `usertype` WRITE;
/*!40000 ALTER TABLE `usertype` DISABLE KEYS */;
INSERT INTO `usertype` VALUES ('admin',14),('normal',16);
/*!40000 ALTER TABLE `usertype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-16 21:58:54
