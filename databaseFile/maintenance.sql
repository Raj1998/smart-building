-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 07:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `alert_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(2500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`alert_id`, `title`, `text`) VALUES
(4, 'Notice', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, molestiae? Deserunt cupiditate perspiciatis veniam aspernatur, provident cumque magnam voluptates laudantium saepe doloribus? Pariatur mollitia aperiam dicta eligendi veritatis provident quas!'),
(3, 'Test alert', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, molestiae? Deserunt cupiditate perspiciatis veniam aspernatur, provident cumque magnam voluptates laudantium saepe doloribus? Pariatur mollitia aperiam dicta eligendi veritatis provident quas!'),
(5, 'Meeting today', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, molestiae? Deserunt cupiditate perspiciatis veniam aspernatur, provident cumque magnam voluptates laudantium saepe doloribus? Pariatur mollitia aperiam dicta eligendi veritatis provident quas!'),
(6, 'Hello members', 'Test for alert messages...!!'),
(8, 'Meeting', 'Tomorrow there is meeting for festival.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `details` varchar(3000) NOT NULL,
  `by` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `details`, `by`, `date`) VALUES
(3, 'Birthday party', 'I invite all of the society members.', 'parth', '2018-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `next_payment_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `u_id`, `payment_date`, `paid`, `next_payment_date`) VALUES
(1, 5, '2017-12-01 13:00:00', 1, '2018-01-04 13:00:00'),
(2, 6, '2017-12-02 13:00:00', 1, '2018-01-04 13:00:00'),
(3, 7, '2017-12-02 06:39:40', 1, '2018-01-05 06:39:40'),
(4, 17, '2017-12-03 13:00:00', 1, '2018-01-04 13:00:00'),
(5, 5, '2018-01-02 13:00:00', 1, '2018-02-04 13:00:00'),
(6, 6, '2017-12-31 13:00:00', 1, '2018-02-04 13:00:00'),
(7, 7, '2018-02-03 13:00:00', 1, '2018-02-04 13:00:00'),
(8, 17, '2018-01-03 13:00:00', 1, '2018-02-04 13:00:00'),
(9, 5, '2018-02-02 13:00:00', 1, '2018-03-04 13:00:00'),
(10, 6, '2018-01-31 13:00:00', 1, '2018-03-04 13:00:00'),
(11, 7, '2018-02-02 18:30:00', 1, '2018-03-03 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `name`) VALUES
(5, 'parth', 'e735b5ba8bc040b4eff790fe211210f520f27a73', 'Parth Patel'),
(6, 'parthiv', 'cf5af8f04a9562140e880cf8dfd3ac472d9058ca', 'Parthiv Patel'),
(7, 'manthan', '54e2721081d5cb61616264fbf1019716d8ecbc2f', 'Manthan Patel'),
(17, 'ronak', '6c76bf7647a17dd03340f5ad4a3823aa1d7cc696', 'Ronak Patel'),
(0, 'raj', '3055effa054a24f84cf42cea946db4cdf445cb76', 'Raj Patel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `alert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
