-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 11:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `push`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(21, 'user@gmail.com', '2022-09-01 11:20:30'),
(22, 'hey@gmail.com', '2022-09-01 11:29:03'),
(23, 'aadiltai3884@gmail.com', '2022-09-09 07:26:58'),
(24, 'demo@gmail.com', '2022-09-09 07:30:33'),
(25, 'w@gmail.com', '2022-09-09 07:30:40'),
(26, 'd@gmail.com', '2022-09-09 07:30:44'),
(27, 'demo2@gmail.com', '2022-09-09 07:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `reciver`, `title`, `feedbackdata`, `attachment`) VALUES
(31, 'demo@gmail.com', 'Admin', 'hey sir', 'i want to change my password', ' '),
(32, 'demo@gmail.com', 'Admin', 'hey', 'attachhhhed', 'download.jpg'),
(33, 'Admin', 'demo@gmail.com', '', 'ok done', ''),
(34, 'demo2@gmail.com', 'Admin', 'sir', 'attachhhhed something', 'download-(1).jpg'),
(35, 'yashar@gmail.com', 'Admin', 'hey', 'heyyyyy', 'download-(2).jpg'),
(36, 'Admin', 'yashar@gmail.com', '', 'yesss', ''),
(37, 'yashar@gmail.com', 'Admin', 'hey', 'heyyyyy', 'download-(2).jpg'),
(38, 'ravina@gmail.com', 'Admin', 'hey', 'ss', 'download-(4).jpg'),
(39, 'Admin', 'ravina@gmail.com', '', 'sayyyyyy', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(36, 'demo@gmail.com', 'Admin', 'Send Feedback', '2022-09-08 14:50:07'),
(37, 'demo@gmail.com', 'Admin', 'Send Feedback', '2022-09-08 14:53:27'),
(38, 'Admin', 'demo@gmail.com', 'Send Message', '2022-09-08 14:54:11'),
(39, 'demo2@gmail.com', 'Admin', 'Send Feedback', '2022-09-08 15:11:17'),
(40, 'yashar@gmail.com', 'Admin', 'Create Account', '2022-09-08 15:19:10'),
(41, 'yashar@gmail.com', 'Admin', 'Send Feedback', '2022-09-09 07:24:52'),
(42, 'Admin', 'yashar@gmail.com', 'Send Message', '2022-09-09 07:25:34'),
(43, 'yashar@gmail.com', 'Admin', 'Send Feedback', '2022-09-09 07:25:43'),
(44, 'd@gmail.com', 'Admin', 'Create Account', '2022-09-09 07:28:03'),
(45, 'w@gmail.com', 'Admin', 'Create Account', '2022-09-09 07:29:59'),
(46, 'aadiltai@gmail.com', 'Admin', 'Create Account', '2022-09-09 07:45:10'),
(47, 'ravina@gmail.com', 'Admin', 'Create Account', '2022-09-09 07:47:00'),
(48, 'ravina@gmail.com', 'Admin', 'Send Feedback', '2022-09-09 08:42:45'),
(49, 'Admin', 'ravina@gmail.com', 'Send Message', '2022-09-09 08:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `domain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `token`, `domain`) VALUES
(1, 'f5nl_lfDaOQ:APA91bGQaq7NB_qgNUFIfgrM0G3lo713ARWRtfOU7YNkRtIfclr8AAci9cV9I4gnQCC4jB8Z9Lu_WJznkCW3L325dHSGS5DYgOeTog2tKPpj_M0hUNgKwT16NffbaxikcDR6QpYctg_5', 'push.ilmehaqiqi.app'),
(2, 'djaOqmD49ho:APA91bFLCxJ1h5HBjBA1vQ6mMSFelrIH8qStwRS7e0-WwSE2Y1V-LIrEXkEqIc1qc_m35m3G7hLn1ql45DoMuEyOY1L1caQivm10q857FdR0Ag_RhZnU7cnghdXLcg7R0e7yp09ze5qg', 'push.ilmehaqiqi.app'),
(3, 'fV6MjXxvsiI:APA91bHm_uG7JDATPUyMftTgH7ERj54sX15w7fWHVtZWWfzdbRcWxH7PUGzH786jy-q1mwPTkPCfBK7Utu4kTUzMu9qM8hKyFUEOvvQKdeVPW-hooXVMLjbmclr0qW3ua4PAj4RiMhi-', 'push.ilmehaqiqi.app'),
(4, 'cLa_TU5ozWU:APA91bFAFr_RYRgEeyU8AeFtOGj6K4gLE8MtoAw4r4HWexL3b895yErHn51tRndN60DHVt7qhGvkPQ-Yq127ig4DlA45hAOnaQolXIK3JJHgKBfsbwIQOmuudHQcAYXujpKnE3-MJ4qH', 'push.ilmehaqiqi.app'),
(5, 'd6peGI7_vRo:APA91bE9D4WlCslmVKPDZdlJ5C6Qmrd8IO2kfA21cGT5--fJh7Fiobek-1VdYIVKTtW_b-JcRPRV77L7pGDXsiAD7Kut1cejq8TzEEPjIVkOvHvuTkLQtYh052DFnIeb5j8UGnG4C5-u', 'push.ilmehaqiqi.app');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `package`, `image`, `status`) VALUES
(25, 'yashar', 'yashar@gmail.com', '8db565fc4a30b682cb31ab78fa4c4008', 'Male', '12344343232', 'basic', 'download-(2).jpg', 1),
(28, 'Aadil', 'aadiltai@gmail.com', 'b73634499448296d10341f5228c95ac6', 'Male', '34567778523', 'basic', 'download-(2).jpg', 1),
(29, 'ravina', 'ravina@gmail.com', '050b71bb519eab60805642dad94e8780', 'Female', '4535344423', 'basic', 'download-(3).jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
