-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2023 at 07:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `football_league`
--

DROP TABLE IF EXISTS `football_league`;
CREATE TABLE IF NOT EXISTS `football_league` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `team` varchar(256) NOT NULL,
  `games_played` int(12) NOT NULL,
  `wins` int(12) NOT NULL,
  `draws` int(12) NOT NULL,
  `loses` int(12) NOT NULL,
  `points` int(12) NOT NULL,
  `league_id` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `football_league`
--

INSERT INTO `football_league` (`id`, `team`, `games_played`, `wins`, `draws`, `loses`, `points`, `league_id`) VALUES
(1, 'Manchester City', 5, 2, 3, 0, 11, 1),
(2, 'Arsenal', 1, 0, 0, 1, 0, 1),
(3, 'Newcastle', 2, 0, 2, 0, 2, 1),
(4, 'Manchester United', 1, 0, 1, 0, 1, 1),
(5, 'Liverpool', 1, 0, 1, 0, 1, 1),
(6, 'Brighton', 4, 1, 2, 1, 5, 1),
(7, 'Tottenham', 1, 0, 1, 0, 1, 1),
(8, 'Aston Villa', 4, 2, 2, 0, 8, 1),
(9, 'Brentford', 2, 0, 0, 2, 0, 1),
(10, 'Fulham', 2, 0, 2, 0, 2, 1),
(11, 'Chelsea', 5, 0, 4, 1, 4, 1),
(12, 'Crystal Palace', 12, 2, 7, 3, 13, 1),
(13, 'Wolverhampton', 11, 3, 5, 3, 14, 1),
(14, 'Bournemouth', 9, 0, 7, 2, 7, 1),
(15, 'West Ham', 4, 3, 1, 0, 10, 1),
(16, 'Nottingham', 1, 0, 1, 0, 1, 1),
(17, 'Everton', 1, 1, 0, 0, 3, 1),
(18, 'Leeds United', 2, 2, 0, 0, 6, 1),
(19, 'Leicester', 3, 1, 1, 1, 4, 1),
(20, 'Southampton', 3, 0, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(12) NOT NULL AUTO_INCREMENT,
  `home_team_id` int(12) NOT NULL,
  `home_team_goals` int(12) NOT NULL,
  `away_team_id` int(12) NOT NULL,
  `away_team_goals` int(12) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `home_team_id`, `home_team_goals`, `away_team_id`, `away_team_goals`, `date`) VALUES
(1, 1, 1, 1, 1, '2023-05-01'),
(2, 20, 2, 18, 3, '2023-05-01'),
(3, 6, 3, 8, 4, '2023-05-08'),
(4, 6, 5, 11, 5, '2023-05-02'),
(5, 12, 2, 13, 4, '2023-05-12'),
(6, 12, 4, 14, 4, '2023-12-05'),
(7, 13, 2, 11, 1, '2023-05-11'),
(8, 13, 0, 6, 0, '2023-05-10'),
(9, 14, 0, 12, 0, '2023-05-03'),
(10, 13, 1, 14, 1, '2023-05-09'),
(11, 3, 2, 20, 2, '2023-05-01'),
(12, 19, 3, 9, 1, '2023-05-02'),
(13, 1, 2, 14, 1, '2023-05-04'),
(14, 15, 1, 8, 1, '2023-05-03'),
(15, 19, 1, 8, 2, '2023-05-01'),
(16, 19, 1, 1, 1, '2023-05-01'),
(17, 9, 0, 15, 1, '2023-05-09'),
(18, 7, 2, 5, 2, '2023-05-16'),
(19, 4, 0, 1, 0, '2023-05-03'),
(20, 8, 0, 3, 0, '2023-05-03'),
(21, 18, 2, 2, 1, '2023-05-09'),
(22, 10, 3, 11, 3, '2023-05-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
