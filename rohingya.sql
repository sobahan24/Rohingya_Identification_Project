-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2017 at 10:36 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohingya`
--

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE IF NOT EXISTS `camps` (
  `campId` int(11) NOT NULL,
  `campName` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`campId`, `campName`, `total`) VALUES
(1, 'Ukhiya', 25664),
(2, 'Kutupalong', 25100),
(3, 'Naikhengchori', 25103),
(4, 'Balukhali', 10002),
(5, 'Nayapara', 3500),
(6, 'Thayingkhali', 45720),
(7, 'Leda', 25413);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pfather` varchar(100) NOT NULL,
  `pmother` varchar(100) NOT NULL,
  `pgender` int(1) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `religion` int(1) NOT NULL,
  `blood` varchar(3) NOT NULL,
  `fingerprint` varchar(100) DEFAULT NULL,
  `personId` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `pname`, `pfather`, `pmother`, `pgender`, `photo`, `dob`, `religion`, `blood`, `fingerprint`, `personId`) VALUES
(1, 'Most. Rejiya Begum', 'Md. Aftab Hosain', 'Most. Bijli Begum', 0, '', '1985-09-12', 1, 'A+', NULL, '201710251'),
(2, 'Md. Razob Islam', 'Md. Arafat Akbar', 'Most. Sayba Begum', 1, '', '1991-01-10', 1, 'O-', NULL, '201710252'),
(3, 'Md. Arif Sikdar', 'Md. Afjal Sikdar', 'Most. Ruji Sikdar', 1, '', '1989-02-14', 1, 'B+', NULL, '201710253'),
(4, 'Most. Rukaiya Hoque', 'Md. Ridyan Hoque', 'Most. Sabiya Hoque', 0, '', '1986-09-21', 1, 'A-', NULL, '201710254'),
(5, 'Most. Aksara Begum', 'Md. Alomgir Hosain', 'Most. Marium Begum', 0, '', '0981-06-25', 1, 'AB+', NULL, '201710255'),
(6, 'Sree. Barman Dash', 'Sree. Poresh Dash', 'Sree. Santi Dash', 1, '', '0988-06-17', 2, 'B+', NULL, '201710256'),
(7, 'Md. Rujina Begum', 'Md. Sirajul Islam', 'Most. Fajetun Begum', 0, '', '0983-06-01', 1, 'O-', NULL, '201710257'),
(8, 'Md. Al-Amin', 'Md. Rahim Uddin', 'Most. Anjuna Begum', 1, '', '1992-01-04', 1, 'A-', NULL, '201710258'),
(9, 'Md. Rashed Ali', 'Md. Ra-01-Ali', 'Most. Jahanara Begum', 1, '', '1991-02-05', 1, 'O+', NULL, '201710259'),
(10, 'Hetosh Sarkar', 'Mohit Sarkar', 'Momota Sarkar', 1, '', '1992-07-12', 2, 'B-', NULL, '2017102510'),
(11, 'Shawpan Ray', 'S-01-Ray', 'Sreemoti Ray', 1, '', '1988-05-19', 2, 'AB-', NULL, '2017102511'),
(12, 'Md. Muhaiminul Islam', 'Md. Rajjak Ali', 'Most. Tanjina Begum', 1, '', '1994-05-13', 1, 'A+', NULL, '2017102512'),
(13, 'Md. Habib Islam', 'Md. Alom Islam', 'Most. Rabeya Islam', 1, '', '1990-01-12', 1, 'B-', NULL, '2017102513'),
(14, 'Md. Masud Islam', 'Md. Rashed Islam', 'Most. Morjina Islam', 1, '', '1995-05-04', 1, 'A+', NULL, '2017102514'),
(15, 'Most. -01-at Ul Firdous', 'Md. Rashid Islam', 'Most. -01-ati Begum', 0, '', '1994-07-09', 4, 'B-', NULL, '2017102515'),
(16, 'Md. Dulal Mia', 'Md. Bakkar Mia', 'Most. Fatema Begum', 1, '', '1992-08-11', 1, 'AB+', NULL, '2017102516'),
(17, 'Most. Nuha Hoque', 'Md. Polash Islam', 'Most. Marium Hoque', 0, '', '1991-01-12', 1, 'A+', NULL, '2017102517'),
(18, 'Most. Shima Banu', 'Md. Farad Islam', 'Most. Sayma Banu', 0, '', '1992-09-13', 1, 'B-', NULL, '2017102518'),
(19, 'Md. Belal Uddin', 'Md. Rajjak Uddin', 'Most. Mahabuba Hoque', 1, '', '1982-09-19', 1, 'O+', NULL, '2017102519'),
(20, 'Mithun Sarkar', 'Hitosh Sarkar', 'Rabeya Sarkar', 1, '', '1995-09-15', 2, 'A+', NULL, '2017102520'),
(21, 'Md. Mohosin Kabir', 'Md. Salman Kobir', 'Most. Rokeya Begum', 1, '', '1990-05-14', 1, 'B-', NULL, '2017102521'),
(22, 'Most. Rina Aktar', 'Md. Rajib Islam', 'Most. Sayra Aktar', 0, '', '1989-01-25', 4, 'AB-', NULL, '2017102522'),
(23, 'Most. Nasfa Aktar', 'Md. Mohosin Isbn', 'Most. Tasfiya Aktar', 0, '', '1993-09-12', 1, 'O-', NULL, '2017102523'),
(24, 'Most. Satu Begum', 'Md. Waya Islam', 'Most. Hasna Begum', 0, '', '1984-08-17', 1, 'A-', NULL, '2017102524'),
(25, 'Most. Reshma Begum', 'Md. Anisur Islam', 'Most. Morjina Begum', 0, '', '1987-05-12', 1, 'AB-', NULL, '2017102525'),
(26, 'Md. Rajib Islam', 'Md. Razob Islam', 'Most. Bijiri Begum', 1, '', '1991-01-02', 1, 'O+', NULL, '2017102526'),
(27, 'Md. Raton Mia', 'Md. Mahesh Mia', 'Most. Sonia Begum', 1, '', '1994-09-01', 1, 'A+', NULL, '2017102527'),
(28, 'Ms. Rukaiya Begum', 'Md. Habibur Rahman', 'Most. Jujekha Begum', 0, '', '1998-11-05', 1, 'O-', NULL, '2017102528'),
(29, 'Ms. Abida Islam', 'Md. Sajjadur Islam', 'Most. Rubina Islam', 0, '', '1987-04-14', 1, 'A+', NULL, '2017102529'),
(30, 'Md. Rejanur Hossion', 'Md. Tarikul Hossion', 'Most. Jorina Hossion', 1, '', '1991-02-05', 1, 'O+', NULL, '2017102530'),
(31, 'Sree. Hujafa Chondro', 'Sree. Saddam Chondro', 'Sree. Susmita Chondro', 1, '', '1993-02-09', 2, 'AB+', NULL, '2017102531'),
(32, 'Most. Sahina Shikh', 'Md. Sajjadur Shikh', 'Most. Parul Shikh', 0, '', '1994-05-09', 1, 'B+', NULL, '2017102532'),
(33, 'Md. Bappi Hasan', 'Md. Atikur Hasan', 'Most. Parul Hasan', 1, '', '1992-01-04', 1, 'B+', NULL, '2017102533'),
(34, 'Md. Hannan Chowdhury', 'Md. Sojol Chowdhury', 'Most. Tuli Chowdhury', 1, '', '1992-01-28', 1, 'O-', NULL, '2017102534'),
(35, 'Sree. Susmita Sinha', 'Md. Sojol Sinha', 'Most. Tuli Sinha', 0, '', '1996-05-21', 2, 'O-', NULL, '2017102535'),
(36, 'Md. Jafor Iqbal', 'Md. Mohasin Iqbal', 'Most. Mohima Iqbal', 1, '', '1992-05-19', 1, 'O+', NULL, '2017102536'),
(37, 'Md. Mominur Islam', 'Md. Mamunur Islam', 'Most. Jorina Islam', 1, '', '1995-05-19', 1, 'O+', NULL, '2017102537'),
(38, 'Most. Tarana Begum', 'Md. Selim Hossion', 'Most. Mohona Begum', 0, '', '1988-01-10', 1, 'B-', NULL, '2017102538'),
(39, 'Most. Mohona Begum', 'Md. Mominur Islam', 'Most. Sofura Begum', 0, '', '1998-07-01', 1, 'O+', NULL, '2017102539'),
(40, 'Md. Azizul Haque', 'Md. Sahirul Haque', 'Most. Mazida Haque', 1, '', '1984-09-05', 1, 'A+', NULL, '2017102540'),
(41, 'Md. Jabed Alam', 'Md. Jukfikar Alam', 'Most. Hasina Alam', 1, '', '1984-01-01', 1, 'A+', NULL, '2017102541'),
(42, 'Md. Sujon Khan', 'Md. Tanvir Khan', 'Most. Josna Islam Khan', 1, '', '1965-09-08', 1, 'B-', NULL, '2017102542'),
(43, 'Md. Liton Sarkar', 'Md. Sohidul Sarker', 'Most. Golsay Sarker', 1, '', '1961-09-07', 1, 'B-', NULL, '2017102543'),
(44, 'Most. Adiba Hossion', 'Md. Tanvir Hossion', 'Most. Afrin Hossion', 0, '', '1995-07-01', 1, 'A+', NULL, '2017102544'),
(45, 'Most. Niju Sarkar', 'Md. Harun Sarkar', 'Most. Mitu Sarkar', 0, '', '1995-08-03', 1, 'A+', NULL, '2017102545'),
(46, 'Md. Khokon Aziz', 'Md. Faruk Aziz', 'Most. Nazma Aziz', 1, '', '1994-11-24', 1, 'O+', NULL, '2017102546'),
(47, 'Most. Sinthi Sarkar', 'Md. Samim Sarkar', 'Most. Shirin Sarkar', 0, '', '1992-08-03', 1, 'B+', NULL, '2017102547'),
(48, 'Sree. Debanon Bosu', 'Sree. Johorlal Bosu', 'Sree. Sujiha Bosu', 1, '', '1995-01-03', 2, 'O-', NULL, '2017102548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`campId`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `campId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
