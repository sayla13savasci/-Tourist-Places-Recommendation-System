-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2018 at 08:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Rahat', 'rahat@gmail.com', '40ca651cefb9a6bffa117f429897c5f1');

-- --------------------------------------------------------

--
-- Table structure for table `tourists`
--

CREATE TABLE `tourists` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `passport_no` varchar(50) NOT NULL,
  `visa_no` varchar(50) NOT NULL,
  `passport_expire` date NOT NULL,
  `visa_expire` date NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '12345',
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourists`
--

INSERT INTO `tourists` (`id`, `fname`, `lname`, `nationality`, `birthday`, `birth_place`, `passport_no`, `visa_no`, `passport_expire`, `visa_expire`, `purpose`, `password`, `image`) VALUES
(2, 'Rahat', 'Pervez', 'Bangladeshi', '1996-08-16', 'Bangladeshi', '12345', '8765432', '2020-01-01', '2018-01-15', 'Tour', '54321', '1512745727.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_hotels`
--

CREATE TABLE `tourist_hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `division` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `area` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_hotels`
--

INSERT INTO `tourist_hotels` (`id`, `name`, `type`, `location`, `division`, `district`, `area`, `description`, `image`) VALUES
(6, 'Prashad paradise', '3', 'Cox\'s Bazar', 'Chittagong', 'Cox\'s Bazar', 'Kolatoli', 'Very nice place for stay. ', '1523911433.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_hotel_books`
--

CREATE TABLE `tourist_hotel_books` (
  `id` int(11) NOT NULL,
  `tourist_id` int(11) NOT NULL,
  `tourist_hotel_id` int(11) NOT NULL,
  `tourist_hotel_room_id` int(11) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `booking_days` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourist_hotel_rooms`
--

CREATE TABLE `tourist_hotel_rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `availability` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_hotel_rooms`
--

INSERT INTO `tourist_hotel_rooms` (`id`, `hotel_id`, `room_no`, `bed`, `availability`, `rate`) VALUES
(1, 6, '123', '2', 1, 1500),
(2, 6, '125', '3', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spots`
--

CREATE TABLE `tourist_spots` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `division` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `area` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_spots`
--

INSERT INTO `tourist_spots` (`id`, `name`, `type`, `location`, `division`, `district`, `area`, `description`, `image`) VALUES
(5, 'Inani Beach', 'Beach', 'Cox\'s Bazar', 'Chittagong', 'Cox\'s Bazar', 'Inani', 'Inani Beach (also Enani Beach) is a sea beach in Ukhia Upazila of Cox’s Bazar District, about 18 kilometers long. It has a nice view and has lots of coral stones. These coral stones take on a green shade during the summer & in the rainy season.\r\n\r\nIt is a very beautiful beach known for its rock and coral boulders. The Hills can be seen from one side and sea on the other which makes it really impressive. The view of sunrise and sunset of this beach are very memorable. The blue water and the lines of stones is the main source of attraction for the tourists. The clean blue & shark free water is ideal for bathing and swimming without any fear.\r\n\r\nThe water stored in between stones contain small sea-fish, crabs, snail, and many more. These will keep you busy for all day long. Most tourists choose this place for its silent nature and eccentric environment. Inani beach is famous for its crystal clear water at the beach. Finally, don’t forget to enjoy the sunset at the beach. Try to stay until the sun goes down.\r\n\r\n', '1512771113.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_hotels`
--
ALTER TABLE `tourist_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_hotel_books`
--
ALTER TABLE `tourist_hotel_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_hotel_rooms`
--
ALTER TABLE `tourist_hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourists`
--
ALTER TABLE `tourists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourist_hotels`
--
ALTER TABLE `tourist_hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tourist_hotel_books`
--
ALTER TABLE `tourist_hotel_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourist_hotel_rooms`
--
ALTER TABLE `tourist_hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
