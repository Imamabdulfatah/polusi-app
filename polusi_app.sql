-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 05:38 PM
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
-- Database: `polusi_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_polusi`
--

CREATE TABLE `tb_polusi` (
  `id` int(11) NOT NULL,
  `polusi` int(11) NOT NULL,
  `tempat` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_polusi`
--

INSERT INTO `tb_polusi` (`id`, `polusi`, `tempat`, `tanggal`) VALUES
(1, 60, 1, '2003-03-03 07:30:5'),
(2, 80, 1, '2003-03-03 09:30:5'),
(3, 100, 1, '2004-10-4 6:20:6'),
(4, 30, 2, '2004-10-4 8:20:6'),
(5, 250, 1, '2007-03-03 20:11:5'),
(8, 120, 1, '2001-03-08 09:20:5'),
(9, 30, 3, '2001-03-08 09:18:4'),
(10, 60, 4, '2001-03-08 09:18:4'),
(11, 170, 5, '2004-03-08 09:18:4'),
(12, 220, 6, '2001-03-08 09:18:4'),
(13, 130, 8, '2009-03-08 09:18:4'),
(14, 56, 9, '2011-03-08 09:18:4'),
(15, 70, 10, '2017-03-08 09:18:4'),
(16, 210, 7, '2008-03-08 09:18:4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_polusi`
--
ALTER TABLE `tb_polusi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_polusi`
--
ALTER TABLE `tb_polusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
