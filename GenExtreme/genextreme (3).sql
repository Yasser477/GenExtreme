-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 01:11 PM
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
-- Database: `genextreme`
--
CREATE DATABASE IF NOT EXISTS `genextreme` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `genextreme`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCat` int(11) NOT NULL,
  `catNam` varchar(11) DEFAULT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCat`, `catNam`, `Image`) VALUES
(1, 'CPU', 'cpu.png'),
(2, 'GPU', 'gpu.png'),
(3, 'MOUSES', 'mouses.png'),
(4, 'HEADSETS', 'headsets.png'),
(5, 'KEYBOARD', 'keyboard.png\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(254) DEFAULT NULL,
  `prenomClient` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `tel` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `motPass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `adresse`, `tel`, `email`, `motPass`) VALUES
(10, 'Yasser Boyrada', 'bourada', 'hannat, mershan', '0656708900', 'yasser.bourada.solicode@gmail.com', 'yasser123321'),
(11, 'youness', 'scemer', 'souani ', '+212638716798', 'souani@gmail.com', 'smallppyounes'),
(12, 'ayoub', 'paya', 'sidi dris', '001010010101', 'brdyasser@gmail.com', 'paya'),
(13, 'fati', 'filo-san', 'mamak', '0611212230', 'fati14ac@gmail.com', 'hilooooooo'),
(14, 'rayan', 'brd', 'mers', '0656708900', 'brdyasser@gmail.com', 'reaaze'),
(15, 'kholoud', 'boulaiche', 'ko,mijfmj', '5555556454', 'brdyasser@gmail.com', 'doba123'),
(16, 'solicode', 'solicode', 'hannat ,mershan , tangier , morocco', '0638716798', 'brdyasser@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `codeCmd` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `adressLiv` varchar(254) DEFAULT NULL,
  `nomClient` varchar(256) DEFAULT NULL,
  `prenomClient` varchar(256) NOT NULL,
  `telClient` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`codeCmd`, `idClient`, `adressLiv`, `nomClient`, `prenomClient`, `telClient`) VALUES
(29, 12, 'merchan, tangier , morocco', 'yasser', 'bourada', 12232323),
(33, 13, 'tangier', 'niema', 'ghanime', 1221212),
(34, 12, 'tangier', 'niema', 'ghanime', 1221212);

-- --------------------------------------------------------

--
-- Table structure for table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `codeCmd` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `qteCmd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `idCat` int(11) NOT NULL,
  `nomProduit` varchar(254) DEFAULT NULL,
  `desProduit` varchar(254) DEFAULT NULL,
  `prix` float(8,0) DEFAULT NULL,
  `qstock` int(11) DEFAULT NULL,
  `imagep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `idCat`, `nomProduit`, `desProduit`, `prix`, `qstock`, `imagep`) VALUES
(1, 2, 'ASUS TUF Gaming GeForce GTX 1650 Super Overclocked 4GB', 'La carte graphique ASUS GeForce GTX 1650 SUPER TUF-GTX1650S-O4G-GAMING est une carte graphique gaming abordable basée sur l’architecture GPU NVIDIA Turing. Idéale pour le jeu en HD, elle embarque de la VRAM GDDR6, une interface mémoire 128 bits et 1280 C', 4500, 10, '1650-tuf.jpg'),
(2, 2, 'ASUS ROG STRIX GeForce RTX 3090 O24G GAMING', 'The ASUS ROG STRIX GeForce RTX 3090 O24G GAMING graphics card features 24 GB of next-generation GDDR6X video memory. This model benefits from high operating frequencies and an improved cooling system for long-term reliability and performance.', 31000, 10, 'asus-rog-3090.jpg'),
(3, 2, 'Gigabyte AORUS GeForce RTX 3060 ELITE 12G (rev. 2.0) (LHR)', 'The Gigabyte AORUS GeForce RTX 3060 ELITE 12G (rev. 2.0) (LHR) graphics card comes with 12 GB of next-generation GDDR6 video memory. This model benefits from high operating frequencies and an improved cooling system for long-term reliability and performa', 9000, 10, 'gigabyte-3060.jpg'),
(4, 2, 'ZOTAC GeForce RTX 3060 AMP White Edition', 'The ZOTAC GeForce RTX 3060 AMP White Edition graphics card features 12 GB of next-generation GDDR6 video memory. This model benefits from high operating frequencies and an improved cooling system for long-term reliability and performance.', 9200, 5, 'rtx3060-oc.jpg'),
(5, 2, 'Gigabyte GeForce RTX 3070 GAMING OC 8G REV 2.0', 'La carte graphique Gigabyte GeForce RTX 3070 GAMING OC 8G embarque 8 Go de mémoire vidéo de nouvelle génération GDDR6. Ce modèle overclocké d’usine bénéficie de fréquences de fonctionnement élevées et d’un système de refroidissement amélioré gage de fiab', 12000, 3, 'rtx-3070-gigabyte.jpg'),
(6, 2, 'ZOTAC GeForce RTX 3070 AMP Holo', 'The ZOTAC GeForce RTX 3070 AMP Holo graphics card features 8 GB of next-generation GDDR6 video memory. This model benefits from high operating frequencies and an improved cooling system for long-term reliability and performance.', 12900, 7, 'zotac-rtx-3070.jpg'),
(9, 2, 'ZOTAC GeForce RTX 3070 Ti Trinity OC\r\n', 'The ZOTAC GeForce RTX 3070 Ti TRINITY OC graphics card features 8 GB of next-generation GDDR6X video memory. This factory-overclocked model boasts high operating frequencies and an improved cooling system for long-term reliability and performance.\r\n\r\n', 12000, 7, 'RTX3070-ZOTAC.jpg'),
(11, 2, 'ASUS ROG STRIX GeForce RTX 3050 O8G (LHR)', 'The ASUS ROG STRIX RTX 3050 O8G (LHR) graphics card features 8 GB of next-generation GDDR6 video memory for sublime graphics, remarkable fluidity and incredible realism. This is the ideal card for playing in Full HD.', 6990, 30, 'ASUS-ROG-STRIX-GeForce-RTX-3050-O8G-LHR-Setup-Game.webp'),
(12, 2, 'PNY GeForce GTX 1650 SUPER', 'The PNY GeForce GTX 1650 SUPER Single Fan Edition graphics card is based on the state-of-the-art NVIDIA Turing architecture. Ultra-realistic graphics, PN: VCG16504SSFPPB ultra-immersive VR and breathtaking gaming performance to enjoy the best of today\'s ', 3990, 5, 'Setup-Game-PNY-GeForce-GTX-1650-SUPER.webp'),
(13, 2, 'ASRock AMD Radeon RX 6700 XT Challenger Pro 12GB OC', 'The ASRock AMD Radeon RX 6700 XT Challenger Pro 12GB OC graphics card is a gaming graphics card powered by RDNA 2 architecture for demanding gamers. It is the ideal graphics card for use in 1440p with ultra-high frame rates.', 11500, 2, 'ASRock-AMD-Radeon-RX-6700-XT-Challenger-Pro-12GB-OC-Setup-Game.webp');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `message` varchar(1000) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nomClient` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`message`, `email`, `nomClient`, `subject`) VALUES
('vvvvvvv', 'vvvvvvvvvvv', '', 'vvvvvvvvv'),
('https://github.com/Yasser477/librqry-version-2-.git', 'brdyasser@gmail.com', '', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
('wa hello ', 'brdyasser@gmail.com', '', 'hello'),
('https://github.com/Yasser477/librqry-version-2-.git', 'brdyasser@gmail.com', 'vfffffffffffff', 'fffffffffffffff'),
('https://github.com/Yasser477/librqry-version-2-.git', 'brdyasser@gmail.com', 'yasser', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
('df', 'df', 'Yasser Boyrada', 'df'),
('df', 'df', 'Yasser Boyrada', 'df'),
('df', 'df', 'Yasser Boyrada', 'df'),
('fdfd', 'fdf', 'df', 'dfdf'),
('fdfd', 'fdf', 'df', 'dfdf'),
('fdfd', 'fdf', 'df', 'dfdf'),
('fdfd', 'fdf', 'df', 'dfdf'),
('ccccc', 'cccccccccccc', 'ccccccccccc', 'ccccccccccc'),
('fffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffff'),
('dddd', 'dddddd', 'dddddddd', 'dddddddddddd'),
('', 'sssssssssss', 'sd', 'ssssssssss'),
('ddddddddddddd', 'df', 'df', 'df'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('sd', 'ds', 'yasser', 'sd'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('dfd', 'df', 'df', 'fdf'),
('ddddddddddd', 'dddddddddd', 'ddddddddd', 'ddddddddd'),
('atatata', 'taaaaata', 'taata', 'atttttttaaaa'),
('tarae', 'tarae', 'tarae', 'tarae'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('yqqsser', 'bourqdq', 'yasser', 'tools'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('d', 'd', 'd', 'd'),
('', '', '', ''),
('', '', '', ''),
('hhhh', 'hhhhhhhhhh', 'hhhhhhhhh', 'hhhhhhhh'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('i need a girlfriend', 'yasser.bourada.solicode@gmail.com', 'yasser', 'soutttt'),
('hello i need help ', 'brdyasser@gmail.com', 'yasser', 'yasser'),
('', '', '', ''),
('', '', '', ''),
('sdsd', 'brdyasser@gmail.com', 'yasser', 'qsdqs'),
('bn bnb', 'brdyasser@gmail.com', 'yasser', 'qsdqs'),
('hello i need help ', 'brdyasser@gmail.com', 'yasser', 'tools'),
('hello', 'hello', 'hello', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCat`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`codeCmd`),
  ADD KEY `idClient` (`idClient`) USING BTREE;

--
-- Indexes for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`codeCmd`,`idProduit`),
  ADD UNIQUE KEY `codeCmd` (`codeCmd`),
  ADD KEY `FK_association3` (`idProduit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `FK_association4` (`idCat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `codeCmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_association1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `FK_association2` FOREIGN KEY (`codeCmd`) REFERENCES `commande` (`codeCmd`),
  ADD CONSTRAINT `FK_association3` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_association4` FOREIGN KEY (`idCat`) REFERENCES `category` (`idCat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
