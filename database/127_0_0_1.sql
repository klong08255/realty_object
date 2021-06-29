-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 06:16 AM
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
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"realty_object\",\"table\":\"user\"},{\"db\":\"realty_object\",\"table\":\"people_rent\"},{\"db\":\"realty_object\",\"table\":\"data_build\"},{\"db\":\"realty_object\",\"table\":\"news\"},{\"db\":\"realty_object\",\"table\":\"tenant_data\"},{\"db\":\"realty_object\",\"table\":\"manage_realty\"},{\"db\":\"realty_object\",\"table\":\"manage_ten\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-04-22 06:18:01', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":241}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `realty_object`
--
CREATE DATABASE IF NOT EXISTS `realty_object` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `realty_object`;

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
(7, '80/1 ม.2 ต.นคสวรรค์ออก อ.เมือง จ.นครสวรรค์ 60000', 1073, 12864, 100, 100, 5, 13, 3, 1, 'อาศัย', '195', '5.5', 1000, 100, 100, '706-20-11-FR1-00032', '2021-04-20', '2021-04-22', 1064, 'empty', '15328'),
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
(17, 6, 'นายนพเก้า ถึงถาวร', 23, 'ไทย', 'ไทย', '70/1 ม.1 ต.นครสวรรค์ตก อ.เมือง จ.นครสวรรค์ 60000', '0644060454', '1619900324695', '1998-11-09', 'ชำระแล้ว', '2021-06-13', '2022-06-13', 'เช่าอยู่', '16238469958854937713.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `people_rent`
--
ALTER TABLE `people_rent`
  MODIFY `id_rent` int(5) NOT NULL AUTO_INCREMENT COMMENT 'idตาราง', AUTO_INCREMENT=18;

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
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
