-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 07:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `groups` text NOT NULL,
  `password` text NOT NULL,
  `date_start` text NOT NULL,
  `date_end` text NOT NULL,
  `time_start` text NOT NULL,
  `time_end` text NOT NULL,
  `status` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `firstname`, `lastname`, `contact`, `address`, `email`, `groups`, `password`, `date_start`, `date_end`, `time_start`, `time_end`, `status`, `type`) VALUES
(0, '', '', '0999999999', '', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', ''),
(1810706, 'House', 'Keeping', '09309070108', 'bacarra', 'housekeeping@gmail.com', '1', '15a794660eb939c36c55e27357d7d15f', 'Monday', 'Wednesday', '10:32', '22:32', '', ''),
(1810707, 'Front', 'Desk', '09309070108', 'Bacarra', 'frontdesk@gmail.com', 'Frontdesk', '83c0cf468771e10150e77501f8beb4ab', 'Sunday', 'Monday', '10:31', '22:31', '', ''),
(4322546, 'Guest', '', '09309070108', 'bacarra', 'guest@gmail.com', 'Guest', '084e0343a0486ff05530df6c705c8bb4', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `ID` int(11) NOT NULL,
  `guest` text NOT NULL,
  `room_number` text NOT NULL,
  `pillow` text NOT NULL,
  `rug` text NOT NULL,
  `bedsheet` text NOT NULL,
  `towel` text NOT NULL,
  `electricfan` text NOT NULL,
  `bed` text NOT NULL,
  `dates` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `amenity_inventory`
--

CREATE TABLE `amenity_inventory` (
  `ID` int(11) NOT NULL,
  `amenity_name` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenity_inventory`
--

INSERT INTO `amenity_inventory` (`ID`, `amenity_name`, `price`) VALUES
(3, 'Towel', 0),
(4, 'Rug', 0),
(5, 'Electric Fan', 0),
(6, 'Bedsheet', 0),
(7, 'soap', 0),
(8, 'pillow', 0),
(9, 'slippers', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `RID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `rooms` text NOT NULL,
  `arrival_date` text NOT NULL,
  `departure_date` text NOT NULL,
  `reserve_date` text NOT NULL,
  `date` text NOT NULL,
  `employee` text NOT NULL,
  `payment` float NOT NULL,
  `transaction_type` text NOT NULL,
  `amenities` text NOT NULL,
  `amenities_status` text NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `check_in` text NOT NULL,
  `check_out` text NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `room_type` text NOT NULL,
  `request` text NOT NULL,
  `other_request` text NOT NULL,
  `room` text NOT NULL,
  `payment` float NOT NULL,
  `credit` float NOT NULL,
  `status` text NOT NULL,
  `date_reserve` datetime NOT NULL,
  `images` varchar(100) NOT NULL,
  `extend` text NOT NULL,
  `requestin` text NOT NULL,
  `reservation_fee` float NOT NULL,
  `service_name` text NOT NULL,
  `service_price` float NOT NULL,
  `service_notif` text NOT NULL,
  `request_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_fee`
--

CREATE TABLE `reservation_fee` (
  `ID` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_fee`
--

INSERT INTO `reservation_fee` (`ID`, `fee`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_type` text NOT NULL,
  `price` float NOT NULL,
  `information` text NOT NULL,
  `pillow` int(11) NOT NULL,
  `rug` int(11) NOT NULL,
  `bedsheet` int(11) NOT NULL,
  `towel` int(11) NOT NULL,
  `electricfan` int(11) NOT NULL,
  `bed` text NOT NULL,
  `status` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `room_number`, `room_type`, `price`, `information`, `pillow`, `rug`, `bedsheet`, `towel`, `electricfan`, `bed`, `status`, `images`) VALUES
(83, 101, 'Executive Suite', 1500, 'The Executive Suite is unrivaled in its ability to give the best of sophisticated lodgings, Ambassador Club amenities, and the comforts of an in-room. A business requirements like an in-room computer, a receiving area, and a state-of-the-art entertainment system, this room should satisfy your business stay.', 3, 3, 3, 3, 3, '2', 'available', 'rooms-3.jpg'),
(84, 102, 'Executive Suite', 1500, 'The Executive Suite is unrivaled in its ability to give the best of sophisticated lodgings, Ambassador Club amenities, and the comforts of an in-room. A business requirements like an in-room computer, a receiving area, and a state-of-the-art entertainment system, this room should satisfy your business stay.', 3, 3, 3, 3, 3, '2', 'available', 'rooms-3.jpg'),
(85, 103, 'Executive Suite', 1500, 'The Executive Suite is unrivaled in its ability to give the best of sophisticated lodgings, Ambassador Club amenities, and the comforts of an in-room. A business requirements like an in-room computer, a receiving area, and a state-of-the-art entertainment system, this room should satisfy your business stay.', 3, 3, 3, 3, 3, '2', 'available', 'rooms-3.jpg'),
(86, 201, 'Family Suite', 1300, 'This charming accommodation of modern taste with traditional accents and a variety of areas for the family to enjoy. It is tastefully designed for traveling families or parties who desire a luxurious residential experience. There are two bedrooms, a spacious dining room, and a family area that fashioned to seat ten people.', 3, 3, 3, 3, 3, '2', 'available', 'rooms-5.jpg'),
(87, 202, 'Family Suite', 1300, 'This charming accommodation of modern taste with traditional accents and a variety of areas for the family to enjoy. It is tastefully designed for traveling families or parties who desire a luxurious residential experience. There are two bedrooms, a spacious dining room, and a family area that fashioned to seat ten people.', 3, 3, 3, 3, 3, '2', 'available', 'rooms-5.jpg'),
(88, 203, 'Family Suite', 1300, 'This charming accommodation of modern taste with traditional accents and a variety of areas for the family to enjoy. It is tastefully designed for traveling families or parties who desire a luxurious residential experience. There are two bedrooms, a spacious dining room, and a family area that fashioned to seat ten people.', 3, 3, 3, 3, 3, '2', 'available', 'rooms-5.jpg'),
(89, 301, 'Junior Suite', 1100, 'Our Junior Suite comes with luxurious space, modern design interiors a separate bathtub and rain shower, and a cutting-edge audio and video entertainment system that would suit everyone. For the discerning guest, it offers plenty of opulent room as well as trendy, clever décor.', 3, 2, 3, 3, 3, '1', 'available', 'rooms-4.jpg'),
(90, 302, 'Junior Suite', 1100, 'Our Junior Suite comes with luxurious space, modern design interiors a separate bathtub and rain shower, and a cutting-edge audio and video entertainment system that would suit everyone. For the discerning guest, it offers plenty of opulent room as well as trendy, clever décor.', 3, 2, 3, 3, 3, '1', 'available', 'rooms-4.jpg'),
(91, 303, 'Junior Suite', 1100, 'Our Junior Suite comes with luxurious space, modern design interiors a separate bathtub and rain shower, and a cutting-edge audio and video entertainment system that would suit everyone. For the discerning guest, it offers plenty of opulent room as well as trendy, clever décor.', 3, 2, 3, 3, 3, '1', 'available', 'rooms-4.jpg'),
(92, 401, 'De Luxe', 900, 'Our deluxe rooms provide attractive and pleasant accommodations with their timeless, neoclassical design and large space. Our deluxe room category, which is decorated with particular touches that make you feel welcome and at home, has all of the modern touches and conveniences that allow you to enjoy the characteristic Waterfront experience.', 2, 2, 2, 3, 3, '1', 'available', 'rooms-1.jpg'),
(93, 402, 'De Luxe', 900, 'Our deluxe rooms provide attractive and pleasant accommodations with their timeless, neoclassical design and large space. Our deluxe room category, which is decorated with particular touches that make you feel welcome and at home, has all of the modern touches and conveniences that allow you to enjoy the characteristic Waterfront experience.', 2, 2, 2, 3, 3, '1', 'available', 'rooms-1.jpg'),
(94, 403, 'De Luxe', 900, 'Our deluxe rooms provide attractive and pleasant accommodations with their timeless, neoclassical design and large space. Our deluxe room category, which is decorated with particular touches that make you feel welcome and at home, has all of the modern touches and conveniences that allow you to enjoy the characteristic Waterfront experience.', 2, 2, 2, 3, 3, '1', 'available', 'rooms-1.jpg'),
(95, 501, 'Standard Room', 750, 'Our Standard Rooms are designed with classic and modern furniture that will be of your satisfaction to stay. This elegant room can be your home away from home with all the amenities you’ll need for a peaceful visit.', 2, 2, 2, 2, 2, '1', 'available', 'rooms-2.jpg'),
(96, 502, 'Standard Room', 750, 'Our Standard Rooms are designed with classic and modern furniture that will be of your satisfaction to stay. This elegant room can be your home away from home with all the amenities you’ll need for a peaceful visit.', 2, 2, 2, 2, 2, '1', 'available', 'rooms-2.jpg'),
(97, 503, 'Standard Room', 750, 'Our Standard Rooms are designed with classic and modern furniture that will be of your satisfaction to stay. This elegant room can be your home away from home with all the amenities you’ll need for a peaceful visit.', 2, 2, 2, 2, 2, '1', 'available', 'rooms-2.jpg'),
(98, 601, 'Economy Room', 500, 'Modern design and classic furniture comes with spacious areas along with LCD television and high-speed network connection allows you to enjoy your stay with comfort price for a stay.', 2, 2, 2, 2, 2, '1', 'available', 'rooms-1.jpg'),
(100, 602, 'Economy Room', 500, 'Modern design and classic furniture comes with spacious areas along with LCD television and high-speed network connection allows you to enjoy your stay with comfort price for a stay.', 2, 2, 2, 2, 2, '1', 'available', 'rooms-1.jpg'),
(101, 603, 'Economy Room', 500, 'Modern design and classic furniture comes with spacious areas along with LCD television and high-speed network connection allows you to enjoy your stay with comfort price for a stay.', 2, 2, 2, 2, 2, '1', 'available', 'rooms-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_dump`
--

CREATE TABLE `room_dump` (
  `roomdump` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_dump`
--

INSERT INTO `room_dump` (`roomdump`) VALUES
('Executive Suite');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `service_name` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `service_name`, `price`) VALUES
(8, 'spa', 199),
(9, 'Laundry', 100),
(10, 'make-up room', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `room_number` (`room_number`) USING HASH;

--
-- Indexes for table `amenity_inventory`
--
ALTER TABLE `amenity_inventory`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `amenity_name` (`amenity_name`) USING HASH;

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation_fee`
--
ALTER TABLE `reservation_fee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `room_number` (`room_number`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `service_name` (`service_name`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4322547;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amenity_inventory`
--
ALTER TABLE `amenity_inventory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reservation_fee`
--
ALTER TABLE `reservation_fee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
