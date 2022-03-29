-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 06:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom02`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `admin_email`, `admin_pass`) VALUES
(1, 'munna@gmail.com', 'cf72c35762cb653212e7edebf8bd53d8');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_img`) VALUES
(1, '20181204_202553.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` int(11) NOT NULL,
  `ctg_icon` varchar(255) NOT NULL,
  `ctg_name` varchar(255) NOT NULL,
  `ctg_des` varchar(255) NOT NULL,
  `ctg_status` tinyint(200) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `ctg_icon`, `ctg_name`, `ctg_des`, `ctg_status`) VALUES
(5, '<i class=\"lab la-apple\"></i>', 'Apple', 'Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services. Apple is the largest ...', 1),
(6, '<i class=\"las la-carrot\"></i>', 'Orange', 'An orange has a tough shiny orange skin that holds acid in outside layer. Inside, the fruit is divided into \"segments\", which have thin tough skins that hold ...', 0),
(7, '<i class=\"las la-carrot\"></i>', 'Orange', 'An orange has a tough shiny orange skin that holds acid in outside layer. Inside, the fruit is divided into \"segments\", which have thin tough skins that hold ...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `product_ctg` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_des`, `product_ctg`, `product_img`, `product_status`) VALUES
(1, 'Mac Book Pro - M-50 the Pro series Laptopa', 1500, 'Mac Book Pro - M-50 the Pro series LaptopMac Book Pro - M-50 the Pro series Laptop', 0, 'Copy of 20191018_170306.jpg', 1),
(3, 'Pro series Laptop', 1200, 'http://localhost/php-ccomerce-02/admin/manage-product.php', 0, 'IMG_20180121_151239186.jpg', 1),
(4, 'Msi Motherboard', 11111, 'http://localhost/php-ccomerce-02/admin/manage-product.php', 1, 'IMG_20180215_114705858.jpg', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_details_info`
-- (See below for the actual view)
--
CREATE TABLE `products_details_info` (
`product_id` int(11)
,`product_name` varchar(255)
,`product_price` int(11)
,`product_des` varchar(255)
,`product_img` varchar(255)
,`ctg_name` varchar(255)
,`product_status` tinyint(4)
);

-- --------------------------------------------------------

--
-- Structure for view `products_details_info`
--
DROP TABLE IF EXISTS `products_details_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_details_info`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`product_price` AS `product_price`, `products`.`product_des` AS `product_des`, `products`.`product_img` AS `product_img`, `category`.`ctg_name` AS `ctg_name`, `products`.`product_status` AS `product_status` FROM (`products` join `category` on(`products`.`product_ctg` = `category`.`ctg_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
