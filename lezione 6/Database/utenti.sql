-- phpMyAdmin SQL Dump
-- version 5.2.1-4.fc40
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 15, 2024 alle 17:44
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
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `ID` int(11) NOT NULL,
  `cognome` varchar(16) NOT NULL,
  `nome` varchar(16) NOT NULL,
  `mail` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`ID`, `cognome`, `nome`, `mail`) VALUES
(1, 'Rossi', 'Mario', 'mario.rossi@example.com'),
(2, 'Verdi', 'Bianca', 'bianca.verdi@example.com'),
(3, 'Ferrero', 'Matteo', 'matteo.ferrero@example.com'),
(4, 'Tommasi', 'Giorgio', 'giorgio.tommasi@example.com'),
(5, 'Lanfranchi', 'Tommaso', 'tommaso.lanfranchi@example.com'),
(6, 'Bianchi', 'Luigi', 'luigi.bianchi@example.com'),
(7, 'Damiani', 'Mattia', 'mattia.damiani@example.com'),
(8, 'Regis', 'Silvana', 'silvana.regis@example.com'),
(9, 'Andrei', 'Chiara', 'chiara.andrei@example.com'),
(10, 'Abaco', 'Giorgia', 'giorgia.abaco@example.com'),
(11, 'Agati', 'Francesca', 'francesca.agati@example.com'),
(12, 'Bobbio', 'Thomas', 'thomas.bobbio@example.com'),
(13, 'Barca', 'Giovanni', 'giovanni.barca@example.com'),
(14, 'Barile', 'Matteo', 'matteo.barile@example.com'),
(15, 'Berti', 'Martina', 'martina.berti@example.com'),
(16, 'Arecco', 'Sergio', 'sergio.arecco@example.com'),
(17, 'Ancarani', 'Piero', 'piero.ancarani@example.com'),
(18, 'Bosio', 'Lucia', 'lucia.bosio@example.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
