/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - anta_store
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`anta_store` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `anta_store`;

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `NAME` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` between 1 and 5),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `feedback` */

insert  into `feedback`(`id`,`user_id`,`content`,`created_at`,`NAME`,`email`,`rating`) values 
(8,NULL,'1','2025-05-25 22:13:18','asdsa','ricogabs075@gmail.com',3),
(9,NULL,'pogi si mark','2025-05-25 22:23:01','rico','joshmanlapaz@gmail.com',3),
(10,NULL,'ang pogi ko','2025-05-25 22:23:22','joshua','joshmanlapaz@gmail.com',4),
(11,NULL,'im so handsome\r\n','2025-05-25 22:24:50','Teodirico J Gabucan','joshmanlapaz@gmail.com',4);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `gender` enum('Men','Women','Kids') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`description`,`price`,`gender`,`image`,`created_at`) values 
(1,'ANTA Men Shock Wave 6 Pro Basketball Shoes','Men\'s Shoes',3200.00,'Men','images/men/6pro.jpg','2025-05-22 20:13:56'),
(2,'ANTA Men Klay Thompson KT Splash 7 Team Basketball Shoes','Excellent cushioning for distance.',5220.00,'Men','images/thompson1.jpg','2025-05-22 20:13:56'),
(3,'ANTA Men Klay Thompson KT Splash 7 Basketball Shoes','Casual men\'s sneakers.',4500.00,'Men','images/thompson.jpg','2025-05-22 20:13:56'),
(4,'ANTA Men Kyrie Irving KAI 1 Basketball Shoes','Table tennis unisex shoes.',3999.00,'Men','images/kyrie2.jpg','2025-05-22 20:13:56'),
(5,'ANTA Women C202 6 Running Shoes','Women Shoes',5999.00,'Women','images/women.jpg','2025-05-25 21:16:34'),
(6,'ANTA Women PG7 Travel Running Shoes','Women Travel and Running Shoes',4200.00,'Women','images/women3.jpg','2025-05-25 21:23:33'),
(7,'ANTA Women Flashlite Running Shoes','Running Shoes',6000.00,'Women','images/women1.jpg','2025-05-25 21:24:07'),
(8,'ANTA Women Lightweight Running Shoes','Women Lightweight Shoes',5500.00,'Women','images/women2.jpg','2025-05-25 21:25:16');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`created_at`) values 
(1,'','joshmanlapaz@gmail.com','$2y$10$Pnf.5kuaxIpGcLoRJ9X2buCEjbNWTQaKOCOYKZ5vstwkyjNR.bFxW','2025-05-25 21:29:52');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
