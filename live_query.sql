-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 03:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_query`
--

-- --------------------------------------------------------

--
-- Table structure for table `example_table_1`
--

CREATE TABLE `example_table_1` (
  `id` int(11) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `example_table_1`
--

INSERT INTO `example_table_1` (`id`, `reg`, `name`, `email`) VALUES
(1802009, '08419', 'Tarit', 'tarit@gmail.com'),
(1802018, '08428', 'Sabbir Rashid', 'mim@gmail.com'),
(1802025, '08435', 'Maliha Afroz', 'maliha@gmail.com'),
(1802026, '08436', 'Lamia Fatiha', 'lamia@gmail.com'),
(1802027, '08437', 'Md. Babul Hasan', 'bhyean@gmail.com'),
(1802028, '08438', 'SK Rakib', 'sk@gmail.com'),
(1802029, '08439', 'scs', 'scna@cbjhabjc'),
(1802039, '02449', 'Hamid Mahtab Imad', 'imad@gmail.com'),
(1802049, '08459', 'Ratin', 'ratin@gmail.com'),
(1802056, '08466', 'Rashed Khan', 'rashed@gmail.com'),
(1802073, '08487', 'Rakib', 'rakib@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `example_table_2`
--

CREATE TABLE `example_table_2` (
  `id` int(11) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `total_credit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `example_table_2`
--

INSERT INTO `example_table_2` (`id`, `cgpa`, `total_credit`) VALUES
(1702037, '3.50', '28'),
(1802009, '2.50', '25'),
(1802018, '2.50', '30'),
(1802027, '3.20', '30'),
(1802039, '2.80', '28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `example_table_1`
--
ALTER TABLE `example_table_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example_table_2`
--
ALTER TABLE `example_table_2`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
