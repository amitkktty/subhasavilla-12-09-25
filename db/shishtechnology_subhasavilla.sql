-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shishtechnology_subhasavilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `reference_name` varchar(50) NOT NULL,
  `resume_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `role`, `fname`, `father_name`, `email`, `phone`, `dob`, `whatsapp`, `location`, `qualification`, `company_name`, `reference_name`, `resume_path`) VALUES
(5, 'Branch Head', 'Shish Tech', 'Shish Technology', 'tech@gmail.com', '9898989989', '2024-12-30', '9898989898', 'Patna', 'Graduation', 'shish tech', 'Ritesh Singh', 'uploads/Registration Slip PPU 21-24.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `form_type` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `msg_subject` varchar(100) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `services` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `form_type`, `name`, `email`, `phone_number`, `msg_subject`, `message`, `services`) VALUES
(40, 'quote', 'Adrash Kumar Choudhary', 'adarshchaudharysrp@gmail.com', '8477996219', '', 'Testing By Adarsh ', 'Ticket Management System'),
(41, 'contact', 'Adrash Kumar Choudhary', 'adarshchaudharysrp@gmail.com', '8477996219', 'enquiry', 'Testing', ''),
(42, 'newsletter', NULL, 'test@g.com', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
