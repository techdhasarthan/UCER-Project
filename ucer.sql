-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucer`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstration`
--

CREATE TABLE `adminstration` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_role` varchar(50) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `profile` varchar(1024) NOT NULL,
  `admin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminstration`
--

INSERT INTO `adminstration` (`admin_id`, `admin_name`, `admin_role`, `collegename`, `profile`, `admin_image`) VALUES
(1, 'Dr. R. Velraj', 'Vice-chancellor', 'Anna University, Chennai', 'https://www.annauniv.edu/nwsnew/vcprofile.php', 'vicechancellor.jpg'),
(2, 'Dr. G. Ravikumar', 'Registrar i/c', 'Anna University, Chennai', 'https://annauniv.irins.org/profile/117663', 'registrar.jpg'),
(3, 'Dr. P. Hariharn', 'Director', 'Anna University, Chennai', 'https://www.annauniv.edu/manufacturing/htdocs/faculty/pages/Dr.%20P.%20Hariharan.php', 'director.jpg'),
(4, 'Dr.T.Udayakumar', 'Dean', 'University College of Engineering, Ramanathapuram', 'dean.php', 'Dr.T.Udayakumar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admis_id` int(11) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `admis_doc` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admis_id`, `doc_name`, `admis_doc`) VALUES
(1, 'College Fee', 'UCER-College_fee-2021-22.pdf'),
(2, 'Hostel Fee', 'UCER-Hostel_Fees_Structure_21-22.pdf'),
(3, 'Procedure For Fee Payment', 'Procedureforpayfees.pdf'),
(4, 'Required Documents', 'Required_documents.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ann_id` int(11) NOT NULL,
  `ann_name` varchar(100) NOT NULL,
  `ann_doc` varchar(1024) NOT NULL,
  `ann_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `dow_id` int(11) NOT NULL,
  `dow_doc_name` varchar(100) NOT NULL,
  `dow_doc` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`dow_id`, `dow_doc_name`, `dow_doc`) VALUES
(1, 'Bonafide Certificate Form', 'Bonafide Certificate Form.pdf'),
(2, 'Internal Assessment Details Form', 'Internal Assessment Details Form.pdf'),
(3, 'Hostel Rules and Regulations', 'Hostel Rules and Regulations.pdf'),
(4, 'College Rules and Regulations', 'College Rules & Regulations-2.pdf'),
(5, 'Course Discontinue Form', 'Course discontinue form-1.pdf'),
(6, 'Hostel Admission Form', 'Hostel_admission_form.pdf'),
(7, 'Hostel Vacating Form', 'Hostel room vacating form-1.pdf'),
(8, 'Student College Leave Form', 'Student college leave form.pdf'),
(9, 'Student Hostel Leave Form', 'Student hostel Leave Form-1.pdf'),
(10, 'WiFi Registration Form', 'wifi.pdf'),
(11, 'Semester No-Due Form', 'Sem-NoDue-Form.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL,
  `notice_name` varchar(100) NOT NULL,
  `notice_dest` varchar(1024) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminstration`
--
ALTER TABLE `adminstration`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admis_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`dow_id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminstration`
--
ALTER TABLE `adminstration`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `dow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
