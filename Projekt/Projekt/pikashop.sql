-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 08:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pikashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(255) NOT NULL,
  `userID` int(50) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `userID`, `Title`, `Image`, `Description`) VALUES
(1, 2, 'Welcome to PIKA SHOP!', 'store.jpg', 'We aim to offer our customers a variety of the latest Products. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget-friendly products.  We offer all of this while providing excellent customer service and friendly support. We always keep an eye on the latest trends in our Products and put our customers’ wishes first . That is why we have satisfied customers all over the world, and are thrilled to be a part of the  industry. '),
(2, 1, '', 'store.jpg', 'interests of our customers are always top priority for us, so we hope you will enjoy our products as much as we enjoy making them available to you. We aim to offer our customers a variety of the latest Products. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget-friendly products. We offer all of this while providing excellent customer service and friendly support.'),
(3, 2, '', 'store.jpg', 'We always keep an eye on the latest trends in our Products and put our customers’ wishes first. That is why we have satisfied customers all over the world, and are thrilled to be a part of the industry , interests of our customers are always top priority for us, so we hope you will enjoy our products as much as we enjoy making them available to you.');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`) VALUES
(1, 'Technologies'),
(2, 'other orders');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(255) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `category_id`, `UserID`, `image`, `title`, `price`) VALUES
(1, 1, 1, 'product1.jpg', 'Hp Pavilion i5', '899'),
(2, 1, 1, 'product2.jpg', 'Security Camera ', '150'),
(3, 1, 2, 'product3.jpg', 'Smartwatch ', '150'),
(4, 1, 2, 'product4.jpg', 'Smartphone', '600'),
(5, 1, 1, 'product5.jpg', 'Android Smartphone', '600'),
(6, 1, 1, 'product6.jpg', 'Headphones PRO', '200'),
(7, 1, 2, 'product7.jpg', 'Smartwatch PRO', '350'),
(8, 1, 2, 'product2.jpg', 'Security Camera X', '200');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`) VALUES
(2, 'diamant', 'de@gmail.com', '$2y$10$W7DapWbn4wkMBfML/7OnBevFjMFx1.sIzoNbc1GovRJfry2phsi5y'),
(3, 'Aurel', 'asylaj@gmail.com', '$2y$10$RuLvuKFB7s7WHQ.tjxzmduk9sEZ9Nn2Jl5O0hl4A5qKi4AsO4PnrW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
