-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 05:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic`
--

-- --------------------------------------------------------

--
-- Table structure for table `loc1`
--

CREATE TABLE `loc1` (
  `lid` int(6) NOT NULL,
  `coordinates` text NOT NULL,
  `stime1` time NOT NULL,
  `etime1` time NOT NULL,
  `stime2` time NOT NULL,
  `etime2` time NOT NULL,
  `color1` text NOT NULL,
  `color2` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loc1`
--

INSERT INTO `loc1` (`lid`, `coordinates`, `stime1`, `etime1`, `stime2`, `etime2`, `color1`, `color2`, `location`) VALUES
(1, '{lat: 14.596142, lng: 121.020453 },\n	  {lat: 14.5936704713027014, lng: 121.02709919214249},\n          {lat: 14.592492032635075, lng: 121.02951854467392},\n          {lat: 14.592164975850958, lng: 121.03008180856705 },\n          {lat: 14.59055045031902 , lng: 121.03370815515518 },\n          {lat: 14.589984584870022 , lng: 121.03471666574478 },\n          {lat: 14.589418717966325 , lng: 121.03532820940018 },\n          {lat: 14.589558886967916, lng: 121.03993624448776 },\n          {lat: 14.589050124980666 , lng: 121.04217857122421 },\n          {lat: 14.587274640262672 , lng: 121.0463896393776 },\n          {lat: 14.571896890147004 , lng: 121.06457501649857 },\n          {lat: 14.570323751212795, lng: 121.06647938489914 }', '07:00:00', '10:00:00', '16:00:00', '22:00:00', 'blue', 'red', 'Bluebar Shaw'),
(2, '{lat: 14.5678, lng: 121.037434 },\n	  {lat: 14.568507, lng: 121.037262},\n          {lat: 14.569368 , lng: 121.036189},\n          {lat: 14.569711 , lng: 121.036243 },\n          \n          {lat: 14.570365  , lng: 121.036758 },\n          {lat: 14.571206  , lng: 121.037369 },\n          {lat: 14.575734 , lng: 121.041119 },\n          {lat: 14.578101  , lng: 121.04275 },\n          {lat: 14.579472  , lng: 121.045883 }', '07:00:00', '10:00:00', '16:00:00', '22:00:00', 'blue', 'red', 'Barangka Drive'),
(3, '{lat: 14.572619, lng: 121.029017 }, 	  {lat: 14.576606 , lng: 121.033137}', '00:00:00', '00:00:00', '16:00:00', '22:00:00', 'blue', 'red', 'Coronado to City Hall'),
(4, '{lat: 14.576684, lng: 121.034781 },\n	  {lat: 14.576206 , lng: 121.035157},\n          {lat: 14.575858 , lng: 121.035607},\n          {lat: 14.575752 , lng: 121.035926 },\n          {lat: 14.575756 , lng: 121.036079 },\n          {lat: 14.575852 , lng: 121.036419},\n          {lat: 14.576043 , lng: 121.037264 },\n          {lat: 14.576328  , lng: 121.038433 },\n	  {lat: 14.576575  , lng: 121.039613 },\n	  {lat: 14.576572  , lng: 121.039836 },\n	  {lat: 14.576529  , lng: 121.03998 },\n	  {lat: 14.575822  , lng: 121.041059 },\n	  {lat: 14.573844  , lng: 121.043992 },\n	  {lat: 14.57333  , lng: 121.045521 },\n	  {lat: 14.573143  , lng: 121.046106 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'green', 'green', 'Boni Avenue1'),
(5, '{lat: 14.578143, lng: 121.032965 },\r\n	  {lat: 14.581175 , lng: 121.029446},\r\n          {lat: 14.584871 , lng: 121.027129},\r\n          {lat: 14.58566 , lng: 121.025927 },\r\n          {lat: 14.589979 , lng: 121.02288 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'blue', 'red', 'Boni Avenue2'),
(6, '{lat: 14.572452, lng: 121.029017 },\r\n	  {lat: 14.56834 , lng: 121.033523},\r\n          {lat: 14.569753 , lng: 121.035368},\r\n          {lat: 14.56967 , lng: 121.036227 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'blue', 'red', 'Hulo (Coronado)'),
(7, '{lat: 14.578137, lng: 121.034921 },\n	  {lat: 14.578361 , lng: 121.035312},\n          {lat: 14.579721 , lng: 121.036044},\n          {lat: 14.587404 , lng: 121.037933 },\n          {lat: 14.589543 , lng: 121.03701 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'blue', 'red', 'City Hall to F. Martinez'),
(8, '{lat: 14.57673, lng: 121.023363 },\n	  {lat: 14.579015 , lng: 121.020724},\n          {lat: 14.582337 , lng: 121.020938},\n          {lat: 14.585203 , lng: 121.021475 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Vergara'),
(9, '{lat: 14.587861, lng: 121.024436 },\n	  {lat: 14.589647 , lng: 121.023191},\n          {lat: 14.591765 , lng: 121.025895},\n          {lat: 14.593655 , lng: 121.027011 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Kalentong'),
(11, '{lat: 14.573532, lng: 121.027912 },\r\n	  {lat: 14.574669 , lng: 121.028124},\r\n          {lat: 14.576777 , lng: 121.027341},\r\n          {lat: 14.577322 , lng: 121.027038 },\r\n          {lat: 14.581413 , lng: 121.029377 },\r\n          {lat: 14.586034  , lng: 121.031855 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Coronado to Primo Cruz'),
(12, '{lat: 14.583968, lng: 121.027907 },\r\n	  {lat: 14.586107 , lng: 121.031866},\r\n          {lat: 14.58647 , lng: 121.032767},\r\n          {lat: 14.586636 , lng: 121.032993 },\r\n          {lat: 14.587093 , lng: 121.035321 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'F. Ortigas'),
(13, '{lat: 14.58708 , lng: 121.035343},\n	  {lat: 14.586491, lng: 121.036651 },\n	  {lat: 14.586584 , lng: 121.037123},\n          {lat: 14.587768 , lng: 121.037831}', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Fabella Road'),
(14, '{lat: 14.572681, lng: 121.028894 },\r\n	  {lat: 14.573501 , lng: 121.027886},\r\n          {lat: 14.574654 , lng: 121.028132},\r\n          {lat: 14.576751 , lng: 121.027349 },\r\n          {lat: 14.577291 , lng: 121.027049 },\r\n          {lat: 14.581258  , lng: 121.029302 },\r\n	  {lat: 14.586055  , lng: 121.031855 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Coronado to F. Blumentrit to Primo Cruz'),
(15, '{lat: 14.576851, lng: 121.023165 },\r\n	  {lat: 14.576398 , lng: 121.024305},\r\n          {lat: 14.576606 , lng: 121.023858},\r\n          {lat: 14.576393 , lng: 121.024317 },\r\n          {lat: 14.576144 , lng: 121.024659 },\r\n          {lat: 14.575531  , lng: 121.025319 },\r\n	  {lat: 14.574755  , lng: 121.02621 },\r\n	  {lat: 14.57348  , lng: 121.027899 }\r\n', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'JP Rizal'),
(16, '{lat: 14.586091 , lng: 121.020998},\n          {lat: 14.58636 , lng: 121.021558},\n          {lat: 14.586755 , lng: 121.022364 },\n          {lat: 14.587342 , lng: 121.023509 },\n          {lat: 14.587706  , lng: 121.024064 },\n	  {lat: 14.587926  , lng: 121.024459 }', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Mabini');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `userName` varchar(25) DEFAULT NULL,
  `password` text,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `age` text,
  `address` text,
  `telephone` text,
  `cellphone` text,
  `email` text,
  `authority` text,
  `secretquestion` text NOT NULL,
  `sqanswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userID`, `userName`, `password`, `firstname`, `middlename`, `lastname`, `age`, `address`, `telephone`, `cellphone`, `email`, `authority`, `secretquestion`, `sqanswer`) VALUES
(000001, 'admin', '123456qA', 'fafsaf', 'fafaf', 'fafasf', '25', 'fasfsafasf', '151626', '26662', 'asfsaf@aff', 'admin', 'How old are you?', 'asdf'),
(000002, 'francis', '123456qA', 'francis', 'aguilar', 'magalona', NULL, NULL, NULL, NULL, 'magalona@gmail.com', 'user', 'How old are you?', 'zxcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loc1`
--
ALTER TABLE `loc1`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loc1`
--
ALTER TABLE `loc1`
  MODIFY `lid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
