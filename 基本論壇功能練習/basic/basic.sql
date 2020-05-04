-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-17 16:14:55
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `basic`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `addr` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `activity`
--

INSERT INTO `activity` (`id`, `name`, `photo_id`, `dept`, `sex`, `tel`, `birthday`, `email`, `addr`) VALUES
(144, '我', '襯衫', '衣服', '付現', '1', '2018-06-13', '150', '零用錢'),
(145, '胡閔凱', '飲料', '飲食', '付現', '1', '2018-06-13', '70', '生活費'),
(146, '妹妹', '晚餐', '飲食', '付現', '1', '2018-06-13', '50', '生活費'),
(147, '我', '住宿費', '住宿', '付現', '1', '2018-06-11', '12000', '存款'),
(148, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(149, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(150, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(151, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(152, '87', '飲料', '數位系', '男', '1', '2017-06-17', '35', '生活費'),
(153, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(154, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(155, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(156, '我', '飲料', '飲食', '付現', '1', '2018-06-13', '35', '生活費'),
(157, '', '', '', '', '', '0000-00-00', '', ''),
(158, '', '', '', '', '', '0000-00-00', '', ''),
(159, '', '', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `logins`
--

CREATE TABLE `logins` (
  `abc` int(11) NOT NULL,
  `username` varchar(12) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) CHARACTER SET utf8 NOT NULL,
  `aaa` int(1) NOT NULL DEFAULT '0',
  `content` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `logins`
--

INSERT INTO `logins` (`abc`, `username`, `password`, `aaa`, `content`) VALUES
(1, 'admin', '1234', 1, ''),
(6, 'ADT105112', '1234', 0, ''),
(7, '1234', '1234', 0, ''),
(9, 'xaa123aax', '1234', 0, ''),
(30, '123456479864', '1246836', 0, ''),
(32, '123456', '555', 0, ''),
(34, 'AAAA', 'AAAAA', 0, ''),
(36, 'qwe', 'qwe', 0, '123'),
(37, 'aaaaaa', 'aaaaaa', 0, ''),
(38, '666', '666', 0, ''),
(41, '456', '456', 0, ''),
(42, '789', '789', 0, ''),
(43, 'xaa1234aax', 'xaa1234aax', 0, ''),
(44, 'asd', 'asd', 0, ''),
(45, '123', '123', 0, '');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `username` varchar(12) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `students`
--

INSERT INTO `students` (`username`, `password`) VALUES
('admin', '1234');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`abc`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- 使用資料表 AUTO_INCREMENT `logins`
--
ALTER TABLE `logins`
  MODIFY `abc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
