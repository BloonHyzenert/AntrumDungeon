-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2019 at 04:26 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Forum`
--

INSERT INTO `Forum` (`idForum`, `Subject`, `idUser`, `nbMessage`, `Date`) VALUES
(1, 'Que pensez-vous du jeu ANNO?', 22, 3, '2019-12-12 12:29:15'),
(3, 'SoirÃ©e Halooween : Faut-il venir dÃ©guisÃ©?', 22, 8, '2019-12-12 13:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `idUser` int(11) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idForum` int(11) NOT NULL,
  `idMessage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Message`
--

INSERT INTO `Message` (`idUser`, `Text`, `Date`, `idForum`, `idMessage`) VALUES
(22, 'Bonjour, J\'hÃ©site Ã  acheter le jeu Anno, est-ce un bon achat?', '2019-12-12 14:15:53', 1, 1),
(21, 'Est-ce que quelqu\'un aurait une rÃ©ponse s\'il vous plait?', '2019-12-12 14:41:58', 3, 2),
(22, ' Bloooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooon!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ', '2019-12-12 14:42:24', 3, 3),
(23, 'J\'en sais rien mais Ã§a va Ãªtre une super soirÃ©e, je vais enfin pouvoir tester mon nouveau perso!!', '2019-12-12 14:44:53', 3, 4),
(24, 'Oui Bloon faut venir dÃ©guiser obligatoirement !', '2019-12-12 14:51:27', 3, 5),
(23, 'Quoi ! Mais j\'ai pas de dÃ©guisement!', '2019-12-12 14:52:42', 3, 6),
(23, 'NOOOOOOOOONNNNNNNN!', '2019-12-12 14:52:49', 3, 7),
(21, 'Merci Keldelroth! et Pas de chance Druzzt :P', '2019-12-12 14:53:53', 3, 8),
(23, 'NOOOOOOOOOOOOOOOOOOONNNNNNNNNNNNNNNN!!!!!!!!!!', '2019-12-12 14:54:31', 3, 9),
(23, 'Tout dÃ©pend si tu veux avoir ton annÃ©e ou pas ^^', '2019-12-12 14:56:23', 1, 10),
(23, 'Sinon oui c\'est nu bon jeu!', '2019-12-12 14:58:42', 1, 11);

--
-- Triggers `Message`
--
DELIMITER $$
CREATE TRIGGER `totalMessage` AFTER INSERT ON `Message` FOR EACH ROW UPDATE Forum 
SET nbMessage = (
SELECT COUNT(*) FROM Message
WHERE Message.idForum = Forum.idForum)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `totalMessageDel` AFTER DELETE ON `Message` FOR EACH ROW UPDATE Forum 
SET nbMessage = (
SELECT COUNT(*) FROM Message
WHERE Message.idForum = Forum.idForum)
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `Pseudo`, `Password`, `isAdmin`) VALUES
(21, 'Bloon', '$2y$10$M3Oy2gGx0DSZCQim3yj31urj267HNz8LOdIVNv49fSjWMrO3eCSv.', 1),
(22, 'Xander', '$2y$10$OBqNsXSikvHaD9TuMTuVpuJKlIdPP7CWiYtg5UUHVjZL8pNpTKnJG', 0),
(23, 'Druzzt', '$2y$10$7/VsPaDTcpwBQfdj4sbOrukdfIwQfvhrQoMxgHMlqWhh/zIhS0c2.', 0),
(24, 'Kelderoth', '$2y$10$Y.r2YWt1P41/NVCmxAcSnOSvhHbvRV87BR/jcvWnDyRsacdnfhNzW', 0);

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
  ADD PRIMARY KEY (`idMessage`),
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
  MODIFY `idForum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `idMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
