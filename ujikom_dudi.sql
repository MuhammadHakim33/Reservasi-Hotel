-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 04:52 AM
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
-- Database: `ujikom_dudi`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_data_fasilitas_hotel` (IN `id_item` INT)  BEGIN
	DELETE FROM tbl_fasilitas_hotel
    WHERE id = id_item;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_data_fasilitas_kamar` (IN `id_item` INT(0))  BEGIN
	DELETE FROM tbl_fasilitas_kamar 
    WHERE id = id_item;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_data_kamar` (IN `id_item` INT)  BEGIN
	DELETE FROM tbl_kamar 
    WHERE id = id_item;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_fasilitas_kamar`
-- (See below for the actual view)
--
CREATE TABLE `data_fasilitas_kamar` (
`id` int(11)
,`fasilitas_kamar` varchar(255)
,`nama_tipe_kamar` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_reservasi`
-- (See below for the actual view)
--
CREATE TABLE `data_reservasi` (
`id` int(11)
,`id_kamar` int(11)
,`check_in_kamar` date
,`check_out_kamar` date
,`jumlah_kamar` int(11)
,`nama_pemesan` varchar(255)
,`nama_tamu` varchar(255)
,`email_pemesan` varchar(255)
,`telp_pemesan` bigint(20)
,`status` enum('terkonfirmasi','belum_terkonfirmasi')
,`created_at` timestamp
,`nama_tipe_kamar` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas_hotel`
--

CREATE TABLE `tbl_fasilitas_hotel` (
  `id` int(11) NOT NULL,
  `fasilitas_hotel` varchar(255) NOT NULL,
  `keterangan_fasilitas` varchar(255) NOT NULL,
  `gambar_fasilitas_hotel` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fasilitas_hotel`
--

INSERT INTO `tbl_fasilitas_hotel` (`id`, `fasilitas_hotel`, `keterangan_fasilitas`, `gambar_fasilitas_hotel`, `created_at`) VALUES
(1, 'Lapangan', 'Lapangan Untuk Berolahraga', '31.jpg', '2022-03-26 06:50:00'),
(4, 'Bioskop', 'Dengan Layar Yang Luas dan Sound Yang Hebat', '551.jpg', '2022-04-06 10:17:21'),
(6, 'Gym', 'Lengkap dengan berbagai alat dan instruktur', '143.jpg', '2022-04-06 13:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas_kamar`
--

CREATE TABLE `tbl_fasilitas_kamar` (
  `id` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `fasilitas_kamar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fasilitas_kamar`
--

INSERT INTO `tbl_fasilitas_kamar` (`id`, `id_kamar`, `fasilitas_kamar`, `created_at`) VALUES
(11, 9, 'TV 24 inch', '2022-03-27 06:52:49'),
(16, 14, 'Kulkas', '2022-04-06 13:32:58'),
(17, 9, 'Kulkas', '2022-04-06 13:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id` int(11) NOT NULL,
  `nama_tipe_kamar` varchar(255) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `gambar_kamar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id`, `nama_tipe_kamar`, `jumlah_kamar`, `gambar_kamar`, `created_at`) VALUES
(9, 'Super Room', 5, '878.jpg', '2022-03-26 11:49:25'),
(14, 'Deluxe Room', 10, '331.jpg', '2022-04-06 13:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `check_in_kamar` date NOT NULL,
  `check_out_kamar` date NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `nama_tamu` varchar(255) NOT NULL,
  `email_pemesan` varchar(255) NOT NULL,
  `telp_pemesan` bigint(20) NOT NULL,
  `status` enum('terkonfirmasi','belum_terkonfirmasi') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id`, `id_kamar`, `check_in_kamar`, `check_out_kamar`, `jumlah_kamar`, `nama_pemesan`, `nama_tamu`, `email_pemesan`, `telp_pemesan`, `status`, `created_at`) VALUES
(16, 9, '2022-04-07', '2022-04-08', 1, 'Fahmi', 'Fahmi', 'fahmi@gmail.com', 123162661525, 'terkonfirmasi', '2022-04-05 10:26:17'),
(17, 9, '2022-04-07', '2022-04-08', 1, 'Joni', 'Joni', 'joni@gmail.com', 123121231231, 'belum_terkonfirmasi', '2022-04-05 10:37:47'),
(18, 9, '2022-04-07', '2022-04-08', 1, 'Maya', 'Maya', 'maya@gmail.com', 34232423423, 'terkonfirmasi', '2022-04-05 10:41:01'),
(28, 9, '2022-04-13', '2022-04-15', 1, 'Mamat', 'Mamat', 'mamat@gmail.com', 24234234234, 'terkonfirmasi', '2022-04-12 07:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('administrator','resepsionis') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `nama`, `username`, `password`, `level`, `created_at`) VALUES
(1, 'Admin 1', 'admin1', 'admin1', 'administrator', '2022-03-19 10:03:10'),
(2, 'Resepsionis 1', 'resepsionis1', 'resepsionis1', 'resepsionis', '2022-03-19 10:03:10');

-- --------------------------------------------------------

--
-- Structure for view `data_fasilitas_kamar`
--
DROP TABLE IF EXISTS `data_fasilitas_kamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_fasilitas_kamar`  AS SELECT `tbl_fasilitas_kamar`.`id` AS `id`, `tbl_fasilitas_kamar`.`fasilitas_kamar` AS `fasilitas_kamar`, `tbl_kamar`.`nama_tipe_kamar` AS `nama_tipe_kamar` FROM (`tbl_fasilitas_kamar` join `tbl_kamar` on(`tbl_fasilitas_kamar`.`id_kamar` = `tbl_kamar`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_reservasi`
--
DROP TABLE IF EXISTS `data_reservasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_reservasi`  AS SELECT `tbl_reservasi`.`id` AS `id`, `tbl_reservasi`.`id_kamar` AS `id_kamar`, `tbl_reservasi`.`check_in_kamar` AS `check_in_kamar`, `tbl_reservasi`.`check_out_kamar` AS `check_out_kamar`, `tbl_reservasi`.`jumlah_kamar` AS `jumlah_kamar`, `tbl_reservasi`.`nama_pemesan` AS `nama_pemesan`, `tbl_reservasi`.`nama_tamu` AS `nama_tamu`, `tbl_reservasi`.`email_pemesan` AS `email_pemesan`, `tbl_reservasi`.`telp_pemesan` AS `telp_pemesan`, `tbl_reservasi`.`status` AS `status`, `tbl_reservasi`.`created_at` AS `created_at`, `tbl_kamar`.`nama_tipe_kamar` AS `nama_tipe_kamar` FROM (`tbl_reservasi` join `tbl_kamar` on(`tbl_reservasi`.`id_kamar` = `tbl_kamar`.`id`)) ORDER BY `tbl_reservasi`.`created_at` DESC ;

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kamar` (`id_kamar`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fasilitas_kamar`
--
ALTER TABLE `tbl_fasilitas_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Constraints for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD CONSTRAINT `tbl_reservasi_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tbl_kamar` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
