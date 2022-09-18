-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:29 AM
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
-- Database: `mycafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_points` int(11) NOT NULL,
  `customer_phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_points`, `customer_phone_number`) VALUES
(1, 'bilal khatib', 32, 71885693),
(9, 'aboudeh ayi', 20, 71885694),
(10, 'bilal fawaz khatib', 200, 12341234),
(11, 'don', 0, 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `direct_sell_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `direct_sell_price`) VALUES
(1, 'coffee', 3000, -10472, 2000),
(2, 'tea', 5000, -117, 5000),
(3, 'nescafe', 6000, -111, 6000),
(4, 'cappucino', 6000, -117, 6000),
(5, 'zhourat', 5000, -104, 5000),
(6, 'ginger', 5000, -105, 5000),
(7, 'lemon', 6000, -103, 6000),
(8, 'lemonade', 6000, -103, 6000),
(9, 'carrot', 6000, -104, 6000),
(10, '7up', 6000, -103, 6000),
(11, 'pepsi', 6000, -121, 6000),
(12, 'mirinda', 6000, -102, 6000),
(13, 'xtra pineapple', 6000, -104, 6000),
(14, 'lipton ice tea passion fruits', 7000, -103, 7000),
(15, 'lipton ice tea peach', 7000, -104, 7000),
(16, 'amp blue', 7000, -103, 7000),
(17, 'xxl', 8000, -105, 8000),
(18, 'mexican power', 8000, -104, 8000),
(19, 'small water', 2000, -104, 2000),
(20, 'argileh tffe7', 10000, -103, 15000),
(21, 'argileh na3na3 w 7amod', 10000, -104, 15000),
(22, 'argileh na3na3 w 3lkeh', 10000, -104, 15000),
(23, 'argileh ras jabali', 15000, -103, 20000),
(24, 'nuts', 3000, -103, 3000),
(25, 'ka3keh', 4000, -102, 4000),
(26, 'ka3keh w khodra', 6000, -103, 6000),
(27, 'm3assal 3lkeh', 10000, -92, 10000),
(28, 'cedars ', 6000, -93, 6000),
(29, 'Eclair', 2000, 0, 2000),
(30, 'Cup Cake', 2000, 0, 2000),
(31, 'Coconut Cake', 2000, 0, 2000),
(32, 'Iced Coffee', 7000, 20, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(11) NOT NULL,
  `reminder` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `total_earnings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `date1`, `total_earnings`) VALUES
(31, '2021-05-23', 144000),
(37, '2021-05-24', 0),
(38, '2021-05-29', 23000);

-- --------------------------------------------------------

--
-- Table structure for table `table1description`
--

CREATE TABLE `table1description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1description`
--

INSERT INTO `table1description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table2description`
--

CREATE TABLE `table2description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table2description`
--

INSERT INTO `table2description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table3description`
--

CREATE TABLE `table3description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table3description`
--

INSERT INTO `table3description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table4description`
--

CREATE TABLE `table4description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table4description`
--

INSERT INTO `table4description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table5description`
--

CREATE TABLE `table5description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table5description`
--

INSERT INTO `table5description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table6description`
--

CREATE TABLE `table6description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table6description`
--

INSERT INTO `table6description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table7description`
--

CREATE TABLE `table7description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table7description`
--

INSERT INTO `table7description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table8description`
--

CREATE TABLE `table8description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table8description`
--

INSERT INTO `table8description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `table9description`
--

CREATE TABLE `table9description` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table9description`
--

INSERT INTO `table9description` (`id`, `item_id`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 1, 'Coffee', 0, 3000),
(2, 2, 'Tea', 0, 5000),
(3, 3, 'Nescafe', 0, 6000),
(4, 4, 'Cappucino', 0, 6000),
(5, 5, 'Zhourat', 0, 5000),
(6, 6, 'Ginger', 0, 5000),
(7, 7, 'Lemon Juice', 0, 6000),
(8, 8, 'Lemonade', 0, 6000),
(9, 9, 'Carrot Juice', 0, 6000),
(10, 10, '7UP', 0, 6000),
(11, 11, 'Pepsi', 0, 6000),
(12, 12, 'Mirinda', 0, 6000),
(13, 13, 'xtra pineapple', 0, 6000),
(14, 14, 'Lipton ICT passion fruits', 0, 7000),
(15, 15, 'Lipton ICT peach', 0, 7000),
(16, 16, 'AMP Blue Energie Drink', 0, 7000),
(17, 17, 'XXL Energy Drink', 0, 8000),
(18, 18, 'Mexican Power', 0, 8000),
(19, 19, 'Small Water', 0, 2000),
(20, 20, 'Argileh Apple', 0, 10000),
(21, 21, 'Argileh Mint And Lemon', 0, 10000),
(22, 22, 'Argileh Mint And Gum', 0, 10000),
(23, 23, 'Argileh Ras Jabali', 0, 15000),
(24, 24, 'Nuts', 0, 3000),
(25, 25, 'Ka3keh', 0, 4500),
(26, 26, 'Ka3keh W Khodra', 0, 6000),
(27, 27, 'Argileh Gum', 0, 10000),
(28, 28, 'Cedars Silver', 0, 6000),
(29, 29, 'Eclair', 0, 2000),
(30, 30, 'Cup Cake', 0, 2000),
(31, 31, 'Coconut Cake', 0, 2000),
(32, 32, 'Iced Coffee', 0, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `items_on_table` varchar(1000) NOT NULL,
  `table_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_id`, `items_on_table`, `table_total`) VALUES
(1, 1, '', 0),
(2, 2, '', 0),
(3, 3, '', 0),
(4, 4, '', 0),
(5, 5, '', 0),
(6, 6, '', 0),
(7, 7, '', 0),
(8, 8, '', 0),
(9, 9, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'bilal2001', 'blazer317@hotmail.com', '$2y$10$grD8Ijus3FaGWdNKHdnJSOqV6OKlRYzSHjSMN/SINaMOmKEEo1O7S'),
(2, 'don', 'aysha.zaylaa@gmail.com', '$2y$10$oXfjT6q/.KBw0P1X6KoB1On.R.hopiMVBRpTk0W9yZTf2LshpovCa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date1` (`date1`);

--
-- Indexes for table `table1description`
--
ALTER TABLE `table1description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2description`
--
ALTER TABLE `table2description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table3description`
--
ALTER TABLE `table3description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table4description`
--
ALTER TABLE `table4description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table5description`
--
ALTER TABLE `table5description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table6description`
--
ALTER TABLE `table6description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table7description`
--
ALTER TABLE `table7description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table8description`
--
ALTER TABLE `table8description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table9description`
--
ALTER TABLE `table9description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `table1description`
--
ALTER TABLE `table1description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table2description`
--
ALTER TABLE `table2description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table3description`
--
ALTER TABLE `table3description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table4description`
--
ALTER TABLE `table4description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table5description`
--
ALTER TABLE `table5description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table6description`
--
ALTER TABLE `table6description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table7description`
--
ALTER TABLE `table7description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table8description`
--
ALTER TABLE `table8description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table9description`
--
ALTER TABLE `table9description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
