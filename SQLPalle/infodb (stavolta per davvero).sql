-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 30, 2024 alle 23:52
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

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
('GLVVRD80A01H501X', 'Giulia', 'Verdi', 'F6G7H8I9J0', 0, 'Via Milano 2', 'giulia.verdi@gmail.com', 0),
('MRCNER80A01H501Y', 'Marco', 'Neri', 'K1L2M3N4O5', 13, 'Via Napoli 3', 'marco.neri@gmail.com', 0),
('ANARSS80A01H501P', 'Anna', 'Russo', 'P6Q7R8S9T0', 32, 'Via Torino 4', 'anna.russo@gmail.com', 0),
('PLLFRA80A01H501Q', 'Paolo', 'Ferrari', 'U1V2W3X4Y5', 20, 'Via Venezia 5', 'paolo.ferrari@gmail.com', 0),
('LRESPO80A01H501W', 'Laura', 'Esposito', 'Z6A7B8C9D0', 18, 'Via Firenze 6', 'laura.esposito@gmail.com', 0),
('STFRIC80A01H501E', 'Stefano', 'Ricci', 'E1F2G3H4I5', 22, 'Via Bologna 7', 'stefano.ricci@gmail.com', 0),
('ELNMRN80A01H501R', 'Elena', 'Marini', 'J6K7L8M9N0', 26, 'Via Palermo 8', 'elena.marini@gmail.com', 0),
('GGRGAL80A01H501T', 'Giorgio', 'Galli', 'O1P2Q3R4S5', 30, 'Via Genova 9', 'giorgio.galli@gmail.com', 0),
('CHRIZZ80A01H501U', 'Chiara', 'Rizzo', 'T6U7V8W9X0', 15, 'Via Bari 10', 'chiara.rizzo@gmail.com', 0),
('SMNCST80A01H501I', 'Simone', 'Costa', 'Y1Z2A3B4C5', 28, 'Via Catania 11', 'simone.costa@gmail.com', 0),
('MRTBRB80A01H501O', 'Martina', 'Barbieri', 'D6E7F8G9H0', 34, 'Via Ancona 12', 'martina.barbieri@gmail.com', 0),
('DVDSRR80A01H501N', 'Davide', 'Serra', 'I1J2K3L4M5', 19, 'Via Siena 13', 'davide.serra@gmail.com', 1),
('FDRDLU80A01H501L', 'Federica', 'De Luca', 'N6O7P8Q9R0', 22, 'Via Perugia 14', 'federica.deluca@gmail.com', 0),
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
('LCABNC80A01H501Z', 'Luca', 'Bianchi', 'A1B2C3D4E5', 18, 'Via Roma 1', 'luca.bianchi@gmail.com', 0),
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
('109107676', '[\"KL890MN\"]', '2024-05-30 20:11:18', 'fdgf', 23, 1, '34', '[\"LCABNC80A01H501Z\"]', 3),
('12345678', '[\"AB123CD\",\"EF456GH\"]', '2022-03-01 15:30:00', 'Via Roma, 123', 3, 0, 'Distrazione alla guida', '[\"GLVVRD80A01H501X\",\"LCABNC80A01H501Z\"]', 1),
('1299685', '[\"YZ901AB\",\"WX789YZ\"]', '2024-05-30 20:02:55', 'Cavaione', 69, 42, 'Terrorismo', '[\"MRTBRB80A01H501O\",\"LCABNC80A01H501Z\"]', 3),
('1358187', '[\"EF456GH\",\"YZ901AB\"]', '2024-05-30 20:14:35', '5345', 54, 1, 'rtyr', '[\"STFRIC80A01H501E\",\"LCABNC80A01H501Z\"]', 3),
('16471090', '[\"GH567IJ\",\"QR345ST\"]', '2024-05-30 20:05:29', 'rtyr', 56, 45, 'yrtyrtyr', '[\"GLVVRD80A01H501X\",\"LCABNC80A01H501Z\"]', 3),
('23456788', '[\"CD555GH\",\"IJ777KL\"]', '2021-10-15 08:45:00', 'Autostrada A1, km 123', 1, 1, 'Eccesso di velocità', '[\"MRCNER80A01H501Y\",\"FRNSMM80A01H501A\"]', 2),
('2910389', '[\"CD234EF\"]', '2024-05-28 16:19:28', 'Bari', 1, 0, 'Stato di Ebrezza', '[\"DVDSRR80A01H501N\"]', 3),
('310910588', '[\"ST456UV\"]', '2024-05-30 20:12:45', 'dsfsdf', 34, 2, '5345fd', '[\"DVDSRR80A01H501N\"]', 3),
('325910109', '[\"AB123CD\",\"AB123CD\"]', '2024-05-30 18:23:08', 'fdgfgdf', 5676575, 555, 'gfdgdf', '[\"LCABNC80A01H501Z\",\"LCABNC80A01H501Z\"]', 3),
('34567898', '[\"KL888RR\",\"MN999SS\"]', '2022-02-20 13:15:00', 'Via Milano, 456', 2, 0, 'Mancato rispetto della precedenza', '[\"SLCGTR80A01H501B\",\"ANNBRZ80A01H501C\"]', 3),
('39311049', '[\"AB123CD\"]', '2024-05-28 19:14:01', 'Vancora', 2, 1, 'nigga', '[\"LCABNC80A01H501Z\"]', 2),
('3976314', '[\"CD234EF\",\"QR345ST\"]', '2024-05-30 20:07:20', 'egrt', 32, 4, 'fdgdfgt', '[\"MRCNER80A01H501Y\",\"GLVVRD80A01H501X\"]', 3),
('45678998', '[\"QR888TT\",\"RS999UV\"]', '2021-12-08 21:00:00', 'Via Napoli, 789', 0, 0, 'Guasto meccanico', '[\"GLRGRN80A01H501D\"]', 4),
('5333152', '[\"QR345ST\"]', '2024-05-30 23:39:49', 'rtertert', 34, 1, 'retfg', '[\"MRCNER80A01H501Y\"]', 3),
('56789998', '[\"VW888XX\",\"XY999ZA\"]', '2022-01-10 07:30:00', 'Via Torino, 321', 1, 0, 'Condizioni meteorologiche avverse', '[\"LRSBLU80A01H501E\",\"FLCLNC80A01H501F\"]', 5),
('6070141', '[\"EF456GH\",\"KL890MN\"]', '2024-05-30 20:08:26', 'kjkhj', 789, 80, 'huiyu', '[\"LCABNC80A01H501Z\",\"STFRIC80A01H501E\"]', 3),
('6124512', '[\"AB123CD\",\"EF456GH\",\"IJ789KL\"]', '2024-05-30 18:11:48', 'Milano', 99999999, 1, 'Stato di ebrezza', '[\"GLVVRD80A01H501X\",\"DVDSRR80A01H501N\",\"MRCNER80A01H501Y\"]', 3),
('71090071', '[\"EF456GH\"]', '2024-05-30 20:05:56', 'cftr', 67, 67, 'drtrty', '[\"MRTCLL80A01H501K\"]', 3),
('7547643', '[\"ST456UV\"]', '2024-05-30 20:13:21', 'ghj', 54, 4, 'ret', '[\"MRTBRB80A01H501O\"]', 3),
('9405586', '[\"GH567IJ\"]', '2024-05-30 22:32:15', 'Tione di trento', 0, 5, 'Vendetta', '[\"FDRDLU80A01H501L\"]', 4),
('9670452', '[\"QR345ST\"]', '2024-05-21 16:55:47', 'Toronto', 0, 3, 'Manca precedenza', '[\"GLVVRD80A01H501X\"]', 3);

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
