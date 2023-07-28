-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 10:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formula1`
--

-- --------------------------------------------------------

--
-- Table structure for table `betresults`
--

CREATE TABLE `betresults` (
  `userId` varchar(3) NOT NULL,
  `circuitId` varchar(3) NOT NULL,
  `sessionId` varchar(3) NOT NULL,
  `year` int(11) NOT NULL,
  `1th` float DEFAULT NULL,
  `2th` float DEFAULT NULL,
  `3th` float DEFAULT NULL,
  `4th` float DEFAULT NULL,
  `5th` float DEFAULT NULL,
  `6th` float DEFAULT NULL,
  `7th` float DEFAULT NULL,
  `8th` float DEFAULT NULL,
  `9th` float DEFAULT NULL,
  `10th` float DEFAULT NULL,
  `11th` float DEFAULT NULL,
  `total` float NOT NULL,
  `points` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `betresults`
--

INSERT INTO `betresults` (`userId`, `circuitId`, `sessionId`, `year`, `1th`, `2th`, `3th`, `4th`, `5th`, `6th`, `7th`, `8th`, `9th`, `10th`, `11th`, `total`, `points`) VALUES
('AIT', 'BAR', 'QUA', 2023, 0, 0.5, 0.5, 0.25, 0.33, 1, 0.5, 0, 0, 0, 0.5, 3.58, NULL),
('AIT', 'BAR', 'RAC', 2023, 1.05, 1.1, 0, 1.2, 0.33, 0.5, 0.33, 0.33, 0, 0, 0, 4.84, 5),
('ANG', 'BAR', 'QUA', 2023, 1, 1, 1, 0.5, 0.33, 1, 0.25, 1, 0, 1, 0.33, 7.41, NULL),
('ANG', 'BAR', 'RAC', 2023, 1.05, 1.1, 0, 1.2, 1.25, 0.25, 1.35, 0, 0.25, 0, 0, 8.7, 25),
('CAR', 'BAR', 'QUA', 2023, 1, 1, 0.5, 0.5, 1, 0.5, 0.5, 1, 0, 0, 0.33, 6.33, NULL),
('CAR', 'BAR', 'RAC', 2023, 1.05, 1.1, 1.15, 0, 0.5, 0.5, 1.35, 0.33, 0, 0, 0, 7.73, 18),
('JCJ', 'BAR', 'QUA', 2023, 1, 0.25, 1, 0.33, 0.5, 0.33, 1, 1, 0.33, 0, 0, 5.74, NULL),
('JCJ', 'BAR', 'RAC', 2023, 1.05, 0.5, 0.33, 1.2, 0.25, 0.5, 0, 0.33, 0, 0.33, 0, 5.74, 15),
('JCS', 'BAR', 'QUA', 2023, 1, 0.25, 0.5, 0.5, 0.33, 0.33, 0.25, 0.33, 1, 0, 1, 5.49, NULL),
('JCS', 'BAR', 'RAC', 2023, 1.05, 0, 0.5, 0.5, 0.33, 0.33, 0.33, 0.33, 0, 0.5, 0, 4.62, 3),
('LET', 'BAR', 'QUA', 2023, 0, 0.33, 0.33, 0.5, 0.5, 0.5, 0, 0.25, 0, 0.5, 0.25, 3.16, NULL),
('LET', 'BAR', 'RAC', 2023, 0.5, 0.5, 0.5, 0, 0.33, 0.5, 0.33, 0, 1.45, 0, 0, 4.11, 1),
('MAI', 'BAR', 'QUA', 2023, 0, 0.5, 0.5, 0.25, 0.33, 1, 0.5, 0, 0, 0, 0.5, 3.58, NULL),
('MAI', 'BAR', 'RAC', 2023, 1.05, 1.1, 0, 1.2, 0.33, 0.5, 0.33, 0.33, 0, 0, 0, 4.84, 8),
('MIG', 'BAR', 'QUA', 2023, 1, 1, 0, 0.5, 0.5, 1, 0.33, 0, 0, 0.33, 0.33, 4.99, NULL),
('MIG', 'BAR', 'RAC', 2023, 1.05, 1.1, 1.15, 0, 0.33, 0.33, 0.33, 0.33, 0, 0, 0, 4.62, 2),
('ROB', 'BAR', 'QUA', 2023, 1, 0.25, 0.5, 1, 0.33, 0.5, 0.5, 0.33, 1, 0, 0, 5.41, NULL),
('ROB', 'BAR', 'RAC', 2023, 1.05, 1.1, 1.15, 0, 0, 0.5, 1.35, 0.33, 0, 0, 0, 5.73, 10),
('YER', 'BAR', 'QUA', 2023, 1, 0.25, 0.5, 0.33, 0.33, 0.5, 0.5, 0.33, 0.33, 0.5, 0, 4.57, NULL),
('YER', 'BAR', 'RAC', 2023, 1.05, 1.1, 0, 1.2, 0.33, 0.5, 0.33, 0.33, 0, 0, 0, 4.84, 6);

-- --------------------------------------------------------

--
-- Table structure for table `bets`
--

CREATE TABLE `bets` (
  `userId` varchar(3) NOT NULL,
  `circuitId` varchar(3) NOT NULL,
  `sessionId` varchar(3) NOT NULL,
  `year` int(11) NOT NULL,
  `1th` varchar(3) NOT NULL DEFAULT '',
  `2th` varchar(3) NOT NULL DEFAULT '',
  `3th` varchar(3) NOT NULL DEFAULT '',
  `4th` varchar(3) NOT NULL DEFAULT '',
  `5th` varchar(3) NOT NULL DEFAULT '',
  `6th` varchar(3) NOT NULL DEFAULT '',
  `7th` varchar(3) NOT NULL DEFAULT '',
  `8th` varchar(3) NOT NULL DEFAULT '',
  `9th` varchar(3) NOT NULL DEFAULT '',
  `10th` varchar(3) NOT NULL DEFAULT '',
  `11th` varchar(3) NOT NULL DEFAULT '',
  `extrapoints` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bets`
--

INSERT INTO `bets` (`userId`, `circuitId`, `sessionId`, `year`, `1th`, `2th`, `3th`, `4th`, `5th`, `6th`, `7th`, `8th`, `9th`, `10th`, `11th`, `extrapoints`) VALUES
('AIT', 'BAR', 'RAC', 2023, '', '', '', '', '', '', '', '', '', '', '', 0.25),
('ANG', 'BAR', 'QUA', 2023, 'VER', 'PER', 'LEC', 'ALO', 'HAM', 'RUS', 'SAI', 'STR', 'GAS', 'HUL', 'OCO', NULL),
('ANG', 'BAR', 'RAC', 2023, 'VER', 'PER', 'LEC', 'SAI', 'HAM', 'ALO', 'RUS', 'NOR', 'STR', 'OCO', 'HUL', 2.25),
('CAR', 'BAR', 'QUA', 2023, 'VER', 'PER', 'SAI', 'LEC', 'ALO', 'HAM', 'RUS', 'STR', 'GAS', 'BOT', 'OCO', NULL),
('CAR', 'BAR', 'RAC', 2023, 'VER', 'PER', 'ALO', 'LEC', 'SAI', 'HAM', 'RUS', 'STR', 'OCO', 'NOR', 'HUL', 2),
('JCJ', 'BAR', 'QUA', 2023, 'VER', 'ALO', 'LEC', 'PER', 'RUS', 'SAI', 'HAM', 'STR', 'NOR', 'BOT', 'MAG', NULL),
('JCJ', 'BAR', 'RAC', 2023, 'VER', 'ALO', 'HAM', 'SAI', 'PER', 'RUS', 'LEC', 'STR', 'OCO', 'BOT', 'MAG', 1.75),
('JCS', 'BAR', 'QUA', 2023, 'VER', 'ALO', 'PER', 'LEC', 'HAM', 'STR', 'SAI', 'RUS', 'OCO', 'GAS', 'NOR', NULL),
('JCS', 'BAR', 'RAC', 2023, 'VER', 'LEC', 'PER', 'ALO', 'RUS', 'SAI', 'HAM', 'STR', 'NOR', 'GAS', 'OCO', 1.5),
('LET', 'BAR', 'QUA', 2023, 'ALO', 'SAI', 'VER', 'LEC', 'RUS', 'HAM', 'PER', 'NOR', 'GAS', 'OCO', 'STR', NULL),
('LET', 'BAR', 'RAC', 2023, 'PER', 'VER', 'SAI', 'LEC', 'ALO', 'RUS', 'HAM', 'NOR', 'GAS', 'OCO', 'PIA', 0),
('MAI', 'BAR', 'QUA', 2023, 'ALO', 'VER', 'PER', 'HAM', 'LEC', 'RUS', 'STR', 'SAI', 'PIA', 'GAS', 'HUL', 0),
('MAI', 'BAR', 'RAC', 2023, 'VER', 'PER', 'LEC', 'SAI', 'ALO', 'RUS', 'HAM', 'STR', 'OCO', 'NOR', 'HUL', 0.5),
('MIG', 'BAR', 'QUA', 2023, 'VER', 'PER', 'HAM', 'LEC', 'SAI', 'RUS', 'ALO', 'BOT', 'GAS', 'STR', 'OCO', NULL),
('MIG', 'BAR', 'RAC', 2023, 'VER', 'PER', 'ALO', 'LEC', 'RUS', 'SAI', 'HAM', 'STR', 'OCO', 'NOR', 'HUL', 1),
('ROB', 'BAR', 'QUA', 2023, 'VER', 'ALO', 'PER', 'SAI', 'LEC', 'HAM', 'STR', 'RUS', 'OCO', 'BOT', 'GAS', NULL),
('ROB', 'BAR', 'RAC', 2023, 'VER', 'PER', 'ALO', 'LEC', 'AI', 'HAM', 'RUS', 'STR', 'OCO', 'NOR', 'HUL', 1.25),
('YER', 'BAR', 'QUA', 2023, 'VER', 'ALO', 'SAI', 'PER', 'LEC', 'HAM', 'STR', 'RUS', 'NOR', 'OCO', 'PIA', NULL),
('YER', 'BAR', 'RAC', 2023, '', '', '', '', '', '', '', '', '', '', '', 0.75);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `year` int(11) NOT NULL,
  `circuitId` varchar(3) NOT NULL,
  `calendarOrder` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`year`, `circuitId`, `calendarOrder`, `isActive`) VALUES
(2023, 'ADB', 23, 0),
(2023, 'ARS', 2, 0),
(2023, 'AUS', 10, 0),
(2023, 'AUT', 3, 0),
(2023, 'AZE', 4, 0),
(2023, 'BAR', 1, 1),
(2023, 'BEL', 13, 0),
(2023, 'BRA', 21, 0),
(2023, 'CAN', 9, 0),
(2023, 'ESP', 8, 0),
(2023, 'GBT', 11, 0),
(2023, 'HUN', 12, 0),
(2023, 'IMO', 6, 0),
(2023, 'ITA', 15, 0),
(2023, 'JAP', 17, 0),
(2023, 'MEX', 20, 0),
(2023, 'MIA', 5, 0),
(2023, 'MON', 7, 0),
(2023, 'PBJ', 14, 0),
(2023, 'QAT', 18, 0),
(2023, 'SIN', 16, 0),
(2023, 'USA', 19, 0),
(2023, 'VEG', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `circuits`
--

CREATE TABLE `circuits` (
  `circuitId` varchar(3) NOT NULL,
  `gpName` varchar(200) NOT NULL,
  `circuitName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circuits`
--

INSERT INTO `circuits` (`circuitId`, `gpName`, `circuitName`) VALUES
('ADB', 'GP Abu Dhabi', 'YAS Marina'),
('ARS', 'GP Arabia Saudí', 'Jeddah International Street Circuit'),
('AUS', 'GP Austria', 'Red Bull Ring'),
('AUT', 'GP Australia', 'Albert Park'),
('AZE', 'GP Azerbaiyán', 'Baku Street Circuit'),
('BAR', 'GP Barhain', 'Shakir'),
('BEL', 'GP Bélgica', 'Spa-Francorchamps'),
('BRA', 'GP Brasil', 'Interlagos'),
('CAN', 'GP Canada', 'Gilles Villaneuve'),
('ESP', 'GP España', 'Cataluña'),
('GBT', 'GP Gran Bretaña', 'Silverstone'),
('HUN', 'GP Hungria', 'Hungaroring'),
('IMO', 'GP Emilia Romagna', 'Imola'),
('ITA', 'GP Italia', 'Monza'),
('JAP', 'GP Japón', 'Suzuka'),
('MEX', 'GP México', 'Hermanos Rodríguez'),
('MIA', 'GP Miami', 'Hard Rock Stadium Circuit'),
('MON', 'GP Monaco', 'Montecarlo'),
('PBJ', 'GP Paises Bajos', 'Zandvoort'),
('QAT', 'GP Qatar', 'Losail'),
('SIN', 'GP Singapur', 'Marina Bay'),
('USA', 'GP EEUU', 'The Americas'),
('VEG', 'GP Las Vegas', 'Las Vegas');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverId` varchar(3) NOT NULL,
  `driverName` varchar(100) NOT NULL,
  `driverOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverId`, `driverName`, `driverOrder`) VALUES
('ALB', 'Albon', 19),
('ALO', 'Alonso', 14),
('BOT', 'Bottas', 11),
('DEV', 'De Vries', 18),
('GAS', 'Gasly', 8),
('HAM', 'Hamilton', 6),
('HUL', 'Hulkenberg', 16),
('LEC', 'Leclerc', 3),
('MAG', 'Magnussen', 15),
('NOR', 'Norris', 9),
('OCO', 'Ocon', 7),
('PER', 'Perez', 2),
('PIA', 'Piastri', 10),
('RUS', 'Russell', 5),
('SAI', 'Sainz', 4),
('SAR', 'Sargeant', 20),
('STR', 'Stroll', 13),
('TSU', 'Tsunoda', 17),
('VER', 'Verstappen', 1),
('ZHO', 'Zhou', 12);

-- --------------------------------------------------------

--
-- Stand-in structure for view `driversranking`
-- (See below for the actual view)
--
CREATE TABLE `driversranking` (
`userId` varchar(3)
,`points` double
);

-- --------------------------------------------------------

--
-- Table structure for table `historychampionships`
--

CREATE TABLE `historychampionships` (
  `year` int(11) NOT NULL,
  `userId` varchar(3) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historychampionships`
--

INSERT INTO `historychampionships` (`year`, `userId`, `position`) VALUES
(2022, 'MIG', 1),
(2022, 'AIT', 2),
(2022, 'ANG', 3),
(2022, 'JCJ', 4),
(2022, 'CAR', 5),
(2022, 'ROB', 6),
(2022, 'LET', 7),
(2022, 'YER', 8),
(2022, 'MAI', 9),
(2022, 'JCS', 10);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `sessionId` varchar(3) NOT NULL,
  `1th` float DEFAULT NULL,
  `2th` float DEFAULT NULL,
  `3th` float DEFAULT NULL,
  `4th` float DEFAULT NULL,
  `5th` float DEFAULT NULL,
  `6th` float DEFAULT NULL,
  `7th` float DEFAULT NULL,
  `8th` float DEFAULT NULL,
  `9th` float DEFAULT NULL,
  `10th` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`sessionId`, `1th`, `2th`, `3th`, `4th`, `5th`, `6th`, `7th`, `8th`, `9th`, `10th`) VALUES
('QUA', 2.25, 2, 1.75, 1.5, 1.25, 1, 0.75, 0.5, 0.25, 0),
('QUS', 2.25, 2, 1.75, 1.5, 1.25, 1, 0.75, 0.5, 0.25, 0),
('RAC', 25, 18, 15, 10, 8, 6, 5, 3, 2, 1),
('RAS', 8, 7, 6, 5, 4, 3, 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `circuitId` varchar(3) NOT NULL,
  `sessionId` varchar(3) NOT NULL,
  `year` int(11) NOT NULL,
  `1th` varchar(3) NOT NULL,
  `2th` varchar(3) NOT NULL,
  `3th` varchar(3) NOT NULL,
  `4th` varchar(3) NOT NULL,
  `5th` varchar(3) NOT NULL,
  `6th` varchar(3) NOT NULL,
  `7th` varchar(3) NOT NULL,
  `8th` varchar(3) NOT NULL,
  `9th` varchar(3) NOT NULL,
  `10th` varchar(3) NOT NULL,
  `11th` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`circuitId`, `sessionId`, `year`, `1th`, `2th`, `3th`, `4th`, `5th`, `6th`, `7th`, `8th`, `9th`, `10th`, `11th`) VALUES
('BAR', 'FP3', 2023, 'ALO', 'VER', 'PER', 'HAM', 'LEC', 'RUS', 'STR', 'SAI', 'PIA', 'GAS', 'HUL'),
('BAR', 'QUA', 2023, 'VER', 'PER', 'LEC', 'SAI', 'ALO', 'RUS', 'HAM', 'STR', 'OCO', 'HUL', 'NOR'),
('BAR', 'RAC', 2023, 'VER', 'PER', 'ALO', 'SAI', 'HAM', 'STR', 'RUS', 'BOT', 'GAS', 'ALB', 'TSU');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `year` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`year`, `isActive`) VALUES
(2023, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessioncalendar`
--

CREATE TABLE `sessioncalendar` (
  `year` int(11) NOT NULL,
  `circuitId` varchar(3) NOT NULL,
  `sessionId` varchar(3) NOT NULL,
  `sessionOrder` int(11) NOT NULL DEFAULT 0,
  `isActive` tinyint(1) NOT NULL DEFAULT 0,
  `current` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessioncalendar`
--

INSERT INTO `sessioncalendar` (`year`, `circuitId`, `sessionId`, `sessionOrder`, `isActive`, `current`) VALUES
(2023, 'ADB', 'FP3', 0, 0, 0),
(2023, 'ADB', 'QUA', 0, 0, 0),
(2023, 'ADB', 'RAC', 0, 0, 0),
(2023, 'ARS', 'FP3', 0, 0, 0),
(2023, 'ARS', 'QUA', 0, 0, 0),
(2023, 'ARS', 'RAC', 0, 0, 0),
(2023, 'AUS', 'FP3', 0, 0, 0),
(2023, 'AUS', 'QUA', 0, 0, 0),
(2023, 'AUS', 'QUS', 0, 0, 0),
(2023, 'AUS', 'RAC', 0, 0, 0),
(2023, 'AUS', 'RAS', 0, 0, 0),
(2023, 'AUT', 'FP3', 0, 0, 0),
(2023, 'AUT', 'QUA', 0, 0, 0),
(2023, 'AUT', 'RAC', 0, 0, 0),
(2023, 'AZE', 'FP3', 0, 0, 0),
(2023, 'AZE', 'QUA', 1, 0, 0),
(2023, 'AZE', 'QUS', 2, 0, 0),
(2023, 'AZE', 'RAC', 4, 0, 0),
(2023, 'AZE', 'RAS', 3, 0, 0),
(2023, 'BAR', 'FP3', 0, 0, 0),
(2023, 'BAR', 'QUA', 1, 1, 1),
(2023, 'BAR', 'RAC', 2, 0, 0),
(2023, 'BEL', 'FP3', 0, 0, 0),
(2023, 'BEL', 'QAS', 0, 0, 0),
(2023, 'BEL', 'QUA', 0, 0, 0),
(2023, 'BEL', 'RAC', 0, 0, 0),
(2023, 'BEL', 'RAS', 0, 0, 0),
(2023, 'BRA', 'FP3', 0, 0, 0),
(2023, 'BRA', 'QAS', 0, 0, 0),
(2023, 'BRA', 'QUA', 0, 0, 0),
(2023, 'BRA', 'RAC', 0, 0, 0),
(2023, 'BRA', 'RAS', 0, 0, 0),
(2023, 'CAN', 'FP3', 0, 0, 0),
(2023, 'CAN', 'QUA', 0, 0, 0),
(2023, 'CAN', 'RAC', 0, 0, 0),
(2023, 'ESP', 'FP3', 0, 0, 0),
(2023, 'ESP', 'QUA', 0, 0, 0),
(2023, 'ESP', 'RAC', 0, 0, 0),
(2023, 'GBT', 'FP3', 0, 0, 0),
(2023, 'GBT', 'QUA', 0, 0, 0),
(2023, 'GBT', 'RAC', 0, 0, 0),
(2023, 'HUN', 'FP3', 0, 0, 0),
(2023, 'HUN', 'QUA', 0, 0, 0),
(2023, 'HUN', 'RAC', 0, 0, 0),
(2023, 'IMO', 'FP3', 0, 0, 0),
(2023, 'IMO', 'QUA', 0, 0, 0),
(2023, 'IMO', 'RAC', 0, 0, 0),
(2023, 'ITA', 'FP3', 0, 0, 0),
(2023, 'ITA', 'QUA', 0, 0, 0),
(2023, 'ITA', 'RAC', 0, 0, 0),
(2023, 'JAP', 'FP3', 0, 0, 0),
(2023, 'JAP', 'QUA', 0, 0, 0),
(2023, 'JAP', 'RAC', 0, 0, 0),
(2023, 'MEX', 'FP3', 0, 0, 0),
(2023, 'MEX', 'QUA', 0, 0, 0),
(2023, 'MEX', 'RAC', 0, 0, 0),
(2023, 'MIA', 'FP3', 0, 0, 0),
(2023, 'MIA', 'QUA', 0, 0, 0),
(2023, 'MIA', 'RAC', 0, 0, 0),
(2023, 'MON', 'FP3', 0, 0, 0),
(2023, 'MON', 'QUA', 0, 0, 0),
(2023, 'MON', 'RAC', 0, 0, 0),
(2023, 'PBJ', 'FP3', 0, 0, 0),
(2023, 'PBJ', 'QUA', 0, 0, 0),
(2023, 'PBJ', 'RAC', 0, 0, 0),
(2023, 'QAT', 'FP3', 0, 0, 0),
(2023, 'QAT', 'QAS', 0, 0, 0),
(2023, 'QAT', 'QUA', 0, 0, 0),
(2023, 'QAT', 'RAC', 0, 0, 0),
(2023, 'QAT', 'RAS', 0, 0, 0),
(2023, 'SIN', 'FP3', 0, 0, 0),
(2023, 'SIN', 'QUA', 0, 0, 0),
(2023, 'SIN', 'RAC', 0, 0, 0),
(2023, 'USA', 'FP3', 0, 0, 0),
(2023, 'USA', 'QAS', 0, 0, 0),
(2023, 'USA', 'QUA', 0, 0, 0),
(2023, 'USA', 'RAC', 0, 0, 0),
(2023, 'USA', 'RAS', 0, 0, 0),
(2023, 'VEG', 'FP3', 0, 0, 0),
(2023, 'VEG', 'QUA', 0, 0, 0),
(2023, 'VEG', 'RAC', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `sessionId` varchar(3) NOT NULL,
  `sessionName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`sessionId`, `sessionName`) VALUES
('FP3', 'FP3'),
('QUA', 'Clasificación'),
('QUS', 'Clasificación Sprint'),
('RAC', 'Carrera'),
('RAS', 'Carrera Sprint');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `teamId` varchar(3) NOT NULL,
  `teamName` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teamId`, `teamName`, `color`) VALUES
('BOG', 'Boggarts', '#4EE847'),
('COL', 'Colinas', '#FFCD59'),
('EDD', 'Edding 3000 F-1 Team', '#68C8FB'),
('HEM', 'Hulkenberg El Mejor', '#1DB47B'),
('UNI', 'Unicorns', '#F759FF');

-- --------------------------------------------------------

--
-- Stand-in structure for view `teamsranking`
-- (See below for the actual view)
--
CREATE TABLE `teamsranking` (
`teamId` varchar(3)
,`points` double
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userOrder` int(11) NOT NULL,
  `userId` varchar(3) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `teamId` varchar(3) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userOrder`, `userId`, `userName`, `password`, `teamId`, `isAdmin`) VALUES
(1, 'MAI', 'IA', '1234', 'HEM', 0),
(2, 'ROB', 'Rober', '1234', 'HEM', 0),
(3, 'CAR', 'Carlos', '1234', 'EDD', 1),
(4, 'ANG', 'Ángel', '1234', 'EDD', 0),
(5, 'MIG', 'Miguel', '1234', 'UNI', 0),
(6, 'LET', 'Leti', '1234', 'UNI', 0),
(7, 'YER', 'Yeray', '1234', 'BOG', 0),
(8, 'AIT', 'Aitor', '1234', 'BOG', 0),
(9, 'JCJ', 'JCJ', '1234', 'COL', 0),
(10, 'JCS', 'JCS', '1234', 'COL', 0);

-- --------------------------------------------------------

--
-- Structure for view `driversranking`
--
DROP TABLE IF EXISTS `driversranking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `driversranking`  AS SELECT `betresults`.`userId` AS `userId`, sum(`betresults`.`points`) AS `points` FROM `betresults` WHERE `betresults`.`sessionId` = 'rac' OR `betresults`.`sessionId` = 'RAS' GROUP BY `betresults`.`userId` ORDER BY sum(`betresults`.`points`) DESC ;

-- --------------------------------------------------------

--
-- Structure for view `teamsranking`
--
DROP TABLE IF EXISTS `teamsranking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teamsranking`  AS SELECT `users`.`teamId` AS `teamId`, sum(`driversranking`.`points`) AS `points` FROM (`driversranking` join `users` on(`users`.`userId` = `driversranking`.`userId`)) GROUP BY `users`.`teamId` ORDER BY sum(`driversranking`.`points`) DESC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `betresults`
--
ALTER TABLE `betresults`
  ADD PRIMARY KEY (`userId`,`circuitId`,`sessionId`,`year`);

--
-- Indexes for table `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`userId`,`circuitId`,`sessionId`,`year`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`year`,`circuitId`);

--
-- Indexes for table `circuits`
--
ALTER TABLE `circuits`
  ADD PRIMARY KEY (`circuitId`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverId`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`sessionId`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`circuitId`,`sessionId`,`year`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `sessioncalendar`
--
ALTER TABLE `sessioncalendar`
  ADD PRIMARY KEY (`year`,`circuitId`,`sessionId`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sessionId`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userOrder`),
  ADD KEY `FK_UserTeam` (`teamId`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`year`) REFERENCES `seasons` (`year`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `teams` (`teamId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
