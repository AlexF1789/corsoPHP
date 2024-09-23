-- phpMyAdmin SQL Dump
-- version 5.2.1-4.fc40
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 15, 2024 alle 15:56
-- Versione del server: 10.11.8-MariaDB
-- Versione PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studente`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `province`
--

CREATE TABLE `province` (
  `ID` int(11) NOT NULL,
  `nome` varchar(16) NOT NULL,
  `dimensione` int(11) NOT NULL,
  `regione` varchar(24) NOT NULL,
  `popolazione` int(11) NOT NULL,
  `densita_popolazione` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dump dei dati per la tabella `province`
--

INSERT INTO `province` (`ID`, `nome`, `dimensione`, `regione`, `popolazione`, `densita_popolazione`) VALUES
(1, 'Torino', 6827, 'Piemonte', 2199265, 322.14),
(2, 'Cuneo', 6905, 'Piemonte', 581528, 84.22),
(3, 'Firenze', 3514, 'Toscana', 990527, 281.88),
(4, 'Roma', 5352, 'Lazio', 4229734, 790.31),
(5, 'Viterbo', 3615, 'Lazio', 307523, 85.06),
(6, 'Cosenza', 6710, 'Calabria', 670943, 100),
(7, 'Foggia', 7008, 'Puglia', 592403, 84.54),
(8, 'Venezia', 2473, 'Veneto', 834813, 337.58),
(9, 'Pordenone', 2275, 'Friuli-Venezia Giulia', 312062, 137.14),
(10, 'Perugia', 6337, 'Umbria', 635522, 100.29),
(11, 'Pesaro e Urbino', 2508, 'Marche', 348859, 139.12),
(12, 'Macerata', 2779, 'Marche', 302923, 108.99),
(13, 'Lecco', 806, 'Lombardia', 332955, 413.3),
(14, 'Lodi', 783, 'Lombardia', 229951, 293.68);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `province`
--
ALTER TABLE `province`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
