-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 12:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(100) NOT NULL,
  `bg` text NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `phone` int(50) NOT NULL,
  `address` text NOT NULL,
  `keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`id`, `bg`, `name`, `dob`, `phone`, `address`, `keyword`) VALUES
(1, 'o+', 'Nahid', '1995-04-28', 1719205019, 'uttara,Dhaka', 'o+,uttara'),
(2, 'o+', 'limu', '1995-04-28', 1934146170, 'mdpur, dhaka', 'o+,mdpur'),
(3, 'ab+', 'Lubna', '1988-05-04', 1751344539, 'panchagarh, rangpur', 'ab+ pancha'),
(4, 'o+', 'x', '1995-04-28', 2147483647, 'uttara,Dhaka', 'o+,uttara'),
(5, 'ab+', 'asdasda', '1988-05-04', 2147483647, 'mdpur, dhaka', 'ab+ pancha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
