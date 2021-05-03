-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
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
-- 資料庫： `personal`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `cID` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cSex` enum('F','M') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `cBirthday` date NOT NULL,
  `cEmail` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cPhone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cAddr` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cHeight` tinyint(3) UNSIGNED DEFAULT NULL,
  `cWeight` tinyint(3) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`cID`, `cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cHeight`, `cWeight`) VALUES
(1, '張惠玲', 'F', '1987-04-04', 'elven@superstar.com', '0922988876', '台北市濟洲北路12號', 160, 49),
(2, '彭建志', 'M', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓', 175, 72),
(3, '謝耿鴻', 'M', '1987-08-11', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓', 162, 65),
(4, '蔣志明', 'M', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓', 178, 72),
(5, '王佩珊', 'F', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓', 164, 45),
(6, '林志宇', 'M', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號', 172, 75),
(7, '李曉薇', 'F', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號', 158, 56),
(8, '賴秀英', 'F', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號', 166, 48),
(9, '張雅琪', 'F', '1988-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號', 168, 50),
(10, '許朝元', 'M', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號', 169, 68);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
