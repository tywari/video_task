# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: local-db-rds.cdjofxpgmsdm.ap-south-1.rds.amazonaws.com (MySQL 5.7.17-log)
# Database: test
# Generation Time: 2019-03-11 13:12:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table user_videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_videos`;

CREATE TABLE `user_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_videos_video_id_unique` (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `user_videos` WRITE;
/*!40000 ALTER TABLE `user_videos` DISABLE KEYS */;

INSERT INTO `user_videos` (`id`, `user_name`, `video_id`, `video_name`, `created_at`, `updated_at`)
VALUES
	(1,'user1','video1','Test Video 1','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(2,'user2','video2','Test Video 2','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(3,'user3','video3','Test Video 3','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(4,'user4','video4','Test Video 4','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(5,'user5','video5','Test Video 5','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(6,'user6','video6','Test Video 6','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(7,'user7','video7','Test Video 7','2019-03-11 11:06:27','2019-03-11 11:06:27');

/*!40000 ALTER TABLE `user_videos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table video_infos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `video_infos`;

CREATE TABLE `video_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `video_infos_video_id_unique` (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `video_infos` WRITE;
/*!40000 ALTER TABLE `video_infos` DISABLE KEYS */;

INSERT INTO `video_infos` (`id`, `video_id`, `video_size`, `viewer_count`, `created_at`, `updated_at`)
VALUES
	(1,'video1','2342','23123131','2019-03-11 11:06:27','2019-03-11 13:05:29'),
	(2,'video2','80','2000','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(3,'video3','250','900','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(4,'video4','90','600','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(5,'video5','75','700','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(6,'video6','300','3000','2019-03-11 11:06:27','2019-03-11 11:06:27'),
	(7,'video7','200','2200','2019-03-11 11:06:27','2019-03-11 11:06:27');

/*!40000 ALTER TABLE `video_infos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
