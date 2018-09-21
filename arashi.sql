-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2018 年 09 月 20 日 18:52
-- 伺服器版本: 5.7.23-0ubuntu0.16.04.1
-- PHP 版本： 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `arashi`
--

-- --------------------------------------------------------

--
-- 資料表結構 `class`
--

CREATE TABLE `class` (
  `class_sn` mediumint(8) NOT NULL COMMENT '分類編號',
  `class_name` varchar(255) NOT NULL COMMENT '分類名稱',
  `class_display` varchar(255) NOT NULL COMMENT '分類識別'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `cmt`
--

CREATE TABLE `cmt` (
  `cmt_sn` mediumint(8) NOT NULL COMMENT '留言編號',
  `cmt_content` varchar(255) NOT NULL COMMENT '留言內容',
  `post_sn` varchar(255) NOT NULL COMMENT '留言文章',
  `user_sn` varchar(255) NOT NULL COMMENT '留言作者',
  `reply_sn` varchar(255) NOT NULL COMMENT '回覆編號',
  `cmt_date` datetime NOT NULL COMMENT '留言時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `post`
--

CREATE TABLE `post` (
  `post_sn` mediumint(8) NOT NULL COMMENT '文章編號',
  `post_title` varchar(255) NOT NULL COMMENT '文章標題',
  `post_content` varchar(8000) NOT NULL COMMENT '文章內容',
  `post_date` datetime NOT NULL COMMENT '發布時間',
  `post_owner` varchar(255) NOT NULL COMMENT '文章作者',
  `post_counter` varchar(255) NOT NULL COMMENT '瀏覽人數',
  `post_tag` varchar(255) NOT NULL COMMENT '文章標籤',
  `class_sn` mediumint(8) NOT NULL COMMENT '類別編號',
  `post_display` varchar(255) NOT NULL COMMENT '文章顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_pw` varchar(255) NOT NULL COMMENT '使用者密碼',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_email` varchar(255) NOT NULL COMMENT '使用者信箱',
  `user_right` varchar(255) NOT NULL COMMENT '使用者權限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_sn`);

--
-- 資料表索引 `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`cmt_sn`);

--
-- 資料表索引 `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_sn`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_sn`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `class`
--
ALTER TABLE `class`
  MODIFY `class_sn` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '分類編號';
--
-- 使用資料表 AUTO_INCREMENT `cmt`
--
ALTER TABLE `cmt`
  MODIFY `cmt_sn` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '留言編號';
--
-- 使用資料表 AUTO_INCREMENT `post`
--
ALTER TABLE `post`
  MODIFY `post_sn` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '文章編號';
--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '使用者編號';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
