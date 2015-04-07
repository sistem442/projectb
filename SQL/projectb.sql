-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 08:23 PM
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
  `socket` varchar(10) NOT NULL,
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
  `graphics` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`id`, `product_name`, `code_name`, `brand`, `socket`, `litography`, `number_of_cores`, `number_of_threads`, `cache`, `frequency`, `turbo_frequency`, `tdp`, `max_ram_memory`, `max_memory_channels`, `max_memory_bandwidth`, `price`, `graphics`) VALUES
(1, 'i7-4790K', 'Devil''s Canyon                    ', 'intel', '1150', '22', 4, 8, '8M Smart cache', 4, 4.4, 88, 32, 2, 25.6, 339, ''),
(2, 'i7-4790', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.6, 4, 84, 32, 2, 25.6, 303, ''),
(3, 'FX-9590', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4.7, NULL, 220, NULL, 2, NULL, 220, ''),
(4, 'FX-8370', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4, NULL, 125, NULL, NULL, NULL, 194, ''),
(5, 'FX-8370E', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.3, NULL, 95, NULL, NULL, NULL, 194, ''),
(6, 'FX-8320E', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.2, NULL, 95, NULL, NULL, NULL, 142, ''),
(7, 'FX-83210', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.4, NULL, 95, NULL, NULL, NULL, 169, ''),
(8, 'FX-8350', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4, NULL, 125, NULL, NULL, NULL, 173, ''),
(9, 'FX-8320', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.5, NULL, 125, NULL, NULL, NULL, 142, ''),
(10, 'FX-8300', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.3, NULL, 95, NULL, NULL, NULL, 150, ''),
(11, 'FX-9370', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 4.4, NULL, 220, NULL, 2, NULL, 200, ''),
(12, 'FX-8150', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.6, NULL, 125, NULL, NULL, NULL, 183, ''),
(13, 'FX-8120', 'Zambezi', 'amd', 'AM3+', '32', 8, 8, '8MB L2', 3.1, NULL, 125, NULL, NULL, NULL, 153, ''),
(14, 'i7-4785T', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 2.2, 3.2, 35, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600'),
(15, 'i7-4771', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.5, 3.9, 84, 32, 2, 25.6, 315, 'Intel® HD Graphics 4600'),
(16, 'i7-4770T', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 2.5, 3.7, 45, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600'),
(17, 'i7-4770', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.4, 3.9, 84, 32, 2, 25.6, 309, 'Intel® HD Graphics 4600'),
(18, 'i7-4765T', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 2, 3, 35, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600'),
(19, 'i7-4790T', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 2.7, 3.9, 45, 32, 2, 25.6, NULL, 'Intel® HD Graphics 4600'),
(20, 'i7-4770S', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.1, 3.9, 65, 32, 2, 25.6, 307, ''),
(21, 'i7-4770R', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.2, 3.9, 65, 32, 2, 25.6, 303, ''),
(22, 'i7-4790S', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.2, 4, 65, 32, 2, 25.6, 303, ''),
(23, 'i7-4770K', 'Haswell', 'intel', '1150', '22', 4, 4, '8M Smart cache', 3.5, 3.9, 84, 32, 2, 25.6, 303, ''),
(24, 'i5-5300U', 'Broadwell', 'intel', 'FCBGA1168', '14nm', 2, 4, '3MB', 2.3, 2.9, 15, 16, 2, 25.6, NULL, 'Intel® HD Graphics 5500'),
(25, 'i5-5200U ', 'Broadwell', 'intel', 'FCBGA1168', '14nm', 2, 4, '3MB', 2.2, 2.7, 15, 16, 2, 25.6, NULL, 'Intel® HD Graphics 5500'),
(26, 'i5-5287U', 'Broadwell', 'intel', 'FCBGA1168', '14nm', 2, 4, '3MB', 2.9, NULL, 28, 16, 2, 25.6, NULL, 'Intel® Iris™ Graphics 6100'),
(27, 'i5-5257U', 'Broadwell', 'intel', 'FCBGA1168', '14nm', 2, 4, '3MB', 2.7, 3.1, 28, 16, 2, 25.6, NULL, 'Intel® Iris™ Graphics 6100'),
(28, 'i5-5250U', 'Broadwell', 'intel', 'FCBGA1168', '14nm', 2, 4, '3MB', 1.6, 2.7, 15, 16, 2, 25.6, NULL, 'Intel® Iris™ Graphics 6000');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
