-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2022 at 12:10 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19016487_teodoro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `studentLRN` varchar(100) NOT NULL,
  `studentGrade` varchar(100) NOT NULL,
  `studentSection` varchar(100) NOT NULL,
  `studentSchoolYear` varchar(100) NOT NULL,
  `filipinoIssued` varchar(100) DEFAULT NULL,
  `filipinoReturned` varchar(100) DEFAULT NULL,
  `englishIssued` varchar(100) DEFAULT NULL,
  `englishReturned` varchar(100) DEFAULT NULL,
  `mathIssued` varchar(100) DEFAULT NULL,
  `mathReturned` varchar(100) DEFAULT NULL,
  `scienceIssued` varchar(100) DEFAULT NULL,
  `scienceReturned` varchar(100) DEFAULT NULL,
  `apIssued` varchar(100) DEFAULT NULL,
  `apReturned` varchar(100) DEFAULT NULL,
  `espIssued` varchar(100) DEFAULT NULL,
  `espReturned` varchar(100) DEFAULT NULL,
  `tleIssued` varchar(100) DEFAULT NULL,
  `tleReturned` varchar(100) DEFAULT NULL,
  `mapehIssued` varchar(100) DEFAULT NULL,
  `mapehReturned` varchar(100) DEFAULT NULL,
  `bookRemarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `iid`, `studentLRN`, `studentGrade`, `studentSection`, `studentSchoolYear`, `filipinoIssued`, `filipinoReturned`, `englishIssued`, `englishReturned`, `mathIssued`, `mathReturned`, `scienceIssued`, `scienceReturned`, `apIssued`, `apReturned`, `espIssued`, `espReturned`, `tleIssued`, `tleReturned`, `mapehIssued`, `mapehReturned`, `bookRemarks`) VALUES
(39, 192, '104746120154', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 193, '104746120164', '7', 'Gold', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 194, '104746120165', '7', 'Gold', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 195, '104746120155', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 196, '104746120156', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, '01/20/2022', '01/25/2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 197, '104746120157', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 198, '104746120158', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 199, '104746120159', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 200, '104746120160', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, '10/20/2022', '10/25/2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 201, '104746120161', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 202, '104746120162', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 203, '104746120163', '7', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 204, '104746120175', '7', 'Mariano', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 205, '104746120176', '7', 'Mariano', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 206, '104746120177', '7', 'Mariano', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 208, '104746120178', '7', 'Mariano', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 209, '104746120179', '7', 'Mariano', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 210, '104746120179', '8', 'Mariano', '2023-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 211, '104746120180', '7', 'Mariano', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 212, '104746120180', '8', 'Mariano', '2023-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 222, '104746120300', '7', 'Gold', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 224, '104746120156', '8', 'Mabini', '2022-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_data`
--

CREATE TABLE `tbl_book_data` (
  `id` int(11) NOT NULL,
  `studentGrade` varchar(100) NOT NULL,
  `studentSchoolYear` varchar(100) NOT NULL,
  `filipinoTitle` text NOT NULL,
  `englishTitle` text NOT NULL,
  `mathTitle` text NOT NULL,
  `scienceTitle` text NOT NULL,
  `apTitle` text NOT NULL,
  `espTitle` text NOT NULL,
  `tleTitle` text NOT NULL,
  `mapehTitle` text NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_data`
--

INSERT INTO `tbl_book_data` (`id`, `studentGrade`, `studentSchoolYear`, `filipinoTitle`, `englishTitle`, `mathTitle`, `scienceTitle`, `apTitle`, `espTitle`, `tleTitle`, `mapehTitle`, `created_at`) VALUES
(1, '7', '2022-2023', 'Filipino 7', 'English 7', 'Math 7', 'Science 7', 'AP 7', 'Esp 7', 'TLE 7', 'MAPEH 7', '2022-05-31 17:54:49'),
(2, '10', '2022-2023', 'Filipino 10', 'English 10', 'Math 10', 'Science 10', 'AP 10', 'Esp 10', 'TLE 10', 'MAPEH 10', '2022-06-03 17:54:49'),
(3, '8', '2022-2023', 'Filipino 8', 'English 8', 'Math 8', 'Science 8', 'AP 8', 'Esp 8', 'TLE 8', 'MAPEH 8', '2022-06-01 17:54:49'),
(4, '9', '2022-2023', 'Filipino 9', 'English 9', 'Math 9', 'Science 9', 'AP 9', 'Esp 9', 'TLE 9', 'MAPEH 9', '2022-06-02 17:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `id` int(11) NOT NULL,
  `facultyID` varchar(100) DEFAULT NULL,
  `facultyStatus` varchar(100) DEFAULT NULL,
  `facultyName` varchar(150) DEFAULT NULL,
  `facultyAddress` varchar(150) DEFAULT NULL,
  `facultyEmail` varchar(100) DEFAULT NULL,
  `facultyContactNo` varchar(100) DEFAULT NULL,
  `facultyGender` varchar(100) DEFAULT NULL,
  `facultyUsername` varchar(100) DEFAULT NULL,
  `facultyPassword` varchar(100) DEFAULT NULL,
  `facultyPhoto` text DEFAULT NULL,
  `facultyGrade` varchar(100) DEFAULT NULL,
  `facultySection` varchar(100) DEFAULT NULL,
  `facultySchoolYear` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`id`, `facultyID`, `facultyStatus`, `facultyName`, `facultyAddress`, `facultyEmail`, `facultyContactNo`, `facultyGender`, `facultyUsername`, `facultyPassword`, `facultyPhoto`, `facultyGrade`, `facultySection`, `facultySchoolYear`, `created_at`) VALUES
(1, '', 'head', 'Myrisa I. Balondo EdD.', '', '', '', '', '', '', 'https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png', '', '', '2022-2023', '2022-06-03 23:43:23'),
(2, '', '', '', '', '', '', '', 'admin', 'admin', 'https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png', '', '', '2022-2023', ''),
(83, NULL, 'head', 'Test New Head', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png', NULL, NULL, '2023-2024', '2022-06-19 08:07:41'),
(86, 'Teacher Ariana', 'teaching', 'Ariana Swift', '2490 Tibag, Baliuag, Bulacan', 'arianaswift@gmail.com', '09546754356', 'female', 'Teacher Ariana', 'ariana1', 'https://teodoro-regore.000webhostapp.com/uploads/62b012cfdafe26.51899891.png', '8', 'Mabini', '2022-2023', '2022-06-20 03:16:27'),
(87, 'Melody Math', 'teaching', 'Melody Roma', '6754 Tibag, Baliuag, Bulacan', 'melodyroma@gmail.com', '0976854663', 'female', 'Melody Math', 'MelodyMath', 'https://teodoro-regore.000webhostapp.com/uploads/62b01c4b014f37.46185347.jpeg', '7', 'Mariano', '2022-2023', '2022-06-20 06:21:45'),
(91, NULL, 'head', 'Myrisa I. Balondo, EdD', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png', NULL, NULL, '2022-2023', '2022-06-24 01:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `studentLRN` varchar(100) NOT NULL,
  `studentGrade` varchar(100) NOT NULL,
  `studentSection` varchar(100) NOT NULL,
  `studentSchoolYear` varchar(100) NOT NULL,
  `gradeQuarter` varchar(100) NOT NULL,
  `gradeFilipino` varchar(100) DEFAULT NULL,
  `gradeEnglish` varchar(100) DEFAULT NULL,
  `gradeMath` varchar(100) DEFAULT NULL,
  `gradeScience` varchar(100) DEFAULT NULL,
  `gradeAP` varchar(100) DEFAULT NULL,
  `gradeEsP` varchar(100) DEFAULT NULL,
  `gradeTLE` varchar(100) DEFAULT NULL,
  `gradeMapeh` varchar(100) DEFAULT NULL,
  `gradeMusic` varchar(100) DEFAULT NULL,
  `gradeArt` varchar(100) DEFAULT NULL,
  `gradePE` varchar(100) DEFAULT NULL,
  `gradeHealth` varchar(100) DEFAULT NULL,
  `gradeFinal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`id`, `iid`, `studentLRN`, `studentGrade`, `studentSection`, `studentSchoolYear`, `gradeQuarter`, `gradeFilipino`, `gradeEnglish`, `gradeMath`, `gradeScience`, `gradeAP`, `gradeEsP`, `gradeTLE`, `gradeMapeh`, `gradeMusic`, `gradeArt`, `gradePE`, `gradeHealth`, `gradeFinal`) VALUES
(176, 192, '104746120154', '7', 'Mabini', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 192, '104746120154', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 192, '104746120154', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 192, '104746120154', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 193, '104746120164', '7', 'Gold', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 193, '104746120164', '7', 'Gold', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 193, '104746120164', '7', 'Gold', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 193, '104746120164', '7', 'Gold', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 194, '104746120165', '7', 'Gold', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 194, '104746120165', '7', 'Gold', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 194, '104746120165', '7', 'Gold', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 194, '104746120165', '7', 'Gold', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 195, '104746120155', '7', 'Mabini', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 195, '104746120155', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 195, '104746120155', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 195, '104746120155', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 196, '104746120156', '7', 'Mabini', '2022-2023', '1', '75', '87', '98', '90', '76', '74', '89', '84.25', '70', '90', '89', '88', '84.15625'),
(193, 196, '104746120156', '7', 'Mabini', '2022-2023', '2', '76', '90', '78', '81', '82', '92', '84', '83.75', '85', '82', '87', '81', '83.34375'),
(194, 196, '104746120156', '7', 'Mabini', '2022-2023', '3', '82', '85', '83', '88', '78', '98', '90', '81.75', '76', '87', '81', '83', '85.71875'),
(195, 196, '104746120156', '7', 'Mabini', '2022-2023', '4', '88', '89', '81', '81', '82', '81', '84', '81.75', '88', '87', '75', '77', '83.46875'),
(196, 197, '104746120157', '7', 'Mabini', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 197, '104746120157', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 197, '104746120157', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 197, '104746120157', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 198, '104746120158', '7', 'Mabini', '2022-2023', '1', '89', '89', '92', '81', '79', '83', '81', '80.5', '75', '84', '82', '81', '84.3125'),
(201, 198, '104746120158', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 198, '104746120158', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 198, '104746120158', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 199, '104746120159', '7', 'Mabini', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 199, '104746120159', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 199, '104746120159', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 199, '104746120159', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 200, '104746120160', '7', 'Mabini', '2022-2023', '1', '75', '74', '88', '78', '90', '77', '84', '80.25', '86', '72', '77', '86', '80.78125'),
(209, 200, '104746120160', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 200, '104746120160', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 200, '104746120160', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 201, '104746120161', '7', 'Mabini', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 201, '104746120161', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 201, '104746120161', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 201, '104746120161', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 202, '104746120162', '7', 'Mabini', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 202, '104746120162', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 202, '104746120162', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 202, '104746120162', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 203, '104746120163', '7', 'Mabini', '2022-2023', '1', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75'),
(221, 203, '104746120163', '7', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 203, '104746120163', '7', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 203, '104746120163', '7', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 204, '104746120175', '7', 'Mariano', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 204, '104746120175', '7', 'Mariano', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 204, '104746120175', '7', 'Mariano', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 204, '104746120175', '7', 'Mariano', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 205, '104746120176', '7', 'Mariano', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 205, '104746120176', '7', 'Mariano', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 205, '104746120176', '7', 'Mariano', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 205, '104746120176', '7', 'Mariano', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 206, '104746120177', '7', 'Mariano', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 206, '104746120177', '7', 'Mariano', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 206, '104746120177', '7', 'Mariano', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, 206, '104746120177', '7', 'Mariano', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 208, '104746120178', '7', 'Mariano', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 208, '104746120178', '7', 'Mariano', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 208, '104746120178', '7', 'Mariano', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 208, '104746120178', '7', 'Mariano', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 209, '104746120179', '7', 'Mariano', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 209, '104746120179', '7', 'Mariano', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 209, '104746120179', '7', 'Mariano', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 209, '104746120179', '7', 'Mariano', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 210, '104746120179', '8', 'Mariano', '2023-2024', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 210, '104746120179', '8', 'Mariano', '2023-2024', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 210, '104746120179', '8', 'Mariano', '2023-2024', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 210, '104746120179', '8', 'Mariano', '2023-2024', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 211, '104746120180', '7', 'Mariano', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 211, '104746120180', '7', 'Mariano', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 211, '104746120180', '7', 'Mariano', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 211, '104746120180', '7', 'Mariano', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 212, '104746120180', '8', 'Mariano', '2023-2024', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 212, '104746120180', '8', 'Mariano', '2023-2024', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 212, '104746120180', '8', 'Mariano', '2023-2024', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 212, '104746120180', '8', 'Mariano', '2023-2024', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(296, 222, '104746120300', '7', 'Gold', '2022-2023', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(297, 222, '104746120300', '7', 'Gold', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(298, 222, '104746120300', '7', 'Gold', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(299, 222, '104746120300', '7', 'Gold', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, 224, '104746120156', '8', 'Mabini', '2022-2023', '1', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75', '75'),
(305, 224, '104746120156', '8', 'Mabini', '2022-2023', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 224, '104746120156', '8', 'Mabini', '2022-2023', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 224, '104746120156', '8', 'Mabini', '2022-2023', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `studentLRN` varchar(100) NOT NULL,
  `studentFName` varchar(100) NOT NULL,
  `studentLName` varchar(100) NOT NULL,
  `studentMName` varchar(100) NOT NULL,
  `studentSuffix` varchar(100) NOT NULL,
  `studentGender` varchar(100) NOT NULL,
  `studentAge` varchar(100) NOT NULL,
  `studentBirthplace` varchar(100) NOT NULL,
  `studentBirthday` varchar(100) NOT NULL,
  `studentReligion` varchar(100) NOT NULL,
  `studentEthnicGroup` varchar(100) NOT NULL,
  `studentMotherTongue` varchar(100) NOT NULL,
  `studentNationality` varchar(100) NOT NULL,
  `studentHouseNo` varchar(100) NOT NULL,
  `studentBrgy` varchar(100) NOT NULL,
  `studentCity` varchar(100) NOT NULL,
  `studentProvince` varchar(100) NOT NULL,
  `motherFName` varchar(100) NOT NULL,
  `motherLName` varchar(100) NOT NULL,
  `motherMName` varchar(100) NOT NULL,
  `fatherFName` varchar(100) NOT NULL,
  `fatherLName` varchar(100) NOT NULL,
  `fatherMName` varchar(100) NOT NULL,
  `guardianName` varchar(100) NOT NULL,
  `guardianRelationship` varchar(100) NOT NULL,
  `guardianContactNo` varchar(100) NOT NULL,
  `studentGrade` varchar(100) NOT NULL,
  `studentSection` varchar(100) NOT NULL,
  `studentSchoolYear` varchar(100) NOT NULL,
  `firstDoseBrand` varchar(100) NOT NULL,
  `firstDoseDate` varchar(100) NOT NULL,
  `secondDoseBrand` varchar(100) NOT NULL,
  `secondDoseDate` varchar(100) NOT NULL,
  `boosterBrand` varchar(100) NOT NULL,
  `boosterDate` varchar(100) NOT NULL,
  `booster2Brand` varchar(100) NOT NULL,
  `booster2Date` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `studentRemarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `studentLRN`, `studentFName`, `studentLName`, `studentMName`, `studentSuffix`, `studentGender`, `studentAge`, `studentBirthplace`, `studentBirthday`, `studentReligion`, `studentEthnicGroup`, `studentMotherTongue`, `studentNationality`, `studentHouseNo`, `studentBrgy`, `studentCity`, `studentProvince`, `motherFName`, `motherLName`, `motherMName`, `fatherFName`, `fatherLName`, `fatherMName`, `guardianName`, `guardianRelationship`, `guardianContactNo`, `studentGrade`, `studentSection`, `studentSchoolYear`, `firstDoseBrand`, `firstDoseDate`, `secondDoseBrand`, `secondDoseDate`, `boosterBrand`, `boosterDate`, `booster2Brand`, `booster2Date`, `created_at`, `studentRemarks`) VALUES
(192, '104746120154', 'Marjhorie', 'Velasquez', 'Sanchez', '', 'female', '13', 'Malolos, Bulacan', '09/24/2009', 'Catholic', '', 'Tagalog', 'Filipino', '9876', 'Poblacion', 'Baliuag', 'Bulacan', 'Emelda', 'Velasquez', 'Sanchez', 'Ferdinand', 'Velasquez', 'Reyes', 'Emelda Sanchez Velasquez', 'Mother', '09225456767', '7', 'Mabini', '2022-2023', 'Pfizer', '01/20/2022', 'Pfizer', '03/20/2022', '1 booster', '1 booster date', '2 booster', '2 booster date', '2022-06-20 09:55:43', ''),
(193, '104746120164', 'Arjay', 'Santos', 'Cruz', 'Jr.', 'male', '13', 'Bustos Bulacan', '01/02/2009', 'Catholic', '', 'Tagalog', 'Filipino', '002', '123', 'Baliwag', 'Bulacan', 'Amelia', 'Santos', 'Cruz', 'Armando', 'Santos', 'Jose', '', '', '', '7', 'Gold', '2022-2023', 'Pfizer', '02/03/2022', 'Pfizer', '02/17/2022', 'Moderna', '05/16/2022', '', '', '2022-06-20 10:03:36', ''),
(194, '104746120165', 'Alvin', 'Cruz', 'Marcial', '', 'male', '13', 'Baliwag Bulacan', '09/06/2009', 'INC', '', '', 'Filipino', '002', '134', 'Baliwag', 'Bulacan', 'Luisa', 'Marcial', 'Cruz', 'Antonio', 'Marcial', 'Santos', '', '', '', '7', 'Gold', '2022-2023', '', '', '', '', '', '', '', '', '2022-06-20 10:08:49', ''),
(195, '104746120155', 'Ellaine', 'Reyes', 'Cruz', '', 'female', '13', 'Baliuag, Bulacan', '08/07/2009', 'Catholic', '', 'Tagalog', 'Filipino', '0356', 'Tarcan', 'Baliuag', 'Bulacan', 'Emelita', 'Reyes', 'Cruz', 'Ronaldo', 'Reyes', 'Santos', 'Emelita Reyes', 'Mother', '09347674822', '7', 'Mabini', '2022-2023', 'Pfizer', '02/02/2022', 'Pfizer', '04/02/2022', '', '', '', '', '2022-06-20 10:12:24', ''),
(196, '104746120156', 'Gizelle', 'Cabrera', 'Sarmiento', '', 'female', '13', 'Pulilan, Bulacan', '02/05/2009', 'Born Again', '', 'Tagalog', 'Filipino', '7685', 'Tibag', 'Baliuag', 'Bulacan', 'Catherine', 'Cabrera', 'Co', 'Ernesto', 'Cabrera', 'Lim', 'Catherine Cabrera', 'Mother', '09743889654', '7', 'Mabini', '2022-2023', 'Sinovac', '01/31/2022', 'Sinovac', '03/13/2022', '', '', '', '', '2022-06-20 10:18:21', ''),
(197, '104746120157', 'Danica', 'Tayum', 'Reodique', '', 'female', '13', 'Baliuag, Bulacan', '03/09/2009', 'INC', '', 'Tagalog', 'Filipino', '7699', 'Pinagbarilan', 'Baliuag', 'Bulacan', 'Kitty', 'Tayum', 'Pelayo', 'Tatum', 'Tayum', 'West', 'Kitty Tayum', 'Mother', '093876324567', '7', 'Mabini', '2022-2023', 'Sinovac', '01/03/2022', 'Sinovac', '03/02/2022', '', '', '', '', '2022-06-20 10:32:23', ''),
(198, '104746120158', 'Harlene', 'Dusaran', 'Gonzales', '', 'female', '13', 'Manila', '08/02/2009', 'Catholic', '', 'Tagalog', 'Filipino', '3959', 'Makinabang', 'Baliuag', 'Bulacan', 'Elma', 'Dusaran', 'Gonzales', 'Ramon', 'Dusaran', 'Ramones', 'Ramon Ramones', 'Father', '09264287654', '7', 'Mabini', '2022-2023', 'Pfizer', '02/02/2022', 'Pfizer', '03/04/2022', '', '', '', '', '2022-06-20 10:36:07', ''),
(199, '104746120159', 'Patrick', 'Placido', 'Erivera', '', 'male', '13', 'Leyte', '02/03/2009', 'INC', '', 'Tagalog', 'Filipino', '0294', 'Poblacion', 'Baliuag', 'Bulacan', 'Renelyn', 'Placido', 'Erivera', 'Romulo', 'Placido', 'Fajardo', 'Renelyn Placido', 'Mother', '09765432178', '7', 'Mabini', '2022-2023', 'Pfizer', '01/02/2022', 'Pfizer', '02/02/2022', '', '', '', '', '2022-06-20 10:39:57', ''),
(200, '104746120160', 'Reimar', 'Decipolo', 'Dayao', '', 'male', '13', 'Tagaytay', '02/01/2009', 'Catholic', '', 'Tagalog', 'Filipino', '2497', 'Tibag', 'Baliuag', 'Bulacan', 'Wendy', 'Decipolo', 'Dayao', 'Wendel', 'Decipolo', 'Ford', 'Wendy Decipolo', 'Mother', '09763876543', '7', 'Mabini', '2022-2023', 'Sinovac', '02/09/2022', 'Sinovac', '03/09/2022', '', '', '', '', '2022-06-20 10:48:28', ''),
(201, '104746120161', 'Joshua', 'Ramos', 'Viquiera', '', 'male', '13', 'Quezon City', '08/09/2009', 'Catholic', '', 'Tagalog', 'Filipino', '1324', 'Tibag', 'Baliuag', 'Bulacan', 'Princess', 'Ramos', 'Viquiera', 'Prince', 'Ramos', 'Cruz', 'Princess Ramos', 'Mother', '09765487654', '7', 'Mabini', '2022-2023', 'Sinovac', '02/01/2022', 'Sinovac', '03/05/2022', '', '', '', '', '2022-06-20 10:52:00', ''),
(202, '104746120162', 'Jerome', 'Pangilinan', 'Lajom', '', 'male', '13', 'Antipolo City', '08/04/2009', 'INC', '', 'Tagalog', 'Filipino', '9348', 'VDF', 'Baliuag', 'Bulacan', 'Emely', 'Pangilinan', 'Lajom', 'Enrie', 'Pangilinan', 'Santos', 'Emely Pangilinan', 'Mother', '09125467876', '7', 'Mabini', '2022-2023', 'Pfizer', '01/05/2022', 'Pfizer', '02/10/2022', '', '', '', '', '2022-06-20 10:55:25', ''),
(203, '104746120163', 'Romel', 'Mendoza', 'Robles', '', 'male', '13', 'Pasig City', '02/07/2009', 'Catholic', '', 'Tagalog', 'Filipino', '2448', 'Tarcan', 'Baliuag', 'Bulacan', 'Melanie', 'Mendoza', 'Robles', 'Ferdie', 'Mendoza', 'Serte', 'Melanie Mendoza', 'Mother', '09376254683', '7', 'Mabini', '2022-2023', 'Pfizer', '02/03/2022', 'Pfizer', '03/23/2022', '', '', '', '', '2022-06-20 10:58:48', ''),
(204, '104746120175', 'Clarence', 'Bondoc', 'Macalino', '', 'male', '13', 'Taguig City', '10/23/2009', 'INC', '', 'Tagalog', 'Filipino', '3628', 'Sulivan', 'Baliuag', 'Bulacan', 'Elizabeth', 'Bondoc', 'Macalino', 'Eliazar', 'Bondoc', 'Cruz', 'Elizabeth Bondoc', 'Mother', '09546543217', '7', 'Mariano', '2022-2023', 'Pfizer', '01/02/2022', 'Pfizer', '03/04/2022', '', '', '', '', '2022-06-20 13:10:37', ''),
(205, '104746120176', 'Eugene', 'Torres', 'Venegas', 'Jr.', 'male', '13', 'Cabanatuan City', '09/08/2009', 'Catholic', '', 'Tagalog', 'Filipino', '2864', 'Tiaong', 'Baliuag', 'Bulacan', 'Elenita', 'Torres', 'Venegas', 'Elmo', 'Torres', 'Supan', 'Elenita Torres', 'Mother', '09876543218', '7', 'Mariano', '2022-2023', 'Sinovac', '01/02/2022', 'Sinovac', '02/05/2022', '', '', '', '', '2022-06-20 13:13:41', ''),
(206, '104746120177', 'John Paul', 'Alvarez', 'Cepillo', '', 'male', '13', 'Baliuag, Bulacan', '02/03/2009', 'Catholic', '', 'Tagalog', 'Filipino', '2754', 'Sta Barbara', 'Baliuag', 'Bulacan', 'Cely', 'Alvarez', 'Cepillo', 'Ranie', 'Alvarez', 'Dantes', 'Cely Alvarez', 'Mother', '09876768765', '7', 'Mariano', '2022-2023', 'Pfizer', '03/03/2022', 'Pfizer', '04/03/2022', '', '', '', '', '2022-06-20 13:17:33', ''),
(208, '104746120178', 'Lourenz', 'Alcoreza', 'Daracan', '', 'male', '13', 'San Juan City', '09/04/2009', 'INC', '', 'Tagalog', 'Filipino', '3462', 'Tiaong', 'Baliuag', 'Bulacan', 'May', 'Alcoreza', 'Daracan', 'Elinald', 'Alcoreza', 'Ponce', 'May Alcoreza', 'Mother', '09875654765', '7', 'Mariano', '2022-2023', 'Sinovac', '03/13/2022', 'Sinovac', '04/13/2022', '', '', '', '', '2022-06-20 13:26:29', ''),
(209, '104746120179', 'Rex', 'Salac', 'Totanes', '', 'male', '13', 'Malabon City', '09/05/2009', 'Catholic', '', 'Tagalog', 'Filipino', '2478', 'Tibag', 'Baliuag', 'Bulacan', 'Lenie', 'Salac', 'Totanes', 'Gary', 'Salac', 'Mandan', 'Leniw Salac', 'Mother', '09876765432', '7', 'Mariano', '2022-2023', 'Pfizer', '02/09/2022', 'Pfizer', '03/08/2022', '', '', '', '', '2022-06-20 13:30:18', ''),
(210, '104746120179', 'Rex', 'Salac', 'Totanes', '', 'male', '13', 'Malabon City', '09/05/2009', 'Catholic', '', 'Tagalog', 'Filipino', '2478', 'Tibag', 'Baliuag', 'Bulacan', 'Lenie', 'Salac', 'Totanes', 'Gary', 'Salac', 'Mandan', 'Leniw Salac', 'Mother', '09876765432', '8', 'Mariano', '2023-2024', 'Pfizer', '02/09/2022', 'Pfizer', '03/08/2022', '', '', '', '', '2022-06-20 13:49:58', ''),
(211, '104746120180', 'Ehlaine', 'Valderama', 'Ventura', '', 'female', '13', 'Taguig City', '09/07/2009', 'Catholic', '', 'Tagalog', 'Filipino', '0981', 'Tibag', 'Baliuag', 'Bulacan', 'Elen', 'Valderama', 'Ventura', 'Ernie', 'Valderama', 'Sanchez', 'Elen Valderama', 'Mother', '09787654342', '7', 'Mariano', '2022-2023', 'Pfizer', '01/03/2022', 'Pfizer', '02/04/2022', '', '', '', '', '2022-06-20 14:15:34', ''),
(212, '104746120180', 'Ehlaine', 'Valderama', 'Ventura', '', 'female', '13', 'Taguig City', '09/07/2009', 'Catholic', '', 'Tagalog', 'Filipino', '0981', 'Tibag', 'Baliuag', 'Bulacan', 'Elen', 'Valderama', 'Ventura', 'Ernie', 'Valderama', 'Sanchez', 'Elen Valderama', 'Mother', '09787654342', '8', 'Mariano', '2023-2024', 'Pfizer', '01/03/2022', 'Pfizer', '02/04/2022', '', '', '', '', '2022-06-20 14:16:47', ''),
(222, '104746120300', 'Romnick', 'Casimiro', 'Sarmiento', '', 'male', '13', 'Baliuag, Bulacan', '09/09/2009', 'INC', 'Hiligaynon', 'Tagalog', 'Filipino', 'Mabini', 'Tarcan', 'Baliuag', 'Bulacan', 'Kitty', 'Casimiro', 'Pelayo', 'Ernesto', 'Casimiro', 'West', 'Kitty Casimiro', 'Mother', '093876324567', '7', 'Gold', '2022-2023', 'Pfizer', '02/02/2022', 'Pfizer', '02/02/2022', 'Pfizer', '02/02/2022', 'Pfizer', '02/02/2022', '2022-06-23 11:17:25', ''),
(224, '104746120156', 'Gizelle', 'Cabrera', 'Sarmiento', '', 'female', '13', 'Pulilan, Bulacan', '02/05/2009', 'Born Again', '', 'Tagalog', 'Filipino', '7685', 'Tibag', 'Baliuag', 'Bulacan', 'Catherine', 'Cabrera', 'Co', 'Ernesto', 'Cabrera', 'Lim', 'Catherine Cabrera', 'Mother', '09743889654', '8', 'Mabini', '2022-2023', 'Sinovac', '01/31/2022', 'Sinovac', '03/13/2022', '', '', '', '', '2022-06-24 08:50:33', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book_data`
--
ALTER TABLE `tbl_book_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tbl_book_data`
--
ALTER TABLE `tbl_book_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
