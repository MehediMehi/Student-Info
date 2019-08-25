-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 01:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databse_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` varchar(15) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `prerequesite` varchar(10) DEFAULT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `credit` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `title`, `prerequesite`, `dept_name`, `credit`) VALUES
('CSE 100', 'Software Development I', 'CSE 101', 'CSE', '0.75'),
('CSE 102', 'Computer and Programming Concepts Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 103', 'Discrete Mathematics', 'CSE 101', 'CSE', '3.00'),
('CSE 111', 'Structured Programming Language', 'CSE 101', 'CSE', '3.00'),
('CSE 112', 'Structured Programming Language Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 121', 'Object Oriented Programming Language', 'CSE 111', 'CSE', '3.00'),
('CSE 122', 'Object Oriented Programming Language Lab', 'CSE 111', 'CSE', '1.50'),
('CSE 205', 'Digital Logic Design', 'CSE 231', 'CSE', '3.00'),
('CSE 206', 'Digital Logic Design Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 207', 'Database System', 'CSE 101', 'CSE', '3.00'),
('CSE 208', 'Database Lab', 'CSE 102', 'CSE', '3.00'),
('CSE 213', 'Theory of Computing & Automata Theory', 'CSE 103', 'CSE', '3.00'),
('CSE 231', 'Data Stracture', 'CSE 121', 'CSE', '3.00'),
('CSE 232', 'Data Stracture Lab', 'CSE 121', 'CSE', '1.50'),
('CSE 241', 'Algorithms', 'CSE 231', 'CSE', '3.00'),
('CSE 242', 'Algorithms Lab', 'CSE 231', 'CSE', '1.50'),
('CSE 309', 'Operating System', 'CSE 101', 'CSE', '3.00'),
('CSE 317', 'System Analysis and Design', 'CSE 207', 'CSE', '3.00'),
('CSE 318', 'System Analysis and Design Lab', 'CSE 207', 'CSE', '1.50'),
('CSE 324', 'Compiler Design Lab', 'CSE 213', 'CSE', '0.75'),
('CSE 331', 'Advanced Programming', 'CSE 121', 'CSE', '3.00'),
('CSE 332', 'Advanced Programming Lab', 'CSE 121', 'CSE', '1.50'),
('CSE 439', 'Wireless Networking', 'CSE 101', 'CSE', '3.00'),
('CSE 440', 'Wireless Networking Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 443', 'Delay Tollerant Network', 'CSE 101', 'CSE', '3.00'),
('CSE 444', 'Delay Tollerent Network Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 445', 'Introduction to Cryptrography', 'CSE 101', 'CSE', '3.00'),
('CSE 446', 'Introduction to Cryptrography Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 448', 'Mobile Communication Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 449', 'Network Administration', 'CSE 101', 'CSE', '3.00'),
('CSE 450', 'Network Administration Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 451', 'Software Project Management', 'CSE 101', 'CSE', '3.00'),
('CSE 480', 'VLSI Design Lab', 'CSE 101', 'CSE', '1.50'),
('CSE 493', 'Digital System Design', 'CSE 101', 'CSE', '3.00'),
('CSE 494', 'Digital System Design Lab', 'CSE 101', 'CSE', '1.50'),
('EEE 101', 'Electrical Technology', 'CSE 101', 'CSE', '3.00'),
('EEE 102', 'Electrical Technology Lab', 'CSE 101', 'CSE', '1.50'),
('EEE 211', 'Electronic Devices and Circuits', 'EEE 101', 'CSE', '3.00'),
('EEE 212', 'Electronic Devices and Circuits Lab', 'EEE 101', 'CSE', '1.50'),
('ENG 101', 'English Language - I', 'CSE 101', 'CSE', '3.00'),
('ENG 111', 'English Language - II', 'ENG 101', 'CSE', '3.00'),
('MAT 101', 'Differential and Integral Calculus', 'CSE 101', 'CSE', '3.00'),
('MAT 111', 'Co-Ordinate Geometry and Vector Calculus', 'MAT 101', 'CSE', '3.00'),
('MAT 121', 'Linear Algebra and Differential Equations', 'MAT 111', 'CSE', '3.00'),
('MAT 231', 'Complex Variable and Furier Analysis', 'MAT 121', 'CSE', '3.00'),
('PHY 101', 'Physics', 'CSE 101', 'CSE', '3.00'),
('STA 231', 'Statastics', 'MAT 121', 'CSE', '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(50) NOT NULL,
  `campus` varchar(2) DEFAULT NULL,
  `floor` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `campus`, `floor`) VALUES
('BBA', '2', '2'),
('CSE', '1', '3'),
('EEE', '1', '4'),
('ENG', '1', '4'),
('MATH', '1', '5'),
('TEX', '01', '01');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `s_id` varchar(20) NOT NULL,
  `course_code` varchar(20) DEFAULT NULL,
  `grade_point` decimal(5,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `course_code` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time_slot` varchar(50) NOT NULL,
  `intake` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`course_code`, `year`, `semester`, `day`, `time_slot`, `intake`, `section`) VALUES
('CSE 207', '2016', 'Fall', 'Wednesday', '09:35 to 10:35', '29', '03'),
('CSE 208', '2016', 'Fall', 'Wednesday', '08:30 to 09:30', '29', '03');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) DEFAULT NULL,
  `s_id` varchar(20) NOT NULL,
  `intake` varchar(5) DEFAULT NULL,
  `section` varchar(5) DEFAULT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `s_id`, `intake`, `section`, `dept_name`, `email`) VALUES
('ARAFAT HOSSAIN KHAN', '14152103105', '29', '03', 'CSE', 'arafat@gmail.com'),
('Robin Mia', '14152103106', '29', '03', 'CSE', 'mia.robinhood.khalifa@gmail.co'),
('AKTARUL ISLAM', '14152103111', '29', '03', 'CSE', 'sasobujkhan@gmail.com'),
('S.M. AKASH', '14152103125', '29', '03', 'CSE', 'smakash.bubt@gmail.com'),
('MD. MOIN AKTER TANBIR', '14152103128', '29', '03', 'CSE', 'tanbirahmedtanbir@gmail.com'),
('SHAKIB KHAN', '14152103133', '29', '03', 'CSE', 'handofblood@gmail.com'),
('RAFIQUL ISLAM RAFI', '14152103138', '29', '03', 'CSE', 'rafi@gmail.com'),
('SUDIPTO ROY', '14152103139', '29', '03', 'CSE', 'sudipto@gmail.com'),
('MD. MEHEDI HASAN AKASH', '14152103140', '29', '03', 'CSE', 'mehaakmehi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `s_id` varchar(20) NOT NULL,
  `course_code` varchar(15) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `semester` varchar(20) NOT NULL,
  `year` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`s_id`, `course_code`, `STATUS`, `semester`, `year`) VALUES
('14152103140', 'CSE 207', 'Incomplete', 'Fall', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` varchar(10) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `salary` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `dept_name`, `designation`, `email`, `phone`, `salary`) VALUES
('ASAH', 'AHMED SHOEB AL HASAN', 'CSE', 'ASSISTANT PROFESSOR', 'shoeb@bubt.edu.bd', '01673019740', '12'),
('ATS', 'ATANU SHOME', 'CSE', 'LECTURER', 'atanu@bubt.edu.bd', '017', '580000'),
('DIL', 'DILRUBA RUBA', 'ENG', 'ASSISTANT PROFESSOR', 'dilruba@gmail.com', '0332', '59000'),
('KAB', 'KHABIRUL ISLAM', 'MATH', 'LECTURER', 'khabirul@bubt.edu.bd', '0232', '67000'),
('MMFR', 'M.M. FAZLE RABBI', 'CSE', 'LECTURER', 'rabbi@bubt.edu.bd', '019', '62000'),
('MRN', 'Mijanur Rahman Ripon', 'CSE', 'assistant professor', 'riponcse.it@bubt.edu.bd', '01814257484', '60000'),
('SIM', 'SAIFUL ISLAM MAHFUJ', 'CSE', 'ASSISTANT PROFESSOR', 'syfe@bubt.edu.bd', '01', '78000'),
('SMR', 'SHAMIM REZA SAJIB', 'CSE', 'LECTURER', 'sajib@gmail.com', NULL, '60000'),
('SS', 'SUMAN SAHA', 'CSE', 'LECTURER', 'suman@bubt.edu.bd', NULL, '60000'),
('TIA', 'TARIKUL ISLAM', 'MATH', 'ASSISTANT PROFESSOR', 'tarikul@bubt.edu.bd', '022', '56000');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `t_id` varchar(10) NOT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `intake` varchar(5) NOT NULL,
  `section` varchar(5) NOT NULL,
  `year` decimal(10,0) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`course_code`,`year`,`semester`,`day`,`time_slot`,`intake`,`section`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`s_id`,`semester`,`year`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`t_id`,`intake`,`section`,`year`,`semester`),
  ADD KEY `course_code` (`course_code`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`),
  ADD CONSTRAINT `teaches_ibfk_3` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
