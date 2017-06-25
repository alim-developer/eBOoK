-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2017 at 08:58 PM
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
  `language` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `imgLocate` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pdfLocate` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `see` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books_data`
--

INSERT INTO `books_data` (`id`, `bookName`, `authorName`, `bookInfo`, `book_status`, `isbn_number`, `language`, `imgLocate`, `pdfLocate`, `see`, `user_id`, `uploadTime`) VALUES
(24, 'Ali vÉ™ Nino', 'Qurban SÉ™id', 'First published in Vienna in 1937, this classic story of romance and adventure has been compared to Dr. Zhivago and Romeo and Juliet.  It..\r\n\r\nAli and Nino by Kurban Said problems tutorial complete characters report with research lead dummies integrating all chapters gratis, sparknotes author, portion introduction. For android or cellular Ali and Nino by Kurban Said for iphone, ipad device txt format complete version, data file with page statistics theory, art, torrent. Review essentials work and resources with guidelines trilogy, diaries integrated books. launch. Learning Homework standard paper about Ali and Nino by Kurban Said article record archives retail outlet. Where can i download Ali and Nino by Kurban Said 100 % free ebook pdf kindle visitor textbook on line. Epub electronic overview of the reserve Ali and Nino by Kurban Said total ebook assessment article by amazon ebay selections. Somebody write my dissertation newspapers type help practical, hindi, urdu, English and french, in german and Aussie languages: supported by spain and italian. Standard marketplace paperback, primary cheap handbook Audiobook price rates, adobe converter, app, contemporary details series, essential databases, general public look and document companies.', 'Roman', '', 'az', '2143271901024039754.jpg', '1123487193888536378.pdf', 179, 31, '2017-06-05 13:47:47'),
(26, 'Yalan NÃ¶qtÉ™si', 'Dan Brown', 'NASA\'ya baÄŸlÄ± bir uydu Kuzey Kutbu\'nun derinliklerine gÃ¶mÃ¼lÃ¼ nadir bulunan bir nesnenin varlÄ±ÄŸÄ±nÄ± belirler. Bir sÃ¼redir bocalamakta olan NASA bunu bir zafer olarak niteler. Amerikan uzay politikasÄ±nÄ± ve yaklaÅŸmakta olan baÅŸkanlÄ±k seÃ§imini derinden etkileyecek bir zaferdir bu...\r\nBaÅŸkan, Beyaz Saray Gizli Haber Alma Analisti Rachel Sexton\'Ä± Milne Buzul KatmanÄ±\'na gÃ¶nderir. Karizmatik bilim adamÄ± Michael Tolland baÅŸkanlÄ±ÄŸÄ±nda uzmanlardan oluÅŸan bir ekiple Kuzey Kutbu\'na giden Rachel, bir sÃ¼re sonra akla gelmedik bir oyunu ortaya Ã§Ä±karÄ±r. TÃ¼m dÃ¼nyayÄ± amansÄ±z bir dÃ¼ÅŸmanlÄ±ÄŸa sÃ¼rÃ¼kleyecek bir bilim sahtekÃ¢rlÄ±ÄŸÄ± sÃ¶z konusudur.\r\nRachel, BaÅŸkan\'la baÄŸlantÄ± kuramadan Michael Ã¶lÃ¼mcÃ¼l bir saldÄ±rÄ±ya uÄŸrar. GerÃ§eÄŸin ortaya Ã§Ä±kmasÄ±nÄ± istemeyen esrarengiz biri, katil-lerden oluÅŸan bir ekiple herkesi ortadan kaldÄ±rmaktadÄ±r.\r\nIssÄ±z ve Ã¶lÃ¼mcÃ¼l bir Ã§evrede bir avuÃ§ insanÄ±n tÃ¼m umudu bu korkunÃ§ sahtekÃ¢rlÄ±ÄŸÄ±n arkasÄ±ndaki gÃ¼Ã§lerin ortaya Ã§Ä±karÄ±lmasÄ±dÄ±r. Ã–ÄŸrenecekleri gerÃ§ek ihanetin doruk noktasÄ±dÄ±r.', 'Detektiv', '', 'tr', '10690319051985396969.jpg', '14254531751608769561.pdf', 8, 31, '2017-06-05 13:42:41');

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
(30, 'qwertTa', 'qwerty@mail.ru', '1234df56', '2017-05-05 11:32:50'),
(31, 'samid', 'samid@mail.ru', 'samid1599', '2017-05-15 22:40:22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
