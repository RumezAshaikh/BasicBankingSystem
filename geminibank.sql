-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 02:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geminibank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transcationdetails`
--

CREATE TABLE `transcationdetails` (
  `id` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `transcationdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transcationdetails`
--

INSERT INTO `transcationdetails` (`id`, `sender`, `receiver`, `amount`, `transcationdate`) VALUES
(1, 'Rumeza Shaikh', 'Arsheen Hasware', '100', '2022-02-21 12:09:57'),
(2, 'Arsheen Hasware', 'Rumeza Shaikh', '10000', '2022-02-21 12:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `balance` varchar(30) NOT NULL,
  `doj` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `emailid`, `phoneno`, `balance`, `doj`) VALUES
(1, 'Rumeza Shaikh', 'rumeza@gmail.com', '8650227658', '999800', '2022-02-21 07:25:52'),
(2, 'Arsheen Hasware', 'arsheen@gmail.com', '9596325641', '1235867', '2022-02-21 07:33:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transcationdetails`
--
ALTER TABLE `transcationdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transcationdetails`
--
ALTER TABLE `transcationdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
