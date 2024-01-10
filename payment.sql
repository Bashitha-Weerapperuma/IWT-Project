-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 02:37 PM
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
-- Database: `connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(12) NOT NULL,
  `cardNum` int(16) NOT NULL,
  `cardHolderName` varchar(30) NOT NULL,
  `month` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardNum`, `cardHolderName`, `month`, `year`, `cvv`) VALUES
(4, 2147483647, 'jgjhh', '01 ju', '2022 ', 989),
(5, 2147483647, 'jgjhh', '01 ju', '2022 ', 989),
(6, 2147483647, '1erewre', '01 ju', '2020 ', 5678),
(7, 2147483647, '1erewre', '01 ju', '2020 ', 5678),
(8, 2147483647, 'dredf', '01 ju', '2020 ', 890),
(9, 12345678, 'xxcz', '01 ju', '2020 ', 345),
(10, 2147483647, 'grdg', '01 ju', '2021 ', 7777),
(11, 2147483647, 'grdg', '01 ju', '2021 ', 7777),
(12, 2147483647, 'grdg', '01 ju', '2021 ', 7777),
(13, 2147483647, 'buddika', '01 ju', '2020 ', 678),
(14, 2147483647, 'ghghg', '01 ju', '2020 ', 0),
(15, 2147483647, '11111', '03 ju', '2020 ', 111),
(16, 2147483647, '11111', '03 ju', '2020 ', 111),
(17, 0, 'yyyyyyyyyyyy', '01 ju', '2020 ', 0),
(18, 0, 'yyyyyyyyyyyy', '01 ju', '2020 ', 0),
(19, 0, 'yyyyyyyyyyyy', '01 ju', '2020 ', 0),
(20, 2147483647, 'rtr', '02 ju', '2021 ', 7777),
(21, 2147483647, 'rtr', '02 ju', '2021 ', 7777),
(22, 2147483647, 'dgdgdg', '01 ju', '2020 ', 444),
(23, 2147483647, 'nasd', '02 ju', '2022 ', 890),
(24, 2147483647, 'nasd', '02 ju', '2022 ', 890),
(25, 2147483647, 'gggg', '03 ju', '2022 ', 890),
(26, 2147483647, 'gggg', '01 ju', '2020 ', 678),
(27, 2147483647, 'rrgrgrgr', '01 ju', '2020 ', 7890),
(28, 2147483647, 'rrrrrrrr', '01 ju', '2020 ', 0),
(29, 0, 'sdsad', '02 ju', '2021 ', 0),
(30, 2147483647, '4453453', '01 ju', '2020 ', 4545),
(31, 2147483647, 'gtrhthth', '01 ju', '2021 ', 789),
(32, 2147483647, 'gtrhthth', '01 ju', '2021 ', 789),
(33, 2147483647, 'uuuu', '01 ju', '2020 ', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
