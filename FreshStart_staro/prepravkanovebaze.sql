-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 13, 2020 at 04:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `freshstart`
--

-- --------------------------------------------------------

--
-- Table structure for table `termin`
--

DROP TABLE IF EXISTS `termin`;
CREATE TABLE IF NOT EXISTS `termin` (
  `TerID` int(11) NOT NULL AUTO_INCREMENT,
  `dan` date NOT NULL,
  `pocetak` time NOT NULL,
  `kraj` time NOT NULL,
  `KorisnickoIme` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kurs` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`TerID`),
  KEY `KorisnickoIme` (`KorisnickoIme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `termin`
--
ALTER TABLE `termin`
  ADD CONSTRAINT `termin_ibfk_1` FOREIGN KEY (`KorisnickoIme`) REFERENCES `korisnik` (`KorisnickoIme`);
