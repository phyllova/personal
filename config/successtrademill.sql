-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2023 at 02:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luarywhitmer_rippletrust`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'support@successtrademill.com', '0f589b328d72c3188384c2fe1d29b922');

-- --------------------------------------------------------

--
-- Table structure for table `adminmessage`
--

CREATE TABLE `adminmessage` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `status` tinyint(4) NOT NULL,
  `msgid` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `btc`
--

CREATE TABLE `btc` (
  `id` int(11) NOT NULL,
  `mode` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `usd` double NOT NULL,
  `image` tinyblob NOT NULL,
  `btctnx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tnxid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `refcode` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `referred` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `id` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `transactionid` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `amount` double NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(6) NOT NULL,
  `userid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `status` int(122) NOT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last_increase_date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `increased_usd` double NOT NULL DEFAULT 0,
  `deactivation_date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `userid`, `email`, `pname`, `increase`, `bonus`, `status`, `date`, `sid`, `shid`, `amount`, `last_increase_date`, `increased_usd`, `deactivation_date`, `activation_date`, `duration`) VALUES
(39, 193, 'alu.uzorka.stanley@gmail.com', 'Premium', 10, 50, 1, '2023-09-10 16:56:16', 'pk_64fe2d70199a1', '', '4000', '2023-09-10 16:56:58', 0, NULL, '2023-09-10 16:56:58', 3),
(40, 195, 'A_sowaileh@outlook.com', 'Starter', 5, 0, 1, '2023-09-13 13:36:37', 'pk_6501f32586852', '', '500', '2023-09-13 13:37:23', 0, NULL, '2023-09-13 13:37:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messageadmin`
--

CREATE TABLE `messageadmin` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `msgid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `status` int(122) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `sid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `min_amount` float NOT NULL,
  `max_amount` float NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `email`, `pname`, `increase`, `bonus`, `status`, `date`, `sid`, `min_amount`, `max_amount`, `duration`) VALUES
(20, 'support@successtrademill.com', 'Standard', 0.5, 0, 1, '2023-09-10 20:21:07', 'mys64fe2533c7a23', 100, 2000, 30),
(21, 'support@successtrademill.com', 'Ruby', 1.3, 20, 1, '2023-09-10 20:22:01', 'mys64fe256984520', 2000, 5000, 30),
(22, 'support@successtrademill.com', 'Treasure Bull', 1.6, 50, 1, '2023-09-10 20:32:06', 'mys64fe27c6aebec', 5000, 10000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pmethod`
--

CREATE TABLE `pmethod` (
  `id` int(6) NOT NULL,
  `email` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `pmethod` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imgs` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pmethod`
--

INSERT INTO `pmethod` (`id`, `email`, `pmethod`, `details`, `imgs`) VALUES
(19, 'support@successtrademill.com', 'Bitcoin', '1MNfsMwiGZdCf8tKApsbtcvJjuHLXi2vDK', 'f00e672b5dfe291fda366400f2897003.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `wl` int(200) NOT NULL,
  `rb` int(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cy` int(6) DEFAULT NULL,
  `email_api` int(11) NOT NULL,
  `refbonus` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sname`, `wl`, `rb`, `bname`, `baddress`, `email`, `title`, `logo`, `phone`, `cy`, `email_api`, `refbonus`) VALUES
(2, 'successtrademill.com', 100, 50, 'Success Trade Mill', '', 'info@successtrademill.com', 'Success Trade Mill', 'logo.svg', '', 2023, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tfa`
--

CREATE TABLE `tfa` (
  `id` int(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `qrcode` blob NOT NULL,
  `result` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfa`
--

INSERT INTO `tfa` (`id`, `email`, `secret`, `qrcode`, `result`, `date`) VALUES
(1, 'A_sowaileh@outlook.com', '6SUN4FNQJXISE66X', 0x68747470733a2f2f6170692e71727365727665722e636f6d2f76312f6372656174652d71722d636f64652f3f646174613d6f747061757468253341253246253246746f7470253246506561726c696e652b46582b54726164652533467365637265742533443653554e34464e514a584953453636582673697a653d32303078323030266563633d4d, 1, '2023-09-13 20:18:52'),
(2, 'A_sowaileh@outlook.com', '6SUN4FNQJXISE66X', 0x68747470733a2f2f6170692e71727365727665722e636f6d2f76312f6372656174652d71722d636f64652f3f646174613d6f747061757468253341253246253246746f7470253246506561726c696e652b46582b54726164652533467365637265742533443653554e34464e514a584953453636582673697a653d32303078323030266563633d4d, 1, '2023-09-13 20:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `refcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify` tinyint(4) NOT NULL DEFAULT 0,
  `ver_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session` tinyint(4) NOT NULL DEFAULT 0,
  `referred` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refbonus` double NOT NULL,
  `walletbalance` double NOT NULL DEFAULT 0,
  `pm` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eth` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `swiftcode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `btc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usdt` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `2fa` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`, `confirm`, `token`, `refcode`, `image`, `verify`, `ver_image`, `session`, `referred`, `refbonus`, `walletbalance`, `pm`, `eth`, `bank`, `accno`, `accname`, `swiftcode`, `btc`, `usdt`, `2fa`, `date`, `phone`, `address`, `country`) VALUES
(198, 'wchloe7964', 'Chloe Wilson', 'wchloe7964@gmail.com', 'G123456', 1, '5l#bhoMPS2', 'eWU6t0kHXE', NULL, 1, NULL, 0, '', 0, 43970, '', '', 'Alli Pay', '82651344265', 'Chloe Wilson', '', 'yu7i38uij3893y33yusgdhgsftdfa', '', 0, '2023-09-15 10:56:24', '4703444037', '111 Jackson St', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `wbtc`
--

CREATE TABLE `wbtc` (
  `id` int(11) NOT NULL,
  `moni` double NOT NULL,
  `mode` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tnx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `wal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbtc`
--

INSERT INTO `wbtc` (`id`, `moni`, `mode`, `email`, `status`, `tnx`, `wal`, `date`) VALUES
(9, 6000, 'Bitcoin', 'wchloe7964@gmail.com', 'pending', 'tnx65043bcb815ee', 'yu7i38uij3893y33yusgdhgsftdfa', '2023-09-15 11:11:07'),
(12, 30, 'Bank Transfer', 'wchloe7964@gmail.com', 'pending', 'tnx650ad2f63d190', 'Alli Pay', '2023-09-20 20:09:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmessage`
--
ALTER TABLE `adminmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btc`
--
ALTER TABLE `btc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `messageadmin`
--
ALTER TABLE `messageadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmethod`
--
ALTER TABLE `pmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tfa`
--
ALTER TABLE `tfa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbtc`
--
ALTER TABLE `wbtc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmessage`
--
ALTER TABLE `adminmessage`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `btc`
--
ALTER TABLE `btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `messageadmin`
--
ALTER TABLE `messageadmin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pmethod`
--
ALTER TABLE `pmethod`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tfa`
--
ALTER TABLE `tfa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `wbtc`
--
ALTER TABLE `wbtc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
