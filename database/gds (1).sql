-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 06:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(123, 'admin1', 'admin', '30cbb2c44448ffcb0efa88a79c9c4573');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jenis` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `umum` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `jenis`, `image`, `umum`, `created_at`) VALUES
(1, 'Tanah Kawasan Alang Alang Lebar', 2, 'sampel_jual_tanah.jpg', 'Ini deksripsi umum tanah kawasan alang-alang lebar', '2017-12-14 04:49:17'),
(2, 'Alam Surya', 1, 'noimage.jpg', 'Alam surya merupakan bla bla bla bla', '2017-12-14 04:49:17'),
(5, 'Surya Alam 1', 1, 'bl.jpg', 'Surya Alam 1 adlah perumahan yang asri bla bla bla bla bla blaksjdksd;sd; blablablablablabla bla bla bla bla', '2017-12-17 02:13:40'),
(6, 'Surya Alam 2', 1, 'de3.jpg', 'Surya Alam 2 merupakan bagian dari jdflsknlskdlskndn slkdnlsdkns dlknsdls dl dnskndlsknd dlskndl', '2017-12-17 02:15:26'),
(7, 'Surya Alam 3', 1, 'de3.jpg', 'ssdnlsjdn skdnsldkn knsnd nksdlskndl lknsdlnsld sdlnsld lnsldn dlnsldsl dknlsndlsn', '2017-12-17 02:15:33'),
(8, 'Tanah Kawasan SukaBangun 2', 2, 'sampel_jual_tanah2.jpg', 'Ini deksripsi tanah sukabangun 2', '2017-12-20 13:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(16, 2, 'Rumah ku 1', 'Rumah ku 1', '<p>43 4434 345345 34 5345 345 5345123</p>\r\n', 'coinheads.png', '2017-12-14 06:28:51'),
(17, 1, '333', '333', '<p><img alt="hiy" src="https://lh3.googleusercontent.com/oKsgcsHtHu_nIkpNd-mNCAyzUD8xo68laRPOfvFuO0hqv6nDXVNNjEMmoiv9tIDgTj8=w170" style="height:170px; width:170px" />uhui123123</p>\r\n', 'noimage.jpg', '2017-12-14 06:55:21'),
(18, 2, 'Rumah Ku 3', 'Rumah Ku 3', '<p>eta terangkanlah&nbsp;eta terangkanlah&nbsp;eta terangkanlah&nbsp;</p>\r\n', 'noimage.jpg', '2017-12-14 15:49:36'),
(23, 2, 'Rumah ku 2', 'Rumah ku 2', '<p>surya alam 1 adalah aksakskj akslaknslsnlas asknaskasnkas</p>\r\n', 'photo.jpg', '2017-12-16 19:21:27'),
(26, 7, 'Rumah 1', 'Rumah-1', '<p>Deksripsi rumah 1&nbsp;</p>\r\n', 'de3.jpg', '2017-12-17 02:16:34'),
(27, 5, 'Rumah A', 'Rumah-A', '<p>ini deksripsi rumah A</p>\r\n', 'bl.jpg', '2017-12-17 02:18:33'),
(28, 6, 'Rumah B', 'Rumah-B', '<p>deksripsi rumah b</p>\r\n', 'de3.jpg', '2017-12-17 02:19:10'),
(29, 5, 'Rumah C', 'Rumah-C', '<p>deksripsi rumah c</p>\r\n', 'ci4.jpg', '2017-12-17 02:53:34'),
(30, 5, 'Rumah p', 'Rumah-p', '<p>ini adalah deksripsi rumah p</p>\r\n', 'lo1.png', '2017-12-17 05:16:45'),
(32, 1, 'Tanah di jln. jalan', 'Tanah-di-jln-jalan', '<p><strong>Ini deksripsi tanah di jln. Jalan, kawasan&nbsp;</strong>alang alang lebar</p>\r\n', 'tanah.jpg', '2017-12-20 12:24:06'),
(33, 8, 'Tanah di komp. griya permai', 'Tanah-di-komp-griya-permai', '<p>Ini Deksripsi tanah di griya permai sukabangun&nbsp;</p>\r\n', 'sampel_jual_tanah2.jpg', '2017-12-20 13:21:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
