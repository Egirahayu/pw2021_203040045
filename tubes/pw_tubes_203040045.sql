-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 07:37 PM
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
  `pengarang` varchar(100) NOT NULL,
  `rilis` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `img`, `nama`, `anime`, `pengarang`, `rilis`) VALUES
(1, 'Aang.jpg', 'Aang', 'Avatar : The Last Airbender', 'Michael Dante DiMartino', 2005),
(2, 'Asta.jpg', 'Asta', 'Black Clover', 'Yuki Tabata', 2017),
(3, 'Eren.jpg', 'Eren Yeager', 'Attack On Titan', 'Hajime Isayama', 2013),
(4, 'Takemichi.jpg', 'Hanagaki Takemichi', 'Tokyo Revengers', 'Ken Wakui', 2021),
(5, 'Ichigo.jpg', 'Kurosaki Ichigo', 'Bleach', 'Tite Kubo', 2004),
(6, 'Luffy.jpg', 'Monkey D. Luffy', 'One Piece', 'Eiichiro Oda', 1999),
(7, 'Saitama-OPM.png', 'Saitama', 'One Punch Man', 'Yusuke Murata', 2015),
(8, 'Gintoki.png', 'Sakata Gintoki', 'Gintama', 'Hideaki Sorachi', 2011),
(9, 'Ishida.jpg', 'Shoya Ishida', 'Koe no Katachi', 'Yoshitoki Oima', 2016),
(10, 'Goku.jpg', 'Son Goku', 'Dragon Ball', 'Akira Toriyama', 1986),
(11, 'Taki.png', 'Taki Tachibana', 'Kimi No Nawa', 'Makoto Shinkai', 2016),
(12, 'Tanjiro.jpg', 'Tanjiro Kamado', 'Kimetsu No Yaiba', 'Koyoharu Gotoge', 2019),
(13, 'Boruto.jpg', 'Uzumaki Boruto', 'Boruto : Naruto Next Generation', 'Masashi Kishimoto', 2017),
(14, 'Naruto.jpg', 'Uzumaki Naruto', 'Naruto Shippuden', 'Masashi Kishimoto', 2007),
(15, 'Yuji.jpg', 'Yuji Itadori', 'Jujutsu Kaisen', 'Gege Akutami', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'egi', '$2y$10$Lp0Cm.dI.5yGmJdWfDyIVOTgmmh3bdu7947WraHplIxeGE2MV63DK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
