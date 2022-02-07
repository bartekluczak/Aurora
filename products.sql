-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 07 Lut 2022, 22:37
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `aurora`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(2000) DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`ID`, `TITLE`, `DESCRIPTION`, `STATUS`) VALUES
(17, 'Product 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget eros mauris. Integer vitae vestibulum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel massa eu ante faucibus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas eleifend congue venenatis. Nulla facilisi. In bibendum viverra pharetra. Mauris sed augue ac nisi semper consequat. Nunc egestas aliquam nisi, in dignissim leo facilisis sit amet. ', 'dostępny'),
(18, 'Product 2', 'Cras id mi diam. Curabitur consequat est quis nibh congue rutrum. Morbi fermentum ante mi, et tempor nulla finibus vel. Nulla id aliquet ante. Fusce ornare felis non mi malesuada, rhoncus facilisis diam pellentesque. Duis fermentum eros lorem, at laoreet risus dictum non. Vestibulum quis scelerisque elit. Aliquam eu tellus enim.', 'dostępny'),
(19, 'Product 3', 'Nullam tempor est eget nibh dictum, ut aliquam risus dignissim. ', 'niedostępny'),
(20, 'Product 4', '', 'dostępny'),
(21, 'Product 5', 'Mauris dignissim', 'niedostępny');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
