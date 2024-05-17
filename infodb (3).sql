-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Creato il: Mag 17, 2024 alle 11:54
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infodb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `multe`
--

CREATE TABLE `multe` (
  `barcode` varchar(200) NOT NULL,
  `targaVeicolo` varchar(255) NOT NULL,
  `luogo` varchar(50) NOT NULL,
  `causaMulta` varchar(50) NOT NULL,
  `importo` int(255) NOT NULL,
  `scadenzaImporto` date DEFAULT NULL,
  `pagata` tinyint(1) NOT NULL DEFAULT 0,
  `idVigile` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `multe`
--

INSERT INTO `multe` (`barcode`, `targaVeicolo`, `luogo`, `causaMulta`, `importo`, `scadenzaImporto`, `pagata`, `idVigile`) VALUES
('40810386', 'QR345ST', 'trento', 'pargheggio', 50, '2024-05-26', 1, 2),
('910611075', 'EF456GH', 'a', 'multa', 122, '2024-05-26', 0, 2),
('91431011', 'IJ789KL', 'TN', 'non lo so ', 20, '2024-05-26', 0, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `patentati`
--

CREATE TABLE `patentati` (
  `CF` varchar(16) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cognome` varchar(25) NOT NULL,
  `numeroPatente` varchar(10) NOT NULL,
  `puntiPatente` int(255) NOT NULL,
  `indirizzo` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `patenteRitirata` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `patentati`
--

INSERT INTO `patentati` (`CF`, `nome`, `cognome`, `numeroPatente`, `puntiPatente`, `indirizzo`, `email`, `patenteRitirata`) VALUES
('LCABNC80A01H501Z', 'Luca', 'Bianchi', 'A1B2C3D4E5', 24, 'Via Roma 1', 'luca.bianchi@gmail.com', 0),
('GLVVRD80A01H501X', 'Giulia', 'Verdi', 'F6G7H8I9J0', 28, 'Via Milano 2', 'giulia.verdi@gmail.com', 0),
('MRCNER80A01H501Y', 'Marco', 'Neri', 'K1L2M3N4O5', 23, 'Via Napoli 3', 'marco.neri@gmail.com', 1),
('ANARSS80A01H501P', 'Anna', 'Russo', 'P6Q7R8S9T0', 32, 'Via Torino 4', 'anna.russo@gmail.com', 0),
('PLLFRA80A01H501Q', 'Paolo', 'Ferrari', 'U1V2W3X4Y5', 20, 'Via Venezia 5', 'paolo.ferrari@gmail.com', 0),
('LRESPO80A01H501W', 'Laura', 'Esposito', 'Z6A7B8C9D0', 18, 'Via Firenze 6', 'laura.esposito@gmail.com', 0),
('STFRIC80A01H501E', 'Stefano', 'Ricci', 'E1F2G3H4I5', 22, 'Via Bologna 7', 'stefano.ricci@gmail.com', 0),
('ELNMRN80A01H501R', 'Elena', 'Marini', 'J6K7L8M9N0', 26, 'Via Palermo 8', 'elena.marini@gmail.com', 0),
('GGRGAL80A01H501T', 'Giorgio', 'Galli', 'O1P2Q3R4S5', 30, 'Via Genova 9', 'giorgio.galli@gmail.com', 0),
('CHRIZZ80A01H501U', 'Chiara', 'Rizzo', 'T6U7V8W9X0', 15, 'Via Bari 10', 'chiara.rizzo@gmail.com', 0),
('SMNCST80A01H501I', 'Simone', 'Costa', 'Y1Z2A3B4C5', 28, 'Via Catania 11', 'simone.costa@gmail.com', 0),
('MRTBRB80A01H501O', 'Martina', 'Barbieri', 'D6E7F8G9H0', 35, 'Via Ancona 12', 'martina.barbieri@gmail.com', 0),
('DVDSRR80A01H501N', 'Davide', 'Serra', 'I1J2K3L4M5', 29, 'Via Siena 13', 'davide.serra@gmail.com', 0),
('FDRDLU80A01H501L', 'Federica', 'De Luca', 'N6O7P8Q9R0', 24, 'Via Perugia 14', 'federica.deluca@gmail.com', 0),
('ALSBNC80A01H501M', 'Alessandro', 'Bianco', 'S1T2U3V4W5', 30, 'Via Messina 15', 'alessandro.bianco@gmail.com', 0),
('IRNFNT80A01H501C', 'Irene', 'Fontana', 'X6Y7Z8A9B0', 27, 'Via Trieste 16', 'irene.fontana@gmail.com', 0),
('MTTGRA80A01H501V', 'Matteo', 'Grassi', 'C1D2E3F4G5', 22, 'Via Trento 17', 'matteo.grassi@gmail.com', 0),
('SARAMC80A01H501A', 'Sara', 'Marchetti', 'H6I7J8K9L0', 19, 'Via Verona 18', 'sara.marchetti@gmail.com', 0),
('FBFBBA80A01H501B', 'Fabio', 'Fabbri', 'M1N2O3P4Q5', 21, 'Via Pisa 19', 'fabio.fabbri@gmail.com', 0),
('VLNCTI80A01H501D', 'Valentina', 'Conti', 'R6S7T8U9V0', 34, 'Via Lucca 20', 'valentina.conti@gmail.com', 0),
('FRNCST80A01H501G', 'Francesca', 'Costantini', 'A1B2C3D4F5', 26, 'Via Brescia 21', 'francesca.costantini@gmail.com', 0),
('ANTDRO80A01H501H', 'Antonio', 'De Rosa', 'G6H7I8J9K0', 18, 'Via Savona 22', 'antonio.derosa@gmail.com', 0),
('CLRBLU80A01H501I', 'Clara', 'Blasi', 'L1M2N3O4P5', 22, 'Via Lodi 23', 'clara.blasi@gmail.com', 0),
('GNRSGR80A01H501J', 'Gennaro', 'Sgrò', 'Q6R7S8T9U0', 27, 'Via Reggio 24', 'gennaro.sgro@gmail.com', 0),
('LUDCST80A01H501K', 'Ludovica', 'Castelli', 'V1W2X3Y4Z5', 25, 'Via Potenza 25', 'ludovica.castelli@gmail.com', 0),
('MRCZNB80A01H501L', 'Marcel', 'Zaniboni', 'A6B7C8D9E0', 30, 'Via Nuoro 26', 'marcel.zaniboni@gmail.com', 0),
('CHLFNT80A01H501M', 'Chiara', 'Fontana', 'F1G2H3I4J5', 29, 'Via Asti 27', 'chiara.fontana@gmail.com', 0),
('PTRFBR80A01H501N', 'Pietro', 'Fabri', 'K6L7M8N9O0', 32, 'Via Lecce 28', 'pietro.fabri@gmail.com', 0),
('LNDRSS80A01H501O', 'Lando', 'Rossi', 'P1Q2R3S4T5', 24, 'Via Parma 29', 'lando.rossi@gmail.com', 0),
('SRMTZR80A01H501P', 'Sergio', 'Tiziano', 'U6V7W8X9Y0', 28, 'Via Rimini 30', 'sergio.tiziano@gmail.com', 0),
('MRTBLN80A01H501Q', 'Martina', 'Belloni', 'Z1A2B3C4D5', 33, 'Via Trento 31', 'martina.belloni@gmail.com', 0),
('DVDFBR80A01H501R', 'Davide', 'Fabri', 'E6F7G8H9I0', 21, 'Via Salerno 32', 'davide.fabri@gmail.com', 0),
('GLSMNT80A01H501S', 'Giosuè', 'Monti', 'J1K2L3M4N5', 34, 'Via Caserta 33', 'giosue.monti@gmail.com', 0),
('GNNCDR80A01H501T', 'Giannicola', 'Cardone', 'O6P7Q8R9S0', 18, 'Via Trapani 34', 'giannicola.cardone@gmail.com', 0),
('LCBBRN80A01H501U', 'Luca', 'Baroni', 'T1U2V3W4X5', 29, 'Via Matera 35', 'luca.baroni@gmail.com', 0),
('SLNBNV80A01H501V', 'Selene', 'Bonavita', 'Y6Z7A8B9C0', 27, 'Via Modena 36', 'selene.bonavita@gmail.com', 0),
('GLLBRN80A01H501W', 'Giacomo', 'Bruni', 'D1E2F3G4H5', 31, 'Via Ferrara 37', 'giacomo.bruni@gmail.com', 0),
('MGDPRS80A01H501X', 'Megan', 'Parisi', 'I6J7K8L9M0', 26, 'Via La Spezia 38', 'megan.parisi@gmail.com', 0),
('VLNGRN80A01H501Y', 'Valentina', 'Grillo', 'N1O2P3Q4R5', 30, 'Via Pescara 39', 'valentina.grillo@gmail.com', 0),
('MRTGRN80A01H501Z', 'Marta', 'Grandi', 'S6T7U8V9W0', 25, 'Via Vercelli 40', 'marta.grandi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `sinistri`
--

CREATE TABLE `sinistri` (
  `barcode` varchar(20) NOT NULL,
  `targa` varchar(7) NOT NULL,
  `data_ora` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `luogo` varchar(50) NOT NULL,
  `fotoIncidente` longblob DEFAULT NULL,
  `numeroFeriti` int(100) NOT NULL,
  `numeroMorti` int(100) NOT NULL,
  `causaIncidente` varchar(255) NOT NULL,
  `CFguidatori` varchar(255) NOT NULL,
  `CFpersoneCoinvolte` varchar(255) DEFAULT NULL,
  `idVigile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `sinistri`
--

INSERT INTO `sinistri` (`barcode`, `targa`, `data_ora`, `luogo`, `fotoIncidente`, `numeroFeriti`, `numeroMorti`, `causaIncidente`, `CFguidatori`, `CFpersoneCoinvolte`, `idVigile`) VALUES
('104210108', '[\"AB123', '2024-05-17 11:48:28', 'a', NULL, 12, 12, 'a', '[\"LCABNC80A01H501Z\",\"LCABNC80A01H501Z\"]', NULL, 2),
('10515035', '[\"\"]', '2024-05-17 10:14:45', '', NULL, 0, 0, '', '[\"\"]', NULL, 2),
('34100767', '[\"AB123', '2024-05-16 17:29:33', 'trento', NULL, 0, 12, 'aasda', '[\"MRCNER80A01H501Y\",\"GLVVRD80A01H501X\"]', NULL, 2),
('7567087', '[\"AB123', '2024-05-17 10:15:03', 'a', NULL, 1, 1, '12', '[\"LCABNC80A01H501Z\",\"GLVVRD80A01H501X\"]', NULL, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `idVigile` int(255) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`idVigile`, `username`, `password`, `tipo`, `nome`, `cognome`) VALUES
(1, 'mario.rossi', '123', 'vigile', 'mario', 'rossi'),
(2, 'admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struttura della tabella `veicoli`
--

CREATE TABLE `veicoli` (
  `targa` varchar(7) NOT NULL,
  `modelloAuto` varchar(50) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `CFproprietario` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `veicoli`
--

INSERT INTO `veicoli` (`targa`, `modelloAuto`, `marca`, `CFproprietario`) VALUES
('AB123CD', 'Panda', 'Fiat', 'LCABNC80A01H501Z'),
('EF456GH', 'Civic', 'Honda', 'GLVVRD80A01H501X'),
('IJ789KL', 'Golf', 'Volkswagen', 'MRCNER80A01H501Y'),
('MN012OP', 'Clio', 'Renault', 'ANARSS80A01H501P'),
('QR345ST', 'A3', 'Audi', 'PLLFRA80A01H501Q'),
('UV678WX', 'Model 3', 'Tesla', 'LRESPO80A01H501W'),
('YZ901AB', 'Corsa', 'Opel', 'STFRIC80A01H501E'),
('CD234EF', '208', 'Peugeot', 'ELNMRN80A01H501R'),
('GH567IJ', 'Fiesta', 'Ford', 'GGRGAL80A01H501T'),
('KL890MN', 'Megane', 'Renault', 'CHRIZZ80A01H501U'),
('OP123QR', 'Serie 3', 'BMW', 'SMNCST80A01H501I'),
('ST456UV', 'Tipo', 'Fiat', 'MRTBRB80A01H501O'),
('WX789YZ', 'Qashqai', 'Nissan', 'DVDSRR80A01H501N'),
('AB012CD', 'Yaris', 'Toyota', 'FDRDLU80A01H501L'),
('EF345GH', 'Tiguan', 'Volkswagen', 'ALSBNC80A01H501M'),
('IJ678KL', 'CX-5', 'Mazda', 'IRNFNT80A01H501C'),
('MN901OP', 'Focus', 'Ford', 'MTTGRA80A01H501V'),
('QR234ST', 'X5', 'BMW', 'SARAMC80A01H501A'),
('UV567WX', 'Polo', 'Volkswagen', 'FBFBBA80A01H501B'),
('YZ890AB', 'Giulietta', 'Alfa Romeo', 'VLNCTI80A01H501D'),
('CD901EF', '500', 'Fiat', 'FRNCST80A01H501G'),
('GH234IJ', 'Leon', 'Seat', 'ANTDRO80A01H501H'),
('KL567MN', 'XC60', 'Volvo', 'CLRBLU80A01H501I'),
('OP890QR', 'Cherokee', 'Jeep', 'GNRSGR80A01H501J'),
('ST123UV', 'S60', 'Volvo', 'LUDCST80A01H501K'),
('WX456YZ', 'Swift', 'Suzuki', 'MRCZNB80A01H501L'),
('AB789CD', 'Octavia', 'Skoda', 'CHLFNT80A01H501M'),
('EF012GH', 'Captur', 'Renault', 'PTRFBR80A01H501N'),
('IJ345KL', 'Compass', 'Jeep', 'LNDRSS80A01H501O'),
('MN678OP', 'XC90', 'Volvo', 'SRMTZR80A01H501P'),
('QR901ST', 'Vitara', 'Suzuki', 'MRTBLN80A01H501Q'),
('UV234WX', 'C-HR', 'Toyota', 'DVDFBR80A01H501R'),
('YZ567AB', 'Q5', 'Audi', 'GLSMNT80A01H501S'),
('CD890EF', 'X1', 'BMW', 'GNNCDR80A01H501T'),
('GH123IJ', 'Countryman', 'Mini', 'LCBBRN80A01H501U'),
('KL456MN', 'Q7', 'Audi', 'SLNBNV80A01H501V'),
('OP789QR', '500X', 'Fiat', 'GLLBRN80A01H501W'),
('ST012UV', 'Civic', 'Honda', 'MGDPRS80A01H501X'),
('WX345YZ', 'A-Class', 'Mercedes-Benz', 'VLNGRN80A01H501Y'),
('AB678CD', 'T-Roc', 'Volkswagen', 'MRTGRN80A01H501Z');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `sinistri`
--
ALTER TABLE `sinistri`
  ADD PRIMARY KEY (`barcode`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`idVigile`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `idVigile` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
