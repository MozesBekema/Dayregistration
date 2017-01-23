-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jan 2017 om 10:14
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayregistration`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dates`
--

CREATE TABLE `dates` (
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days_worked` varchar(10) NOT NULL,
  `users_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dates`
--

INSERT INTO `dates` (`start_date`, `end_date`, `days_worked`, `users_id`, `id`) VALUES
('2017-01-11', '2017-02-11', '50', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `user_ip` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `days_worked` int(11) NOT NULL,
  `user_color` text NOT NULL,
  `user_font` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roles_id`, `user_ip`, `email`, `days_worked`, `user_color`, `user_font`, `startDate`, `endDate`) VALUES
(1, 'admin', '55c3b5386c486feb662a0785f340938f518d547f', 1, '', '', 0, '', '', '0000-00-00', '0000-00-00'),
(131, 'bekema', 'bekema', 2, '', 'thomas.cb@hotmail.nl', 0, '#3f51b5;', '"Indie Flower" !important;', '2017-01-30', '2017-06-30'),
(133, 'halo', 'halo', 2, '', 'hlao0@haloe.nl', 0, '', '', '0000-00-00', '0000-00-00'),
(134, 'jan', 'alleman', 2, '', '', 3, '', '', '0000-00-00', '0000-00-00'),
(136, 'man', 'man', 2, '', '', 0, '', '', '0000-00-00', '0000-00-00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`roles_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_users_rolls_idx` (`roles_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_rolls` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
