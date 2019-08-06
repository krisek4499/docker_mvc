-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Sie 2019, 15:36
-- Wersja serwera: 10.3.16-MariaDB
-- Wersja PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testowa`
--

CREATE TABLE `testowa` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `zawod` varchar(20) NOT NULL,
  `nr_telefonu` int(9) NOT NULL,
  `data_ur` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `testowa`
--

INSERT INTO `testowa` (`id`, `imie`, `nazwisko`, `zawod`, `nr_telefonu`, `data_ur`, `email`) VALUES
(1, 'Krzysztof', 'nawrocki', 'imformatyk', 785214538, '1989-03-28', 'frotas@wp.pl'),
(380, 'damian', 'gwis', 'pilkarz', 999999990, '2019-07-18', 'damiano@poczta.onet.pl'),
(381, 'marcino', 'Sami', 'ksiegowy', 999999333, '2011-07-11', 'sami@poczta.onet.pl'),
(382, 'kamillo', 'gibki', 'murarz', 777888999, '2019-07-11', 'pdo@poczta.onet.pl'),
(458, 'damian', 'pedalowski', 'bankier', 999888777, '2019-07-18', 'w@wp.pl'),
(459, 'michal', 'miachlowski', 'grabarz', 345345999, '2019-07-13', 'grabarz@02.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `testowa`
--
ALTER TABLE `testowa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `testowa`
--
ALTER TABLE `testowa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
