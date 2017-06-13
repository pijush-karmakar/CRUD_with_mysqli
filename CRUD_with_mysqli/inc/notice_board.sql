-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 03:04 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notice_date` date NOT NULL,
  `notice` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `user_id`, `notice_date`, `notice`, `status`) VALUES
(1, 1, '2017-06-08', 'You might be an artist who would like to introduce yourself and your work here or maybe you are a business with a mission to describe.This is a page with some basic contact information, such as an address and phone number. You might also try a plugin to add a contact form.', 1),
(2, 2, '2017-06-14', 'You might be an artist who would like to introduce yourself and your work here or maybe you are a business with a mission to describe.This is a page with some basic contact information, such as an address and phone number. You might also try a plugin to add a contact form.', 0),
(3, 0, '2017-06-09', 'This is another notice', 0),
(4, 0, '2017-06-02', 'This is second notice', 1),
(5, 0, '2017-05-02', 'This is fifth notice and .....', 1),
(9, 0, '2017-06-28', 'This is 9th notice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `status`, `role`) VALUES
(1, 'pijush@gmail.com', 'c12bd4115ddbf3e9451fed5d8b45a409', 1, 'admin'),
(3, 'sorov biswas', 'c30880edb7a8eca833d0343769972ac2', 0, 'student'),
(4, 'diamond@gmail.com', '75c6f03161d020201000414cd1501f9f', 1, 'student'),
(5, 'mahdi@gmail.com', 'f9c24b8f961d48841a9838cca5274d8d', 1, 'student'),
(6, 'demo@gmail.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
