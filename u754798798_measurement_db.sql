-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 12:01 PM
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
-- Database: `u754798798_measurement_db`
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
  `txtShirtF1` varchar(255) NOT NULL,
  `txtShirtF2` varchar(255) NOT NULL,
  `txtShirtF3` varchar(255) NOT NULL,
  `txtShirtB1` varchar(255) NOT NULL,
  `txtShirtB2` varchar(255) NOT NULL,
  `txtShirtB3` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `measurements_ladies`
--

CREATE TABLE `measurements_ladies` (
  `id` int(11) NOT NULL,
  `txtId` varchar(255) DEFAULT NULL,
  `txtName` varchar(255) DEFAULT NULL,
  `txtAddress` varchar(255) DEFAULT NULL,
  `txtPhone` varchar(255) DEFAULT NULL,
  `txtShirtLength` varchar(255) DEFAULT NULL,
  `txtShirtChest` varchar(255) DEFAULT NULL,
  `txtShirtWaist` varchar(255) DEFAULT NULL,
  `txtShirtHip` varchar(255) NOT NULL,
  `txtShirtShoulder` varchar(255) DEFAULT NULL,
  `txtShirtSleeveFull` varchar(255) DEFAULT NULL,
  `txtShirtSleeveHalf` varchar(255) NOT NULL,
  `txtShirtCollarBan` varchar(255) DEFAULT NULL,
  `txtShirtNeckFront` varchar(255) DEFAULT NULL,
  `txtShirtNeckBack` varchar(255) DEFAULT NULL,
  `cmbShirtFrontPlate` varchar(255) DEFAULT NULL,
  `txtShirtPlateSize` varchar(255) NOT NULL,
  `cmbShirtBackPlate` varchar(255) DEFAULT NULL,
  `txtShirtGhera` varchar(255) DEFAULT NULL,
  `txtSalwarLength` varchar(255) DEFAULT NULL,
  `txtSalwarBottom` varchar(255) DEFAULT NULL,
  `cmbSalwarBelt` varchar(255) DEFAULT NULL,
  `txtPajamiLength` varchar(255) DEFAULT NULL,
  `txtPajamiHip` varchar(255) DEFAULT NULL,
  `txtPajamiBottom` varchar(255) DEFAULT NULL,
  `txtPlazoLength` varchar(255) DEFAULT NULL,
  `txtPlazoHip` varchar(255) DEFAULT NULL,
  `txtPlazoWaist` varchar(255) DEFAULT NULL,
  `txtPlazoBottom` varchar(255) DEFAULT NULL,
  `txtPantFormalLength` varchar(255) DEFAULT NULL,
  `txtPantFormalHalfLength` varchar(255) DEFAULT NULL,
  `txtPantFormalHip` varchar(255) DEFAULT NULL,
  `txtPantFormalWaist` varchar(255) DEFAULT NULL,
  `txtPantFormalThigh` varchar(255) DEFAULT NULL,
  `txtPantFormalKnee` varchar(255) DEFAULT NULL,
  `txtPantFormalBottom` varchar(255) DEFAULT NULL,
  `txtPantFormalPocket` varchar(255) DEFAULT NULL,
  `txtPantFormalBelt` varchar(255) DEFAULT NULL,
  `txtPantFormalPlate` varchar(255) DEFAULT NULL,
  `txtShirtFormalLength` varchar(255) DEFAULT NULL,
  `txtShirtFormalChest` varchar(255) DEFAULT NULL,
  `txtShirtFormalWaist` varchar(255) DEFAULT NULL,
  `txtShirtFormalShoulder` varchar(255) DEFAULT NULL,
  `txtShirtFormalSleeveFull` varchar(255) DEFAULT NULL,
  `txtShirtFormalSleeveHalf` varchar(255) DEFAULT NULL,
  `txtShirtFormalCollar` varchar(255) DEFAULT NULL,
  `txtShirtFormalCuff` varchar(255) DEFAULT NULL,
  `cmbShirtFormalPlate` varchar(255) DEFAULT NULL,
  `cmbShirtFormalPatti` varchar(255) DEFAULT NULL,
  `cmbShirtFormalCut` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `measurements_ladies`
--

INSERT INTO `measurements_ladies` (`id`, `txtId`, `txtName`, `txtAddress`, `txtPhone`, `txtShirtLength`, `txtShirtChest`, `txtShirtWaist`, `txtShirtHip`, `txtShirtShoulder`, `txtShirtSleeveFull`, `txtShirtSleeveHalf`, `txtShirtCollarBan`, `txtShirtNeckFront`, `txtShirtNeckBack`, `cmbShirtFrontPlate`, `txtShirtPlateSize`, `cmbShirtBackPlate`, `txtShirtGhera`, `txtSalwarLength`, `txtSalwarBottom`, `cmbSalwarBelt`, `txtPajamiLength`, `txtPajamiHip`, `txtPajamiBottom`, `txtPlazoLength`, `txtPlazoHip`, `txtPlazoWaist`, `txtPlazoBottom`, `txtPantFormalLength`, `txtPantFormalHalfLength`, `txtPantFormalHip`, `txtPantFormalWaist`, `txtPantFormalThigh`, `txtPantFormalKnee`, `txtPantFormalBottom`, `txtPantFormalPocket`, `txtPantFormalBelt`, `txtPantFormalPlate`, `txtShirtFormalLength`, `txtShirtFormalChest`, `txtShirtFormalWaist`, `txtShirtFormalShoulder`, `txtShirtFormalSleeveFull`, `txtShirtFormalSleeveHalf`, `txtShirtFormalCollar`, `txtShirtFormalCuff`, `cmbShirtFormalPlate`, `cmbShirtFormalPatti`, `cmbShirtFormalCut`) VALUES
(5, '001', 'rAMA', 'mohalli', '32423423', '67', '', '', '13', '', '', '', '', '', '', '', '23', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '4444', 'veena', 'mohalli', '3434', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Box', '', ''),
(9, '101', 'Ramesh', 'Est laboriosam par', '435343423', '45', '45', '45', '54', '45', '45', '45', '45', '4545', '45', 'Without Plate', '45', 'No', '45', '45', '54', 'Without Belt', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', '54', 'No', 'Without Belt', 'Without Belt'),
(10, '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', 'Side', '223', 'Yes', '223', '223', '223', 'With Belt', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', '223', 'Yes', 'With Belt', 'With Belt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurements_ladies`
--
ALTER TABLE `measurements_ladies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `measurements_ladies`
--
ALTER TABLE `measurements_ladies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
