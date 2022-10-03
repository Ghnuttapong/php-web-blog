-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 12:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `picture` text DEFAULT NULL,
  `rating` int(11) DEFAULT 0,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `detail`, `picture`, `rating`, `category_id`, `created_at`) VALUES
(1, 'Doramon', '<p>Doramon</p>', '202209020748.png', 0, 1, '2022-09-02 05:18:48'),
(2, 'Doramon', '<p>Doramon</p>', '202209020703.png', 0, 1, '2022-09-02 05:21:03'),
(3, 'สยองสองใจ', '<p>ทดสอบ<font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">สอบๆๆ</span></font></p>', '202209020726.jpg', 0, 3, '2022-09-02 05:24:26'),
(4, 'สยองสองใจ', '<p>ทดสอบ<font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">สอบๆๆ</span></font></p>', '202209020852.jpg', 0, 3, '2022-09-02 06:38:52'),
(5, 'สยองสองใจ', '<p>ทดสอบ<font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">สอบๆๆ</span></font></p>', '202209020856.jpg', 0, 3, '2022-09-02 06:38:56'),
(6, 'สยองสองใจ', '<p>ทดสอบ<font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">สอบๆๆ</span></font></p>', '202209020858.jpg', 0, 3, '2022-09-02 06:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `rating`) VALUES
(1, 'cartoon', 0),
(2, 'entries', 0),
(3, 'horror', 0),
(4, 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `enabled` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `enabled`, `picture`, `created_at`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'false', '202210031157.png', '2022-08-29 13:29:18'),
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'nuttapong', 'true', '202210031157.png', '2022-08-30 13:46:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
