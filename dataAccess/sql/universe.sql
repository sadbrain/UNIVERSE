drop database universe;
CREATE DATABASE IF NOT EXISTS UNIVERSE;
use universe;
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2024 lúc 02:56 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `universe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
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
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'clothes', 'clothes', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:20', NULL, NULL),
(2, 'hat', 'hat', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:22', NULL, NULL),
(3, 'footwear', 'footwear', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:23', NULL, NULL),
(4, 'dress', 'dress', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:26', NULL, NULL),
(5, 'jewelry', 'jewelry', NULL, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discounts`
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
-- Đang đổ dữ liệu cho bảng `discounts`
--

INSERT INTO `discounts` (`id`, `discount_price`, `discount_from`, `discount_to`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `product_id`) VALUES
(1, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:22:12', NULL, NULL, 1),
(2, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:24:24', NULL, NULL, 2),
(3, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:24:29', NULL, NULL, 3),
(4, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:24:32', NULL, NULL, 4),
(5, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:25:29', NULL, NULL, 5),
(6, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:25:33', NULL, NULL, 6),
(7, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:25:39', NULL, NULL, 7),
(8, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:25:44', NULL, NULL, 8),
(9, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:25:48', NULL, NULL, 9),
(10, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:26:19', NULL, NULL, 10),
(11, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:25:56', NULL, NULL, 11),
(12, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:26:28', NULL, NULL, 12),
(13, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:26:50', NULL, NULL, 13),
(14, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:27:05', NULL, NULL, 14),
(15, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:26:39', NULL, NULL, 15),
(16, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:26:34', NULL, NULL, 16),
(17, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:25:07', NULL, NULL, 17),
(18, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:25:02', NULL, NULL, 18),
(19, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:24:57', NULL, NULL, 19),
(20, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:24:52', NULL, NULL, 20),
(21, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:24:48', NULL, NULL, 21),
(22, 0.00, NULL, NULL, NULL, NULL, 1, '2024-01-01 02:24:44', NULL, NULL, 22),
(23, 50.00, '2023-12-18 20:11:21', '2024-01-30 20:11:21', NULL, NULL, 1, '2024-01-01 02:24:40', NULL, NULL, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `expiry` varchar(255) DEFAULT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `thumbnail`, `name`, `brand`, `slug`, `description`, `price`, `rating`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `category_id`) VALUES
(1, 'wwwroot/images/products/dày_dép_1.jfif', '[Available] Women\'s School Shoes Korean Style Beige High Sole Canvas Shoes', 'Chanel', '-co-san-giay-nu-di-hoc-giay-vai-de-cao-mau-be-phong-cach-han', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 300000.00, 1000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:22:12', NULL, NULL, 3),
(2, 'wwwroot/images/products/dày_dép_2.jfif', '[Available] Ultralight Smiley Face School Slippers', 'Prada', '-co-san-dep-di-hoc-sieu-nhe-hinh-mat-cuoi', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 2000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:24', NULL, NULL, 3),
(3, 'wwwroot/images/products/dày_dép_3.jfif', 'Women\'s 5cm padded sneakers with flat sole increase the height of walkable canvas fabric', 'Denim', 'giay-the-thao-don-de-nu-5cm-de-bang-tang-chieu-cao-vai-canvas-di-duoc', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 3000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:29', NULL, NULL, 3),
(4, 'wwwroot/images/products/dày_dép_4.jfif', 'Women\'s Fashionable Soft Thick Sole Flip-flops', 'Louis vuitton', 'dep-xo-ngon-de-day-mem-mai-thoi-trang-cho-nu-', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 4000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:32', NULL, NULL, 3),
(5, 'wwwroot/images/products/dày_dép_5.jfif', 'Round rope sports heeled shoes can be worn 2 ways, 2 in', 'Calvin Klein', '-giay-dam-got-the-thao-day-thung-tron-di-duoc-2-kieu-2-trong', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 700000.00, 5000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:29', NULL, NULL, 3),
(6, 'wwwroot/images/products/dày _dép_6.jfif', 'Shoe 1', 'Chanel', 'day-dep-1', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 6000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:33', NULL, NULL, 3),
(7, 'wwwroot/images/products/dày_dép_7.jfif', 'Shoe 2', 'Calvin Klein', 'day-dep-2', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 5000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:39', NULL, NULL, 3),
(8, 'wwwroot/images/products/mũ_3.jfif', 'Korean style retro bucket fleece hat to keep warm in autumn and winter 1', 'Calvin Klein', 'mu-long-cuu-bucket-retro-phong-cach-han-quoc-giu-am-thu-don-1', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 3000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:44', NULL, NULL, 2),
(9, 'wwwroot/images/products/mũ_5.jfif', 'Men\'s and women\'s baseball caps - hats embroidered with LA logo, soft and smooth khaki sports', 'Chanel', 'mu-luoi-trai-nam-nu-non-ket-theu-logo-la-the-thao-kaki-mem-min', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 300000.00, 3000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:48', NULL, NULL, 2),
(10, 'wwwroot/images/products/mũ_4.jfif', '[Real photo] Jeans bucket hat with beautiful embroidered print on both sides with the word dioo', 'Louis vuitton', '-anh-that-mu-bucket-vai-jeans-in-theu-2-mat-chu-dioo-cuc-dep', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 700000.00, 2000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:19', NULL, NULL, 2),
(11, 'wwwroot/images/products/mũ_1.jfif', 'Men\'s and women\'s baseball caps - hats embroidered with LA logo, soft and smooth khaki sports', 'Prada', 'mu-luoi-trai-nam-nu-non-ket-theu-logo-la-the-thao-kaki-mem-min', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 1000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:56', NULL, NULL, 2),
(12, 'wwwroot/images/products/mũ_2.jfif', 'Hat 5', 'Denim', 'mu-5', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 2500, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:28', NULL, NULL, 2),
(13, 'wwwroot/images/products/mũ_6.jfif', 'Hat 6', 'Louis vuitton', 'mu-6', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 300000.00, 3000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:50', NULL, NULL, 2),
(14, 'wwwroot/images/products/mũ_7.jfif', 'Hat 7', 'Chanel', 'mu-7', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 4000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:05', NULL, NULL, 2),
(15, 'wwwroot/images/products/mũ_8.jfif', 'Hat 8', 'Calvin Klein', 'mu-8', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 800000.00, 7000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:39', NULL, NULL, 2),
(16, 'wwwroot/images/products/quần_áo_1.jfif', 'Set of DVGIT Women\'s Long Fleece Clothes with Elastic Waistband', 'Calvin Klein', 'set-bo-quan-ao-ni-dai-nu-bo-chun-gau-dvgit-cap-chun-co-gan', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 900000.00, 8000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:34', NULL, NULL, 1),
(17, 'wwwroot/images/products/quần_áo_3.jfif', 'Luxurious party outfit set, women\'s set of crop top with cotton sleeves', 'Denim', 'set-ao-quan-du-tiec-sang-chanh-set-do-nu-ao-croptop-tay-bong-bo', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 100000.00, 9000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:07', NULL, NULL, 1),
(18, 'wwwroot/images/products/quần_áo_4.jfif', 'Milk carton sweatshirt set + black bomb pants, home wear set, shirt', 'Prada', 'set-bo-ao-ni-hop-sua-quan-bom-den-set-bo-mac-o-nha-ao', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 900000.00, 1000, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:02', NULL, NULL, 1),
(19, 'wwwroot/images/products/quần_áo_6.jfif', 'Set of vest and rough shirt with stylish pleated skirt', 'Chanel', 'set-ao-khoac-gile-mix-ao-so-mi-tho-kem-chan-vay-xep-ly-phong-cach', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 800000.00, 200, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:57', NULL, NULL, 1),
(20, 'wwwroot/images/products/quần_áo_2.jfif', 'Set of clothes 5', 'Prada', 'set-quan-ao-5', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 700000.00, 300, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:52', NULL, NULL, 1),
(21, 'wwwroot/images/products/quần_áo_5.jfif', 'Set of clothes 6', 'Denim', 'set-quan-ao-6', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 600000.00, 400, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:48', NULL, NULL, 1),
(22, 'wwwroot/images/products/quần_áo_7.jfif', 'Set of clothes 7', 'Calvin Klein', 'set-quan-ao-7', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 500000.00, 500, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:44', NULL, NULL, 1),
(23, 'wwwroot/images/products/quần_áo_8.jfif', 'Set of clothes 8', 'Louis vuitton', 'set-quan-ao-8', 'SIZE SELECTION CONSULTATION\n  Sandals are the right size, because the size is twin, it cannot fit all feet, you should choose according to your personal sandal wearing habits.\n \n  Sandal sole is about 3.5cm thick (measured by hand).\n  The sole is anti-slip, made of first-class environmentally friendly EVA material. Sandals are very hot. If you like the color or size, order it so you don\'t run out of color or size. Because it\'s a twin size, it may be looser or tighter than your tiny feet, so you can choose based on your personal preference for loose or tight fits.', 400000.00, 600, 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:40', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `title`, `url`, `product_id`) VALUES
(1, 'dày dép 1', 'wwwroot/images/products/dày_dép_1.jfif', 1),
(2, 'dày dép 2', 'wwwroot/images/products/dày_dép_2.jfif', 2),
(3, 'dày dép 3', 'wwwroot/images/products/dày_dép_3.jfif', 3),
(4, 'dày dép 4', 'wwwroot/images/products/dày_dép_4.jfif', 4),
(5, 'dày dép 5', 'wwwroot/images/products/dày_dép_5.jfif', 5),
(6, 'dày dép 6', 'wwwroot/images/products/dày_dép_6.jfif', 6),
(7, 'dày dép 7', 'wwwroot/images/products/dày_dép_7.jfif', 7),
(8, 'mũ 3', 'wwwroot/images/products/mũ_3.jfif', 8),
(9, 'mũ 5', 'wwwroot/images/products/mũ_5.jfif', 9),
(10, 'mũ 4', 'wwwroot/images/products/mũ_4.jfif', 10),
(11, 'mũ 1', 'wwwroot/images/products/mũ_1.jfif', 11),
(12, 'mũ 2', 'wwwroot/images/products/mũ_2.jfif', 12),
(13, 'mũ 6', 'wwwroot/images/products/mũ_6.jfif', 13),
(14, 'mũ 7', 'wwwroot/images/products/mũ_7.jfif', 14),
(15, 'mũ 8', 'wwwroot/images/products/mũ_8.jfif', 15),
(16, 'quần áo 1', 'wwwroot/images/products/quần_áo_1.jfif', 16),
(17, 'quần áo 3', 'wwwroot/images/products/quần_áo_3.jfif', 17),
(18, 'quần áo 4', 'wwwroot/images/products/quần_áo_4.jfif', 18),
(19, 'quần áo 6', 'wwwroot/images/products/quần_áo_6.jfif', 19),
(20, 'quần áo 2', 'wwwroot/images/products/quần_áo_2.jfif', 20),
(21, 'quần áo 5', 'wwwroot/images/products/quần_áo_5.jfif', 21),
(22, 'quần áo 7', 'wwwroot/images/products/quần_áo_7.jfif', 22),
(23, 'quần áo 8', 'wwwroot/images/products/quần_áo_8.jfif', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_inventories`
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
-- Đang đổ dữ liệu cho bảng `product_inventories`
--

INSERT INTO `product_inventories` (`id`, `quantity`, `quantity_buyed`, `size`, `color`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `product_id`) VALUES
(1, 90, 10, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:22:12', NULL, NULL, 1),
(2, 80, 20, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:24', NULL, NULL, 2),
(3, 70, 30, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:29', NULL, NULL, 3),
(4, 60, 40, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:32', NULL, NULL, 4),
(5, 100, 0, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:29', NULL, NULL, 5),
(6, 100, 0, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:33', NULL, NULL, 6),
(7, 90, 10, '37 38 39 40', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:39', NULL, NULL, 7),
(8, 80, 20, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:44', NULL, NULL, 8),
(9, 70, 30, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:48', NULL, NULL, 9),
(10, 60, 40, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:19', NULL, NULL, 10),
(11, 100, 0, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:56', NULL, NULL, 11),
(12, 90, 10, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:28', NULL, NULL, 12),
(13, 80, 20, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:50', NULL, NULL, 13),
(14, 70, 30, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:27:05', NULL, NULL, 14),
(15, 60, 40, NULL, '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:39', NULL, NULL, 15),
(16, 100, 0, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:26:34', NULL, NULL, 16),
(17, 90, 10, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:07', NULL, NULL, 17),
(18, 80, 20, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:25:02', NULL, NULL, 18),
(19, 70, 30, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:57', NULL, NULL, 19),
(20, 60, 40, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:52', NULL, NULL, 20),
(21, 100, 0, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:48', NULL, NULL, 21),
(22, 90, 10, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:44', NULL, NULL, 22),
(23, 80, 20, 'M L XL XXL', '#fff #000', 1, '2023-12-18 20:11:21', 1, '2024-01-01 02:24:40', NULL, NULL, 23);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD CONSTRAINT `product_inventories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '1');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '2');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '4');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '3');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '5');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '6');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '7');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '8');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '9');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '23');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '22');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '21');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '20');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '19');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '18');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '17');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '16');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '15');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '14');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '13');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '12');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '11');
UPDATE `universe`.`products` SET `created_at` = '2024-01-01 02:22:12' WHERE (`id` = '10');

create table if not exists users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100),
    email varchar(255),
    `password` varchar(255),
    role enum("user","admin"),
    created_by int,
    created_at datetime,
	updated_by int,
    updated_at datetime,
	deleted_by int,
    deleted_at datetime
);
INSERT INTO `universe`.`users` (`name`, `email`, `password`, `role`, `created_by`, `created_at`) VALUES ('admin', 'universe@gmail.com', 'Admin@123', 'admin', '1', '2024-01-01 02:22:12');
INSERT INTO `universe`.`users` (`name`, `email`, `password`, `role`, `created_by`, `created_at`) VALUES ('Tinh', 'tinh.tran@gmail.com', 'Tinh@123', 'user', '1', '2024-01-01 02:22:12');
INSERT INTO `universe`.`users` (`name`, `email`, `password`, `role`, `created_by`, `created_at`) VALUES ('Nhung', 'nhung.phan@gmail.com', 'Nhung@123', 'user', '1', '2024-01-01 02:22:12');
INSERT INTO `universe`.`users` (`name`, `email`, `password`, `role`, `created_by`, `created_at`) VALUES ('Nhi', 'nhi.tuong@gmail.com', 'Nhi@123', 'user', '1', '2024-01-01 02:22:12');

INSERT INTO `universe`.`orders` (`id`, `buyer_name`, `buyer_email`, `buyer_phone`, `buyer_address`, `total`, `shipping_cost`, `created_at`, `status`) VALUES ('1', 'Tinh', 'tinh.tran@gmail.com', '03535312321', '99 Le Huu Trac', '180000', '30000', '2024-01-01 02:22:12', 'DONE');
INSERT INTO `universe`.`orders` (`id`, `buyer_name`, `buyer_email`, `buyer_phone`, `buyer_address`, `total`, `shipping_cost`, `created_at`, `status`) VALUES ('2', 'Nhung', 'nhung.phan@gmail.com', '03535312321', '99 Le Huu Trac', '230000', '30000', '2024-01-01 02:22:12', 'ON_DELIVERY');
INSERT INTO `universe`.`orders` (`id`, `buyer_name`, `buyer_email`, `buyer_phone`, `buyer_address`, `total`, `shipping_cost`, `created_at`, `status`) VALUES ('3', 'Nhi', 'nhi.tuong@gmail.com', '03535312321', '99 Le Huu Trac', '330000', '30000', '2024-01-01 02:22:12', 'CANCEL');

INSERT INTO `universe`.`order_details` (`id`, `product_name`, `product_quantity`, `product_price`, `product_discount_price`, `product_color`, `product_size`, `product_id`, `order_id`) VALUES ('1', '[Available] Women\'s School Shoes Korean Style Beige High Sole Canvas Shoes', '1', '300000.00', '50', '#fff', '37', '1', '1');
INSERT INTO `universe`.`order_details` (`id`, `product_name`, `product_quantity`, `product_price`, `product_color`, `product_size`, `product_id`, `order_id`) VALUES ('2', '[Available] Ultralight Smiley Face School Slippers', '1', '400000', '#fff', '37', '2', '2');
INSERT INTO `universe`.`order_details` (`id`, `product_name`, `product_quantity`, `product_price`, `product_discount_price`, `product_color`, `product_size`, `product_id`, `order_id`) VALUES ('3', 'Women\'s 5cm padded sneakers with flat sole increase the height of walkable canvas fabric', '1', '500000.00', '50', '#fff', '37', '3', '3');

create table if not exists user_access(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(255),
    user_agent varchar(255),
    server_name varchar(255),
    visit_date datetime,
    visit_counter int
);