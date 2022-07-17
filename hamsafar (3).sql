-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 09:45 PM
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
-- Database: `hamsafar`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_form`
--

CREATE TABLE `agent_form` (
  `travel_id` int(255) NOT NULL,
  `y_name` varchar(255) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_form`
--

INSERT INTO `agent_form` (`travel_id`, `y_name`, `agent_name`, `reason`) VALUES
(1, 'rupa', 'Hafsa Azhar', 'Because she seems beautiful'),
(2, 'dodo', 'Huda Khan', ''),
(3, 'saltpepper', 'Huda Khan', ''),
(4, 'saltpepper', 'Huda Khan', 'good'),
(5, 'Zoha', 'Hiba Khan', 'She seems better than Hafsa ');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`Id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Hiba Azhar', 'hibaazhar206@gmail.com', '0342561734', 'R-216 Green Town', 'Maldives', 2, '2022-07-28', '2022-08-10'),
(3, 'Zoha', 'nadeemzoha@hotmail.com', '03212511842', '137-b st#31 askari 4 gulistan e johar', 'bali ', 1, '2022-07-28', '2022-08-12'),
(4, 'HAFSA AZHAR', 'azhar4303571@cloud.neduet.edu.pk', '03358142389', 'fn 29/12 malir extension colony', 'Maldives', 2, '2022-07-05', '2022-07-21'),
(5, 'Hafsa Azhar', 'hafsaazhar360@gmail.com', '03327398694', 'fn 29/12 malir extension colony', 'Maldives', 2, '2022-07-01', '2022-07-12'),
(6, '', '', '', '', '', 0, '0000-00-00', '0000-00-00'),
(7, 'Hafsa Azhar', 'hafsaazhar360@gmail.com', '03327398694', 'fn 29/12 malir extension colony', 'Maldives', 2, '2022-07-28', '2022-07-28'),
(8, 'HAFSA AZHAR', 'azhar4303571@cloud.neduet.edu.pk', '03358142389', 'fn 29/12 malir extension colony', 'bffg', 2, '2022-07-03', '2022-07-12'),
(9, 'HAFSA AZHAR', 'azhar4303571@cloud.neduet.edu.pk', '03358142389', 'fn 29/12 malir extension colony', 'Maldives', 2, '2022-07-25', '2022-07-29'),
(10, 'HAFSA AZHAR', 'azhar4303571@cloud.neduet.edu.pk', '03358142389', 'fn 29/12 malir extension colony', 'Maldives', 3, '2022-07-27', '2022-08-03'),
(11, 'saltpepper', 'hibaazhar206@gmail.com', '03327398694', 'fn 29/12 malir extension colony', 'Maldives', 55, '2022-07-29', '2022-07-27'),
(12, 'Hafsa Azhar', 'hafsaazhar360@gmail.com', '03358142389', 'fn 29/12 malir extension colony', 'bali ', 55, '2022-08-04', '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `offer_form`
--

CREATE TABLE `offer_form` (
  `offer_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `percentage` int(255) NOT NULL,
  `exception` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_form`
--

INSERT INTO `offer_form` (`offer_id`, `admin_name`, `p_id`, `percentage`, `exception`, `starting_date`, `ending_date`) VALUES
(1, 'Hafsa Azhar', 12, 34, 'only couples', '2022-06-22', '2022-07-21'),
(3, 'Hiba', 0, 0, '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `package_form`
--

CREATE TABLE `package_form` (
  `package_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `str_from` int(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `duration` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_form`
--

INSERT INTO `package_form` (`package_id`, `admin_name`, `type`, `str_from`, `country`, `city`, `duration`) VALUES
(1, 'Hafsa Azhar', 'economical', 33333333, 'Pakistan', 'karachi', 12),
(2, 'Hafsa Azhar', '', 0, '', '', 0),
(3, 'Hafsa Azhar', '', 0, '', '', 0),
(4, '', '', 0, '', '', 0),
(5, 'Hiba', 'decent', 222, 'Pakistan', 'karachi', 44);

-- --------------------------------------------------------

--
-- Table structure for table `question_form`
--

CREATE TABLE `question_form` (
  `question_id` int(255) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `q_email` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_form`
--

INSERT INTO `question_form` (`question_id`, `q_name`, `q_email`, `question`) VALUES
(1, 'saltpepper', 'hibaazhar206@gmail.com', '?????????');

-- --------------------------------------------------------

--
-- Table structure for table `review_form`
--

CREATE TABLE `review_form` (
  `review_id` int(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_form`
--

INSERT INTO `review_form` (`review_id`, `r_name`, `r_email`, `review`) VALUES
(10, 'Zoha', 'nadeemzoha@hotmail.com', '\"hamsafar\" good work');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `user_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`user_id`, `u_name`, `email`, `password`, `user_type`) VALUES
(1, 'hiba', 'hibakhan@gmail.com', '123', 'user'),
(2, 'Huda', 'huda@gmail.com', '123', 'user'),
(3, 'Aali', 'aali@gmail.com', '123', 'admin'),
(4, 'meenu', 'meenu@gmail.com', '000', 'user'),
(5, 'hamna', 'hamna@gmail.com', '222', 'user'),
(6, 'saltpepper', 'hibaazhar206@gmail.com', '000', 'user'),
(7, 'Zoha', 'nadeemzoha@hotmail.com', 'Kikikuku', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_form`
--
ALTER TABLE `agent_form`
  ADD PRIMARY KEY (`travel_id`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `offer_form`
--
ALTER TABLE `offer_form`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `package_form`
--
ALTER TABLE `package_form`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `question_form`
--
ALTER TABLE `question_form`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `review_form`
--
ALTER TABLE `review_form`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_form`
--
ALTER TABLE `agent_form`
  MODIFY `travel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offer_form`
--
ALTER TABLE `offer_form`
  MODIFY `offer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_form`
--
ALTER TABLE `package_form`
  MODIFY `package_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question_form`
--
ALTER TABLE `question_form`
  MODIFY `question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review_form`
--
ALTER TABLE `review_form`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
