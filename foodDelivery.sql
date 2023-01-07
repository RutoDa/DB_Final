-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： mysql:3306
-- 產生時間： 2023 年 01 月 07 日 05:34
-- 伺服器版本： 8.0.30
-- PHP 版本： 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `foodDelivery`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL,
  `real_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`customer_id`, `real_name`, `phone`) VALUES
(1, '李昱佑', '0987878787'),
(13, '謝孟澔', '098786542'),
(14, '陳大明', '098786567'),
(15, '劉大衛', '099777788');

-- --------------------------------------------------------

--
-- 資料表結構 `customer_account`
--

CREATE TABLE `customer_account` (
  `customer_id` int NOT NULL,
  `account` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `customer_account`
--

INSERT INTO `customer_account` (`customer_id`, `account`, `password`) VALUES
(1, 'uu', 'uu'),
(13, 'hao123', 'hao123456'),
(14, 'a123', 'a123456'),
(15, 'b123', 'b123456');

-- --------------------------------------------------------

--
-- 資料表結構 `deliver`
--

CREATE TABLE `deliver` (
  `deliver_id` int NOT NULL,
  `real_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `deliver`
--

INSERT INTO `deliver` (`deliver_id`, `real_name`, `phone`) VALUES
(1, '王大明', '091212121'),
(2, '李大明', '098786543'),
(3, '吳大右', '057777777'),
(4, '吳大左', '057777777');

-- --------------------------------------------------------

--
-- 資料表結構 `deliver_account`
--

CREATE TABLE `deliver_account` (
  `deliver_id` int NOT NULL,
  `account` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `deliver_account`
--

INSERT INTO `deliver_account` (`deliver_id`, `account`, `password`) VALUES
(1, 'wang', 'wang'),
(2, 'lee123', 'lee123456'),
(3, 'wu123', 'wu123456'),
(4, 'wu456', 'wu123456');

-- --------------------------------------------------------

--
-- 資料表結構 `order_`
--

CREATE TABLE `order_` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `provider_id` int NOT NULL,
  `deliver_id` int DEFAULT NULL,
  `delivery_addr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int NOT NULL,
  `status` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `memo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `order_`
--

INSERT INTO `order_` (`order_id`, `customer_id`, `provider_id`, `deliver_id`, `delivery_addr`, `total_price`, `status`, `date`, `memo`) VALUES
(1, 1, 1, 1, '嘉大市資工路123號', 100, 2, '2023-01-01 16:57:35', 'hi'),
(4, 1, 1, NULL, '', 520, 3, '2023-01-01 17:19:25', '321'),
(8, 1, 6, NULL, '嘉大市理工區電機路123號', 89, 2, '2023-01-02 04:45:43', '我的麥香雞要香！！'),
(9, 1, 1, 1, '嘉大市理工區電機路3號', 515, 3, '2023-01-02 07:17:59', '不要放香菜！'),
(10, 1, 6, 1, '嘉大市理工區電機路', 135, 3, '2023-01-02 07:36:16', ''),
(12, 13, 7, 1, '嘉大市理工區電機路2號', 650, 3, '2023-01-06 08:37:34', '');

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `count`) VALUES
(1, 1, 1),
(4, 1, 1),
(4, 6, 0),
(4, 7, 2),
(4, 8, 3),
(4, 9, 0),
(8, 5, 1),
(8, 6, 2),
(9, 1, 2),
(9, 8, 2),
(9, 9, 1),
(10, 3, 2),
(10, 5, 1),
(12, 10, 2),
(12, 11, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` int NOT NULL,
  `price` int NOT NULL,
  `last_edit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `provider_id`, `price`, `last_edit_date`, `description`) VALUES
(1, '牛肉麵', 1, 120, '2023-01-01 00:00:00', '超級無敵好吃的牛肉麵！！'),
(3, '薯條', 6, 40, '2023-01-01 15:30:27', '用油炸過的哦！不是用煎的薯條！！!'),
(5, '麥香雞', 6, 55, '2023-01-01 15:32:52', '看起來雖然跟早餐店的沒兩樣，但或許你會喜歡！！'),
(6, '可樂', 6, 17, '2023-01-01 15:33:21', '就711也買得到的可樂'),
(7, '乾麵', 1, 50, '2023-01-01 15:58:50', '這乾麵超乾的！'),
(8, '超值滷味盤', 1, 100, '2023-01-01 15:59:22', '真的很超值的滷味！'),
(9, '餛飩麵', 1, 75, '2023-01-01 16:00:04', '餛飩的皮很厚哦!!'),
(10, '丼飯', 7, 150, '2023-01-01 16:04:37', '就是丼丼丼丼丼丼丼飯！'),
(11, '炸蝦天婦羅', 7, 70, '2023-01-01 16:05:01', '蝦子是日本來的哦～'),
(12, '麥茶', 7, 20, '2023-01-01 16:05:38', '不是麥香奶茶哦！');

-- --------------------------------------------------------

--
-- 資料表結構 `provider`
--

CREATE TABLE `provider` (
  `provider_id` int NOT NULL,
  `shop_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `provider`
--

INSERT INTO `provider` (`provider_id`, `shop_name`, `phone`, `addr`, `image`, `category`) VALUES
(1, '牛肉麵店', '051234567', '嘉大市理工區資工路252號', 'https://fairylolita.com/wp-content/uploads/DSCF3995.jpg', '中式料理'),
(6, '麥噹噹', '05098765', '嘉大市理工區電機路', 'https://i.epochtimes.com/assets/uploads/2022/05/id13748758-557776.png', '美式'),
(7, '定食7', '057777778', '嘉大市理工區數學路3號', 'https://images.chinatimes.com/newsphoto/2020-09-01/656/20200901004390.jpg', '日式');

-- --------------------------------------------------------

--
-- 資料表結構 `provider_account`
--

CREATE TABLE `provider_account` (
  `provider_id` int NOT NULL,
  `account` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `provider_account`
--

INSERT INTO `provider_account` (`provider_id`, `account`, `password`) VALUES
(1, 'beef', 'beef'),
(6, 'mc', 'mc123456'),
(7, 'dd', 'dd123456');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- 資料表索引 `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`customer_id`);

--
-- 資料表索引 `deliver`
--
ALTER TABLE `deliver`
  ADD PRIMARY KEY (`deliver_id`);

--
-- 資料表索引 `deliver_account`
--
ALTER TABLE `deliver_account`
  ADD PRIMARY KEY (`deliver_id`);

--
-- 資料表索引 `order_`
--
ALTER TABLE `order_`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `foreignKey_customer_id_2` (`customer_id`),
  ADD KEY `foreignKey_deliver_id_2` (`deliver_id`),
  ADD KEY `foreignKey_provider_id_3` (`provider_id`);

--
-- 資料表索引 `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `foreignKey_product_id` (`product_id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `foreignKey_Provider_id_2` (`provider_id`);

--
-- 資料表索引 `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- 資料表索引 `provider_account`
--
ALTER TABLE `provider_account`
  ADD PRIMARY KEY (`provider_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `deliver`
--
ALTER TABLE `deliver`
  MODIFY `deliver_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_`
--
ALTER TABLE `order_`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `customer_account`
--
ALTER TABLE `customer_account`
  ADD CONSTRAINT `foreignKey_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `deliver_account`
--
ALTER TABLE `deliver_account`
  ADD CONSTRAINT `foreignKey_deliver_id` FOREIGN KEY (`deliver_id`) REFERENCES `deliver` (`deliver_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `order_`
--
ALTER TABLE `order_`
  ADD CONSTRAINT `foreignKey_customer_id_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignKey_deliver_id_2` FOREIGN KEY (`deliver_id`) REFERENCES `deliver` (`deliver_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignKey_provider_id_3` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`provider_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `foreignKey_order_id` FOREIGN KEY (`order_id`) REFERENCES `order_` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignKey_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreignKey_Provider_id_2` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`provider_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `provider_account`
--
ALTER TABLE `provider_account`
  ADD CONSTRAINT `foreignKey_Provider_id` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`provider_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
