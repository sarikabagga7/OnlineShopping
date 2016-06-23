-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 07:42 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `categoryName`) VALUES
(1, 'Table'),
(2, 'Sofa'),
(3, 'Chair'),
(4, 'Storage'),
(5, 'Textil');

-- --------------------------------------------------------

--
-- Table structure for table `currentitems`
--

CREATE TABLE `currentitems` (
  `ID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalAmount` decimal(9,2) NOT NULL,
  `gst` decimal(9,2) NOT NULL,
  `qst` decimal(9,2) NOT NULL,
  `totalPayable` decimal(9,2) NOT NULL,
  `status` enum('Delivered','Pending','Denied') NOT NULL,
  `shippingAddress` varchar(100) NOT NULL,
  `orderDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `description` text,
  `ProductPrice` decimal(9,2) NOT NULL,
  `rating` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `categoryID`, `productName`, `description`, `ProductPrice`, `rating`, `image`) VALUES
(1, 1, 'LACK Side table', 'Easy to assemble. Lightweight and easy to move. \r\nSize\r\n22 x 22 "', '9.99', 4, 'lack.JPG'),
(2, 1, 'LACK Side table', 'The high-gloss surfaces reflect light and give a vibrant look.\r\nSize\r\n21 5/8 x 21 5/8 "', '15.99', 4, 'lack_black.JPG'),
(3, 2, 'TIDAFORS Sofa, Hensta gray', 'The high back provides good support for your neck and head. Seat cushions with cold foam and a top layer of memory foam. Molds to the precise contours of your body and regains its shape when you get up', '799.99', 5, 'tidafors-sofa-gray.JPG'),
(4, 3, 'KAUSTBY\r\nChair, antique stain', 'Solid pine is a natural material which ages beautifully and gains its own unique character over time.', '39.99', 4, 'kaustby-chair__0173544_PE327678_S4.JPG'),
(5, 4, 'HEMNES\r\nSideboard, black-brown', 'Solid wood has a natural feel. Read more\r\nSize\r\n61 3/4 x 34 5/8 "', '349.00', 3, 'hemnes-sideboard__0331494_PE523200_S4.JPG'),
(6, 5, 'GULLKLOCKA\r\nCushion cover, green', 'Chenille fabric feels ultra soft against your skin. The zipper makes the cover easy to remove. Read more\r\nSize\r\n26 x 26 "', '9.99', 3, 'gullklocka-cushion-cover-green.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `shippingaddress`
--

CREATE TABLE `shippingaddress` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nameFirst` varchar(100) NOT NULL,
  `nameLast` varchar(100) NOT NULL,
  `gender` enum('f','m') NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `nameFirst`, `nameLast`, `gender`, `email`) VALUES
(1, 'arf', '123456', 'Alireza', 'Farifteh', 'm', 'arfarifteh@yahoo.com'),
(2, 'Sarb', '456789', 'Sarika', 'Bagga', 'f', 'sarika_b@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `currentitems`
--
ALTER TABLE `currentitems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `currentitems`
--
ALTER TABLE `currentitems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `currentitems`
--
ALTER TABLE `currentitems`
  ADD CONSTRAINT `currentitems_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `currentitems_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`ID`);

--
-- Constraints for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD CONSTRAINT `shippingaddress_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
