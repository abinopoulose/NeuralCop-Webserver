-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for neuralcopdb
CREATE DATABASE IF NOT EXISTS `neuralcopdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `neuralcopdb`;

-- Dumping structure for table neuralcopdb.emergency
CREATE TABLE IF NOT EXISTS `emergency` (
  `emergency_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `emergency` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emergency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table neuralcopdb.emergency: 11 rows
/*!40000 ALTER TABLE `emergency` DISABLE KEYS */;
INSERT INTO `emergency` (`emergency_id`, `user_id`, `emergency`, `latitude`, `longitude`, `status`) VALUES
	(1, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(2, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(3, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(4, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(5, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(6, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(7, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(8, 1, 'Potential threat detected', '9.951297', '76.630428', 'pending'),
	(9, 1, 'Potential threat detected', '76.630428', '9.951297', 'pending'),
	(10, 1, 'Potential threat detected', '76.630428', '9.951297', 'pending'),
	(11, 1, 'Potential threat detected', '76.630428', '9.951297', 'pending');
/*!40000 ALTER TABLE `emergency` ENABLE KEYS */;

-- Dumping structure for table neuralcopdb.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table neuralcopdb.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table neuralcopdb.login
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table neuralcopdb.login: 2 rows
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`login_id`, `username`, `password`, `usertype`) VALUES
	(4, 'albin', 'password', 'user'),
	(2, 'abino', 'password', 'police');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table neuralcopdb.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table neuralcopdb.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping structure for table neuralcopdb.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table neuralcopdb.password_resets: ~0 rows (approximately)

-- Dumping structure for table neuralcopdb.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table neuralcopdb.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table neuralcopdb.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table neuralcopdb.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table neuralcopdb.police
CREATE TABLE IF NOT EXISTS `police` (
  `police_id` int NOT NULL AUTO_INCREMENT,
  `login_id` int DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`police_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table neuralcopdb.police: 1 rows
/*!40000 ALTER TABLE `police` DISABLE KEYS */;
INSERT INTO `police` (`police_id`, `login_id`, `fname`, `lname`, `place`, `phone`, `email`) VALUES
	(1, 2, 'Abino', 'Poulose', 'Adimali', '7306216456', 'abinopoulose@outlook.com');
/*!40000 ALTER TABLE `police` ENABLE KEYS */;

-- Dumping structure for table neuralcopdb.threat
CREATE TABLE IF NOT EXISTS `threat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `file_location` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  KEY `key` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table neuralcopdb.threat: ~15 rows (approximately)
INSERT INTO `threat` (`id`, `longitude`, `latitude`, `file_location`, `status`) VALUES
	(1, '76.7084198', '9.9320151', 'static/video/7939d865-7e16-4c48-b905-4e72f8e472a9.png', 'false'),
	(2, '76.7084198', '9.9320151', 'static/video/d8683fc9-9eac-4652-8fbb-92a467fa6773.png', 'false'),
	(3, '76.7084198', '9.9320151', 'static/video/cf1259a9-42f3-415d-bd83-1a0dfbaae465.png', 'false'),
	(4, '76.7084198', '9.9320151', 'static/video/37aa7392-e287-4fc4-90e8-da47f1f4adb0.png', 'false'),
	(5, '76.7084198', '9.9320151', 'static/video/e5810283-7b09-48f0-852d-061e64c6e24e.png', 'false'),
	(6, '76.7084198', '9.9320151', 'static/video/77ebbc5d-65b5-403c-a6e3-774cd51ff4a9.png', 'false'),
	(7, '76.7084198', '9.9320151', 'static/video/fdbdc3f4-21ef-40f7-b933-f513e622f061.png', 'forwarded'),
	(8, '76.7084198', '9.9320151', 'static/video/8e0df3ee-075c-415d-a5ac-88b4790827b8.png', 'false'),
	(9, '76.7084198', '9.9320151', 'static/video/7ebe3c72-4857-4ef8-a0e6-2e24b17fe939.png', 'pending'),
	(10, '76.7084198', '9.9320151', 'static/video/870b3524-910e-44d2-8f81-6fdb2ab5689e.png', 'false'),
	(11, '76.7084198', '9.9320151', 'static/video/9eeb94f2-b45e-4c3c-a57f-f579dae644c0.png', 'false'),
	(12, '76.630428', '9.951297', 'static/video/e513d59f-1b74-4b3e-8628-2e89aa58dfa5.png', 'pending'),
	(39, '76.630428', '9.951297', 'static/video/78df8403-beff-46a2-ac66-96ff6f2a4b47.png', 'pending'),
	(40, '76.630428', '9.951297', 'static/video/0e3ee75e-085c-457e-ae8b-aa99f978bc38.png', 'pending'),
	(41, '76.630428', '9.951297', 'static/video/7eb3f00d-bce8-4b0a-8bad-a74318a9d8a4.png', 'forwarded');

-- Dumping structure for table neuralcopdb.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `login_id` int DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table neuralcopdb.user: 1 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `login_id`, `fname`, `lname`, `place`, `phone`, `email`, `image`) VALUES
	(2, 4, 'Albin', 'T', 'Thodupuzha', '98232324', 'albint@gmail.com', NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table neuralcopdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table neuralcopdb.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Abino Poulose', 'abinopoulose@outlook.com', NULL, '$2y$10$B15PiyB1rSW8gufet2pWieQlrUUeVLTbZ9mXCWqVg8Ds1lMKs1WWu', NULL, '2023-06-18 04:13:25', '2023-06-18 04:13:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
