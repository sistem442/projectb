-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2015 at 11:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the post body.', '2015-04-05 14:46:48', NULL),
(2, 'A title once again', 'And the post body follows.', '2015-04-05 14:46:48', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-04-05 14:46:48', NULL),
(4, 'Title strikes back', 'This is really exciting! Not.', '2015-04-05 14:46:48', NULL),
(5, 'Title strikes back', 'This is really exciting! Not.', '2015-04-05 14:46:48', NULL),
(6, 'Title strikes back', 'This is really exciting! Not.', '2015-04-05 14:46:48', NULL),
(7, 'Title strikes back', 'This is really exciting! Not.', '2015-04-05 14:46:48', NULL),
(8, 'Title strikes back', 'This is really exciting! Not.', '2015-04-05 14:46:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE IF NOT EXISTS `processors` (
  `product_name` varchar(50) NOT NULL,
  `launch_year` enum('2014','2015','2013','') NOT NULL DEFAULT '2013',
  `cache` varchar(100) DEFAULT NULL,
  `price_range` enum('< $50','$50 - $100','$100 - $150','$150 - $200','$200- $250','$250 - $300','>$300') NOT NULL DEFAULT '>$300',
  `frequency_range` enum('1,0GHz - 1,49GHz','1,5GHz - 1,99GHz','2,0GHz - 2,49GHz','2,5GHz - 2,99GHz','3,0GHz - 3,49GHz','3,5GHz - 3,99GHz','4,0GHz - 4,49GHz','4,5GHz - 4,99GHz','5,0GHz - 5,49GHz','5,5GHz - 5,99GHz','6,0GHz - 6,49GHz') NOT NULL DEFAULT '3,0GHz - 3,49GHz',
  `frequency` smallint(4) NOT NULL,
  `turbo_frequency` smallint(4) DEFAULT NULL,
  `tdp` int(11) NOT NULL,
  `max_ram_memory` tinyint(3) DEFAULT NULL,
  `graphics` varchar(100) NOT NULL,
  `device_type` enum('desktop','laptop','embedded','') NOT NULL DEFAULT 'desktop',
  `series` enum('i7','i5','i3','FX') DEFAULT NULL,
  `code_name` enum('Devil''s Canyon','Haswell','Zambezi','Broadwell','Crystal Well') NOT NULL,
  `number_of_cores` tinyint(2) NOT NULL,
  `number_of_threads` tinyint(2) NOT NULL,
  `socket` enum('LGA 1150','AM3+','FCBGA 1168','FCBGA 1364','FCPGA 946') NOT NULL DEFAULT 'FCPGA 946',
`id` int(11) NOT NULL,
  `litography` varchar(10) NOT NULL,
  `max_memory_channels` tinyint(4) DEFAULT NULL,
  `max_memory_bandwidth` smallint(4) DEFAULT NULL,
  `brand` enum('AMD','Intel','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`product_name`, `launch_year`, `cache`, `price_range`, `frequency_range`, `frequency`, `turbo_frequency`, `tdp`, `max_ram_memory`, `graphics`, `device_type`, `series`, `code_name`, `number_of_cores`, `number_of_threads`, `socket`, `id`, `litography`, `max_memory_channels`, `max_memory_bandwidth`, `brand`) VALUES
('i7-4790K', '2014', '8M Smart cache', '>$300', '4,0GHz - 4,49GHz', 4000, 4400, 88, 32, 'Intel® HD Graphics 4600', 'desktop', 'i7', 'Devil''s Canyon', 4, 8, 'LGA 1150', 1, '22', 2, 25600, 'Intel'),
('i7-4790', '2014', '8M Smart cache', '>$300', '3,5GHz - 3,99GHz', 3600, 4000, 84, 32, ' 	Intel® HD Graphics 4600', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 2, '22', 2, 25600, 'Intel'),
('FX-9590', '2014', '8MB L2', '', '4,5GHz - 4,99GHz', 4700, NULL, 220, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 3, '32', 2, NULL, 'AMD'),
('FX-8370', '2014', '8MB L2', '$150 - $200', '4,0GHz - 4,49GHz', 4000, NULL, 125, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 4, '32', NULL, NULL, 'AMD'),
('FX-8370E', '2014', '8MB L2', '$150 - $200', '3,0GHz - 3,49GHz', 3300, NULL, 95, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 5, '32', NULL, NULL, 'AMD'),
('FX-8320E', '2014', '8MB L2', '$100 - $150', '3,0GHz - 3,49GHz', 3200, NULL, 95, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 6, '32', NULL, NULL, 'AMD'),
('FX-83210', '2014', '8MB L2', '$150 - $200', '3,0GHz - 3,49GHz', 3400, NULL, 95, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 7, '32', NULL, NULL, 'AMD'),
('FX-8350', '2014', '8MB L2', '$150 - $200', '4,0GHz - 4,49GHz', 4000, NULL, 125, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 8, '32', NULL, NULL, 'AMD'),
('FX-8320', '2014', '8MB L2', '$100 - $150', '3,5GHz - 3,99GHz', 3500, NULL, 125, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 9, '32', NULL, NULL, 'AMD'),
('FX-8300', '2014', '8MB L2', '$100 - $150', '3,0GHz - 3,49GHz', 3300, NULL, 95, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 10, '32', NULL, NULL, 'AMD'),
('FX-9370', '2014', '8MB L2', '', '4,0GHz - 4,49GHz', 4400, NULL, 220, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 11, '32', 2, NULL, 'AMD'),
('FX-8150', '2014', '8MB L2', '$150 - $200', '3,5GHz - 3,99GHz', 3600, NULL, 125, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 12, '32', NULL, NULL, 'AMD'),
('FX-8120', '2014', '8MB L2', '$150 - $200', '3,0GHz - 3,49GHz', 3100, NULL, 125, NULL, '', 'desktop', 'FX', 'Zambezi', 8, 8, 'AM3+', 13, '32', NULL, NULL, 'AMD'),
('i7-4785T', '2014', '8M Smart cache', '', '2,0GHz - 2,49GHz', 2200, 3200, 35, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 14, '22', 2, 25600, 'Intel'),
('i7-4771', '2014', '8M Smart cache', '', '3,5GHz - 3,99GHz', 3500, 3900, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 15, '22', 2, 25600, 'Intel'),
('i7-4770T', '2014', '8M Smart cache', '', '2,5GHz - 2,99GHz', 2500, 3700, 45, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 16, '22', 2, 25600, 'Intel'),
('i7-4770', '2014', '8M Smart cache', '', '3,0GHz - 3,49GHz', 3400, 3900, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 17, '22', 2, 25600, 'Intel'),
('i7-4765T', '2014', '8M Smart cache', '', '2,0GHz - 2,49GHz', 2000, 3000, 35, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 18, '22', 2, 25600, 'Intel'),
('i7-4790T', '2014', '8M Smart cache', '', '2,5GHz - 2,99GHz', 2700, 3900, 45, 32, 'Intel® HD Graphics 4600', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 19, '22', 2, 25600, 'Intel'),
('i7-4770S', '2014', '8M Smart cache', '', '3,0GHz - 3,49GHz', 3100, 3900, 65, 32, '', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 20, '22', 2, 25600, 'Intel'),
('i7-4770R', '2014', '8M Smart cache', '', '3,0GHz - 3,49GHz', 3200, 3900, 65, 32, '', 'desktop', 'i7', 'Haswell', 4, 4, 'FCBGA 1364', 21, '22', 2, 25600, 'Intel'),
('i7-4790S', '2014', '8M Smart cache', '', '3,0GHz - 3,49GHz', 3200, 4000, 65, 32, '', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 22, '22', 2, 25600, 'Intel'),
('i7-4770K', '2014', '8M Smart cache', '', '3,5GHz - 3,99GHz', 3500, 3900, 84, 32, '', 'desktop', 'i7', 'Haswell', 4, 4, 'LGA 1150', 23, '22', 2, 25600, 'Intel'),
('i5-5300U', '2015', '3MB', '', '2,0GHz - 2,49GHz', 2300, 2900, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i5', 'Broadwell', 2, 4, 'FCBGA 1168', 24, '14nm', 2, 25600, 'Intel'),
('i5-5200U ', '2013', '3MB', '', '2,0GHz - 2,49GHz', 2200, 2700, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i5', 'Broadwell', 2, 4, 'FCBGA 1168', 25, '14nm', 2, 25600, 'Intel'),
('i5-5287U', '2015', '3MB', '', '2,5GHz - 2,99GHz', 2900, NULL, 28, 16, 'Intel® Iris™ Graphics 6100', 'laptop', 'i5', 'Broadwell', 2, 4, 'FCBGA 1168', 26, '14nm', 2, 25600, 'Intel'),
('i5-5257U', '2015', '3MB', '', '2,5GHz - 2,99GHz', 2700, 3100, 28, 16, 'Intel® Iris™ Graphics 6100', 'laptop', 'i5', 'Broadwell', 2, 4, 'FCBGA 1168', 27, '14nm', 2, 25600, 'Intel'),
('i5-5250U', '2015', '3MB', '', '1,5GHz - 1,99GHz', 1600, 2700, 15, 16, 'Intel® Iris™ Graphics 6000', 'laptop', 'i5', 'Broadwell', 2, 4, 'FCBGA 1168', 28, '14nm', 2, 25600, 'Intel'),
('i5-4670', '2015', '6 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3400, 3800, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 29, '22', 2, 25600, 'Intel'),
('i5-4670K', '2015', '6 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3400, 3800, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 30, '22', 2, 25600, 'Intel'),
('i5-4670R', '2013', '4 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3000, 3700, 65, 32, 'Intel® Iris™ Pro Graphics 5200', 'desktop', 'i5', 'Crystal Well', 4, 4, 'FCBGA 1364', 31, '22', 2, 25600, 'Intel'),
('i5-4670S', '2013', '6 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3100, 3800, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 32, '22', 2, 25600, 'Intel'),
('i5-4670T', '2013', '6 MB Intel® Smart Cache ', '', '2,0GHz - 2,49GHz', 2300, 3300, 45, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 33, '22', 2, 25600, 'Intel'),
('i5-4690', '2014', '6 MB Intel® Smart Cache ', '', '3,5GHz - 3,99GHz', 3500, 3900, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 34, '22', 2, 25600, 'Intel'),
('i5-4690K', '2014', '6 MB Intel® Smart Cache ', '', '3,5GHz - 3,99GHz', 3500, 3900, 88, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Devil''s Canyon', 4, 4, 'LGA 1150', 35, '22', 2, 25600, 'Intel'),
('i5-4690S', '2014', '6 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3200, 3900, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 36, '22', 2, 25600, 'Intel'),
('i5-4690T', '2014', '6 MB Intel® Smart Cache ', '', '2,5GHz - 2,99GHz', 2500, 3500, 45, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 37, '22', 2, 25600, 'Intel'),
('i5-4570', '2013', '6 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3200, 3600, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 38, '22', 2, 25600, 'Intel'),
('i5-4570R', '2013', '4 MB Intel® Smart Cache ', '$250 - $300', '2,5GHz - 2,99GHz', 2700, 3200, 65, 32, 'Intel® Iris™ Pro Graphics 5200', 'desktop', 'i5', 'Crystal Well', 4, 4, 'FCBGA 1364', 39, '22', 2, 25600, 'Intel'),
('i5-4570S', '2013', '6 MB Intel® Smart Cache ', '$150 - $200', '2,5GHz - 2,99GHz', 2900, 3600, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 40, '22', 2, 25600, 'Intel'),
('i5-4590', '2014', '6 MB Intel® Smart Cache ', '', '3,0GHz - 3,49GHz', 3300, 3700, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 41, '22', 2, 25600, 'Intel'),
('i5-4570T', '2013', '4 MB Intel® Smart Cache ', '$150 - $200', '2,5GHz - 2,99GHz', 2900, 3600, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 42, '22', 2, 25600, 'Intel'),
('i5-4590S', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '3,0GHz - 3,49GHz', 3000, 3700, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 43, '22', 2, 25600, 'Intel'),
('i5-4590T', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '2,0GHz - 2,49GHz', 2000, 3000, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 44, '22', 2, 25600, 'Intel'),
('i5-4460T', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '1,5GHz - 1,99GHz', 1900, 2700, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 45, '22', 2, 25600, 'Intel'),
('i5-4460S', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '2,5GHz - 2,99GHz', 2900, 3400, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 46, '22', 2, 25600, 'Intel'),
('i5-4460', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '3,0GHz - 3,49GHz', 3200, 3400, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 47, '22', 2, 25600, 'Intel'),
('i5-4440S', '2013', '6 MB Intel® Smart Cache ', '$150 - $200', '2,5GHz - 2,99GHz', 2800, 3300, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 48, '22', 2, 25600, 'Intel'),
('i5-4440', '2013', '6 MB Intel® Smart Cache ', '$150 - $200', '3,0GHz - 3,49GHz', 3100, 3300, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 49, '22', 2, 25600, 'Intel'),
('i5-4430S', '2013', '6 MB Intel® Smart Cache ', '$150 - $200', '2,5GHz - 2,99GHz', 2700, 3200, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 50, '22', 2, 25600, 'Intel'),
('i5-4430', '2013', '6 MB Intel® Smart Cache ', '$150 - $200', '3,0GHz - 3,49GHz', 3000, 3200, 84, 32, 'Intel® HD Graphics 4600', 'desktop', 'i5', 'Haswell', 4, 4, 'LGA 1150', 51, '22', 2, 25600, 'Intel'),
('i3-4330', '2013', '4 MB Intel® Smart Cache ', '$100 - $150', '3,5GHz - 3,99GHz', 3500, 0, 54, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 52, '22', 2, 25600, 'Intel'),
('i3-4330T', '2013', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3000, 0, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 53, '22', 2, 25600, 'Intel'),
('i3-4340', '2013', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3000, 0, 54, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 54, '22', 2, 25600, 'Intel'),
('i3-4350', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3000, 0, 54, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 55, '22', 2, 25600, 'Intel'),
('i3-4350T', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3100, 0, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 56, '22', 2, 25600, 'Intel'),
('i3-4360', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,5GHz - 3,99GHz', 3700, 0, 54, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 57, '22', 2, 25600, 'Intel'),
('i3-4360T', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3200, 0, 54, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 58, '22', 2, 25600, 'Intel'),
('i3-4370', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,5GHz - 3,99GHz', 3800, 0, 54, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 59, '22', 2, 25600, 'Intel'),
('i3-4370T', '2015', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3300, 0, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 60, '22', 2, 25600, 'Intel'),
('i3-4170T', '2015', '3 MB', '$100 - $150', '3,0GHz - 3,49GHz', 3200, 0, 35, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 61, '22', 2, 25600, 'Intel'),
('i3-4170', '2015', '3 MB', '$100 - $150', '3,5GHz - 3,99GHz', 3700, 0, 54, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 62, '22', 2, 25600, 'Intel'),
('i3-4160T', '2014', '3 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3100, 0, 35, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 63, '22', 2, 25600, 'Intel'),
('i3-4160', '2014', '3 MB Intel® Smart Cache ', '$100 - $150', '3,5GHz - 3,99GHz', 3600, 0, 54, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 64, '22', 2, 25600, 'Intel'),
('i3-4150T', '2014', '3 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3000, 0, 35, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 65, '22', 2, 25600, 'Intel'),
('i3-4150', '2014', '3 MB Intel® Smart Cache ', '$100 - $150', '3,5GHz - 3,99GHz', 3500, 0, 54, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 66, '22', 2, 25600, 'Intel'),
('i3-4130T', '2013', '3 MB Intel® Smart Cache ', '$100 - $150', '2,0GHz - 2,49GHz', 2000, 0, 35, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 67, '22', 2, 25600, 'Intel'),
('i3-4130', '2013', '3 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3000, 0, 54, 32, 'Intel® HD Graphics 4400', 'desktop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 68, '22', 2, 25600, 'Intel'),
('i3-5020U', '2015', '3 MB', '$250 - $300', '2,0GHz - 2,49GHz', 2000, 0, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i3', 'Broadwell', 2, 4, 'FCBGA 1168', 69, '14', 2, 25600, 'Intel'),
('i3-5015U', '2015', '3 MB', '$250 - $300', '2,0GHz - 2,49GHz', 2100, 0, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i3', 'Broadwell', 2, 4, 'FCBGA 1168', 70, '14', 2, 25600, 'Intel'),
('i3-5157U', '2015', '3 MB', '$250 - $300', '2,5GHz - 2,99GHz', 2500, 0, 25, 16, 'Intel® Iris™ Graphics 6100', 'laptop', 'i3', 'Broadwell', 2, 4, 'FCBGA 1168', 71, '14', 2, 25600, 'Intel'),
('i3-5010U', '2015', '3 MB', '$250 - $300', '2,0GHz - 2,49GHz', 2100, 0, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i3', 'Broadwell', 2, 4, 'FCBGA 1168', 72, '14', 2, 25600, 'Intel'),
('i3-5005U', '2015', '3 MB', '$250 - $300', '2,0GHz - 2,49GHz', 2000, 0, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i3', 'Broadwell', 2, 4, 'FCBGA 1168', 73, '14', 2, 25600, 'Intel'),
('i3-4100M', '2013', '3 MB Intel® Smart Cache ', '', '2,5GHz - 2,99GHz', 2500, 0, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'FCPGA 946', 74, '22', 2, 25600, 'Intel'),
('i3-4100U', '2013', '3 MB Intel® Smart Cache ', '$250 - $300', '1,0GHz - 1,49GHz', 1000, 0, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i3', 'Haswell', 2, 4, 'FCPGA 946', 75, '22', 2, 25600, 'Intel'),
('i7-5650U', '2015', '4 MB ', '', '2,0GHz - 2,49GHz', 2200, 3100, 15, 16, 'Intel® HD Graphics 6000', 'laptop', 'i7', 'Broadwell', 2, 4, 'FCBGA 1168', 76, '14nm', 2, 25600, 'Intel'),
('i7-5600U', '2015', '4 MB ', '', '2,5GHz - 2,99GHz', 2600, 3200, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i7', 'Broadwell', 2, 4, 'FCBGA 1168', 77, '14nm', 2, 25600, 'Intel'),
('i7-5557U', '2015', '4 MB ', '', '3,0GHz - 3,49GHz', 3100, 3400, 28, 16, 'Intel® Iris™ Graphics 6100', 'laptop', 'i7', 'Broadwell', 2, 4, 'FCBGA 1168', 78, '14nm', 2, 25600, 'Intel'),
('i7-5550U', '2015', '4 MB Intel® Smart Cache ', '', '2,0GHz - 2,49GHz', 2000, 3000, 15, 16, 'Intel® HD Graphics 6000', 'laptop', 'i7', 'Broadwell', 2, 4, 'FCBGA 1168', 79, '14nm', 2, 25600, 'Intel'),
('i7-5500U', '2015', '4 MB ', '', '2,0GHz - 2,49GHz', 2400, 3000, 15, 16, 'Intel® HD Graphics 5500', 'laptop', 'i7', 'Broadwell', 2, 4, 'FCBGA 1168', 80, '14nm', 2, 25600, 'Intel'),
('i5-4300M', '2013', '3 MB Intel® Smart Cache', '', '2,5GHz - 2,99GHz', 2600, 3300, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i5', 'Haswell', 2, 4, 'FCPGA 946', 81, '22', 2, 25600, 'Intel'),
('i5-4300U', '2013', '3 MB Intel® Smart Cache', '$250 - $300', '1,5GHz - 1,99GHz', 1900, 1900, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 82, '22', 2, 25600, 'Intel'),
('i5-4308U', '2014', '3 MB', '$250 - $300', '2,5GHz - 2,99GHz', 2800, 3300, 28, 16, 'Intel® Iris™ Graphics 5100', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 83, '22', 2, 25600, 'Intel'),
('i5-4310M', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '2,5GHz - 2,99GHz', 2700, 3400, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i5', 'Haswell', 2, 4, 'FCPGA 946', 84, '22', 2, 25600, 'Intel'),
('i5-4310U', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '2,0GHz - 2,49GHz', 2000, 300, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 85, '22', 2, 25600, 'Intel'),
('i5-4340M', '2014', '3 MB Intel® Smart Cache', '', '2,5GHz - 2,99GHz', 2900, 3600, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i5', 'Haswell', 2, 4, 'FCPGA 946', 86, '22', 2, 25600, 'Intel'),
('i5-4300U', '2014', '3 MB Intel® Smart Cache', '$250 - $300', '1,5GHz - 1,99GHz', 1500, 3000, 15, 16, 'Intel® HD Graphics 5000', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 87, '22', 2, 25600, 'Intel'),
('i5-4210H', '2014', '3 MB Intel® Smart Cache ', '', '2,5GHz - 2,99GHz', 2900, 3500, 47, 16, 'Intel® HD Graphics 4600', 'laptop', 'i5', 'Broadwell', 2, 4, 'FCBGA 1364', 88, '22nm', 2, 25600, 'Intel'),
('i5-4210M', '2014', '3 MB Intel® Smart Cache', '', '2,5GHz - 2,99GHz', 2600, 3200, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i5', 'Haswell', 2, 4, 'FCPGA 946', 89, '22', 2, 25600, 'Intel'),
('i5-4210U', '2014', '3 MB Intel® Smart Cache', '$250 - $300', '1,5GHz - 1,99GHz', 1700, 2700, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 90, '22', 2, 25600, 'Intel'),
('i5-4220Y', '2014', '3 MB', '$250 - $300', '1,5GHz - 1,99GHz', 1600, 2000, 12, 16, 'Intel® HD Graphics 4200', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 91, '22', 2, 25600, 'Intel'),
('i5-4260U', '2014', '3 MB Intel® Smart Cache', '', '1,0GHz - 1,49GHz', 1400, 2400, 15, 16, 'Intel® HD Graphics 5000', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 92, '22', 2, 25600, 'Intel'),
('i5-4278U', '2014', '3 MB', '', '2,5GHz - 2,99GHz', 2600, 3100, 28, 16, 'Intel® Iris™ Graphics 5100', 'laptop', 'i5', 'Haswell', 2, 4, 'FCBGA 1168', 93, '22', 2, 25600, 'Intel'),
('i5-4410E', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '2,5GHz - 2,99GHz', 2900, 0, 37, 16, 'Intel® HD Graphics 4600', 'embedded', 'i5', 'Broadwell', 2, 4, 'FCBGA 1364', 94, '22', 2, 25600, 'Intel'),
('i5-4422E', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '1,5GHz - 1,99GHz', 1800, 2900, 25, 16, 'Intel® HD Graphics 4600', 'embedded', 'i5', 'Broadwell', 2, 4, 'FCBGA 1364', 95, '22', 2, 25600, 'Intel'),
('i5-4590T', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '2,0GHz - 2,49GHz', 2000, 3000, 35, 32, 'Intel® HD Graphics 4600', 'embedded', 'i5', 'Broadwell', 2, 4, 'LGA 1150', 96, '22', 2, 25600, 'Intel'),
('i5-4590Ti5-4590S', '2014', '6 MB Intel® Smart Cache ', '$150 - $200', '3,0GHz - 3,49GHz', 3000, 3700, 65, 32, 'Intel® HD Graphics 4600', 'embedded', 'i5', 'Broadwell', 2, 4, 'LGA 1150', 97, '22', 2, 25600, 'Intel'),
('i3-4112E', '2014', '3 MB Intel® Smart Cache ', '$200- $250', '1,5GHz - 1,99GHz', 1800, 0, 25, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'FCBGA 1364', 98, '22', 2, 25600, 'Intel'),
('i3-4110E', '2014', '3 MB Intel® Smart Cache ', '$200- $250', '2,5GHz - 2,99GHz', 2600, 0, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'FCBGA 1364', 99, '22', 2, 25600, 'Intel'),
('i3-4360', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,5GHz - 3,99GHz', 3700, 0, 54, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 100, '22', 2, 25600, 'Intel'),
('i3-4350T', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '3,0GHz - 3,49GHz', 3100, 0, 35, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 101, '22', 2, 25600, 'Intel'),
('i3-4340TE', '2014', '4 MB Intel® Smart Cache ', '$100 - $150', '2,5GHz - 2,99GHz', 2600, 0, 35, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'LGA 1150', 102, '22', 2, 25600, 'Intel'),
('i3-4030Y', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '1,5GHz - 1,99GHz', 1600, 0, 12, 32, 'Intel® HD Graphics 4200', 'laptop', 'i3', 'Haswell', 2, 4, 'FCBGA 1168', 103, '22', 2, 25600, 'Intel'),
('i3-4030U', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '1,5GHz - 1,99GHz', 1900, 0, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i3', 'Haswell', 2, 4, 'FCBGA 1168', 104, '22', 2, 25600, 'Intel'),
('i3-4025U', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '1,5GHz - 1,99GHz', 1900, 0, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i3', 'Haswell', 2, 4, 'FCBGA 1168', 105, '22', 2, 25600, 'Intel'),
('i3-4120U', '2014', '3 MB', '$250 - $300', '2,0GHz - 2,49GHz', 2000, 0, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i3', 'Haswell', 2, 4, 'FCBGA 1168', 106, '22', 2, 25600, 'Intel'),
('i3-4110M', '2014', '3 MB Intel® Smart Cache ', '$250 - $300', '2,5GHz - 2,99GHz', 2600, 0, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i3', 'Haswell', 2, 4, 'FCPGA 946', 107, '22', 2, 25600, 'Intel'),
('i7-4790S', '2014', '8 MB Intel® Smart Cache', '', '3,0GHz - 3,49GHz', 3200, 4000, 65, 32, 'Intel® HD Graphics 4600', 'desktop', 'i7', 'Haswell', 4, 8, 'LGA 1150', 108, '22', 2, 25600, 'Intel'),
('i7-4785T', '2014', '8 MB Intel® Smart Cache', '', '2,5GHz - 2,99GHz', 2200, 3200, 35, 32, 'Intel® HD Graphics 4600', 'desktop', 'i7', 'Haswell', 4, 8, 'LGA 1150', 110, '22', 2, 25600, 'Intel'),
('i7-4980HQ', '2014', '6M', '>$300', '2,5GHz - 2,99GHz', 2800, 4000, 47, 32, 'Intel® Iris™ Pro Graphics 5200', 'laptop', 'i7', 'Crystal Well', 4, 8, 'FCBGA 1364', 111, '22', 2, 25600, 'Intel'),
('i7-4870HQ', '2014', '6M', '>$300', '2,5GHz - 2,99GHz', 2500, 3700, 47, 32, 'Intel® Iris™ Pro Graphics 5200', 'laptop', 'i7', 'Crystal Well', 4, 8, 'FCBGA 1364', 112, '22', 2, 25600, 'Intel'),
('i7-4770HQ', '2014', '6M', '>$300', '2,0GHz - 2,49GHz', 2200, 3400, 47, 32, 'Intel® Iris™ Pro Graphics 5200', 'laptop', 'i7', 'Crystal Well', 4, 8, 'FCBGA 1364', 113, '22', 2, 25600, 'Intel'),
('i7-4578U', '2014', '4M', '>$300', '3,0GHz - 3,49GHz', 3000, 3500, 28, 16, 'Intel® Iris™ Pro Graphics 5100', 'laptop', 'i7', 'Crystal Well', 4, 8, 'FCBGA 1168', 114, '22', 2, 25600, 'Intel'),
('i7-4510U', '2014', '4 MB Intel® Smart Cache ', '>$300', '2,0GHz - 2,49GHz', 2000, 3100, 15, 16, 'Intel® HD Graphics 4400', 'laptop', 'i7', 'Haswell', 2, 4, 'FCBGA 1168', 115, '22', 2, 25600, 'Intel'),
('i7-4760HQ', '2014', '6 MB Intel® Smart Cache ', '>$300', '2,0GHz - 2,49GHz', 2100, 3300, 47, 32, 'Intel® Iris™ Pro Graphics 5200', 'laptop', 'i7', 'Crystal Well', 4, 8, 'FCBGA 1364', 116, '22', 2, 25600, 'Intel'),
('i7-4712MQ', '2014', '6 MB Intel® Smart Cache ', '>$300', '2,0GHz - 2,49GHz', 2300, 3300, 47, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCPGA 946', 117, '22', 2, 25600, 'Intel'),
('i7-4712HQ', '2014', '6 MB Intel® Smart Cache ', '>$300', '2,0GHz - 2,49GHz', 2300, 3300, 47, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCBGA 1364', 118, '22', 2, 25600, 'Intel'),
('i7-4710MQ', '2014', '6 MB Intel® Smart Cache ', '>$300', '2,5GHz - 2,99GHz', 2500, 3500, 47, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCPGA 946', 119, '22', 2, 25600, 'Intel'),
('i7-4710HQ', '2014', '6 MB Intel® Smart Cache ', '>$300', '2,5GHz - 2,99GHz', 2500, 3500, 47, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCBGA 1364', 120, '22', 2, 25600, 'Intel'),
('i7-4700EC', '2014', '8 MB Intel® Smart Cache ', '>$300', '2,5GHz - 2,99GHz', 2700, 0, 43, 32, '', 'laptop', 'i7', 'Haswell', 4, 8, 'FCBGA 1364', 121, '22', 2, 25600, 'Intel'),
('i7-4702EC', '2014', '8 MB Intel® Smart Cache ', '>$300', '2,0GHz - 2,49GHz', 2000, 0, 27, 32, '', 'laptop', 'i7', 'Haswell', 4, 8, 'FCBGA 1364', 122, '22', 2, 25600, 'Intel'),
('i7-4910MQ', '2014', '8 MB Intel® Smart Cache ', '>$300', '2,5GHz - 2,99GHz', 2900, 3900, 47, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCPGA 946', 123, '22', 2, 25600, 'Intel'),
('i7-4810MQ', '2014', '6 MB Intel® Smart Cache ', '>$300', '2,5GHz - 2,99GHz', 2800, 3800, 47, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCPGA 946', 124, '22', 2, 25600, 'Intel'),
('i7-4610M', '2014', '4 MB Intel® Smart Cache ', '>$300', '3,0GHz - 3,49GHz', 3000, 3700, 37, 32, 'Intel® HD Graphics 4600', 'laptop', 'i7', 'Haswell', 4, 8, 'FCPGA 946', 125, '22', 2, 25600, 'Intel'),
('i7-4860HQ', '2014', '6MB Intel® Smart Cache ', '>$300', '2,0GHz - 2,49GHz', 2400, 3600, 47, 32, 'Intel® Iris™ Pro Graphics 5200', 'laptop', 'i7', 'Crystal Well', 4, 8, 'FCBGA 1364', 126, '22', 2, 25600, 'Intel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `processors`
--
ALTER TABLE `processors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
