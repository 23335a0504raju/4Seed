-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 10:25 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4seed`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phnm` bigint(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `fname`, `phnm`, `state`, `city`, `house`, `area`) VALUES
(1, 'naveen', 0, 'dgbvd', '', 'hdnj', 'dgh'),
(2, '', 0, 'dgbvd', '', 'hdnj', 'dgh');

-- --------------------------------------------------------

--
-- Table structure for table `consaddress`
--

CREATE TABLE `consaddress` (
  `firname` varchar(255) NOT NULL,
  `phnumb` bigint(11) NOT NULL,
  `pincod` int(11) NOT NULL,
  `statt` varchar(255) NOT NULL,
  `citt` varchar(255) NOT NULL,
  `dono` varchar(255) NOT NULL,
  `colo` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consaddress`
--

INSERT INTO `consaddress` (`firname`, `phnumb`, `pincod`, `statt`, `citt`, `dono`, `colo`, `user`) VALUES
('fhy', 678, 76, '76', '76', '76', '67', 'house'),
('fhy', 678, 76, '76', '76', '76', '67', 'house'),
('fhy', 678, 76, '76', '76', '76', '67', 'house'),
('', 0, 0, '', '', '', '', ''),
('', 0, 0, '', '', '', '', ''),
('', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `consumers`
--

CREATE TABLE `consumers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cnf_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumers`
--

INSERT INTO `consumers` (`id`, `first_name`, `last_name`, `phone`, `password`, `cnf_password`) VALUES
(17, 'naveen', 'D', 6281924785, 'raj', 'raj'),
(18, 'sanjay kumar', 'lingam', 8179672721, 'sanju3245', 'sanju3245'),
(19, 'naveen', 'D', 8008657626, 'n', 'n'),
(20, 'naveen', 'D', 6281924788, 'qwe', 'qwe'),
(21, 'naveen', 'D', 6281924789, 'manu', 'manu'),
(22, 'sanju', 'r', 7893173261, 'sanju', 'sanju');

-- --------------------------------------------------------

--
-- Table structure for table `customcare`
--

CREATE TABLE `customcare` (
  `id` int(11) NOT NULL,
  `ccf_name` varchar(255) NOT NULL,
  `ccl_name` varchar(255) NOT NULL,
  `quali` varchar(255) NOT NULL,
  `cNum` bigint(11) NOT NULL,
  `ccpwd` varchar(255) NOT NULL,
  `cccnf_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customcare`
--

INSERT INTO `customcare` (`id`, `ccf_name`, `ccl_name`, `quali`, `cNum`, `ccpwd`, `cccnf_pwd`) VALUES
(1, 'naveen', 'D', 'diploma', 6281924780, 'rrr', 'rrr');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `df_name` varchar(255) NOT NULL,
  `dl_name` varchar(255) NOT NULL,
  `vehicle` varchar(4) NOT NULL,
  `ph_num` bigint(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cnf_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `df_name`, `dl_name`, `vehicle`, `ph_num`, `pass`, `cnf_pass`) VALUES
(1, 'naveen', 'D', 'Bike', 6281924780, 'rrr', 'rrr'),
(2, 'naveen', 'D', 'Bike', 6281924789, 'rrr', 'rrr'),
(3, 'ssdas', 'SDQ', 'Bike', 0, '1234', '1234'),
(4, 'ssdas', 'SDQ', 'Bike', 789317, '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `type` varchar(4) NOT NULL,
  `pNum` bigint(11) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `cnf_pwd` varchar(255) NOT NULL,
  `subs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `f_name`, `l_name`, `type`, `pNum`, `pwd`, `cnf_pwd`, `subs`) VALUES
(1, 'naveen', 'D', 'farm', 6281924785, 'raj', 'raj', ''),
(2, 'naveen', 'D', 'farm', 6281924780, 'raj', 'raj', ''),
(3, 'naveen', 'D', 'farm', 11, '1', '1', ''),
(4, '', '', '', 0, '', '', '32465756'),
(5, 'naveen', 'D', 'farm', 6281924787, 'rrr', 'rrr', ''),
(6, 'raju', 'ch', 'farm', 6281924, 'rrr', 'rrr', ''),
(7, 'naveen', 'D', 'farm', 628192477, 'rrr', 'rrr', '');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_details`
--

CREATE TABLE `farmer_details` (
  `f_name` varchar(255) NOT NULL,
  `phnum` bigint(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `land` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_details`
--

INSERT INTO `farmer_details` (`f_name`, `phnum`, `pincode`, `state`, `city`, `house`, `Area`, `land`) VALUES
('harini', 9346101501, 530008, 'andhrapradesh', 'vs', 'flat-2', 'road', 5),
('harini', 9346101501, 530008, 'andhrapradesh', 'vs', 'flat-2', 'road', 5),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('hai', 5234, 5434, 'fh', 'sdfgh', 'sdfbh', 'dfgh', 765),
('', 0, 0, '', '', '', '', 0),
('hair5', 0, 0, '', '', '', '', 0),
('', 0, 0, '', '', '', '', 0),
('', 0, 0, '', '', '', '', 0),
('dfg', 56, 3245624, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 563),
('dfg', 56, 3245624, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 563),
('dfg', 56, 3245624, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 563),
('dfg', 56, 3245624, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 563),
('dfg', 56, 3245624, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 5656),
('dfg', 56, 3245624, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 5656),
('dfg', 56, 3244, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 5656),
('dfg', 56, 3244, 'dfg', 'sdgt', 'sdbgh', 'dfbgf', 5656),
('dfg', 56, 3244, 'dfg', 'sdgt', 'sdbgh', 'fgh', 565),
('dfg', 56, 3244, 'dfg', 'sdgt', 'sdbgh', 'fgh', 565),
('dfg', 56, 3244, 'dfg', 'sdgt', 'sdbgh', 'fgh', 565),
('sgfr', 34253, 345, 'gf', 'egr', 'dfg', 'sdfg', 345),
('', 0, 0, '', '', '', '', 342),
('', 8678768, 0, '', '', '', '', 0),
('dfgd', 56346, 6456, 'gbhfgh', 'xcbdxfg', 'fghb', 'ghnm', 767),
('dfg', 23423, 0, '', '', '', '', 0),
('dfg', 23423, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `landlorddetails`
--

CREATE TABLE `landlorddetails` (
  `l_name` varchar(255) NOT NULL,
  `pnum` bigint(20) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `AREA` varchar(255) NOT NULL,
  `lands` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landlorddetails`
--

INSERT INTO `landlorddetails` (`l_name`, `pnum`, `pincode`, `stat`, `city`, `home`, `AREA`, `lands`) VALUES
('', 56745634, 678765, '', '', '', 'vfcbvgfchgf', '5'),
('', 576, 45634, '', '', '', 'fh', '7646'),
('', 576, 45634, '', '', '', 'fh', '7646'),
('', 576, 45634, '', '', '', 'fh', '7646'),
('', 0, 0, '', '', '', '', ''),
('', 133321, 75443, '', '', '', 'fgng', '16574577');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `consumername` varchar(255) NOT NULL,
  `ordername` varchar(20) NOT NULL,
  `orderprice` int(20) NOT NULL,
  `orderdiscount` int(11) NOT NULL,
  `orderdetail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`consumername`, `ordername`, `orderprice`, `orderdiscount`, `orderdetail`) VALUES
('', 'hello', 45, 11, 'bye'),
('naveen', 'something', 500, 50, 'nothing'),
('naveen', 'something', 500, 50, 'nothing'),
('naveen', 'something', 500, 50, 'nothing'),
('naveen', 'something', 500, 50, 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `quant` varchar(255) NOT NULL,
  `pric` varchar(255) NOT NULL,
  `discoun` int(100) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `addre` varchar(255) NOT NULL,
  `selle` varchar(255) NOT NULL,
  `farmname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `filename`, `proname`, `quant`, `pric`, `discoun`, `addres`, `addre`, `selle`, `farmname`) VALUES
(9, 'hm.jpg', 'hgu', 'hjtr', '34', 543, 'vgnk', 'qwe', 'farmer', 'naveen'),
(10, 'fa (2).jpeg', 'hg', '2', '2', 3123, '2132', 'qweqe', 'farmer', 'raju'),
(11, 'fa.jpeg', 'tomato', '5', '150', 5, 'gopalapatnam', 'rythubazar', 'distributer', 'naveen'),
(12, 'hm.jpg', 'klu', '5', '500', 5, 'qwe', 'wef', 'farmer', 'naveen');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `wf_name` varchar(255) NOT NULL,
  `wl_name` varchar(255) NOT NULL,
  `wtype` varchar(255) NOT NULL,
  `Num` bigint(11) NOT NULL,
  `wpwd` varchar(255) NOT NULL,
  `wcnf_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `wf_name`, `wl_name`, `wtype`, `Num`, `wpwd`, `wcnf_pwd`) VALUES
(1, 'naveen', 'D', 'Backend-developer', 6281924785, 'rrr', 'rrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumers`
--
ALTER TABLE `consumers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customcare`
--
ALTER TABLE `customcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consumers`
--
ALTER TABLE `consumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customcare`
--
ALTER TABLE `customcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
