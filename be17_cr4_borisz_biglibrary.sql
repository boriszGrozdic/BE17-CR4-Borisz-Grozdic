-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 08:36 PM
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
-- Database: `be17_cr4_borisz_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ISBN_code` int(16) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Author_first_name` varchar(40) NOT NULL,
  `Author_last_name` varchar(40) NOT NULL,
  `Publisher_name` varchar(40) NOT NULL,
  `Publisher_address` varchar(40) NOT NULL,
  `Publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `Title`, `Image`, `ISBN_code`, `Description`, `Type`, `Author_first_name`, `Author_last_name`, `Publisher_name`, `Publisher_address`, `Publish_date`) VALUES
(2, 'The Silent Patient', '636e762ad5ea1.jpg', 324325232, 'The instant #1 New York Times bestseller ', 'Book', 'Alex', ' Michaelides', ' Celadon Books', 'Rosslergasse 3', '2017-11-15'),
(3, 'Shatter Me', '636e733eba4a7.jpg', 534534423, 'Fiction-writing also has modes: action, exposition, description, dialogue, summary, and transition.', 'Book', 'Tahereh', 'Mafi', ' HarperCollins Publishers', 'Nework street 55', '2016-03-15'),
(4, 'Children of Blood and Bone', '636e763b44742.jpg', 96843434, 'Tomi Adeyemis Children of Blood and Bone conjures a stunning world of dark magic and danger in her.', 'Book', 'Tomi', 'Adeyem', ' Holt & Company, Henry', 'Wallstreet 19', '2014-09-18'),
(5, 'The Selection', '636e74dbe7efb.jpg', 5564322, 'For thirty-five girls, the Selection is the chance of a lifetime. The opportunity to escape the life. ', 'Book', 'Kiera ', 'Cass', ' HarperCollins Publishers', 'Alabama street 4231', '2018-11-30'),
(6, 'Legend', '636e74e78a307.jpg', 12356732, 'What was once the western United States is now home to the Republic, a nation perpetually at war.', 'Book', 'Marie ', 'Lu', ' Penguin Young Readers Group', 'Parris Avenue 63', '2013-04-01'),
(8, 'It Ends with Us : A Novel', '636e754695e50.jpg', 6432346, 'Instant New York Times Bestseller The newest, highly anticipated novel from beloved #1 New York.', 'Book', 'Colleen ', 'Hoover', ' Atria Books', 'Grazstrasse 99', '2021-10-21'),
(9, 'House of Sky and Breath', '636e754f0e078.jpg', 44322512, 'Sequel to the #1 New York Times bestseller! Sarah J. Maas sexy, groundbreaking CRESCENT CITY series.', 'Book', 'Sarah ', 'J. Maas', ' Bloomsbury Publishing USA', 'Seatle street 100', '2017-12-27'),
(10, 'A Court of Frost and Starlight', '636e755d171b5.jpg', 8886543, 'Feyre, Rhysand, and their friends are still busy rebuilding the Night Court and the vastly altered.', 'Book', 'Sarah ', 'J. Maas', 'Bloomsbury Publishing Plc', 'Madrid street 789', '2015-05-22'),
(11, 'Some book', '636e756bdc069.jpg', 2147483647, 'Reporters called the scene “a disaster area,” and I think that was an accurate description. I applied for the position after reading the job description.', 'Book', 'codefactory', 'altmansdorfer strasse 23', '2021-12-17', 'whatever jsut trayingnnndasdij asidjiasd', '2022-02-12'),
(19, 'dsadasdsa', '636e7574d3f0f.jpg', 342453, 'He gave a very vivid and often shocking description of his time in prison.', 'DVD', 'dasads', 'dsasdasd', 'dsaasdsa', 'Rösslergasse 9/3/8', '2022-08-13'),
(20, 'dsadsa', 'product.png', 234234, 'A woman of your description was seen in the area on the night of the crime.', 'CD', 'dsaads', 'sadsa', 'dsaasd', 'dsadsa', '2022-11-24'),
(21, 'Kingdom of Ash', '636e7a8e8435a.jpg', 54321234, 'Years in the making, ones upon a time it was a warrior who defeated dragon.', 'Book', 'John', 'Doe', 'Bayern Munich', 'Frankfurtstrasse 421', '2021-03-12'),
(22, 'SomeText', '636e7b6dd8404.jpg', 45352806, 'George Washington was an American military officer, statesman, and Founding Father who served as the first president of the United States', 'DVD', 'Georg', 'Washington', 'America', 'NewYork street 2359', '2020-07-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
