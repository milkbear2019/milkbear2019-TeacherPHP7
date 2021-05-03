-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 5.7.14
-- PHP 版本： 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `personal_0511`
--

-- --------------------------------------------------------

--
-- 資料表結構 `geography`
--

CREATE TABLE `geography` (
  `g_id` int(11) NOT NULL,
  `Region_Name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Store_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `geography`
--

INSERT INTO `geography` (`g_id`, `Region_Name`, `Store_Name`) VALUES
(1, 'East', 'Boston'),
(2, 'East', 'New York'),
(3, 'West', 'Los Angeles'),
(4, 'West', 'San Diego');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `geography`
--
ALTER TABLE `geography`
  ADD PRIMARY KEY (`g_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `geography`
--
ALTER TABLE `geography`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
