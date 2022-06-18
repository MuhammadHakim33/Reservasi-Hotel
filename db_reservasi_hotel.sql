-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 03:45 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reservasi_hotel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_data_fasilitas_hotel` (`id_item` INT(11))  BEGIN
DELETE FROM tbl_fasilitas_hotel WHERE id = id_item;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_data_fasilitas_kamar` (`id_item` INT(11))  BEGIN
DELETE FROM tbl_fasilitas_kamar WHERE id = id_item;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_data_kamar` (`id_item` INT(11))  BEGIN
DELETE FROM tbl_kamar WHERE id = id_item;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas_hotel`
--

CREATE TABLE `tbl_fasilitas_hotel` (
  `id` int(11) NOT NULL,
  `fasilitas_hotel` varchar(255) NOT NULL,
  `desc_fasilitas_hotel` varchar(255) NOT NULL,
  `gambar_fasilitas_hotel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fasilitas_hotel`
--

INSERT INTO `tbl_fasilitas_hotel` (`id`, `fasilitas_hotel`, `desc_fasilitas_hotel`, `gambar_fasilitas_hotel`) VALUES
(1, 'Lapangan', 'Lapangan Untuk Berolahraga', '31.jpg'),
(2, 'Bioskop', 'Dengan Layar Yang Luas dan Sound Yang Hebat', '551.jpg'),
(4, 'Kolam Renang', 'Standar Internasional', '126.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas_kamar`
--

CREATE TABLE `tbl_fasilitas_kamar` (
  `id` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `fasilitas_kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fasilitas_kamar`
--

INSERT INTO `tbl_fasilitas_kamar` (`id`, `id_kamar`, `fasilitas_kamar`) VALUES
(1, 2, 'TV 25 Inch'),
(2, 2, 'Kulkas'),
(3, 1, 'Kasur Standar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id` int(11) NOT NULL,
  `nama_tipe_kamar` varchar(255) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `gambar_kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id`, `nama_tipe_kamar`, `jumlah_kamar`, `gambar_kamar`) VALUES
(1, 'Super Room', 6, '878.jpg'),
(2, 'Deluxe Room', 10, '331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id` int(11) NOT NULL,
  `kode_reservasi` bigint(15) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `nama_tamu` varchar(255) NOT NULL,
  `email_pemesan` varchar(255) NOT NULL,
  `telp_pemesan` varchar(255) NOT NULL,
  `status_reservasi` enum('terkonfirmasi','belum terkonfirmasi') NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id`, `kode_reservasi`, `nama_pemesan`, `nama_tamu`, `email_pemesan`, `telp_pemesan`, `status_reservasi`, `registered_at`) VALUES
(30, 120220615878, 'Peacemaker', 'Peacemaker', 'peace@gmail.com', '1231231231', 'belum terkonfirmasi', '2022-06-15 10:02:21'),
(31, 120220615323, 'Popo', 'Popo', 'popo@gmail.com', '2131212312312', 'terkonfirmasi', '2022-06-15 10:06:42'),
(32, 120220615575, 'Mamat', 'Maya', 'mamat@gmail.com', '123121231231', 'terkonfirmasi', '2022-06-15 10:07:21'),
(33, 120220617190, 'Hakim', 'Hakim', 'phakimb33@gmail.com', '1231231231', 'terkonfirmasi', '2022-06-17 13:27:33'),
(34, 220220617593, 'Mamank', 'Mamank', 'mamankgamer33@gmail.com', '12312312', 'terkonfirmasi', '2022-06-17 13:28:34'),
(35, 220220617750, 'Yudi', 'Yudi', 'mamankgamer33@gmail.com', '2131231231', 'terkonfirmasi', '2022-06-17 13:30:10'),
(36, 120220617803, 'Jali', 'Jali', 'jali@gmail.com', '1231231231', 'terkonfirmasi', '2022-06-17 13:39:12'),
(37, 120220617764, 'Wahyu', 'Wahyu', 'wahyu@gmail.com', '12312312312', 'terkonfirmasi', '2022-06-17 13:41:34'),
(38, 220220617238, 'Fahri', 'Fahri', 'fahri@gmail.com', '1231231231', 'terkonfirmasi', '2022-06-17 13:44:35'),
(39, 220220617127, 'Hala', 'Hala', 'hala@gmail.com', '1231231231', 'terkonfirmasi', '2022-06-17 13:46:44'),
(40, 220220617212, 'Juli', 'Juli', 'juli@gmail.com', '1231231231', 'terkonfirmasi', '2022-06-17 13:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi_detail`
--

CREATE TABLE `tbl_reservasi_detail` (
  `id` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jumlah_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reservasi_detail`
--

INSERT INTO `tbl_reservasi_detail` (`id`, `id_reservasi`, `id_kamar`, `check_in`, `check_out`, `jumlah_kamar`) VALUES
(17, 30, 1, '2022-06-15', '2022-06-16', 1),
(18, 31, 1, '2022-06-15', '2022-06-16', 1),
(19, 32, 1, '2022-06-15', '2022-06-16', 1),
(20, 33, 1, '2022-06-19', '2022-06-20', 1),
(21, 34, 2, '2022-06-19', '2022-06-20', 1),
(22, 35, 2, '2022-06-21', '2022-06-22', 1),
(23, 36, 1, '2022-06-21', '2022-06-22', 1),
(24, 37, 1, '2022-06-19', '2022-06-22', 1),
(25, 38, 2, '2022-06-19', '2022-06-22', 1),
(26, 39, 2, '2022-06-19', '2022-06-22', 1),
(27, 40, 2, '2022-06-19', '2022-06-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('administrator','resepsionis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin 1', 'admin1', 'admin1', 'administrator'),
(2, 'Resepsionis 1', 'resepsionis1', 'resepsionis1', 'resepsionis');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_data_fasilitas_kamar`
-- (See below for the actual view)
--
CREATE TABLE `view_data_fasilitas_kamar` (
`id` int(11)
,`nama_tipe_kamar` varchar(255)
,`fasilitas_kamar` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_data_reservasi`
-- (See below for the actual view)
--
CREATE TABLE `view_data_reservasi` (
`id` int(11)
,`kode_reservasi` bigint(15)
,`nama_pemesan` varchar(255)
,`nama_tamu` varchar(255)
,`email_pemesan` varchar(255)
,`telp_pemesan` varchar(255)
,`check_in` date
,`check_out` date
,`jumlah_kamar` int(11)
,`nama_tipe_kamar` varchar(255)
,`status_reservasi` enum('terkonfirmasi','belum terkonfirmasi')
,`registered_at` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `view_data_fasilitas_kamar`
--
DROP TABLE IF EXISTS `view_data_fasilitas_kamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_data_fasilitas_kamar`  AS SELECT `tbl_fasilitas_kamar`.`id` AS `id`, `tbl_kamar`.`nama_tipe_kamar` AS `nama_tipe_kamar`, `tbl_fasilitas_kamar`.`fasilitas_kamar` AS `fasilitas_kamar` FROM (`tbl_fasilitas_kamar` join `tbl_kamar` on(`tbl_fasilitas_kamar`.`id_kamar` = `tbl_kamar`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_data_reservasi`
--
DROP TABLE IF EXISTS `view_data_reservasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_data_reservasi`  AS SELECT `tbl_reservasi`.`id` AS `id`, `tbl_reservasi`.`kode_reservasi` AS `kode_reservasi`, `tbl_reservasi`.`nama_pemesan` AS `nama_pemesan`, `tbl_reservasi`.`nama_tamu` AS `nama_tamu`, `tbl_reservasi`.`email_pemesan` AS `email_pemesan`, `tbl_reservasi`.`telp_pemesan` AS `telp_pemesan`, `tbl_reservasi_detail`.`check_in` AS `check_in`, `tbl_reservasi_detail`.`check_out` AS `check_out`, `tbl_reservasi_detail`.`jumlah_kamar` AS `jumlah_kamar`, `tbl_kamar`.`nama_tipe_kamar` AS `nama_tipe_kamar`, `tbl_reservasi`.`status_reservasi` AS `status_reservasi`, `tbl_reservasi`.`registered_at` AS `registered_at` FROM ((`tbl_reservasi` join `tbl_reservasi_detail` on(`tbl_reservasi_detail`.`id_reservasi` = `tbl_reservasi`.`id`)) join `tbl_kamar` on(`tbl_kamar`.`id` = `tbl_reservasi_detail`.`id_kamar`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fasilitas_hotel`
--
ALTER TABLE `tbl_fasilitas_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fasilitas_kamar`
--
ALTER TABLE `tbl_fasilitas_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reservasi_detail`
--
ALTER TABLE `tbl_reservasi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_reservasi_detail_ibfk_1` (`id_reservasi`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_tipe_kamar` (`id_kamar`),
  ADD KEY `id_kamar_2` (`id_kamar`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fasilitas_hotel`
--
ALTER TABLE `tbl_fasilitas_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_fasilitas_kamar`
--
ALTER TABLE `tbl_fasilitas_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_reservasi_detail`
--
ALTER TABLE `tbl_reservasi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_fasilitas_kamar`
--
ALTER TABLE `tbl_fasilitas_kamar`
  ADD CONSTRAINT `tbl_fasilitas_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tbl_kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_reservasi_detail`
--
ALTER TABLE `tbl_reservasi_detail`
  ADD CONSTRAINT `tbl_reservasi_detail_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `tbl_reservasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reservasi_detail_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tbl_kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
