-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 08:10 PM
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
-- Database: `solar-solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(6) NOT NULL,
  `city` varchar(300) NOT NULL,
  `area` varchar(300) NOT NULL,
  `house_no` int(30) NOT NULL,
  `block` varchar(300) NOT NULL,
  `service_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `city`, `area`, `house_no`, `block`, `service_id`) VALUES
(1, 'Lahore', 'Model Town', 76, 'A', 1),
(2, 'Gujranwala', 'DHA', 23, 'C', 2),
(3, 'Gujranwala', 'Cantt', 55, 'C', 3),
(4, 'Gujranwala', 'Garden Town', 112, 'E', 4),
(5, 'Gujranwala', 'CityHousing', 43, 'D', 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `admin_id`, `password`) VALUES
('Admin666@gmail.com', 1, 'admin#123');

-- --------------------------------------------------------

--
-- Table structure for table `books_maintenaceservice`
--

CREATE TABLE `books_maintenaceservice` (
  `customer_id` int(6) DEFAULT NULL,
  `service_id` int(6) DEFAULT NULL,
  `currenttimedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_maintenaceservice`
--

INSERT INTO `books_maintenaceservice` (`customer_id`, `service_id`, `currenttimedate`) VALUES
(13, 1, '2024-08-22 22:48:47'),
(13, 2, '2024-08-22 22:49:19'),
(5, 3, '2024-08-22 22:50:15'),
(5, 4, '2024-08-22 22:50:43'),
(14, 5, '2024-08-22 23:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `email`, `first_name`, `last_name`, `password`) VALUES
(5, 'aqsa@gmail.com', 'Aqsa', 'nadeem', '908d536949b912bc2e1e8eb980deb588'),
(10, 'haroon12@gmail.com', 'Haroon', 'Nasir', '8c652d2d84839e808f19c7e18c66b3a6'),
(11, 'shamsIrfan3728@gmail.com', 'shams', 'irfan', '0b59e5c09dd9dc81e3fb62ea1694066a'),
(13, 'hamzanadeemc@gmail.com', 'Hamza', 'Nadeem', '28936322a5eb164c9ced5a0166f93f15'),
(14, 'mahenn12@gmail.com', 'Maheen', 'Fatima', '1c9c86af8e5a1deacf7934a15fb0c308');

-- --------------------------------------------------------

--
-- Table structure for table `customize_package`
--

CREATE TABLE `customize_package` (
  `c_package_id` int(11) NOT NULL,
  `c_package_type` varchar(200) NOT NULL,
  `c_package_systemsize` varchar(200) NOT NULL,
  `c_package_grade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customize_package`
--

INSERT INTO `customize_package` (`c_package_id`, `c_package_type`, `c_package_systemsize`, `c_package_grade`) VALUES
(1, 'Hybrid System', '6kw', 'A'),
(2, 'Ongrid System', '3kw', 'B'),
(3, 'Ongrid System', '15kw', 'A'),
(4, 'Ongrid System', '2kw', 'B'),
(5, 'Ongrid System', '2kw', 'B'),
(6, 'Ongrid System', '15kw', 'B'),
(7, 'Ongrid System', '2kw', 'A'),
(8, 'Ongrid System', '3kw', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `customize_package_contains`
--

CREATE TABLE `customize_package_contains` (
  `p_id` int(11) DEFAULT NULL,
  `c_package_id` int(11) DEFAULT NULL,
  `p_model` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customize_package_contains`
--

INSERT INTO `customize_package_contains` (`p_id`, `c_package_id`, `p_model`) VALUES
(3, 1, 'Jinko 570w N type Bi-Facial'),
(13, 1, 'HP-230 21PL 160AH Deep Cycle'),
(20, 1, 'Growatt MIN 5000TL-X'),
(8, 2, 'Risen RSM72-6-330-350 watt'),
(17, 2, 'Inverex IN-185B | 185 Ah'),
(23, 2, 'Axpert 5kW-B'),
(5, 3, 'Canadian Solar 575w Bi-Facial N Type'),
(15, 3, 'Osaka P2000 | 200Ah'),
(20, 3, 'Growatt MAX 10000TL3-LV'),
(9, 4, 'Znshine ZXP6-72-330W/P'),
(17, 4, 'Inverex IN-210B | 210 Ah'),
(23, 4, 'Axpert 5kW-B'),
(8, 5, 'Risen RSM72-6-330-350 watt'),
(17, 5, 'Inverex IN-210B | 210 Ah'),
(25, 5, 'Sigma-5K-B'),
(10, 6, 'Growatt 250-260 Watt'),
(16, 6, 'Volta P1800-B |180 Ah'),
(25, 6, 'Sigma-5K-B'),
(3, 7, 'Jinko 580 Watt N Type Mono Perc'),
(15, 7, 'Osaka P2000 | 200Ah'),
(22, 7, 'GoodWe SDT G2 5kW'),
(6, 8, 'Trina 340 Watt Half Poly'),
(26, 8, 'Daewoo P1800 | 180Ah'),
(22, 8, 'GoodWe DNS 3.6');

-- --------------------------------------------------------

--
-- Table structure for table `maintenanceservice`
--

CREATE TABLE `maintenanceservice` (
  `service_id` int(11) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `systemSize` int(30) NOT NULL,
  `serviceType` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenanceservice`
--

INSERT INTO `maintenanceservice` (`service_id`, `contact`, `systemSize`, `serviceType`) VALUES
(1, '0310-7125676', 2, 'Solar System Maintenance'),
(2, '0311-7125676', 10, 'Solar System Maintenance'),
(3, '0390-5828676', 6, 'Solar System Maintenance'),
(4, '0300-8645820', 6, 'Solar System Maintenance'),
(5, '0314-7125676', 2, 'Solar System Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `make_customize_package`
--

CREATE TABLE `make_customize_package` (
  `customer_id` int(11) DEFAULT NULL,
  `c_package_id` int(11) DEFAULT NULL,
  `c_package_price` decimal(25,2) NOT NULL,
  `c_package_description` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `make_customize_package`
--

INSERT INTO `make_customize_package` (`customer_id`, `c_package_id`, `c_package_price`, `c_package_description`) VALUES
(13, 1, 1775020.00, 'Panel brand : Jinko ,Panel model : Jinko 570w N type Bi-Facial ,Panel quantity :22,Battery brand : Hp\r\n                     ,Battery model : HP-230 21PL 160AH Deep Cycle ,Battery quantity :14,Inverter brand: Growatt ,Inverter model: Growatt MIN 5000TL-X\r\n                     ,Inverter qunatity :3,Accessory :Tier 3'),
(13, 2, 608000.00, 'Panel brand : Risen ,Panel model : Risen RSM72-6-330-350 watt ,Panel quantity :12,Battery brand : Inverex\r\n                     ,Battery model : Inverex IN-185B | 185 Ah ,Battery quantity :8,Inverter brand: Voltronic ,Inverter model: Axpert 5kW-B\r\n                     ,Inverter qunatity :2,Accessory :Tier 2'),
(13, 3, 4922500.00, 'Panel brand : Canadian ,Panel model : Canadian Solar 575w Bi-Facial N Type ,Panel quantity :50,Battery brand : Osaka\r\n                     ,Battery model : Osaka P2000 | 200Ah ,Battery quantity :35,Inverter brand: Growatt ,Inverter model: Growatt MAX 10000TL3-LV\r\n                     ,Inverter qunatity :5,Accessory :Tier 3'),
(13, 4, 421520.00, 'Panel brand : Znshine ,Panel model : Znshine ZXP6-72-330W/P ,Panel quantity :8,Battery brand : Inverex\r\n                     ,Battery model : Inverex IN-210B | 210 Ah ,Battery quantity :6,Inverter brand: Voltronic ,Inverter model: Axpert 5kW-B\r\n                     ,Inverter qunatity :1,Accessory :Tier 2'),
(5, 5, 390000.00, 'Panel brand : Risen ,Panel model : Risen RSM72-6-330-350 watt ,Panel quantity :8,Battery brand : Inverex\r\n                     ,Battery model : Inverex IN-210B | 210 Ah ,Battery quantity :6,Inverter brand: Homage ,Inverter model: Sigma-5K-B\r\n                     ,Inverter qunatity :1,Accessory :Tier 1'),
(5, 6, 2390000.00, 'Panel brand : Growatt ,Panel model : Growatt 250-260 Watt ,Panel quantity :55,Battery brand : Volta\r\n                     ,Battery model : Volta P1800-B |180 Ah ,Battery quantity :40,Inverter brand: Homage ,Inverter model: Sigma-5K-B\r\n                     ,Inverter qunatity :6,Accessory :Tier 3'),
(5, 7, 584240.00, 'Panel brand : Jinko ,Panel model : Jinko 580 Watt N Type Mono Perc ,Panel quantity :6,Battery brand : Osaka\r\n                     ,Battery model : Osaka P2000 | 200Ah ,Battery quantity :4,Inverter brand: GoodWE ,Inverter model: GoodWe SDT G2 5kW\r\n                     ,Inverter qunatity :1,Accessory :Tier 2'),
(14, 8, 617400.00, 'Panel brand : Trina ,Panel model : Trina 340 Watt Half Poly ,Panel quantity :10,Battery brand : Daewoo\r\n                     ,Battery model : Daewoo P1800 | 180Ah ,Battery quantity :6,Inverter brand: GoodWE ,Inverter model: GoodWe DNS 3.6\r\n                     ,Inverter qunatity :2,Accessory :Tier 2');

-- --------------------------------------------------------

--
-- Table structure for table `productmodel`
--

CREATE TABLE `productmodel` (
  `p_id` int(50) DEFAULT NULL,
  `p_model` varchar(200) NOT NULL,
  `p_price` decimal(20,3) DEFAULT 0.000,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productmodel`
--

INSERT INTO `productmodel` (`p_id`, `p_model`, `p_price`, `status`) VALUES
(3, 'Jinko 570w N type Bi-Facial', 20760.000, 'available'),
(3, 'Jinko 580 Watt N Type Bi-Facial', 22040.000, 'available'),
(3, 'Jinko 580 Watt N Type Mono Perc', 22040.000, 'available'),
(4, 'Longi 555-watt single glass', 17760.000, 'available'),
(4, 'Longi HiMo 5 540/535 watt', 17280.000, 'available'),
(4, 'Longi HiMo 5 555/560 watt', 17920.000, 'available'),
(4, 'Longi Hi-Mo 6 565-570 watt', 19720.000, 'available'),
(5, 'Canadian Solar 575w Bi-Facial N Type', 21850.000, 'available'),
(5, 'Canadian Solar 580w Bi-Facial N', 22040.000, 'available'),
(6, 'Trina 330 Watt Poly', 10230.000, 'available'),
(6, 'Trina 340 Watt Half Poly', 10540.000, 'available'),
(6, 'Trina 485W Bi-Facial Mono', 15520.000, 'available'),
(7, 'Panasonic 235 Watt', 8500.000, '  available  '),
(7, 'Panasonic 255 Watt', 9500.000, 'available'),
(8, 'Risen RSM72-6-330-350 watt', 9000.000, 'available'),
(9, 'Znshine ZXP6-72-330W/P', 14190.000, 'available'),
(10, 'Growatt 250-260 Watt', 10000.000, 'available'),
(10, 'Growatt 258-300 Watt', 12000.000, 'available'),
(12, '12V 120AH(20HR) GX 165', 16248.000, 'available'),
(12, '12V 165AH(20HR) DC 220', 27363.000, 'available'),
(12, '12V 175AH(20HR) GX 260F', 28638.000, 'available'),
(13, 'HP-200 17PL 130AH Deep Cycle', 37910.000, 'available'),
(13, 'HP-230 21PL 160AH Deep Cycle', 45450.000, 'available'),
(13, 'HP-250 25PL 180AH Deep Cycle', 54450.000, 'available'),
(15, 'Osaka P1800 | 180Ah', 35000.000, 'available'),
(15, 'Osaka P2000 | 200Ah', 38000.000, 'available'),
(15, 'Osaka P2200 | 220Ah', 42000.000, 'available'),
(16, 'Volta P1800-B |180 Ah', 19000.000, 'available'),
(16, 'Volta P2000-B |200 Ah', 21000.000, 'available'),
(17, 'Inverex IN-185B | 185 Ah', 20000.000, 'available'),
(17, 'Inverex IN-210B | 210 Ah', 23000.000, 'available'),
(18, 'Millat ML-1800B | 180 Ah', 18499.000, 'available'),
(18, 'Millat ML-2000B | 200 Ah', 21000.000, 'available'),
(18, 'Millat ML-2200B | 230 Ah', 23000.000, 'available'),
(19, 'SUN2000-3KTL-M1', 250000.000, 'available'),
(19, 'SUN2000-5KTL-M1', 300000.000, 'available'),
(19, 'SUN2000-10KTL-M1', 500000.000, 'available'),
(20, 'Growatt MIN 3000TL-X', 200000.000, 'available'),
(20, 'Growatt MIN 5000TL-X', 220000.000, 'available'),
(20, 'Growatt MAX 10000TL3-LV', 500000.000, 'available'),
(22, 'GoodWe DNS 3.6', 220000.000, 'available'),
(22, 'GoodWe SDT G2 5kW', 300000.000, 'available'),
(22, 'GoodWe SMT 10kW', 550000.000, 'available'),
(23, 'InfiniSolar 3kW-B', 120000.000, 'available'),
(23, 'Axpert 5kW-B', 170000.000, 'available'),
(25, 'HVS-3K-B', 150000.000, 'available'),
(25, 'Sigma-5K-B', 180000.000, 'available'),
(26, 'Daewoo P1800 | 180Ah', 12000.000, 'available'),
(26, 'Daewoo P1800 | 180Ah', 23000.000, 'available'),
(26, 'Daewoo P1800 | 180Ah', 35000.000, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(50) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_brand` varchar(200) NOT NULL,
  `p_grade` varchar(50) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `admin_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_brand`, `p_grade`, `p_image`, `admin_id`) VALUES
(3, 'Panel', 'Jinko', 'A', 'jinkopanel.jfif', 1),
(4, 'Panel', 'Longi', 'A', 'longiPanel.jfif', 1),
(5, 'Panel', 'Canadian', 'A', 'canadianPanel.jfif', 1),
(6, 'Panel', 'Trina', 'A', 'trinaPanel.jfif', 1),
(7, 'Panel', 'Panasonic', 'B', 'panasonicPanel.jfif', 1),
(8, 'Panel', 'Risen', 'B', 'risenPanel.jfif', 1),
(9, 'Panel', 'Znshine', 'B', 'znshinePanel.jfif', 1),
(10, 'Panel', 'Growatt', 'B', 'panelgrowatt.jfif', 1),
(12, 'Battery', 'AGS', 'A', 'agsBattery.jfif', 1),
(13, 'Battery', 'Hp', 'A', 'battery.jfif', 1),
(15, 'Battery', 'Osaka', 'A', 'osakaBattery.jfif', 1),
(16, 'Battery', 'Volta', 'B', 'voltaBattery.jfif', 1),
(17, 'Battery', 'Inverex', 'B', 'InverexBattery.jfif', 1),
(18, 'Battery', 'Millat', 'B', 'millatBattery.jfif', 1),
(19, 'Inverter', 'Huawei', 'A', 'HuaweiInverter.jfif', 1),
(20, 'Inverter', 'Growatt', 'A', 'growattInverter.jfif', 1),
(22, 'Inverter', 'GoodWE', 'A', 'goodweinverter.jfif', 1),
(23, 'Inverter', 'Voltronic', 'B', 'voltronicInverter.jfif', 1),
(25, 'Inverter', 'Homage', 'B', 'homageInverter.jfif', 1),
(26, 'Battery', 'Daewoo', 'A', 'DawooBattery.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_packages`
--

CREATE TABLE `recommended_packages` (
  `rp_id` int(11) NOT NULL,
  `TYPE` varchar(300) NOT NULL,
  `size` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `savings` varchar(300) NOT NULL,
  `features` varchar(900) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `admin_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommended_packages`
--

INSERT INTO `recommended_packages` (`rp_id`, `TYPE`, `size`, `description`, `savings`, `features`, `price`, `admin_id`) VALUES
(3, 'Regular', '25Kw', '(Large Homes)', 'Save up to Rs.1,000,000/year and 21,000 units/year', '15 x Fans, 35 x Lights, 2 x Refrigerator, 4 x Inverter AC 1.5 ton, 1 x Water Pump 1HP, Tier 1 Products and Brands, Payback Period less than 3 yrs.', 3000000.00, 1),
(4, 'POPULAR', '50Kw', '(Large Businesses)', 'Save up to Rs.380,000/year and 75,000 units/year', 'Right for industrial to large businesses, Tier 1 Solar Modules, 50kW Solar Inverter, 50140W - Tier 1 Solar Panels, Tier 1 Products and Brands, Payback Period of 2.3 yrs.', 9900000.00, 1),
(5, 'Regular', '5Kw', '(Large Homes', 'Save up to Rs.550,000/year', '5 x Fans,3 x Lights,1 x Refrigerator,1x InverterAC 1.5 ton,1 x Water Pump ,1HP,Tier 1 Products and BrandsPayback Period less than 4 yrs.', 1500000.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books_maintenaceservice`
--
ALTER TABLE `books_maintenaceservice`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customize_package`
--
ALTER TABLE `customize_package`
  ADD PRIMARY KEY (`c_package_id`);

--
-- Indexes for table `customize_package_contains`
--
ALTER TABLE `customize_package_contains`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_package_id` (`c_package_id`);

--
-- Indexes for table `maintenanceservice`
--
ALTER TABLE `maintenanceservice`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `make_customize_package`
--
ALTER TABLE `make_customize_package`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `c_package_id` (`c_package_id`);

--
-- Indexes for table `productmodel`
--
ALTER TABLE `productmodel`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `recommended_packages`
--
ALTER TABLE `recommended_packages`
  ADD PRIMARY KEY (`rp_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customize_package`
--
ALTER TABLE `customize_package`
  MODIFY `c_package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maintenanceservice`
--
ALTER TABLE `maintenanceservice`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recommended_packages`
--
ALTER TABLE `recommended_packages`
  MODIFY `rp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `maintenanceservice` (`service_id`);

--
-- Constraints for table `books_maintenaceservice`
--
ALTER TABLE `books_maintenaceservice`
  ADD CONSTRAINT `books_maintenaceservice_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `books_maintenaceservice_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `maintenanceservice` (`service_id`);

--
-- Constraints for table `customize_package_contains`
--
ALTER TABLE `customize_package_contains`
  ADD CONSTRAINT `customize_package_contains_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `customize_package_contains_ibfk_2` FOREIGN KEY (`c_package_id`) REFERENCES `customize_package` (`c_package_id`);

--
-- Constraints for table `make_customize_package`
--
ALTER TABLE `make_customize_package`
  ADD CONSTRAINT `make_customize_package_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `make_customize_package_ibfk_2` FOREIGN KEY (`c_package_id`) REFERENCES `customize_package` (`c_package_id`);

--
-- Constraints for table `productmodel`
--
ALTER TABLE `productmodel`
  ADD CONSTRAINT `productmodel_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `recommended_packages`
--
ALTER TABLE `recommended_packages`
  ADD CONSTRAINT `recommended_packages_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
