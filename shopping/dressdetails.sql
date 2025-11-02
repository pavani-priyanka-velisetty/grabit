-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 03:24 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `dressdetails`
--

CREATE TABLE `dressdetails` (
  `dressid` int(25) NOT NULL,
  `dressname` varchar(65) NOT NULL,
  `folder` varchar(20) NOT NULL,
  `dressimage` varchar(30) NOT NULL,
  `dressprice` int(10) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `ordereddate` date NOT NULL,
  `tab_id` int(11) NOT NULL,
  `div_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dressdetails`
--

INSERT INTO `dressdetails` (`dressid`, `dressname`, `folder`, `dressimage`, `dressprice`, `details`, `ordereddate`, `tab_id`, `div_id`, `quantity`, `status`) VALUES
(1, 'Georgette Semistitched Salwar', 'images', 'dress7.jpg', 1000, 'jgodfgpofdgvkdogkeosdkv', '2016-10-01', 0, 0, '5', 'available'),
(2, 'Party Wear dress', 'images', 'dress3.jpg', 1000, 'jgodfgpofdgvkdogkeosdk', '2016-10-05', 0, 0, '5', 'available'),
(3, 'Party Wear Kurti fabric', 'images', 'dress14.jpg', 1000, 'jgodfgpofdgvkdo', '2016-10-05', 0, 0, '5', 'available'),
(4, 'Embroidered Salwar Suit', 'images', 'dress4.jpg', 1000, 'jgodfgpofdgvkd', '2016-10-05', 0, 0, '5', 'available'),
(5, 'Party Wear Black Piece', 'images', 'dress5.jpg', 1000, 'jgodfgpofdgvkdog', '2016-10-05', 1, 0, '5', 'available'),
(6, 'Casual Orange Suit', 'images', 'dress15.jpg', 1000, '', '2016-10-05', 1, 0, '5', 'available'),
(7, 'Levis Mens Shirt', 'images', 'dress6.jpg', 1000, '', '2016-10-05', 1, 0, '5', 'available'),
(8, 'Mufti Mens Wear', 'images', 'dress9.jpg', 1000, '', '2016-10-05', 1, 0, '5', 'available'),
(9, 'Mens Casual Wear', 'images', 'dress10.jpg', 1000, '', '2016-10-05', 2, 0, '5', 'available'),
(10, 'Vanhuessen Mens Shirt', 'images', 'dress11.jpg', 1000, '', '2016-10-05', 2, 0, '5', 'available'),
(11, 'Louis Philip Mens Casual', 'images', 'dress12.jpg', 1000, '', '2016-10-05', 2, 0, '5', 'available'),
(12, 'Mens Formal Shirt', 'images', 'dress13.jpg', 1000, '', '2016-10-05', 2, 0, '5', 'available'),
(13, 'Amar Sofas', 'images', 'fur1.jpg', 1000, '', '2016-10-05', 0, 1, '5', 'available'),
(14, 'Modern Sofas', 'images', 'fur2.jpg', 1000, '', '2016-10-05', 0, 1, '5', 'available'),
(15, 'Classical Sofas', 'images', 'fur3.jpg', 1000, '', '2016-10-05', 0, 1, '5', 'available'),
(16, 'Royal Sofas', 'images', 'fur4.jpg', 1000, '', '2016-10-05', 0, 1, '5', 'available'),
(17, 'Modern  Set', 'images', 'bed1.jpg', 1000, '', '2016-10-05', 1, 1, '5', 'available'),
(18, 'Royal Set', 'images', 'bed2.jpg', 1000, '', '2016-10-05', 1, 1, '5', 'available'),
(19, 'Bedsheets', 'images', 'bed3.jpg', 1000, '', '2016-10-05', 1, 1, '5', 'available'),
(20, 'Wooden dinning set', 'images', 't1.jpg', 1000, '', '2016-10-05', 1, 1, '5', 'available'),
(21, ' Royal curtains', 'images', 'cur1.jpg', 1000, '', '2016-10-05', 2, 1, '5', 'available'),
(22, 'Cereamic cup set', 'images', 'coffee1.jpg', 1000, '', '2016-10-05', 2, 1, '5', 'available'),
(23, 'Switched Series', 'images', 'bo1.jpg', 1000, '', '2016-10-05', 2, 1, '5', 'available'),
(24, 'Cricket Set', 'images', 'cr1.jpg', 1000, '', '2016-10-05', 2, 1, '5', 'available'),
(25, 'iphone5s', 'images', 'iphone1.jpg', 1000, '', '2016-10-05', 0, 2, '5', 'available'),
(26, 'iphone6s', 'images', 'iphone2.jpg', 1000, '', '2016-10-05', 0, 2, '5', 'available'),
(27, 'iphone7s', 'images', 'iphone3.jpg', 1000, '', '2016-10-05', 0, 2, '5', 'available'),
(28, 'flipcover', 'images', 'iphone6.jpg', 1000, '', '2016-10-05', 0, 2, '5', 'available'),
(29, 'lenovo vibe k5 note', 'images', 'l2.jpg', 1000, '', '2016-10-05', 1, 2, '5', 'available'),
(30, 'flipcover', 'images', 'f.jpg', 1000, '', '2016-10-05', 1, 2, '5', 'available'),
(31, 'Oppo', 'images', 'appo.jpg', 1000, '', '2016-10-05', 1, 2, '5', 'available'),
(32, 'Samsung j7', 'images', 'gadget2.jpg', 1000, '', '2016-10-05', 1, 2, '5', 'available'),
(33, 'whirlpool', 'images', 'w1.jpg', 1000, '', '2016-10-05', 2, 2, '5', 'available'),
(34, 'godrej', 'images', 'split.jpg', 1000, '', '2016-10-05', 2, 2, '5', 'available'),
(35, 'Prestige', 'images', 'oven.jpg', 1000, '', '2016-10-05', 2, 2, '5', 'available'),
(36, 'Sony plasma', 'images', '7.jpg', 1000, '', '2016-10-05', 2, 2, '5', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dressdetails`
--
ALTER TABLE `dressdetails`
  ADD PRIMARY KEY (`dressid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dressdetails`
--
ALTER TABLE `dressdetails`
  MODIFY `dressid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
