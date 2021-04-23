-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 04:28 PM
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
-- Table structure for table `data_build`
--

CREATE TABLE `data_build` (
  `id` int(5) NOT NULL COMMENT 'ลำดับที่',
  `build_address` varchar(100) NOT NULL COMMENT 'ที่อยู่ของอาคาร',
  `rent_month` int(5) NOT NULL COMMENT 'ค่าเช่า/เดือน',
  `rent_year` int(50) NOT NULL COMMENT 'ค่าเช่า/ปี',
  `rent_deposit` int(50) NOT NULL COMMENT 'เงินประกันการเช่า',
  `regis_fee` int(50) NOT NULL COMMENT 'ค่าบำรุงการจดทะเบียน',
  `width` int(50) NOT NULL COMMENT 'ความกว้าง',
  `lenght` int(50) NOT NULL COMMENT 'ความยาว',
  `numb_layer` int(50) NOT NULL COMMENT 'จำนวนชั้น',
  `numb_row` int(50) NOT NULL COMMENT 'จำนวนคูหา',
  `type` varchar(20) NOT NULL COMMENT 'ประเภท(อาศัย/ร้านค้า)',
  `use_area` varchar(5) NOT NULL COMMENT 'พื้นที่ใช้สอย',
  `rate` varchar(50) NOT NULL COMMENT 'เรตค่าเช่า',
  `land_tax` int(50) NOT NULL COMMENT 'ภาษีที่ดิน/ปี',
  `contract_fee` int(50) NOT NULL COMMENT 'ค่าธรรมเนียมสัญญา',
  `contract_fee2` int(50) NOT NULL COMMENT 'ค่าทำสัญญา',
  `number_insurance` varchar(30) NOT NULL COMMENT 'เลขประกันภัย',
  `date_insurance` date NOT NULL COMMENT 'วันที่เริ่มประกัน',
  `date_insurance_stop` date NOT NULL COMMENT 'วันหมดประกัน',
  `insurance_fire` int(50) NOT NULL COMMENT 'ประกันอัคคีภัย',
  `status` varchar(50) NOT NULL COMMENT 'สถานะ',
  `total_pay` varchar(10) NOT NULL COMMENT 'ยอดชำระ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_build`
--

INSERT INTO `data_build` (`id`, `build_address`, `rent_month`, `rent_year`, `rent_deposit`, `regis_fee`, `width`, `lenght`, `numb_layer`, `numb_row`, `type`, `use_area`, `rate`, `land_tax`, `contract_fee`, `contract_fee2`, `number_insurance`, `date_insurance`, `date_insurance_stop`, `insurance_fire`, `status`, `total_pay`) VALUES
(6, '70/1 ม.1 ต.นครสวรรค์ตก อ.เมือง จ.นครสวรรค์ 60000', 648, 7776, 100, 100, 4, 12, 3, 1, 'อาศัย', '144', '4.5', 1064, 100, 100, '706-20-11-FR1-00043', '2021-04-20', '2021-04-21', 1064, 'full', '10304'),
(7, '80/1 ม.2 ต.นคสวรรค์ออก อ.เมือง จ.นครสวรรค์ 60000', 1073, 12864, 100, 100, 5, 13, 3, 1, 'อาศัย', '195', '5.5', 1000, 100, 100, '706-20-11-FR1-00032', '2021-04-20', '2021-04-22', 1064, 'full', '15328'),
(8, '70/23 ม.1 ต.นครสวรรค์ตก อ.เมือง จ.นครสวรรค์ 60000', 648, 7776, 100, 100, 12, 4, 3, 1, 'อาศัย', '144', '4.5', 26, 100, 100, '706-20-11-FR1-00043', '2021-04-22', '2022-04-22', 1064, 'empty', '9266');

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
-- Table structure for table `people_rent`
--

CREATE TABLE `people_rent` (
  `id_rent` int(5) NOT NULL COMMENT 'idตาราง',
  `id_data_build` int(5) NOT NULL COMMENT 'id data build',
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `age` int(2) NOT NULL COMMENT 'อายุ',
  `nationality` varchar(20) NOT NULL COMMENT 'เชื้อชาติ',
  `nationality2` varchar(20) NOT NULL COMMENT 'สัญชาติ',
  `address` varchar(100) NOT NULL COMMENT 'บ้านเลขที่ตามบัตรประชาชน',
  `phone_number` varchar(10) NOT NULL COMMENT 'โทรศัพท์',
  `id_card` varchar(13) NOT NULL COMMENT 'เลขบัตรปชช.',
  `brithday` date NOT NULL COMMENT 'วันเกิด',
  `status_pay` varchar(20) NOT NULL COMMENT 'สถานะจ่ายเงิน',
  `datestart_rent` date NOT NULL,
  `datestop_rent` date NOT NULL,
  `status_rent` varchar(20) NOT NULL DEFAULT 'เช่าอยู่',
  `evidence_pay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people_rent`
--

INSERT INTO `people_rent` (`id_rent`, `id_data_build`, `name`, `age`, `nationality`, `nationality2`, `address`, `phone_number`, `id_card`, `brithday`, `status_pay`, `datestart_rent`, `datestop_rent`, `status_rent`, `evidence_pay`) VALUES
(15, 6, 'นายนพเก้า ถึงถาวร', 22, 'ไทย', 'ไทย', '70/1 ม.1 ต.นครสวรรค์ตก อ.เมือง จ.นครสวรรค์ 60000', '0644060454', '1619900324695', '1998-11-09', 'ยังไม่ชำระ', '2021-04-20', '2022-04-20', 'เช่าอยู่', ''),
(16, 7, 'นายนพเก้า ถึงถาวร', 22, 'ไทย', 'ไทย', '70/1 ม.1 ต.นครสวรรค์ตก อ.เมือง จ.นครสวรรค์ 60000', '0644060454', '1619900324695', '1998-11-09', 'ยังไม่ชำระ', '2021-04-22', '2021-04-23', 'เช่าอยู่', '');

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
(1, 'admin', '1234', 'นาย', 'เจ้าหน้าที่', 'เจ้าหน้าที่', 'q3.hahaha@gmail.com', '0899999999', 'แอดมิน', '2021-04-23 12:58:53'),
(2, 'manager', '1234', 'นาย', 'ผู้บริหาร', 'ผู้บริหาร', 'q3.hahaha@gmail.com', '0899999999', 'ผู้บริหาร', '2021-04-06 08:42:08'),
(18, 'officer', '1234', 'นาย', 'นายนพเก้า', 'ถึงถาวร', 'noppakao.t@nsru.ac.th', '0644060454', 'เจ้าหน้าที่', '2021-04-23 12:59:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_build`
--
ALTER TABLE `data_build`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_rent`
--
ALTER TABLE `people_rent`
  ADD PRIMARY KEY (`id_rent`),
  ADD KEY `id_data_build` (`id_data_build`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_build`
--
ALTER TABLE `data_build`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `people_rent`
--
ALTER TABLE `people_rent`
  MODIFY `id_rent` int(5) NOT NULL AUTO_INCREMENT COMMENT 'idตาราง', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `people_rent`
--
ALTER TABLE `people_rent`
  ADD CONSTRAINT `people_rent_ibfk_1` FOREIGN KEY (`id_data_build`) REFERENCES `data_build` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
