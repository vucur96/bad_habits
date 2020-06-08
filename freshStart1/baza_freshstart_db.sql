-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 08, 2020 at 08:28 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `freshstart`
--
CREATE DATABASE IF NOT EXISTS `freshstart` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `freshstart`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
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
CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `naslov` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`BlogID`, `naslov`, `tekst`, `KorisnickoIme`) VALUES
(9, 'neki naslov ide ovde', 'a ovde ide neki tekst', 'trener'),
(10, 'naslov', ' ', 'trener'),
(11, 'naslov', '  ', 'trener'),
(16, 'nesto', ' nesto', 'nikoleta');

-- --------------------------------------------------------

--
-- Table structure for table `clanarina`
--

DROP TABLE IF EXISTS `clanarina`;
CREATE TABLE `clanarina` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datum` date DEFAULT NULL,
  `VIP` tinyint(1) DEFAULT NULL,
  `brisanje` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE `korisnik` (
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
  `kurs` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`KorisnickoIme`, `email`, `lozinka`, `tip`, `VIP`, `pogodnosti`, `ime`, `prezime`, `datumrodj`, `visina`, `tezina`, `imefirme`, `opisdel`, `vrstarek`, `cilj`, `kurs`) VALUES
('kaca', 'katarina@yahoo.com', 'sifra', 2, NULL, NULL, 'Katarina', 'Kicic', '1987-09-16', NULL, NULL, NULL, NULL, NULL, NULL, 'joga,aerobic'),
('koki', 'kosta@gmail.com', 'sifra', 3, 1, NULL, 'Kosta', 'Rakic', '1974-04-09', 196, 72, NULL, NULL, NULL, 'da se ugojim', NULL),
('lana', 'lanci@fren.com', '123', 3, NULL, NULL, 'Lana', 'Lalic', '1994-08-25', 167, 63, NULL, NULL, NULL, 'steci kondiciju', NULL),
('malina', 'malina@gmail.com', 'sifra', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Malina', 'proizvodnja zdravih sokova', 'proizvod', NULL, NULL),
('marija', 'maki@yahoo.com', 'sifra', 3, 1, 'trening', 'Marija', 'Nikic', '1978-04-05', 165, 76, NULL, NULL, NULL, 'zategnuti se', NULL),
('mica', 'mica@hotmail.com', '123', 2, NULL, NULL, 'Milos', 'Maric', '1988-10-19', NULL, NULL, NULL, NULL, NULL, NULL, 'joga'),
('milica', 'milica@gmail.com', '123', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OpremaStar', 'oprema za trening', 'poster', NULL, NULL),
('nidza', 'nikola@yahoo.com', '123', 2, NULL, NULL, 'Nikola', 'Jevtic', '1990-06-28', NULL, NULL, NULL, NULL, NULL, NULL, 'cardio,karate'),
('raca', 'radoje@gmail.com', '123', 3, 1, NULL, 'Radoje', 'Rakic', '1990-05-30', 184, 78, NULL, NULL, NULL, 'smrsati', NULL),
('sone', 'nebojsa@gmail.com', '123', 3, 1, NULL, 'Nebojsa', 'Kokic', '1976-03-17', 193, 89, NULL, NULL, NULL, 'biti u formi', NULL),
('trener', 'nikola@hotmail.com', 'sifra', 2, NULL, NULL, 'Nikola', 'Jevtic', '1993-02-25', NULL, NULL, NULL, NULL, NULL, NULL, 'joga,cardio,fitness');

-- --------------------------------------------------------

--
-- Table structure for table `prijavljen`
--

DROP TABLE IF EXISTS `prijavljen`;
CREATE TABLE `prijavljen` (
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--

DROP TABLE IF EXISTS `raspored`;
CREATE TABLE `raspored` (
  `RasID` int(11) NOT NULL,
  `TreID` int(11) NOT NULL,
  `grupni` tinyint(1) NOT NULL,
  `individualni` tinyint(1) NOT NULL,
  `mesec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trening`
--

DROP TABLE IF EXISTS `trening`;
CREATE TABLE `trening` (
  `TreID` int(11) NOT NULL,
  `naziv` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maxbroj` int(11) NOT NULL,
  `zauzeto` tinyint(1) NOT NULL,
  `tip` char(18) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevblog`
--

DROP TABLE IF EXISTS `zahtevblog`;
CREATE TABLE `zahtevblog` (
  `BlogID` int(11) NOT NULL,
  `naslov` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tekst` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevkorisnik`
--

DROP TABLE IF EXISTS `zahtevkorisnik`;
CREATE TABLE `zahtevkorisnik` (
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
  `kurs` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zahtevkorisnik`
--

INSERT INTO `zahtevkorisnik` (`KorisnickoIme`, `email`, `lozinka`, `tip`, `VIP`, `pogodnosti`, `ime`, `prezime`, `datumrodj`, `visina`, `tezina`, `imefirme`, `opisdel`, `vrstarek`, `cilj`, `kurs`) VALUES
('Beba', 'masa@hotmail.com', '123', 3, NULL, NULL, 'Masa', 'Radonjic', '1999-11-09', 178, 59, NULL, NULL, NULL, 'ugojiti se', NULL),
('mijaa', 'mijaa@gmail.com', '123', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Firma', 'delatnost', 'flajer', NULL, NULL),
('nadja', 'nada@gmail.com', '123', 2, NULL, NULL, 'Nadja', 'Matic', '1992-06-17', NULL, NULL, NULL, NULL, NULL, NULL, 'joga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`KorisnickoIme`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`);

--
-- Indexes for table `clanarina`
--
ALTER TABLE `clanarina`
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`KorisnickoIme`);

--
-- Indexes for table `prijavljen`
--
ALTER TABLE `prijavljen`
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Indexes for table `raspored`
--
ALTER TABLE `raspored`
  ADD KEY `TreID` (`TreID`);

--
-- Indexes for table `trening`
--
ALTER TABLE `trening`
  ADD PRIMARY KEY (`TreID`);

--
-- Indexes for table `zahtevblog`
--
ALTER TABLE `zahtevblog`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Indexes for table `zahtevkorisnik`
--
ALTER TABLE `zahtevkorisnik`
  ADD PRIMARY KEY (`KorisnickoIme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `zahtevblog`
--
ALTER TABLE `zahtevblog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

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
