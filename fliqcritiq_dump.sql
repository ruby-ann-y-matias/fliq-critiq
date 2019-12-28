-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `bingelists`
--

DROP TABLE IF EXISTS `bingelists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bingelists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `flick_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bingelists_user_id_foreign` (`user_id`),
  KEY `bingelists_flick_id_foreign` (`flick_id`),
  CONSTRAINT `bingelists_flick_id_foreign` FOREIGN KEY (`flick_id`) REFERENCES `flicks` (`id`) ON DELETE CASCADE,
  CONSTRAINT `bingelists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bingelists`
--

LOCK TABLES `bingelists` WRITE;
/*!40000 ALTER TABLE `bingelists` DISABLE KEYS */;
/*!40000 ALTER TABLE `bingelists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bingelist_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_bingelist_id_foreign` (`bingelist_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_bingelist_id_foreign` FOREIGN KEY (`bingelist_id`) REFERENCES `bingelists` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flick_genre`
--

DROP TABLE IF EXISTS `flick_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flick_genre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `flick_id` int(10) unsigned NOT NULL,
  `genre_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `flick_genre_flick_id_foreign` (`flick_id`),
  KEY `flick_genre_genre_id_foreign` (`genre_id`),
  CONSTRAINT `flick_genre_flick_id_foreign` FOREIGN KEY (`flick_id`) REFERENCES `flicks` (`id`) ON DELETE CASCADE,
  CONSTRAINT `flick_genre_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flick_genre`
--

LOCK TABLES `flick_genre` WRITE;
/*!40000 ALTER TABLE `flick_genre` DISABLE KEYS */;
INSERT INTO `flick_genre` VALUES (1,1,6,NULL,NULL),(2,1,8,NULL,NULL),(3,1,9,NULL,NULL),(4,2,2,NULL,NULL),(5,2,8,NULL,NULL),(6,2,13,NULL,NULL),(7,3,1,NULL,NULL),(8,3,2,NULL,NULL),(9,3,6,NULL,NULL),(10,4,7,NULL,NULL),(11,4,12,NULL,NULL),(12,5,3,NULL,NULL),(13,5,5,NULL,NULL),(14,5,13,NULL,NULL),(15,6,2,NULL,NULL),(16,6,14,NULL,NULL),(17,6,15,NULL,NULL),(18,7,9,NULL,NULL),(19,7,11,NULL,NULL),(20,7,15,NULL,NULL),(21,8,7,NULL,NULL),(22,8,12,NULL,NULL),(23,9,5,NULL,NULL),(24,9,10,NULL,NULL),(25,10,3,NULL,NULL),(26,10,8,NULL,NULL),(28,11,5,NULL,NULL),(29,11,8,NULL,NULL),(30,11,10,NULL,NULL),(31,12,2,NULL,NULL),(32,12,11,NULL,NULL),(33,12,15,NULL,NULL),(34,13,3,NULL,NULL),(35,13,6,NULL,NULL),(36,13,15,NULL,NULL),(37,14,3,NULL,NULL),(38,14,9,NULL,NULL),(39,14,11,NULL,NULL),(40,15,1,NULL,NULL),(41,15,8,NULL,NULL),(42,16,5,NULL,NULL),(43,16,14,NULL,NULL),(44,16,15,NULL,NULL),(45,17,1,NULL,NULL),(46,17,3,NULL,NULL),(47,17,14,NULL,NULL),(48,18,6,NULL,NULL),(49,18,8,NULL,NULL),(50,18,15,NULL,NULL),(51,19,5,NULL,NULL),(52,19,8,NULL,NULL),(53,19,13,NULL,NULL),(54,20,5,NULL,NULL),(55,20,14,NULL,NULL),(56,21,1,NULL,NULL),(57,21,5,NULL,NULL),(58,21,14,NULL,NULL),(59,22,6,NULL,NULL),(60,22,11,NULL,NULL),(61,22,15,NULL,NULL),(62,23,1,NULL,NULL),(63,23,5,NULL,NULL),(64,23,6,NULL,NULL),(65,24,6,NULL,NULL),(66,24,11,NULL,NULL),(67,24,15,NULL,NULL),(68,25,4,NULL,NULL),(69,25,12,NULL,NULL),(70,26,2,NULL,NULL),(71,26,9,NULL,NULL),(72,26,11,NULL,NULL),(73,27,5,NULL,NULL),(74,27,6,NULL,NULL),(75,27,11,NULL,NULL),(76,28,2,NULL,NULL),(77,28,11,NULL,NULL),(78,28,14,NULL,NULL),(79,29,1,NULL,NULL),(80,29,2,NULL,NULL),(81,29,14,NULL,NULL),(82,30,3,NULL,NULL),(83,30,11,NULL,NULL),(84,30,15,NULL,NULL),(85,31,2,NULL,NULL),(86,31,8,NULL,NULL),(87,31,14,NULL,NULL),(88,32,1,NULL,NULL),(89,32,5,NULL,NULL),(90,32,15,NULL,NULL),(91,33,6,NULL,NULL),(92,33,9,NULL,NULL),(93,33,11,NULL,NULL),(94,34,6,NULL,NULL),(95,34,8,NULL,NULL),(96,34,12,NULL,NULL),(97,35,2,NULL,NULL),(98,35,5,NULL,NULL),(99,35,10,NULL,NULL),(100,36,8,NULL,NULL),(101,36,9,NULL,NULL),(102,36,15,NULL,NULL),(103,37,8,NULL,NULL),(104,37,15,NULL,NULL),(105,38,6,NULL,NULL),(106,38,8,NULL,NULL),(107,38,15,NULL,NULL),(108,39,6,NULL,NULL),(109,39,11,NULL,NULL),(110,39,15,NULL,NULL),(111,40,7,NULL,NULL),(112,40,11,NULL,NULL),(113,40,15,NULL,NULL),(114,41,1,NULL,NULL),(115,41,5,NULL,NULL),(116,41,6,NULL,NULL),(117,42,1,NULL,NULL),(118,42,4,NULL,NULL),(119,42,5,NULL,NULL),(120,43,5,NULL,NULL),(121,43,12,NULL,NULL),(122,43,3,NULL,NULL),(123,44,2,NULL,NULL),(124,44,5,NULL,NULL),(125,44,15,NULL,NULL),(126,45,5,NULL,NULL),(127,45,8,NULL,NULL),(128,46,8,NULL,NULL),(129,46,10,NULL,NULL),(130,46,11,NULL,NULL),(131,47,5,NULL,NULL),(132,47,8,NULL,NULL),(133,48,5,NULL,NULL),(134,48,8,NULL,NULL),(135,49,6,NULL,NULL),(136,49,11,NULL,NULL),(137,49,14,NULL,NULL),(138,50,5,NULL,NULL),(139,50,8,NULL,NULL),(140,51,6,NULL,NULL),(141,51,7,NULL,NULL),(142,52,3,NULL,NULL),(143,52,5,NULL,NULL),(144,52,11,NULL,NULL),(145,53,6,NULL,NULL),(146,53,8,NULL,NULL),(147,53,11,NULL,NULL),(148,54,6,NULL,NULL),(149,54,8,NULL,NULL),(150,54,15,NULL,NULL),(151,55,8,NULL,NULL),(152,55,13,NULL,NULL),(153,56,5,NULL,NULL),(154,56,8,NULL,NULL),(155,56,10,NULL,NULL),(156,57,5,NULL,NULL),(157,57,6,NULL,NULL),(158,57,15,NULL,NULL),(159,58,1,NULL,NULL),(160,58,3,NULL,NULL),(161,58,6,NULL,NULL),(162,59,5,NULL,NULL),(163,59,8,NULL,NULL),(164,60,5,NULL,NULL),(165,60,10,NULL,NULL),(166,60,14,NULL,NULL),(167,61,4,NULL,NULL),(168,61,8,NULL,NULL),(169,61,9,NULL,NULL),(170,62,12,NULL,NULL),(171,63,5,NULL,NULL),(172,63,8,NULL,NULL),(173,63,10,NULL,NULL),(174,64,3,NULL,NULL),(175,64,11,NULL,NULL),(176,64,15,NULL,NULL),(177,65,4,NULL,NULL),(178,65,8,NULL,NULL),(179,65,11,NULL,NULL),(180,66,5,NULL,NULL),(181,66,8,NULL,NULL),(182,66,11,NULL,NULL),(183,67,3,NULL,NULL),(184,67,5,NULL,NULL),(185,68,7,NULL,NULL),(186,69,5,NULL,NULL),(187,69,8,NULL,NULL),(188,69,15,NULL,NULL),(189,70,2,NULL,NULL),(190,70,5,NULL,NULL),(191,70,14,NULL,NULL),(192,71,4,NULL,NULL),(193,71,5,NULL,NULL),(194,71,11,NULL,NULL),(195,72,6,NULL,NULL),(196,72,8,NULL,NULL),(197,72,11,NULL,NULL),(198,73,5,NULL,NULL),(199,73,8,NULL,NULL),(200,73,14,NULL,NULL),(201,74,10,NULL,NULL),(202,74,11,NULL,NULL),(203,74,14,NULL,NULL),(204,75,3,NULL,NULL),(205,75,8,NULL,NULL),(206,75,15,NULL,NULL),(207,76,8,NULL,NULL),(208,76,11,NULL,NULL),(209,76,15,NULL,NULL),(210,77,8,NULL,NULL),(211,77,5,NULL,NULL),(212,78,1,NULL,NULL),(213,78,5,NULL,NULL),(214,78,14,NULL,NULL),(215,79,6,NULL,NULL),(216,79,8,NULL,NULL),(217,79,9,NULL,NULL),(218,80,3,NULL,NULL),(219,80,9,NULL,NULL),(220,80,11,NULL,NULL),(221,81,4,NULL,NULL),(222,81,8,NULL,NULL),(223,82,1,NULL,NULL),(224,82,5,NULL,NULL),(225,83,5,NULL,NULL),(226,83,8,NULL,NULL),(227,83,13,NULL,NULL),(228,84,2,NULL,NULL),(229,84,8,NULL,NULL),(230,84,11,NULL,NULL),(231,85,1,NULL,NULL),(232,85,6,NULL,NULL),(233,85,8,NULL,NULL),(234,86,3,NULL,NULL),(235,86,9,NULL,NULL),(236,86,14,NULL,NULL),(237,87,5,NULL,NULL),(238,88,8,NULL,NULL),(239,88,11,NULL,NULL),(240,88,15,NULL,NULL),(241,89,1,NULL,NULL),(242,89,14,NULL,NULL),(243,90,8,NULL,NULL),(244,90,10,NULL,NULL),(245,90,14,NULL,NULL),(246,91,6,NULL,NULL),(247,91,7,NULL,NULL),(248,91,11,NULL,NULL),(249,92,10,NULL,NULL),(250,92,14,NULL,NULL),(251,92,15,NULL,NULL),(252,93,5,NULL,NULL),(253,93,8,NULL,NULL),(254,93,13,NULL,NULL),(255,94,9,NULL,NULL),(256,94,15,NULL,NULL),(257,95,5,NULL,NULL),(258,95,9,NULL,NULL),(259,95,15,NULL,NULL),(260,96,5,NULL,NULL),(261,96,8,NULL,NULL),(262,97,5,NULL,NULL),(263,97,8,NULL,NULL),(264,97,13,NULL,NULL),(265,98,12,NULL,NULL),(266,99,8,NULL,NULL),(267,99,9,NULL,NULL),(268,99,11,NULL,NULL),(269,100,5,NULL,NULL),(270,100,13,NULL,NULL),(271,101,9,NULL,NULL),(272,101,14,NULL,NULL),(273,101,15,NULL,NULL),(274,102,5,NULL,NULL),(275,102,8,NULL,NULL),(276,102,13,NULL,NULL);
/*!40000 ALTER TABLE `flick_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flicks`
--

DROP TABLE IF EXISTS `flicks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flicks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `age_limit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flicks`
--

LOCK TABLES `flicks` WRITE;
/*!40000 ALTER TABLE `flicks` DISABLE KEYS */;
INSERT INTO `flicks` VALUES (1,'1922','A farmer pens a confession admitting to his wife\'s murder, but her death is just the beginning of a macabre tale. Based on Stephen King\'s novella.','img/sm-1922.jpg','img/md-1922.jpg',2017,'16+','1h 42m','2018-04-12 03:30:39','2018-04-12 03:30:39'),(2,'5 Centimeters Per Second','Inseparable fourth-graders Takaki Tonoo and Akari Shinohara -- bonded by a love of books -- begin to slowly drift apart when their families relocate.','img/sm-5cm.jpg','img/md-5cm.jpg',2007,'7+','1h 2m','2018-04-12 03:30:39','2018-04-12 03:30:39'),(3,'91 Days','In the midst of the Prohibition era, Angelo Lagusa seeks to avenge his father by infiltrating a mafia family and befriending its scion Nero Vanetti.','img/sm-91days.jpg','img/md-91days.jpg',2016,'16+','1 Season','2018-04-12 03:30:39','2018-04-12 03:30:39'),(4,'Abstract The Art of Design','Step inside the minds of the most innovative designers in a variety of disciplines and learn how design impacts every aspect of life.','img/sm-abstract.jpg','img/md-abstract.jpg',2017,'13+','1 Season','2018-04-12 03:30:39','2018-04-12 03:30:39'),(5,'A Gentleman\'s Dignity','Four highly accomplished men in their 40s navigate life and romance to find love and success in urban Korea in this male answer to \"Sex and the City.\"','img/sm-gentleman.jpg','img/md-gentleman.jpg',2012,'13+','1 Season','2018-04-12 03:30:39','2018-04-12 03:30:39'),(6,'Ajin Demi Human','A teenager discovers that he is an Ajin and flees before the authorities experiment on him. Other Ajin plan to fight back and he must choose a side.','img/sm-ajin.jpg','img/md-ajin.jpg',2016,'16+','2 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(7,'Annihilation','When her husband vanishes during a secret mission, biologist Lena joins an expedition into a mysterious region sealed off by the U.S. government.','img/sm-annihilation.jpg','img/md-annihilation.jpg',2018,'16+','1h 55m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(8,'Anthony Bourdain: No Reservations','Outspoken chef, author and culinary adventurer Anthony Bourdain scours the globe in search of all the edible treasures the world has to offer.','img/sm-bourdain.jpg','img/md-bourdain.jpg',2012,'13+','2 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(9,'Are We Done Yet?','A newlywed couple moves into a fixer-upper in the suburbs, but their happy new life together is thrown into disarray by an oddball contractor.','img/sm-arewe.jpg','img/md-arewe.jpg',2007,'7+','1h 32m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(10,'Atelier','A young \'fabric geek\' lands a job at an upscale Japanese lingerie company -- and quickly discovers she\'ll need help to survive.','img/sm-atelier.jpg','img/md-atelier.jpg',2015,'7+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(11,'Atypical','When a teen on the autism spectrum decides to get a girlfriend, his bid for more independence puts his whole family on a path of self-discovery.','img/sm-atypical.jpg','img/md-atypical.jpg',2017,'13+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(12,'B The Beginning','Genius investigator Keith Flick rejoins the royal police force just as serial killer \"B\" emerges. Mysterious youth Koku may be an ally, or a target.','img/sm-b.jpg','img/md-b.jpg',2018,'16+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(13,'Birdshot','A sheltered farm girl inadvertently shoots an endangered Philippine eagle, setting off a police investigation that exposes violence and corruption.','img/sm-birdshot.jpg','img/md-birdshot.jpg',2016,'16+','1h 55m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(14,'Black','A Grim Reaper, a detective and a woman who foresees death get ensnared in matters of life and death -- and dark mysteries of twenty years past.','img/sm-black.jpg','img/md-black.jpg',2017,'16+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(15,'Black Hawk Down','When U.S. forces attempt to capture two underlings of a Somali warlord, their helicopters are shot down and the Americans suffer heavy casualties.','img/sm-blackhawk.jpg','img/md-blackhawk.jpg',2001,'16+','2h 24m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(16,'Black Mirror','This sci-fi anthology series explores a twisted, high-tech near-future where humanity\'s greatest innovations and darkest instincts collide...','img/sm-blackmirror.jpg','img/md-blackmirror.jpg',2017,'16+','4 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(17,'Blade of the Immortal','Cursed with immortality, skilled swordsman Manji agrees to become a young girl\'s bodyguard, swearing to avenge the slaying of her family.','img/sm-blade.jpg','img/md-blade.jpg',2017,'16+','2h 21m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(18,'Breaking Bad','A high school chemistry teacher dying of cancer teams with a former student to secure his family\'s future by manufacturing and selling crystal meth.','img/sm-breakingbad.jpg','img/md-breakingbad.jpg',2013,'16+','5 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(19,'Bridesmaids','When an underemployed baker becomes her best friend\'s maid-of-honor, she almost ruins the big day due to her competition with the other bridesmaids.','img/sm-bridesmaids.jpg','img/md-bridesmaids.jpg',2011,'16+','2h 4m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(20,'Bruce Almighty','When TV reporter Bruce Nolan angrily ridicules God, the Almighty responds by giving Bruce all His divine powers. But can Bruce improve on perfection?','img/sm-bruce.jpg','img/md-bruce.jpg',2003,'13+','1h 41m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(21,'Captain America: Civil War','It\'s Avengers vs. Avengers when Captain America fights to keep his superhero friends independent, while his pal Iron Man supports government control.','img/sm-civilwar.jpg','img/md-civilwar.jpg',2016,'13+','2h 29m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(22,'CSI: Crime Scene Investigation','Using state-of-the-art forensic methods, the Las Vegas Police Department\'s Crime Scene Investigation bureau solves Sin City\'s most baffling murders.','img/sm-csi.jpg','img/md-csi.jpg',2015,'16+','4 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(23,'Daredevil','Blinded as a young boy, Matt Murdock fights injustice by day as a lawyer and by night as the Super Hero Daredevil in Hell\'s Kitchen, New York City.','img/sm-daredevil.jpg','img/md-daredevil.jpg',2016,'16+','2 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(24,'Dexter','By day, mild-mannered Dexter is a blood-spatter analyst for the Miami police. But at night, he is a serial killer who only targets other murderers.','img/sm-dexter.jpg','img/md-dexter.jpg',2013,'16+','8 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(25,'Dragon\'s Den','Would-be tycoons seek investment money by pitching products to a lineup of five wealthy business leaders in exchange for equity in their companies.','img/sm-dragon.jpg','img/md-dragon.jpg',2016,'7+','2 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(26,'Devilman Crybaby','Ryo\'s actions and motives remain a mystery to himself, so he revisits his past for answers. Miki\'s father searches for his missing wife and son.','img/sm-devilman.jpg','img/md-devilman.jpg',2018,'16+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(27,'Elementary','In this modern twist on the classic story, legendary sleuth Sherlock Holmes solves the NYPD\'s most difficult cases with the help of Dr. Joan Watson.','img/sm-elementary.jpg','img/md-elementary.jpg',2017,'13+','5 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(28,'Erased','Satoru Fujinuma can travel back in time to save others\' lives. When he wakes up 18 years in the past, he has a chance to save his murdered classmates.','img/sm-erased.jpg','img/md-erased.jpg',2016,'13+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(29,'Fate Apocrypha','The theft of the Greater Grail from Fuyuki City leads to a splintered timeline in which the Great Holy Grail War is waged on an unprecedented scale.','img/sm-fate.jpg','img/md-fate.jpg',2017,'16+','2 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(30,'Forgotten','When his abducted brother returns seemingly a different man with no memory of the past 19 days, Jin-seok chases after the truth behind the kidnapping.','img/sm-forgotten.jpg','img/md-forgotten.jpg',2017,'16+','1h 48m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(31,'Fullmetal Alchemist','While alchemist Edward Elric searches for a way to restore his brother Al\'s body, the military government and mysterious monsters are watching closely.','img/sm-fullmetal.jpg','img/md-fullmetal.jpg',2017,'13+','2h 14m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(32,'Get Smart','When the identities of secret agents are compromised, hapless Maxwell Smart teams with far more capable Agent 99 to thwart an evil terrorist group.','img/sm-getsmart.jpg','img/md-getsmart.jpg',2008,'13+','1h 49m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(33,'Gerald\'s Game','When her husband\'s sex game goes wrong, Jessie -- handcuffed to a bed in a remote lake house -- faces warped visions, dark secrets and a dire choice.','img/sm-gerald.jpg','img/md-gerald.jpg',2017,'16+','1h 43m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(34,'Girls Incarcerated','At Madison Juvenile Correctional Facility in Indiana, teen girls struggle with conflict and heartbreak as they try to turn their lives around.','img/sm-girls.jpg','img/md-girls.jpg',2018,'16+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(35,'Haikyu!!','Inspired by a championship match he sees on TV, junior high schooler Hinata joins a volleyball club and begins training, despite his short height.','img/sm-haikyu.jpg','img/md-haikyu.jpg',2014,'7+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(36,'Honeymoon','A psychotic doctor kidnaps his neighbor and locks her in a dungeon, where he uses twisted conditioning methods to make her submit to being his wife.','img/sm-honeymoon.jpg','img/md-honeymoon.jpg',2015,'18+','1h 36m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(37,'House of Cards','A ruthless politician will stop at nothing to conquer Washington, D.C., in this Emmy and Golden Globe-winning political drama.','img/sm-house.jpg','img/md-house.jpg',2017,'16+','5 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(38,'How to Get Away with Murder','Brilliant criminal defense attorney and law professor Annalise Keating, plus five of her students, become involved in a twisted murder case.','img/sm-htgawm.jpg','img/md-htgawm.jpg',2018,'16+','3 Seasons','2018-04-12 03:30:40','2018-04-12 03:30:40'),(39,'Hush','A deaf writer who retreated into the woods to live a solitary life must fight for her life in silence when a masked killer appears in her window.','img/sm-hush.jpg','img/md-hush.jpg',2016,'16+','1h 21m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(40,'Icarus','In his Oscar-winning film, an American cyclist plunges into a vast doping scandal involving a Russian scientist -- Putin\'s most-wanted whistleblower.','img/sm-icarus.jpg','img/md-icarus.jpg',2017,'13+','2h 1m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(41,'Inside Man','A detective matches wits with a thief who\'s always one step ahead of the cops, and when a loose-cannon negotiator arrives, things spin out of control.','img/sm-insideman.jpg','img/md-insideman.jpg',2006,'16+','2h 8m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(42,'Johnny English Reborn','Bumbling spy Johnny English sharpens his skills at a Tibetan monastery and returns to service to protect the Chinese premier from an assassin.','img/sm-johnny.jpg','img/md-johnny.jpg',2011,'13+','1h 41m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(43,'Jo Koy','Between raising a teenage boy and growing up with a Filipino mother, stand-up comic Jo Koy has been through a lot. He\'s here to tell you all about it.','img/sm-jokoy.jpg','img/md-jokoy.jpg',2017,'16+','1h 2m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(44,'Kakegurui','High roller Yumeko Jabami plans to clean house at Hyakkaou Private Academy, a school where students are evaluated solely on their gambling skills.','img/sm-kakegurui.jpg','img/md-kakegurui.jpg',2017,'13+','1 Season','2018-04-12 03:30:40','2018-04-12 03:30:40'),(45,'Knocked Up','A one-night stand results in an unexpected pregnancy for Alison, who tries to make things work with the slacker who knocked her up.','img/sm-knockedup.jpg','img/md-knockedup.jpg',2007,'16+','2h 9m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(46,'Lemony Snicket\'s A Series of Unfortunate Events','After their parents are tragically killed, three orphans are taken in by the dastardly Count Olaf, who hopes to snatch their inheritance from them.','img/sm-lemony.jpg','img/md-lemony.jpg',2004,'7+','1h 48m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(47,'Life as We Know It','Holly and Eric discover reciprocal hatred during their first date, but must put their feelings aside after becoming guardians of their friends\' baby.','img/sm-life.jpg','img/md-life.jpg',2010,'13+','1h 54m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(48,'Lost in Translation','Two lost souls visiting Tokyo -- the neglected wife of a photographer and a washed-up movie star -- find solace in each other\'s company.','img/sm-lost.jpg','img/md-lost.jpg',2003,'13+','1h 41m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(49,'Lucid Dream','After searching for his abducted son for three years, a devastated father attempts to track down his missing child through lucid dreams.','img/sm-lucid.jpg','img/md-lucid.jpg',2017,'16+','1h 41m','2018-04-12 03:30:40','2018-04-12 03:30:40'),(50,'Mad Men','Set in 1960s New York City, this award-winning series takes a peek inside an ad agency during an era when the cutthroat business had a glamorous lure.','img/sm-madmen.jpg','img/md-madmen.jpg',2015,'16+','7 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(51,'Making a Murderer','Filmed over 10 years, this real-life thriller follows a DNA exoneree who, while exposing police corruption, becomes a suspect in a grisly new crime.','img/sm-making.jpg','img/md-making.jpg',2015,'16+','1 Season','2018-04-12 03:30:41','2018-04-12 03:30:41'),(52,'Million Yen Women','Five beautiful but mysterious women move in with unsuccessful novelist Shin, who manages their odd household in exchange for a tidy monthly sum.','img/sm-million.jpg','img/md-million.jpg',2017,'13+','1 Season','2018-04-12 03:30:41','2018-04-12 03:30:41'),(53,'Mindfulness and Murder','When a homeless boy is slain in a Buddhist temple, a cop-turned-monk spearheads an investigation and uncovers the dark side of his fellow monastics.','img/sm-mindfulness.jpg','img/md-mindfulness.jpg',2011,'13+','1h 30m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(54,'Narcos','The true story of Colombia\'s infamously violent and powerful drug cartels fuels this gritty gangster drama series.','img/sm-narcos.jpg','img/md-narcos.jpg',2018,'16+','3 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(55,'Newness','Martin and Gabi try to form a relationship after meeting through a hookup app, but when boredom creeps in, they seek out an unconventional solution.','img/sm-newness.jpg','img/md-newness.jpg',2017,'16+','1h 57m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(56,'Okja','A gentle giant and the girl who raised her are caught in the crossfire between animal activism, corporate greed and scientific ethics.','img/sm-okja.jpg','img/md-okja.jpg',2017,'16+','2h 1m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(57,'Ocean\'s Eleven','Less than 24 hours into his parole, charismatic Danny Ocean is already rolling out his next plan: stealing more than $150 million from three casinos.','img/sm-ocean.jpg','img/md-ocean.jpg',2001,'13+','1h 56m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(58,'Old Boy','With no clue how he came to be imprisoned, drugged and tortured for 15 years, a desperate businessman seeks revenge on his captors.','img/sm-oldboy.jpg','img/md-oldboy.jpg',2003,'16+','1h 59m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(59,'Orange is the New Black','A privileged New Yorker ends up in a women\'s prison when a past crime catches up with her in this Emmy-winning series from the creator of \'Weeds.\'','img/sm-orange.jpg','img/md-orange.jpg',2013,'16+','5 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(60,'Pan','As a kind of prequel to the Peter Pan story, this fantasy relates how Peter first met and initially befriended Captain Hook and fought alongside him.','img/sm-pan.jpg','img/md-pan.jpg',2015,'7+','1h 51m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(61,'Penny Dreadful','The classic tales of Dracula, Frankenstein, Dorian Gray and more are woven together in this horror series set on the dark streets of Victorian London.','img/sm-penny.jpg','img/md-penny.jpg',2016,'16+','3 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(62,'Project Runway','Aspiring fashion designers compete in challenges that test their ingenuity, reveal their personal aesthetics and determine who\'s in -- and who\'s out.','img/sm-runway.jpg','img/md-runway.jpg',2010,'13+','2 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(63,'Ratatouille','Growing up with a renowned chef as his idol, Remy the rat develops a taste for fine food. But his culinary ambitions only anger his practical father.','img/sm-rat.jpg','img/md-rat.jpg',2007,'7+','1h 51m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(64,'Re:Mind','Eleven high school classmates awaken, restrained to a large dining room. While fearing for their lives, they question a motive to this bizarre act.','img/sm-remind.jpg','img/md-remind.jpg',2017,'13+','1 Season','2018-04-12 03:30:41','2018-04-12 03:30:41'),(65,'Requiem','In the wake of a sudden tragedy, a London cellist unearths secrets that link her mother to the disappearance of a young girl in a small Welsh town.','img/sm-requiem.jpg','img/md-requiem.jpg',2018,'16+','1 Season','2018-04-12 03:30:41','2018-04-12 03:30:41'),(66,'Riverdale','While navigating the troubled waters of sex, romance, school and family, teen Archie and his gang become entangled in a dark Riverdale mystery.','img/sm-riverdale.jpg','img/md-riverdale.jpg',2018,'16+','2 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(67,'Red Carpet','Dreaming of a box-office hit, an adult-movie director teams up with his crew of three misfits to lure a top actress into starring in his new film.','img/sm-redcarpet.jpg','img/md-redcarpet.jpg',2014,'16+','1h 57m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(68,'Rotten','This docuseries travels deep into the heart of the food supply chain to reveal unsavory truths and expose hidden forces that shape what we eat.','img/sm-rotten.jpg','img/md-rotten.jpg',2018,'13+','1 Season','2018-04-12 03:30:41','2018-04-12 03:30:41'),(69,'Santa Clarita Diet','They\'re ordinary husband and wife realtors until she undergoes a dramatic change that sends them down a road of death and destruction. In a good way.','img/sm-santa.jpg','img/md-santa.jpg',2018,'16+','2 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(70,'Soul Eater','Maka and the other students at the Death Weapon Meister Academy must kill 99 evil humans and one witch, absorbing their spirits when they die.','img/sm-souleater.jpg','img/md-souleater.jpg',2009,'16+','4 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(71,'Sherlock Holmes','Robert Downey Jr. stars as the legendary sleuth Sherlock Holmes in this Guy Ritchie-helmed reinvention of Sir Arthur Conan Doyle\'s detective series.','img/sm-sherlock.jpg','img/md-sherlock.jpg',2009,'16+','2h 8m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(72,'Shimmer Lake','Unfolding in reverse time, this darkly comic crime thriller follows a local sheriff hunting three bank robbery suspects, one of whom is his brother.','img/sm-shimmer.jpg','img/md-shimmer.jpg',2017,'16+','1h 26m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(73,'Star Wars: Episode VII: The Force Awakens','As the renegade First Order searches for Luke Skywalker, a scavenger and an ex-stormtrooper join forces with a determined droid to find him first.','img/sm-starwars.jpg','img/md-starwars.jpg',2015,'13+','2h 18m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(74,'Stranger Things','When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl.','img/sm-stranger.jpg','img/md-stranger.jpg',2017,'16+','2 Seasons','2018-04-12 03:30:41','2018-04-12 03:30:41'),(75,'Steel Rain','Amid a coup, a North Korean agent escapes south with the country\'s injured leader in an attempt to keep him alive and prevent a Korean war.','img/sm-steel.jpg','img/md-steel.jpg',2018,'16+','2h 19m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(76,'Tabula Rasa','When a young woman with amnesia becomes a key figure in a missing persons case, she must reconstruct her memories to clear her name.','img/sm-tabula.jpg','img/md-tabula.jpg',2017,'16+','1 Season','2018-04-12 03:30:41','2018-04-12 03:30:41'),(77,'Tangerine','Fresh out of a stint in jail, transgender prostitute Sin-Dee and her pal Alexandra hit the crazy streets of LA to get revenge on her fickle pimp.','img/sm-tangerine.jpg','img/md-tangerine.jpg',2015,'16+','1h 27m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(78,'The Avengers','An all-star lineup of superheroes -- including Iron Man, the Incredible Hulk and Captain America -- team up to save the world from certain doom.','img/sm-theavengers.jpg','img/md-theavengers.jpg',2012,'13+','2h 24m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(79,'The Canal','A film archivist sees footage revealing that his happy home was once the scene of a gruesome murder, which casts evil shadows upon his present life.','img/sm-thecanal.jpg','img/md-thecanal.jpg',2014,'16+','1h 33m','2018-04-12 03:30:41','2018-04-12 03:30:41'),(80,'The Chase','After people in his town start turning up dead, a grumpy landlord is visited by a man who recounts an unsolved serial murder case from 30 years ago.','img/sm-thechase.jpg','img/md-thechase.jpg',2017,'16+','1h 50m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(81,'The Crown','This drama follows the political rivalries and romance of Queen Elizabeth II\'s reign and the events that shaped the second half of the 20th century.','img/sm-thecrown.jpg','img/md-thecrown.jpg',2017,'16+','2 Seasons','2018-04-12 03:30:42','2018-04-12 03:30:42'),(82,'The Do-Over','The life of a bank manager is turned upside down when a friend from his past manipulates him into faking his own death and taking off on an adventure.','img/sm-thedoover.jpg','img/md-thedoover.jpg',2016,'16+','1h 48m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(83,'The End of the F***ing World','A budding teen psychopath and a rebel hungry for adventure embark on a star-crossed road trip in this darkly comic series based on a graphic novel.','img/sm-theend.jpg','img/md-theend.jpg',2017,'16+','1 Season','2018-04-12 03:30:42','2018-04-12 03:30:42'),(84,'The Garden of Words','When a lonely teenager skips his morning classes to sit in a lovely garden, he meets a mysterious older woman who shares his feelings of alienation.','img/sm-thegarden.jpg','img/md-thegarden.jpg',2013,'7+','46m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(85,'The Godfather','When an organized-crime family patriarch barely survives an attempt on his life, his youngest son steps in to take care of the would-be killers.','img/sm-thegodfather.jpg','img/md-thegodfather.jpg',1972,'16+','2h 57m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(86,'The Host','A mutant creature has developed from toxic chemical dumping. When the monster scoops up the daughter of a snack-bar owner, he races to save her.','img/sm-thehost.jpg','img/md-thehost.jpg',2006,'16+','1h 59m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(87,'The Hot Chick','A cheerleader\'s shallowness gets her in trouble when she steals a cursed set of earrings and winds up trapped in the body of a 30-year-old male loser.','img/sm-thehotchick.jpg','img/md-thehotchick.jpg',2002,'13+','1h 44m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(88,'The Invitation','A man accepts an invitation to a dinner party hosted by his ex-wife, an unsettling affair that reopens old wounds and creates new tensions.','img/sm-theinvitation.jpg','img/md-theinvitation.jpg',2015,'16+','1h 40m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(89,'The Iron Fist','Danny Rand resurfaces 15 years after being presumed dead. Now, with the power of the Iron Fist, he seeks to reclaim his past and fulfill his destiny.','img/sm-theironfist.jpg','img/md-theironfist.jpg',2017,'16+','1 Season','2018-04-12 03:30:42','2018-04-12 03:30:42'),(90,'The Jungle Book','Mowgli, who\'s been raised in the jungle by wolves, leaves home on an adventure guided by black panther Bagheera and friendly bear Baloo.','img/sm-thejunglebook.jpg','img/md-thejunglebook.jpg',2016,'7+','1h 47m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(91,'The Keepers','This docuseries examines the decades-old murder of Sister Catherine Cesnik and its suspected link to a priest accused of abuse.','img/sm-thekeepers.jpg','img/md-thekeepers.jpg',2017,'16+','1 Season','2018-04-12 03:30:42','2018-04-12 03:30:42'),(92,'The Lord of the Rings: The Fellowship of the Ring','From the idyllic shire of the Hobbits to the smoking chasms of Mordor, Frodo Baggins embarks on his epic quest to destroy the ring of Sauron.','img/sm-thelotr.jpg','img/md-thelotr.jpg',2001,'13+','2h 58m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(93,'The Proposal','When an overbearing book editor learns she\'s in danger of losing her visa status and may be deported, she forces her put-upon assistant to marry her.','img/sm-theproposal.jpg','img/md-theproposal.jpg',2009,'13+','1h 48m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(94,'The Shining','Jack Torrance descends into madness -- terrorizing his wife and young son -- after living at a deserted and eerie hotel during its off season.','img/sm-theshining.jpg','img/md-theshining.jpg',1980,'16+','1h 59m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(95,'The Visit','While on a visit to their grandparents\' farm, two kids decide to make a film about their family but soon discover their old kin harbor dark secrets.','img/sm-thevisit.jpg','img/md-thevisit.jpg',2015,'13+','1h 33m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(96,'To the Bone','Ellen, a 20-year-old with anorexia nervosa, goes on a harrowing, sometimes funny journey of self-discovery at a group home run by an unusual doctor.','img/sm-tothebone.jpg','img/md-tothebone.jpg',2017,'16+','1h 47m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(97,'Today\'s Special','A haute cuisine chef dreams of cooking in Paris, but an emergency forces him to take over his family\'s shabby Indian restaurant in Queens.','img/sm-today.jpg','img/md-today.jpg',2009,'16+','1h 38m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(98,'Ugly Delicious','All the flavor. None of the BS. Star chef David Chang leads friends on a mouthwatering, cross-cultural hunt for the world\'s most satisfying grub.','img/sm-ugly.jpg','img/md-ugly.jpg',2018,'16+','1 Season','2018-04-12 03:30:42','2018-04-12 03:30:42'),(99,'Veronica','In 1991 Madrid, after holding a séance at school, a teen girl minding her younger siblings at home suspects an evil force has entered their apartment.','img/sm-vero.jpg','img/md-vero.jpg',2017,'16+','1h 45m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(100,'Wedding Crashers','Two buddies know how to use a woman\'s hopes and dreams for their own carnal gain. And their modus operandi? Crashing weddings.','img/sm-wedding.jpg','img/md-wedding.jpg',2005,'16+','1h 59m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(101,'XX','This four-part anthology of short horror films features stories that include some traditional themes but all are shown from a female point of view.','img/sm-xx.jpg','img/md-xx.jpg',2017,'16+','1h 20m','2018-04-12 03:30:42','2018-04-12 03:30:42'),(102,'You Again','Before wedding bells toll, Marni must show her brother -- who\'s engaged to Marni\'s high school tormenter -- that a tiger doesn\'t change its stripes.','img/sm-youagain.jpg','img/md-youagain.jpg',2010,'7+','1h 45m','2018-04-12 03:30:42','2018-04-12 03:30:42');
/*!40000 ALTER TABLE `flicks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `follower_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `followers_user_id_foreign` (`user_id`),
  KEY `followers_follower_id_foreign` (`follower_id`),
  CONSTRAINT `followers_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `followers`
--

LOCK TABLES `followers` WRITE;
/*!40000 ALTER TABLE `followers` DISABLE KEYS */;
/*!40000 ALTER TABLE `followers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Action','2018-04-12 03:30:33','2018-04-12 03:30:33'),(2,'Anime','2018-04-12 03:30:33','2018-04-12 03:30:33'),(3,'Asian','2018-04-12 03:30:33','2018-04-12 03:30:33'),(4,'British','2018-04-12 03:30:33','2018-04-12 03:30:33'),(5,'Comedy','2018-04-12 03:30:33','2018-04-12 03:30:33'),(6,'Crime','2018-04-12 03:30:33','2018-04-12 03:30:33'),(7,'Documentary','2018-04-12 03:30:33','2018-04-12 03:30:33'),(8,'Drama','2018-04-12 03:30:33','2018-04-12 03:30:33'),(9,'Horror','2018-04-12 03:30:33','2018-04-12 03:30:33'),(10,'Kids','2018-04-12 03:30:33','2018-04-12 03:30:33'),(11,'Mystery','2018-04-12 03:30:33','2018-04-12 03:30:33'),(12,'Reality Show','2018-04-12 03:30:33','2018-04-12 03:30:33'),(13,'Romance','2018-04-12 03:30:33','2018-04-12 03:30:33'),(14,'Sci-Fi & Fantasy','2018-04-12 03:30:33','2018-04-12 03:30:33'),(15,'Thriller','2018-04-12 03:30:33','2018-04-12 03:30:33');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_03_28_114040_create_genres_table',1),(4,'2018_03_28_114041_create_flicks_table',1),(5,'2018_03_28_123214_create_followers_table',1),(6,'2018_04_03_102140_create_flick_genre_table',1),(7,'2018_04_11_043413_create_bingelists_table',1),(8,'2018_04_11_043414_create_comments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Scottie Dickinson II','freeda63@example.org','rosetta89','$2y$10$vADRYe53KLyjtvCsTz75XO3QCVUEf1RijES/7zNF.v1asp0hIew1C','1991-03-18','https://lorempixel.com/300/300/cats/?26651',NULL,'2018-04-12 03:30:25','2018-04-12 03:30:25'),(2,'Lazaro Bahringer III','fritsch.marcos@example.org','edicki','$2y$10$EiV7OWxOsPdsUfK.U5rGMuLRa2p216ZNy8NMkaHkjx1GnTBq8j7du','1978-01-13','https://lorempixel.com/300/300/cats/?64520',NULL,'2018-04-12 03:30:25','2018-04-12 03:30:25'),(3,'Sincere Gaylord Jr.','estella32@example.com','geovanni.rempel','$2y$10$u3KGgFjcONIGsAwJAXOHMe1oY4CUwLplVFtlB/l914xd64TgJRmr2','1987-02-14','https://lorempixel.com/300/300/cats/?45371',NULL,'2018-04-12 03:30:25','2018-04-12 03:30:25'),(4,'Laverna Cruickshank','abigale18@example.com','chad.turner','$2y$10$JCtXCnPvyFOf9Fr9WqgTaOjUG5JTepjrYwAVgJi.cuY94IKobH3ES','1991-11-25','https://lorempixel.com/300/300/cats/?32286',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(5,'Dr. Colby Jast DDS','schulist.alessia@example.net','christop29','$2y$10$95j30dWQCUtGL2lhoCSsFOt5bkcL9zvVr1mB0uoSE6U5bZpM00wzS','1976-11-03','https://lorempixel.com/300/300/cats/?97308',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(6,'Colin Tillman','mohammad.kohler@example.org','jovany00','$2y$10$eBv.SVVco1AaY3e8MA5qEuqIUnhigm8dv5N5XWCAT8YLKUvBasidC','1976-10-25','https://lorempixel.com/300/300/cats/?45588',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(7,'Miss Rosina Schmitt','fwiza@example.net','harris.xander','$2y$10$.IgvH7kqayEd5j1uA2c2e.lpwfkOPlFz2gtVqCMkdPpHlcWTSfYgC','1993-12-25','https://lorempixel.com/300/300/cats/?14915',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(8,'Adaline Schuppe','monahan.sydni@example.net','isabella.russel','$2y$10$foLUO66Go44hdWmffsVg5.ccFvBNT72GTMEStLE.D0rdQv2JAE9gO','1972-08-13','https://lorempixel.com/300/300/cats/?74406',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(9,'Ralph Bradtke','magnolia.wisozk@example.org','gabriel33','$2y$10$FZ5ZYF655VjEnZsh6.K0p.AYZCo75MCBxg0zeZWNj2BDrO7fo6QzC','1989-05-09','https://lorempixel.com/300/300/cats/?12579',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(10,'Ralph Bradtke','radams@example.com','abshire.finn','$2y$10$rYi7zlhjTOYDWDi6YttI9u9dnc.hvcIh66Jud.MJ8I.k9M6P/KGv6','1999-10-18','https://lorempixel.com/300/300/cats/?24182',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(11,'Miss Lynn Morar','heaney.erik@example.org','waters.melvina','$2y$10$d6prTP8AAcYCL6gtB6HKz.cqZ1g.cQkaNSejBZRjFIFfcadmZleum','1993-04-07','https://lorempixel.com/300/300/cats/?53883',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(12,'Lelah King','hayes.edgardo@example.com','xgutmann','$2y$10$4a3.W7W/Me7cQkPDI.Vj.ONp/bdxnGWsB.kxQRmcn0h0RcZdH/266','1971-06-27','https://lorempixel.com/300/300/cats/?41319',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(13,'Mr. Columbus Goldner','tremblay.ethelyn@example.com','elza.metz','$2y$10$c0IUDG.oLfZeO4lEY/3qUuQuAYkYUsfQyeiRIIcdXW2XMlRN5TyWy','1979-07-01','https://lorempixel.com/300/300/cats/?37178',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(14,'Ms. Janae Metz III','chasity.harvey@example.org','rdare','$2y$10$5OGwa7UPaa38bfwUAmD28.tVzmq0GGPDqZTtcAyBamVQhknRByt76','1987-08-10','https://lorempixel.com/300/300/cats/?30183',NULL,'2018-04-12 03:30:26','2018-04-12 03:30:26'),(15,'Mrs. Vernice Larson MD','eunice22@example.com','zulauf.grant','$2y$10$KnqOZ363NOrcgXOBSuG4D.5r19puVZEoEoNRcDYKqbTM61xfjhv/S','1995-02-09','https://lorempixel.com/300/300/cats/?31237','UIVaypKJlU5pmzdW2FRG9BnTsgDCPtOPcEYIcfxf9WzrmLDMVULO8z6mE6eH','2018-04-12 03:30:27','2018-04-12 03:30:27'),(16,'Mr. Josiah Greenholt I','goyette.greta@example.net','qullrich','$2y$10$qSk.xhv2r/uzgYvgM6X9yONrExDmQTmfKreCfgYFwoX0Eph4pJmay','1989-04-21','https://lorempixel.com/300/300/cats/?17156',NULL,'2018-04-12 03:30:27','2018-04-12 03:30:27'),(17,'Melany Sawayn','jovanny04@example.org','ispencer','$2y$10$a1DOnhVHhgir.E0kKB7.g.GTJbseN5FJ31JKQ4O9hfLfw4KWloR.K','1997-06-18','https://lorempixel.com/300/300/cats/?10570',NULL,'2018-04-12 03:30:27','2018-04-12 03:30:27'),(18,'Prof. Ruthie Goyette','klocko.rylee@example.com','angie24','$2y$10$Ay48Gl195jrBAR7rQQoHl.jWi3VtXVJMCsHwlL3YZpuaSXNNeEGNe','1973-11-04','https://lorempixel.com/300/300/cats/?54482',NULL,'2018-04-12 03:30:27','2018-04-12 03:30:27'),(19,'Van Watsica','labadie.reid@example.net','jackie54','$2y$10$vAKjwR5vMIr.heKy9zZUt.cB7BjF1uyfIGxvzuCmyCAVmFH0MKsKi','1971-03-29','https://lorempixel.com/300/300/cats/?24853',NULL,'2018-04-12 03:30:27','2018-04-12 03:30:27'),(20,'Dr. Johnny Bruen','osteuber@example.net','jordy.kreiger','$2y$10$Ixi2f8yBeQZHiiHKF68Ihudx8l5aJsWlMFtlgymGt25hKqnkDgtPu','1988-04-20','https://lorempixel.com/300/300/cats/?10569',NULL,'2018-04-12 03:30:27','2018-04-12 03:30:27');
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

-- Dump completed on 2018-04-12 21:33:56
