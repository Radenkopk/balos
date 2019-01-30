-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2019 at 01:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balos`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartmans`
--

DROP TABLE IF EXISTS `apartmans`;
CREATE TABLE IF NOT EXISTS `apartmans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(1024) COLLATE utf8_bin NOT NULL,
  `description1` text COLLATE utf8_bin NOT NULL,
  `description2` text COLLATE utf8_bin NOT NULL,
  `location` int(11) DEFAULT NULL,
  `video` varchar(1024) COLLATE utf8_bin NOT NULL,
  `travel_program` text COLLATE utf8_bin NOT NULL,
  `payment` text COLLATE utf8_bin NOT NULL,
  `pricelist` text COLLATE utf8_bin NOT NULL,
  `active` int(11) DEFAULT NULL,
  `region_city_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `slug` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apartmans`
--

INSERT INTO `apartmans` (`id`, `title`, `subtitle`, `description1`, `description2`, `location`, `video`, `travel_program`, `payment`, `pricelist`, `active`, `region_city_id`, `created_at`, `updated_at`, `slug`, `home`, `deleted_at`) VALUES
(19, 'Vila Nikos - Afitos', 'dddddddddd', '<p>dddddddddd</p>', '<p>dddddddddddd</p>', NULL, 'ddddddddddddd', '<p>ddddddddd</p>', '<p>ddddddddddddddddddd</p>', '<ul>\r\n	<li>dddddddddddddd</li>\r\n</ul>', 1, 17, '2019-01-23 16:30:17', '2019-01-23 16:30:21', 'vila-nikos-afitos', 1, NULL),
(18, 'Vila Vrahos - Afitos', 'podnaslov', '<p>sdfa</p>', '<p>sadf</p>', NULL, 'ddd', '<p>dd</p>', '<p>ddd</p>', '<p>dd</p>', 1, 15, '2019-01-23 16:28:36', '2019-01-23 16:31:27', 'kahlenberg-apartmani-afitos', 1, NULL),
(17, 'neki apartman', 'podnaslov', '<p>neki tekst proba</p>', '<p>neki tekst proba&nbsp;neki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst probaneki tekst proba</p>', NULL, 'https://www.youtube.com/embed/De5IUvZCuIo', '<p>program</p>', '<p>neki tekst</p>', '<p>dddd</p>', 0, 16, '2019-01-23 16:26:43', '2019-01-29 12:58:02', 'neki-apartman', 1, NULL),
(20, 'Delfin duplex', 'ddd', '<p>ddd</p>', '<p>ddd</p>', NULL, 'dd', '<p>ddd</p>', '<p>ddd</p>', '<p>dd</p>', 0, 17, '2019-01-23 16:32:21', '2019-01-29 12:58:08', 'delfin-duplex', 1, NULL),
(27, 'ewtrweerw', 'ertweqwer', '<p>weqr</p>', '<p>weqr</p>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.0369807804777!2d20.46607931594983!3d44.80043497909864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a700baaa97179%3A0xe90fce53d489c353!2sBalos+Travel!5e0!3m2!1ssr!2srs!4v1528898887165\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<p>werq</p>', '<p>ewrq</p>', '<p>werq</p>', 1, 16, '2019-01-28 16:16:01', '2019-01-29 23:23:39', 'werq', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apartmans_images`
--

DROP TABLE IF EXISTS `apartmans_images`;
CREATE TABLE IF NOT EXISTS `apartmans_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(1999) COLLATE utf8_bin DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apartmans_images`
--

INSERT INTO `apartmans_images` (`id`, `image`, `active`, `parent_id`, `created_at`, `updated_at`) VALUES
(49, 'skala_1548807620.jpg', NULL, 27, '2019-01-29 23:20:20', '2019-01-29 23:20:20'),
(40, '123_1548777808.jpg', NULL, 19, '2019-01-29 15:03:28', '2019-01-29 15:03:28'),
(47, 'Lasi_1548807594.png', NULL, 27, '2019-01-29 23:19:54', '2019-01-29 23:19:54'),
(48, 'nea-vrasna_1548807607.jpg', NULL, 27, '2019-01-29 23:20:07', '2019-01-29 23:20:07'),
(41, 'Screenshot_3_1548779558.png', NULL, 27, '2019-01-29 15:32:38', '2019-01-29 15:32:38'),
(42, 'Screenshot_2_1548779568.png', NULL, 20, '2019-01-29 15:32:48', '2019-01-29 15:32:48'),
(45, 'golden_1548807576.jpg', NULL, 27, '2019-01-29 23:19:36', '2019-01-29 23:19:36'),
(46, 'kefalonija_1548807584.jpg', NULL, 27, '2019-01-29 23:19:44', '2019-01-29 23:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `home` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `active`, `created_at`, `updated_at`, `home`, `deleted_at`, `slug`) VALUES
(16, 'PARGA PLAŽE', '<p><strong>Parga</strong>&nbsp;&ndash; mala Italija jedno je od najlep&scaron;ih letovali&scaron;ta na zapadnoj obali Grčke.&nbsp; Kada budete prvi put kročili u Pargu, bićete odu&scaron;evljeni atmosferom,&nbsp; gostoljubivo&scaron;ću, arhitekturom i predivnim pejzažima koji vas okružuju sa svih strana. Poželećete da se popnete na staru tvrđavu, pro&scaron;etate uz luku, ili da obiđete predivno ostrvo Panagia, na koji Parga gleda.<br />\r\nPored svih predivnih pejzaža, itekako ćete se odu&scaron;eviti bojom mora, čistoćom i predivnim plažama koje krase Pargu i njeno okruženje.</p>', 1, '2019-01-23 16:40:26', '2019-01-23 16:42:49', 1, NULL, 'parga-plaze'),
(17, 'neki blog', '<p>dddddd</p>', 1, '2019-01-23 16:42:14', '2019-01-23 16:42:47', 1, NULL, 'neki-blog');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `image` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `title`, `description`, `image`, `active`, `parent_id`, `created_at`, `updated_at`, `deleted_at`, `slug`) VALUES
(45, 'neka plaza', '<p>dddd</p>', NULL, 1, 16, '2019-01-23 16:40:37', '2019-01-23 16:40:37', NULL, NULL),
(44, 'drugo', '<p>sdfgsdg</p>', NULL, 1, 13, '2019-01-21 13:44:25', '2019-01-21 13:44:25', NULL, NULL),
(43, 'blogcic 2', '<p>sadf</p>', NULL, 1, 15, '2019-01-21 13:43:01', '2019-01-21 13:47:37', NULL, 'blogcic-2'),
(42, 'blogcic 1', '<p>asdf</p>', NULL, 1, 15, '2019-01-21 13:42:49', '2019-01-21 13:42:49', NULL, NULL),
(46, 'ddddddddddddd', '<p>ddddddddddddddddd</p>', NULL, 1, 16, '2019-01-23 16:41:06', '2019-01-23 16:41:06', NULL, NULL),
(47, 'neka plaza', '<p>dddd</p>', NULL, 1, 17, '2019-01-23 16:42:28', '2019-01-23 16:42:28', NULL, NULL),
(48, 'neka druga plaza', '<p>ddd</p>', NULL, 1, 17, '2019-01-23 16:42:40', '2019-01-23 16:42:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destination_images`
--

DROP TABLE IF EXISTS `destination_images`;
CREATE TABLE IF NOT EXISTS `destination_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(1024) COLLATE utf8_bin NOT NULL,
  `description1` text COLLATE utf8_bin NOT NULL,
  `description2` text COLLATE utf8_bin NOT NULL,
  `location` int(11) DEFAULT NULL,
  `video` varchar(1024) COLLATE utf8_bin NOT NULL,
  `travel_program` text COLLATE utf8_bin NOT NULL,
  `payment` text COLLATE utf8_bin NOT NULL,
  `pricelist` text COLLATE utf8_bin NOT NULL,
  `active` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `region_city_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `slug` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `title`, `subtitle`, `description1`, `description2`, `location`, `video`, `travel_program`, `payment`, `pricelist`, `active`, `home`, `region_city_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(20, 'neki hotel', 'sadfasdfsa', '<p>asdfsdafs</p>', '<p>sdafsadfasd</p>', NULL, 'asdfasdf', '<p>sadfasdfas</p>', '<p>asdfsadfsf</p>', '<p>asdfsadfs</p>', 1, 0, 16, '2019-01-23 16:33:07', '2019-01-23 16:36:42', 'neki-hotel', NULL),
(21, 'Vila Achileas', 'sadf', '<p>sdfa</p>', '<p>asdf</p>', NULL, 'dddddddddddd', '<p>ddd</p>', '<p>ddd</p>', '<p>ddd</p>', 1, 1, 16, '2019-01-23 16:33:36', '2019-01-23 16:36:50', 'vila-achileas', NULL),
(22, 'Vila Anastasia I', 'dsafsdfsadf', '<p>asdfasdfa</p>', '<p>sdfasdfsadfasdf</p>', NULL, 'sadfasdf', '<p>asdfasdfasdf</p>', '<p>asdfsdfasd</p>', '<p>asdfasdfsdf</p>', 1, 1, 16, '2019-01-23 16:34:02', '2019-01-23 16:36:54', 'vila-anastasia-i', NULL),
(23, 'Vila Delta', 'sadfsdaf', '<p>sdafasdf</p>', '<p>sdafasdfsadf</p>', NULL, 'sdaf', '<p>sadf</p>', '<p>dsaf</p>', '<p>sadf</p>', 1, 1, 16, '2019-01-23 16:34:26', '2019-01-23 16:37:01', 'vila-delta', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

DROP TABLE IF EXISTS `hotel_images`;
CREATE TABLE IF NOT EXISTS `hotel_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(1999) COLLATE utf8_bin NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`id`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(8, '123_1548777519.jpg', 23, '2019-01-29 14:58:39', '2019-01-29 14:58:39'),
(5, 'nesto_1548770312.png', 22, '2019-01-29 12:58:32', '2019-01-29 12:58:32'),
(6, '123_1548771074.jpg', 23, '2019-01-29 13:11:14', '2019-01-29 13:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `last_minutes`
--

DROP TABLE IF EXISTS `last_minutes`;
CREATE TABLE IF NOT EXISTS `last_minutes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `last_minutes`
--

INSERT INTO `last_minutes` (`id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, '<h1>LAST MINUTE LETOVANJE 2018</h1>\r\n\r\n<p>ULTRA LAST MINUTE &ndash; POPUSTI DO 35% !!!</p>\r\n\r\n<p>PONUDA VAŽI ZA SLEDEĆE SMENE I DESTINACIJE:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>06.06.-16.06. (10 noćenja) EVIA (PEFKI i EDIPSOS), SIVOTA i PILION.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>30% POPUSTA NA SME&Scaron;TAJ :</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>10.06.-20.06. (10 noćenja) PARALIJA, OLYMPIC BEACH, PLATAMON, LEPTOKARIJA i NEI PORI.</p>\r\n	</li>\r\n	<li>\r\n	<p>12.06.-22.06. (10 noćenja) TASOS, OFRYNIO BEACH, ASPROVALTA, NEA VRASNA, STAVROS, JERISOS i AMULJANI.</p>\r\n	</li>\r\n	<li>\r\n	<p>13.06.-23.06. (10 noćenja) KEFALONIJA</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>SPECIJALNA PONUDA PAKET ARANŽMANA:</p>\r\n\r\n<p>1/2 STUDIO &ndash; 99&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n\r\n<p>1/3 STUDIO/APP &ndash; 89&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n\r\n<p>1/4 STUDIO/APP &ndash; 79&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVO</p>\r\n\r\n<p>1/5 i 1/6 STUDIO/APP &ndash; 69&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n\r\n<p>PONUDA VAŽI ZA SLEDEĆE SMENE I DESTINACIJE:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>04.06.-14.06. (10 noćenja) HANIOTI i PEFKOHORI.</p>\r\n	</li>\r\n	<li>\r\n	<p>06.06.-16.06. (10 noćenja) EVIA (PEFKI i EDIPSOS)</p>\r\n	</li>\r\n	<li>\r\n	<p>1/2 STUDIO &ndash; 109&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n	</li>\r\n	<li>\r\n	<p>1/3 STUDIO/APP &ndash; 99&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n	</li>\r\n	<li>\r\n	<p>1/4 STUDIO/APP &ndash; 89&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n	</li>\r\n	<li>\r\n	<p>1/5 i 1/6 STUDIO/APP &ndash; 79&euro; &ndash; PO OSOBI (SME&Scaron;TAJ + PREVOZ)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>PONUDA VAŽI ZA SLEDEĆE DESTINACIJE:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>06.06.-16.06. (10 noćenja) SIVOTA i PILION</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>NAPOMENA:</strong>&nbsp;ULTRA LAST MINUT PONUDA VAŽI BEZ OBZIRA NA NAČIN UPLATE!</p>\r\n\r\n<p>09.06.-19.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">PANORAMA</a>&nbsp;NEOS MARMARAS 1/4 APARTMAN &ndash; 105&euro; &ndash; PO OSOBI (10NOĆI+BAS), 325&euro; SOPSTVENI PREVOZ</p>\r\n\r\n<p>09.06.-19.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">PANORAMA</a>&nbsp;NEOS MARMARAS 1/3 APARTMAN &ndash; 125&euro; &ndash; PO OSOBI (10NOĆI+BAS), 255&euro; SOPSTVENI PREVOZ</p>\r\n\r\n<p>09.06.-19.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">NIKOS</a>&nbsp;NEOS MARMARAS 1/3 STUDIO &ndash; 125&euro; &ndash; PO OSOBI (10NOĆI+BAS), 225&euro; SOPSTVENI PREVOZ</p>\r\n\r\n<p>09.06.-19.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">NIKOS</a>&nbsp;NEOS MARMARAS 1/2 STUDIO &ndash; 135&euro; &ndash; PO OSOBI (10NOĆI+BAS), 215&euro; SOPSTVENI PREVOZ</p>\r\n\r\n<p>10.06.-20.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">PANOS</a>&nbsp;HANIOTI 1/3+1 APARTMAN &ndash; 119&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>10.06.-20.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">APART/HOTEL SARANTIS</a>&nbsp;HANIOTI &ndash; 1/2 STUDIO 119&euro; P OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>10.06.-20.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">POSEDONIO</a>&nbsp;POLIHRONO 1/4+2 STUDIO &ndash; 119&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>10.06.-20.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">ADAM II</a>&nbsp;POLIHRONO 1/3+2 STUDIO &ndash; 119&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>12.06.-22.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">VENUS PALACE</a>&nbsp;POLIHRONO 1/3+2 STUDIO &ndash; 119&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>12.06.-22.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">VAVALAS</a>&nbsp;STAVROS 1/3 APARTMAN &ndash; 120&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>12.06.-22.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">VULA</a>&nbsp;STAVROS 1/4-5 APARTMAN &ndash; 110&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>12.06.-22.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">ASPROVALTA BEACH</a>&nbsp;VRASNA 1/3-6 APARTMAN &ndash; 110&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>15.06.-25.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">DIMITRIS I</a>&nbsp;ASPROVALTA 1/2 STUDIO 129&euro;, 1/3 STUDIO 109&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>20.06.-30.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">APART/HOTEL SARANTIS</a>&nbsp;HANIOTI &ndash; 1/2 STUDIO 259&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>20.06.-30.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">PETRAKIS</a>&nbsp;HANIOTI 1/6 DUPLEX 199&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>20.06.-30.06. VILA&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">POSEDONIO</a>&nbsp;POLIHRONO 1/4+2 APARTMAN 169&euro; PO OSOBI PAKET ARANŽMAN</p>\r\n\r\n<p>23.06.-03.07.&nbsp;LEPTOKARIJA</p>\r\n\r\n<p>1/2 STUDIO &ndash; 169&euro; &ndash; PAKET ARANŽMAN PO OSOBI</p>\r\n\r\n<p>1/3 STUDIO &ndash; 149&euro; &ndash; PAKET ARANŽMAN PO OSOBI</p>\r\n\r\n<p>1/3+1, 1/4 STUDIO &ndash; 129&euro; &ndash; PAKET ARANŽMAN PO OSOBI</p>\r\n\r\n<p>PONUDA VAŽI ZA VILE:&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">ASTARTI</a>,&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">DIMITRIS</a>,&nbsp;<a href=\"http://dev.balos1.com/last-minute#\">HOTEL/APART OCEANIS</a>,</p>\r\n\r\n<p>SPECIJALNA PONUDA !!!</p>\r\n\r\n<p>VAŽI ZA SLEDEĆE SMENE I VILE:</p>\r\n\r\n<p>15 = 10 (08.06.-23.06.)</p>\r\n\r\n<p>KEFALONIJA (LASSI): (VILA TZAKI)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Za uplate u celosti popust je 10%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Specijalna ponuda se odnosi samo na sme&scaron;taj.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sa ovom specijalnom ponudom ne mogu se kombinovati ostali popusti.</p>\r\n\r\n<p>LAST MINUTE PONUDA- GRČKA APARTMANI 2018:</p>\r\n\r\n<p>AKCIJA NEDELJE 04.06. &ndash; 10.06.2018.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>važi za sve ostale termine koji nisu navedeni u ULTRA LAST MINUTE PONUDI</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>20% POPUSTA NA SME&Scaron;TAJ ZA UPLATE U CELOSTI PRILIKOM REZERVACIJE</p>\r\n\r\n<p>OFRYNIO BEACH (VILA SOFIA HOUSE)</p>\r\n\r\n<p>PARALIJA (VILA ZINOS)</p>\r\n\r\n<p>OLYMPIC BEACH (VILA OLGA)</p>\r\n\r\n<p>LEPTOKARIA (VILA FILIO)</p>\r\n\r\n<p>EVIA (PEFKI) (VILA MARIA LOUISIA)</p>\r\n\r\n<p>EVIA (EDIPSOS) (VILA AFRODIT)</p>\r\n\r\n<p>KEFALONIJA (VILE TZAKI I PITTAS)</p>\r\n\r\n<p>15% POPUSTA NA SME&Scaron;TAJ ZA UPLATE U CELOSTI PRILIKOM REZERVACIJE</p>', '2019-01-13 13:54:32', '2019-01-22 13:50:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `image` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `slug` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `title`, `description`, `image`, `active`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(23, 'Tasos', '<p>dd</p>', NULL, 1, '2019-01-23 16:18:29', '2019-01-28 20:11:55', 'tasos', NULL),
(20, 'lefkada', '<p>adsfdsaf</p>', NULL, 1, '2019-01-21 10:23:40', '2019-01-28 20:11:47', 'lefkada', NULL),
(22, 'kasandra', '<p>neki tekst</p>', NULL, 1, '2019-01-23 16:15:39', '2019-01-23 16:15:39', NULL, NULL),
(21, 'Asprovalta – Nea Vrasna – Stavros – Ofrinio Beach – letovanje 2019', '<p>222</p>', NULL, 1, '2019-01-21 10:44:02', '2019-01-21 10:45:07', 'neki-slug', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `region_cities`
--

DROP TABLE IF EXISTS `region_cities`;
CREATE TABLE IF NOT EXISTS `region_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) COLLATE utf8_bin NOT NULL,
  `active` int(11) DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `region_cities`
--

INSERT INTO `region_cities` (`id`, `title`, `active`, `region_id`, `created_at`, `updated_at`, `deleted_at`, `slug`) VALUES
(16, 'pefkohori', 1, 22, '2019-01-23 16:17:46', '2019-01-23 16:17:55', NULL, 'pefkohori'),
(15, 'nidri', 1, 20, '2019-01-21 10:25:08', '2019-01-21 11:23:37', NULL, 'nidri'),
(17, 'potos', 1, 23, '2019-01-23 16:18:49', '2019-01-23 16:18:49', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
