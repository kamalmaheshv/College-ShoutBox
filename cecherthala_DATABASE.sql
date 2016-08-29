-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 23, 2011 at 06:47 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.2

-- 
-- Database: `cecherthala`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `1styearcs`
-- 

CREATE TABLE `1styearcs` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `1styearcs`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `1styearec`
-- 

CREATE TABLE `1styearec` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `1styearec`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `2ndyearcs`
-- 

CREATE TABLE `2ndyearcs` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `2ndyearcs`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `2ndyearec`
-- 

CREATE TABLE `2ndyearec` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `2ndyearec`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `3rdyearcs`
-- 

CREATE TABLE `3rdyearcs` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `3rdyearcs`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `3rdyearec`
-- 

CREATE TABLE `3rdyearec` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `3rdyearec`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `4thyearcs`
-- 

CREATE TABLE `4thyearcs` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `4thyearcs`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `4thyearec`
-- 

CREATE TABLE `4thyearec` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `4thyearec`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `actions`
-- 

CREATE TABLE `actions` (
  `source` varchar(25) NOT NULL,
  `action` varchar(30) NOT NULL,
  `target` varchar(25) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `actions`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `allspeak`
-- 

CREATE TABLE `allspeak` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `allspeak`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `alumni`
-- 

CREATE TABLE `alumni` (
  `msgid` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` int(11) NOT NULL,
  `comment` tinyint(1) NOT NULL,
  PRIMARY KEY  (`msgid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `alumni`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `notify`
-- 

CREATE TABLE `notify` (
  `time` int(11) NOT NULL,
  `sl` int(11) NOT NULL
) TYPE=MyISAM;

-- 
-- Dumping data for table `notify`
-- 

INSERT INTO `notify` VALUES (1306128583, 0);
INSERT INTO `notify` VALUES (1305446232, 1);
INSERT INTO `notify` VALUES (1305478202, 2);
INSERT INTO `notify` VALUES (1305908070, 3);
INSERT INTO `notify` VALUES (123123, 4);
INSERT INTO `notify` VALUES (5, 5);
INSERT INTO `notify` VALUES (6, 6);
INSERT INTO `notify` VALUES (1306085576, 7);
INSERT INTO `notify` VALUES (1305998638, 8);
INSERT INTO `notify` VALUES (1306127975, 9);

-- --------------------------------------------------------

-- 
-- Table structure for table `online`
-- 

CREATE TABLE `online` (
  `sl` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `bb` varchar(9) NOT NULL,
  PRIMARY KEY  (`sl`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `online`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `userdata`
-- 

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `batch` varchar(15) NOT NULL,
  `branch` tinytext NOT NULL,
  `dob` varchar(15) NOT NULL,
  `collegeid` int(11) default NULL,
  `alumni` tinyint(4) NOT NULL,
  `fordob` varchar(14) NOT NULL,
  `gender` varchar(8) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `userdata`
-- 

