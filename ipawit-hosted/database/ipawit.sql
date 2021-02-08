-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 07:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipawit`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(15) NOT NULL,
  `who` varchar(2000) NOT NULL,
  `what` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `who`, `what`, `image`) VALUES
(1, 'is a delivery and courier service in the Province of Pangasinan, which aims is to respond immediately in terms of delivery needs of every Filipino family and business direct at your doorstep. Ipaw-IT Express launched this May 2020 in Urdaneta City, Pangasinan, and serving other nearby municipalities in terms of Ipaw-IT Food, Ipaw-IT/Pick-up Parcels, and Ka paw-IT Errands. We are guided with service excellence among our clients through our vision, mission, and core values and serving them wholeheartedly and with a big smile because we CARE that’s why we DELIVER.', 'is an overall conveyance arrangements supplier that expects to associate clients and organizations to the things they need – ONE DELIVERY AT A TIME.', 'about.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `description`) VALUES
(1, 'Be Part of Our Team', 'Call or Text Us\r\n09073515643 / 09166901199'),
(2, 'Be an iPAW-IT Partner', 'Click the button below and email us How!\r\n'),
(3, 'Got cravings?', 'Order from the nearest iPaw-IT branch through our FB page.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `brandfull` varchar(50) NOT NULL,
  `taglineOne` varchar(50) NOT NULL,
  `taglineTwo` varchar(50) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `logo`, `brand`, `brandfull`, `taglineOne`, `taglineTwo`, `poster`, `background`) VALUES
(1, 'logo.png', 'iPaw-IT', 'iPaw-IT Express', 'Care', 'Deliver', 'companymodel.png', 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo`) VALUES
(1, 'Jollibee', 'Jollibee.jpg'),
(2, 'Chowking', 'chowking.jpg'),
(3, 'Starbucks', 'starbucks.png'),
(4, 'Turks', 'turks.jpg'),
(6, 'Yellow Cab', 'yellow-cab.png'),
(7, 'Shakeys', 'shakeys.png'),
(8, 'Red Ribbon', 'red-ribbon-logo.png'),
(9, 'Gong Cha', 'gong.png'),
(10, 'Mang Inasal', 'mang-inasal.jpg'),
(11, 'Urban District', 'urban.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'iPaw-IT FOOD', 'Ipaw-IT Express guarantees to deliver fresh and quality food from your favorite restaurant or food establishment at your doorstep to satisfy your cravings.', 'foods.png'),
(2, 'iPaw-IT/DELIVER PARCELS', 'Pick-Up and Delivery of Parcels are made easy with Ipaw-IT Express. We bring the buyer and seller closer to meeting their needs using advanced IT Solutions in an E-commerce environment.', 'parcels.png'),
(3, 'Ka Paw-IT ERRANDS', 'Ka paw-IT, we knew that you are busy, but nothing to worry, we are here to assist you in all your errands needs like grocery, market, buy medicines, pay your bills, and other surprises for your loved ones leave it to us and everything will make possible.', 'errands.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ipawit', 'ipawit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
