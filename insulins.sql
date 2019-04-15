-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 07:50 AM
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
-- Table structure for table `insulins`
--

CREATE TABLE `insulins` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `generic` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insulins`
--

INSERT INTO `insulins` (`id`, `brand`, `generic`) VALUES
(1, 'Insulet 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(2, 'Mysulin 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(3, 'Maxulin 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(4, 'Insul 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(5, 'Insul 50/50 100 IU\r\n', 'Insulin (Human)  50/50\r\n'),
(6, 'Ansulin 50/50 100IU\r\n', 'Insulin (Human)  50/50\r\n'),
(7, 'Insulet 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(8, 'Insulet 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(9, 'Gensulin M 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(10, 'Mysulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(11, 'Mysulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(12, 'Mysulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(13, 'Maxulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(14, 'Insul 30/70', 'Insulin (Human) 30/70\r\n'),
(15, 'Ansulin 30/70', 'Insulin (Human) 30/70\r\n'),
(16, 'Insulet N Injection\r\n', 'Insulin (Human) N\r\n'),
(17, 'Gensulin N\r\n', 'Insulin (Human) N\r\n'),
(18, 'Maxulin N\r\n', 'Insulin (Human) N\r\n'),
(19, 'Insul N \r\n', 'Insulin (Human) N\r\n'),
(20, 'Ansulin N\r\n', 'Insulin (Human) N\r\n'),
(21, 'Insulet R\r\n', 'Insulin (Human) R\r\n'),
(22, 'Gensulin R\r\n', 'Insulin (Human) R\r\n'),
(23, 'Mysulin 50/50\r\n', 'Insulin (Human) R\r\n'),
(24, 'Maxulin R\r\n', 'Insulin (Human) R\r\n'),
(25, 'Insul R\r\n', 'Insulin (Human) R\r\n'),
(26, 'Ansulin R', 'Insulin (Human) R\r\n'),
(27, 'Acilog Biopen\r\n', 'Insulin Aspart\r\n'),
(28, 'Mypart\r\n', 'Insulin Aspart\r\n'),
(29, 'Glyset R\r\n', 'Insulin Aspart\r\n'),
(30, 'Mypart Mix\r\n', 'Insulin Aspart Protamine & Mixture\r\n'),
(31, 'Glyset Mix\r\n', 'Insulin Aspert 30/70\r\n'),
(32, 'Insulet GN\r\n', 'Insulin Glargin\r\n'),
(33, 'Mytus\r\n', 'Insulin Glargin\r\n'),
(34, 'Vibrenta\r\n', 'Insulin Glargin\r\n'),
(35, 'Larsulin\r\n', 'Insulin Glargin\r\n'),
(36, 'Insul Lispro\r\n', 'Insulin Lispro\r\n'),
(37, 'Insulet 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(38, 'Mysulin 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(39, 'Maxulin 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(40, 'Insul 50/50\r\n', 'Insulin (Human)  50/50\r\n'),
(41, 'Insul 50/50 100 IU\r\n', 'Insulin (Human)  50/50\r\n'),
(42, 'Ansulin 50/50 100IU\r\n', 'Insulin (Human)  50/50\r\n'),
(43, 'Insulet 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(44, 'Insulet 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(45, 'Gensulin M 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(46, 'Mysulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(47, 'Mysulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(48, 'Mysulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(49, 'Maxulin 30/70\r\n', 'Insulin (Human) 30/70\r\n'),
(50, 'Insul 30/70', 'Insulin (Human) 30/70\r\n'),
(51, 'Ansulin 30/70', 'Insulin (Human) 30/70\r\n'),
(52, 'Insulet N Injection\r\n', 'Insulin (Human) N\r\n'),
(53, 'Gensulin N\r\n', 'Insulin (Human) N\r\n'),
(54, 'Maxulin N\r\n', 'Insulin (Human) N\r\n'),
(55, 'Insul N \r\n', 'Insulin (Human) N\r\n'),
(56, 'Ansulin N\r\n', 'Insulin (Human) N\r\n'),
(57, 'Insulet R\r\n', 'Insulin (Human) R\r\n'),
(58, 'Gensulin R\r\n', 'Insulin (Human) R\r\n'),
(59, 'Mysulin 50/50\r\n', 'Insulin (Human) R\r\n'),
(60, 'Maxulin R\r\n', 'Insulin (Human) R\r\n'),
(61, 'Insul R\r\n', 'Insulin (Human) R\r\n'),
(62, 'Ansulin R', 'Insulin (Human) R\r\n'),
(63, 'Acilog Biopen\r\n', 'Insulin Aspart\r\n'),
(64, 'Mypart\r\n', 'Insulin Aspart\r\n'),
(65, 'Glyset R\r\n', 'Insulin Aspart\r\n'),
(66, 'Mypart Mix\r\n', 'Insulin Aspart Protamine & Mixture\r\n'),
(67, 'Glyset Mix\r\n', 'Insulin Aspert 30/70\r\n'),
(68, 'Insulet GN\r\n', 'Insulin Glargin\r\n'),
(69, 'Mytus\r\n', 'Insulin Glargin\r\n'),
(70, 'Vibrenta\r\n', 'Insulin Glargin\r\n'),
(71, 'Larsulin\r\n', 'Insulin Glargin\r\n'),
(72, 'Insul Lispro\r\n', 'Insulin Lispro\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insulins`
--
ALTER TABLE `insulins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insulins`
--
ALTER TABLE `insulins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
