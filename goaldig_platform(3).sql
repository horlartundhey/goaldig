-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 08:23 AM
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
-- Database: `goaldig_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `othernames` varchar(256) NOT NULL,
  `status` varchar(16) NOT NULL,
  `society` text NOT NULL,
  `date_added` datetime NOT NULL,
  `membership_id` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `surname`, `othernames`, `status`, `society`, `date_added`, `membership_id`, `email`, `password`) VALUES
(1, 'Ayodele', 'James', 'active', '', '0000-00-00 00:00:00', '10000', 'oaadedayo@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(32) NOT NULL,
  `post_id` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `date_created` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `content`, `user_id`, `date_created`) VALUES
(1, '17', 'koool', '6', 'December, 26 2021 08:32'),
(2, '17', 'hey', '6', 'December, 26 2021 08:39'),
(3, '16', 'coolest', '6', 'December, 26 2021 08:48'),
(4, '16', 'sure', '6', 'December, 26 2021 08:49');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `election_id` int(10) NOT NULL,
  `title` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `date_start` varchar(64) NOT NULL,
  `date_end` varchar(64) NOT NULL,
  `posts` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `title` varchar(100) NOT NULL COMMENT 'Title',
  `description` varchar(255) NOT NULL COMMENT 'Description',
  `user_id` varchar(64) DEFAULT NULL,
  `date_created` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `title`, `description`, `user_id`, `date_created`) VALUES
(2, 'Mockup Agency', 'Call the design agency to finalize mockups', NULL, NULL),
(3, 'Recruiters Meeting', 'Touch base with recruiters about new role: Tuesday', NULL, NULL),
(4, 'Engineering Renosance', 'Meet with the engineering team.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` int(32) NOT NULL,
  `features` text NOT NULL,
  `logo` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `features`, `logo`) VALUES
(1, 'CLASSIC', 30000, 'Book Review Sessions,\r\nMonthly KSS Sessions,\r\nMentoring Program,\r\nDaily Growth Topics,\r\nCareer Opportunities / Job Links,\r\nAnnual Goal Setting Workshop,\r\nQuaterly KSS with Industry Experts', 'icon001.svg'),
(2, 'GOLD', 70000, 'Book Review Sessions,\r\nMonthly KSS Sessions,\r\nMentoring Program,\r\nDaily Growth Topics,\r\nCareer Opportunities / Job Links,\r\nAnnual Goal Setting Workshop,\r\nQuaterly Webinars with Industry Experts,\r\nAnnual Workshop (35k for Gold Members, 45k for others),\r\nAnnual Goal Book (5K for Gold members, 6k for others)', 'icon02.svg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `type` varchar(16) NOT NULL,
  `date_created` varchar(64) NOT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `content`, `status`, `user_id`, `type`, `date_created`, `file`) VALUES
(16, 'Welcome', '', '6', 'image', '2021-12-26', '61c8b99f4317e.PNG'),
(17, 'yellow', '', '6', 'image', 'December, 26 2021 08:05', '61c8bd0914047.jpg'),
(18, 'Green Hub for Freshness', '', '8', 'image', 'January, 14 2022 08:17', '61e123819c2ba.png');

-- --------------------------------------------------------

--
-- Table structure for table `reaction`
--

CREATE TABLE `reaction` (
  `id` int(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `value` int(2) NOT NULL,
  `post_id` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `type` varchar(16) NOT NULL,
  `date_created` varchar(64) NOT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `title`, `status`, `user_id`, `type`, `date_created`, `file`) VALUES
(18, 'http://google.com', '', '6', 'text', 'December, 31 2021 08:31', NULL),
(19, 'Sample', '', '6', 'pdf', 'December, 31 2021 08:42', '61ceb4794015b.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(4) NOT NULL,
  `system_name` text NOT NULL,
  `system_title` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `system_name`, `system_title`, `logo`) VALUES
(1, 'Goal Digger', 'Goal Digger Platform', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `transaction_key` varchar(127) NOT NULL,
  `plan_id` varchar(64) NOT NULL,
  `type` varchar(128) NOT NULL,
  `referrer` varchar(128) NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT current_timestamp(),
  `quantity` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `payment_method` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(256) NOT NULL,
  `status` varchar(16) NOT NULL,
  `password` text NOT NULL,
  `date_added` datetime NOT NULL,
  `gender` varchar(64) NOT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `header` text DEFAULT NULL,
  `career` varchar(255) DEFAULT NULL,
  `plan_id` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `status`, `password`, `date_added`, `gender`, `city`, `country`, `about`, `phone`, `profile_picture`, `header`, `career`, `plan_id`) VALUES
(1, 'Ayodele Adedayo', 'ayodelea@proxynetgroup.com', 'active', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '0000-00-00 00:00:00', 'male', 'Lagos City', 'NGA', 'I am an Innovative and Intuitive individual disciplined in meeting my Goal.', '+234-8094105937', NULL, NULL, 'Auditor/ Finance Manager', NULL),
(6, 'Olatunde I', 'oaadedayoa@gmail.com', 'active', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '0000-00-00 00:00:00', 'female', 'Lagos', 'NGA', 'ok', '0809', 'c1dfd96eea8cc2b62785275bca38ac261256e278.jpg', 'c1dfd96eea8cc2b62785275bca38ac261256e278.jpg', '', NULL),
(7, 'admin demo', 'admin@demo.com', 'active', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(8, 'Elijah Ibitoye', 'horlartundhey@gmail.com', 'active', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '0000-00-00 00:00:00', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'admin', 'admin@goaldiggernetwork.ng', 'active', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vote_id` int(64) NOT NULL,
  `election_id` varchar(8) NOT NULL,
  `post_id` varchar(8) NOT NULL,
  `candidate_id` varchar(8) NOT NULL,
  `voter_id` varchar(8) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `date_voted` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `voter_id` int(10) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `othernames` varchar(256) NOT NULL,
  `status` varchar(16) NOT NULL,
  `society` text NOT NULL,
  `date_added` datetime NOT NULL,
  `membership_id` varchar(64) NOT NULL,
  `email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `election`
--
ALTER TABLE `election`
  ADD PRIMARY KEY (`election_id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `reaction`
--
ALTER TABLE `reaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `election`
--
ALTER TABLE `election`
  MODIFY `election_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reaction`
--
ALTER TABLE `reaction`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_id` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `voter_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
