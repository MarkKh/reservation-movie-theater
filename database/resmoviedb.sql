-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 09, 2022 at 12:06 PM
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
  `password` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `photo`) VALUES
(1, 'Mark Kh', 'khomsan.cho@gmail.com', '1212312121', 'mark.jpg'),
(2, 'Setthapong Le', 'setthapongl63@nu.ac.th', '123456789', ''),
(3, 'Kanicha Pojanapimond', 'Kanichap63@nu.ac.th', '1997', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `director` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `price_per_tic` int NOT NULL,
  `trailers` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `description`, `director`, `duration`, `languages`, `price_per_tic`, `trailers`, `category`, `photo`) VALUES
(3, 'Luca', 'On the Italian Riviera, an unlikely but strong friendship grows between a human being and a sea monster disguised as a human.', 'Enrico Casarosa', '1h 35m', 'English', 130, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mYfJxlgR2jw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Animation', '202202231415795751.jpg'),
(4, 'X-MEN : Dark Phoenix', 'Jean Grey begins to develop incredible powers that corrupt and turn her into a Dark Phoenix, causing the X-Men to decide if her life is worth more than all of humanity.', 'Simon Kinberg', '1h 53m', 'English', 150, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1-q8C_c-nlM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Action', '202202231479388601.jpg'),
(5, 'Uncharted', 'Street-smart Nathan Drake is recruited by seasoned treasure hunter Victor \"Sully\" Sullivan to recover a fortune amassed by Ferdinand Magellan, and lost 500 years ago by the House of Moncada.', ' Ruben Fleischer', '1h 56m', 'English', 160, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eHp3MbsCbMg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Action', '20220223734850303.jpg'),
(6, 'Black Widow', 'Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.', 'Cate Shortland', '2h 15m', 'English', 100, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ybji16u608U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Action', '2022022362221103.jpg'),
(14, 'Dolittle', 'A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets.', 'Stephen Gaghan', '1h 41m', 'English', 120, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FEf412bSPLs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Advanture', '202202231725608986.jpg'),
(15, 'Captain Marvel', 'Carol Danvers becomes one of the universe\'s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.', ' Anna Boden, Ryan Fleck', '2h 3m', 'English', 160, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Z1BCujX3pw8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Action, Sci-Fri', '202203091362055241.jpg'),
(16, 'Fantastic Beasts: The Secrets of Dumbledore', 'The third installment of the \'Fantastic Beasts and Where to Find Them\' series which follows the adventures of Newt Scamander.', 'David Yates', '2h 39m', 'English', 200, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Y9dr2zw-TXQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Advanture, Fantasy', '202203091992515296.jpg'),
(17, 'Call Me by Your Name', 'In 1980s Italy, romance blossoms between a seventeen-year-old student and the older man hired as his father\'s research assistant.', ' Luca Guadagnino', '2h 12m', 'English, Italy', 170, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gVVhHjyC04k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Romance', '20220309478021879.jpg'),
(18, 'Enola Holmes', 'When Enola Holmes-Sherlock\'s teen sister-discovers her mother missing, she sets off to find her, becoming a super-sleuth in her own right as she outwits her famous brother and unravels a dangerous conspiracy around a mysterious young Lord.', ' Harry Bradbeer', '2h 3m', 'English', 120, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1d0Zf9sXlHk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Crime, Advature', '20220309500779623.jpg'),
(19, 'Annabelle', 'A couple begins to experience terrifying supernatural occurrences involving a vintage doll shortly after their home is invaded by satanic cultists.', 'John R. Leonetti', '1h 39m', 'English', 220, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/paFgQNPGlsg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Horror, Thriller', '202203091818513831.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `show_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `user_id`, `show_id`) VALUES
(1, 3, 6),
(2, 7, 4),
(3, 5, 2),
(4, 4, 1),
(5, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `show_movie`
--

CREATE TABLE `show_movie` (
  `id` int NOT NULL,
  `datetime` datetime NOT NULL,
  `movie_id` int NOT NULL,
  `theater_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `show_movie`
--

INSERT INTO `show_movie` (`id`, `datetime`, `movie_id`, `theater_id`) VALUES
(1, '2022-03-12 10:00:00', 17, 2),
(2, '2022-03-13 09:30:00', 18, 4),
(3, '2022-03-17 14:10:00', 15, 1),
(4, '2022-03-17 22:00:00', 19, 5),
(5, '2022-03-11 11:50:00', 4, 3),
(6, '2022-03-12 11:30:00', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `seats_no` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `name`, `seats_no`) VALUES
(1, 'Theater 1', 20),
(2, 'Theater 2', 50),
(3, 'Theater 3', 40),
(4, 'Theater 4', 70),
(5, 'Theater 5', 80);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile_number`, `email`, `password`) VALUES
(3, 'Pangina Heal', '0615437890', 'panpan@gmail.com', 'panpan2022'),
(4, 'Hidy Amanda Jensen', '0937653841', 'hidy1234@gmail.com', 'hydi1234'),
(5, 'Mark Khomsan', '0616768126', 'khomsanc63@nu.ac.th', '123456'),
(6, 'Catriona Gray', '0964982658', 'catty12@gmail.com', 'catty12'),
(7, 'Indy Jhonsan', '0947842123', 'indy1122@gmail.com', 'indy11223');

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
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_users_TO_reservation` (`user_id`),
  ADD KEY `FK_show_TO_reservation` (`show_id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `show_movie`
--
ALTER TABLE `show_movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_show_TO_reservation` FOREIGN KEY (`show_id`) REFERENCES `show_movie` (`id`),
  ADD CONSTRAINT `FK_users_TO_reservation` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
