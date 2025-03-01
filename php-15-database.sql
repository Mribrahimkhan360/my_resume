-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2025 at 09:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-15-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `website` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `mobile`, `email`, `website`) VALUES
(1, '+8801930174750', 'eiti.360@gmail.com', 'mribrahim.com');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(2, 'Ibrahim Ibrahim', 'admin@admin.com', 'admin@admin.com', '01787147988'),
(4, 'Ibrahim Khan', 'mribrahimkhan360@gmail.com', 'admin@admin.com', '01930174750'),
(5, 'Ibrahim Khan', 'admin@admin.com', 'admin@admin.com', '01930174750'),
(13, 'Ibrahim Ibrahim', 'hello@example.com', 'e10adc3949ba59abbe56e057f20f883e', '01787147988'),
(14, 'Ibrahim Khan', 'admin@admin.com', '64e1b8d34f425d19e1ee2ea7236d3028', '01787147988');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `bsc` varchar(256) NOT NULL,
  `hsc` varchar(256) NOT NULL,
  `ssc` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `bsc`, `hsc`, `ssc`) VALUES
(1, 'B. Sc. in Computer Science and Engineering.(On Giong)', ' Higher Secondary School Certificate.(GPA : 4.0)', 'Secondary School Certificate (GPA : 4.70)');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `position` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `company` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `position`, `title`, `company`, `description`) VALUES
(1, 'Full Stack Developer', 'Title (2004 - 2009)', 'ABC Company', 'Developed technical documentation for corporate processes. Improved customer service satisfaction by enhancing UI/UX. Worked in a fast-paced agile development team.'),
(2, 'President', 'SEO Expart in Bangladesh', 'SattarPro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `skils`
--

CREATE TABLE `skils` (
  `id` int(11) NOT NULL,
  `skill` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skils`
--

INSERT INTO `skils` (`id`, `skill`) VALUES
(1, 'Bootstrap 5'),
(5, 'Bootstrap 5'),
(6, 'CSS'),
(7, 'HTML 5'),
(8, 'JavaScript'),
(9, 'Laravel'),
(10, 'Microsoft Word'),
(11, 'Microsoft PowerPoint'),
(12, 'JavaScript');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `password`, `designation`) VALUES
(1, 'Eiti', 'Ansari', 'garrick.kuhlman@example.org', '', 'e807f1fcf82d132f9bb018ca6738a19f', 'seo expert'),
(4, 'Ibrahim', 'Hawthorne', 'garsssrick.kuhlman@example.org', '', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(5, 'Theresa', 'Hawthorne', 'mribrahimkan360@gmail.com', '', 'b5fe8e5504391da23fc329997898383a', ''),
(6, 'Theresa', 'Hawthorne', 'mribrahimkan360@gmail.com', '', 'b5fe8e5504391da23fc329997898383a', ''),
(7, 'IK', 'Developer', 'garrick.kuhlman@example.org', '', 'e807f1fcf82d132f9bb018ca6738a19f', ''),
(9, 'Imon', 'Ibrahim', 'Hawthornegmail@gmail.com', '', 'b213f6c3e9fbbf08c96ad8bcd8d681e1', ''),
(10, 'Theresa', 'Hawthorne', 'kkkkkkkkkkkkkkkkkk@gmail.com', '07818672020', 'f0c2d74d4e3cbb3d845c9e2b19464be7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
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
-- Indexes for table `skils`
--
ALTER TABLE `skils`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skils`
--
ALTER TABLE `skils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
