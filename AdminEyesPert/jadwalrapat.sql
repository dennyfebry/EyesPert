-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 04:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwalrapat`
--

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nomer_rispat` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `presenter` varchar(255) NOT NULL,
  `undangan` varchar(255) NOT NULL,
  `status` enum('Done','Pending','Cancel') NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `rispat` varchar(255) NOT NULL,
  `daftar_hadir` mediumblob NOT NULL,
  `rapat` enum('k','nr') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapat`
--

INSERT INTO `rapat` (`id`, `tanggal`, `nomer_rispat`, `agenda`, `jam`, `presenter`, `undangan`, `status`, `keterangan`, `rispat`, `daftar_hadir`, `rapat`) VALUES
(1, '2018-08-21', 'Test', 'Test', '06:00:00', 'Test', 'AAM', 'Done', 'Test', '', '', 'k'),
(2, '2018-08-22', 'Coba', 'Coba', '09:00:00', 'Coba', 'AAM', 'Cancel', 'Coba', '', '', 'nr'),
(3, '2018-08-22', 'Tes', 'Tes', '00:59:00', 'Tes', 'EGM', 'Done', 'Tes', '', '', 'k'),
(4, '2018-08-23', 'Coba2', 'Coba2', '00:11:00', 'Coba2', 'ASF', 'Pending', 'Coba2', '', '', 'nr'),
(5, '2018-08-24', 'Coba3', 'Coba3', '01:11:00', 'Coba3', 'EGM, ASF', 'Cancel', 'Coba3', '', '', 'k'),
(8, '2018-08-23', 'qweq', 'qwe', '00:00:00', '12', 'EGM, AAM', 'Done', '21', '', '', 'nr'),
(9, '2018-08-24', 'eqw', 'eqweqwe', '02:01:00', '21321', 'AAM, ASF', 'Done', 'sada', '', '', 'k'),
(10, '2018-08-25', 'wqeqw', 'ewqeqwe', '00:01:00', 'qewq', 'ASF', 'Done', 'qwe', '', '', 'k'),
(11, '2018-08-23', 'dsad', 'asdas', '11:11:00', 'asd', 'AAM, ASF', 'Done', 'dsad', '', '', 'k'),
(12, '2018-08-22', 'weqeqw', 'eqweqweqwe', '00:32:00', 'eqweqwe', 'AAM, ASF', 'Done', 'eqweqweqw', '', '', 'k'),
(13, '2018-08-22', 'qweqweqw', 'eqweqwewqe', '14:31:00', 'sdsadsad', 'ASF', 'Done', 'asdsadas', '', '', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'User 1', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
