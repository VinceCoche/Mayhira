-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2022 at 11:22 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mayhira`
--

-- --------------------------------------------------------

--
-- Table structure for table `accueilanim`
--

CREATE TABLE `accueilanim` (
  `id` int(11) NOT NULL,
  `accueil_msg` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `accueilanim`
--

INSERT INTO `accueilanim` (`id`, `accueil_msg`) VALUES
(5, 'Il faudrait essayer d\'être heureux ne serait-ce que pour donner l\'exemple.'),
(6, '\"Le vrai bonheur ne dépend d\'aucun être, d\'aucun objet extérieur. Il ne dépend que de nous.\": Dalaï Lama.'),
(7, 'Les seules vraies erreurs sont celles que nous commettons à répétition. Les autres sont des occasions d apprentissages.'),
(8, 'Mayhira, médium pure.'),
(9, 'Consultation sur rendez-vous au 07 50 58 87 05');

-- --------------------------------------------------------

--
-- Table structure for table `goldenbook`
--

CREATE TABLE `goldenbook` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `horodatage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `goldenbook`
--

INSERT INTO `goldenbook` (`id`, `nom`, `comment`, `horodatage`) VALUES
(7, 'vincent', '    c\'est beau\r\n', '2022-04-30 08:52:52'),
(8, 'mireille', '    c\'est bien', '2022-04-30 08:52:52'),
(9, 'jacques', '    c\'est brillant', '2022-04-30 08:52:52'),
(10, 'vincent', '    c\'est bien', '2022-04-30 08:53:07'),
(11, 'mireille', '    c\'est beau', '2022-04-30 08:53:19'),
(12, 'Jacques', '    c\'est brillant', '2022-04-30 08:53:31'),
(14, 'jean', '    c\'est beau', '2022-04-30 10:02:26'),
(15, 'jacques', '    c\'est bien\r\n', '2022-04-30 10:02:41'),
(16, 'mireille', '    c\'est brillant', '2022-04-30 10:02:58'),
(17, 'alex', '    cool', '2022-04-30 10:03:30'),
(18, 'leanne', '    coucou', '2022-04-30 10:04:30'),
(19, 'mireille', '    bonjour', '2022-04-30 10:04:58'),
(20, 'jacques', 'c\'est cool', '2022-05-01 10:06:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accueilanim`
--
ALTER TABLE `accueilanim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goldenbook`
--
ALTER TABLE `goldenbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accueilanim`
--
ALTER TABLE `accueilanim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `goldenbook`
--
ALTER TABLE `goldenbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
