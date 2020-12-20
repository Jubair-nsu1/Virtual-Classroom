-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 06:19 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `fid` varchar(25) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `fid`, `username`, `password`) VALUES
(1, 'Faculty1', 'admin01', 'admin', '1111'),
(2, 'Faculty2', 'admin02', 'admin2', '2222'),
(4, 'Zafor', NULL, 'Zf1', 'asdzxc'),
(5, 'Rahim', NULL, 'rahim77', 'qweasd'),
(6, 'Rahim', NULL, 'rhm1', 'zxc'),
(7, 'jikd', NULL, 'jik1', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `fid` varchar(30) DEFAULT NULL,
  `class_code` varchar(30) DEFAULT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `fid`, `class_code`, `qid`, `ansid`) VALUES
(15, NULL, NULL, '5f6b6e230a29c', '5f6b6e230a89f'),
(16, NULL, NULL, '5f6b6e230cd08', '5f6b6e230d5a3'),
(17, NULL, NULL, '5f6b6e230f7f9', '5f6b6e230ff53'),
(18, NULL, NULL, '5f71f098c6521', '5f71f098caffd'),
(19, NULL, NULL, '5f71f098d4be1', '5f71f098d567f'),
(20, NULL, NULL, '5f71f098d7e17', '5f71f098d8587');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `section` int(5) NOT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `fid` varchar(25) NOT NULL,
  `class_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `section`, `subject`, `fid`, `class_code`) VALUES
(13, 'phy107.zbm', 23, 'physics1', 'admin', 'eSDBznL1'),
(15, 'Maths Test-1', 23, 'arabic', 'admin2', 'lm1aIFqN'),
(17, 'Maths Test-2', 31, 'maths', 'admin', '4z3kZsun');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Date/Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `fid` varchar(30) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `fid`, `class_code`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(5, NULL, NULL, 'jubair421', '5f6b6db27c831', 4, 3, 2, 1, '2020-09-23 16:31:08', 1600878621, 'finished', 'true'),
(6, NULL, NULL, 'jubair421', '5f71f0420ba82', 2, 3, 2, 1, '2020-09-28 14:18:57', 1601302706, 'finished', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `fid` varchar(30) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `fid`, `class_code`, `qid`, `option`, `optionid`) VALUES
(57, NULL, NULL, '5f6b6e230a29c', '2', '5f6b6e230a899'),
(58, NULL, NULL, '5f6b6e230a29c', '6', '5f6b6e230a89d'),
(59, NULL, NULL, '5f6b6e230a29c', '11', '5f6b6e230a89e'),
(60, NULL, NULL, '5f6b6e230a29c', '9', '5f6b6e230a89f'),
(61, NULL, NULL, '5f6b6e230cd08', '20', '5f6b6e230d59e'),
(62, NULL, NULL, '5f6b6e230cd08', '35', '5f6b6e230d5a2'),
(63, NULL, NULL, '5f6b6e230cd08', '16', '5f6b6e230d5a3'),
(64, NULL, NULL, '5f6b6e230cd08', '26', '5f6b6e230d5a4'),
(65, NULL, NULL, '5f6b6e230f7f9', '4', '5f6b6e230ff4d'),
(66, NULL, NULL, '5f6b6e230f7f9', '10', '5f6b6e230ff53'),
(67, NULL, NULL, '5f6b6e230f7f9', '9', '5f6b6e230ff54'),
(68, NULL, NULL, '5f6b6e230f7f9', '15', '5f6b6e230ff55'),
(69, NULL, NULL, '5f71f098c6521', '10', '5f71f098caff6'),
(70, NULL, NULL, '5f71f098c6521', '20', '5f71f098caffc'),
(71, NULL, NULL, '5f71f098c6521', '30', '5f71f098caffd'),
(72, NULL, NULL, '5f71f098c6521', '40', '5f71f098caffe'),
(73, NULL, NULL, '5f71f098d4be1', '20', '5f71f098d5678'),
(74, NULL, NULL, '5f71f098d4be1', '30', '5f71f098d567d'),
(75, NULL, NULL, '5f71f098d4be1', '40', '5f71f098d567e'),
(76, NULL, NULL, '5f71f098d4be1', '50', '5f71f098d567f'),
(77, NULL, NULL, '5f71f098d7e17', '15', '5f71f098d8583'),
(78, NULL, NULL, '5f71f098d7e17', '25', '5f71f098d8587'),
(79, NULL, NULL, '5f71f098d7e17', '35', '5f71f098d8588'),
(80, NULL, NULL, '5f71f098d7e17', '40', '5f71f098d8589');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `fid` varchar(30) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `fid`, `class_code`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(15, NULL, NULL, '5f6b6db27c831', '5f6b6e230a29c', '4+5=?', 4, 1),
(16, NULL, NULL, '5f6b6db27c831', '5f6b6e230cd08', '2*8=?', 4, 2),
(17, NULL, NULL, '5f6b6db27c831', '5f6b6e230f7f9', '30/3=?', 4, 3),
(18, NULL, NULL, '5f71f0420ba82', '5f71f098c6521', '10+20=?', 4, 1),
(19, NULL, NULL, '5f71f0420ba82', '5f71f098d4be1', '5*10=?', 4, 2),
(20, NULL, NULL, '5f71f0420ba82', '5f71f098d7e17', '100/4=?', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `username`, `class_code`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(6, '5f6b6db27c831', 'admin', NULL, 'Maths Test-1', 2, 0, 3, 4, '2020-11-30 05:21:33', 'disabled'),
(7, '5f71f0420ba82', 'admin', NULL, 'Maths Test-2', 1, 0, 3, 3, '2020-11-30 05:21:41', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `fid` varchar(30) DEFAULT NULL,
  `class_code` varchar(30) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `fid`, `class_code`, `username`, `score`, `time`) VALUES
(4, NULL, NULL, 'jubair421', 6, '2020-09-28 14:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `password`) VALUES
(10, 'Adnan', '', 'CSE', '', 'adnan365', 17623923922, '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Jubair', '', 'CSE', '', 'jubair421', 1675938122, '46f94c8de14fb36680850768ff1b7f2a'),
(11, 'Ratul', '', '', '', 'ratul111', 1711083188, 'qwe123');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fid` varchar(30) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`, `fid`, `class_code`) VALUES
(19, '5f6b6e230a29c', '5f6b6e230a89f', '5f6b6e230a89f', '5f6b6db27c831', 'jubair421', NULL, NULL),
(20, '5f6b6e230cd08', '5f6b6e230d5a3', '5f6b6e230d5a3', '5f6b6db27c831', 'jubair421', NULL, NULL),
(21, '5f6b6e230f7f9', '5f6b6e230ff4d', '5f6b6e230ff53', '5f6b6db27c831', 'jubair421', NULL, NULL),
(22, '5f71f098c6521', '5f71f098caffd', '5f71f098caffd', '5f71f0420ba82', 'jubair421', NULL, NULL),
(23, '5f71f098d4be1', '5f71f098d567f', '5f71f098d567f', '5f71f0420ba82', 'jubair421', NULL, NULL),
(24, '5f71f098d7e17', '5f71f098d8588', '5f71f098d8587', '5f71f0420ba82', 'jubair421', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
