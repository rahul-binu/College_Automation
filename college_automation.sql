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
('Test 1', 'Test', 'TS1', 'TS', 1),
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
(33, 'Electronics Lab', 'Bsc', 2021, ',:=::0:0,', 'firsrHalf:2023-06-01,secondHalf:2023-12-01', 'firsrHalf:2023-11-30,secondHalf:2024-03-31', 'halfYearly', 'firstHalf:50,secondHalf:50', 100, '23-24', '1');

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
(1, 250, 'Computer Lab', '12', 'jun', '2023-06-30', '2023-12-30', 20, '', '23-24'),
(2, 250, 'Computer Lab', '12', 'jul', '2023-07-31', '2023-12-30', 20, '', '23-24'),
(3, 250, 'Computer Lab', '0', 'aug', '2023-08-30', '0000-00-00', 20, '', '23-24'),
(4, 250, 'Computer Lab', '0', 'sep', '2023-09-30', '0000-00-00', 20, '', '23-24'),
(5, 250, 'Computer Lab', '0', 'oct', '2023-10-30', '0000-00-00', 20, '', '23-24'),
(6, 250, 'Computer Lab', '0', 'nov', '2023-11-30', '0000-00-00', 20, '', '23-24'),
(7, 250, 'Computer Lab', '0', 'dec', '2023-12-30', '0000-00-00', 20, '', '23-24'),
(8, 250, 'Computer Lab', '0', 'jan', '2024-01-31', '0000-00-00', 20, '', '23-24'),
(9, 250, 'Tution Fee 1', '0', 'Y', '2024-03-31', '0000-00-00', 1000, '', '23-24'),
(10, 280, 'Tution Fee 1', '270', 'Y', '2024-03-31', '2023-12-31', 1000, '', '23-24'),
(11, 270, 'Tution Fee 1', '0', 'Y', '2024-03-31', '0000-00-00', 1000, '', '23-24'),
(71, 260, 'Tution Fee 1', '0', 'Yearly', '2023-12-07', '0000-00-00', 1000, '', '23-24'),
(106, 370, 'Computer Lab', '123', 'jun', '2023-06-30', '2024-01-02', 20, '', '23-24'),
(107, 370, 'Computer Lab', '', 'jul', '2023-07-31', '0000-00-00', 20, '', '23-24'),
(108, 370, 'Computer Lab', '', 'aug', '2023-08-31', '0000-00-00', 20, '', '23-24'),
(109, 370, 'Computer Lab', '', 'sep', '2023-09-30', '0000-00-00', 20, '', '23-24'),
(110, 370, 'Computer Lab', '', 'oct', '2023-10-31', '0000-00-00', 20, '', '23-24'),
(111, 370, 'Computer Lab', '', 'nov', '2023-11-30', '0000-00-00', 20, '', '23-24'),
(112, 370, 'Computer Lab', '', 'dec', '2023-12-31', '0000-00-00', 20, '', '23-24'),
(113, 370, 'Computer Lab', '', 'jan', '2024-01-31', '0000-00-00', 20, '', '23-24'),
(114, 370, 'Computer Lab', '', 'feb', '2024-02-29', '0000-00-00', 20, '', '23-24'),
(115, 370, 'Computer Lab', '', 'mar', '2024-03-31', '0000-00-00', 20, '', '23-24'),
(116, 370, 'Tution Fee 1', '', 'Yearly', '2024-03-31', '0000-00-00', 1000, '', '23-24');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(50) NOT NULL,
  `admission_no` int(11) NOT NULL,
  `register_no` int(11) NOT NULL,
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
('rahul', 250, 0, '', '0000-00-00', 2021, 'bca', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'approved'),
('ram bapu', 260, 0, '', '0000-00-00', 2021, 'bba', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
(' ammu c nair', 270, 0, '', '0000-00-00', 2021, 'b.com', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('anju anju', 280, 0, '', '0000-00-00', 2021, 'bba', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('kunju', 300, 0, '', '0000-00-00', 2021, 'bsc', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('balan', 310, 0, '', '0000-00-00', 2021, 'bba', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('ashok raj', 320, 0, '', '0000-00-00', 2021, 'bba', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('eppachan', 330, 0, '', '0000-00-00', 2021, 'bba', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('makkan', 350, 0, '', '0000-00-00', 2000, 'bba', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove'),
('homelander', 370, 0, '', '0000-00-00', 2021, 'bca', '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 'nonupprove');

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
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `activation` datetime NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `designation`, `created_at`, `status`, `activation`, `username`) VALUES
(18, 'ksrekuttan@gmail.com', '$2y$10$arPnQi89k57rQVmFBfqBiePiZf4xNAd/arVkG6/jWpVZ564gUJtLy', 'student', '2023-12-13 23:28:09', 'inactive', '2023-12-13 05:58:09', 'sreee'),
(21, 'ksajaykumar73@gmail.com', '$2y$10$BP1XgSv18zM5HxBLNpCGZugp1OuZuKCj8jjd5gqtMW5zEijqjgN/C', 'student', '2023-12-16 09:43:14', 'inactive', '2023-12-16 04:13:14', 'AJITH TS'),
(24, 'admin@gmail.com', '$2y$10$PNMXRiISMXETFpvrqvm6puR3M2TGulfELgZEW/uoafPZf1A/bmC4m', 'admin', '2023-12-17 18:06:19', 'inactive', '2023-12-17 12:36:19', 'admin'),
(26, 'rahulbinu220@gmail.com', '$2y$10$pXMz66BPHuH0VJ16Utj7TOClI3CXCC7xHE/oYf.rdx3i4R6axm53e', 'student', '2024-01-02 16:49:06', 'inactive', '2024-01-02 11:19:06', 'Rahul');

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
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `std_fee_reg`
--
ALTER TABLE `std_fee_reg`
  MODIFY `SFRID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
