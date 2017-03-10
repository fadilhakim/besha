-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2017 at 05:46 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `besha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `surename` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `username`, `password`, `surename`, `role_id`, `email`, `status`) VALUES
(1, 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, '', 1),
(15, 'fadilhakim', 'faaa537f35b5e2a4588b985da3cfaf67', 'fancymouse', 3, 'fadil.nylon@gmail.com', 1),
(16, 'blink', '', 'haki', 2, 'indocart99@gmail.com', 0),
(18, 'fadil', 'c96041081de85714712a79319cb2be5f', 'hakim', 3, 'denin.resky@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(250) NOT NULL,
  `category_url` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `category_title`, `category_url`) VALUES
(1, 'Microplate Reader', 'microplate-reader'),
(3, 'Fermentor / Bio Reactor', 'fermentor-bio-reactor'),
(4, 'Shaker / Incubator Shaker', 'shaker-incubator'),
(5, 'Autoclaves', 'autoclaves'),
(6, 'HPLC & UPLC', 'hplc-uplc'),
(7, 'Osmometer', 'osmometer'),
(8, 'Colony counting & Zone sizing', 'colony-counting-zone-sizing\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE IF NOT EXISTS `client_tbl` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(250) NOT NULL,
  `client_image` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tbl`
--

INSERT INTO `client_tbl` (`client_id`, `client_name`, `client_image`) VALUES
(1, 'Pertamina', 'client_pertamina.png'),
(2, 'Indofood', 'client_indofood.png'),
(3, 'Cheil Jedang', 'client_cj.png'),
(4, 'Sinar mas', 'client_smart.png'),
(5, 'p&g', 'client_p&g.png'),
(6, 'bppt', 'client_bppt.png'),
(7, 'ipb', 'client_ipb.png'),
(8, 'lipi', 'client_lipi.png'),
(9, 'Badan POM', 'client_pom.png'),
(10, 'Sinar Mas', 'client_smart.png'),
(11, 'Universitas Gajah Mada', 'client_ugm.png'),
(12, 'Universitas Indonesia', 'client_ui.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_interest_subcriber_tbl`
--

CREATE TABLE IF NOT EXISTS `detail_interest_subcriber_tbl` (
  `merge_id` int(11) NOT NULL,
  `subscriber_tbl` int(11) NOT NULL,
  `manu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_sparepart_category_tbl`
--

CREATE TABLE IF NOT EXISTS `detail_sparepart_category_tbl` (
  `merge_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sparepart_category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_sparepart_category_tbl`
--

INSERT INTO `detail_sparepart_category_tbl` (`merge_id`, `category_id`, `sparepart_category_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 2, 5),
(10, 2, 6),
(11, 2, 7),
(12, 4, 1),
(13, 4, 2),
(14, 4, 3),
(15, 3, 1),
(16, 3, 2),
(17, 8, 1),
(18, 8, 2),
(19, 8, 3),
(20, 8, 4),
(21, 8, 5),
(22, 8, 6),
(23, 8, 7),
(24, 8, 8),
(25, 8, 9),
(26, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `discount_tbl`
--

CREATE TABLE IF NOT EXISTS `discount_tbl` (
  `discount_id` int(11) NOT NULL,
  `discount_code` varchar(30) NOT NULL,
  `discount_price` int(11) NOT NULL,
  `discount_name` varchar(250) NOT NULL,
  `discount_desc` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_tbl`
--

INSERT INTO `discount_tbl` (`discount_id`, `discount_code`, `discount_price`, `discount_name`, `discount_desc`, `createdate`, `start_date`, `expired_date`, `status`) VALUES
(1, 's12312dsa', 20, 'New Year Sales', '<p>yrtfds ttt</p>\r\n', '2017-01-26 10:49:12', '2017-01-22', '2017-01-27', 0),
(5, 'codceddd', 29, 'namess', '<p>sdasdada</p>\r\n', '2017-01-24 07:14:24', '0000-00-00', '0000-00-00', 0),
(6, 'Uysbdsy2u', 20, 'Discount Ahkir Tahun', '<p>Ini untuk pelaggan Tercinta Kami</p>\r\n', '2017-01-10 07:23:25', '0000-00-00', '0000-00-00', 0),
(7, 'usjahdfak', 20, 'TEs', '<p>dasda</p>\r\n', '2017-01-26 10:37:51', '0000-00-00', '0000-00-00', 0),
(8, 'asd2', 23, 'sda', '<p>dasdasdas</p>\r\n', '2017-01-26 10:40:01', '2017-01-27', '2017-02-09', 0),
(9, 'd8237', 23, 'yomasn', '<p>asdasda</p>\r\n', '2017-01-26 10:44:49', '2017-01-26', '2017-01-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE IF NOT EXISTS `event_tbl` (
  `news_title` varchar(250) NOT NULL,
  `news_id` int(11) NOT NULL,
  `news_image` varchar(250) NOT NULL,
  `news_desc` text NOT NULL,
  `createdate` date NOT NULL,
  `event_status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`news_title`, `news_id`, `news_image`, `news_desc`, `createdate`, `event_status`) VALUES
('tes consectetur adipiscing elit', 1, 'newspictogether.jpg', '<p>ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendisse sem augue, tincidunt non egestas non, porta quis magna. Morbi rhoncus dui sed lorem bibendum accumsan. Morbi maximus nibh facilisis velit eleifend egestas. Curabitur tempor pretium faucibus.</p>\r\n', '2016-12-02', 1),
('Morbi maximus nibh facilisis velit eleifend egestas. Curabitur', 4, 'lab_equipment.png', '<p>ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendisse sem augue, tincidunt non egestas non, porta quis magna. Morbi rhoncus dui sed lorem bibendum accumsan. Morbi maximus nibh facilisis velit eleifend egestas. Curabitur tempor pretium faucibus. ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendisse sem augue, tincidunt non egestas non, porta quis magna. Morbi rhoncus dui sed lorem bibendum accumsan. Morbi maximus nibh facilisis velit eleifend egestas. Curabitur tempor pretium faucibus.</p>\r\n', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_tbl`
--

CREATE TABLE IF NOT EXISTS `lokasi_tbl` (
  `lokasi_id` int(11) NOT NULL,
  `nama_lokasi` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_tbl`
--

INSERT INTO `lokasi_tbl` (`lokasi_id`, `nama_lokasi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Depok'),
(3, 'Bogor'),
(4, 'Tanggerang'),
(5, 'Bekasi'),
(6, 'sukabumi, cianjur, purwakarta, karawang, banten'),
(7, 'bandung, garut, sumedang, subang'),
(8, 'Majalengka, Tasikmalaya, '),
(9, 'Kuningan, Ciamis, Cirebon'),
(10, 'Brebes, tegal, Cilacap, banyumas'),
(11, 'batang, kendal, pemalang, pekalongan, purbalingga, banjar negara, kebumen'),
(12, 'temanggung, wonosobo, purworejo, magelang'),
(13, 'DIY, klaten, boyolali, semarang, demak, jepara'),
(14, 'wonogiri, sukoharjo, karang-anyar, sragen, grobogan, kudus, pati, rembang, blora, surakarta '),
(15, 'surabaya, sidoarjo, pasuruan, probolinggo'),
(16, 'magetan, kediri, tulungagung, blitar , malang'),
(17, 'banyuwangi , genteng'),
(18, 'Lampung'),
(19, 'Bengkulu'),
(20, 'Sumatera Selatan, Palembang'),
(21, 'Jambi'),
(22, 'Sumatera Barat, Padang'),
(23, 'Riau'),
(24, 'Sumatera Utara, medan'),
(25, 'Aceh'),
(26, 'Bangka Belitung, pangkal pinang'),
(27, 'Kalimantan Barat, pontianak'),
(28, 'Kalimantan Tengah, kota sampit, palangkaraya'),
(29, 'Kalimantan timur, samarinda, balikpapan'),
(30, 'kalimantan selatan, banjarmasin, martapura'),
(31, 'Denpasar'),
(32, 'Mataram, lombok'),
(33, 'NTB, Bima'),
(34, 'NTT, Kupang'),
(35, 'sumba'),
(36, 'sulawesi selatan, makassar'),
(37, 'sulawesi tenggara, kendari'),
(38, 'Sulawesi Barat, mamuju'),
(39, 'Sulawesi Tengah, Palu'),
(40, 'gorontalo'),
(41, 'Sulawesi Utara, Manado'),
(42, 'maluku, ambon'),
(43, 'Papua Barat, manokwari'),
(44, 'Papua, jayapura');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_tbl`
--

CREATE TABLE IF NOT EXISTS `manufacturer_tbl` (
  `manu_id` int(11) NOT NULL,
  `manu_title` varchar(250) NOT NULL,
  `manu_desc` text NOT NULL,
  `manu_image` varchar(250) NOT NULL,
  `manu_link` varchar(250) NOT NULL,
  `manu_slug` varchar(110) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer_tbl`
--

INSERT INTO `manufacturer_tbl` (`manu_id`, `manu_title`, `manu_desc`, `manu_image`, `manu_link`, `manu_slug`) VALUES
(1, 'behr Labor', 'Außerdem bieten wir Ihnen Lösungen an, die genau auf Ihre Bedürfnisse abgestimmt sind. Schauen Sie sich um. Erfahren Sie mehr über behr Labor-Technik', 'behr.png', '#', 'behr-labor'),
(2, 'berghof lab', 'berghof lab', 'berghof.png', '#', 'berghof-lab'),
(3, 'BMG labtech', 'BMG Labtech is a leading provider of Microplate readers and Microplate reader accessories.', 'bmg.png', '', 'BMG-labtech'),
(4, 'Dani Scent of future', 'When productivity is the name of the game, MASTER TOF-MS is the answer. Productivity has become of vital importance in most modern laboratories.', 'danispa.png', '', 'Dani-Scent-of-future'),
(5, 'Decagon Devices', 'Decagon Devices, Inc. produces and sells research grade scientific instrumentation for soil, plant, water, and environmental sciences.', 'decagon.png', '', 'Decagon-Devices'),
(6, 'infors ht', 'Your specialist for bioreactors, incubation shakers and bioprocess control software.', 'infors.png', '', 'infors-ht'),
(7, 'irmeco', 'irmeco', 'imerco.png', '', 'irmeco'),
(8, 'Knauer', 'Manufacturer of pumps, detectors, columns, switching valves, and HPLC data systems, specializing in simulated moving bed chromatography (SMBC)', 'knauer.png', '', 'Knauer'),
(9, 'membraPure Systems', 'membraPure Systems – We are experts for ultrapure water systems, TOC measurements, amino acid analysis and ion chromatography since 1993.', 'membrapure.png', '', 'membraPure-Systems'),
(10, 'Mercury Instruments', 'Manufacturer of precision instruments for the Natural Gas Industry.', 'mercury.png', '', 'Mercury-Instruments'),
(11, 'PP System - Scientific instruments', 'PP Systems- Scientific instruments for measurement of CO2 and H2O, photosynthesis, chlorophyll fluorescence, soil respiration, canopy flux and vegetation.', 'pp-systems.png', '', 'PP-System-Scientific-instruments'),
(12, 'Sable Systems International | Metabolic Measurement Systems', 'Metabolic data you can trust. Systems for indirect calorimetry. Ease of workflow with precise, automated high-throughput metabolic phenotyping, versatil', 'sable.png', '', 'Sable-Systems-International'),
(14, 'Sysngene Biocon System', 'Sysngene Biocon System', 'syngene.png', '', 'Sysngene-Biocon-System'),
(15, 'Telstar Life Science Solutions', 'Offers bespoke containment design to the international pharmaceutical industry. Includes company profile, product details, and global contact details.', 'telstar_logo_en.png', '', 'Telstar-Life-Science-Solutions'),
(16, 'Zirbus Technology', 'Production and distribution of sterilisers, autoclaves and freeze dryers for laboratories, production and research', 'zirbus.png', '', 'Zirbus-Technology'),
(17, 'Wako', 'wako', 'wako.png', 'http://www.wako-chem.co.jp/english/', 'Wako');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE IF NOT EXISTS `news_tbl` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_image` varchar(250) NOT NULL,
  `news_desc` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_thumbnail` varchar(250) NOT NULL,
  `news_status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_image`, `news_desc`, `createdate`, `news_thumbnail`, `news_status`) VALUES
(1, 'tes Curabitur tempor pretium faucibus.', 'AGI_University_Middle-Banner.jpg', '<p>ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendiss...</p>\r\n', '2016-12-24 04:53:17', 'thumb-AGI_University_Middle-Banner.jpg', 1),
(2, 'Curabitur tempor pretium faucibus.', 'news_tool.jpg', '<p>ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendisse sem augue, tincidunt non egestas non, porta quis magna. Morbi rhoncus dui sed lorem bibendum accumsan. Morbi maximus nibh facilisis velit eleifend egestas. Curabitur tempor pretium faucibus</p>', '2016-12-24 14:06:32', 'thumb-news_tool.png', 1),
(3, 'Flow Chemistry India 2017', 'header_messestand_Analytica_V3_2016.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English.', '2016-12-09 02:45:17', 'thumb-header_messestand_Analytica_V3_2016.png', 0),
(6, 'Material Lab Suspendisse quis gravida felis.', 'index.jpg', '<p>ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendisse sem augue, tincidunt non egestas non, porta quis magna. Morbi rhoncus dui sed lorem bibendum accumsan. Morbi maximus nibh facilisis velit eleifend egestas. Curabitur tempor pretium faucibus ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet pulvinar tellus eu eleifend. Suspendisse quis gravida felis. Suspendisse sem augue, tincidunt non egestas non, porta quis magna. Morbi rhoncus dui sed lorem bibendum accumsan. Morbi maximus nibh facilisis velit eleifend egestas. Curabitur tempor pretium faucibus</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>No</td>\r\n			<td>Title</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Suspendisse</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>quis</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-12-26 05:40:41', 'thumb-material-lab.png', 0),
(7, 'Lab Equipment Renew', 'lab_equipment.png', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>\r\n', '2016-12-26 05:49:07', 'thumb-lab-eq.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image_tbl`
--

CREATE TABLE IF NOT EXISTS `product_image_tbl` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image_tbl`
--

INSERT INTO `product_image_tbl` (`image_id`, `product_id`, `image_name`, `createdate`) VALUES
(1, 29, 'Bench-top-Bioreactor.png', '2016-12-05 21:57:41'),
(2, 29, 'Bench-top-Bioreactor.png', '2016-12-05 21:57:41'),
(3, 29, 'Bench-top-Bioreactor.png', '2016-12-05 21:57:56'),
(4, 29, 'Bench-top-Bioreactor.png', '2016-12-05 21:57:56'),
(5, 1, 'polaromega.png', '2016-12-05 23:21:31'),
(6, 1, 'polaromega.png', '2016-12-05 23:21:31'),
(7, 2, 'product_pherastarfs_von-oben.png', '2016-12-05 23:21:57'),
(8, 2, 'product_pherastarfs_von-oben.png', '2016-12-05 23:21:57'),
(9, 3, 'product_vertical-AC-900x900-1.png', '2016-12-05 23:22:17'),
(10, 3, 'product_vertical-AC-900x900-1.png', '2016-12-05 23:22:17'),
(11, 5, 'product_AZURA-UHPLC-system.png', '2016-12-05 23:22:42'),
(12, 5, 'product_AZURA-UHPLC-system.png', '2016-12-05 23:22:42'),
(13, 25, 'product_AZURA-UHPLC-system.png', '2016-12-05 23:23:07'),
(14, 25, 'product_AZURA-UHPLC-system.png', '2016-12-05 23:23:07'),
(15, 26, 'product_thermotron.png', '2016-12-05 23:23:24'),
(16, 26, 'product_thermotron.png', '2016-12-05 23:23:24'),
(17, 30, 'Protos-3-colony-counting-and-chromogenic-identification.png', '2016-12-05 23:23:44'),
(18, 30, 'Protos-3-colony-counting-and-chromogenic-identification.png', '2016-12-05 23:23:44'),
(19, 31, 'product_pherastarfs_von-oben.png', '2016-12-05 23:24:00'),
(20, 31, 'product_pherastarfs_von-oben.png', '2016-12-05 23:24:00'),
(21, 32, 'polaromega.png', '2016-12-05 23:24:19'),
(22, 32, 'polaromega.png', '2016-12-05 23:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_stock_status`
--

CREATE TABLE IF NOT EXISTS `product_stock_status` (
  `status_id` int(11) NOT NULL,
  `status_title` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_stock_status`
--

INSERT INTO `product_stock_status` (`status_id`, `status_title`) VALUES
(1, 'Pre-Order'),
(2, 'Ready Stock');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE IF NOT EXISTS `product_tbl` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(250) NOT NULL,
  `product_descrption` text NOT NULL,
  `product_specification` text NOT NULL,
  `manu_id` varchar(250) NOT NULL,
  `product_code` varchar(250) NOT NULL,
  `product_availability` varchar(250) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_image_1` varchar(250) NOT NULL,
  `product_image_2` varchar(250) NOT NULL,
  `product_image_3` varchar(250) NOT NULL,
  `product_image_4` varchar(250) NOT NULL,
  `featured` int(1) NOT NULL,
  `product_text_preview` varchar(250) NOT NULL,
  `category_url` varchar(250) NOT NULL,
  `product_slug` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_title`, `product_descrption`, `product_specification`, `manu_id`, `product_code`, `product_availability`, `product_category`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `featured`, `product_text_preview`, `category_url`, `product_slug`) VALUES
(1, 'Table Top Autoclaves', 'tes', 'tes They are equipped with warm holding program for liquids and timer for programming start time point for example. All models have a long-life flexible temperature sensor for the sterilization time trigger.\r\n\r\n* A large variety of accessories for example quick recooling, printer, makes it possible to fit the autoclave for every application.', '16', 'Table Top Autoclaves 1', 'Pre-Order', 'Autoclaves', 'polaromega.png', 'polaromega.png', '', 'polaromega.png', 1, 'tes', 'Autoclaves', 'Table-Top-Autoclaves'),
(3, 'Vertical Autoclaves', '<p>Laboratory vertical autoclave</p>\n\n<p>with a chamber volume of 80 to 150 litres</p>\n\n<p>Designed taking the most important aspects of sterilization in the laboratory into consideration </p>:\n\n<ul>\n	<li><em><strong>Simple</strong></em>, through touchscreen control and low loading heights from 740mm.</li>\n	<li><em><strong>Safe</strong></em>, through a pressure container with automatic cover seal, manufactured from high-strength and polished 1.4571/ AiSi316Ti stainless steel throughout. Configured for a sterilization temperature of max. 143°C.</li>\n	<li><em><strong>Sterility</strong></em>, through combined pressure and temperature control, inspected by an independent and certified test laboratory.</li>\n	<li><em><strong>Efficient</strong></em>, through efficient insulation and a steam generator independent of the sterilization chamber, resulting in short heating up and cooling down phases.</li>\n	<li><em><strong>Reliable</strong></em>, through the use of high quality components and manufactured in accordance with ISO 9001 quality standard requirements and the German Medical Devices Act (MPG).</li>\n	<li><em><strong>Flexible</strong></em> and individual through its modular construction. The autoclave can be individually matched to your tasks and upgraded at any time. Also after delivery of the device.</li>\n</ul>', '', '17', 'Vertical Autoclaves', 'Pre-Order ', 'Autoclaves', 'product_vertical-AC-900x900-1.png', 'product_vertical-AC-900x900-2.png', '', '', 1, '\r\n    Simple, through touchscreen control and low loading heights from 740mm.\r\n    Safe, through a pressure container with automatic cover seal, manufactured from high-strength and polished 1.4571/ AiSi316Ti stainless steel throughout. Configured for', 'autoclaves', 'vertical-autoclaves'),
(26, 'Incubation shaker Thermotron ', '<p><strong>Key Benefits:</strong></p>\r\n\r\n<ul>\r\n	<li>For microbial applications</li>\r\n	<li>1-, 2- or 3-stack system</li>\r\n	<li>Preconfigured packages</li>\r\n	<li>Convenient features</li>\r\n	<li>Gradient-free</li>\r\n	<li>Maximum useful load</li>\r\n</ul>\r\n\r\n<p>The <a class="internalInforsLink" href="http://www.infors-ht.com/index.php/en/products/shakers/incubation-shakers/multitron-standard" target="_self">Multitron Standard</a> is the shortest route to excellent value from the Multitron family for the essential tasks. The advantages include user-friendliness and optimal use of space provided by the modular structure and the downwards opening door. The integrated microprocessor offers flexible controllability, including a timer-programming.<br>\r\n<br>\r\nThe key advantage with a Standard system is that it has been pre-configured and assembled for the best possible value and a short delivery time.<br>\r\n<br>\r\n<strong>Preconfigured packages:</strong></p>\r\n\r\n<ul>\r\n	<li>Single unit, 25 or 50mm shaking throw, cooled or without cooling</li>\r\n	<li>2-stack system with high base (31 cm). 25 or 50 mm shaking throw, without cooling or with side cooling for both decks</li>\r\n	<li>3-stack system with 25 or 50 mm shaking throw, top cooling (supplies all three decks independently) or without cooling</li>\r\n</ul>', '--', '1', 'Thermotron', 'Pre-Order', 'Shaker / Incubator Shaker', 'product_thermotron.png', '-', '-', '-', 1, 'The Multitron Standard is the shortest route to excellent value from the Multitron family for the essential tasks.', 'shaker-incubator', 'Incubation-shaker-Thermotron '),
(29, 'Bench-top Bioreactor', 'The Thermotron is the answer to high temperature incubation and shaking in a compact and easy to use package. All the advantages of the Multitron are there, such as user-friendliness and optimal use of space provided by the modular structure and the downwards opening door. The integrated microprocessor offers flexible controllability.', ' The design of the housing minimises heat losses as there are no "thermal bridges" and the electronics are outside the incubation chamber and so cannot be affected by the high internal temperatures.', '6', 'Minifors ', 'Pre-Order', 'fermentor-bio-reactor', 'Bench-top-Bioreactor.png', 'Bench-top-Bioreactor.png', 'Bench-top-Bioreactor.png', 'Bench-top-Bioreactor.png', 1, 'The Thermotron is the answer to high temperature incubation and shaking in a compact and easy to use package. All the advantages of the Multitron are there', 'fermentor-bio-reactor', 'Bench-top-Bioreactor'),
(30, 'Protos 3', 'Protos 3 is a revolutionary automated colony counter and chromogenic identification system. Using its sensitive CCD camera and unique lighting coupled with powerful analysis software, Protos 3 counts colonies in seconds and automatically identifies microbial species by their colour on chromogenic plates. This provides accurate, objective and fully traceable results.\r\n\r\nThe compact Protos 3 attaches via USB to a computer, where microbiologists can input their plate identification and with the one-click colony counting and chromogenic ID software can rapidly analyse a wide range of plate types. The count results can be automatically transferred to Excel where the count, plate ID and images can be saved. This GLP compliant process, with its full audit trail eliminates transcription errors to provide accurate, objective data, which can be reviewed at any time and used to produce professional reports.', 'Protos 3 can be used with both small and large plates (up to 150mm) to read a range of format types including spiral, pour, spread and dilution series plates. The system’s camera is so sensitive it can routinely detect colonies as small as 43 microns and the unique LED lighting system and Protos 3 software allows analysis of an infinite number of colonies on one plate in seconds, making this an ideal system for use in busy food and environmental microbiology laboratories.\r\nFeature 	Description\r\nConstruction 	Ergonomic housing constructed in high density foam\r\nIntegral CCD camera and lens\r\nLight shield 	2 sliding doors to prevent excessive ambient light\r\nCamera 	1.4m pixel scientific grade CCD camera\r\nUSB integral camera with f1.2 lens\r\nResolution 	For standard 90mm plates, smallest detectable colony is 43 microns\r\nImaging 	3 channel capture for colour images\r\nLighting 	Unique 3 channel (red, green, blue) LED lighting (patent pending)\r\nMulti-array LED lighting (computer controlled)\r\nLower lighting with upper reflective lighting for all applications\r\nDetection modes                	Colony counting and Chromogenic ID\r\nCount modes 	Separation of touching colonies, exclusion areas, colour mode, shape mode, size mode\r\nSoftware 	Win7 compatible\r\nDatabase 	SQL database stores all data and image locations\r\n\r\nDimensions\r\n	450mm(h) x 500mm(d) x 400mm(w)  \r\nWeight 	20kg ', '13', 'Protos 3', 'Pre-Order', 'colony-counting-zone-sizing', 'Protos-3-colony-counting-and-chromogenic-identification.png', 'Protos-3-colony-counting-and-chromogenic-identification.png', 'Protos-3-colony-counting-and-chromogenic-identification.png', 'Protos-3-colony-counting-and-chromogenic-identification.png', 1, 'Complete automated colony counting and chromogenic identification system', 'microplate-reader', 'Protos-3');

-- --------------------------------------------------------

--
-- Table structure for table `roles_tbl`
--

CREATE TABLE IF NOT EXISTS `roles_tbl` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles_tbl`
--

INSERT INTO `roles_tbl` (`role_id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'services');

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE IF NOT EXISTS `service_tbl` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `service_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE IF NOT EXISTS `slider_tbl` (
  `slider_id` int(11) NOT NULL,
  `silder_image` varchar(250) NOT NULL,
  `slider_link` varchar(250) NOT NULL,
  `slider_title` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `silder_image`, `slider_link`, `slider_title`) VALUES
(1, 'slider-azura-bio.png', '#', 'behr Labor Tes bsa'),
(2, 'slider azura analytical.jpg', '#', 'What do you want to purify today');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_category`
--

CREATE TABLE IF NOT EXISTS `sparepart_category` (
  `sparepart_category_id` int(11) NOT NULL,
  `category_title` varchar(120) NOT NULL,
  `category_slug` varchar(120) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart_category`
--

INSERT INTO `sparepart_category` (`sparepart_category_id`, `category_title`, `category_slug`, `category_id`) VALUES
(1, 'pump', 'pump', 0),
(2, 'Online Degesser dan LPG Valve', 'online-degesser-LPG-Valve', 0),
(3, 'Detector', 'detector', 0),
(4, 'Injection and Switching valve', 'injection-switching-valve', 0),
(5, 'Mixing Chamber', 'mixing-chamber', 0),
(6, 'Accessories, Miscellaneous', 'accessories-miscellaneous', 0),
(7, 'Capillary Kits and Capillaries', 'capillary-kits-and-capillaries', 0),
(8, 'Fitting and Bushings', 'fitting-and-bushings', 0),
(9, 'Coupling', 'coupling', 0),
(10, 'T-Connectors', 't-Connectors', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_tbl`
--

CREATE TABLE IF NOT EXISTS `sparepart_tbl` (
  `sparepart_id` int(11) NOT NULL,
  `sparepart_name` varchar(250) NOT NULL,
  `sparepart_price` int(11) NOT NULL,
  `sparepart_image` varchar(250) NOT NULL,
  `sparepart_image_2` varchar(250) NOT NULL,
  `sparepart_image_3` varchar(250) NOT NULL,
  `sparepart_image_4` varchar(250) NOT NULL,
  `sparepart_text_preview` text NOT NULL,
  `sparepart_desc` text NOT NULL,
  `stock` varchar(100) NOT NULL,
  `sparepart_slug` varchar(250) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `sparepart_category` varchar(110) NOT NULL,
  `sparepart_code` varchar(30) NOT NULL,
  `berat` int(11) NOT NULL,
  `dimensi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart_tbl`
--

INSERT INTO `sparepart_tbl` (`sparepart_id`, `sparepart_name`, `sparepart_price`, `sparepart_image`, `sparepart_image_2`, `sparepart_image_3`, `sparepart_image_4`, `sparepart_text_preview`, `sparepart_desc`, `stock`, `sparepart_slug`, `manu_id`, `sparepart_category`, `sparepart_code`, `berat`, `dimensi`) VALUES
(1, 'Piston rod 1/8 for Smartline pump head 10 ml', 0, '', '', '', '', '', '', '', 'Piston-rod-1-8-for-Smartline-pump-head-10-ml', 8, 'pump', 'A54150', 0, 0),
(2, 'Piston rod 1/8 for Wellchrom pump head 10 ml', 0, '', '', '', '', '', '', '', 'Piston-rod-1-8-for-Wellchrom-pump-head-10-ml', 8, 'pump', 'A1410', 0, 0),
(3, 'Set of gaskets for 2x1/8 piston rod 10mL ', 0, '', '', '', '', '', '', '', 'Set-of-gaskets-for-2x1-8-piston-rod-10mL', 8, 'pump', 'A1514', 0, 0),
(4, 'Set of gaskets for 2x1/8 piston rod 10ml high pressure', 0, '', '', '', '', '', '', '', 'Set-of-gaskets-for-2x1-8-piston-rod-10ml-high-pressure', 8, 'pump', 'A1414', 0, 0),
(5, 'Check valve unit suitable for 10 ml and 50 ml pump head', 0, '', '', '', '', '', '', '', 'Check-valve-unit-suitable-for-10-ml-and-50-ml-pump-head', 8, 'pump', 'A0684', 0, 0),
(6, 'Main Power Supply Wellchrom Series', 0, '', '', '', '', '', '', '', 'Main-Power-Supply-Wellchrom-Series', 8, 'pump', 'K0775', 0, 0),
(7, 'Switching Power Supply Smartline Series', 0, '', '', '', '', '', '', '', 'Switching-Power-Supply-Smartline-Series', 8, 'pump', 'K0773', 0, 0),
(8, 'Cooling Fan, Wellchrom K-1001 Pump Original Parts', 0, '', '', '', '', '', '', '', 'Cooling-Fan--Wellchrom-K-1001-Pump-Original-Parts', 8, 'pump', 'M0875', 0, 0),
(9, 'Motor Assembly, Wellchrom Series Pumps', 0, '', '', '', '', '', '', '', 'Motor-Assembly--Wellchrom-Series-Pumps', 8, 'pump', 'G2718', 0, 0),
(10, 'Optical Sensor Assembly', 0, '', '', '', '', '', '', '', 'Optical-Sensor-Assembly', 8, 'pump', 'G2726', 0, 0),
(11, 'Pump Drive Assembly, Wellchrom Series Pumps', 0, '', '', '', '', '', '', '', 'Pump-Drive-Assembly--Wellchrom-Series-Pumps', 8, 'pump', 'G2715', 0, 0),
(12, 'Seal Holder Ceramics', 0, '', '', '', '', '', '', '', 'Seal-Holder-Ceramics', 8, 'pump', 'P2849', 0, 0),
(13, 'Holding Plate Smartline Pumps', 0, '', '', '', '', '', '', '', 'Holding-Plate-Smartline-Pumps', 8, 'pump', 'P2752-1', 0, 0),
(14, 'Keypad for S1000 Pump', 0, '', '', '', '', '', '', '', 'Keypad-for-S1000-Pump', 8, 'pump', 'M0632', 0, 0),
(15, 'Eeprom for K-501 Pump', 0, '', '', '', '', '', '', '', 'Eeprom-for-K-501-Pump', 8, 'pump', 'K0175', 0, 0),
(16, 'Spring for 10 mL Knauer Pump Head , pk/2', 0, '', '', '', '', '', '', '', 'Spring-for-10-mL-Knauer-Pump-Head---pk-2', 8, 'pump', 'R0462', 0, 0),
(17, 'ASI check valve SS', 0, '', '', '', '', '', '', '', 'ASI-check-valve-SS', 8, 'pump', '250-0260', 0, 0),
(18, 'Main Board for S1000 Pump', 0, '', '', '', '', '', '', '', 'Main-Board-for-S1000-Pump', 8, 'pump', 'G1002-1V1', 0, 0),
(19, 'Main Board for Pump K-1001', 0, '', '', '', '', '', '', '', 'Main-Board-for-Pump-K-1001', 8, 'pump', 'G2716', 0, 0),
(20, 'Tooth Belt', 0, '', '', '', '', '', '', '', 'Tooth-Belt', 8, 'pump', 'M1840', 0, 0),
(21, 'Rinse pump', 0, '', '', '', '', '', '', '', 'Rinse-pump', 8, 'pump', 'G1652', 0, 0),
(22, 'LC 425 CPU Main Board', 0, '', '', '', '', '', '', '', 'LC-425-CPU-Main-Board', 8, 'pump', 'G1094V3', 0, 0),
(23, 'De-aeration screw for pressure transducer PEEK', 0, '', '', '', '', '', '', '', 'De-aeration-screw-for-pressure-transducer-PEEK', 8, 'pump', 'A1409', 0, 0),
(24, 'Keeper SRAM incl. CMOS battery', 0, '', '', '', '', '', '', '', 'Keeper-SRAM-incl.-CMOS-battery', 8, 'pump', 'K0440', 0, 0),
(25, 'Vaccum Pump Assembly for Smartline Degasser', 0, '', '', '', '', '', '', '', 'Vaccum-Pump-Assembly-for-Smartline-Degasser', 8, 'online-degesser-LPG-Valve', 'Axxx8-9000-1023', 0, 0),
(26, 'PC Board for Smartline Degasser', 0, '', '', '', '', '', '', '', 'PC-Board-for-Smartline-Degasser', 8, 'online-degesser-LPG-Valve', 'Axxx8-9000-1056', 0, 0),
(27, '480 uL Vacuum Chamber, Per Pieces', 0, '', '', '', '', '', '', '', '480-uL-Vacuum-Chamber--Per-Pieces', 8, 'online-degesser-LPG-Valve', 'Axxx8-9000-1004', 0, 0),
(28, 'LPG Manifold - New SS', 0, '', '', '', '', '', '', '', 'LPG-Manifold---New-SS', 8, 'online-degesser-LPG-Valve', 'G2783V1', 0, 0),
(29, 'Vaccum Pump Assembly for Wellchrom Degasser', 0, '', '', '', '', '', '', '', 'Vaccum-Pump-Assembly-for-Wellchrom-Degasser', 8, 'online-degesser-LPG-Valve', '150-0010B', 0, 0),
(30, 'Vaccum Chamber 4 Channel for Wellchrom Degasser', 0, '', '', '', '', '', '', '', 'Vaccum-Chamber-4-Channel-for-Wellchrom-Degasser', 8, 'online-degesser-LPG-Valve', '150-0009B', 0, 0),
(31, 'Control PCB for Wellchrom Degasser', 0, '', '', '', '', '', '', '', 'Control-PCB-for-Wellchrom-Degasser', 8, 'online-degesser-LPG-Valve', '150-0011B', 0, 0),
(32, 'Solvent organizer valve for welchrom (LPG Valve)', 0, '', '', '', '', '', '', '', 'Solvent-organizer-valve-for-welchrom-(LPG-Valve)', 8, 'online-degesser-LPG-Valve', 'M1059- 2/2', 0, 0),
(33, 'Deuterium lamp, 35 W, replacement, for Diode Array Detector 2800', 0, '', '', '', '', '', '', '', 'Deuterium-lamp--35-W--replacement--for-Diode-Array-Detector-2800', 8, 'detector', 'A4447', 0, 0),
(34, 'Tungsten-Halogen lamp, 7.5 W, adjusted, for Smartline PDA Detector 2800 ', 0, '', '', '', '', '', '', '', 'Tungsten-Halogen-lamp--7.5-W--adjusted--for-Smartline-PDA-Detector-2800', 8, 'detector', 'A4448', 0, 0),
(35, 'Deuterium lamp, replacement 35 W', 0, '', '', '', '', '', '', '', 'Deuterium-lamp--replacement-35-W', 8, 'detector', 'A4071', 0, 0),
(36, 'Tungsten-Halogen Lamp, with base, optional for Smartline UV Detector 2500', 0, '', '', '', '', '', '', '', 'Tungsten-Halogen-Lamp--with-base--optional-for-Smartline-UV-Detector-2500', 8, 'detector', 'A4073', 0, 0),
(37, 'Tungsten-Halogen lamp, adjusted', 0, '', '', '', '', '', '', '', 'Tungsten-Halogen-lamp--adjusted', 8, 'detector', 'A4072', 0, 0),
(38, 'Mercury Vapor Lamp for A4055, lamp board included', 0, '', '', '', '', '', '', '', 'Mercury-Vapor-Lamp-for-A4055--lamp-board-included', 8, 'detector', 'A4142', 0, 0),
(39, 'Test cell with holmium oxid filter for Smartline PDA Detector 2800', 0, '', '', '', '', '', '', '', 'Test-cell-with-holmium-oxid-filter-for-Smartline-PDA-Detector-2800', 8, 'detector', 'A4139', 0, 0),
(40, 'Test cell with holmium oxid filter for UV Detectors', 0, '', '', '', '', '', '', '', 'Test-cell-with-holmium-oxid-filter-for-UV-Detectors', 8, 'detector', 'A4126', 0, 0),
(41, 'Test cell with holmium oxide filter for detectors using fiber optics', 0, '', '', '', '', '', '', '', 'Test-cell-with-holmium-oxide-filter-for-detectors-using-fiber-optics', 8, 'detector', 'A4128', 0, 0),
(42, 'Fiber optical connector, two sided, length 400 mm', 0, '', '', '', '', '', '', '', 'Fiber-optical-connector--two-sided--length-400-mm', 8, 'detector', 'A0911', 0, 0),
(43, 'Fiber optical connector, 750 mm, two sided', 0, '', '', '', '', '', '', '', 'Fiber-optical-connector--750-mm--two-sided', 8, 'detector', 'A0742', 0, 0),
(44, 'Set of 2 fiber optical connectors, length 750 mm', 0, '', '', '', '', '', '', '', 'Set-of-2-fiber-optical-connectors--length-750-mm', 8, 'detector', 'A0740', 0, 0),
(45, 'Extension-Kit for coupling two fiber optical connectors to separate the cell from the instrument hardware', 0, '', '', '', '', '', '', '', 'Extension-Kit-for-coupling-two-fiber-optical-connectors-to-separate-the-cell-from-the-instrument-hardware', 8, 'detector', 'A0857', 0, 0),
(46, 'Analytical Flow Cell, 10 mm, 10 ?l, with heat exchanger, stainless steel, 1/16 ', 0, '', '', '', '', '', '', '', 'Analytical-Flow-Cell--10-mm--10-?l--with-heat-exchanger--stainless-steel--1-16', 8, 'detector', 'A4061', 0, 0),
(47, 'Analytical Flow Cell, 10 mm, stainless steel, 10 ?l with heat exchanger, with fiber optical connector, 1/16 ', 0, '', '', '', '', '', '', '', 'Analytical-Flow-Cell--10-mm--stainless-steel--10-?l-with-heat-exchanger--with-fiber-optical-connector--1-16', 8, 'detector', 'A4074', 0, 0),
(48, 'Flow cell, 45 degrees, 9 ?l', 0, '', '', '', '', '', '', '', 'Flow-cell--45-degrees--9-?l', 8, 'detector', 'A0294', 0, 0),
(49, 'Flow cell, 15 degrees, 9 ?l, preparative version', 0, '', '', '', '', '', '', '', 'Flow-cell--15-degrees--9-?l--preparative-version', 8, 'detector', 'A0287', 0, 0),
(50, 'Gaskets for a cuvette, suitable for A0294 and A0287', 0, '', '', '', '', '', '', '', 'Gaskets-for-a-cuvette--suitable-for-A0294-and-A0287', 8, 'detector', 'A0277', 0, 0),
(51, 'Repair-Kit for analytical flow cells, 10 mm', 0, '', '', '', '', '', '', '', 'Repair-Kit-for-analytical-flow-cells--10-mm', 8, 'detector', 'A1131', 0, 0),
(52, 'Repair-Kit for analytical flow cells, 3 mm', 0, '', '', '', '', '', '', '', 'Repair-Kit-for-analytical-flow-cells--3-mm', 8, 'detector', 'A1475', 0, 0),
(53, 'Repair-Kit for preparative flow cells', 0, '', '', '', '', '', '', '', 'Repair-Kit-for-preparative-flow-cells', 8, 'detector', 'A1132', 0, 0),
(54, 'Repair Kit for flow cell A4130', 0, '', '', '', '', '', '', '', 'Repair-Kit-for-flow-cell-A4130', 8, 'detector', 'A1540', 0, 0),
(55, '1 lens, 1 sealing ring for analytical flow cells', 0, '', '', '', '', '', '', '', '1-lens--1-sealing-ring-for-analytical-flow-cells', 8, 'detector', 'A1447', 0, 0),
(56, '1 lens, 1 sealing ring for fiber optical analytical cells', 0, '', '', '', '', '', '', '', '1-lens--1-sealing-ring-for-fiber-optical-analytical-cells', 8, 'detector', 'A1449', 0, 0),
(57, '1 lens, 1 sealing ring for preparative flow cells', 0, '', '', '', '', '', '', '', '1-lens--1-sealing-ring-for-preparative-flow-cells', 8, 'detector', 'A1448', 0, 0),
(58, 'Signal ADC', 0, '', '', '', '', '', '', '', 'Signal-ADC', 8, 'detector', 'G5001-1', 0, 0),
(59, 'Reference ADC', 0, '', '', '', '', '', '', '', 'Reference-ADC', 8, 'detector', 'G2561-1', 0, 0),
(60, 'D2 Lamps Power Supply', 0, '', '', '', '', '', '', '', 'D2-Lamps-Power-Supply', 8, 'detector', 'E1228', 0, 0),
(61, 'D2 Lamps Power Supply - NEW', 0, '', '', '', '', '', '', '', 'D2-Lamps-Power-Supply---NEW', 8, 'detector', 'E1228V1.1', 0, 0),
(62, 'Adapter platine for D2 lamp power supply', 0, '', '', '', '', '', '', '', 'Adapter-platine-for-D2-lamp-power-supply', 8, 'detector', 'G0787', 0, 0),
(63, 'D2 Lamps Power Supply - NEW with bracket', 0, '', '', '', '', '', '', '', 'D2-Lamps-Power-Supply---NEW-with-bracket', 8, 'detector', 'G0786', 0, 0),
(64, 'Stand by board cpl', 0, '', '', '', '', '', '', '', 'Stand-by-board-cpl', 8, 'detector', 'G1592', 0, 0),
(65, 'Keypad Self Sticking for Wellchrom K2600', 0, '', '', '', '', '', '', '', 'Keypad-Self-Sticking-for-Wellchrom-K2600', 8, 'detector', 'M0582', 0, 0),
(66, 'Plate for Mounting of Filter Solenoid', 0, '', '', '', '', '', '', '', 'Plate-for-Mounting-of-Filter-Solenoid', 8, 'detector', 'P2611', 0, 0),
(67, 'Main Board K2600', 0, '', '', '', '', '', '', '', 'Main-Board-K2600', 8, 'detector', 'G2575', 0, 0),
(68, 'Solenoid Core/Liftting Magnet', 0, '', '', '', '', '', '', '', 'Solenoid-Core-Liftting-Magnet', 8, 'detector', 'G2573', 0, 0),
(69, 'Reflector holder compl', 0, '', '', '', '', '', '', '', 'Reflector-holder-compl', 8, 'detector', 'G2560', 0, 0),
(70, 'RI 2300 Solenoid Valve Assembly', 0, '', '', '', '', '', '', '', 'RI-2300-Solenoid-Valve-Assembly', 8, 'detector', 'M1449', 0, 0),
(71, 'RI 2300 Cell Covers', 0, '', '', '', '', '', '', '', 'RI-2300-Cell-Covers', 8, 'detector', 'A1305', 0, 0),
(72, 'LED Assembly for RI 2300', 0, '', '', '', '', '', '', '', 'LED-Assembly-for-RI-2300', 8, 'detector', 'G0056', 0, 0),
(73, 'Pack of Three Oring for Solenoid Valve', 0, '', '', '', '', '', '', '', 'Pack-of-Three-Oring-for-Solenoid-Valve', 8, 'detector', 'A1127', 0, 0),
(74, 'Pack of 10 Gasket for Flow Cell', 0, '', '', '', '', '', '', '', 'Pack-of-10-Gasket-for-Flow-Cell', 8, 'detector', 'A0277', 0, 0),
(75, 'Main Board S2500 Plus Controller / EEPROM', 0, '', '', '', '', '', '', '', 'Main-Board-S2500-Plus-Controller-EEPROM', 8, 'detector', 'G1066', 0, 0),
(76, 'Micro Controller for S2500', 0, '', '', '', '', '', '', '', 'Micro-Controller-for-S2500', 8, 'detector', 'K0289V1', 0, 0),
(77, 'Lamp assembly, Xenon, for Model RF-10AXL Fluorescence Detectors                                                                                                                                                                                      ', 0, '', '', '', '', '', '', '', 'Lamp-assembly--Xenon--for-Model-RF-10AXL-Fluorescence-Detectors', 8, 'detector', 'A0753', 0, 0),
(78, 'Test Holmium oxide filter', 0, '', '', '', '', '', '', '', 'Test-Holmium-oxide-filter', 8, 'detector', 'A4126', 0, 0),
(79, 'Deuterium Lamp, Replacement S2550 and S2520', 0, '', '', '', '', '', '', '', 'Deuterium-Lamp--Replacement-S2550-and-S2520', 8, 'detector', 'A5193', 0, 0),
(80, 'Deuterium Lamp type HBST for S2550', 0, '', '', '', '', '', '', '', 'Deuterium-Lamp-type-HBST-for-S2550', 8, 'detector', 'A5194', 0, 0),
(81, 'Tungsten Halogen lamp replacement S2550 for 2-lamp version', 0, '', '', '', '', '', '', '', 'Tungsten-Halogen-lamp-replacement-S2550-for-2-lamp-version', 8, 'detector', 'A5195', 0, 0),
(82, 'Accessory kit for UV-Detector Smartlne S2550', 0, '', '', '', '', '', '', '', 'Accessory-kit-for-UV-Detector-Smartlne-S2550', 8, 'detector', 'F5150', 0, 0),
(83, 'Tungsten Halogen lamp replacement for D2 lamp housing', 0, '', '', '', '', '', '', '', 'Tungsten-Halogen-lamp-replacement-for-D2-lamp-housing', 8, 'detector', 'A5197', 0, 0),
(84, 'Keypad detector K2501', 0, '', '', '', '', '', '', '', 'Keypad-detector-K2501', 8, 'detector', 'M0623', 0, 0),
(85, 'Display cable detector K2501', 0, '', '', '', '', '', '', '', 'Display-cable-detector-K2501', 8, 'detector', 'G2739', 0, 0),
(86, 'Fan for detector S2500', 0, '', '', '', '', '', '', '', 'Fan-for-detector-S2500', 8, 'detector', 'G5023V2', 0, 0),
(87, 'Valve', 0, '', '', '', '', '', '', '', 'Valve', 8, 'detector', 'G2055', 0, 0),
(88, 'Tooth belt 6T2,5/245', 0, '', '', '', '', '', '', '', 'Tooth-belt-6T2-5-245', 8, 'detector', 'M1876', 0, 0),
(89, 'Tooth belt, 6T2,5/180', 0, '', '', '', '', '', '', '', 'Tooth-belt--6T2-5-180', 8, 'detector', 'M1873', 0, 0),
(90, 'Upgrade kit filter wheel drive (S2520)', 0, '', '', '', '', '', '', '', 'Upgrade-kit-filter-wheel-drive-(S2520)', 8, 'detector', 'WK0001', 0, 0),
(91, 'Upgrade kit grating drive (S2520)', 0, '', '', '', '', '', '', '', 'Upgrade-kit-grating-drive-(S2520)', 8, 'detector', 'WK0003', 0, 0),
(92, 'RI 2000 Lamps', 0, '', '', '', '', '', '', '', 'RI-2000-Lamps', 8, 'detector', 'RI2000-012', 0, 0),
(93, 'RI 2000 Photodiode', 0, '', '', '', '', '', '', '', 'RI-2000-Photodiode', 8, 'detector', '', 0, 0),
(94, 'RI 2000/2012 Three Ways Valve (new type)', 0, '', '', '', '', '', '', '', 'RI-2000-2012-Three-Ways-Valve-(new-type)', 8, 'detector', 'RI2000-006', 0, 0),
(95, 'RI 2000 Teflon Seals for Flow Cell, pk 4', 0, '', '', '', '', '', '', '', 'RI-2000-Teflon-Seals-for-Flow-Cell--pk-4', 8, 'detector', 'RI2000-024', 0, 0),
(96, 'RI 2000 Flowcell', 0, '', '', '', '', '', '', '', 'RI-2000-Flowcell', 8, 'detector', 'RI2000-001', 0, 0),
(97, 'Flow Cell Holder With Capillary for RI 2000', 0, '', '', '', '', '', '', '', 'Flow-Cell-Holder-With-Capillary-for-RI-2000', 8, 'detector', '070515', 0, 0),
(98, 'Replacement Filter Catridge 0.5 micron for LV, Pkg.5', 0, '', '', '', '', '', '', '', 'Replacement-Filter-Catridge-0.5-micron-for-LV--Pkg.5', 8, 'detector', '850-1345', 0, 0),
(99, 'Xenon lamp socket assembly for Ultrafluor 305 detector                                                                                                                                                                                                    ', 0, '', '', '', '', '', '', '', 'Xenon-lamp-socket-assembly-for-Ultrafluor-305-detector', 8, 'detector', 'TSA5246020     ', 0, 0),
(100, 'Flow cell for Ultrafluor Fluorescence Detector, 8 ?L illuminated volume                                                                                                                                                                                   ', 0, '', '', '', '', '', '', '', 'Flow-cell-for-Ultrafluor-Fluorescence-Detector--8-?L-illuminated-volume', 8, 'detector', 'TSA5256010S    ', 0, 0),
(101, 'PC Board, motherboard, for Ultrafluor and FL-3000 detector                                                                                                                                                                                                ', 0, '', '', '', '', '', '', '', 'PC-Board--motherboard--for-Ultrafluor-and-FL-3000-detector', 8, 'detector', 'TSA9980010     ', 0, 0),
(102, 'Flow Cell 50 mm for UV6000LP', 0, '', '', '', '', '', '', '', 'Flow-Cell-50-mm-for-UV6000LP', 8, 'detector', 'TS803237', 0, 0),
(103, 'Lamp, Deuterium, for UV6000LP PDA detector.                                                                                                                                                                                                               ', 0, '', '', '', '', '', '', '', 'Lamp--Deuterium--for-UV6000LP-PDA-detector.', 8, 'detector', 'TS108052       ', 0, 0),
(104, 'Lamp, tungsten, for UV6000 LP PDA detector                                                                                                                                                                                                                ', 0, '', '', '', '', '', '', '', 'Lamp--tungsten--for-UV6000-LP-PDA-detector', 8, 'detector', 'TS803247       ', 0, 0),
(105, 'CPU Main Board for UV6000LP', 0, '', '', '', '', '', '', '', 'CPU-Main-Board-for-UV6000LP', 8, 'detector', '', 0, 0),
(106, 'Lamp assembly, Xenon, for Model 502 and Ultrafluor Fluorescence Detectors                                                                                                                                                                                 ', 0, '', '', '', '', '', '', '', 'Lamp-assembly--Xenon--for-Model-502-and-Ultrafluor-Fluorescence-Detectors', 8, 'detector', 'SC201356', 0, 0),
(107, 'Replacement power supply', 0, '', '', '', '', '', '', '', 'Replacement-power-supply', 8, 'detector', '60053-61035', 0, 0),
(108, 'Flash Lamp Board (FLL), includes trigger pack for Agilent Series 1200 FLD', 0, '', '', '', '', '', '', '', 'Flash-Lamp-Board-(FLL)--includes-trigger-pack-for-Agilent-Series-1200-FLD', 8, 'detector', 'AGG1321-66512', 0, 0),
(109, 'Xenon flash lamp for Agilent Fluoresence Detector Series 1200', 0, '', '', '', '', '', '', '', 'Xenon-flash-lamp-for-Agilent-Fluoresence-Detector-Series-1200', 8, 'detector', 'AGG2140-0600', 0, 0),
(110, 'Rotor Seals for Knauer Valve ', 0, '', '', '', '', '', '', '', 'Rotor-Seals-for-Knauer-Valve', 8, 'injection-switching-valve', 'A0611', 0, 0),
(111, 'Rotor Seals for Rheodyne 7725, 7725i, 7125, 7125i', 0, '', '', '', '', '', '', '', 'Rotor-Seals-for-Rheodyne-7725--7725i--7125--7125i', 8, 'injection-switching-valve', '7125-047', 0, 0),
(112, 'Rotor Seals for Autosampler S3800 Old Versions (7010 Injector)', 0, '', '', '', '', '', '', '', 'Rotor-Seals-for-Autosampler-S3800-Old-Versions-(7010-Injector)', 8, 'injection-switching-valve', '7010-009', 0, 0),
(113, 'Rotor Seals for Autosampler S3800 New , Thriatlon (7739-005)', 0, '', '', '', '', '', '', '', 'Rotor-Seals-for-Autosampler-S3800-New---Thriatlon-(7739-005)', 8, 'injection-switching-valve', '7750-016', 0, 0),
(114, 'Sample Needle Thriathlon', 0, '', '', '', '', '', '', '', 'Sample-Needle-Thriathlon', 8, 'injection-switching-valve', 'M0343', 0, 0),
(115, 'Flex PCB Thriatlon', 0, '', '', '', '', '', '', '', 'Flex-PCB-Thriatlon', 8, 'injection-switching-valve', 'Axxx1-0900.625', 0, 0),
(116, 'Belt autosampler thriatlon', 0, '', '', '', '', '', '', '', 'Belt-autosampler-thriatlon', 8, 'injection-switching-valve', 'M0347', 0, 0),
(117, 'Key board for basic marathon', 0, '', '', '', '', '', '', '', 'Key-board-for-basic-marathon', 8, 'injection-switching-valve', 'Axxx1-0043.665', 0, 0),
(118, 'Stator for Rheodyne 7739 Valve', 0, '', '', '', '', '', '', '', 'Stator-for-Rheodyne-7739-Valve', 8, 'injection-switching-valve', '3796.091', 0, 0),
(119, 'Vespel rotor seal for rheodyne 7739 valve', 0, '', '', '', '', '', '', '', 'Vespel-rotor-seal-for-rheodyne-7739-valve', 8, 'injection-switching-valve', '3796.092', 0, 0),
(120, 'Standard sample needle Triathlon', 0, '', '', '', '', '', '', '', 'Standard-sample-needle-Triathlon', 8, 'injection-switching-valve', '900.303', 0, 0),
(121, 'Syringe valve assy', 0, '', '', '', '', '', '', '', 'Syringe-valve-assy', 8, 'injection-switching-valve', '2140.151', 0, 0),
(122, 'Syringe 250 um with screw connection', 0, '', '', '', '', '', '', '', 'Syringe-250-um-with-screw-connection', 8, 'injection-switching-valve', '4400.25', 0, 0),
(123, 'Syringe, 250 uL Screw tip (AS3000)', 0, '', '', '', '', '', '', '', 'Syringe--250-uL-Screw-tip-(AS3000)', 8, 'injection-switching-valve', 'A3588020', 0, 0),
(124, 'Autosampler Needle Replacement Kit, S.S (Thermo)', 0, '', '', '', '', '', '', '', 'Autosampler-Needle-Replacement-Kit--S.S-(Thermo)', 8, 'injection-switching-valve', 'TSA4719010', 0, 0),
(125, 'Plunger replacement tips 250 uL, PK/10 Pcs', 0, '', '', '', '', '', '', '', 'Plunger-replacement-tips-250-uL--PK-10-Pcs', 8, 'injection-switching-valve', 'M0355', 0, 0),
(126, 'Syringe luer lock 250 uL for Triathlon', 0, '', '', '', '', '', '', '', 'Syringe-luer-lock-250-uL-for-Triathlon', 8, 'injection-switching-valve', 'M0361', 0, 0),
(127, 'Injection Needle for basic marathon 3pcs/pk', 0, '', '', '', '', '', '', '', 'Injection-Needle-for-basic-marathon-3pcs-pk', 8, 'injection-switching-valve', 'A0879', 0, 0),
(128, 'pump tubing cassete for S3800', 0, '', '', '', '', '', '', '', 'pump-tubing-cassete-for-S3800', 8, 'injection-switching-valve', 'M0288', 0, 0),
(129, 'DC Motor 24V + Gearbox 30:1', 0, '', '', '', '', '', '', '', 'DC-Motor-24V-+-Gearbox-30:1', 8, 'injection-switching-valve', 'M2348', 0, 0),
(130, 'Rheodyne Injector', 0, '', '', '', '', '', '', '', 'Rheodyne-Injector', 8, 'injection-switching-valve', '7725i', 0, 0),
(131, 'Zeropower RAM for Triathlon AS', 0, '', '', '', '', '', '', '', 'Zeropower-RAM-for-Triathlon-AS', 8, 'injection-switching-valve', 'M48Z02-70PC1', 0, 0),
(132, 'Timekeeper RAM for Triahlon AS', 0, '', '', '', '', '', '', '', 'Timekeeper-RAM-for-Triahlon-AS', 8, 'injection-switching-valve', 'M48T02-70PC1', 0, 0),
(133, 'Mixing Chamber extension unit, 1 intermediate section, 4.8 ml, 3 screws 6 x 60 mm', 0, '', '', '', '', '', '', '', 'Mixing-Chamber-extension-unit--1-intermediate-section--4.8-ml--3-screws-6-x-60-mm', 8, 'mixing-chamber', 'A2515', 0, 0),
(134, 'Set of spare parts containing 4 stainless steel sieves and 6 gaskets', 0, '', '', '', '', '', '', '', 'Set-of-spare-parts-containing-4-stainless-steel-sieves-and-6-gaskets', 8, 'mixing-chamber', 'A0701', 0, 0),
(135, 'Set of spare parts, containing 4 glass fiber sieves and 6 PTFE gaskets', 0, '', '', '', '', '', '', '', 'Set-of-spare-parts--containing-4-glass-fiber-sieves-and-6-PTFE-gaskets', 8, 'mixing-chamber', 'A0365', 0, 0),
(136, 'Set of spare parts containing 5 gaskets, 18.5 mm ID, 21.05 mm OD', 0, '', '', '', '', '', '', '', 'Set-of-spare-parts-containing-5-gaskets--18.5-mm-ID--21.05-mm-OD', 8, 'mixing-chamber', 'A1051', 0, 0),
(137, '10 sealing rings for capillaries with 1/16 OD, PEEK', 0, '', '', '', '', '', '', '', '10-sealing-rings-for-capillaries-with-1-16-OD--PEEK', 8, 'accessories-miscellaneous', 'A1062', 0, 0),
(138, '10 sealing rings for capillaries, 1/8 OD, polymer', 0, '', '', '', '', '', '', '', '10-sealing-rings-for-capillaries--1-8-OD--polymer', 8, 'accessories-miscellaneous', 'A0232', 0, 0),
(139, '10 sealing rings for capillaries with 1/8 OD, PEEK', 0, '', '', '', '', '', '', '', '10-sealing-rings-for-capillaries-with-1-8-OD--PEEK', 8, 'accessories-miscellaneous', 'A1063', 0, 0),
(140, '10 ferrules for capillaries with 1/8 OD, stainless steel', 0, '', '', '', '', '', '', '', '10-ferrules-for-capillaries-with-1-8-OD--stainless-steel', 8, 'accessories-miscellaneous', 'A0874', 0, 0),
(141, '100 sealing rings for capillaries with 1/16 OD, polymer', 0, '', '', '', '', '', '', '', '100-sealing-rings-for-capillaries-with-1-16-OD--polymer', 8, 'accessories-miscellaneous', 'A0140', 0, 0),
(142, '100 ferrules for capillaries with 1/16 OD, stainless steel', 0, '', '', '', '', '', '', '', '100-ferrules-for-capillaries-with-1-16-OD--stainless-steel', 8, 'accessories-miscellaneous', 'A0111', 0, 0),
(143, '30 sealing rings for capillaries with 1/16 OD, polymer', 0, '', '', '', '', '', '', '', '30-sealing-rings-for-capillaries-with-1-16-OD--polymer', 8, 'accessories-miscellaneous', 'A0139', 0, 0),
(144, '30 ferrules for capillaries with 1/16 OD, stainless steel', 0, '', '', '', '', '', '', '', '30-ferrules-for-capillaries-with-1-16-OD--stainless-steel', 8, 'accessories-miscellaneous', 'A0110', 0, 0),
(145, '4 Split-grooved clamping rings with 1/16 OD', 0, '', '', '', '', '', '', '', '4-Split-grooved-clamping-rings-with-1-16-OD', 8, 'accessories-miscellaneous', 'A0484', 0, 0),
(146, '4 Split-grooved clamping rings with 1/8 OD', 0, '', '', '', '', '', '', '', '4-Split-grooved-clamping-rings-with-1-8-OD', 8, 'accessories-miscellaneous', 'A1239', 0, 0),
(147, '10 biconical sealing rings with 1/16 PEEK', 0, '', '', '', '', '', '', '', '10-biconical-sealing-rings-with-1-16-PEEK', 8, 'accessories-miscellaneous', 'A1070', 0, 0),
(148, '10 biconical sealing rings with 1/16 polymer', 0, '', '', '', '', '', '', '', '10-biconical-sealing-rings-with-1-16-polymer', 8, 'accessories-miscellaneous', 'A1022', 0, 0),
(149, 'Capillary cleaning set', 0, '', '', '', '', '', '', '', 'Capillary-cleaning-set', 8, 'accessories-miscellaneous', 'A0137', 0, 0),
(150, '4-way connector, stainless steel, to connect three capillaries with 1/16  OD and 1 capillary 1/8 ', 0, '', '', '', '', '', '', '', '4-way-connector--stainless-steel--to-connect-three-capillaries-with-1-16-OD-and-1-capillary-1-8', 8, 'accessories-miscellaneous', 'A2514', 0, 0),
(151, '4-way connector, stainless steel, to connect four capillaries with 1/16   OD', 0, '', '', '', '', '', '', '', '4-way-connector--stainless-steel--to-connect-four-capillaries-with-1-16-OD', 8, 'accessories-miscellaneous', 'A0121', 0, 0),
(152, '4-way connector, polymer, to connect 4 capillaries with 1/16   OD', 0, '', '', '', '', '', '', '', '4-way-connector--polymer--to-connect-4-capillaries-with-1-16-OD', 8, 'accessories-miscellaneous', 'A0151', 0, 0),
(153, '4-way connector, stainless steel, to connect four capillaries with 1/8 , M8 X 1', 0, '', '', '', '', '', '', '', '4-way-connector--stainless-steel--to-connect-four-capillaries-with-1-8---M8-X-1', 8, 'accessories-miscellaneous', 'A1096', 0, 0),
(154, '2 open-end wrenches, 1/4   and 5/16  ', 0, '', '', '', '', '', '', '', '2-open-end-wrenches--1-4-and-5-16', 8, 'accessories-miscellaneous', 'A0138', 0, 0),
(155, 'PTFE tubing, 1.6mm, 1/16   OD, 0.45 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'PTFE-tubing--1.6mm--1-16-OD--0.45-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0152', 0, 0),
(156, 'PTFE tubing, 2mm OD, 1.45 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'PTFE-tubing--2mm-OD--1.45-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0153', 0, 0),
(157, 'PTFE tubing, 3.2mm, 1/8  OD, 1.5 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'PTFE-tubing--3.2mm--1-8-OD--1.5-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0732', 0, 0),
(158, 'PTFE tubing, 3.2 mm, 1/8  OD, 2 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'PTFE-tubing--3.2-mm--1-8-OD--2-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0873', 0, 0),
(159, 'PTFE tubing, 4 mm OD, 3 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'PTFE-tubing--4-mm-OD--3-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0154', 0, 0),
(160, 'Tube cutter', 0, '', '', '', '', '', '', '', 'Tube-cutter', 8, 'accessories-miscellaneous', 'A0569', 0, 0),
(161, 'Cutting pliers for capillaries', 0, '', '', '', '', '', '', '', 'Cutting-pliers-for-capillaries', 8, 'accessories-miscellaneous', 'A0809', 0, 0),
(162, 'Tefzel Tubing, 1/16   OD, 0.25-0.3 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'Tefzel-Tubing--1-16-OD--0.25-0.3-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0182', 0, 0),
(163, 'Tefzel Tubing, 1/16   OD, 0.7 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'Tefzel-Tubing--1-16-OD--0.7-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0183', 0, 0),
(164, 'Tefzel Tubing, 1/8  OD, 1.6 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'Tefzel-Tubing--1-8-OD--1.6-mm-ID--300-cm-length', 8, 'accessories-miscellaneous', 'A0478', 0, 0),
(165, 'Sample Loop, 5 ?l, stainlees steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--5-?l--stainlees-steel', 8, 'accessories-miscellaneous', 'A0331', 0, 0),
(166, 'Sample Loop, 10 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--10-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0561', 0, 0),
(167, 'Sample Loop, 20 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--20-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0562', 0, 0),
(168, 'Sample Loop, 30 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--30-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0836', 0, 0),
(169, 'Sample Loop, 50 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--50-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0563', 0, 0),
(170, 'Sample Loop, 75 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--75-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0837', 0, 0),
(171, 'Sample Loop, 100 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--100-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0564', 0, 0),
(172, 'Sample Loop, 200 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--200-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0565', 0, 0),
(173, 'Sample Loop, 500 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--500-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0566', 0, 0),
(174, 'Sample Loop, 1000 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--1000-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0567', 0, 0),
(175, 'Sample Loop, 2000 ?l, stainless steel', 0, '', '', '', '', '', '', '', 'Sample-Loop--2000-?l--stainless-steel', 8, 'accessories-miscellaneous', 'A0568', 0, 0),
(176, 'Sample Loop, 10 ?l, PEEK', 0, '', '', '', '', '', '', '', 'Sample-Loop--10-?l--PEEK', 8, 'accessories-miscellaneous', 'A1058', 0, 0),
(177, 'Sample Loop, 20 ?l, PEEK', 0, '', '', '', '', '', '', '', 'Sample-Loop--20-?l--PEEK', 8, 'accessories-miscellaneous', 'A1059', 0, 0),
(178, 'Sample Loop, 50 ?l, PEEK', 0, '', '', '', '', '', '', '', 'Sample-Loop--50-?l--PEEK', 8, 'accessories-miscellaneous', 'A1060', 0, 0),
(179, 'Sample Loop, 200 ?l, PEEK', 0, '', '', '', '', '', '', '', 'Sample-Loop--200-?l--PEEK', 8, 'accessories-miscellaneous', 'A1061', 0, 0),
(180, 'Sample Loop, 500 ?l, PEEK', 0, '', '', '', '', '', '', '', 'Sample-Loop--500-?l--PEEK', 8, 'accessories-miscellaneous', 'A1057', 0, 0),
(181, 'Sample Loop, preparative 1/8   stainless steel, volume up to 1 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative-1-8-stainless-steel--volume-up-to-1-ml', 8, 'accessories-miscellaneous', 'A1043', 0, 0),
(182, 'Sample Loop, preparative 1/8 , stainless steel, volume up to 2 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative-1-8---stainless-steel--volume-up-to-2-ml', 8, 'accessories-miscellaneous', 'A1044', 0, 0),
(183, 'Sample loop, preparative, 1/8 , PEEK, volume up to 1 ml', 0, '', '', '', '', '', '', '', 'Sample-loop--preparative--1-8---PEEK--volume-up-to-1-ml', 8, 'accessories-miscellaneous', 'A1110', 0, 0),
(184, 'Sample Loop, preparative, 1/8  , PEEK, volume up to 2 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative--1-8---PEEK--volume-up-to-2-ml', 8, 'accessories-miscellaneous', 'A1111', 0, 0),
(185, 'Sample Loop, preparative, 1/8 , stainless steel, volume up to 11 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative--1-8---stainless-steel--volume-up-to-11-ml', 8, 'accessories-miscellaneous', 'A1159', 0, 0),
(186, 'Sample Loop, preparative 1/8 , stainless steel, volume up to 45 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative-1-8---stainless-steel--volume-up-to-45-ml', 8, 'accessories-miscellaneous', 'A1160', 0, 0),
(187, 'Sample Loop, preparative 1/16  , stainless steel, volume up to 11 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative-1-16---stainless-steel--volume-up-to-11-ml', 8, 'accessories-miscellaneous', 'A1054-1', 0, 0),
(188, 'Sample Loop, preparative, 1/16  , stainless steel, volume up to 45 ml', 0, '', '', '', '', '', '', '', 'Sample-Loop--preparative--1-16---stainless-steel--volume-up-to-45-ml', 8, 'accessories-miscellaneous', 'A1055-1', 0, 0),
(189, 'Loop Filling Port', 0, '', '', '', '', '', '', '', 'Loop-Filling-Port', 8, 'accessories-miscellaneous', 'A0555', 0, 0),
(190, 'Column Inlet Filter, stainless steel', 0, '', '', '', '', '', '', '', 'Column-Inlet-Filter--stainless-steel', 8, 'accessories-miscellaneous', 'A0109', 0, 0),
(191, 'Spare parts pack for column, ID 3-4.6 mm and column inlet filter', 0, '', '', '', '', '', '', '', 'Spare-parts-pack-for-column--ID-3-4.6-mm-and-column-inlet-filter', 8, 'accessories-miscellaneous', 'A0015', 0, 0),
(192, 'Peltier element', 0, '', '', '', '', '', '', '', 'Peltier-element', 8, 'accessories-miscellaneous', 'TEC112706', 0, 0),
(193, '10 Capillaries, 1/16  OD, stainless steel, 0.1 mm ID, 10 cm length', 0, '', '', '', '', '', '', '', '10-Capillaries--1-16-OD--stainless-steel--0.1-mm-ID--10-cm-length', 8, 'capillary-kits-and-capillaries', 'A0123', 0, 0),
(194, '10 Capillaries, 1/16  OD, stainless steel, 1 mm ID, 20 cm length', 0, '', '', '', '', '', '', '', '10-Capillaries--1-16-OD--stainless-steel--1-mm-ID--20-cm-length', 8, 'capillary-kits-and-capillaries', 'A0124', 0, 0),
(195, '10 Capillaries, 1/16  OD, stainless steel, 0.1 mm ID, 30 cm length', 0, '', '', '', '', '', '', '', '10-Capillaries--1-16-OD--stainless-steel--0.1-mm-ID--30-cm-length', 8, 'capillary-kits-and-capillaries', 'A0125', 0, 0),
(196, '10 Capillaries, 1/16  OD, stainless steel, 0.25 mm ID, 10 cm length', 0, '', '', '', '', '', '', '', '10-Capillaries--1-16-OD--stainless-steel--0.25-mm-ID--10-cm-length', 8, 'capillary-kits-and-capillaries', 'A0126', 0, 0),
(197, '10 Capillaries, 1/16  OD, stainless steel, 0.25 mm ID, 20 cm length', 0, '', '', '', '', '', '', '', '10-Capillaries--1-16-OD--stainless-steel--0.25-mm-ID--20-cm-length', 8, 'capillary-kits-and-capillaries', 'A0127', 0, 0),
(198, '10 Capillaries, 1/16  OD, stainless steel, 0.25 mm ID, 30 cm length', 0, '', '', '', '', '', '', '', '10-Capillaries--1-16-OD--stainless-steel--0.25-mm-ID--30-cm-length', 8, 'capillary-kits-and-capillaries', 'A0128', 0, 0),
(199, 'Capillary, stainless steel, 1/16   OD, 0.1 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'Capillary--stainless-steel--1-16-OD--0.1-mm-ID--300-cm-length', 8, 'capillary-kits-and-capillaries', 'A0130', 0, 0),
(200, 'Capillary, stainless steel 1/16  OD, 0.25 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'Capillary--stainless-steel-1-16-OD--0.25-mm-ID--300-cm-length', 8, 'capillary-kits-and-capillaries', 'A0131', 0, 0),
(201, 'Capillary 1/16  OD, 0.5 mm ID, 300 cm length, stainless steel', 0, '', '', '', '', '', '', '', 'Capillary-1-16-OD--0.5-mm-ID--300-cm-length--stainless-steel', 8, 'capillary-kits-and-capillaries', 'A0132', 0, 0),
(202, 'Capillary 1/16  OD, 0.7 mm ID, 300 cm length, stainless steel', 0, '', '', '', '', '', '', '', 'Capillary-1-16-OD--0.7-mm-ID--300-cm-length--stainless-steel', 8, 'capillary-kits-and-capillaries', 'A0133', 0, 0),
(203, 'Capillary, stainless steel, 1/16  OD, 1 mm ID, 300 cm length', 0, '', '', '', '', '', '', '', 'Capillary--stainless-steel--1-16-OD--1-mm-ID--300-cm-length', 8, 'capillary-kits-and-capillaries', 'A0134', 0, 0),
(204, 'Capillary, stainless steel 1/8  OD, 1.6 mm ID, 150 cm length', 0, '', '', '', '', '', '', '', 'Capillary--stainless-steel-1-8-OD--1.6-mm-ID--150-cm-length', 8, 'capillary-kits-and-capillaries', 'A0639', 0, 0),
(205, '1 Capillary, stainless steel, 1/8  OD, 2.2 mm ID, 150 cm length', 0, '', '', '', '', '', '', '', '1-Capillary--stainless-steel--1-8-OD--2.2-mm-ID--150-cm-length', 8, 'capillary-kits-and-capillaries', 'A0640', 0, 0),
(206, 'Capillary, PEEK, 1/16  OD, 0.25 mm ID, 150 cm length', 0, '', '', '', '', '', '', '', 'Capillary--PEEK--1-16-OD--0.25-mm-ID--150-cm-length', 8, 'capillary-kits-and-capillaries', 'A0685', 0, 0),
(207, 'Capillary, PEEK, 1/16  OD, 0.5 mm ID, 150 cm length', 0, '', '', '', '', '', '', '', 'Capillary--PEEK--1-16-OD--0.5-mm-ID--150-cm-length', 8, 'capillary-kits-and-capillaries', 'A0691', 0, 0),
(208, 'Capillary, PEEK, 1/16  OD, 0.7 mm ID, 150 cm length', 0, '', '', '', '', '', '', '', 'Capillary--PEEK--1-16-OD--0.7-mm-ID--150-cm-length', 8, 'capillary-kits-and-capillaries', 'A0692', 0, 0),
(209, 'Capillary, PEEK, 1/8   OD, 1.6 mm ID, 150 cm length', 0, '', '', '', '', '', '', '', 'Capillary--PEEK--1-8-OD--1.6-mm-ID--150-cm-length', 8, 'capillary-kits-and-capillaries', 'A0737', 0, 0),
(210, 'Blind fittings, 1/16  , short, UNF 10-32, knurled, PEEK', 0, '', '', '', '', '', '', '', 'Blind-fittings--1-16---short--UNF-10-32--knurled--PEEK', 8, 'fitting-and-bushings', 'A0582', 0, 0),
(211, '10 blind fittings, 1/16  , short, UNF 10-32, knurled, polymer,', 0, '', '', '', '', '', '', '', '10-blind-fittings--1-16---short--UNF-10-32--knurled--polymer-', 8, 'fitting-and-bushings', 'A0146', 0, 0),
(212, '10 blind fittings, 1/8  , M8x1, polymer', 0, '', '', '', '', '', '', '', '10-blind-fittings--1-8---M8x1--polymer', 8, 'fitting-and-bushings', 'A0734', 0, 0),
(213, '10 bushings for capillaries with 1/16  , short', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-1-16---short', 8, 'fitting-and-bushings', 'A1021', 0, 0),
(214, '10 bushings for capillaries with 1/16  OD, short, UNF 10-32 wrench caliber 1/4 , stainless steel', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-1-16-OD--short--UNF-10-32-wrench-caliber-1-4---stainless-steel', 8, 'fitting-and-bushings', 'A0112', 0, 0),
(215, '10 bushings for capillaries with 1/16  OD, UNF 10-32 (PEEK)', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-1-16-OD--UNF-10-32-(PEEK)', 8, 'fitting-and-bushings', 'A0584', 0, 0),
(216, '30 bushings for capillaries with 1/16  OD, short, UNF 10-32 knurled, polymer', 0, '', '', '', '', '', '', '', '30-bushings-for-capillaries-with-1-16-OD--short--UNF-10-32-knurled--polymer', 8, 'fitting-and-bushings', 'A0142', 0, 0),
(217, '100 bushings for capillaries with 1/16  OD, short, UNF 10-32 knurled, polymer', 0, '', '', '', '', '', '', '', '100-bushings-for-capillaries-with-1-16-OD--short--UNF-10-32-knurled--polymer', 8, 'fitting-and-bushings', 'A0143', 0, 0),
(218, '10 bushings for capillaries with 1/16  OD, short, UNF 10-32 knurled, polymer', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-1-16-OD--short--UNF-10-32-knurled--polymer', 8, 'fitting-and-bushings', 'A0141', 0, 0),
(219, '10 bushings, for capillaries with 1/16  OD, long, UNF 10-32, knurled, polymer', 0, '', '', '', '', '', '', '', '10-bushings--for-capillaries-with-1-16-OD--long--UNF-10-32--knurled--polymer', 8, 'fitting-and-bushings', 'A0144', 0, 0),
(220, '10 bushings for capillaries with 1/16  OD, long, UNF 10-32, wrench caliber 1/4 , stainless steel', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-1-16-OD--long--UNF-10-32--wrench-caliber-1-4---stainless-steel', 8, 'fitting-and-bushings', 'A0116', 0, 0),
(221, '10 bushings for capillaries with integrated sealing cone, short, UNF 10-32, knurled', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-integrated-sealing-cone--short--UNF-10-32--knurled', 8, 'fitting-and-bushings', 'A0145', 0, 0),
(222, '10 bushings for capillaries with integrated sealing cone, short, knurled, polymer', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-integrated-sealing-cone--short--knurled--polymer', 8, 'fitting-and-bushings', 'A0733', 0, 0),
(223, '10 bushings for capillaries with 1/8  OD, M8 X 1, wrench caliber 10, stainless steel', 0, '', '', '', '', '', '', '', '10-bushings-for-capillaries-with-1-8-OD--M8-X-1--wrench-caliber-10--stainless-steel', 8, 'fitting-and-bushings', 'A0830', 0, 0),
(224, '25 bushings, for capillaries with 1/16  OD, short, UNF 10-32 wrench caliber 1/4 , stainless steel', 0, '', '', '', '', '', '', '', '25-bushings--for-capillaries-with-1-16-OD--short--UNF-10-32-wrench-caliber-1-4---stainless-steel', 8, 'fitting-and-bushings', 'A0113', 0, 0),
(225, '3 bushings for capillaries with 1/16  OD, long, UNF 10-32, wrench caliber 1/4 , stainless steel', 0, '', '', '', '', '', '', '', '3-bushings-for-capillaries-with-1-16-OD--long--UNF-10-32--wrench-caliber-1-4---stainless-steel', 8, 'fitting-and-bushings', 'A0115', 0, 0),
(226, '30 blind fittings, 1/16  , short, UNF 10-32, knurled, polymer', 0, '', '', '', '', '', '', '', '30-blind-fittings--1-16---short--UNF-10-32--knurled--polymer', 8, 'fitting-and-bushings', 'A0147', 0, 0),
(227, '4 bushings for capillaries with 1/8  , short', 0, '', '', '', '', '', '', '', '4-bushings-for-capillaries-with-1-8---short', 8, 'fitting-and-bushings', 'A1067', 0, 0),
(228, '4 Bushings for capillaries with 1/8  , long', 0, '', '', '', '', '', '', '', '4-Bushings-for-capillaries-with-1-8---long', 8, 'fitting-and-bushings', 'A0735', 0, 0),
(229, '5 bushings for capillaries with 1/16  , long', 0, '', '', '', '', '', '', '', '5-bushings-for-capillaries-with-1-16---long', 8, 'fitting-and-bushings', 'A1064', 0, 0),
(230, 'PEEK Fingertigt fitting for 1/16 , pk/10', 0, '', '', '', '', '', '', '', 'PEEK-Fingertigt-fitting-for-1-16---pk-10', 8, 'fitting-and-bushings', '', 0, 0),
(231, 'low dead volume coupling for 2 capillaries, stainless steel, 1/16   OD', 0, '', '', '', '', '', '', '', 'low-dead-volume-coupling-for-2-capillaries--stainless-steel--1-16-OD', 8, 'coupling', 'A0117', 0, 0),
(232, 'low dead volume coupling for 2 capillaries, stainless steel, 1/16   OD and 1/8  ', 0, '', '', '', '', '', '', '', 'low-dead-volume-coupling-for-2-capillaries--stainless-steel--1-16-OD-and-1-8', 8, 'coupling', 'A2513', 0, 0),
(233, '1 low dead volume coupling, polymer, to connect two capillaries with 1/16   OD', 0, '', '', '', '', '', '', '', '1-low-dead-volume-coupling--polymer--to-connect-two-capillaries-with-1-16-OD', 8, 'coupling', 'A0148', 0, 0),
(234, '25 low dead volume couplings, stainless steel, to connect 2 capillaries with 1/16   OD', 0, '', '', '', '', '', '', '', '25-low-dead-volume-couplings--stainless-steel--to-connect-2-capillaries-with-1-16-OD', 8, 'coupling', 'A0119', 0, 0),
(235, '5 low dead volume couplings, stainless steel, to connect two capillaries with 1/16   OD', 0, '', '', '', '', '', '', '', '5-low-dead-volume-couplings--stainless-steel--to-connect-two-capillaries-with-1-16-OD', 8, 'coupling', 'A0118', 0, 0),
(236, '5 low dead volume couplings, polymer, to connect two capillaries with 1/16   OD', 0, '', '', '', '', '', '', '', '5-low-dead-volume-couplings--polymer--to-connect-two-capillaries-with-1-16-OD', 8, 'coupling', 'A0149', 0, 0),
(237, 'low dead volume coupling for 2 capillaries, stainless steel, 1/8   OD, (M8 X 1)', 0, '', '', '', '', '', '', '', 'low-dead-volume-coupling-for-2-capillaries--stainless-steel--1-8-OD--(M8-X-1)', 8, 'coupling', 'A2512', 0, 0),
(238, 'Tee Connector for 3 capilarry SS 1/16  OD', 0, '', '', '', '', '', '', '', 'Tee-Connector-for-3-capilarry-SS-1-16-OD', 8, 'coupling', 'A0120', 0, 0),
(239, 'T-connector for 3 capillaries, polymer', 0, '', '', '', '', '', '', '', 'T-connector-for-3-capillaries--polymer', 8, 't-Connectors', 'A0150', 0, 0),
(240, 'T-connector for 3 capillaries, stainless steel, 1/16  OD', 0, '', '', '', '', '', '', '', 'T-connector-for-3-capillaries--stainless-steel--1-16-OD', 8, 't-Connectors', 'A0120', 0, 0),
(241, 'T-connector for 3 capillaries, stainless steel, with 1/8  OD, M8 X 1', 0, '', '', '', '', '', '', '', 'T-connector-for-3-capillaries--stainless-steel--with-1-8-OD--M8-X-1', 8, 't-Connectors', 'A2511', 0, 0),
(242, 'Measuring head for glass vials for K-7400', 0, '', '', '', '', '', '', '', 'Measuring-head-for-glass-vials-for-K-7400', 8, 'accessories-miscellaneous', 'A0840', 0, 0),
(243, 'Measuring head for plastic vials for K-7400', 0, '', '', '', '', '', '', '', 'Measuring-head-for-plastic-vials-for-K-7400', 8, 'accessories-miscellaneous', 'A840-1', 0, 0),
(244, 'Pack of 1000 disposable measuring vessels glass 150?l', 0, '', '', '', '', '', '', '', 'Pack-of-1000-disposable-measuring-vessels-glass-150?l', 8, 'accessories-miscellaneous', 'A0913', 0, 0),
(245, 'Pack of 100 disposable measuring vessels glass 150?l', 0, '', '', '', '', '', '', '', 'Pack-of-100-disposable-measuring-vessels-glass-150?l', 8, 'accessories-miscellaneous', 'A0914', 0, 0),
(246, 'Pack of 1000 disposable measuring vessels plastic 150?l', 0, '', '', '', '', '', '', '', 'Pack-of-1000-disposable-measuring-vessels-plastic-150?l', 8, 'accessories-miscellaneous', 'A0720', 0, 0),
(247, 'Pack of 10 ampoules NaCl calibration, 300 mOsm/kg', 0, '', '', '', '', '', '', '', 'Pack-of-10-ampoules-NaCl-calibration--300-mOsm-kg', 8, 'accessories-miscellaneous', 'Y1240', 0, 0),
(248, 'Pack of 10 ampoules NaCl calibration, 400 mOsm/kg', 0, '', '', '', '', '', '', '', 'Pack-of-10-ampoules-NaCl-calibration--400-mOsm-kg', 8, 'accessories-miscellaneous', 'Y1241', 0, 0),
(249, 'Pack of 10 ampoules NaCl calibration, 800 mOsm/kg', 0, '', '', '', '', '', '', '', 'Pack-of-10-ampoules-NaCl-calibration--800-mOsm-kg', 8, 'accessories-miscellaneous', 'Y1247', 0, 0),
(250, 'Pack of 10 ampoules NaCl calibration, 2000 mOsm/kg', 0, '', '', '', '', '', '', '', 'Pack-of-10-ampoules-NaCl-calibration--2000-mOsm-kg', 8, 'accessories-miscellaneous', 'Y1248', 0, 0),
(251, 'Pack of 10 ampoules NaCl calibration, 1600 mOsm/kg', 0, '', '', '', '', '', '', '', 'Pack-of-10-ampoules-NaCl-calibration--1600-mOsm-kg', 8, 'accessories-miscellaneous', 'Y1249', 0, 0),
(252, 'Universal thermistor probe 20 - 130??C', 0, '', '', '', '', '', '', '', 'Universal-thermistor-probe-20---130??C', 8, 'accessories-miscellaneous', 'A3703', 0, 0),
(253, 'Pack of 10 vapor wicks', 0, '', '', '', '', '', '', '', 'Pack-of-10-vapor-wicks', 8, 'accessories-miscellaneous', 'A0429', 0, 0),
(254, 'Glass beaker with inner ring', 0, '', '', '', '', '', '', '', 'Glass-beaker-with-inner-ring', 8, 'accessories-miscellaneous', 'A0807', 0, 0),
(255, 'Syringe with glass piston', 0, '', '', '', '', '', '', '', 'Syringe-with-glass-piston', 8, 'accessories-miscellaneous', 'A0428', 0, 0),
(256, 'Syringe with steel/teflon piston and needle', 0, '', '', '', '', '', '', '', 'Syringe-with-steel-teflon-piston-and-needle', 8, 'accessories-miscellaneous', 'A0433', 0, 0),
(257, 'Pack of 12 needles and 6 springs', 0, '', '', '', '', '', '', '', 'Pack-of-12-needles-and-6-springs', 8, 'accessories-miscellaneous', 'A0430', 0, 0),
(258, '10 g Benzil', 0, '', '', '', '', '', '', '', '10-g-Benzil', 8, 'accessories-miscellaneous', 'Y1026', 0, 0),
(259, 'Sample Cooler for Osmometer K7400', 0, '', '', '', '', '', '', '', 'Sample-Cooler-for-Osmometer-K7400', 8, 'accessories-miscellaneous', 'G0107V2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_tbl`
--

CREATE TABLE IF NOT EXISTS `subscriber_tbl` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber_tbl`
--

INSERT INTO `subscriber_tbl` (`subs_id`, `subs_email`) VALUES
(1, 'gg@gmail.com'),
(2, 'mantap@gmail.com'),
(3, 'yes@gmail.com'),
(4, 'gg@gmail.com'),
(5, 'hhh@gmail.com'),
(6, 'hhh@gmail.com'),
(7, 'hhh@gmail.com'),
(8, 'fff@gmail.com'),
(9, 'yuuu@gmail.com'),
(10, 'yuuu@gmail.com'),
(11, 'tses@gmail.com'),
(12, 'yuuu@gmail.com'),
(13, 'dasda@gmail.com'),
(14, 'dasda@gmail.com'),
(15, 'yoo@gmail.com'),
(16, 'yoooo@gmail.com'),
(17, 'tses@gmail.com'),
(18, 'sda@gmail.com'),
(19, 'sda@gmail.com'),
(20, 'res@gmail.com'),
(21, 'res@gmail.com'),
(22, 'masukgaya@gmail.com'),
(23, 'teslagi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tes_sparepart_tbl`
--

CREATE TABLE IF NOT EXISTS `tes_sparepart_tbl` (
  `sparepart_id` int(11) NOT NULL,
  `sparepart_name` varchar(250) NOT NULL,
  `sparepart_price` varchar(250) NOT NULL,
  `sparepart_image` varchar(250) NOT NULL,
  `sparepart_image_2` varchar(250) NOT NULL,
  `sparepart_image_3` varchar(250) NOT NULL,
  `sparepart_image_4` varchar(250) NOT NULL,
  `sparepart_desc` text NOT NULL,
  `stock` varchar(100) NOT NULL,
  `sparepart_slug` varchar(250) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `sparepart_category` int(11) NOT NULL,
  `catalog_code` varchar(30) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes_sparepart_tbl`
--

INSERT INTO `tes_sparepart_tbl` (`sparepart_id`, `sparepart_name`, `sparepart_price`, `sparepart_image`, `sparepart_image_2`, `sparepart_image_3`, `sparepart_image_4`, `sparepart_desc`, `stock`, `sparepart_slug`, `manu_id`, `sparepart_category`, `catalog_code`, `berat`) VALUES
(1, 'Piston rod 1/8" for Smartline pump head 10 ml', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(2, 'Piston rod 1/8" for Wellchrom pump head 10 ml', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(3, 'Set of gaskets for 2x1/8" piston rod 10mL ', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(4, 'Set of gaskets for 2x1/8" piston rod 10ml high pressure', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(5, 'Check valve unit suitable for 10 ml and 50 ml pump head', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(6, 'Main Power Supply Wellchrom Series', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(7, 'Switching Power Supply Smartline Series', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(8, 'Cooling Fan, Wellchrom K-1001 Pump Original Parts', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(9, 'Motor Assembly, Wellchrom Series Pumps', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(10, 'Optical Sensor Assembly', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(11, 'Pump Drive Assembly, Wellchrom Series Pumps', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(12, 'Seal Holder Ceramics', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(13, 'Holding Plate Smartline Pumps', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(14, 'Keypad for S1000 Pump', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(15, 'Eeprom for K-501 Pump', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(16, 'Spring for 10 mL Knauer Pump Head , pk/2', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(17, 'ASI check valve SS', '', '', '', '', '', '', '', '', 0, 8, 'pump', 250),
(18, 'Main Board for S1000 Pump', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(19, 'Main Board for Pump K-1001', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(20, 'Tooth Belt', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(21, 'Rinse pump', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(22, 'LC 425 CPU Main Board', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(23, 'De-aeration screw for pressure transducer PEEK', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(24, 'Keeper SRAM incl. CMOS battery', '', '', '', '', '', '', '', '', 0, 8, 'pump', 0),
(25, 'Vaccum Pump Assembly for Smartline Degasser', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 0),
(26, 'PC Board for Smartline Degasser', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 0),
(27, '480 uL Vacuum Chamber, Per Pieces', '', '', '', '', '', '', '', '', 480, 8, 'online-degesser-LPG-Valve', 0),
(28, 'LPG Manifold - New SS', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 0),
(29, 'Vaccum Pump Assembly for Wellchrom Degasser', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 150),
(30, 'Vaccum Chamber 4 Channel for Wellchrom Degasser', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 150),
(31, 'Control PCB for Wellchrom Degasser', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 150),
(32, 'Solvent organizer valve for welchrom (LPG Valve)', '', '', '', '', '', '', '', '', 0, 8, 'online-degesser-LPG-Valve', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(11) NOT NULL,
  `company_name` varchar(110) NOT NULL,
  `npwp_no` varchar(110) NOT NULL,
  `npwp_address` text NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `no_fax` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `billing_address` text NOT NULL,
  `shipping_address` text NOT NULL,
  `act_status` tinyint(4) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `discount_price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `company_name`, `npwp_no`, `npwp_address`, `contact_person`, `no_tlp`, `no_fax`, `no_hp`, `email`, `password`, `billing_address`, `shipping_address`, `act_status`, `joindate`, `discount_price`) VALUES
(1, '', '', '', '', '', '', '', 'gg@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', '', 1, '2017-01-19 07:43:12', 10),
(2, 'gg', '12312', 'dasda', 'fadil', '21312', '21312321', '123', 'fadil.hakim182@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'asda', 'ada', 1, '2017-01-27 14:50:39', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `detail_interest_subcriber_tbl`
--
ALTER TABLE `detail_interest_subcriber_tbl`
  ADD PRIMARY KEY (`merge_id`);

--
-- Indexes for table `detail_sparepart_category_tbl`
--
ALTER TABLE `detail_sparepart_category_tbl`
  ADD PRIMARY KEY (`merge_id`);

--
-- Indexes for table `discount_tbl`
--
ALTER TABLE `discount_tbl`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `lokasi_tbl`
--
ALTER TABLE `lokasi_tbl`
  ADD PRIMARY KEY (`lokasi_id`);

--
-- Indexes for table `manufacturer_tbl`
--
ALTER TABLE `manufacturer_tbl`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `product_image_tbl`
--
ALTER TABLE `product_image_tbl`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `product_stock_status`
--
ALTER TABLE `product_stock_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles_tbl`
--
ALTER TABLE `roles_tbl`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `sparepart_category`
--
ALTER TABLE `sparepart_category`
  ADD PRIMARY KEY (`sparepart_category_id`);

--
-- Indexes for table `sparepart_tbl`
--
ALTER TABLE `sparepart_tbl`
  ADD PRIMARY KEY (`sparepart_id`);

--
-- Indexes for table `subscriber_tbl`
--
ALTER TABLE `subscriber_tbl`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `tes_sparepart_tbl`
--
ALTER TABLE `tes_sparepart_tbl`
  ADD PRIMARY KEY (`sparepart_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `detail_interest_subcriber_tbl`
--
ALTER TABLE `detail_interest_subcriber_tbl`
  MODIFY `merge_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_sparepart_category_tbl`
--
ALTER TABLE `detail_sparepart_category_tbl`
  MODIFY `merge_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `discount_tbl`
--
ALTER TABLE `discount_tbl`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lokasi_tbl`
--
ALTER TABLE `lokasi_tbl`
  MODIFY `lokasi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `manufacturer_tbl`
--
ALTER TABLE `manufacturer_tbl`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_image_tbl`
--
ALTER TABLE `product_image_tbl`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_stock_status`
--
ALTER TABLE `product_stock_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `roles_tbl`
--
ALTER TABLE `roles_tbl`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sparepart_category`
--
ALTER TABLE `sparepart_category`
  MODIFY `sparepart_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sparepart_tbl`
--
ALTER TABLE `sparepart_tbl`
  MODIFY `sparepart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=260;
--
-- AUTO_INCREMENT for table `subscriber_tbl`
--
ALTER TABLE `subscriber_tbl`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tes_sparepart_tbl`
--
ALTER TABLE `tes_sparepart_tbl`
  MODIFY `sparepart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
