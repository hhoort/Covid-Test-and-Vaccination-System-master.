-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 12:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Email`, `position`, `Date Of Birth`, `Address`, `Gender`, `Password`, `Image`) VALUES
(1, 'Zain', 'zainsarfraz82@gmail.com', 'General Manager', '2003-05-27', 'North Karachi', 'Male', 'zain', 'mine pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `pid` int(11) NOT NULL,
  `pname` int(255) NOT NULL,
  `hospital name` int(255) NOT NULL,
  `vaccine` int(255) NOT NULL,
  `visit date` date NOT NULL,
  `Time` time NOT NULL,
  `pstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `Status2` tinyint(4) NOT NULL DEFAULT 1,
  `PStatus3` varchar(40) NOT NULL DEFAULT 'Waiting',
  `PStatus33` varchar(255) NOT NULL DEFAULT 'Waiting',
  `Dose` varchar(255) NOT NULL DEFAULT 'Pending',
  `Report` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`pid`, `pname`, `hospital name`, `vaccine`, `visit date`, `Time`, `pstatus`, `Status2`, `PStatus3`, `PStatus33`, `Dose`, `Report`) VALUES
(1, 1, 1, 3, '2023-11-06', '04:28:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', '1.pdf'),
(2, 1, 3, 2, '2023-11-08', '15:02:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', 'Marrukh bilal.pdf'),
(3, 1, 2, 3, '2023-11-24', '01:00:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', 'Mahnoor Ahsan.pdf'),
(4, 1, 1, 3, '2026-04-03', '03:01:00', 'Approve', 1, 'Delivered', 'Delivered', 'First', 'Syed Muhammad Zain Sarfraz.pdf'),
(5, 6, 2, 3, '2023-11-25', '02:01:00', 'Reject', 1, 'Waiting', 'Waiting', 'Pending', ''),
(6, 5, 2, 2, '2023-11-10', '17:52:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', 'Hey faizy.pdf'),
(7, 2, 2, 4, '2023-11-09', '16:02:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', 'Syed Muhammad Zain Sarfraz.pdf'),
(8, 4, 2, 3, '2023-02-01', '13:00:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', 'Mahnoor Sarfraz.pdf'),
(11, 11, 2, 2, '2023-01-03', '14:02:00', 'Approve', 1, 'Delivered', 'Delivered', 'Second', 'Mahnoor Ahsan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Hospital Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Password` varchar(255) NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `Himage` varchar(255) NOT NULL,
  `Status` varchar(40) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `username`, `Hospital Name`, `Location`, `Address`, `Date`, `Password`, `profileImage`, `Himage`, `Status`) VALUES
(1, 'Zain', 'Karachi Central Hospital', 'North Karachi ', 'W3PG+X9M, Shahrah-E-Aurangzeb, Federal B Area Block 17 Gulberg Town, Karachi, Karachi City, Sindh', '2023-10-16', '$2y$10$gaXYfn63OGcwW3iasqaoQuCZHcmSO4Jcp/veY89BGhQ7LUhIplQcS', 'ZAIN SARFRAZ.jpg', 'Central_Hospital.jpg', 'Reject'),
(2, 'Tooba', 'Patel Hospital', 'Gulshan-e-Iqbal', 'ST-18, Block 4 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh 75300', '2023-10-15', '$2y$10$myQGGx91aDnzB2x42cAnOuRBLhHFbb/hCNZQDVOW9K4dbAHEn7p.S', 'images (2).jpeg', 'Patel Hospital.jpeg', 'Approve'),
(3, 'Aqsa', 'Aga Khan University Hospital Medical Centre ', 'North Karachi ', 'Markaz-e-Irfan, ST 7/A Shahrah-e-Usman, Sector 5c/4 Sector 5 C 4 , Karachi, Karachi City, Sindh 75850', '2023-10-16', '$2y$10$YLrkoY1KqblVsf11g3pEOODuItlh7vKvdMjygx3xLIVfjVRC3Ou5O', 'random.jpeg', 'Aga Khan.jpeg', 'Approve'),
(5, 'zainsarfraz', 'AlRayaz Hospital', 'Gulshan-e-Iqbal', 'Markaz-e-Irfan, ST 7/A Shahrah-e-Usman, Sector 5c/4 Sector 5 C 4 New Karachi Town, Karachi, Karachi City, Sindh 75850', '2023-11-22', '$2y$10$af01ysNRbCxDSzFCJQpA3uCEqBXkWROSq3scP.0n4TmEx/nMYN8Qu', 'mine1.jpg', 'download.jpeg', 'Reject'),
(6, 'Zain', 'Jinnah Hospital', 'Saddar', 'Saddar', '2023-11-22', '$2y$10$Jbm52AhHxUTl.ZyRPEKXQOy5RJ/NaNCbJIPAnZ1FupyWDk/3PPUZu', 'mine2.jpg', 'download.jpeg', 'Approve'),
(7, 'zainsarfraz', 'hamdard hospital', 'nazimabad', 'nazimabad', '2023-02-02', '$2y$10$cJyZsMMHYF5JvgD3vB4EdepXn/BbUnxQ3.lfcR2CGdSqodNq7hKSm', 'j..jpg', 'random.jpeg', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `paitent`
--

CREATE TABLE `paitent` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(40) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paitent`
--

INSERT INTO `paitent` (`id`, `Username`, `Email`, `City`, `Area`, `Password`, `Image`, `Status`) VALUES
(1, 'Zain Sarfraz', 'zainsarfraz82@gmail.com', 'Karachi', 'North Karachi', '$2y$10$aUE2mTYnwYVzYexAr9GlG.oNz2bAYgrtSxoJLP8K/hryNFdgkgWmq', 'mine pic.jpg', '1'),
(2, 'Tooba', 'tooba@gmail.com', 'Karachi', 'New Karachi', '$2y$10$P91eA43BanLvvZffvla.Fe0gu7ZzBGy974IFh3cdJIywAqdwcWJTi', 'random.jpeg', '1'),
(3, 'Aqsa', 'aqsa@gmail.com', 'Karachi', 'North Nazimabad', '$2y$10$0TPSE5JglXAqlH8xqd/k1OweXTCwSa.X3HH1DAG4KkDHcab3aIQF.', 'barbie 1.jpeg', '1'),
(4, 'Ebad', 'ebad@gmail.com', 'Karachi', 'Gulistan-e-Jauhar', '$2y$10$0lZ3jUoSzHYSYunLPcLpiu.bGPWzRKsko7BnQXslMXgYc3i9babJa', 'images.jpeg', '1'),
(5, 'Tayyaba', 'tayyaba@gmail.com', 'Lahore', 'Islampura', '$2y$10$qBk/cAUeQE916yjqV2IVouwSRpurPURttlUb9Je9ng9.jNZ9oE5U2', 'random.jpeg', '1'),
(6, 'Ali', 'ali@gmail.com', 'Sukkur', 'SSP Office', '$2y$10$ED1Nt4cPbTUHaEPM9l4B1OJU2.exoplqDm8akpNgqAXiLrS8lfne.', 'ZAIN SARFRAZ.jpg', '1'),
(8, 'Zain Sarfraz', 'zainsarfraz745@gmail.com', 'karachi', 'north karachi', '$2y$10$TpBUp2vsMJBfJjcOVjg3sOgB/24Bb6fnCSa6.TgYCxoEE1nB6HXHu', '', '1'),
(9, 'zainsarfraz', 'zain@gmail.com', 'karachi', 'north karachi', '$2y$10$PVX70uUQ2bFdOXXCcb062ek7V5e.SCt04/.YApHfduoc24YXVf4jW', '', '1'),
(10, 'zainsarfraz', 'zainsarfraz823@gmail.com', 'karachi', 'north karachi', '$2y$10$VvdN6dgeHmBVVzRU6BrFdeTPevj2wIH7ua/E0AlRXP7ZiN3jEFYFu', '', '1'),
(11, 'zainsarfrazs', 'mahrukhbilal20011@gmail.com', 'karachi', 'karachi', '$2y$10$aDNYglJL2xuuboiFEXM1uuZ94V/vPpcY4.jDuWgDG616JwooY0Bpe', 'pexels-mudassir-ali-1809576 (3).jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `readmore`
--

CREATE TABLE `readmore` (
  `Rid` int(11) NOT NULL,
  `Rname` varchar(255) NOT NULL,
  `Remail` varchar(255) NOT NULL,
  `Rcity` varchar(255) NOT NULL,
  `Rmessage` varchar(255) NOT NULL,
  `Rreply` varchar(255) NOT NULL,
  `Rstatus` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `readmore`
--

INSERT INTO `readmore` (`Rid`, `Rname`, `Remail`, `Rcity`, `Rmessage`, `Rreply`, `Rstatus`) VALUES
(1, 'Zain Sarfraz', 'zainsarfraz82@gmail.com', 'Karachi', 'Zain Here', 'So What Can I do Bro', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `tid` int(11) NOT NULL,
  `tname` int(11) NOT NULL,
  `thospital` int(255) NOT NULL,
  `tdate` date NOT NULL,
  `ttime` time NOT NULL,
  `tstatus` varchar(255) NOT NULL DEFAULT 'Pending',
  `Dstatus` varchar(255) NOT NULL DEFAULT 'Pending',
  `city` int(11) NOT NULL,
  `Report` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `tname`, `thospital`, `tdate`, `ttime`, `tstatus`, `Dstatus`, `city`, `Report`) VALUES
(1, 1, 1, '2023-10-19', '14:00:00', 'Negative', 'Pending', 0, 'Hey faizy.pdf'),
(2, 1, 2, '2023-11-15', '18:02:00', 'Negative', 'Recover', 0, 'Mahnoor Ahsan.pdf'),
(3, 6, 3, '2023-02-02', '13:00:00', 'Negative', 'Pending', 0, 'Hey faizy.pdf'),
(5, 5, 2, '2023-11-15', '18:40:00', 'Negative', 'Pending', 0, 'Hey faizy.pdf'),
(6, 11, 2, '2023-01-01', '13:00:00', 'Negative', 'Pending', 0, 'Mahnoor Ahsan.pdf'),
(7, 11, 6, '2023-03-02', '14:01:00', 'Negative', 'Recover', 0, 'Mahnoor Ahsan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` int(11) NOT NULL,
  `Vaccine` varchar(255) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'Out Of Stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `Vaccine`, `status`) VALUES
(1, 'Novavax', 'Out Of Stock'),
(2, 'Pfizer-BioNTech', 'Available'),
(3, 'Oxford-Astrazeneca', 'Available'),
(4, 'Sinopharm BIBP', 'Available'),
(5, 'Moderna', 'Available'),
(6, 'Janssen', 'Out Of Stock'),
(7, 'Coronavac', 'Available'),
(8, 'Covaxin', 'Out Of Stock'),
(9, 'Convidecia', 'Out Of Stock'),
(10, 'Sanofi-GSK', 'Out Of Stock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `fk` (`hospital name`),
  ADD KEY `vac` (`vaccine`),
  ADD KEY `us` (`pname`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paitent`
--
ALTER TABLE `paitent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readmore`
--
ALTER TABLE `readmore`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `foriegnkey` (`thospital`),
  ADD KEY `fkss` (`tname`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paitent`
--
ALTER TABLE `paitent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `readmore`
--
ALTER TABLE `readmore`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk` FOREIGN KEY (`hospital name`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `us` FOREIGN KEY (`pname`) REFERENCES `paitent` (`id`),
  ADD CONSTRAINT `vac` FOREIGN KEY (`vaccine`) REFERENCES `vaccines` (`id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fkss` FOREIGN KEY (`tname`) REFERENCES `paitent` (`id`),
  ADD CONSTRAINT `foriegnkey` FOREIGN KEY (`thospital`) REFERENCES `hospital` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
