-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 01:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `meal_id` int(11) NOT NULL,
  `recipe_name` varchar(100) NOT NULL,
  `category_id` bigint(5) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `prep_time` varchar(35) NOT NULL,
  `cook_time` varchar(35) NOT NULL,
  `total_time` varchar(11) NOT NULL,
  `servings` varchar(10) NOT NULL,
  `descript` varchar(1000) NOT NULL,
  `nutrition` varchar(500) NOT NULL,
  `notes` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`meal_id`, `recipe_name`, `category_id`, `img_url`, `prep_time`, `cook_time`, `total_time`, `servings`, `descript`, `nutrition`, `notes`) VALUES
(1, 'Roast Beef Sandwich', 0, 'https://images.ctfassets.net/o19mhvm9a2cm/1RXJlPm27qSBvlckqm0ePl/34df50c716ad9552452ca54213e7d089/Website_RB.png', '5 mins', '5 mins', '10 mins', '1', 'A roast beef sandwich.', '250 calories', 'This is some notes that only i will see.'),
(5, 'Shit Sandwich', 6, 'www.googel.com', '5 mins', '5 mins', '10 mins', '4', 'shitty titties', 'a sandwich', 'stuff here');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`meal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
