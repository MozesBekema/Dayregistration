-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jan 2017 om 09:48
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
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roles_id`, `user_ip`, `email`) VALUES
(1, 'admin', '55c3b5386c486feb662a0785f340938f518d547f', 1, '', ''),
(131, 'bekema', 'bekema', 2, '', 'thomas.cb@hotmail.nl'),
(132, 'bekema', 'DASKFSDFADFA', 2, '', 'bekema@gmail.com'),
(133, 'halo', 'halo', 2, '', 'hlao0@haloe.nl');

--
-- Indexen voor geëxporteerde tabellen
--

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
  ADD KEY `fk_users_rolls_idx` (`roles_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
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
