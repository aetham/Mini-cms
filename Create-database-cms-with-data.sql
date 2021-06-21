DROP DATABASE IF EXISTS `cms`;
CREATE DATABASE `cms`; 
USE `cms`;

SET NAMES utf8 ;
SET character_set_client = utf8mb4 ;

CREATE TABLE `city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `population` int NOT NULL,
  `country_code` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `continent` varchar(45) DEFAULT NULL,
  `capital` varchar(45) DEFAULT NULL,
  `gdp` decimal(11,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `country` VALUES (1,'Estonia','Europe','Tallinn','31');
INSERT INTO `country` VALUES (2,'Finland','Europe','Helsinki','269');
INSERT INTO `country` VALUES (3,'Latvia','Europe','Riga','34');
INSERT INTO `country` VALUES (4,'Lithuania','Europe','Vilnus','54');
INSERT INTO `country` VALUES (5,'France','Europe','Paris','2716');
SELECT * FROM country;

INSERT INTO `city` VALUES (1,'Tallinn','426538','372');
INSERT INTO `city` VALUES (2,'Helsinki','631695','246');
INSERT INTO `city` VALUES (3,'Riga','426538','428');
INSERT INTO `city` VALUES (4,'Vilnus','544386','440');
INSERT INTO `city` VALUES (5,'Paris','2161000','250');
SELECT * FROM city;

INSERT INTO `users` VALUES (1,'test','test');
SELECT * FROM city;