-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2019 at 12:23 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.3.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AntreBD`
--

-- --------------------------------------------------------

--
-- Table structure for table `Forum`
--

CREATE TABLE `Forum` (
  `idForum` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `idUser` int(11) NOT NULL,
  `nbMessage` int(11) NOT NULL DEFAULT '0',
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `idUser` int(11) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idForum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `Message`
--
DELIMITER $$
CREATE TRIGGER `totalMessage` AFTER INSERT ON `Message` FOR EACH ROW UPDATE Forum
SET nbMessage = nbMessage + 1
WHERE idForum = inserted.idForum
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `idUser` int(11) NOT NULL,
  `Pseudo` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `Pseudo`, `Password`, `isAdmin`) VALUES
(21, 'Bloon', '$2y$10$M3Oy2gGx0DSZCQim3yj31urj267HNz8LOdIVNv49fSjWMrO3eCSv.', 1),
(22, 'Xander', '$2y$10$OBqNsXSikvHaD9TuMTuVpuJKlIdPP7CWiYtg5UUHVjZL8pNpTKnJG', 0),
(23, 'Druzzt', '$2y$10$7/VsPaDTcpwBQfdj4sbOrukdfIwQfvhrQoMxgHMlqWhh/zIhS0c2.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Forum`
--
ALTER TABLE `Forum`
  ADD PRIMARY KEY (`idForum`),
  ADD KEY `idAuthor` (`idUser`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD KEY `idForum` (`idForum`),
  ADD KEY `idAuthor` (`idUser`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Pseudo` (`Pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Forum`
--
ALTER TABLE `Forum`
  MODIFY `idForum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
