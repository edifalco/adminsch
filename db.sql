-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'Laravel','2018-03-16 13:37:01','2018-03-16 22:38:31'),(3,'PHP','2018-03-16 13:37:05','2018-03-16 22:38:39'),(4,'Bootstrap','2018-03-16 22:00:54','2018-03-16 22:38:48');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_replies`
--

DROP TABLE IF EXISTS `comment_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment_replies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(10) unsigned NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_replies_comment_id_index` (`comment_id`),
  CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_replies`
--

LOCK TABLES `comment_replies` WRITE;
/*!40000 ALTER TABLE `comment_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_index` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (2,4,1,'Esteban','/images/1521207402man2.jpg','esteban@gmail.com','hello','2018-03-16 21:32:39','2018-03-17 10:54:39'),(3,4,1,'Esteban','/images/1521207402man2.jpg','esteban@gmail.com','second comment','2018-03-26 17:05:22','2018-03-26 17:05:41'),(4,4,1,'Esteban','/images/1521207402man2.jpg','esteban@gmail.com','third comment','2018-03-26 17:42:04','2018-03-26 17:55:37'),(5,4,1,'Esteban','/images/1521207402man2.jpg','esteban@gmail.com','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.','2018-03-26 17:55:03','2018-03-26 17:55:36'),(6,4,1,'Esteban','/images/1521207402man2.jpg','esteban@gmail.com','que lindo que esta la pagina web amor de mi vida!','2018-03-26 19:28:14','2018-03-26 19:28:37');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `features` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `photo_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `features_user_id_index` (`user_id`),
  KEY `features_photo_id_index` (`photo_id`),
  CONSTRAINT `features_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (1,1,16,'Student Management','student-management','Store everything about your students and contacts. Enrolments, details, notes. Never shuffle paper around ever again!','2018-08-02 16:27:56','2018-08-07 13:37:41'),(2,1,44,'Classes & Registers','classes-registers','Groups, one-to-ones, laboratories. All of your enrolments are neatly organised so that you always know who is where and when.','2018-08-08 11:54:45','2018-08-08 11:54:45'),(3,1,50,'Attendance Tracking','attendance-tracking','Precisely record expected vs. attended time, tardiness, authorized absences, and holidays. There\'s no excuse for being disorganized.','2018-08-08 12:45:28','2018-08-08 12:45:28'),(4,1,69,'Teachers Timetable','teachers-timetable','See what your week looks like. Assign lessons and manage substitutions and cancellations.  All is crystal clear with the shared timetable.','2018-08-09 11:28:42','2018-08-09 11:28:42'),(5,1,76,'Payments & Receipts','payments-receipts','Manage your cash flow and never miss a payment with automated reminders. Print beautiful receipts and invoices.','2018-08-09 11:42:37','2018-08-09 11:42:37'),(6,1,82,'Documents','documents','Never lose a document with unlimited online storage and avoid repetitive work with pre-filled letters and contracts for your students.','2018-08-09 11:48:34','2018-08-09 11:48:34'),(7,1,87,'Stats & Reports','stats-reports','Performance metrics help you understand how your business is doing. We give you the hard data you need to make strategic decisions.','2018-08-09 11:55:25','2018-08-09 11:55:25'),(8,1,92,'Email & SMSes','email-smses','Send bulk emails and SMSes to your students. Re-engage old customers and keep everyone in the loop with timely communications.','2018-08-09 12:03:45','2018-08-09 12:03:45'),(9,1,97,'Accommodation','accommodation','Match students with host families, manage bookings, payments, and periods of stay.','2018-08-09 12:09:05','2018-08-09 12:09:05'),(10,1,98,'Planning Tools','planning-tools','Plan your resources ahead of time with NiftySchool\'s planners. Know when rooms are free or when to open a new class.','2018-08-09 12:10:00','2018-08-09 12:10:00'),(11,1,99,'Staff Management','staff-management','Grant access to your staff with specific permission levels. They can only see and change what you want them to.','2018-08-09 12:10:54','2018-08-09 12:10:54'),(12,1,100,'Multiple Branches','multiple-branches','Manage multiple branches with a single login. The perfect solution for franchises and schools with offices in more than one city.','2018-08-09 12:11:44','2018-08-09 12:11:44');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'Esteban','esteban@gmail.com',NULL,NULL,'test','2018-08-25 17:07:55','2018-08-25 17:07:55'),(2,'Esteban','esteban@gmail.com','school','website','Lorem ipsum dolor sit amet, consectetuer adipiscing elit,\r\nsed diam nonummy nibh euismod tincidunt ut laoreet dolore\r\nmagna aliquam erat volutpat. Ut wisi enim ad minim veniam,\r\nquis nostrud exerci tation ullamcorper suscipit lobortis nisl\r\nut aliquip ex ea commodo consequat. Duis autem vel eum iriure\r\ndolor in hendrerit in vulputate velit esse molestie consequat,\r\nvel illum dolore eu feugiat nulla facilisis at vero eros et\r\naccumsan et iusto odio dignissim qui blandit praesent luptatum\r\nzzril delenit augue duis dolore te feugait nulla facilisi.\r\nNam liber tempor cum soluta nobis eleifend option congue\r\nnihil imperdiet doming id quod mazim placerat facer possim\r\nassum. Typi non habent claritatem insitam; est usus legentis\r\nin iis qui facit eorum claritatem. Investigationes\r\ndemonstraverunt lectores legere me lius quod ii legunt saepius.\r\nClaritas est etiam processus dynamicus, qui sequitur mutationem\r\nconsuetudium lectorum. Mirum est notare quam littera gothica,\r\nquam nunc putamus parum claram, anteposuerit litterarum formas\r\nhumanitatis per seacula quarta decima et quinta decima. Eodem\r\nmodo typi, qui nunc nobis videntur parum clari, fiant sollemnes\r\nin futurum.','2018-08-25 17:49:40','2018-08-25 17:49:40'),(3,'Isa','isa@gmail.com',NULL,NULL,'test','2018-09-05 08:53:35','2018-09-05 08:53:35');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (19,'2014_10_12_000000_create_users_table',1),(20,'2014_10_12_100000_create_password_resets_table',1),(21,'2018_03_16_112943_create_roles_table',1),(22,'2018_03_16_112954_create_posts_table',1),(23,'2018_03_16_113002_create_categories_table',1),(24,'2018_03_16_113022_create_photos_table',1),(25,'2018_03_16_113035_create_comments_table',1),(26,'2018_03_16_133428_create_comment_replies_table',1),(27,'2018_08_02_155454_create_features_table',2),(28,'2018_08_07_135334_create_subfeatures_table',3),(31,'2018_08_25_142515_create_messages_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('estebandifalco@gmail.com','$2y$10$S0.oD6uOsWlDa2ZBEegnyenWPPxWx9egDRY78VE4.9E5WcyI0mee.','2018-08-09 17:58:45'),('esteban@gmail.com','$2y$10$S.4OmWptWhXAUvqK83cqfuUJMQ9leWBPl4s43aEgbU8H/vt9n8hqO','2018-08-09 18:05:55');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'1521207402man2.jpg','2018-03-16 13:36:42','2018-03-16 13:36:42'),(6,'1521235936laravel-900x300.jpg','2018-03-16 21:32:16','2018-03-16 21:32:16'),(7,'1521556838bootstrap-900x300.jpg','2018-03-20 14:40:38','2018-03-20 14:40:38'),(8,'1521573357man3.jpg','2018-03-20 19:15:57','2018-03-20 19:15:57'),(9,'1521578167woman2.jpg','2018-03-20 20:36:07','2018-03-20 20:36:07'),(10,'1522075503laravel-900x300.jpg','2018-03-26 14:45:03','2018-03-26 14:45:03'),(11,'1522082526php-900x300.jpg','2018-03-26 16:42:06','2018-03-26 16:42:06'),(12,'1522082590bootstrap-900x300.jpg','2018-03-26 16:43:10','2018-03-26 16:43:10'),(13,'1533226914student-info.png','2018-08-02 16:21:54','2018-08-02 16:21:54'),(14,'1533227146student-info.png','2018-08-02 16:25:46','2018-08-02 16:25:46'),(15,'1533227276student-info.png','2018-08-02 16:27:56','2018-08-02 16:27:56'),(16,'1533298750students_616px-97a1a7fa38da907535d1f0a23dfd7821.jpg','2018-08-03 12:19:10','2018-08-03 12:19:10'),(17,'1533655952invoice.png','2018-08-07 15:32:32','2018-08-07 15:32:32'),(18,'1533656129invoice.png','2018-08-07 15:35:29','2018-08-07 15:35:29'),(19,'1533656206invoice.png','2018-08-07 15:36:46','2018-08-07 15:36:46'),(20,'1533656225invoice.png','2018-08-07 15:37:05','2018-08-07 15:37:05'),(21,'1533656245invoice.png','2018-08-07 15:37:25','2018-08-07 15:37:25'),(22,'1533656313invoice.png','2018-08-07 15:38:33','2018-08-07 15:38:33'),(23,'1533656560invoice.png','2018-08-07 15:42:40','2018-08-07 15:42:40'),(24,'1533657202invoice.png','2018-08-07 15:53:22','2018-08-07 15:53:22'),(25,'1533657261invoice.png','2018-08-07 15:54:21','2018-08-07 15:54:21'),(26,'1533657304invoice.png','2018-08-07 15:55:04','2018-08-07 15:55:04'),(27,'1533657424invoice.png','2018-08-07 15:57:04','2018-08-07 15:57:04'),(28,'1533657494invoice.png','2018-08-07 15:58:14','2018-08-07 15:58:14'),(29,'1533657675invoice.png','2018-08-07 16:01:15','2018-08-07 16:01:15'),(30,'1533722359elements.png','2018-08-08 09:59:19','2018-08-08 09:59:19'),(31,'1533722695elements.png','2018-08-08 10:04:55','2018-08-08 10:04:55'),(32,'1533723509elements.png','2018-08-08 10:18:29','2018-08-08 10:18:29'),(33,'1533723931elements.png','2018-08-08 10:25:31','2018-08-08 10:25:31'),(34,'1533724017elements.png','2018-08-08 10:26:57','2018-08-08 10:26:57'),(35,'1533724051checkout.png','2018-08-08 10:27:31','2018-08-08 10:27:31'),(36,'1533724158checkout.png','2018-08-08 10:29:18','2018-08-08 10:29:18'),(37,'1533724216checkout.png','2018-08-08 10:30:16','2018-08-08 10:30:16'),(38,'1533724245checkout.png','2018-08-08 10:30:45','2018-08-08 10:30:45'),(39,'1533726584checkout.png','2018-08-08 11:09:44','2018-08-08 11:09:44'),(40,'1533728848invoice.png','2018-08-08 11:47:28','2018-08-08 11:47:28'),(41,'1533728890invoice.png','2018-08-08 11:48:10','2018-08-08 11:48:10'),(42,'1533729110students.jpg','2018-08-08 11:51:50','2018-08-08 11:51:50'),(43,'1533729264classes.jpg','2018-08-08 11:54:24','2018-08-08 11:54:24'),(44,'1533729285classes.jpg','2018-08-08 11:54:45','2018-08-08 11:54:45'),(45,'1533729365classes-sub.jpg','2018-08-08 11:56:05','2018-08-08 11:56:05'),(46,'1533731620classes-sub.jpg','2018-08-08 12:33:40','2018-08-08 12:33:40'),(47,'1533731979classes-sub.jpg','2018-08-08 12:39:39','2018-08-08 12:39:39'),(48,'1533732078printable.jpg','2018-08-08 12:41:18','2018-08-08 12:41:18'),(49,'1533732159printable.jpg','2018-08-08 12:42:39','2018-08-08 12:42:39'),(50,'1533732328attendance.jpg','2018-08-08 12:45:28','2018-08-08 12:45:28'),(51,'1533738818history-enrolments.jpg','2018-08-08 14:33:38','2018-08-08 14:33:38'),(52,'1533738887uptodate-attendance.jpg','2018-08-08 14:34:47','2018-08-08 14:34:47'),(53,'1533738981poor-attendance-alert.jpg','2018-08-08 14:36:21','2018-08-08 14:36:21'),(54,'1533739071authorized-absences.jpg','2018-08-08 14:37:51','2018-08-08 14:37:51'),(55,'1533808390students-01.jpg','2018-08-09 09:53:10','2018-08-09 09:53:10'),(56,'1533808533students-02.jpg','2018-08-09 09:55:33','2018-08-09 09:55:33'),(57,'1533808548students-03.jpg','2018-08-09 09:55:48','2018-08-09 09:55:48'),(58,'1533808562students-04.jpg','2018-08-09 09:56:02','2018-08-09 09:56:02'),(59,'1533812813classes-01.jpg','2018-08-09 11:06:53','2018-08-09 11:06:53'),(60,'1533813556classes-02.jpg','2018-08-09 11:19:16','2018-08-09 11:19:16'),(61,'1533813580classes-03.jpg','2018-08-09 11:19:40','2018-08-09 11:19:40'),(62,'1533813616classes-04.jpg','2018-08-09 11:20:16','2018-08-09 11:20:16'),(63,'1533813637classes-05.jpg','2018-08-09 11:20:37','2018-08-09 11:20:37'),(64,'1533813822attendance-01.jpg','2018-08-09 11:23:42','2018-08-09 11:23:42'),(65,'1533813849attendance-02.jpg','2018-08-09 11:24:09','2018-08-09 11:24:09'),(66,'1533813862attendance-03.jpg','2018-08-09 11:24:22','2018-08-09 11:24:22'),(67,'1533813875attendance-04.jpg','2018-08-09 11:24:35','2018-08-09 11:24:35'),(68,'1533813947timetable.jpg','2018-08-09 11:25:47','2018-08-09 11:25:47'),(69,'1533814122timetable.jpg','2018-08-09 11:28:42','2018-08-09 11:28:42'),(70,'1533814359timetable-01.jpg','2018-08-09 11:32:39','2018-08-09 11:32:39'),(71,'1533814569timetable-01.jpg','2018-08-09 11:36:09','2018-08-09 11:36:09'),(72,'1533814632timetable-01.jpg','2018-08-09 11:37:12','2018-08-09 11:37:12'),(73,'1533814722timetable-02.jpg','2018-08-09 11:38:42','2018-08-09 11:38:42'),(74,'1533814783timetable-03.jpg','2018-08-09 11:39:43','2018-08-09 11:39:43'),(75,'1533814835timetable-04.jpg','2018-08-09 11:40:35','2018-08-09 11:40:35'),(76,'1533814957payments.jpg','2018-08-09 11:42:37','2018-08-09 11:42:37'),(77,'1533815056payments-01.jpg','2018-08-09 11:44:16','2018-08-09 11:44:16'),(78,'1533815086payments-02.jpg','2018-08-09 11:44:46','2018-08-09 11:44:46'),(79,'1533815122payments-03.jpg','2018-08-09 11:45:22','2018-08-09 11:45:22'),(80,'1533815148payments-04.jpg','2018-08-09 11:45:48','2018-08-09 11:45:48'),(81,'1533815175payments-05.jpg','2018-08-09 11:46:15','2018-08-09 11:46:15'),(82,'1533815314documents_plus_agreement.jpg','2018-08-09 11:48:34','2018-08-09 11:48:34'),(83,'1533815414documents-01.jpg','2018-08-09 11:50:14','2018-08-09 11:50:14'),(84,'1533815477documents-02.jpg','2018-08-09 11:51:17','2018-08-09 11:51:17'),(85,'1533815508documents-03.jpg','2018-08-09 11:51:48','2018-08-09 11:51:48'),(86,'1533815535documents-04.jpg','2018-08-09 11:52:15','2018-08-09 11:52:15'),(87,'1533815725reports.jpg','2018-08-09 11:55:25','2018-08-09 11:55:25'),(88,'1533815824reports-01.jpg','2018-08-09 11:57:04','2018-08-09 11:57:04'),(89,'1533815852reports-02.jpg','2018-08-09 11:57:32','2018-08-09 11:57:32'),(90,'1533815881reports-03.jpg','2018-08-09 11:58:01','2018-08-09 11:58:01'),(91,'1533815910reports-04.jpg','2018-08-09 11:58:30','2018-08-09 11:58:30'),(92,'1533816225email.jpg','2018-08-09 12:03:45','2018-08-09 12:03:45'),(93,'1533816316email-01.jpg','2018-08-09 12:05:16','2018-08-09 12:05:16'),(94,'1533816324email-01.jpg','2018-08-09 12:05:24','2018-08-09 12:05:24'),(95,'1533816433email-02.jpg','2018-08-09 12:07:13','2018-08-09 12:07:13'),(96,'1533816464email-03.jpg','2018-08-09 12:07:44','2018-08-09 12:07:44'),(97,'1533816545accommodation.jpg','2018-08-09 12:09:05','2018-08-09 12:09:05'),(98,'1533816600room_planner.jpg','2018-08-09 12:10:00','2018-08-09 12:10:00'),(99,'1533816654staff.jpg','2018-08-09 12:10:54','2018-08-09 12:10:54'),(100,'1533816704branches.jpg','2018-08-09 12:11:44','2018-08-09 12:11:44'),(101,'1533816828accommodation-01.jpg','2018-08-09 12:13:48','2018-08-09 12:13:48'),(102,'1533816860accommodation-02.jpg','2018-08-09 12:14:20','2018-08-09 12:14:20'),(103,'1533816886accommodation-03.jpg','2018-08-09 12:14:46','2018-08-09 12:14:46'),(104,'1533816945planners-01.jpg','2018-08-09 12:15:45','2018-08-09 12:15:45'),(105,'1533816973planners-02.jpg','2018-08-09 12:16:13','2018-08-09 12:16:13'),(106,'1533817063staff-01.jpg','2018-08-09 12:17:43','2018-08-09 12:17:43'),(107,'1533817094staff-02.jpg','2018-08-09 12:18:14','2018-08-09 12:18:14'),(108,'1533817124staff-03.jpg','2018-08-09 12:18:44','2018-08-09 12:18:44'),(109,'1533817155staff-04.jpg','2018-08-09 12:19:15','2018-08-09 12:19:15'),(110,'1533817235branches-01.jpg','2018-08-09 12:20:35','2018-08-09 12:20:35'),(111,'1533817261branches-02.jpg','2018-08-09 12:21:01','2018-08-09 12:21:01'),(112,'1533818978branches-03.jpg','2018-08-09 12:49:38','2018-08-09 12:49:38'),(113,'1533819010branches-04.jpg','2018-08-09 12:50:10','2018-08-09 12:50:10');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `photo_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_index` (`user_id`),
  KEY `posts_category_id_index` (`category_id`),
  KEY `posts_photo_id_index` (`photo_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (4,1,2,10,'laravel','laravel','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.','2018-03-16 21:32:16','2018-08-10 17:35:58'),(5,1,3,7,'PHP','php','PHP content Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.','2018-03-20 14:40:38','2018-08-11 16:18:31'),(6,1,4,12,'Bootstrap','bootstrap','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.','2018-03-20 20:36:07','2018-08-10 18:43:49'),(7,1,3,11,'Learning PHP','learning-php','Learning PHP content Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.','2018-03-26 16:42:06','2018-08-11 16:19:09');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator',NULL,NULL),(2,'Author',NULL,NULL),(3,'Subscriber',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subfeatures`
--

DROP TABLE IF EXISTS `subfeatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subfeatures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `feature_id` int(10) unsigned NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subfeatures_feature_id_index` (`feature_id`),
  CONSTRAINT `subfeatures_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subfeatures`
--

LOCK TABLES `subfeatures` WRITE;
/*!40000 ALTER TABLE `subfeatures` DISABLE KEYS */;
INSERT INTO `subfeatures` VALUES (1,1,1,'Esteban','All That Matters at a Glance',55,'Student information is neatly organized. Store pictures, addresses and other details in a single place so that your files are never out of date.',1,'2018-08-07 14:47:58','2018-08-09 09:53:10'),(2,1,1,'Esteban','Automatic Student Reports',56,'NiftySchool generates students reports including enrolments, attendance rates, test results, payments and more. It can also generate contracts on the fly.',0,'2018-08-07 15:21:31','2018-08-09 09:55:33'),(4,1,1,'Esteban','Enquiries, Contacts & Follow-Ups',57,'Easily track contacts, enquiries, and the interests of your customers. Then set follow-up actions or send bulk emails or SMSes.',0,'2018-08-08 11:48:10','2018-08-09 09:55:48'),(5,1,1,'Esteban','Support for Visa Students',58,'NiftySchool includes special features to manage students who applied for student visas, such as visa/passport expiry alerts, and precise attendance tracking.',0,'2018-08-08 11:51:50','2018-08-09 09:56:02'),(6,2,1,'Esteban','Group Classes',59,'From fixed courses to rolling classes NiftySchool can help you track who should attend and when.<br />\r\nFlexible enrolments allow you to keep history and track students attending multiple classes.',0,'2018-08-08 11:56:05','2018-08-09 11:06:53'),(7,2,1,'Esteban','One-to-Ones',60,'Add private lessons in a snap, track topic covered and cancel or reschedule them when needed. Print lesson lists and have your students sign them to avoid disputes.',0,'2018-08-08 12:33:40','2018-08-09 11:19:16'),(8,2,1,'Esteban','Laboratories & Self-Study',61,'Track time spent in the laboratories for ultra-precise attendance rates. You can also assign weekly goals and record entry/exit times.',0,'2018-08-08 12:39:39','2018-08-09 11:19:40'),(9,2,1,'Esteban','Printable Registers',62,'Beautiful class registers can be printed daily or weekly in a number of formats, so that you can bring them into the classroom and track attendance.',0,'2018-08-08 12:41:18','2018-08-09 11:20:16'),(10,2,1,'Esteban','Support for Callan™ method',63,'NiftySchool has full support for the original Callan Method Two &times; one hour lesson in a row. Setting up these classes has never been easier!',0,'2018-08-08 12:42:39','2018-08-09 11:20:37'),(11,3,1,'Esteban','Keep history of Enrolments',64,'NiftySchool never deletes data about your enrolments. You can always go back in time and check who was in the school during a given period.',0,'2018-08-08 14:33:38','2018-08-09 11:23:42'),(12,3,1,'Esteban','Attendance up to the Minute',65,'You can track presence and lateness up to the minute. Precise attendance rates allow you to issue certificates based on attendance or check Visa students.',0,'2018-08-08 14:34:47','2018-08-09 11:24:09'),(13,3,1,'Esteban','Alerts for Poor Attendance',66,'Thanks to the alerts system, we let you know when a student&#39;s attendance rate drops below 85% or when they miss three lessons in a row.',0,'2018-08-08 14:36:21','2018-08-09 11:24:22'),(14,3,1,'Esteban','Authorized Absences & Holidays',67,'Authorized absence periods and school holidays can be recorded in the system so that they do not affect attendance rates.',0,'2018-08-08 14:37:51','2018-08-09 11:24:35'),(15,4,1,'Esteban','A Bird\'s Eye View of Your Week',72,'Get a clear picture of the week with the lesson timetable. Assign teachers, change times, print it and hang it to your message board for your staff to see.',0,'2018-08-09 11:37:12','2018-08-09 11:37:12'),(16,4,1,'Esteban','Give access to your teachers',73,'Teachers can log in, see their schedule, and track attendance. Configure what they can and cannot see with specific access roles and offload the office\'s tasks.',0,'2018-08-09 11:38:42','2018-08-09 11:38:42'),(17,4,1,'Esteban','Cancel, Reschedule, and Amend Lessons',74,'Create series of lessons in snap, and then amend them individually to handle cancellations, rescheduling and substitutions as you would do in Google Calendar or Outlook.',3,'2018-08-09 11:39:43','2018-08-09 11:39:43'),(18,4,1,'Esteban','Everyone is always up to Date',75,'With a centralised timetable everyone is always up to date. There are no excuses to miss a lesson! Cancellations and substitutions are clearly marked so that they cannot be ignored.',4,'2018-08-09 11:40:35','2018-08-09 11:40:35'),(19,5,1,'Esteban','Payments, Cash Flow & Reminders',77,'Easily record payments, discounts, and refunds. NiftySchool automatically reminds you when payments are due so that you don\'t miss them.\r\nReports help you analyse your cash flow trends.',1,'2018-08-09 11:44:16','2018-08-09 11:44:16'),(20,5,1,'Esteban','Perfect for Bookkeeping',78,'Filter payments by date and download them in Excel format. With receipt numbers, dates, and taxes broken down for you, they are ready to be passed directly to your accountant.',2,'2018-08-09 11:44:46','2018-08-09 11:44:46'),(21,5,1,'Esteban','Print Invoices and Receipts',79,'Receipts and invoices can be printed directly from the system. Customise them with your logo, school name, contact details and extra payment instructions. Also they are available on thermal paper, just like the receipts you receive at the supermarket.',3,'2018-08-09 11:45:22','2018-08-09 11:45:22'),(22,5,1,'Esteban','Daily Cashiers',80,'Get a daily summary of payments received broken down by employee and payment method.\r\nPrint it and have your staff sign it to take responsibility for the money collected.',4,'2018-08-09 11:45:48','2018-08-09 11:45:48'),(23,5,1,'Esteban','Manage Your Inventory',81,'Keep track of inventory for books and other items you sell. Total amounts are automatically decreased whenever you take a payment.',5,'2018-08-09 11:46:15','2018-08-09 11:46:15'),(24,6,1,'Esteban','Your Documents are Safe, Forever.',83,'NiftySchool comes with unlimited storage space for your documents. Save them online and stop worrying about losing them. They are automatically encrypted and backed-up every night. Thanks to our pool of servers they are safer than in your hard drive.',1,'2018-08-09 11:50:14','2018-08-09 11:50:14'),(25,6,1,'Esteban','Shared and up to Date',84,'Being online, your documents can be shared amongst your staff members, so you know everyone can always access the latest version. From home, from the office, from your laptop.',2,'2018-08-09 11:51:17','2018-08-09 11:51:17'),(26,6,1,'Esteban','Generate Letters and Contracts on the Fly',85,'NiftySchool can generate documents on the fly based on Word templates, pulling information from the student\'s file. Contracts, letters and certificates are printed in a snap because the details are automatically filled in for you.',3,'2018-08-09 11:51:48','2018-08-09 11:51:48'),(27,6,1,'Esteban','Automatic student reports',86,'Print beautiful reports for your students: enrolments, attendance summaries, test results, payments and more. You can customise the report with the sections you want.',4,'2018-08-09 11:52:15','2018-08-09 11:52:15'),(28,7,1,'Esteban','A Quick Overview of Your Business',88,'The reporting dashboard gives you a quick understanding of how things are going. Enrolments, payments, contact medias, and so on. Then drill down and analyse specific metrics.',1,'2018-08-09 11:57:04','2018-08-09 11:57:04'),(29,7,1,'Esteban','How did the School do Last Year?',89,'NiftySchool keeps history of how your school did over time so it is easy to compare months from different years or see long term trends. You can always go back in time and download lists of past students to promote new courses.',2,'2018-08-09 11:57:32','2018-08-09 11:57:32'),(30,7,1,'Esteban','Track & Check Your Marketing Efforts',90,'How do customers know about your school? Keep track of your marketing channels over time and gauge if your marketing efforts are paying off. Also, record students sent by agencies so that you can pay them correctly.',3,'2018-08-09 11:58:01','2018-08-09 11:58:01'),(31,7,1,'Esteban','A Wide Range of Metrics',91,'Reports cover a wide range of metrics, from number of enquiries to cache flow and visa students. You can also download full lists of students in Excel format or prepare birthday cards in advance with the birthday report.',4,'2018-08-09 11:58:30','2018-08-09 11:58:30'),(32,8,1,'Esteban','A Helping Hand for Your Email Broadcasts',94,'Active students, leavers, enquiries; it is easy to send communications or promotional emails to people registered in the system. NiftySchool integrates with your email client and sets all of the recipients to BCC so that no private information is ever shared.',1,'2018-08-09 12:05:24','2018-08-09 12:05:24'),(33,8,1,'Esteban','SMSes for Emergencies',95,'You can send SMS messages directly from NiftySchool, which is great if you need to quickly communicate with students, teachers, or host families. SMSes sent from NiftySchool cost less than the standard carrier charges.<small>* SMS are only available in selected countries</small>',2,'2018-08-09 12:07:13','2018-08-09 12:07:13'),(34,8,1,'Esteban','A Comprehensive Set of Filters',96,'The advanced search allows you to precisely select the students you want to target. For example you can send a promotion to students who are only interested in evening classes or contact students waiting for a new course to open.',3,'2018-08-09 12:07:44','2018-08-09 12:07:44'),(35,9,1,'Esteban','Hosts, Rooms and Availabilities',101,'NiftySchool can store all of your host families along with details such as area, pets, children, smokers, and number of beds. We also keep track of availabilities, bookings, and full history of stays.',1,'2018-08-09 12:13:48','2018-08-09 12:13:48'),(36,9,1,'Esteban','Accommodation Search & Matching',102,'Quickly find available rooms that match specific criteria. Looking for a double with a family that can cook dinner and has a broadband connection? Your results are just a click away.',2,'2018-08-09 12:14:20','2018-08-09 12:14:20'),(37,9,1,'Esteban','Accommodation Calendar',103,'Who is staying where right now? Who is booked for next month? The accommodation calendar gives you all of the answers you need to manage your families and students.',3,'2018-08-09 12:14:46','2018-08-09 12:14:46'),(38,10,1,'Esteban','Manage Room Availability',104,'NiftySchool can store all of your host families along with details such as area, pets, children, smokers, and number of beds. We also keep track of availabilities, bookings, and full history of stays.',1,'2018-08-09 12:15:45','2018-08-09 12:15:45'),(39,10,1,'Esteban','Enrolment Planner',105,'The enrolments planner lets you see how many students you will have in the future based on the current enrolments and bookings. Based on these figures, you can decide to open new classes or merge small groups together. Also, an approximate number of seats a day can help you decide when you need to rent extra office space.',2,'2018-08-09 12:16:13','2018-08-09 12:16:13'),(40,11,1,'Esteban','Everyone in the Same System',106,'Grant access to your staff to the system. With one account per employee you can easily see who has done what and revoke access if needed. With everyone working on the same files, you minimise errors and miscommunication.',1,'2018-08-09 12:17:43','2018-08-09 12:17:43'),(41,11,1,'Esteban','Multiple Access Levels',107,'Assign access roles so that your employees can only see and change what you want them to. For example, teachers can see their schedule and track attendance but cannot see student emails and phone numbers, and only administrators can see financial reports.',2,'2018-08-09 12:18:14','2018-08-09 12:18:14'),(42,11,1,'Esteban','Address Book & Easy Communications',108,'Keep staff contact information in the system and use it as a shared address book. You can also use it to send emails to your teachers or your staff in a snap.',3,'2018-08-09 12:18:44','2018-08-09 12:18:44'),(43,11,1,'Esteban','Check Your Employees',109,'NiftySchool keeps track of who has taken payments, uploaded documents, and modified student details. You can also check when your staff last logged in to make sure they have been working when they were supposed to.',4,'2018-08-09 12:19:16','2018-08-09 12:19:16'),(44,12,1,'Esteban','Standardise How Your Branches Work',110,'With NiftySchool you can standardize the way your offices work so that you can focus on growing your business. You can add new branches in seconds and choose which users can access them.',1,'2018-08-09 12:20:35','2018-08-09 12:20:35'),(45,12,1,'Esteban','Monitor Each Branch',111,'Every branch comes with its own reports and metrics so it is easy to compare performances between offices and spot problems earlier. It is perfect for franchises which can even rebrand and sell the system as their own.',2,'2018-08-09 12:21:01','2018-08-09 12:21:01'),(46,12,1,'Esteban','Single Sign On',112,'Choose which users are assigned to the branches so no information is shared between branches without your permission. Gain access with a single login and password and switch between offices with a single click.',3,'2018-08-09 12:49:38','2018-08-09 12:49:38'),(47,12,1,'Esteban','Multiple Branches Cost Less',113,'For each extra branch you get a 50% discount off the standard subscription; you can create real savings by using NiftySchool across all of your offices! Additional discounts apply to schools with more than five offices or large franchises.',4,'2018-08-09 12:50:10','2018-08-09 12:50:10');
/*!40000 ALTER TABLE `subfeatures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-09 22:20:31
