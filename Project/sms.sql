-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 01:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

CREATE TABLE `committee_members` (
  `committee_id` int(11) NOT NULL,
  `member_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `member_contact_no` bigint(11) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee_members`
--

INSERT INTO `committee_members` (`committee_id`, `member_name`, `image`, `member_contact_no`, `designation`) VALUES
(2, 'jhonson', '1655443551.jpg', 8867775111, 'chair person'),
(6, 'david', '1655443572.jpg', 9036100900, 'secretary'),
(7, 'justin', '1655443590.jpg', 9035600300, 'head'),
(8, 'alfin', '1655443614.jpg', 8904000900, 'accountant'),
(9, 'sophia', '1655443633.jpg', 9035339333, 'co-head'),
(10, 'davidson', '1655449950.jpg', 8792220005, 'head');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_subject` varchar(200) NOT NULL,
  `complaint_description` mediumtext NOT NULL,
  `member_id` int(11) NOT NULL,
  `complaint_reply` mediumtext NOT NULL,
  `complaint_status` varchar(200) NOT NULL DEFAULT 'pending',
  `complaint_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint_subject`, `complaint_description`, `member_id`, `complaint_reply`, `complaint_status`, `complaint_date`) VALUES
(2, 'watchman', 'not doing work', 2, 'i will tell', 'pending', '2022-06-13 09:56:18'),
(3, 'sweeper', 'sweepers are not cleaning properly in society', 7, 'we will inform them to do proper work', 'pending', '2022-06-17 02:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactus_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactus_id`, `name`, `email`, `message`) VALUES
(3, 'Krishna', 'krishna@gmail.com', 'rent'),
(4, 'Harish', 'harish@gmail.com', 'rent');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_subject` varchar(200) NOT NULL,
  `event_description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `event_date` datetime NOT NULL,
  `event_status` varchar(200) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_subject`, `event_description`, `image`, `event_date`, `event_status`) VALUES
(4, 'birthday', ' all are invited for birthday celebration house no 3', '1655434050.jfif', '2022-05-16 00:00:00', 'confirmed'),
(6, 'marriage', '   all are invited', '1655434062.jfif', '2022-05-30 00:00:00', 'pending'),
(8, 'ring ceremony', 'rine ceremony of my son ', '1655434455.jfif', '2022-06-16 00:00:00', 'pending'),
(9, 'baby shower ceremony', 'baby shower of my girl', '1655434486.jfif', '2022-06-24 00:00:00', 'pending'),
(10, 'birthday ceremony', 'birthday', '1655436814.jfif', '2022-06-25 00:00:00', 'pending'),
(11, 'marriage ceremony', 'marriage', '1655444558.jfif', '2022-06-23 00:00:00', 'pending'),
(12, 'marriage ceremony', 'marriage', '1655446147.jfif', '2022-06-17 00:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `house_no` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `house_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `house_no`, `image`, `house_type`) VALUES
(12, '1', '1655373776.jfif', '1bhk'),
(18, '2', '1655373791.jpeg', '1bhk'),
(19, '3', '1655373809.jpg', '2bhk'),
(20, '4', '1655374103.jfif', '2BHK'),
(22, '5', '1655432270.jfif', '2bhk');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenance_id` int(11) NOT NULL,
  `maintenance_year` datetime NOT NULL,
  `maintenance_month` datetime NOT NULL,
  `maintenance_charges` int(11) NOT NULL,
  `maintenance_title` varchar(200) NOT NULL,
  `maintenance_description` mediumtext NOT NULL,
  `maintenance_status` varchar(200) NOT NULL DEFAULT 'pending',
  `maintenance_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`maintenance_id`, `maintenance_year`, `maintenance_month`, `maintenance_charges`, `maintenance_title`, `maintenance_description`, `maintenance_status`, `maintenance_date`) VALUES
(2, '2022-05-13 00:00:00', '2022-05-13 00:00:00', 500, 'water bill', ' water bill by government\r\n', 'confirmed', '2022-05-13 00:00:00'),
(4, '2022-06-23 00:00:00', '2022-06-16 00:00:00', 2000, 'watchman salary', 'salary for watchman ', 'pending', '2022-06-15 00:00:00'),
(5, '2022-07-23 00:00:00', '2022-07-15 00:00:00', 700, 'sweepers salary', 'salary for sweepers', 'pending', '2022-06-10 00:00:00'),
(6, '2022-06-08 00:00:00', '2022-05-06 00:00:00', 400, 'street lights bill', 'street light bill of society', 'pending', '2022-06-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(200) NOT NULL,
  `member_email` varchar(200) NOT NULL,
  `member_password` varchar(200) NOT NULL,
  `member_contact_no` bigint(11) NOT NULL,
  `house_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_email`, `member_password`, `member_contact_no`, `house_id`) VALUES
(2, 'william', 'william@gmail.com', 'william', 8147000400, 12),
(6, 'bruno p', 'bruno56@gmail.com', 'bruno', 8867002000, 19),
(7, 'joseph', 'joseph@gmail.com', 'joseph', 7411100083, 22),
(8, 'james', 'james@gmail.com', 'james', 8792220005, 18),
(9, 'griffin', 'griffin@gmail.com', 'james', 9035339333, 20),
(26, 'charlie', 'charlie@gmail.com', '123', 2147483647, NULL),
(27, 'charlie', 'charlie@gmail.com', '123', 2147483647, NULL),
(29, 'charlie', 'charlie@gmail.com', '123', 9035336222, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_title` varchar(200) NOT NULL,
  `notice_description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `notice_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_title`, `notice_description`, `image`, `notice_date`) VALUES
(5, 'water cut', ' water will not come today and tomorrow', '1655433264.jfif', '2022-06-17 00:00:00'),
(6, 'current  cut', '  power will  come upto  6 pm', '1655433308.jfif', '2022-06-15 00:00:00'),
(13, 'Maintenance', 'notice to society members for minatenance fee dues', '1655433247.jfif', '2022-06-23 00:00:00'),
(14, 'sweepers', 'sweepers are on holidays for few days', '1655433346.jfif', '2022-06-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `rent_amount` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `rent_date` datetime NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `rent_amount`, `member_id`, `rent_date`, `image`) VALUES
(2, 6000, 2, '2022-06-19 00:00:00', '1655433409.jfif'),
(3, 80000, 6, '2022-06-28 00:00:00', '1655433424.jfif'),
(4, 10000, 7, '2022-06-23 00:00:00', '1655433440.jfif'),
(7, 550000, 6, '2022-06-16 00:00:00', '1655444139.jfif'),
(12, 350000, 7, '2022-06-02 00:00:00', '1655444153.jfif'),
(18, 550000, 2, '2022-06-03 00:00:00', '1655454044.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `sell_id` int(11) NOT NULL,
  `sell_amount` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `sell_date` datetime NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`sell_id`, `sell_amount`, `member_id`, `sell_date`, `image`) VALUES
(3, 350000, 2, '2022-06-08 00:00:00', '1655433458.jfif'),
(4, 450000, 8, '2022-06-22 00:00:00', '1655433479.jfif'),
(5, 500000, 9, '2022-06-23 00:00:00', '1655433500.jfif'),
(6, 450000, 6, '2022-06-21 00:00:00', '1655454126.jfif'),
(7, 450000, 8, '2022-06-12 00:00:00', '1655454169.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `society_rules`
--

CREATE TABLE `society_rules` (
  `society_id` int(11) NOT NULL,
  `society_description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society_rules`
--

INSERT INTO `society_rules` (`society_id`, `society_description`) VALUES
(2, '1.Maintenance of flats by members carefully and clean it.\r\n2.Attend all the general body meetings of the society.\r\n3.To pay the maintenance charges and other dues regularly.\r\n4.To obey provision in bye-laws.\r\n5.Not to do any act contrary to the interest of the society.\r\n6.To respect the members of society as members of a family and co-operate in the working of the society and to the managing committee.\r\n7.To observe accurately the rules made by the Annual General Body meeting from time to time regarding utilizing facilities provided by the society.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(4, 'prakash', 'thumma', 'prakash@gmail.com', '123', 1, 0, '2022-05-13 10:23:05'),
(7, 'prakash', 'thumma', 'thumma@gmail.com', '', 1, 1, '2022-06-13 09:05:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committee_members`
--
ALTER TABLE `committee_members`
  ADD PRIMARY KEY (`committee_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `society_rules`
--
ALTER TABLE `society_rules`
  ADD PRIMARY KEY (`society_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `committee_members`
--
ALTER TABLE `committee_members`
  MODIFY `committee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `maintenance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `sell_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `society_rules`
--
ALTER TABLE `society_rules`
  MODIFY `society_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
