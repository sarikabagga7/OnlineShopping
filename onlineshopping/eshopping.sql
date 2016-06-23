-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 04:31 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

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
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `ID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sessionID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`ID`, `productID`, `quantity`, `sessionID`) VALUES
(1, 1, 34, '7vus4k8g50mmr9hsknovlb96i7'),
(3, 1, 14, 'uca20nmtva99h7ikbge0p67i71'),
(4, 1, 1, 'o74ntrnq9umfkva055a1urvac5'),
(5, 4, 1, 'o74ntrnq9umfkva055a1urvac5'),
(6, 4, 1, 'uca20nmtva99h7ikbge0p67i71'),
(7, 1, 6, 'rdsfcjpf91jrh9jajmfq5pm9o7'),
(8, 3, 6, 'rdsfcjpf91jrh9jajmfq5pm9o7'),
(9, 1, 1, 'g05ui0rfccmfecutetloqrvnd0'),
(13, 3, 4, '8idfntd0du7u66ueh86thpt5c1');

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
  `orderDate` datetime NOT NULL,
  `SessionID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `userID`, `quantity`, `totalAmount`, `gst`, `qst`, `totalPayable`, `status`, `shippingAddress`, `orderDate`, `SessionID`) VALUES
(1, 3, 0, '4849.89', '242.49', '242.49', '5334.88', '', 'test', '2016-05-08 00:37:02', 'rdsfcjpf91jrh9jajmfq5pm9o7'),
(2, 3, 0, '69.93', '3.50', '3.50', '76.92', '', 'test', '2016-05-08 18:08:54', '8idfntd0du7u66ueh86thpt5c1'),
(3, 3, 0, '869.92', '43.50', '43.50', '956.91', '', 'test', '2016-05-08 18:12:03', '8idfntd0du7u66ueh86thpt5c1');

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
  `image` varchar(100) NOT NULL,
  `promotion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `categoryID`, `productName`, `description`, `ProductPrice`, `rating`, `image`, `promotion`) VALUES
(1, 1, 'LACK Side table', 'Easy to assemble. Lightweight and easy to move. \r\nSize\r\n22 x 22 "', '9.99', 4, 'lack.JPG', 1),
(2, 1, 'LACK Side table', 'The high-gloss surfaces reflect light and give a vibrant look.\r\nSize\r\n21 5/8 x 21 5/8 "', '15.99', 4, 'lack_black.JPG', 1),
(3, 2, 'TIDAFORS Sofa, Hensta gray', 'The high back provides good support for your neck and head. Seat cushions with cold foam and a top layer of memory foam. Molds to the precise contours of your body and regains its shape when you get up', '799.99', 5, 'tidafors-sofa-gray.JPG', 1),
(4, 3, 'KAUSTBY\r\nChair, antique stain', 'Solid pine is a natural material which ages beautifully and gains its own unique character over time.', '39.99', 4, 'kaustby-chair__0173544_PE327678_S4.JPG', 1),
(5, 4, 'HEMNES\r\nSideboard, black-brown', 'Solid wood has a natural feel. Read more\r\nSize\r\n61 3/4 x 34 5/8 "', '349.00', 3, 'hemnes-sideboard__0331494_PE523200_S4.JPG', 1),
(6, 5, 'GULLKLOCKA\r\nCushion cover, green', 'Chenille fabric feels ultra soft against your skin. The zipper makes the cover easy to remove. Read more\r\nSize\r\n26 x 26 "', '9.99', 3, 'gullklocka-cushion-cover-green.JPG', 1);

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

--
-- Dumping data for table `shippingaddress`
--

INSERT INTO `shippingaddress` (`ID`, `userID`, `country`, `province`, `city`, `address`, `postalcode`, `phoneNumber`) VALUES
(1, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(2, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(3, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(4, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(5, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(6, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(7, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(8, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(9, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(10, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(11, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(12, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(13, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(14, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(15, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(16, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(17, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(18, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(19, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(20, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(21, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(22, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(23, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(24, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788'),
(25, 3, '', 'Ontario', 'aaaaa', 'aaaaaaa', 'H3K2N9', '5145777788');

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
(2, 'Sarb', '456789', 'Sarika', 'Bagga', 'f', 'sarika_b@gmail.com'),
(3, '', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'Sarika', 'Bagga', 'f', 'peerji@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `productID_2` (`productID`,`sessionID`),
  ADD KEY `productID` (`productID`);

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
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD CONSTRAINT `cartitems_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`ID`);

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
