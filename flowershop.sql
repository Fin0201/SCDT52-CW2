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

-- Dumping data for table flowershop.products: ~2 rows (approximately)
INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
	(22, 'Bespoke spring hand-tied bouquet', 'This charming florists choice spring themed hand-tied will be created using the very freshest seasonal flowers available on the day from their in-store collection, so, whilst your gift will look different to the one pictured, itâ€™ll still be just as lovely.', 75, './images/uploads/63c57c246e61c.jpg'),
	(33, 'Spring Hand-tied Bouquet', 'This charming florists choice spring themed hand-tied will be created using the very freshest seasonal flowers available on the day from their in-store collection, so, whilst your gift will look different to the one pictured, itâ€™ll still be just as lovely.', 45, './images/uploads/63c872e0ef19f.jpg');

-- Dumping data for table flowershop.reviews: ~3 rows (approximately)
INSERT INTO `reviews` (`id`, `reviewText`, `userId`, `createdOn`) VALUES
	(27, 'The flowers here look great!', 16, '2023-01-18 22:20:05'),
	(28, 'This is my test review', 24, '2023-01-18 22:20:25'),
	(29, 'Admin test review', 27, '2023-01-18 22:20:52');

-- Dumping data for table flowershop.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `accountType`, `createdOn`, `modifiedOn`) VALUES
	(16, 'Finley', 'Edwards', '$2y$10$3yc3y6uEIiXv9EdnCjPeD.9JwGGHpJXO9Imjuk1O0hSV7WzMLZgfK', 'email@example.com', 'admin', '2023-01-16 15:03:23', '2023-01-16 20:19:06'),
	(24, 'test', 'user', '$2y$10$mkMMHNOetjymDs5LFYGKLuIavf6A046u/dtSDjxUUtDglvDRIJI4.', 'test@test.com', 'member', '2023-01-16 21:41:05', '2023-01-18 22:19:36'),
	(27, 'Admin', 'Admin', '$2y$10$RLGDf3cySZ1Er2DfRw1HruMxuF1Td4Tft7vj1H4HTHqssS5VMw75u', 'Admin@user.com', 'admin', '2023-01-18 22:18:28', '2023-01-18 22:18:42');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
