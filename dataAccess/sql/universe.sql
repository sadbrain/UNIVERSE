-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 04:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28
drop database universe;
create database universe;
use universe;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'clothes', 'clothes', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:20', NULL, NULL),
(2, 'hat', 'hat', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:22', NULL, NULL),
(3, 'footwear', 'footwear', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:23', NULL, NULL),
(4, 'dress', 'dress', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:26', NULL, NULL),
(5, 'jewelry', 'jewelry', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `discount_from` datetime DEFAULT NULL,
  `discount_to` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `discount_price`, `discount_from`, `discount_to`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `product_id`) VALUES
(1, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:15:52', NULL, NULL, 1),
(2, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:02', NULL, NULL, 2),
(3, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:11', NULL, NULL, 3),
(4, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:18', NULL, NULL, 4),
(5, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:25', NULL, NULL, 5),
(6, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:35', NULL, NULL, 6),
(7, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:43', NULL, NULL, 7),
(8, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:51', NULL, NULL, 8),
(9, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:59', NULL, NULL, 9),
(10, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:08', NULL, NULL, 10),
(11, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:15', NULL, NULL, 11),
(12, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:22', NULL, NULL, 12),
(13, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:32', NULL, NULL, 13),
(14, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:39', NULL, NULL, 14),
(15, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:46', NULL, NULL, 15),
(16, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:55', NULL, NULL, 16),
(17, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:03', NULL, NULL, 17),
(18, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:09', NULL, NULL, 18),
(19, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:21', NULL, NULL, 19),
(20, NULL, NULL, NULL, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:39', NULL, NULL, 20),
(21, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:48', NULL, NULL, 21),
(22, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:59', NULL, NULL, 22),
(23, 50.00, '2023-12-18 20:11:21', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:07', NULL, NULL, 23),
(24, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:14', NULL, NULL, 24),
(25, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:23', NULL, NULL, 25),
(26, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:33', NULL, NULL, 26),
(27, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:40', NULL, NULL, 27),
(28, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:47', NULL, NULL, 28),
(29, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:12:06', NULL, NULL, 29),
(30, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:55', NULL, NULL, 30),
(31, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:48', NULL, NULL, 31),
(32, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:42', NULL, NULL, 32),
(33, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:33', NULL, NULL, 33),
(34, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:25', NULL, NULL, 34),
(35, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:18', NULL, NULL, 35),
(36, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:11', NULL, NULL, 36),
(37, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:05', NULL, NULL, 37),
(38, 25.00, '2024-01-12 20:22:22', '2024-03-12 20:22:22', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:58', NULL, NULL, 38),
(39, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:47', NULL, NULL, 39),
(40, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:33', NULL, NULL, 40),
(41, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:24', NULL, NULL, 41),
(42, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:16', NULL, NULL, 42),
(43, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:09', NULL, NULL, 43),
(44, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:02', NULL, NULL, 44),
(45, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:52', NULL, NULL, 45),
(46, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:45', NULL, NULL, 46),
(47, 75.00, '2024-01-01 20:12:12', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:12:42', NULL, NULL, 47),
(48, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:21', NULL, NULL, 48),
(49, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:06:51', NULL, NULL, 49),
(50, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:27', NULL, NULL, 50),
(51, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:08:28', NULL, NULL, 51),
(52, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:21', NULL, NULL, 52),
(53, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:58', NULL, NULL, 53),
(54, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:47', NULL, NULL, 54),
(55, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:17', NULL, NULL, 55),
(56, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:06:07', NULL, NULL, 56),
(57, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:33', NULL, NULL, 57),
(58, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:08:04', NULL, NULL, 58),
(59, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:53', NULL, NULL, 59),
(60, 35.00, '2023-12-12 20:22:22', '2024-03-03 20:12:12', 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:00', NULL, NULL, 60);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) DEFAULT NULL,
  `buyer_email` varchar(255) DEFAULT NULL,
  `buyer_phone` varchar(15) DEFAULT NULL,
  `buyer_address` varchar(255) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `shipping_cost` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` enum('PENDING','DONE','CANCEL','ON_DELIVERY') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `buyer_name`, `buyer_email`, `buyer_phone`, `buyer_address`, `total`, `shipping_cost`, `created_at`, `status`) VALUES
(1, 'Tinh', 'tinh.tran@gmail.com', '03535312321', '99 Le Huu Trac', 180000.00, 30000.00, '2024-01-01 02:22:12', 'DONE'),
(2, 'Nhung', 'nhung.phan@gmail.com', '03535312321', '99 Le Huu Trac', 400000.00, 30000.00, '2024-01-01 02:22:12', 'DONE'),
(3, 'Nhi', 'nhi.tuong@gmail.com', '03535312321', '99 Le Huu Trac', 25030000.00, 30000.00, '2024-01-01 02:22:12', 'DONE'),
(4, 'Thanh ', 'thanh.tuong@gmail.com', '09903334213', '101B Le Huu Trac', 630000.00, 30000.00, '2024-01-02 02:22:12', 'DONE'),
(5, 'Nghia', 'nghia.tran@gmail.com', '09884433322', '67 Le Thanh Nha', 380000.00, 30000.00, '2024-01-02 02:22:12', 'DONE'),
(6, 'Hao', 'hao.nguyen@gmail.com', '09874373577', '345 Trung Nu Vuong', 530000.00, 30000.00, '2024-01-03 02:22:12', 'DONE'),
(7, 'Trung', 'trung.le@gmail.com', '09958545453', '222 Le Huu Tho', 430000.00, 30000.00, '2024-01-03 02:22:12', 'DONE'),
(8, 'Nhat', 'nhat.van@gmail.com', '05057483752', '223 Yet Kieu', 180000.00, 30000.00, '2024-01-03 02:22:12', 'DONE'),
(9, 'Linh', 'linh.tuong@gmail.com', '09646748764', '45 Phan Thanh ', 730000.00, 30000.00, '2024-01-03 02:22:12', 'DONE'),
(10, 'Son', 'son.tran@gmail.com', '05869568546', '54 Phan Giiang', 180000.00, 30000.00, '2024-01-04 02:22:12', 'DONE'),
(11, 'Ngo', 'ngo.le@gmail.com', '05834753534', '43 Nguyen Van Linh', 280000.00, 30000.00, '2024-01-04 02:22:12', 'DONE'),
(12, 'Suong', 'suong.le@gmail.com', '08934673783', '43 Le Thanh Nha', 430000.00, 30000.00, '2024-01-04 02:22:12', 'DONE'),
(13, 'My', 'my.tran@gmail.com', '05873877634', '454 Nguyen Cong Tru', 180000.00, 30000.00, '2024-01-04 02:22:12', 'DONE'),
(14, 'Ngoc', 'ngoc.tran@gmail.com', '08753487543', '45 Phan Thanh ', 630000.00, 30000.00, '2024-01-04 02:22:12', 'DONE'),
(15, 'My', 'my.ngo@gmail.com', '09995433543', '222 Le Huu Tho', 430000.00, 30000.00, '2024-01-05 02:22:12', 'DONE'),
(16, 'Le', 'le.tran@gmail.com', '05848333355', '43 Nguyen Van Linh', 930000.00, 30000.00, '2024-01-05 02:22:12', 'DONE'),
(17, 'Canh', 'canh.tuong@gmail.com', '05466322245', '54 Phan Giiang', 530000.00, 30000.00, '2024-01-23 02:22:12', 'DONE'),
(18, 'Huy ', 'huy.le@gmail.com', '09677382226', '45 Phan Thanh ', 930000.00, 30000.00, '2024-01-23 02:22:12', 'DONE'),
(19, 'Nam', 'nam.tran@gmail.com', '05784736726', '43 Nguyen Van Linh', 430000.00, 30000.00, '2024-01-23 02:22:12', 'DONE'),
(20, 'Ly', 'ly.tran@gmail.com', '05887437687', '45 Phan Thanh ', 350000.00, 30000.00, '2024-01-23 02:22:12', 'DONE'),
(21, 'Na', 'na.Nguyen@gmail.com', '06834643663', '43 Le Thanh Nha', 30000000.00, 30000.00, '2024-01-23 02:22:12', 'DONE'),
(22, 'Banh', 'banh.tran@gmail.com', '09938689534', '43 Nguyen Van Linh', 25000000.00, 30000.00, '2024-01-23 02:22:12', 'DONE'),
(23, 'Viet', 'viet.nguyen@gmail.com', '05783687436', '222 Le Huu Tho', 20030000.00, 30000.00, '2024-01-05 02:22:12', 'DONE'),
(24, 'Bao', 'bao.tran@gmail.com', '06598376853', '45 Phan Thanh ', 17530000.00, 30000.00, '2024-01-05 02:22:12', 'DONE'),
(25, 'Lam', 'lam.le@gmail.com', '06758367536', '43 Le Thanh Nha', 12530000.00, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(26, 'Van', 'van.mai@gmail.com', '06583767853', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(27, 'Dat', 'dat.tran@gmail.com', '06988643666', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(28, 'Duc', 'duc.ho@gmail.com', '08869583468', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(29, 'Duyen', 'duyen.huynh@gmail.com', '06573487665', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(30, 'Hoang', 'hoang.tran@gmail.com', '06654876766', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(31, 'Thang', 'thang.tran@gmail.com', '09960596550', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(32, 'Huynh', 'huynh.le@gmail.com', '08970986785', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(33, 'Son', 'son.mai@gmail.com', '09986989668', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(34, 'My', 'my.doan@gmail.com', '07968585688', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(35, 'Hong', 'hong.tran@gmail.com', '07568687887', '222 Le Huu Tho', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(36, 'Vang', 'vang.truong@gmail.com', '07658568858', '223 Yet Kieu', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(37, 'Anh', 'anh.hoang@gmail.com', '07575685888', '223 Yet Kieu', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(38, 'Hung', 'hung.hoang@gmail.com', '07657575758', '223 Yet Kieu', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(39, 'Hoan', 'hoan.le@gmail.com', '07557576576', '212 Trung Nu Vuong', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(40, 'Thu', 'thu.huynh@gmail.com', '07567655757', '212 Trung Nu Vuong', 99999999.99, 30000.00, '2023-12-30 02:22:12', 'DONE'),
(41, 'Thuy', 'thuy.mai@gmail.com', '07667677888', '212 Trung Nu Vuong', 99999999.99, 30000.00, '2023-12-23 02:22:12', 'DONE'),
(42, 'Khue', 'khue.ho@gmail.com', '06575686585', '212 Trung Nu Vuong', 99999999.99, 30000.00, '2023-12-23 02:22:12', 'DONE'),
(43, 'Dao', 'dao.le@gmail.com', '05767567654', '212 Trung Nu Vuong', 99999999.99, 30000.00, '2023-12-23 02:22:12', 'DONE'),
(44, 'Huong', 'huong.dao@gmail.com', '06865866668', '32 Nguyen Thien Ke', 99999999.99, 30000.00, '2023-12-23 02:22:12', 'DONE'),
(45, 'Tu', 'tu.cao@gmail.com', '08768979899', '43 Quang Trung', 99999999.99, 30000.00, '2023-12-23 02:22:12', 'DONE'),
(46, 'Trinh', 'trinh.phung@gmail.com', '09544964565', '43 Quang Trung', 99999999.99, 30000.00, '2023-12-23 02:22:12', 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `product_discount_price` decimal(10,2) DEFAULT NULL,
  `product_color` varchar(100) DEFAULT NULL,
  `product_size` varchar(100) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `product_name`, `product_quantity`, `product_price`, `product_discount_price`, `product_color`, `product_size`, `product_id`, `order_id`) VALUES
(1, 'Chanel-Straight-Leg Trousers - myndi_clothes - Unisex Men\'s and Women\'s Wide-Leg Khaki Baggy Pants 3 Colors Black, Beige, Charcoal Green with Buttons on Legs', 1, 300000.00, 50.00, '#000', 'S', 1, 1),
(2, 'Chanel-MIAA Unisex Wide Leg Wide Leg High Waist Pocket Khaki Pants for Men and Women, Youthful Style khaki cargo pants for men and women', 1, 400000.00, NULL, '#000', 'M', 2, 2),
(3, 'Chanel-Cropped denim shirt set with elastic waistband shorts - short-sleeved jean shirt in 2 colors dark and light blue Korean ulzzang style', 1, 500000.00, 50.00, '#000', 'X', 3, 3),
(4, 'Chanel-SUKIYA GhiLe Women\'s Wool Sweater Smooth Wool All Sizes Latest Model 2023 AL47', 1, 600000.00, NULL, '#000', 'L', 4, 4),
(5, 'Chanel-Very beautiful set of unisex short-sleeved clothes for men and women, set of loose-fitting loose-fitting shirts for going out, going to the beach, and traveling', 1, 700000.00, 50.00, '#000', 'L', 5, 5),
(6, 'Chanel-SET OF 3 SHIRT + TENNIS SKIRT + TIE', 1, 500000.00, NULL, '#000', 'X', 6, 6),
(7, 'Chanel-SET GILE SWEATSHIRT + BLUE SKIRT + TIE', 1, 600000.00, 50.00, '#000', 'M', 7, 7),
(8, 'Chanel-SET OF 3 FLORAL GILE SHIRTS + SHIRT + SUPER KUTE TENNIS SKIRT', 1, 400000.00, NULL, '#000', 'S', 8, 8),
(9, 'Chanel-RUICHE waistcoat+vest+women\'s vest set Popular INS cozy Elegant WCS24104RC 2Z24010', 1, 300000.00, 50.00, '#000', 'M', 9, 9),
(10, 'Chanel-Women\'s sweater vest with wide flaps to cover the shoulders, fashion style AO33', 1, 700000.00, NULL, '#000', 'X', 10, 10),
(11, 'Chanel-Autumn and winter long-sleeved shirt with NASA print - Unisex polo sweater with loose fit, Cotton fabric, Ulzzang style - Maylinh Shop', 1, 500000.00, 50.00, '#000', 'L', 11, 11),
(12, 'Chanel-Feminine office-style wide-leg fabric pants with bow tie, show off super pretty figure QU2', 1, 400000.00, NULL, '#000', 'S', 12, 12),
(13, 'Prada-Berets, Korean style fashion berets', 1, 300000.00, 50.00, '#FF0033', NULL, 13, 13),
(14, 'Prada-Vintage Korean style embossed Heart-shaped Beret Hat', 1, 600000.00, NULL, '#FF0033', NULL, 14, 14),
(15, 'Prada-Large head circumference Loose Knitted Wool Hat with Metal Label Coordinated Autumn and Winter Fashion Easy to Coordinate for Men and Women', 1, 800000.00, 50.00, '#FF0033', NULL, 15, 15),
(16, 'Prada-Fashionable 40cm brim hat for women _high quality products at factory prices _free foam stickers.', 1, 900000.00, NULL, '#FF0033', NULL, 16, 16),
(17, 'Prada-Paint brand umbrella hats, high quality umbrellas, wholesale prices_painted hats', 1, 1000000.00, 50.00, '#FF0033', NULL, 17, 17),
(18, 'Prada-Small Brim Hats (Lots of Money For What) Are Hot Now for Both Men and Women. Real pictures with video', 1, 900000.00, NULL, '#FF0033', NULL, 18, 18),
(19, 'Prada-HIGH QUALITY KAKI HAT_EMBROADED LOGO WITH BEAUTIFUL TEXTURES_IN STOCK PRICE', 1, 800000.00, 50.00, '#6600FF ', NULL, 19, 19),
(20, 'Prada-HIGH QUALITY KAKI HAT_EMBROADED LOGO WITH BEAUTIFUL TEXTURES_IN STOCK PRICE', 1, 700000.00, NULL, '#6600FF ', NULL, 20, 20),
(21, 'Prada-Moc® New style warm winter wool hat, easy to coordinate with thick and smooth clothes HT-G-038', 1, 600000.00, 50.00, '#6600FF ', NULL, 21, 21),
(22, 'Prada-Nbviesrt Baseball Cap Youthful Dynamic Design Hat for men and women American Retro Style', 1, 500000.00, 50.00, '#6600FF ', NULL, 22, 22),
(23, 'Prada-New Korean Autumn and Winter Fashion Wool Brim Hat for Women', 1, 400000.00, 50.00, '#6600FF ', NULL, 23, 23),
(24, 'Prada-Lucy\'s 3-striped high-end bucket hat P4-A3', 1, 700000.00, 25.00, '#6600FF ', NULL, 24, 24),
(25, 'Denim-LuxyShoes LX85 women\'s lolita doll shoes with high glossy leather soles', 1, 500000.00, 25.00, '#FF9900', '36', 25, 25),
(26, 'Denim-FEIJIANU women\'s sandals women\'s sandals high heel beach sandals Comfortable Summer Fashion For Women Multi-purpose Flexible B28G0UH 49Z231204', 1, 99999999.99, 25.00, '#FF9900', '37', 26, 26),
(27, 'Denim-FEIJIANU women\'s sandals doll shoes 5cm high heel beach sandals Comfortable Summer Fashion For Women Convenient Soft Sole FDL23C08CM 50Z231212', 1, 20000000.00, 25.00, '#FF9900', '38', 27, 27),
(28, 'Denim-Clemine Women\'s Fashion Casual Soft Bread Sole Sneakers', 1, 99999999.99, 25.00, '#FF9900', '39', 28, 28),
(29, 'Denim-ICCLEK 32zDDX072502 comfortable crocs bread sandals for women', 1, 55500000.00, 25.00, '#FF9900', '38', 29, 29),
(30, 'Denim-Anti-slip thick sole cross-strap sandals, new design, summer fashion, for women', 1, 99999999.99, 25.00, '#00CCFF ', '37', 30, 30),
(31, 'Denim-Thick Sole Sandals Perforated Design New Style Summer Fashion For Women', 1, 99999999.99, 25.00, '#00CCFF ', '36', 31, 31),
(32, 'Denim-[READY STOCK] [REAL PHOTO] Luxurious 10cm High Heel Marry Jane Shoes - CG09', 1, 99999999.99, 25.00, '#00CCFF ', '38', 32, 32),
(33, 'Denim-[In stock] [Real photos] [Freeship] CC00 Warrior Boots', 1, 99999999.99, 25.00, '#00CCFF ', '37', 33, 33),
(34, 'Denim-[Freeship] [Real Photos] Women\'s Martin Boots 6 Inch High Thick Sole White Popular British Style 2024 - CV23', 1, 99999999.99, 25.00, '#00CCFF ', '39', 34, 34),
(35, 'Denim-ICCLEK women\'s sandals High heel sandals Comfortable, Pretty, Beach, Elegant, Easy to coordinate, Lightweight FDL2410I18 3Z240117', 1, 99999999.99, 25.00, '#FF0000', '38', 35, 35),
(36, 'Denim-Comfortable ICCLEK 32zHD072410 slingback flip-flops for women', 1, 99999999.99, 25.00, '#FF0000', '36', 36, 36),
(37, 'Louis vuitton-Baby girl Hanfu dress super fairy tale Chinese style spring and autumn little girl Ancient dress costume for summer children', 1, 99999999.99, 25.00, '#0099FF ', 'M', 37, 37),
(38, 'Louis vuitton-[Available Set of 3 Ancient Chinese Dance Costumes Classical Dance Costumes A198 - Tinh Nhi Dance Costumes', 1, 99999999.99, 25.00, '#0099FF ', 'L', 38, 38),
(39, 'Louis vuitton-Spring Summer 20 Fashion Short Sleeve Hanfu Dress for Women', 1, 99999999.99, 75.00, '#0099FF ', 'XL', 39, 39),
(40, 'Louis vuitton-Cute Ancient Chinese Han Suit Pants for Women 2022', 1, 99999999.99, 75.00, '#0099FF ', 'XXL', 40, 40),
(41, 'Louis vuitton-Innovative Hanfu Dress Long Pleated Printed Pattern Classic Chinese Style Figure Fashion Spring Summer 2023 New For Women Hanfu Dress', 1, 99999999.99, 75.00, '#0099FF ', 'XXL', 41, 41),
(42, 'Louis vuitton-Innovative Hanfu Set with Short Sleeves Printed Autumn and Winter Fashion Patterns for Women', 1, 99999999.99, 75.00, '#FF3333 ', 'Xl', 42, 42),
(43, 'Louis vuitton-New Chinese Style Short Sleeve Hanfu Dress for Women', 1, 99999999.99, 75.00, '#FF3333 ', 'L', 43, 43),
(44, 'Louis vuitton-Chinese Style Long-Sleeved Hanfu Dress Fall 2023', 1, 99999999.99, 75.00, '#FF3333 ', 'M', 44, 44),
(45, 'Louis vuitton-Reformed Hanfu Set Cross Collar Classic Chinese Style Fashion New Fall Winter 2023 Skirt Coordinate Set Youthful Design For', 1, 99999999.99, 75.00, '#FF3333 ', 'M', 45, 45),
(46, 'Louis vuitton-Nian March Traditional Chinese Hanfu Set Standing Collar Long Embroidery Horse Style Modernized Chinese Hanfu Ming Made Design', 1, 99999999.99, 75.00, '#FF3333 ', 'L', 46, 46);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `expiry` varchar(255) DEFAULT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `payment_type`, `provider`, `account`, `expiry`, `order_id`) VALUES
(1, 'Momo', NULL, NULL, NULL, 1),
(2, 'Momo', NULL, NULL, NULL, 2),
(3, 'Momo', NULL, NULL, NULL, 3),
(4, 'Momo', NULL, NULL, NULL, 4),
(5, 'Momo', NULL, NULL, NULL, 5),
(6, 'Momo', NULL, NULL, NULL, 6),
(7, 'Momo', NULL, NULL, NULL, 7),
(8, 'Momo', NULL, NULL, NULL, 8),
(9, 'Momo', NULL, NULL, NULL, 9),
(10, 'Momo', NULL, NULL, NULL, 10),
(11, 'Momo', NULL, NULL, NULL, 11),
(12, 'Momo', NULL, NULL, NULL, 12),
(13, 'Momo', NULL, NULL, NULL, 13),
(14, 'Momo', NULL, NULL, NULL, 14),
(15, 'Momo', NULL, NULL, NULL, 15),
(16, 'Momo', NULL, NULL, NULL, 16),
(17, 'Momo', NULL, NULL, NULL, 17),
(18, 'Momo', NULL, NULL, NULL, 18),
(19, 'Momo', NULL, NULL, NULL, 19),
(20, 'Momo', NULL, NULL, NULL, 20),
(21, 'Momo', NULL, NULL, NULL, 21),
(22, 'Momo', NULL, NULL, NULL, 22),
(23, 'Momo', NULL, NULL, NULL, 23),
(24, 'Momo', NULL, NULL, NULL, 24),
(25, 'Momo', NULL, NULL, NULL, 25),
(26, 'Delivery', NULL, NULL, NULL, 26),
(27, 'Delivery', NULL, NULL, NULL, 27),
(28, 'Delivery', NULL, NULL, NULL, 28),
(29, 'Delivery', NULL, NULL, NULL, 29),
(30, 'Delivery', NULL, NULL, NULL, 30),
(31, 'Delivery', NULL, NULL, NULL, 31),
(32, 'Delivery', NULL, NULL, NULL, 32),
(33, 'Delivery', NULL, NULL, NULL, 33),
(34, 'Delivery', NULL, NULL, NULL, 34),
(35, 'Delivery', NULL, NULL, NULL, 35),
(36, 'Delivery', NULL, NULL, NULL, 36),
(37, 'Delivery', NULL, NULL, NULL, 37),
(38, 'Delivery', NULL, NULL, NULL, 38),
(39, 'Delivery', NULL, NULL, NULL, 39),
(40, 'Delivery', NULL, NULL, NULL, 40),
(41, 'Delivery', NULL, NULL, NULL, 41),
(42, 'Delivery', NULL, NULL, NULL, 42),
(43, 'Delivery', NULL, NULL, NULL, 43),
(44, 'Delivery', NULL, NULL, NULL, 44),
(45, 'Delivery', NULL, NULL, NULL, 45),
(46, 'Delivery', NULL, NULL, NULL, 46);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `brand` enum('Chanel','Prada','Denim','Louis vuitton','Calvin Klein') DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(12,2) NOT NULL,
  `rating` float DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `thumbnail`, `name`, `brand`, `slug`, `description`, `price`, `rating`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `category_id`) VALUES
(1, 'wwwroot\\images\\products\\clothes_1.jpg', 'Chanel-Straight-Leg Trousers - myndi_clothes - Unisex Men\'s and Women\'s Wide-Leg Khaki Baggy Pants 3 Colors Black, Beige, Charcoal Green with Buttons on Legs', 'Chanel', 'chanel-straight-leg-trousers-myndi_clothes-unisex-men-s-and-women-s-wide-leg-khaki-baggy-pants-3-colors-black-beige-charcoal-green-with-buttons-on-legs', 'SIZE SELECTION CONSULTATION', 300000.00, 1000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:15:52', NULL, NULL, 1),
(2, 'wwwroot\\images\\products\\clothes_2.jpg', 'Chanel-MIAA Unisex Wide Leg Wide Leg High Waist Pocket Khaki Pants for Men and Women, Youthful Style khaki cargo pants for men and women', 'Prada', 'chanel-miaa-unisex-wide-leg-wide-leg-high-waist-pocket-khaki-pants-for-men-and-women-youthful-style-khaki-cargo-pants-for-men-and-women', 'SIZE SELECTION CONSULTATION', 400000.00, 2000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:02', NULL, NULL, 1),
(3, 'wwwroot\\images\\products\\clothes_3.jpg', 'Chanel-Cropped denim shirt set with elastic waistband shorts - short-sleeved jean shirt in 2 colors dark and light blue Korean ulzzang style', 'Chanel', 'chanel-cropped-denim-shirt-set-with-elastic-waistband-shorts-short-sleeved-jean-shirt-in-2-colors-dark-and-light-blue-korean-ulzzang-style', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 3000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:11', NULL, NULL, 1),
(4, 'wwwroot\\images\\products\\clothes_4.jpg', 'Chanel-SUKIYA GhiLe Women\'s Wool Sweater Smooth Wool All Sizes Latest Model 2023 AL47', 'Prada', 'chanel-sukiya-ghile-women-s-wool-sweater-smooth-wool-all-sizes-latest-model-2023-al47', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 4000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:18', NULL, NULL, 1),
(5, 'wwwroot\\images\\products\\clothes_5.jpg', 'Chanel-Very beautiful set of unisex short-sleeved clothes for men and women, set of loose-fitting loose-fitting shirts for going out, going to the beach, and traveling', 'Calvin Klein', 'chanel-very-beautiful-set-of-unisex-short-sleeved-clothes-for-men-and-women-set-of-loose-fitting-loose-fitting-shirts-for-going-out-going-to-the-beach-and-traveling', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 700000.00, 5000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:25', NULL, NULL, 1),
(6, 'wwwroot\\images\\products\\clothes_6.jpg', 'Chanel-SET OF 3 SHIRT + TENNIS SKIRT + TIE', 'Chanel', 'chanel-set-of-3-shirt-tennis-skirt-tie', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 6000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:35', NULL, NULL, 1),
(7, 'wwwroot\\images\\products\\clothes_7.jpg', 'Chanel-SET GILE SWEATSHIRT + BLUE SKIRT + TIE', 'Calvin Klein', 'chanel-set-gile-sweatshirt-blue-skirt-tie', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 5000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:43', NULL, NULL, 1),
(8, 'wwwroot\\images\\products\\clothes_8.jpg', 'Chanel-SET OF 3 FLORAL GILE SHIRTS + SHIRT + SUPER KUTE TENNIS SKIRT', 'Chanel', 'chanel-set-of-3-floral-gile-shirts-shirt-super-kute-tennis-skirt', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 3000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:51', NULL, NULL, 1),
(9, 'wwwroot\\images\\products\\clothes_9.jpg', 'Chanel-RUICHE waistcoat+vest+women\'s vest set Popular INS cozy Elegant WCS24104RC 2Z24010', 'Louis vuitton', 'chanel-ruiche-waistcoat-vest-women-s-vest-set-popular-ins-cozy-elegant-wcs24104rc-2z24010', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 300000.00, 3000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:16:59', NULL, NULL, 1),
(10, 'wwwroot\\images\\products\\clothes_10.jpg', 'Chanel-Women\'s sweater vest with wide flaps to cover the shoulders, fashion style AO33', 'Louis vuitton', 'chanel-women-s-sweater-vest-with-wide-flaps-to-cover-the-shoulders-fashion-style-ao33', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 700000.00, 2000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:08', NULL, NULL, 1),
(11, 'wwwroot\\images\\products\\clothes_11.jpg', 'Chanel-Autumn and winter long-sleeved shirt with NASA print - Unisex polo sweater with loose fit, Cotton fabric, Ulzzang style - Maylinh Shop', 'Prada', 'chanel-autumn-and-winter-long-sleeved-shirt-with-nasa-print-unisex-polo-sweater-with-loose-fit-cotton-fabric-ulzzang-style-maylinh-shop', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 1000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:15', NULL, NULL, 1),
(12, 'wwwroot\\images\\products\\clothes_12.jpg', 'Chanel-Feminine office-style wide-leg fabric pants with bow tie, show off super pretty figure QU2', 'Louis vuitton', 'chanel-feminine-office-style-wide-leg-fabric-pants-with-bow-tie-show-off-super-pretty-figure-qu2', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 2500, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:22', NULL, NULL, 1),
(13, 'wwwroot\\images\\products\\hat_1.jpg', 'Prada-Berets, Korean style fashion berets', 'Louis vuitton', 'prada-berets-korean-style-fashion-berets', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 300000.00, 3000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:32', NULL, NULL, 2),
(14, 'wwwroot\\images\\products\\hat_2.jpg', 'Prada-Vintage Korean style embossed Heart-shaped Beret Hat', 'Prada', 'prada-vintage-korean-style-embossed-heart-shaped-beret-hat', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 4000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:39', NULL, NULL, 2),
(15, 'wwwroot\\images\\products\\hat_3.jpg', 'Prada-Large head circumference Loose Knitted Wool Hat with Metal Label Coordinated Autumn and Winter Fashion Easy to Coordinate for Men and Women', 'Chanel', 'prada-large-head-circumference-loose-knitted-wool-hat-with-metal-label-coordinated-autumn-and-winter-fashion-easy-to-coordinate-for-men-and-women', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 800000.00, 7000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:46', NULL, NULL, 2),
(16, 'wwwroot\\images\\products\\hat_4.jpg', 'Prada-Fashionable 40cm brim hat for women _high quality products at factory prices _free foam stickers.', 'Calvin Klein', 'prada-fashionable-40cm-brim-hat-for-women-_high-quality-products-at-factory-prices-_free-foam-stickers-', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 900000.00, 8000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:17:55', NULL, NULL, 2),
(17, 'wwwroot\\images\\products\\hat_5.jpg', 'Prada-Paint brand umbrella hats, high quality umbrellas, wholesale prices_painted hats', 'Chanel', 'prada-paint-brand-umbrella-hats-high-quality-umbrellas-wholesale-prices_painted-hats', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 100000.00, 9000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:03', NULL, NULL, 2),
(18, 'wwwroot\\images\\products\\hat_6.jpg', 'Prada-Small Brim Hats (Lots of Money For What) Are Hot Now for Both Men and Women. Real pictures with video', 'Calvin Klein', 'prada-small-brim-hats-lots-of-money-for-what-are-hot-now-for-both-men-and-women-real-pictures-with-video', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 900000.00, 1000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:09', NULL, NULL, 2),
(19, 'wwwroot\\images\\products\\hat_7.jpg', 'Prada-HIGH QUALITY KAKI HAT_EMBROADED LOGO WITH BEAUTIFUL TEXTURES_IN STOCK PRICE', 'Denim', 'prada-high-quality-kaki-hat_embroaded-logo-with-beautiful-textures_in-stock-price', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 800000.00, 200, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:21', NULL, NULL, 2),
(20, 'wwwroot\\images\\products\\hat_8.jpg', 'Prada-HIGH QUALITY KAKI HAT_EMBROADED LOGO WITH BEAUTIFUL TEXTURES_IN STOCK PRICE', 'Prada', 'prada-high-quality-kaki-hat_embroaded-logo-with-beautiful-textures_in-stock-price', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 700000.00, 300, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:39', NULL, NULL, 2),
(21, 'wwwroot\\images\\products\\hat_9.jpg', 'Prada-Moc® New style warm winter wool hat, easy to coordinate with thick and smooth clothes HT-G-038', 'Denim', 'prada-moc-new-style-warm-winter-wool-hat-easy-to-coordinate-with-thick-and-smooth-clothes-ht-g-038', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 400, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:48', NULL, NULL, 2),
(22, 'wwwroot\\images\\products\\hat_10.jpg', 'Prada-Nbviesrt Baseball Cap Youthful Dynamic Design Hat for men and women American Retro Style', 'Calvin Klein', 'prada-nbviesrt-baseball-cap-youthful-dynamic-design-hat-for-men-and-women-american-retro-style', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 500, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:18:59', NULL, NULL, 2),
(23, 'wwwroot\\images\\products\\hat_11.jpg', 'Prada-New Korean Autumn and Winter Fashion Wool Brim Hat for Women', 'Louis vuitton', 'prada-new-korean-autumn-and-winter-fashion-wool-brim-hat-for-women', 'SIZE SELECTION CONSULTATION\r\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\r\n \r\n  Sandal sole is about 3.5cm thick (measured by hand).\r\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 600, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:07', NULL, NULL, 2),
(24, 'wwwroot\\images\\products\\hat_12.jpg', 'Prada-Lucy\'s 3-striped high-end bucket hat P4-A3', 'Chanel', 'prada-lucy-s-3-striped-high-end-bucket-hat-p4-a3', 'SIZE SELECTION CONSULTATION', 700000.00, 300, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:14', NULL, NULL, 2),
(25, 'wwwroot\\images\\products\\footwear_1.jpg', 'Denim-LuxyShoes LX85 women\'s lolita doll shoes with high glossy leather soles', 'Louis vuitton', 'denim-luxyshoes-lx85-women-s-lolita-doll-shoes-with-high-glossy-leather-soles', 'SIZE SELECTION CONSULTATION', 500000.00, 10000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:23', NULL, NULL, 3),
(26, 'wwwroot\\images\\products\\footwear_2.jpg', 'Denim-FEIJIANU women\'s sandals women\'s sandals high heel beach sandals Comfortable Summer Fashion For Women Multi-purpose Flexible B28G0UH 49Z231204', 'Calvin Klein', 'denim-feijianu-women-s-sandals-women-s-sandals-high-heel-beach-sandals-comfortable-summer-fashion-for-women-multi-purpose-flexible-b28g0uh-49z231204', 'SIZE SELECTION CONSULTATION', 100000000.00, 390, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:33', NULL, NULL, 3),
(27, 'wwwroot\\images\\products\\footwear_3.jpg', 'Denim-FEIJIANU women\'s sandals doll shoes 5cm high heel beach sandals Comfortable Summer Fashion For Women Convenient Soft Sole FDL23C08CM 50Z231212', 'Calvin Klein', 'denim-feijianu-women-s-sandals-doll-shoes-5cm-high-heel-beach-sandals-comfortable-summer-fashion-for-women-convenient-soft-sole-fdl23c08cm-50z231212', 'SIZE SELECTION CONSULTATION', 20000000.00, 450, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:40', NULL, NULL, 3),
(28, 'wwwroot\\images\\products\\footwear_4.jpg', 'Denim-Clemine Women\'s Fashion Casual Soft Bread Sole Sneakers', 'Chanel', 'denim-clemine-women-s-fashion-casual-soft-bread-sole-sneakers', 'SIZE SELECTION CONSULTATION', 9999999999.99, 6789, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:19:47', NULL, NULL, 3),
(29, 'wwwroot\\images\\products\\footwear_5.jpg', 'Denim-ICCLEK 32zDDX072502 comfortable crocs bread sandals for women', 'Louis vuitton', 'denim-icclek-32zddx072502-comfortable-crocs-bread-sandals-for-women', 'SIZE SELECTION CONSULTATION', 55500000.00, 780, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:12:06', NULL, NULL, 3),
(30, 'wwwroot\\images\\products\\footwear_6.jpg', 'Denim-Anti-slip thick sole cross-strap sandals, new design, summer fashion, for women', 'Denim', 'denim-anti-slip-thick-sole-cross-strap-sandals-new-design-summer-fashion-for-women', 'SIZE SELECTION CONSULTATION', 9000000000.00, 590, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:55', NULL, NULL, 3),
(31, 'wwwroot\\images\\products\\footwear_7.jpg', 'Denim-Thick Sole Sandals Perforated Design New Style Summer Fashion For Women', 'Prada', 'denim-thick-sole-sandals-perforated-design-new-style-summer-fashion-for-women', 'SIZE SELECTION CONSULTATION', 9999999999.99, 790, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:48', NULL, NULL, 3),
(32, 'wwwroot\\images\\products\\footwear_8.jpg', 'Denim-[READY STOCK] [REAL PHOTO] Luxurious 10cm High Heel Marry Jane Shoes - CG09', 'Denim', 'denim-ready-stock-real-photo-luxurious-10cm-high-heel-marry-jane-shoes-cg09', 'SIZE SELECTION CONSULTATION', 9999999999.99, 5000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:42', NULL, NULL, 3),
(33, 'wwwroot\\images\\products\\footwear_9.jpg', 'Denim-[In stock] [Real photos] [Freeship] CC00 Warrior Boots', 'Prada', 'denim-in-stock-real-photos-freeship-cc00-warrior-boots', 'SIZE SELECTION CONSULTATION', 9999999999.99, 6000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:33', NULL, NULL, 3),
(34, 'wwwroot\\images\\products\\footwear_10.jpg', 'Denim-[Freeship] [Real Photos] Women\'s Martin Boots 6 Inch High Thick Sole White Popular British Style 2024 - CV23', 'Calvin Klein', 'denim-freeship-real-photos-women-s-martin-boots-6-inch-high-thick-sole-white-popular-british-style-2024-cv23', 'SIZE SELECTION CONSULTATION', 9999999999.99, 3000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:25', NULL, NULL, 3),
(35, 'wwwroot\\images\\products\\footwear_11.jpg', 'Denim-ICCLEK women\'s sandals High heel sandals Comfortable, Pretty, Beach, Elegant, Easy to coordinate, Lightweight FDL2410I18 3Z240117', 'Chanel', 'denim-icclek-women-s-sandals-high-heel-sandals-comfortable-pretty-beach-elegant-easy-to-coordinate-lightweight-fdl2410i18-3z240117', 'SIZE SELECTION CONSULTATION', 9999999999.99, 409, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:18', NULL, NULL, 3),
(36, 'wwwroot\\images\\products\\footwear_12.jpg', 'Denim-Comfortable ICCLEK 32zHD072410 slingback flip-flops for women', 'Prada', 'denim-comfortable-icclek-32zhd072410-slingback-flip-flops-for-women', 'SIZE SELECTION CONSULTATION', 5000000000.00, 509, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:11', NULL, NULL, 3),
(37, 'wwwroot\\images\\products\\dress_1.jpg', 'Louis vuitton-Baby girl Hanfu dress super fairy tale Chinese style spring and autumn little girl Ancient dress costume for summer children', 'Denim', 'louis-vuitton-baby-girl-hanfu-dress-super-fairy-tale-chinese-style-spring-and-autumn-little-girl-ancient-dress-costume-for-summer-children', 'SIZE SELECTION CONSULTATION', 9999999999.99, 506, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:11:04', NULL, NULL, 4),
(38, 'wwwroot\\images\\products\\dress_2.jpg', 'Louis vuitton-[Available Set of 3 Ancient Chinese Dance Costumes Classical Dance Costumes A198 - Tinh Nhi Dance Costumes', 'Louis vuitton', 'louis-vuitton-available-set-of-3-ancient-chinese-dance-costumes-classical-dance-costumes-a198-tinh-nhi-dance-costumes', 'SIZE SELECTION CONSULTATION', 4400000000.00, 2345, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:58', NULL, NULL, 4),
(39, 'wwwroot\\images\\products\\dress_3.jpg', 'Louis vuitton-Spring Summer 20 Fashion Short Sleeve Hanfu Dress for Women', 'Louis vuitton', 'louis-vuitton-spring-summer-20-fashion-short-sleeve-hanfu-dress-for-women', 'SIZE SELECTION CONSULTATION', 300000000.00, 3400, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:47', NULL, NULL, 4),
(40, 'wwwroot\\images\\products\\dress_4.jpg', 'Louis vuitton-Cute Ancient Chinese Han Suit Pants for Women 2022', 'Prada', 'louis-vuitton-cute-ancient-chinese-han-suit-pants-for-women-2022', 'SIZE SELECTION CONSULTATION', 9000000000.00, 5000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:33', NULL, NULL, 4),
(41, 'wwwroot\\images\\products\\dress_5.jpg', 'Louis vuitton-Innovative Hanfu Dress Long Pleated Printed Pattern Classic Chinese Style Figure Fashion Spring Summer 2023 New For Women Hanfu Dress', 'Chanel', 'louis-vuitton-innovative-hanfu-dress-long-pleated-printed-pattern-classic-chinese-style-figure-fashion-spring-summer-2023-new-for-women-hanfu-dress', 'SIZE SELECTION CONSULTATION', 7000000000.00, 7000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:24', NULL, NULL, 4),
(42, 'wwwroot\\images\\products\\dress_6.jpg', 'Louis vuitton-Innovative Hanfu Set with Short Sleeves Printed Autumn and Winter Fashion Patterns for Women', 'Calvin Klein', 'louis-vuitton-innovative-hanfu-set-with-short-sleeves-printed-autumn-and-winter-fashion-patterns-for-women', 'SIZE SELECTION CONSULTATION', 6300000000.00, 789, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:16', NULL, NULL, 4),
(43, 'wwwroot\\images\\products\\dress_7.jpg', 'Louis vuitton-New Chinese Style Short Sleeve Hanfu Dress for Women', 'Denim', 'louis-vuitton-new-chinese-style-short-sleeve-hanfu-dress-for-women', 'SIZE SELECTION CONSULTATION', 9999999999.99, 678, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:09', NULL, NULL, 4),
(44, 'wwwroot\\images\\products\\dress_8.jpg', 'Louis vuitton-Chinese Style Long-Sleeved Hanfu Dress Fall 2023', 'Denim', 'louis-vuitton-chinese-style-long-sleeved-hanfu-dress-fall-2023', 'SIZE SELECTION CONSULTATION', 9999999999.99, 567, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:10:02', NULL, NULL, 4),
(45, 'wwwroot\\images\\products\\dress_9.jpg', 'Louis vuitton-Reformed Hanfu Set Cross Collar Classic Chinese Style Fashion New Fall Winter 2023 Skirt Coordinate Set Youthful Design For', 'Calvin Klein', 'louis-vuitton-reformed-hanfu-set-cross-collar-classic-chinese-style-fashion-new-fall-winter-2023-skirt-coordinate-set-youthful-design-for', 'SIZE SELECTION CONSULTATION', 9999999999.99, 789, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:52', NULL, NULL, 4),
(46, 'wwwroot\\images\\products\\dress_10.jpg', 'Louis vuitton-Nian March Traditional Chinese Hanfu Set Standing Collar Long Embroidery Horse Style Modernized Chinese Hanfu Ming Made Design', 'Chanel', 'louis-vuitton-nian-march-traditional-chinese-hanfu-set-standing-collar-long-embroidery-horse-style-modernized-chinese-hanfu-ming-made-design', 'SIZE SELECTION CONSULTATION', 9999999999.99, 890, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:45', NULL, NULL, 4),
(47, 'wwwroot\\images\\products\\dress_11.jpg', 'Louis vuitton-Innovative Hanfu Dress Long Pleated Printed Pattern Classic Chinese Style Figure Fashion Spring Summer 2023 New For Women Hanfu Dress', 'Prada', 'louis-vuitton-innovative-hanfu-dress-long-pleated-printed-pattern-classic-chinese-style-figure-fashion-spring-summer-2023-new-for-women-hanfu-dress', 'SIZE SELECTION CONSULTATION', 9999999999.99, 900, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:12:42', NULL, NULL, 4),
(48, 'wwwroot\\images\\products\\dress_12.jpg', 'Louis vuitton-Set Shirt + Long Skirt Lovely Embroidery Pattern Fashion Spring Summer Outfits for Women', 'Louis vuitton', 'louis-vuitton-set-shirt-long-skirt-lovely-embroidery-pattern-fashion-spring-summer-outfits-for-women', 'SIZE SELECTION CONSULTATION', 9999999999.99, 800, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:21', NULL, NULL, 4),
(49, 'wwwroot\\images\\products\\jewerly_1.jpg', 'Calvin Klein-KYDOPAL silver bracelet with personalized stones, high-end Italian women\'s jewelry 925 - 9L2', 'Calvin Klein', 'calvin-klein-kydopal-silver-bracelet-with-personalized-stones-high-end-italian-women-s-jewelry-925-9l2', 'SIZE SELECTION CONSULTATION', 4400000000.00, 700, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:06:51', NULL, NULL, 5),
(50, 'wwwroot\\images\\products\\jewerly_2.jpg', 'Calvin Klein-Elegant Hollow Rabbit/Flower/Butterfly Earrings for Women', 'Calvin Klein', 'calvin-klein-elegant-hollow-rabbit-flower-butterfly-earrings-for-women', 'SIZE SELECTION CONSULTATION', 9999999999.99, 600, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:27', NULL, NULL, 5),
(51, 'wwwroot\\images\\products\\jewerly_3.jpg', 'Calvin Klein-Women\'s 925 silver fern leaf earrings studded with 5A Zircon stone, Korean style - JULIE JEWERLY', 'Prada', 'calvin-klein-women-s-925-silver-fern-leaf-earrings-studded-with-5a-zircon-stone-korean-style-julie-jewerly', 'SIZE SELECTION CONSULTATION', 20000000.00, 500, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:08:28', NULL, NULL, 5),
(52, 'wwwroot\\images\\products\\jewerly_4.jpg', 'Calvin Klein-Combo Necklaces, Earrings, Rings, Bangles High Quality Silver Polished Gold Stone Flower Shape - Pink Thai Jewerly', 'Denim', 'calvin-klein-combo-necklaces-earrings-rings-bangles-high-quality-silver-polished-gold-stone-flower-shape-pink-thai-jewerly', 'SIZE SELECTION CONSULTATION', 800000000.00, 3456, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:21', NULL, NULL, 5),
(53, 'wwwroot\\images\\products\\jewerly_5.jpg', 'Calvin Klein-king Elegant Ivory White Glass Imitation Freshwater Pearl Necklaces For Women Jewelry', 'Chanel', 'calvin-klein-king-elegant-ivory-white-glass-imitation-freshwater-pearl-necklaces-for-women-jewelry', 'SIZE SELECTION CONSULTATION', 9999999999.99, 4563, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:58', NULL, NULL, 5),
(54, 'wwwroot\\images\\products\\jewerly_6.jpg', 'Calvin Klein-Trendy fashion silver colorful pearl beads hoop earrings elegant crystal stud earrings for women jewerly accessories', 'Louis vuitton', 'calvin-klein-trendy-fashion-silver-colorful-pearl-beads-hoop-earrings-elegant-crystal-stud-earrings-for-women-jewerly-accessories', 'SIZE SELECTION CONSULTATION', 430000000.00, 2000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:47', NULL, NULL, 5),
(55, 'wwwroot\\images\\products\\jewerly_7.jpg', 'Calvin Klein-925 silver men\'s ring, studded with stones, large, thick - jewerly silver ', 'Prada', 'calvin-klein-925-silver-men-s-ring-studded-with-stones-large-thick-jewerly-silver-', 'SIZE SELECTION CONSULTATION', 650000000.00, 5000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:17', NULL, NULL, 5),
(56, 'wwwroot\\images\\products\\jewerly_8.jpg', 'Calvin Klein-925 silver men\'s ring, studded with stones, large, thick - jewerly silver', 'Chanel', 'calvin-klein-925-silver-men-s-ring-studded-with-stones-large-thick-jewerly-silver', 'SIZE SELECTION CONSULTATION', 700000000.00, 6000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:06:07', NULL, NULL, 5),
(57, 'wwwroot\\images\\products\\jewerly_9.jpg', 'Calvin Klein-Fashionable Simple Tulip / Pearl Pendant Silver Necklace for Women', 'Calvin Klein', 'calvin-klein-fashionable-simple-tulip-pearl-pendant-silver-necklace-for-women', 'SIZE SELECTION CONSULTATION', 300000000.00, 4000, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:33', NULL, NULL, 5),
(58, 'wwwroot\\images\\products\\jewerly_10.jpg', 'Calvin Klein-iF YOU Set of 3 pairs of fashionable butterfly heart-style silver-plated earrings for women', 'Louis vuitton', 'calvin-klein-if-you-set-of-3-pairs-of-fashionable-butterfly-heart-style-silver-plated-earrings-for-women', 'SIZE SELECTION CONSULTATION', 2000000000.00, 1890, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:08:04', NULL, NULL, 5),
(59, 'wwwroot\\images\\products\\jewerly_11.jpg', 'Calvin Klein-Set of 3 silver IF YOU earrings with simple design for women', 'Denim', 'calvin-klein-set-of-3-silver-if-you-earrings-with-simple-design-for-women', 'SIZE SELECTION CONSULTATION', 405000000.00, 4890, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:07:53', NULL, NULL, 5),
(60, 'wwwroot\\images\\products\\jewerly_12.jpg', 'Calvin Klein-Y2k Fashionable Heart/Butterfly Crystal Stone Pendant Necklace for Women', 'Denim', 'calvin-klein-y2k-fashionable-heart-butterfly-crystal-stone-pendant-necklace-for-women', 'SIZE SELECTION CONSULTATION', 6500000000.00, 3400, 1, '2024-01-01 02:22:12', 1, '2024-01-21 03:09:00', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `title`, `url`, `product_id`) VALUES
(1, 'clothes_1', 'wwwroot\\images\\products\\clothes_1.jpg', 1),
(2, 'clothes_2', 'wwwroot\\images\\products\\clothes_2.jpg', 2),
(3, 'clothes_3', 'wwwroot\\images\\products\\clothes_3.jpg', 3),
(4, 'clothes_4', 'wwwroot\\images\\products\\clothes_4.jpg', 4),
(5, 'clothes_5', 'wwwroot\\images\\products\\clothes_5.jpg', 5),
(6, 'clothes_6', 'wwwroot\\images\\products\\clothes_6.jpg', 6),
(7, 'clothes_7', 'wwwroot\\images\\products\\clothes_7.jpg', 7),
(8, 'clothes_8', 'wwwroot\\images\\products\\clothes_8.jpg', 8),
(9, 'clothes_9', 'wwwroot\\images\\products\\clothes_9.jpg', 9),
(10, 'clothes_10', 'wwwroot\\images\\products\\clothes_10.jpg', 10),
(11, 'clothes_11', 'wwwroot\\images\\products\\clothes_11.jpg', 11),
(12, 'clothes_12', 'wwwroot\\images\\products\\clothes_12.jpg', 12),
(13, 'hat_1', 'wwwroot\\images\\products\\hat_1.jpg', 13),
(14, 'hat_2', 'wwwroot\\images\\products\\hat_2.jpg', 14),
(15, 'hat_3', 'wwwroot\\images\\products\\hat_3.jpg', 15),
(16, 'hat_4', 'wwwroot\\images\\products\\hat_4.jpg', 16),
(17, 'hat_5', 'wwwroot\\images\\products\\hat_5.jpg', 17),
(18, 'hat_6', 'wwwroot\\images\\products\\hat_6.jpg', 18),
(19, 'hat_7', 'wwwroot\\images\\products\\hat_7.jpg', 19),
(20, 'hat_8', 'wwwroot\\images\\products\\hat_8.jpg', 20),
(21, 'hat_9', 'wwwroot\\images\\products\\hat_9.jpg', 21),
(22, 'hat_10', 'wwwroot\\images\\products\\hat_10.jpg', 22),
(23, 'hat_11', 'wwwroot\\images\\products\\hat_11.jpg', 23),
(24, 'hat_12', 'wwwroot\\images\\products\\hat_12.jpg', 24),
(25, 'footwear_1', 'wwwroot\\images\\products\\footwear_1.jpg', 25),
(26, 'footwear_2', 'wwwroot\\images\\products\\footwear_2.jpg', 26),
(27, 'footwear_3', 'wwwroot\\images\\products\\footwear_3.jpg', 27),
(28, 'footwear_4', 'wwwroot\\images\\products\\footwear_4.jpg', 28),
(29, 'footwear_5', 'wwwroot\\images\\products\\footwear_5.jpg', 29),
(30, 'footwear_6', 'wwwroot\\images\\products\\footwear_6.jpg', 30),
(31, 'footwear_7', 'wwwroot\\images\\products\\footwear_7.jpg', 31),
(32, 'footwear_8', 'wwwroot\\images\\products\\footwear_8.jpg', 32),
(33, 'footwear_9', 'wwwroot\\images\\products\\footwear_9.jpg', 33),
(34, 'footwear_10', 'wwwroot\\images\\products\\footwear_10.jpg', 34),
(35, 'footwear_11', 'wwwroot\\images\\products\\footwear_11.jpg', 35),
(36, 'footwear_12', 'wwwroot\\images\\products\\footwear_12.jpg', 36),
(37, 'dress_1', 'wwwroot\\images\\products\\dress_1.jpg', 37),
(38, 'dress_2', 'wwwroot\\images\\products\\dress_2.jpg', 38),
(39, 'dress_3', 'wwwroot\\images\\products\\dress_3.jpg', 39),
(40, 'dress_4', 'wwwroot\\images\\products\\dress_4.jpg', 40),
(41, 'dress_5', 'wwwroot\\images\\products\\dress_5.jpg', 41),
(42, 'dress_6', 'wwwroot\\images\\products\\dress_6.jpg', 42),
(43, 'dress_7', 'wwwroot\\images\\products\\dress_7.jpg', 43),
(44, 'dress_8', 'wwwroot\\images\\products\\dress_8.jpg', 44),
(45, 'dress_9', 'wwwroot\\images\\products\\dress_9.jpg', 45),
(46, 'dress_10', 'wwwroot\\images\\products\\dress_10.jpg', 46),
(47, 'dress_11', 'wwwroot\\images\\products\\dress_11.jpg', 47),
(48, 'dress_12', 'wwwroot\\images\\products\\dress_12.jpg', 48),
(49, 'jewerly_1', 'wwwroot\\images\\products\\jewerly_1.jpg', 49),
(50, 'jewerly_2', 'wwwroot\\images\\products\\jewerly_2.jpg', 50),
(51, 'jewerly_3', 'wwwroot\\images\\products\\jewerly_3.jpg', 51),
(52, 'jewerly_4', 'wwwroot\\images\\products\\jewerly_4.jpg', 52),
(53, 'jewerly_5', 'wwwroot\\images\\products\\jewerly_5.jpg', 53),
(54, 'jewerly_6', 'wwwroot\\images\\products\\jewerly_6.jpg', 54),
(55, 'jewerly_7', 'wwwroot\\images\\products\\jewerly_7.jpg', 55),
(56, 'jewerly_8', 'wwwroot\\images\\products\\jewerly_8.jpg', 56),
(57, 'jewerly_9', 'wwwroot\\images\\products\\jewerly_9.jpg', 57),
(58, 'jewerly_10', 'wwwroot\\images\\products\\jewerly_10.jpg', 58),
(59, 'jewerly_11', 'wwwroot\\images\\products\\jewerly_11.jpg', 59),
(60, 'jewerly_12', 'wwwroot\\images\\products\\jewerly_12.jpg', 60);

-- --------------------------------------------------------

--
-- Table structure for table `product_inventories`
--

CREATE TABLE `product_inventories` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_buyed` int(11) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_inventories`
--

INSERT INTO `product_inventories` (`id`, `quantity`, `quantity_buyed`, `size`, `color`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `product_id`) VALUES
(1, 90, 10, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:15:52', NULL, NULL, 1),
(2, 80, 20, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:02', NULL, NULL, 2),
(3, 70, 30, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:11', NULL, NULL, 3),
(4, 60, 40, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:18', NULL, NULL, 4),
(5, 100, 0, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:25', NULL, NULL, 5),
(6, 100, 0, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:35', NULL, NULL, 6),
(7, 90, 10, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:43', NULL, NULL, 7),
(8, 80, 20, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:51', NULL, NULL, 8),
(9, 70, 30, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:16:59', NULL, NULL, 9),
(10, 60, 40, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:08', NULL, NULL, 10),
(11, 100, 0, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:15', NULL, NULL, 11),
(12, 90, 10, 'S M L XL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:22', NULL, NULL, 12),
(13, 80, 20, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:32', NULL, NULL, 13),
(14, 70, 30, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:39', NULL, NULL, 14),
(15, 60, 40, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:46', NULL, NULL, 15),
(16, 100, 0, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:17:55', NULL, NULL, 16),
(17, 90, 10, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:18:03', NULL, NULL, 17),
(18, 80, 20, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:18:09', NULL, NULL, 18),
(19, 70, 30, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:18:21', NULL, NULL, 19),
(20, 60, 40, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:18:39', NULL, NULL, 20),
(21, 100, 0, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:18:48', NULL, NULL, 21),
(22, 90, 10, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:18:59', NULL, NULL, 22),
(23, 80, 0, NULL, '#6600FF #FF0033', 1, '2023-12-18 20:11:21', 1, '2024-01-21 03:19:07', NULL, NULL, 23),
(24, 32, 9, '', '#6600FF #FF0033', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:19:14', NULL, NULL, 24),
(25, 32, 8, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:19:23', NULL, NULL, 25),
(26, 45, 6, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:19:33', NULL, NULL, 26),
(27, 54, 4, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:19:40', NULL, NULL, 27),
(28, 56, 8, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:19:47', NULL, NULL, 28),
(29, 67, 0, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:12:06', NULL, NULL, 29),
(30, 76, 3, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:55', NULL, NULL, 30),
(31, 56, 45, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:48', NULL, NULL, 31),
(32, 88, 22, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:42', NULL, NULL, 32),
(33, 54, 32, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:33', NULL, NULL, 33),
(34, 67, 34, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:25', NULL, NULL, 34),
(35, 89, 43, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:18', NULL, NULL, 35),
(36, 90, 45, '36 37 38 39', '#FF9900 #00CCFF #FF0000', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:11', NULL, NULL, 36),
(37, 98, 34, 'M L XL XXL', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:11:05', NULL, NULL, 37),
(38, 76, 21, 'M L XL XXL', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:58', NULL, NULL, 38),
(39, 54, 31, 'M L XL XXL', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:47', NULL, NULL, 39),
(40, 34, 19, 'M L XL XXL', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:33', NULL, NULL, 40),
(41, 51, 17, 'M L XL XXL', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:24', NULL, NULL, 41),
(42, 23, 14, 'M L XL XXL', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:16', NULL, NULL, 42),
(43, 34, 13, 'S XS M L', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:09', NULL, NULL, 43),
(44, 23, 11, 'S XS M L', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:10:02', NULL, NULL, 44),
(45, 24, 22, 'S XS M L', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:09:52', NULL, NULL, 45),
(46, 25, 33, 'S XS M L', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:09:45', NULL, NULL, 46),
(47, 54, 66, 'S XS M L', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:12:42', NULL, NULL, 47),
(48, 56, 45, 'S XS M L', '#0099FF #FF3333 #FFCC33', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:09:21', NULL, NULL, 48),
(49, 56, 31, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:06:51', NULL, NULL, 49),
(50, 76, 31, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:07:27', NULL, NULL, 50),
(51, 78, 23, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-22 02:22:12', 1, '2024-01-21 03:08:28', NULL, NULL, 51),
(52, 87, 24, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:07:21', NULL, NULL, 52),
(53, 89, 24, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:07:58', NULL, NULL, 53),
(54, 97, 23, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:07:47', NULL, NULL, 54),
(55, 78, 12, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:07:17', NULL, NULL, 55),
(56, 76, 12, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:06:07', NULL, NULL, 56),
(57, 65, 22, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:07:33', NULL, NULL, 57),
(58, 55, 32, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:08:04', NULL, NULL, 58),
(59, 78, 22, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:07:53', NULL, NULL, 59),
(60, 88, 21, NULL, '#FF9999 #00CC33 #000044', NULL, '2023-12-19 02:32:22', 1, '2024-01-21 03:09:00', NULL, NULL, 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'admin', 'universe@gmail.com', 'Admin@123', 'admin', 1, '2024-01-01 02:22:12', NULL, NULL, NULL, NULL),
(2, 'Tinh', 'tinh.tran@gmail.com', 'Tinh@123', 'user', 1, '2024-01-01 02:22:12', NULL, NULL, NULL, NULL),
(3, 'Nhung', 'nhung.phan@gmail.com', 'Nhung@123', 'user', 1, '2024-01-01 02:22:12', NULL, NULL, NULL, NULL),
(4, 'Nhi', 'nhi.tuong@gmail.com', 'Nhi@123', 'user', 1, '2024-01-01 02:22:12', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `server_name` varchar(255) DEFAULT NULL,
  `visit_date` datetime DEFAULT NULL,
  `visit_counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access`
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1380;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD CONSTRAINT `product_inventories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
