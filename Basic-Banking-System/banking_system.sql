-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Nayana', 'Rick', 3456, '2022-03-06 03:17:46'),
(2, 'Sharlet', 'Vishnu', 35221, '2022-03-04 02:08:00'),
(3, 'Shazia', 'Nayana', 2115, '2022-03-11 05:04:59'),
(4, 'Virat H', 'Liana', 13243, '2022-03-16 08:54:34'),
(5, 'Shwetha Jain', 'Shazia', 5245, '2022-03-24 11:40:23'),
(6, 'Raymond', 'Reveka Dsouza', 2345, '2022-04-13 05:14:32'),
(7, 'Nayana', 'Rick', 3320, '2022-04-20 09:21:54'),
(8, 'Liana', 'Rick', 4321, '2022-04-28 12:09:02'),
(9, 'Nimrith Kaur', 'Soumya D', 5405, '2022-05-05 07:23:05'),
(10, 'Sharlet', 'Vishnu', 4500, '2022-05-26 01:51:29'),
(11, 'Nayana', 'Virat H', 2342, '2022-05-17 23:20:15'),
(12, 'Virat H', 'Soumya D', 4235, '2022-05-17 23:22:26'),
(13, 'Soumya D', 'Shazia', 350, '2022-05-17 23:21:13'),
(14, 'Reveka Dsouza', 'Nimrith Kaur', 2000, '2022-05-18 13:33:06'),
(15, 'Rick', 'Shazia', 1500, '2022-05-18 13:50:06'),
(16, 'Nimrith Kaur', 'Vishnu', 2015, '2022-05-18 22:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Nayana', 'nayana@gmail.com', 13158),
(2, 'Soumya D', 'soumyad@gmail.com', 39908),
(3, 'Reveka Dsouza', 'revekadsouza12@gmail.com', 29571),
(4, 'Rick', 'rick@gmail.com', 35383),
(5, 'Shazia', 'shazia@gmail.com', 53582),
(6, 'Nimrith Kaur', 'nimrithkaur5@gmail.com', 13839),
(7, 'Liana', 'liana24@gmail.com', 65421),
(8, 'Vishnu', 'vishnupoojary@gmail.com', 16250),
(9, 'Shwetha Jain', 'shwethajain005@gmail.com', 56000),
(10, 'Raymond', 'raymond@gmail.com', 43290),
(11, 'Sharlet', 'sharlet23@gmail.com', 54623),
(12, 'Virat H', 'virath09@gmail.com', 34795);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
