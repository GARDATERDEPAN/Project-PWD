-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 10:17 AM
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
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`fullname`, `username`, `email`, `number`, `comment`) VALUES
('marthin', 'marthino', 'marthin@gmail.com', 812345678, 'mantap'),
('bejo', 'bejooo', 'bejo@gmail.com', 2147483647, 'mantul'),
('bimo', 'bimowibu', 'bimo@gmail.com', 2147483647, 'alamak');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`name`, `position`, `year`) VALUES
('Gerbang IKN Bermazmur', '1st Place', 2022),
('Pesparawi Provinsi Kalimantan Timur', '2nd Place', 2023),
('PSGP Immanuel Samarinda Concert', '1st Place', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_users`
--

CREATE TABLE `tabel_users` (
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_users`
--

INSERT INTO `tabel_users` (`fullname`, `username`, `email`, `password`, `number`) VALUES
('aaron marthin', 'aaron', 'aaron@gmail.com', 'aaron14', 0),
('arul', 'arulpakboy', 'arul@gmail.com', 'arul123', 0),
('atep', 'atep', 'atep@gmail.com', 'atep123', 8123456),
('marthin', 'marthino', 'marthin@gmail.com', 'marthino', 812345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `tabel_users`
--
ALTER TABLE `tabel_users`
  ADD PRIMARY KEY (`fullname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
