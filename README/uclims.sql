-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 05:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uclims`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`sn`, `name`, `quantity`, `ppu`) VALUES
(11001, 'DP to HDMI', 40, 600);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(10) NOT NULL,
  `pw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pw`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `casing`
--

CREATE TABLE `casing` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casing`
--

INSERT INTO `casing` (`sn`, `name`, `quantity`, `ppu`) VALUES
(1001, 'Antec DP501', 18, 5300),
(1002, 'NZXT H510i', 87, 9900),
(1003, 'CM MB311L', 15, 4400);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `phone` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`phone`, `name`, `addr`) VALUES
('0167771568', 'AHJ', 'Dhaka'),
('01859285784', 'Md. Asif Hossain', 'Gazipur City Corporation');

-- --------------------------------------------------------

--
-- Table structure for table `dd`
--

CREATE TABLE `dd` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dd`
--

INSERT INTO `dd` (`sn`, `name`, `quantity`, `ppu`) VALUES
(6001, 'Corsair Force MP510 240GB NVME', 9, 4800),
(6002, 'Western Digital Blue 1TB 7200rpm Hard Drive', 14, 3600);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `uname` varchar(10) NOT NULL,
  `pw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`uname`, `pw`) VALUES
('employee', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `inv` int(10) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `casing` varchar(20) NOT NULL,
  `pro` varchar(20) NOT NULL,
  `mobo` varchar(20) NOT NULL,
  `vga` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `dd` varchar(20) NOT NULL,
  `psu` varchar(20) NOT NULL,
  `monitor` varchar(20) NOT NULL,
  `kbm` varchar(20) NOT NULL,
  `sound` varchar(20) NOT NULL,
  `acs` varchar(20) NOT NULL,
  `laptop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inv`, `phone`, `casing`, `pro`, `mobo`, `vga`, `ram`, `dd`, `psu`, `monitor`, `kbm`, `sound`, `acs`, `laptop`) VALUES
(3, '01859285784', '1001', '2001', '3001', '4001', '5001', '6001', '7001', '8001', '9001', '10002', '11001', '10001'),
(7, '01718087357', '1001', '2003', '3001', '4002', '5001', '6002', '7001', '8001', '9012', '0', '0', '0'),
(10, '01859285784', '1002', '2002', '3001', '0', '5001', '6001', '7002', '8014', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kbm`
--

CREATE TABLE `kbm` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbm`
--

INSERT INTO `kbm` (`sn`, `name`, `quantity`, `ppu`) VALUES
(9001, 'Razer Viper Mini', 100, 4500),
(9012, 'Gamdias Hermes P1', 19, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`sn`, `name`, `quantity`, `ppu`) VALUES
(10001, 'Macbook Pro 2019', 10, 120000),
(10002, 'Asus Zenbook UX410UX', 15, 44500);

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`sn`, `name`, `quantity`, `ppu`) VALUES
(8001, 'ASUS VZ229HE Monitor', 9, 11300),
(8014, 'LG 22MK600 Monitor', 19, 10900);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`sn`, `name`, `quantity`, `ppu`) VALUES
(3001, 'MSI B450m Mortar Max', 88, 9700),
(3002, 'MSI B450 Tomahawk Max', 35, 11900);

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`sn`, `name`, `quantity`, `ppu`) VALUES
(2001, 'AMD Ryzen 5 3600', 11, 17100),
(2002, 'AMD Ryzen 5 3400G', 37, 13500),
(2003, 'Intel i5 9400f', 19, 13300);

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`sn`, `name`, `quantity`, `ppu`) VALUES
(7001, 'Corsair CV550 80+ Bronze', 9, 4800),
(7002, 'Corsair CV450 80+ Bronze', 19, 3600);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`sn`, `name`, `quantity`, `ppu`) VALUES
(5001, 'GSkill Trident Z RGB 8GB 3200 mhz', 8, 4700),
(5002, 'Corsair Vengeance Pro RGB 8GB 3200 mhz', 10, 4000),
(5003, 'PNY XLR8 8GB 3200 mhz', 20, 3800);

-- --------------------------------------------------------

--
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sound`
--

INSERT INTO `sound` (`sn`, `name`, `quantity`, `ppu`) VALUES
(10002, 'Razer Kraken X', 10, 4800);

-- --------------------------------------------------------

--
-- Table structure for table `vga`
--

CREATE TABLE `vga` (
  `sn` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `ppu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vga`
--

INSERT INTO `vga` (`sn`, `name`, `quantity`, `ppu`) VALUES
(4001, 'Saphire Nitro+  RX5500XT 8GB SE', 12, 24500),
(4002, 'ASUS Tuf Gaming 1650s OC', 24, 20500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `casing`
--
ALTER TABLE `casing`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `dd`
--
ALTER TABLE `dd`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv`);

--
-- Indexes for table `kbm`
--
ALTER TABLE `kbm`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11002;

--
-- AUTO_INCREMENT for table `casing`
--
ALTER TABLE `casing`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `dd`
--
ALTER TABLE `dd`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6004;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kbm`
--
ALTER TABLE `kbm`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9013;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8015;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT for table `processor`
--
ALTER TABLE `processor`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- AUTO_INCREMENT for table `psu`
--
ALTER TABLE `psu`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7003;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5004;

--
-- AUTO_INCREMENT for table `sound`
--
ALTER TABLE `sound`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `vga`
--
ALTER TABLE `vga`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
