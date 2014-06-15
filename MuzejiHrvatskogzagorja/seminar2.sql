-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2014 at 03:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12-1~dotdeb.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seminar2`
--
CREATE DATABASE `seminar2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `seminar2`;

-- --------------------------------------------------------

--
-- Table structure for table `muzejLokacija`
--

CREATE TABLE IF NOT EXISTS `muzejLokacija` (
  `redniBroj` int(11) NOT NULL AUTO_INCREMENT,
  `muzejIme` varchar(64) NOT NULL,
  PRIMARY KEY (`redniBroj`),
  UNIQUE KEY `muzejIme` (`muzejIme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `muzejLokacija`
--

INSERT INTO `muzejLokacija` (`redniBroj`, `muzejIme`) VALUES
(1, 'Dvor Veliki Tabor'),
(3, 'Galerija Antuna Augustinčića'),
(4, 'Muzej krapinskih neandertalaca'),
(7, 'Muzej Narodnih nošnji'),
(2, 'Muzej seljačkih buna'),
(5, 'Muzej Staro Selo');

-- --------------------------------------------------------

--
-- Table structure for table `radnoVrijeme`
--

CREATE TABLE IF NOT EXISTS `radnoVrijeme` (
  `redniBroj` int(11) NOT NULL AUTO_INCREMENT,
  `vrijemePosjete` varchar(16) NOT NULL,
  PRIMARY KEY (`redniBroj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `radnoVrijeme`
--

INSERT INTO `radnoVrijeme` (`redniBroj`, `vrijemePosjete`) VALUES
(1, '09.00 - 10.30'),
(2, '11.00 - 12.30'),
(3, '13.00 - 14.30'),
(4, '15.30 - 17.00'),
(5, '17.30 - 19.00'),
(29, '09.15 - 10.45');

-- --------------------------------------------------------

--
-- Table structure for table `regPri`
--

CREATE TABLE IF NOT EXISTS `regPri` (
  `redniBroj` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(16) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `korIme` varchar(32) NOT NULL,
  `lozinka` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `kontakt` varchar(16) NOT NULL,
  PRIMARY KEY (`redniBroj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `regPri`
--

INSERT INTO `regPri` (`redniBroj`, `ime`, `prezime`, `korIme`, `lozinka`, `email`, `kontakt`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$11$GVHGeb8Ly76vqLb.ZntfXuEzVOjUppzC5FzkypBQyzu7pjl7JeTG2', '', ''),
(2, 'Jurica', 'Pađen', 'Jurica', '$2y$11$bWJBi.ozClzuDWrOKwmvMe5ItVCGXnmb8/Nmxr3hE5H4PslhzB7D.', 'juricapaden@gmail.com', '09112345678');

-- --------------------------------------------------------

--
-- Table structure for table `rezerviraj`
--

CREATE TABLE IF NOT EXISTS `rezerviraj` (
  `korIme` varchar(32) NOT NULL,
  `muzej` varchar(64) NOT NULL,
  `vrijemePosjete` varchar(14) NOT NULL,
  `datumPosjete` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezerviraj`
--

INSERT INTO `rezerviraj` (`korIme`, `muzej`, `vrijemePosjete`, `datumPosjete`) VALUES
('', 'Muzej Staro Selo', '17.30 - 19.00', '2014-06-17'),
('', 'Muzej Staro Selo', '17.30 - 19.00', '2014-06-17'),
('', 'Muzej Staro Selo', '17.30 - 19.00', '2014-06-17'),
('', 'vrijemePosjete', '17.30 - 19.00', '2014-06-19'),
('', 'Galerija Antuna Augustinčića', '15.30 - 17.00', '2014-06-14'),
('', 'Muzej Staro Selo', '17.30 - 19.00', '2014-06-17'),
('', 'Dvor Veliki Tabor', '09.00 - 10.30', '2014-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `zapisnik`
--

CREATE TABLE IF NOT EXISTS `zapisnik` (
  `rednibroj` int(11) NOT NULL AUTO_INCREMENT,
  `korIme` varchar(32) NOT NULL,
  `naslov` varchar(32) NOT NULL,
  `duziText` longtext NOT NULL,
  PRIMARY KEY (`rednibroj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
