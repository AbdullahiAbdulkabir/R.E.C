-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 10:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rec`
--

-- --------------------------------------------------------

--
-- Table structure for table `adhkar_after_salat`
--

CREATE TABLE `adhkar_after_salat` (
  `email` varchar(35) NOT NULL,
  `subh` int(5) NOT NULL,
  `zuhr` int(5) NOT NULL,
  `asr` int(5) NOT NULL,
  `magrib` int(5) NOT NULL,
  `isha` int(5) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adhkar_after_salat`
--

INSERT INTO `adhkar_after_salat` (`email`, `subh`, `zuhr`, `asr`, `magrib`, `isha`, `total`) VALUES
('badguy@yeah.sweet', 9, 9, 9, 9, 9, 45);

-- --------------------------------------------------------

--
-- Table structure for table `adhkar_m_e`
--

CREATE TABLE `adhkar_m_e` (
  `email` varchar(35) NOT NULL,
  `morning` int(5) NOT NULL,
  `evening` int(5) NOT NULL,
  `total` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adhkar_m_e`
--

INSERT INTO `adhkar_m_e` (`email`, `morning`, `evening`, `total`) VALUES
('badguy@yeah.sweet', 1, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `daily_activities`
--

CREATE TABLE `daily_activities` (
  `email` varchar(35) NOT NULL,
  `tarawih` int(5) NOT NULL,
  `family_ties` int(5) NOT NULL,
  `iftar_saim` int(5) NOT NULL,
  `sadaqah` int(5) NOT NULL,
  `salat_duha` int(5) NOT NULL,
  `salat_taobah` int(5) NOT NULL,
  `salat_tasbih` int(5) NOT NULL,
  `book_reading` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daily_activities`
--

INSERT INTO `daily_activities` (`email`, `tarawih`, `family_ties`, `iftar_saim`, `sadaqah`, `salat_duha`, `salat_taobah`, `salat_tasbih`, `book_reading`) VALUES
('badguy@yeah.sweet', 3, 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quran`
--

CREATE TABLE `quran` (
  `email` varchar(35) NOT NULL,
  `tilawah` int(5) NOT NULL,
  `tadabbur` int(5) NOT NULL,
  `hifz` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quran`
--

INSERT INTO `quran` (`email`, `tilawah`, `tadabbur`, `hifz`) VALUES
('badguy@yeah.sweet', 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `rawatib`
--

CREATE TABLE `rawatib` (
  `email` varchar(35) NOT NULL,
  `subh` int(5) NOT NULL,
  `zuhr` int(5) NOT NULL,
  `asr` int(5) NOT NULL,
  `magrib` int(5) NOT NULL,
  `isha` int(5) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawatib`
--

INSERT INTO `rawatib` (`email`, `subh`, `zuhr`, `asr`, `magrib`, `isha`, `total`) VALUES
('badguy@yeah.sweet', 9, 9, 9, 9, 4, 40);

-- --------------------------------------------------------

--
-- Table structure for table `salat_in_jamah`
--

CREATE TABLE `salat_in_jamah` (
  `email` varchar(35) NOT NULL,
  `subh` int(5) NOT NULL,
  `zuhr` int(5) NOT NULL,
  `asr` int(5) NOT NULL,
  `magrib` int(5) NOT NULL,
  `isha` int(5) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salat_in_jamah`
--

INSERT INTO `salat_in_jamah` (`email`, `subh`, `zuhr`, `asr`, `magrib`, `isha`, `total`) VALUES
('badguy@yeah.sweet', 26, 3, 3, 4, 4, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone_number` char(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `phone_number`, `gender`, `password`) VALUES
('Abdulhameed', 'badguy@yeah.sweet', '09098575748', 'Male', 'e807f1fcf82d132f9bb018ca6738a1');

-- --------------------------------------------------------

--
-- Table structure for table `wird_dua`
--

CREATE TABLE `wird_dua` (
  `email` varchar(35) NOT NULL,
  `part_1` int(5) NOT NULL,
  `part_2` int(5) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wird_dua`
--

INSERT INTO `wird_dua` (`email`, `part_1`, `part_2`, `total`) VALUES
('badguy@yeah.sweet', 9, 9, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adhkar_after_salat`
--
ALTER TABLE `adhkar_after_salat`
  ADD KEY `adhkar_after_salat_cs` (`email`);

--
-- Indexes for table `adhkar_m_e`
--
ALTER TABLE `adhkar_m_e`
  ADD KEY `adhkar_m_e_cs` (`email`);

--
-- Indexes for table `daily_activities`
--
ALTER TABLE `daily_activities`
  ADD KEY `daily_activities_cs` (`email`);

--
-- Indexes for table `quran`
--
ALTER TABLE `quran`
  ADD KEY `quran_cs` (`email`);

--
-- Indexes for table `rawatib`
--
ALTER TABLE `rawatib`
  ADD KEY `rawatib_cs` (`email`);

--
-- Indexes for table `salat_in_jamah`
--
ALTER TABLE `salat_in_jamah`
  ADD KEY `salat_in_jamah_cs` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wird_dua`
--
ALTER TABLE `wird_dua`
  ADD KEY `wird_dua_cs` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adhkar_after_salat`
--
ALTER TABLE `adhkar_after_salat`
  ADD CONSTRAINT `adhkar_after_salat_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `adhkar_m_e`
--
ALTER TABLE `adhkar_m_e`
  ADD CONSTRAINT `adhkar_m_e_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daily_activities`
--
ALTER TABLE `daily_activities`
  ADD CONSTRAINT `daily_activities_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quran`
--
ALTER TABLE `quran`
  ADD CONSTRAINT `quran_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rawatib`
--
ALTER TABLE `rawatib`
  ADD CONSTRAINT `rawatib_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salat_in_jamah`
--
ALTER TABLE `salat_in_jamah`
  ADD CONSTRAINT `salat_in_jamah_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wird_dua`
--
ALTER TABLE `wird_dua`
  ADD CONSTRAINT `wird_dua_cs` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
