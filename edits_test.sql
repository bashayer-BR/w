-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 12:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edits_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_edits`
--

CREATE TABLE `info_edits` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(40) NOT NULL,
  `branch_code` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `date_in` date NOT NULL,
  `bil_num` int(11) NOT NULL,
  `parcode` int(11) NOT NULL,
  `old_size` int(5) NOT NULL,
  `count` int(10) NOT NULL,
  `reciption` varchar(50) NOT NULL,
  `recption_date` date NOT NULL,
  `new_size` int(5) NOT NULL,
  `tailor_name` varchar(50) NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `info_edits`
--

INSERT INTO `info_edits` (`id`, `branch_name`, `branch_code`, `provider`, `date_in`, `bil_num`, `parcode`, `old_size`, `count`, `reciption`, `recption_date`, `new_size`, `tailor_name`, `notes`) VALUES
(7, 'Alzahrani', 201, 'وليد', '2023-11-01', 123456, 234567890, 56, 2, 'الياس', '2023-11-07', 57, 'فضل', 'طقطق'),
(9, 'Alzahrani', 201, 'وليد', '2023-11-01', 1234, 4567, 54, 234, 'الياس', '2023-11-08', 56, 'فضل', 'طقطق'),
(10, 'Tabouk', 205, 'بشاير', '2023-11-09', 34567, 345678, 45, 3, 'بشايرين', '2023-11-05', 56, 'فضل', 'قص'),
(17, 'Baha', 208, 'عبد السلام', '2023-11-01', 2309, 65765, 58, 1, 'وسيم', '2023-11-07', 70, 'ايهاب', 'طقطق'),
(20, 'Store', 213, 'صلاح', '2023-11-05', 2346, 456789, 40, 3, 'احمد', '2023-11-17', 45, 'حامد', 'خياطة'),
(21, 'Rania', 203, 'ابراهيم', '2023-11-17', 12345678, 4567890, 70, 1, 'عبدالغني', '2023-11-08', 60, 'عجيب', 'قص'),
(46, 'Jory', 216, 'عدي', '2023-11-02', 1234567, 234, 50, 2, 'قصي', '2023-11-17', 55, 'فجر', 'مافي شي'),
(52, 'Jizan', 220, 'عبده', '2023-11-09', 3490, 89, 50, 2, 'عبدالله', '2023-11-03', 45, 'فهد', 'قص و طقطق'),
(131, 'Riyadh', 218, 'جميل', '2023-11-03', 1230985, 543, 80, 1, 'يوسف', '2023-11-05', 75, 'ياسر', 'قص '),
(134, 'Rania', 203, 'بشاير', '2023-11-03', 2255, 244, 54, 2, 'محمد', '2023-11-10', 52, 'الياس', 'تعديل الطول و الاكمام '),
(135, 'Makka', 202, 'عبدالله', '2023-11-10', 8102, 234, 54, 1, '', '0000-00-00', 0, '', ''),
(136, 'Makka', 202, 'سيف', '2023-11-17', 5678, 76, 78, 3, '', '0000-00-00', 0, '', ''),
(137, 'Makka', 202, 'عيسى', '2023-11-10', 9875, 54, 43, 2, '', '0000-00-00', 0, '', ''),
(142, 'Rania', 203, 'بشاير', '2023-11-01', 6910, 345, 70, 34, '', '0000-00-00', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_edits`
--
ALTER TABLE `info_edits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bil_num` (`bil_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_edits`
--
ALTER TABLE `info_edits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
