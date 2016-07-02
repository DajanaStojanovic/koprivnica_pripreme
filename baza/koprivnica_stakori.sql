-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 10:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koprivnica_stakori`
--
drop database if exists koprivnica_stakori;
create database koprivnica_stakori character set utf8 collate utf8_general_ci;
use koprivnica_stakori;
-- --------------------------------------------------------

--
-- Table structure for table `operater`
--

CREATE TABLE `operater` (
  `sifra` int(11) NOT NULL,
  `korisnicko_ime` varchar(250) NOT NULL,
  `lozinka` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operater`
--

INSERT INTO `operater` (`sifra`, `korisnicko_ime`, `lozinka`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

CREATE TABLE `prijava` (
  `sifra` int(11) NOT NULL,
  `ime` varchar(250) NOT NULL,
  `prezime` varchar(250) NOT NULL,
  `adresa` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `broj_telefona` int(11) NOT NULL,
  `opis` text,
  `datum_prijave` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`sifra`, `ime`, `prezime`, `adresa`, `email`, `broj_telefona`, `opis`, `datum_prijave`) VALUES
(1, 'Ana', 'Anić', 'Ulica Ante Starčevića 5, Koprivnica', NULL, 821532, 'kao neki opis', '0000-00-00 00:00:00'),
(2, 'Pero', 'Perić', 'Istarska ulica 17, Koprivnica', 'pperic@gmail.com', 861721, 'opis', '0000-00-00 00:00:00'),
(3, 'Marica', 'Marić', 'Pavelinska ulica 24, Koprivnica', 'mmaric@yahoo.com', 834882, 'štakori štakori', '0000-00-00 00:00:00'),
(4, 'Ivan', 'Ivić', 'Ulica Antuna Mihanovića 45, Koprivnica', 'ivic123@gmail.com', 895245, 'još štakora', '0000-00-00 00:00:00'),
(5, 'Vesna', 'Školić', 'Križevačka ulica 22, Koprivnica', NULL, 811532, NULL, '0000-00-00 00:00:00'),
(6, 'Ružica', 'Galun', 'Ulica Augusta Šenoe 9, Koprivnica', NULL, 866954, 'opissss', '0000-00-00 00:00:00'),
(7, 'Milan', 'Čengić', 'Frankopanska ulica 14, Koprivnica', 'milancengic@gmail.com', 0, NULL, '0000-00-00 00:00:00'),
(8, 'Ante', 'Lušić', 'Ulica Braće Radić 31, Koprivnica', 'lusica12@yahoo.com', 872641, NULL, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operater`
--
ALTER TABLE `operater`
  ADD PRIMARY KEY (`sifra`);

--
-- Indexes for table `prijava`
--
ALTER TABLE `prijava`
  ADD PRIMARY KEY (`sifra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operater`
--
ALTER TABLE `operater`
  MODIFY `sifra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prijava`
--
ALTER TABLE `prijava`
  MODIFY `sifra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
