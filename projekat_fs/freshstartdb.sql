-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 03, 2020 at 11:23 AM
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
  `cilj` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `cilj` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
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
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

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
  ADD KEY `KorisnickoIme` (`KorisnickoIme`);

--
-- Indexes for table `zahtevkorisnik`
--
ALTER TABLE `zahtevkorisnik`
  ADD PRIMARY KEY (`KorisnickoIme`);

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
