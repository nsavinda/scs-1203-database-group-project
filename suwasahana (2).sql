-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2022 at 04:28 AM
-- Server version: 10.9.2-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suwasahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `attentent`
--

CREATE TABLE `attentent` (
  `emp_id` int(10) NOT NULL,
  `hourly_rate` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `emp_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `contract_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(8) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `dea_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `emp_id`, `dea_no`) VALUES
(2, 3, 7897),
(3, 4, 5465),
(5, 6, 3333333),
(6, 7, 40000),
(7, 9, 4534346),
(8, 10, 5449539);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_special`
--

CREATE TABLE `doctor_special` (
  `doctor_id` int(8) NOT NULL,
  `speciality_area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `address`, `contact_no`, `status`) VALUES
(1, 'new', 'cvcv fvf', '54565773', NULL),
(2, 'octor', 'dfdff', '4545634', NULL),
(3, 'new', 'dfdff', '4545634', NULL),
(4, 'Doctor', 't', '545', NULL),
(6, 'r', 't', '4543', NULL),
(7, 'new', 't', '4543', NULL),
(8, 'new one', 'abd Rd,dsd', '45945324', NULL),
(9, 'new one', 'abd Rd,dsd', '45945324', NULL),
(10, 'DOctor 234', 'abd Rd,dsd', '45945324', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medical_staff`
--

CREATE TABLE `medical_staff` (
  `emp_id` int(10) NOT NULL,
  `joined_date` date NOT NULL,
  `resign_date` date DEFAULT NULL,
  `council_regno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_staff`
--

INSERT INTO `medical_staff` (`emp_id`, `joined_date`, `resign_date`, `council_regno`) VALUES
(3, '2022-09-06', '2022-09-09', 444466667),
(4, '2022-09-06', '2022-09-15', 554),
(6, '2022-09-06', '2022-09-15', 554),
(7, '2022-09-06', '2022-09-15', 554),
(9, '2022-09-24', '2022-09-25', 438),
(10, '2022-09-24', '2022-09-25', 438);

-- --------------------------------------------------------

--
-- Table structure for table `non_medical_staff`
--

CREATE TABLE `non_medical_staff` (
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nurse_id` int(5) NOT NULL,
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `admitted_date` date DEFAULT NULL,
  `admitted_time` time DEFAULT NULL,
  `discharged_date` date DEFAULT NULL,
  `discharged_time` time DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `blood_pressure` float DEFAULT NULL,
  `temperature` float DEFAULT NULL,
  `pulse` int(11) DEFAULT NULL,
  `vital_date` date DEFAULT NULL,
  `vital_time` time DEFAULT NULL,
  `in_flag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `out_flag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admitted_doctor` int(10) DEFAULT NULL,
  `insurance_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_no` int(3) DEFAULT NULL,
  `bed_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_care_unit`
--

CREATE TABLE `patient_care_unit` (
  `unit_id` int(5) NOT NULL,
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `ward_no` int(3) NOT NULL,
  `ward_name` int(50) NOT NULL,
  `unit_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attentent`
--
ALTER TABLE `attentent`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `doctor_special`
--
ALTER TABLE `doctor_special`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `non_medical_staff`
--
ALTER TABLE `non_medical_staff`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD PRIMARY KEY (`unit_id`,`emp_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`ward_no`),
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `ward_no` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attentent`
--
ALTER TABLE `attentent`
  ADD CONSTRAINT `attentent_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD CONSTRAINT `cleaner_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `medical_staff` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_special`
--
ALTER TABLE `doctor_special`
  ADD CONSTRAINT `doctor_special_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD CONSTRAINT `medical_staff_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `non_medical_staff`
--
ALTER TABLE `non_medical_staff`
  ADD CONSTRAINT `non_medical_staff_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `nurse_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD CONSTRAINT `patient_care_unit_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `ward_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `patient_care_unit` (`unit_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
