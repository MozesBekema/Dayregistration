-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u6
-- http://www.phpmyadmin.net
--
-- Machine: db.joostdelange.nl
-- Genereertijd: 19 dec 2016 om 09:04
-- Serverversie: 5.5.38
-- PHP-Versie: 5.4.45-0+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `md401321db365950`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `portfolio_items`
--

CREATE TABLE IF NOT EXISTS `portfolio_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) DEFAULT NULL,
  `content` text,
  `date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `portfolio_items`
--

INSERT INTO `portfolio_items` (`id`, `titel`, `content`, `date`, `active`) VALUES
(11, 'Let me introduce myself', 'My name is Joost de Lange and I''m 18 years old. I''m currently living in Utrecht, the Netherlands and studying web development at <a href="http://glu.nl" target="_blank">the Graphic Lyceum Utrecht</a>.<br/>\r\nI really like programming, making music, photography and making (short)movies. That''s a lot of different activities but I think being wide orientated is very important so you''ll never get bored by one thing and don''t know what to do with your time anymore.<br/><br/>\r\nI really love <a href="https://dribbble.com/search?q=flat+design" target="_blank">Flat design</a> and I''m really happy minimalistic design is the trend right now. It makes webdesign so much easier because it goes hand in hand with responsive design. ', '2016-11-08 22:02:26', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'bezoeker'),
(3, 'redacteur');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `user_ip` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`roles_id`),
  KEY `fk_users_rolls_idx` (`roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=129 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roles_id`, `user_ip`, `email`) VALUES
(1, 'admin', '55c3b5386c486feb662a0785f340938f518d547f', 1, '', ''),
(108, 'apparell69', '282a3ed56303240d3df5eb177b100cf198ec1019', 2, '', ''),
(110, 'fatoe124', '5d9b56cdd1744a7fedee9e1914b13732aa3a501f', 2, '', ''),
(111, 'Alexis', '4dbd7c2276bf810072d316b2a700b06cf6d69d26', 2, '', ''),
(112, 'KillaMC', '4bda88ad3c708103925681f054d5ecc239d45b13', 2, '', ''),
(120, 'BloodTank', '557602f1db62d021d738292f3ac44bc73a470470', 2, '124.171.164.48', 'crazychickenman144@gmail.com'),
(121, 'bekema', '0e5882a9aba4e8061c359e7f725141192a417e6f', 2, '192.87.140.150', 'thomasbekema@gmail.com'),
(122, 'daenrebel', '814de42152c1480ae481e55fdafb81f4318e9c4e', 2, '192.87.140.150', 'daenrebel035@gmail.com'),
(123, 'allesgoodjong', '67a8fd86fbab8be301076df6b903f0b0754e98c3', 2, '192.87.140.150', 'ewa@gmail.nl'),
(124, 'localjoost', 'ea7fe971b3097567fc9f431708da3dfe3bee609f', 2, '192.87.140.150', 'post@joostdelange.nl'),
(125, 'lange16', 'f873274e34ad4a63b5306f21de54670911bba62e', 2, '83.83.199.213', 'lange16@zonnet.nl');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_rolls` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
