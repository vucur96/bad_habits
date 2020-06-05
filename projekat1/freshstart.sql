-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 04, 2020 at 08:56 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshstart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`KorisnickoIme`, `lozinka`) VALUES
('nikoleta', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `BlogID` int(11) NOT NULL,
  `naslov` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`BlogID`),
  KEY `KorisnickoIme` (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clanarina`
--

DROP TABLE IF EXISTS `clanarina`;
CREATE TABLE IF NOT EXISTS `clanarina` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datum` date DEFAULT NULL,
  `VIP` tinyint(1) DEFAULT NULL,
  `brisanje` tinyint(1) DEFAULT NULL,
  KEY `KorisnickoIme` (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tip` tinyint(1) NOT NULL,
  `VIP` tinyint(1) NOT NULL,
  `pogodnosti` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `prezime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `datumrodj` date DEFAULT NULL,
  `visina` float DEFAULT NULL,
  `tezina` float DEFAULT NULL,
  `imefirme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `opisdel` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vrstarek` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cilj` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kurs` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`KorisnickoIme`, `email`, `lozinka`, `tip`, `VIP`, `pogodnosti`, `ime`, `prezime`, `datumrodj`, `visina`, `tezina`, `imefirme`, `opisdel`, `vrstarek`, `cilj`, `kurs`) VALUES
('iva', 'iva@gmail.com', 'sifra', 3, 1, NULL, 'Ivana', 'Ivanovic', '1993-03-31', 170, 60, '', NULL, NULL, 'dbdfkcsbd', NULL),
('nikoooo', 'niko@gmail.com', '123', 3, 1, NULL, 'Nikola', 'Nikolic', '1994-03-23', 190, 90, '', NULL, NULL, 'cnsjcs', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prijavljen`
--

DROP TABLE IF EXISTS `prijavljen`;
CREATE TABLE IF NOT EXISTS `prijavljen` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TreID` int(11) NOT NULL,
  KEY `KorisnickoIme` (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--

DROP TABLE IF EXISTS `raspored`;
CREATE TABLE IF NOT EXISTS `raspored` (
  `RasID` int(11) NOT NULL,
  `TreID` int(11) NOT NULL,
  `grupni` tinyint(1) NOT NULL,
  `individualni` tinyint(1) NOT NULL,
  `mesec` int(11) NOT NULL,
  KEY `TreID` (`TreID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trening`
--

DROP TABLE IF EXISTS `trening`;
CREATE TABLE IF NOT EXISTS `trening` (
  `TreID` int(11) NOT NULL,
  `naziv` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maxbroj` int(11) NOT NULL,
  `zauzeto` tinyint(1) NOT NULL,
  `tip` char(18) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`TreID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevblog`
--

DROP TABLE IF EXISTS `zahtevblog`;
CREATE TABLE IF NOT EXISTS `zahtevblog` (
  `BlogID` int(11) NOT NULL,
  `naslov` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tekst` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `KorisnickoIme` (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevkorisnik`
--

DROP TABLE IF EXISTS `zahtevkorisnik`;
CREATE TABLE IF NOT EXISTS `zahtevkorisnik` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lozinka` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tip` tinyint(1) NOT NULL,
  `VIP` tinyint(1) DEFAULT NULL,
  `pogodnosti` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `prezime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `datumrodj` date DEFAULT NULL,
  `visina` float DEFAULT NULL,
  `tezina` float DEFAULT NULL,
  `imefirme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `opisdel` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vrstarek` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cilj` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kurs` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clanarina`
--
ALTER TABLE `clanarina`
  ADD CONSTRAINT `clanarina_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prijavljen`
--
ALTER TABLE `prijavljen`
  ADD CONSTRAINT `prijavljen_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `raspored`
--
ALTER TABLE `raspored`
  ADD CONSTRAINT `raspored_ibfk_1` FOREIGN KEY (`TreID`) REFERENCES `trening` (`TreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zahtevblog`
--
ALTER TABLE `zahtevblog`
  ADD CONSTRAINT `zahtevblog_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
