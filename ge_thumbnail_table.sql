-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 21 日 02:03
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db6`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ge_thumbnail_table`
--

CREATE TABLE `ge_thumbnail_table` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `title` varchar(128) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `urlid` varchar(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `ge_thumbnail_table`
--

INSERT INTO `ge_thumbnail_table` (`id`, `url`, `title`, `comment`, `date`, `urlid`, `score`) VALUES
(1, 'https://www.youtube.com/watch?v=UX9v0EXofTE', 'Paris Vlog', 'A record of  trip to Paris, find a cute shop', '2023-07-20 14:22:25', 'UX9v0EXofTE', 0),
(2, 'https://www.youtube.com/watch?v=2PWdrBUf8tE', 'room tour', 'House where storage is helpful', '2023-07-20 15:32:26', '2PWdrBUf8tE', 0),
(3, 'https://www.youtube.com/watch?v=okVTSehE414', 'I WANT / IVE', 'Pepshi promotion song', '2023-07-20 17:15:10', 'okVTSehE414', 8),
(9, 'https://www.youtube.com/watch?v=wGkXXRFudbc', 'Howl\'s breakfast', 'Looks so delicious', '2023-07-20 18:04:58', 'wGkXXRFudbc', 6);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ge_thumbnail_table`
--
ALTER TABLE `ge_thumbnail_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ge_thumbnail_table`
--
ALTER TABLE `ge_thumbnail_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
