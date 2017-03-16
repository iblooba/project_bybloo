-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 09:40 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(30) NOT NULL,
  `contract_id` int(13) NOT NULL,
  `OrderNoCreate` varchar(30) NOT NULL,
  `hashCreate` varchar(250) NOT NULL,
  `DateCreate` text NOT NULL,
  `OrderNoCofirm` int(13) NOT NULL,
  `hashConfirm` varchar(250) NOT NULL,
  `DateConfirm` text NOT NULL,
  `ContractAddress` varchar(250) DEFAULT NULL COMMENT 'ข้อมูลที่ได้จาก return api',
  `Total` double NOT NULL,
  `PaymentTerm` int(5) NOT NULL,
  `OrderDateTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่ทำรายการ',
  `ConfirmDateTime` text COMMENT 'วันที่ลูกค้า แจ้งได้สินค้าเรียบร้อย',
  `buyer` varchar(250) NOT NULL,
  `seller` varchar(250) NOT NULL,
  `Status` varchar(2) NOT NULL COMMENT 'สถานะของแต่ละออเดอร์',
  `users_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `contract_id`, `OrderNoCreate`, `hashCreate`, `DateCreate`, `OrderNoCofirm`, `hashConfirm`, `DateConfirm`, `ContractAddress`, `Total`, `PaymentTerm`, `OrderDateTime`, `ConfirmDateTime`, `buyer`, `seller`, `Status`, `users_id`) VALUES
(3, 6, '9', '0x9acd2985ded5db97e5b179401dea973094c63de34726379bba938f8a964135bb', '0000-00-00 00:00:00', 0, '', '', '0x78092864921d9c5939fdfa340c66548f377b8f3f', 1200, 2, '2017-03-09 09:39:53', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'CP', 3),
(5, 8, '12', '0x83b534f012b1fc120a8321068ca2422a87d3b5940c3a5c53e379386cafe7e4bb', '0000-00-00 00:00:00', 0, '', '', '', 1000, 10, '2017-03-09 09:39:58', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(6, 11, '15', '0x86e1b4ef27e96369dd0c1905761d0e9d8b4e27f08e435e4504227a17c6cfff16', '0000-00-00 00:00:00', 0, '', '', '', 1000, 10, '2017-03-09 09:40:01', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(7, 11, '15', '0x86e1b4ef27e96369dd0c1905761d0e9d8b4e27f08e435e4504227a17c6cfff16', '0000-00-00 00:00:00', 0, '', '', '', 1200, 2, '2017-03-09 09:40:04', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(8, 12, '16', '0xf52662caa273510856bdfca7ba7db563ce5c56284f9ff2e2e60e7e2fb030683d', '0000-00-00 00:00:00', 0, '', '', '', 1200, 2, '2017-03-09 09:40:07', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(9, 15, '19', '0x05601c450909256ead1d4fb62402c921b6835b1f597b795ffe6d1c5e531f200f', '0000-00-00 00:00:00', 0, '', '', '0x0f4949aa8c05801886d3bf58f61e3b2d6d896013', 1200, 12, '2017-03-10 05:07:44', '2017-03-10 05:07:23', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'CP', 3),
(13, 23, '33', '0xc2f033864f4bb4c6794856bb3cde43a1d97e1b2d0dbe31b59cbd0c3d51c2843e', '0000-00-00 00:00:00', 0, '', '', '', 1200, 12, '2017-03-13 03:54:08', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(14, 24, '34', '0xc2f033864f4bb4c6794856bb3cde43a1d97e1b2d0dbe31b59cbd0c3d51c2843e', '0000-00-00 00:00:00', 0, '', '', '', 2400, 2, '2017-03-13 08:32:31', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(16, 24, '34', '0xa3d9df4e13461517890f96f5b93c77b891dd9d2fbb476c84a43ae7c00ce4f0d3', '0000-00-00 00:00:00', 0, '', '', '', 2400, 2, '2017-03-13 08:33:49', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(17, 25, '36', '0x0eb28f0e86daf9c38a7d1a494b0940dcc55e1af798beb80adc0fc9971243a7a0', '0000-00-00 00:00:00', 0, '', '', '0x186753493a4bfb7456b3bad535df65701ea80d9f', 1500, 2, '2017-03-14 07:53:57', '2017-03-14 07:53:57', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'CP', 3),
(18, 26, '38', '0xa2bb66083298791a13c0452227d93770372a86f833fc2459a35f04add4e2356a', '2017-03-14 11:12:45', 39, '0xdbfa3232a620002025faa15eb0c841ac4ace7970edb7cbf6b18bcdbba1c74ae6', '2017-03-14 11:24:10', '0x9e63e4fb07c87cedbb04e92408104f8acce65ef4', 2400, 12, '2017-03-14 11:29:09', '2017-03-14 11:29:09', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'CP', 3),
(19, 27, '40', '0x2c43dcc70378b28f597e7bd442bbf23ac894c90d7e68e8b20fd812a1aa5b8c3a', '2017-03-15 04:38:21', 0, '', '', '', 1200, 12, '2017-03-15 04:38:31', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(20, 28, '41', '0x7be4d85134f1c3fbecbc534e92d092d6e6c55c0bc3f4a6b324aab1b0b8e24ce4', '2017-03-15 05:49:59', 0, '', '', NULL, 1300, 13, '2017-03-15 05:49:59', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(21, 29, '43', '0xdb9fb641703430d83a5b96507c13c7903835b179f7cd377b9bd178b6048f4cb4', '2017-03-15 07:51:04', 0, '', '', NULL, 1300, 12, '2017-03-15 07:51:04', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(22, 30, '45', '0x044eeed4d53980ea4ba7828d348702c0a5e91d5d4840b98aa70e295be3151f25', '2017-03-15 07:53:03', 0, '', '', NULL, 11000, 11, '2017-03-15 07:53:03', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3),
(23, 31, '47', '0xa147f55ed6d540f55fb38bb0f317c755d1c2e7e33d99564c1ffc2204c59d73a9', '2017-03-15 07:55:29', 0, '', '', NULL, 1350, 11, '2017-03-15 07:55:29', '', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '63669e20b25256a9767339a0fb7a54768218004f', 'WA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `ShopID` int(13) NOT NULL,
  `id` int(10) NOT NULL,
  `Shopname` varchar(250) NOT NULL,
  `ShopContract` varchar(250) NOT NULL,
  `seller` varchar(250) NOT NULL,
  `ShopRate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`ShopID`, `id`, `Shopname`, `ShopContract`, `seller`, `ShopRate`) VALUES
(1, 3, 'Shop A', '63669e20b25256a9767339a0fb7a54768218004f', '63669e20b25256a9767339a0fb7a54768218004f', 4),
(2, 2, 'Shop B', '4bfbc331ba5f1ab37bf266c3289a7de2c5a17196', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(13) NOT NULL,
  `name` varchar(2) NOT NULL,
  `detail` varchar(450) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `detail`, `update`) VALUES
(1, 'CP', 'COMPLETE [รายการที่ สำเร็จ ]', '2017-03-01 05:13:20'),
(2, 'WA', 'On Process [ รายการ รอลูกค้า คอนเฟิร์ม ]', '2017-03-01 05:14:44'),
(3, 'HO', 'Hold [ รายการที่ต้องรอตรวจสอบ ]', '2017-03-01 05:14:44'),
(4, 'NS', 'No Complete [ รายการที่ไม่สำเร็จ ]', '2017-03-01 05:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'blooba', 'test@gmail.com', '$2y$10$.7mE/MMywKsEaRngvjxAY.jrubtV9EpO4CLTuLOlF81HOAy6nCKcq', NULL, '2017-02-14 21:23:48', '2017-02-14 21:23:48'),
(2, 'test13579', 't13579@hotmail.com', '$2y$10$jy1KeIlsv87gS2gkVEeJ3u80KbhYXM0cVu4SksOoCBsAdkMROW1Uy', 'MAmzZOAqSKwARgG4ibTXSrXOx6M8CsS4LM8ekWB65mnDP8ALt2exe9LRA51B', '2017-02-26 20:31:48', '2017-02-26 20:31:48'),
(3, 'blooka', 'bloo.chi.chi@gmail.com', '$2y$10$oan.5dD7oSYD0n/roDGx8uKC6HN61T76S0t7.5TcQIMD7zS4ZQrvu', 'RFdtrqTurMndR6iMReJM5Sk8d631ZYctleC6vLaV3eJ3JvOQbE8BqVsrlCbK', '2017-03-02 21:38:53', '2017-03-02 21:38:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`ShopID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `ShopID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
