-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2015 at 06:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(7, 'new', 'new', 0),
(8, 'غير مصنف', '%d8%ba%d9%8a%d8%b1-%d9%85%d8%b5%d9%86%d9%81', 0),
(10, 'Menu1', 'menu1', 0),
(12, 'Manufactured', 'manufactured', 0),
(13, 'Partners', 'partners', 0),
(14, 'TE Connectivity', 'te_connectivity', 0),
(15, 'Seal For Life Industries', 'seal_for_life_industries', 0),
(16, 'Pentair', 'pentair', 0),
(17, 'Raychem RPG', 'raychem', 0),
(18, 'Kudos', 'kudos', 0),
(19, 'Menu1 - Arabic0', 'menu1-arabic0', 0),
(20, 'sada', 'sada', 0),
(21, 'ما نصنعه', '%25d9%2585%25d8%25a7-%25d9%2586%25d8%25b5%25d9%2586%25d8%25b9%25d9%2587', 0),
(22, 'عملائنا', '%25d8%25b9%25d9%2585%25d9%2584%25d8%25a7%25d8%25a6%25d9%2586%25d8%25a7', 0),
(23, 'Kudos', 'kudos-ar', 0),
(24, 'Pentair', 'pentair-ar', 0),
(25, 'Raychem RPG', 'raychem-rpg', 0),
(26, 'Seal For Life Industries', 'seal-for-life-industries', 0),
(27, 'TE Connectivity', 'te-connectivity', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
