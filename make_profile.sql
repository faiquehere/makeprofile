-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 06:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `make_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `make_profile_users`
--

CREATE TABLE `make_profile_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dtime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make_profile_users`
--

INSERT INTO `make_profile_users` (`id`, `username`, `email`, `password`, `dtime`) VALUES
(1, 'faique', 'faiquealikk@gmail.com', '$2y$10$.jplS6Wgxb3m/k7E0z3HTuvBf/pKA5uvo4/Mb3pWgYK1ufapww1Oe', '2021-08-27'),
(2, 'user', 'user@user.com', '$2y$10$CKRw.qUDK/HczigeS6yI/eqVkEE2EMe7GMCdy0AXE.opjQ4ePhMeq', '2021-08-29'),
(3, 'dani', 'dani@dani.com', '$2y$10$tLgEu0zplR6umTkvO5r.kOi2EeAw5PKGSgFdynkZHuA1AgdzGY6GO', '2021-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `make_profile_users_link`
--

CREATE TABLE `make_profile_users_link` (
  `id` int(11) NOT NULL,
  `picture` varchar(1111) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `tumblr` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make_profile_users_link`
--

INSERT INTO `make_profile_users_link` (`id`, `picture`, `facebook`, `twitter`, `instagram`, `github`, `linkedin`, `tumblr`, `email`, `user_id`) VALUES
(1, '', 'faiquehere', 'faiquehere', 'faiquehere', 'faique', 'faiquehere', 'faiquehere', 'faiquealikk@gmail.com', 'faique'),
(2, 'https://pbs.twimg.com/profile_images/1162267138842755075/zxLifsgg_400x400.jpg', 'user', 'user', 'user', 'user', 'user', 'user', 'user@user.com', 'user'),
(3, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Faique_Ali_KK.jpg/320px-Faique_Ali_KK.jpg', 'daniyal', 'dani', 'dani', '', '', '', 'dani@dani.com', 'dani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `make_profile_users`
--
ALTER TABLE `make_profile_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`username`);

--
-- Indexes for table `make_profile_users_link`
--
ALTER TABLE `make_profile_users_link`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `make_profile_users`
--
ALTER TABLE `make_profile_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `make_profile_users_link`
--
ALTER TABLE `make_profile_users_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
