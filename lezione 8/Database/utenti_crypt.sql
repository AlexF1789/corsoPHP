-- phpMyAdmin SQL Dump
-- version 5.2.1-4.fc40
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 27, 2024 alle 20:56
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
  `cognome` varchar(64) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `mail` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`ID`, `cognome`, `nome`, `mail`) VALUES
(1, 'oViOIzM=', 'vlaPOTU=', 'nlaPOTW70k4rhit7q8JEM8CGGJsyFlM='),
(2, 'pVKPNDM=', 'sV6cPjn0', 'kV6cPjn0jlc9hyZSjt9dP1elMl6ikRIj'),
(3, 'tVKPIj/nzw==', 'vlaJJD/6', 'nlaJJD/6jkc9hzBevNVlO/q9K+tKZt6NuJg='),
(4, 'p1iQPTvmyQ==', 'tF6SIj38zw==', 'lF6SIj38zw8smi9Wr8lMHshCshWER6g1NH42'),
(5, 'v1aTNij0zkIwnA==', 'p1iQPTvmzw==', 'h1iQPTvmzw80lCxdvNtLPX+0sraGHzBr0Rlq6xUA'),
(6, 'sV6cPjn9yQ==', 'v0KUNzM=', 'n0KUNzO7wkg5myFTp/pAJiCNau9kzfP4Kw=='),
(7, 't1aQOTv7yQ==', 'vlaJJDP0', 'nlaJJDP0jkU5mCtaoNNlO9nyqXoYCvRYCUY='),
(8, 'oVKaOSk=', 'oF6RJjv7wQ==', 'gF6RJjv7wQ8qkCVSvfpAJnqsmhHipZVHew=='),
(9, 'slmZIj/8', 'sF+UMSj0', 'kF+UMSj0jkA2kTBep/pAJkeJ3QiL68pB8Q=='),
(10, 'slWcMzU=', 'tF6SIj38wQ==', 'lF6SIj38wQ85lyNYofpAJi+79Jze+poq8w=='),
(11, 'slCcJDM=', 'tUWcPjnw00I5', 'lUWcPjnw00I52yNcr85MHni/rQyhRipUwLbF'),
(12, 'sVifMjP6', 'p1+SPTvm', 'h1+SPTvmjkM3lyBSofpAJtBVsThYtRaiSg=='),
(13, 'sVaPMzs=', 'tF6SJjv7zkg=', 'lF6SJjv7zkh2lyNJrdtlO4yJkjq8fJhonOU='),
(14, 'sVaPOTbw', 'vlaJJD/6', 'nlaJJD/6jkM5hytXq/pAJvPGBp+oR3qjmg=='),
(15, 'sVKPJDM=', 'vlaPJDP7wQ==', 'nlaPJDP7wQ86kDBPp/pAJqn37D4JN8+jnQ=='),
(16, 'skWYMzn6', 'oFKPNzP6', 'gFKPNzP6jkAqkCFYofpAJsfxBruV9Q1nZQ=='),
(17, 'slmeMSj0zkg=', 'o16YIjU=', 'g16YIjW7wU87lDBaoNNlO0PknV0oC5O5gCk='),
(18, 'sViOOTU=', 'v0KeOTs=', 'n0KeOTu7wk4rnC17q8JEM/1GChIOIFk=');

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
