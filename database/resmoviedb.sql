-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 09, 2022 at 03:32 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resmoviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mark Kh', 'khomsan.cho@gmail.com', '1212312121'),
(2, 'Setthapong Le', 'setthapongl63@nu.ac.th', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `director` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `price_per_tic` int NOT NULL,
  `trailers` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `movie_photo`
--

CREATE TABLE `movie_photo` (
  `id` int NOT NULL,
  `movie_id` int NOT NULL,
  `file_path` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `show_id` int NOT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int NOT NULL,
  `theater_id` int NOT NULL,
  `number` int DEFAULT NULL,
  `row` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `seat_reservation`
--

CREATE TABLE `seat_reservation` (
  `id` int NOT NULL,
  `seat_id` int NOT NULL,
  `reservation_id` int NOT NULL,
  `show_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `show_movie`
--

CREATE TABLE `show_movie` (
  `id` int NOT NULL,
  `movie_time` timestamp NULL DEFAULT NULL,
  `movie_id` int NOT NULL,
  `theater_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `seats_no` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_photo`
--
ALTER TABLE `movie_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_movie_TO_movie_photo` (`movie_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_users_TO_reservation` (`user_id`),
  ADD KEY `FK_show_TO_reservation` (`show_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_theater_TO_seat` (`theater_id`);

--
-- Indexes for table `seat_reservation`
--
ALTER TABLE `seat_reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_seat_TO_seat_reservation` (`seat_id`),
  ADD KEY `FK_reservation_TO_seat_reservation` (`reservation_id`),
  ADD KEY `FK_show_TO_seat_reservation` (`show_id`);

--
-- Indexes for table `show_movie`
--
ALTER TABLE `show_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_movie_TO_show` (`movie_id`),
  ADD KEY `FK_theater_TO_show` (`theater_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie_photo`
--
ALTER TABLE `movie_photo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_reservation`
--
ALTER TABLE `seat_reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `show_movie`
--
ALTER TABLE `show_movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_photo`
--
ALTER TABLE `movie_photo`
  ADD CONSTRAINT `FK_movie_TO_movie_photo` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_show_TO_reservation` FOREIGN KEY (`show_id`) REFERENCES `show_movie` (`id`),
  ADD CONSTRAINT `FK_users_TO_reservation` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `FK_theater_TO_seat` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`);

--
-- Constraints for table `seat_reservation`
--
ALTER TABLE `seat_reservation`
  ADD CONSTRAINT `FK_reservation_TO_seat_reservation` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  ADD CONSTRAINT `FK_seat_TO_seat_reservation` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`id`),
  ADD CONSTRAINT `FK_show_TO_seat_reservation` FOREIGN KEY (`show_id`) REFERENCES `show_movie` (`id`);

--
-- Constraints for table `show_movie`
--
ALTER TABLE `show_movie`
  ADD CONSTRAINT `FK_movie_TO_show` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`),
  ADD CONSTRAINT `FK_theater_TO_show` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
