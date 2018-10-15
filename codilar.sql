-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 02:25 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codilar`
--

-- --------------------------------------------------------

--
-- Table structure for table `carcompany`
--

CREATE TABLE `carcompany` (
  `id` int(15) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carcompany`
--

INSERT INTO `carcompany` (`id`, `companyname`, `model`, `image`, `status`, `created_date`, `updated_date`, `isdeleted`) VALUES
(1, 'Maruti Suzuki', 'Omni', 'http://localhost/codilar/codilarapp/static/images/omni.jpg', 0, '2018-10-14 11:38:55', '2018-10-14 08:54:19', 1),
(2, 'Ford', 'Aspire', 'http://localhost/codilar/codilarapp/static/images/aspire.jpg', 1, '2018-10-14 11:42:55', '2018-10-14 11:42:55', 0),
(3, 'BMW', '5 Series', 'http://localhost/codilar/codilarapp/static/images/3series.jpg', 1, '2018-10-14 11:48:22', '2018-10-14 12:12:41', 0),
(4, 'Ford', 'Figo', 'http://localhost/codilar/codilarapp/static/images/', 0, '2018-10-14 12:07:47', '2018-10-14 12:24:43', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carcompany`
--
ALTER TABLE `carcompany`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carcompany`
--
ALTER TABLE `carcompany`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
