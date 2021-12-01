-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 01:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin123', 'Admin123@gmail.com', 'Admin123'),
(2, 'Fajar Putra', 'Fajar.putra1691@gmail.com', 'Fajar123'),
(3, 'Arneta', 'arneta123@gmail.com', 'arneta123'),
(4, 'admin1234', 'admin1234@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `photo`, `nama_produk`, `caption`, `harga_produk`) VALUES
(1, 'americano.jpg', 'americano', 'Espresso combined with hot water', 15000),
(2, 'cappucino.jpg', 'cappucino', 'Espresso, steamed milk, and a silk layers of foam', 20000),
(3, 'breve.jpg', 'Breve', 'Creamy steamed half and half combined with rich espresso', 25000),
(4, 'mexi moca.jpg', 'Mexi Mocha', 'Classic Mexican chocolate powder, espresso, and steamed milk', 35000),
(5, 'coffe moca.jpg', 'Coffee Mocha', 'Steamed rich chocolate and espresso', 25000),
(6, 'latte machiato.jpg', 'Latte Macchiato', 'Classic Mexican chocolate powder, espresso, and steamed milk', 35000),
(7, 'honey gingger lemonade.jpg', 'Honey Ginger Lemonade', 'Fresh ginger, mint leaves, and honey combined with lemon juice', 30000),
(8, 'sparkling strawberry.jpg', 'Sparkling Strawberry-ade', 'Strawberries combined with lemonade and sparkling water', 30000),
(9, 'kiwi ade.jpg', 'Kiwi-ade', 'Fresh and sweet kiwi lemonade', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `produk2`
--

CREATE TABLE `produk2` (
  `id_produk` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk2`
--

INSERT INTO `produk2` (`id_produk`, `photo`, `nama_produk`, `caption`, `harga_produk`) VALUES
(1, 'macaron.jpg', 'Lovey Macaron', 'Two pair of heart-shaped macarons with cherry & raspberry flavor', 35000),
(2, 'crimont donut.jpg', 'Crimont Donut', 'A chocolate iced donut with crisps & almond on top', 15000),
(3, 'matcha cake.jpg', 'Matcha Cake', 'A slice of matcha cake and a strawberry on top', 20000),
(4, 'role cake.jpg', 'Role Cake', 'A lemon flavored cake and a pouring cream', 40000),
(5, 'brewi.jpg', 'Brewi', 'Two stack of bread with kiwi slices all over it', 25000),
(6, 'churros.jpg', 'Churros', 'A pair of churros with chocolate & vanilla icing', 15000),
(7, 'French Fries.jpg', 'French Fries', 'Special french fries with hot sauce and mayo', 20000),
(8, 'pizza.jpg', 'One Piece Pizza', 'A slice of beef & cheese pizza', 15000),
(9, 'soup dumpling.jpg', 'Soup Dumpling', 'Delicious dumplings with secret soup recipe', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk2`
--
ALTER TABLE `produk2`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk2`
--
ALTER TABLE `produk2`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
