-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 11:35 AM
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
-- Table structure for table `tenant_data`
--

CREATE TABLE `tenant_data` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_person` int(13) NOT NULL,
  `brithday` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `num_layer` int(1) NOT NULL,
  `num_booths` int(1) NOT NULL,
  `width` int(2) NOT NULL,
  `lenght` int(2) NOT NULL,
  `rate` int(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rent_per_month` int(10) NOT NULL,
  `rent_per_year` int(10) NOT NULL,
  `start_fire_ins` varchar(10) NOT NULL,
  `fire_ins` varchar(10) NOT NULL,
  `start_contract` int(10) NOT NULL,
  `contract_fee` int(5) NOT NULL,
  `date_pay_rent` varchar(10) NOT NULL,
  `type_house` varchar(20) NOT NULL,
  `id_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'admin', '1234', 'นาย', 'แอดมิน', 'แอดมิน', 'q3.hahaha@gmail.com', '0899999999', 'แอดมิน', '2021-04-06 08:32:35'),
(2, 'manager', '1234', 'นาย', 'ผู้บริหาร', 'ผู้บริหาร', 'q3.hahaha@gmail.com', '0899999999', 'ผู้บริหาร', '2021-04-06 08:42:08'),
(3, 'officer', '1234', 'นาย', 'เจ้าหน้าที่', 'เจ้าหน้าที่', 'q3.hahaha@gmail.com', '0899999999', 'แอดมิน', '2021-04-06 08:42:34'),
(14, 'bill', '1234', 'นาย', 'jirapat', 'meedoung', 'q3.hahaha@gmail.com', '0899999999', 'เจ้าหน้าที่', '2021-04-06 09:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant_data`
--
ALTER TABLE `tenant_data`
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tenant_data`
--
ALTER TABLE `tenant_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
