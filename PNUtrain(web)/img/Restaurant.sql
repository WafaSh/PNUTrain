-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnuResturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `Restaurant`
--

CREATE TABLE `Resturant` (
  
  `Resturant_name` varchar(20) NOT NULL,
  `station_name` text NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Resturant`
--

INSERT INTO `Resturant` (`Resturant_name`, `station_name`,`menu`) VALUES

('sugar sprinkles', 'A4,A2' ,'pic1.jpg'),
('Baskin Robbins', 'A4','pic2.jpg'),
(('Subway', 'A4,A2' ,'pic3.jpg'),
('layl w nahar', 'A4','pic4.jpg'),
('saj riqaq', 'A4','pic5.jpg'),
('Pizza Inn', 'A4','pic6.jpg'),
('Roti Boy', 'A4','pic7.jpg'),
('Canton', 'A4','pic8.jpg'),
('hil w zaeafran', 'A4' ,'pic9.jpg'),
('Mirig', 'A4' ,'pic10.jpg'),

;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `Resturant`
  MODIFY `station_name` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
