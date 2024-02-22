-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 06:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationform`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationtable`
--

CREATE TABLE `registrationtable` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `bloodType` varchar(10) NOT NULL,
  `lastBloodGivenDate` varchar(15) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `c_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationtable`
--

INSERT INTO `registrationtable` (`id`, `name`, `mobile`, `age`, `district`, `address`, `bloodType`, `lastBloodGivenDate`, `pass`, `c_pass`) VALUES
(4, 'Md. Shahriyar Hossain', '01736940916', 23, 'Rajshahi', 'Rajshahi', 'O+', '2023-08-23', '12345678@', '12345678@'),
(5, 'Shahriyar Saikoth', '01736940917', 23, 'Rajshahi', 'Rajshahi', 'AB-', '2023-12-13', '12345678@', '12345678@'),
(6, 'Saikoth', '01736940918', 25, 'Dhaka', 'Dhaka', 'AB-', '2023-11-30', '12345678@', '12345678@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationtable`
--
ALTER TABLE `registrationtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrationtable`
--
ALTER TABLE `registrationtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
