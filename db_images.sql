-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2022 lúc 01:56 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `facebook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_images`
--

CREATE TABLE `db_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_images`
--

INSERT INTO `db_images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'Screenshot (21).png', '2022-01-02 20:07:36', '1'),
(2, 'Screenshot (22).png', '2022-01-02 20:40:53', '1'),
(3, 'Screenshot (18).png', '2022-01-02 20:41:48', '1'),
(4, 'Screenshot (2).png', '2022-01-03 13:39:43', '1'),
(5, 'Screenshot (3).png', '2022-01-03 14:12:47', '1'),
(6, 'Screenshot (102).png', '2022-01-03 14:27:18', '1'),
(7, 'Screenshot (158).png', '2022-01-03 14:38:49', '1'),
(8, 'Screenshot (156).png', '2022-01-03 14:40:07', '1'),
(9, 'Screenshot (175).png', '2022-01-03 15:25:39', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_images`
--
ALTER TABLE `db_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_images`
--
ALTER TABLE `db_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
