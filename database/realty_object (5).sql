-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 04:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
(1, '2 ซ.เทพวิถี ถ.โกสีย์ ต.ปากน้ำโพ อ.เมืองนครสวรรค์ จ.นครสวรรค์\r\n', 648, 7776, 100, 100, 4, 12, 3, 1, 'อาศัย', '144', '4.5', 0, 100, 100, '706-20-11-FR1-00043', '2021-02-01', '2021-02-01', 1000, 'full', ''),
(3, '70/1', 648, 7776, 100, 100, 4, 12, 3, 1, 'ร้านค้า', '144', '4.5', 26, 100, 100, '706-20-11-FR1-00032', '2021-04-15', '2021-04-16', 1064, 'empty', '');

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
  `datestop_rent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people_rent`
--

INSERT INTO `people_rent` (`id_rent`, `id_data_build`, `name`, `age`, `nationality`, `nationality2`, `address`, `phone_number`, `id_card`, `brithday`, `status_pay`, `datestart_rent`, `datestop_rent`) VALUES
(7, 1, 'จิรพัฒน์ มีด้วง.', 23, 'ไทย', 'ลาว', '254/58 ม.2 ต.โพธิ์ทอง อ.ปางศิลาทอง จ.กำแพงเพชร.', '0888888888', '1685255555556', '1998-12-29', 'ยังไม่ชำระ', '2021-04-15', '2021-04-16');

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
(14, 'bill', '1234', 'นาย', 'jirapat', 'meedoung', 'q3.hahaha@gmail.com', '0899999999', 'เจ้าหน้าที่', '2021-04-13 04:39:23'),
(16, 'klong08255', '3369', 'นาย', 'นายนพเก้า', 'ถึงถาวร', 'noppakao.t@nsru.ac.th', '0644060454', 'เจ้าหน้าที่', '2021-04-06 10:07:14'),
(17, '60113602014', 'noppakao99', 'นาย', 'noppakao', 'tungtaworn', 'klong_cap@hotmail.com', '0644060454', 'เจ้าหน้าที่', '2021-04-06 10:08:28');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `people_rent`
--
ALTER TABLE `people_rent`
  MODIFY `id_rent` int(5) NOT NULL AUTO_INCREMENT COMMENT 'idตาราง', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
