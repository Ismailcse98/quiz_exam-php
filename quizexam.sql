-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 04:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'proali@gmail.com', 'proali123');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_list`
--

CREATE TABLE `chapter_list` (
  `id` int(11) NOT NULL,
  `chapter_name` varchar(100) NOT NULL,
  `mark` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter_list`
--

INSERT INTO `chapter_list` (`id`, `chapter_name`, `mark`, `time`) VALUES
(2, 'Windows 10', 30, 20),
(3, 'Microsoft Word', 30, 20),
(5, 'ICDL', 30, 20),
(6, 'Access', 30, 20),
(7, 'Powerpoint', 30, 20),
(8, 'Final Exam', 50, 35),
(9, 'Concepts of IT', 30, 20),
(10, 'Excel', 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `concepts_of_it`
--

CREATE TABLE `concepts_of_it` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concepts_of_it`
--

INSERT INTO `concepts_of_it` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'CD-ROM stands for', 'Compactable Read Only Memory', 'Compact Data Read Only Memory', 'Compactable Disk Read Only Memory', 'Compact Disk-Read Only Memory', 'Compact Disk-Read Only Memory'),
(2, '2+2=', '10', '5', '3', '8', '4'),
(3, 'Which is the part of computer?', 'Central processing unit (CPU)', 'Types of memory', 'All of above', 'None of Above', 'All of above'),
(4, 'IBM introduced the IBM PC in-', '1980', '1981', '1982', '1983', '1981'),
(5, 'Which is not a storage media?', 'CDs', 'DVDs', 'Hard Disks', 'Modem', 'Modem'),
(6, 'Which is not an Input device?', 'Keyboard', 'Mouse', 'Monitor', 'Tracker balls', 'Monitor'),
(7, 'Which is not an Output device?', 'Speech synthesizers', 'Printers', 'Projection devices', 'Microprocessor', 'Microprocessor'),
(8, 'Which is not Operating System (OS) Software?', 'Windows', 'Mac', 'Linux', 'Antivirus', 'Antivirus'),
(9, 'Which is not application software?', 'Word processing', 'UNIX', 'Databases', 'None of Above', 'UNIX'),
(10, 'What is the characteristic of Operating system software?', 'It works closely with hardware', 'It works closely with Client', 'It depends on application software', 'None of above', 'It works closely with hardware'),
(11, 'WLAN stands for-', 'Wireless Local Area Network', 'Wide Local Area Network', 'Worldwide Local Area Network', 'All of above', 'Wireless Local Area Network'),
(12, 'Characteristics of a broadband Internet connection-', 'Always on', 'Flat fee Payment', 'High speed access', 'All of above', 'All of above'),
(13, 'Which is Social networking websites?', 'www.facebook.com', 'www.prothom-alo.com', 'www.google.com', 'www.idb-bisew.org', 'www.facebook.com'),
(14, 'A new presentation can be created from', 'Blank Presentation', 'From Existing Presentation', 'High speed access', 'www.idb-bisew.org', 'All of above'),
(15, 'A new presentation can be created from', 'Blank Presentation', 'From Existing Presentation', 'High speed access', 'All of above', 'All of above');

-- --------------------------------------------------------

--
-- Table structure for table `final_exam`
--

CREATE TABLE `final_exam` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_exam`
--

INSERT INTO `final_exam` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, '2+2=', '4', '10', '3', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `icdl`
--

CREATE TABLE `icdl` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icdl`
--

INSERT INTO `icdl` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, '2+2=', '4', '5', '3', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ms_access_16`
--

CREATE TABLE `ms_access_16` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_access_16`
--

INSERT INTO `ms_access_16` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, '2+2=', '4', '10', '3', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ms_excel_16`
--

CREATE TABLE `ms_excel_16` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_excel_16`
--

INSERT INTO `ms_excel_16` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, '2+2=', '4', '10', '3', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ms_powerpoint_16`
--

CREATE TABLE `ms_powerpoint_16` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_powerpoint_16`
--

INSERT INTO `ms_powerpoint_16` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, 'A new presentation can be created from', 'Blank Presentation', 'From Existing Presentation', 'High speed access', 'All of above', 'All of above');

-- --------------------------------------------------------

--
-- Table structure for table `ms_word_16`
--

CREATE TABLE `ms_word_16` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_word_16`
--

INSERT INTO `ms_word_16` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, '2+2=', '4', '10', '3', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `exam_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `chapter` varchar(192) NOT NULL,
  `name` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `correct_ans` int(11) NOT NULL,
  `wrong_ans` int(11) NOT NULL,
  `total_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `exam_date`, `chapter`, `name`, `student_id`, `correct_ans`, `wrong_ans`, `total_mark`) VALUES
(7, '2021-07-04 03:58:30', 'concepts of it', 'ismail', 1264647, 1, 14, 2),
(9, '2021-07-04 06:02:10', 'concepts of it', 'ibrahim', 1264648, 1, 14, 2),
(10, '2021-07-04 06:08:51', 'concepts of it', 'ibrahim', 1264648, 10, 5, 20),
(11, '2021-07-04 08:20:38', 'Windows 10', 'ismail', 1264647, 0, 15, 0),
(12, '2021-07-04 08:50:57', 'Windows 10', 'ismail', 1264647, 0, 15, 0),
(13, '2021-07-27 04:59:19', 'concepts of it', 'ismail3', 1264647, 0, 15, 0),
(14, '2021-07-27 05:00:47', 'concepts of it', 'ismail3', 1264647, 1, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students_list`
--

CREATE TABLE `students_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `round_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_list`
--

INSERT INTO `students_list` (`id`, `name`, `email`, `student_id`, `round_no`) VALUES
(1, 'ismail3', 'ismail@gmail.com', 1264647, 48),
(2, 'ibrahim', 'ibrahim@gmail.com', 1264648, 48),
(3, 'idrish', 'idrish@gmail.com', 1264649, 48);

-- --------------------------------------------------------

--
-- Table structure for table `windows_10`
--

CREATE TABLE `windows_10` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(192) NOT NULL,
  `option2` varchar(192) NOT NULL,
  `option3` varchar(192) NOT NULL,
  `option4` varchar(192) NOT NULL,
  `answer` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `windows_10`
--

INSERT INTO `windows_10` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, '2+2=', '4', '5', '3', '15', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter_list`
--
ALTER TABLE `chapter_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concepts_of_it`
--
ALTER TABLE `concepts_of_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_exam`
--
ALTER TABLE `final_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icdl`
--
ALTER TABLE `icdl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_access_16`
--
ALTER TABLE `ms_access_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_excel_16`
--
ALTER TABLE `ms_excel_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_powerpoint_16`
--
ALTER TABLE `ms_powerpoint_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_word_16`
--
ALTER TABLE `ms_word_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_list`
--
ALTER TABLE `students_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `windows_10`
--
ALTER TABLE `windows_10`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chapter_list`
--
ALTER TABLE `chapter_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `concepts_of_it`
--
ALTER TABLE `concepts_of_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `final_exam`
--
ALTER TABLE `final_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `icdl`
--
ALTER TABLE `icdl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ms_access_16`
--
ALTER TABLE `ms_access_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ms_excel_16`
--
ALTER TABLE `ms_excel_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ms_powerpoint_16`
--
ALTER TABLE `ms_powerpoint_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ms_word_16`
--
ALTER TABLE `ms_word_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students_list`
--
ALTER TABLE `students_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `windows_10`
--
ALTER TABLE `windows_10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
