-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2021 at 10:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_list`
--

CREATE TABLE `emp_list` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `emp_dob` date NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_list`
--

INSERT INTO `emp_list` (`id`, `emp_code`, `emp_name`, `department`, `emp_dob`, `joining_date`) VALUES
(1, 'AB0001', 'Sai Lakshmi', 'IT', '1997-01-05', '2020-01-05'),
(2, 'AB0002', 'Mayusha', 'IT', '1995-01-05', '2018-01-03'),
(3, 'AB0003', 'Sreevidhya', 'IT', '1998-01-05', '2021-01-04'),
(4, 'AB0004', 'Akhil', 'IT', '1997-01-05', '2020-01-02'),
(5, 'AB0005', 'Neethu', 'IT', '1998-01-05', '2021-01-05'),
(6, 'AB0006', 'Kavya', 'IT', '1995-08-09', '2018-01-05'),
(7, 'AB0007', 'Amrutha', 'IT', '1987-06-04', '2018-01-05'),
(8, 'AB0008', 'Sreedevi', 'IT', '1990-01-08', '2010-01-05'),
(9, 'AB0009', 'Devanand', 'IT', '1990-01-08', '2014-01-05'),
(10, 'AB0010', 'Nived', 'IT', '1989-01-09', '2014-01-05'),
(11, 'AB0011', 'Aadya', 'IT', '1997-01-05', '2020-01-05'),
(12, 'AB0012', 'Vedha', 'IT', '1991-09-08', '2015-01-05'),
(13, 'AB0013', 'Druv', 'IT', '1997-01-05', '2020-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_list`
--
ALTER TABLE `emp_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_list`
--
ALTER TABLE `emp_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
