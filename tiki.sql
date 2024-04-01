-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th4 01, 2024 lúc 02:27 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tiki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` bigint(225) DEFAULT NULL,
  `status` varchar(50) DEFAULT '0',
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `productid`, `userid`, `status`, `date`) VALUES
(74, 1, 987654321, '1', '2024-04-01 18:41:56'),
(75, 2, 987654321, '1', '2024-04-01 18:42:04'),
(76, 3, 987654321, '0', '2024-04-01 18:42:11'),
(77, 1, 1323123123123123, '1', '2024-04-01 19:01:06'),
(78, 1, 4234234234, '1', '2024-04-01 19:05:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `price`, `commission`, `product_code`) VALUES
(1, 'https://tafr1b.com//upload/914bf0f18ab4a869/ea2899260faab9d3.png', ' Houseeker Phễu Đựng Gel Mini Bằng Silicon Cho Nhà Bếp Đồ Dùng Nấu Ăn Có Thể Thu Gọn Sản Phẩm Hữu Ích Nhà Bếp ', 7830.00, 1174.00, ' SH2404010927396588 '),
(2, 'https://tafr1b.com//upload/3311a0b065a9d7a0/7d49959cc984e049.png', ' Houseeker Khuôn Silicon Hoạt Hình Khuôn Cắt Bánh Quy Sô Cô La Khuôn Làm Bánh Kẹo Mềm Tổ Ong Dụng Cụ Trang Trí Dụng Cụ Làm Đá Dụng Cụ Làm Đường Nho ', 11713.00, 1757.00, ' SH2403201937389086'),
(3, 'https://tafr1b.com//upload/3ff53f4b8d31c96b/e970da55e1b0c33f.png', ' váy yếm lụa dáng dài 3 màu xinh xắn ', 89000.00, 13350.00, '  SH2404010946574000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `phone` bigint(225) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT 30000.00,
  `name` varchar(255) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `phone`, `password`, `balance`, `name`, `account_number`, `bank_name`) VALUES
(4, 987654321, '0987654321', 32931.00, NULL, NULL, NULL),
(5, 1323123123123123, '1323123123123123', 31174.00, NULL, NULL, NULL),
(6, 4234234234, '4234234234', 31174.00, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
