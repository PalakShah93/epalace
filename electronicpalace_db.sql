-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2014 at 04:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electronicpalace_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `a_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`a_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('a_1', 'Apple', 'Apple 5S', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Charcoal Black', '3 months Of Manufacture Warrenty', 'S$8.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Designer-Flip-Cover.jpg'),
('a_10', 'Printland', 'Printland-Coloured-Back-Covers', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Multi Color', '2 months Of Manufacture Warrenty', 'S$10.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Printland-Coloured-Back-Covers.jpg'),
('a_11', 'Printland', 'Mobile-Case-Print-Design', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Multi Color', '2 months Of Manufacture Warrenty', 'S$12.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Mobile-Case-Print-Design.jpg'),
('a_12', 'Printland', 'Super-Spiderman-IPhone', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Multi Color', '2 months Of Manufacture Warrenty', 'S$14.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Super-Spiderman-IPhone.jpg'),
('a_13', 'WOW', 'WOW-Rugged-Grenade-Stand', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Red', '2 months Of Manufacture Warrenty', 'S$44.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/WOW-Rugged-Grenade-Stand.jpg'),
('a_14', 'Fuson', 'Fuson-Premium', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Blue', '4 months Of Manufacture Warrenty', 'S$24.77', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Fuson-Premium.jpg'),
('a_15', 'Folio', 'DORADO-Flip-Cover-Folio', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Pink', '4 months Of Manufacture Warrenty', 'S$20.77', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/DORADO-Flip-Cover-Folio.jpg'),
('a_16', 'Folio', 'El-Dorado-Premium', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Green', '4 months Of Manufacture Warrenty', 'S$21.77', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/El-Dorado-Premium.jpg'),
('a_17', 'Folio', 'Oe-Flip-Hard-Back-Cover', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Red', '4 months Of Manufacture Warrenty', 'S$32.71', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Oe-Flip-Hard-Back-Cover.jpg'),
('a_18', 'Folio', 'Printland-Coloured', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Muli Color', '4 months Of Manufacture Warrenty', 'S$32.71', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Printland-Coloured.jpg'),
('a_19', 'Folio', 'EL-DORADO', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Orange', '4 months Of Manufacture Warrenty', 'S$13.71', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/EL-DORADO.jpg'),
('a_2', 'kharido', 'kharido-AE-Leather-Flip', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Brown', '5 months Of Manufacture Warrenty', 'S$19.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/kharido-AE-Leather-Flip.jpg'),
('a_20', 'Dressmyphone', 'Dressmyphone-Sparkling', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Baby Pink', '4 months Of Manufacture Warrenty', 'S$36.69', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Dressmyphone-Sparkling.jpg'),
('a_3', 'Apple', 'xon phone 5 cover', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Grey', '3 months Of Manufacture Warrenty', 'S$9.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/xon phone 5 cover.jpg'),
('a_4', 'kioshi', 'Kioshi-s-Premium', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Yellow', '5 months Of Manufacture Warrenty', 'S$9.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Kioshi-s-Premium.jpg'),
('a_5', 'Design-mickey', 'Mobile-Case-Design-mickey', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Brown', '5 months Of Manufacture Warrenty', 'S$15.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Mobile-Case-Design-mickey.jpg'),
('a_7', 'RKA', 'Leather-Flip-Designer-Stripe', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Brown Stripe', '2 months Of Manufacture Warrenty', 'S$25.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Leather-Flip-Designer-Stripe.jpg'),
('a_8', 'RKA', 'Mobile-Case-Print-Design-rainbow-5S', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Rainbow Colors', '2 months Of Manufacture Warrenty', 'S$18.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Case-Print-Design-rainbow.jpg'),
('a_9', 'Rainbow', 'Printland-Back-Cover-Colored', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Rainbow Colors', '2 months Of Manufacture Warrenty', 'S$17.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Printland-Back-Cover-Colored.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) DEFAULT NULL,
  `brand_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'BlackBerry'),
(4, 'Sony'),
(5, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `c_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`c_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('c_1', 'Nikkon', 'Nikon-D90-DSLR-Black', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$350.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Nikon-D90-DSLR-Black.jpg'),
('c_2', 'Cannon', 'Canon-EOS-70D', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$300.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Canon-EOS-70D.jpg'),
('c_3', 'Go Pro', 'Click-Pro-Oculus', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$298.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Click-Pro-Oculus.jpg'),
('c_4', 'Nikkon', 'Nikon-Coolpix', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Purple', '2 Years Of Manufacture Warrenty', 'S1298.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Nikon-Coolpix.jpg'),
('c_5', 'Sony', 'Sony-CyberShot', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Greyish Black', '2 Years Of Manufacture Warrenty', 'S198.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Sony-CyberShot.jpg'),
('c_6', 'Nikkon', 'Nikon-Coolpix', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Red', '2 Years Of Manufacture Warrenty', 'S498.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Nikon-Coolpix1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) DEFAULT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `category_desc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Laptops', 'touchscreen'),
(2, 'Laptops', ' non touchscreen'),
(3, 'Mobiles', ' Smart Phones'),
(4, 'Mobiles', ' Normal Phones'),
(5, 'Cameras', ' All'),
(6, 'Tablets', ' All'),
(7, 'Audio Systems', ' All'),
(8, 'Desktops ', ' All');

-- --------------------------------------------------------

--
-- Table structure for table `category_laptop`
--

CREATE TABLE IF NOT EXISTS `category_laptop` (
  `category_id` int(11) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `processor_brand` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `harddisk` varchar(45) NOT NULL,
  `os` varchar(45) NOT NULL,
  `screensize` varchar(45) NOT NULL,
  `battery_hrs` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price_before_discount` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `product_callfeatures` varchar(45) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_laptop`
--

INSERT INTO `category_laptop` (`category_id`, `brand`, `model`, `color`, `processor_brand`, `ram`, `harddisk`, `os`, `screensize`, `battery_hrs`, `weight`, `warrenty`, `price_before_discount`, `price`, `product_callfeatures`) VALUES
(1, 'Apple', 'MacBook Air', 'Silver', 'Intel Core i5(4th Generation)', '4GB', '500GB', 'Mac OS', '13.3 inch', '7 hrs', '13.5kg', '1 Year manufacture Warrenty', '1,173.10', '1,110.10', 'image/laptopcat1.jpg'),
(2, 'Apple', 'MacBook Pro', 'Silver', 'Intel Core i5(3rd Generation)', '4GB', '500GB', 'Mac OS X Lion', '13 inch', '7 hrs', '2.06 kg', '1 Year manufacture Warrenty', '1,220.90', '1,000.90', 'image/laptopcat2.jpg'),
(3, 'Apple', 'MacBook Pro', 'Black', 'Intel Core i7', '4GB', '500GB', 'X Mavericks', '15.4 inch', '7 hrs', '2.02 kg', '2 Year manufacture Warrenty', '3,244.90', '3,190.90', 'image/laptopcat3.jpg'),
(4, 'Dell', 'Insspiron', 'Black', 'Intel Core i5(4th Generation)', '4GB', '1 TB', 'Windows 8', '15.6 inch', '6 hrs', '2.25 kg', '1 Year manufacture Warrenty', '3,204.90', '3,100.90', 'image/laptopcat4.jpg'),
(5, 'Dell', 'Note Book', 'Grey', 'AMD APU A6', '4GB', '500GB', 'Windows 8', '14 inch', '7 hrs', '2.04 kg', '1 Year manufacture Warrenty', '1,569.0', '1,200.90', 'image/laptopcat5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category_phones`
--

CREATE TABLE IF NOT EXISTS `category_phones` (
  `category_id` int(11) NOT NULL,
  `Model` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Storage` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `Netwrok` varchar(45) NOT NULL,
  `Camera` varchar(45) NOT NULL,
  `touchscreen` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `product_brand` varchar(45) DEFAULT NULL,
  `product_callfeatures` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_phones`
--

INSERT INTO `category_phones` (`category_id`, `Model`, `Type`, `Storage`, `color`, `Netwrok`, `Camera`, `touchscreen`, `price`, `product_brand`, `product_callfeatures`) VALUES
(1110, 'HTC One M8', 'Smart Phone', '32 GB', 'Silver', '3G', '5.5px', 'Yes', '775', 'HTC', 'image/phcat1.jpg'),
(1112, 'HTC One M8', 'Smart Phone', '32 GB', 'Grey', '3G', '5.5px', 'Yes', '800', 'HTC', 'image/phcat2.jpg'),
(1113, 'LG G3', 'Smart Phone', '32 GB', 'Metallic Black', '3G', '5.0px', 'Yes', '654', 'LG', 'image/phcat3.jpg'),
(1114, 'LG G3', 'Smart Phone', '32 GB', 'Shine Gold', '3G', '5.2px', 'Yes', '475', 'LG', 'image/phcat4.jpg'),
(1115, 'Samsung Galaxy Note3', 'Smart Phone', '32 GB', 'Black', '3G', '5.2px', 'Yes', '890', 'Samsung', 'image/phcat5.jpg'),
(1116, 'Samsung Galaxy Note3', 'Smart Phone', '32 GB', 'White', '3G', '5.2px', 'Yes', '910', 'Samsung', 'image/phcat6.jpg'),
(1117, 'Samsung Galaxy Note4', 'Smart Phone', '32 GB', 'Charcoal Black', '3G', '5.2px', 'Yes', '1210', 'Samsung', 'image/phcat7.jpg'),
(1118, 'Samsung Galaxy Note4', 'Smart Phone', '32 GB', 'Frosted White', '3G', '5.2px', 'Yes', '1200', 'Samsung', 'image/phcat8.jpg'),
(1119, 'Samsung Galaxy S4', 'Smart Phone', '16 GB', 'White Frost', '3G', '5.0px', 'Yes', '1000', 'Samsung', 'image/phcat9.jpg'),
(1120, 'Samsung Galaxy S4', 'Smart Phone', '16 GB', 'Blue', '3G', '5.0px', 'Yes', '980', 'Samsung', 'image/phcat10.jpg'),
(1121, 'Samsung Galaxy S5', 'Smart Phone', '16 GB', 'Cherry Red', '3G', '5.2px', 'Yes', '1010', 'Samsung', 'image/phcat11.jpg'),
(1122, 'I-Phone 5S', 'Smart Phone', '16 GB', 'GOld', '$G', '5.2px', 'Yes', '789', 'Apple', 'image/phcat14.jpg'),
(1123, 'I-Phone 4S', 'Smart Phone', '8 GB', 'White', '4G', '5.2px', 'Yes', '650', 'Apple', 'image/phcat15.jpg'),
(1124, 'Blackberry Z3', 'Smart Phone', '8 GB', 'Black', '4G', '5.2px', 'Yes', '690', 'Blackberry', 'image/phcat16.jpg'),
(1125, 'oplus XonPhone5', 'Smart Phone', '8 GB', 'Black', '4G', '5.2px', 'Yes', '700', 'oplus', 'image/phcat17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` varchar(60) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deals_of_the_day`
--

CREATE TABLE IF NOT EXISTS `deals_of_the_day` (
  `deals_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`deals_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals_of_the_day`
--

INSERT INTO `deals_of_the_day` (`deals_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('deals_1', 'Apple', 'Apple 5s', 'Bar', 'Single SIM, GSM + GSM, (Dual Standby)', '2G, 3G ', '1GB DDR3L', '4 inches (20.32 cm)', '16 GB', '125 g', 'Black', '2 Years Of Manufacture Warrenty', 'S898.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/mobilnove-62874.jpg'),
('deals_2', 'Samsung', 'Samsung', 'Television', ' Not Applicable', 'Wi-Fi ', '1GB DDR3L', '4 inches (20.32 cm)', '16 GB', '18 Kg', 'Black', '2 Years Of Manufacture Warrenty', 'S1298.82', ' Not Applicable', 'Not Applicable', 'Not Applicable', 'image/televisionovn.jpg'),
('deals_3', 'Sony', 'Sony', 'Hard Disk', ' Not Applicable', 'Wi-Fi ', 'Not Applicable', 'Not Applicable', '64 GB', '145g', 'Black', '2 Years Of Manufacture Warrenty', 'S98.82', ' Not Applicable', 'Not Applicable', 'Not Applicable', 'image/harddisnovk.jpg'),
('deals_4', 'Cannon', 'digital_camernova', 'Camera', ' Not Applicable', 'Wi-Fi ', 'Not Applicable', 'Not Applicable', '2 GB', '145g', 'Black', '2 Years Of Manufacture Warrenty', 'S198.82', ' Not Applicable', 'Not Applicable', 'Not Applicable', 'image/digital_camernova.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `desktop`
--

CREATE TABLE IF NOT EXISTS `desktop` (
  `d_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desktop`
--

INSERT INTO `desktop` (`d_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('d_1', 'LG', 'LG-Chromebase-White', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '16 GB', '21.5 Inches', 'With Stand - 4.3; Without Stand - 3.5', 'White', '2 Years Of Manufacture Warrenty', 'S$1,559.8', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/LG-Chromebase-White.jpg'),
('d_2', 'Lenovo', 'Lenovo-N308', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '21.5 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1,009.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Lenovo-N308.jpg'),
('d_3', 'Apple', 'Apple-iMac', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '23 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1,009.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Apple-iMac.jpg'),
('d_4', 'Lenovo', 'Lenovo-desktop', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '23 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1,009.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Lenovo-desktop.jpg'),
('d_5', 'Apple', 'Apple-iMac', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '23 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1,109.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Apple-iMa1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `f_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) DEFAULT NULL,
  `q_10` int(11) DEFAULT NULL,
  `q_4` int(11) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `q1`, `q2`, `q3`, `q5`, `q6`, `q7`, `q8`, `q9`, `f_id`, `comment`, `q_10`, `q_4`) VALUES
('paak', 'idhiuh', 1, 2, 3, 4, 5, 6, 7, 8, 9, '10', 1, NULL),
('yeah', 'idhiuh', 1, 2, 3, 4, 5, 6, 7, 8, 10, '10', 0, NULL),
('uff', 'idhiuh', 1, 2, 3, 4, 5, 6, 7, 8, 11, '10', 0, NULL),
('Palak', 'palakjerry@yahoo.in', 3, 3, 3, 3, 3, 3, 3, 3, 12, '', 3, 3),
('Palak', 'palakjerry93@gmail.com', 3, 3, 3, 3, 3, 3, 3, 3, 13, '', 3, 3),
('Palak', 'palakjerry93@gmail.com', 3, 3, 3, 3, 3, 3, 3, 3, 14, '', 3, 3),
('smit', 'smitshah95@gmail.com', 3, 3, 3, 3, 3, 3, 3, 3, 15, 'good', 5, 3),
('Palak', 'palakjerry93@gmail.com', 3, 3, 3, 3, 3, 3, 3, 3, 16, '', 3, 3),
('mr tng', 'palakjerry93@gmail.com', 3, 3, 3, 3, 4, 5, 2, 4, 17, '', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hard_drive`
--

CREATE TABLE IF NOT EXISTS `hard_drive` (
  `hd_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`hd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hard_drive`
--

INSERT INTO `hard_drive` (`hd_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('hd_1', 'Seagate', 'Seagate-Backup-Plus-Slim', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '123 g', 'Silver', '2 Years Of Manufacture Warrenty', '150.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Seagate-Backup-Plus-Slim.jpg'),
('hd_10', 'ADATA', 'ADATA-HE720-Ultra-Slim', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '120 g', 'Silver', '2 Years Of Manufacture Warrenty', '99.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/ADATA-HE720-Ultra-Slim.jpg'),
('hd_2', 'Seagate', 'Seagate-Backup-Plus-Desk', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2TB', '123 g', 'Silver', '2 Years Of Manufacture Warrenty', '150.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Seagate-Backup-Plus-Desk-2TB.jpg'),
('hd_3', 'Transcend', 'Transcend-H3P-2-TB-External', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '250.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Transcend.jpg'),
('hd_4', 'My Passpost', 'WD-My-Passport-Ultra-2TB', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Red', '2 Years Of Manufacture Warrenty', '300.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-My-Passport-Ultra-2TB.jpg'),
('hd_5', 'My Passpost', 'WD-My-Passport-Ultra', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '302.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-My-Passport-Ultra.jpg'),
('hd_6', 'Sony', 'Sony-1-TB-External-Hard', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '1 TB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '302.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Sony-1-TB-External-Hard.jpg'),
('hd_7', 'Sony', 'Sony-External-Hard-Drive', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Pink', '2 Years Of Manufacture Warrenty', '252.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Sony-External-Hard-Drive.jpg'),
('hd_8', 'My Passpost', 'WD-Mypassport', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '302.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-Mypassport.jpg'),
('hd_9', 'My Passpost', 'WD-My-Passport-1-TB', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '120 g', 'Red', '2 Years Of Manufacture Warrenty', '102.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-My-Passport-1-TB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepageimages`
--

CREATE TABLE IF NOT EXISTS `homepageimages` (
  `h_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepageimages`
--

INSERT INTO `homepageimages` (`h_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('h_1', 'Samsung', 'Samsung Galaxy S5', 'Touch Screen', 'Single', '3G,4G', '512 RAM', '5 Inch', '16GB ', '141g', 'Black', '1 Year Of Manufacture Warrenty', 'S$989.41', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Samsung Galaxy S5, Black 16GB.jpg'),
('h_3', 'LG', 'LG G Flex', 'Touch Screen', 'Single', '3G,4G', '512 RAM', '4.5 Inch', '32GB ', '141g', 'Titan Silver', '1 Year Of Manufacture Warrenty', 'S$669.99', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/LG-G-Flex-Titan.jpg'),
('h_4', 'LG', 'LG G3-Metallic Black-32GB', 'Touch screen', 'Single', '2G,3G', '512 RAM', '5.2 Inch', '32GB', '111g', 'Metallic Black', '2 Years Of Manufacture Warrenty', 'S$409.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/LGG3-MetallicBlack-32GB.jpg'),
('h_5', 'HTC', 'HTC', 'Touch screen', 'Single', '3G,4G', '512 RAM', '5.2 Inch', '32GB', '151g', 'Charcoal Black', '2 Years Of Manufacture Warrenty', 'S$400.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/HTC.jpg'),
('h_6', 'Samsung', 'Samsung Galaxy S5 Sport', 'Touch screen', 'Single', '3G,4G', '512 RAM', '5.2 Inch', '32GB', '151g', 'Charcoal Black', '2 Years Of Manufacture Warrenty', 'S$650.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/SamsungGalaxyS5Sport.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ipad`
--

CREATE TABLE IF NOT EXISTS `ipad` (
  `i_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipad`
--

INSERT INTO `ipad` (`i_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('i_1', 'Apple', 'iPad-Air-2', 'Ipad', 'Yes', 'Wi-FI', '32 GB', '9.7 Inch', 'Not applicable ', '437 g', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1050.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/iPad-Air-2.jpg'),
('i_2', 'Apple', 'Apple-ipad-Mini', 'Ipad', 'Yes', 'Wi-FI', '16 GB', '9.7 Inch', 'Not applicable ', '437 g', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1050.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Apple-ipad-Mini.jpg'),
('i_3', 'Apple', 'Apple-iPad-Air-32-GB', 'Ipad', 'Yes', 'Wi-FI', '16 GB', '9.7 Inch', 'Not applicable ', '437 g', 'White', '2 Years Of Manufacture Warrenty', 'S$950.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Apple-iPad-Air-32-GB.jpg'),
('i_4', 'Apple', 'ipad', 'Ipad', 'Yes', 'Wi-FI', '32 GB', '9.7 Inch', 'Not applicable ', '337 g', 'White', '2 Years Of Manufacture Warrenty', 'S$750.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/ipad.jpg'),
('i_5', 'Apple', 'Apple-iPad -Retina Display', 'Ipad', 'Yes', 'Wi-FI', '32 GB', '9.7 Inch', 'Not applicable ', '337 g', 'White', '2 Years Of Manufacture Warrenty', 'S$550.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Apple-iPad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE IF NOT EXISTS `laptop` (
  `l_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`l_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('l_1', 'Apple', 'MacBook-Air', 'Touch Screen', 'Single', '3G,4G', '4 GB DDR3', '13.3 Inch', '32 GB', '1.35 kg', 'Silver', '1 Year Of Manufacture Warrenty', 'S$1229.84', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Apple-MD760HN-B-MacBook-Air.jpg'),
('l_2', 'Dell', 'Dell-Inspiron-Laptop', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '500 GB', '2.15 kg', 'Black', '1 Year Of Manufacture Warrenty', 'S$974.84', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Dell-Inspiron-15-3541-Laptop.jpg'),
('l_3', 'Notion', 'Notion-Ink-Cain', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '1 TB', '2 kg', 'Black', '1 Year Of Manufacture Warrenty', 'S$900.87', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Notion-Ink-Cain.jpg'),
('l_4', 'HP', 'HP-240-G3-Laptop', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '1 TB', '2.10 kg', 'Black', '1 Year Of Manufacture Warrenty', 'S$1248.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/HP-240-G3-K1V41PA-Laptop.jpg'),
('l_5', 'HP', 'HP-G4-Notebook', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '500 GB', '2.10 kg', 'Black', '1 Year Of Manufacture Warrenty', 'S$1007.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/HP-G4-1303AU-Notebook.jpg'),
('l_7', 'Lenevo', 'Lenovo-B50', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '500 GB', '1.9 kg', 'Charcoal Black', '2 Year Of Manufacture Warrenty', 'S$652.85', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Lenovo-B50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `master_product`
--

CREATE TABLE IF NOT EXISTS `master_product` (
  `id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_product`
--

INSERT INTO `master_product` (`id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('a_1', 'Apple', 'Apple 5S', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Charcoal Black', '3 months Of Manufacture Warrenty', '8.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Designer-Flip-Cover.jpg'),
('a_10', 'Printland', 'Printland-Coloured-Back-Covers', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Multi Color', '2 months Of Manufacture Warrenty', '10.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Printland-Coloured-Back-Covers.jpg'),
('a_11', 'Printland', 'Mobile-Case-Print-Design', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Multi Color', '2 months Of Manufacture Warrenty', '12.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Mobile-Case-Print-Design.jpg'),
('a_12', 'Printland', 'Super-Spiderman-IPhone', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Multi Color', '2 months Of Manufacture Warrenty', '14.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Super-Spiderman-IPhone.jpg'),
('a_13', 'WOW', 'WOW-Rugged-Grenade-Stand', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Red', '2 months Of Manufacture Warrenty', '44.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/WOW-Rugged-Grenade-Stand.jpg'),
('a_14', 'Fuson', 'Fuson-Premium', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Blue', '4 months Of Manufacture Warrenty', '24.77', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Fuson-Premium.jpg'),
('a_15', 'Folio', 'DORADO-Flip-Cover-Folio', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Pink', '4 months Of Manufacture Warrenty', '20.77', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/DORADO-Flip-Cover-Folio.jpg'),
('a_16', 'Folio', 'El-Dorado-Premium', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Green', '4 months Of Manufacture Warrenty', '21.77', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/El-Dorado-Premium.jpg'),
('a_17', 'Folio', 'Oe-Flip-Hard-Back-Cover', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Red', '4 months Of Manufacture Warrenty', '32.71', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Oe-Flip-Hard-Back-Cover.jpg'),
('a_18', 'Folio', 'Printland-Coloured', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Muli Color', '4 months Of Manufacture Warrenty', '32.71', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Printland-Coloured.jpg'),
('a_19', 'Folio', 'EL-DORADO', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Orange', '4 months Of Manufacture Warrenty', '13.71', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/EL-DORADO.jpg'),
('a_2', 'kharido', 'kharido-AE-Leather-Flip', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Brown', '5 months Of Manufacture Warrenty', '19.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/kharido-AE-Leather-Flip.jpg'),
('a_20', 'Dressmyphone', 'Dressmyphone-Sparkling', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Baby Pink', '4 months Of Manufacture Warrenty', '36.69', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Dressmyphone-Sparkling.jpg'),
('a_3', 'Apple', 'xon phone 5 cover', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Grey', '3 months Of Manufacture Warrenty', '9.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/xon phone 5 cover.jpg'),
('a_4', 'kioshi', 'Kioshi-s-Premium', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Yellow', '5 months Of Manufacture Warrenty', '9.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Kioshi-s-Premium.jpg'),
('a_5', 'Design-mickey', 'Mobile-Case-Design-mickey', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Brown', '5 months Of Manufacture Warrenty', '15.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Mobile-Case-Design-mickey.jpg'),
('a_7', 'RKA', 'Leather-Flip-Designer-Stripe', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Brown Stripe', '2 months Of Manufacture Warrenty', '25.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Leather-Flip-Designer-Stripe.jpg'),
('a_8', 'RKA', 'Mobile-Case-Print-Design-rainbow-5S', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Rainbow Colors', '2 months Of Manufacture Warrenty', '18.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Case-Print-Design-rainbow.jpg'),
('a_9', 'Rainbow', 'Printland-Back-Cover-Colored', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable ', 'Not Applicable', 'Rainbow Colors', '2 months Of Manufacture Warrenty', '17.59', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Printland-Back-Cover-Colored.jpg'),
('c_1', 'Nikkon', 'Nikon-D90-DSLR-Black', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', '350.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Nikon-D90-DSLR-Black.jpg'),
('c_2', 'Cannon', 'Canon-EOS-70D', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', '300.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Canon-EOS-70D.jpg'),
('c_3', 'Go Pro', 'Click-Pro-Oculus', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Black', '2 Years Of Manufacture Warrenty', '298.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Click-Pro-Oculus.jpg'),
('c_4', 'Nikkon', 'Nikon-Coolpix', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Purple', '2 Years Of Manufacture Warrenty', '1298.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Nikon-Coolpix.jpg'),
('c_5', 'Sony', 'Sony-CyberShot', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Greyish Black', '2 Years Of Manufacture Warrenty', '198.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Sony-CyberShot.jpg'),
('c_6', 'Nikkon', 'Nikon-Coolpix', '720p HD Video Recording', 'Not applicable', 'Not Applicable', 'Not applicable', '3 Inch', 'Not applicable ', '1 Kg', 'Red', '2 Years Of Manufacture Warrenty', '498.82', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Nikon-Coolpix1.jpg'),
('deals_1', 'Apple', 'Apple 5s', 'Bar', 'Single SIM, GSM + GSM, (Dual Standby)', '2G, 3G ', '1GB DDR3L', '4 inches (20.32 cm)', '16 GB', '125 g', 'Black', '2 Years Of Manufacture Warrenty', 'S898.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/mobilnove-62874.jpg'),
('deals_2', 'Samsung', 'Samsung', 'Television', ' Not Applicable', 'Wi-Fi ', '1GB DDR3L', '4 inches (20.32 cm)', '16 GB', '18 Kg', 'Black', '2 Years Of Manufacture Warrenty', 'S1298.82', ' Not Applicable', 'Not Applicable', 'Not Applicable', 'image/televisionovn.jpg'),
('deals_3', 'Sony', 'Sony', 'Hard Disk', ' Not Applicable', 'Wi-Fi ', 'Not Applicable', 'Not Applicable', '64 GB', '145g', 'Black', '2 Years Of Manufacture Warrenty', 'S98.82', ' Not Applicable', 'Not Applicable', 'Not Applicable', 'image/harddisnovk.jpg'),
('deals_4', 'Cannon', 'digital_camernova', 'Camera', ' Not Applicable', 'Wi-Fi ', 'Not Applicable', 'Not Applicable', '2 GB', '145g', 'Black', '2 Years Of Manufacture Warrenty', 'S198.82', ' Not Applicable', 'Not Applicable', 'Not Applicable', 'image/digital_camernova.jpg'),
('d_1', 'LG', 'LG-Chromebase-White', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '16 GB', '21.5 Inches', 'With Stand - 4.3; Without Stand - 3.5', 'White', '2 Years Of Manufacture Warrenty', '1,559.8', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/LG-Chromebase-White.jpg'),
('d_2', 'Lenovo', 'Lenovo-N308', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '21.5 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', '1,009.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Lenovo-N308.jpg'),
('d_3', 'Apple', 'Apple-iMac', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '23 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', '1,009.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Apple-iMac.jpg'),
('d_4', 'Lenovo', 'Lenovo-desktop', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '23 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', '1,009.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Lenovo-desktop.jpg'),
('d_5', 'Apple', 'Apple-iMac', 'All-In-One Desktop', 'Not Applicable', 'Not Applicable', 'Wi-Fi', '32 GB', '23 Inches', 'With Stand - 4.0; Without Stand - 3.0', 'Silver', '2 Years Of Manufacture Warrenty', '1,109.81', '1920 x 1080', 'Not Applicable', 'Not Applicable', 'image/Apple-iMa1.jpg'),
('hd_1', 'Seagate', 'Seagate-Backup-Plus-Slim', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '123 g', 'Silver', '2 Years Of Manufacture Warrenty', '150.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Seagate-Backup-Plus-Slim.jpg'),
('hd_10', 'ADATA', 'ADATA-HE720-Ultra-Slim', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '120 g', 'Silver', '2 Years Of Manufacture Warrenty', '99.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/ADATA-HE720-Ultra-Slim.jpg'),
('hd_2', 'Seagate', 'Seagate-Backup-Plus-Desk', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2TB', '123 g', 'Silver', '2 Years Of Manufacture Warrenty', '150.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Seagate-Backup-Plus-Desk-2TB.jpg'),
('hd_3', 'Transcend', 'Transcend-H3P-2-TB-External', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '250.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Transcend.jpg'),
('hd_4', 'My Passpost', 'WD-My-Passport-Ultra-2TB', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Red', '2 Years Of Manufacture Warrenty', '300.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-My-Passport-Ultra-2TB.jpg'),
('hd_5', 'My Passpost', 'WD-My-Passport-Ultra', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '302.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-My-Passport-Ultra.jpg'),
('hd_6', 'Sony', 'Sony-1-TB-External-Hard', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '1 TB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '302.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Sony-1-TB-External-Hard.jpg'),
('hd_7', 'Sony', 'Sony-External-Hard-Drive', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '2 TB ', '120 g', 'Pink', '2 Years Of Manufacture Warrenty', '252.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/Sony-External-Hard-Drive.jpg'),
('hd_8', 'My Passpost', 'WD-Mypassport', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '120 g', 'Blue', '2 Years Of Manufacture Warrenty', '302.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-Mypassport.jpg'),
('hd_9', 'My Passpost', 'WD-My-Passport-1-TB', 'Not applicable', 'Not applicable', 'Not Applicable', 'Not applicable', 'Not applicable', '500 GB ', '120 g', 'Red', '2 Years Of Manufacture Warrenty', '102.80', ' Not applicable', 'Not Applicable', 'Not Applicable', 'image/WD-My-Passport-1-TB.jpg'),
('h_1', 'Samsung', 'Samsung Galaxy S5', 'Touch Screen', 'Single', '3G,4G', '512 RAM', '5 Inch', '16GB ', '141g', 'Black', '1 Year Of Manufacture Warrenty', '989.41', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Samsung Galaxy S5, Black 16GB.jpg'),
('h_3', 'LG', 'LG G Flex', 'Touch Screen', 'Single', '3G,4G', '512 RAM', '4.5 Inch', '32GB ', '141g', 'Titan Silver', '1 Year Of Manufacture Warrenty', '669.99', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/LG-G-Flex-Titan.jpg'),
('h_4', 'LG', 'LG G3-Metallic Black-32GB', 'Touch screen', 'Single', '2G,3G', '512 RAM', '5.2 Inch', '32GB', '111g', 'Metallic Black', '2 Years Of Manufacture Warrenty', '409.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/LGG3-MetallicBlack-32GB.jpg'),
('h_5', 'HTC', 'HTC', 'Touch screen', 'Single', '3G,4G', '512 RAM', '5.2 Inch', '32GB', '151g', 'Charcoal Black', '2 Years Of Manufacture Warrenty', '400.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/HTC.jpg'),
('h_6', 'Samsung', 'Samsung Galaxy S5 Sport', 'Touch screen', 'Single', '3G,4G', '512 RAM', '5.2 Inch', '32GB', '151g', 'Charcoal Black', '2 Years Of Manufacture Warrenty', '650.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/SamsungGalaxyS5Sport.jpg'),
('h_7', 'LG', 'LG G3-Metallic Black-32GB', 'Touch screen', 'Single', '2G,3G', '512 RAM', '5.2 Inch', '32GB', '111g', 'Metallic Black', '2 Years Of Manufacture Warrenty', '409.81', '1280 X 720, 320 DPI', 'Not Applicable', 'Not Applicable', 'image/LGG3-MetallicBlack-32GB.jpg'),
('i_1', 'Apple', 'iPad-Air-2', 'Ipad', 'Yes', 'Wi-FI', '32 GB', '9.7 Inch', 'Not applicable ', '437 g', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1050.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/iPad-Air-2.jpg'),
('i_2', 'Apple', 'Apple-ipad-Mini', 'Ipad', 'Yes', 'Wi-FI', '16 GB', '9.7 Inch', 'Not applicable ', '437 g', 'Silver', '2 Years Of Manufacture Warrenty', 'S$1050.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Apple-ipad-Mini.jpg'),
('i_3', 'Apple', 'Apple-iPad-Air-32-GB', 'Ipad', 'Yes', 'Wi-FI', '16 GB', '9.7 Inch', 'Not applicable ', '437 g', 'White', '2 Years Of Manufacture Warrenty', 'S$950.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Apple-iPad-Air-32-GB.jpg'),
('i_4', 'Apple', 'ipad', 'Ipad', 'Yes', 'Wi-FI', '32 GB', '9.7 Inch', 'Not applicable ', '337 g', 'White', '2 Years Of Manufacture Warrenty', 'S$750.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/ipad.jpg'),
('i_5', 'Apple', 'Apple-iPad -Retina Display', 'Ipad', 'Yes', 'Wi-FI', '32 GB', '9.7 Inch', 'Not applicable ', '337 g', 'White', '2 Years Of Manufacture Warrenty', 'S$550.80', ' 12.3 Megapixel 920K Pixel', 'Not Applicable', 'Not Applicable', 'image/Apple-iPad.jpg'),
('l_1', 'Apple', 'MacBook-Air', 'Touch Screen', 'Single', '3G,4G', '4 GB DDR3', '13.3 Inch', '32 GB', '1.35 kg', 'Silver', '1 Year Of Manufacture Warrenty', '1229.84', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Apple-MD760HN-B-MacBook-Air.jpg'),
('l_2', 'Dell', 'Dell-Inspiron-Laptop', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '500 GB', '2.15 kg', 'Black', '1 Year Of Manufacture Warrenty', '974.84', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Dell-Inspiron-15-3541-Laptop.jpg'),
('l_3', 'Notion', 'Notion-Ink-Cain', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '1 TB', '2 kg', 'Black', '1 Year Of Manufacture Warrenty', '900.87', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Notion-Ink-Cain.jpg'),
('l_4', 'HP', 'HP-240-G3-Laptop', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '1 TB', '2.10 kg', 'Black', '1 Year Of Manufacture Warrenty', '1248.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/HP-240-G3-K1V41PA-Laptop.jpg'),
('l_5', 'HP', 'HP-G4-Notebook', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '500 GB', '2.10 kg', 'Black', '1 Year Of Manufacture Warrenty', '1007.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/HP-G4-1303AU-Notebook.jpg'),
('l_7', 'Lenevo', 'Lenovo-B50', 'Touch Screen', 'Not Applicable', 'Not Applicable', '4 GB 1600 Mhz', '14 Inch', '500 GB', '1.9 kg', 'Charcoal Black', '2 Year Of Manufacture Warrenty', '652.85', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Lenovo-B50.jpg'),
('p_1', 'Micromax', 'Micromax Canvas Nitro', 'Touch Screen', 'Single', '3G,4G', '2 GB RAM', '12.7cm', '8GB', 'Not Applicable', 'Black', '2 Years Of Manufacture Warrenty', ' 241.28', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Micromax_Canvas_Nitro.jpg'),
('p_2', 'Karbonn', 'Karbonn-Titanium-Octane-Plus', 'Touch Screen', 'Single', '3G,4G', '2 GB RAM', '5 Inch', '8GB', 'Not Applicable', 'White', '1 Year Of Manufacture Warrenty', ' 215.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Karbonn-Titanium-Octane-Plus.jpg'),
('p_3', 'Apple', 'Apple-iPhone-5S', 'Touch Screen', 'Single', '3G,4G', '16 GB RAM', '4 Inch', '16 GB', 'Not Applicable', 'White', '1 Year Of Manufacture Warrenty', ' 835.55', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Apple-iPhone-5S.jpg'),
('p_5', 'Nokia', 'Nokia-XL-Black', 'Touch Screen', 'Single', '2G,3G', '512 RAM', '141.4 x 77.7 x 10.9 mm', '8 GB', '120g', 'Black', '1 Year Of Manufacture Warrenty', '159.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Nokia-XL-Black.jpg'),
('s_1', 'Acrobat-XI-Proffessional', 'Acrobat-XI-Proffessional', 'Touch Screen', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '602.85', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Acrobat-XI-Proffessional.jpg'),
('s_2', 'Norton', 'Norton Antivirus', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '53.10', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Norton Antivirus.jpg'),
('s_3', 'Microsoft', 'Ms office', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '89.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office.jpg'),
('s_4', 'Microsoft', 'Ms Office Propack', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '129.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office propack.jpg'),
('s_5', 'Microsoft', 'Ms Office Student', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '189.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office student.jpg'),
('s_6', 'Microsoft', 'Ms Office outlook', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '143.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office outlook.jpg'),
('s_7', 'Microsoft', 'Windows 8.1 Pro', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '289.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/windows 8.1 pro.jpg'),
('s_8', 'Macafee', 'MacAFee Antivirus', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', '200.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/macafee antivirus.jpg'),
('tab_1', 'Notion', 'Notion-Ink-Cain8-Tablet', 'Tablet', 'Single', '3G, 4G and Wi-Fi(802.11 b/g/n)', '1GB DDR3L', '8 inches (20.32 cm)', 'Upto 64 GB', '365g', 'Black', '2 Years Of Manufacture Warrenty', '498.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Notion-Ink-Cain8-Tablet.jpg'),
('tab_2', 'HP', 'HP-Slate', 'Slate', 'Dual SIM, GSM + GSM, (Dual Standby)', '3G, 4G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', '698.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/HP-Slate.jpg'),
('tab_3', 'Apple', 'Apple-iPad-Air', 'Slate', 'Dual SIM, GSM + GSM, (Dual Standby)', '3G, 4G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', '598.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Apple-iPad-Air.jpg'),
('tab_4', 'Micro max', 'Micromax-Funbook', 'Funbook', 'Dual SIM, GSM + GSM, (Dual Standby)', '3G, 4G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', '498.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Micromax-Funbook.jpg'),
('tab_5', 'Vox', 'Vox-7Inch-Dual', 'Funbook', 'Dual SIM, GSM + GSM, (Dual Standby)', '2G, 3G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', '398.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Vox-7Inch-Dual.jpg'),
('tv_1', 'Vu Televisions', 'Vu-40K16-40-Inches-Full', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '101.6 cm (40)', 'Not applicable ', '17.7 kg', 'Charcoal Black', '2 Years Of Manufacture Warrenty', '562.82', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Vu-40K16-40-Inches-Full.jpg'),
('tv_2', 'Vu Televisions', 'Vu-50K160-50-Inches-Full', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '20 kg', 'Black', '2 Years Of Manufacture Warrenty', '998.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Vu-50K160-50-Inches-Full.jpg'),
('tv_3', 'Vu Televisions', 'Vu-32K160-32-Inches-HD', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '7.8 kg', 'Black', '2 Years Of Manufacture Warrenty', '358.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Vu-32K160-32-Inches-HD.jpg'),
('tv_4', 'Samsung', 'Samsung-23H4003-23-Inches', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', '300.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Samsung-23H4003-23-Inches.jpg'),
('tv_5', 'Samsung', 'Samsung-22', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', '350.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Samsung-22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `id` int(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `del_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `shipping_cart` varchar(45) NOT NULL,
  `card_number` varchar(45) NOT NULL,
  `expiry_date` date NOT NULL,
  `security_code` int(255) NOT NULL,
  `ref_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `id`, `email`, `first_name`, `last_name`, `del_address`, `country`, `shipping_cart`, `card_number`, `expiry_date`, `security_code`, `ref_id`) VALUES
(1, 1, '', '', '', 'kelantan lane', '', '4', '', '2014-12-10', 236, NULL),
(2, 1, '', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '4', '', '0000-00-00', 0, NULL),
(3, 1, '', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '4', '', '2014-12-27', 123, NULL),
(4, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '8', '1234567891012345', '2014-12-27', 123, 'CESUFQL14372'),
(5, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '8', '1234567891012345', '2014-12-27', 123, 'CESUFQL14372'),
(6, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '8', '1234567891012345', '2014-12-27', 123, 'CESUFQL14372'),
(7, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'youuu', 'Singapore', '12', '1234567891012345', '2014-12-27', 123, 'CESUFQL14372'),
(8, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '4', '1234567891012345', '2014-12-26', 123, 'CESUFQL14372'),
(9, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '4', '1234567891012345', '2014-12-26', 123, 'CESUFQL14372'),
(10, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '4', '1234567891012345', '2014-12-26', 123, 'CESUFQL14372'),
(11, 1, 'palakjerry93@gmail.com', 'Palak', 'Shah', 'kelantan lane', 'Singapore', '12', '1234567891012345', '2014-12-24', 123, 'CESUFQL14372');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `p_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`p_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('p_1', 'Micromax', 'Micromax Canvas Nitro', 'Touch Screen', 'Single', '3G,4G', '2 GB RAM', '12.7cm', '8GB', 'Not Applicable', 'Black', '2 Years Of Manufacture Warrenty', 'S$ 241.28', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Micromax_Canvas_Nitro.jpg'),
('p_2', 'Karbonn', 'Karbonn-Titanium-Octane-Plus', 'Touch Screen', 'Single', '3G,4G', '2 GB RAM', '5 Inch', '8GB', 'Not Applicable', 'White', '1 Year Of Manufacture Warrenty', 'S$ 215.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Karbonn-Titanium-Octane-Plus.jpg'),
('p_3', 'Apple', 'Apple-iPhone-5S', 'Touch Screen', 'Single', '3G,4G', '16 GB RAM', '4 Inch', '16 GB', 'Not Applicable', 'White', '1 Year Of Manufacture Warrenty', 'S$ 835.55', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Apple-iPhone-5S.jpg'),
('p_5', 'Nokia', 'Nokia-XL-Black', 'Touch Screen', 'Single', '2G,3G', '512 RAM', '141.4 x 77.7 x 10.9 mm', '8 GB', '120g', 'Black', '1 Year Of Manufacture Warrenty', 'S$159.98', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Nokia-XL-Black.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `product_price` varchar(45) DEFAULT NULL,
  `product_color` varchar(45) DEFAULT NULL,
  `product_brand` varchar(45) DEFAULT NULL,
  `product_form` varchar(45) DEFAULT NULL,
  `product_simtype` varchar(45) DEFAULT NULL,
  `product_touchscreen` varchar(45) DEFAULT NULL,
  `product_callfeatures` varchar(45) DEFAULT NULL,
  `product_os` varchar(45) DEFAULT NULL,
  `camera` varchar(45) DEFAULT NULL,
  `storage` varchar(45) DEFAULT NULL,
  `modelno` varchar(45) DEFAULT NULL,
  `bluetooth` varchar(45) DEFAULT NULL,
  `Network_generation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_color`, `product_brand`, `product_form`, `product_simtype`, `product_touchscreen`, `product_callfeatures`, `product_os`, `camera`, `storage`, `modelno`, `bluetooth`, `Network_generation`) VALUES
(1, 'Iphone-6', '1111', 'Golden', 'Apple', 'Bar', 'Single', 'YES', 'image/phone3.jpg', 'IOS', NULL, NULL, NULL, NULL, NULL),
(2, 'Iphone-6', '1010', 'White', 'Apple', 'Bar', 'Single', 'YES', 'image/phone1.jpg', 'IOS', NULL, NULL, NULL, NULL, NULL),
(3, 'Iphone-5s', '1200', 'Black', 'Apple', 'Bar', 'Single', 'YES', 'image/phone2.jpg', 'IOS', NULL, NULL, NULL, NULL, NULL),
(4, 'Iphone-6', '1280', 'Black', 'Apple', 'Bar', 'Single', 'YES', 'image/iphone6_black.jpg', 'IOS', NULL, NULL, NULL, NULL, NULL),
(5, 'Samsung', '1200', 'Black', 'Samsung', 'Bar', 'Single', 'YES', 'image/phone5.jpg', 'Android', NULL, NULL, NULL, NULL, NULL),
(6, 'Samsung', '900', 'Black', 'Samsung', 'Bar', 'Single', 'YES', 'image/samsungs5_black.jpg', 'Android', NULL, NULL, NULL, NULL, NULL),
(7, 'LG', '980', 'Black', 'LG', 'Bar', 'Single', 'YES', 'image/phone6.jpg', 'Android', NULL, NULL, NULL, NULL, NULL),
(8, 'Ipad Mini', '600', 'Black', 'Apple', 'Bar', 'Single', 'YES', 'image/ipadmini.jpg', 'IOS', NULL, NULL, NULL, NULL, NULL),
(9, 'Acer', '1400', 'Black', 'Acer', 'Laptop', 'No Sim Card', 'YES', 'image/acer1.jpeg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(10, 'Acer', '1400', 'Black', 'Acer', 'Laptop', 'No Sim Card', 'YES', 'image/acer2.jpeg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(11, 'Dell', '1250', 'Black', 'Dell', 'Laptop', 'No Sim Card', 'YES', 'image/dell2.jpg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(12, 'Lenovo', '850', 'White', 'Levono', 'Laptop', 'No Sim Card', 'YES', 'image/lenovo1.jpg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(13, 'Lenovo', '1000', 'Pink', 'Levono', 'Laptop', 'No Sim Card', 'YES', 'image/lenovo2.jpg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(14, 'Lenovo', '1000', 'Blue', 'Levono', 'Laptop', 'No Sim Card', 'YES', 'image/lenovo3.jpg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(15, 'Lenovo', '870', 'Blue', 'Levono', 'Laptop', 'No Sim Card', 'YES', 'image/lenovo4.jpg', 'Windows 8', NULL, NULL, NULL, NULL, NULL),
(16, 'Nikkon', '400', 'Silver', 'COolpix', 'Camera', 'No Sim Card', 'No', 'image/camera2.jpg', 'Null', NULL, NULL, NULL, NULL, NULL),
(17, 'Nikkon', '550', 'BLack', 'COolpix', 'Camera', 'No Such Facility', 'No', 'image/camera1.jpg', 'Null', NULL, NULL, NULL, NULL, NULL),
(18, 'Nikkon', '650', 'Red', 'COolpix', 'Camera', 'No Such Facility', 'No', 'image/camera3.jpg', 'Null', NULL, NULL, NULL, NULL, NULL),
(0, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL),
(0, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration_db`
--

CREATE TABLE IF NOT EXISTS `registration_db` (
  `user` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `contact` int(8) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `BLK` int(11) DEFAULT NULL,
  `unit1` int(11) DEFAULT NULL,
  `unit2` int(11) DEFAULT NULL,
  `lane` varchar(45) DEFAULT NULL,
  `postalCode` int(11) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration_db`
--

INSERT INTO `registration_db` (`user`, `fname`, `lname`, `contact`, `email`, `city`, `country`, `id`, `BLK`, `unit1`, `unit2`, `lane`, `postalCode`, `password`, `Date`) VALUES
('palak93', 'Palak', 'Shah', 87770297, 'palakjerry93@gmail.com', 'Singapore', 'Singapore', 1, 28, 15, 135, 'Kelantan Rd', 200028, 'Smit1995', '2014-11-30 00:00:00'),
('gopi', 'gopi', 'jerry', 89990123, 'jerryshah@yahoo.in', 'Singapore', 'Singapore', 2, 12, 22, 33, 'rangoon', 432543, 'Smit1995', '2014-12-03 00:00:00'),
('Smit', 'smit', 'Shah', 87770297, 'smit@gmail.com', 'Singapore', 'Sweden', 3, 28, 15, 135, 'Kelantan Rd', 218736, 'Smit1995', '2014-12-08 00:00:00'),
('palak931', 'Palak', 'Shah', 0, 'PROPERTYGURU69@YAHOO.COM', 'Singapore', 'Singapore', 4, 28, 15, 135, 'Kelantan Rd', 218736, 'Smit1995', '2014-12-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

CREATE TABLE IF NOT EXISTS `sell_product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` int(10) NOT NULL,
  `category` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `color` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `simtype` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `zoom` varchar(45) NOT NULL,
  `os` varchar(45) NOT NULL,
  `imagesrc` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sell_product`
--

INSERT INTO `sell_product` (`id`, `name`, `email`, `contact`, `category`, `brand`, `product_name`, `color`, `price`, `simtype`, `network`, `ram`, `zoom`, `os`, `imagesrc`) VALUES
(1, 'Palak', 'palakjerry93@gmail.com', 98887098, 'mobile', 'Apple', '5S', '402170', '1234', 'Single', '4G', '64', 'Digital Zoom', 'Optical Zoom', 'phcat14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `s_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`s_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('s_1', 'Acrobat-XI-Proffessional', 'Acrobat-XI-Proffessional', 'Touch Screen', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$602.85', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Acrobat-XI-Proffessional.jpg'),
('s_2', 'Norton', 'Norton Antivirus', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$53.10', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/Norton Antivirus.jpg'),
('s_3', 'Microsoft', 'Ms office', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$89.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office.jpg'),
('s_4', 'Microsoft', 'Ms Office Propack', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$129.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office propack.jpg'),
('s_5', 'Microsoft', 'Ms Office Student', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$189.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office student.jpg'),
('s_6', 'Microsoft', 'Ms Office outlook', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$143.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/ms office outlook.jpg'),
('s_7', 'Microsoft', 'Windows 8.1 Pro', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$289.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/windows 8.1 pro.jpg'),
('s_8', 'Macafee', 'MacAFee Antivirus', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'S$200.00', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/macafee antivirus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE IF NOT EXISTS `tablet` (
  `tab_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`tab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`tab_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('tab_1', 'Notion', 'Notion-Ink-Cain8-Tablet', 'Tablet', 'Single', '3G, 4G and Wi-Fi(802.11 b/g/n)', '1GB DDR3L', '8 inches (20.32 cm)', 'Upto 64 GB', '365g', 'Black', '2 Years Of Manufacture Warrenty', 'S498.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Notion-Ink-Cain8-Tablet.jpg'),
('tab_2', 'HP', 'HP-Slate', 'Slate', 'Dual SIM, GSM + GSM, (Dual Standby)', '3G, 4G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', 'S698.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/HP-Slate.jpg'),
('tab_3', 'Apple', 'Apple-iPad-Air', 'Slate', 'Dual SIM, GSM + GSM, (Dual Standby)', '3G, 4G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', 'S598.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Apple-iPad-Air.jpg'),
('tab_4', 'Micro max', 'Micromax-Funbook', 'Funbook', 'Dual SIM, GSM + GSM, (Dual Standby)', '3G, 4G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', 'S498.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Micromax-Funbook.jpg'),
('tab_5', 'Vox', 'Vox-7Inch-Dual', 'Funbook', 'Dual SIM, GSM + GSM, (Dual Standby)', '2G, 3G and Wi-Fi', '1GB DDR3L', '8 inches (20.32 cm)', '16 GB', '325 g', 'Black', '2 Years Of Manufacture Warrenty', 'S398.82', ' 2 MP', 'Not Applicable', 'Not Applicable', 'image/Vox-7Inch-Dual.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `top_purchase`
--

CREATE TABLE IF NOT EXISTS `top_purchase` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_price,` varchar(45) NOT NULL,
  `product_color` varchar(45) NOT NULL,
  `product_brand` varchar(45) NOT NULL,
  `product_form` varchar(45) NOT NULL,
  `product_simtype` varchar(45) NOT NULL,
  `product_touchscreen` varchar(45) NOT NULL,
  `product_callfeatures` varchar(45) NOT NULL,
  `product_os` varchar(45) NOT NULL,
  `views` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_purchase`
--

INSERT INTO `top_purchase` (`product_id`, `product_name`, `product_price,`, `product_color`, `product_brand`, `product_form`, `product_simtype`, `product_touchscreen`, `product_callfeatures`, `product_os`, `views`) VALUES
(111, 'Samsung 4', '785', 'Black', 'Samsung', 'Bar', 'Single', 'Yes', 'image/samsungs3_black.jpg', 'Android', '90'),
(112, 'iphone 6', '1234', 'Golden', 'Apple', 'Bar', 'Single', 'Yes', 'image/phone3.jpg', 'IOS', '50'),
(113, 'Lenovo', '889', 'Black', 'Lenevo', 'Laptop', 'Not Applicable', 'Yes', 'image/lenovo4.jpg', 'Windows 8', '90'),
(114, 'Camera', '300', 'Pink', 'fujifilm', 'Camera', 'Not Applicable', 'Not Applicable', 'image/camera1.jpg', 'Not Applicable', '90');

-- --------------------------------------------------------

--
-- Table structure for table `top_views`
--

CREATE TABLE IF NOT EXISTS `top_views` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_price` varchar(45) NOT NULL,
  `product_color` varchar(45) NOT NULL,
  `product_brand` varchar(45) NOT NULL,
  `product_form` varchar(45) NOT NULL,
  `product_simtype` varchar(45) NOT NULL,
  `product_touchscreen` varchar(45) NOT NULL,
  `product_callfeatures` varchar(45) NOT NULL,
  `product_views` varchar(45) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_views`
--

INSERT INTO `top_views` (`product_id`, `product_name`, `product_price`, `product_color`, `product_brand`, `product_form`, `product_simtype`, `product_touchscreen`, `product_callfeatures`, `product_views`) VALUES
(1, 'Camera', '999', 'Red', 'Nikon', 'Camera', 'Not Applicable', 'No', 'image/camera3.jpg', '190'),
(2, 'I-Phone 5S', '898', 'Black', 'Apple', 'Bar', 'Yes', 'Yes', 'image/phone2.jpg', '590'),
(3, 'Camera', '660', 'Black', 'Philips', 'Camera', 'Not Applicable', 'No', 'image/camera1.jpg', '90'),
(4, 'Laptop', '990', 'Red', 'Dell', 'Laptop', 'Not Applicable', 'Yes', 'image/dell3.jpg', '270');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE IF NOT EXISTS `tv` (
  `tv_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`tv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`tv_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('tv_1', 'Vu Televisions', 'Vu-40K16-40-Inches-Full', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '101.6 cm (40)', 'Not applicable ', '17.7 kg', 'Charcoal Black', '2 Years Of Manufacture Warrenty', 'S$562.82', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Vu-40K16-40-Inches-Full.jpg'),
('tv_2', 'Vu Televisions', 'Vu-50K160-50-Inches-Full', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '20 kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$998.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Vu-50K160-50-Inches-Full.jpg'),
('tv_3', 'Vu Televisions', 'Vu-32K160-32-Inches-HD', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '7.8 kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$358.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Vu-32K160-32-Inches-HD.jpg'),
('tv_4', 'Samsung', 'Samsung-23H4003-23-Inches', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$300.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Samsung-23H4003-23-Inches.jpg'),
('tv_5', 'Samsung', 'Samsung-22', 'LED', 'Not applicable', 'Wi-fi', 'Not applicable', '127 cm (50)', 'Not applicable ', '7 kg', 'Black', '2 Years Of Manufacture Warrenty', 'S$350.80', '1920 x 1080p', 'AC 100 - 240 V, 50/60 Hz', 'Not Applicable', 'image/Samsung-22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) DEFAULT NULL,
  `u_name` varchar(45) DEFAULT NULL,
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `whatsupcoming`
--

CREATE TABLE IF NOT EXISTS `whatsupcoming` (
  `wuc_id` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `modelno` varchar(45) NOT NULL,
  `form` varchar(45) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `network` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `warrenty` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `pixels` varchar(45) NOT NULL,
  `format` varchar(45) NOT NULL,
  `digitalzoom` varchar(45) NOT NULL,
  `imgsource` varchar(45) NOT NULL,
  PRIMARY KEY (`wuc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatsupcoming`
--

INSERT INTO `whatsupcoming` (`wuc_id`, `brand`, `modelno`, `form`, `sim`, `network`, `ram`, `size`, `memory`, `weight`, `color`, `warrenty`, `price`, `pixels`, `format`, `digitalzoom`, `imgsource`) VALUES
('wuc_1', 'Gione Pioneer', 'Gione pioneer -p6', 'Touch Screen', 'Dual Sim', '3G,4G', '512 RAM', '4.7 Inch', '16GB ', '131g', 'Black', 'December 2014', 'S$589.41', 'Not Applicable', 'Not Applicable', '5.0 Mega Pixels', 'image/Gionepioneer-p6.jpg'),
('wuc_3', 'Gione Pioneer', 'Gione pioneer-p6', 'Touch Screen', 'Single', '3G,4G', '512 RAM', '4.7 Inch', '32GB ', '141g', 'Titan Silver', 'December 2014', 'S$569.99', 'Not Applicable', 'Not Applicable', 'Not Applicable', 'image/pioneer-p6.jpg'),
('wuc_4', 'Samsung', 'Samsung SM-G5308', 'Touch Screen', 'Dual Sim', '3G,4G', '512 RAM', '4.7 Inch', '16GB ', '132g', 'Black', 'December 2014', 'S$609.41', 'Not Applicable', 'Not Applicable', '5.0 Mega Pixels', 'image/sm-g5308.jpg'),
('wuc_5', 'Archos', 'Archos 50-diamond', 'Touch Screen', 'Single', '3G,4G', '512 RAM', '4.7 Inch', '32GB ', '146g', 'Titan Silver', 'January 2015', 'S$569.99', 'Not Applicable', 'Not Applicable', '16 Mega Pixels', 'image/Archos50-diamond.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration_db` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
