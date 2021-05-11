-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3308
-- 產生時間： 
-- 伺服器版本： 8.0.18
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- 資料表結構 `image2`
--

DROP TABLE IF EXISTS `image2`;
CREATE TABLE IF NOT EXISTS `image2` (
  `images_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`images_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `image2`
--

INSERT INTO `image2` (`images_id`, `image_name`) VALUES
(1, 'fullimage1.jpg'),
(2, 'fullimage2.jpg'),
(3, 'fullimage3.jpg'),
(4, 'fullimage4.jpg'),
(5, 'fullimage5.jpg'),
(6, 'fullimage6.jpg'),
(7, 'fullimage7.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
