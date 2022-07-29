-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2012 at 01:54 AM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `CandidateID` int(11) NOT NULL AUTO_INCREMENT,
  `RollNumber` varchar(200) NOT NULL,
  `abc` varchar(1) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Party` varchar(100) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  PRIMARY KEY (`CandidateID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5053;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateID`,`RollNumber`, `abc`, `Position`, `Party`, `FullName`, `Gender`, `Year`, `Photo`) VALUES
(5001,'21891A0481', 'c', '1st Year Representative', 'Pig Party', 'Kiran', 'Male', '1st year', 'students_pics/1.jpg'),
(5002,'21891A0592', 'c', '1st Year Representative', 'Horse Party', 'Madhavi Reddy', 'Female', '1st year', 'students_pics/2.jpg'),
(5003,'21891A0113', 'c', '1st Year Representative', 'Pig Party', 'Lakshmi Bhargavi', 'Female', '1st year', 'students_pics/3.jpg'),
(5004,'19891A0210', 'e', '3rd Year Representative', 'Horse Party', 'Nandini Reddy', 'Female', '3rd year', 'students_pics/4.jpg'),
(5005,'21891A0137', 'c', '1st Year Representative', 'Horse Party', 'Yogitha Ramisetty', 'Female', '1st year', 'students_pics/5.jpg'),
(5006,'21891A0365', 'c', '1st Year Representative', 'Horse Party', 'Nagulagani Soujanya', 'Female', '1st year', 'students_pics/6.jpg'),
(5007,'19891A0395', 'a', 'Governor', 'Pig Party','Siva Chowdary', 'Male', '3rd year','students_pics/7.jpg'),
(5008,'21891A0333', 'c', '1st Year Representative', 'Horse Party', 'Mounika', 'Female', '1st year', 'students_pics/8.jpg'),
(5009,'21891A0435', 'c', '1st Year Representative', 'Pig Party', 'Spandana', 'Female', '1st year', 'students_pics/9.jpg'),
(5010,'21891A0134', 'c', '1st Year Representative', 'Horse Party', 'Manne Harisha', 'Female', '1st year', 'students_pics/10.jpg'),
(5011,'21891A0311', 'c', '1st Year Representative', 'Pig Party', 'Ganesh', 'Male', '1st year', 'students_pics/11.jpg'),
(5012,'19891A0128', 'b', 'Vice-Governor', 'Pig Party','Gattu Chaitanya', 'Male', '3rd year', 'students_pics/12.jpg'),
(5013,'20891A0429', 'b', 'Vice-Governor', 'superkings party', 'Saketh Madhav', 'Male', '2nd year', 'students_pics/13.jpg'),
(5014,'21891A0530', 'c', '1st Year Representative', 'Smart Party', 'Vinod Chowdary', 'Male', '1st year', 'students_pics/14.jpg'),
(5015,'21891A0338', 'c', '1st Year Representative', 'Pig Party','Ashritha Reddy', 'Female', '1st year', 'students_pics/16.jpg'),
(5016,'21891A0439', 'c', '1st Year Representative', 'Horse Party','Manoj', 'Male', '1st year', 'students_pics/15.jpg'),
(5017,'20891A0143', 'd', '2nd Year Representative', 'Smart Party', 'Vaishnavi', 'Female', '2nd year', 'students_pics/17.jpg'),
(5018,'20891A0444', 'd', '2nd Year Representative', 'Smart Party', 'Navya Vengala', 'Female', '2nd year', 'students_pics/18.jpg'),
(5019,'20891A0245', 'd', '2nd Year Representative', 'Smart Party', 'Aravind Reddy', 'Male', '2nd year', 'students_pics/19.jpg'),
(5020,'20891A0346', 'd', '2nd Year Representative', 'superkings party', 'Nikhil Pakala', 'Male', '2nd year','students_pics/20.jpg'),
(5021,'20891A0547', 'd', '2nd Year Representative', 'Horse Party', 'Sruthi', 'Female', '2nd year', 'students_pics/21.jpg'),
(5022,'20891A0348', 'd', '2nd Year Representative', 'superkings party', 'Darshit', 'Male', '2nd year', 'students_pics/22.jpg'),
(5023,'20891A0549', 'd', '2nd Year Representative', 'superkings party', 'Aakash', 'Male', '2nd year', 'students_pics/23.jpg'),
(5024,'20891A0250', 'd', '2nd Year Representative', 'superkings party', 'Advik Reddy', 'Male', '2nd year', 'students_pics/24.jpg'),
(5025,'20891A0561', 'd', '2nd Year Representative', 'superkings party', 'Ekhansh Chaudhary', 'Male', '2nd year', 'students_pics/25.jpg'),
(5026,'20891A0582', 'd', '2nd Year Representative', 'Smart Party', 'Hemanth', 'Male', '2nd year', 'students_pics/26.jpg'),
(5027,'20891A0573', 'd', '2nd Year Representative', 'Pig Party', 'Lohith', 'Male', '2nd year', 'students_pics/27.jpg'),
(5028,'20891A0454', 'd', '2nd Year Representative', 'Pig Party', 'Pranay Goud', 'Male', '2nd year', 'students_pics/28.jpg'),
(5029,'19891A0545', 'e', '3rd Year Representative', 'Pig Party', 'Pranavi Konda', 'Female', '3rd year', 'students_pics/29.jpg'),
(5030,'18891A0475', 'f', '4th Year Representative', 'Horse Party', 'Bhavana Vangala', 'Female', '4th year', 'students_pics/30.jpg'),
(5031,'19891A0587', 'f', '3rd Year Representative', 'Pig Party', 'Nishit', 'Male', '3rd year', 'students_pics/31.jpg'),
(5032,'19891A0259', 'e', '3rd Year Representative', 'Pig Party', 'Aadhya ', 'Female', '3rd year', 'students_pics/32.jpg'),
(5033,'19891A0473', 'e', '3rd Year Representative', 'Horse Party', 'Tharun', 'Male', '3rd year', 'students_pics/33.jpg'),
(5034,'19891A0562', 'f', '3rd Year Representative', 'Pig Party', 'Akhil Mangela', 'Male', '3rd year', 'students_pics/34.jpg'),
(5035,'19891A0114', 'e', '3rd Year Representative', 'Horse Party', 'Lukmanul Hakeem', 'Male', '3rd year', 'students_pics/35.jpg'),
(5036,'19891A0340', 'f', '3rd Year Representative', 'Pig Party', 'Aarthi Bojja', 'Female', '3rd year', 'students_pics/36.jpg'),
(5037,'19891A0152', 'e', '3rd Year Representative', 'Horse Party', 'Chandrika', 'Female', '3rd year', 'students_pics/37.jpg'),
(5038,'19891A0117', 'e', '3rd Year Representative', 'Horse Party', 'Konda Jasmine', 'Female', '3rd year', 'students_pics/38.jpg'),
(5039,'19891A0461', 'e', '3rd Year Representative', 'Pig Party', 'Kesa Nandhini', 'Female', '3rd year', 'students_pics/39.jpg'),
(5040,'19891A0308', 'e', '3rd Year Representative', 'superkings party', 'Vishnu Mandava', 'Male', '3rd year','students_pics/40.jpg'),
(5041,'18891A0476', 'f', '4th Year Representative', 'Horse Party', 'Supriya Naidu', 'Female', '4th year', 'students_pics/41.jpg'),
(5042,'18891A0577', 'f', '4th Year Representative', 'Horse Party', 'Rahul Pallath', 'Male', '4th year', 'students_pics/42.jpg'),
(5043,'18891A0128', 'f', '4th Year Representative', 'Horse Party', 'Kotha Geetika', 'Female', '4th year', 'students_pics/43.jpg'),
(5044,'18891A0259', 'f', '4th Year Representative', 'Horse Party', 'Gireesh Chalakudi', 'Male', '4th year', 'students_pics/44.jpg'),
(5045,'18891A0345', 'f', '4th Year Representative', 'Horse Party', 'Dhrithi', 'Female', '4th year', 'students_pics/45.jpg'),
(5046,'18891A0123', 'f', '4th Year Representative', 'Pig Party', 'Deepthi Mikkili', 'Female', '4th year', 'students_pics/46.jpg'),
(5047,'18891A0219', 'f', '4th Year Representative', 'Pig Party', 'Oorvi Jaiswal', 'Female', '4th year','students_pics/47.jpg'),
(5048,'18891A0503', 'f', '4th Year Representative', 'Pig Party', 'Revanth Reddy', 'Male', '4th year', 'students_pics/48.jpg'),
(5049,'18891A0334', 'f', '4th Year Representative', 'Pig Party', 'Sampath Netha', 'Male', '4th year', 'students_pics/49.jpg'),
(5050,'18891A0255', 'f', '4th Year Representative', 'Pig Party', 'Praneeth Morishetty', 'Male', '4th year', 'students_pics/50.jpg'),
(5051,'18891A0466', 'f', '4th Year Representative', 'Pig Party', 'Aravind Jilla', 'Male', '4th year', 'students_pics/51.jpg'),
(5052,'19891A0542', 'a', 'Governor', 'superkings party',  'Sai Santhosh','Male', '3rd year', 'students_pics/52.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0103 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `FullName`, `UserName`, `Password`, `User_Type`) VALUES
(0101, 'vignanite', 'vignan', 'vits', 'Admin'),
(0102, 'vignan_admin', 'admin', 'admin123', 'Admin');




-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `VoterID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(150) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`VoterID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1031 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`VoterID`, `FullName`, `Username`, `Password`, `Year`, `Status`) VALUES
(1001, 'V.Manoj Kumar', '21891A0409', 'm21409', '1st year', 'Voted'),
(1002, 'N Priyanka', '21891A0218', 'p21218', '1st year', 'Unvoted'),
(1003, 'D.Leeladurga', '21891A0391', 'l21391', '1st year', 'Unvoted'),
(1004, 'Ashok Bheesetti', '21891A0337', 'a21337', '1st year', 'Unvoted'),
(1005, 'Venkata Chaitanya Annuri', '19891A0124', 'v19124', '3rd year', 'Unvoted'),
(1006, 'Chilukuri Haritha', '21891A0332', 'h21332', '1st year', 'Unvoted'),
(1007, 'Devana Geethasree', '21891A0440', 'g21440', '1st year', 'Unvoted'),
(1008, 'Mohammad Imran Khan', '21891A05A8', 'i215A8', '1st year', 'Unvoted'),
(1009, 'Madivada Haritha', '20895A05B9', 'h205B9', '3rd year', 'Unvoted'),
(1010, 'Mudduluru Chandra Vamsi', '19895A05C1', 'v195C1', '3rd year', 'Unvoted'),
(1011, 'Challa Santoshi', '19891A02D5', 's192D5', '3rd year', 'Unvoted'),
(1012, 'K Naga Sunanda', '19891A0154', 's19154', '3rd year', 'Unvoted'),
(1013, 'V Adithya', '20891A0270', 'a20270', '2nd year', 'Unvoted'),
(1014, 'K Sai Deepika', '21891A0351', 'd21351', '1st year', 'Unvoted'),
(1015, 'Komma Sravanthi', '21891A0249', 's21249', '1st year', 'Unvoted'),
(1016, 'Narasipuram Bhuvaneswari', '19891A05A2', 'b195A2', '3rd year', 'Unvoted'),
(1017, 'A.Harika', '20891A0253', 'h20253', '2nd year', 'Unvoted'),
(1018, 'Sunkara Sai Krishna', '20891A0469', 'k20469', '2nd year', 'Unvoted'),
(1019, 'Vysyaraju Praneeth Sai', '20891A0107', 'p20107', '2nd year', 'Voted'),
(1020, 'Vanga Sudheer Reddy', '18891A04E4', 's184E4', '4th year', 'Unvoted'),
(1021, 'Mangala Sai Sharanya', '18891A05D0', 's185D0', '4th year', 'Unvoted'),
(1022, 'Sravani Lakkaraju', '18891A0147', 's18147', '4th year', 'Unvoted'),
(1023, 'Naveen Velpula', '20891A04F4', 'n204F4', '2nd year', 'Unvoted'),
(1024, 'Galinki Niveditha', '18891A05C7', 'n185C7', '4th year', 'Unvoted'),
(1025, 'Nabeel Ahmed', '18891A0316', 'a18316', '4th year', 'Unvoted'),
(1026, 'Vanneti Nithin', '18891A0257', 'n18257', '4th year', 'Unvoted'),
(1027, 'Palampalli Pranitha Reddy', '18891A0569', 'p18569', '4th year', 'Unvoted'),
(1028, 'S Yashwanth', '19891A0471', 'y19471', '3rd year', 'Unvoted'),
(1029, 'C Riyaz Basha', '19891A03A3', 'r193A3', '3rd year', 'Unvoted'),
(1030, 'Maram Avinash', '20891A0553', 'a20553', '2nd year', 'Voted');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateID` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `votes`
--


INSERT INTO `votes` (`ID`, `CandidateID`, `votes`) VALUES
(201, 5001,2),
(202, 5002,0),
(203, 5003,0),
(204, 5004,1),
(205, 5005,1),
(206, 5006,0),
(207, 5007,0),
(208, 5008,0),
(209, 5009,0),
(210, 5010,0),
(211, 5011,0),
(212, 5012,0),
(213, 5013,1),
(214, 5014,0),
(215, 5015,0),
(216, 5016,1),
(217, 5017,0),
(218, 5018,0),
(219, 5019,0),
(220, 5020,0),
(221, 5021,1),
(222, 5022,0),
(223, 5023,0),
(224, 5024,1),
(225, 5025,0),
(226, 5026,0),
(227, 5027,1),
(228, 5028,0),
(229, 5029,0),
(230, 5030,1),
(231, 5031,0),
(232, 5032,0),
(233, 5033,1),
(234, 5034,0),
(235, 5035,0),
(236, 5036,0),
(237, 5037,0),
(238, 5038,0),
(239, 5039,0),
(240, 5040,1),
(241, 5041,0),
(242, 5042,0),
(243, 5043,0),
(244, 5044,2),
(245, 5045,0),
(246, 5046,0),
(247, 5047,2),
(248, 5048,0),
(249, 5049,0),
(250, 5050,0),
(251, 5051,1),
(252, 5052,0);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

	