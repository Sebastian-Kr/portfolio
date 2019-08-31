-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: 192.168.101.148
-- Generation Time: Feb 01, 2018 at 06:19 PM
-- Server version: 5.6.36-82.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `progremo_paw_agh`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(111) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `product_desc` varchar(333) COLLATE utf8_unicode_ci NOT NULL,
  `product_dates` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_color` char(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_dates`, `product_stock`, `product_color`) VALUES
(55, 'Kurs sztuki współczesnej', 'Wtorek 17:00 - 18:00', '30-01-2018; 06-02-2018; 13-02-2018; 20-02-2018; 27-02-2018; 06-03-2018; 13-03-2018; 20-03-2018; 27-03-2018;', 13, '#00b295'),
(56, 'Intensywny kurs na ASP', 'Czwartek 16:00 - 20:00', '01-02-2018; 08-02-2018; 15-02-2018; 22-02-2018; 01-03-2018; 08-03-2018; 15-03-2018; 22-03-2018; ', 0, '#6b95ff'),
(58, 'Sobotnia akademia sztuki współczesnej', 'Sobota 11.00 - 15.00', '27-01-2018; 03-02-2018; 10-02-2018; 17-02-2018; 24-02-2018; 03-03-2018; 10-03-2018; 10-03-2018; 24-03-2018; ', 11, '#8772f9'),
(70, 'Intensywny kurs niedzielny', 'Niedziela 13.00 - 20.00', '28-01-2018; 04-02-2018; 11-02-2018; 18-02-2018; 04-03-2018; 11-03-2018; 25-03-2018', 15, '#3d85b9');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(111) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `checkin_date` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Nowa',
  `product_id` int(111) NOT NULL,
  `firstname` varchar(111) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `username`, `phone`, `checkin_date`, `status`, `product_id`, `firstname`) VALUES
(128, 'skrajewski@progremo.pl', '1234556789', '2018-01-16', 'nowa', 55, 'Tomasz Kowalewski'),
(135, 'skrajewski@progremo.pl', '123456789', '2018-01-18', 'Nowa', 55, 'Sebastian Krajewski'),
(156, 'skrajewski@progremo.pl', '888524734', '2018-01-18', 'Nowa', 70, 'Jakub Krajewski'),
(158, 'spam@progremo.pl', '333928123', '2018-01-18', 'nowa', 55, 'Zygmunt Jakubiak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `pass`, `email`) VALUES
(1, 'admin', 'admin123', 'admin@progremo.pl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
