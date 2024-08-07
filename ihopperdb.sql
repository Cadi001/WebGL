-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 10:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihopperdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recent_login` datetime DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `recent_login`, `role`) VALUES
('lemjune', 'lem@gmail.com', '$2y$10$FvCSaRd6Jv6OnqzFM8M0meISoYnAHk1xL2YqTguo3P9i0HMW7wtrm', NULL, 'users'),
('test', 'test@gmail.com', '$2y$10$vCWlURulTZ.t20strCACWOldVsAHJOTVvofuQEh7XSaqWHnACU/0i', NULL, 'users'),
('test1', 'test1@gmail.com', '$2y$10$TTaqEMNIYiolFfS5AV/mhuEY/O2O/o/VpkbxLJ9IKN8Y0R80pSRBi', NULL, 'users'),
('test2', 'test2@gmail.com', '$2y$10$fwpbaM82mWf0Zc8xIN9CQuL4P0NigrQWYgc/3EQZwBETytAkO62hy', NULL, 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`,`email`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
