-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 02:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tech_tecnologies`
--

CREATE TABLE `tech_tecnologies` (
  `tech_id` int(11) NOT NULL,
  `tech_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tech_tecnologies`
--

INSERT INTO `tech_tecnologies` (`tech_id`, `tech_name`) VALUES
(2, 'laravel'),
(4, 'PHP'),
(6, 'Symphony'),
(8, 'Zend'),
(10, 'Ruby'),
(11, 'CSS3');

-- --------------------------------------------------------

--
-- Table structure for table `uni_university`
--

CREATE TABLE `uni_university` (
  `uni_id` int(11) NOT NULL,
  `uni_name` varchar(300) NOT NULL,
  `uni_grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_university`
--

INSERT INTO `uni_university` (`uni_id`, `uni_name`, `uni_grade`) VALUES
(1, 'Technical University Varna', 5.4),
(2, 'Brest State Technical University', 3.2),
(18, 'Yale University', 4.7),
(19, 'Columbia University', 5.8),
(20, 'MIT', 4.2),
(27, 'Hogwarts School of Witchcraft', 5.9);

-- --------------------------------------------------------

--
-- Table structure for table `u_users`
--

CREATE TABLE `u_users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(40) NOT NULL,
  `u_surname` varchar(40) NOT NULL,
  `u_family` varchar(40) NOT NULL,
  `u_birthday` date NOT NULL,
  `u_uni_id` text NOT NULL,
  `u_tech_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_users`
--

INSERT INTO `u_users` (`u_id`, `u_name`, `u_surname`, `u_family`, `u_birthday`, `u_uni_id`, `u_tech_id`) VALUES
(71, 'Dzhemile', 'Ahmet', 'Ismail', '1995-12-07', '1', 'PHP(4),Symphony(6),Zend(8),Ruby(10)'),
(103, 'Frodo', 'Begins', 'Hobit', '1912-12-02', '20', 'Symphony(6),Ruby(10),CSS3(11)'),
(104, 'Harry', 'Potter', 'Leviossa', '1980-11-20', '27', 'Symphony(6)'),
(105, 'Ivan', 'Manchev', 'Neivanov', '1991-03-26', '19', 'PHP(4),Symphony(6),Ruby(10)'),
(110, 'Ivan', 'Manchev', 'Neivanov', '2021-03-26', '19', 'PHP(4),Symphony(6),Ruby(10)'),
(111, 'Baby', 'Yoda', 'Hobit', '2021-02-04', '18', 'PHP(4),Ruby(10)'),
(112, 'Baby', 'Yoda', 'Hobit', '2021-02-04', '1', 'laravel(2),PHP(4),Ruby(10)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tech_tecnologies`
--
ALTER TABLE `tech_tecnologies`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `uni_university`
--
ALTER TABLE `uni_university`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `u_users`
--
ALTER TABLE `u_users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_uni_id` (`u_uni_id`(768)),
  ADD KEY `u_tech_id` (`u_tech_id`(768));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tech_tecnologies`
--
ALTER TABLE `tech_tecnologies`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `uni_university`
--
ALTER TABLE `uni_university`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `u_users`
--
ALTER TABLE `u_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
