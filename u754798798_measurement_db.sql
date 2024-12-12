-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 12:47 PM
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

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`id`, `txtId`, `txtName`, `txtAddress`, `txtPhone`, `txtCoatLength`, `txtCoatChest`, `txtCoatStomach`, `txtCoatHip`, `txtCoatShoulder`, `txtCoatSleeve`, `cmbCoatStyle`, `cmbCoatCollar`, `cmbCoatCut`, `cmbJacketStyle`, `txtJacketBan`, `txtPajamaLength`, `txtPajamaHip`, `txtPajamaWaist`, `txtPajamaBottom`, `cmbPajamaPlates`, `cmbPajamaStyle`, `cmbPajamaLastic`, `txtPantLength`, `txtPantInnerLength`, `txtPantHip`, `txtPantWaist`, `txtPantThigh`, `txtPantKnee`, `txtPantBottom`, `cmbPantPocket`, `cmbPantPlate`, `txtShirtLength`, `txtShirtChest`, `txtShirtStomach`, `txtShirtShoulder`, `txtShirtSleeveFull`, `txtShirtSleeveHalf`, `txtShirtCollar`, `txtShirtCuff`, `cmbShirtBackPlate`, `cmbShirtPatti`, `cmbShirtCut`, `cmbShirtShoulderClip`, `cmbShirtAbovePocket`, `txtShirtF1`, `txtShirtF2`, `txtShirtF3`, `txtShirtB1`, `txtShirtB2`, `txtShirtB3`, `txtKurtaLength`, `txtKurtaChest`, `txtKurtaStomach`, `txtKurtaShoulder`, `txtKurtaSleeve`, `txtKurtaCollar`, `txtKurtaCuff`, `cmbKurtaFrontPlate`, `cmbKurtaPocketSide`, `cmbKurtaShoulderClip`, `cmbKurtaFrontPocket`, `cmbKurtaPocketFlap`, `cmbKurtaStyle`) VALUES
(48, '1', 'eee', 'eee', '234232323', '23', '23', '23', '23', '23', '23', 'NEHRU STYLE', 'Gown Collar', 'NO Cut', 'DOUBLE BREAST', '23', '23', '23', '23', '23', 'ONE', 'PANT STYLE', 'FRONT BELT BACK LASTIC', '23', '23', '23', '23', '23', '23', '23', 'cross', '2', '23', '23', '23', '23', '23', '23', '23', '23', 'NO', 'OUTSIDE', 'AMERICAN', 'NO', 'TWO', 'Qui dolor quas amet', 'Alias voluptate mole', 'Voluptatem eveniet', 'Consequatur animi', 'Voluptates deserunt', 'Officiis vero in ips', '23', '23', '23', '23', '23', '23', '23', 'NO', '2', 'NO', '2', 'NO', 'BENGALI');

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
  `cmbPlazoSideZip` varchar(255) NOT NULL,
  `cmbPlazoSidePocket` varchar(255) NOT NULL,
  `cmbPlazoBelt` varchar(255) NOT NULL,
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

INSERT INTO `measurements_ladies` (`id`, `txtId`, `txtName`, `txtAddress`, `txtPhone`, `txtShirtLength`, `txtShirtChest`, `txtShirtWaist`, `txtShirtHip`, `txtShirtShoulder`, `txtShirtSleeveFull`, `txtShirtSleeveHalf`, `txtShirtCollarBan`, `txtShirtNeckFront`, `txtShirtNeckBack`, `cmbShirtFrontPlate`, `txtShirtPlateSize`, `cmbShirtBackPlate`, `txtShirtGhera`, `txtSalwarLength`, `txtSalwarBottom`, `cmbSalwarBelt`, `txtPajamiLength`, `txtPajamiHip`, `txtPajamiBottom`, `txtPlazoLength`, `txtPlazoHip`, `txtPlazoWaist`, `txtPlazoBottom`, `cmbPlazoSideZip`, `cmbPlazoSidePocket`, `cmbPlazoBelt`, `txtPantFormalLength`, `txtPantFormalHalfLength`, `txtPantFormalHip`, `txtPantFormalWaist`, `txtPantFormalThigh`, `txtPantFormalKnee`, `txtPantFormalBottom`, `txtPantFormalPocket`, `txtPantFormalBelt`, `txtPantFormalPlate`, `txtShirtFormalLength`, `txtShirtFormalChest`, `txtShirtFormalWaist`, `txtShirtFormalShoulder`, `txtShirtFormalSleeveFull`, `txtShirtFormalSleeveHalf`, `txtShirtFormalCollar`, `txtShirtFormalCuff`, `cmbShirtFormalPlate`, `cmbShirtFormalPatti`, `cmbShirtFormalCut`) VALUES
(12, 'Laudantium iste con', 'Jermaine Mendoza', 'Dolore aut iusto aut', '+1 (369) 361-9815', 'Mollit ut odio persp', 'Laboris qui qui porr', 'Maiores amet ut har', 'Cillum asperiores se', 'Eum natus enim conse', 'Quo laboriosam pari', 'Ipsum voluptas quas', 'Asperiores quia qui ', 'In illum enim est m', 'Anim voluptatum atqu', 'Full', 'Eos est soluta quia', 'No', 'Dolor minima et sapi', 'Voluptas maiores sus', 'Aliquip cum qui impe', 'Without Belt', 'Omnis ex minima cupi', 'Voluptatem amet od', 'Ut ea nostrud mollit', 'Sed voluptate Nam of', 'Alias non quia minim', 'Est enim aut et fug', 'Illum eos commodi ', 'No', '2', 'Full Lastic', 'Consectetur cumque ', 'Aut debitis voluptas', 'Eos quis distinctio', 'Nulla repudiandae ea', 'Dolorum reprehenderi', 'Vel itaque quam aut ', 'Officia voluptas eos', 'Jean Type', 'Nulla aperiam dignis', 'No', 'Saepe et sunt illo ', 'Dolores aut officia ', 'Velit unde voluptate', 'Corporis dolor qui d', 'Quas dolor fuga Dol', 'Ea ut aliquid commod', 'Ut culpa dolore et q', 'Eiusmod possimus no', 'Box', 'Without Belt', 'Without Belt');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `measurements_ladies`
--
ALTER TABLE `measurements_ladies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
