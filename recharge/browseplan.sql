-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 07:21 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `browseplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `email` varchar(50) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `pin` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`email`, `accno`, `balance`, `pin`, `cvv`) VALUES
('pinky@gmail.com', 'ac1234a1', '950', 9584, 985),
('yadhapriyanka@gmail.com', 'ac1234a2', '8519', 1236, 458),
('', 'ac1234a3', '45698', 4563, 125),
('', 'ac1234a4', '12365', 9632, 123);

-- --------------------------------------------------------

--
-- Table structure for table `browseplan`
--

CREATE TABLE `browseplan` (
  `Operators` varchar(30) NOT NULL,
  `Plans` varchar(30) NOT NULL,
  `Talktime` int(11) NOT NULL,
  `Validity` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `browseplan`
--

INSERT INTO `browseplan` (`Operators`, `Plans`, `Talktime`, `Validity`, `Description`, `Price`) VALUES
('Airtel', '3G Data', 0, '2 Days', '75MB 3G Data for 2 Days', 'Rs.19'),
('Airtel', '3G Data', 0, '3 Days', '100MB 3G Data for 3Days', 'Rs.25'),
('Airtel', '3G Data', 0, '8 Days', '150MB 3G Data for 8Days', 'Rs. 95'),
('Airtel', '3G Data', 0, '10 Days', '200MB 3G Data for 10Days', 'Rs. 105'),
('Airtel', '3G Data', 0, '15 Days', '300MB 3G Data for 15Days', 'Rs. 150'),
('Airtel', 'Talktime', 15, '2 Days', 'Full Talktime Rs 15 (1 day valid )+ 2 Local airtel', 'Rs.15'),
('Airtel', 'Talktime', 52, '5 Days', 'Full Talk time  + 2 Local A2A SMS for 1 day', 'Rs.52'),
('Airtel', 'Talktime', 85, '12 Days', 'Full talktime Rs 111 (12 day valid )+ 2 Local airt', 'Rs.111'),
('Airtel', 'Talktime', 222, 'UNLIMITED', 'Rs 222 Full Talktime + 2 Local A2A SMS for 1 day', 'Rs.222'),
('Airtel', 'Talktime', 300, 'UNLIMITED', 'Full Talktime', 'Rs. 300'),
('Airtel', '2G Data', 0, '2 Days', '50 MB 2G data Unlimited', 'Rs.19'),
('Airtel', '2G Data', 0, '7 Days', '100 MB 2G data Unlimited', 'Rs.50'),
('Airtel', '2G Data', 0, '15 Days', '750 MB 2G data Unlimited', 'Rs.100'),
('Airtel', '2G Data', 0, '25 Days', '1.00GB 2G data Unlimited', 'Rs.130'),
('Airtel', '2G Data', 0, '28 Days', '2.00 GB 2G data Unlimited', 'Rs.150'),
('Vodafone', '3G Data', 0, '2 Days', '75MB 3G Data for 2 Days', 'Rs.20'),
('Vodafone', '3G Data', 0, '10 Days', '200MB 3G Data for 10 Days', 'Rs.79'),
('Vodafone', '3G Data', 0, '15 Days', '700MB 3G Data for 15 Days', 'Rs.150'),
('Vodafone', '3G Data', 0, '20 Days', '1.25GB 3G Data for 20 Days', 'Rs.222'),
('Vodafone', '3G Data', 0, '28 Days', '4GB 3G Data for 28 Days', 'Rs.280'),
('Vodafone', 'Talktime', 19, '3 Days', 'Full Talktime Rs 19 (1 day valid )+ 2 Local vodafo', 'Rs.19'),
('Vodafone', 'Talktime', 25, '7 Days', 'Rs 25 Full Talktime + 2 Local V2V SMS for 7 day', 'Rs.25'),
('Vodafone', 'Talktime', 90, '10 Days', 'Rs 90 Full Talktime ', 'Rs.90'),
('Vodafone', 'Talktime', 200, '28 Days', 'Rs 200 Full Talktime + 2 Local A2A SMS for 28 day', 'Rs.200'),
('Vodafone', 'Talktime', 300, '30 Days', 'Rs 300  Full Talktime + 2 Local A2A SMS for 30 day', 'Rs.300'),
('Vodafone', '2G Data', 0, '2 Days', '150MB 2G Data for 2 Days', 'Rs.15'),
('Vodafone', '2G Data', 0, '7 Days', '200MB 2G Data for 7 Days', 'Rs.25'),
('Vodafone', '2G Data', 0, '15 Days', '700MB 2G Data for 15 Days', 'Rs.90'),
('Vodafone', '2G Data', 0, '20 Days', '2GB 2G Data for 20 Days', 'Rs.150'),
('Vodafone', '2G Data', 0, '28 Days', '4GB 2G Data for 28 Days', 'Rs.250'),
('Vodafone', '3G Data', 0, '5 Days', '300MB 3G Data for 5 Days', 'Rs.20'),
('Vodafone', '3G Data', 0, '10 Days', '700MB 3G Data for 10 Days', 'Rs.100'),
('Vodafone', '3G Data', 0, '15 Days', '900MB 3G Data for 15 Days', 'Rs.150'),
('Vodafone', '3G Data', 0, '20 Days', '1.00GB 3G Data for 20 Days', 'Rs.222'),
('Vodafone', '3G Data', 0, '28 Days', '4GB 3G Data for 28 Days', 'Rs.300'),
('Vodafone', 'Talktime', 15, '3 Days', 'Rs 15 Full Talktime + 2 Local V2V SMS for 1 day', 'Rs.15'),
('Vodafone', 'Talktime', 25, '7 Days', 'Rs 20  Talktime ', 'Rs.25'),
('Vodafone', 'Talktime', 125, '28 Days', 'Rs 100 Talktime + 2 Local V2V SMS for 15 day', 'Rs.125'),
('Vodafone', 'Talktime', 200, 'UNLIMITED', 'Rs 200 Full Talktime ', 'Rs.200'),
('Vodafone', 'Talktime', 250, 'UNLIMITED', 'Rs 222 Full Talktime ', 'Rs.250'),
('Vodafone', '2G Data', 0, '2 Days', '25MB 2G Data for 2 Days', 'Rs.7'),
('Vodafone', '2G Data', 0, '7 Days', '100MB 2G Data for 7 Days', 'Rs.15'),
('Vodafone', '2G Data', 0, '15 Days', '700MB 2G Data for 15 Days', 'Rs.50'),
('Vodafone', '2G Data', 0, '20 Days', '900MB 2G Data for 10 Days', 'Rs.100'),
('Vodafone', '2G Data', 0, '28 Days', '2GB 2G Data for 10 Days', 'Rs.120'),
('Idea', '3G Data', 0, '2 Days', '200MB 3G Data for 10 Days', 'Rs.19'),
('Idea', '3G Data', 0, '5 Days', '500MB 3G Data for 10 Days', 'Rs.90'),
('Idea', '3G Data', 0, '19 Days', '700MB 3G Data for 19 Days', 'Rs.169'),
('Idea', '3G Data', 0, '25 Days', '2.95GB 3G Data for 25 Days', 'Rs.222'),
('Idea', '3G Data', 0, '28 Days', '4GB 3G Data for 28 Days', 'Rs.250'),
('Idea', 'Talktime', 56, '3 Days', 'Rs 56 Full Talktime ', 'Rs.56'),
('Idea', 'Talktime', 85, '8 Days', 'Rs 85 Full Talktime ', 'Rs.85'),
('Idea', 'Talktime', 113, '28 Days', 'Rs 113 Full Talktime + 2 Local I2I SMS for 28 days', 'Rs.113'),
('Idea', 'Talktime', 190, 'UNLIMITED', 'Rs 190 Full Talktime + 2 Local I2I SMS for 28 days', 'Rs.190'),
('Idea', 'Talktime', 222, 'UNLIMITED', 'Rs 222 Full Talktime + 2 Local I2I SMS for 28 days', 'Rs.222'),
('Idea', '2G Data', 0, '2 Days', '100 MB 2G data Unlimited', 'Rs.19'),
('Idea', '2G Data', 0, '7 Days', '200MB 2G data Unlimited', '50'),
('Idea', '2G Data', 0, '15 Days', '500MB 2G data Unlimited', 'Rs.140'),
('Idea', '2G Data', 0, '15 Days', '1.00 GB 2G data Unlimited', 'Rs.150'),
('Idea', '2G Data', 0, '28 Days', '1.25 GB 2G data Unlimited', 'Rs.190');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `mobileno` varchar(255) NOT NULL,
  `operators` varchar(55) NOT NULL,
  `amount` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`mobileno`, `operators`, `amount`) VALUES
('123654789', 'vodafone', '100'),
('7046739572', 'airtel', '10'),
('810065894', 'reliance', '55'),
('8175698423', 'airtel', '56'),
('9152365789', 'vodafone', '85'),
('9662863574', 'airtel', '100'),
('9662936576', 'airtel', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `mobile`) VALUES
(1, 'pinky', 'pinky@gmail.com', '283618c6db1d5d08b828e0c6548f882f', '9638286013'),
(2, 'priya', 'yadhapriyanka@gmail.com', '1fd96777aedeadb325c66f3780054765', '7046739572');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`accno`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`mobileno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
