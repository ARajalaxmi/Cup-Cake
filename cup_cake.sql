-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 07:10 PM
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
-- Database: `cup_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `patty`
--

CREATE TABLE `patty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'member',
  `password` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patty`
--

INSERT INTO `patty` (`id`, `name`, `email`, `role`, `password`, `phone`) VALUES
(3, 'Sai', 'sai@gmail.com', 'Developer', '12345678', 8776564534),
(5, 'Rajalaxmi', 'rajalaxmi@gmail.com', 'User', '123456', 9876543210),
(6, 'Rai', 'rai@gmail.com', 'Author', '123456', 9876543210),
(8, 'Anu', 'anu@gmail.com', 'member', 'Anu12345', 9845783490),
(9, 'Ram', 'ram@gmail.com', 'member', 'RAM1234', 9834783647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patty`
--
ALTER TABLE `patty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patty`
--
ALTER TABLE `patty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
