-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: l127.0.0.1:3306
-- Generation Time: May 31, 2020 at 04:06 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

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
DROP DATABASE IF EXISTS `freshstart`;
CREATE DATABASE IF NOT EXISTS `freshstart` DEFAULT CHARACTER SET utf8mb4;
USE `projekat_ankete`;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `KorisnickoIme` varchar(20) NOT NULL,
  `lozinka` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `anketa`;
CREATE TABLE IF NOT EXISTS `anketa`  (
  `BlogID` int(11) NOT NULL,
  `naslov` varchar(60) DEFAULT NULL,
  `tekst` text,
  `KorisnickoIme` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Clanarina`
--

CREATE TABLE `Clanarina` (
  `KorisnickoIme` varchar(20) NOT NULL,
  `datum` date DEFAULT NULL,
  `VIP` tinyint(1) DEFAULT NULL,
  `brisanje` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `KorisnickoIme` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `lozinka` varchar(16) DEFAULT NULL,
  `tip` tinyint(1) NOT NULL,
  `VIP` tinyint(1) DEFAULT NULL,
  `pogodnosti` varchar(50) DEFAULT NULL,
  `ime` varchar(20) DEFAULT NULL,
  `prezime` varchar(20) DEFAULT NULL,
  `datumrodj` date DEFAULT NULL,
  `visina` float DEFAULT NULL,
  `tezina` float DEFAULT NULL,
  `imefirme` varchar(20) DEFAULT NULL,
  `opisdel` varchar(60) DEFAULT NULL,
  `vrstarek` varchar(40) DEFAULT NULL,
  `cilj` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prijavljen`
--

CREATE TABLE `prijavljen` (
  `KorisnickoIme` varchar(20) NOT NULL,
  `TreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--

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

CREATE TABLE `trening` (
  `TreID` int(11) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  `maxbroj` int(11) NOT NULL,
  `zauzeto` tinyint(1) NOT NULL,
  `tip` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevblog`
--

CREATE TABLE `zahtevblog` (
  `BlogID` int(11) NOT NULL,
  `naslov` varchar(60) DEFAULT NULL,
  `tekst` text,
  `KorisnickoIme` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevkorisnik`
--

CREATE TABLE `zahtevkorisnik` (
  `KorisnickoIme` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `lozinka` varchar(16) DEFAULT NULL,
  `tip` char(18) NOT NULL,
  `VIP` tinyint(1) DEFAULT NULL,
  `pogodnosti` varchar(50) DEFAULT NULL,
  `ime` varchar(20) DEFAULT NULL,
  `prezime` varchar(20) DEFAULT NULL,
  `datumrodj` date DEFAULT NULL,
  `visina` float DEFAULT NULL,
  `tezina` float DEFAULT NULL,
  `imefirme` varchar(20) DEFAULT NULL,
  `opisdel` varchar(60) DEFAULT NULL,
  `vrstarek` varchar(40) DEFAULT NULL,
  `cilj` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`KorisnickoIme`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`),
  ADD UNIQUE KEY `BlogID` (`BlogID`),
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Indexes for table `Clanarina`
--
ALTER TABLE `Clanarina`
  ADD PRIMARY KEY (`KorisnickoIme`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`KorisnickoIme`);

--
-- Indexes for table `prijavljen`
--
ALTER TABLE `prijavljen`
  ADD PRIMARY KEY (`KorisnickoIme`),
  ADD KEY `TreID` (`TreID`);

--
-- Indexes for table `raspored`
--
ALTER TABLE `raspored`
  ADD PRIMARY KEY (`RasID`,`TreID`),
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
  ADD UNIQUE KEY `BlogID` (`BlogID`),
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`);

--
-- Constraints for table `Clanarina`
--
ALTER TABLE `Clanarina`
  ADD CONSTRAINT `clanarina_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`) ON DELETE NO ACTION;

--
-- Constraints for table `prijavljen`
--
ALTER TABLE `prijavljen`
  ADD CONSTRAINT `prijavljen_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `prijavljen_ibfk_2` FOREIGN KEY (`TreID`) REFERENCES `trening` (`TreID`);

--
-- Constraints for table `raspored`
--
ALTER TABLE `raspored`
  ADD CONSTRAINT `raspored_ibfk_1` FOREIGN KEY (`TreID`) REFERENCES `trening` (`TreID`);

--
-- Constraints for table `zahtevblog`
--
ALTER TABLE `zahtevblog`
  ADD CONSTRAINT `zahtevblog_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`);
