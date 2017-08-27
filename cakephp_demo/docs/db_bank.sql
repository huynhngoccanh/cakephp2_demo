-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 12:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_bank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name_bank`) VALUES
(1, 'Vietcombank'),
(2, 'VIB'),
(3, 'ACB'),
(4, 'OCB'),
(5, 'VietTinBank');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `type_account` int(11) NOT NULL,
  `in_bank` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `contain` text NOT NULL,
  `number_acc` varchar(255) NOT NULL,
  `out_bank` int(11) NOT NULL,
  `bank` int(11) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `card` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `telecommunication_fees` int(11) NOT NULL,
  `type_card` int(11) NOT NULL,
  `code_client` varchar(255) NOT NULL,
  `payment_service` int(11) NOT NULL,
  `electricity` varchar(255) NOT NULL,
  `regist` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `game` int(11) NOT NULL,
  `tivi` int(11) NOT NULL,
  `payment_code` varchar(255) NOT NULL,
  `tag_code` varchar(255) NOT NULL,
  `reserve` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `search` int(11) NOT NULL,
  `acc_money` int(11) NOT NULL,
  `acc_agri` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `user_id`, `category`, `type_account`, `in_bank`, `phone`, `money`, `contain`, `number_acc`, `out_bank`, `bank`, `receiver`, `card`, `pin`, `telecommunication_fees`, `type_card`, `code_client`, `payment_service`, `electricity`, `regist`, `city`, `game`, `tivi`, `payment_code`, `tag_code`, `reserve`, `account`, `search`, `acc_money`, `acc_agri`, `created_date`, `updated_date`) VALUES
(40, 50, 1, 1, 1, '0913403171', '200', 'eeee', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '0', '2017-04-27 11:41:37', '2017-04-27 11:41:37'),
(41, 50, 3, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, 'dsds', 1, '1', 0, 0, 0, 0, '', '', 0, '', 0, 0, '0', '2017-04-27 11:41:56', '2017-04-27 11:41:56'),
(42, 50, 1, 1, 1, '0913499777', '200', 'sds', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '2000', '2017-04-28 11:28:42', '2017-04-28 11:28:42'),
(43, 50, 1, 1, 2, '', '200', 'sdsd', 'fsdfds', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '2000vvvvvvvvv', '2017-04-28 11:34:15', '2017-04-28 11:34:15'),
(44, 50, 5, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '1', 1, 0, '2000vvvvvvvvv', '2017-04-28 11:43:31', '2017-04-28 11:43:31'),
(45, 50, 1, 2, 0, '', '200', 'fdsfsdf', 'fsdfds', 1, 1, 'Nguyễn Nhật Minh', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '2000vvvvvvvvv', '2017-04-28 13:03:19', '2017-04-28 13:03:19'),
(46, 50, 1, 3, 0, '', '', '', 'fsdfds', 0, 0, '', '12345899', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, 'dsfsdfsdfdsf', '2017-04-28 13:12:01', '2017-04-28 13:12:01'),
(47, 50, 1, 1, 2, '', '200', 'test', 'fsdfdsThao', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '2000vvvvvvvvv', '2017-04-28 13:14:11', '2017-04-28 13:14:11'),
(48, 50, 1, 2, 0, '', '200', 'ssfdf', 'fsdfds', 1, 1, 'Phạm Vĩnh Hà', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '2000vvvvvvvvv', '2017-04-28 13:21:29', '2017-04-28 13:21:29'),
(49, 50, 1, 2, 0, '', '200', '', '', 2, 0, '', '12345899', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, '2000vvvvvvvvv', '2017-04-28 13:23:05', '2017-04-28 13:23:05'),
(50, 50, 5, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '1', 3, 1, '2000vvvvvvvvv', '2017-05-08 16:10:58', '2017-05-08 16:10:58'),
(51, 50, 5, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '1', 5, 0, NULL, '2017-05-08 16:12:36', '2017-05-08 16:12:36'),
(52, 50, 5, 0, 0, '', '200', '', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '2', 0, 0, NULL, '2017-05-08 16:13:51', '2017-05-08 16:13:51'),
(53, 50, 5, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '1', 2, 2, '123', '2017-05-08 16:14:33', '2017-05-08 16:14:33'),
(54, 50, 3, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '323', 1, '2', 1, 0, 0, 0, '', '', 0, '', 0, 0, NULL, '2017-05-08 16:30:48', '2017-05-08 16:30:48'),
(55, 50, 3, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '', 4, '', 0, 0, 0, 2, '123456', '', 0, '', 0, 0, NULL, '2017-05-08 16:31:20', '2017-05-08 16:31:20'),
(56, 50, 3, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '323', 3, '', 0, 0, 1, 0, '', '', 0, '', 0, 0, NULL, '2017-05-08 16:31:45', '2017-05-08 16:31:45'),
(57, 50, 3, 0, 0, '', '', '', '', 0, 0, '', '', '123', 0, 0, '323', 2, '', 0, 1, 0, 0, '', '', 0, '', 0, 0, NULL, '2017-05-08 16:32:05', '2017-05-08 16:32:05'),
(58, 50, 2, 0, 0, '', '200', '', '', 0, 0, '', '', '123', 1, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 1, '2000vvvvvvvvv', '2017-05-08 16:42:50', '2017-05-08 16:42:50'),
(59, 50, 2, 0, 0, '0916100567', '200', '', '', 0, 0, '', '', '123', 2, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 2, '123', '2017-05-08 16:43:22', '2017-05-08 16:43:22'),
(60, 50, 2, 0, 0, '', '20000', '', '', 0, 0, '', '', '123', 3, 1, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 1, '2000vvvvvvvvv', '2017-05-08 16:43:51', '2017-05-08 16:43:51'),
(61, 50, 2, 0, 0, '0913403171', '20000', '', '', 0, 0, '', '', '123', 4, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 2, '2000vvvv', '2017-05-08 16:44:15', '2017-05-08 16:44:15'),
(62, 50, 2, 0, 0, '0913499777', '20000', '', '', 0, 0, '', '', '123', 4, 0, '', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 1, '2000vvvvvvvvv', '2017-05-08 16:46:33', '2017-05-08 16:46:33'),
(63, 50, 2, 0, 0, '', '20000', '', '', 0, 0, '', '', '123', 5, 0, '323', 0, '', 0, 0, 0, 0, '', '', 0, '', 0, 0, NULL, '2017-05-08 16:47:52', '2017-05-08 16:47:52'),
(64, 50, 4, 0, 0, '', '200', '', '34354', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '0123456789', 1, '', 0, 0, NULL, '2017-05-08 16:53:06', '2017-05-08 16:53:06'),
(65, 50, 4, 0, 0, '0913403171', '200', '', 'fsdfdsThao', 0, 0, '', '', '123', 0, 0, '', 0, '', 0, 0, 0, 0, '', '0123456789', 2, '', 0, 0, NULL, '2017-05-08 16:53:34', '2017-05-08 16:53:34'),
(66, 50, 4, 0, 0, '', '', '', 'wrere', 0, 0, '', '', '123', 0, 0, '323', 0, '', 0, 0, 0, 0, '', '0123456789', 3, '', 0, 0, NULL, '2017-05-08 16:54:25', '2017-05-08 16:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Hồ Chí Minh'),
(2, 'Hà Nội'),
(3, 'Đà Nẵng'),
(4, 'Hải Phòng'),
(5, 'Vĩnh Long');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `name`) VALUES
(1, 'Võ Lâm Truyền Kỳ'),
(2, 'Cá lớn nuốt cá bé'),
(3, 'Domino'),
(4, 'Đánh bài'),
(5, 'Bói toán');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`) VALUES
(1, 'Vinaphone'),
(2, 'Mobifone'),
(3, 'Viettel'),
(4, 'Gmobile'),
(5, 'VietnamMobile'),
(6, 'TK dự trữ');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE IF NOT EXISTS `money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `money`) VALUES
(1, 10000),
(2, 20000),
(3, 30000),
(4, 50000),
(5, 100000),
(6, 200000),
(7, 300000),
(8, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `phone`) VALUES
(1, '0913499777'),
(2, '0913403171'),
(3, '0914003788'),
(4, '0916100567'),
(5, '0905777999');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `status`, `created`, `modified`) VALUES
(1, 'Connection', 'Missing Database Connection', 100, 1, '2017-04-10', '2017-04-10'),
(2, '2.8.9 Released', 'The CakePHP core team is happy to announce the immediate availability of CakePHP 2.9.0 and 2.8.9. 2.8.9 is the last scheduled bugfix release for 2.8. Going forward, 2.8 will only receive security fixes. 2.9.0 is a backwards compatible feature release for the 2.x series, adding several community contributed improvements.', 200, 1, '2017-04-10', '2017-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE IF NOT EXISTS `receiver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `name`) VALUES
(1, 'Phạm Vĩnh Hà'),
(2, 'Nguyễn Nhật Minh'),
(3, 'Lê thị Thuý'),
(4, 'Trương thị Hạ Nhi');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`) VALUES
(1, 'Điện'),
(2, 'Nước'),
(3, 'Game'),
(4, 'Truyền hình');

-- --------------------------------------------------------

--
-- Table structure for table `tivi`
--

CREATE TABLE IF NOT EXISTS `tivi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tivi`
--

INSERT INTO `tivi` (`id`, `channel`) VALUES
(1, 'K+'),
(2, 'VTC'),
(3, 'Cáp Hà Nội'),
(4, 'SCTV'),
(5, 'Sông Thu'),
(6, 'MyTV'),
(7, 'Next TV'),
(8, 'FPT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  `money` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `pin`, `level`, `money`, `created_date`, `updated_date`) VALUES
(50, 'thaontt', 'e10adc3949ba59abbe56e057f20f883e', 'abc@yahoo.com', '123', '123', 2, 864200, '2017-04-17 16:40:50', '2017-04-17 16:40:50'),
(51, 'thaontt123', 'e10adc3949ba59abbe56e057f20f883e', 'abc@yahoo.com', '1231', '1231', 2, 1000000, '2017-04-17 17:51:26', '2017-04-17 17:51:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
