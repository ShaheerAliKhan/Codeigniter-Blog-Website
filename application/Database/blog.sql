-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 02:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--
-- Error reading structure for table blog.about: #1932 - Table 'blog.about' doesn't exist in engine
-- Error reading data for table blog.about: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `blog`.`about`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `about_cards`
--

CREATE TABLE `about_cards` (
  `id` int(11) NOT NULL,
  `card_heading` varchar(255) NOT NULL,
  `card_matter` varchar(2000) NOT NULL,
  `card_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_cards`
--

INSERT INTO `about_cards` (`id`, `card_heading`, `card_matter`, `card_img`) VALUES
(1, 'This is the test heading', 'lorem epsum only', 'https://elearningindustry.com/wp-content/uploads/2019/10/how-design-thinking-transforming-learning-experience-free-ebook.jpg'),
(2, 'This is the second heading', 'this is the second matter', 'https://cdn.lynda.com/course/653220/653220-637342164908745926-16x9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `about_heading` varchar(255) NOT NULL,
  `about_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`about_heading`, `about_description`) VALUES
('This is the dynamic about heading', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--
-- Error reading structure for table blog.home: #1932 - Table 'blog.home' doesn't exist in engine
-- Error reading data for table blog.home: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `blog`.`home`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`id`, `url`) VALUES
(6, 'https://scalethumb.leparking.fr/unsafe/331x248/smart/https://cloud.leparking.fr/2020/06/09/17/04/toyota-supra-supra-mk4-blanc_7633616231.jpg'),
(9, 'https://images.cdn.circlesix.co/image/2/1200/630/5/uploads/posts/2016/09/27cb500de4fe42663df03818b4be57c4.jpg'),
(11, 'https://scalethumb.leparking.fr/unsafe/331x248/smart/https://cloud.leparking.fr/2020/06/09/17/04/toyota-supra-supra-mk4-blanc_7633616231.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `home_heading` varchar(255) NOT NULL,
  `home_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`home_heading`, `home_description`) VALUES
('This is heading is from database', 'Description is updating');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `heading` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`heading`) VALUES
('Here comes the portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_cards`
--

CREATE TABLE `portfolio_cards` (
  `id` int(11) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_cards`
--

INSERT INTO `portfolio_cards` (`id`, `card_name`, `card_img`) VALUES
(2, 'TestCard 2', 'https://i.ebayimg.com/images/g/T0YAAOSwmDxZprfX/s-l400.jpg'),
(3, 'Test Card 2', 'https://i.ebayimg.com/images/g/T0YAAOSwmDxZprfX/s-l400.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_cards`
--
ALTER TABLE `about_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_cards`
--
ALTER TABLE `portfolio_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_cards`
--
ALTER TABLE `about_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolio_cards`
--
ALTER TABLE `portfolio_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
