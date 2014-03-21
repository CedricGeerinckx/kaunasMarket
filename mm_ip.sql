-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21.03.2014 klo 12:45
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
(1, 'history', '<p>The roots of Kaziukas fair date back to the beginning of the 17th &nbsp;century. On the 7th of November 1602 Pope Clement VIII officially declared Casimir the local Saint of Poland and Lithuania. He was declared a Saint of the entire Roman Catholic Church by Clement VIIIs successor Paul V and a caretaker of Lithuania by Urbon VIII in 1636. His relics were moved from St. Casimir church, where they had been stored since 1604, to a highly decorated chapel that was built inside the Vilnius Cathedral on the special order of Sigismund III Vasa. Saint Casimir&rsquo;s relics survived there up to present times.</p><p>It has been speculated that the history of Kaziukas fair started from the relocation of the Saint&rsquo;s relics in 1636. And then a church festival dedicated to Saint Casimir began. Trading and all kinds of entertainment were inseparable parts of the festival. People called this time &lsquo;kermo&scaron;ius&rsquo; (from the German kirchmesse) and this tradition lasted for 200 years, slowing down during war time and disasters but emerging back later. It went on until 1827 when merchants of Vilnius acquired the privilege of organising larger trade festivals that lasted several days. This festival called &lsquo;jomarka&rsquo; (from German jahrmarkt) was the beginning of the actual Kaziukas Fair. They attracted not just the local Vilnius merchants but people from further provinces as well. This was also the time when some of major attributes of the current Kaziukas fair, like temporary tents and heart-shaped gingerbread called &ldquo;Heart of Kaziukas&rdquo;, first showed up.</p><p>In the beginning of the 20th century the location of &lsquo;jomarkas&rsquo; was moved to the Luki&scaron;kės square because the Russian government had built a statue of Catherine the Great in the Cathedral square, and having a fair that has it&rsquo;s roots in honouring a catholic saint held so close to the statue was unacceptable to them. During that time the fair was becoming popular not only amongst merchants, but local farmers, too. These farmers brought their home-made crafts to the fair. The fair would attract over two thousand carts and the Luki&scaron;kės square was not enough to fit them all, so the entire riverbank from Žvėrynas to Žaliasis bridge was covered with merchants tents. This period of prosperity was brought to the end by World War I and the following events. Vilnius Kaziukas Fair was revived in the 1930&rsquo;s and really flourished in the years after 1935 when Vilnius students started to contribute to the fair by organizing big costume parades. The Polish agency of tourism encouragement organised special trains to bring people from various Polish cities to Vilnius. The peak of the fair in the interwar period was from 1938 to 1939.</p><p>The prosperity of Kaziukas Fair was interrupted by the Second World War. After the war, Kaziukas was moved out of Luki&scaron;kės square because the statue of Lenin was built there. During the Soviet times, the fair was moved to the Kalvarijos market. The fair was not successful during these times because the number of traders and space was limited. The old traditions were only revived when Lithuania regained independence. Kaziukas Fair returned to the Cathedral square, the streets of the old city and expanded up to the Tymas quarter. When Lithuanian Family Farmers Union was established in 2000, it&rsquo;s chairman Kazimieras Starkevičius proposed a way to encourage small and medium businesses, farmers and artisans by organizing Kaziukas Fair in Kaunas. In the beginning the fair was called &lsquo;Kaziukas Fair&rsquo;. Organizers of the Vilnius Kaziukas Fair consulted the initiative group from Kaunas on organisational issues. The fair itself was rather modest when it came to it&rsquo;s size, it only had 200 to 300 traders, the concerts were small with few performances, there were also no merchant tents and trading was much simpler than that of the Vilnius fair. In 2005 the fair was renamed to &lsquo;Kazimieras Fair&rsquo;. This annual fair takes place in the beginning of March, the exact date of the fair is chosen in accordance with the Vilnius Kaziukas Fair in order to not have both events on the same week. Kaunas fair usually starts a week after Vilnius fair. The fair is constantly growing and now attracts around a thousand traders and many visitors from all around the country. The concert has expanded into a three day event filled with performances of the most famous folklore bands and pop musicians.</p>'),
(2, 'information', '<p>Kaunas Kaziukas Fair is an annual fair that brings the countryside to the city. Every March from the 14th to the 16th there will be farmers and craftsmen selling their homemade products in their own stands. There will also be many musicians and lots of music, and even a place where people can dance to traditional music. The fair takes up a large area from Nepriklausomybės square trough Laisvės alley in the centre of the city and Vilnius street in the old city, ending in the Rotu&scaron;ės square. You can get to the start of the fair by going to St. Michael the Archangel Church. The bus stop is called &ldquo;Gedimino gatvė&rdquo;.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
