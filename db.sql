-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:13 PM
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Branch_Code` char(6) NOT NULL,
  `B_Address` varchar(30) NOT NULL,
  `B_Place` varchar(100) NOT NULL,
  `B_Contact_Number` varchar(10) NOT NULL,
  `Open_time` time NOT NULL,
  `Close_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE `customer_account` (
  `User_ID` char(6) NOT NULL,
  `First_Name` varchar(30) DEFAULT NULL,
  `Last_Name` varchar(30) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Postal_Code` varchar(8) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`User_ID`, `First_Name`, `Last_Name`, `Email`, `Address`, `Postal_Code`, `Password`) VALUES
('', 'ert', 'ert', 'ergh', 'edfghjnb', 'd456', NULL),
('1212', 'SDSD', 'DADAD', 'rasan@email.comd', 'sds', '1133', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer_account_contact`
--

CREATE TABLE `customer_account_contact` (
  `User_ID` char(6) NOT NULL,
  `Contact_Number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `item_number` varchar(255) DEFAULT NULL,
  `customer_details` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `delivery_charges` decimal(10,2) DEFAULT NULL,
  `sub_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `item_number`, `customer_details`, `quantity`, `unit_price`, `delivery_charges`, `sub_total`) VALUES
(3, 'a100', 'chathu', 1, 200.00, 300.00, 600.00),
(4, 'A001', 'Test user', 2, 100.00, 100.00, 200.00),
(6, 'a213', 'dew', 4, 456.00, 324.00, 543.00);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `DB_ID` char(50) NOT NULL DEFAULT '0',
  `DB_First_Name` varchar(30) NOT NULL,
  `DB_Last_Name` varchar(30) DEFAULT NULL,
  `DB_Contact_Number` varchar(10) NOT NULL,
  `DB_Gender` varchar(6) DEFAULT NULL,
  `DB_Email` varchar(40) DEFAULT NULL,
  `DB_DOB` date DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`DB_ID`, `DB_First_Name`, `DB_Last_Name`, `DB_Contact_Number`, `DB_Gender`, `DB_Email`, `DB_DOB`, `Address`, `Password`) VALUES
('', '', NULL, '', NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_paysheet`
--

CREATE TABLE `delivery_boy_paysheet` (
  `DB_ID` char(6) NOT NULL,
  `Year` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `User_ID` char(6) DEFAULT NULL,
  `Parent_ID` char(6) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `FB_Message` varchar(1000) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `Laptop_ID` char(6) NOT NULL,
  `Brand` varchar(30) DEFAULT NULL,
  `Processor` varchar(30) DEFAULT NULL,
  `RAM` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` char(6) NOT NULL,
  `User_ID` char(6) DEFAULT NULL,
  `Laptop_ID` char(6) DEFAULT NULL,
  `Order_Date` date DEFAULT NULL,
  `Delivery_Date` date DEFAULT NULL,
  `Branch_Code` char(6) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `Seller_ID` char(6) NOT NULL,
  `Seller_Name` varchar(50) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Contact_Number` varchar(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Postal_Code` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_has_laptop`
--

CREATE TABLE `seller_has_laptop` (
  `Seller_ID` char(6) NOT NULL,
  `Laptop_ID` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `supportId` int(12) NOT NULL,
  `supEmail` varchar(50) NOT NULL,
  `supMsg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`supportId`, `supEmail`, `supMsg`) VALUES
(39, 'dsdsdwsd@gmail.com', 'vrvrvrvrvrvrvrv'),
(40, 'dsdsdwsd@gmail.com', 'vrvrvrvrvrvrvrv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Branch_Code`);

--
-- Indexes for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `customer_account_contact`
--
ALTER TABLE `customer_account_contact`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`DB_ID`);

--
-- Indexes for table `delivery_boy_paysheet`
--
ALTER TABLE `delivery_boy_paysheet`
  ADD PRIMARY KEY (`DB_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `feedback_user_FK` (`User_ID`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`Laptop_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `orders_customer_account_FK` (`User_ID`),
  ADD KEY `orders_laptop_FK` (`Laptop_ID`),
  ADD KEY `orders_branches_FK` (`Branch_Code`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`Seller_ID`);

--
-- Indexes for table `seller_has_laptop`
--
ALTER TABLE `seller_has_laptop`
  ADD PRIMARY KEY (`Seller_ID`,`Laptop_ID`),
  ADD KEY `seller_has_laptop_laptop_FK` (`Laptop_ID`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`supportId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `supportId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_FK` FOREIGN KEY (`User_ID`) REFERENCES `customer_account` (`User_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_branches_FK` FOREIGN KEY (`Branch_Code`) REFERENCES `branches` (`Branch_Code`),
  ADD CONSTRAINT `orders_customer_account_FK` FOREIGN KEY (`User_ID`) REFERENCES `customer_account` (`User_ID`),
  ADD CONSTRAINT `orders_laptop_FK` FOREIGN KEY (`Laptop_ID`) REFERENCES `laptop` (`Laptop_ID`);

--
-- Constraints for table `seller_has_laptop`
--
ALTER TABLE `seller_has_laptop`
  ADD CONSTRAINT `seller_has_laptop_laptop_FK` FOREIGN KEY (`Laptop_ID`) REFERENCES `laptop` (`Laptop_ID`),
  ADD CONSTRAINT `seller_has_laptop_seller_FK` FOREIGN KEY (`Seller_ID`) REFERENCES `seller` (`Seller_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
