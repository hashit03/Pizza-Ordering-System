-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 05:05 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `c_name` varchar(20) NOT NULL,
  `price` bigint(10) NOT NULL,
  `offer` varchar(40) NOT NULL,
  `t_price` bigint(10) NOT NULL,
  `gst` bigint(10) NOT NULL,
  `s_tax` bigint(10) NOT NULL,
  `bill_amt` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`c_name`, `price`, `offer`, `t_price`, `gst`, `s_tax`, `bill_amt`) VALUES
('aa', 200, 'one coke free', 600, 108, 84, 792),
('bb', 300, 'no bonus', 600, 108, 84, 792),
('cc', 500, 'one large pizza free', 4000, 720, 560, 5280),
('dd', 300, 'one large pizza free', 1500, 270, 210, 1980);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `c_name` varchar(20) NOT NULL,
  `p_no` bigint(20) NOT NULL,
  `pi_size` varchar(10) NOT NULL,
  `pi_type` varchar(10) NOT NULL,
  `topping` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`c_name`, `p_no`, `pi_size`, `pi_type`, `topping`, `quantity`) VALUES
('dd', 44, 'Medium', 'non-veg', 'Tomato															 , Onion , Corn , ', 5),
('cc', 33, 'Large', 'veg', 'Tomato															 , Onion , Capsicum , Corn , ', 8),
('bb', 22, 'Medium', 'non-veg', 'Capsicum , Corn , ', 2),
('aa', 11, 'Small', 'veg', 'Tomato															 , Onion , ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `p_no` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`name`, `username`, `password`, `p_no`, `email`, `gender`, `dob`, `address`, `photo`) VALUES
('dd ', 'dd', 'dd', 44, 'dd@gmail.com', 'male', '3456-07-06', '  shimla                                          ', 'dd_nielit.jpg'),
('cc ', 'cc', 'cc', 33, 'cc@gmail.com', 'male', '8765-09-12', '     chandigarh                                   ', 'cc_trin.jpg'),
('bb ', 'bb', 'bb', 22, 'bb@gmail.com', 'female', '4321-03-12', '  delhi                                           ', 'bb_abc.jpg'),
('aa ', 'aa', 'aa', 11, 'aa@gmail.com', 'male', '1234-02-12', '   chandigarh                                     ', 'aa_cir.jpg'),
('shamli sharma ', 'shamlikv31', 'shamli', 123456789, 'shamliosr96@gmail.com', 'female', '1996-08-14', '        mohali                                    ', 'shamlikv31_fa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`c_name`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`c_name`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
