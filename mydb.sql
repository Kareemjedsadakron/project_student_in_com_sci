-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 06:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL COMMENT 'รหัสกิจกรรม',
  `student_id` varchar(11) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `title` varchar(100) DEFAULT NULL COMMENT 'หัวข้อ',
  `data` varchar(300) DEFAULT NULL COMMENT 'รายละอียด',
  `date` date DEFAULT NULL COMMENT 'วันที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `id` int(11) NOT NULL,
  `number` varchar(11) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `name` varchar(50) DEFAULT NULL COMMENT 'ชื่อ',
  `lastname` varchar(50) DEFAULT NULL COMMENT 'นามสกุล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`id`, `number`, `name`, `lastname`) VALUES
(1, '59122420101', 'นายเฉลิมลาภ', 'ลิ้มประเสริฐ'),
(2, '59122420102', 'นายนนท์ธิชัย', 'เศษบุญ'),
(3, '59122420103', 'นายพลเกษม', 'กาละภักดี'),
(4, '59122420104', 'นายศรราม', 'จำปาโท'),
(5, '59122420105', 'นายธนบดี', 'เหลืองใย'),
(6, '59122420106', 'นายจิระโรจน์', 'ส่วยสิน'),
(7, '59122420107', 'นางสาวศศิมา', 'วังยูโซ๊บ'),
(8, '59122420108', 'นายศักดิ์สิทธิ์', 'สุขสัตยานนท์'),
(9, '59122420110', 'นางสาวสุพิชชา', 'ห่อเทพ'),
(10, '59122420111', 'นางสาวสุดารัตน์', 'กันชุน'),
(11, '59122420112', 'นายนฤพนธ์', 'พรหมศร'),
(12, '59122420115', 'นายถิรนัย', 'ทิพย์ประเสริฐ'),
(13, '59122420118', 'นายภคิน', 'กรณ์รมนต์โภคิน'),
(14, '59122420119', 'นายธนพล', 'สวัสดี'),
(15, '59122420127', 'นายณภวุฒิ', 'ศรีชัย'),
(16, '5912242000', 'ทดสอบระบบ', 'ทดสอบระบบ'),
(17, '58122420124', 'คนแรก', 'คนแรก'),
(18, '58122420123', 'คนสอง', 'คนสอง'),
(19, '58122420122', 'คนสาม', 'คนสาม'),
(20, '58122420121', 'คนสี่', 'คนสี่'),
(21, '60122420122', 'คนห้า', 'คนห้า'),
(22, '60122420121', 'คนหก', 'คนหก'),
(23, '60122420122', 'คนเจ็ด', 'คนเจ็ด'),
(24, '60122420121', 'คนแปด', 'คนแปด');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL COMMENT 'รหัสกระดานสนทนา',
  `number` varchar(11) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `title` varchar(100) DEFAULT NULL COMMENT 'หัวข้อคำถาม',
  `data` varchar(250) DEFAULT NULL COMMENT 'รายละอียด',
  `personnel` varchar(50) DEFAULT NULL COMMENT 'ผู้ถาม',
  `date` date DEFAULT NULL COMMENT 'วันที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`id`, `number`, `title`, `data`, `personnel`, `date`) VALUES
(1, '1234', 'ทดสอบระบบวันที่1', 'ทดสอบระบบวันที่1', 'แอดมิน', '2019-10-30'),
(2, '59122420125', 'ทดสอบระบบวันที่2', 'ทดสอบระบบวันที่2', 'ผู้ใช้ระบบ', '2019-10-29'),
(3, '1234', 'ทดสอบระบบวันที่3', 'ทดสอบระบบวันที่3', 'แอดมิน', '2019-10-27'),
(4, '1234', 'ทดสอบระบบวันที่4.1', 'ทดสอบระบบวันที่4.1', 'แอดมิน', '2019-10-30'),
(6, '1234', 'fsdzfsfsf', 'fsdfsdf', 'แอดมิน', '2019-10-30'),
(7, '59122', 'คู่มือการออกแบบระบบงานฐานข้อมูลf', 'dsfsdfsd', 'oom', '2019-10-29'),
(8, '59122', 'dqEDQd', 'sadasDAS', 'oom', '2019-10-29'),
(10, '59122420125', 'rewrwerew', 'rwerwerwe', 'ผู้ใช้ระบบ', '2019-10-30'),
(11, '1234', 'อันใหม่', 'อันใหม่', 'แอดมิน', '2019-10-30'),
(12, '1234', 'อันใหม่.1', 'อันใหม่.1', 'แอดมิน', '2019-10-30'),
(13, '1234', 'new', 'new', 'แอดมิน', '2019-12-19'),
(14, '1234', 'อันใหม่', 'กไๆฏ\"๐ก', 'แอดมิน', '2019-12-13'),
(15, '1234', 'อันใหม่ กว่า', 'ๅภๅ/ภๅ/ภ/ๅ', 'แอดมิน', '2019-12-14'),
(16, '1234', 'kareem', 'reem', 'แอดมิน', '2019-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL COMMENT 'เลข',
  `student_id` varchar(11) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `iden_number` varchar(13) DEFAULT NULL COMMENT 'รหัสประชาชน',
  `name` varchar(50) DEFAULT NULL COMMENT 'ชื่อ',
  `lastname` varchar(50) DEFAULT NULL COMMENT 'นามสกุล',
  `nickname` varchar(50) DEFAULT NULL COMMENT 'ชื่อเล่น',
  `address` varchar(100) DEFAULT NULL COMMENT 'ที่อยู่',
  `school` varchar(50) DEFAULT NULL COMMENT 'ชื่อโรงเรียน',
  `phone` varchar(10) DEFAULT NULL COMMENT 'โทรศัพท์',
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL COMMENT 'ชื่อบริษัท',
  `com_address` varchar(100) DEFAULT NULL COMMENT 'ที่อยู่บริษัท',
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `student_id`, `iden_number`, `name`, `lastname`, `nickname`, `address`, `school`, `phone`, `email`, `facebook`, `company`, `com_address`, `username`, `password`, `photo`) VALUES
(1, '1234', '1234567891011', 'แอดมิน', 'ทดสอบระบบ', 'โอม', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSC_00384.JPG'),
(2, '59122420125', NULL, 'นายเฉลิมลาภ', 'ลิ้มประเสริฐ', 'ฟร่อง', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSC_0014.JPG'),
(3, '59122', NULL, 'oom', 'ohm', 'บักโอม', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, '59122420', NULL, 'asta', 'tes', 'เทสระบบ3', 'dasdads', 'asdasd', NULL, 'asdasdasdas', 'dasdasd', 'dasdas', NULL, NULL, NULL, ''),
(5, '59000', NULL, 'ฟร้อง', 'เทส', 'เทส4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, '59122420122', NULL, 'ทดสอบระบบ2', 'เทส2', 'เทส6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, '1234', NULL, 'แอดมิน', 'ทดสอบระบบ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, '1234', '343223432', 'แอดมิน', 'ทดสอบระบบ', 'การีม', 'ดาวอังคาร', 'one.on', '1321321321', 'admin@gmail.com', 'asta@gmail.com', 'บริษัท ซีโร่เทส', 'สนามบินน้ำ', NULL, NULL, '73232591_439044203701387_1802598409786359808_n.jpg'),
(9, '1234', '343223432', 'แอดมิน', 'ทดสอบระบบ', 'การีม', 'ดาวอังคาร', 'one.on', '1321321321', 'admin@gmail.com', 'asta@gmail.com', 'บริษัท ซีโร่เทส', 'สนามบินน้ำ', NULL, NULL, '73232591_439044203701387_1802598409786359808_n.jpg'),
(10, '1234', NULL, 'แอดมิน', 'ทดสอบระบบ', NULL, 'dsadadad', 'asdasas', '823213', 'admin@gmail.comdasdasdas', 'dasdasdas', 'asdasdasd', 'asdasdas', NULL, NULL, '73232591_439044203701387_1802598409786359808_n.jpg'),
(11, '1234', NULL, 'แอดมิน', 'ทดสอบระบบ', 'asfasfasf', 'dafafas', 'asfasf', '434341', 'asfasfasf', 'asfas', '321313', '13131', NULL, NULL, '73232591_439044203701387_1802598409786359808_n.jpg'),
(12, '1234', NULL, 'แอดมิน', 'ทดสอบระบบ', NULL, 'dasdasdasdas', 'dasdasdas', '12332313', '21312312313', '123123213', '12321312', '321312312', NULL, NULL, '73232591_439044203701387_1802598409786359808_n.jpg'),
(13, '1234', NULL, 'แอดมิน', 'ทดสอบระบบ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '1234', '1234567891011', 'แอดมิน', 'ทดสอบระบบ', 'เทสระบบ1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P1010003.JPG'),
(15, '1234', '1234567891011', 'แอดมิน', 'ทดสอบระบบ', 'เทสระบบ1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P1010003.JPG'),
(16, '1234', '1234567891011', 'แอดมิน', 'ทดสอบระบบ', 'เทสระบบ1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P1010002.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$12s2wsy3c6H27DUzJGMYB.Uhl77SQLutk4uhu86j4vIPnzlfQQ/LS', '2019-10-29 00:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `publicrelations`
--

CREATE TABLE `publicrelations` (
  `id` int(11) NOT NULL COMMENT 'รหัสประชาสัมพันธ์',
  `number_id` bigint(11) DEFAULT NULL COMMENT 'number_id',
  `title` varchar(100) DEFAULT NULL COMMENT 'หัวข้อ',
  `data` varchar(300) DEFAULT NULL COMMENT 'ข้อมูล',
  `date` date DEFAULT NULL COMMENT 'วันที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicrelations`
--

INSERT INTO `publicrelations` (`id`, `number_id`, `title`, `data`, `date`) VALUES
(1, 1234, 'ประกาศมหาวิทยาลัยการรับสมัครนักศึกษาระดับ ปริญญตรี จันทร์-ศุกร์ ประจำปีการศึกษา 2563 (5 ก.ย. 62)', 'ประกาศมหาวิทยาลัยการรับสมัครนักศึกษาระดับ ปริญญตรี จันทร์-ศุกร์ ประจำปีการศึกษา 2563 (5 ก.ย. 62)', '2019-10-29'),
(2, 1234, 'คณะวิทยาศาสตร์และเทคโนโลยี แจ้งวันปฐมนิเทศนักศึกษาสหกิจศึกษา (24 ต.ค. 62)', 'คณะวิทยาศาสตร์และเทคโนโลยี แจ้งวันปฐมนิเทศนักศึกษาสหกิจศึกษา (24 ต.ค. 62)', '2019-10-29'),
(3, 1234, 'ประกาศการรับสมัครนักศึกษาระดับปริญญาตรี เสาร์-อาทิตย์ ภาคการศึกษาที่ 2 /2562 (19 ส.ค. 62)', 'ประกาศการรับสมัครนักศึกษาระดับปริญญาตรี เสาร์-อาทิตย์ ภาคการศึกษาที่ 2 /2562 (19 ส.ค. 62)', '2019-10-29'),
(4, 1234, 'ขอเชิญร่วมเยี่ยมชมนิทรรศการและกิจกรรมในงาน Thailand Space Week 2019(24 ก.ค. 62)', 'ขอเชิญร่วมเยี่ยมชมนิทรรศการและกิจกรรมในงาน Thailand Space Week 2019(24 ก.ค. 62)', '2019-10-29'),
(5, 1234, 'ประกาศรายชื่อนักศึกษา ผู้มีสิทธิ์กู้ยืมเงิน กยศ. และ กรอ.(12 ก.ค. 62)', 'ประกาศรายชื่อนักศึกษา ผู้มีสิทธิ์กู้ยืมเงิน กยศ. และ กรอ.(12 ก.ค. 62)', '2019-10-28'),
(6, 1234, 'กระทรวงการอุดมศึกษา ขอความร่วมมือกำกับดูแลการจัดกิจกรรมต้อนรับน้องใหม่(7 ก.ค. 62)', 'กระทรวงการอุดมศึกษา ขอความร่วมมือกำกับดูแลการจัดกิจกรรมต้อนรับน้องใหม่(7 ก.ค. 62)', '2019-10-28'),
(7, 1234, 'การกำกับดูแลการจัดกิจกรรมรับน้องนักศึกษาใหม่ ชั้นปีที่ 1(22 มิ.ย. 62)', 'การกำกับดูแลการจัดกิจกรรมรับน้องนักศึกษาใหม่ ชั้นปีที่ 1(22 มิ.ย. 62)', '2019-10-29'),
(8, 1234, 'ประกาศมหาวิทยาลัย เรื่องการลงทะเบียนวิชาการฝึกประสบการณ์วิชาชีพ สหกิจศึกษา 62(7 มี.ค. 62)', 'ประกาศมหาวิทยาลัย เรื่องการลงทะเบียนวิชาการฝึกประสบการณ์วิชาชีพ สหกิจศึกษา 62(7 มี.ค. 62)', '2019-10-30'),
(9, 1234, 'เสาร์-อาทิตย์ ภาคการศึกษาที่1 ปีการศึกษา 2562 (9 ก.พ. 62)', 'เสาร์-อาทิตย์ ภาคการศึกษาที่1 ปีการศึกษา 2562 (9 ก.พ. 62)', '2019-10-28'),
(10, 1234, 'ชิงเงินรางวัลมูลค่ากว่า 120,000 บาท พร้อมโล่ประกาศเกียรติคุณ (9 ต.ค. 61)', 'ชิงเงินรางวัลมูลค่ากว่า 120,000 บาท พร้อมโล่ประกาศเกียรติคุณ (9 ต.ค. 61)', '2019-10-28'),
(11, 1234, 'อันใหม่', 'อันใหม่', '2019-10-30'),
(12, 1234, 'อันใหม่.1', 'อันใหม่.1', '2019-10-29'),
(13, 1234, 'อันใหม่.2', 'อันใหม่.2', '2019-10-30'),
(14, 1234, 'อันใหม่.3', 'อันใหม่.3', '2019-10-30'),
(16, 1234, 'ให่มล่าสุด', 'ให่มล่าสุด', '2019-12-13'),
(17, 1234, 'ดำไโฎ\"ธฑ', 'ฑ\"๐พๆไฑ', '2019-12-14'),
(18, 1234, 'ำ/ไำๆไำ', 'ำ/ำๆไำ\"๐', '2019-12-13'),
(19, 1234, 'kareem', 'reem', '2019-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codename` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `lastname`, `codename`) VALUES
(1, 'แอดมิน', 'admin@gmail.com', NULL, '$2y$10$g43oloIEp8wTt0HFXTtcyuZjEC.OFwb/ljIKyiXVZnWa4GanT8ANi', 'RXsHAbni2vmuSYaTDhfZKu7PhbH2wcpi1D57i884jX8B7M2AI8plpMT32S0N', '2019-07-11 20:23:35', '2019-07-11 20:23:35', 'admin', 'ทดสอบระบบ', '1234'),
(2, 'ผู้ใช้ระบบ', 'member@gmail.com', NULL, '$2y$10$Hy2tqrbbFQDSEvCYK.02OO4NyGYouUaqkLMg2WFk70CRqJPnKQffi', NULL, '2019-08-20 22:52:08', '2019-08-20 22:52:08', '', 'ทดสอบระบบ', '59122420125'),
(3, 'oom', 'member2@gmail.com', NULL, '$2y$10$Ta/2ekcb2AmjPULmlJCBCeJBw/ES9Cmb0iAFEqh3BUesGec59oTDK', NULL, '2019-10-29 00:30:14', '2019-10-29 00:30:14', 'user', 'ohm', '59122'),
(4, 'asta', 'member3@gmail.com', NULL, '$2y$10$2RfMy62SknZHmf7bt5rBwOt63QvmyOECLG4.wk7hoSA5kUlkGeH9m', NULL, '2019-10-29 00:34:21', '2019-10-29 00:34:21', 'user', 'tes', '59122420'),
(5, 'ฟร้อง', 'member4@gmail.com', NULL, '$2y$10$oQYT2O46TYlb0GtLzdLMmOxOklvlqTP87FqE0HIfqt6xcuSFcRKEi', NULL, '2019-10-29 00:40:42', '2019-10-29 00:40:42', 'user', 'เทส', '59000'),
(6, 'ทดสอบระบบ2', 'member5@gmail.com', NULL, '$2y$10$iaED9ZN5nEk/pGaPJSz/2.4zoLCLUopX65mR/eJ5NUBfyn1U9CLYu', NULL, '2019-10-29 19:43:17', '2019-10-29 19:43:17', 'user', 'เทส2', '59122420122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `publicrelations`
--
ALTER TABLE `publicrelations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกิจกรรม', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกระดานสนทนา', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'เลข', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publicrelations`
--
ALTER TABLE `publicrelations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประชาสัมพันธ์', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
