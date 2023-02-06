-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 03:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`, `code`) VALUES
(1, 'nick', 'nick@gmail.com', '1234', 101112),
(2, 'cyrille', 'cyrille@gmail.com', 'cy1234', 202122),
(3, 'mano', 'mano@gmail.com', 'ma1234', 303132);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClt` int(11) NOT NULL,
  `nomClt` varchar(20) NOT NULL,
  `prenomClt` varchar(30) NOT NULL,
  `numeroClt` varchar(20) NOT NULL,
  `mailClt` varchar(30) NOT NULL,
  `adresseClt` varchar(100) NOT NULL,
  `dateDemande` date NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClt`, `nomClt`, `prenomClt`, `numeroClt`, `mailClt`, `adresseClt`, `dateDemande`, `message`) VALUES
(16, 'ATIKPO', 'nice', '512', 'n@gmail.com', 'Zopomahe', '0005-12-04', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu'),
(21, 'ATIKPO', 'Doriane', '847851212', 'doriane@gmail.com', 'Agoe Zongo non loin de Cim frabrication', '2002-12-01', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu'),
(22, 'Adjewoda', 'Cyrille', '7849212', 'cy@gmail.com', 'Atiegou', '2023-01-31', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu'),
(23, 'Nike', 'nice', '99941973', 'doriane@gmail.com', 'Zopomahe', '2022-12-02', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `idMembre` int(11) NOT NULL,
  `nomMembre` varchar(20) NOT NULL,
  `prenomMembre` varchar(50) NOT NULL,
  `imageMembre` varchar(30) NOT NULL,
  `mailMembre` varchar(30) NOT NULL,
  `contactMembre` varchar(20) NOT NULL,
  `adresseMembre` varchar(50) NOT NULL,
  `specialiteMembre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`idMembre`, `nomMembre`, `prenomMembre`, `imageMembre`, `mailMembre`, `contactMembre`, `adresseMembre`, `specialiteMembre`) VALUES
(13, 'AKAKPO', 'Nicolas', 'log.png', 'nikestarpak1@gmail.com', '99447884', 'Sanguera Zopomahe', 'FullStack, bases de donnees et reseaux'),
(15, 'ADJEWODA ', 'Cyrille', 'log.png', 'cy@gmail.com', '99585420', 'Atiegou', 'Frontend et bases de donnees'),
(18, 'Adjewoda', 'Cyrille', 'log.png', 'nikestarpak1@gmail.com', '58548785', 'Atiegou', 'Dev Frontend Web et App mobile'),
(20, 'Atikpo', 'Afi', 'log.png', 'nikestarpak1@gmail.com', '90940271', 'Agoe', 'Dev Frontend Web et App mobile');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `titreNews` varchar(50) NOT NULL,
  `imageNews` varchar(30) NOT NULL,
  `annonce` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `titreNews`, `imageNews`, `annonce`) VALUES
(24, 'Recherche d\'un analyste programmeur', 'log.png', 'Lorem ipsum dolor sit amet, consectetur adipi45sicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'),
(27, 'Promo', 'log.png', 'Lorem ipsum dolor sit amet, consectetur adipi45sicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'),
(28, 'Deal promotion de pixel', 'log.png', 'Lorem ipsum dolor sit amet, consectetur adipi45sicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'),
(29, 'Promo', 'log.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `nomService` varchar(100) NOT NULL,
  `descriptionService` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idService`, `nomService`, `descriptionService`) VALUES
(12, 'Développement d\'applications Web et mobiles', 'Conception et développement d\'applications web, mobiles et Desktop de qualité respectants les normes et spécifications techniques'),
(14, 'Graphisme et design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(15, 'Reseaux et maintenance', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(18, 'Cours', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClt`);

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idMembre`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idClt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `membre`
--
ALTER TABLE `membre`
  MODIFY `idMembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
