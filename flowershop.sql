-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for flowershop
CREATE DATABASE IF NOT EXISTS `flowershop` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `flowershop`;

-- Dumping structure for table flowershop.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` float NOT NULL,
  `image` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf16;

-- Dumping data for table flowershop.products: ~3 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
	(22, 'Bespoke spring hand-tied bouquet', 'This charming florists choice spring themed hand-tied will be created using the very freshest seasonal flowers available on the day from their in-store collection, so, whilst your gift will look different to the one pictured, itâ€™ll still be just as lovely.', 75, './images/uploads/63c57c246e61c.jpg'),
	(33, 'Spring Hand-tied Bouquet', 'This charming florists choice spring themed hand-tied will be created using the very freshest seasonal flowers available on the day from their in-store collection, so, whilst your gift will look different to the one pictured, itâ€™ll still be just as lovely.', 45, './images/uploads/63c872e0ef19f.jpg'),
	(34, 'Lily free florist choice hand-tied', 'This charming lily free florists choice hand-tied will be created using the very freshest seasonal flowers available on the day from their in-store collection, so, whilst your gift will look different to the one pictured, itâ€™ll still be just as lovely.', 60, './images/uploads/63c91653c786c.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table flowershop.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reviewText` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf16;

-- Dumping data for table flowershop.reviews: ~3 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id`, `reviewText`, `userId`, `createdOn`) VALUES
	(27, 'The flowers here look great!', 16, '2023-01-18 22:20:05'),
	(28, 'This is my test review', 24, '2023-01-18 22:20:25'),
	(29, 'Admin test review', 27, '2023-01-18 22:20:52');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping structure for table flowershop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` text,
  `email` varchar(255) DEFAULT NULL,
  `accountType` varchar(10) DEFAULT 'member',
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf16;

-- Dumping data for table flowershop.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `accountType`, `createdOn`, `modifiedOn`) VALUES
	(16, 'Finley', 'Edwards', '$2y$10$3yc3y6uEIiXv9EdnCjPeD.9JwGGHpJXO9Imjuk1O0hSV7WzMLZgfK', 'email@example.com', 'admin', '2023-01-16 15:03:23', '2023-01-16 20:19:06'),
	(24, 'test', 'user', '$2y$10$mkMMHNOetjymDs5LFYGKLuIavf6A046u/dtSDjxUUtDglvDRIJI4.', 'test@test.com', 'member', '2023-01-16 21:41:05', '2023-01-18 22:19:36'),
	(27, 'Admin', 'Admin', '$2y$10$RLGDf3cySZ1Er2DfRw1HruMxuF1Td4Tft7vj1H4HTHqssS5VMw75u', 'Admin@user.com', 'admin', '2023-01-18 22:18:28', '2023-01-18 22:18:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
