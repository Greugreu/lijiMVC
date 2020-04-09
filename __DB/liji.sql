-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2020 at 08:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liji`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `sujet` text DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delegataire`
--

DROP TABLE IF EXISTS `delegataire`;
CREATE TABLE IF NOT EXISTS `delegataire` (
  `idgardiens` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `lien` varchar(45) NOT NULL,
  `createdAt` datetime NOT NULL,
  `modifiedAt` datetime NOT NULL,
  PRIMARY KEY (`idgardiens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delegataire_has_users`
--

DROP TABLE IF EXISTS `delegataire_has_users`;
CREATE TABLE IF NOT EXISTS `delegataire_has_users` (
  `delegataire_idgardiens` int(11) NOT NULL,
  `users_idUsers` int(11) NOT NULL,
  PRIMARY KEY (`delegataire_idgardiens`,`users_idUsers`),
  KEY `fk_delegataire_has_users_users1_idx` (`users_idUsers`),
  KEY `fk_delegataire_has_users_delegataire1_idx` (`delegataire_idgardiens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `idfactures` int(11) NOT NULL,
  `prix` float DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `echeance` datetime DEFAULT NULL,
  `relance` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `pro_idpro` int(11) NOT NULL,
  PRIMARY KEY (`idfactures`,`pro_idpro`),
  KEY `fk_factures_pro1_idx` (`pro_idpro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

DROP TABLE IF EXISTS `kids`;
CREATE TABLE IF NOT EXISTS `kids` (
  `idkids` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `allergies` tinyint(4) DEFAULT NULL,
  `allergiesPlus` longtext DEFAULT NULL,
  `handicap` tinyint(4) DEFAULT NULL,
  `handicapPlus` longtext DEFAULT NULL,
  `directives` longtext DEFAULT NULL,
  `users_idUsers` int(11) NOT NULL,
  PRIMARY KEY (`idkids`,`users_idUsers`),
  KEY `fk_kids_users_idx` (`users_idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`idkids`, `nom`, `prenom`, `dateNaissance`, `allergies`, `allergiesPlus`, `handicap`, `handicapPlus`, `directives`, `users_idUsers`) VALUES
(1, 'michel', 'michel', '2019-02-12', 0, NULL, 0, NULL, NULL, 1),
(2, 'Durand', 'Corentin', '2019-03-12', 1, 'arachide', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kids_has_pathologie`
--

DROP TABLE IF EXISTS `kids_has_pathologie`;
CREATE TABLE IF NOT EXISTS `kids_has_pathologie` (
  `kids_idkids` int(11) NOT NULL,
  `kids_users_idUsers` int(11) NOT NULL,
  `pathologie_idhandicap` int(11) NOT NULL,
  PRIMARY KEY (`kids_idkids`,`kids_users_idUsers`,`pathologie_idhandicap`),
  KEY `fk_kids_has_pathologie_pathologie1_idx` (`pathologie_idhandicap`),
  KEY `fk_kids_has_pathologie_kids1_idx` (`kids_idkids`,`kids_users_idUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pathologie`
--

DROP TABLE IF EXISTS `pathologie`;
CREATE TABLE IF NOT EXISTS `pathologie` (
  `idhandicap` int(11) NOT NULL AUTO_INCREMENT,
  `handicapnom` varchar(45) DEFAULT NULL,
  `allergienom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idhandicap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `idpro` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nomEntreprise` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `siret` int(14) DEFAULT NULL,
  `tarif` float NOT NULL,
  `note` float DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `places` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idplanning` int(11) NOT NULL AUTO_INCREMENT,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `nourriture` tinyint(4) NOT NULL,
  `faim` tinyint(4) NOT NULL,
  `prix` float NOT NULL,
  `createdAt` datetime NOT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `pro_idpro` int(11) NOT NULL,
  `kids_idkids` int(11) NOT NULL,
  `kids_users_idUsers` int(11) NOT NULL,
  `lock` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idplanning`,`pro_idpro`,`kids_idkids`,`kids_users_idUsers`),
  KEY `fk_planning_pro1_idx` (`pro_idpro`),
  KEY `fk_planning_kids1_idx` (`kids_idkids`,`kids_users_idUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `idreviews` int(11) NOT NULL,
  `note` float DEFAULT NULL,
  `commentaire` longtext DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `reviewscol` varchar(45) DEFAULT NULL,
  `pro_idpro` int(11) NOT NULL,
  PRIMARY KEY (`idreviews`,`pro_idpro`),
  KEY `fk_reviews_pro1_idx` (`pro_idpro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

DROP TABLE IF EXISTS `t_users`;
CREATE TABLE IF NOT EXISTS `t_users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `region` text DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `lieuJob` varchar(255) DEFAULT NULL,
  `telJob` varchar(10) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `nomConjoin` varchar(50) DEFAULT NULL,
  `prenomConjoin` varchar(50) DEFAULT NULL,
  `adresseConjoin` varchar(255) DEFAULT NULL,
  `telephoneConjoin` varchar(10) DEFAULT NULL,
  `mobileConjoin` varchar(10) DEFAULT NULL,
  `jobConjoin` varchar(255) DEFAULT NULL,
  `lieuConjoin` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`idUsers`, `nom`, `prenom`, `adresse`, `region`, `job`, `lieuJob`, `telJob`, `telephone`, `mail`, `nomConjoin`, `prenomConjoin`, `adresseConjoin`, `telephoneConjoin`, `mobileConjoin`, `jobConjoin`, `lieuConjoin`, `password`, `token`, `role`, `createdAt`, `modifiedAt`) VALUES
(1, 'Michel', 'Michel', '23 place saint marc', 'normandie', 'dev', '12 place saint marc', '123456789', '123456789', 'michel@michel.com', 'Michel', 'Micheline', '23 place saint marc', '123456789', '123456789', 'pilier de bar', '5 place saint marc', '$2y$10$WMaI7WVsDhnNpgOZts7UT.7SuAcDLXwZfObF6M4Z0vfMLf7Ty4fL6', 'A7lG2xs3P0RGHD6jrCOua0uxdFhuX6p1EmWkOItuPFppiFZTKGKCAHtwARxpXbowoejHHHvf7O9eAjNM7RgYZ5wjbfmQVbTHiX113VS4cHW1LyymlFAamriohY8Gkid2hPObfCOpXatq5qWWnno3QabplPa6WD8MUUpKkHt0qWnWMlaHgEHLYN9CtLEX0taKjonnvUgten6V06O40LoWjjRGHwVVqTsd1xYturI2nLweYeETLY61wP5DhnL1ban', 3, '2020-03-27 17:58:37', '2020-04-06 10:09:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delegataire_has_users`
--
ALTER TABLE `delegataire_has_users`
  ADD CONSTRAINT `fk_delegataire_has_users_delegataire1` FOREIGN KEY (`delegataire_idgardiens`) REFERENCES `delegataire` (`idgardiens`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_delegataire_has_users_users1` FOREIGN KEY (`users_idUsers`) REFERENCES `t_users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `fk_factures_pro1` FOREIGN KEY (`pro_idpro`) REFERENCES `pro` (`idpro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kids`
--
ALTER TABLE `kids`
  ADD CONSTRAINT `fk_kids_users` FOREIGN KEY (`users_idUsers`) REFERENCES `t_users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kids_has_pathologie`
--
ALTER TABLE `kids_has_pathologie`
  ADD CONSTRAINT `fk_kids_has_pathologie_kids1` FOREIGN KEY (`kids_idkids`,`kids_users_idUsers`) REFERENCES `kids` (`idkids`, `users_idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kids_has_pathologie_pathologie1` FOREIGN KEY (`pathologie_idhandicap`) REFERENCES `pathologie` (`idhandicap`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_planning_kids1` FOREIGN KEY (`kids_idkids`,`kids_users_idUsers`) REFERENCES `kids` (`idkids`, `users_idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_planning_pro1` FOREIGN KEY (`pro_idpro`) REFERENCES `pro` (`idpro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_pro1` FOREIGN KEY (`pro_idpro`) REFERENCES `pro` (`idpro`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
