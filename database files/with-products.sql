-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 07:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'mystore');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'women', '2021-10-25 16:34:17', '2021-10-25 16:34:17'),
(2, 'men', '2021-10-26 04:34:10', '2021-10-26 04:34:10'),
(3, 'kids', '2021-10-27 15:24:48', '2021-10-27 15:24:48'),
(4, 'accessories', '2021-10-28 17:14:11', '2021-10-28 17:14:11'),
(5, 'others', '2021-11-09 02:24:49', '2021-11-09 02:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'arjankc@gmail.com', 'Testing this to see if it works.', '2021-10-25 13:18:25', '2021-10-25 13:18:25'),
(2, '', '', '2021-11-08 16:22:57', '2021-11-08 16:22:57'),
(3, 'arjankc@gmail.com', 'Please send something', '2021-11-08 16:25:57', '2021-11-08 16:25:57'),
(4, 'arjankc@gmail.com', 'This is another message!', '2021-11-08 16:28:04', '2021-11-08 16:28:04'),
(5, 'arjankc@gmail.com', 'This is another message!', '2021-11-08 16:30:25', '2021-11-08 16:30:25'),
(6, 'a@b.com', 'konichiwa!', '2021-11-08 17:20:07', '2021-11-08 17:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'a@b.com', 'red', '2021-11-02 17:55:35', '2021-11-02 17:55:35'),
(4, 'b@c.com', 'red', '2021-11-07 13:15:28', '2021-11-07 13:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `total` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `address`, `phone`, `total`, `created_at`, `updated_at`) VALUES
(3, 1, 'bhaktapur', '88676', 74, '2021-11-07 11:53:30', '2021-11-07 11:53:30'),
(4, 1, 'bhaktapur', '', 74, '2021-11-07 11:55:42', '2021-11-07 11:55:42'),
(5, 1, 'kathmandu', '4959', 74, '2021-11-07 13:13:25', '2021-11-07 13:13:25'),
(6, 1, 'kathmandu', '', 74, '2021-11-07 13:13:42', '2021-11-07 13:13:42'),
(7, 4, 'thimi', '9849218745', 445, '2021-11-07 13:30:59', '2021-11-07 13:30:59'),
(8, 1, '', '', 0, '2021-11-07 13:42:23', '2021-11-07 13:42:23'),
(9, 0, 'bhaktapur', '876644', 8500, '2021-11-10 15:45:19', '2021-11-10 15:45:19'),
(10, 0, 'bktapaur', '9499595', 8500, '2021-11-10 15:46:25', '2021-11-10 15:46:25'),
(11, 0, 'bhaktaoao', '8958575', 6000, '2021-11-10 15:48:38', '2021-11-10 15:48:38'),
(12, 0, 'ramam', '90949', 8500, '2021-11-10 15:58:32', '2021-11-10 15:58:32'),
(13, 0, 'amma', '95959', 8500, '2021-11-10 16:00:23', '2021-11-10 16:00:23'),
(14, 0, 'bkt', '09040', 8500, '2021-11-10 16:02:53', '2021-11-10 16:02:53'),
(15, 0, 'fgbdfg', '4334', 8500, '2021-11-10 16:06:13', '2021-11-10 16:06:13'),
(16, 0, 'adas', '241243', 8500, '2021-11-10 16:10:51', '2021-11-10 16:10:51'),
(17, 0, 'fdsafs', '323', 8500, '2021-11-10 16:12:24', '2021-11-10 16:12:24'),
(18, 0, 'bkt', '409045', 8500, '2021-11-10 16:17:18', '2021-11-10 16:17:18'),
(19, 0, 'bkt', '868867', 17500, '2021-11-10 16:19:12', '2021-11-10 16:19:12'),
(20, 0, '', '', 42500, '2021-11-10 16:20:37', '2021-11-10 16:20:37'),
(21, 0, '', '', 0, '2021-11-10 16:20:47', '2021-11-10 16:20:47'),
(22, 0, 'ruru', '848845', 8500, '2021-11-10 16:29:03', '2021-11-10 16:29:03'),
(23, 1, 'hello', '040505', 6500, '2021-11-10 16:37:51', '2021-11-10 16:37:51'),
(24, 0, '', '', 8500, '2021-11-10 16:46:52', '2021-11-10 16:46:52'),
(25, 0, '', '', 8500, '2021-11-10 16:47:45', '2021-11-10 16:47:45'),
(26, 0, '', '', 3500, '2021-11-10 16:48:45', '2021-11-10 16:48:45'),
(27, 1, '', '', 8500, '2021-11-10 16:53:17', '2021-11-10 16:53:17'),
(28, 1, '', '', 8500, '2021-11-10 16:54:40', '2021-11-10 16:54:40'),
(29, 0, '', '', 0, '2021-11-10 17:37:25', '2021-11-10 17:37:25'),
(30, 0, '', '', 3500, '2021-11-10 17:37:54', '2021-11-10 17:37:54'),
(31, 0, '', '', 8500, '2021-11-10 17:54:13', '2021-11-10 17:54:13'),
(32, 0, '', '', 3500, '2021-11-10 17:56:01', '2021-11-10 17:56:01'),
(33, 0, '', '', 3500, '2021-11-10 18:06:47', '2021-11-10 18:06:47'),
(34, 1, '', '', 0, '2021-11-10 18:12:02', '2021-11-10 18:12:02'),
(35, 1, '', '', 8500, '2021-11-10 18:12:51', '2021-11-10 18:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 24, 1, '2021-11-07 11:53:30', '2021-11-07 11:53:30'),
(2, 3, 25, 1, '2021-11-07 11:53:30', '2021-11-07 11:53:30'),
(3, 4, 24, 1, '2021-11-07 11:55:42', '2021-11-07 11:55:42'),
(4, 4, 25, 1, '2021-11-07 11:55:42', '2021-11-07 11:55:42'),
(5, 5, 24, 1, '2021-11-07 13:13:25', '2021-11-07 13:13:25'),
(6, 5, 25, 1, '2021-11-07 13:13:25', '2021-11-07 13:13:25'),
(7, 6, 24, 1, '2021-11-07 13:13:42', '2021-11-07 13:13:42'),
(8, 6, 25, 1, '2021-11-07 13:13:42', '2021-11-07 13:13:42'),
(9, 7, 25, 1, '2021-11-07 13:30:59', '2021-11-07 13:30:59'),
(10, 7, 23, 2, '2021-11-07 13:30:59', '2021-11-07 13:30:59'),
(11, 9, 27, 1, '2021-11-10 15:45:19', '2021-11-10 15:45:19'),
(12, 10, 27, 1, '2021-11-10 15:46:25', '2021-11-10 15:46:25'),
(13, 11, 30, 1, '2021-11-10 15:48:38', '2021-11-10 15:48:38'),
(14, 12, 27, 1, '2021-11-10 15:58:32', '2021-11-10 15:58:32'),
(15, 13, 27, 1, '2021-11-10 16:00:23', '2021-11-10 16:00:23'),
(16, 14, 27, 1, '2021-11-10 16:02:53', '2021-11-10 16:02:53'),
(17, 15, 27, 1, '2021-11-10 16:06:13', '2021-11-10 16:06:13'),
(18, 16, 27, 1, '2021-11-10 16:10:51', '2021-11-10 16:10:51'),
(19, 17, 27, 1, '2021-11-10 16:12:24', '2021-11-10 16:12:24'),
(20, 18, 27, 1, '2021-11-10 16:17:18', '2021-11-10 16:17:18'),
(21, 19, 28, 5, '2021-11-10 16:19:12', '2021-11-10 16:19:12'),
(22, 20, 27, 5, '2021-11-10 16:20:37', '2021-11-10 16:20:37'),
(23, 22, 27, 1, '2021-11-10 16:29:03', '2021-11-10 16:29:03'),
(24, 23, 31, 1, '2021-11-10 16:37:51', '2021-11-10 16:37:51'),
(25, 24, 27, 1, '2021-11-10 16:46:52', '2021-11-10 16:46:52'),
(26, 25, 27, 1, '2021-11-10 16:47:45', '2021-11-10 16:47:45'),
(27, 26, 32, 1, '2021-11-10 16:48:45', '2021-11-10 16:48:45'),
(28, 27, 27, 1, '2021-11-10 16:53:17', '2021-11-10 16:53:17'),
(29, 28, 27, 1, '2021-11-10 16:54:40', '2021-11-10 16:54:40'),
(30, 30, 32, 1, '2021-11-10 17:37:54', '2021-11-10 17:37:54'),
(31, 31, 27, 1, '2021-11-10 17:54:13', '2021-11-10 17:54:13'),
(32, 32, 28, 1, '2021-11-10 17:56:01', '2021-11-10 17:56:01'),
(33, 33, 28, 1, '2021-11-10 18:06:47', '2021-11-10 18:06:47'),
(34, 35, 27, 1, '2021-11-10 18:12:51', '2021-11-10 18:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(26, 'Tamang wedding dress', 6500, '../uploads/1.png', 'Tamang wedding dress set. For Tamang Bride we have Tetung , Tamang Coat and Special Tamang Topi for Groom. We have also pant for bride but that is optional.Tamang Marriage Dress is most popular in Tamang Community if somebody want to want to marry according to Tamang culture and want to preserve Tamang culture and dress.', 1, '2021-11-10 10:17:36', '2021-11-10 10:17:36'),
(27, 'Gurung wedding dress', 8500, '../uploads/2.png', 'We offer typical ghanto gurung wedding dress comprising of traditional Gurung dress, jewellery and special headgears all in one special package.', 1, '2021-11-10 10:23:46', '2021-11-10 10:23:46'),
(28, 'Newari dress', 3500, '../uploads/3.png', 'Haku Patasi Newari Dress for Nepali women. with red borders worn by Nepali Newari women living in and around Kathmandu valley. Haku means Black and patasi meaning Sari in Newari language. Haku patasi (black sari) is very different than regular saris and dhoties worn by Nepali females.', 1, '2021-11-10 11:35:41', '2021-11-10 11:35:41'),
(29, 'Khas traditional wear', 5400, '../uploads/4.png', 'Khas people also called Khas and Arya are an Indo-Aryan ethno-linguistic group native to South Asia, what is now present-day Nepal and Indian states of Uttarakhand, West Bengal and Sikkim. The Khas people speak the Khas language. They are also known as Parbatiyas/Parbates and Paharis/Pahadis or Gorkhali. The term Khas has now become obsolete, as the Khas people have adopted communal identities such as Thakuri and Chhetri because of the negative stereotypes associated with the term Khas.\r\n\r\n', 1, '2021-11-10 11:54:54', '2021-11-10 11:54:54'),
(30, 'Tamang men wears', 6000, '../uploads/5.png', 'The Tamang  are an ethnic group originating in Nepal. Tamang people constitute 5.6% of the Nepalese population at over 1.3 million in 2001, increasing to 1,539,830 as of the 2011 census. Tamang people are also found in significant numbers in the Indian state of Sikkim and districts of Darjeeling and Kalimpong in West Bengal state of India and various districts in the southern foothills of the Kingdom of Bhutan.', 2, '2021-11-10 12:13:45', '2021-11-10 12:13:45'),
(31, 'Newar men dress', 6500, '../uploads/6.png', 'Newar are the historical inhabitants of the Kathmandu Valley and its surrounding areas in Nepal and the creators of its historic heritage and civilisation. Newars form a linguistic and cultural community of primarily Indo-Aryan and Tibeto-Burman ethnicities following Hinduism and Buddhism with Nepalbhasa as their common language.', 2, '2021-11-10 12:15:35', '2021-11-10 12:15:35'),
(32, 'Tamang men dress', 3500, '../uploads/7.png', 'The Tamangs, who have lived in the hills outside the Kathmandu Valley since ages, have been mentioned in various Nepalese and colonial historical records under a variety of names, such as Bhote, Lama, Murmi, Sain, Yolmo, some of which terms erroneously conflate the Tamangs with Tibetans.', 2, '2021-11-10 12:16:15', '2021-11-10 12:16:15'),
(33, 'Daura Suruwal', 3200, '../uploads/8.png', 'According to the Constitution of Nepal, western hill khas Bahuns, Chhetris, Thakuris, and Sanyasis who are citizens of Nepal should be considered as Khas Arya for electoral purposes.', 2, '2021-11-10 12:17:20', '2021-11-10 12:17:20'),
(34, 'Kids daura with topi', 3700, '../uploads/9.png', 'Daura surwal with topi for kids. Daura-Suruwal (दौरा सुरुवाल) is one of the national outfit of Nepalese men. The Daura is a variant of the Kurta and is the upper garment, the Suruwal is the trouser. ', 3, '2021-11-10 12:18:45', '2021-11-10 12:18:45'),
(35, 'Kids duo haku patasi', 8500, '../uploads/10.png', 'Haku patasi set with daura surwal for kids (duo). Women wear black cotton saris with a red border known as hāku patāsi (हाकु पतासि) or hāku parsi (हाकु पर्सि). It is still widely used especially among farmer women as everyday wear and is the most popular dress during festive occasions. ', 3, '2021-11-10 12:20:04', '2021-11-10 12:20:04'),
(36, 'Gunyo Cholo', 3725, '../uploads/11.png', 'Gunyo Cholo for girls. Complete set with sari and cholo. Given in a ceremony in which a girl who is turned to 7 years is given “GUNYO CHOLO” and traditional jewellery to symbolise for “coming age of the girl”.', 3, '2021-11-10 12:27:56', '2021-11-10 12:27:56'),
(37, 'Chaubandi Cholo', 3780, '../uploads/12.png', '', 3, '2021-11-10 12:30:12', '2021-11-10 12:30:12'),
(38, 'Jewellery', 12000, '../uploads/13.png', 'Fake but almost real, gold jewellery.', 4, '2021-11-10 12:33:31', '2021-11-10 12:33:31'),
(39, 'Ladies wallet', 850, '../uploads/14.png', 'Wallet bag made of genuine Nepali cloth. Traditional cloth bag wallet from Nepal.', 4, '2021-11-10 13:11:18', '2021-11-10 13:11:18'),
(40, 'Mask', 250, '../uploads/15.png', 'Printed mask with Nepali flag. Stay protected with swag.', 4, '2021-11-10 13:12:09', '2021-11-10 13:12:09'),
(41, 'Khukri Knife', 9500, '../uploads/16.png', 'Traditional Nepali Khukuri knife. Made with the best quality iron and steel from Nepal.', 4, '2021-11-10 13:12:53', '2021-11-10 13:12:53'),
(42, 'Yomari', 150, '../uploads/17.png', 'Yomari sweet steamed dumplings from Nepal. Traditional Nepali food.', 5, '2021-11-10 13:13:52', '2021-11-10 13:13:52'),
(43, 'Selroti', 80, '../uploads/18.png', 'Traditional Nepali doughnut bread. Deep fried rice flour doughnuts.', 5, '2021-11-10 13:20:43', '2021-11-10 13:20:43'),
(44, 'Khajuri', 250, '../uploads/19.png', 'Traditional Nepali cookies. Nepali wheat flour cookies, deep fried.', 5, '2021-11-10 13:21:35', '2021-11-10 13:21:35'),
(45, 'Lakhamari', 450, '../uploads/20.png', 'Traditional newari sweet, deep fried and sugar glazed.', 5, '2021-11-10 13:22:16', '2021-11-10 13:22:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
