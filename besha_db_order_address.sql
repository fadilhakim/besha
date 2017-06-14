-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 05:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `besha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail_tbl`
--

CREATE TABLE IF NOT EXISTS `order_detail_tbl` (
  `id_od` int(10) NOT NULL,
  `id_order` varchar(15) NOT NULL,
  `sparepart_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(17) NOT NULL,
  `user_agent` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `id_order` varchar(15) NOT NULL,
  `id_user` int(10) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `kurir` enum('jne','pos','tiki','pick_up') NOT NULL,
  `total_berat` int(11) NOT NULL,
  `kurir_service` varchar(20) NOT NULL,
  `tax` float NOT NULL,
  `purpose_bank` varchar(100) NOT NULL,
  `user_addtr_id` int(11) NOT NULL,
  `status` enum('pending','confirm','shipping','cancel','done') NOT NULL DEFAULT 'pending',
  `create_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(17) NOT NULL,
  `user_agent` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id_order`, `id_user`, `subtotal`, `ongkir`, `grand_total`, `kurir`, `total_berat`, `kurir_service`, `tax`, `purpose_bank`, `user_addtr_id`, `status`, `create_date`, `last_update`, `ip_address`, `user_agent`) VALUES
('MK142200001', 3, 130900, 0, 143990, 'jne', 0, '', 0.1, '', 4, 'pending', '2017-06-14 22:38:42', '2017-06-14 15:38:43', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0'),
('MK142200002', 3, 130900, 0, 143990, 'jne', 0, '', 0.1, '', 5, 'pending', '2017-06-14 22:40:14', '2017-06-14 15:40:14', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0');

-- --------------------------------------------------------

--
-- Table structure for table `user_address_tbl`
--

CREATE TABLE IF NOT EXISTS `user_address_tbl` (
  `user_add_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `billing_address` varchar(225) NOT NULL,
  `shipping_address` varchar(225) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `kecamatan` varchar(60) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_address_tr`
--

CREATE TABLE IF NOT EXISTS `user_address_tr` (
  `user_addtr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `billing_address` varchar(225) NOT NULL,
  `shipping_address` varchar(225) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `kecamatan` varchar(60) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address_tr`
--

INSERT INTO `user_address_tr` (`user_addtr_id`, `user_id`, `contact_person`, `billing_address`, `shipping_address`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `no_hp`, `create_date`, `last_update`) VALUES
(4, 3, 'Aries Dimas Yudhistira', '', 'jl. palmerah selatan', 6, 151, 'Palmerah', '80351', '081325612339', '2017-06-14 22:38:38', '2017-06-14 15:38:42'),
(5, 3, 'Aries Dimas Yudhistira', '', 'jl. palmerah selatan', 6, 151, 'Palmerah', '80351', '081325612339', '2017-06-14 22:40:40', '2017-06-14 15:40:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail_tbl`
--
ALTER TABLE `order_detail_tbl`
  ADD PRIMARY KEY (`id_od`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id_order`), ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `user_address_tbl`
--
ALTER TABLE `user_address_tbl`
  ADD PRIMARY KEY (`user_add_id`);

--
-- Indexes for table `user_address_tr`
--
ALTER TABLE `user_address_tr`
  ADD PRIMARY KEY (`user_addtr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail_tbl`
--
ALTER TABLE `order_detail_tbl`
  MODIFY `id_od` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_address_tbl`
--
ALTER TABLE `user_address_tbl`
  MODIFY `user_add_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_address_tr`
--
ALTER TABLE `user_address_tr`
  MODIFY `user_addtr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
