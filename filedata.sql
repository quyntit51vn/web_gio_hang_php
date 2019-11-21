-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Nov 21, 2019 at 11:50 AM
-- Server version: 5.6.44
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ban_hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner` varchar(300) DEFAULT NULL,
  `url_banner` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner`, `url_banner`) VALUES
(1, 'https://salt.tikicdn.com/cache/w584/ts/banner/5b/3e/75/9e0774ecb969bda4cca8456232ab166d.png', 'http://google.com'),
(2, 'https://salt.tikicdn.com/cache/w584/ts/banner/1f/41/fc/760ad0751b6bf63e9ba4b84ecdc543e3.png', 'http://google.com'),
(3, 'https://salt.tikicdn.com/cache/w584/ts/banner/ff/c5/d2/641364653fb57905e34726bdb70fecb8.png', 'http://google.com'),
(4, 'https://salt.tikicdn.com/cache/w584/ts/banner/2d/be/7f/5f48891ffa61b08306e89ba3db502ff3.png', 'http://google.com'),
(5, 'https://salt.tikicdn.com/cache/w584/ts/banner/5b/3e/75/9e0774ecb969bda4cca8456232ab166d.png', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `banner` varchar(300) DEFAULT NULL,
  `url_banner` varchar(300) DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `banner`, `url_banner`, `name`, `image`, `parent_id`) VALUES
(1, 'https://salt.tikicdn.com/cache/w885/ts/banner/4f/c5/6d/51c17d32763911ec9b9df75daed53e73.png', 'http://google.com', 'Thời trang', 'https://theme.hstatic.net/1000225975/1000415979/14/icon_menu_6_active.png?v=53', NULL),
(2, 'https://salt.tikicdn.com/cache/w885/ts/banner/06/7e/e0/07bacb27d8c4959c86f3f9133e9f5f9e.jpg', 'http://google.com', 'Điện tử', 'https://banner2.cleanpng.com/20180331/tze/kisspng-computer-icons-electronics-icon-design-symbol-electronics-5abfb3a2389f73.0693158515225128022319.jpg', NULL),
(3, 'http://localhost/bigdeal/public/upload/image/category/27/banner-1538541170.jpg', 'http://google.com', 'Làm đẹp', 'https://cdn2.iconfinder.com/data/icons/flat-cosmetic-symbols/91/Cosmetic_Flat_02-512.png', NULL),
(4, NULL, NULL, 'Điện thoại', NULL, 2),
(5, NULL, NULL, 'lap top', NULL, 2),
(6, NULL, NULL, 'Áo', NULL, 1),
(7, NULL, NULL, 'Quần', NULL, 1),
(8, NULL, NULL, 'make up', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`) VALUES
(1, 1, 'https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg'),
(2, 1, 'https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg'),
(3, 1, 'https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg'),
(4, 1, 'https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg'),
(5, 2, 'https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg'),
(6, 2, 'https://salt.tikicdn.com/cache/280x280/ts/product/fc/f3/1a/60b595872d6bafb2495b7abd9b8535e1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `deal` int(11) NOT NULL DEFAULT '0',
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `deal`, `category_id`) VALUES
(1, 'Áo Quần 1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident libero quae hic ullam dolorum modi sapiente odit illo, temporibus asperiores reiciendis blanditiis perferendis laudantium possimus voluptas, suscipit sunt. Saepe?', 193000, 30, 1),
(2, 'Áo Quần 2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident libero quae hic ullam dolorum modi sapiente odit illo, temporibus asperiores reiciendis blanditiis perferendis laudantium possimus voluptas, suscipit sunt. Saepe?', 230000, 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
