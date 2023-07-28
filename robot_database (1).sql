-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2023 at 08:22 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `movements_name`
--

DROP TABLE IF EXISTS `movements_name`;
CREATE TABLE IF NOT EXISTS `movements_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `movements_name`
--

INSERT INTO `movements_name` (`id`, `name`) VALUES
(12, 'jjj'),
(11, 'ggg'),
(10, 'g'),
(9, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `movments`
--

DROP TABLE IF EXISTS `movments`;
CREATE TABLE IF NOT EXISTS `movments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `move` varchar(15) DEFAULT NULL,
  `date_move` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_move_name` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_move_name` (`id_move_name`)
)  ;

--
-- Dumping data for table `movments`
--

INSERT INTO `movments` (`id`, `move`, `date_move`, `id_move_name`) VALUES
(42, 'Right', '2023-07-27 11:54:13', 10),
(41, 'Right', '2023-07-27 11:54:13', 10),
(40, 'Buttom', '2023-07-27 11:51:48', 9),
(39, 'Buttom', '2023-07-27 11:51:48', 9),
(38, 'Left', '2023-07-27 11:51:48', 9),
(37, 'Left', '2023-07-27 11:51:48', 9),
(36, 'Buttom', '2023-07-27 11:51:48', 9),
(35, 'Buttom', '2023-07-27 11:51:48', 9),
(34, 'Right', '2023-07-27 11:51:48', 9),
(33, 'Right', '2023-07-27 11:51:48', 9),
(32, 'Buttom', '2023-07-27 11:51:48', 9),
(31, 'Buttom', '2023-07-27 11:51:48', 9),
(43, 'Buttom', '2023-07-27 11:54:13', 10),
(44, 'Buttom', '2023-07-27 11:54:13', 10),
(45, 'Buttom', '2023-07-27 11:54:13', 10),
(46, 'Buttom', '2023-07-27 11:54:13', 10),
(47, 'Buttom', '2023-07-27 11:54:13', 10),
(48, 'Buttom', '2023-07-27 11:54:13', 10),
(49, 'Right', '2023-07-27 11:54:13', 10),
(50, 'Right', '2023-07-27 11:54:13', 10),
(51, 'Right', '2023-07-27 11:54:13', 10),
(52, 'Right', '2023-07-27 11:54:13', 10),
(53, 'Right', '2023-07-27 11:54:59', 11),
(54, 'Right', '2023-07-27 11:54:59', 11),
(55, 'Right', '2023-07-27 11:54:59', 11),
(56, 'Right', '2023-07-27 11:54:59', 11),
(57, 'Buttom', '2023-07-27 11:54:59', 11),
(58, 'Buttom', '2023-07-27 11:54:59', 11),
(59, 'Buttom', '2023-07-27 11:54:59', 11),
(60, 'Buttom', '2023-07-27 11:54:59', 11),
(61, 'Left', '2023-07-27 11:54:59', 11),
(62, 'Left', '2023-07-27 11:54:59', 11),
(63, 'Left', '2023-07-27 11:54:59', 11),
(64, 'Left', '2023-07-27 11:54:59', 11),
(65, 'Buttom', '2023-07-27 11:54:59', 11),
(66, 'Right', '2023-07-27 11:54:59', 11),
(67, 'Right', '2023-07-27 11:54:59', 11),
(68, 'Right', '2023-07-27 11:54:59', 11),
(69, 'Right', '2023-07-27 11:54:59', 11),
(70, 'Right', '2023-07-27 11:54:59', 11),
(71, 'Top', '2023-07-27 11:54:59', 11),
(72, 'Top', '2023-07-27 11:54:59', 11),
(73, 'Top', '2023-07-27 11:54:59', 11),
(74, 'Top', '2023-07-27 11:54:59', 11),
(75, 'Top', '2023-07-27 11:54:59', 11),
(76, 'Right', '2023-07-27 11:54:59', 11),
(77, 'Right', '2023-07-28 09:18:36', 12),
(78, 'Right', '2023-07-28 09:18:36', 12),
(79, 'Right', '2023-07-28 09:18:36', 12),
(80, 'Right', '2023-07-28 09:18:36', 12),
(81, 'Buttom', '2023-07-28 09:18:36', 12),
(82, 'Buttom', '2023-07-28 09:18:36', 12),
(83, 'Left', '2023-07-28 09:18:36', 12),
(84, 'Buttom', '2023-07-28 09:18:36', 12),
(85, 'Right', '2023-07-28 09:18:36', 12),
(86, 'Right', '2023-07-28 09:18:36', 12),
(87, 'Top', '2023-07-28 09:18:36', 12),
(88, 'Top', '2023-07-28 09:18:36', 12),
(89, 'Right', '2023-07-28 09:18:36', 12);

-- --------------------------------------------------------

--
-- Table structure for table `speeches`
--

DROP TABLE IF EXISTS `speeches`;
CREATE TABLE IF NOT EXISTS `speeches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `speech` text,
  `date_speech` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `speeches`
--

INSERT INTO `speeches` (`id`, `speech`, `date_speech`) VALUES
(1, 'test test', '2023-07-27 17:00:16'),
(2, 'test in speech to text', '2023-07-28 09:15:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
