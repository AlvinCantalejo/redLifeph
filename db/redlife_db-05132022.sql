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
-- Table structure for table `r_campaign`
--

DROP TABLE IF EXISTS `r_campaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_campaign` (
  `id` int NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_datetime` datetime DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `photo_filename` varchar(200) DEFAULT NULL,
  `event_details` varchar(500) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_campaign`
--

LOCK TABLES `r_campaign` WRITE;
/*!40000 ALTER TABLE `r_campaign` DISABLE KEYS */;
/*!40000 ALTER TABLE `r_campaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `r_donation`
--

DROP TABLE IF EXISTS `r_donation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donation` (
  `id` int NOT NULL,
  `id_donor` int NOT NULL,
  `id_campaign` int DEFAULT NULL,
  `donation_date` date DEFAULT NULL,
  `eligibility_status` varchar(45) DEFAULT NULL,
  `height` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `eligibility_failed_code` varchar(200) DEFAULT NULL,
  `donation_center` varchar(200) DEFAULT NULL,
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP
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
-- Table structure for table `r_donor`
--

DROP TABLE IF EXISTS `r_donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `r_donor` (
  `id` varchar(50) NOT NULL,
  `id_user` int NOT NULL,
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
  `user_role` varchar(45) DEFAULT 'User',
  `user_status` varchar(45) DEFAULT 'Active',
  `datetime_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r_user`
--

LOCK TABLES `r_user` WRITE;
/*!40000 ALTER TABLE `r_user` DISABLE KEYS */;
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

-- Dump completed on 2022-05-15  1:07:40
