-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2015 at 10:23 AM
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
`id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `code_name` varchar(100) NOT NULL,
  `brand` enum('amd','intel','','') NOT NULL,
  `socket` enum('LGA 1150','AM3+','FCBGA 1168','FCBGA 1364') NOT NULL DEFAULT 'LGA 1150',
  `litography` varchar(10) NOT NULL,
  `number_of_cores` tinyint(2) NOT NULL,
  `number_of_threads` tinyint(2) NOT NULL,
  `cache` varchar(100) DEFAULT NULL,
  `frequency` float NOT NULL,
  `turbo_frequency` float DEFAULT NULL,
  `tdp` int(11) NOT NULL,
  `max_ram_memory` float DEFAULT NULL,
  `max_memory_channels` tinyint(4) DEFAULT NULL,
  `max_memory_bandwidth` float DEFAULT NULL,
  `price` smallint(4) DEFAULT NULL,
  `graphics` varchar(100) NOT NULL,
  `device_type` enum('desktop','laptop','','') NOT NULL DEFAULT 'desktop',
  `series` enum('i7','i5','i3','FX') DEFAULT NULL,
  `launch_year` enum('2014','2015','2013','') NOT NULL DEFAULT '2013'
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`id`, `product_name`, `code_name`, `brand`, `socket`, `litography`, `number_of_cores`, `number_of_threads`, `cache`, `frequency`, `turbo_frequency`, `tdp`, `max_ram_memory`, `max_memory_channels`, `max_memory_bandwidth`, `price`, `graphics`, `device_type`, `series`, `launch_year`) VALUES
(1, 'i7-4790K', 'Devil''s Canyon                    ', 'intel', 'LGA 1150', '22', 4, 8, '8M Smart cache', 4, 4.4, 88, 32, 2, 25.6, 339, '', 'desktop', 'i7', '2014'),
(2, 'i7-4790', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 3.6, 4, 84, 32, 2, 25.6, 303, '', 'desktop', 'i7', '2014'),
(3, 'FX-9590', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4.7, NULL, 220, NULL, 2, NULL, 220, '', 'desktop', 'FX', '2014'),
(4, 'FX-8370', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4, NULL, 125, NULL, NULL, NULL, 194, '', 'desktop', 'FX', '2014'),
(5, 'FX-8370E', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.3, NULL, 95, NULL, NULL, NULL, 194, '', 'desktop', 'FX', '2014'),
(6, 'FX-8320E', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.2, NULL, 95, NULL, NULL, NULL, 142, '', 'desktop', 'FX', '2014'),
(7, 'FX-83210', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.4, NULL, 95, NULL, NULL, NULL, 169, '', 'desktop', 'FX', '2014'),
(8, 'FX-8350', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4, NULL, 125, NULL, NULL, NULL, 173, '', 'desktop', 'FX', '2014'),
(9, 'FX-8320', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.5, NULL, 125, NULL, NULL, NULL, 142, '', 'desktop', 'FX', '2014'),
(10, 'FX-8300', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.3, NULL, 95, NULL, NULL, NULL, 150, '', 'desktop', 'FX', '2014'),
(11, 'FX-9370', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4.4, NULL, 220, NULL, 2, NULL, 200, '', 'desktop', 'FX', '2014'),
(12, 'FX-8150', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.6, NULL, 125, NULL, NULL, NULL, 183, '', 'desktop', 'FX', '2014'),
(13, 'FX-8120', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.1, NULL, 125, NULL, NULL, NULL, 153, '', 'desktop', 'FX', '2014'),
(14, 'i7-4785T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 2.2, 3.2, 35, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600', 'laptop', 'i7', '2014'),
(15, 'i7-4771', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 3.5, 3.9, 84, 32, 2, 25.6, 315, 'Intel® HD Graphics 4600', 'desktop', 'i7', '2014'),
(16, 'i7-4770T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 2.5, 3.7, 45, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600', 'laptop', 'i7', '2014'),
(17, 'i7-4770', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 3.4, 3.9, 84, 32, 2, 25.6, 309, 'Intel® HD Graphics 4600', 'desktop', 'i7', '2014'),
(18, 'i7-4765T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 2, 3, 35, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600', 'laptop', 'i7', '2014'),
(19, 'i7-4790T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 2.7, 3.9, 45, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600', 'laptop', 'i7', '2014'),
(20, 'i7-4770S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 3.1, 3.9, 65, 32, 2, 25.6, 307, '', 'desktop', 'i7', '2014'),
(21, 'i7-4770R', 'Haswell', 'intel', 'FCBGA 1364', '22', 4, 4, '8M Smart cache', 3.2, 3.9, 65, 32, 2, 25.6, 303, '', 'desktop', 'i7', '2014'),
(22, 'i7-4790S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 3.2, 4, 65, 32, 2, 25.6, 303, '', 'desktop', 'i7', '2014'),
(23, 'i7-4770K', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '8M Smart cache', 3.5, 3.9, 84, 32, 2, 25.6, 303, '', 'desktop', 'i7', '2014'),
(24, 'i5-5300U', 'Broadwell', 'intel', 'FCBGA 1168', '14nm', 2, 4, '3MB', 2.3, 2.9, 15, 16, 2, 25.6, NULL, 'Intel® HD Graphics 5500', 'laptop', 'i5', '2015'),
(25, 'i5-5200U ', 'Broadwell', 'intel', 'FCBGA 1168', '14nm', 2, 4, '3MB', 2.2, 2.7, 15, 16, 2, 25.6, NULL, 'Intel® HD Graphics 5500', 'laptop', 'i5', '2013'),
(26, 'i5-5287U', 'Broadwell', 'intel', 'FCBGA 1168', '14nm', 2, 4, '3MB', 2.9, NULL, 28, 16, 2, 25.6, NULL, 'Intel® Iris™ Graphics 6100', 'laptop', 'i5', '2015'),
(27, 'i5-5257U', 'Broadwell', 'intel', 'FCBGA 1168', '14nm', 2, 4, '3MB', 2.7, 3.1, 28, 16, 2, 25.6, NULL, 'Intel® Iris™ Graphics 6100', 'laptop', 'i5', '2015'),
(28, 'i5-5250U', 'Broadwell', 'intel', 'FCBGA 1168', '14nm', 2, 4, '3MB', 1.6, 2.7, 15, 16, 2, 25.6, NULL, 'Intel® Iris™ Graphics 6000', 'laptop', 'i5', '2015'),
(29, 'i5-4670', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.4, 3.8, 84, 32, 2, 25.6, 224, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2015'),
(30, 'i5-4670K', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.4, 3.8, 84, 32, 2, 25.6, 243, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2015'),
(31, 'i5-4670R', 'Crystal Well', 'intel', 'FCBGA 1364', '22', 4, 4, '4 MB Intel® Smart Cache ', 3, 3.7, 65, 32, 2, 25.6, 213, 'Intel® Iris™ Pro Graphics 5200', 'desktop', 'i5', '2013'),
(32, 'i5-4670S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.1, 3.8, 65, 32, 2, 25.6, 213, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(33, 'i5-4670T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2.3, 3.3, 45, 32, 2, 25.6, 213, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(34, 'i5-4690', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.5, 3.9, 84, 32, 2, 25.6, 224, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(35, 'i5-4690K', 'Devil''s Canyon', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.5, 3.9, 88, 32, 2, 25.6, 243, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(36, 'i5-4690S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.2, 3.9, 65, 32, 2, 25.6, 224, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(37, 'i5-4690T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2.5, 3.5, 45, 32, 2, 25.6, 213, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(38, 'i5-4570', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.2, 3.6, 84, 32, 2, 25.6, 202, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(39, 'i5-4570R', 'Crystal Well', 'intel', 'FCBGA 1364', '22', 4, 4, '4 MB Intel® Smart Cache ', 2.7, 3.2, 65, 32, 2, 25.6, 255, 'Intel® Iris™ Pro Graphics 5200', 'desktop', 'i5', '2013'),
(40, 'i5-4570S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2.9, 3.6, 65, 32, 2, 25.6, 195, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(41, 'i5-4590', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.3, 3.7, 84, 32, 2, 25.6, 202, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(42, 'i5-4570T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '4 MB Intel® Smart Cache ', 2.9, 3.6, 35, 32, 2, 25.6, 195, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(43, 'i5-4590S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3, 3.7, 65, 32, 2, 25.6, 192, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(44, 'i5-4590T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2, 3, 35, 32, 2, 25.6, 192, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(45, 'i5-4460T', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 1.9, 2.7, 35, 32, 2, 25.6, 182, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(46, 'i5-4460S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2.9, 3.4, 65, 32, 2, 25.6, 182, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(47, 'i5-4460', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.2, 3.4, 84, 32, 2, 25.6, 187, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2014'),
(48, 'i5-4440S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2.8, 3.3, 65, 32, 2, 25.6, 187, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(49, 'i5-4440', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3.1, 3.3, 84, 32, 2, 25.6, 187, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(50, 'i5-4430S', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 2.7, 3.2, 65, 32, 2, 25.6, 182, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013'),
(51, 'i5-4430', 'Haswell', 'intel', 'LGA 1150', '22', 4, 4, '6 MB Intel® Smart Cache ', 3, 3.2, 84, 32, 2, 25.6, 187, 'Intel® HD Graphics 4600', 'desktop', 'i5', '2013');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
