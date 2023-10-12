-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 12, 2023 at 07:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theater_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_movies`
--

CREATE TABLE `action_movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `duration` float NOT NULL,
  `data_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `trailer_yt_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action_movies`
--

INSERT INTO `action_movies` (`id`, `title`, `cover_img`, `description`, `category`, `duration`, `data_showing`, `end_date`, `trailer_yt_link`) VALUES
(1, 'John Wick', 'https://lionsgate.brightspotcdn.com/59/e8/576c91ae47e4aa7fd6240dc48674/john-wick-chapter-1-movies-poster-01.jpg', 'An ex-hit-man comes out of retirement to track down the gangsters that killed his dog and took his car.\r\n\r\n', 'Action', 3, '2016-03-03', '2016-09-14', 'https://www.youtube.com/watch?v=yjRHZEUamCc'),
(2, 'Men in Black', 'https://upload.wikimedia.org/wikipedia/en/thumb/f/fb/Men_in_Black_Poster.jpg/220px-Men_in_Black_Poster.jpg', 'A police officer joins a secret organization that polices and monitors extraterrestrial interactions on Earth.\r\n\r\n', 'Action', 3, '2016-03-09', '2016-03-23', 'https://www.youtube.com/watch?v=BV-WEb2oxLk'),
(3, 'Iron Man', 'https://flxt.tmsimg.com/assets/p170620_p_v8_az.jpg', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit.\n\n', 'Action', 3, '2013-03-26', '2013-03-30', 'https://www.youtube.com/watch?v=L9IF50778v4'),
(4, 'Thor', 'https://upload.wikimedia.org/wikipedia/en/9/95/Thor_%28film%29_poster.jpg', 'The powerful but arrogant god Thor is cast out of Asgard to live amongst humans in Midgard (Earth).\n\n', 'Action', 3, '2014-03-12', '2014-03-12', 'https://www.youtube.com/watch?v=tgB1wUcmbbw'),
(5, 'Avathar', 'https://m.media-amazon.com/images/I/61O8KP0CYVS._SY741_.jpg', 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish.\n', 'Action', 3, '2016-03-23', '2016-03-31', 'https://www.youtube.com/watch?v=6rZWK_KEMAw'),
(6, 'Pathaan ', 'https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg', 'An Indian spy takes on the leader of a group of mercenaries who have nefarious plans to target his homeland.', 'Action', 3, '2016-02-10', '2016-05-10', 'https://www.youtube.com/watch?v=vqu4z34wENw'),
(11, 'Mem Famous', 'data:image/jpeg;base64,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', 'Mem Famous is a Romantic Action Drama film written and directed by Sumanth Prabhas starring himself, Saarya Laxman, Mourya Nalagatla and Mani Aegurla in primary roles', 'Action', 3, '2023-06-07', '2023-06-13', 'https://www.youtube.com/watch?v=aozErj9NqeE');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `email`, `mobile`, `password`, `login_time`) VALUES
(1, 'shiva', 'shiva', 'shivakumarchanti122@gmail.com', 7093001221, 'shiva', '2022-11-23 03:53:57'),
(2, 'admin', 'admin', 'admin@gmail.com', 1000, 'admin', '2022-11-28 16:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(30) NOT NULL,
  `movie_id` int(30) NOT NULL,
  `ts_id` int(30) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `movie_id`, `ts_id`, `lastname`, `firstname`, `contact_no`, `qty`, `date`, `time`) VALUES
(1, 7, 1, 'Smith', 'John', '0909505', 1, '2020-09-18', '11:05:00'),
(2, 5, 1, 'Smith', 'John', '546545646', 1, '2020-09-18', '01:10:00'),
(3, 1, 4, 'Smith', 'John', '0909505', 2, '2020-09-16', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comedy_movies`
--

CREATE TABLE `comedy_movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `duration` float NOT NULL,
  `data_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `trailer_yt_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comedy_movies`
--

INSERT INTO `comedy_movies` (`id`, `title`, `cover_img`, `description`, `category`, `duration`, `data_showing`, `end_date`, `trailer_yt_link`) VALUES
(10, 'Balagam ', 'https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Balagam_Movie_Poster.jpg/220px-Balagam_Movie_Poster.jpg', '  Balagam (transl. Relatives/Group/Supporters) is a 2023 Indian Telugu-language family drama film written and directed by actor Venu Yeldandi, in his directorial debut.[', 'Comedy', 3, '2023-05-09', '2023-05-18', 'https://www.youtube.com/watch?v=8R3Vcy5CaPc');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `duration` float NOT NULL,
  `data_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `trailer_yt_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `duration` float NOT NULL,
  `date_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `trailer_yt_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cover_img`, `description`, `category`, `duration`, `date_showing`, `end_date`, `trailer_yt_link`) VALUES
(1, 'Arya 2', 'https://i.pinimg.com/736x/52/a4/20/52a420a029b40da96c6bc6328f2f2d3a.jpg', 'Sample Movie', '', 2.5, '2020-09-15', '2020-11-30', 'https://www.youtube.com/watch?v=9ix7TUGVYIo'),
(4, 'Robo ', 'https://akamaividz2.zee5.com/image/upload/w_630,h_945,c_scale,f_auto,q_auto/resources/0-0-movie_466418637/portrait/robot_1920x770.jpg', 'Sample 2', '', 3.75, '2020-09-17', '2020-10-29', 'https://www.youtube.com/watch?v=iszwuX1AK6A'),
(14, 'Love Today', 'https://static.moviecrow.com/gallery/20220704/200761-love%20today2.jpg', ' Good romantic movie', '', 3, '2022-11-28', '2022-12-09', 'https://www.youtube.com/watch?v=FaQe8JFGdaM'),
(18, 'Drishyam 2', 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Drishyam_2_2022_film_poster.jpg/220px-Drishyam_2_2022_film_poster.jpg', '  Thriller movie', 'Thriller', 3, '2022-11-28', '2022-12-10', 'https://www.youtube.com/watch?v=FaQe8JFGdaM'),
(20, 'Hit 2', 'https://d1vzdswwroofzl.cloudfront.net/wp-content/uploads/2022/12/HIT-2-Movie.jpg', '  Crime Thriller', 'Thriller', 3, '2022-12-21', '2022-12-31', 'https://www.youtube.com/watch?v=FaQe8JFGdaM'),
(21, 'Avathar', 'https://w0.peakpx.com/wallpaper/433/718/HD-wallpaper-avatar-poster-avatar-poster-blue-hollywood-fantasy-thumbnail.jpg', '  Action', 'Action', 3, '2022-12-02', '2022-12-08', 'https://www.youtube.com/watch?v=6rZWK_KEMAw'),
(22, 'An Action Hero', 'https://upload.wikimedia.org/wikipedia/en/4/47/An_Action_Hero_film_poster.jpg', 'Action', 'Action', 3, '0000-00-00', '0000-00-00', 'https://www.youtube.com/watch?v=6rZWK_KEMAw');

-- --------------------------------------------------------

--
-- Table structure for table `payment_accounts`
--

CREATE TABLE `payment_accounts` (
  `order_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `Cardname` varchar(225) NOT NULL,
  `Cardnumber` bigint(100) NOT NULL,
  `movieId` int(100) NOT NULL,
  `theaterId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_accounts`
--

INSERT INTO `payment_accounts` (`order_id`, `id`, `name`, `Cardname`, `Cardnumber`, `movieId`, `theaterId`) VALUES
(39, 7, 'shiva kumar', 'shiva kumar', 45218247892, 5, 8),
(40, 7, 'shiva kumar', 'sRUJAN', 651452052142, 3, 1),
(41, 7, 'shiva kumar', 'AAAAAAAAAAAA', 11, 2, 6),
(42, 7, 'shiva kumar', 'shiva kumar', 23, 5, 8),
(43, 7, 'shiva kumar', 'Shiva Kumar', 64546534465, 1, 1),
(44, 7, 'shiva kumar', 'shiva kumar', 433243342242, 1, 1),
(45, 7, 'shiva kumar', 'shiva kumar chantii', 458487845187, 2, 6),
(46, 7, 'shiva kumar', 'CCCCCCCCC', 0, 1, 1),
(47, 7, 'shiva kumar', 'DQQQQ', 0, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `name`) VALUES
(1, '3D'),
(2, 'Theater 1');

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `theaters_id` int(11) NOT NULL,
  `theaters_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` int(100) NOT NULL,
  `bookstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`theaters_id`, `theaters_name`, `location`, `type`, `price`, `bookstatus`) VALUES
(1, 'Sudha Cinepolis', 'Laldarwaza, Hyderabad', '3D', 200, 'Available'),
(2, 'AMB Cinemas', 'GachiBowli', '3D', 250, 'Avaiable'),
(5, 'Prasads IMAX', 'Necklace Road', '2D/3D', 250, 'Booked'),
(6, 'Cine Planet', 'Kompally', '3D', 230, 'Available'),
(7, 'GVK-ONE', 'Banjara-Hills\r\n', '3D', 300, 'Booked'),
(8, 'Mirajj', 'kothapet', '3D/2D', 200, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `theater_settings`
--

CREATE TABLE `theater_settings` (
  `id` int(30) NOT NULL,
  `theater_id` int(30) NOT NULL,
  `seat_group` varchar(250) NOT NULL,
  `seat_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_settings`
--

INSERT INTO `theater_settings` (`id`, `theater_id`, `seat_group`, `seat_count`) VALUES
(2, 2, 'Box 1', 20),
(3, 2, 'Box 2', 30),
(4, 1, 'Box 1', 30),
(5, 1, 'Box 2', 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adharnumber` int(100) NOT NULL,
  `adharcard` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `mobile`, `email`, `adharnumber`, `adharcard`, `password`) VALUES
(7, 'shiva kumar', 'shivaa', 7093001221, 'shivakumarchanti12@gmail.com', 0, '', 'shivaa'),
(9, 'Abhishek', 'abhi', 72123165, 'abhi@gmail.com', 0, '', 'abhi'),
(10, 'SHIVA KUMAR', 'shivakumar', 88486, 'qq@gmail.com', 0, '', '1'),
(11, 'shiva kumarr', 'chanti', 7093001222, 'shivakumarchanti123@gmail.com', 2147483647, '', 'chanti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_movies`
--
ALTER TABLE `action_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comedy_movies`
--
ALTER TABLE `comedy_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`theaters_id`);

--
-- Indexes for table `theater_settings`
--
ALTER TABLE `theater_settings`
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
-- AUTO_INCREMENT for table `action_movies`
--
ALTER TABLE `action_movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comedy_movies`
--
ALTER TABLE `comedy_movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `theaters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `theater_settings`
--
ALTER TABLE `theater_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
