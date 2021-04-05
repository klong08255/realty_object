-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 12:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realty_object`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_realty`
--

CREATE TABLE `manage_realty` (
  `id` int(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `num_layers` varchar(5) NOT NULL,
  `num_booths` varchar(5) NOT NULL,
  `width` varchar(10) NOT NULL,
  `length` varchar(10) NOT NULL,
  `store_name` varchar(30) NOT NULL,
  `house_name` varchar(30) NOT NULL,
  `rental_type` varchar(20) NOT NULL,
  `ten_name` varchar(50) NOT NULL,
  `rent` varchar(15) NOT NULL,
  `rate_rent` varchar(10) NOT NULL,
  `house_tax` varchar(10) NOT NULL,
  `insurance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manage_ten`
--

CREATE TABLE `manage_ten` (
  `id` int(5) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `id_number` varchar(13) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `nationality_1` varchar(15) NOT NULL,
  `nationality_2` varchar(15) NOT NULL,
  `contract_date` varchar(20) NOT NULL,
  `rental_type` varchar(20) NOT NULL,
  `address_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_summary` varchar(100) NOT NULL,
  `news_description` text NOT NULL,
  `news_author` varchar(50) NOT NULL,
  `news_cover` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_summary`, `news_description`, `news_author`, `news_cover`, `date_create`) VALUES
(2, 'ด่วน! อาคารว่างมีจำนวนจำกัด', 'ด่วนมากกกกก', '-', 'เจ้าหน้าที่ ', '161009698567396.png', '2021-01-08 09:09:45'),
(45, 'ข่าวด่วนที่สุด ! ', 'ด่วนจี๋', 'asdf', 'เจ้าหน้าที่ ', '161009693519696.png', '2021-01-08 09:08:55'),
(46, 'คมชัดลึก', 'ลึกกว่าข่าว', 'นะจ้ะ', 'เจ้าหน้าที่ ', '161009692392195.png', '2021-01-08 09:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `title_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `user_level` varchar(20) NOT NULL,
  `date_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตาราง user';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `title_name`, `first_name`, `last_name`, `email`, `phone_number`, `user_level`, `date_login`) VALUES
(1, 'admin', '1234', '', 'แอดมิน', '', '', '', 'แอดมิน', '2020-11-20 11:19:00'),
(2, 'manager', '1234', '', 'ผู้บริหาร', '', '', '', 'ผู้บริหาร', '2020-11-20 11:18:39'),
(3, 'officer', '1234', '', 'เจ้าหน้าที่', '', '', '', 'เจ้าหน้าที่', '2020-11-20 11:18:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_realty`
--
ALTER TABLE `manage_realty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_ten`
--
ALTER TABLE `manage_ten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_realty`
--
ALTER TABLE `manage_realty`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_ten`
--
ALTER TABLE `manage_ten`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
