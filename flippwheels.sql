-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 04:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flippwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `negotiable` enum('yes','no') NOT NULL,
  `makeyear` varchar(15) NOT NULL,
  `color` varchar(20) NOT NULL,
  `kmdriven` varchar(50) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `engineincc` varchar(10) NOT NULL,
  `productused` tinyint(3) UNSIGNED NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `posted_date` date NOT NULL,
  `status` enum('sold','unsold') NOT NULL DEFAULT 'unsold'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `registration_number`, `description`, `price`, `photo`, `negotiable`, `makeyear`, `color`, `kmdriven`, `fuel`, `engineincc`, `productused`, `delivery`, `type`, `seller_id`, `posted_date`, `status`) VALUES
(1, 'test', 'sad', 'asdasd', '10.00', 'bac1.PNG', 'yes', '2012', 'test', '1', 'electric', '50', 3, 'yes', 'two', 1, '2022-01-11', 'unsold'),
(2, 'product2', '2', 'nice cat', '200000.00', 'bac.PNG', 'yes', '2020', 'red', '100000', 'petrol', '450', 1, 'yes', 'four', 1, '2022-01-11', 'unsold'),
(3, 'test', 'sadd', 'asdsad', '232323.00', 'bac1.PNG', 'no', '1', 'sad', 'sad', 'electric', '23', 23, 'yes', 'four', 1, '2022-01-11', 'unsold'),
(4, 'royal enfield', '234', 'works', '100000.00', '334c75c6b4afb982322f29d40da892c0.jpg', 'no', '2016', 'red', '4500', 'petrol', '500', 2, 'no', 'two', 1, '2022-01-12', 'unsold');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` enum('ADMIN','BUYER','SELLER') NOT NULL DEFAULT 'BUYER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone`, `password`, `address`, `type`) VALUES
(1, 'Rajan Acharya', 'rajan', 'prajwal.acharya.792@facebook.com', '9800000000', '81dc9bdb52d04dc20036dbd8313ed055', 'test', 'SELLER'),
(2, 'Prajwal', 'test', 'rajan@gmail.com', '9800000000', '202cb962ac59075b964b07152d234b70', 'tet', 'SELLER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
