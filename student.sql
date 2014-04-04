-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 04 日 12:22
-- 服务器版本: 5.1.41
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `student`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('admin', '12345'),
('管理员', '1');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Cno` int(10) NOT NULL,
  `Cname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course`
--


-- --------------------------------------------------------

--
-- 表的结构 `sreport`
--

CREATE TABLE IF NOT EXISTS `sreport` (
  `Key` bigint(20) NOT NULL AUTO_INCREMENT,
  `Sno` varchar(10) NOT NULL,
  `Cname` varchar(50) NOT NULL,
  `Mark` int(10) NOT NULL,
  PRIMARY KEY (`Key`),
  UNIQUE KEY `Key_3` (`Key`),
  KEY `Key` (`Key`),
  KEY `Key_2` (`Key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

--
-- 转存表中的数据 `sreport`
--

INSERT INTO `sreport` (`Key`, `Sno`, `Cname`, `Mark`) VALUES
(13, '001', 'Chinese', 0),
(14, '001', 'Math', 0),
(15, '001', 'English', 0),
(84, '018', 'Chinese', 0),
(85, '018', 'Math', 0),
(86, '018', 'English', 0),
(33, '002', 'Chinese', 0),
(34, '002', 'Math', 0),
(35, '002', 'English', 0),
(36, '003', 'Chinese', 0),
(37, '003', 'Math', 0),
(38, '003', 'English', 0),
(39, '004', 'Chinese', 0),
(40, '004', 'Math', 0),
(41, '004', 'English', 0),
(42, '005', 'Chinese', 0),
(43, '005', 'Math', 0),
(44, '005', 'English', 0),
(45, '006', 'Chinese', 0),
(46, '006', 'Math', 0),
(47, '006', 'English', 0),
(48, '007', 'Chinese', 0),
(49, '007', 'Math', 0),
(50, '007', 'English', 0),
(51, '008', 'Chinese', 0),
(52, '008', 'Math', 0),
(53, '008', 'English', 0),
(54, '009', 'Chinese', 0),
(55, '009', 'Math', 0),
(56, '009', 'English', 0),
(57, '010', 'Chinese', 0),
(58, '010', 'Math', 0),
(59, '010', 'English', 0),
(60, '011', 'Chinese', 0),
(61, '011', 'Math', 0),
(62, '011', 'English', 0),
(63, '012', 'Chinese', 0),
(64, '012', 'Math', 0),
(65, '012', 'English', 0),
(66, '013', 'Chinese', 0),
(67, '013', 'Math', 0),
(68, '013', 'English', 0),
(69, '014', 'Chinese', 0),
(70, '014', 'Math', 0),
(71, '014', 'English', 0),
(72, '015', 'Chinese', 0),
(73, '015', 'Math', 0),
(74, '015', 'English', 0),
(75, '016', 'Chinese', 0),
(76, '016', 'Math', 0),
(77, '016', 'English', 0),
(78, '017', 'Chinese', 0),
(79, '017', 'Math', 0),
(80, '017', 'English', 0),
(87, '019', 'Chinese', 0),
(88, '019', 'Math', 0),
(89, '019', 'English', 0),
(90, '020', 'Chinese', 0),
(91, '020', 'Math', 0),
(92, '020', 'English', 0),
(93, '018', '', 0),
(94, '018', '', 0),
(95, '018', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Sno` varchar(10) NOT NULL,
  `Sname` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `Ssex` varchar(50) NOT NULL,
  `sdept` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`Sno`, `Sname`, `age`, `Ssex`, `sdept`, `password`) VALUES
('001', 'Tom', '20', 'Male', 'Mathematics', '001'),
('002', 'Jerry', '20', 'Male', 'Mathematics', '002'),
('003', 'Mary', '20', 'Female', 'Literature', '003'),
('004', 'Tina', '20', 'Female', 'Literature', '004'),
('005', 'Jack', '20', 'Male', 'Mathematics', '005'),
('006', 'Emily', '20', 'Female', 'Chinese', 'Alan'),
('007', 'Bill', '20', 'Male', 'Computer Science', '007'),
('008', 'David', '20', 'Male', 'Physics', '008'),
('009', 'Victoria', '20', 'Female', 'Philosophy', '009'),
('010', 'Maria', '20', 'Female', 'Sociology', '010'),
('011', 'Edward', '20', 'Male', 'Physics', '011'),
('012', 'Frank', '20', 'Male', 'Computer Science', '012'),
('013', 'Jessica', '20', 'Female', 'Chinese', '013'),
('014', 'Ella', '20', 'Female', 'History', '014'),
('015', 'Diana', '20', 'Female', 'Computer Science', '015'),
('016', 'Dennis', '20', 'Male', 'Architecture', '016'),
('017', 'Bob', '20', 'Male', 'Biology', '017'),
('018', '张三', '20', 'Male', 'Architecture', '018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
