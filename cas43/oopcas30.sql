-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 01:52 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopcas30`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `idart` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idart`, `brand`, `model`, `description`, `full_description`, `price`, `image`) VALUES
(1, 'HP', 'probook', 'Buissnes laptop', 'It\'s a phenomenal smaller dimension, yet it\'s a refined laptop, great for business women or young people who often carry a laptop. It\'s greatly preserved, like a new one. . . Strong processor AMD at 2.2GHz, 3Gb RAM and Hard Disk Drive of 160GB (fully correct, you have a test in Figure 2) Battery battery life around 2-2.5 Hours by estimating Win 7 battery testers', 760, 'hp.jpg'),
(2, 'Asus', 'G580', 'for gamers', 'Exceptionally preserved, as a new look, the 15.4 high gloss display Extremely strong T7100 core2duo processor Web camera, wifi, infrared, what? 5/1 Installed Windows 7 ULTIMATE 32-bit with programs: Office, Avast Antivirus for system protection, VLC for movies and music, Mozzila za internet, Chrome, Adobe, etc. . . Everything is installed and ready to use. . . Warranty 7 days on hardware. . . The adapter (charger) goes with the laptop. . . The sound quality is of a lower quality in my opinion, so there are also a number of prices. . . messages, viber messages, call. No sms messages. Intel Core 2 Duo T7100 processor 2 x 2ghz memory 2gb hard 80 gb without b. s. (image test) display 15.4 inches graphics ati radeon x2300 battery holds 5 min', 1200, 'asus.jpg'),
(3, 'Lenovo', 'Yoga 550', 'buissnes laptop', 'I\'m selling a laptop made from Denmark\'s Premium Machine Lenovo ThinkPad W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 900, 'lenovo.jpg'),
(4, 'Apple', 'macbook air', '13 inches', 'I\'m selling an Excellent Maschine that came from Denmark and is Made for Ozbil Professional Use! Apple Lifebook A556 made for Jobs in the long run, the machine in the Unbeatable Work.', 1200, 'appleair.jpg'),
(5, 'Dell', 'gamerepublics', 'gamerepublics', 'I am selling the Dell XPS L50X laptop in TOP physical and working condition with a machine that will satisfy many and for some serious work in my spare time and according to which Gejming because it owns two graphics of which', 1000, 'dell.jpg'),
(6, 'Apple', 'Macbook', 'ultrabook', 'I\'m selling a laptop made in a woody state with a cracked screen in the left-hand corner that sprawled to the right along the top edge of the screen (See Images!), The casing has traces of transport', 1350, 'mac.jpg'),
(7, 'Acer', 'Swift', 'notebook for buissnes', 'I\'m selling a laptop made in a woody state with a cracked screen in the left-hand corner that sprawled to the right along the top edge of the screen (See Images!), The casing has traces of transport', 500, 'swift.jpg'),
(16, 'Asus', 'XL5', 'buissnes notebook', 'Asus F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 659, 'asus.jpg'),
(17, 'Acer', 'Aspire', ' notebook surf', 'Acer F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 456, 'asus.jpg'),
(19, 'Dell', 'inspirion', 'gamer notebook', 'Dell F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 567, 'dell.jpg'),
(20, 'Hp', 'pavillon', 'buissnes notebook', 'Hp pavilllon F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 890, 'hp.jpg'),
(21, 'Lenovo', 'G580', 'notebook', 'Lenovo G580 F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 600, 'lenovoidea.jpg'),
(22, 'Lenovo', 'thinkpad', 'notebook', 'Lenovo F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 1234, 'lenovothinkpad.jpg'),
(23, 'Lenovo', 'Thinkpad Xtreme', 'buissnes notebook', 'Lenovo ThinkPad T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 2345, 'lenovothinkpad.jpg'),
(24, 'Asus', 'rogxti', 'republic of the games', 'Asus ROG T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 1234, 'asus.jpg'),
(30, 'Dell', 'Carbon i7 nvidia', 'buissnes notebook', 'Dell  CARBON T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 1456, 'dell.jpg'),
(31, 'Lenovo', 'G780', 'game laptop', 'Lenovo ThinkPad T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 900, 'lenovothinkpad.jpg'),
(32, 'Asus', 'republic of game', 'gamer notebook', 'ASUS T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 1000, 'asusrog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `id_art` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `count` int(11) NOT NULL,
  `total` double(10,0) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `order_number`, `name`, `surname`, `email`, `phone`, `adress`, `id_art`, `brand`, `model`, `price`, `count`, `total`, `time`) VALUES
(205, 1, 1, 'uros tatomir', 'tatomir', 'tatomir.uros@gmail.com', '064 2662373', 'Partizanske avijacije 36 Beograd', 2, 'Asus', 'G580', 1200, 1, 900, '2019-05-17 22:31:18'),
(206, 3, 2, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 2, 'Asus', 'G580', 1200, 1, 900, '2019-05-17 22:32:13'),
(207, 3, 3, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 2, 'Asus', 'G580', 1200, 1, 1200, '2019-05-17 23:23:04'),
(208, 3, 3, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 4, 'Apple', 'macbook air', 1200, 3, 3600, '2019-05-17 23:23:04'),
(209, 3, 3, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 5, 2280, '2019-05-17 23:23:04'),
(210, 3, 3, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 16, 'Asus', 'XL5', 659, 8, 5272, '2019-05-17 23:23:04'),
(211, 15, 4, 'jimy', 'hendrix', 'jimy@gmail.com', '1234567', 'jimy@gmail.com', 2, 'Asus', 'G580', 1200, 10, 12000, '2019-05-20 21:23:30'),
(212, 15, 4, 'jimy', 'hendrix', 'jimy@gmail.com', '1234567', 'jimy@gmail.com', 4, 'Apple', 'macbook air', 1200, 3, 3600, '2019-05-20 21:23:31'),
(213, 15, 4, 'jimy', 'hendrix', 'jimy@gmail.com', '1234567', 'jimy@gmail.com', 17, 'Acer', 'Aspire', 456, 50, 22800, '2019-05-20 21:23:31'),
(214, 15, 4, 'jimy', 'hendrix', 'jimy@gmail.com', '1234567', 'jimy@gmail.com', 16, 'Asus', 'XL5', 659, 8, 5272, '2019-05-20 21:23:31'),
(215, 3, 5, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 2, 'Asus', 'G580', 1200, 1, 1200, '2019-05-21 07:46:21'),
(216, 3, 5, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 4, 'Apple', 'macbook air', 1200, 12, 14400, '2019-05-21 07:46:21'),
(217, 3, 5, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 5, 2280, '2019-05-21 07:46:21'),
(218, 3, 5, 'nikola', 'dimitrijevic', 'nikola@gmail.com', '011-5555555', 'lomina 35', 16, 'Asus', 'XL5', 659, 9, 5931, '2019-05-21 07:46:21'),
(219, 3, 6, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 0, '2019-05-22 23:37:58'),
(220, 3, 6, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 1, 0, '2019-05-22 23:37:58'),
(221, 3, 6, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 20, 'Hp', 'pavillon', 890, 1, 0, '2019-05-22 23:37:58'),
(222, 3, 6, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 1, 'HP', 'probook', 760, 1, 0, '2019-05-22 23:37:58'),
(223, 3, 7, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 11, 5016, '2019-05-22 23:43:57'),
(224, 3, 7, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 6, 'Apple', 'Macbook', 1350, 10, 13500, '2019-05-22 23:43:57'),
(225, 3, 8, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 11, 5016, '2019-05-23 16:43:44'),
(226, 3, 8, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 6, 'Apple', 'Macbook', 1350, 10, 13500, '2019-05-23 16:43:44'),
(227, 3, 9, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 11, 5016, '2019-05-23 16:46:53'),
(228, 3, 9, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 6, 'Apple', 'Macbook', 1350, 10, 13500, '2019-05-23 16:46:53'),
(229, 3, 10, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 11, 5016, '2019-05-23 21:20:22'),
(230, 3, 11, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 11, 5500, '2019-05-23 21:21:11'),
(231, 3, 11, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 10, 4560, '2019-05-23 21:21:11'),
(232, 3, 11, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 4, 'Apple', 'macbook air', 1200, 12, 14400, '2019-05-23 21:21:11'),
(233, 3, 12, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:09:48'),
(234, 3, 12, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 10, 4560, '2019-05-23 23:09:48'),
(235, 3, 12, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 4, 'Apple', 'macbook air', 1200, 12, 14400, '2019-05-23 23:09:48'),
(236, 3, 13, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:10:59'),
(237, 3, 13, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 2, 912, '2019-05-23 23:10:59'),
(238, 4, 14, 'uros tatomir', 'tatomir', 'tatomir.uros@gmail.com', '064 2662373', 'Partizanske avijacije 36 Beograd', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:12:48'),
(239, 3, 15, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:29:37'),
(240, 3, 15, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 2, 912, '2019-05-23 23:29:37'),
(241, 3, 16, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:30:06'),
(242, 3, 16, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 2, 912, '2019-05-23 23:30:07'),
(243, 3, 17, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:37:54'),
(244, 3, 17, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 2, 912, '2019-05-23 23:37:54'),
(245, 3, 18, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:38:02'),
(246, 3, 18, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 2, 912, '2019-05-23 23:38:02'),
(247, 3, 19, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:38:36'),
(248, 3, 20, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 1, 500, '2019-05-23 23:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `email`, `adress`, `phone`, `username`, `password`, `admin`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', 'lomina 35', '011-5555555', 'admin', 'admin', 1),
(4, 'uros tatomir', 'tatomir', 'tatomir.uros@gmail.com', 'Partizanske avijacije 36 Beograd', '064 2662373', 'urke', '1234', 0),
(15, 'jimy', 'hendrix', 'jimy@gmail.com', 'jimy@gmail.com', '1234567', 'jimy', '1234', 0),
(16, 'zagor', 'tenej', 'zagor@gmail.com', 'Partizanske avijacije 36 Beograd', '064 2662373', 'zagortenej', '1234', 0),
(17, 'billy', 'kid', 'kid@gmail.com', 'arizona', '000000000', 'kid', '1234', 0),
(18, 'laza', 'tatomir', 'laza@gmail.com', 'Partizanske avijacije 36 Beograd', '064 2662373', 'laza007', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idart`),
  ADD UNIQUE KEY `full_description` (`idart`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
