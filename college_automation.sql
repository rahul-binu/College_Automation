-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 06:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_automation`
--
-- Create the college_automation database
CREATE DATABASE IF NOT EXISTS college_automation;

-- Switch to the college_automation database
USE college_automation;
-- --------------------------------------------------------

--
-- Table structure for table `fee_master`
--

CREATE TABLE `fee_master` (
  `fee_head` varchar(20) NOT NULL,
  `fee_group` varchar(20) NOT NULL,
  `fee_head_acro` varchar(10) NOT NULL,
  `fee_group_acro` varchar(10) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee_master`
--

INSERT INTO `fee_master` (`fee_head`, `fee_group`, `fee_head_acro`, `fee_group_acro`, `status`) VALUES
('Computer Lab', 'Lab', 'Cmp Lb', 'Lb', 1),
('Electronics Lab', 'Lab', 'Ele Lb', 'Lb', 1),
('Test 1', 'Test', 'TS-1', 'TS', 1),
('Tution Fee 1', 'Tution Fee', 'TF1', 'TF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fee_settings`
--

CREATE TABLE `fee_settings` (
  `SlNo` int(11) NOT NULL,
  `fee_head` varchar(20) NOT NULL,
  `programme` varchar(10) NOT NULL,
  `yearOfAdmission` int(5) NOT NULL,
  `exemption` varchar(200) NOT NULL,
  `applicableFrom` varchar(200) NOT NULL,
  `applicableTill` varchar(200) NOT NULL,
  `collectionType` varchar(20) NOT NULL,
  `collectionRemark` varchar(120) NOT NULL,
  `totalAmount` int(5) NOT NULL,
  `accadamicYear` varchar(11) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee_settings`
--

INSERT INTO `fee_settings` (`SlNo`, `fee_head`, `programme`, `yearOfAdmission`, `exemption`, `applicableFrom`, `applicableTill`, `collectionType`, `collectionRemark`, `totalAmount`, `accadamicYear`, `status`) VALUES
(29, 'Computer Lab', 'Bca', 2021, ',cast:=:obc:0:15,gender:=:female:0:10,income:<:100000:0:10,', ',jun:2023-06-01,jul:2023-07-01,aug:2023-08-01,sep:2023-09-01,oct:2023-10-01,nov:2023-11-01,dec:2023-12-01,jan:2024-01-01,feb:2024-02-01,mar:2024-03-01', ',jun:2023-06-30,jul:2023-07-31,aug:2023-08-31,sep:2023-09-30,oct:2023-10-31,nov:2023-11-30,dec:2023-12-31,jan:2024-01-31,feb:2024-02-29,mar:2024-03-31', 'monthly', ',jun:20,jul:20,aug:20,sep:20,oct:20,nov:20,dec:20,jan:20,feb:20,mar:20', 200, '23-24', '1'),
(31, 'Computer Lab', 'B.Com-1', 2021, ',cast:=:obc:0:10,', ',jun:2023-06-01,jul:2023-07-01,aug:2023-08-01,sep:2023-09-01,oct:2023-10-01,nov:2023-11-01,dec:2023-12-01,jan:2024-01-01,feb:2024-02-01,mar:2024-03-01', ',jun:2023-12-31,jul:2023-07-31,aug:2023-08-31,sep:2023-09-30,oct:2023-10-31,nov:2023-11-30,dec:2023-12-31,jan:2024-01-31,feb:2024-02-29,mar:2024-03-31', 'monthly', ',jun:10,jul:10,aug:10,sep:10,oct:10,nov:10,dec:10,jan:10,feb:10,mar:10', 100, '21-22', '1'),
(32, 'Tution Fee 1', 'All', 2021, ',:=::0:0,', 'Yearly:2023-12-16', 'Yearly:2024-03-31', 'yearly', 'yeraly:1000', 1000, '23-24', '1'),
(33, 'Electronics Lab', 'Bsc', 2021, ',:=::0:0,', 'firsrHalf:2023-06-01,secondHalf:2023-12-01', 'firsrHalf:2023-11-30,secondHalf:2024-03-31', 'halfYearly', 'firstHalf:50,secondHalf:50', 100, '23-24', '1'),
(35, 'Computer Lab', 'B.Com-2', 2019, ',:=::0:0,', ',jun:2023-06-01,jul:2023-07-01,aug:2023-08-01,sep:2023-09-01,oct:2023-10-01,nov:2023-11-01,dec:2023-12-01,jan:2024-01-01,feb:2024-02-01,mar:2024-03-01', ',jun:2024-01-04,jul:2023-07-01,aug:2023-08-01,sep:2023-09-01,oct:2023-10-01,nov:2023-11-01,dec:2023-12-01,jan:2024-01-01,feb:2024-02-01,mar:2024-03-01', 'monthly', ',jun:10,jul:10,aug:10,sep:10,oct:10,nov:10,dec:10,jan:10,feb:10,mar:10', 100, '19-20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_phn` int(11) NOT NULL,
  `student_father` varchar(50) NOT NULL,
  `student_mother` varchar(50) NOT NULL,
  `parent_adres` varchar(100) NOT NULL,
  `father_state` varchar(100) NOT NULL,
  `mother_state` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_phn`, `student_father`, `student_mother`, `parent_adres`, `father_state`, `mother_state`, `email1`) VALUES
(0, 'suresh', 'unknown', 'rjakada', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `std_fee_reg`
--

CREATE TABLE `std_fee_reg` (
  `SFRID` int(11) NOT NULL,
  `admissionNO` int(11) DEFAULT NULL,
  `fee_head` varchar(30) NOT NULL,
  `BillID` varchar(11) NOT NULL,
  `collectionRemark` varchar(20) NOT NULL,
  `dueDate` date NOT NULL,
  `paidDate` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `exemption` varchar(50) NOT NULL,
  `feeAllocationYear` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_fee_reg`
--

INSERT INTO `std_fee_reg` (`SFRID`, `admissionNO`, `fee_head`, `BillID`, `collectionRemark`, `dueDate`, `paidDate`, `Amount`, `exemption`, `feeAllocationYear`) VALUES
(117, 2000, 'Computer Lab', '01', 'jun', '2023-06-30', '2024-01-04', 20, '', '23-24'),
(118, 2000, 'Computer Lab', '01', 'jul', '2023-07-31', '2024-01-04', 20, '', '23-24'),
(119, 2000, 'Computer Lab', '01', 'aug', '2023-08-31', '2024-01-04', 20, '', '23-24'),
(120, 2000, 'Computer Lab', '1200', 'sep', '2023-09-30', '2024-01-05', 20, '', '23-24'),
(121, 2000, 'Computer Lab', '1200', 'oct', '2023-10-31', '2024-01-05', 20, '', '23-24'),
(122, 2000, 'Computer Lab', '', 'nov', '2023-11-30', '0000-00-00', 20, '', '23-24'),
(123, 2000, 'Computer Lab', '', 'dec', '2023-12-31', '0000-00-00', 20, '', '23-24'),
(124, 2000, 'Computer Lab', '', 'jan', '2024-01-31', '0000-00-00', 20, '', '23-24'),
(125, 2000, 'Computer Lab', '', 'feb', '2024-02-29', '0000-00-00', 20, '', '23-24'),
(126, 2000, 'Computer Lab', '', 'mar', '2024-03-31', '0000-00-00', 20, '', '23-24'),
(127, 2000, 'Tution Fee 1', '', 'Yearly', '2024-03-31', '0000-00-00', 1000, '', '23-24'),
(139, 2001, 'Computer Lab', '', 'jun', '2023-06-30', '0000-00-00', 20, '', '23-24'),
(140, 2001, 'Computer Lab', '', 'jul', '2023-07-31', '0000-00-00', 20, '', '23-24'),
(141, 2001, 'Computer Lab', '', 'aug', '2023-08-31', '0000-00-00', 20, '', '23-24'),
(142, 2001, 'Computer Lab', '', 'sep', '2023-09-30', '0000-00-00', 20, '', '23-24'),
(143, 2001, 'Computer Lab', '', 'oct', '2023-10-31', '0000-00-00', 20, '', '23-24'),
(144, 2001, 'Computer Lab', '', 'nov', '2023-11-30', '0000-00-00', 20, '', '23-24'),
(145, 2001, 'Computer Lab', '', 'dec', '2023-12-31', '0000-00-00', 20, '', '23-24'),
(146, 2001, 'Computer Lab', '', 'jan', '2024-01-31', '0000-00-00', 20, '', '23-24'),
(147, 2001, 'Computer Lab', '', 'feb', '2024-02-29', '0000-00-00', 20, '', '23-24'),
(148, 2001, 'Computer Lab', '', 'mar', '2024-03-31', '0000-00-00', 20, '', '23-24'),
(149, 2001, 'Tution Fee 1', '', 'Yearly', '2024-03-31', '0000-00-00', 1000, '', '23-24');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(50) NOT NULL,
  `admission_no` int(11) NOT NULL,
  `register_no` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `yearOfAdmission` int(11) NOT NULL,
  `program` varchar(30) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `state1` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `adhaar` int(11) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `guardian_rel` varchar(50) NOT NULL,
  `guardian_con` varchar(50) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `phno` int(11) NOT NULL,
  `blood` varchar(30) NOT NULL,
  `hs` varchar(500) NOT NULL,
  `hss` varchar(500) NOT NULL,
  `co_caricular` varchar(500) NOT NULL,
  `distance_to_clg` int(11) NOT NULL,
  `parent_phn` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `approval` varchar(20) NOT NULL DEFAULT 'nonupprove'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `admission_no`, `register_no`, `gender`, `dob`, `yearOfAdmission`, `program`, `adress`, `nation`, `state1`, `district`, `pincode`, `adhaar`, `cast`, `religion`, `income`, `guardian`, `guardian_rel`, `guardian_con`, `email1`, `phno`, `blood`, `hs`, `hss`, `co_caricular`, `distance_to_clg`, `parent_phn`, `status`, `approval`) VALUES
('aswin', 2000, '210021093887', 'male', '2003-01-31', 2021, 'BCA', 'Rajakumari', 'india', 'kerala', 'idukki', 0, 0, '', '', 0, '', '', '', 'aswinsuresh2607@gmail.com', 1021021021, 'Choose..', 'hs_name:,hs_mark:,hs_percentage:,hs_sylabus:,hs_passout:2018', 'hss_name:,hss_mark:,hss_percentage:,hss_sylabus:,hss_passout:2021', 'act1:,act2:,act3:,act4:', 0, 0, '', 'approved'),
('rahul', 2001, '210021093888', 'male', '2004-06-15', 2021, 'BCA', 'rajakkad', 'india', 'kerala', 'idukki', 0, 0, '', '', 0, '', '', '', 'rah@gmail.com', 2147483647, 'Choose..', 'hs_name:,hs_mark:,hs_percentage:,hs_sylabus:,hs_passout:2018', 'hss_name:,hss_mark:,hss_percentage:,hss_sylabus:,hss_passout:2021', 'act1:,act2:,act3:,act4:', 0, 0, '', 'approved'),
('ram', 2003, '210021093889', 'male', '2004-10-13', 2021, 'BCA', 'admiali', 'india', 'kerala', 'idukki', 0, 0, '', '', 0, '', '', '', 'ram@gmail.com', 1111111111, 'Choose..', 'hs_name:,hs_mark:,hs_percentage:,hs_sylabus:,hs_passout:2018', 'hss_name:,hss_mark:,hss_percentage:,hss_sylabus:,hss_passout:2021', 'act1:,act2:,act3:,act4:', 0, 0, '', 'nonupprove');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `activation` datetime NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `designation`, `created_at`, `status`, `activation`, `username`) VALUES
(21, 'ksajaykumar73@gmail.com', '$2y$10$BP1XgSv18zM5HxBLNpCGZugp1OuZuKCj8jjd5gqtMW5zEijqjgN/C', 'student', '2023-12-16 09:43:14', 'active', '2023-12-16 04:13:14', 'AJITH TS'),
(24, 'admin@gmail.com', '$2y$10$PNMXRiISMXETFpvrqvm6puR3M2TGulfELgZEW/uoafPZf1A/bmC4m', 'admin', '2023-12-17 18:06:19', 'active', '2023-12-17 12:36:19', 'admin'),
(30, 'aswinsuresh2706@gmail.com', '$2y$10$QhbQcQZBLavDJfEIaaCuTOzoYWpSVInsDYaBPBxt.IZqHz9UTz1jq', 'staff', '2024-01-04 11:58:09', 'active', '2024-01-04 06:28:09', 'aswin suresh'),
(31, 'rahulbinu220@gmail.com', '$2y$10$UxPjV0OfsU2DYOdb6Y8mTej5Mxm9HKSLAZC90scwZtLm0d8uZO3Fm', 'staff', '2024-01-04 20:01:13', 'inactive', '2024-01-04 02:31:13', 'Rahul Binu'),
(32, 'anupamakrishna1105@gmail.com', '$2y$10$WmF/39XM6QLdbfpMrRszGOo2ULw68oL5cR6SlTrNyeC4uePMo.bja', 'student', '2024-01-05 11:54:36', 'inactive', '2024-01-05 06:24:36', 'anupama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee_master`
--
ALTER TABLE `fee_master`
  ADD PRIMARY KEY (`fee_head`);

--
-- Indexes for table `fee_settings`
--
ALTER TABLE `fee_settings`
  ADD PRIMARY KEY (`SlNo`),
  ADD KEY `fee_head` (`fee_head`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_phn`);

--
-- Indexes for table `std_fee_reg`
--
ALTER TABLE `std_fee_reg`
  ADD PRIMARY KEY (`SFRID`),
  ADD KEY `fee_head` (`fee_head`),
  ADD KEY `admissionNO` (`admissionNO`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`admission_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee_settings`
--
ALTER TABLE `fee_settings`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `std_fee_reg`
--
ALTER TABLE `std_fee_reg`
  MODIFY `SFRID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee_settings`
--
ALTER TABLE `fee_settings`
  ADD CONSTRAINT `fee_settings_ibfk_1` FOREIGN KEY (`fee_head`) REFERENCES `fee_master` (`fee_head`);

--
-- Constraints for table `std_fee_reg`
--
ALTER TABLE `std_fee_reg`
  ADD CONSTRAINT `std_fee_reg_ibfk_1` FOREIGN KEY (`admissionNO`) REFERENCES `student` (`admission_no`),
  ADD CONSTRAINT `std_fee_reg_ibfk_2` FOREIGN KEY (`fee_head`) REFERENCES `fee_settings` (`fee_head`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
