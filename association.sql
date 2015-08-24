-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2015 at 08:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `association`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_id`
--

CREATE TABLE IF NOT EXISTS `comment_id` (
  `comment_id` int(30) NOT NULL AUTO_INCREMENT,
  `comment_text` varchar(1000) NOT NULL,
  `time` varchar(30) NOT NULL,
  `post_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `comment_id`
--

INSERT INTO `comment_id` (`comment_id`, `comment_text`, `time`, `post_id`, `user_id`) VALUES
(11, 'vfcxzv', 'Tue, 17 Mar 2015 22:11:42 PM', 22, 1),
(15, 'ssaf', 'Tue, 17 Mar 2015 22:24:51 PM', 20, 1),
(19, '', 'Tue, 17 Mar 2015 22:55:22 PM', 20, 19),
(20, 'wrqwer', 'Wed, 18 Mar 2015 04:51:00 AM', 20, 19),
(23, 'frgdfgdf', 'Wed, 18 Mar 2015 06:23:05 AM', 28, 1),
(24, 'sadsdasd sd asd asd', 'Wed, 18 Mar 2015 06:59:11 AM', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_effect`
--

CREATE TABLE IF NOT EXISTS `event_effect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(100) NOT NULL,
  `going` int(100) NOT NULL,
  `maybe` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=174 ;

--
-- Dumping data for table `event_effect`
--

INSERT INTO `event_effect` (`id`, `event_id`, `going`, `maybe`) VALUES
(34, 8, 16, 0),
(36, 11, 16, 0),
(37, 12, 16, 0),
(38, 11, 1, 0),
(39, 8, 1, 0),
(40, 8, 17, 0),
(41, 11, 17, 0),
(42, 12, 17, 0),
(43, 12, 1, 0),
(44, 13, 1, 0),
(45, 13, 16, 0),
(46, 14, 1, 0),
(47, 13, 17, 0),
(48, 15, 1, 0),
(49, 15, 17, 0),
(50, 16, 17, 0),
(51, 16, 1, 0),
(52, 17, 17, 0),
(53, 14, 17, 0),
(54, 16, 16, 0),
(55, 17, 16, 0),
(56, 15, 16, 0),
(57, 14, 16, 0),
(58, 18, 16, 0),
(59, 30, 16, 0),
(60, 0, 16, 0),
(61, 0, 17, 0),
(62, 0, 17, 0),
(63, 0, 17, 0),
(64, 0, 17, 0),
(65, 0, 17, 0),
(66, 0, 17, 0),
(67, 0, 17, 0),
(68, 0, 17, 0),
(69, 0, 17, 0),
(70, 0, 17, 0),
(71, 0, 17, 0),
(72, 0, 17, 0),
(73, 0, 17, 0),
(74, 0, 17, 0),
(75, 0, 17, 0),
(76, 0, 17, 0),
(77, 0, 17, 0),
(78, 0, 17, 0),
(79, 0, 17, 0),
(80, 0, 17, 0),
(81, 0, 17, 0),
(82, 0, 17, 0),
(83, 30, 17, 0),
(84, 30, 1, 0),
(85, 0, 1, 0),
(86, 0, 1, 0),
(87, 30, 1, 0),
(88, 17, 1, 0),
(89, 17, 1, 0),
(90, 17, 1, 0),
(91, 17, 1, 0),
(92, 17, 1, 0),
(93, 17, 1, 0),
(94, 17, 1, 0),
(95, 17, 1, 0),
(96, 17, 1, 0),
(97, 17, 1, 0),
(98, 17, 1, 0),
(99, 17, 1, 0),
(100, 17, 1, 0),
(101, 31, 1, 0),
(102, 32, 1, 0),
(103, 32, 17, 0),
(104, 31, 17, 0),
(105, 31, 17, 0),
(106, 31, 17, 0),
(107, 31, 17, 0),
(108, 31, 17, 0),
(109, 31, 17, 0),
(110, 31, 17, 0),
(111, 31, 17, 0),
(112, 31, 17, 0),
(113, 32, 16, 0),
(114, 32, 16, 0),
(115, 32, 16, 0),
(116, 32, 16, 0),
(117, 32, 16, 0),
(118, 32, 16, 0),
(119, 32, 16, 0),
(120, 32, 16, 0),
(121, 32, 16, 0),
(122, 32, 16, 0),
(123, 32, 16, 0),
(124, 32, 16, 0),
(125, 32, 16, 0),
(126, 32, 16, 0),
(127, 32, 16, 0),
(128, 32, 16, 0),
(129, 32, 16, 0),
(130, 32, 16, 0),
(131, 32, 16, 0),
(132, 32, 16, 0),
(133, 32, 16, 0),
(134, 32, 16, 0),
(135, 32, 16, 0),
(136, 32, 16, 0),
(137, 32, 16, 0),
(138, 32, 16, 0),
(139, 8, 16, 0),
(140, 8, 16, 0),
(141, 8, 16, 0),
(142, 8, 16, 0),
(143, 8, 16, 0),
(144, 8, 16, 0),
(145, 8, 16, 0),
(146, 8, 16, 0),
(147, 8, 16, 0),
(148, 8, 16, 0),
(149, 33, 16, 0),
(150, 31, 16, 0),
(151, 33, 17, 0),
(152, 34, 16, 0),
(153, 37, 16, 0),
(154, 37, 17, 0),
(155, 36, 17, 0),
(156, 38, 17, 0),
(157, 34, 17, 0),
(158, 35, 17, 0),
(159, 0, 16, 0),
(160, 38, 1, 0),
(161, 37, 1, 0),
(162, 36, 1, 0),
(163, 35, 1, 0),
(164, 33, 1, 0),
(165, 34, 1, 0),
(166, 41, 1, 0),
(167, 41, 17, 0),
(168, 1, 1, 0),
(169, 1, 18, 0),
(170, 3, 1, 0),
(171, 2, 1, 0),
(172, 4, 17, 0),
(173, 4, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE IF NOT EXISTS `event_table` (
  `event_id` int(30) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(500) NOT NULL,
  `user_id` int(30) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event_table`
--

INSERT INTO `event_table` (`event_id`, `event_title`, `details`, `place`, `date`, `time`, `user_id`, `link`) VALUES
(1, 'Camp Fire', 'wqewq', 'Central Field', '2015-03-27', '00:59', 1, '../upload/114266554941558598_10201620887990920_8728932959346671224_n.jpg'),
(2, 'Stall for admission', 'qwer', 'Main Gate , KUET', '2015-03-28', '12:59', 1, '../upload/11426655579dorkari.jpg'),
(3, 'study Tour', 'ewq', 'Bagerhat, Shat Gambuj Mosque', '2015-03-19', '12:59', 1, '../upload/1142665569110411284_337925209711714_4722109519856527132_n.jpg'),
(4, 'dgfsdgdsg', 'sdgfsdg', 'ddfdsg', '2015-07-08', '12:59', 17, '../upload/17143625225311257826_1000733296603663_8069753332551600166_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo_comment`
--

CREATE TABLE IF NOT EXISTS `photo_comment` (
  `comment_id` int(30) NOT NULL,
  `comment_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo_post`
--

CREATE TABLE IF NOT EXISTS `photo_post` (
  `post_id` int(30) NOT NULL,
  `photo_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(30) NOT NULL AUTO_INCREMENT,
  `post_text` varchar(1000) NOT NULL,
  `time` varchar(30) NOT NULL,
  `post_header` varchar(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `link` varchar(500) NOT NULL,
  `file_type` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_text`, `time`, `post_header`, `user_id`, `link`, `file_type`) VALUES
(20, 'Ajker "Camp Fire" nissondehe "Rangpur Associiation" ke ekta onnorakom uchchotai nie giece! Sokol "kuetians of Rangpur" ke dhonnobad tader sotosfurto ongshogrohoner jonno;a very special thanks to Aurin bhai........!!!', 'Tue, 17 Mar 2015 22:55:08 PM', 'camp fire', 17, '', 0),
(21, '', 'Tue, 17 Mar 2015 22:55:58 PM', '', 1, '../upload/1142662935810978574_376965335807701_5450735857023667483_n.jpg', 1),
(22, '', 'Tue, 17 Mar 2015 23:00:22 PM', 'we are we', 1, '../upload/114266296221558598_10201620887990920_8728932959346671224_n.jpg', 1),
(27, '', 'Wed, 18 Mar 2015 06:05:30 AM', 'Bellman-Ford algo', 1, '../upload/11426655130Bellman-ford.cpp', 0),
(28, '', 'Wed, 18 Mar 2015 06:23:54 AM', 'BL Threja , Volume 2', 1, '../upload/11426656234Ch-36.pdf', 0),
(30, '', 'Tue, 07 Jul 2015 08:50:06 AM', '', 17, '../upload/171436251806L2-4-Data Transmission.ppt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE IF NOT EXISTS `post_like` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `liked_by` int(11) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`like_id`, `post_id`, `liked_by`) VALUES
(87, 124, 17),
(88, 125, 17),
(89, 126, 17),
(90, 103, 17),
(91, 127, 17),
(92, 107, 17),
(93, 104, 17),
(94, 132, 17),
(95, 133, 17),
(96, 137, 1),
(97, 136, 1),
(98, 135, 1),
(99, 134, 1),
(100, 130, 1),
(101, 131, 1),
(102, 131, 1),
(103, 131, 1),
(104, 131, 1),
(105, 131, 1),
(106, 131, 1),
(107, 131, 1),
(108, 131, 1),
(109, 131, 1),
(110, 131, 1),
(111, 131, 1),
(112, 131, 1),
(113, 131, 1),
(114, 133, 1),
(115, 132, 1),
(116, 138, 1),
(117, 4, 16),
(118, 6, 1),
(119, 40, 1),
(120, 1, 19),
(121, 3, 17),
(122, 1, 17),
(123, 1, 1),
(124, 2, 1),
(125, 3, 1),
(126, 4, 1),
(127, 5, 1),
(128, 6, 19),
(129, 22, 1),
(130, 3, 18),
(131, 2, 18),
(132, 11, 18),
(133, 10, 18),
(134, 7, 1),
(135, 14, 1),
(136, 12, 1),
(137, 9, 1),
(138, 17, 1),
(139, 18, 17),
(140, 23, 19),
(141, 28, 1),
(142, 29, 17),
(143, 28, 17);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `school` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `university` varchar(200) NOT NULL,
  `pro_pic` varchar(5000) NOT NULL,
  `cover_photo` varchar(5000) NOT NULL,
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin` int(11) NOT NULL,
  `alumny` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `gender`, `password`, `date_of_birth`, `email`, `telephone`, `school`, `college`, `university`, `pro_pic`, `cover_photo`, `user_id`, `admin`, `alumny`) VALUES
('Masum Al Mesbah', 'male', 'asdsd', '2015-02-17', 'masumcpscr12@gmail.com', '01770900052', 'Rangpur Cantt.', 'Rangpur Cantt.', 'KUET', '../upload/1142661929610540639_385690918276848_3159858373817465677_n.jpg', '../upload/1142661929610978574_376965335807701_5450735857023667483_n.jpg', 1, 1, 1),
('Abdul', 'male', '1', '2015-11-15', 'aziz@gmail.com', '01753258105', 'Hativanga A B High School,Jamalpur', 'Sayed Nazrul Islam College,Mymensing', 'KUET', '../upload/171440353595demodulation 8khz.jpg', '../upload/171440353609demodulation 32khz.jpg', 17, 1, 1),
('Montasir Dipto', 'male', 'ad', '2014-07-08', 'dipto@gmail.com', '01718268856', 'Rangpur Zilla School', 'Rangpur Cantt.', 'KUET', '../upload/18142661901310411284_337925209711714_4722109519856527132_n.jpg', '../upload/18142661921410978574_376965335807701_5450735857023667483_n.jpg', 18, 0, 1),
('HM Abdul Fattah', 'male', '1', '2015-10-29', 'hmabdulfattah@gmail.com', '01751151728', 'Rangpur Zilla School', 'Rangpur Govt. College', 'KUET', '../upload/19142661945010363568_743906875705523_8667410208742753038_n.jpg', '../upload/19142661945010987728_744030772359800_2437362894118389881_n.jpg', 19, 0, 0),
('Pial Kanti', '', '1234', '2015-03-11', 'pial@gmail.com', '11342435434', '', '', '', '../upload/2014266196151947994_548239531940251_30252024_n.jpg', '../upload/2014266196151924857_548248595272678_855568442_n.jpg', 20, 0, 0),
('Asaf-Uddowla', '', '1234', '1993-03-09', 'golap@gmail.com', '234214534', '', '', '', '', '', 21, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
