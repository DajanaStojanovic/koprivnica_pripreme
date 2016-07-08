-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2016 at 10:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koprivnica_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `start_day` varchar(250) NOT NULL,
  `start_month` varchar(250) NOT NULL,
  `start_year` varchar(250) NOT NULL,
  `start_time` time NOT NULL,
  `finish_day` varchar(250) NOT NULL,
  `finish_month` varchar(250) NOT NULL,
  `finish_year` varchar(250) NOT NULL,
  `finish_time` time DEFAULT NULL,
  `organizer` varchar(250) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email_guest` varchar(250) NOT NULL,
  `event` varchar(250) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `operater`
--

CREATE TABLE `operater` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operater`
--

INSERT INTO `operater` (`id`, `username`, `password`, `email`, `tel`, `type`) VALUES
(1, 'kpadmin', '07e8291e8d4ef45d1e8cda6f645140dd', 'kpadmin@gmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `streetnames`
--

CREATE TABLE `streetnames` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `streetnames`
--

INSERT INTO `streetnames` (`id`, `name`) VALUES
(1, 'Ulica Ante Starčevića'),
(2, 'Istarska ulica'),
(3, 'Pavelinska ulica'),
(4, 'Ulica Antuna Mihanovića'),
(5, 'Križevačka ulica'),
(6, 'Ulica Augusta Šenoe'),
(7, 'Frankopanska ulica'),
(8, 'Ulica Braće Radić'),
(9, 'Zagrebačka ulica'),
(10, 'Ulica Ivana Česmičkog'),
(11, 'Bjelovarska cesta'),
(12, 'Starogradska ulica'),
(13, 'Peteranska cesta'),
(14, 'Ulica Antuna Gustava Matoša'),
(15, 'Ulica Adolfa Dančića'),
(16, 'Ulica Andrije Hebranga'),
(17, 'Ulica Ante Neimarevića'),
(18, 'Bajer ulica'),
(19, 'Beč ulica'),
(20, 'Bilogorska ulica'),
(21, 'Ulica Božene Loborec'),
(22, 'Ulica Braće Malančec'),
(23, 'Braće Wolf'),
(24, 'Ulica Brune Bušića'),
(25, 'Ciglana ulica'),
(26, 'Cinderišće'),
(27, 'Crnogorska ulica'),
(28, 'Cvjetna ulica'),
(32, 'Čakovečka ulica'),
(33, 'Čarda ulica'),
(34, 'Čomborov put'),
(35, 'Dalmatinska ulica'),
(36, 'Danica ulica'),
(37, 'Domžalska ulica'),
(38, 'Ulica Donji Banovec'),
(39, 'Ulica Dore Pejačević'),
(40, 'Ulica dr. Nikole Sertića'),
(41, 'Ulica dr. Željka Selingera'),
(42, 'Dravska ulica'),
(43, 'Dubovec ulica'),
(44, 'Dubovečki dol'),
(45, 'Duga ulica'),
(46, 'Đelekovečka cesta'),
(47, 'Ulica Đure Basaričeka'),
(48, 'Ulica Đure Estera'),
(49, 'Ulica Đure Sudete'),
(50, 'Ulica Ferde Rusana'),
(51, 'Florijanski trg'),
(52, 'Ulica Fortunata Pintarića'),
(53, 'Ulica Frana Galovića'),
(54, 'Ulica Franje Gažija'),
(55, 'Ulica Franje Mraza'),
(56, 'Franjevačka ulica'),
(57, 'Gibanična ulica'),
(58, 'Ulica Gorana Kovačića'),
(59, 'Gorička ulica'),
(60, 'Ulica Gornji Banovec'),
(61, 'Gospodarska ulica'),
(62, 'Ulica Grgura Karlovčana'),
(63, 'Hercegovačka ulica'),
(64, 'Herešinska ulica'),
(65, 'Ulica Hrvatske državnosti'),
(66, 'Ulica Hrvatskih branitelja'),
(67, 'I Vinodolski odvojak'),
(68, 'I Vinogradski odvojak'),
(69, 'II Vinogradski odvojak'),
(70, 'III Vinogradski odvojak'),
(71, 'Ulica Ivana Đurkana'),
(72, 'Ulica Ivana Generalića'),
(73, 'IV Vinogradski odvojak'),
(74, 'II Vinodolski odvojak'),
(75, 'Ulica Ivana Mažuranića'),
(76, 'Ulica Ivana Meštrovića'),
(77, 'Ulica Ivana Sabolića'),
(78, 'Ulica Ivana Trnskog'),
(79, 'Ulica Ivana Trubelje'),
(80, 'Ivanjska ulica'),
(81, 'Ivanjska cesta'),
(82, 'Ulica Ive Pevaleka'),
(83, 'Ulica Ivice Hiršala'),
(84, 'Ulica Josipa Bukovčana'),
(85, 'Ulica Josipa J. Strossmayera'),
(86, 'Ulica Josipa Kozarca'),
(87, 'Ulica Josipa Reša'),
(88, 'Ulica Josipa Sirutke'),
(89, 'Ulica Josipa Vargovića'),
(90, 'Ulica Jurja Bedenika'),
(91, 'Kalnička ulica'),
(92, 'Ulica Katarine Zrinski'),
(93, 'Ulica kneza Branimira'),
(94, 'Ulica kneza Domagoja'),
(95, 'Kolodvorska ulica'),
(96, 'Kozarnjak ulica'),
(97, 'Ulica kraljice Jelene'),
(98, 'Križevačka cesta'),
(99, 'Ulica Krste Hegedušića'),
(100, 'Ledinska ulica'),
(101, 'Ludbreška ulica'),
(102, 'Ludbreški odvojak'),
(103, 'Ulica Ljudevita Gaja'),
(104, 'Ulica Ljudevita Posavskog'),
(105, 'Magdalenska ulica'),
(106, 'Marijanska ulica'),
(107, 'Mariškina ulica'),
(108, 'Marofska ulica'),
(109, 'Ulica Matije Gupca'),
(110, 'Ulica Mihovila Pavleka Miškine'),
(111, 'Ulica Mije Šimeka'),
(112, 'Miklinovec ulica'),
(113, 'Ulica Milana Grafa'),
(114, 'Ulica Milana Krmpotića'),
(115, 'Ulica Mirka Viriusa'),
(116, 'Ulica Miroslava Krleže'),
(117, 'Ulica Močile'),
(118, 'Močilski odvojak I'),
(119, 'Močilski odvojak II'),
(120, 'Ulica Mosna'),
(121, 'Nemčićeva ulica'),
(122, 'Ulica Nikole Selaka'),
(123, 'Ulica Nikole Tesle'),
(124, 'Ulica Novi Brežanec'),
(125, 'Obrtnička ulica'),
(126, 'Omladinska ulica'),
(127, 'Opatička ulica'),
(128, 'Oružanska ulica'),
(129, 'Ulica Pavla Vuka Pavlovića'),
(130, 'Ulica Petra Svačića'),
(131, 'Planinarska ulica'),
(132, 'Podolice ulica'),
(133, 'Podravska ulica'),
(134, 'Potočna ulica'),
(135, 'Ulica Pravednika među narodima'),
(136, 'Preložna ulica'),
(137, 'Proljetna ulica'),
(138, 'Radnička cesta'),
(139, 'Reberinska ulica'),
(140, 'Rečko polje'),
(141, 'Ulica Rudešinkin breg'),
(142, 'Ulica Rudolfa Horvata'),
(143, 'Sajmišna ulica'),
(144, 'Severovec ulica'),
(145, 'Ulica Slavka Lowyja'),
(146, 'Sokolska ulica'),
(147, 'Ulica Stanka Sulimanovića'),
(148, 'Ulica Stari Brežanec'),
(149, 'Starogradska ulica'),
(150, 'Ulica Stjepana Kukeca'),
(151, 'Ulica Stjepana Miklaužića'),
(152, 'Supilova ulica'),
(153, 'Svilarska ulica'),
(154, 'Ulica Širovice'),
(155, 'Školska ulica'),
(156, 'Špoljarska ulica'),
(157, 'Taraščice ulica'),
(158, 'Ulica Tina Ujevića'),
(159, 'Ulica Tome Blažeka'),
(160, 'Ulica Tome Čikovića'),
(161, 'Ulica Tome Prosenjaka'),
(162, 'Ulica Tome Šestaka'),
(163, 'Trakošćanska ulica'),
(164, 'Trg bana Josipa Jelačića'),
(165, 'Trg Eugena Kumičića'),
(166, 'Trg Ivana Pavla II'),
(167, 'Trg kralja Krešimira'),
(168, 'Trg kralja Tomislava'),
(169, 'Trg kralja Zvonimira'),
(170, 'Trg dr. Leandera Brozovića'),
(171, 'Trg mladoosti'),
(172, 'Trg podravskih heroja'),
(173, 'Trg slobode'),
(174, 'Trg Tomislava Bardeka'),
(175, 'Trg Zlate Bartl'),
(176, 'Ulica Hrastova'),
(177, 'Ulica Vrbica'),
(178, 'Varaždinska cesta'),
(179, 'V Vinogradski odvojak'),
(180, 'Ulica Vijećnička'),
(181, 'Vinica'),
(182, 'Vinička ulica'),
(183, 'Vinički dol'),
(184, 'Vinički odvojak I'),
(185, 'Vinički odvojak II'),
(186, 'Vinički put'),
(187, 'Ulica Vinka Česija'),
(188, 'Ulica Vinka Vošickog'),
(189, 'Vinodolska ulica'),
(190, 'Vinogradska ulica'),
(191, 'Ulica Vladimira Nazora'),
(192, 'Voćarski put'),
(193, 'Zagorska ulica'),
(194, 'Zvirišće ulica'),
(196, 'Zrinski trg'),
(197, 'Ulica Zvonimira Goloba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operater`
--
ALTER TABLE `operater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streetnames`
--
ALTER TABLE `streetnames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operater`
--
ALTER TABLE `operater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `streetnames`
--
ALTER TABLE `streetnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
