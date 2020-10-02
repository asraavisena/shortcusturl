-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 02, 2020 at 03:16 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custurl`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `url_id` int(3) NOT NULL,
  `url_long` varchar(255) DEFAULT NULL,
  `url_short` varchar(255) DEFAULT NULL,
  `url_base` varchar(255) DEFAULT NULL,
  `url_date` date NOT NULL,
  `url_views_count` int(11) DEFAULT '0',
  `url_author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`url_id`, `url_long`, `url_short`, `url_base`, `url_date`, `url_views_count`, `url_author`) VALUES
(21, 'https://simonecarletti.com/blog/2009/01/apache-query-string-redirects/', '/shortCusturl/s/9caaa', '9caaa', '2020-09-28', 4, NULL),
(22, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/dac6f', 'dac6f', '2020-09-28', 1, NULL),
(23, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/7d198', '7d198', '2020-09-28', 0, NULL),
(24, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/37e83', '37e83', '2020-09-28', 0, NULL),
(25, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/451bb', '451bb', '2020-09-28', 0, NULL),
(26, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/72eae', '72eae', '2020-09-28', 0, NULL),
(27, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/0f94d', '0f94d', '2020-09-28', 0, NULL),
(28, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/0cba1', '0cba1', '2020-09-28', 0, NULL),
(29, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/3de7b', '3de7b', '2020-09-28', 0, NULL),
(30, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/315d6', '315d6', '2020-09-28', 0, NULL),
(31, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/dca5b', 'dca5b', '2020-09-28', 0, NULL),
(32, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/11913', '11913', '2020-09-28', 0, NULL),
(33, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/b6e57', 'b6e57', '2020-09-28', 0, NULL),
(34, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/2736f', '2736f', '2020-09-28', 0, NULL),
(35, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/f80c6', 'f80c6', '2020-09-28', 0, NULL),
(36, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/2f668', '2f668', '2020-09-28', 0, NULL),
(37, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/740ee', '740ee', '2020-09-28', 0, NULL),
(38, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/dfdfd', 'dfdfd', '2020-09-28', 0, NULL),
(39, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/9f41f', '9f41f', '2020-09-28', 0, NULL),
(40, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/31268', '31268', '2020-09-28', 0, NULL),
(41, 'https://www.php.net/manual/en/function.md5.php', '/shortCusturl/s/9664c', '9664c', '2020-09-28', 0, NULL),
(108, 'https://getbootstrap.com/docs/4.0/components/buttons/', '/shortCusturl/s/71368', '71368', '2020-09-29', 1, 'KH'),
(109, 'https://getbootstrap.com/docs/4.0/components/buttons/', '/shortCusturl/s/c1cf5', 'c1cf5', '2020-09-29', 0, 'KH'),
(110, 'https://getbootstrap.com/docs/4.0/components/buttons/', '/shortCusturl/s/bdb1d', 'bdb1d', '2020-09-29', 0, 'KH'),
(111, 'https://drive.google.com/drive/u/2/my-drive', '/shortCusturl/s/06513', '06513', '2020-09-29', 0, 'Asra'),
(112, 'https://drive.google.com/drive/u/2/my-drive', '/shortCusturl/s/0c0ca', '0c0ca', '2020-09-29', 0, 'Asra'),
(114, 'https://getbootstrap.com/docs/4.0/components/buttons/', '/shortCusturl/s/71368', '71368', '2020-09-29', 1, 'KH'),
(124, 'https://getbootstrap.com/docs/4.0/components/buttons/', '/shortCusturl/s/24fd0', '24fd0', '2020-09-29', 1, 'Asra'),
(137, 'https://www.techonthenet.com/mysql/is_null.php', '/shortCusturl/s/14c56', '14c56', '2020-09-29', 0, 'ovi'),
(138, 'https://www.techonthenet.com/mysql/is_null.php', '/shortCusturl/s/6325c', '6325c', '2020-09-29', 0, 'ovi'),
(139, 'https://www.techonthenet.com/mysql/is_null.php', '/shortCusturl/s/d257f', 'd257f', '2020-09-29', 0, 'ovi'),
(140, 'https://www.techonthenet.com/mysql/is_null.php', '/shortCusturl/s/18adc', '18adc', '2020-09-29', 1, 'ovi'),
(141, 'https://www.techonthenet.com/mysql/is_null.php', '/shortCusturl/s/cb2a3', 'cb2a3', '2020-09-29', 1, 'ovi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`) VALUES
(3, 'Asra', 'test123'),
(4, 'KH', '123test'),
(5, 'ovi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `url_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
