-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 07:32 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn`
--

CREATE TABLE `admn` (
  `adminname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admn`
--

INSERT INTO `admn` (`adminname`, `password`) VALUES
('iliyas', '9986518421'),
('rahul', '7795210426'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assign_id` int(11) NOT NULL auto_increment,
  `assign_name` varchar(50) NOT NULL,
  `assign_dept` varchar(10) NOT NULL,
  `assign_subject` varchar(50) NOT NULL,
  `assign_doa` varchar(20) NOT NULL,
  `assign_dod` varchar(20) NOT NULL,
  `assign_givenby` varchar(50) NOT NULL,
  `assign_path` varchar(50) NOT NULL,
  PRIMARY KEY  (`assign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assign_id`, `assign_name`, `assign_dept`, `assign_subject`, `assign_doa`, `assign_dod`, `assign_givenby`, `assign_path`) VALUES
(2, 'assignment1', 'BBA', 'C-Language', '12-12-2012', '15-12-2012', 'pavan', 'assignments/assignment1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `questionpapers`
--

CREATE TABLE `questionpapers` (
  `qp_id` int(11) NOT NULL auto_increment,
  `dept` varchar(30) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `qpfile` varchar(100) NOT NULL,
  PRIMARY KEY  (`qp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `questionpapers`
--

INSERT INTO `questionpapers` (`qp_id`, `dept`, `sub`, `qpfile`) VALUES
(1, 'BCA', 'C-Language', 'qp/BCAC-Language.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `name`, `mobile`, `email`, `password`, `usertype`) VALUES
(18, 'f', 'f', 'df', '123', 'FACULTY'),
(11, 'fg', 'nbbn', 'hgj', '1245', 'FACULTY'),
(17, 'rahul', '7795210426', 'rahul@gmail.com', '143', 'STUDENT'),
(19, 'pavan', '9739776883', 'pavan@gmail.com', 'pavan123', 'STUDENT'),
(20, 'pavan', '9739776883', 'pavan@gmail.com', 'pavan123', 'FACULTY'),
(21, 'pavan', '9739776883', 'pavan@gmail.com', 'pavan123', 'MANAGMENT');

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE `tt` (
  `tableid` int(11) NOT NULL auto_increment,
  `semister` int(25) NOT NULL,
  `dep_name` varchar(25) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY  (`tableid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tt`
--

INSERT INTO `tt` (`tableid`, `semister`, `dep_name`, `subject`, `date`, `time`) VALUES
(1, 1, 'BCA', 'C', '12-12-2012', '12 to 2'),
(2, 1, 'BCA', 'CPP', '13-12-2012', '12 to 2'),
(3, 1, 'BCA', 'Java', '14-12-2012', '12 to 2'),
(4, 1, 'BCA', 'ACC', '15-12-2012', '12 to 2'),
(5, 1, 'BCA', 'DBMS', '16-12-2012', '12 to 2'),
(6, 1, 'BCA', 'CN', '17-12-2012', '12 to 2'),
(7, 6, 'BCA', 'C', '12-12-2012', '12 to 2'),
(8, 6, 'BCA', 'CPP', '13-12-2012', '12 to 2'),
(9, 6, 'BCA', 'Java', '14-12-2012', '12 to 2'),
(10, 6, 'BCA', 'ACC', '15-12-2012', '12 to 2'),
(11, 6, 'BCA', 'DBMS', '16-12-2012', '12 to 2'),
(12, 6, 'BCA', 'CN', '17-12-2012', '12 to 2');
