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
-- 資料表結構 `store_information`
--

CREATE TABLE `store_information` (
  `Store_id` int(11) NOT NULL,
  `Store_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sales` int(11) NOT NULL,
  `Txn_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `store_information`
--

INSERT INTO `store_information` (`Store_id`, `Store_Name`, `Sales`, `Txn_Date`) VALUES
(1, 'Los Angeles', 1500, '2018-05-28'),
(2, 'San Diego', 250, '2018-05-29'),
(3, 'Los Angeles', 300, '2018-06-21'),
(4, 'Boston', 700, '2019-01-30'),
(5, 'San Diego', 1200, '2019-07-19');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `store_information`
--
ALTER TABLE `store_information`
  ADD PRIMARY KEY (`Store_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `store_information`
--
ALTER TABLE `store_information`
  MODIFY `Store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
