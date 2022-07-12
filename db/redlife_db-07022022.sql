-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: redlifeph
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `r_blood_product`
--

DROP TABLE IF EXISTS `r_blood_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_blood_product` (
  `id` int NOT NULL,
  `id_donor` int DEFAULT NULL,
  `id_donation` int DEFAULT NULL,
  `personnel` varchar(100) DEFAULT NULL,
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_blood_product`
--

LOCK TABLES `r_blood_product` WRITE;
/*!40000 ALTER TABLE `r_blood_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `r_blood_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_donation`
--

DROP TABLE IF EXISTS `r_donation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_donor` int NOT NULL,
  `donation_type` varchar(100) DEFAULT NULL,
  `donation_date` date DEFAULT NULL,
  `donation_location` varchar(200) DEFAULT NULL,
  `eligibility_status` varchar(45) DEFAULT NULL,
  `donation_status` varchar(100) DEFAULT NULL,
  `deferral_reason` varchar(200) DEFAULT NULL,
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_donation`
--

LOCK TABLES `r_donation` WRITE;
/*!40000 ALTER TABLE `r_donation` DISABLE KEYS */;
/*!40000 ALTER TABLE `r_donation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_donation_appointment`
--

DROP TABLE IF EXISTS `r_donation_appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donation_appointment` (
  `id` varchar(100) NOT NULL,
  `id_donor` varchar(100) DEFAULT NULL,
  `id_donation_drive` int DEFAULT '0',
  `appointment_type` varchar(100) DEFAULT NULL,
  `appointment_date` varchar(100) DEFAULT NULL,
  `appointment_time` varchar(45) DEFAULT NULL,
  `appointment_location` varchar(100) DEFAULT NULL,
  `appointment_status` varchar(100) DEFAULT 'Active',
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_donation_appointment`
--

LOCK TABLES `r_donation_appointment` WRITE;
/*!40000 ALTER TABLE `r_donation_appointment` DISABLE KEYS */;
INSERT INTO `r_donation_appointment` VALUES ('20220617-122','AC-20000205-389',0,'in-house','2022-07-16','12:00PM','Dasmariñas Branch','Cancelled','2022-06-17 15:47:02'),('20220620-810','AC-20000205-389',0,'in-house','2022-07-16','11:00AM','Dasmariñas Branch','Active','2022-06-20 15:20:54'),('20220629-987','AC-20000205-389',6,'donation-drive','2022-06-25','9-3','Testing Location','Cancelled','2022-06-29 10:26:49'),('20220701-247','AC-20000205-389',7,'donation-drive','2022-05-24','9AM - 3PM','Testing 2 Location','Cancelled','2022-07-01 15:39:04');
/*!40000 ALTER TABLE `r_donation_appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_donation_drive`
--

DROP TABLE IF EXISTS `r_donation_drive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donation_drive` (
  `id` int NOT NULL AUTO_INCREMENT,
  `event_title` varchar(200) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` varchar(100) DEFAULT NULL,
  `event_location` varchar(200) DEFAULT NULL,
  `photo_filename` varchar(200) DEFAULT NULL,
  `event_details` varchar(500) DEFAULT NULL,
  `posted_by` int DEFAULT NULL,
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_donation_drive`
--

LOCK TABLES `r_donation_drive` WRITE;
/*!40000 ALTER TABLE `r_donation_drive` DISABLE KEYS */;
INSERT INTO `r_donation_drive` VALUES (6,'Test','2022-06-25','9-3','Testing Location','event-test-62b556304ea70.jpeg','Testing Details',3,'2022-06-24 14:14:08'),(7,'Test 2','2022-05-24','9AM - 3PM','Testing 2 Location','--','Testing 2 Details',3,'2022-06-29 22:55:50');
/*!40000 ALTER TABLE `r_donation_drive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_donation_schedule`
--

DROP TABLE IF EXISTS `r_donation_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donation_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `slots` int DEFAULT '10',
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_donation_schedule`
--

LOCK TABLES `r_donation_schedule` WRITE;
/*!40000 ALTER TABLE `r_donation_schedule` DISABLE KEYS */;
INSERT INTO `r_donation_schedule` VALUES (1,'2022-06-18','9:00AM',10,'2022-06-14 08:55:33'),(2,'2022-06-18','10:00AM',9,'2022-06-14 08:55:33'),(3,'2022-06-18','11:00AM',6,'2022-06-14 08:55:33'),(4,'2022-06-18','12:00PM',9,'2022-06-14 08:55:33'),(5,'2022-06-18','1:00PM',10,'2022-06-14 08:55:33'),(6,'2022-06-18','2:00PM',10,'2022-06-14 08:55:33'),(7,'2022-06-25','9:00AM',6,'2022-06-17 13:42:16'),(8,'2022-06-25','10:00AM',10,'2022-06-17 13:42:16'),(9,'2022-06-25','11:00AM',9,'2022-06-17 13:42:16'),(10,'2022-06-25','12:00PM',7,'2022-06-17 13:42:16'),(11,'2022-06-25','1:00PM',10,'2022-06-17 13:42:16'),(12,'2022-06-25','2:00PM',10,'2022-06-17 13:42:16'),(13,'2022-07-23','9:00AM',10,'2022-06-17 16:15:11'),(14,'2022-07-23','10:00AM',10,'2022-06-17 16:15:11'),(15,'2022-07-23','11:00AM',10,'2022-06-17 16:15:11'),(16,'2022-07-23','12:00PM',10,'2022-06-17 16:15:11'),(17,'2022-07-23','1:00PM',10,'2022-06-17 16:15:11'),(18,'2022-07-23','2:00PM',10,'2022-06-17 16:15:11'),(19,'2022-08-27','9:00AM',10,'2022-06-17 16:15:13'),(20,'2022-08-27','10:00AM',10,'2022-06-17 16:15:13'),(21,'2022-08-27','11:00AM',10,'2022-06-17 16:15:13'),(22,'2022-08-27','12:00PM',10,'2022-06-17 16:15:13'),(23,'2022-08-27','1:00PM',10,'2022-06-17 16:15:13'),(24,'2022-08-27','2:00PM',10,'2022-06-17 16:15:13'),(25,'2022-07-30','9:00AM',10,'2022-06-17 16:15:17'),(26,'2022-07-30','10:00AM',10,'2022-06-17 16:15:17'),(27,'2022-07-30','11:00AM',10,'2022-06-17 16:15:17'),(28,'2022-07-30','12:00PM',10,'2022-06-17 16:15:17'),(29,'2022-07-30','1:00PM',10,'2022-06-17 16:15:17'),(30,'2022-07-30','2:00PM',10,'2022-06-17 16:15:17'),(31,'2022-07-16','9:00AM',9,'2022-06-17 16:15:18'),(32,'2022-07-16','10:00AM',10,'2022-06-17 16:15:18'),(33,'2022-07-16','11:00AM',9,'2022-06-17 16:15:18'),(34,'2022-07-16','12:00PM',9,'2022-06-17 16:15:18'),(35,'2022-07-16','1:00PM',10,'2022-06-17 16:15:18'),(36,'2022-07-16','2:00PM',10,'2022-06-17 16:15:18'),(37,'2022-08-06','9:00AM',10,'2022-06-20 15:20:50'),(38,'2022-08-06','10:00AM',9,'2022-06-20 15:20:50'),(39,'2022-08-06','11:00AM',10,'2022-06-20 15:20:50'),(40,'2022-08-06','12:00PM',10,'2022-06-20 15:20:50'),(41,'2022-08-06','1:00PM',10,'2022-06-20 15:20:50'),(42,'2022-08-06','2:00PM',10,'2022-06-20 15:20:50'),(43,'2022-07-09','9:00AM',10,'2022-06-20 15:31:45'),(44,'2022-07-09','10:00AM',10,'2022-06-20 15:31:45'),(45,'2022-07-09','11:00AM',8,'2022-06-20 15:31:45'),(46,'2022-07-09','12:00PM',10,'2022-06-20 15:31:45'),(47,'2022-07-09','1:00PM',10,'2022-06-20 15:31:45'),(48,'2022-07-09','2:00PM',10,'2022-06-20 15:31:45');
/*!40000 ALTER TABLE `r_donation_schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_donor`
--

DROP TABLE IF EXISTS `r_donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donor` (
  `id` varchar(50) NOT NULL,
  `id_user` int NOT NULL,
  `blood_type` varchar(45) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `donor_status` varchar(45) DEFAULT 'Active',
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_user_UNIQUE` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_donor`
--

LOCK TABLES `r_donor` WRITE;
/*!40000 ALTER TABLE `r_donor` DISABLE KEYS */;
INSERT INTO `r_donor` VALUES ('AC-20000205-389',1,'O+','2000-02-05','','Active','2022-06-02 03:18:07'),('BC-20220620-653',5,'O+','2000-05-05','Male','Active','2022-06-20 15:18:38'),('HV-20220617-180',4,'O','1999-09-05','','Active','2022-06-17 12:42:32');
/*!40000 ALTER TABLE `r_donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_request`
--

DROP TABLE IF EXISTS `r_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_request` (
  `id` int NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `form_filename` varchar(100) DEFAULT NULL,
  `request_status` varchar(100) DEFAULT 'Processing',
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone_number_UNIQUE` (`phone_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_request`
--

LOCK TABLES `r_request` WRITE;
/*!40000 ALTER TABLE `r_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `r_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_user`
--

DROP TABLE IF EXISTS `r_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `user_role` varchar(45) NOT NULL DEFAULT 'User',
  `user_status` varchar(45) NOT NULL DEFAULT 'Active',
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_user`
--

LOCK TABLES `r_user` WRITE;
/*!40000 ALTER TABLE `r_user` DISABLE KEYS */;
INSERT INTO `r_user` VALUES (1,'alvinjcantalejo05@gmail.com','e5bac9b8c520b7d3edae29d45a329830','Alvin','Cantalejo','09959344142','User','Active','2022-06-02 03:18:07'),(3,'admin@sample.com','e5bac9b8c520b7d3edae29d45a329830','Admin','Testing','09959344142','Admin','Active','2022-06-05 10:17:12'),(4,'hanniellevalle@gmail.com','e5bac9b8c520b7d3edae29d45a329830','Hanna','Valle','09204977663','User','Active','2022-06-17 12:42:32'),(5,'alvincantalejo24@gmail.com','e5bac9b8c520b7d3edae29d45a329830','Bino','Cantalejo','09959344142','User','Active','2022-06-20 15:18:38');
/*!40000 ALTER TABLE `r_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_user_roles`
--

DROP TABLE IF EXISTS `r_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_user_roles` (
  `user_role` varchar(50) NOT NULL,
  `definition` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_role`),
  UNIQUE KEY `definition_UNIQUE` (`definition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_user_roles`
--

LOCK TABLES `r_user_roles` WRITE;
/*!40000 ALTER TABLE `r_user_roles` DISABLE KEYS */;
INSERT INTO `r_user_roles` VALUES ('Admin','Admin'),('Super Admin','Super Admin'),('User','User');
/*!40000 ALTER TABLE `r_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_user_status`
--

DROP TABLE IF EXISTS `r_user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_user_status` (
  `user_status` varchar(45) NOT NULL,
  `definition` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_status`),
  UNIQUE KEY `definition_UNIQUE` (`definition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_user_status`
--

LOCK TABLES `r_user_status` WRITE;
/*!40000 ALTER TABLE `r_user_status` DISABLE KEYS */;
INSERT INTO `r_user_status` VALUES ('Active','Active'),('Inactive','Inactive');
/*!40000 ALTER TABLE `r_user_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-02 21:03:37
