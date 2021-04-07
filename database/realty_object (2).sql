-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 06:46 AM
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
  `id` int(10) NOT NULL COMMENT 'ลำดับที่',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `id_person` int(13) NOT NULL COMMENT 'เลขบัตร ปปช.',
  `brithday` varchar(10) NOT NULL COMMENT 'วันเกิด',
  `age` int(2) NOT NULL COMMENT 'อายุ',
  `phone_number` int(10) NOT NULL COMMENT 'โทรศัพท์',
  `house_name` varchar(50) NOT NULL COMMENT 'ชื่อร้านค้า/บ้าน',
  `num_layer` int(1) NOT NULL COMMENT 'จำนวนชั้น',
  `num_booths` int(1) NOT NULL COMMENT 'จำนวนคูหา',
  `width` int(2) NOT NULL COMMENT 'ความกว้าง(เมตร)',
  `lenght` int(2) NOT NULL COMMENT 'ความยาว(เมตร)',
  `rate` int(3) NOT NULL COMMENT 'เรตเช่า',
  `address` varchar(50) NOT NULL COMMENT 'บ้านเลขที่ที่เช่า',
  `rent_per_month` int(10) NOT NULL COMMENT 'ค่าเช่า/เดือน',
  `rent_per_year` int(10) NOT NULL COMMENT 'ค่าเช่า/ปี',
  `start_fire_ins` varchar(10) NOT NULL COMMENT 'วันเริ่มทำประกัน',
  `fire_ins` varchar(10) NOT NULL COMMENT 'ค่าประกันอัคคีภัย',
  `start_contract` int(10) NOT NULL COMMENT 'วันเริ่มทำสัญญา',
  `contract_fee` int(5) NOT NULL COMMENT 'ค่าทำสัญญา',
  `date_pay_rent` varchar(10) NOT NULL COMMENT 'วันที่ต้องชำระค่าเช่า',
  `type_house` varchar(20) NOT NULL COMMENT 'ประเภท(อยู่อาศัย-ร้านค้า)',
  `id_address` varchar(50) NOT NULL COMMENT 'บ้านเลขที่ตามบัตร ปปช.'
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
(14, 'bill', '895623', 'นาย', 'jirapat', 'meedoung', 'q3.hahaha@gmail.com', '0899999999', 'เจ้าหน้าที่', '2021-04-06 10:07:49'),
(16, 'klong08255', '3369', 'นาย', 'นายนพเก้า', 'ถึงถาวร', 'noppakao.t@nsru.ac.th', '0644060454', 'เจ้าหน้าที่', '2021-04-06 10:07:14'),
(17, '60113602014', 'noppakao99', 'นาย', 'noppakao', 'tungtaworn', 'klong_cap@hotmail.com', '0644060454', 'เจ้าหน้าที่', '2021-04-06 10:08:28');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่';

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
