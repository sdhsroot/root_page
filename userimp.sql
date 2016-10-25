-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-16 15:38
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `userimp`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `user_imp`
--

CREATE TABLE `user_imp` (
  `email` varchar(255) NOT NULL,
  `passwd` varchar(17) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `student_id` varchar(6) NOT NULL,
  `o_phone` varchar(13) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `user_imp`
--

INSERT INTO `user_imp` (`email`, `passwd`, `user_name`, `student_id`, `o_phone`, `score`) VALUES
('sodas789@naver.com', 'tmdfl345!@', '정승리', '20517', '010-3334-5942', 0),
('wjdtmdfl789@naver.com', 'tmdfl345!@', '정승리', '20517', '010-3334-5942', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `user_imp`
--
ALTER TABLE `user_imp`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
