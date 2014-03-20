-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20.03.2014 klo 13:52
-- Palvelimen versio: 5.6.16
-- PHP Version: 5.5.9

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
-- Rakenne taululle `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Vedos taulusta `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Rakenne taululle `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Vedos taulusta `category`
--

INSERT INTO `category` (`ID`, `description`, `name`) VALUES
(1, '', 'Food'),
(2, '', 'Clothes');

-- --------------------------------------------------------

--
-- Rakenne taululle `datatest`
--

CREATE TABLE IF NOT EXISTS `datatest` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `lat` text COLLATE utf8_unicode_ci NOT NULL,
  `long` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Vedos taulusta `datatest`
--

INSERT INTO `datatest` (`ID`, `name`, `desc`, `lat`, `long`, `category`) VALUES
(1, 'Roman Pierce', 'Selling alot of cool stuff', '54.897243', '23.917481', 1),
(2, 'Ole Birk', 'Selling the best honey! and socks!', '54.897223', '23.917621', 2),
(3, 'Hulliku Horse', 'Homemade beer, vodka and stuff', '54.897213', '23.917801', 3),
(4, 'HORSE-man', 'Animals on stones - Lots of cool stuff', '54.897203', '23.918101', 5),
(5, 'Best-Shop-MUGE', 'DOING THE BEST CHEESE WORLD', '54.897213', '23.918301', 4),
(6, 'PartyHouse', 'Selling some random stuff, that neeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeds alot of description', '54.897173', '23.918601', 6),
(7, 'Pieter McDonald', 'Selling some random stuff, that neeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeds alot of description', '54.897163', '23.918901', 7),
(8, 'Jedi Jensen', 'Selling some random stuff, that neeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeds alot of description', '54.897163', '23.919051', 2),
(9, 'George Loft', 'Selling some random stuff, that neeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeds alot of description', '54.897143', '23.919301', 1),
(10, 'Carsten Hansen', 'Selling some random stuff, that neeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeds alot of description', '54.897133', '23.919601', 8),
(11, 'Small-shop', 'Selling some other random stuff! Nice place to hang around loooooooooooooooooooong texttextex', '54.897133', '23.919801', 5);

-- --------------------------------------------------------

--
-- Rakenne taululle `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Vedos taulusta `image`
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
(19, 'galleryimg19.jpg', 'gallery', NULL);

-- --------------------------------------------------------

--
-- Rakenne taululle `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Vedos taulusta `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`) VALUES
(1, 'othernews', '<p>More news here</p>'),
(2, 'history', '<p>Testing more sdasdadad</p>'),
(3, 'what', '<p>TEEEEXT</p>'),
(4, 'where', '<p>YIPPII</p>'),
(5, 'when', '<p>Some text here!</p>'),
(6, 'who', '<p>WHOOO?</p>');

-- --------------------------------------------------------

--
-- Rakenne taululle `spot`
--

CREATE TABLE IF NOT EXISTS `spot` (
  `ID` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `vendor_id` int(255) NOT NULL DEFAULT '0',
  `x1` int(255) NOT NULL,
  `y1` int(255) NOT NULL,
  `x2` int(255) NOT NULL,
  `y2` int(255) NOT NULL,
  `x3` int(255) NOT NULL,
  `y3` int(255) NOT NULL,
  `x4` int(255) NOT NULL,
  `y4` int(255) NOT NULL,
  `taken` bit(1) NOT NULL DEFAULT b'0',
  `map` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `spot`
--

INSERT INTO `spot` (`ID`, `size`, `price`, `vendor_id`, `x1`, `y1`, `x2`, `y2`, `x3`, `y3`, `x4`, `y4`, `taken`, `map`) VALUES
('A4', 'default', 0, 0, 132, 492, 153, 488, 138, 512, 157, 503, b'0', 'A'),
('A3', 'default', 0, 0, 112, 429, 131, 421, 118, 441, 135, 438, b'0', 'A'),
('A2', 'default', 0, 0, 109, 408, 124, 401, 114, 422, 127, 418, b'0', 'A'),
('A1', 'default', 0, 0, 98, 390, 119, 382, 107, 404, 123, 397, b'0', 'A'),
('A5', 'default', 0, 0, 138, 514, 158, 505, 141, 530, 164, 522, b'0', 'A'),
('A6', 'default', 0, 0, 145, 531, 161, 525, 150, 548, 173, 540, b'0', 'A'),
('A7', 'default', 0, 0, 120, 340, 140, 334, 124, 356, 142, 351, b'0', 'A'),
('B1', 'default', 0, 0, 612, 406, 627, 406, 609, 423, 628, 423, b'0', 'B'),
('A8', 'default', 0, 0, 126, 357, 144, 352, 132, 372, 148, 366, b'0', 'A'),
('A9', 'default', 0, 0, 129, 374, 148, 367, 134, 387, 151, 383, b'0', 'A'),
('B2', 'default', 0, 0, 611, 353, 626, 353, 610, 370, 626, 369, b'0', 'B'),
('A11', 'default', 0, 0, 142, 405, 156, 400, 148, 420, 163, 414, b'0', 'A'),
('A10', 'default', 0, 0, 136, 388, 151, 383, 140, 402, 158, 399, b'0', 'A'),
('A12', 'default', 0, 0, 146, 419, 163, 414, 153, 436, 167, 431, b'0', 'A'),
('A13', 'default', 0, 0, 151, 436, 168, 432, 157, 452, 173, 445, b'0', 'A'),
('A14', 'default', 0, 0, 157, 452, 173, 447, 163, 468, 178, 463, b'0', 'A'),
('A15', 'default', 0, 0, 160, 469, 180, 462, 165, 485, 184, 477, b'0', 'A'),
('A16', 'default', 0, 0, 198, 462, 215, 464, 197, 482, 216, 482, b'0', 'A'),
('A17', 'default', 0, 0, 215, 464, 232, 466, 214, 480, 234, 482, b'0', 'A'),
('A18', 'default', 0, 0, 233, 464, 251, 464, 232, 481, 250, 481, b'0', 'A'),
('B4', 'default', 0, 0, 592, 351, 608, 352, 592, 370, 607, 369, b'0', 'B'),
('B6', 'default', 0, 0, 574, 352, 589, 352, 574, 369, 590, 369, b'0', 'B'),
('B8', 'default', 0, 0, 555, 351, 572, 350, 555, 369, 571, 369, b'0', 'B'),
('B10', 'default', 0, 0, 537, 349, 553, 349, 537, 367, 555, 367, b'0', 'B'),
('B12', 'default', 0, 0, 519, 351, 536, 351, 520, 368, 534, 367, b'0', 'B'),
('B14', 'default', 0, 0, 501, 349, 519, 351, 503, 367, 517, 368, b'0', 'B'),
('B16', 'default', 0, 0, 483, 351, 500, 350, 484, 366, 498, 366, b'0', 'B'),
('B18', 'default', 0, 0, 464, 348, 480, 348, 465, 365, 480, 366, b'0', 'B'),
('B20', 'default', 0, 0, 446, 347, 462, 347, 447, 367, 464, 366, b'0', 'B'),
('B22', 'default', 0, 0, 429, 348, 444, 349, 428, 364, 445, 363, b'0', 'B'),
('B24', 'default', 0, 0, 409, 348, 428, 345, 411, 363, 427, 363, b'0', 'B'),
('B26', 'default', 0, 0, 392, 348, 409, 347, 393, 363, 408, 364, b'0', 'B'),
('B28', 'default', 0, 0, 373, 346, 391, 345, 372, 363, 390, 361, b'0', 'B'),
('B30', 'default', 0, 0, 357, 345, 372, 345, 356, 363, 373, 362, b'0', 'B'),
('B32', 'default', 0, 0, 338, 344, 355, 343, 336, 363, 355, 361, b'0', 'B'),
('B34', 'default', 0, 0, 320, 344, 337, 343, 320, 361, 335, 362, b'0', 'B'),
('B36', 'default', 0, 0, 300, 343, 317, 344, 302, 362, 317, 360, b'0', 'B'),
('B38', 'default', 0, 0, 284, 343, 298, 344, 283, 360, 299, 359, b'0', 'B'),
('B40', 'default', 0, 0, 264, 343, 282, 342, 265, 361, 281, 362, b'0', 'B'),
('B42', 'default', 0, 0, 246, 343, 264, 342, 247, 360, 263, 358, b'0', 'B'),
('B44', 'default', 0, 0, 229, 342, 247, 343, 228, 357, 243, 358, b'0', 'B'),
('B46', 'default', 0, 0, 209, 341, 226, 342, 209, 359, 226, 359, b'0', 'B'),
('B48', 'default', 0, 0, 191, 341, 208, 342, 192, 358, 206, 357, b'0', 'B'),
('B50', 'default', 0, 0, 173, 340, 192, 341, 175, 357, 190, 357, b'0', 'B'),
('B52', 'default', 0, 0, 156, 340, 172, 340, 156, 356, 171, 356, b'0', 'B'),
('B54', 'default', 0, 0, 137, 338, 155, 339, 139, 355, 153, 358, b'0', 'B'),
('B56', 'default', 0, 0, 119, 338, 136, 338, 119, 356, 135, 355, b'0', 'B'),
('B2b', 'default', 0, 0, 591, 407, 607, 406, 593, 420, 608, 419, b'0', 'B'),
('B3', 'default', 0, 0, 576, 407, 592, 405, 576, 423, 591, 423, b'0', 'B'),
('B5', 'default', 0, 0, 558, 406, 574, 404, 559, 422, 574, 422, b'0', 'B'),
('B7', 'default', 0, 0, 541, 404, 558, 405, 541, 422, 557, 423, b'0', 'B'),
('B9', 'default', 0, 0, 523, 405, 538, 405, 524, 421, 540, 421, b'0', 'B'),
('B11', 'default', 0, 0, 505, 406, 523, 405, 507, 421, 523, 420, b'0', 'B'),
('B13', 'default', 0, 0, 490, 404, 505, 404, 489, 419, 506, 422, b'0', 'B'),
('B17', 'default', 0, 0, 455, 401, 471, 401, 456, 421, 471, 421, b'0', 'B'),
('B19', 'default', 0, 0, 419, 403, 435, 402, 420, 418, 436, 417, b'0', 'B'),
('B23', 'default', 0, 0, 385, 400, 400, 401, 386, 416, 401, 418, b'0', 'B'),
('B25', 'default', 0, 0, 366, 400, 385, 400, 369, 417, 384, 417, b'0', 'B'),
('B27', 'default', 0, 0, 351, 399, 366, 400, 351, 416, 365, 417, b'0', 'B'),
('B33', 'default', 0, 0, 297, 397, 315, 398, 299, 414, 315, 415, b'0', 'B'),
('B35', 'default', 0, 0, 279, 399, 295, 397, 281, 415, 297, 415, b'0', 'B'),
('B37', 'default', 0, 0, 264, 398, 279, 398, 263, 415, 279, 413, b'0', 'B'),
('B41', 'default', 0, 0, 229, 397, 246, 396, 230, 413, 244, 412, b'0', 'B'),
('B43', 'default', 0, 0, 212, 395, 229, 397, 212, 413, 229, 412, b'0', 'B'),
('B45', 'default', 0, 0, 193, 397, 209, 394, 195, 411, 211, 412, b'0', 'B'),
('B47', 'default', 0, 0, 176, 396, 192, 396, 177, 411, 194, 411, b'0', 'B'),
('B49', 'default', 0, 0, 159, 393, 177, 393, 161, 411, 176, 411, b'0', 'B'),
('A19', 'default', 0, 0, 257, 463, 267, 465, 256, 477, 266, 477, b'0', 'A');

-- --------------------------------------------------------

--
-- Rakenne taululle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Rakenne taululle `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `ID` int(250) NOT NULL AUTO_INCREMENT,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comp_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_compreg_no` int(100) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` int(255) DEFAULT NULL,
  `description1` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description2` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `paid` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=9 ;

--
-- Vedos taulusta `vendor`
--

INSERT INTO `vendor` (`ID`, `regtime`, `first_name`, `last_name`, `comp_name`, `id_compreg_no`, `birth`, `address`, `city`, `phone`, `product`, `photo_id`, `description1`, `description2`, `paid`) VALUES
(0, '0000-00-00 00:00:00', 'default', 'default', NULL, NULL, '2014-03-03', 'this street 13', 'city', '123456789', 'default', NULL, NULL, NULL, b'0'),
(1, '0000-00-00 00:00:00', 'Aniol', 'Lidon', 'upc', NULL, '2014-03-12', 'asdfghjkl', 'asdfghjkl', 'asdfghjkl', 'potatoes', NULL, NULL, NULL, b'1'),
(3, '0000-00-00 00:00:00', 'test3', 'test3', ' ', 445588, NULL, 'way', 'city', '+45 8844785', '', 0, ' ', ' ', b'0'),
(4, '2014-03-19 07:51:24', 'Testname1', 'Testlasname1', 'Shopname1', 111, NULL, '111', 'Kaunas', '31245687895', '', NULL, NULL, NULL, b'0'),
(5, '2014-03-19 08:23:30', 'RiÄardas', 'Butauskas', 'GraÅ¾Å«s produktai', 2147483647, NULL, 'Darvino g. 16-10', 'Kaunas', '862736818', '', NULL, NULL, NULL, b'0'),
(6, '2014-03-19 08:31:42', 'RiÄardas', 'Butauskas', 'GraÅ¾Å«s produktai', 2147483647, NULL, 'Darvino g. 16-10', '454545', '862736818', '', NULL, NULL, NULL, b'0'),
(7, '2014-03-19 08:32:53', 'RiÄardas', 'Butauskas', 'GraÅ¾Å«s produktai', 2147483647, NULL, 'Darvino g. 16-10', '454545', '862736818', '', NULL, NULL, NULL, b'0'),
(8, '2014-03-19 08:51:06', 'RiÄardas', 'Butauskas', 'GraÅ¾Å«s produktai', 2147483647, NULL, 'Darvino g. 16-10', '454545', '862736818', '', NULL, NULL, NULL, b'0');

-- --------------------------------------------------------

--
-- Rakenne taululle `vendorcategory`
--

CREATE TABLE IF NOT EXISTS `vendorcategory` (
  `vendorcatID` int(255) NOT NULL AUTO_INCREMENT,
  `catID` int(255) NOT NULL,
  `vendorID` int(255) NOT NULL,
  PRIMARY KEY (`vendorcatID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Vedos taulusta `vendorcategory`
--

INSERT INTO `vendorcategory` (`vendorcatID`, `catID`, `vendorID`) VALUES
(1, 1, 4),
(2, 3, 4),
(3, 5, 4),
(4, 1, 5),
(5, 3, 5),
(6, 6, 5),
(7, 1, 6),
(8, 3, 6),
(9, 6, 6),
(10, 1, 7),
(11, 3, 7),
(12, 6, 7),
(13, 1, 8),
(14, 3, 8),
(15, 6, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
