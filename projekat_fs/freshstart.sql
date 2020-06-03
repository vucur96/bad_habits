-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
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
USE `freshstart`;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin`(
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `BlogID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`BlogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clanarina`
--

DROP TABLE IF EXISTS `clanarina`;
CREATE TABLE IF NOT EXISTS `clanarina`  (
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datum` date COLLATE utf8_unicode_ci DEFAULT NULL,
  `VIP` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brisanje` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`

--
DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik`(
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lozinka` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
 `tip` tinyint(1) COLLATE utf8_unicode_ci NOT NULL,
  `VIP` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pogodnosti` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prezime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datumrodj` date COLLATE utf8_unicode_ci DEFAULT NULL,
  `visina` float COLLATE utf8_unicode_ci DEFAULT NULL,
  `tezina` float COLLATE utf8_unicode_ci DEFAULT NULL,
  `imefirme` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opisdel` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vrstarek` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cilj` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
PRIMARY KEY (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prijavljen`
--

DROP TABLE IF EXISTS `prijavljen`;
CREATE TABLE IF NOT EXISTS `prijavljen`  (
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TreID` int(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--
DROP TABLE IF EXISTS `raspored`;
CREATE TABLE IF NOT EXISTS `raspored` (
  `RasID` int(11)  COLLATE utf8_unicode_ci  NOT NULL,
  `TreID` int(11)  COLLATE utf8_unicode_ci  NOT NULL,
  `grupni` tinyint(1)  COLLATE utf8_unicode_ci  NOT NULL,
  `individualni` tinyint(1)  COLLATE utf8_unicode_ci  NOT NULL,
  `mesec` int(11)  COLLATE utf8_unicode_ci  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trening`
--

DROP TABLE IF EXISTS `trening`;
CREATE TABLE IF NOT EXISTS `trening`(
  `TreID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `maxbroj` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `zauzeto` tinyint(1) COLLATE utf8_unicode_ci NOT NULL,
  `tip` char(18) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevblog`
--

DROP TABLE IF EXISTS `zahtevblog`;
CREATE TABLE IF NOT EXISTS `zahtevblog` (
  `BlogID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tekst` text COLLATE utf8_unicode_ci,
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevkorisnik`
--
DROP TABLE IF EXISTS `zahtevkorisnik`;
CREATE TABLE IF NOT EXISTS `zahtevkorisnik`(
  `KorisnickoIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lozinka` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
 `tip` tinyint(1) COLLATE utf8_unicode_ci NOT NULL,
  `VIP` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pogodnosti` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prezime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datumrodj` date COLLATE utf8_unicode_ci DEFAULT NULL,
  `visina` float COLLATE utf8_unicode_ci DEFAULT NULL,
  `tezina` float COLLATE utf8_unicode_ci DEFAULT NULL,
  `imefirme` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opisdel` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vrstarek` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cilj` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
PRIMARY KEY (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`BlogID`),
  ADD UNIQUE KEY `BlogID` (`BlogID`),
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Indexes for table `clanarina`
--
ALTER TABLE `clanarina`
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
