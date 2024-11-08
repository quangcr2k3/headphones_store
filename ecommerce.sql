-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Bluetooth','2024-10-09 20:17:08','2024-10-09 20:17:08'),(2,'Có dây','2024-10-09 20:17:22','2024-10-09 20:17:22'),(3,'Chụp tai','2024-10-09 20:17:40','2024-10-23 02:50:30'),(4,'Nhét tai','2024-10-09 20:17:45','2024-10-09 20:17:45'),(5,'Gaming','2024-10-09 20:17:49','2024-10-10 00:28:57'),(6,'Thể thao','2024-10-10 00:34:20','2024-10-10 00:34:20');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_10_10_014255_create_categories_table',1),(5,'2024_10_10_034319_create_products_table',2),(6,'2024_10_10_083650_add_role_to_users_table',3),(7,'2024_10_12_090518_create_orders_table',4),(8,'2024_10_12_090536_create_order_items_table',4),(9,'2024_10_13_082558_create_payments_table',5),(10,'2024_10_24_153743_add_image_to_products_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,1,2,3690000,'2024-10-12 02:40:53','2024-10-12 02:40:53'),(2,1,2,1,2990000,'2024-10-12 02:40:53','2024-10-12 02:40:53'),(3,2,3,1,500000,'2024-10-12 02:42:03','2024-10-12 02:42:03'),(4,2,6,3,550000,'2024-10-12 02:42:03','2024-10-12 02:42:03'),(5,3,4,5,1290000,'2024-10-12 02:42:40','2024-10-12 02:42:40'),(6,4,7,10,190000,'2024-10-12 02:43:10','2024-10-12 02:43:10'),(7,5,12,2,4390000,'2024-10-13 01:54:36','2024-10-13 01:54:36'),(8,5,10,1,790000,'2024-10-13 01:54:36','2024-10-13 01:54:36'),(9,6,8,1,6490000,'2024-10-13 01:55:02','2024-10-13 01:55:02'),(10,6,9,3,570000,'2024-10-13 01:55:02','2024-10-13 01:55:02'),(11,7,5,3,360000,'2024-10-13 01:55:23','2024-10-13 01:55:23'),(12,8,2,1,2990000,'2024-10-13 01:59:14','2024-10-13 01:59:14'),(13,9,8,2,6490000,'2024-10-13 02:07:16','2024-10-13 02:07:16'),(14,10,9,3,570000,'2024-10-13 02:07:50','2024-10-13 02:07:50'),(15,11,1,1,3690000,'2024-10-13 02:50:54','2024-10-13 02:50:54'),(16,11,11,1,390000,'2024-10-13 02:50:54','2024-10-13 02:50:54'),(17,12,5,2,360000,'2024-10-13 02:51:13','2024-10-13 02:51:13'),(18,13,6,3,550000,'2024-10-16 10:07:52','2024-10-16 10:07:52'),(19,14,1,3,3690000,'2024-10-17 17:46:56','2024-10-17 17:46:56'),(20,15,3,1,500000,'2024-10-17 17:52:39','2024-10-17 17:52:39'),(21,16,4,1,1290000,'2024-10-17 18:18:05','2024-10-17 18:18:05'),(22,16,6,3,550000,'2024-10-17 18:18:05','2024-10-17 18:18:05'),(23,17,1,1,3690000,'2024-10-17 18:28:52','2024-10-17 18:28:52'),(24,17,4,1,1290000,'2024-10-17 18:28:52','2024-10-17 18:28:52'),(25,18,1,2,3690000,'2024-10-17 19:32:10','2024-10-17 19:32:10'),(26,18,10,1,790000,'2024-10-17 19:32:10','2024-10-17 19:32:10'),(27,19,3,2,500000,'2024-10-17 20:41:37','2024-10-17 20:41:37'),(28,19,7,1,190000,'2024-10-17 20:41:37','2024-10-17 20:41:37'),(29,20,3,1,500000,'2024-10-17 21:08:48','2024-10-17 21:08:48'),(30,21,7,2,190000,'2024-10-21 07:59:14','2024-10-21 07:59:14'),(31,21,1,2,3690000,'2024-10-21 07:59:14','2024-10-21 07:59:14'),(32,22,8,4,6490000,'2024-10-21 08:03:46','2024-10-21 08:03:46'),(33,23,2,2,2990000,'2024-10-23 12:38:24','2024-10-23 12:38:24'),(34,24,4,1,1290000,'2024-10-23 13:26:11','2024-10-23 13:26:11'),(35,25,7,5,190000,'2024-10-23 20:38:49','2024-10-23 20:38:49'),(36,26,13,1,590000,'2024-10-24 14:15:41','2024-10-24 14:15:41'),(37,26,3,1,500000,'2024-10-24 14:15:41','2024-10-24 14:15:41'),(38,26,7,2,190000,'2024-10-24 14:15:41','2024-10-24 14:15:41'),(39,27,2,1,2990000,'2024-10-24 15:09:31','2024-10-24 15:09:31'),(40,28,1,1,3690000,'2024-10-25 03:32:41','2024-10-25 03:32:41'),(41,28,5,3,360000,'2024-10-25 03:32:41','2024-10-25 03:32:41');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `status` enum('processing','paid','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'processing',
  `payment_method` enum('COD','online') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'COD',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,4,10370000,'paid','COD','2024-10-12 02:40:53','2024-10-16 09:58:59'),(2,4,2150000,'paid','COD','2024-10-12 02:42:03','2024-10-16 10:16:13'),(3,6,6450000,'paid','COD','2024-10-12 02:42:40','2024-10-16 10:02:57'),(4,4,1900000,'paid','COD','2024-10-12 02:43:10','2024-10-16 10:23:38'),(5,5,9570000,'paid','online','2024-10-13 01:54:36','2024-10-13 01:56:21'),(6,5,8200000,'paid','online','2024-10-13 01:55:02','2024-10-16 10:23:36'),(7,6,1080000,'paid','online','2024-10-13 01:55:23','2024-10-13 01:56:24'),(8,4,2990000,'paid','online','2024-10-13 01:59:14','2024-10-13 01:59:32'),(9,6,12980000,'processing','COD','2024-10-13 02:07:16','2024-10-23 12:49:57'),(10,4,1710000,'paid','COD','2024-10-13 02:07:50','2024-10-13 02:08:11'),(11,5,4080000,'paid','COD','2024-10-13 02:50:54','2024-10-16 10:15:56'),(12,6,720000,'paid','online','2024-10-13 02:51:13','2024-10-13 02:51:26'),(13,7,1650000,'paid','COD','2024-10-16 10:07:52','2024-10-16 10:16:03'),(14,4,11070000,'paid','online','2024-10-17 17:46:56','2024-10-23 12:36:13'),(15,4,500000,'cancelled','COD','2024-10-17 17:52:39','2024-10-23 12:49:51'),(16,7,2940000,'paid','online','2024-10-17 18:18:05','2024-10-17 21:10:54'),(17,7,4980000,'paid','online','2024-10-17 18:28:52','2024-10-23 12:36:05'),(18,3,8170000,'processing','COD','2024-10-17 19:32:10','2024-10-17 19:32:10'),(19,4,1190000,'paid','COD','2024-10-17 20:41:37','2024-10-17 20:41:48'),(20,3,500000,'cancelled','COD','2024-10-17 21:08:48','2024-10-23 12:35:58'),(21,4,7760000,'processing','COD','2024-10-21 07:59:14','2024-10-21 07:59:14'),(22,4,25960000,'paid','online','2024-10-21 08:03:46','2024-10-23 12:35:54'),(23,7,5980000,'processing','online','2024-10-23 12:38:24','2024-10-23 12:38:24'),(24,3,1290000,'paid','COD','2024-10-23 13:26:11','2024-10-24 15:33:50'),(25,6,950000,'processing','online','2024-10-23 20:38:49','2024-10-23 20:38:49'),(26,3,1470000,'paid','COD','2024-10-24 14:15:41','2024-10-24 15:33:45'),(27,3,2990000,'processing','COD','2024-10-24 15:09:31','2024-10-24 15:09:31'),(28,7,4770000,'processing','COD','2024-10-25 03:32:41','2024-10-25 03:32:41');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_method` enum('COD','online') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'online',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_order_id_foreign` (`order_id`),
  CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,5,9570000,'2024-10-13 08:54:36','online','2024-10-13 01:54:36','2024-10-13 01:54:36'),(2,6,8200000,'2024-10-13 08:55:02','online','2024-10-13 01:55:02','2024-10-13 01:55:02'),(3,7,1080000,'2024-10-13 08:55:23','online','2024-10-13 01:55:23','2024-10-13 01:55:23'),(4,8,2990000,'2024-10-13 08:59:14','online','2024-10-13 01:59:14','2024-10-13 01:59:14'),(5,9,12980000,'2024-10-13 09:07:16','COD','2024-10-13 02:07:16','2024-10-13 02:07:16'),(6,10,1710000,'2024-10-13 09:07:50','COD','2024-10-13 02:07:50','2024-10-13 02:07:50'),(7,11,4080000,'2024-10-13 09:50:54','COD','2024-10-13 02:50:54','2024-10-13 02:50:54'),(8,12,720000,'2024-10-13 09:51:13','online','2024-10-13 02:51:13','2024-10-13 02:51:13'),(9,13,1650000,'2024-10-16 17:07:52','COD','2024-10-16 10:07:52','2024-10-16 10:07:52'),(10,14,11070000,'2024-10-18 00:46:56','online','2024-10-17 17:46:56','2024-10-17 17:46:56'),(11,15,500000,'2024-10-18 00:52:39','COD','2024-10-17 17:52:39','2024-10-17 17:52:39'),(12,16,2940000,'2024-10-18 01:18:05','online','2024-10-17 18:18:05','2024-10-17 18:18:05'),(13,17,4980000,'2024-10-18 01:28:52','online','2024-10-17 18:28:52','2024-10-17 18:28:52'),(14,18,8170000,'2024-10-18 02:32:10','COD','2024-10-17 19:32:10','2024-10-17 19:32:10'),(15,19,1190000,'2024-10-18 03:41:37','COD','2024-10-17 20:41:37','2024-10-17 20:41:37'),(16,20,500000,'2024-10-18 04:08:48','COD','2024-10-17 21:08:48','2024-10-17 21:08:48'),(17,23,5980000,'2024-10-23 19:38:24','online','2024-10-23 12:38:24','2024-10-23 12:38:24'),(18,24,1290000,'2024-10-23 20:26:11','COD','2024-10-23 13:26:11','2024-10-23 13:26:11'),(19,25,950000,'2024-10-23 20:38:49','online','2024-10-23 20:38:49','2024-10-23 20:38:49'),(20,26,1470000,'2024-10-24 14:15:41','COD','2024-10-24 14:15:41','2024-10-24 14:15:41'),(21,27,2990000,'2024-10-24 15:09:31','COD','2024-10-24 15:09:31','2024-10-24 15:09:31'),(22,28,4770000,'2024-10-25 03:32:41','COD','2024-10-25 03:32:41','2024-10-25 03:32:41');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,0) NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Tai nghe Bluetooth True Wireless HUAWEI FreeClip','Huawei Freeclip là tai nghe không dây với thiết kế C-bridge ấn tượng cùng với Driver nam châm kép 10,8 mm mang lại trải nghiệm âm thanh vượt trội. Tai nghe có hai phiên bản màu là đen và tím cùng với đó là nhiều công nghệ âm thanh như âm thanh trực tiếp, âm thanh mở. Bên cạnh đó, sản phẩm tai nghe Huawei này còn sở hữu viên pin lớn mang lại tổng thời gian sử dụng lên đến 36 giờ cùng với đó là khả năng kháng nước và bụi bẩn chuẩn IP54.',3690000,1,'2024-10-10 00:31:24','2024-10-24 09:16:48','1729761408.webp'),(2,'Tai nghe Bluetooth Apple AirPods 2 | Chính hãng Apple Việt Nam','Vừa qua, Apple đã chính thức cho ra mắt chiếc tai nghe Apple Airpods 2 sở hữu chip H1 được dành riêng giúp chuyển nhanh các cuộc gọi từ iPhone sang Airpods cũng như giảm mức tiêu thụ điện năng cực kỳ thấp. Thời gian sử dụng đến 5 giờ nghe nhạc hoặc 3 giờ đàm thoại và khi kết hợp với hộp sạc cho thời gian đến 24 giờ. Kết nối không dây chất lượng cao, tự động bật và luôn kết nối giúp sẵn sàng theo bạn đến bất kỳ đâu',2990000,1,'2024-10-10 00:32:32','2024-10-24 09:21:08','1729761668.webp'),(3,'TAI NGHE APPLE EARPODS CỔNG LIGHTNING CHÍNH HÃNG - MWTY3ZA/A','Tai nghe Lightning Apple Earpods MWTY3ZA/A là một sản phẩm không thể thiếu nếu như các bạn là tín đồ của Apple. Apple Earpods Lightning một sản phẩm tuyệt hảo phù hợp với các dòng điện thoại iPhone, iPad, iPod hỗ trợ iOS 10 trở lên. Đến với CellphoneS để sở hữu một tai nghe Earpods Lightning MWTY3ZA/A tiện lợi cao và các thiết bị âm thanh giá rẻ tốt nhất.',500000,2,'2024-10-10 00:33:23','2024-10-24 09:21:18','1729761678.webp'),(4,'Tai nghe Bluetooth True Wireless JBL Wave Beam','Tai nghe JBL Wave Beam được trang bị trình điều kiển 8mm mang lại âm thanh vượt trội với âm bass sâu kết hợp với thiết kế đóng kín giúp tăng cường hiệu suất âm thanh. Tai nghe được trang bị thiết kế khá vừa vặn cùng với đó là bộ sưu tập màu sắc đa dạng như xanh, đen, trắng và vàng. JBL Wave Beam với công nghệ Smart Ambient cho phép người dùng dễ dàng dễ dàng nghe được âm thanh xung quanh, cùng với đó là tính năng TalkThru hỗ trợ tạm dừng âm nhạc nhanh chóng để tham gia các cuộc trò chuyện với bạn bè.',1290000,4,'2024-10-10 00:35:44','2024-10-24 09:22:23','1729761743.webp'),(5,'Tai nghe có dây Gaming Havit H2037D','Tai nghe có dây Havit H2037D là sản phẩm tai nghe gaming với màng loa 50mm hỗ trợ mang lại âm thanh sống động và mạnh mẽ. Tai nghe chụp tai Havit này với thiết kế tối ưu với vẻ ngoài bắt mắt cùng đèn RGB sống động. Cùng với đó, mẫu tai nghe Havit này với băng đô có thể tùy chỉnh nhờ đó phù hợp cho nhiều hình dạng đầu khác nhau của người dùng.',360000,5,'2024-10-10 00:36:47','2024-10-24 09:32:20','1729762340.webp'),(6,'Tai nghe có dây Gaming Havit H2015E','Tai nghe có dây Havit H2015E được trang bị driver 53mm, thiết kế over-ear thoải mái, đệm tai mềm mại, và đèn LED RGB tạo hiệu ứng ánh sáng bắt mắt. Với micro đàm thoại, dây cáp dài 2.1 mét và jack 3.5mm, mẫu tai nghe Havit này sẽ luôn đảm bảo sự linh hoạt trong sử dụng.',550000,5,'2024-10-10 00:37:30','2024-10-24 09:32:34','1729762354.webp'),(7,'Tai nghe Sony MDR-EX15AP','Tai nghe Sony MDR-EX15AP nói riêngvà các mẫu tai nghe khác nói chung dường như đã trở thành một phụ kiện âm thanh không thể thiếu đối với mọi người. Các sản phẩm tai nghe ngày càng trở nên thông dụng và đa dạng với nhiều kiểu dáng, mẫu mã, giá cả, thương hiệu,…và ai cũng sở hữu riêng cho mình 1 chiếc. Sony – một thương hiệu hàng đầu về điện tử, âm thanh cũng cho ra mắt một sản phẩm tai nghe có dây nghe chất lượng, đáp ứng được nhu cầu của nhiều người mà giá cả lại vô cùng hợp lý .',190000,2,'2024-10-10 00:38:20','2024-10-24 09:33:07','1729762387.webp'),(8,'Tai nghe Bluetooth chụp tai Sony WH-1000XM5','Sony WH-1000XM5 với thiết kế chống ồn dòng cao cấp, được trang bị bộ xử lý QN1. Đây là một trong những tai nghe chụp tai tốt trong phân khúc chống ồn chủ động. Thiết kế đẹp mắt, cá tính và có tính năng hạn chế chống ồn dịu tai. Tai nghe sở hữu thiết kế kiểu choàng đầu phong cách cá tính. Khi không sử dụng, bạn có thể gấp gọn lại và thuận tiện cho bạn mang theo trong công việc hay bất cứ nơi đâu. Đặc biệt, bao bì tai nghe không sử dụng nhựa thay vào đó là các vật liệu tái chế an toàn cho môi trường.',6490000,3,'2024-10-10 00:39:40','2024-10-24 09:33:34','1729762414.webp'),(9,'Tai nghe Bluetooth chụp tai Baseus Bass 35 Max','Tai nghe Baseus Bass 35 Max sở hữu drive kích thước 40mm cùng công nghệ âm thanh Bass Boost, 3D Surround chất lượng. Tai nghe với thiết kế chụp tai thoải mái cùng sự kiện dụng với khả năng gấp gọn. Mẫu tai nghe Baseus này còn bền bỉ sử dụng với viên pin cho thời gian sử dụng lên đến 50 giờ ấn tượng.',570000,3,'2024-10-10 00:40:20','2024-10-24 09:34:18','1729762458.webp'),(10,'Tai nghe Bluetooth thể thao SoundPEATS Runfree','Một trong những thiết bị tai nghe chất lượng tốt đang rất phổ biến trên thị trường hiện nay là tai nghe không dây Soundpeats Runfree. Dòng tai nghe Soundpeats nổi tiếng này được trang bị nhiều công nghệ âm thanh hiện đại cùng vẻ ngoài gọn nhẹ, tinh tế sẽ đem tới cho người dùng những trải nghiệm nghe nhạc, giải trí tuyệt vời nhất.',790000,6,'2024-10-10 00:41:12','2024-10-24 09:34:26','1729762466.webp'),(11,'Tai nghe Bluetooth thể thao dẫn khí truyền âm Soul OPENEAR PLUS','Tai nghe Soul Open-Ear Plus được thiết kế với kiểu dáng nhỏ gọn, giúp bạn dễ dàng sử dụng trong khi tham gia các hoạt động thể thao. Bên cạnh đó, sản phẩm tai nghe thể thao này cũng hỗ trợ bạn tập luyện tốt hơn khi có khả năng phát nhạc với âm thanh sắc nét. Với khả năng kháng nước vượt trội, bạn hoàn toàn yên tâm khi thiết bị sẽ không hư hỏng trong quá trình sử dụng.',390000,6,'2024-10-10 00:41:52','2024-10-24 09:35:08','1729762508.webp'),(12,'Tai nghe Bluetooth True Wireless JBL Tour Pro 2','JBL Tour Pro 2 với thiết kế hộp sạc thông minh cho phép người dùng có thể kiểm soát các cài đặt âm thanh, quản lý cuộc gọi hay phát lại nhạc, đặt báo thức mà không cần điện thoại. Tai nghe JBL Tour Pro 2 được trang bị  4 micrô với cảm biến tiếng ồn giúp tự động khử tiếng ồn theo môi trường giúp người dùng có những trải nghiệm nghe hiệu quả.',4390000,4,'2024-10-10 00:43:07','2024-10-24 09:35:19','1729762519.webp'),(13,'Tai nghe Bluetooth True Wireless Xiaomi Redmi Buds 6 Active','Tai nghe Xiaomi Redmi Buds 6 Active được trang bị trình điều khiển 14.2mm cùng 5 chế độ âm thanh để luôn mang tới chất âm trầm sâu và trải nghiệm nghe tuyệt vời cho người dùng. Mẫu tai nghe Xiaomi này còn có thời lượng hoạt động bền bỉ lên tới 30 giờ cùng khả năng sạc pin nhanh chóng. Với công nghệ Bluetooth 5.4 mới nhất, tốc độ kết nối và độ ổn định, độ trễ của Xiaomi Redmi Buds 6 Active sẽ còn được cải thiện.',590000,1,'2024-10-24 10:02:10','2024-10-24 10:02:10','1729764130.webp');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('BxDWPZl6WBFXZfeEdpp0bWDsPXPcUXsVijjhK5Be',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3lRWkdja2JhVHdyc3dFZElmQ044OGxnZGpUVExrMXZaa0l1eVlLbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=',1729827625),('ZDNqRnXOs1sSJUFXEHcM1Yr8d9Z4ZnBDhs3ffEdS',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaktmRTN2UjA5cjVyNmF2a0RkSmFvYjR3WlM4a3hxd3JUSlp1VmMzNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1729821800);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Admin','admin@example.com',NULL,'$2y$12$.l0X16PIEwaowlnnIXXJWuoCokfQHnvQXqV7m3IxXbZg1CKIJj3e2',NULL,'2024-10-10 02:14:08','2024-10-10 02:14:08','admin'),(4,'Trần Việt Quang','tranvietquang2122003@gmail.com',NULL,'$2y$12$cZR8eEriWbzTA9/3BJ83U.779g4bWg4M/guolKZUhEwvftRNVWPPS',NULL,'2024-10-10 09:24:08','2024-10-10 09:24:08','customer'),(5,'Trần Việt Quang','21111063239@hunre.edu.vn',NULL,'$2y$12$pj0nVIGyLwu4IqfqkygKpOPlhUDkCcCPpbXabkLIHET4MI76YR1Oq',NULL,'2024-10-11 02:11:40','2024-10-11 02:11:40','customer'),(6,'Vũ Trí Cường','vutricuong@gmail.com',NULL,'$2y$12$nSxapZK.6ga5zFhhKcT1Eed8m7IpLhU6t4rzATjIOZrLzLKsIY79i',NULL,'2024-10-12 01:14:24','2024-10-12 01:14:24','customer'),(7,'Nguyễn Thị Bích Hạnh','bichhanhcute@gmail.com',NULL,'$2y$12$LiwZX58Cj2dt5DMLndSea.sbxyW9foRRVtyQkYAJjIOqeyg4TM99q',NULL,'2024-10-16 10:07:23','2024-10-16 10:07:23','customer');
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

-- Dump completed on 2024-11-08 16:09:21
