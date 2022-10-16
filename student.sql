-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 07:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `roll` int(6) NOT NULL,
  `class` varchar(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `class`, `city`, `pcontact`, `photo`, `datetime`) VALUES
(41, 'Ajharul Islam', 444433, '1st', 'House#15, Ward#', '01944444444', '4444332020-06-06-06-58.jpg', '2020-06-06 16:17:58'),
(43, 'Majhar Rakib', 444439, '2nd', 'House#1eww', '01812888858', '4444392020-06-06-06-53.jpg', '2020-06-06 16:18:53'),
(44, 'kutub ussin', 443322, '4th', 'Dhaka, Banglade', '01797159600', '4433222020-06-06-06-28.jpg', '2020-06-06 16:19:28'),
(45, 'Shirin Akter', 443342, '2nd', 'Dhaka, Banglade', '01797159600', '4433422020-06-06-06-51.jpg', '2020-06-06 16:19:51'),
(47, 'utfol kumar das', 443353, '2nd', 'Dhaka, Banglade', '01814270541', '4433532020-06-06-06-32.jpg', '2020-06-06 16:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(10, 'Ajharul Islam', 'dedke@gmail.com', 'sdsdq232323', '1bbd886460827015e5d605ed44252251', 'sdsdq2323ee23.jpg', 'inactive', '2020-06-08 11:49:10'),
(14, 'Majhar Rakib', 'ded222ke@gmail.com', 'yescablessdwwewe', '618e02fc80fa3a0bd41d65f5b54a11fc50426d12', 'yescablessdwwewe.jpg', 'inactive', '2020-06-08 11:49:10'),
(15, 'Ajharul Islam', 'sdsdsdsdsdsd@gmail.com', 'mdrashed38', '618e02fc80fa3a0bd41d65f5b54a11fc50426d12', 'mdrashed38.jpg', 'inactive', '2020-06-08 11:49:10'),
(16, 'Ajharul Islam', 'rajrashed42s1@gmail.com', 'yescablessasasas', '618e02fc80fa3a0bd41d65f5b54a11fc50426d12', 'yescablessasasas.jpg', 'inactive', '2020-06-08 11:49:10'),
(17, 'Ajharul Islam', 'rajrashed42sdsd1@gmail.com', 'yescables133232323', '618e02fc80fa3a0bd41d65f5b54a11fc50426d12', 'yescables133232323.jpg', 'inactive', '2020-06-08 11:49:10'),
(18, 'Ajharul Islam', 'djforhad@gmail.com', 'rasheddd', '618e02fc80fa3a0bd41d65f5b54a11fc50426d12', 'rasheddd21-06-20-06-2020steo.jpg', 'active', '2020-06-08 11:49:10'),
(19, 'kus', 'kus@gmail.com', 'kus12345', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 'kus12345.jpg', 'inactive', '2020-06-08 11:49:10'),
(20, 'Ajharul Islam', 'janatakumar@gmail.com', 'kumarkosl', '618e02fc80fa3a0bd41d65f5b54a11fc50426d12', 'kumarkosl.jpg', 'inactive', '2020-06-08 11:49:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
