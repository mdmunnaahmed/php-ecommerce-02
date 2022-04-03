-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 03:45 PM
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
  `banner_status` tinyint(4) NOT NULL DEFAULT 1,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_status`, `banner_img`) VALUES
(7, 1, 'bg.png'),
(8, 1, 'bg2.png'),
(9, 1, 'bg3.png'),
(10, 0, 'bg2.png');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_icon` varchar(255) NOT NULL,
  `brand_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_icon`, `brand_des`) VALUES
(3, 'Apple', '<i class=\"lab la-apple\"></i>', 'Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services. Apple is the largest');

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
(6, '<i class=\"las la-carrot\"></i>', 'Orange', 'An orange has a tough shiny orange skin that holds acid in outside layer. Inside, the fruit is divided into \"segments\", which have thin tough skins that hold ...', 1),
(7, '<i class=\"las la-carrot\"></i>', 'Orange', 'An orange has a tough shiny orange skin that holds acid in outside layer. Inside, the fruit is divided into \"segments\", which have thin tough skins that hold ...', 1),
(8, '<i class=\"lab la-apple\"></i>', 'Apple', 'Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services. Apple is the largest', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ctg_sub_ctg`
-- (See below for the actual view)
--
CREATE TABLE `ctg_sub_ctg` (
`ctg_id` int(11)
,`ctg_icon` varchar(255)
,`ctg_name` varchar(255)
,`ctg_des` varchar(255)
,`ctg_status` tinyint(200)
,`sub_ctg_id` int(11)
,`parent_sub_ctg` varchar(255)
,`sub_ctg_name` varchar(255)
,`sub_ctg_des` varchar(255)
);

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
  `product_type` tinyint(4) NOT NULL DEFAULT 1,
  `product_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_des`, `product_ctg`, `product_img`, `product_type`, `product_status`) VALUES
(1, 'Mac Book Pro - M-50 the Pro series Laptopa', 1500, 'Mac Book Pro - M-50 the Pro series LaptopMac Book Pro - M-50 the Pro series Laptop', 0, 'Copy of 20191018_170306.jpg', 1, 1),
(3, 'Pro series Laptop', 1200, 'http://localhost/php-ccomerce-02/admin/manage-product.php', 0, 'IMG_20180121_151239186.jpg', 1, 1),
(4, 'Msi Motherboard', 11111, 'http://localhost/php-ccomerce-02/admin/manage-product.php', 1, 'IMG_20180215_114705858.jpg', 1, 1),
(5, 'Msi Motherboard', 143, 'form.onsubmit = (e) => {\r\n            e.preventDefault();\r\n        }', 5, 'item5.png', 1, 1),
(6, 'Samsung Monitor', 1500, 'Get a wide range of Samsung Monitors in Bangladesh - Curved, UHD, Gaming, Flat & Super Slim, Versatile High-Resolution Monitors and more.', 5, 'bg3.png', 2, 1),
(7, 'Mac Book Pro - M-50 the Pro series Laptop', 1500, 'Get a wide range of Samsung Monitors in Bangladesh - Curved, UHD, Gaming, Flat & Super Slim, Versatile High-Resolution Monitors and more.', 5, 'item11.png', 3, 1),
(8, 'Pro series Laptop', 129, 'The Samsung monitors are made to focus on all types of working users for example Photographers, Designers, Video Editors, Entertainment, Gaming, e-Sports, and ...', 6, 'item8.png', 1, 1);

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
,`product_ctg` int(11)
,`product_img` varchar(255)
,`product_type` tinyint(4)
,`product_status` tinyint(4)
,`ctg_name` varchar(255)
,`ctg_des` varchar(255)
,`ctg_icon` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_add_info`
--

CREATE TABLE `product_add_info` (
  `add_info_id` int(11) NOT NULL,
  `add_info_title` varchar(255) NOT NULL,
  `add_info_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_add_info`
--

INSERT INTO `product_add_info` (`add_info_id`, `add_info_title`, `add_info_value`) VALUES
(6, 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_ctg_id` int(11) NOT NULL,
  `parent_sub_ctg` varchar(255) NOT NULL,
  `sub_ctg_name` varchar(255) NOT NULL,
  `sub_ctg_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_ctg_id`, `parent_sub_ctg`, `sub_ctg_name`, `sub_ctg_des`) VALUES
(1, '6', 'submit', 'korem aosdmf asdfa dsdfsaodf'),
(2, '6', 'submit', 'korem aosdmf asdfa dsdfsaodf'),
(3, '6', 'submit', 'korem aosdmf asdfa dsdfsaodf'),
(4, '6', 'submit', 'korem aosdmf asdfa dsdfsaodf'),
(5, '8', 'asdf', 'asdf'),
(6, '7', 'asdf', 'asdf'),
(7, '5', 'Mobile', 'this is one of mobile\r\n');

-- --------------------------------------------------------

--
-- Structure for view `ctg_sub_ctg`
--
DROP TABLE IF EXISTS `ctg_sub_ctg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ctg_sub_ctg`  AS SELECT `category`.`ctg_id` AS `ctg_id`, `category`.`ctg_icon` AS `ctg_icon`, `category`.`ctg_name` AS `ctg_name`, `category`.`ctg_des` AS `ctg_des`, `category`.`ctg_status` AS `ctg_status`, `sub_category`.`sub_ctg_id` AS `sub_ctg_id`, `sub_category`.`parent_sub_ctg` AS `parent_sub_ctg`, `sub_category`.`sub_ctg_name` AS `sub_ctg_name`, `sub_category`.`sub_ctg_des` AS `sub_ctg_des` FROM (`category` join `sub_category` on(`category`.`ctg_id` = `sub_category`.`parent_sub_ctg`)) ;

-- --------------------------------------------------------

--
-- Structure for view `products_details_info`
--
DROP TABLE IF EXISTS `products_details_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_details_info`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`product_price` AS `product_price`, `products`.`product_des` AS `product_des`, `products`.`product_ctg` AS `product_ctg`, `products`.`product_img` AS `product_img`, `products`.`product_type` AS `product_type`, `products`.`product_status` AS `product_status`, `category`.`ctg_name` AS `ctg_name`, `category`.`ctg_des` AS `ctg_des`, `category`.`ctg_icon` AS `ctg_icon` FROM (`products` join `category` on(`products`.`product_ctg` = `category`.`ctg_id`)) ;

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

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
-- Indexes for table `product_add_info`
--
ALTER TABLE `product_add_info`
  ADD PRIMARY KEY (`add_info_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_ctg_id`);

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
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_add_info`
--
ALTER TABLE `product_add_info`
  MODIFY `add_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
