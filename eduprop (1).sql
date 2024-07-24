-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 04:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduprop`
--

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `id` int(11) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `list_img` varchar(200) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `region` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` varchar(155) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `expiration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `seller_id`, `category`, `title`, `list_img`, `price`, `region`, `city`, `area`, `address`, `status`, `created_at`, `expiration_date`) VALUES
(1, 1, 'Popular', 'Pre School', '', 40, 'United States', 'Ohio', 'New Philadelphia', '236 Littleton St. New Philadelphia, Ohio, United States', 0, '2024-07-16 19:56:18', NULL),
(2, 2, 'test', 'test', 'fl-1.jpg', 4000, '', '', '', '', 0, '2024-07-18 23:09:34', NULL),
(3, 3, 'Pre-School', 'School', 'fl-4.jpg', 4000, 'Tamil Nadu', 'Coimbatore', '', 'Vaikai colony, CSR towers', 0, '2024-07-20 19:35:25', NULL),
(4, 4, 'School Rent', 'Kinder Garden', 'fl-2.jpg', 40000, 'Tamil Nadu', 'Coimbatore', '', '125, Avarampalayam road', 0, '2024-07-21 07:37:03', NULL),
(5, 6, 'test', 'Colelge', '', 4000, 'CEd', 'ef', '', 'khkj', 0, '2024-07-21 12:19:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `seller_name` text NOT NULL,
  `seller_email` varchar(155) NOT NULL,
  `show_email` tinyint(4) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `user_id`, `seller_name`, `seller_email`, `show_email`, `phone_num`, `created_at`) VALUES
(1, 0, 'Seller 1', 'seller1@gmail.com', 0, '34567891', '2024-07-16 19:52:55'),
(2, 0, 'test', 'test@gmail.com', 0, '908908768', '2024-07-18 23:09:34'),
(3, 0, 'Aishwarya', 'aishu@gmail.com', 0, '7094982855', '2024-07-20 19:35:25'),
(4, 0, 'Test1', 'test1@gmail.com', 0, '908908768', '2024-07-21 07:37:03'),
(5, 0, 'Aishwarya', 'aishu@gmail.com', 0, '7094982855', '2024-07-21 12:05:53'),
(6, 0, 'Aishwarya', 'aishu@gmail.com', 0, '7094982855', '2024-07-21 12:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_email` varchar(155) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_email`, `pswd`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', 'admin@gmail.com', 'admin12345', '2024-07-16 23:39:06', '2024-07-21 12:33:22'),
(2, 'Test', 'Test', 'test@gmail.com', 'test', '2024-07-16 23:44:57', '2024-07-21 07:46:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
