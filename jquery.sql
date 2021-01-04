-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2021 at 02:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `jquery`
--

CREATE TABLE `jquery` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `AGE` int(100) NOT NULL,
  `CITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jquery`
--

INSERT INTO `jquery` (`ID`, `NAME`, `AGE`, `CITY`) VALUES
(74, 'SIVARAM.PR', 19, 'NEDUNGUDI'),
(80, 'SIVITHYA.S', 19, 'NEDUNGUDI'),
(84, 'Sujatha', 24, 'Aalapiranthan'),
(88, 'SIVARANJANI.PR', 18, 'NEDUNGUDI'),
(90, 'Angappan muthu', 20, 'Karaikudi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jquery`
--
ALTER TABLE `jquery`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jquery`
--
ALTER TABLE `jquery`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
