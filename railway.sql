-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 07:36 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `classes` varchar(50) NOT NULL,
  `radio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `source`, `dest`, `dates`, `category`, `classes`, `radio`) VALUES
(2, 'guntur', 'vza', '2021-04-21', 'ladies', 'AC Chair Car', 'Flexible With Date'),
(3, 'guntur', 'vza', '2021-04-24', 'lower berth/sr.citizen', 'AC First Class', 'Train With Available Berth'),
(4, 'guntur', 'vza', '2021-04-21', 'lower berth/sr.citizen', 'AC 3 Economy', 'Train With Available Berth'),
(5, 'guntur', 'vza', '2021-04-21', 'lower berth/sr.citizen', 'First Class', 'Train With Available Berth'),
(6, 'guntur', 'vza', '2021-05-08', 'tatkal', 'All Classes', 'Train With Available Berth');

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`ID`, `Name`, `Email`, `Contact`, `Message`) VALUES
(1, 'NSNV Ramesh', 'nsnvramesh@gmail.com', 2147483647, 'good'),
(3, 'NSNV Ramesh', 'nsnvramesh@gmail.com', 2147483647, 'Hello'),
(4, 'girish', 'gi@gmail.com', 1234, 'good'),
(5, 'NSNV Ramesh', 'nsnvramesh@gmail.com', 123456, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', 'admin'),
('girish', '123456789'),
('mani', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `SLNO` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `IDNumber` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`SLNO`, `fname`, `lname`, `age`, `mobile`, `IDNumber`) VALUES
(1, 'NSNV', 'Ramesh', 25, 9441901207, 12345678998765432),
(2, 'NSNV', 'Ramesh', 25, 9441901207, 123),
(3, 'NSNV', 'Ramesh', 25, 9441901207, 12345678998765432),
(4, 'Girish', 'Neelisetti', 25, 1918719198, 12345678998765432),
(5, 'NSNV', 'Ramesh', 25, 9441901207, 12345678998765432);

-- --------------------------------------------------------

--
-- Table structure for table `pnr`
--

CREATE TABLE `pnr` (
  `Id` int(11) NOT NULL,
  `trainname` varchar(50) NOT NULL,
  `trainnumber` int(20) NOT NULL,
  `route` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnr`
--

INSERT INTO `pnr` (`Id`, `trainname`, `trainnumber`, `route`) VALUES
(1, 'vishaka exp', 1234, 'vij');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `username`, `age`, `mobile`, `email`, `password`, `id`) VALUES
('Girish', 'Neelisetti', 'girish', 18, '1234', 'gi@gmail.com', '123456789', 9),
('mani', 'adapala', 'mani', 18, '1234', 'm@gmail.com', '123456789', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `pnr`
--
ALTER TABLE `pnr`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cont`
--
ALTER TABLE `cont`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pnr`
--
ALTER TABLE `pnr`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
