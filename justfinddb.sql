-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2022 at 11:50 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justfinddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicants`
--

DROP TABLE IF EXISTS `tblapplicants`;
CREATE TABLE IF NOT EXISTS `tblapplicants` (
  `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(255) NOT NULL,
  `AGE` int(2) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) NOT NULL,
  `DEGREE` text NOT NULL,
  PRIMARY KEY (`APPLICANTID`)
) ENGINE=InnoDB AUTO_INCREMENT=2022127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplicants`
--

INSERT INTO `tblapplicants` (`APPLICANTID`, `FNAME`, `LNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`, `CONTACTNO`, `DEGREE`) VALUES
(2022124, 'ee', 'ee', 'secteur c compl n 46 hay sahrij cym', 'Female', 'Married', '1993-03-27', 'ee', 29, 'ee', 'b2c4ee5de82866db38f79c6d4a91a626486b70e9', 'f@gmail.com', '2345', 'wef');

-- --------------------------------------------------------

--
-- Table structure for table `tblattachmentfile`
--

DROP TABLE IF EXISTS `tblattachmentfile`;
CREATE TABLE IF NOT EXISTS `tblattachmentfile` (
  `FILEID` int(11) NOT NULL AUTO_INCREMENT,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) NOT NULL,
  `FILE_LOCATION` varchar(255) NOT NULL,
  `USERATTACHMENTID` int(11) NOT NULL,
  PRIMARY KEY (`FILEID`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattachmentfile`
--

INSERT INTO `tblattachmentfile` (`FILEID`, `JOBID`, `FILE_NAME`, `FILE_LOCATION`, `USERATTACHMENTID`) VALUES
(201900001, 2, 'Resume', 'photos/24122019073209Filtering a Group of Data VB.Net and SQL Server 2019.docx', 2019020),
(202200002, 3, 'Resume', 'photos/25042022104117About.php', 2022123),
(202200003, 3, 'Resume', 'photos/25042022104242About.php', 2022124),
(202200004, 3, 'Resume', 'photos/25042022110511About.php', 2022125),
(202200005, 3, 'Resume', 'photos/25042022111300About.php', 2022126),
(2147483647, 2, 'Resume', 'photos/24122019072801Filtering a Group of Data VB.Net and SQL Server 2019.docx', 2019019);

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

DROP TABLE IF EXISTS `tblautonumbers`;
CREATE TABLE IF NOT EXISTS `tblautonumbers` (
  `AUTOID` int(11) NOT NULL AUTO_INCREMENT,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL,
  PRIMARY KEY (`AUTOID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 9, 1, 'userid'),
(2, '000', 80, 1, 'employeeid'),
(3, '1', 27, 1, 'APPLICANT'),
(4, '0000', 6, 1, 'FILEID');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORY` varchar(90) NOT NULL,
  PRIMARY KEY (`CATEGORYID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGORYID`, `CATEGORY`) VALUES
(10, 'Technology'),
(11, 'Managerial'),
(12, 'Engineer'),
(13, 'IT'),
(14, 'Civil Engineer'),
(15, 'HR'),
(23, 'Sales'),
(24, 'Banking'),
(25, 'Finance'),
(26, 'BPO'),
(27, 'Degital Marketing'),
(28, 'Shipping'),
(29, 'Coffee');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

DROP TABLE IF EXISTS `tblcompany`;
CREATE TABLE IF NOT EXISTS `tblcompany` (
  `COMPANYID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANYNAME` varchar(90) NOT NULL,
  `COMPANYADDRESS` varchar(90) NOT NULL,
  `COMPANYCONTACTNO` varchar(30) NOT NULL,
  PRIMARY KEY (`COMPANYID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`COMPANYID`, `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`) VALUES
(2, 'URC', 'Bry Camugao', '023654'),
(3, 'Copreros', 'Mabinay\'s', '035656'),
(4, 'Quest', 'Kabankalan City', '23165'),
(6, 'Palacios Company', 'Kabankalan City', '0625656899'),
(7, 'IT Company', 'Kabankalan City', '04564123'),
(8, 'twin dev ', 'secteur c compl n 46 hay sahrij cym', '555555');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

DROP TABLE IF EXISTS `tblemployees`;
CREATE TABLE IF NOT EXISTS `tblemployees` (
  `INCID` int(11) NOT NULL AUTO_INCREMENT,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(90) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(90) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `EMP_EMAILADDRESS` varchar(90) NOT NULL,
  `CELLNO` varchar(30) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `WORKSTATS` varchar(90) NOT NULL,
  `EMPUSERNAME` varchar(90) NOT NULL,
  `EMPPASSWORD` varchar(125) NOT NULL,
  `DATEHIRED` date NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  PRIMARY KEY (`INCID`),
  UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`INCID`, `EMPLOYEEID`, `FNAME`, `LNAME`, `ADDRESS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `SEX`, `CIVILSTATUS`, `EMP_EMAILADDRESS`, `CELLNO`, `POSITION`, `WORKSTATS`, `EMPUSERNAME`, `EMPPASSWORD`, `DATEHIRED`, `COMPANYID`) VALUES
(77, '44', 'ss', 'ss', 'secteur c compl n 46 hay sahrij cym', '1990-02-01', 'ss', 32, 'Female', 'Single', 'd@gmail.com', '23234', 'dcv', 'Regular', '44', '98fbc42faedc02492397cb5962ea3a3ffc0a9243', '2022-04-01', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

DROP TABLE IF EXISTS `tblfeedback`;
CREATE TABLE IF NOT EXISTS `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL,
  PRIMARY KEY (`FEEDBACKID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`FEEDBACKID`, `APPLICANTID`, `REGISTRATIONID`, `FEEDBACK`) VALUES
(1, 2022124, 7, 'ggw'),
(2, 2022124, 7, 'ggw');

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

DROP TABLE IF EXISTS `tbljob`;
CREATE TABLE IF NOT EXISTS `tbljob` (
  `JOBID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANYID` int(11) NOT NULL,
  `CATEGORY` varchar(90) NOT NULL,
  `OCCUPATIONTITLE` varchar(90) NOT NULL,
  `REQ_NO_EMPLOYEES` int(11) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(90) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `PREFEREDSEX` varchar(30) NOT NULL,
  `SECTOR_VACANCY` text NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  PRIMARY KEY (`JOBID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`JOBID`, `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `DATEPOSTED`) VALUES
(1, 2, 'Technology', 'ISDs', 64, 150004, 'jan 304', 'Two year Experience4', 'We are looking for bachelor of science in information technology.\r\nasdasdasd4', 'Male', 'yes4', '2018-05-20 00:00:00'),
(2, 2, 'Technology', 'Accounting', 1, 15000, 'may 20', 'Two years Experience', 'We are looking for bachelor of science in Acountancy', 'Female', 'yes', '2018-05-20 02:33:00'),
(3, 8, 'Managerial', 'test vac', 5, 5000, '50ans', 'ss', 'ss', 'Male', 'ss', '2022-04-25 10:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobregistration`
--

DROP TABLE IF EXISTS `tbljobregistration`;
CREATE TABLE IF NOT EXISTS `tbljobregistration` (
  `REGISTRATIONID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANYID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `APPLICANT` varchar(90) NOT NULL,
  `REGISTRATIONDATE` date NOT NULL,
  `REMARKS` varchar(255) NOT NULL DEFAULT 'Pending',
  `FILEID` int(11) NOT NULL,
  `PENDINGAPPLICATION` tinyint(1) NOT NULL DEFAULT '1',
  `HVIEW` tinyint(1) NOT NULL DEFAULT '1',
  `DATETIMEAPPROVED` datetime NOT NULL,
  PRIMARY KEY (`REGISTRATIONID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobregistration`
--

INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`, `HVIEW`, `DATETIMEAPPROVED`) VALUES
(7, 8, 3, 2022124, 'ee ee', '2022-04-25', 'ggw', 202200003, 0, 0, '2022-04-25 15:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `USERID` varchar(30) NOT NULL,
  `FULLNAME` varchar(40) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  PRIMARY KEY (`USERID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `FULLNAME`, `USERNAME`, `PASS`, `ROLE`) VALUES
('00018', 'simo', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator'),
('029838', 'simo', 'simo', '65f99581a93cf30dafc32b5c178edc6b0294a07f', 'Administrator'),
('44', 'ss ss', 'ss', '98fbc42faedc02492397cb5962ea3a3ffc0a9243', 'Employee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
