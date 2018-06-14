-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 10 juin 2018 à 06:40
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monsters`
--

-- --------------------------------------------------------

--
-- Structure de la table `monsters`
--

DROP TABLE IF EXISTS `monsters`;
CREATE TABLE IF NOT EXISTS `monsters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Serveur` text NOT NULL,
  `Element` text NOT NULL,
  `Nom` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `monsters`
--

INSERT INTO `monsters` (`ID`, `Serveur`, `Element`, `Nom`) VALUES
(1, 'Global', 'Fire', 'Archer Magique'),
(2, 'Global', 'Fire', 'Bearman'),
(3, 'Global', 'Fire', 'Chasseur de Bêtes'),
(4, 'Global', 'Fire', 'Diablotin'),
(5, 'Global', 'Fire', 'Fée'),
(6, 'Global', 'Fire', 'Garuda'),
(7, 'Global', 'Fire', 'Griffon'),
(8, 'Global', 'Fire', 'Harpie'),
(9, 'Global', 'Fire', 'Harpu'),
(10, 'Global', 'Fire', 'Howl'),
(11, 'Global', 'Fire', 'Lutin'),
(12, 'Global', 'Fire', 'Serpent'),
(13, 'Global', 'Fire', 'Vagabond'),
(14, 'Global', 'Fire', 'Viking'),
(15, 'Global', 'Fire', 'Yéti'),
(16, 'Europe', 'Fire', 'Archer Magique'),
(17, 'Europe', 'Fire', 'Bearman'),
(18, 'Europe', 'Fire', 'Chasseur de Bêtes'),
(19, 'Europe', 'Fire', 'Diablotin'),
(20, 'Europe', 'Fire', 'Fée'),
(21, 'Europe', 'Fire', 'Garuda'),
(22, 'Europe', 'Fire', 'Griffon'),
(23, 'Europe', 'Fire', 'Harpie'),
(24, 'Europe', 'Fire', 'Harpu'),
(25, 'Europe', 'Fire', 'Howl'),
(26, 'Europe', 'Fire', 'Lutin'),
(27, 'Europe', 'Fire', 'Serpent'),
(28, 'Europe', 'Fire', 'Vagabond'),
(29, 'Europe', 'Fire', 'Viking'),
(30, 'Europe', 'Fire', 'Yéti'),
(31, 'Global', 'Water', 'Archer Magique'),
(32, 'Global', 'Water', 'Bearman'),
(33, 'Global', 'Water', 'Cerbère'),
(34, 'Global', 'Water', 'Diablotin'),
(35, 'Global', 'Water', 'Faucheuse'),
(36, 'Global', 'Water', 'Garuda'),
(37, 'Global', 'Water', 'Golem'),
(38, 'Global', 'Water', 'Griffon'),
(39, 'Global', 'Water', 'Harpie'),
(40, 'Global', 'Water', 'Inferno'),
(41, 'Global', 'Water', 'Loup-garou'),
(42, 'Global', 'Water', 'Lutin'),
(43, 'Global', 'Water', 'Salamander'),
(44, 'Global', 'Water', 'Serpent'),
(45, 'Global', 'Water', 'Vagabond'),
(46, 'Global', 'Water', 'Viking'),
(48, 'Europe', 'Water', 'Archer Magique'),
(49, 'Europe', 'Water', 'Bearman'),
(50, 'Europe', 'Water', 'Cerbère'),
(51, 'Europe', 'Water', 'Diablotin'),
(52, 'Europe', 'Water', 'Faucheuse'),
(53, 'Europe', 'Water', 'Garuda'),
(54, 'Europe', 'Water', 'Golem'),
(55, 'Europe', 'Water', 'Griffon'),
(56, 'Europe', 'Water', 'Harpie'),
(57, 'Europe', 'Water', 'Inferno'),
(58, 'Europe', 'Water', 'Loup-garou'),
(59, 'Europe', 'Water', 'Lutin'),
(60, 'Europe', 'Water', 'Salamander'),
(61, 'Europe', 'Water', 'Serpent'),
(62, 'Europe', 'Water', 'Vagabond'),
(63, 'Europe', 'Water', 'Viking'),
(64, 'Global', 'Wind', 'Archer Magique'),
(65, 'Global', 'Wind', 'Bearman'),
(66, 'Global', 'Wind', 'Cerbère'),
(67, 'Global', 'Wind', 'Diablotin'),
(68, 'Global', 'Wind', 'Fée'),
(69, 'Global', 'Wind', 'Golem'),
(70, 'Global', 'Wind', 'Harpu'),
(71, 'Global', 'Wind', 'Homme-lézard'),
(72, 'Global', 'Wind', 'Howl'),
(73, 'Global', 'Wind', 'Inferno'),
(74, 'Global', 'Wind', 'L\'ours de guerre'),
(75, 'Global', 'Wind', 'Loup-garou'),
(76, 'Global', 'Wind', 'Lutin'),
(77, 'Global', 'Wind', 'Viking'),
(78, 'Global', 'Wind', 'Yéti'),
(79, 'Europe', 'Wind', 'Archer Magique'),
(80, 'Europe', 'Wind', 'Bearman'),
(81, 'Europe', 'Wind', 'Cerbère'),
(82, 'Europe', 'Wind', 'Diablotin'),
(83, 'Europe', 'Wind', 'Fée'),
(84, 'Europe', 'Wind', 'Golem'),
(85, 'Europe', 'Wind', 'Harpu'),
(86, 'Europe', 'Wind', 'Homme-lézard'),
(87, 'Europe', 'Wind', 'Howl'),
(88, 'Europe', 'Wind', 'Inferno'),
(89, 'Europe', 'Wind', 'L\'ours de guerre'),
(90, 'Europe', 'Wind', 'Loup-garou'),
(91, 'Europe', 'Wind', 'Lutin'),
(92, 'Europe', 'Wind', 'Viking'),
(93, 'Europe', 'Wind', 'Yéti'),
(94, 'Global', 'Light', 'Bearman'),
(95, 'Global', 'Light', 'Cerbère'),
(96, 'Global', 'Light', 'Cow Girl'),
(97, 'Global', 'Light', 'Diablotin'),
(98, 'Global', 'Light', 'Fée'),
(99, 'Global', 'Light', 'Harpu'),
(100, 'Global', 'Light', 'Howl'),
(101, 'Global', 'Light', 'Inugami'),
(102, 'Global', 'Light', 'L\'ours de guerre'),
(103, 'Global', 'Light', 'Lutin'),
(104, 'Global', 'Light', 'Salamander'),
(105, 'Global', 'Light', 'Vagabond'),
(106, 'Global', 'Light', 'Vagabond'),
(107, 'Global', 'Light', 'Yéti'),
(108, 'Europe', 'Light', 'Bearman'),
(109, 'Europe', 'Light', 'Cerbère'),
(110, 'Europe', 'Light', 'Cow Girl'),
(111, 'Europe', 'Light', 'Diablotin'),
(112, 'Europe', 'Light', 'Fée'),
(113, 'Europe', 'Light', 'Harpu'),
(114, 'Europe', 'Light', 'Howl'),
(115, 'Europe', 'Light', 'Inugami'),
(116, 'Europe', 'Light', 'L\'ours de guerre'),
(117, 'Europe', 'Light', 'Lutin'),
(118, 'Europe', 'Light', 'Salamander'),
(119, 'Europe', 'Light', 'Vagabond'),
(120, 'Europe', 'Light', 'Viking'),
(121, 'Europe', 'Light', 'Yéti'),
(122, 'Global', 'Dark', 'Bearman'),
(123, 'Global', 'Dark', 'Cerbère'),
(124, 'Global', 'Dark', 'Diablotin'),
(125, 'Global', 'Dark', 'Fée'),
(126, 'Global', 'Dark', 'Garuda'),
(127, 'Global', 'Dark', 'Harpu'),
(128, 'Global', 'Dark', 'Howl'),
(129, 'Global', 'Dark', 'Inugami'),
(130, 'Global', 'Dark', 'L\'ours de guerre'),
(131, 'Global', 'Dark', 'Lutin'),
(132, 'Global', 'Dark', 'Salamander'),
(133, 'Global', 'Dark', 'Vagabond'),
(134, 'Global', 'Dark', 'Viking'),
(135, 'Global', 'Dark', 'Yéti');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
