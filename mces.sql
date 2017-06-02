-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 05:56 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mces`
--

-- --------------------------------------------------------

--
-- Table structure for table `addaccessories`
--

CREATE TABLE IF NOT EXISTS `addaccessories` (
  `inv_id` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `warr` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addaccessories`
--

INSERT INTO `addaccessories` (`inv_id`, `brand`, `model`, `dimension`, `warr`, `details`, `stock`, `price`) VALUES
('123', 'ONE PLUS', 'EARPHONE', '5', '5', 'good            ', 49, 200),
('', '', '', '', '', '            ', 0, 0),
('159', 'philips', 'p130g', 'earphone', '2', '            2m long', 32, 599);

-- --------------------------------------------------------

--
-- Table structure for table `addmob`
--

CREATE TABLE IF NOT EXISTS `addmob` (
  `iid` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `s_t` varchar(20) NOT NULL,
  `touch` varchar(20) NOT NULL,
  `disp` varchar(20) NOT NULL,
  `resol` varchar(20) NOT NULL,
  `os` varchar(20) NOT NULL,
  `im` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `expand` varchar(20) NOT NULL,
  `pc` varchar(20) NOT NULL,
  `sc` varchar(20) NOT NULL,
  `flash` varchar(20) NOT NULL,
  `nt` varchar(20) NOT NULL,
  `bat` varchar(20) NOT NULL,
  `warr` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmob`
--

INSERT INTO `addmob` (`iid`, `brand`, `model`, `s_t`, `touch`, `disp`, `resol`, `os`, `im`, `ram`, `expand`, `pc`, `sc`, `flash`, `nt`, `bat`, `warr`, `stock`, `price`) VALUES
('', '', '', 'Single', 'YES', '', '', '', '', '', '', '', '', 'YES', '', '', '', '', ''),
('', '', '', 'Single', 'YES', '', '', '', '', '', '', '', '', 'YES', '', '', '', '', ''),
('13', '2323', 'wewe', 'Single', 'YES', 'wewe', 'wewe', 'wewe', 'wewe', 'wewe', 'weqwe', 'wewe', 'qewe', 'YES', 'wewe', '', 'we', '5', '22'),
('1313', 'wrer', 'werer', 'Single', 'YES', 'wewe', 'we', 'dff', 'e', 'ddf', 'ssf', 'fdfd', 'dfdf', 'YES', 'dfdf', '', '232', '22', '333'),
('2313', 'ewe', 'wewe', 'Double', 'NO', '2', '3', 'wwe', 'wewe', 'wee', 'wewe', 'wew', 'wwe', 'NO', 'wewe', '', 'sff', '5', '23'),
('12345', 'IPHONE', '6S', 'Single', 'YES', '5.5', '1920', 'IOS', '8', '4', '32', '5', '13', 'YES', 'lte', 'no', 'loue', '53', '7777777');

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE IF NOT EXISTS `adminreg` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`username`, `password`) VALUES
('abcde', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE IF NOT EXISTS `amount` (
  `sn` int(10) NOT NULL DEFAULT '1',
  `total` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `invid` varchar(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `visibility` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `code` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `complaint` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`code`, `brand`, `model`, `date`, `phone`, `email`, `complaint`) VALUES
('101', 'samsung', 'p130g', '23/85/2017', '85333', 'asd@asd', '			not working		'),
('123456', 'IPHONE', '5c', '2014-11-21', '1231', 'asd@asd', '					vcbvchd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `modname` varchar(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `brand`, `modname`, `feedback`) VALUES
('12@12', 'samsung', 'grand2', '            great'),
('12@34', 'IPHONE', 'werer', '            not good'),
('ab@ab', 'apple', 'iphone5c', '            great mobile');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `cardtype` varchar(20) NOT NULL,
  `acc_number` varchar(20) NOT NULL,
  `expdate` varchar(20) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `nameoncard` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardtype`, `acc_number`, `expdate`, `cvv`, `nameoncard`, `amount`) VALUES
('visa', '159753', '2017-05', '785', 'ASD', '666');

-- --------------------------------------------------------

--
-- Table structure for table `pincodes`
--

CREATE TABLE IF NOT EXISTS `pincodes` (
  `sn` varchar(10) NOT NULL,
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincodes`
--

INSERT INTO `pincodes` (`sn`, `pin`) VALUES
('', ''),
('1', '226004'),
('1', '682022');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `uname` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ct` varchar(100) NOT NULL,
  `pin` int(10) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uname`, `pw`, `name`, `email`, `ph`, `address`, `ct`, `pin`, `state`) VALUES
('me', '12', '12', '12@12', 12, '						12', '12', 12, '12'),
('hello', '123', '12', '12@34', 12, '						12', '12', 12, '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `pincodes`
--
ALTER TABLE `pincodes`
  ADD PRIMARY KEY (`pin`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
