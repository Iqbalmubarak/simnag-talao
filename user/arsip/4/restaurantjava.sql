-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 03:27 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantjava`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(15) NOT NULL,
  `id_staff` int(15) NOT NULL,
  `datetime_bill` datetime NOT NULL,
  `tablenumber_bill` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `id_staff`, `datetime_bill`, `tablenumber_bill`) VALUES
(2, 1, '2017-12-20 16:09:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `quantity_order` int(11) NOT NULL,
  `note_order` varchar(255) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `quantity_order`, `note_order`, `id_bill`, `id_product`) VALUES
(3, 2, 'pedas', 2, 2),
(4, 2, 'dingin', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(15) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `type_product` varchar(45) NOT NULL,
  `price_product` double NOT NULL,
  `description_product` varchar(255) NOT NULL,
  `stock_product` int(15) NOT NULL,
  `directory_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `type_product`, `price_product`, `description_product`, `stock_product`, `directory_product`) VALUES
(1, 'Nasi Ayam (5.6)', 'food', 5.6, 'Nasi ayam hainan', 30, 'src/images/Resepi-Nasi-Ayam-Sedap-aliff.co_.jpg'),
(2, 'Mie Goreng (4)', 'food', 4, 'Mee goreng mamak style', 20, 'src/images/mie.jpg'),
(3, 'Orange Juice (4.3)', 'drink', 4.3, 'Fresh orange juice with a slice of orange', 10, 'src/images/orange.jpg'),
(4, 'Bebek Goreng (6)', 'food', 6, 'Fried duck', 20, 'src/images/bebek goreng.jpg'),
(5, 'Ayam Goreng Tulang Lunak (6)', 'food', 6, 'Fried soft bone chicken', 15, 'src/images/Resep-Ayam-goreng-tulang-lunak.jpg'),
(6, 'Ayam Goreng Telur Asin (7)', 'food', 7, 'Fried chicken with salty egg sauce', 15, 'src/images/telurasin.jpg'),
(7, 'Ayam Bakar (6)', 'food', 6, 'Grilled Chicken', 15, 'src/images/bakar.jpg'),
(8, 'Sop Buntut (7)', 'food', 7, 'Oxtail soup', 10, 'src/images/resep-sop-buntut-sapi-spesial.jpg'),
(9, 'Soto Jakarta (7)', 'food', 7, 'Beef soup with coconut milk', 15, 'src/images/soto-betawi-jakarta-21-X3.jpg'),
(10, 'Bakso Mie (5)', 'food', 5, 'Noodle soup with meat balls', 15, 'src/images/MIE-AYAM-BAKSO-URAT-KHARISMA-JAYA-FEATURED-IMAGE.jpg'),
(11, 'Cumi Bakar (5)', 'food', 5, 'Grilled squid', 20, 'src/images/cumi bakar.jpg'),
(12, 'Gado-Gado (6)', 'food', 6, 'Mixed vegetables salad with peanut sauce', 15, 'src/images/1200px-Gado-gado_in_Jakarta.JPG'),
(13, 'Ayam Bali (6)', 'food', 6, 'Chicken fillet in thick balinese sauce', 20, 'src/images/ayam bali.jpg'),
(14, 'Laksa Ayam (4)', 'food', 4, 'Rice noodle in curry sauce', 10, 'src\\images\\Resep-Cara-Membuat-Laksa-Ayam-Sedap-Special.jpg'),
(15, 'Lemon Juice (3)', 'drink', 3, 'Lemon juice with sliced lemon', 20, 'src/images/lemonjuice.jpg'),
(16, 'Ice Tea (2)', 'drink', 2, 'Tea with ice', 25, 'src/images/1200px-Iced_Tea_from_flickr.jpg'),
(17, 'Avocado Juice (4)', 'drink', 4, 'Avocado juice with chocolate milk', 10, 'src/images/avocado.jpg'),
(18, 'Mango Juice (4)', 'drink', 4, 'Mango juice', 10, 'src/images/mango-smoothie1-e1396657084928.jpg'),
(19, 'Banana Juice (4)', 'drink', 4, 'Banana juice with milk', 10, 'src/images/BananaSmoothie-175454103-58a4744d5f9b58819c891ec3.jpg'),
(20, 'Teh Tarik (3)', 'drink', 3, 'Tea with milk', 15, 'src/images/Teh_Tarik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(15) NOT NULL,
  `name_staff` varchar(99) NOT NULL,
  `password_staff` varchar(99) NOT NULL,
  `notel_staff` varchar(255) NOT NULL,
  `address_staff` varchar(255) NOT NULL,
  `level_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `name_staff`, `password_staff`, `notel_staff`, `address_staff`, `level_staff`) VALUES
(1, 'faishal', '123456', '098765', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_staff` (`tablenumber_bill`),
  ADD KEY `id_staff_idx` (`id_staff`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_bill_idx` (`id_bill`),
  ADD KEY `id_product_idx` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `id_staff` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `id_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
