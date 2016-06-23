-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 07:27 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
