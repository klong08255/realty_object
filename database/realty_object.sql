-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 01:30 PM
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
  `width` int(50) NOT NULL COMMENT 'ความกว้าง',
  `lenght` int(50) NOT NULL COMMENT 'ความยาว',
  `numb_layer` int(50) NOT NULL COMMENT 'จำนวนชั้น',
  `numb_row` int(50) NOT NULL COMMENT 'จำนวนคูหา',
  `use_area` varchar(5) NOT NULL COMMENT 'พื้นที่ใช้สอย'
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
(2, 'การถวายภัตตาหารเพลงานสอบสนามหลวง', '-', 'พระบาทสมเด็จพระปรเมนทรรามาธิบดีศรีสินทรมหาวชิราลงกรณ พระวชิรเกล้าเจ้าอยู่หัว สมเด็จพระนางเจ้าสุทิดา พัชรสุธาพิมลลักษ พระบรมราชินี เจ้าคุณพระสินีนาฏ พิลาสกัลยาณี ทรงมีพระราชศรัทธา ทรงพระกรุณาโปรดเกล้าฯ ให้นายสิริรัฐ ชุมอุปการ ผู้ว่าราชการจังหวัดนครสวรรค์ เชิญภัตตาหาร, สมุดบันทึก, เจลล้างมือ, หน้ากากอนามัย และกระบอกน้ำดื่มมาถวายแก่พระภิกษุสามเณร และนักเรียนผู้เข้าสอบบาลีสนามหลวง ทั้งส่วนกลางและส่วนภูมิภาค ทั่วประเทศ', 'นายนพเก้า ถึงถาวร', '162351177164139.jpg', '2021-06-12 15:29:31'),
(45, 'ข้อคิดคติธรรม', '-', 'บัณฑิตทั้งหลายสอนไว้ว่า... คุณไม่ต้องรอให้เก่งถึงจะเริ่มต้น แต่คุณต้องเริ่มต้นถึงจะเป็นคนเก่ง', 'นายนพเก้า ถึงถาวร', '16235118417359.jpg', '2021-06-12 15:30:40'),
(46, 'คติธรรม', '-', 'ในบรรดาอำนาจทั้งปวงโลก อำนาจกรรมยิ่งใหญ่ที่สุด อำนาจกรรมดีคือบุญ อำนาจกรรมชั่วคือบาป เป็นสมบัติที่แท้จริงของมนุษย์ ทั้งตอนเป็นและตอนตาย', 'นายนพเก้า ถึงถาวร', '162351192797888.jpg', '2021-06-12 15:32:07'),
(47, 'ข้อคิดคติธรรม', '-', 'หลวงปู่ชา สุภทฺโท สอนไว้ว่า... อะไรจะมาทำให้เราเสียหายไปไม่ได้ นอกจากจิตใจของเราที่คิดผิดเอง ดังนั้น จงระวังอย่าให้จิตใจของเราคิดผิด', 'นายนพเก้า ถึงถาวร', '162351200026873.jpg', '2021-06-12 15:33:19'),
(48, 'ข้อคิดคติธรรม', '-', 'พุทธทาส ภิกขุ สอนไว้ว่า... \"จิดใจ\" ที่ไร้ทุกข์ คือจิตใจที่เรียนรู้ว่า \"ชีวิต\" ไม่จำเป็นต้องมีความสุขทุกเวลา', 'นายนพเก้า ถึงถาวร', '162351207869958.jpg', '2021-06-12 15:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `people_rent`
--

CREATE TABLE `people_rent` (
  `id_rent` int(5) NOT NULL COMMENT 'idตาราง',
  `id_data_build` int(5) NOT NULL COMMENT 'id data build',
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `datestart_rent` date NOT NULL COMMENT 'วันที่เริ่มเช่า',
  `datestop_rent` date NOT NULL COMMENT 'วันที่สิ้นสุดการเช่า',
  `insurance_number` varchar(20) NOT NULL COMMENT 'เลขที่กรมธรรม์ประกันภัยอาคาร',
  `date_insurance` date NOT NULL COMMENT 'วันที่เริ่มประกัน',
  `date_insurance_stop` date NOT NULL COMMENT 'วันที่สิ้นสุดประกัน',
  `rate` int(2) NOT NULL COMMENT 'เรตค่าเช่า',
  `rent_month` int(10) NOT NULL COMMENT 'ค่าเช่า/เดือน',
  `rent_year` int(11) NOT NULL COMMENT 'ค่าเช่า/ปี',
  `contract_fee` int(11) NOT NULL COMMENT 'ค่าธรรมเนียมการทำสัญญา',
  `regis_fee` int(11) NOT NULL COMMENT 'ค่าบำรุงการจดทะเบียน',
  `fire_insurance` int(11) NOT NULL COMMENT 'ค่าประกันอัคคีภัย',
  `sum` int(11) NOT NULL COMMENT 'รวมทั้งสิ้น',
  `slip_receipt` varchar(10) NOT NULL COMMENT 'หลักฐานการชำระเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id` int(5) NOT NULL COMMENT 'idตาราง',
  `prefix` varchar(10) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `idcard` int(13) NOT NULL COMMENT 'เลขบัตรปชช.',
  `nationality` varchar(10) NOT NULL COMMENT 'เชื้อชาติ',
  `nationality2` varchar(10) NOT NULL COMMENT 'สัญชาติ',
  `address_idcard` varchar(50) NOT NULL COMMENT 'ที่อยู่ตามบัตรปชช.',
  `brithday` date NOT NULL COMMENT 'วันเกิด',
  `age` int(2) NOT NULL COMMENT 'อายุ',
  `phone_number` int(10) NOT NULL COMMENT 'เบอร์',
  `email` varchar(20) NOT NULL COMMENT 'อีเมล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางข้อมูลผู้ใช้';

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
(1, 'admin', '1234', 'นาย', 'เจ้าหน้าที่', 'เจ้าหน้าที่', 'q3.hahaha@gmail.com', '89564763', 'แอดมิน', '2021-07-31 06:58:31'),
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
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
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
-- AUTO_INCREMENT for table `data_build`
--
ALTER TABLE `data_build`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `people_rent`
--
ALTER TABLE `people_rent`
  MODIFY `id_rent` int(5) NOT NULL AUTO_INCREMENT COMMENT 'idตาราง', AUTO_INCREMENT=20;

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
