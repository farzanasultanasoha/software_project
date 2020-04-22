-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 06:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locklawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `serial_num` int(100) NOT NULL,
  `amount` int(100) DEFAULT NULL,
  `date1` time DEFAULT NULL,
  `client_id` int(100) DEFAULT NULL,
  `lawyer_id` int(11) DEFAULT NULL,
  `client_name` varchar(100) NOT NULL,
  `lawyer_name` varchar(100) NOT NULL,
  `memberOfLawyer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`serial_num`, `amount`, `date1`, `client_id`, `lawyer_id`, `client_name`, `lawyer_name`, `memberOfLawyer`) VALUES
(41, 100, '00:00:00', NULL, NULL, 'farzana', 'akbar', 'yes'),
(42, 100, '00:00:00', NULL, NULL, 'farzana', 'sayed', 'yes'),
(43, 100, '00:00:00', NULL, NULL, 'farzana', 'sadiq', 'yes'),
(44, 100, '00:00:00', NULL, NULL, 'tahan', 'sadiq', 'yes'),
(45, 100, '00:00:00', NULL, NULL, 'tahan', 'akbar', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_info`
--

CREATE TABLE `lawyer_info` (
  `name` varchar(100) DEFAULT NULL,
  `lawyer_id` int(50) NOT NULL,
  `expert` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `phone_no` int(50) DEFAULT NULL,
  `images` varbinary(2000) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price_per_session` int(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip_code` int(100) DEFAULT NULL,
  `price_total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer_info`
--

INSERT INTO `lawyer_info` (`name`, `lawyer_id`, `expert`, `username`, `email`, `quantity`, `phone_no`, `images`, `password`, `creation_date`, `price_per_session`, `age`, `country`, `city`, `zip_code`, `price_total`) VALUES
('sadiq', 213, 'criminal', 'sadiq', 'sa@gmail.com', 2, 9032, NULL, 'sa', '2020-04-21 17:03:34', NULL, NULL, NULL, NULL, NULL, 0),
('abu sayed', 676, 'criminal', 'sayed', 'abu@gmail.com', 5, 567658, 0x6c61776669726d2e6a7067, 'abul', '2020-04-21 16:32:05', 4, 50, 'england', 'london', 2222, 400),
('poly', 6766, 'criminal', 'poly', 'pol@gmail.com', 0, 567658, 0x6c61776669726d2e6a7067, 'love', '2020-04-13 17:17:44', 6, 40, 'england', 'london', 2222, 600),
('ilham', 8787, 'family', 'akbar', 'ilham@gmail.com', 5, 98687575, 0x63726d696e616c5f6c61777965722e6a7067, 'ill', '2020-04-21 17:04:57', 9, 30, 'england', 'kent', 989, 900);

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `message_id` int(50) NOT NULL,
  `client_id` int(100) DEFAULT NULL,
  `lawyer_id` int(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`message_id`, `client_id`, `lawyer_id`, `message`, `client_name`, `lawyer_name`, `post_time`, `message_type`) VALUES
(137, NULL, NULL, 'hi', 'farzana', 'sayed', '2020-04-09 15:46:26', 'l10'),
(138, NULL, NULL, 'bolo', 'farzana', 'sayed', '2020-04-09 15:48:00', 'c10'),
(139, NULL, NULL, 'how r u', 'farzana', 'sayed', '2020-04-09 15:48:28', 'c10'),
(140, NULL, NULL, 'I m fine', 'farzana', 'sayed', '2020-04-09 15:48:39', 'l10'),
(141, NULL, NULL, 'hi how r u', 'farzana', 'akbar', '2020-04-21 13:40:00', 'c10'),
(142, NULL, NULL, 'ohhhh ya I m good', 'farzana', 'akbar', '2020-04-21 13:40:08', 'l10');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `to_admin` varchar(100) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  `client_id` int(50) DEFAULT NULL,
  `lawyer_id` int(50) DEFAULT NULL,
  `client_name` varchar(100) NOT NULL,
  `lawyer_name` varchar(100) NOT NULL,
  `member_or_not` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `membership_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`to_admin`, `amount`, `client_id`, `lawyer_id`, `client_name`, `lawyer_name`, `member_or_not`, `id`, `membership_date`) VALUES
(NULL, 300, NULL, NULL, 'farzana', 'sayed', 'no', 12, '0000-00-00'),
(NULL, 300, NULL, NULL, 'farzana', 'sayed', 'yes', 13, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rates` int(50) DEFAULT NULL,
  `client_id` int(50) DEFAULT NULL,
  `lawyer_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `name` varchar(255) DEFAULT NULL,
  `client_id` int(50) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone_no` int(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip_code` int(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `member_or_not` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `client_id`, `username`, `email`, `password`, `creation_date`, `phone_no`, `country`, `city`, `zip_code`, `status`, `member_or_not`) VALUES
('tahan', 0, 'tahan', NULL, 'tanu', '2020-04-03 19:15:28', NULL, NULL, NULL, NULL, NULL, NULL),
('farzana1', 999, 'farzana', 'far@gmail.com', 'pol123', '2020-03-14 16:36:53', 1777660829, 'england', 'london', 1234, 'student', 'yes'),
('rashed', 837429, 'sumon', 'ras@gmail.com', 'ras', '2020-04-07 19:30:00', 2147483647, 'england', 'london', 3939, 'businessman', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_mailbox`
--

CREATE TABLE `user_mailbox` (
  `id` int(20) NOT NULL,
  `user` varchar(255) NOT NULL,
  `mailbox` varchar(15) NOT NULL,
  `message_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`serial_num`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `fkapp` (`lawyer_id`);

--
-- Indexes for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  ADD PRIMARY KEY (`lawyer_id`),
  ADD UNIQUE KEY `lawyer_id` (`lawyer_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `client_id` (`client_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_mailbox`
--
ALTER TABLE `user_mailbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `serial_num` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `message_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_mailbox`
--
ALTER TABLE `user_mailbox`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user_info` (`client_id`),
  ADD CONSTRAINT `fkapp` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`lawyer_id`);

--
-- Constraints for table `messaging`
--
ALTER TABLE `messaging`
  ADD CONSTRAINT `messaging_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user_info` (`client_id`),
  ADD CONSTRAINT `messaging_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`lawyer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user_info` (`client_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`lawyer_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user_info` (`client_id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`lawyer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
