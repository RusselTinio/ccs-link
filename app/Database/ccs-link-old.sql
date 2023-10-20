-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 09:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccs-link`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `role`) VALUES
(9, NULL, NULL, 'superadmin', '$2y$10$6eqymK3AkFNB2R8bUGSRieLstGvcI4mNgJZxSSfujVgIvAJSLId6S', 'superadmin'),
(10, NULL, NULL, 'russ', '$2y$10$naIt2x4y5qa4fT56usGi4uBu0568dOWIwmQ5Eu7NXGS3dW.F8MY8O', 'admin'),
(11, NULL, NULL, 'RusselTinio', '$2y$10$MoN/nMhmlPeRk9kPcg24POBSbNxi/pznEbFNioiUmMwuXkrtdMWAS', 'superadmin'),
(12, NULL, NULL, 'newadmin', '$2y$10$E/JdJH7B0/O8SY/ujkUbMeyIqTsdX77YEa8LWWpoGYpLQNMtGzybS', 'superadmin'),
(13, NULL, NULL, 'adminnew', '$2y$10$tDPeKvlfAHSxL3OIe9si7.dw7Pp48TZVU8yN93dLbCA6s/JrDLd7y', 'admin'),
(14, NULL, NULL, 'russel', '$2y$10$EnKi2pCxLzdRJ7jpqHFHlubUmWSVwIWHB0H5FmYJGrmnpvxwaECZa', 'admin'),
(16, 'Bruce', 'Wayne', 'username1', '$2y$10$PYDM0NnC02.cA/A/4gtBJO9MS5LGWEx5wIWZywJXuQfb1ceQaXghi', 'admin'),
(17, 'Russel', 'Tinio', 'admin1', '$2y$10$uiLv9Gf.AlFswfMQABuUI.CQBIagYKyBm7.x9UJzbSy2MK6H5SMFm', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `ann_num` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `imige` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `status`) VALUES
(5, 'admin', 'user', 'admin', '$2y$10$3qjhoMyd/b5LjuQ7syIcY.lyfeJKUJQmurTBYuOaZFJp1nKFNVKfK', 'active'),
(7, 'noname', 'nolastname', 'noname', '$2y$10$QRpdjxGW05.8vTyxDtcafeZOo2Qm5eTeFB.SOYveoVNRbb/vamUlG', 'active'),
(8, 'Russel', 'Tinio', 'rustinio', '$2y$10$1XOgfZjbSh7WdilJSrrk8uKFafZJnJYIERM9OhJhGaZrLOoh6BkWS', 'active'),
(10, 'clark', 'kent', 'superman123', '$2y$10$H/F8VO4VCJykAo10D4Nzre1npkTL3MI8xScfSZmgdsDBYHms3JCPa', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ann_num`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `ann_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
