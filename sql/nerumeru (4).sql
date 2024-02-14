-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 03:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nerumeru`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_img` varchar(100) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_subtitle` varchar(200) NOT NULL,
  `banner_button` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `bio_id` int(11) NOT NULL,
  `bio_title` varchar(100) NOT NULL,
  `bio_Subtitle` varchar(100) NOT NULL,
  `bio_full` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`bio_id`, `bio_title`, `bio_Subtitle`, `bio_full`, `status`, `insert_date`, `lastUpdate_date`) VALUES
(1, 'Nerumeru', 'å¯ã‚‹ ãƒ¡ãƒ«', 'In This Pandemic Era For Almost 2 Years, More Pets Adopted In Lovers&#039; Homes Animals In Indonesia. This Trend Is Taking Effect In Increasing Awareness Of The Importance Of Quality Products For Pets. In Order To Answer This Need, Neru Meru Is Here As A Brand That Is Able To Compete In The Domestic Market And Internationally With Experience And Technology With Japanese Quality Standards\r\n\r\nBased On The Love For Pets, Neru Meru Is Here As A Brand That Is Able To Provide The Best Solutions For Various Pet Needs. Innovative, Precise, Durable And Made Using The Highest Quality Materials, Every Neru Meru Product Is Created For The Comfort Of Pets And Their Human Companions.', 1, '2024-02-12 09:41:39', '2024-02-12 09:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_type` varchar(50) NOT NULL,
  `blog_icon` varchar(100) NOT NULL,
  `blog_targetLink` varchar(500) NOT NULL,
  `blog_icon_title` varchar(100) NOT NULL,
  `blog_vidio` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_type`, `blog_icon`, `blog_targetLink`, `blog_icon_title`, `blog_vidio`, `status`, `insert_date`, `lastUpdate_date`) VALUES
(1, 'icon', 'img/SVG/history-toggle.svg', '#OurStory', 'Our Story', '', 1, '2024-02-12 10:00:49', '2024-02-12 10:00:49'),
(2, 'icon', 'img/SVG/mood-heart.svg', '#HappyStory', 'Happy Story', '', 1, '2024-02-12 10:05:02', '2024-02-12 10:05:02'),
(3, 'icon', 'img/SVG/brand-instagram.svg', '#OurInsta', 'Our Insta', '', 1, '2024-02-12 10:05:12', '2024-02-12 10:05:12'),
(7, 'icon', 'img/SVG/calendar-event.svg', '#OurEvent', 'Our Event', '', 1, '2024-02-12 10:05:19', '2024-02-12 10:05:19'),
(8, 'vidio', '', '', '', 'vidio\\A Glimpse of NeruMeru Factory.mp4', 1, '2024-01-29 20:41:06', '2024-01-29 20:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `custombed`
--

CREATE TABLE `custombed` (
  `custombed_id` int(11) NOT NULL,
  `custombed_title` varchar(100) NOT NULL,
  `custombed_subtitle` varchar(100) NOT NULL,
  `custombed_fulldetails` varchar(1000) NOT NULL,
  `custombed_button1` varchar(50) NOT NULL,
  `custombed_button2` varchar(50) NOT NULL,
  `custombed_img` varchar(100) NOT NULL,
  `custombed_details_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herosection`
--

CREATE TABLE `herosection` (
  `hero_id` int(11) NOT NULL,
  `hero_title1` varchar(200) NOT NULL,
  `hero_title2` varchar(200) NOT NULL,
  `hero_title3` varchar(200) NOT NULL,
  `hero_subtitle` varchar(1000) NOT NULL,
  `hero_button1` varchar(100) NOT NULL,
  `hero_button2` varchar(100) NOT NULL,
  `hero_img` varchar(500) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herosection`
--

INSERT INTO `herosection` (`hero_id`, `hero_title1`, `hero_title2`, `hero_title3`, `hero_subtitle`, `hero_button1`, `hero_button2`, `hero_img`, `insert_date`, `lastUpdate_date`, `status`) VALUES
(35, 'Creating Happy Moments With Your Pets', 'Love And Care For Your Pets', 'Discover The Joy Of Pet Companionship', 'Providing Top-Quality Solutions For Pet Lovers\r\nWith Innovative , And High-Quality Products\r\nDesigned For Pets And Their Owners.', 'Explore Now', 'Shop Collection', '65c02ba40bc93.png', '2024-02-06 20:49:58', '2024-02-06 20:49:58', 0),
(36, 'Creating Happy Moments With Your Pets', 'Love And Care For Your Pets', 'Discover The Joy Of Pet Companionship', 'Providing Top-Quality Solutions For Pet Lovers\r\nWith Innovative , And High-Quality Products\r\nDesigned For Pets And Their Owners.', 'Explore Now', 'Shop Collection', 'Hero-Section.png', '2024-02-06 20:50:17', '2024-02-06 20:50:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `neru_event`
--

CREATE TABLE `neru_event` (
  `event_id` int(11) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `event_img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `neru_event`
--

INSERT INTO `neru_event` (`event_id`, `event_type`, `event_img`, `status`, `insert_date`, `lastUpdate_date`) VALUES
(6, 'event', 'IIPE doc 1.jpg', 1, '2024-02-08 16:19:39', '2024-02-08 16:19:39'),
(10, 'news', 'june 3.jpg', 1, '2024-02-12 09:41:03', '2024-02-12 09:41:03'),
(21, 'event', 'IIPE doc 2.jpg', 1, '2024-02-08 16:20:02', '2024-02-08 16:20:02'),
(22, 'event', 'IIPE doc 3.jpg', 1, '2024-02-08 16:20:08', '2024-02-08 16:20:08'),
(23, 'event', 'IIPE doc 4.jpg', 1, '2024-02-08 16:20:15', '2024-02-08 16:20:15'),
(24, 'event', 'IIPE doc 2.jpg', 1, '2024-02-08 16:21:09', '2024-02-08 16:21:09'),
(25, 'event', 'IIPE doc 6.jpg', 1, '2024-02-08 16:20:30', '2024-02-08 16:20:30'),
(26, 'event', 'IIPE doc 7.jpg', 1, '2024-02-08 16:20:40', '2024-02-08 16:20:40'),
(27, 'event', 'IIPE doc 5.jpg', 1, '2024-02-08 16:20:50', '2024-02-08 16:20:50'),
(32, 'news', 'feeds 4 aug.jpg', 1, '2024-02-08 15:17:09', '2024-02-08 15:17:09'),
(33, 'news', 'July 8.jpg', 1, '2024-02-12 09:37:33', '2024-02-12 09:37:33'),
(34, 'news', 'agustus 2.jpg', 1, '2024-02-12 09:37:51', '2024-02-12 09:37:51'),
(35, 'news', 'Neru Stick 20cm (1).jpg', 1, '2024-02-12 09:38:03', '2024-02-12 09:38:03'),
(36, 'news', 'Sept 3-1.jpg', 1, '2024-02-12 09:38:21', '2024-02-12 09:38:21'),
(38, 'news', 'Sept 3-2.jpg', 1, '2024-02-12 09:38:48', '2024-02-12 09:38:48'),
(39, 'news', 'sept-3 (Cover).jpg', 1, '2024-02-12 09:39:59', '2024-02-12 09:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_kurir` varchar(100) NOT NULL,
  `order_duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_weight` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_specification` varchar(2000) NOT NULL,
  `product_weight` varchar(100) NOT NULL,
  `product_warranty` varchar(500) NOT NULL,
  `product_rating` int(5) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_img`, `product_type`, `product_name`, `product_stock`, `product_color`, `product_price`, `product_specification`, `product_weight`, `product_warranty`, `product_rating`, `insert_date`, `lastUpdate_date`, `status`) VALUES
(1, '65c02ba40bc93.png', 'Bedding', 'Bedding Stick', 15, 'Black', 'Rp. 125.000', 'Yes', '123kg', 'Yes', 5, '2024-02-09 14:53:36', '2024-02-09 15:11:20', 0),
(3, 'Coba - NeruStick.png', 'Bedding', 'Bedding Stick', 5, 'sd', 'Rp. 125.000', 'sdf', '123kg', 'Yes', 5, '2024-02-09 12:12:34', '2024-02-09 12:12:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recommendsection`
--

CREATE TABLE `recommendsection` (
  `recommend_id` int(11) NOT NULL,
  `recommend_img` varchar(100) NOT NULL,
  `recommend_title` varchar(100) NOT NULL,
  `recommend_targetLink` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastupdate_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recommendsection`
--

INSERT INTO `recommendsection` (`recommend_id`, `recommend_img`, `recommend_title`, `recommend_targetLink`, `status`, `insert_date`, `lastupdate_date`) VALUES
(1, 'Group 39632.png', 'NERU BEDDING', '', 1, '2024-02-08 12:49:07', '2024-02-08 12:49:07'),
(3, 'card-item5.png', 'NERU SANITIZE', '', 1, '2024-02-08 12:40:25', '2024-02-08 12:40:25'),
(4, 'card-item-6.png', 'NERU TROLLY', '', 1, '2024-02-08 12:40:45', '2024-02-08 12:40:45'),
(6, 'card-item3.png', 'NERU PILLOW', '', 1, '2024-02-08 12:41:40', '2024-02-08 12:41:40'),
(9, 'card-item-2.png', 'Toys', '', 1, '2024-02-08 14:50:08', '2024-02-08 14:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_rating` int(5) NOT NULL,
  `testimonial_commtent` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trolly`
--

CREATE TABLE `trolly` (
  `trolly_id` int(11) NOT NULL,
  `trolly_size` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `trolly_color` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trolly`
--

INSERT INTO `trolly` (`trolly_id`, `trolly_size`, `trolly_color`, `insert_date`, `lastUpdate_date`, `status`) VALUES
(2, '5', 'green', '2024-02-14 20:31:49', '2024-02-14 21:13:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_locations` varchar(1000) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_img` varchar(1000) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_locations`, `user_phone`, `user_username`, `user_email`, `user_img`, `insert_date`, `lastUpdate_date`) VALUES
(8, '', '$2y$10$n.P7PJGZH5KA6qwEvzSM5O8m5QlLAALduD/mnaCoIfgNWjOr55UUS', '', '081314801945', 'El_hirani', 'nuel.hirani8@gmail.com', '', '2024-02-14 08:21:19', '2024-02-14 08:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `whyus_id` int(11) NOT NULL,
  `whyus_img` varchar(500) NOT NULL,
  `whyus_title` varchar(50) NOT NULL,
  `whyus_subtitle` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`whyus_id`, `whyus_img`, `whyus_title`, `whyus_subtitle`, `status`, `insert_date`, `lastUpdate_date`) VALUES
(1, 'Orthopendic.png', 'Water Resistance Inner Cover', 'The Inner Layer Of NeruMeru Bed Cover Is Made Of Water Ressistant That Helps Protect Your Bed From Spills And Dirt.', 1, '2024-02-06 20:51:00', '2024-02-06 20:51:00'),
(3, 'Washing mechine.png', 'Easy To Wash', 'Developed With Easy To Wash Design And Material. If Get It Dirty, You Can Easily Wash It With Washing Machine.', 1, '2024-02-06 20:52:30', '2024-02-06 20:52:30'),
(4, 'Dog.png', 'Orthopedic &amp; Japan Technology', 'Developed With Japan Technology &amp; Orthopedic Best Quality Material For Long-Lasting Durability To Provide Your Pet With A Better Sleep.', 1, '2024-02-06 20:52:51', '2024-02-06 20:52:51'),
(11, 'Save-bio.png', 'ROHS Certifications', 'ROHS Certification Limits Hazardous Substances (E.G., Lead, Mercury, Hexavalent Chromium, Cadmium) To Acceptable Levels.', 1, '2024-02-06 20:51:33', '2024-02-06 20:51:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`bio_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `custombed`
--
ALTER TABLE `custombed`
  ADD PRIMARY KEY (`custombed_id`);

--
-- Indexes for table `herosection`
--
ALTER TABLE `herosection`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `neru_event`
--
ALTER TABLE `neru_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_type` (`product_type`);

--
-- Indexes for table `recommendsection`
--
ALTER TABLE `recommendsection`
  ADD PRIMARY KEY (`recommend_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `trolly`
--
ALTER TABLE `trolly`
  ADD PRIMARY KEY (`trolly_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`user_email`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`whyus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `bio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `custombed`
--
ALTER TABLE `custombed`
  MODIFY `custombed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `herosection`
--
ALTER TABLE `herosection`
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `neru_event`
--
ALTER TABLE `neru_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recommendsection`
--
ALTER TABLE `recommendsection`
  MODIFY `recommend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trolly`
--
ALTER TABLE `trolly`
  MODIFY `trolly_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `whyus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
