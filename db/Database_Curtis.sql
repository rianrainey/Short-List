-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2011 at 11:37 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `shortlist_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `trait_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` VALUES(1, 'I work well with teams -- I work well on my team', 1);
INSERT INTO `questions` VALUES(2, 'I actively participate in meetings -- I interject my opinion at opportune times', 2);
INSERT INTO `questions` VALUES(3, 'I value what others think of me -- I do not allow other''s opinions to affect my self-confidence', 3);
INSERT INTO `questions` VALUES(4, 'I prefer verbal presentations -- I prefer written reports', 2);
INSERT INTO `questions` VALUES(5, 'Other people help me -- Other people get in my way', 1);
INSERT INTO `questions` VALUES(6, 'I enjoy telling stories -- I enjoy listening to stories', 2);
INSERT INTO `questions` VALUES(7, 'I very much like doing practical things that have a tangible result -- I very much like thinking about what is in the unknown', 4);
INSERT INTO `questions` VALUES(8, 'I judge myself against the achievements of others -- I judge myself against my own expectations', 3);
INSERT INTO `questions` VALUES(9, 'I very much like taking care of other people''s feelings -- I very much like forming my own opinion', 1);
INSERT INTO `questions` VALUES(10, 'I usually make logical decisions -- I usually go with my gut', 4);
INSERT INTO `questions` VALUES(11, 'I like to overcome opposition to get people to do what they''re supposed to -- I really enjoy having my own moral compass to guide my thoughts', 3);
INSERT INTO `questions` VALUES(12, 'I get annoyed if people don''t know how to follow instructions -- I get annoyed if people insist on following procedures', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` VALUES(1, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `traits`
--

CREATE TABLE `traits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `traits`
--

INSERT INTO `traits` VALUES(1, 'Team Oriented');
INSERT INTO `traits` VALUES(2, 'Communication Style');
INSERT INTO `traits` VALUES(3, 'Competitiveness');
INSERT INTO `traits` VALUES(4, 'Work Environment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'Rian', 'RaineyRasdfasDFSDFSFDS', 'rian@rianrainey.com', NULL);
