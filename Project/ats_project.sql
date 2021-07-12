-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 12:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `Id` int(30) NOT NULL,
  `RestaurentName` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `RestaurentId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`Id`, `RestaurentName`, `UserEmail`, `RestaurentId`) VALUES
(81, 'PREETOM', 'bdsfd@g.com', '9'),
(82, 'TAKEOUT', 'bdsfd@g.com', '11'),
(83, 'PREETOM', 'sh@gmail.com', '9'),
(84, 'TAKEOUT', 'sh@gmail.com', '11'),
(85, 'KFC', 'sh@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `Id` int(30) NOT NULL,
  `RestaurentName` varchar(100) NOT NULL,
  `FoodType` varchar(100) NOT NULL,
  `FoodManu` varchar(100) NOT NULL,
  `Price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manu`
--

INSERT INTO `manu` (`Id`, `RestaurentName`, `FoodType`, `FoodManu`, `Price`) VALUES
(1, 'Gloria Jeans Coffee Dhanmondi', 'Mains', 'Chicken Scaloppini', 552),
(3, 'Gloria Jeans Coffee Dhanmondi', 'Mains', 'Chicken Picasso', 440),
(4, 'Gloria Jeans Coffee Dhanmondi', 'Pastas', 'Spaghetti Chicken', 460),
(5, 'Gloria Jeans Coffee Dhanmondi', 'Pastas', 'Spaghetti Chicken', 460),
(6, 'Gloria Jeans Coffee Dhanmondi', 'Sandwiches & Burgers', 'Club Sandwich', 543),
(7, 'Gloria Jeans Coffee Dhanmondi', 'Sandwiches & Burgers', 'Club Sandwich', 543);

-- --------------------------------------------------------

--
-- Table structure for table `restaurent`
--

CREATE TABLE `restaurent` (
  `Id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `MinimumOrder` int(30) NOT NULL,
  `DeliveryFee` int(30) NOT NULL,
  `FoodType` varchar(100) NOT NULL,
  `imgsrc` varchar(100) NOT NULL,
  `startTime` int(30) NOT NULL,
  `endTime` int(30) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurent`
--

INSERT INTO `restaurent` (`Id`, `Name`, `MinimumOrder`, `DeliveryFee`, `FoodType`, `imgsrc`, `startTime`, `endTime`, `City`, `Area`) VALUES
(9, 'PREETOM', 500, 50, 'FASTFOOD', 'coverpic/preetom.jpg', 10, 20, 'DHAKA', 'UTTORA'),
(11, 'TAKEOUT', 300, 50, 'BURGER', 'Fav/like.png', 10, 21, 'DHAKA', 'BONANI'),
(12, 'KFC', 500, 40, 'BURGER', 'coverpic/kfc.png', 10, 23, 'DHAKA', 'BOSHUNDHORA'),
(14, 'XYZ', 400, 50, 'COFFEE', 'Fav/like.png', 4, 21, 'DHAKA', 'GULSHAN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(6) NOT NULL,
  `First` varchar(60) NOT NULL,
  `Last` varchar(60) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `UserType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `First`, `Last`, `Email`, `UserName`, `pass`, `UserType`) VALUES
(10, 'hhh', 'lol', 'lss', 'kaka', 'lala', 'User'),
(11, 'dddd', 'dvdv', 'bdsfd@g.com', 'dsgvsdg23', 'aaaa', 'User'),
(12, 'aaa', 'aaa', 'bdsfd@g.com', 'lsksk', 'aaa', 'User'),
(13, 'szzz', 'zzz', 'bdsfd@g.com', 'ss', '11', 'User'),
(14, 'jjjj', 'jjjj', 'bdsfd@g.com', 'aaaaa', 'aaa', 'User'),
(15, 'hhh', 'hhh', 'bdsfd@g.com', 'ggg', 'ggg', 'User'),
(16, 'oma', 'jjjj', 'bdsfd@g.com', 'shekhor', 'aa', 'User'),
(17, 'sabuj', 'sabuj', 'sh@gmail.com', 'ss12', 'aaaaaaaa', 'User'),
(18, 'jjjj', 'jjjj', 'jj@g.com', 'jjjj', 'jjjjjjjj', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `restaurent`
--
ALTER TABLE `restaurent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restaurent`
--
ALTER TABLE `restaurent`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
