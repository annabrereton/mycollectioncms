# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.11.2-MariaDB-1:10.11.2+maria~ubu2204)
# Database: mycollectioncms
# Generation Time: 2023-06-01 15:08:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table recipes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `recipes`;

CREATE TABLE `recipes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imglink` varchar(512) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` longtext DEFAULT NULL,
  `users_id` int(11) unsigned NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `liked` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_id` (`users_id`),
  CONSTRAINT `fk_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;

INSERT INTO `recipes` (`id`, `imglink`, `title`, `description`, `users_id`, `timestamp`, `liked`)
VALUES
	(1,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south,h_3024,w_3024/v1680603147/broadbeandanish_xa2bd3.jpg','Broad Bean Danish','Vegan broad bean and pea danish with sunflower \'cream\', salsa verde and pickled radish. ',1,NULL,NULL),
	(2,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,h_3024,w_3024/v1680425173/baconcheesecrol_ya5vcx.jpg','Bacon & Cheese Crolinder','Bacon jam and Coolea cheese custard crolinder',1,NULL,NULL),
	(3,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,g_center,h_3024,w_3024/v1680425182/charsuibun_faqkl0.jpg','Char Sui Bun ','Char Sui Pork stuffed Bun',1,NULL,NULL),
	(4,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,g_center,h_3024,w_3024/v1680425182/currypuffs_o8nlya.jpg','Curry Puffs','Spicy vegan potato parsnip and pea curry puffs',1,NULL,NULL),
	(5,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south_east,h_3024,w_3024/v1680425182/fetahoneyswirls_crdljt.jpg','Feta & Honey Swirls','Feta, honey and fennel swirls',1,NULL,NULL),
	(6,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south,h_3024,w_3024/v1680444160/kimchiswirls_dcfjh8.jpg','Kimchi swirls','Vegan kimchi and smoked fermented cashew curd swirls',1,NULL,NULL),
	(7,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,h_3024,w_3024/v1680444320/rissoles_izmqjf.jpg','Saltfish Rissoles','Creamy saltfish filled rissoles',2,NULL,NULL),
	(8,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,h_3024,w_3024/v1680425188/smokedtroutdanish_uclp4l.jpg','Smoked Trout Danish','Smoked trout with lemon cultured cream, dill and pickle',2,NULL,NULL),
	(9,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south,h_3024,w_3024/v1680444161/spanakopitaswirls_kubhbr.jpg','Spanakopita swirl','Vegan smoked fermented cashew curd with herb and spinach',2,NULL,NULL),
	(10,'https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south_east,h_3024,w_3024/v1680425190/tomatodanish_qcrdqt.jpg','Tomato & Ricotta Danish','Balsamic roast cherry tomatoes with basil and lemon ricotta',2,NULL,NULL);

/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` tinytext NOT NULL,
  `pwd` longtext NOT NULL,
  `email` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `uid`, `pwd`, `email`)
VALUES
	(1,'Anna Brereton','$2y$10$YYG3bSW1OYnNAitG2dVabuZGDuZ1ivfSzvTtH7fpgh9Bv6J2Hq15e','anna.brereton@gmail.com'),
	(2,'Dave Bloggs','$2y$10$YYG3bSW1OYnNAitG2dVabuZGDuZ1ivfSzvTtH7fpgh9Bv6J2Hq15e','dave.bloggs@gmail.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
