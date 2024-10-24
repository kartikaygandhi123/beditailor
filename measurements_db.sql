-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 01:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `measurements_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `id` int(11) NOT NULL,
  `txtId` varchar(50) DEFAULT NULL,
  `txtName` varchar(100) DEFAULT NULL,
  `txtAddress` varchar(255) DEFAULT NULL,
  `txtPhone` varchar(15) DEFAULT NULL,
  `txtCoatLength` varchar(10) DEFAULT NULL,
  `txtCoatChest` varchar(10) DEFAULT NULL,
  `txtCoatStomach` varchar(10) DEFAULT NULL,
  `txtCoatHip` varchar(10) DEFAULT NULL,
  `txtCoatShoulder` varchar(10) DEFAULT NULL,
  `txtCoatSleeve` varchar(10) DEFAULT NULL,
  `cmbCoatStyle` varchar(50) DEFAULT NULL,
  `cmbCoatCollar` varchar(50) DEFAULT NULL,
  `cmbCoatCut` varchar(50) DEFAULT NULL,
  `cmbJacketStyle` varchar(50) DEFAULT NULL,
  `txtJacketBan` varchar(10) DEFAULT NULL,
  `txtPajamaLength` varchar(10) DEFAULT NULL,
  `txtPajamaHip` varchar(10) DEFAULT NULL,
  `txtPajamaWaist` varchar(10) DEFAULT NULL,
  `txtPajamaBottom` varchar(10) DEFAULT NULL,
  `cmbPajamaPlates` varchar(50) DEFAULT NULL,
  `cmbPajamaStyle` varchar(50) DEFAULT NULL,
  `cmbPajamaLastic` varchar(50) DEFAULT NULL,
  `txtPantLength` varchar(10) DEFAULT NULL,
  `txtPantInnerLength` varchar(10) DEFAULT NULL,
  `txtPantHip` varchar(10) DEFAULT NULL,
  `txtPantWaist` varchar(10) DEFAULT NULL,
  `txtPantThigh` varchar(10) DEFAULT NULL,
  `txtPantKnee` varchar(10) DEFAULT NULL,
  `txtPantBottom` varchar(10) DEFAULT NULL,
  `cmbPantPocket` varchar(50) DEFAULT NULL,
  `cmbPantPlate` varchar(50) DEFAULT NULL,
  `txtShirtLength` varchar(10) DEFAULT NULL,
  `txtShirtChest` varchar(10) DEFAULT NULL,
  `txtShirtStomach` varchar(10) DEFAULT NULL,
  `txtShirtShoulder` varchar(10) DEFAULT NULL,
  `txtShirtSleeveFull` varchar(10) DEFAULT NULL,
  `txtShirtSleeveHalf` varchar(10) DEFAULT NULL,
  `txtShirtCollar` varchar(10) DEFAULT NULL,
  `txtShirtCuff` varchar(10) DEFAULT NULL,
  `cmbShirtBackPlate` varchar(50) DEFAULT NULL,
  `cmbShirtPatti` varchar(50) DEFAULT NULL,
  `cmbShirtCut` varchar(50) DEFAULT NULL,
  `cmbShirtShoulderClip` varchar(50) DEFAULT NULL,
  `cmbShirtAbovePocket` varchar(50) DEFAULT NULL,
  `txtKurtaLength` varchar(10) DEFAULT NULL,
  `txtKurtaChest` varchar(10) DEFAULT NULL,
  `txtKurtaStomach` varchar(10) DEFAULT NULL,
  `txtKurtaShoulder` varchar(10) DEFAULT NULL,
  `txtKurtaSleeve` varchar(10) DEFAULT NULL,
  `txtKurtaCollar` varchar(10) DEFAULT NULL,
  `txtKurtaCuff` varchar(10) DEFAULT NULL,
  `cmbKurtaFrontPlate` varchar(50) DEFAULT NULL,
  `cmbKurtaPocketSide` varchar(50) DEFAULT NULL,
  `cmbKurtaShoulderClip` varchar(50) DEFAULT NULL,
  `cmbKurtaFrontPocket` varchar(50) DEFAULT NULL,
  `cmbKurtaPocketFlap` varchar(50) DEFAULT NULL,
  `cmbKurtaStyle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`id`, `txtId`, `txtName`, `txtAddress`, `txtPhone`, `txtCoatLength`, `txtCoatChest`, `txtCoatStomach`, `txtCoatHip`, `txtCoatShoulder`, `txtCoatSleeve`, `cmbCoatStyle`, `cmbCoatCollar`, `cmbCoatCut`, `cmbJacketStyle`, `txtJacketBan`, `txtPajamaLength`, `txtPajamaHip`, `txtPajamaWaist`, `txtPajamaBottom`, `cmbPajamaPlates`, `cmbPajamaStyle`, `cmbPajamaLastic`, `txtPantLength`, `txtPantInnerLength`, `txtPantHip`, `txtPantWaist`, `txtPantThigh`, `txtPantKnee`, `txtPantBottom`, `cmbPantPocket`, `cmbPantPlate`, `txtShirtLength`, `txtShirtChest`, `txtShirtStomach`, `txtShirtShoulder`, `txtShirtSleeveFull`, `txtShirtSleeveHalf`, `txtShirtCollar`, `txtShirtCuff`, `cmbShirtBackPlate`, `cmbShirtPatti`, `cmbShirtCut`, `cmbShirtShoulderClip`, `cmbShirtAbovePocket`, `txtKurtaLength`, `txtKurtaChest`, `txtKurtaStomach`, `txtKurtaShoulder`, `txtKurtaSleeve`, `txtKurtaCollar`, `txtKurtaCuff`, `cmbKurtaFrontPlate`, `cmbKurtaPocketSide`, `cmbKurtaShoulderClip`, `cmbKurtaFrontPocket`, `cmbKurtaPocketFlap`, `cmbKurtaStyle`) VALUES
(18, '23', 'Julie Kelly', 'Ea nemo dolor necess', '+1 (376) 189-86', 'Mollit hic', 'Veniam dol', 'Illum cons', 'Proident c', 'Quibusdam ', 'Labore tem', '', '', '', '', 'Iusto nisi', 'Perferendi', 'Minim nobi', 'Laboriosam', 'Aperiam ob', '', '', '', 'Aut aspern', 'Ut accusan', 'Iure offic', 'Quasi est ', 'Minima lab', 'Aperiam be', 'Voluptatem', '', '', 'Asperiores', 'Anim sunt ', 'Earum amet', 'Dolorem om', 'Qui commod', 'Qui archit', 'Repellendu', 'Nihil est ', '', '', '', '', '', 'Odio magna', 'Modi molli', 'Molestias ', 'Quia ea am', 'Quasi moll', 'Praesentiu', 'Voluptatum', '', '', '', '', '', ''),
(19, 'Illo cupidatat sint', 'Murphy Whitaker', 'Cumque vitae asperna', '+1 (684) 278-64', 'Pariatur U', 'Ea et debi', 'Molestiae ', 'Fuga Culpa', 'Itaque est', 'Aute ut ea', '2 BUTTON', 'DOUBLE PRESS', 'SIDE Cut', 'V-NECK', 'Pariatur V', 'Et volupta', 'Consequatu', 'Minima mag', 'Et tempor ', 'ONE', 'SADA', 'YES', 'Corporis a', 'Odio atque', 'Animi porr', 'Ad dolorem', 'Voluptatem', 'Odit quod ', 'Ut ratione', 'Side', '1', 'Nostrum om', 'Qui quis b', 'Sint offic', 'Eveniet es', 'Anim animi', 'Possimus d', 'Culpa est ', 'Delectus q', 'YES', 'INSIDE', 'STRAIGHT', 'YES', 'TWO', 'Quae volup', 'Neque ea e', 'Pariatur P', 'Sint qui v', 'Deserunt i', 'Est ipsam ', 'Officia id', 'NO', '2', 'YES', '1', 'NO', 'PUNJABI'),
(20, 'Voluptate veniam in', 'Magee Blevins', 'Magna nostrum Nam no', '+1 (495) 979-33', 'Incidunt i', 'Quia tempo', 'Ut neque v', 'Non animi ', 'In hic cum', 'Ea hic exp', '', '', '', '', 'Irure nost', 'Incididunt', 'Dolores ad', 'Omnis sed ', 'Consequatu', '', '', '', 'Expedita u', 'Tempora of', 'Non odio c', 'Consequatu', 'Quos expli', 'Et non qui', 'Consequatu', '', '', 'Laborum Di', 'Excepturi ', 'Eveniet pr', 'Dolore vol', 'Et totam q', 'Corrupti d', 'In nihil q', 'Et alias d', '', '', '', '', '', 'Non eiusmo', 'Iste debit', 'Ipsum cons', 'Dolor nemo', 'Cillum fug', 'Reprehende', 'Voluptatem', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
