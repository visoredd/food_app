-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2017 at 10:42 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snacks_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `au_id` int(11) NOT NULL,
  `au_first_name` varchar(50) NOT NULL,
  `au_last_ame` varchar(50) NOT NULL,
  `au_user_id` varchar(30) NOT NULL,
  `au_email` varchar(30) NOT NULL,
  `au_password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`au_id`, `au_first_name`, `au_last_ame`, `au_user_id`, `au_email`, `au_password`) VALUES
(1, 'Admin', '', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `auditorium`
--

CREATE TABLE IF NOT EXISTS `auditorium` (
  `auditorium_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `auditorium_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditorium`
--

INSERT INTO `auditorium` (`auditorium_id`, `theater_id`, `auditorium_name`) VALUES
(1, 1, 'Auditorium_multiplex_1'),
(2, 1, 'Auditorium_multiplex_2'),
(3, 2, 'Auditorium_PVR_1'),
(4, 2, 'Auditorium_PVR_2'),
(5, 3, 'creo_auditorium_1'),
(7, 4, 'HSR_auditorium_1'),
(8, 4, 'HSR_auditorium_2'),
(9, 7, 'Testinh aud 1'),
(10, 7, 'Testing aud 2'),
(11, 5, 'PVR Auditorium 1'),
(12, 5, 'PVR Auditorium 1'),
(13, 10, 'Row 4'),
(14, 10, 'Row 5');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_codes`
--

CREATE TABLE IF NOT EXISTS `coupon_codes` (
  `cc_id` int(11) NOT NULL,
  `cc_code` varchar(50) NOT NULL,
  `cc_discount_type` varchar(50) NOT NULL,
  `cc_discount` decimal(10,2) NOT NULL,
  `cc_max_discount` decimal(10,2) NOT NULL,
  `cc_on_order_rs` decimal(10,2) NOT NULL,
  `cc_description` text NOT NULL,
  `cc_flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_codes`
--

INSERT INTO `coupon_codes` (`cc_id`, `cc_code`, `cc_discount_type`, `cc_discount`, `cc_max_discount`, `cc_on_order_rs`, `cc_description`, `cc_flag`) VALUES
(1, 'KKM8UU364R', 'percentage', '6.50', '0.00', '570.00', 'Get Flat 6.5% OFF On Orders Rs 570 & Above', 1),
(2, '36LVV88XYJ', 'percentage', '25.50', '0.00', '460.00', 'Get Flat Rs. 25.50 OFF On Orders Rs 460 & Above', 1),
(3, 'YOU4G1IKW5', 'flat_amount', '25.00', '0.00', '350.00', 'Get Flat Rs. 25 OFF On Orders Rs 350.00 & Above', 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE IF NOT EXISTS `food_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(251) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`category_id`, `category_name`) VALUES
(1, 'popcorn'),
(2, 'snacks'),
(3, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE IF NOT EXISTS `food_item` (
  `item_id` int(10) NOT NULL,
  `category_id` int(20) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_desc` varchar(100) NOT NULL,
  `item_image` varchar(251) NOT NULL,
  `item_price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`item_id`, `category_id`, `item_name`, `item_desc`, `item_image`, `item_price`) VALUES
(1, 1, 'cheese popcorn', 'large', 'chease_popcorn.jpg', '200'),
(2, 1, 'popcorn pepsi combo', '1 Nachoes+ 1 pepsi', 'ppopcorn_pepsi_combo.png', '210'),
(3, 2, 'samosha', '2 samosha', 'samosa.jpg', '50');

-- --------------------------------------------------------

--
-- Table structure for table `food_tax`
--

CREATE TABLE IF NOT EXISTS `food_tax` (
  `tax_id` int(11) NOT NULL,
  `tax_price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_tax`
--

INSERT INTO `food_tax` (`tax_id`, `tax_price`) VALUES
(1, '15');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL,
  `location_name` text NOT NULL,
  `latitude` varchar(251) NOT NULL,
  `longitude` varchar(251) NOT NULL,
  `address` varchar(251) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `latitude`, `longitude`, `address`) VALUES
(1, 'hsr Layout', '12.648968', '89.216556', 'HSR layout, bangalore,\r\nPIN - 560001'),
(2, 'Marathahalli,Bangalore', '12.914709', '77.651649', 'Marathahalli,Bangalore'),
(3, 'Koramangala,Bangalore', '12.934545', '77.611308', 'Koramangala,Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(30) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `row_id` int(11) NOT NULL,
  `auditorium_id` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `applied_cc_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `after_aplied_cc_total_amount` decimal(10,2) NOT NULL,
  `aplied_cc_description` text NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL DEFAULT 'Placed',
  `user_confirmation` varchar(30) NOT NULL DEFAULT 'Pending',
  `order_rating` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_number`, `order_date`, `user_id`, `seat_id`, `row_id`, `auditorium_id`, `theatre_id`, `applied_cc_id`, `total_amount`, `after_aplied_cc_total_amount`, `aplied_cc_description`, `payment_method`, `payment_status`, `order_status`, `user_confirmation`, `order_rating`) VALUES
(1, 'ORDER001', '1498044730', 1, 26, 16, 5, 3, 1, '850.00', '794.75', '', 'cod', 'Success', 'Placed', 'Pending', 0),
(2, 'ORDER002', '1498044730', 1, 30, 17, 5, 3, 1, '1000.00', '935.00', '', 'cod', 'Success', 'Placed', 'Pending', 0),
(3, 'ORDER003', '1498044730', 1, 33, 18, 6, 3, 1, '1340.00', '1252.90', '', 'cod', 'Success', 'Placed', 'Delivered', 0),
(4, 'ORDER004', '1498044730', 1, 29, 17, 5, 3, 2, '800.00', '774.50', 'Get Flat Rs. 25.50 OFF On Orders Rs 460 & Above', 'cod', 'Success', 'Placed', 'Pending', 0),
(5, 'ORDER005', '1498044730', 1, 29, 17, 5, 3, 4, '600.00', '550.00', 'Get Flat 10% OFF On Orders Rs 350 & Above, Maximum Discount Rs.50', 'cod', 'Success', 'Placed', 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `od_id` bigint(15) NOT NULL,
  `od_o_id` int(11) NOT NULL,
  `od_item_id` int(11) NOT NULL,
  `od_item_qty` int(4) NOT NULL,
  `od_item_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`od_id`, `od_o_id`, `od_item_id`, `od_item_qty`, `od_item_price`) VALUES
(1, 1, 1, 3, '200.00'),
(2, 1, 3, 5, '50.00'),
(3, 2, 1, 5, '200.00'),
(4, 3, 3, 2, '50.00'),
(5, 3, 1, 2, '200.00'),
(6, 3, 2, 4, '210.00'),
(7, 4, 1, 4, '200.00'),
(8, 5, 1, 3, '200.00'),
(9, 6, 1, 1, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `status`, `created_date`) VALUES
(1, 1, 'success', '2017-05-29 00:00:00'),
(2, 2, 'success', '2017-05-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE IF NOT EXISTS `payment_method` (
  `pm_id` int(11) NOT NULL,
  `pm_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `row`
--

CREATE TABLE IF NOT EXISTS `row` (
  `row_id` int(11) NOT NULL,
  `auditorium_id` int(32) NOT NULL,
  `row_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `row`
--

INSERT INTO `row` (`row_id`, `auditorium_id`, `row_name`) VALUES
(1, 1, 'A1'),
(3, 2, 'AA1'),
(4, 2, 'AA2'),
(5, 2, 'AA3'),
(6, 3, '001'),
(7, 3, '002'),
(8, 3, '003'),
(9, 4, '101'),
(10, 4, '102'),
(11, 4, '103'),
(12, 7, 'A1'),
(13, 7, 'A2'),
(14, 8, 'AA1'),
(15, 8, 'AA2'),
(16, 5, 'CR01'),
(17, 5, 'CR02'),
(20, 0, ''),
(21, 9, 'Row1'),
(22, 9, 'Row2'),
(23, 10, 'Row3'),
(24, 10, 'Ro4'),
(25, 9, 'row 1'),
(26, 9, 'row 2'),
(27, 11, 'row 1'),
(28, 11, 'row 2'),
(29, 12, 'row 3'),
(30, 12, 'row 4'),
(31, 5, 'CR01');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `seat_id` int(11) NOT NULL,
  `row_id` int(32) NOT NULL,
  `auditorium_id` int(32) NOT NULL,
  `seat_no` int(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `row_id`, `auditorium_id`, `seat_no`) VALUES
(1, 1, 1, 101),
(2, 1, 1, 102),
(5, 3, 2, 1),
(6, 3, 2, 3),
(7, 3, 2, 3),
(8, 3, 2, 4),
(9, 4, 2, 5),
(10, 4, 2, 6),
(11, 5, 3, 201),
(12, 5, 3, 202),
(13, 5, 3, 203),
(14, 5, 3, 204),
(15, 5, 3, 205),
(16, 5, 3, 206),
(17, 5, 3, 207),
(18, 5, 3, 208),
(19, 5, 3, 209),
(20, 5, 3, 210),
(21, 6, 3, 211),
(22, 6, 3, 212),
(23, 6, 3, 213),
(24, 6, 3, 214),
(25, 6, 3, 215),
(26, 16, 5, 101),
(27, 16, 5, 102),
(28, 16, 5, 103),
(29, 17, 5, 104),
(30, 17, 5, 103),
(31, 17, 5, 106),
(48, 21, 0, 1),
(49, 21, 0, 2),
(50, 22, 0, 3),
(51, 22, 0, 4),
(52, 24, 0, 5),
(53, 23, 0, 6),
(55, 24, 0, 8),
(57, 20, 0, 101),
(58, 20, 0, 102),
(59, 21, 0, 103),
(60, 21, 0, 104),
(61, 22, 0, 105),
(62, 22, 0, 106),
(63, 23, 0, 107),
(64, 23, 0, 108),
(65, 24, 0, 201),
(66, 24, 0, 202),
(67, 25, 0, 203),
(68, 25, 0, 204),
(69, 26, 0, 205),
(70, 26, 0, 206),
(71, 27, 0, 207),
(72, 27, 0, 207);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE IF NOT EXISTS `theater` (
  `th_id` int(11) NOT NULL,
  `th_location_id` int(11) NOT NULL,
  `th_name` varchar(100) NOT NULL,
  `th_address_line_1` text NOT NULL,
  `th_address_line_2` text NOT NULL,
  `th_city` varchar(100) NOT NULL,
  `th_pincode` int(6) NOT NULL,
  `th_latitude` decimal(10,6) NOT NULL,
  `th_longitude` decimal(10,6) NOT NULL,
  `th_email` varchar(50) NOT NULL,
  `th_telephone` int(15) NOT NULL,
  `th_mobile` int(10) NOT NULL,
  `th_contact_person` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`th_id`, `th_location_id`, `th_name`, `th_address_line_1`, `th_address_line_2`, `th_city`, `th_pincode`, `th_latitude`, `th_longitude`, `th_email`, `th_telephone`, `th_mobile`, `th_contact_person`) VALUES
(1, 2, 'Multiplex,Marathahalli,Bangalore', '135, Marathahalli - Sarjapur Outer Ring Road, Bengaluru, Karnataka 560037', '', '', 0, '12.951943', '77.698731', '', 0, 0, ''),
(2, 3, 'PVR,Koramangala,Bangalore', 'The Forum Mall, 21-22, Adugodi Main Road, Koramangala, Chikku Lakshmaiah Layout, Adugodi, Bengaluru, Karnataka 560095', '', '', 0, '12.934545', '77.611308', '', 0, 0, ''),
(3, 1, 'Creotech Theater', 'Creotech, HSR Layout, 18th Main, Sector 3, HSR Layout, Bangalore, Karnataka', '', '', 0, '12.908317', '77.643542', '', 0, 0, ''),
(4, 1, 'HSR Theater', 'The HSR Club, Bengaluru, Karnataka', '', '', 0, '12.909247', '77.643193', '', 0, 0, ''),
(5, 0, 'Hsr', 'hser addes line 1', 'hser addes line 2', 'bangalore', 560001, '0.000000', '97.564125', 'creotech@gmal.com', 25423323, 2147483647, 'Vipul Solanki'),
(7, 1, 'Testing', 'testing address', 'testing address', 'Bangalore', 560001, '12.651125', '99.454300', 'abc@gmail.com', 46581325, 2147483647, 'Creotech'),
(8, 0, 'PVR Marthahalli', '5th Floor, Arena Mall, Opp. EMC Square,', 'Mahadevpura, Marathahalli Ring Road, Doddanekundi, Mahadevapura, Bengaluru', 'Bengaluru', 560037, '12.979906', '77.693190', 'abc@gmail.com', 2656561, 741258963, 'Creotech'),
(9, 0, 'Inox Old Madras Road', '2nd Floor, Lido Mall, MG Road,', 'Ulsoor, Someshwarpura, Ulsoor, Bengaluru', 'bangaluru', 560008, '12.973422', '77.620469', 'abc@gmail.com', 84965132, 741548621, 'Creotech');

-- --------------------------------------------------------

--
-- Table structure for table `theaters_food`
--

CREATE TABLE IF NOT EXISTS `theaters_food` (
  `tf_id` int(11) NOT NULL,
  `tf_th_id` int(11) NOT NULL,
  `tf_item_id` int(11) NOT NULL,
  `tf_tax_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theaters_food`
--

INSERT INTO `theaters_food` (`tf_id`, `tf_th_id`, `tf_item_id`, `tf_tax_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 2, 1, 1),
(8, 2, 2, 1),
(9, 2, 3, 1),
(10, 2, 4, 1),
(11, 2, 5, 1),
(12, 2, 6, 1),
(13, 3, 1, 1),
(14, 3, 2, 1),
(15, 3, 3, 1),
(16, 3, 4, 1),
(17, 3, 5, 1),
(18, 3, 6, 1),
(19, 4, 1, 1),
(20, 4, 2, 1),
(21, 4, 3, 1),
(22, 4, 4, 1),
(23, 4, 5, 1),
(24, 4, 6, 1),
(25, 5, 1, 0),
(26, 5, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `oauth_uid` varchar(255) NOT NULL,
  `first_name` char(100) NOT NULL,
  `last_name` char(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(251) NOT NULL,
  `phone_no` varchar(251) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `user_otp` varchar(32) NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `user_profile_pic` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `oauth_uid`, `first_name`, `last_name`, `user_name`, `email_id`, `password`, `phone_no`, `access_token`, `user_otp`, `oauth_provider`, `gender`, `locale`, `profile_url`, `picture_url`, `user_profile_pic`, `created`, `modified`) VALUES
(1, '', 'deepak', 'kumar', 'deepak3092', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '', '80bfb80b356d6d31f4ce4dad0c6cf69e', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'Raj', 'saha', 'raj3092', 'raj@gmail.com', '202cb962ac59075b964b07152d234b70', '8105939878', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '113234199253539395855', 'Vipul', 'Solanki', '', 'creotech.vipul@gmail.com', '', '', '', '', 'google', '', 'en', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '2017-06-01 12:18:42', '2017-06-22 09:14:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`au_id`);

--
-- Indexes for table `auditorium`
--
ALTER TABLE `auditorium`
  ADD PRIMARY KEY (`auditorium_id`);

--
-- Indexes for table `coupon_codes`
--
ALTER TABLE `coupon_codes`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `food_tax`
--
ALTER TABLE `food_tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table `row`
--
ALTER TABLE `row`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`th_id`);

--
-- Indexes for table `theaters_food`
--
ALTER TABLE `theaters_food`
  ADD PRIMARY KEY (`tf_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `au_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auditorium`
--
ALTER TABLE `auditorium`
  MODIFY `auditorium_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `coupon_codes`
--
ALTER TABLE `coupon_codes`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `food_tax`
--
ALTER TABLE `food_tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `od_id` bigint(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `row`
--
ALTER TABLE `row`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `theaters_food`
--
ALTER TABLE `theaters_food`
  MODIFY `tf_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
