-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 07:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story_telling`
--

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `story_text` longblob NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `user_id`, `rank`, `firstname`, `lastname`, `title`, `category`, `image`, `story_text`, `time`) VALUES
(22, 3, 1, 'j', 'f', 'mmmmmmmmmm', 'Beach', 'E966D42A-9A40-456D-93AE-B09CCCD508E8.jpeg', 0x0909090909090909090920626a6a6a6a6a6a6f090909090920, '2022-04-03 16:56:59'),
(23, 3, 0, 'j', 'f', 'Best Delicay', 'Food', '5F2E7455-6849-47A6-8D95-892196C121A1.jpeg', 0x6c6f72656d206c6f72656d206c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d6c6f72656d, '2022-03-30 20:07:18'),
(24, 3, 0, 'j', 'f', 'mmmmmmmmmm', 'Ecology', '5F2E7455-6849-47A6-8D95-892196C121A1.jpeg', 0x666d6b666666660d0a7770707070707070707070707070707070707070707070666b6620662c66, '2022-03-30 20:08:10'),
(25, 3, 1, 'j', 'f', 'come here', 'Wild Life', '8B9DAC1E-9802-404F-B5D3-8F4E591F3147.jpeg', 0x09090909096d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d090909090920090909090920, '2022-04-03 16:29:18'),
(26, 3, 1, 'j', 'f', 'ggggggggggggggggggggggg', 'Men and Women', '5F2E7455-6849-47A6-8D95-892196C121A1.jpeg', 0x0909090909090909090909090909090909090909090909090909090909090909090909666e69326b707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070707070090909090920090909090920090909090920090909090920090909090920090909090920, '2022-04-03 15:30:04'),
(27, 3, 1, 'j', 'f', 'ffffffffffffff', 'Ecology', '3 (3).jpg', 0x0909090909090909090909090909090909090909090909090920656666666666666666666666666666666666666666666666090909090920090909090920090909090920090909090920, '2022-04-03 16:53:17'),
(28, 3, 1, 'j', 'f', 'big man', 'Culture', '3 (3).jpg', 0x09090909090909090909426967206d616e206973206120676f6f6420706c61636520746f20626520090909090920090909090920, '2022-04-03 16:52:29'),
(29, 7, 1, 'james', 'james', 'blue gate', 'Culture', '1 (2).jpg', 0x09090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909096367766a7668636a6163626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262626262620909090920090909090920090909090920090909090920090909090920090909090920090909090920090909090920090909090920090909090920090909090920090909090920090909090920, '2022-04-03 16:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `rank`, `firstname`, `lastname`, `email`, `password`, `reg_time`) VALUES
(1, 1, 'admin', 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-04-03 16:18:23'),
(7, 0, 'james', 'james', 'james@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-04-03 15:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `story`
--
ALTER TABLE `story`
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
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;