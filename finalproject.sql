-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2-log

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
-- Table structure for table `gigs`
--

DROP TABLE IF EXISTS `gigs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gigs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gigtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weekday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `playdate` date NOT NULL,
  `playtime` time NOT NULL,
  `playdatetime` datetime NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Playdatetim` (`playdatetime`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gigs`
--

LOCK TABLES `gigs` WRITE;
/*!40000 ALTER TABLE `gigs` DISABLE KEYS */;
INSERT INTO `gigs` VALUES (26,'Jazzmarathon Eindhoven','zondag','2012-08-26','18:00:00','2012-08-26 18:00:00','Cafe de Gouden Bal','http://www.goudenbal.dse.nl/','Hoogstraat 112-a, Eindhoven','Met als gast Monique Dorst (zang). Dit optreden vond plaats tijdens de Jazzmarathon in café de Gouden Bal.','../afbeeldingen/gb-logo200px.jpg'),(27,'Jazz in cafe De Gouden Bal','donderdag','2013-04-11','20:00:00','2013-04-11 20:00:00','Cafe de Gouden Bal','http://www.goudenbal.dse.nl/','Hoogstraat 112-a, Eindhoven','Met als gast: Monique Dorst (zang).','../afbeeldingen/gb-logo200px.jpg'),(28,'Open Podium in De Hofnar!','maandag','2013-02-13','20:00:00','2013-02-03 20:00:00','De Hofnar','http://www.hofnar.nl/cgi-bin/hofnar.cgi?snel=1&tp=foto&vrst=54435','de Hofnar 10','Hofnar Open Podium - Met als gasten: Moniek van de Wiel (contrabas) en Monique Dorst (zang).','../afbeeldingen/de hofnar.jpg'),(29,'De Carat-concerten!','zondag','2013-06-16','14:00:00','2013-06-16 14:00:00','Het Carat Paviljoen','http://www.stadspromotiehelmond.nl/caratconcerten/','Muziekkiosk het Carat-paviljoen,  stadspark De Warand , Helmond','De Carat-concerten - Gast: Moniek Dorst, zang.','../afbeeldingen/logo-stadspromo-kl.jpg'),(30,'Jazzmarathon Eindhoven!','zondag','2013-08-25','18:00:00','2013-08-25 18:00:00','Cafe de Gouden Bal','http://www.goudenbal.dse.nl/','Hoogstraat 112-a, Eindhoven','Vocals: Moniek Dorst. Gastbassiste: Moniek van de Wiel.','../afbeeldingen/gb-logo200px.jpg'),(31,'Open podium in De Hofnar, Valkenswaard','maandag','2013-11-18','20:00:00','2013-11-18 20:00:00','De Hofnar','http://www.hofnar.nl/cgi-bin/hofnar.cgi?snel=1&amp;tp=foto&amp;vrst=54435','de Hofnar 10, Valkenswaard','Vocals: Moniek Dorst. Gastbassiste: Moniek van de Wiel.','../afbeeldingen/de hofnar.jpg'),(32,'Musis Sacrum @ JAzzclub OSJE','zondag','2014-01-12','20:00:00','2014-01-12 20:00:00','Jazzclub OSJE','http://www.osje.dse.nl/','Leenderweg 67, Eindhoven','Toegang : 5 Euro','../afbeeldingen/logo-osje-draft.jpg'),(33,'Besloten optreden voor E64-gezelschap','dinsdag','2014-03-11','19:00:00','2014-03-11 19:00:00','','',' , ','','../afbeeldingen/JAZZCINATIONLOGO-HEADER.jpg'),(34,'Kraaij en Balder, Eindhoven','vrijdag','2014-02-07','21:30:00','2014-02-07 21:30:00','Kraaij en Balder','http://www.kraaijenbalder.nl/','Strijpsestraat 79, Eindhoven','','../afbeeldingen/kraaijenbalder.png'),(35,'Jazzmarathon Eindhoven!','zaterdag','2014-08-31','17:00:00','2014-08-31 17:00:00','Cafe de Gouden Bal','http://www.goudenbal.dse.nl/','Hoogstraat 79, Eindhoven','Alweer onze derde Jazzmarathon! Kom gezellig langs!','../afbeeldingen/gb-logo200px.jpg'),(36,'Indian Summer Jazz Festival','zondag','2015-09-27','13:00:00','2015-09-27 13:00:00','Harba Lorifan nabij sportpark Den Dries','http://www.harbalorifa.nl/activiteiten/indian-summer-jazz','Heerkensdreef 20, Valkenswaard','Jazzcination\r\nGroovy Day Jazztet\r\nBigband Nightshift\r\n\r\nJazz, Adventure Golf, en lekker eten!!\r\n13:00 - 18:00\r\n\r\nTOEGANG GRATIS!','../afbeeldingen/Indiansummerjazz.png'),(37,'CS50 JAZZ!!!','dinsdag','2015-12-29','15:30:00','2015-12-29 15:30:00','CS50 Amsterdam','http://www.cs50.net','CS50street 50, Amsterdam','Jazzin\' it up with CS50!!!','../afbeeldingen/JAZZCINATIONLOGO-HEADER.jpg');
/*!40000 ALTER TABLE `gigs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img`
--

LOCK TABLES `img` WRITE;
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
INSERT INTO `img` VALUES (1,'Default: Jazzcination logo','../afbeeldingen/JAZZCINATIONLOGO-HEADER.jpg'),(2,'Logo de Hofnar','../afbeeldingen/de hofnar.jpg'),(3,'Stadspromo','../afbeeldingen/logo-stadspromo-kl.jpg'),(4,'Logo OSJE','../afbeeldingen/logo-osje-draft.jpg'),(5,'Logo De Gouden Bal','../afbeeldingen/gb-logo200px.jpg'),(6,'Kraaij en Balder','../afbeeldingen/kraaijenbalder.png'),(7,'Indian Summer Jazz','../afbeeldingen/Indiansummerjazz.png');
/*!40000 ALTER TABLE `img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'tjitske','$1$EDsSuBXy$rsSSFpYWFLmASqGTiY39v.');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-30  1:45:37
