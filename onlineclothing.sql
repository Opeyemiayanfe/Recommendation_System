-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 02:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `listprice` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `description`, `size`, `price`, `listprice`, `category`, `product_image`) VALUES
(5, 'Dress', 'Red long gown', '28', '10000', '11000', 'Women', '5f7fab9b3be2e5.04068653.png'),
(6, 'Dress', 'Red shoulder less Gown', '30', '12000', '13000', 'Women', '5f7fac64e5cbe6.37254756.png'),
(7, 'Shirt', 'Checkers Long sleeve', 'Medium', '5000', '6000', 'Men', '5f7fad9c5a3303.04902573.png'),
(8, 'Shirt', 'Sky blue plain Long sleeve', 'Large', '7000', '7500', 'Men', '5f7fae37ce1555.51672108.png'),
(9, 'Coat', 'Fur Female tiger skin', '28', '3000', '2500', 'Women', '5f7fae937cbde3.59775609.png'),
(10, 'Coat', 'Fur brown', '32', '4000', '3500', 'Women', '5f7fafce862511.86026371.png'),
(11, 'T-shirt', 'Gray Polo', 'Large', '2500', '3000', 'Men', '5f7fb1030a6c20.95433208.png'),
(12, 'T-shirt', 'Light green Polo', 'Medium', '3000', '35000', 'Men', '5f7fb1837184a9.36583836.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL DEFAULT 'users',
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `role`, `password`) VALUES
(8, 'opeyemi', 'femi', 'opeayan2009@yahoo.com', 'admin', '$2y$10$XJLbW3513/uRRLZ6Eta5n.t4uWC.GBWSzdJ4DHM9DyHGBRwtwJkgK'),
(9, 'dayo', 'yemi', 'sunnydbanj@gmail.com', 'users', '$2y$10$z3tfGeyIUFJGSvwu2PRrw.gUJKg7xif0aoq6IVfyNSlHLep6TWkem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
