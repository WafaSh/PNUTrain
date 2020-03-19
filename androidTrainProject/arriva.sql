-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 02:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arriva`
--

-- --------------------------------------------------------

--
-- Table structure for table `a2`
--

CREATE TABLE `a2` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `NameAR` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a2`
--

INSERT INTO `a2` (`ID`, `Name`, `NameAR`, `logo`) VALUES
(17, 'Sugar Sprinkles', 'Ø±Ø´Ø§Øª Ø³ÙƒØ±', 'img/sugarlogo.jpg'),
(18, 'NOVELS Bakry', 'Ù†ÙˆÙÙ„Ø² Ø¨ÙŠÙƒØ±ÙŠ', 'img/novelslogo.jpg'),
(19, 'Cantiin', 'ÙƒØ§Ù†ØªÙ†', 'img/cantinlogo.jpg'),
(20, 'Cafe.inn', 'ÙƒÙˆÙÙŠ Ø£Ù†', 'img/cafeinlogo.jpg'),
(21, 'Java Cafe', 'Ø¬Ø§ÙØ§ ÙƒØ§ÙÙŠÙ‡', 'img/javalogo.png'),
(22, 'Belles House', 'Ø¨ÙŠØª Ø§Ù„Ø­Ø³Ù†Ø§ÙˆØ§Øª', 'img/houslogo.jpg'),
(23, 'Bonita Cafe', 'Ø¨ÙÙ†ÙŠØªØ§', 'img/bonitelogo.jpg'),
(24, 'SANDWICH Pannin', 'Ø³Ø§Ù†Ø¯ÙˆØªØ´ Ø¨Ù†ÙŠÙ†ÙŠ', 'img/panninlogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `a4`
--

CREATE TABLE `a4` (
  `ID` int(2) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `NameAR` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a4`
--

INSERT INTO `a4` (`ID`, `Name`, `NameAR`, `logo`) VALUES
(1, 'Sugar Sprinkles', 'Ø±Ø´Ø§Øª Ø³ÙƒØ±', 'img/sugarlogo.jpg'),
(2, 'Baskin Robbins', 'Ø¨Ø§Ø³ÙƒÙ† Ø±ÙˆØ¨Ù†Ø²', 'img/Baskinlogo.png'),
(3, 'Sub Way', 'ØµØ¨ ÙˆØ§ÙŠ', 'img/sublogo.jpg'),
(4, 'Alsaaj Alreefi', 'Ø§Ù„ØµØ§Ø¬ Ø§Ù„Ø±ÙŠÙÙŠ', 'img/sajlogo.jpg'),
(5, 'Rotiboy', 'Ø±ÙˆØªÙŠ Ø¨ÙˆÙŠ', 'img/rotilogo.png'),
(6, 'Pizza Inn', 'Ø¨ÙŠØªØ²Ø§ Ø¥Ù†', 'img/pizzalogo.jpg'),
(7, 'Canton', 'ÙƒØ§Ù†ØªÙˆÙ†', 'img/cantonlogo.png'),
(8, 'Heil & Zaafaran', 'Ù‡ÙŠÙ„ Ùˆ Ø²Ø¹ÙØ±Ø§Ù†', 'img/heillogo.jpg'),
(9, 'Coffee Aroma', 'Ø§Ø±ÙˆÙ…Ø© Ø§Ù„Ù‚Ù‡ÙˆÙ‡', 'img/aromalogo.jpg'),
(10, 'Just Falafel', 'Ø¬Ø³Øª ÙÙ„Ø§ÙÙ„', 'img/falafellogo.png'),
(11, 'NOVELS Bakry', 'Ù†ÙˆÙÙ„Ø² Ø¨ÙŠÙƒØ±ÙŠ', 'img/novelslogo.jpg'),
(12, 'Tako Hut', 'ØªØ§ÙƒÙˆ Ù‡Øª', 'img/takologo.jpeg'),
(13, 'Cantiin', 'ÙƒØ§Ù†ØªÙ†', 'img/cantinlogo.jpg'),
(14, 'Saj Roqaq', 'ØµØ§Ø¬ Ø±Ù‚Ø§Ù‚', 'img/roqaqlogo.jpg'),
(15, 'Majles Zaman', 'Ù…Ø¬Ù„Ø³ Ø²Ù…Ø§Ù†', 'img/majleslogo.png'),
(16, 'Cafe.inn', 'ÙƒÙˆÙÙŠ Ø£Ù†', 'img/cafeinlogo.jpg'),
(28, 'My rig', 'Ù…Ø§ÙŠ Ø±ÙŠØº', 'img/myloho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `a9`
--

CREATE TABLE `a9` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `NameAR` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a9`
--

INSERT INTO `a9` (`ID`, `Name`, `NameAR`, `logo`) VALUES
(25, 'dr.Cafe Coffee', 'Ø¯.ÙƒÙŠÙ ÙƒØ§ÙÙŠÙ‡', 'img/cafelogo.jpeg'),
(26, 'Starbucks', 'Ø³ØªØ§Ø± Ø¨ÙˆÙƒØ³', 'img/starlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `a10`
--

CREATE TABLE `a10` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `NameAR` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a10`
--

INSERT INTO `a10` (`ID`, `Name`, `NameAR`, `logo`) VALUES
(27, 'Cafe.inn', 'ÙƒÙˆÙÙŠ Ø£Ù†', 'img/cafeinlogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `arrivalar`
--

CREATE TABLE `arrivalar` (
  `ID` int(2) NOT NULL,
  `Station_Name` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Path_NameB` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Arrival_TimeB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Next_TrainB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Path_Name` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Arrival_Time` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Path_NameN` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Next_Train` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `arrivalar`
--

INSERT INTO `arrivalar` (`ID`, `Station_Name`, `Path_NameB`, `Arrival_TimeB`, `Next_TrainB`, `Path_Name`, `Arrival_Time`, `Path_NameN`, `Next_Train`) VALUES
(1, 'A1', 'أزرق', '30ث', '1:30د', 'أحمر', '1:00د', 'أخضر', '2:30د'),
(2, 'A2', 'أزرق', '1:00د', '2:00د', 'أحمر', '1:30د', 'بنفسجي', '2:30د'),
(3, 'A3', 'أزرق', '1:30د', '2:00د', 'أخضر', '2:00د', 'أحمر', '3:00د'),
(4, 'A4', 'أزرق', '1:20د', '2:30د', 'بنفسجي', '30ث', 'أحمر', '3:00د'),
(5, 'A5', 'أزرق', '2:00د', '2:30د', 'أحمر', '1:00د', 'بنفسجي', '2:00د'),
(6, 'A6', 'أزرق', '30ث', '1:30د', 'أحمر', '1:00د', 'أخضر', '2:30د'),
(7, 'A7', 'أزرق', '1:30د', '2:00د', 'أحمر', '30ث', 'أخضر', '1:30د'),
(8, 'A8', 'أزرق', '30ث', '1:30د', 'أخضر', '2:30د', 'أحمر', '3:00د'),
(9, 'A9', 'أزرق', '1:00د', '1:30د', 'بنفسجي', '1:00د', 'أخضر', '2:30د'),
(10, 'A10', 'أزرق', '1:00د', '1:30د', 'أحمر', '2:00د', 'بنفسجي', '2:30د'),
(11, 'F1', '', '', '', 'أخضر', '2:00د', 'أخضر', '3:00د'),
(12, 'F2', '', '', '', 'أخضر', '2:30د', 'أخضر', '3:30د'),
(13, 'S1', '', '', '', 'أحمر', '1:30د', 'أحمر', '2:30د'),
(14, 'S2', '', '', '', 'أحمر', '3:00د', 'أحمر', '4:00د');

-- --------------------------------------------------------

--
-- Table structure for table `arrivale`
--

CREATE TABLE `arrivale` (
  `ID` int(2) NOT NULL,
  `Station_Name` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Path_NameB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Arrival_TimeB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Next_TrainB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Path_Name` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Arrival_Time` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Path_NameN` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Next_Train` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `arrivale`
--

INSERT INTO `arrivale` (`ID`, `Station_Name`, `Path_NameB`, `Arrival_TimeB`, `Next_TrainB`, `Path_Name`, `Arrival_Time`, `Path_NameN`, `Next_Train`) VALUES
(1, 'A1', 'Blue', '30s', '1:30m', 'Red', '1:00m', 'Green', '2:30m'),
(2, 'A2', 'Blue', '1:00m', '2:00m', 'Red', '1:30m', 'Purple', '2:30m'),
(3, 'A3', 'Blue', '1:30m', '2:00m', 'Green', '2:00m', 'Red', '3:00m'),
(4, 'A4', 'Blue', '1:20m', '2:30m', 'Purple', '30s', 'Red', '3:00m'),
(5, 'A5', 'Blue', '2:00m', '2:30m', 'Red', '1:00m', 'Purple', '2:00m'),
(6, 'A6', 'Blue', '30s', '1:30m', 'Red', '1:00m', 'Green', '2:30m'),
(7, 'A7', 'Blue', '1:30m', '2:00m', 'Red', '30s', 'Green', '1:30m'),
(8, 'A8', 'Blue', '30s', '1:30m', 'Green', '2:30m', 'Red', '3:00m'),
(9, 'A9', 'Blue', '1:00m', '1:30m', 'Purple', '1:00m', 'Green', '2:30m'),
(10, 'A10', 'Blue', '1:00m', '1:30m', 'Red', '2:00m', 'Purple', '2:30'),
(11, 'F1', '', '', '', 'Green', '2:00m', 'Green', '3:00m'),
(12, 'F2', '', '', '', 'Green', '2:30m', 'Green', '3:30m'),
(13, 'S1', '', '', '', 'Red', '1:30m', 'Red', '2:30m'),
(14, 'S2', '', '', '', 'Red', '3:00m', 'Red', '4:00m');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `ID` int(11) NOT NULL,
  `Station_name` text NOT NULL,
  `NeStation` text NOT NULL,
  `College_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`ID`, `Station_name`, `NeStation`, `College_name`) VALUES
(1, 'A3', 'A8', 'Faculty of Computer & Information Sciences(170)'),
(2, 'A3', 'A8', 'Faculty of Sciences(121)'),
(3, 'A4', 'A7', 'Students Amenities Center(190)'),
(4, 'A4', 'A7', 'Preparatory Year(140)'),
(5, 'A5', 'A6', 'Faculty of Languages & Translation(160)'),
(6, 'A5', 'A6', 'Faculty of Kindergarten(111)'),
(7, 'A6', 'A5', 'Faculty of Business & Administration(180)'),
(8, 'A6', 'A5', 'Faculty of Education(112)'),
(9, 'A7', 'A4', 'Faculty of Social Services & The Deanship of Community Services & Continuous Education(130)'),
(10, 'A8', 'A3', 'Faculty of Arts & Designs(150)'),
(11, 'A8', 'A3', 'Faculty of Arts(122)'),
(12, 'A2', 'A10', 'Faculty of Medicine(210)'),
(13, 'A2', 'A10', 'Faculty of Dentistry(250)'),
(14, 'A2', 'A10', 'Faculty of Pharmacy(220)'),
(15, 'A2', 'A10', 'Foundation year(220)'),
(16, 'A10', 'A2', 'Faculty of Physiotherapy(220)'),
(17, 'A10', 'A2', 'Students Amenities Center In Health Colleges'),
(18, 'A10', 'A2', 'Faculty of Nursing(240)'),
(19, 'A10', 'A2', 'College of Health and Rehabilitation Sciences(240)'),
(20, 'A10', 'A2', 'College of Community(260)'),
(21, 'A10', 'A2', 'Arabic Language Teaching Institute for Non-Arabic Speakers(260)');

-- --------------------------------------------------------

--
-- Table structure for table `collegear`
--

CREATE TABLE `collegear` (
  `ID` int(11) NOT NULL,
  `Station_name` text CHARACTER SET utf8 NOT NULL,
  `NeStation` text CHARACTER SET utf8 NOT NULL,
  `College_name` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegear`
--

INSERT INTO `collegear` (`ID`, `Station_name`, `NeStation`, `College_name`) VALUES
(1, 'A3', 'A8', '(170)كلية علوم الحاسب والمعلومات'),
(2, 'A3', 'A8', '(121)كلية العلوم'),
(3, 'A4', 'A7', '(190)مركز خدمات الطالبات'),
(4, 'A4', 'A7', '(140)السنة التحضيرية'),
(5, 'A5', 'A6', '(160)كلية اللغات والترجمة'),
(6, 'A5', 'A6', '(111)كلية رياض اطفال'),
(7, 'A6', 'A5', '(180)كلية الإداره والأعمال'),
(8, 'A6', 'A5', '(112)كلية التربية'),
(9, 'A7', 'A4', ' كلية الخدمة الإجتماعية وعمادة خدمة المجتمع والتعليم المستمر\n(130)'),
(10, 'A8', 'A3', '(150)كلية التصاميم والفنون'),
(11, 'A8', 'A3', '(122)كلية الأداب'),
(12, 'A2', 'A10', '(210)كلية الطب'),
(13, 'A2', 'A10', '(250)كلية طب الأسنان'),
(14, 'A2', '10', '(220)كلية الصيدلة'),
(15, 'A2', 'A10', '(220)السنة التأسيسية'),
(16, 'A10', 'A2', '(220)كلية العلاج الطبيعي'),
(17, 'A10', 'A2', 'مركز خدمات الطالبات في الكليات الصحية'),
(18, 'A10', 'A2', '(240)كلية التمريض'),
(19, 'A10', 'A2', '(240)كليةالصحة وعلوم التأهيل'),
(20, 'A10', 'A2', '(260)كلية المجتمع'),
(21, 'A10', 'A2', '(260)معهد تعليم اللغة العربية للناطقات بغيرها');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `f_id` int(11) NOT NULL,
  `f_station` varchar(64) NOT NULL DEFAULT '.',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`f_id`, `f_station`, `id`) VALUES
(147, 'A7', 9),
(148, 'A10', 9),
(175, 'A4', 7),
(176, 'A5', 6),
(177, 'S1', 6),
(178, 'A5', 7),
(180, 'a6', 7),
(230, 'A7', 8),
(231, 'A5', 8),
(232, 'A2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `orders` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`orders`, `ID`, `img`) VALUES
(1, 1, 'img/sugar.jpg'),
(2, 2, 'img/baskin.jpg'),
(3, 3, 'img/subway.jpg'),
(4, 4, 'img/reefi.jpg'),
(5, 5, 'img/roti.jpg'),
(6, 6, 'img/pizza.jpg'),
(7, 7, 'img/canton.jpg'),
(8, 8, 'img/heil.jpg'),
(9, 9, 'img/aroma.jpg'),
(10, 10, 'img/falafel.jpg'),
(11, 11, 'img/novels.jpg'),
(12, 12, 'img/tako.jpg'),
(13, 13, 'img/cantin.jpg'),
(14, 14, 'img/roqaq.jpg'),
(15, 15, 'img/majles.png'),
(16, 16, 'img/cafein.jpg'),
(17, 21, 'img/java.jpg'),
(18, 22, 'img/hous.jpg'),
(19, 23, 'img/bonite.jpg'),
(20, 24, 'img/pannin.jpg'),
(21, 17, 'img/sugar.jpg'),
(22, 25, 'img/cafe.jpg'),
(23, 26, 'img/star.jpg'),
(24, 2, 'img/baskin2.jpg'),
(25, 2, 'img/baskin3.jpg'),
(26, 2, 'img/baskin4.jpg'),
(29, 3, 'img/subway2.jpg'),
(30, 3, 'img/subway3.jpg'),
(31, 18, 'img/novels.jpg'),
(32, 19, 'img/cantin.jpg'),
(33, 20, 'img/cafein.jpg'),
(34, 27, 'img/cafein.jpg'),
(35, 5, 'img/roti2.jpg'),
(36, 8, 'img/heil2.jpg'),
(37, 15, 'img/majles2.png'),
(38, 15, 'img/majles3.png'),
(42, 19, 'img/cantin2.jpg'),
(51, 13, 'img/cantin2.jpg'),
(52, 7, 'img/canton2.jpg'),
(53, 28, 'img/myrig.jpg'),
(54, 28, 'img/myrig4.jpg'),
(55, 28, 'img/myrig3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mytest`
--

CREATE TABLE `mytest` (
  `f_id` int(11) NOT NULL,
  `f_station` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytest`
--

INSERT INTO `mytest` (`f_id`, `f_station`, `name`, `id`) VALUES
(1, 'a55', 'dd', '');

-- --------------------------------------------------------

--
-- Table structure for table `restura`
--

CREATE TABLE `restura` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Station` varchar(50) NOT NULL,
  `Pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restura`
--

INSERT INTO `restura` (`ID`, `Name`, `Station`, `Pic`) VALUES
(1, 'sub', 'A4', '421569.jpg'),
(2, 'Sweet', 'A4', '241482.jpg'),
(3, 'bas', 'A4', '970855.jpg'),
(4, 'sbh', 'A4', '955947.jpg'),
(5, 'piz', 'A4', '366143.jpg'),
(6, 'pap', 'A4', '926557.jpg'),
(7, 'kan', 'A4', '379649.jpg'),
(8, '1', 'A4', '795828.jpg'),
(9, '2', 'A4', '701898.jpg'),
(10, '3', 'A4', '634552.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `station_name` text NOT NULL,
  `asc_color` text NOT NULL,
  `desc_color` text NOT NULL,
  `lat` decimal(11,7) NOT NULL,
  `lng` decimal(11,7) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `station_name`, `asc_color`, `desc_color`, `lat`, `lng`, `description`) VALUES
(1, 'A1', 'blue', 'purple', '24.8385400', '46.7216000', ''),
(2, 'A2', 'blue', 'purple', '24.8418590', '46.7194230', ''),
(3, 'A3', 'blue', 'purple', '24.8520550', '46.7176810', ''),
(4, 'A4', 'blue', 'purple', '24.8556410', '46.7172060', ''),
(5, 'A5', 'blue', 'purple', '24.8595180', '46.7164710', ''),
(6, 'A6', 'blue', 'purple', '24.8600460', '46.7024300', ''),
(7, 'A7', 'blue', 'purple', '24.8560710', '46.7208390', ''),
(8, 'A8', 'blue', 'purple', '24.8527090', '46.7213660', ''),
(9, 'A9', 'blue', 'purple', '24.8472500', '46.7223180', ''),
(10, 'A10', 'blue', 'purple', '24.8424210', '46.7230720', ''),
(11, 'F1', 'green', 'green', '24.8493800', '46.7245120', ''),
(12, 'F2', 'green', 'green', '24.8643010', '46.7242830', ''),
(13, 'S1', 'red', 'red', '24.8511040', '46.7114940', ''),
(14, 'S2', 'red', 'red', '24.8548590', '46.7111960', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `password`, `status`) VALUES
(6, 'mmm', 'ili44@hotmail.com', 'b59c67bf196a4758191e42f76670ceba', '1'),
(7, 'kk', 'bv@hotmail.com', 'b59c67bf196a4758191e42f76670ceba', '1'),
(8, 'nn', 'm@hotmail.com', 'b59c67bf196a4758191e42f76670ceba', '1'),
(9, 'Wafa', 'W@hotmail.com', 'b59c67bf196a4758191e42f76670ceba', '1'),
(10, 'mai', 'maaa@wmich.edu', '2b28587f6d880ea9fc27c6c48fe3f1eb', '1'),
(11, 'a', 'mm@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(12, 'f', 'mm2@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(13, 'a', 'mme@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(14, 'r', 'r@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(15, 'f', 'mmx@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a2`
--
ALTER TABLE `a2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `a4`
--
ALTER TABLE `a4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `a9`
--
ALTER TABLE `a9`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `a10`
--
ALTER TABLE `a10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `arrivalar`
--
ALTER TABLE `arrivalar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `arrivale`
--
ALTER TABLE `arrivale`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `collegear`
--
ALTER TABLE `collegear`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`orders`);

--
-- Indexes for table `mytest`
--
ALTER TABLE `mytest`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `restura`
--
ALTER TABLE `restura`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a2`
--
ALTER TABLE `a2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `a9`
--
ALTER TABLE `a9`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `a10`
--
ALTER TABLE `a10`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `arrivalar`
--
ALTER TABLE `arrivalar`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `arrivale`
--
ALTER TABLE `arrivale`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `collegear`
--
ALTER TABLE `collegear`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `mytest`
--
ALTER TABLE `mytest`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restura`
--
ALTER TABLE `restura`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `u_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
