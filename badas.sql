-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 02:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `badas`
--

CREATE TABLE `badas` (
  `badas_id` int(11) NOT NULL,
  `center` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `district` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `upozila` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `age` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `education` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `cigarate` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `monthly_expense` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `physical_exer` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `vegitable` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `fruits` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `familyDiab` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `maritial` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `children_count` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `children` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `heightFeet` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `heightInch` varchar(255) DEFAULT NULL,
  `bmi` varchar(255) DEFAULT NULL,
  `wrist` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `blood_pressure` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `blood_remark` varchar(255) DEFAULT NULL,
  `sugarLevelEmpty` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `sle_remarks` varchar(255) DEFAULT NULL,
  `sugarLevelFill` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `slf_remarks` varchar(255) DEFAULT NULL,
  `medical` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `insulinName1` varchar(255) DEFAULT NULL,
  `insulinClass1` varchar(255) DEFAULT NULL,
  `insulinType1` varchar(255) DEFAULT NULL,
  `insulinDosage1` varchar(255) DEFAULT NULL,
  `insulinDozeMor1` varchar(255) DEFAULT NULL,
  `insulinDozeDay1` varchar(255) DEFAULT NULL,
  `insulinDozeNight1` varchar(255) DEFAULT NULL,
  `insulinDozeBed1` varchar(255) DEFAULT NULL,
  `insulinName2` varchar(255) DEFAULT NULL,
  `insulinClass2` varchar(255) DEFAULT NULL,
  `insulinType2` varchar(255) DEFAULT NULL,
  `insulinDosage2` varchar(255) DEFAULT NULL,
  `insulinDozeMor2` varchar(255) DEFAULT NULL,
  `insulinDozeDay2` varchar(255) DEFAULT NULL,
  `insulinDozeNight2` varchar(255) DEFAULT NULL,
  `insulinDozeBed2` varchar(255) DEFAULT NULL,
  `insulin_remarks` varchar(255) DEFAULT NULL,
  `medicineName1` varchar(255) DEFAULT NULL,
  `medicineBrand1` varchar(255) DEFAULT NULL,
  `medicineDozeMor1` varchar(255) DEFAULT NULL,
  `medicineDozeDay1` varchar(255) DEFAULT NULL,
  `medicineDozeNight1` varchar(255) DEFAULT NULL,
  `medicineName2` varchar(255) DEFAULT NULL,
  `medicineBrand2` varchar(255) DEFAULT NULL,
  `medicineDozeMor2` varchar(255) DEFAULT NULL,
  `medicineDozeDay2` varchar(255) DEFAULT NULL,
  `medicineDozeNight2` varchar(255) DEFAULT NULL,
  `medicineName3` varchar(255) DEFAULT NULL,
  `medicineBrand3` varchar(255) DEFAULT NULL,
  `medicineDozeMor3` varchar(255) DEFAULT NULL,
  `medicineDozeDay3` varchar(255) DEFAULT NULL,
  `medicineDozeNight3` varchar(255) DEFAULT NULL,
  `one` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `two` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `three` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `four` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `five` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `six` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `seven` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `badas`
--

INSERT INTO `badas` (`badas_id`, `center`, `division`, `district`, `upozila`, `full_name`, `age`, `gender`, `mobile`, `address`, `education`, `occupation`, `cigarate`, `monthly_expense`, `physical_exer`, `vegitable`, `fruits`, `familyDiab`, `maritial`, `children_count`, `children`, `weight`, `heightFeet`, `heightInch`, `bmi`, `wrist`, `blood_pressure`, `blood_remark`, `sugarLevelEmpty`, `sle_remarks`, `sugarLevelFill`, `slf_remarks`, `medical`, `insulinName1`, `insulinClass1`, `insulinType1`, `insulinDosage1`, `insulinDozeMor1`, `insulinDozeDay1`, `insulinDozeNight1`, `insulinDozeBed1`, `insulinName2`, `insulinClass2`, `insulinType2`, `insulinDosage2`, `insulinDozeMor2`, `insulinDozeDay2`, `insulinDozeNight2`, `insulinDozeBed2`, `insulin_remarks`, `medicineName1`, `medicineBrand1`, `medicineDozeMor1`, `medicineDozeDay1`, `medicineDozeNight1`, `medicineName2`, `medicineBrand2`, `medicineDozeMor2`, `medicineDozeDay2`, `medicineDozeNight2`, `medicineName3`, `medicineBrand3`, `medicineDozeMor3`, `medicineDozeDay3`, `medicineDozeNight3`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`) VALUES
(17, 'Rajshahi', 'Rajshahi', 'Rajshahi', 'Rajasthali', 'Test2', '22', 'Male', '12313', 'Town', 'Secondary School', 'Unemployed', 'No', '10,000 TK - 20,000 TK', '30-60', '0', '0', 'No', 'Unmarried', '0', 'No', '82', '60', '170.2', '28.3', '219.4', '80/70', 'Normal', '2', 'Normal', '', '', 'Insulin And Oralmedicine', 'Insul 50/50 40 IU', 'Premix', 'Human Insulin', 'Vial', '4', '4', '4', NULL, 'Insul 50/50 40 IU', 'Premix', 'Human Insulin', 'Vial', '8', '8', '8', NULL, '', 'Metformin', NULL, '2', '2', '9', 'Glipizide', NULL, '5', '7', '5', 'Metformin', NULL, '5', '5', '5', 'No', 'Dont Know', 'No', 'Dont Know', 'No', 'No', 'No'),
(16, 'Dhaka', 'Dhaka', 'Dhaka', 'Mirpur', 'Test1', '23', 'Female', '12313', 'Town', 'College', 'Unemployed', 'No', '10,000 TK - 20,000 TK', '30-60', '0', '6', 'No', 'Unmarried', '0', 'No', '82', '60', '170.2', '28.3', '219.4', '110/80', 'Normal', '3', 'Normal', '', 'Normal', 'Insulin And Oralmedicine', 'Apidra (5cartridges of 3ml)', 'Short Acting', 'Insulin Analogue', 'Pen Cartridge', '3', '3', '3', NULL, 'Apidra (5cartridges of 3ml)', 'Short Acting', 'Insulin Analogue', 'Pen Cartridge', '2', '2', '2', NULL, NULL, 'Insulin', NULL, '9', '9', '9', 'Metformin', NULL, '7', '7', '7', 'Repaglinide', NULL, '5', '5', '5', 'No', 'Dont Know', 'No', 'Dont Know', 'No', 'No', 'No'),
(18, '', '', '', 'Adamdighi', 'eCommerce', '23', '', '12313', '', '', '', '', '', '', '', '', '', '', '0', '', '30', '60', '170.2', '10.4', '0', '/', 'Normal', '35.5', 'Diabetes', '', '', 'Insulin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', 'Adamdighi', 'eCommerce', '23', '', '12313', '', '', '', '', '', '', '', '', '', '', '0', '', '', '0', '0', '0', '0', '/', '', '', '', '', '', 'Insulin', 'Actrapid FlexPen', 'Short Acting', 'Human Insulin', 'One time Pen', '4', '4', '4', '', 'Actrapid Penfill', 'Short Acting', 'Human Insulin', 'Pen Cartridge', '', '', '8', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', 'Adamdighi', 'Abdullah Al Hasan', '23', '', '12313', '', '', '', '', '', '', '', '', '', '', '0', '', '', '0', '0', '0', '0', '110/80', 'Normal', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', 'Adamdighi', 'eCommerce', '23', '', '12313', '', '', '', '', '', '', '', '', '', '', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', 'Insulin', 'Acilog Biopen', 'Short Acting', 'Insulin Analogue', 'One time Pen', '4', '4', '4', '', 'Vibrenta 100 IU', 'Long Acting', 'Insulin Analogue', 'Vial', '', '', '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', 'Adamdighi', 'eCommerce', '23', '', '12313', '', '', '', '', '', '', '', '', '', '', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', 'Insulin', 'Acilog Biopen', 'Short Acting', 'Insulin Analogue', 'One time Pen', '4', '4', '4', '', 'Vibrenta 100 IU', 'Long Acting', 'Insulin Analogue', 'Vial', '', '', '', '3', 'Basal-Bolus 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', 'Adamdighi', 'eCommerce', '23', '', '12313', '', '', '', '', '', '', '', '', '', '', '0', '', '', '0', '0', '0', '0', '', '', '40', 'Diabetes', '', '', 'Insulin And Oralmedicine', 'Vibrenta 100 IU', 'Long Acting', 'Insulin Analogue', 'Vial', '', '', '', '3', 'Acilog Biopen', 'Short Acting', 'Insulin Analogue', 'One time Pen', '8', '8', '8', '', 'Basal-Bolus', 'Glimepiride', '', '', '', '', 'Metformin', '', '', '', '', 'Metformin', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badas`
--
ALTER TABLE `badas`
  ADD PRIMARY KEY (`badas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badas`
--
ALTER TABLE `badas`
  MODIFY `badas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
