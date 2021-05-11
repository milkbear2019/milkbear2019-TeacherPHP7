-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-11-08 05:46:39
-- 伺服器版本: 5.7.14
-- PHP 版本： 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `demo`
--

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `images_id` int(5) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `image`
--

INSERT INTO `image` (`images_id`, `image_name`) VALUES
(1, 'owl1.jpg'),
(2, 'owl2.jpg'),
(3, 'owl3.jpg'),
(4, 'owl4.jpg'),
(5, 'owl5.jpg'),
(6, 'owl6.jpg'),
(7, 'owl7.jpg'),
(8, 'owl8.jpg'),
(9, 'owl11.jpg'),
(10, 'owl12.jpg'),
(11, 'owl13.jpg'),
(12, 'owl14.jpg'),
(13, 'owl15.jpg'),
(14, 'owl16.jpg'),
(15, 'owl17.jpg'),
(16, 'owl18.jpg');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`images_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `images_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
