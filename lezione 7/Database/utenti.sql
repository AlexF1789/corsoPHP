-- phpMyAdmin SQL Dump
-- version 5.2.1-4.fc40
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 27, 2024 alle 21:49
-- Versione del server: 10.11.9-MariaDB
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
  `mail` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL DEFAULT 'nonImpostata'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`ID`, `cognome`, `nome`, `mail`, `password`) VALUES
(1, 'Rossi', 'Mario', 'mario.rossi@example.com', 'prova'),
(2, 'Verdi', 'Bianca', 'bianca.verdi@example.com', 'nonImpostata'),
(3, 'Ferrero', 'Matteo', 'matteo.ferrero@example.com', 'nonImpostata'),
(4, 'Tommasi', 'Giorgio', 'giorgio.tommasi@example.com', 'nonImpostata'),
(5, 'Lanfranchi', 'Tommaso', 'tommaso.lanfranchi@example.com', 'nonImpostata'),
(6, 'Bianchi', 'Luigi', 'luigi.bianchi@example.com', 'nonImpostata'),
(7, 'Damiani', 'Mattia', 'mattia.damiani@example.com', 'nonImpostata'),
(8, 'Regis', 'Silvana', 'silvana.regis@example.com', 'nonImpostata'),
(9, 'Andrei', 'Chiara', 'chiara.andrei@example.com', 'nonImpostata'),
(10, 'Abaco', 'Giorgia', 'giorgia.abaco@example.com', 'nonImpostata'),
(11, 'Agati', 'Francesca', 'francesca.agati@example.com', 'nonImpostata'),
(12, 'Bobbio', 'Thomas', 'thomas.bobbio@example.com', 'nonImpostata'),
(13, 'Barca', 'Giovanni', 'giovanni.barca@example.com', 'nonImpostata'),
(14, 'Barile', 'Matteo', 'matteo.barile@example.com', 'nonImpostata'),
(15, 'Berti', 'Martina', 'martina.berti@example.com', 'nonImpostata'),
(16, 'Arecco', 'Sergio', 'sergio.arecco@example.com', 'nonImpostata'),
(17, 'Ancarani', 'Piero', 'piero.ancarani@example.com', 'nonImpostata'),
(18, 'Bosio', 'Lucia', 'lucia.bosio@example.com', 'nonImpostata');

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
