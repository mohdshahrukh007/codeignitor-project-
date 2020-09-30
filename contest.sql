-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 10:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contest`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(200) NOT NULL,
  `attendance_date` varchar(200) NOT NULL,
  `student_id` int(200) NOT NULL,
  `attendance_status` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `attendance_date`, `student_id`, `attendance_status`, `grade`) VALUES
('kjhkjh', 'jkkjhkj', 0, 'Absent', 'hjkhkj'),
('hkjhk', 'jkhkj', 0, 'Absent', 'kjhkjhk'),
('jhgjhgh', 'hjgjhg', 0, 'Absent', 'jhghjg'),
('fd', 'hg', 0, 'Absent', 'sdf'),
('gf', 'gh', 0, 'Absent', 'sgfd'),
('shahrukh', 'jkhkj', 11, 'Absent', 'jkhjkhkj');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(200) NOT NULL,
  `teacher_rollno` varchar(2300) NOT NULL,
  `teacher_name` varchar(200) NOT NULL,
  `teacher_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
