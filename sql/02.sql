-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 05:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `16`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `market_value` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `club_name`, `market_value`) VALUES
(1, 'Manchester City', '959300000'),
(2, 'Chelsea FC', '869400000'),
(3, 'Liverpool FC', '927500000'),
(4, 'Paris Saint-Germain', '818050000'),
(5, 'Bayern Munich', '804500000'),
(6, 'Manchester United', '774250000'),
(7, 'Real Madrid', '756500000'),
(8, 'FC Barcelona', '679000000'),
(9, 'AtlÃ©tico de Madrid', '660500000'),
(10, 'Tottenham Hotspur', '592250000'),
(11, 'Juventus FC', '560600000'),
(12, 'Borussia Dortmund', '560250000'),
(13, 'Inter Milan', '528900000'),
(14, 'Arsenal FC', '521000000'),
(15, 'Leicester City', '514800000'),
(16, 'SSC Napoli', '493850000'),
(17, 'AC Milan', '480100000'),
(18, 'Aston Villa', '464400000'),
(19, 'RB Leipzig', '465600000'),
(20, 'Bayer 04 Leverkusen', '434450000'),
(21, 'Everton FC', '422750000'),
(22, 'Sevilla FC', '411900000'),
(23, 'Real Sociedad', '387400000'),
(24, 'Atalanta BC', '384900000'),
(25, 'Villarreal CF', '381500000');

-- --------------------------------------------------------

--
-- Table structure for table `nation`
--

CREATE TABLE `nation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `market_value` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nation`
--

INSERT INTO `nation` (`id`, `name`, `market_value`) VALUES
(1, 'England', '1300000000'),
(2, 'France', '1020000000'),
(3, 'Brazil', '1010000000'),
(4, 'Germany', '859500000'),
(5, 'Portugal', '823500000'),
(6, 'Spain', '795000000'),
(7, 'Italy', '753500000'),
(8, 'Argentina', '603000000'),
(9, 'Belgium', '586500000'),
(10, 'Netherlands', '560200000'),
(11, 'Croatia', '387500000'),
(12, 'Serbia', '378900000'),
(13, 'Uruguay', '370000000'),
(14, 'Denmark', '330400000'),
(15, 'Turkey', '323250000'),
(16, 'Senegal', '322800000'),
(17, 'Ivory Coast', '321050000'),
(18, 'Poland', '319000000'),
(19, 'Norway', '315400000'),
(20, 'Austria', '293800000'),
(21, 'Switzerland', '253100000'),
(22, 'Scotland', '252850000'),
(23, 'Morocco', '242400000'),
(24, 'United States', '223200000'),
(25, 'Sweden', '222600000');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `dom_app` varchar(100) NOT NULL,
  `int_app` varchar(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `point` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`club_name`),
  ADD UNIQUE KEY `name_2` (`club_name`);

--
-- Indexes for table `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`player_name`),
  ADD UNIQUE KEY `name_2` (`player_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nation`
--
ALTER TABLE `nation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
