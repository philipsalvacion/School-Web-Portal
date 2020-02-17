-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 04:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `remarks` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `lastname`, `section`, `year`, `remarks`) VALUES
(2001, 'Majelle', 'Bernabe', 'Mestidio', 'A', 4, ''),
(2002, 'John Philip', 'Buemia', 'Salvacion', 'A', 4, ''),
(2003, 'Norlyn', 'Chavez', 'Saballo', 'A', 4, ''),
(2004, 'Noel', 'Hernandez', 'Dizon', 'A', 4, ''),
(2005, 'Paolo', 'Monti', 'Manlangit', 'A', 4, ''),
(2006, 'Airish Mae', 'Rodriguez', 'Matel', 'A', 4, ''),
(2007, 'Maria Jolina ', 'Salas', 'Galagar', 'A', 4, ''),
(2008, 'Joshua', 'Maceda', 'Encarnado', 'A', 4, ''),
(2009, 'Jellyn', 'Alba', 'Delos Santos', 'A', 4, ''),
(2010, 'Ella Mae', '', 'Rubite', 'A', 4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
