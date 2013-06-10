-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2013 at 03:27 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `first_name`, `last_name`) VALUES
(1, 'Adam', 'Carter'),
(2, 'Isobelle', 'Lamb'),
(3, 'Jimmy', 'Sharpe'),
(4, 'Paul', 'Kemp');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `description`) VALUES
(1, 'Cut Dry and Style'),
(2, 'Dry and Style'),
(3, 'Full Head Highlights'),
(4, 'Half Head Highlights');

-- --------------------------------------------------------

--
-- Table structure for table `service_role_price`
--

CREATE TABLE IF NOT EXISTS `service_role_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_role_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_role_id` (`staff_role_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_role_price`
--

INSERT INTO `service_role_price` (`id`, `staff_role_id`, `service_id`, `price`) VALUES
(1, 1, 1, '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `staff_role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  KEY `staff_role_id` (`staff_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `person_id`, `staff_role_id`) VALUES
(1, 1, 4),
(2, 2, 3),
(3, 3, 4),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_role`
--

CREATE TABLE IF NOT EXISTS `staff_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff_role`
--

INSERT INTO `staff_role` (`id`, `description`) VALUES
(1, 'Junior'),
(2, 'Stylist'),
(3, 'Senior Stylist'),
(4, 'Director');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_role_price`
--
ALTER TABLE `service_role_price`
  ADD CONSTRAINT `service_role_price_ibfk_1` FOREIGN KEY (`staff_role_id`) REFERENCES `staff` (`staff_role_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_role_price_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`staff_role_id`) REFERENCES `staff_role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;
