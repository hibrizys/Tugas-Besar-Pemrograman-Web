-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 06:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok1_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Basic'),
(3, 'Premium'),
(4, 'Cinematic');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `Comments` int(11) NOT NULL,
  `Reviews` int(11) NOT NULL,
  `status` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `review` text NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role`, `role_id`, `Comments`, `Reviews`, `status`, `is_active`, `date_created`, `review`, `rating`) VALUES
(13, 'Hibrizy Sulistiyo', 'hibrizys@gmail.com', 'user.svg', '$2y$10$QzYDsWDkDW2I229gcxbwCe/W0vmJVhpdM98FNd1C8eEYi8xV./OiC', 'Admin', 1, 0, 0, 'Approved', 1, 1671355782, 'Ini Review menggunakan NodeJS', '10'),
(14, 'Regita Prameswari', 'regita@gmail.com', 'user.svg', '$2y$10$Lq3Tngtg.7PH/G.5mol0juE8Y2HFvvaxxL1/TLfgZumOQot/QI.4G', 'Basic', 2, 0, 0, 'Approved', 1, 1671365597, 'Website ini bagus sekali!', '9'),
(16, 'Retno Fauziah', 'retnof@gmail.com', 'user.svg', '$2y$10$sI2ulqTVKXolPrh7SQvWeOSphcriGg2bu0XCf/ao60ErjmL1IJ3Bm', 'Cinematic', 4, 0, 0, 'Approved', 1, 1671677617, 'Wah! website ini membantu wawasan saya!', '9'),
(18, 'Noaldy T', 'noaldyt@gmail.com', 'user.svg', '$2y$10$/XTcDuWI4pIntJgeEQmiv.7SmwtDfWtZtbzjrMftWEPvyd4KMX9pG', 'Basic', 2, 0, 0, 'Approved', 1, 1671685553, 'Website ini sangat membantu saya menemukan film yang saya sukai', '8'),
(33, 'Gregorio Alvito', 'gregorioa@gmail.com', 'user.svg', '$2y$10$WT2jMLLupX9SX0lQ74sBV.I3emEKph9Z9cJAgwJvRS0PMVP0e59ti', 'Basic', 2, 0, 0, 'Approved', 1, 1671687663, 'Bagus', '10'),
(45, 'Siti Nurul', 'Sitinurul@gmail.com', 'user.svg', '$2y$10$6zmvqX2iS0UWAiI52z8XMubfmP6KtJ0G3horgBRZCDpCUDvowbj5e', 'Basic', 2, 0, 0, 'Approved', 1, 1671951785, 'Fitur lengkap, sayang kurang bagus', '7'),
(51, 'tes 5', 'tes3@gmail.com', 'user.svg', '$2y$10$MdvsFaNguHgai9nsXe/QzeFCYu8goVjOP3FxGSEdAlrmTpDCzXZPO', 'Basic', 2, 0, 0, 'Approved', 1, 1672898475, 'Testing NodeJS', '10');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'icon ion-ios-keypad', 1),
(2, 2, 'Home', 'user', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
