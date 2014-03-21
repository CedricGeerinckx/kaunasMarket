-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 21. 03 2014 kl. 09:06:21
-- Serverversion: 5.5.36
-- PHP-version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mm_ip`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Data dump for tabellen `image`
--

INSERT INTO `image` (`ID`, `name`, `type`, `vendor_id`) VALUES
(1, 'galleryimg1.jpg', 'gallery', NULL),
(2, 'galleryimg2.jpg', 'gallery', NULL),
(3, 'galleryimg3.jpg', 'gallery', NULL),
(4, 'galleryimg4.jpg', 'gallery', NULL),
(5, 'galleryimg5.jpg', 'gallery', NULL),
(6, 'galleryimg6.jpg', 'gallery', NULL),
(7, 'galleryimg7.jpg', 'gallery', NULL),
(8, 'galleryimg8.jpg', 'gallery', NULL),
(9, 'galleryimg9.jpg', 'gallery', NULL),
(10, 'galleryimg10.jpg', 'gallery', NULL),
(11, 'galleryimg11.jpg', 'gallery', NULL),
(12, 'galleryimg12.jpg', 'gallery', NULL),
(13, 'galleryimg13.jpg', 'gallery', NULL),
(14, 'galleryimg14.jpg', 'gallery', NULL),
(15, 'galleryimg15.jpg', 'gallery', NULL),
(16, 'galleryimg16.jpg', 'gallery', NULL),
(17, 'galleryimg17.jpg', 'gallery', NULL),
(18, 'galleryimg18.jpg', 'gallery', NULL),
(19, 'galleryimg19.jpg', 'gallery', NULL),
(20, 'galleryimg20.jpg', 'gallery', NULL),
(22, 'galleryimg21.jpg', 'gallery', NULL),
(23, 'galleryimg22.jpg', 'gallery', NULL),
(24, 'galleryimg23.jpg', 'gallery', NULL),
(25, 'galleryimg24.jpg', 'gallery', NULL),
(26, 'galleryimg25.jpg', 'gallery', NULL),
(27, 'galleryimg26.jpg', 'gallery', NULL),
(28, 'galleryimg27.jpg', 'gallery', NULL),
(29, 'galleryimg28.jpg', 'gallery', NULL),
(30, 'galleryimg29.jpg', 'gallery', NULL),
(31, 'galleryimg30.jpg', 'gallery', NULL),
(32, 'galleryimg31.jpg', 'gallery', NULL),
(33, 'galleryimg32.jpg', 'gallery', NULL),
(34, 'galleryimg33.jpg', 'gallery', NULL),
(35, 'galleryimg34.jpg', 'gallery', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
