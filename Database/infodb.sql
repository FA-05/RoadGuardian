-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Creato il: Mag 21, 2024 alle 06:51
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
  `data_ora` datetime DEFAULT NULL,
  `importo` int(255) NOT NULL,
  `scadenzaImporto` date DEFAULT NULL,
  `pagata` tinyint(1) NOT NULL DEFAULT 0,
  `idVigile` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `multe`
--

INSERT INTO `multe` (`barcode`, `targaVeicolo`, `luogo`, `causaMulta`, `data_ora`, `importo`, `scadenzaImporto`, `pagata`, `idVigile`) VALUES
('82772208', 'OP123QR', 'Via Roma', 'Sosta vietata', '2023-10-09 02:20:44', 85, '2023-12-08', 0, 6),
('18181586', 'EF456GH', 'Via Firenze', 'Semaforo rosso', '2023-06-06 19:11:44', 105, '2023-08-05', 0, 6),
('52091325', 'KL890MN', 'Via Roma', 'Corsia bus', '2023-08-31 17:47:44', 229, '2023-10-30', 1, 3),
('17672593', 'CD234EF', 'Via Firenze', 'Attraversamento pedoni', '2023-05-25 00:50:44', 158, '2023-07-24', 1, 4),
('16729990', 'IJ789KL', 'Corso Milano', 'Attraversamento pedoni', '2023-07-12 21:30:44', 74, '2023-09-10', 1, 4),
('88406989', 'KL890MN', 'Piazza Unità', 'Sosta vietata', '2024-01-12 12:13:44', 299, '2024-03-12', 1, 1),
('73993471', 'GH567IJ', 'Piazza Unità', 'Corsia bus', '2023-11-23 13:18:44', 230, '2024-01-22', 0, 1),
('77491435', 'OP123QR', 'Corso Milano', 'Attraversamento pedoni', '2023-07-01 03:01:44', 75, '2023-08-30', 1, 4),
('81286543', 'CD234EF', 'Piazza Unità', 'Eccesso di velocità', '2023-11-27 06:19:44', 221, '2024-01-26', 1, 1),
('49987980', 'KL890MN', 'Corso Milano', 'Corsia bus', '2023-09-24 00:35:44', 147, '2023-11-23', 1, 6),
('65194563', 'MN012OP', 'Piazza Unità', 'Sosta vietata', '2023-09-15 20:57:44', 130, '2023-11-14', 1, 4),
('29719265', 'EF456GH', 'Corso Milano', 'Corsia bus', '2023-10-30 01:47:44', 177, '2023-12-29', 1, 5),
('19729065', 'IJ789KL', 'Piazza Unità', 'Eccesso di velocità', '2023-09-25 18:41:44', 187, '2023-11-24', 1, 6),
('88801976', 'YZ901AB', 'Via Firenze', 'Semaforo rosso', '2023-11-23 02:14:44', 180, '2024-01-22', 1, 1),
('36452892', 'WX789YZ', 'Via Roma', 'Sosta vietata', '2023-08-08 15:16:44', 252, '2023-10-07', 1, 6),
('92792140', 'EF456GH', 'Via Napoli', 'Semaforo rosso', '2024-03-22 09:47:06', 114, '2024-05-21', 0, 1),
('58195536', 'OP123QR', 'Via Firenze', 'Attraversamento pedoni', '2024-04-14 05:21:06', 125, '2024-06-13', 1, 3),
('38604837', 'CD234EF', 'Via Roma', 'Attraversamento pedoni', '2024-02-02 00:46:06', 283, '2024-04-02', 0, 4),
('78936482', 'A123BCD', 'Via Firenze', 'Corsia bus', '2023-08-30 23:37:06', 245, '2023-10-29', 0, 6),
('45677392', 'WX789YZ', 'Via Firenze', 'Sosta vietata', '2024-03-23 05:45:06', 54, '2024-05-22', 0, 4),
('43598673', 'B456CDE', 'Piazza Unità', 'Eccesso di velocità', '2023-06-20 03:10:06', 195, '2023-08-19', 0, 1),
('92731956', 'ST456UV', 'Via Napoli', 'Sosta vietata', '2024-02-17 23:22:06', 218, '2024-04-17', 1, 6),
('92961084', 'IJ789KL', 'Piazza Unità', 'Corsia bus', '2024-03-27 08:27:06', 287, '2024-05-26', 0, 4),
('28573849', 'YZ901AB', 'Piazza Unità', 'Semaforo rosso', '2024-02-10 09:21:06', 113, '2024-04-10', 0, 1),
('27568193', 'UV678WX', 'Via Roma', 'Corsia bus', '2024-02-29 02:51:06', 106, '2024-04-29', 0, 1),
('35807632', 'ST456UV', 'Via Roma', 'Eccesso di velocità', '2023-06-24 21:09:06', 134, '2023-08-23', 0, 6),
('21003626', 'MN012OP', 'Piazza Unità', 'Semaforo rosso', '2023-09-08 12:22:06', 235, '2023-11-07', 1, 3),
('66267415', 'WX789YZ', 'Via Napoli', 'Semaforo rosso', '2023-08-26 22:20:06', 218, '2023-10-25', 1, 4),
('98231132', 'YZ901AB', 'Via Napoli', 'Semaforo rosso', '2023-06-18 16:55:06', 215, '2023-08-17', 0, 1),
('88339168', 'YZ901AB', 'Piazza Unità', 'Sosta vietata', '2023-09-26 01:26:06', 187, '2023-11-25', 1, 3),
('85863473', 'YZ901AB', 'Corso Milano', 'Attraversamento pedoni', '2024-01-13 03:09:06', 286, '2024-03-13', 0, 5),
('80166708', 'WX789YZ', 'Via Firenze', 'Sosta vietata', '2023-06-16 15:48:06', 264, '2023-08-15', 0, 1),
('52462441', 'B456CDE', 'Corso Milano', 'Eccesso di velocità', '2023-12-16 10:44:06', 104, '2024-02-14', 1, 1),
('44999379', 'IJ789KL', 'Via Napoli', 'Sosta vietata', '2023-12-07 04:13:06', 250, '2024-02-05', 1, 4),
('37415205', 'YZ901AB', 'Via Firenze', 'Semaforo rosso', '2023-08-09 01:32:06', 105, '2023-10-08', 0, 6),
('99889098', 'ST456UV', 'Piazza Unità', 'Eccesso di velocità', '2023-10-04 07:38:52', 221, '2023-12-03', 1, 5),
('52436584', 'B456CDE', 'Via Roma', 'Sosta vietata', '2024-01-11 15:06:52', 75, '2024-03-11', 0, 6),
('38609087', 'GH567IJ', 'Piazza Unità', 'Eccesso di velocità', '2023-11-15 22:26:52', 112, '2024-01-14', 1, 4),
('31172421', 'CD234EF', 'Via Firenze', 'Attraversamento pedoni', '2024-03-30 16:03:52', 52, '2024-05-29', 1, 1),
('28024248', 'QR345ST', 'Via Roma', 'Sosta vietata', '2024-02-28 23:47:52', 122, '2024-04-28', 0, 4),
('37326368', 'OP123QR', 'Piazza Unità', 'Corsia bus', '2024-01-27 04:27:52', 282, '2024-03-27', 0, 1),
('95132217', 'YZ901AB', 'Piazza Unità', 'Sosta vietata', '2023-05-23 06:19:52', 83, '2023-07-22', 1, 3),
('69302158', 'GH567IJ', 'Via Napoli', 'Corsia bus', '2023-05-25 22:34:52', 291, '2023-07-24', 0, 6),
('14835614', 'A123BCD', 'Piazza Unità', 'Corsia bus', '2024-02-27 23:57:52', 82, '2024-04-27', 1, 6),
('13326769', 'IJ789KL', 'Piazza Unità', 'Semaforo rosso', '2024-04-28 19:21:52', 113, '2024-06-27', 1, 3),
('24508349', 'YZ901AB', 'Via Roma', 'Semaforo rosso', '2023-09-12 02:22:52', 285, '2023-11-11', 1, 4),
('50962024', 'A123BCD', 'Corso Milano', 'Eccesso di velocità', '2023-06-03 16:42:52', 152, '2023-08-02', 1, 4),
('19317495', 'WX789YZ', 'Piazza Unità', 'Attraversamento pedoni', '2024-04-14 11:55:52', 223, '2024-06-13', 1, 1),
('25480907', 'B456CDE', 'Piazza Unità', 'Eccesso di velocità', '2024-03-14 03:32:52', 77, '2024-05-13', 1, 4),
('52101056', 'YZ901AB', 'Via Firenze', 'Corsia bus', '2023-07-20 08:27:52', 197, '2023-09-18', 0, 4),
('15957459', 'ST456UV', 'Via Napoli', 'Sosta vietata', '2024-02-12 13:13:52', 234, '2024-04-12', 0, 4),
('67887757', 'EF456GH', 'Piazza Unità', 'Corsia bus', '2023-10-29 17:24:52', 81, '2023-12-28', 1, 6),
('51511484', 'OP123QR', 'Via Napoli', 'Attraversamento pedoni', '2023-12-14 17:48:52', 191, '2024-02-12', 0, 3);

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
('LCABNC80A01H501Z', 'Luca', 'Bianchi', 'A1B2C3D4E5', 19, 'Via Roma 1', 'luca.bianchi@gmail.com', 0),
('GLVVRD80A01H501X', 'Giulia', 'Verdi', 'F6G7H8I9J0', 8, 'Via Milano 2', 'giulia.verdi@gmail.com', 0),
('MRCNER80A01H501Y', 'Marco', 'Neri', 'K1L2M3N4O5', 22, 'Via Napoli 3', 'marco.neri@gmail.com', 1),
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
('MRTGRN80A01H501Z', 'Marta', 'Grandi', 'S6T7U8V9W0', 25, 'Via Vercelli 40', 'marta.grandi@gmail.com', 0),
('LCABNC80A01H501Z', 'Luca', 'Bianchi', 'A1B2C3D4E5', 19, 'Via Roma 1', 'luca.bianchi@gmail.com', 0),
('GLVVRD80A01H501X', 'Giulia', 'Verdi', 'F6G7H8I9J0', 8, 'Via Milano 2', 'giulia.verdi@gmail.com', 0),
('MRCNER80A01H501Y', 'Marco', 'Neri', 'K1L2M3N4O5', 22, 'Via Napoli 3', 'marco.neri@gmail.com', 1),
('FRNSMM80A01H501A', 'Francesco', 'Mori', 'P6Q7R8S9T0', 10, 'Via Firenze 4', 'francesco.mori@gmail.com', 0),
('SLCGTR80A01H501B', 'Salvatore', 'Gialli', 'U1V2W3X4Y5', 15, 'Via Torino 5', 'salvatore.gialli@gmail.com', 1),
('ANNBRZ80A01H501C', 'Anna', 'Bronzi', 'Z6A7B8C9D0', 18, 'Via Genova 6', 'anna.bronzi@gmail.com', 0),
('GLRGRN80A01H501D', 'Giorgio', 'Verde', 'E1F2G3H4I5', 9, 'Via Palermo 7', 'giorgio.verde@gmail.com', 0),
('LRSBLU80A01H501E', 'Loris', 'Blu', 'J6K7L8M9N0', 14, 'Via Bologna 8', 'loris.blu@gmail.com', 1),
('FLCLNC80A01H501F', 'Feliciana', 'Lenci', 'O1P2Q3R4S5', 12, 'Via Pisa 9', 'feliciana.lenci@gmail.com', 0),
('MRTGDL80A01H501G', 'Marta', 'Gialdi', 'T6U7V8W9X0', 17, 'Via Lucca 10', 'marta.gialdi@gmail.com', 0),
('GLSPRR80A01H501H', 'Gilles', 'Porri', 'Y1Z2A3B4C5', 16, 'Via Siena 11', 'gilles.porri@gmail.com', 1),
('CMRNNZ80A01H501I', 'Cameron', 'Nuzzi', 'D6E7F8G9H0', 13, 'Via Verona 12', 'cameron.nuzzi@gmail.com', 0),
('LMNTLC80A01H501J', 'Lamont', 'Lenci', 'I1J2K3L4M5', 11, 'Via Brescia 13', 'lamont.lenci@gmail.com', 0),
('MRTCLL80A01H501K', 'Martina', 'Colli', 'N6O7P8Q9R0', 20, 'Via Bergamo 14', 'martina.colli@gmail.com', 1),
('LCRLLN80A01H501L', 'Luciano', 'Rollini', 'S1T2U3V4W5', 13, 'Via Ancona 15', 'luciano.rollini@gmail.com', 0),
('LSPTRR80A01H501M', 'Lorenzo', 'Porri', 'X6Y7Z8A9B0', 14, 'Via Taranto 16', 'lorenzo.porri@gmail.com', 0),
('MTTPGL80A01H501N', 'Matteo', 'Pagli', 'C1D2E3F4G5', 17, 'Via Bari 17', 'matteo.pagli@gmail.com', 1),
('LMRGRN80A01H501O', 'Liam', 'Verde', 'H6I7J8K9L0', 19, 'Via Lecce 18', 'liam.verde@gmail.com', 0),
('FRNCSM80A01H501P', 'Francesca', 'Mori', 'M1N2O3P4Q5', 21, 'Via Rimini 19', 'francesca.mori@gmail.com', 0),
('SLCGNZ80A01H501Q', 'Silvia', 'Gialli', 'R6S7T8U9V0', 20, 'Via Terni 20', 'silvia.gialli@gmail.com', 1),
('ANNLNC80A01H501R', 'Antonio', 'Lenci', 'W1X2Y3Z4A5', 16, 'Via Padova 21', 'antonio.lenci@gmail.com', 0),
('GLRRZN80A01H501S', 'Giovanni', 'Bronzi', 'B6C7D8E9F0', 18, 'Via Catania 22', 'giovanni.bronzi@gmail.com', 0),
('LRSBLN80A01H501T', 'Lorenza', 'Blu', 'G1H2I3J4K5', 15, 'Via Messina 23', 'lorenza.blu@gmail.com', 1),
('FLCLNC80A01H501U', 'Federico', 'Lenci', 'L6M7N8O9P0', 19, 'Via Pavia 24', 'federico.lenci@gmail.com', 0),
('MRTGLD80A01H501V', 'Martina', 'Gialdi', 'Q1R2S3T4U5', 22, 'Via Asti 25', 'martina.gialdi@gmail.com', 0),
('PRTRNC80A01H501Z', 'Paolo', 'Rossi', 'A6B7C8D9E0', 20, 'Via Venezia 26', 'paolo.rossi@gmail.com', 0),
('MRTLVN80A01H501X', 'Marta', 'Levi', 'F1G2H3I4J5', 12, 'Via Livorno 27', 'marta.levi@gmail.com', 0),
('SLVGRN80A01H501Y', 'Silvia', 'Grant', 'K6L7M8N9O0', 18, 'Via Perugia 28', 'silvia.grant@gmail.com', 1),
('FRNCSL80A01H501A', 'Francesco', 'Solari', 'P1Q2R3S4T5', 15, 'Via Cagliari 29', 'francesco.solari@gmail.com', 0),
('SLVTRN80A01H501B', 'Silvio', 'Trenti', 'U6V7W8X9Y0', 10, 'Via Trieste 30', 'silvio.trenti@gmail.com', 1),
('ANNBRN80A01H501C', 'Anna', 'Brown', 'Z1A2B3C4D5', 17, 'Via Genova 31', 'anna.brown@gmail.com', 0),
('GLRGRR80A01H501D', 'Giorgio', 'Gray', 'E6F7G8H9I0', 14, 'Via Palermo 32', 'giorgio.gray@gmail.com', 0),
('LRSBLL80A01H501E', 'Loris', 'Blue', 'J1K2L3M4N5', 19, 'Via Bologna 33', 'loris.blue@gmail.com', 1),
('FLCLNK80A01H501F', 'Feliciana', 'Link', 'O6P7Q8R9S0', 16, 'Via Pisa 34', 'feliciana.link@gmail.com', 0),
('MRTGDN80A01H501G', 'Marta', 'Gold', 'T1U2V3W4X5', 13, 'Via Lucca 35', 'marta.gold@gmail.com', 0),
('PRTNCR80A01H501H', 'Pietro', 'Neri', 'Y6Z7A8B9C0', 18, 'Via Siena 36', 'pietro.neri@gmail.com', 1),
('CMRNZZ80A01H501I', 'Carla', 'Nuzzi', 'D1E2F3G4H5', 11, 'Via Verona 37', 'carla.nuzzi@gmail.com', 0),
('LMNTLC80A01H501J', 'Lamont', 'Lenci', 'I6J7K8L9M0', 15, 'Via Brescia 38', 'lamont.lenci@gmail.com', 0),
('MRTCLL80A01H501K', 'Martina', 'Colli', 'N1O2P3Q4R5', 20, 'Via Bergamo 39', 'martina.colli@gmail.com', 1),
('LCRLLN80A01H501L', 'Luciano', 'Rollini', 'S6T7U8V9W0', 17, 'Via Ancona 40', 'luciano.rollini@gmail.com', 0),
('LSPTRR80A01H501M', 'Lorenzo', 'Porri', 'X1Y2Z3A4B5', 14, 'Via Taranto 41', 'lorenzo.porri@gmail.com', 0),
('MTTPGL80A01H501N', 'Matteo', 'Pagli', 'C6D7E8F9G0', 19, 'Via Bari 42', 'matteo.pagli@gmail.com', 1),
('LMRGRN80A01H501O', 'Liam', 'Verde', 'H1I2J3K4L5', 21, 'Via Lecce 43', 'liam.verde@gmail.com', 0),
('FRNCSM80A01H501P', 'Francesca', 'Mori', 'M6N7O8P9Q0', 20, 'Via Rimini 44', 'francesca.mori@gmail.com', 0),
('SLCGNZ80A01H501Q', 'Silvia', 'Gialli', 'R1S2T3U4V5', 16, 'Via Terni 45', 'silvia.gialli@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `sinistri`
--

CREATE TABLE `sinistri` (
  `barcode` varchar(20) NOT NULL,
  `targa` varchar(999) NOT NULL,
  `data_ora` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `luogo` varchar(50) NOT NULL,
  `numeroFeriti` int(100) NOT NULL,
  `numeroMorti` int(100) NOT NULL,
  `causaIncidente` varchar(999) NOT NULL,
  `CFguidatori` varchar(999) NOT NULL,
  `idVigile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `sinistri`
--

INSERT INTO `sinistri` (`barcode`, `targa`, `data_ora`, `luogo`, `numeroFeriti`, `numeroMorti`, `causaIncidente`, `CFguidatori`, `idVigile`) VALUES
('00012345', '[\"AB123CD\",\"EF456GH\"]', '2024-05-20 09:21:18', 'Milano', 7, 3, 'asdasd', '[\"GLVVRD80A01H501X\",\"LCABNC80A01H501Z\"]', 2),
('00023456', '[\"IJ789KL\",\"MN012OP\"]', '2024-05-21 10:30:22', 'Torino', 2, 1, 'tamponamento', '[\"MRCNER80A01H501Y\",\"FRNSMM80A01H501A\"]', 3),
('00034567', '[\"QR345ST\",\"UV678WX\"]', '2024-05-22 14:45:33', 'Roma', 3, 0, 'sbandamento', '[\"SLCGTR80A01H501B\",\"ANNBRZ80A01H501C\"]', 4),
('00045678', '[\"YZ901AB\",\"CD234EF\"]', '2024-05-23 08:15:12', 'Napoli', 4, 2, 'collisione frontale', '[\"GLRGRN80A01H501D\",\"LRSBLU80A01H501E\"]', 5),
('00056789', '[\"GH567IJ\",\"KL890MN\"]', '2024-05-24 19:00:00', 'Firenze', 6, 4, 'investimento pedone', '[\"FLCLNC80A01H501F\",\"MRTGDL80A01H501G\"]', 6),
('00067890', '[\"OP123QR\",\"ST456UV\"]', '2024-05-25 22:35:55', 'Bologna', 1, 0, 'uscita di strada', '[\"GLSPRR80A01H501H\",\"CMRNNZ80A01H501I\"]', 7),
('00078901', '[\"WX789YZ\",\"AB012CD\"]', '2024-05-26 16:10:45', 'Palermo', 0, 0, 'urto', '[\"LMNTLC80A01H501J\",\"MRTCLL80A01H501K\"]', 8),
('00089012', '[\"EF345GH\",\"IJ678KL\"]', '2024-05-27 11:25:30', 'Catania', 5, 2, 'ribaltamento', '[\"LCRLLN80A01H501L\",\"LSPTRR80A01H501M\"]', 9),
('00090123', '[\"MN901OP\",\"QR234ST\"]', '2024-05-28 13:50:20', 'Genova', 8, 3, 'collisione multipla', '[\"MTTPGL80A01H501N\",\"LMRGRN80A01H501O\"]', 10),
('00101234', '[\"UV567WX\",\"YZ890AB\"]', '2024-05-29 07:05:15', 'Venezia', 2, 0, 'tamponamento a catena', '[\"FRNCSM80A01H501P\",\"SLCGNZ80A01H501Q\"]', 11),
('12345678', '[\"AB123CD\",\"EF456GH\"]', '2022-03-01 15:30:00', 'Via Roma, 123', 3, 0, 'Distrazione alla guida', '[\"GLVVRD80A01H501X\",\"LCABNC80A01H501Z\"]', 1),
('23456788', '[\"CD555GH\",\"IJ777KL\"]', '2021-10-15 08:45:00', 'Autostrada A1, km 123', 1, 1, 'Eccesso di velocità', '[\"MRCNER80A01H501Y\",\"FRNSMM80A01H501A\"]', 2),
('34567898', '[\"KL888RR\",\"MN999SS\"]', '2022-02-20 13:15:00', 'Via Milano, 456', 2, 0, 'Mancato rispetto della precedenza', '[\"SLCGTR80A01H501B\",\"ANNBRZ80A01H501C\"]', 3),
('45678998', '[\"QR888TT\",\"RS999UV\"]', '2021-12-08 21:00:00', 'Via Napoli, 789', 0, 0, 'Guasto meccanico', '[\"GLRGRN80A01H501D\"]', 4),
('56789998', '[\"VW888XX\",\"XY999ZA\"]', '2022-01-10 07:30:00', 'Via Torino, 321', 1, 0, 'Condizioni meteorologiche avverse', '[\"LRSBLU80A01H501E\",\"FLCLNC80A01H501F\"]', 5);

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
(2, 'admin', 'admin', 'admin', 'admin', 'admin'),
(3, 'vigile3', '123', 'vigile', 'Francesco', 'Russo'),
(4, 'vigile4', '123', 'vigile', 'Andrea', 'Verdi'),
(5, 'vigile5', '123', 'vigile', 'Marco', 'Bianchi'),
(6, 'vigile6', '123', 'vigile', 'Stefano', 'Neri');

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
('AB678CD', 'T-Roc', 'Volkswagen', 'MRTGRN80A01H501Z'),
('AB123CD', 'Panda', 'Fiat', 'LCABNC80A01H501Z'),
('EF456GH', 'Civic', 'Honda', 'GLVVRD80A01H501X'),
('IJ789KL', 'Golf', 'Volkswagen', 'MRCNER80A01H501Y'),
('MN012OP', 'Clio', 'Renault', 'FRNSMM80A01H501A'),
('QR345ST', 'Focus', 'Ford', 'SLCGTR80A01H501B'),
('UV678WX', '500', 'Fiat', 'ANNBRZ80A01H501C'),
('YZ901AB', 'Astra', 'Opel', 'GLRGRN80A01H501D'),
('CD234EF', 'Megane', 'Renault', 'LRSBLU80A01H501E'),
('GH567IJ', 'Yaris', 'Toyota', 'FLCLNC80A01H501F'),
('KL890MN', 'Qashqai', 'Nissan', 'MRTGDL80A01H501G'),
('OP123QR', 'A3', 'Audi', 'GLSPRR80A01H501H'),
('ST456UV', 'Corsa', 'Opel', 'CMRNNZ80A01H501I'),
('WX789YZ', 'Fiesta', 'Ford', 'LMNTLC80A01H501J'),
('AB012CD', 'Octavia', 'Skoda', 'MRTCLL80A01H501K'),
('EF345GH', '208', 'Peugeot', 'LCRLLN80A01H501L'),
('IJ678KL', 'Polo', 'Volkswagen', 'LSPTRR80A01H501M'),
('MN901OP', 'Tipo', 'Fiat', 'MTTPGL80A01H501N'),
('QR234ST', 'Leaf', 'Nissan', 'LMRGRN80A01H501O'),
('UV567WX', 'Model 3', 'Tesla', 'FRNCSM80A01H501P'),
('YZ890AB', 'Sandero', 'Dacia', 'SLCGNZ80A01H501Q'),
('CD123EF', 'Kona', 'Hyundai', 'ANNLNC80A01H501R'),
('GH456IJ', 'T-Roc', 'Volkswagen', 'GLRRZN80A01H501S'),
('KL789MN', '500X', 'Fiat', 'LRSBLN80A01H501T'),
('OP012QR', 'C-HR', 'Toyota', 'FLCLNC80A01H501U'),
('ST345UV', 'X1', 'BMW', 'MRTGLD80A01H501V'),
('WX678YZ', 'XC40', 'Volvo', 'SLCBLU80A01H501W'),
('DE456FG', 'Punto', 'Fiat', 'CMRNZZ80A01H501I'),
('GH789IJ', 'Focus', 'Ford', 'LMNTLC80A01H501J'),
('JK111LK', 'Clio', 'Renault', 'MRTCLL80A01H501K'),
('LK222MN', 'Civic', 'Honda', 'LCRLLN80A01H501L'),
('MN333OP', 'Qashqai', 'Nissan', 'LSPTRR80A01H501M'),
('OP444QR', '500', 'Fiat', 'MTTPGL80A01H501N'),
('QR555ST', 'A3', 'Audi', 'LMRGRN80A01H501O'),
('ST666UV', 'MiTo', 'Alfa Romeo', 'FRNCSM80A01H501P'),
('UV777WX', 'Ypsilon', 'Lancia', 'SLCGNZ80A01H501Q'),
('WX888YZ', 'Panda', 'Fiat', 'PRTNCR80A01H501H'),
('YZ999AA', '500L', 'Fiat', 'CMRNZZ80A01H501I'),
('AA000BB', 'Kuga', 'Ford', 'LMNTLC80A01H501J'),
('BB111CC', 'Megane', 'Renault', 'MRTCLL80A01H501K'),
('CC222DD', 'CR-V', 'Honda', 'LCRLLN80A01H501L'),
('DD333EE', 'Juke', 'Nissan', 'LSPTRR80A01H501M'),
('EE444FF', 'A1', 'Audi', 'MTTPGL80A01H501N'),
('FF555GG', 'Giulia', 'Alfa Romeo', 'LMRGRN80A01H501O'),
('GG666HH', 'Delta', 'Lancia', 'FRNCSM80A01H501P'),
('HH777II', 'Stelvio', 'Alfa Romeo', 'SLCGNZ80A01H501Q');

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
  MODIFY `idVigile` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
