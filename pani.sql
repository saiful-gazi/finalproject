-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 02:19 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pani`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` text NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `message`, `photo`) VALUES
(2, 'ABUL', 'princess@gmail.com', 'hi there ', '2.jpg'),
(3, 'TAHSAN', 'tahsan@gmail.com', 'vejal hoisna', '3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(99) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `status`) VALUES
(1, '1.png', 1),
(2, '2.png', 0),
(3, '3.png', 0),
(4, '4.png', 0),
(5, '5.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_des` text NOT NULL,
  `service_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_des`, `service_img`) VALUES
(3, 'Graphic Design', 'Lorem ipsum dolor sit amet, consectetur adiing elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '3.jpg'),
(4, 'Concept Development', 'Lorem ipsum dolor sit amet, consectetur adiing elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '4.jpg'),
(5, 'Photography', 'Lorem ipsum dolor sit amet, consectetur adiing elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `profile_photo` varchar(100) NOT NULL,
  `role` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `email`, `password`, `mobile`, `profile_photo`, `role`) VALUES
(1, 'SHUVRO', 'shuv@gmail.com', '1234', '0145652659', '', 2),
(2, 'prince', 'prince@gmail.com', '321', '0139666222', '', 0),
(3, 'shariful', 'shariful@gmail.com', '654', '12345513166', '', 0),
(5, 'hasib', 'hasib@live.com', '123456', '0175412141', '', 0),
(6, 'sujan', 'sujan@live.com', '123456', '017554545', '', 0),
(7, 'sikdar', 'sikdar@gmail.com', 'aaaa', '255985652', '7.png', 0),
(8, 'faria', 'fari@gmail.com', 'fff', '202020', '8.png', 3),
(9, 'hero alom', 'hero@alom.com', 'fakir', '01192536', '9.jpg', 1),
(10, 'model arif khan', 'model@arif.com', 'arif', '0119639', '10.jpg', 0),
(11, 'kan helal', 'kan@helal.com', 'kan', '01119633', '11.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
