-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-12 09:53:35
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table3`
--

CREATE TABLE `gs_bm_table3` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `revenue` int(11) NOT NULL,
  `revenue2` int(11) NOT NULL,
  `revenue3` int(11) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table3`
--

INSERT INTO `gs_bm_table3` (`id`, `year`, `revenue`, `revenue2`, `revenue3`, `indate`) VALUES
(1, 2017, 3000, 3000, 3000, '2023-01-04 10:58:28'),
(2, 2018, 2566, 3519, 1506, '2023-01-04 10:36:13'),
(3, 2019, 2800, 3800, 1700, '2023-01-04 10:36:52'),
(4, 2020, 3100, 3900, 1700, '2023-01-04 10:37:14'),
(5, 2021, 3300, 4000, 1800, '2023-01-04 10:37:36'),
(6, 2022, 4500, 3900, 2000, '2023-01-04 10:38:09'),
(13, 2023, 4433, 3244, 4221, '2023-01-12 15:50:52');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table3`
--
ALTER TABLE `gs_bm_table3`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table3`
--
ALTER TABLE `gs_bm_table3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
