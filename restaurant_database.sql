-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 02:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant database`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `show` ()  NO SQL
SELECT * from users$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showAll` ()  NO SQL
SELECT users.id,users.username,log.action,log.actionTime FROM users
INNER JOIN log ON users.id=log.user_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bkrecod`
--

CREATE TABLE `bkrecod` (
  `id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `people` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bkrecod`
--

INSERT INTO `bkrecod` (`id`, `city`, `date`, `time`, `people`, `email`, `phone`) VALUES
(1, 'lhr', '0012-12-12', '12:12', '1', 'usmanbabar56@gmail.c', '21212'),
(2, 'peshawar', '0011-12-19', '00:11', '2', 'usmanbabar56@gmail.c', '2323232'),
(3, 'islamabad', '2020-12-11', '00:21', '2', 'usmanbabar56@gmail.c', '2323232'),
(4, 'karachi', '2019-12-11', '02:13', '4', 'adeelg35@yahoo.com', '2323232'),
(15, 'lhr', '0012-12-12', '12:12', '1', 'usmanbabar56@gmail.c', '21212'),
(16, 'peshawar', '0011-12-19', '00:11', '2', 'usmanbabar56@gmail.c', '2323232'),
(17, 'islamabad', '2020-12-11', '00:21', '2', 'usmanbabar56@gmail.c', '2323232'),
(18, 'karachi', '2019-12-11', '02:13', '4', 'adeelg35@yahoo.com', '2323232'),
(19, 'gujrat', '1212-12-12', '00:12', '5', 'usmanbabar56@gmail.c', '23249148914');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `useridd` varchar(20) NOT NULL,
  `currentdatee` varchar(20) NOT NULL,
  `currenttimee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `useridd`, `currentdatee`, `currenttimee`) VALUES
(1, '20', '08-12-2020', '05:30pm'),
(2, '20', '08-12-2020', '05:30am'),
(3, '60', '08-12-2020', '03:30am'),
(4, '20', '08-12-2020', '04:30pm'),
(5, '60', '08-12-2020', '05:30pm'),
(6, '20', '08-12-2020', '01:am'),
(7, '60', '08-12-2020', '04:30pm'),
(14, '50', '1212-07-12', '22:12');

-- --------------------------------------------------------

--
-- Table structure for table `chekin`
--

CREATE TABLE `chekin` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `currentdate` varchar(20) NOT NULL,
  `currenttime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chekin`
--

INSERT INTO `chekin` (`id`, `userid`, `currentdate`, `currenttime`) VALUES
(1, '60', '1-2-2020', '2:30pm'),
(2, '60', '1-2-2020', '03:30pm'),
(3, '60', '1-2-2020', '05:30pm'),
(4, '60', '1-2-2020', '2:30pm'),
(5, '20', '1-2-2020', '01:30pm'),
(6, '20', '1-2-2020', '2:30pm'),
(7, '20', '1-2-2020', '04:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `action` varchar(20) NOT NULL,
  `actionTime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `action`, `actionTime`) VALUES
(1, '5', 'inserted', '2020-04-25 00:45:22.000000'),
(5, '9', 'inserted', '2020-04-25 00:56:05.000000'),
(6, '10', 'inserted', '2020-04-25 00:56:09.000000'),
(7, '10', 'deleted', '2020-04-25 00:59:45.000000'),
(8, '9', 'update', '2020-04-25 01:00:03.000000'),
(9, '5', 'update', '2020-04-27 03:49:04.000000'),
(10, '9', 'update', '2020-04-27 03:49:31.000000'),
(11, '11', 'inserted', '2020-04-27 03:49:57.000000'),
(12, '12', 'inserted', '2020-04-27 03:49:57.000000'),
(13, '13', 'inserted', '2020-04-27 03:49:57.000000'),
(14, '14', 'inserted', '2020-04-27 03:49:57.000000'),
(15, '2', 'update', '2020-04-27 03:56:56'),
(16, '3', 'update', '2020-04-27 03:57:16'),
(17, '4', 'update', '2020-04-27 03:57:23'),
(18, '5', 'update', '2020-04-27 03:57:30'),
(19, '6', 'update', '2020-04-27 03:57:39'),
(20, '7', 'update', '2020-04-27 03:57:48'),
(21, '8', 'update', '2020-04-27 03:57:56'),
(22, '15', 'inserted', '2020-04-29 22:46:48'),
(23, '15', 'deleted', '2020-04-30 22:50:49'),
(24, '8', 'update', '2020-04-30 22:51:21'),
(25, '7', 'deleted', '2020-04-30 22:54:08'),
(26, '8', 'deleted', '2020-04-30 22:54:08'),
(27, '6', 'deleted', '2020-04-30 22:55:05'),
(28, '5', 'deleted', '2020-04-30 22:55:23'),
(29, '8', 'inserted', '2020-04-30 23:03:14'),
(30, '10', 'inserted', '2020-04-30 23:03:34'),
(31, '16', 'inserted', '2020-05-11 13:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'usman', 'usmanbabar@gmail.com', 'admin', '279'),
(2, 'usman', 'usmanbabar56@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(3, 'babar', 'babar222@gmqail.com', 'user', '111'),
(4, 'bbb 12', 'hamzagangstar12@gmail.com', 'user', '2222'),
(8, 'hafiz', 'nasir@gmail.com', 'USER', '123\r\n'),
(10, 'hafiz', 'nasir@gmail.com', 'USER', '123'),
(16, 'aziz', 'adeelg35@yahoo.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `deleteLog` BEFORE DELETE ON `users` FOR EACH ROW INSERT INTO log VALUES(null,OLD.id,'deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO log VALUES (null, NEW.id,'inserted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update` AFTER UPDATE ON `users` FOR EACH ROW INSERT INTO log VALUES(null,NEW.id,'update',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_view`
-- (See below for the actual view)
--
CREATE TABLE `users_view` (
`id` int(11)
,`username` varchar(100)
,`email` varchar(100)
,`user_type` varchar(20)
,`password` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `users_view`
--
DROP TABLE IF EXISTS `users_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_view`  AS  select `users`.`id` AS `id`,`users`.`username` AS `username`,`users`.`email` AS `email`,`users`.`user_type` AS `user_type`,`users`.`password` AS `password` from `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkrecod`
--
ALTER TABLE `bkrecod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chekin`
--
ALTER TABLE `chekin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
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
-- AUTO_INCREMENT for table `bkrecod`
--
ALTER TABLE `bkrecod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chekin`
--
ALTER TABLE `chekin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
