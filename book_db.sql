-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2017 at 10:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `adminName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adminEmail` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adminPassword` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `registerTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books_data`
--

CREATE TABLE `books_data` (
  `id` int(11) NOT NULL,
  `bookName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `authorName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `bookInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `book_status` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isbn_number` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imgLocate` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pdfLocate` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `see` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books_data`
--

INSERT INTO `books_data` (`id`, `bookName`, `authorName`, `bookInfo`, `book_status`, `isbn_number`, `imgLocate`, `pdfLocate`, `see`, `user_id`, `uploadTime`) VALUES
(18, 'Alin and Nino', 'Nino', 'asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad asdfsad', 'Roman', '', '18495884851749023194.jpg', '11760174941112184884.pdf', 0, 24, '2017-05-13 00:14:54'),
(19, 'Saleh SS', 'Simson', 'dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii dfiiii', 'Detektiv', '', '1826872662916285349.jpg', '1139710029168928587.pdf', 0, 24, '2017-05-13 00:16:07'),
(20, 'asdfasdf', 'adsfsadf', 'asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk asdfk', 'Elmi fantastik', '', '4171810291807843258.jpg', '1639439691764379551.pdf', 0, 24, '2017-05-13 00:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `registerTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `registerTime`) VALUES
(2, 'taleh', 'taleh@mail.ru', 'kjsdkfj', '2017-05-01 12:43:18'),
(23, 'jip', 'jp@ma', '55555555', '2017-05-01 20:33:33'),
(24, 'koli', 'koli@mail.ru', 'koliko', '2017-05-01 21:06:06'),
(25, 'ide', 'ide@mail.ru', 'ideide', '2017-05-05 09:29:01'),
(26, 'dfd', 'tttaldeh@gmail.comd', 'talehsdfleh', '2017-05-05 11:04:26'),
(27, 'idrakdddsho', 'idrak@mail.ru', 'idrakidrak', '2017-05-05 10:20:44'),
(28, 'dcoffeedssx', 'cofee@mail.ru', 'cofeeea', '2017-05-05 10:39:00'),
(29, 'jamid', 'pijey@gmail.com', 'pijey12', '2017-05-05 11:10:01'),
(30, 'qwertTa', 'qwerty@mail.ru', '1234df56', '2017-05-05 11:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`);

--
-- Indexes for table `books_data`
--
ALTER TABLE `books_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books_data`
--
ALTER TABLE `books_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
