-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 09:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `ID` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Balancce` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`ID`, `Name`, `E-mail`, `Balancce`) VALUES
(1, 'Joey', 'joey123@gmail.com', '550000'),
(2, 'Chandler', 'chandler234@gmail.com', '45000'),
(3, 'Monica', 'monica345@gmail.com', '65000'),
(4, 'Ross', 'ross456@gmail.com', '46500'),
(5, 'Rachel', 'rachel567@gmail.com', '340000'),
(6, 'Phobe', 'phobe678@gmail.com', '364000'),
(7, 'Gunther', 'gunther789@gmail.com', '36000'),
(8, 'Janice', 'janice890@gmail.com', '520000'),
(9, 'Ben', 'ben901@gmail.com', '64000'),
(10, 'Karel', 'karel0123@gmail.com', '40000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
