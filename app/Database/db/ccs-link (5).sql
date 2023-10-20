-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 02:26 AM
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
  `role` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `status`) VALUES
(9, NULL, NULL, 'superadmin', '$2y$10$6eqymK3AkFNB2R8bUGSRieLstGvcI4mNgJZxSSfujVgIvAJSLId6S', 'superadmin', 'active'),
(11, NULL, NULL, 'RusselTinio', '$2y$10$MoN/nMhmlPeRk9kPcg24POBSbNxi/pznEbFNioiUmMwuXkrtdMWAS', 'superadmin', 'active'),
(12, NULL, NULL, 'newadmin', '$2y$10$E/JdJH7B0/O8SY/ujkUbMeyIqTsdX77YEa8LWWpoGYpLQNMtGzybS', 'superadmin', 'active'),
(13, NULL, NULL, 'adminnew', '$2y$10$tDPeKvlfAHSxL3OIe9si7.dw7Pp48TZVU8yN93dLbCA6s/JrDLd7y', 'admin', 'disabled'),
(14, NULL, NULL, 'russel', '$2y$10$EnKi2pCxLzdRJ7jpqHFHlubUmWSVwIWHB0H5FmYJGrmnpvxwaECZa', 'admin', 'disabled'),
(17, 'Russel', 'Tinio', 'admin1', '$2y$10$uiLv9Gf.AlFswfMQABuUI.CQBIagYKyBm7.x9UJzbSy2MK6H5SMFm', 'admin', 'active'),
(18, 'Dianna', 'Price', 'wonderW10', '$2y$10$r5VCGcL7eaMoHGWGeloLXukMlHWfADAaKzINTasK./sbiig77VEse', 'admin', 'active'),
(19, 'Dianna', 'Price', 'wonderW10', '$2y$10$ZVcdSsle4rIi.sg9V8y1Auf/wJq8eyu0snkQrH7eE.ngHKDsBY2Y.', 'admin', 'disabled'),
(20, 'Dianna', 'Price', 'wonderW10', '$2y$10$h7yPFkm04lKSjJXIdBjB1e3XFAw6bxS1okdrKrP9avCpD9stdnTIi', 'admin', 'disabled'),
(21, 'Dianna', 'Price', 'wonderW10', '$2y$10$RA.Mnv4VByWadq6ls0fkxe1Ry1LgbO/XWMHGnWyWgM6iFv62Mg5c6', 'admin', 'disabled'),
(22, 'Dianna', 'Price', 'wonderW1', '$2y$10$DLPWev3ZMRvKH26.E/DPauC4cbrG/fIhsMno/25VZEWaXDbPLvCTi', 'admin', 'disabled');

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userId`, `website`, `email`, `linkin`, `facebook`, `number`) VALUES
(1, 1, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356'),
(2, 2, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sa', '09566339356'),
(3, 3, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356'),
(4, 5, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356'),
(5, 4, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356'),
(7, 6, '', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `startYear` int(11) DEFAULT NULL,
  `endYear` int(11) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `userId`, `education`, `school`, `startYear`, `endYear`, `status`) VALUES
(3, 2, 'High School', 'Pampanga High School', 2013, 2020, 'active'),
(4, 3, 'Elementary ', 'Pampanga High School', 2002, 2022, 'active'),
(5, 2, 'Elementary ', 'Mexico Elementary School', 2009, 2013, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `startYear` varchar(11) DEFAULT NULL,
  `endYear` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `userId`, `position`, `org`, `startYear`, `endYear`, `status`) VALUES
(1, 1, 'Mara', 'Rooney', '2021', '2021', 'disabled'),
(2, 1, 'Kagawad', 'sample org', '2012', 'Currently Working', 'disabled'),
(4, 2, 'Jr web designer', 'sample org', '2010', '2011', 'active'),
(5, 3, 'Jr web designer', 'sample org', '2019', 'Currently Working', 'disabled'),
(8, 3, ' web designer', 'CCPD', '2012', 'Currently Working', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mentoring`
--

CREATE TABLE `mentoring` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `predata`
--

CREATE TABLE `predata` (
  `id` int(11) NOT NULL,
  `studentId` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predata`
--

INSERT INTO `predata` (`id`, `studentId`, `firstname`, `lastname`) VALUES
(1, 202011, 'Barry', 'Allen'),
(2, 202012, 'Bruce', 'Wayne'),
(3, 202013, 'Clark', 'Kent'),
(4, 202014, 'Dianna', 'Price'),
(5, 202015, 'John', 'Johns'),
(6, 202016, 'Wally', 'West'),
(7, 202017, 'Hal', 'Jordan'),
(8, 202018, 'John', 'Stewart'),
(9, 202019, 'Arthur', 'Curry'),
(10, 202020, 'Oliver', 'Queen'),
(11, 202010, 'Russel', 'Tinio');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(2555) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `extension` varchar(10) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `civilStatus` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active',
  `mentor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `userId`, `image`, `title`, `middlename`, `extension`, `gender`, `civilStatus`, `address`, `province`, `municipality`, `barangay`, `zip`, `description`, `status`, `mentor`) VALUES
(2, 2, '1691392056_29a16b9140cf104b463e.jpg', NULL, 'Lopez', '', 'Male', 'single', '#17,Nueva Victoria', 'Pampanga', 'Mexico', 'Nueva Victoria', 2021, 'Piso ', 'active', NULL),
(3, 3, '1691370737_3b1567cae7ca4e241b78.jpg', NULL, '', '', 'Female', 'single', 'sample address', 'sample province', 'sample municipality', 'sample barangay', 2023, 'Happy now', 'active', NULL),
(7, 4, '1691244814_2ed9492b58195426eb5c.jpg', NULL, 'Isabella', 'Aquila', 'Male', 'married', 'Bianca', 'Janna', 'Conan', 'Alexandra', 92599, 'Explicabo Libero mi', 'active', NULL),
(9, 6, '1691454069_a3453189120f1648bdf6.jpg', 'Journalist', '', '', 'Male', 'single', 'sample address', 'sample province', 'sample municipality', 'sample barangay', 2001, 'its a bird, its a plane, its superman', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL
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
(2, 'Russel', 'Tinio', '202010', '$2y$10$41kA1sFl8/.nId5ktTu38efnWFcl40GfKsF3b7HiCB286H41elmLG', 'active'),
(3, 'Shouko', 'Komi', '202011', '$2y$10$DO8Gyaluus0LhSQEUb3HleEX0JVa8F4a55Tff2OJgaLawZjKzqPSa', 'active'),
(4, 'Bruce', 'Wayne', '202012', '$2y$10$auBNo7XiWn/LXqV1nkHQ6OhoR2qI9XQfox0qcPRUxN4y1yQ5pQ3JW', 'active'),
(6, 'Clark', 'Kent', '202013', '$2y$10$E2nPwxLpFPJ.2uuMKTjDFe.zbBciWR8uqxEonXNRNwL9a9KuH2W86', 'active');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predata`
--
ALTER TABLE `predata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `ann_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mentoring`
--
ALTER TABLE `mentoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predata`
--
ALTER TABLE `predata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
