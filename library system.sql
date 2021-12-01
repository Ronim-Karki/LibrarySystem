-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 06:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
-- Make sure to use database name library system

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `First` text NOT NULL,
  `Last` text NOT NULL,
  `uname` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(12) NOT NULL,
  `DOB` date NOT NULL,
  `Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `First`, `Last`, `uname`, `psw`, `Email`, `Phone`, `DOB`, `Pic`) VALUES
(1, 'Ronim', 'karki', 'admin', 'admin12345', 'Admin@gmail.com', 410938499, '0000-00-00', 'p.png'),
(2, 'Manish', 'Giri', 'Manish123', '12345', 'Manish.giri@gmail.co', 123456, '0000-00-00', 'p.png');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Edtition` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BID`, `Name`, `Author`, `Edtition`, `Status`, `Quantity`, `Department`) VALUES
(1, 'C programming', 'Ronim karki', '4th', 'Available', -8, 'A'),
(2, 'The horizon', 'James gun', '6th', 'Available', -2, 'A'),
(5012, 'Programming', 'Ronim', '6th', 'online', 8, 'A'),
(3, 'Ronim', 'Ronim', '4th', 'available', 2, 'A'),
(4, 'Database', 'Shishir', '4th', 'available', 10, 'B'),
(25, 'Ronim', 'rr', '4th', 'not available', -1, 'A'),
(5, 'programming2', 'Shishir', '6th', 'available', 9, 'A'),
(6, 'Auther gun', 'Ram', '1st', 'Available', 10, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(1, '', 'hello'),
(2, '', ''),
(3, 'Atith123', 'Hello'),
(4, 'Atith123', 'Hello'),
(5, 'Atith123', 'Hello'),
(6, 'Atith123', 'Hello'),
(7, 'Atith123', ''),
(8, 'Atith123', 'Hello'),
(9, 'Atith123', 'Hello'),
(10, 'Atith123', 'Hello'),
(11, '', 'Hello'),
(12, 'admin', 'Hello'),
(13, 'Atith123', 'Hello there'),
(14, 'admin', 'Hello'),
(15, 'admin', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First` text NOT NULL,
  `middle` text NOT NULL,
  `Last` text NOT NULL,
  `DOB` date NOT NULL,
  `inputStreet` varchar(100) NOT NULL,
  `inputCity` text NOT NULL,
  `inputState` text NOT NULL,
  `inputZip` int(5) NOT NULL,
  `inputCounty` text NOT NULL,
  `uname` varchar(15) NOT NULL,
  `psw` varchar(8) NOT NULL,
  `SID` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First`, `middle`, `Last`, `DOB`, `inputStreet`, `inputCity`, `inputState`, `inputZip`, `inputCounty`, `uname`, `psw`, `SID`, `Email`, `Phone`, `pic`) VALUES
('Ronim', '', 'karki', '2020-10-08', '', '', 'NSW', 0, '', 'Ronim123', 'Ronim123', '170190', 'Ronim.karki@gmail.com', '0410938499', '_107894744_alien976.jpg'),
('Ronim', '', 'karki', '2020-10-08', '', '', 'NSW', 0, '', 'Ronim123', 'Ronim123', '170190', 'Ronim.karki@gmail.com', '0410938499', '_107894744_alien976.jpg'),
('Ronim', '', 'karki', '2020-10-08', '', '', 'NSW', 0, '', 'Ronim123', 'Ronim123', '170190', 'Ronim.karki@gmail.com', '0410938499', '_107894744_alien976.jpg'),
('Atith', '', 'don', '1997-06-13', '', '', '', 0, '', 'Atith123', '12345', '123', 'ronim.karki@gmail.com', '1111212', 'p.png'),
('a', '', 'l', '1997-05-12', '', '', '', 0, '', '125', '12121', '12121', 'ronim.karki@gmail.com', '1111212', 'p.png'),
('a', '', 'b', '1997-05-13', '', '', '', 0, '', 'the', 'sdfsdf', 'sdfdsf', 'sdfdsf', '112334', 'p.png'),
('e', '', 'e', '1997-05-13', '', '', '', 0, '', 'r', 'ssdsdsd', 'asdf', 'ronim.karki@gmail.com', '1111212', 'p.png'),
('k', 'k', 'k', '1997-10-10', '', '', '', 0, '', 'rrr', 'rrr', '17', 'rrr', 'rrr', 'p.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
