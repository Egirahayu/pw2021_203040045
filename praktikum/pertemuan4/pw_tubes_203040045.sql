-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 04:02 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040045`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `img` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anime` varchar(50) NOT NULL,
  `rilis` year(4) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `img`, `nama`, `anime`, `rilis`, `status`) VALUES
(1, 'Aang.png', 'Aang', 'Avatar : The Last Airbender', 2005, 'Completed'),
(2, 'Asta.png', 'Asta', 'Black Clover', 2017, 'On-Going'),
(3, 'Eren.png', 'Eren Yeager', 'Attack On Titan (Shingeki No Kyojin)', 2013, 'On-Going'),
(4, 'Luffy.png', 'Monkey D. Luffy', 'One Piece', 1999, 'On-Going'),
(5, 'Saitama.png', 'Saitama', 'One Punch Man', 2015, 'On-Going'),
(6, 'Goku.png', 'Son Goku', 'Dragon Ball', 1986, 'Completed'),
(7, 'Tanjiro.png', 'Tanjiro Kamado', 'Demon Slayer : Kimetsu No Yaiba', 2019, 'On-Going'),
(8, 'Boruto.png', 'Uzumaki Boruto', 'Boruto : Naruto Next Generation', 2017, 'On-Going'),
(9, 'Naruto.png', 'Uzumaki Naruto', 'Naruto Shippuden', 2007, 'Completed'),
(10, 'Yuji.png', 'Yuji Itadori', 'Jujutsu Kaisen', 2019, 'On-Going');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
