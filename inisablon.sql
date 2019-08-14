-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 05:56 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inisablon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmrole`
--

CREATE TABLE `tbmrole` (
  `idrole` int(11) NOT NULL,
  `rolename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmrole`
--

INSERT INTO `tbmrole` (`idrole`, `rolename`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbmstatus`
--

CREATE TABLE `tbmstatus` (
  `idstatus` int(11) NOT NULL,
  `statusname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmstatus`
--

INSERT INTO `tbmstatus` (`idstatus`, `statusname`) VALUES
(1, 'Baru'),
(2, 'Proses'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbmuser`
--

CREATE TABLE `tbmuser` (
  `iduser` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `passwordreal` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmuser`
--

INSERT INTO `tbmuser` (`iduser`, `username`, `password`, `passwordreal`, `role`, `name`) VALUES
(1, 'eldaok', '202cb962ac59075b964b07152d234b70', '123', 1, 'Elda Oktaviani'),
(7, 'ubai', '202cb962ac59075b964b07152d234b70', '123', 2, 'Abu Ubaidillah');

-- --------------------------------------------------------

--
-- Table structure for table `tmborder`
--

CREATE TABLE `tmborder` (
  `idorder` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer` varchar(200) NOT NULL,
  `article` varchar(255) NOT NULL,
  `manual` int(11) NOT NULL,
  `dtg` int(11) NOT NULL,
  `onlysablon` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `marketing` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmborder`
--

INSERT INTO `tmborder` (`idorder`, `date`, `customer`, `article`, `manual`, `dtg`, `onlysablon`, `phone`, `email`, `marketing`, `status`) VALUES
(1, '2018-09-01', 'Ramadhan', 'PMII Moh. Zamroni', 0, 0, 24, '081908815173', 'ramadhana@gmail.com', 2, 2),
(3, '2018-09-01', 'roger', 'jelek sekali', 2, 2, 2, '081226442227', 'eldaoktaviani5@gmail.com', 1, 1),
(5, '2018-09-22', 'Elda', 'Baju baru', 1, 22, 21, '081234567890', 'ismartyani@gmail.com', 1, 3),
(7, '2018-09-22', 'Janah', 'Janaterbaik', 8, 8, 8, '081777222777', 'ubay1996@gmail.com', 7, 1),
(8, '2018-09-29', 'Joni', 'Joni', 9, 0, 2, '081222333444', 'jonai@gmail.com', 7, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmrole`
--
ALTER TABLE `tbmrole`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `tbmstatus`
--
ALTER TABLE `tbmstatus`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `tbmuser`
--
ALTER TABLE `tbmuser`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `tmborder`
--
ALTER TABLE `tmborder`
  ADD PRIMARY KEY (`idorder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmrole`
--
ALTER TABLE `tbmrole`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbmstatus`
--
ALTER TABLE `tbmstatus`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbmuser`
--
ALTER TABLE `tbmuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tmborder`
--
ALTER TABLE `tmborder`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
