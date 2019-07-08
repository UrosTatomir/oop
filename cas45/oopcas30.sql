-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 12:07 PM
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
(16, 'Asus', 'XL5', 'buissnes notebook', 'Asus F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 659, 'asus.jpg'),
(17, 'Acer', 'Aspire', ' notebook surf', 'Acer F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 456, 'asus.jpg'),
(19, 'Dell', 'inspirion', 'gamer notebook', 'Dell F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 567, 'dell.jpg'),
(20, 'Hp', 'pavillon', 'buissnes notebook', 'Hp pavilllon F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 890, 'hp.jpg'),
(21, 'Lenovo', 'G580', 'notebook', 'Lenovo G580 F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 600, 'lenovoidea.jpg'),
(22, 'Lenovo', 'thinkpad', 'notebook', 'Lenovo F555LN with a machine in itself that will satisfy many users for everyday use in both free time and some gaming because it owns two Graphics in itself of which one of the 2GB', 1234, 'lenovothinkpad.jpg'),
(23, 'Lenovo', 'Thinkpad Xtreme', 'buissnes notebook', 'Lenovo ThinkPad T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 2345, 'lenovothinkpad.jpg'),
(24, 'Asus', 'rogxti', 'republic of the games', 'Asus ROG T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 1234, 'asus.jpg'),
(30, 'Dell', 'Carbon i7 nvidia', 'buissnes notebook', 'Dell  CARBON T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 1456, 'dell.jpg'),
(32, 'Asus', 'republic of game', 'gamer notebook', 'ASUS T440 with the Machine that will never let you down in your work! The laptop has been tested and completely aligned with the XPS L50X in TOP Physical and Working Condition W530 which is designed for serious work and for a long time working on it! Machine is tested and completely correct, every part of the work is done', 1000, 'asusrog.jpg'),
(34, 'Acer', 'Aspire 3 A315-33-C9QJ 15.6\"HD', 'Laptop Acer Aspire 3 A315-33-C9QJ 15.6\"HD, ', 'EAN kod	4713883800495\r\nModel	Aspire 3 A315-33-C9QJ\r\nProcesor	Intel® Celeron® Dual Core N3060, Brzina: 1.6GHz (Burst do 2.48Ghz) Keš memorija: 2MB\r\nBroj jezgara	2 jezgra\r\nKoli?ina memorije	4GB DDR3, 1 memorijski slot, maksimalno 4GB\r\nSSD	128GB SATA SSD\r\nGrafi?ka kartica	Integrisana Intel HD 400 grafika sa deljenom sistemskom memorijom\r\nDijagonala ekrana	15.6\"\r\nTip ekrana	HD LED-backlight, ComfyView\r\nRezolucija ekrana	1366 x 768 piksela\r\nEkran osetljiv na dodir	Ne\r\nOpti?ki ure?aj	Nema\r\nMreža	Gigabitni LAN 10/100/1000 Mbps, WiFi 802.11ac, Bluetooth 4.0\r\nPovezivanje	?ita? kartica SD, 2xUSB 2.0, 1xUSB 3.0, 1x RJ-45\r\nWeb kamera	0.3 Mpix sa mikrofonom\r\nNa?in unosa podataka	Tastatura sa izdvojenim numeri?kim delom i TouchPad-om\r\nBaterija	2-?elije Litijum-jonska (Li-Ion)\r\nOperativni sistem	Linpus™ Linux®\r\nBoja	Crna\r\nMasa	2.10 kg', 600, '8642959.jpg'),
(35, 'Asus', 'Laptop Asus STRIX ', 'Laptop Asus STRIX GL703GE-GC039 17.3\",', 'EAN kod	4712900984088\r\nModel	ASUS ROG GL703GE-GC039\r\nProcesor	Intel® Core™ i7-8750H, 2.2 GHz - 4.1GHz , 9 MB keš memorije, 6 jezgara, 12 thread-ova\r\nBroj jezgara	6\r\nKoli?ina memorije	16GB DDR4, 2666MHz, 2 memorijska slota, maksimum 32GB\r\nHard disk	1TB SATA3 HDD, 5400rpm\r\nSSD	128GB M.2 PCIe SSD\r\nGrafi?ka kartica	NVIDIA GeForce GTX 1050Ti sa 4GB sopstvene memorije\r\nDijagonala ekrana	17.3\"\r\nTip ekrana	FullHD, IPS, 300nits, Anti glare, 60Hz\r\nRezolucija ekrana	1920 x 1080 piksela\r\nEkran osetljiv na dodir	Ne\r\nOpti?ki ure?aj	Nema\r\nMreža	10/100/1000 Mbps LAN, WiFi 802.11ac (2*2), Bluetooth\r\nPovezivanje	1 x USB 2.0, 1 x USB Type C, 3 x USB 3.1, 1 x HDMI 1.4, 1 x Mini Display port\r\nWeb kamera	720P HD\r\nNa?in unosa podataka	Srpska tastatura sa RGB pozadinskim osvetljenjem, Touchpad\r\nBaterija	64WHrs, 4S1P, 4-cell Li-ion\r\nOperativni sistem	Nema\r\nBoja	Crna\r\nMasa	2.60 Kg', 800, '8632920.jpg'),
(40, 'Dell', 'inspirion', 'ultrabook', 'EAN kod	0190198393685\r\nModel	Macbook Pro 13\", mpxt2cr/a\r\nProcesor	Intel® Core™ i5 Dual Core Processor 7360U, Brzina: 2.3GHz (Turbo do 3.6GHz), Keš memorija: 4MB\r\nKoli?ina memorije	8GB LPDDR3 2133 MHz SDRAM, bez mogu?nosti proširenja\r\nSSD	256GB SSD\r\nGrafi?ka kartica	Intel Iris Plus 640 sa deljenom sistemskom memorijom\r\nEkran	13.3\" IPS Retina LED-backlit glossy 16:10, Rezolucija : 2560 x 1600 piksela\r\nMreža	WiFi: 802.11 ac\r\nPovezivanje	USB-C x 2, Bluetooth 4.2\r\nWeb kamera	1.3 Mpix sa mikrofonom\r\nNa?in unosa podataka	YU tastatura\r\nBaterija	Lithium Polymer\r\nOperativni sistem	Apple macOS Sierra', 600, 'dell inspirion.jpg'),
(41, 'Apple', 'Macbook', 'Macbook retina 13.6', 'EAN kod	0190198393685\r\nModel	Macbook Pro 13\", mpxt2cr/a\r\nProcesor	Intel® Core™ i5 Dual Core Processor 7360U, Brzina: 2.3GHz (Turbo do 3.6GHz), Keš memorija: 4MB\r\nKoli?ina memorije	8GB LPDDR3 2133 MHz SDRAM, bez mogu?nosti proširenja\r\nSSD	256GB SSD\r\nGrafi?ka kartica	Intel Iris Plus 640 sa deljenom sistemskom memorijom\r\nEkran	13.3\" IPS Retina LED-backlit glossy 16:10, Rezolucija : 2560 x 1600 piksela\r\nMreža	WiFi: 802.11 ac\r\nPovezivanje	USB-C x 2, Bluetooth 4.2\r\nWeb kamera	1.3 Mpix sa mikrofonom\r\nNa?in unosa podataka	YU tastatura\r\nBaterija	Lithium Polymer\r\nOperativni sistem	Apple macOS Sierra', 1800, 'macbook000.jpg'),
(42, 'Hp', 'HP 250 G7', 'Laptop HP 250 G7 Sivi15.6\"FHD AG,Intel', 'EAN kod	0193808548574\r\nModel	HP 250 G7, 6BP45EA\r\nProcesor	Intel® Core™ i3-7020U Processor, 2.3GHz, sa 3 MB keš memorije, 2 cores, 4 threads\r\nBroj jezgara	2 jezgra\r\nKoli?ina memorije	4GB SO-DIMM DDR4, maksimalno 8GB\r\nSSD	256 GB\r\nGrafi?ka kartica	Intel HD Graphics 620\r\nDijagonala ekrana	15.6\"\r\nTip ekrana	AG (AntiGlare)\r\nRezolucija ekrana	1366 x 768 piksela\r\nEkran osetljiv na dodir	Ne\r\nOpti?ki ure?aj	DVD±RW\r\nMreža	1x 10/100/1000 Ethernet, 802.11b/g/n/ac, Bluetooth 4.2\r\nPovezivanje	HDMI, RJ45, USB 2.0, 2XUSB 3.1\r\nWeb kamera	HD 720p\r\nNa?in unosa podataka	Tastatura, TouchPad\r\nBaterija	Li-Ion 3 ?elije\r\nOperativni sistem	Nema\r\nOstalo	DTS Studio Sound™;Dual speakers\r\nBoja	Siva\r\nMasa	1,78 kg', 560, 'hp250G7.jpg'),
(43, 'Dell', 'Dell 3567 15.6\"', 'Laptop Dell 3567 15.6\", Intel DC i3-7020U', 'EAN kod	8606013685276\r\nModel	Dell 3567\r\nProcesor	Intel® Core™ i3-7020U, 2.30 GHz, sa 3 MB keš memorije, 2 jezgra, 4 thread-a\r\nBroj jezgara	2 jezgra\r\nKoli?ina memorije	8GB DDR4 2.400 MHz\r\nSSD	240 GB\r\nGrafi?ka kartica	AMD Radeon™ 520 sa 2 GB GDDR5 sopstvene memorije\r\nDijagonala ekrana	15.6\"\r\nTip ekrana	FullHD\r\nRezolucija ekrana	1920x1080 piksela\r\nEkran osetljiv na dodir	Ne\r\nOpti?ki ure?aj	DVD-RW\r\nMreža	WiFi IEEE 802.11ac, Bluetooth\r\nPovezivanje	USB 3.1, USB 2.0, RJ-45, HDMI\r\nNa?in unosa podataka	Tastatura TouchPad\r\nBaterija	4-?elije Litijum-jonska (Li-Ion)\r\nOperativni sistem	Nema\r\nBoja	Crna\r\nMasa	2.3 kg', 560, '8646461-2.jpg'),
(44, 'Apple', 'MacBook Air 13\"', 'MacBook Air 13\" Retina/i5 1.6GHz/8G', 'EAN kod	0190198707758\r\nModel	Apple Macbook Air, mre92cr/a\r\nProcesor	Intel Core i5, Dual Core, 1.6GHz - 3.6GHz, 4MB L3 keš memorije\r\nKoli?ina memorije	8GB, 2133MHz LPDDR3\r\nHard disk	256GB PCIe SSD\r\nGrafi?ka kartica	Intel UHD Graphics 617\r\nEkran	13.3\"\r\nOpti?ki ure?aj	Nema\r\nMreža	802.11ac Wi-Fi, Bluetooth 4.2\r\nPovezivanje	3.5 mm headphone jack, 2 x Thunderbolt 3 (USB-C), DisplayPort, USB-C 3.1 Gen 2\r\nWeb kamera	720p FaceTime HD camera\r\nNa?in unosa podataka	CRO tastatura, Touchpad\r\nBaterija	Integrisana 50.3Wh lithium?polymer\r\nOperativni sistem	MacOS', 1500, '8637176.jpg');

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
(247, 3, 19, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-23 23:38:36'),
(248, 3, 20, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 1, 500, '2019-05-23 23:38:57'),
(249, 3, 21, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-24 18:09:46'),
(250, 3, 21, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 1, 456, '2019-05-24 18:09:47'),
(255, 3, 22, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 20, 'Hp', 'pavillon', 890, 1, 500, '2019-05-25 09:10:13'),
(256, 3, 22, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 2, 'Asus', 'G580', 1200, 10, 4560, '2019-05-25 09:10:13'),
(259, 3, 24, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 7, 'Acer', 'Swift', 500, 1, 500, '2019-05-27 13:27:35'),
(260, 3, 24, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 6, 'Apple', 'Macbook', 1350, 1, 1350, '2019-05-27 13:27:35'),
(261, 3, 24, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 2, 'Asus', 'G580', 1200, 1, 1200, '2019-05-27 13:27:35'),
(262, 3, 25, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 35, 'Asus', 'Laptop Asus STRIX ', 800, 1, 800, '2019-05-27 13:40:33'),
(263, 3, 26, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 22, 'Lenovo', 'thinkpad', 1234, 1, 1234, '2019-05-27 19:52:51'),
(264, 3, 26, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 34, 'Acer', 'Aspire 3 A315-33-C9QJ 15.6\"HD', 600, 1, 600, '2019-05-27 19:52:52'),
(265, 3, 27, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 34, 'Acer', 'Aspire 3 A315-33-C9QJ 15.6\"HD', 600, 1, 600, '2019-05-28 20:31:31'),
(266, 3, 27, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 1, 456, '2019-05-28 20:31:31'),
(267, 3, 28, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 41, 'Apple', 'Macbook', 1800, 1, 1800, '2019-05-28 22:04:47'),
(268, 3, 28, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 4, 'Apple', 'macbook air', 1200, 1, 1200, '2019-05-28 22:04:47'),
(269, 3, 28, 'admin', 'admin', 'admin@gmail.com', '011-5555555', 'lomina 35', 17, 'Acer', 'Aspire', 456, 10, 4560, '2019-05-28 22:04:47');

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
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
