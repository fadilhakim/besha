-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2017 at 11:22 AM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admbesha_besha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `surename` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `username`, `password`, `surename`, `role_id`, `email`, `status`) VALUES
(1, 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, '', 1),
(15, 'fadilhakim', 'faaa537f35b5e2a4588b985da3cfaf67', 'fancymouse', 3, 'fadil.nylon@gmail.com', 1),
(18, 'fadil', 'c96041081de85714712a79319cb2be5f', 'hakim', 3, 'denin.resky@gmail.com', 1),
(24, 'aries', '52c69e3a57331081823331c4e69d3f2e', 'dimas', 1, 'alhusna901@gmail.com', 1),
(30, 'gatot', '', 'gatot', 1, 'gatot@besha-analitika.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(250) NOT NULL,
  `category_url` varchar(250) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(8, 'Colony counting & Zone sizing', 'colony-counting-zone-sizing\r\n'),
(9, 'Digestion', 'Digestion'),
(10, 'Extraction System', 'Extraction-System'),
(11, 'Microwave Digestion', 'Microwave-Digestion'),
(12, 'Gel Documentations', 'Gel-Documentations'),
(13, 'Gas Chromatography', 'Gas-Chromatography'),
(14, 'aW Meter', 'aW-Meter'),
(15, 'Environmental', 'Environmental');

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE IF NOT EXISTS `client_tbl` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(250) NOT NULL,
  `client_image` varchar(250) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
  `merge_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriber_tbl` int(11) NOT NULL,
  `manu_id` int(11) NOT NULL,
  PRIMARY KEY (`merge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_sparepart_category_tbl`
--

CREATE TABLE IF NOT EXISTS `detail_sparepart_category_tbl` (
  `merge_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `sparepart_category_id` int(11) NOT NULL,
  PRIMARY KEY (`merge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

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
  `discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_code` varchar(30) NOT NULL,
  `discount_price` int(11) NOT NULL,
  `discount_name` varchar(250) NOT NULL,
  `discount_desc` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_image` varchar(250) NOT NULL,
  `news_desc` text NOT NULL,
  `createdate` date NOT NULL,
  `event_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`news_title`, `news_id`, `news_image`, `news_desc`, `createdate`, `event_status`) VALUES
('International Conference on Indonesian Sustainable Palm Oil & Expo (IC-ISPO) 2017', 5, 'IC-ISPO.jpg', '<p>12-13 April 2017</p>\r\n\r\n<p>The Cutting Edge Of Innovation And Technology<br />\r\nTo Improve Sustainable Oil Palm Productivity</p>\r\n\r\n<p>Jakarta Convention Center (JCC)</p>\r\n', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_tbl`
--

CREATE TABLE IF NOT EXISTS `lokasi_tbl` (
  `lokasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(250) NOT NULL,
  PRIMARY KEY (`lokasi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

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
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_title` varchar(250) NOT NULL,
  `manu_desc` text NOT NULL,
  `manu_image` varchar(250) NOT NULL,
  `manu_link` varchar(250) NOT NULL,
  `manu_slug` varchar(110) NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(17, 'Wako', 'wako', 'wako.png', 'http://www.wako-chem.co.jp/english/', 'Wako'),
(18, 'Gel Company', '<p>About Gel Company</p>\r\n\r\n<p>We are a small company dedicated to the development and manufacturing of Life Science products for the research community.</p>\r\n\r\n<p>Affordable Quality</p>\r\n\r\n<p>We provide our products at affordable prices while maintaining the highest level of quality, efficiency, and expertise.</p>\r\n\r\n<p>Focus</p>\r\n\r\n<p>We focus in the areas of <a href="https://www.gelcompany.com/proteomics/product/listing">Proteomics</a>, <a href="http://www.gelcompany.com/applied-biosystems">Genomics</a>, <a href="https://www.gelcompany.com/cell-biology/product/listing">Cell Biology</a>, <a href="https://www.gelcompany.com/lab-essentials/product/listing">Lab Essentials</a>, <a href="https://www.gelcompany.com/dna-analysis/product/listing">DNA Analysis</a>, <a href="https://www.gelcompany.com/imaging/product/listing">Imaging</a>, and <a href="https://www.gelcompany.com/microarray/product/listing">Microarray</a> with several hundred products.</p>\r\n', 'Gel-Company.png', 'https://www.gelcompany.com/', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE IF NOT EXISTS `news_tbl` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(250) NOT NULL,
  `news_image` varchar(250) NOT NULL,
  `news_desc` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_thumbnail` varchar(250) NOT NULL,
  `news_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_image`, `news_desc`, `createdate`, `news_thumbnail`, `news_status`) VALUES
(8, 'AST analysis and microbial identification', 'ChromaZona.jpg', '<p>ChromaZona is an IVD certified instrument for automated antibiotic susceptibility testing and&nbsp;microbial ID, designed for speeding up testing in the clinical laboratory.</p>\r\n\r\n<p>Working&nbsp;to EUCAST and CLSI guidelines,&nbsp;the system&#39;s sensitive CCD camera, unique three channel lighting and powerful Chromogenic ID software, microbial species on chromogenic plates can be identified in seconds. Then by accurately analysing zones around antibiotic discs and MIC strips using ChromaZona&#39;s eAST software, appropriate antibiotics to treat the infection can be determined.</p>\r\n\r\n<p>ChromaZona can be easily connected to a LIMS system or, if preferred, reports can be generated and stored in Excel, eliminating data transfer errors as well as providing the user with fully traceable information and reports. The stored results can be analysed at any time and used to identify and monitor incidence of bacterial resistance, helping to improve infection control.</p>\r\n\r\n<p>ChromaZona is suitable for use in a CFR Part 11 environment.</p>\r\n', '2017-03-18 18:45:18', 'ChromaZona-for-microbial-ID-and-AST.jpg', 1),
(9, 'Xenemetrix to launch its latest X-ray analytical instrument, the P-Metrix at ACS 2017Spring Conference in San Francisco from the 2nd – 6th of April  ', 'P-Metrix.jpg', '<p>Xenemetrix will showcase its new P-Metrix Portable XRF Analyzer and also display their advanced direct excitation and indirect excitation EDXRF Analyzers</p>\r\n\r\n<p>Xenemetrix LTD will be presenting its diverse lines of X-ray fluorescence (XRF) instrumentation at the 2017 ACS Spring Meeting, Sunday, April 2 through Tuesday April 4. The event is organized by the American Chemical Society and will be held at the Moscone Convention Center in San Francisco, CA</p>\r\n\r\n<p>ACS National Meetings provide researchers with current scientific, professional and product information news through various poster sessions, exhibitions, seminars and networking events.<br />\r\nXenemetrix, an innovative cutting edge company in X-ray analytical instrumentation - will be exhibiting at the event at booth # 1706</p>\r\n\r\n<p>ACS National Meetings provide researchers with current scientific, professional and product information news. The theme for the Spring event is: &ldquo;Advanced Materials, Technologies, Systems and Processes.&rdquo;</p>\r\n\r\n<p>Analytical and industrial instrumentation from Xenemetrix range from portable field or at-line instrumentation, benchtop units ranging in performance to floor standing advanced capability laboratory instrumentation. Xenemetrix instruments are suited for researchers employing &nbsp;X-ray techniques to characterize their materials, processes and helping to refine their technology.</p>\r\n\r\n<p>Among the instruments on display at the event will be presented the Xenemetrix P- Metrix portable analyzer. The innovative P-Metrix Portable EDXRF analyzer is a compact EDXRF designed to produce lab quality results in the field or at-line. Additional Xenemetrix products will be demonstrated at the ACS event; The X-Calibur, Xenemetrix&rsquo;s powerful 50kV, 50W direct excitation system with a selection of Primary Beam Filters/ Collimators to provide enhanced performance and also presented is the Genius IF - the ultimate sensitive and compact size benchtop which provides monochromatic excitation using the Xenemetrix WAG geometry secondary targets and measures sub ppm detection limits for a wide range of elements. Improved light element performance is possible with new generation detectors. These features allow the Genius IF to push back the frontiers of performance to provide a very sensitive analytical tool at a very affordable price point.</p>\r\n', '2017-03-20 04:02:01', 'P-Metrix.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image_tbl`
--

CREATE TABLE IF NOT EXISTS `product_image_tbl` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_title` varchar(250) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `product_slug` varchar(250) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_title`, `product_descrption`, `product_specification`, `manu_id`, `product_code`, `product_availability`, `product_category`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `featured`, `product_text_preview`, `category_url`, `product_slug`) VALUES
(30, 'Protos 3', '<p>Protos 3 is a revolutionary automated colony counter and chromogenic identification system. Using its sensitive CCD camera and unique lighting coupled with powerful analysis software, Protos 3 counts colonies in seconds and automatically identifies microbial species by their colour on chromogenic plates. This provides accurate, objective and fully traceable results. The compact Protos 3 attaches via USB to a computer, where microbiologists can input their plate identification and with the one-click colony counting and chromogenic ID software can rapidly analyse a wide range of plate types. The count results can be automatically transferred to Excel where the count, plate ID and images can be saved. This GLP compliant process, with its full audit trail eliminates transcription errors to provide accurate, objective data, which can be reviewed at any time and used to produce professional reports.</p>\r\n', '<p>Protos 3 can be used with both small and large plates (up to 150mm) to read a range of format types including spiral, pour, spread and dilution series plates. The system&rsquo;s camera is so sensitive it can routinely detect colonies as small as 43 microns and the unique LED lighting system and Protos 3 software allows analysis of an infinite number of colonies on one plate in seconds, making this an ideal system for use in busy food and environmental microbiology laboratories. Feature Description Construction Ergonomic housing constructed in high density foam Integral CCD camera and lens Light shield 2 sliding doors to prevent excessive ambient light Camera 1.4m pixel scientific grade CCD camera USB integral camera with f1.2 lens Resolution For standard 90mm plates, smallest detectable colony is 43 microns Imaging 3 channel capture for colour images Lighting Unique 3 channel (red, green, blue) LED lighting (patent pending) Multi-array LED lighting (computer controlled) Lower lighting with upper reflective lighting for all applications Detection modes Colony counting and Chromogenic ID Count modes Separation of touching colonies, exclusion areas, colour mode, shape mode, size mode Software Win7 compatible Database SQL database stores all data and image locations Dimensions 450mm(h) x 500mm(d) x 400mm(w) Weight 20kg</p>\r\n', '14', 'Protos 3', 'Pre-Order', 'colony-counting-zone-sizing', 'Protos-3-colony-counting-and-chromogenic-identification.png', 'Protos-3-colony-counting-and-chromogenic-identification.png', 'Protos-3-colony-counting-and-chromogenic-identification.png', 'Protos-3-colony-counting-and-chromogenic-identification.png', 0, 'Complete automated colony counting and chromogenic identification system', 'colony-counting-zone-sizing', 'Protos-3'),
(36, 'SPECTROstar Nano', '<h1>SPECTROstar Nano</h1>\r\n\r\n<h2>Ultra-fast, full UV/Vis spectrum absorbance microplate reader with cuvette port</h2>\r\n\r\n<p>BMG LABTECH&rsquo;s innovative absorbance microplate reader has the flexibility to perform assays quickly and easily in both microplates or via the built-in cuvette port. This spectrometer-based absorbance microplate reader captures a full UV-visible spectrum in less than 1 sec/well. Its speed, simple push button operation, and capacity to store individual assay protocols make the SPECTROstar&reg;&nbsp;<em>Nano</em>&nbsp;the ideal microplate reader for absorbance measurements.</p>\r\n\r\n<p><strong>Ultra-fast determination of DNA, RNA, ELISA, and more</strong></p>\r\n', '<h1>Details</h1>\r\n\r\n<p>The SPECTROstar&nbsp;<em>Nano</em>&nbsp;is equipped with BMG LABTECH&rsquo;s ultra-fast&nbsp;<a href="http://www.bmglabtech.com/en/technology/microplate-reader-technology/obj-51-942.html" target="_blank">UV/Vis spectrometer</a>, which allows users to measure full-spectrum absorbance (220 &ndash; 1000 nm) in less than 1 second per well. It is the ideal instrument to read all absorbance assays in a microplate or cuvette &ndash; with many common assay protocols predefined and available at the click of a mouse.</p>\r\n\r\n<h2>Features</h2>\r\n\r\n<ul>\r\n	<li>Full-spectrum UV/Vis absorbance measurements in less than 1 second</li>\r\n	<li>Measurement in up to 1536-well microplate format</li>\r\n	<li>Integrated cuvette port for individual samples</li>\r\n	<li>Linear, orbital and double-orbital shaking as well as uniform incubation up to 45 &deg;C</li>\r\n	<li>Includes multi-user&nbsp;<a href="http://www.bmglabtech.com/en/products/software/reader-control/" target="_blank">control</a>&nbsp;and&nbsp;<a href="http://www.bmglabtech.com/en/products/software/mars-data-analysis/" target="_blank">MARS</a>&nbsp;data analysis software</li>\r\n	<li>Compatible with&nbsp;<a href="http://www.bmglabtech.com/en/products/accessories/lvis-plate/" target="_blank">LVis Plate</a>&nbsp;for low volume samples (down to 2&micro;l)</li>\r\n</ul>\r\n', '3', '#', 'Pre-Order', 'microplate-reader', 'nano-2.png', 'spectostar_nano1.jpg', 'nano.png', 'Lvis.jpg', 0, 'BMG LABTECH’s innovative absorbance microplate reader has the flexibility to perform assays quickly and easily in both microplates or via the built-in cuvette port.', 'microplate-reader', 'SPECTROstar-Nano'),
(37, 'SPECTROstar Omega', '<h1>SPECTROstar Omega</h1>\r\n\r\n<p>The SPECTROstar&reg;&nbsp;Omega is a dedicated absorbance microplate reader that can capture a full absorbance spectrum (220 - 1000 nm) in less than 1 second per well &ndash; no scanning needed. This upgradeable reader offers the highest flexibility for optimizing settings for all absorbance-based assays. The LVis Plate compatibility allows for low volume sample measurements.</p>\r\n\r\n<p><strong>The ultra-fast, dedicated absorbance microplate reader.</strong></p>\r\n', '<h1>Details</h1>\r\n\r\n<p>The SPECTROstar Omega is a dedicated absorbance microplate reader that can capture either a full-absorbance spectrum or up to eight discrete wavelengths simultaneously. Upgrades can transform SPECTROstar Omega into a powerful multi-mode reader with up to six detection modes,&nbsp;<a href="http://www.bmglabtech.com/en/technology/microplate-reader-technology/obj-51-738.html" target="_blank">Simultaneous Dual Emission</a>&nbsp;and injectors</p>\r\n\r\n<h2>Features</h2>\r\n\r\n<ul>\r\n	<li><a href="http://www.bmglabtech.com/en/technology/microplate-reader-technology/obj-51-942.html" target="_blank">Full-spectrum UV/Vis absorbance</a>&nbsp;measurements in less than 1 second</li>\r\n	<li>Measurement in up to 1536-well microplate format</li>\r\n	<li>Plate shaking and uniform incubation up to 45 &deg;C or 65 &deg;C</li>\r\n	<li><a href="http://www.bmglabtech.com/en/technology/microplate-reader-technology/obj-51-943.html" target="_blank">Well-scanning</a>&nbsp;and real-time kinetic monitoring</li>\r\n	<li>High-precision&nbsp;<a href="http://www.bmglabtech.com/en/technology/microplate-reader-technology/obj-51-939.html" target="_blank">injectors</a>&nbsp;with simultaneous reagent injection and detection</li>\r\n	<li>Includes multi-user&nbsp;<a href="http://www.bmglabtech.com/en/products/software/reader-control/" target="_blank">control</a>&nbsp;and&nbsp;<a href="http://www.bmglabtech.com/en/products/software/mars-data-analysis/" target="_blank">MARS</a>&nbsp;data analysis software</li>\r\n	<li>Compatible with&nbsp;<a href="http://www.bmglabtech.com/en/products/accessories/lvis-plate/" target="_blank">LVis Plate</a>&nbsp;for low volume samples (down to 2&micro;l)</li>\r\n	<li><a href="http://www.bmglabtech.com/en/products/accessories/stacker/" target="_blank">Stacker</a>&nbsp;compatible</li>\r\n</ul>\r\n', '3', '#', 'Pre-Order', 'microplate-reader', 'spectrostar-omega-lila.png', 'SPECTROstar-Omega.jpg', 'Spectrostar_omega_1.jpg', 'spectroomega-150211-0.jpg', 0, 'SPECTROstar Omega\r\nUltra-fast UV/Vis spectrum absorbance spectrometer - upgradeable to a multi-mode microtiter plate reader', 'microplate-reader', 'SPECTROstar-Omega'),
(39, 'Complete Micro Semi Automatic Kjeldahl Protein Analysis Instruments 16 x 100 mL', '<p>The process determines nitrogen and proteins in organic materials.&nbsp;In the Kjeldahl method, the boiling point of sulfuric acid of 337 degrees Celsius is increased by means of catalysts.&nbsp;Approx.&nbsp;380 &deg; C is the optimum decomposition temperature for organic materials in sulfuric acid.&nbsp;The protein content is determined by multiplying the analytically determined nitrogen content by a factor of 6.25, in the case of wheat and semolina flour by a factor of 5.7.&nbsp;The nitrogen content is determined by the Kjeldahl method in 4 stages.</p>\r\n', '<h2 style="font-style:normal">Blocking systems with high-quality corrosion-resistant block housing made of stainless steel.</h2>\r\n\r\n<p>With 16, 24 or 40 sample sites for micro kjeldahl digestion vessels with a volume of 100 ml.</p>\r\n\r\n<p>Complete systems with decomposition vessels, frame and exhaust hood.</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>High performance heating and exhaust hood with exhaust collector</li>\r\n	<li>One-button operation for easy and fast programming</li>\r\n	<li>Menu guidance in national language</li>\r\n	<li>10 freely configurable programs for block temperature and digestion time</li>\r\n	<li>Applications can be stored</li>\r\n	<li>Windows software allows the user to transfer application-specific time / temperature profiles via the USB interface bidirectionally between one or more devices and a PC</li>\r\n	<li>The digestion progress is observed through the detachable sight door on the&nbsp;<br />\r\n	rack</li>\r\n</ul>\r\n\r\n<h2 style="font-style:normal">Behrosog neutralizer</h2>\r\n\r\n<p>The two-stage behrosog process extraction system (neutraliser) - pre-separator plus safety stage - completely keeps all acid fumes away from the environment.&nbsp;Compact process suction system for the suction and neutralization of aggressive acid vapors, mainly from the Kjeldahl digestion for nitrogen determination.&nbsp;An upstream two-stage pre-separator ishes out the toxins.&nbsp;The process suction system is equipped with a vacuum pump 40 l / min.&nbsp;A connection to the water supply is not necessary.</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>Efficient operating costs</li>\r\n	<li>Continuously adjustable suction flow</li>\r\n	<li>Both cleaning stages (condensation and neutralization stage) prevent the emission of toxins to the environment</li>\r\n</ul>\r\n\r\n<p>Optionally, the additional cooling system ACS for behrosog 3, consisting of stand, bottle and cooler, can be connected to the system.&nbsp;</p>\r\n\r\n<h2 style="font-style:normal">Water steam distiller with automatic addition</h2>\r\n\r\n<p>Behr water steam distributors are not only powerful and reliable&nbsp;<br />\r\npartners in the laboratory day.&nbsp;A major concern in the development and design&nbsp;<br />\r\nof the devices was also the safety of the user.</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>Exemplary security and reliability</li>\r\n	<li>Robust and insensitive housing made of polyurethane</li>\r\n	<li>Distillation time approx. 3 min per sample</li>\r\n	<li>Detection limit 0.2 mg N</li>\r\n	<li>Recovery rate&gt; 99.5%</li>\r\n	<li>Reproducibility &plusmn; 1%</li>\r\n	<li>Steam output adjustable (40% - 100%)</li>\r\n	<li>Particularly simple, menu-driven operation via a single control element (behr one-button operation)</li>\r\n	<li>Programmable response time</li>\r\n	<li>Programmable distillation time</li>\r\n	<li>USB interface</li>\r\n	<li>Level monitoring for the canister set</li>\r\n	<li>Practical quick-release device, which the user can also use &quot;with the left&quot;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Behr steam distillation units of the S series are the ideal addition to the behr Kjeldahl digestion systems.&nbsp;Depending on requirements, the user can choose between five automatic steam distillation units.&nbsp;These are identical in the basic configuration, but differ in operating convenience and degree of automation.&nbsp;The top model behr S5 is prepared to work with an external titrator.</p>\r\n\r\n<p>The included Windows software allows the user to transfer application-specific distillation parameters bidirectionally between one or more devices and a PC via the USB interface.&nbsp;A library with common applications is already included on the CD.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2 style="font-style:normal">Manual titration station</h2>\r\n\r\n<p>The hand-held station STI consists of:</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>A burette with digital display and</li>\r\n	<li>A magnetic stirrer with a matching holder for an Erlenmeyer piston</li>\r\n</ul>\r\n\r\n<p>A screen serves as a neutral background and allows the user to precisely visualize the color change at the end of the titration.&nbsp;Thus, it always performs its titrations under similar optical conditions.&nbsp;This improves the accuracy and reproducibility of the results.</p>\r\n\r\n<p>This is also due to the exact positioning of the vessel in the holder on the top of the magnetic stirrer.&nbsp;The angled wings of the screen additionally protect from the side glare.</p>\r\n', '1', '#', 'Pre-Order', 'Digestion', 'kjeldahl_basic_behr-2abac63f.png', 'k12_behr-d3529c5c.png', 'behrosog3_behr-5e7149c5.png', 's5_behr-3aa78f4a.png', 0, 'Determination of nitrogen according to Kjeldahl\r\nThe Kjeldahl method for nitrogen determination was developed in 1883 by the Danish chemist Johann Kjeldahl.\r\n\r\n', 'Digestion', 'Complete-Micro-Semi-Automatic-Kjeldahl-Protein-Analysis-Instruments-16-x-100-mL'),
(40, 'Complete Macro Semi Automatic Kjeldahl Protein Analysis Instruments 8 x 250 mL', '<p>The process determines nitrogen and proteins in organic materials.&nbsp;In the Kjeldahl method, the boiling point of sulfuric acid of 337 degrees Celsius is increased by means of catalysts.&nbsp;Approx.&nbsp;380 &deg; C is the optimum decomposition temperature for organic materials in sulfuric acid.&nbsp;The protein content is determined by multiplying the analytically determined nitrogen content by a factor of 6.25, in the case of wheat and semolina flour by a factor of 5.7.&nbsp;The nitrogen content is determined by the Kjeldahl method in 4 stages.</p>\r\n', '<h2 style="font-style:normal">Blocking systems with high-quality corrosion-resistant block housing made of stainless steel.</h2>\r\n\r\n<p>Complete systems with decomposition vessels, frame and exhaust hood.</p>\r\n\r\n<p>With 8, 12 or 20 sampling points for standard Kjeldahl digestion vessels with a volume of 250 ml.</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>High performance heating and exhaust hood with exhaust collector.</li>\r\n	<li>The digestion progress is observed through the detachable sight door on the rack.</li>\r\n	<li>One-button operation for easy and fast programming.</li>\r\n	<li>Menu guidance in national language.</li>\r\n	<li>10 freely configurable programs for block temperature and digestion time.</li>\r\n	<li>Applications can be stored.</li>\r\n	<li>USB interface.</li>\r\n</ul>\r\n\r\n<p>The included Windows software allows the user to transfer application-specific time / temperature profiles via the interface bidirectionally between one or more devices and a PC.&nbsp;A library with common applications is already included on the CD.&nbsp;Via the RS232 interface, temperature data can also be transferred from the device to the PC during operation.&nbsp;The user can save them and print them as graphics.</p>\r\n\r\n<p>Sturdy and robust construction.&nbsp;Both the block housing as well as the frame for the digestion vessels&nbsp;<br />\r\nand the extraction hood are made of acid-resistant, stainless steel.&nbsp;Complete systems with decomposition vessels, frame and exhaust hood.</p>\r\n\r\n<h2>Behrosog neutralizer</h2>\r\n\r\n<p>The two-stage behrosog process extraction system (neutraliser) - pre-separator plus safety stage - completely keeps all acid fumes away from the environment.&nbsp;Compact process suction system for the suction and neutralization of aggressive acid vapors, mainly from the Kjeldahl digestion for nitrogen determination.&nbsp;An upstream two-stage pre-separator ishes out the toxins.&nbsp;The process suction system is equipped with a vacuum pump 40 l / min.&nbsp;A connection to the water supply is not necessary.</p>\r\n\r\n<ul>\r\n	<li>Efficient operating costs</li>\r\n	<li>Continuously adjustable suction flow</li>\r\n	<li>Both cleaning stages (condensation and neutralization stage) prevent the emission of toxins to the environment</li>\r\n</ul>\r\n\r\n<p>Optionally, the additional cooling system ACS for behrosog 3, consisting of stand, bottle and cooler, can be connected to the system.&nbsp;</p>\r\n\r\n<h2>Water steam distiller with automatic addition</h2>\r\n\r\n<p>Behr water steam distributors are not only powerful and reliable&nbsp;<br />\r\npartners in the laboratory day.&nbsp;A major concern in the development and design&nbsp;<br />\r\nof the devices was also the safety of the user.</p>\r\n\r\n<ul>\r\n	<li>Exemplary security and reliability</li>\r\n	<li>Robust and insensitive housing made of polyurethane</li>\r\n	<li>Distillation time approx. 3 min per sample</li>\r\n	<li>Detection limit 0.2 mg N</li>\r\n	<li>Recovery rate&gt; 99.5%</li>\r\n	<li>Reproducibility &plusmn; 1%</li>\r\n	<li>Steam output adjustable (40% - 100%)</li>\r\n	<li>Particularly simple, menu-driven operation via a single control element (behr one-button operation)</li>\r\n	<li>Programmable response time</li>\r\n	<li>Programmable distillation time</li>\r\n	<li>USB interface</li>\r\n	<li>Level monitoring for the canister set</li>\r\n	<li>Practical quick-release device, which the user can also use &quot;with the left&quot;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Behr steam distillation units of the S series are the ideal addition to the behr Kjeldahl digestion systems.&nbsp;Depending on requirements, the user can choose between five automatic steam distillation units.&nbsp;These are identical in the basic configuration, but differ in operating convenience and degree of automation.&nbsp;The top model behr S5 is prepared to work with an external titrator.</p>\r\n\r\n<p>The included Windows software allows the user to transfer application-specific distillation parameters bidirectionally between one or more devices and a PC via the USB interface.&nbsp;A library with common applications is already included on the CD.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Manual titration station</h2>\r\n\r\n<p>The hand-held station STI consists of:</p>\r\n\r\n<ul>\r\n	<li>A burette with digital display and</li>\r\n	<li>A magnetic stirrer with a matching holder for an Erlenmeyer piston</li>\r\n</ul>\r\n\r\n<p>A screen serves as a neutral background and allows the user to precisely visualize the color change at the end of the titration.&nbsp;Thus, it always performs its titrations under similar optical conditions.&nbsp;This improves the accuracy and reproducibility of the results.</p>\r\n\r\n<p>This is also due to the exact positioning of the vessel in the holder on the top of the magnetic stirrer.&nbsp;The angled wings of the screen additionally protect from the side glare.</p>\r\n', '1', '#', 'Pre-Order', 'Digestion', 'kjeldahl_basic_behr-2abac63f.png', 'K8.jpg', 'behrosog3_behr-5e7149c5.png', 's5_behr-3aa78f4a.png', 1, 'Determination of nitrogen according to Kjeldahl\r\nThe Kjeldahl method for nitrogen determination was developed in 1883 by the Danish chemist Johann Kjeldahl.\r\n', 'Digestion', 'Complete-Macro-Semi-Automatic-Kjeldahl-Protein-Analysis-Instruments-8-x-250-mL'),
(41, 'Faxt Extractions Apparatus 6 x 30 mL with Thimbles', '<p>Complete compact extraction system with base, heating device, holder, hoses and glass apparatus (reaction flask, extractor, Dimroth cooler for extraction).&nbsp;Stepless heating control.&nbsp;The compact system directs the solvent directly into the storage bottle after the extraction cycle via an outlet tap on the extractor.</p>\r\n\r\n<p>Including sample pack extraction tubes and boiling stones.</p>\r\n', '<p>The apparatus for the Soxhlet extraction meets the most varied laboratory requirements.&nbsp;</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>Practical brackets for the cooler and extractor for safe storage between extractions</li>\r\n	<li>Extractor sizes of 30 ml</li>\r\n	<li>Cooler with screw connections</li>\r\n</ul>\r\n\r\n<p>With the behr hydrolysis units the acid digestion is also possible before the extraction (determination of the total fat content according to Weibull and Stoldt).</p>\r\n', '1', 'RS306S', 'Pre-Order', 'Extraction-System', 'r306_behr.png', 'wd30_behr-805f67d2.jpg', 'sist100-5c78ba36-94b206e2.jpg', 'rip6_behr-b1d9e60b.png', 0, 'For classical fat extraction', 'Extraction-System', 'Faxt-Extractions-Apparatus-6-x-30-mL-with-Thimbles'),
(42, 'Faxt Extractions Apparatus 6 x 100 mL with Thimbles', '<p>Behrotest&reg; series extraction units are the economical and user-friendly solution for the classic&nbsp;</p>\r\n', '<p>Soxhlet or fat extraction:&nbsp;</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>Complete with reaction vessels, extraction adapters and coolers</li>\r\n	<li>Energy for each sample site</li>\r\n	<li>Cooling water distribution strip ensures uniform cooling at all sample points</li>\r\n	<li>Extractors with a specially developed lifting tube (type &quot;Br&ouml;ckerhoff&quot;) guarantee uniform results at all sample locations</li>\r\n	<li>Practical cooler shut-off strip for the safe storage of the coolers between the extractions</li>\r\n	<li>Holders for the safe collection of the extraction intermediate pieces after removal of the sample containers</li>\r\n	<li>S-models: extractors with tap eliminates the additional distillation after extraction</li>\r\n</ul>\r\n\r\n<p>With the behr hydrolysis units (6 sampling stations) the acid digestion is also possible before the extraction (determination of the total fat content according to Weibull and Stoldt).</p>\r\n', '1', 'R106S', 'Pre-Order', 'Extraction-System', 'R106S_BETRIEB-2.jpg', 'sk250-d94a6217.png', 'sist100-5c78ba36-94b206e2.jpg', 'rip6_behr-b1d9e60b.png', 0, 'For classical fat extraction\r\n\r\nBehrotest® series extraction units are the economical and user-friendly solution for the classic ', 'Extraction-System', 'Faxt-Extractions-Apparatus-6-x-100-mL-with-Thimbles'),
(43, 'Faxt Extractions Apparatus 6 x 250 mL with Thimbles', '<p>Behrotest&reg; series extraction units are the economical and user-friendly solution for the classic&nbsp;</p>\r\n', '<p>Soxhlet or fat extraction:&nbsp;</p>\r\n\r\n<ul style="list-style-type:none">\r\n	<li>Complete with reaction vessels, extraction adapters and coolers</li>\r\n	<li>Energy for each sample site</li>\r\n	<li>Cooling water distribution strip ensures uniform cooling at all sample points</li>\r\n	<li>Extractors with a specially developed lifting tube (type &quot;Br&ouml;ckerhoff&quot;) guarantee uniform results at all sample locations</li>\r\n	<li>Practical cooler shut-off strip for the safe storage of the coolers between the extractions</li>\r\n	<li>Holders for the safe collection of the extraction intermediate pieces after removal of the sample containers</li>\r\n	<li>S-models: extractors with tap eliminates the additional distillation after extraction</li>\r\n</ul>\r\n\r\n<p>With the behr hydrolysis units (6 sampling stations) the acid digestion is also possible before the extraction (determination of the total fat content according to Weibull and Stoldt).</p>\r\n', '1', 'R256S', 'Pre-Order', 'Extraction-System', 'R256S.jpg', 'rip6_behr-b1d9e60b.png', 'sist100-5c78ba36-94b206e2.jpg', 'wd30_behr-805f67d2.jpg', 0, 'For classical fat extraction', 'Extraction-System', 'Faxt-Extractions-Apparatus-6-x-250-mL-with-Thimbles'),
(44, 'Omega Fluor™ Plus Gel Documentation System, 302 nm', '<p>Features &amp; Benefits</p>\r\n\r\n<h3>Hands-free SmartCapture Technology&trade;</h3>\r\n\r\n<ul>\r\n	<li>No camera or focus adjustment required</li>\r\n</ul>\r\n\r\n<h3>Application flexibility</h3>\r\n\r\n<ul>\r\n	<li>Multiple excitation sources for nucleotide and protein stains</li>\r\n	<li>Absorbance for Ponceau-stained membranes or petri dishes</li>\r\n</ul>\r\n\r\n<h3>Publication-quality images</h3>\r\n\r\n<ul>\r\n	<li>4,096 grayscales with 5 million pixels for excellent resolution</li>\r\n	<li>Universal TIFF and JPEG file formats</li>\r\n</ul>\r\n\r\n<h3>Small footprint, large format</h3>\r\n\r\n<ul>\r\n	<li>Compact footprint fits right on your bench top</li>\r\n	<li>Accommodates large format protein and nucleotide gels (i.e. PROTEAN II, Subcell 96)</li>\r\n	<li>Imaging Area: up to 24.0 x 20.0 cm</li>\r\n</ul>\r\n', '<p><strong>Applications -&nbsp;</strong>UV Imaging, White Light Imaging and Blue Light Imaging</p>\r\n\r\n<p><strong>Dye Compatibility -&nbsp;</strong>SYBR&reg; Safe, SYBR family, Ethidium Bromide, Coomassie Blue, Silver Stain, AdvanStain Scarlet, SYPRO&reg; Ruby, Oriole&trade; and more</p>\r\n\r\n<p><strong>Hardware -&nbsp;</strong>5MP scientific grade CCD camera with a fixed lens, integrated tablet with pre-installed Image Capture Software</p>\r\n\r\n<p><strong>Software -&nbsp;</strong>Intuitive Omega Fluor Plus Capture Software, Optional Image Analysis Software</p>\r\n\r\n<p><strong>Excitation -&nbsp;</strong>Trans-UV (302 nm wavelength), Trans-white conversion screen (optional), Epi-white LEDs, Epi-blue LEDs</p>\r\n\r\n<p><strong>Emission -&nbsp;</strong>Orange (included), Blue, Green, Red (optional)</p>\r\n\r\n<p><strong>Dimensions (W x D x H) -&nbsp;</strong>13.6 x 12.2 x 27.0 in (35.6 x 31.8 x 63.5 cm)</p>\r\n\r\n<p><strong>Weight -&nbsp;</strong>49.0 lbs (22.2 kg)</p>\r\n', '18', 'Apelgen 81-12521-00', 'Pre-Order', 'Gel-Documentations', '20141127113716144.png', 'omega-fluor-plus_sm.jpg', '20141127113716144.png', '', 1, 'Power and performance in an advanced yet compact system.\r\nBoosted by a high resolution camera and hands free SmartCapture Technology™, the Omega Fluor Plus has everything you need for exceptional DNA and protein imaging...', 'Gel-Documentations', 'Omega-Fluor-Plus-Gel-Documentation-System-302-nm'),
(45, 'Omega Fluor™ Gel Documentation System, 302 nm	', '<p>Features &amp; Benefits</p>\r\n\r\n<h3>Hands-free SmartCapture Technology&trade;</h3>\r\n\r\n<ul>\r\n	<li>No camera or focus adjustment required</li>\r\n</ul>\r\n\r\n<h3>Application flexibility</h3>\r\n\r\n<ul>\r\n	<li>Multiple excitation sources for nucleotide and protein stains</li>\r\n	<li>Absorbance for Ponceau-stained membranes or petri dishes</li>\r\n</ul>\r\n\r\n<h3>Publication-quality images</h3>\r\n\r\n<ul>\r\n	<li>4,096 grayscales with 5 million pixels for excellent resolution</li>\r\n	<li>Universal TIFF and JPEG file formats</li>\r\n</ul>\r\n\r\n<h3>Small footprint, large format</h3>\r\n\r\n<ul>\r\n	<li>Compact footprint fits right on your bench top</li>\r\n	<li>Accommodates large format protein and nucleotide gels (i.e. PROTEAN II, Subcell 96)</li>\r\n	<li>Imaging Area: up to 24.0 x 20.0 cm</li>\r\n</ul>\r\n', '<p><strong>Applications -&nbsp;</strong>UV Imaging, White Light Imaging and Blue Light Imaging</p>\r\n\r\n<p><strong>Dye Compatibility -&nbsp;</strong>SYBR&reg; Safe, SYBR family, Ethidium Bromide, Coomassie Blue, Silver Stain, AdvanStain Scarlet, SYPRO&reg; Ruby, Oriole&trade; and more</p>\r\n\r\n<p><strong>Hardware -&nbsp;</strong>5MP scientific grade CCD camera with a fixed lens, integrated tablet with pre-installed Image Capture Software</p>\r\n\r\n<p><strong>Software -&nbsp;</strong>Intuitive Omega Fluor Image Capture Software, Windows compatible</p>\r\n\r\n<p><strong>Excitation -&nbsp;</strong>Trans-UV (302 wavelength), Trans-white conversion screen (optional), Trans-blue (optional), Epi-white LEDs</p>\r\n\r\n<p><strong>Emission -&nbsp;</strong>Orange (included), Blue, Green, Red (optional)</p>\r\n\r\n<p><strong>Dimensions (W x D x H) -&nbsp;</strong>13.6 x 12.2 x 27.0 in (35.6 x 31.8 x 63.5 cm)</p>\r\n\r\n<p><strong>Weight -&nbsp;</strong>49.0 lbs (22.2 kg)</p>\r\n', '18', 'Apelgen 81-12520-00', 'Pre-Order', 'Gel-Documentations', 'omega-fluor-sml.jpg', '', '', '', 0, 'Entry-level gel imaging system with exceptional performance and safety features.\r\nThe Omega Fluor is an entry level gel imaging system that comes standard with the basic components and exceptional safety features for DNA and..', 'Gel-Documentations', 'Omega-Fluor-Gel-Documentation-System-302-nm'),
(46, 'Microwave Digestions 10 x 60 mL', '<p>With the new microwave digestion device, speedwave Entry is focusing on what&#39;s important:</p>\r\n\r\n<ul>\r\n	<li>Easy handling</li>\r\n	<li>High level of safety during digestion</li>\r\n	<li>Low operating costs</li>\r\n</ul>\r\n\r\n<p>-1 sets turntable for 10 pcs Digestions Vessels 60 mL<br />\r\n-1 sets Consumables for approx 500 samples<br />\r\n-1 pcs Forming Systems for Single 60 mL Vessels<br />\r\n-1 pcs Enlargment Insert for 60 mL Vessels<br />\r\n-1 pack Weighing Sets (10 pcs) 2.5 mL capacity<br />\r\n-2 pcs Transport rack for 6 vessels each<br />\r\n&nbsp;</p>\r\n', '<p>In modern analytics, tasks must be carried out quickly, easily and flawlessly. Especially in trace analysis, systematic errors can be reduced to a minimum with the help of modern microwave digestion devices.</p>\r\n\r\n<p><strong>First class digestion results with speedwave Entry</strong></p>\r\n\r\n<ul>\r\n	<li>Avoid sample contamination through corrosion-resistant oven coating and gas collection system</li>\r\n	<li>High digestion quality and extremely low blank values thanks to vessels made of isostatically molded TFMTM-PTFE</li>\r\n	<li>Easy handling thanks to innovative vessel design and and QuickStart control</li>\r\n	<li>Constant sample temperature and digestion process results through the power control system in dependence on sample temperature</li>\r\n	<li>20% faster cooling and therefore higher sample throughput through additional exhaust unit</li>\r\n	<li>Complete reaction control due to optical temperature measurement</li>\r\n</ul>\r\n\r\n<p><img alt="" src="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Aufschlussgefaesse_speedwave-entry_en.jpg" style="height:116px; width:480px" /></p>\r\n\r\n<ul>\r\n	<li>Massive and long-lasting pressure vessels made of TFMTM-PTFE and quartz glass</li>\r\n	<li>Opening and closing without tools</li>\r\n	<li>Lower costs for consumable materials</li>\r\n	<li>Controlled release of residual pressure when opening the containers</li>\r\n	<li>Digestion vessels can be used with mineral acids HCl, HNO3, HF, H2SO4&nbsp;and H3PO4</li>\r\n</ul>\r\n\r\n<h3>Speedwave DIRC - No reference vessels</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-DIRC_en.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-DIRC_en_eece073707.jpg" style="height:172px; width:146px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p>The sample temperature in each individual vessel is detected directly and in real time.</p>\r\n\r\n<p>This is possible because the vessels materials, such as TFMTM-PTFE and quartz, cannot absorb the radiation in the mid-infrared range. In addition, the infrared radiation emitted from the surface of the pressure vessels is filtered out. This allows the sample temperature to be controlled directly in each vessel.</p>\r\n\r\n<h3>Advantages</h3>\r\n\r\n<ul>\r\n	<li>Not influenced by microwave radiation.</li>\r\n	<li>All sensors and their cicuit lie outside of the microwave field.</li>\r\n	<li>Perfect chemical resistance of sensors in the oven chamber.</li>\r\n	<li>No sensors in the sample vessel. As a result, there is no risk of contamination for the samples and no risk of damage or wear and tear through frequent assembly and disassembly.</li>\r\n</ul>\r\n\r\n<h3>Loading and starting</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-Entry_QuickStart.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-Entry_QuickStart_c28de6669e.jpg" style="height:134px; width:230px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p>Thanks to the QuickStart microwave control, the temperature programme only takes two steps to start. Users move intuitively through the easily understandable menu navigation. For increased convenience, the touch screen is coloured and contains various language options. From a pool of pre-installed applications including the latest DIN and EPA standards, the desired method can be selected quickly. In addition, further customisable methods can be loaded. All digestion data is available after digestion.</p>\r\n\r\n<h3>Fast reaction control</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-Entry_Mikrowellenleistung_en.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-Entry_Mikrowellenleistung_en_cafaa92e7a.jpg" style="height:290px; width:480px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p>The advantage of microwave digestion systems is the rapid heating of the sample material. Depending on the chemical composition of the sample material, spontaneous reactions may occur. In order to prevent this effectively, quick reaction control is necessary.</p>\r\n\r\n<p>Based on the optical measurement of the temperature (DIRC), microwave performance can be controlled instantaneously. This makes safe reaction control possible.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2', 'Speedwave Entry', 'Pre-Order', 'Microwave-Digestion', 'csm_Berghof_Mikrowelle_Speedwave_Entry_980_01_9319fd1fce.jpg', 'csm_Berghof_Schaubild-Speedwave-Entry_englisch_0be74413b3.jpg', 'csm_Berghof-Speedwave-DIRC_en_eece073707.jpg', 'csm_Berghof-Speedwave-Entry_QuickStart_c28de6669e.jpg', 0, 'Speedwave Entry — The efficient one', 'Microwave-Digestion', 'Microwave-Digestions-10-x-60-mL'),
(47, 'Microwave Digestions 24 x 10 mL', '<p>With the new microwave digestion device, speedwave Entry is focusing on what&#39;s important:</p>\r\n\r\n<ul>\r\n	<li>Easy handling</li>\r\n	<li>High level of safety during digestion</li>\r\n	<li>Low operating costs</li>\r\n</ul>\r\n\r\n<p>-1 sets turntable for 24 pcs Digestions Vessels 10 mL<br />\r\n-1 pcs forming tools for 10 mL Quartz Vessels<br />\r\n-2 pak Rupture Disc for 10 mL Quartz Vessels, pk/5 pcs<br />\r\n-1 pak spare Lid for 10 mL Quart Vessels, pk/4 pcs<br />\r\n-1 pcs Fixation plate<br />\r\n&nbsp;</p>\r\n', '<p>In modern analytics, tasks must be carried out quickly, easily and flawlessly. Especially in trace analysis, systematic errors can be reduced to a minimum with the help of modern microwave digestion devices.</p>\r\n\r\n<p><strong>First class digestion results with speedwave Entry</strong></p>\r\n\r\n<ul>\r\n	<li>Avoid sample contamination through corrosion-resistant oven coating and gas collection system</li>\r\n	<li>High digestion quality and extremely low blank values thanks to vessels made of isostatically molded TFMTM-PTFE</li>\r\n	<li>Easy handling thanks to innovative vessel design and and QuickStart control</li>\r\n	<li>Constant sample temperature and digestion process results through the power control system in dependence on sample temperature</li>\r\n	<li>20% faster cooling and therefore higher sample throughput through additional exhaust unit</li>\r\n	<li>Complete reaction control due to optical temperature measurement</li>\r\n</ul>\r\n\r\n<p><img alt="" src="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Aufschlussgefaesse_speedwave-entry_en.jpg" /></p>\r\n\r\n<ul>\r\n	<li>Massive and long-lasting pressure vessels made of TFMTM-PTFE and quartz glass</li>\r\n	<li>Opening and closing without tools</li>\r\n	<li>Lower costs for consumable materials</li>\r\n	<li>Controlled release of residual pressure when opening the containers</li>\r\n	<li>Digestion vessels can be used with mineral acids HCl, HNO3, HF, H2SO4&nbsp;and H3PO4</li>\r\n</ul>\r\n\r\n<h3>Speedwave DIRC - No reference vessels</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-DIRC_en.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-DIRC_en_eece073707.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>The sample temperature in each individual vessel is detected directly and in real time.</p>\r\n\r\n<p>This is possible because the vessels materials, such as TFMTM-PTFE and quartz, cannot absorb the radiation in the mid-infrared range. In addition, the infrared radiation emitted from the surface of the pressure vessels is filtered out. This allows the sample temperature to be controlled directly in each vessel.</p>\r\n\r\n<h3>Advantages</h3>\r\n\r\n<ul>\r\n	<li>Not influenced by microwave radiation.</li>\r\n	<li>All sensors and their cicuit lie outside of the microwave field.</li>\r\n	<li>Perfect chemical resistance of sensors in the oven chamber.</li>\r\n	<li>No sensors in the sample vessel. As a result, there is no risk of contamination for the samples and no risk of damage or wear and tear through frequent assembly and disassembly.</li>\r\n</ul>\r\n\r\n<h3>Loading and starting</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-Entry_QuickStart.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-Entry_QuickStart_c28de6669e.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>Thanks to the QuickStart microwave control, the temperature programme only takes two steps to start. Users move intuitively through the easily understandable menu navigation. For increased convenience, the touch screen is coloured and contains various language options. From a pool of pre-installed applications including the latest DIN and EPA standards, the desired method can be selected quickly. In addition, further customisable methods can be loaded. All digestion data is available after digestion.</p>\r\n\r\n<h3>Fast reaction control</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-Entry_Mikrowellenleistung_en.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-Entry_Mikrowellenleistung_en_cafaa92e7a.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>The advantage of microwave digestion systems is the rapid heating of the sample material. Depending on the chemical composition of the sample material, spontaneous reactions may occur. In order to prevent this effectively, quick reaction control is necessary.</p>\r\n\r\n<p>Based on the optical measurement of the temperature (DIRC), microwave performance can be controlled instantaneously. This makes safe reaction control possible.</p>\r\n', '2', 'Speedwave Entry', 'Pre-Order', 'Microwave-Digestion', 'csm_Berghof_Mikrowelle_Speedwave_Entry_980_01_9319fd1fce.jpg', 'csm_Berghof_Schaubild-Speedwave-Entry_englisch_0be74413b3.jpg', 'csm_Berghof-Speedwave-DIRC_en_eece073707.jpg', 'csm_Berghof-Speedwave-Entry_QuickStart_c28de6669e.jpg', 0, 'Speedwave Entry — The efficient one', 'Microwave-Digestion', 'Microwave-Digestions-24-x-10-mL'),
(48, 'Microwave Digestions with Presssure and Temperature Control 12 x 60 mL', '<p>The all-rounder for demanding digestions at elevated temperatures and pressures.</p>\r\n\r\n<ul>\r\n	<li>Powerful</li>\r\n	<li>Sophisticated</li>\r\n	<li>Intuitive</li>\r\n</ul>\r\n\r\n<p>-1 sets turntable for 12 pcs Digestions Vessels 60 mL<br />\r\n-1 sets Consumables for approx 500 samples<br />\r\n-1 pcs Forming Systems for 60 mL Vessels<br />\r\n-1 pcs Enlargment Insert for 60 mL Vessels<br />\r\n-1 pack Weighing Sets (12 pcs) 2.5 mL capacity<br />\r\n-2 pcs Transport rack for 6 vessels each<br />\r\n&nbsp;</p>\r\n', '<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px_0a68008733.jpg" style="height:304px; width:480px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p>In addition to the &quot;simple routine samples&quot;, many users also need to process the most challenging sample materials. For this target group, devices are required that are both powerful and meet the highest safety requirements. In this context, the all-rounder Speedwave Xpert shines thanks to its new SafePrep concept.</p>\r\n\r\n<p>The use of 2 magnetrons with a total of 2000 W power significantly increases performance, enabling digestion of the most difficult sample materials. At the same time, the microwave is equipped with dynamically regulated fans which provide a marked noise reduction during digestion in comparison with similar models.</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16027">SafePrep</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SafePrep stands for guaranteed safety by combining high-quality materials with a sophisticated microwave design, innovative sensor technology and easy operation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Berghof SwingTop</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave_Xpert_Swing-Top_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg" style="height:154px; width:230px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p>The top-loader microwave offers maximum comfort in operation. The digestion vessels are individually inserted into the rotor and removed again - the transport of a fully loaded rotor is therefore not necessary - and the highly robust design provides increased safety</p>\r\n\r\n<h2>Full reaction control</h2>\r\n\r\n<p>For digestions at elevated pressures and temperatures, control and monitoring of the reaction parameters is of paramount importance.</p>\r\n\r\n<h3>Temperature</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-DIRC.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-DIRC_8608ee9274.jpg" style="height:270px; width:230px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p><strong>SpeedwaveDIRC&nbsp;<br />\r\nDirect Infrared Control</strong><br />\r\nDirect and contactless real-time recording of all probe temperatures.</p>\r\n\r\n<p><strong>SpeedwaveOTC&nbsp;<br />\r\nOptical Temperature Cut-off&nbsp;</strong><br />\r\nContactless real-time recording of all vessel temperatures, programmable toprevent overheating and for longer service life of the vessels.</p>\r\n\r\n<h3>Pressure</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-OPC.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-OPC_7bbfb45949.jpg" style="height:270px; width:230px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<p><strong>Speedwave OPC<br />\r\nOptical Pressure Control</strong><br />\r\nContactless recording of all vessel internal pressures in real time.</p>\r\n\r\n<h2>The following applies to all measuring processes:</h2>\r\n\r\n<ul>\r\n	<li>Not influenced by microwave radiation.</li>\r\n	<li>All sensors and wiring lie outside of the microwave field.</li>\r\n	<li>Perfect chemical resistance of sensors in the oven chamber.</li>\r\n	<li>No sensors in the sample vessel. As a result, there is no risk of contamination for the samples and no risk of damage or wear and tear through frequent assembly and disassembly.</li>\r\n</ul>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16025">Digestion vessels</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_PTFE-Gefaesse_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_PTFE-Gefaesse_980px_0d45bfaa86.jpg" style="height:152px; width:230px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<ul>\r\n	<li>Dense, durable pressure vessels made of TFM&trade;-PTFE</li>\r\n	<li>Opening and closing without tools</li>\r\n	<li>Lower costs for consumable materials</li>\r\n	<li>Digestion vessels covered under equipment warranty</li>\r\n	<li>Controlled release of residual pressure when opening the containers</li>\r\n	<li>Digestion vessels can be used with mineral acids HCl, HNO3, HF, H2SO4&nbsp;and H3PO4</li>\r\n	<li>Connection of all vessels to the gas collection system that dissipates released gases safely</li>\r\n</ul>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16023">Control</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg" style="height:154px; width:230px" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" style="height:16px; width:18" /></a></p>\r\n\r\n<ul>\r\n	<li>External controller with a large display and high resolution for easier visualisation</li>\r\n	<li>Intuitive operation</li>\r\n	<li>Web visualisation for mobile devices (smartphone, tablet) for easy control outside the laboratory</li>\r\n	<li>Multilingual software</li>\r\n	<li>Extensive application database</li>\r\n</ul>\r\n', '2', 'Speedwave Xpert', 'Pre-Order', 'Microwave-Digestion', 'csm_Berghof_Speedwave_Mikrowellen_1000x756px_d9a4d96b94.jpg', 'csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px_0a68008733.jpg', 1, 'Speedwave Xpert — the professional', 'Microwave-Digestion', 'Microwave-Digestions-with-Presssure-and-Temperature-Control-12-x-60-mL');
INSERT INTO `product_tbl` (`product_id`, `product_title`, `product_descrption`, `product_specification`, `manu_id`, `product_code`, `product_availability`, `product_category`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `featured`, `product_text_preview`, `category_url`, `product_slug`) VALUES
(49, 'Microwave Digestions with Presssure and Temperature Control 24 x 40 mL', '<p>The all-rounder for demanding digestions at elevated temperatures and pressures.</p>\r\n\r\n<ul>\r\n	<li>Powerful</li>\r\n	<li>Sophisticated</li>\r\n	<li>Intuitive</li>\r\n</ul>\r\n\r\n<p>-1 sets turntable for 24 pcs Digestions Vessels 40 mL<br />\r\n-1 sets Consumables for approx 500 samples<br />\r\n-1 pcs Enlarging tools for 40 mL Vessels (5303437)<br />\r\n-2 pack Weighing Sets (12 pcs) 2 mL capacity (5303612)<br />\r\n-3 pcs Transport rack for 8 vessels 40 mL each (5304260)<br />\r\n&nbsp;</p>\r\n', '<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px_0a68008733.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>In addition to the &quot;simple routine samples&quot;, many users also need to process the most challenging sample materials. For this target group, devices are required that are both powerful and meet the highest safety requirements. In this context, the all-rounder Speedwave Xpert shines thanks to its new SafePrep concept.</p>\r\n\r\n<p>The use of 2 magnetrons with a total of 2000 W power significantly increases performance, enabling digestion of the most difficult sample materials. At the same time, the microwave is equipped with dynamically regulated fans which provide a marked noise reduction during digestion in comparison with similar models.</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16027">SafePrep</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SafePrep stands for guaranteed safety by combining high-quality materials with a sophisticated microwave design, innovative sensor technology and easy operation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Berghof SwingTop</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave_Xpert_Swing-Top_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>The top-loader microwave offers maximum comfort in operation. The digestion vessels are individually inserted into the rotor and removed again - the transport of a fully loaded rotor is therefore not necessary - and the highly robust design provides increased safety</p>\r\n\r\n<h2>Full reaction control</h2>\r\n\r\n<p>For digestions at elevated pressures and temperatures, control and monitoring of the reaction parameters is of paramount importance.</p>\r\n\r\n<h3>Temperature</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-DIRC.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-DIRC_8608ee9274.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p><strong>SpeedwaveDIRC&nbsp;<br />\r\nDirect Infrared Control</strong><br />\r\nDirect and contactless real-time recording of all probe temperatures.</p>\r\n\r\n<p><strong>SpeedwaveOTC&nbsp;<br />\r\nOptical Temperature Cut-off&nbsp;</strong><br />\r\nContactless real-time recording of all vessel temperatures, programmable toprevent overheating and for longer service life of the vessels.</p>\r\n\r\n<h3>Pressure</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-OPC.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-OPC_7bbfb45949.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p><strong>Speedwave OPC<br />\r\nOptical Pressure Control</strong><br />\r\nContactless recording of all vessel internal pressures in real time.</p>\r\n\r\n<h2>The following applies to all measuring processes:</h2>\r\n\r\n<ul>\r\n	<li>Not influenced by microwave radiation.</li>\r\n	<li>All sensors and wiring lie outside of the microwave field.</li>\r\n	<li>Perfect chemical resistance of sensors in the oven chamber.</li>\r\n	<li>No sensors in the sample vessel. As a result, there is no risk of contamination for the samples and no risk of damage or wear and tear through frequent assembly and disassembly.</li>\r\n</ul>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16025">Digestion vessels</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_PTFE-Gefaesse_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_PTFE-Gefaesse_980px_0d45bfaa86.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<ul>\r\n	<li>Dense, durable pressure vessels made of TFM&trade;-PTFE</li>\r\n	<li>Opening and closing without tools</li>\r\n	<li>Lower costs for consumable materials</li>\r\n	<li>Digestion vessels covered under equipment warranty</li>\r\n	<li>Controlled release of residual pressure when opening the containers</li>\r\n	<li>Digestion vessels can be used with mineral acids HCl, HNO3, HF, H2SO4&nbsp;and H3PO4</li>\r\n	<li>Connection of all vessels to the gas collection system that dissipates released gases safely</li>\r\n</ul>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16023">Control</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<ul>\r\n	<li>External controller with a large display and high resolution for easier visualisation</li>\r\n	<li>Intuitive operation</li>\r\n	<li>Web visualisation for mobile devices (smartphone, tablet) for easy control outside the laboratory</li>\r\n	<li>Multilingual software</li>\r\n	<li>Extensive application database</li>\r\n</ul>\r\n', '2', 'Speedwave Xpert', 'Pre-Order', 'Microwave-Digestion', 'csm_Berghof_Speedwave_Mikrowellen_1000x756px_d9a4d96b94.jpg', 'csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg', 'csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg', 0, 'Speedwave Xpert — the professional', 'Microwave-Digestion', 'Microwave-Digestions-with-Presssure-and-Temperature-Control-24-x-40-mL'),
(50, 'Microwave Digestions with Presssure and Temperature Control 12 x 100 mL', '<p>The all-rounder for demanding digestions at elevated temperatures and pressures.</p>\r\n\r\n<ul>\r\n	<li>Powerful</li>\r\n	<li>Sophisticated</li>\r\n	<li>Intuitive</li>\r\n</ul>\r\n\r\n<p>-1 sets turntable for 12 pcs Digestions Vessels 100 mL<br />\r\n-1 sets Consumables for approx 500 samples<br />\r\n-1 pcs Forming Systems for 100 mL Vessels DAP-100 &nbsp;(5303275)<br />\r\n-1 pcs Enlarging tools for 100 mL Vessels DAP-100 (5303299)<br />\r\n-1 pack Weighing Sets (12 pcs) 2.5 mL capacity<br />\r\n-2 pcs Transport rack for 6 vessels each (5304265)</p>\r\n', '<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px_0a68008733.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>In addition to the &quot;simple routine samples&quot;, many users also need to process the most challenging sample materials. For this target group, devices are required that are both powerful and meet the highest safety requirements. In this context, the all-rounder Speedwave Xpert shines thanks to its new SafePrep concept.</p>\r\n\r\n<p>The use of 2 magnetrons with a total of 2000 W power significantly increases performance, enabling digestion of the most difficult sample materials. At the same time, the microwave is equipped with dynamically regulated fans which provide a marked noise reduction during digestion in comparison with similar models.</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16027">SafePrep</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SafePrep stands for guaranteed safety by combining high-quality materials with a sophisticated microwave design, innovative sensor technology and easy operation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Berghof SwingTop</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave_Xpert_Swing-Top_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>The top-loader microwave offers maximum comfort in operation. The digestion vessels are individually inserted into the rotor and removed again - the transport of a fully loaded rotor is therefore not necessary - and the highly robust design provides increased safety</p>\r\n\r\n<h2>Full reaction control</h2>\r\n\r\n<p>For digestions at elevated pressures and temperatures, control and monitoring of the reaction parameters is of paramount importance.</p>\r\n\r\n<h3>Temperature</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-DIRC.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-DIRC_8608ee9274.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p><strong>SpeedwaveDIRC&nbsp;<br />\r\nDirect Infrared Control</strong><br />\r\nDirect and contactless real-time recording of all probe temperatures.</p>\r\n\r\n<p><strong>SpeedwaveOTC&nbsp;<br />\r\nOptical Temperature Cut-off&nbsp;</strong><br />\r\nContactless real-time recording of all vessel temperatures, programmable toprevent overheating and for longer service life of the vessels.</p>\r\n\r\n<h3>Pressure</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-OPC.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-OPC_7bbfb45949.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p><strong>Speedwave OPC<br />\r\nOptical Pressure Control</strong><br />\r\nContactless recording of all vessel internal pressures in real time.</p>\r\n\r\n<h2>The following applies to all measuring processes:</h2>\r\n\r\n<ul>\r\n	<li>Not influenced by microwave radiation.</li>\r\n	<li>All sensors and wiring lie outside of the microwave field.</li>\r\n	<li>Perfect chemical resistance of sensors in the oven chamber.</li>\r\n	<li>No sensors in the sample vessel. As a result, there is no risk of contamination for the samples and no risk of damage or wear and tear through frequent assembly and disassembly.</li>\r\n</ul>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16025">Digestion vessels</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_PTFE-Gefaesse_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_PTFE-Gefaesse_980px_0d45bfaa86.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<ul>\r\n	<li>Dense, durable pressure vessels made of TFM&trade;-PTFE</li>\r\n	<li>Opening and closing without tools</li>\r\n	<li>Lower costs for consumable materials</li>\r\n	<li>Digestion vessels covered under equipment warranty</li>\r\n	<li>Controlled release of residual pressure when opening the containers</li>\r\n	<li>Digestion vessels can be used with mineral acids HCl, HNO3, HF, H2SO4&nbsp;and H3PO4</li>\r\n	<li>Connection of all vessels to the gas collection system that dissipates released gases safely</li>\r\n</ul>\r\n\r\n<p><a href="http://www.berghof-instruments.com/en/laboratory-equipment/digestion-technology/microwave-digestion/speedwave-xpert/#" name="c16023">Control</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<ul>\r\n	<li>External controller with a large display and high resolution for easier visualisation</li>\r\n	<li>Intuitive operation</li>\r\n	<li>Web visualisation for mobile devices (smartphone, tablet) for easy control outside the laboratory</li>\r\n	<li>Multilingual software</li>\r\n	<li>Extensive application database</li>\r\n</ul>\r\n', '2', 'Speedwave Xpert', 'Pre-Order', 'Microwave-Digestion', 'csm_Berghof_Speedwave_Mikrowellen_1000x756px_d9a4d96b94.jpg', 'csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px_0a68008733.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg', 0, 'Speedwave Xpert — the professional', 'Microwave-Digestion', 'Microwave-Digestions-with-Presssure-and-Temperature-Control-12-x-100-mL'),
(51, 'High Pressure Microwave Digestions with Presssure and Temperature Control 8 x 100 mL', '<p>With the new microwave digestion device, speedwave Entry is focusing on what&#39;s important:</p>\r\n\r\n<ul>\r\n	<li>Easy handling</li>\r\n	<li>High level of safety during digestion</li>\r\n	<li>Low operating costs</li>\r\n</ul>\r\n\r\n<p>-1 sets turntable for 8 pcs Digestions Vessels 100 mL (100 bar) made of TFM and TFM Insert, ceramic pressure jacket, lids, rupture disc, 7 pcs caps and 1 pcs cap with OPC sensor<br />\r\n-1 sets Consumables for approx 500 samples<br />\r\n-1 pcs Forming Systems for 100 mL Vessels DAK-100<br />\r\n-5 pcs Enlarging tools for 100 mL Vessels DAK-100<br />\r\n-1 pack Weighing Sets (12 pcs) 2.5 mL capacity<br />\r\n-2 pcs Transport rack for 4 vessels each&nbsp;<br />\r\n&nbsp;</p>\r\n', '<p>In modern analytics, tasks must be carried out quickly, easily and flawlessly. Especially in trace analysis, systematic errors can be reduced to a minimum with the help of modern microwave digestion devices.</p>\r\n\r\n<p><strong>First class digestion results with speedwave Entry</strong></p>\r\n\r\n<ul>\r\n	<li>Avoid sample contamination through corrosion-resistant oven coating and gas collection system</li>\r\n	<li>High digestion quality and extremely low blank values thanks to vessels made of isostatically molded TFMTM-PTFE</li>\r\n	<li>Easy handling thanks to innovative vessel design and and QuickStart control</li>\r\n	<li>Constant sample temperature and digestion process results through the power control system in dependence on sample temperature</li>\r\n	<li>20% faster cooling and therefore higher sample throughput through additional exhaust unit</li>\r\n	<li>Complete reaction control due to optical temperature measurement</li>\r\n</ul>\r\n\r\n<p><img alt="" src="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Aufschlussgefaesse_speedwave-entry_en.jpg" /></p>\r\n\r\n<ul>\r\n	<li>Massive and long-lasting pressure vessels made of TFMTM-PTFE and quartz glass</li>\r\n	<li>Opening and closing without tools</li>\r\n	<li>Lower costs for consumable materials</li>\r\n	<li>Controlled release of residual pressure when opening the containers</li>\r\n	<li>Digestion vessels can be used with mineral acids HCl, HNO3, HF, H2SO4&nbsp;and H3PO4</li>\r\n</ul>\r\n\r\n<h3>Speedwave DIRC - No reference vessels</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-DIRC_en.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-DIRC_en_eece073707.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>The sample temperature in each individual vessel is detected directly and in real time.</p>\r\n\r\n<p>This is possible because the vessels materials, such as TFMTM-PTFE and quartz, cannot absorb the radiation in the mid-infrared range. In addition, the infrared radiation emitted from the surface of the pressure vessels is filtered out. This allows the sample temperature to be controlled directly in each vessel.</p>\r\n\r\n<h3>Advantages</h3>\r\n\r\n<ul>\r\n	<li>Not influenced by microwave radiation.</li>\r\n	<li>All sensors and their cicuit lie outside of the microwave field.</li>\r\n	<li>Perfect chemical resistance of sensors in the oven chamber.</li>\r\n	<li>No sensors in the sample vessel. As a result, there is no risk of contamination for the samples and no risk of damage or wear and tear through frequent assembly and disassembly.</li>\r\n</ul>\r\n\r\n<h3>Loading and starting</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-Entry_QuickStart.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-Entry_QuickStart_c28de6669e.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>Thanks to the QuickStart microwave control, the temperature programme only takes two steps to start. Users move intuitively through the easily understandable menu navigation. For increased convenience, the touch screen is coloured and contains various language options. From a pool of pre-installed applications including the latest DIN and EPA standards, the desired method can be selected quickly. In addition, further customisable methods can be loaded. All digestion data is available after digestion.</p>\r\n\r\n<h3>Fast reaction control</h3>\r\n\r\n<p><a href="http://www.berghof-instruments.com/fileadmin/user_upload/Berghof-Speedwave-Entry_Mikrowellenleistung_en.jpg"><img alt="" src="http://www.berghof-instruments.com/fileadmin/_processed_/csm_Berghof-Speedwave-Entry_Mikrowellenleistung_en_cafaa92e7a.jpg" /><img src="http://www.berghof-instruments.com/fileadmin/templates/res/img/lightview.png" /></a></p>\r\n\r\n<p>The advantage of microwave digestion systems is the rapid heating of the sample material. Depending on the chemical composition of the sample material, spontaneous reactions may occur. In order to prevent this effectively, quick reaction control is necessary.</p>\r\n\r\n<p>Based on the optical measurement of the temperature (DIRC), microwave performance can be controlled instantaneously. This makes safe reaction control possible.</p>\r\n', '2', 'Speedwave Xpert', 'Pre-Order', 'Microwave-Digestion', 'csm_Berghof_Speedwave_Mikrowellen_1000x756px_d9a4d96b94.jpg', 'csm_Berghof_Speedwave_Xpert_Swing-Top_980px_09ae8736b5.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Schema_en_980px_0a68008733.jpg', 'csm_Berghof_Speedwave-Xpert-Mikrowellenaufschluss_Steuerung_Control_980px_e9073ffa41.jpg', 0, 'Speedwave Entry — The efficient one', 'Microwave-Digestion', 'High-Pressure-Microwave-Digestions-with-Presssure-and-Temperature-Control-8-x-100-mL'),
(52, 'Gas Chromatography', '<p>The system allows to easily move from a minimal to a very<br />\r\ncomplicated configuration with minor changes and at very<br />\r\nreduced costs.<br />\r\nThe oven is extremely spacious and easily accessible and<br />\r\ncontains many columns allowing for complex analytical<br />\r\nconfigurations.<br />\r\nAll parameters can be controlled by a powerful internal<br />\r\nmicroprocessor thereby guaranteeing total accuracy and<br />\r\nrepeatability of timing and temperatures.<br />\r\nElectronic gas regulation, for both injectors and detectors,<br />\r\nallows to include in the method timing, temperatures and all<br />\r\ngas flow rates. Just recall the method previously stored to<br />\r\nreproduce, from time to time and on different instruments,<br />\r\nretention times and sensitivity with the utmost accuracy.<br />\r\nThe instrument also provides constant column flow rate<br />\r\noperation to improve analysis results, whilst preserving the<br />\r\nanalytical column.</p>\r\n', '<p>DANI GC1000 offers a complete range of injectors, all<br />\r\nequipped with electronic pressure control, which allow an<br />\r\naccurate injection of all samples in packed or capillary<br />\r\ncolumns.<br />\r\nDANI not only provides traditional split/splitless and packed<br />\r\ncolumn injectors, but also the programmable temperature<br />\r\ninjector PTV.<br />\r\nThanks to cold injection of the sample, the PTV solves all<br />\r\nproblems of discrimination of complex mixture as well as the<br />\r\ntreatment of thermally labile compounds.<br />\r\nDANI PTV also combines the best repeatability and accuracy<br />\r\ninjection with easy-to-use together with all advantages of<br />\r\nthe traditional split/splitless injector.<br />\r\nSolvent split, large volume, and sample focusing injections<br />\r\nand the compatibility with SPME technique, make the DANI<br />\r\nPTV a universal injector.</p>\r\n\r\n<p>Gas sampling valves, methanizers, auxiliary ovens and other<br />\r\nspecial devices, make DANI GC1000 the most suitable gas<br />\r\nchromatograph for the development of complex analytical<br />\r\nsystems in a wide range of applications from petrochemical<br />\r\nto environmental field.<br />\r\nQualified staff provide total solutions including customised<br />\r\nsystems, technical support, customer care and trainings.</p>\r\n\r\n<p>DANI GC1000 has a full range of detectors for different<br />\r\napplications:<br />\r\nFID - Flame Ionisation Detector<br />\r\nECD - Electron Capture Detector<br />\r\nNPD - Nitrogen Phosphorous Detector<br />\r\nTCD e micro TCD - Thermal Conductivity Detector<br />\r\nPID - Photoionisation Detector<br />\r\nFPD - Flame Photometric Detector</p>\r\n', '4', 'GC-1000', 'Pre-Order', 'Gas-Chromatography', 'th_gc1000_2.gif', 'cache_2444752139.jpg', 'grad_d3.jpg', '19481-15347.jpg', 0, 'DANI GC1000 gas chromatograph is very versatile and easy\r\nto use. Even with its extremely reduced dimensions it is fully\r\nequipped to satisfy the most demanding user. The flexible\r\nand adaptable basic structure can accommodate..', 'Gas-Chromatography', 'Gas-Chromatography'),
(53, 'Tuoch-Screen Gas Chromatography', '<p>&gt; Fastest Oven Heating/Cooling Rate<br />\r\n&gt; Proprietary Digital Flow Control with bestinclass Performance<br />\r\n&gt; HighSpeed Acquisition (300 pt/sec all detectors)<br />\r\n&gt; Multiple Injectors and Detectors<br />\r\n&gt; Up to 3 Injectors and 3 Detectors installed simultaneously<br />\r\n&gt; Suited for Narrow bore GC Columns (&gt;50 um i.d.)</p>\r\n\r\n<p>Master GC<br />\r\nNowadays, the enormous growth of the number of samples to be analyzed per day is challenging the laboratories<br />\r\nworldwide. Hence, the more stringent analytical requirements demand to speed up the gas chromatographic<br />\r\nanalyses.</p>\r\n\r\n<p>The MASTER GC delivers unsurpassed analytical capabilities meeting today&rsquo;s laboratories productivity<br />\r\nrequirements. The versatile and flexible MASTER GC is uniquely designed to perform conventional and fast gas<br />\r\nchromatographic analyses fulfilling the demands of routine and research analyses over a variety of industries and<br />\r\napplications such as environmental, agriculture, food and beverage, flavor and fragrance, petrochemical,<br />\r\nand pharmaceuticals among others.<br />\r\nThe system can be equipped with an array of inlet systems and a wide selection of detectors, suitable for<br />\r\nconventional and Fast GC analyses. The system integrates leading edge technology with total system control<br />\r\ndelivering outstanding reliability, repeatability, and performance.<br />\r\nIn combination with the MASTER AS Liquid Autosampler, the MASTER GC offers complete automation of all<br />\r\noperation steps, providing increased sample throughput and optimized vial processing to achieve maximum system<br />\r\nproductivity. The analytical precision is further increased through an extremely flexible handling of standard<br />\r\nsolutions.<br />\r\nA touchscreen display permits the total control of the MASTER GC and MASTER AS, providing also the quick and<br />\r\neasy set up of all operating parameters. Moreover, the system can be fully controlled by the simple and effective<br />\r\nClarityTM Chromatography Station, starting from sampling to acquisition, data processing, and reporting.<br />\r\n&nbsp;</p>\r\n', '<p>Split / Splitless Injector SL/IN<br />\r\nThe most popular GC injector features an outstanding design and thanks to the patented DFC provides excellent&nbsp;mode is a valuable costsaving feature. TU fulfill the user&rsquo;s analytical needs a series of liner types are available, including liners suitable for SPME analysis.</p>\r\n\r\n<p>Programmable Temperature Vaporizer PTV<br />\r\nThe proprietary PTV is particularly suggested when high sample integrity is requested. The sample is introduced by cold injection followed by vaporization eliminating possible sample discrimination or degradation.<br />\r\nThe PTV achieves extremely fast heating rates of up to 1,000 &deg;C/min and rapid cool down with ambient air.<br />\r\nCryogenic cooling options using either CO2 or N2 are also available for highly specific applications.</p>\r\n\r\n<p>Flame Ionization Detector FID<br />\r\nThe most used GC detection system measures the ions produced by organic compounds during combustion. It is extremely sensitive with a wide dynamic range of seven orders of magnitude.</p>\r\n\r\n<p>Thermal Conductivity Detector TCD<br />\r\nMost of the early GC instruments were equipped with thermal conductivity detectors. They have remained popular, particularly for packed columns and inorganic analyses like H2O, CO, CO2, H2 and all inert gases.</p>\r\n\r\n<p>Electron Capture Detector ECD<br />\r\nThe first option for environmental measurements, offers excellent performance in the determination of PCBs, pesticides, and other halogenated organic compounds.</p>\r\n\r\n<p>NitrogenPhosphorus<br />\r\nDetector NPD<br />\r\nDue to its selective and sensitive response to nitrogen and/or phosphorous containing compounds, the system is commonly used to detect pesticides, herbicides, and drugs of abuse.</p>\r\n\r\n<p>Flame Photometric Detector FPD<br />\r\nSelectively detects compounds containing sulfur or phosphorous. Outstanding performances can be observed in the analysis of sulfur compounds in natural gas and organophosphorus pesticides in agriculture, food flavor and fragrance applications.</p>\r\n', '4', 'Master GC', 'Pre-Order', 'Gas-Chromatography', 'dani_master_gc.jpg', 'gas-regulators-250x250.jpg', 'img_31.jpg', 'Dani_DHS.jpg', 1, 'Master GC\r\nFast Gas Chromatography, a breakthrough in Fasf GC Performance', 'Gas-Chromatography', 'Tuoch-Screen-Gas-Chromatography'),
(54, 'Touch Screen Gas Chromatography with MS Detector', '<p>High sensitivity over the entire mass range, for every single spectrum, for hundred of spectra per second<br />\r\nFast acquisition speed for generating highdensity data points chromatograms<br />\r\nHigh quality spectra, with no discrimination between low and high masses and a reliable library search process<br />\r\nBestinclass dynamic range in the chromatographic and in the spectral domain allows quantification with speed, accuracy, and repeatability<br />\r\nQualitative and quantitative fidelity fueled by fast acquisition</p>\r\n', '<p>Master TOF MS Plus Detector<br />\r\nPerforms fast acquisition rates (1,000 spectra/s) and wide linear range. In combination with Master GC, the system<br />\r\nis the ideal solution for Fast GC and GCxGC analyses. In addition, the its proprietary software solution is based on<br />\r\nan innovative platform for acquiring and processing mass spectral data. Original deconvolution algorithm capable to<br />\r\nhandle the large amount of information in a smart and effective way permits reliable identification of trace compounds even in complex matrices.</p>\r\n\r\n<p>Master TOF MS Plus<br />\r\nProductivity has become of vital importance in most modern laboratories.<br />\r\nThe automated and unattended processing of a larger number of samples per day is the real challenge to increase<br />\r\nproductivity and reduce cost/analysis.<br />\r\nAdditionally, Fast GC has resulted in a very effective way to address this challenge providing a significant decrease<br />\r\nin the analysis time.<br />\r\nHowever, when a positive identification is mandatory and mass spectrometric detection is needed, Time of Flight<br />\r\nMass Spectrometry (TOFMS)<br />\r\nis the only technology capable of properly describing very narrow chromatographic<br />\r\npeaks due to its fast acquisition rate, independently of the mass range of interest.<br />\r\nDANI Master TOF Plus MS detector performs the fastest acquisition rates (up to 1000 spectra/s) and the widest<br />\r\ndynamic range available on the market.<br />\r\nDANI Master TOF Plus is now even more sensitive to match demanding analytical requirement. Approaching the<br />\r\nSIM mode sensitivity of common quadrupoles, the new Master TOF Plus is extremely suitable to detect analytes at<br />\r\ntrace levels, keeping the additional benefits of the full mass spectra information always available.<br />\r\nThese capabilities are offered in a truly affordable and extremely compact benchtop<br />\r\ninstrument.<br />\r\nIn combination with the Master GC, the system is the ideal solution for Fast GC and GCxGC analyses to obtain<br />\r\nimproved productivity and performance.</p>\r\n', '4', 'MASTES GC + Master ToF', 'Pre-Order', 'Gas-Chromatography', 'TOF_03.png', 'TOF_02.png', 'TOF.png', 'MASTER-GC---MASTER-TOF---MASTER-AS1-290x215.jpg', 1, 'Time of Flight\r\nSpeed is Knowledge\r\nThe DANI Master TOF MS Plus has been designed for gas chromatography – mass spectrometry applications,\r\nbringing to the analyst the capabilities so far unachievable with quadrupole technology.', 'Gas-Chromatography', 'Touch-Screen-Gas-Chromatography-with-MS-Detector'),
(55, 'Pocket aW Meter', '<h1>AQUALAB PAWKIT</h1>\r\n\r\n<ul>\r\n	<li>Measurements:&nbsp;\r\n	<ul>\r\n		<li><a href="http://www.aqualab.com/products/Measurement/65">Water Activity</a></li>\r\n	</ul>\r\n	</li>\r\n	<li>Applications:&nbsp;\r\n	<ul>\r\n		<li><a href="http://www.aqualab.com/products/Application/76">Baked and Snack Foods</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/61">Beef Jerky</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/77">Candy and Confectionery</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/78">Cereal and Grain Products</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/79">Coffee/Tea</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/80">Cosmetics</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/87">Dairy Products</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/56">Dried Distillers Grain</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/60">Dried/ Dehydrated Products</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/86">Materials</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/81">Nuts/Dried Fruit</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/55">Pet Food</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/62">Plastics</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/82">Processed/Cured Meat</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/83">Sauces/Dressings</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/63">Seed Longevity</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/84">Spices</a>,</li>\r\n		<li><a href="http://www.aqualab.com/products/Application/85">Tobacco</a></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h2>How It Works</h2>\r\n\r\n<p>To make a measurement, flip back the sensor cover and fit the Pawkit over a standard AquaLab sample cup. A push of a button brings an accurate reading within five minutes.</p>\r\n\r\n<p>Pawkit owners include government inspectors, jerky manufacturers, small food companies, and production-line QA managers, among others. The Pawkit is accurate to &plusmn; 0.02 aw&nbsp;, so it can only be used where a higher accuracy is not critical.</p>\r\n', '<h2>Affordable, Portable Water Activity</h2>\r\n\r\n<ul>\r\n	<li>Lightweight - just 4 ounces</li>\r\n	<li>Pocket-sized - 3.5 x 4 inches</li>\r\n	<li>Battery-operated</li>\r\n	<li>Easy two point calibration</li>\r\n	<li>Self-contained - low maintenance sensor and readout in a single unit</li>\r\n	<li>Most affordable water activity meter on the market</li>\r\n</ul>\r\n\r\n<h2>Limitations</h2>\r\n\r\n<ul>\r\n	<li>No temperature control</li>\r\n	<li>Capacitance sensor limits accuracy to &plusmn; 0.02 aw&nbsp;</li>\r\n</ul>\r\n', '5', 'Aqualab Pawkit', 'Pre-Order', 'aW-Meter', 'pawkit-3 small.jpg', 'pawkit-2 small.jpg', 'Pawkit-Case small.jpg', 'Comparison.jpg', 0, 'Sturdy and Reliable\r\nOriginally designed for government inspectors, the 4-inch Pawkit is a reliable water activity instrument for use on-the-go. ', 'aW-Meter', 'Pocket-aW-Meter'),
(56, 'Automatic Water Activity (aW) Meter with prehold temperature ', '<p>Repeatable measurements, solid support</p>\r\n\r\n<p>The AquaLab Pre is a robust entry-level water activity meter with stripped down form, not limited function. It uses the same industry-standard primary aw method you find in the top-of-the-line AquaLab Series 4TE. The Pre may look basic, but that&rsquo;s because all the good things are inside.&nbsp;<br />\r\n<br />\r\n<strong>No calibration.</strong>&nbsp;Pre uses the dewpoint method&mdash;a primary measurement of water activity. That eliminates the need for lengthy sensory calibration.&nbsp;<strong>Just a quick verification check</strong>&nbsp;and you&rsquo;re good to go.&nbsp;<br />\r\n<br />\r\n<strong>Real water activity--FAST.</strong>&nbsp;Primary measurement allows Pre enjoy a distinctive advantage in speed. Pre delivers&nbsp;<strong>top-accuracy readings in five minutes or less</strong>&mdash;no need to sacrifice accuracy for speed.&nbsp;<br />\r\n<br />\r\n<strong>Solid repeatability.</strong>&nbsp;Pre holds the sample at 25&deg;C so&nbsp;<strong>temperature fluctuations</strong>&nbsp;won&rsquo;t affect your readings. Water activity is temperature dependent; measuring at the same temperature every time assures consistency in your readings.&nbsp;<br />\r\n<br />\r\n<strong>Reliable accuracy.</strong>&nbsp;Pre&rsquo;s dewpoint method and temperature-stable features mean good agreement between the Pre and the Series 4. Its basic&nbsp;<strong>0.01 awaccuracy</strong>&nbsp;enables many of our customers to add water activity testing at the line, loading dock, or offsite facility.&nbsp;<br />\r\n<br />\r\n<strong>Dependable support.</strong>&nbsp;Pre includes Decagon&rsquo;s trademark&nbsp;<strong>free technical support</strong>&mdash;food scientists and instrument specialists just a phone call away.&nbsp;<br />\r\n<br />\r\n<strong>Full range.</strong>&nbsp;Pre lets you measure over the whole range of water activities,&nbsp;<strong>0 to 1.0 aw.</strong>&nbsp;<br />\r\n<br />\r\n<strong>Measure Samples with Volatiles.</strong>&nbsp;Unlike AquaLab Lite, Pre can use a dewpoint or a capacitance sensor, so samples containing alcohols, propylene glycol, and other volatiles can be read.&nbsp;<br />\r\n<br />\r\n<strong>Connect to a Computer.</strong>&nbsp;Pre can be connected to a laptop or desktop computer to download and store readings.</p>\r\n', '<p>Water Activity Range: Dew point block &ndash; 0.05 to 1.00;&nbsp;<br />\r\nVolatile block &ndash; 0.05 to 0.95 aw<br />\r\nDew Point Accuracy:&nbsp;&plusmn;0.01&nbsp;aw&nbsp;<br />\r\nVolatile Accuracy: &plusmn;0.015<br />\r\nWater Activity Resolution: &plusmn;0.001<br />\r\nRead Time1: &le; 5 min.<br />\r\nSample Temperature Control: 25 ?C<br />\r\nSample Temperature Accuracy2: &plusmn;0.2 ?C<br />\r\nSample Temperature Resolution: 0.1 ?C<br />\r\nSample Dish Capacity: 7 ml Recommended (15 ml Full)<br />\r\nOperating Environment: 4 to 50 ?C and 0 to 90%&nbsp;<br />\r\nRelative Humidity (non-condensing)<br />\r\nCase Dimensions: 24.1 x 22.9 x 8.9 cm<br />\r\nWeight: 3.2 Kg<br />\r\nCase Material: Powder Painted Aluminum<br />\r\nDisplay: 20 x 2 alphanumeric backlit LCD<br />\r\nData Communications: RS232A compatible, 8-data bit ASCII code, 9600 baud, no parity, 1 stop bit<br />\r\nPower: 110 VAC to 220 VAC, 50/60 Hz Warranty: 1 year parts and labo</p>\r\n', '5', 'Aqualab PRE', 'Pre-Order', 'aW-Meter', 'small PRELOADING-SAMPLE2 (1).jpg', 'small pre2 (1).jpg', 'Samll Aqualab-Pre.jpg', 'Comparison.jpg', 0, 'Affordable Benchtop Water Activity', 'aW-Meter', 'Automatic-Water-Activity-aW-Meter-with-prehold-temperature');

-- --------------------------------------------------------

--
-- Table structure for table `roles_tbl`
--

CREATE TABLE IF NOT EXISTS `roles_tbl` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(120) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `service_desc` text NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE IF NOT EXISTS `slider_tbl` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `silder_image` varchar(250) NOT NULL,
  `slider_link` varchar(250) NOT NULL,
  `slider_title` varchar(250) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `silder_image`, `slider_link`, `slider_title`) VALUES
(5, 'Berghof.jpg', 'http://www.berghof-instruments.com/en/contact-persons/asia/', 'Microwave Digestion System'),
(6, 'Zirbus.jpg', 'http://www.zirbus.com/autoclaves/floor-standing-autoclaves/', 'Autoclaves'),
(7, 'Synbiosis.jpg', 'http://www.synbiosis.com/colony-counting-and-zone-sizing-products/', 'Automatic Colony Counter'),
(8, 'Infors.jpg', 'http://www.infors-ht.com/index.php/en/products/bioreactors/solid-state-bioreactors/labfors-5-bioetoh', 'Bioreactors and Shakers'),
(9, 'BMG Labyech.jpg', 'http://www.bmglabtech.com/en/products/omega-series/fluostar-omega/', 'Microplate Reader'),
(10, 'AquaLab.jpg', 'http://www.aqualab.com/products/water-activity-meters/aqualab-dew-point-water-activity-meter-4te/', 'Water Activity'),
(11, 'Decagon.jpg', 'http://www.decagon.com/en/', 'Environmental'),
(12, 'Xenemetric.jpg', 'https://www.xenemetrix.com/products/ed-xr-spectrometers/948-p-metrix.html', 'ED-XRF');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_category`
--

CREATE TABLE IF NOT EXISTS `sparepart_category` (
  `sparepart_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(120) NOT NULL,
  `category_slug` varchar(120) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`sparepart_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(10, 'T-Connectors', 't-Connectors', 0),
(12, 'SpeedWave Entry, Two, and MWS-2', 'SpeedWave-Entry-Two-and-MWS-2', 0),
(13, 'SpeedWave Xpert', 'SpeedWave-Xpert', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_tbl`
--

CREATE TABLE IF NOT EXISTS `sparepart_tbl` (
  `sparepart_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `dimensi` int(11) NOT NULL,
  PRIMARY KEY (`sparepart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=318 ;

--
-- Dumping data for table `sparepart_tbl`
--

INSERT INTO `sparepart_tbl` (`sparepart_id`, `sparepart_name`, `sparepart_price`, `sparepart_image`, `sparepart_image_2`, `sparepart_image_3`, `sparepart_image_4`, `sparepart_text_preview`, `sparepart_desc`, `stock`, `sparepart_slug`, `manu_id`, `sparepart_category`, `sparepart_code`, `berat`, `dimensi`) VALUES
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
(177, 'Sample Loop, 20 mikroliter, PEEK', 0, '', '', '', '', '', '', '-1', 'Sample-Loop-20-mikroliter-PEEK', 8, 'accessories-miscellaneous', 'A1059', 0, 0),
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
(259, 'Sample Cooler for Osmometer K7400', 0, '', '', '', '', '', '', '', 'Sample-Cooler-for-Osmometer-K7400', 8, 'accessories-miscellaneous', 'G0107V2', 0, 0),
(261, 'konektor', 0, '', '', '', '', 'prev konek', '<p>desc kon</p>\r\n', '0', 'konektor', 1, 't-Connectors', 'b01', 1, 10),
(262, 'mercury test', 10, '', '', '', '', 'test spare parts', '<p>testttttt</p>\r\n', '9', 'mercury-test', 10, 'mixing-chamber', '006', 1, 1),
(263, 'Lip-Seal ring', 0, '', '', '', '', 'Lip-Seal ring for speedwave systems', '<p>Spare parts dipakai pada bagian pertemuan selang exhaust dan turntable ,,&nbsp;</p>\r\n\r\n<p>sebagai seal agar tidak terjadi kebocoran kelingkungan jika terjadi <em>over pressure.</em></p>\r\n', '0', 'Lip-Seal-ring', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302962', 1, 10),
(264, 'Fixation screw', 0, '', '', '', '', 'Fixation screw for lip seal ring', '<p><em>Screw</em> , untuk menutup bagian <em>lip seal ring</em> .&nbsp;</p>\r\n', '0', 'Fixation-screw', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302963', 1, 100),
(265, 'Nut Gas collection systems', 0, '', '', '', '', 'Nut for connecting tube to gas collection system/integrated suction system', '<p>Nut for connecting tube to gas collection system/integrated suction system</p>\r\n', '0', 'Nut-Gas-collection-systems', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302811', 1, 100),
(266, 'Connecting tube gas collection system', 0, '', '', '', '', 'connecting tube to gas collection system / integrated suction system (without nut)', '<p>Connecting tube to gas collection system / integrated suction system (without nut)</p>\r\n', '0', 'Connecting-tube-gas-collection-system', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302812', 1, 100),
(267, 'Blind Plug', 0, '', '', '', '', 'blind plug for DAC/DAK-70 / - 100 turntable', '<p>Blind plug for DAC/DAK-70 / - 100 turntable, to seal the exhaust system at unused vessel positions</p>\r\n', '0', 'Blind-Plug', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302817', 1, 100),
(268, 'Weighing Cup (2ml)', 0, '', '', '', '', 'PTFE cup for sample weigh-in (2,0 ml, fits into DAP-60K, DAC/DAK-70/100)', '<p>PTFE cup for sample weigh-in (2,0 ml, fits into DAP-60K, DAC/DAK-70/100)</p>\r\n', '0', 'Weighing-Cup-2ml', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303611', 1, 100),
(269, 'Weighing Cup (2ml, Set)', 0, '', '', '', '', 'PTFE cup for sample weigh-in (2,0 ml, fits into DAP-60K, DAC/DAK-70/100, set a 12 pcs)', '<p>PTFE cup for sample weigh-in (2,0 ml, fits into DAP-60K, DAC/DAK-70/100, set a 12 pcs)</p>\r\n', '0', 'Weighing-Cup-2ml-Set', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303612', 1, 100),
(270, 'Weighing Cup (2.5ml)', 0, '', '', '', '', 'PTFE cup for sample weigh-in (2,0 ml, fits into DAP-60K, DAC/DAK-70/100)', '<p>PTFE cup for sample weigh-in (2,0 ml, fits into DAP-60K, DAC/DAK-70/100)</p>\r\n', '0', 'Weighing-Cup-25ml', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303613', 1, 100),
(271, 'Weighing Cup (2.5ml,Set)', 0, '', '', '', '', 'PTFE cup for sample weigh-in (2,5 ml, fits into DAP-60K, DAC/DAK-70/100, set a 12 pcs)', '<p>PTFE cup for sample weigh-in (2,5 ml, fits into DAP-60K, DAC/DAK-70/100, set a 12 pcs)</p>\r\n', '0', 'Weighing-Cup-25mlSet', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303614', 1, 100);
INSERT INTO `sparepart_tbl` (`sparepart_id`, `sparepart_name`, `sparepart_price`, `sparepart_image`, `sparepart_image_2`, `sparepart_image_3`, `sparepart_image_4`, `sparepart_text_preview`, `sparepart_desc`, `stock`, `sparepart_slug`, `manu_id`, `sparepart_category`, `sparepart_code`, `berat`, `dimensi`) VALUES
(272, 'PTFE Protecting foil DAP-60K', 0, '', '', '', '', 'PTFE Protecting foil for DAP-30/60/80S, set of 25 pcs', '<p>PTFE Protecting foil for DAP-30/60/80S, set of 25 pcs</p>\r\n', '0', 'PTFE-Protecting-foil-DAP-60K', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5014618', 1, 100),
(273, 'Enlarging system speedwave', 0, '', '', '', '', 'speedwave Enlarging system for sealing lips of following vessels: DAK-70, DAP60K, DAK-100, DAP-60+, DAP-80+,\r\nDAP-100+\r\n\r\n', '<p>Speedwave Enlarging system for sealing lips of following vessels: DAK-70, DAP60K, DAK-100, DAP-60+, DAP-80+,<br />\r\nDAP-100+</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Enlarging-system-speedwave', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303245', 1, 100),
(274, 'Enlargement insert DAP-60+', 0, '', '', '', '', 'Insert to enlarge sealing lips of DAP-60+ vessels with enlarging system (5303245) \r\n ', '<p>Insert to enlarge sealing lips of DAP-60+ vessels with enlarging system (5303245)</p>\r\n', '0', 'Enlargement-insert-DAP-60', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303278 ', 1, 100),
(275, 'Enlargement insert DAK-70/100, DAP60K', 0, '', '', '', '', 'Enlargement insert\r\nDAK-70/100, DAP60K\r\n', '<p>Insert to enlarge sealing lips of&nbsp; DAK-70/-100, DAP-60K vessels with enlarging system (5303245)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Enlargement-insert-DAK-70100-DAP60K', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303277 ', 1, 100),
(276, 'Enlargement insert DAP-80+/100+', 0, '', '', '', '', 'Enlargement insert DAP-80+/100+', '<p>Insert to enlarge sealing lips of&nbsp; DAP-80+/-100+ vessels with enlarging system (5303245)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Enlargement-insert-DAP-80100', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303299 ', 1, 100),
(277, 'Enlarging tool  DAQ-10/DAC-10, DAQ-20 ', 0, '', '', '', '', 'Enlarging tool  DAQ-10/DAC-10, DAQ-20 ', '<p>Enlarging tool for the sealing lip of DAQ-10, DAQ-20 and DAC-10</p>\r\n', '0', 'Enlarging-tool-DAQ-10DAC-10-DAQ-20', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5024612 ', 1, 100),
(278, 'Enlarging tool  DAP-60K, DAC/DAK-70/100 ', 0, '', '', '', '', 'Enlarging tool  DAP-60K, DAC/DAK-70/100 ', '<p>Enlarging tool for the sealing lip of DAP-60K, DAC/DAK-70 and DAC/DAK-100</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Enlarging-tool-DAP-60K-DACDAK-70100', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302026 ', 1, 100),
(279, 'Consumables DAP-60K', 0, '', '', '', '', 'Consumables DAP-60K', '<p>Consumables for approx. 2500 digestions with DAP-60K, consists of:<br />\r\n5x lip seal ring (5302962)<br />\r\n10x Lid DAP-60K (530202)<br />\r\n4x Rupture discs DAP-60K (5014616)</p>\r\n', '0', 'Consumables-DAP-60K', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303954 ', 1, 100),
(280, 'Pressure vessel DAP-60K  (complete) ', 0, '', '', '', '', 'Pressure vessel DAP-60K  (complete) ', '<p>Pressure vessel DAP-60K made of TFM<br />\r\n(60 ml, 40 bar) with lid and rupture disc</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Pressure-vessel-DAP-60K-complete', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302200 ', 2, 100),
(281, 'Rupture disc DAP 60K', 0, '', '', '', '', 'Rupture disc DAP 60K', '<p>Rupture disc for DAP-60K made of Aluminium, 40 bar, set of 25 pcs</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Rupture-disc-DAP-60K', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5014616 ', 1, 100),
(282, 'Lid DAP-60K ', 0, '', '', '', '', 'Lid DAP-60K ', '<p>Lid for DAP-60K made of TFM, set of 5 pcs.</p>\r\n', '0', 'Lid-DAP-60K', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302020 ', 2, 100),
(283, 'Vessel bottom DAP-60K', 0, '', '', '', '', 'Vessel bottom DAP-60K', '<p>Vessel bottom DAP-60K made of TFM</p>\r\n', '0', 'Vessel-bottom-DAP-60K', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302212 ', 3, 100),
(284, ' DAP Transportation rack', 0, '', '', '', '', 'DAP Transportation rack\r\n', '<p>Transportation rack for max. 6 DAP-vessels, without vessels</p>\r\n', '0', 'DAP-Transportation-rack', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5304265', 2, 100),
(285, 'Consumables DAC/DAK-70/100', 0, '', '', '', '', 'Consumables\r\nDAC/DAK-70/100\r\n', '<p>Consumables for approx. 2500 digestions with DAC/DAK-70/100, consists of:<br />\r\n5x lip seal ring (5302962)<br />\r\n10x Lid DAC/DAK-70/100 (5308060)<br />\r\n7x Rupture disc DAC/DAK-70/100 (5308040)<br />\r\n50x Ring nut PEEK (5303296)</p>\r\n', '0', 'Consumables-DACDAK-70100', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5303955 ', 1, 100),
(286, 'Rupture disc DAC/DAK-70/100', 0, '', '', '', '', 'Rupture disc DAC/DAK-70/100\r\n', '<p>Rupture disc for DAC/DAK-70 and DAC/DAK-10<br />\r\nmade of Titan, 100 bar, set of 10 pcs.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Rupture-disc-DACDAK-70100', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5308040 ', 1, 100),
(287, 'Lid DAC/DAK-70 ', 0, '', '', '', '', 'Lid DAC/DAK-70 ', '<p>Lid for DAC/DAK-70 / -100, set of 5 pcs.</p>\r\n', '0', 'Lid-DACDAK-70', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5308060 ', 1, 100),
(288, 'Rupture disc DAQ10/DAC-10', 0, '', '', '', '', 'Rupture disc DAQ10/DAC-10\r\n\r\n', '<p>Rupture disc for DAQ-10 /DAC-10 made of Aluminium,<br />\r\n75 bar, set of 5 pcs.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Rupture-disc-DAQ10DAC-10', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5302450 ', 1, 100),
(289, 'Lid DAQ-10/DAC10', 0, '', '', '', '', 'Lid DAQ-10/DAC10\r\n\r\n', '<p>Lid for DAQ-10/DAC-10 made of TFM,<br />\r\nset of 4 pcs.</p>\r\n', '0', 'Lid-DAQ-10DAC10', 2, 'SpeedWave-Entry-Two-and-MWS-2', '5014414 ', 1, 100),
(292, 'Marble filling ', 0, '', '', '', '', 'Marble filling ', '<p>Marble filling for Gas washing bottle, 1.5 kg enough for one filling&nbsp;</p>\r\n', '0', 'Marble-filling', 2, 'SpeedWave-Xpert', '5014621 ', 2, 100),
(293, 'Gas washing bottle, exhaust neutralisation, incl. 1,5kg marble filling ', 0, '', '', '', '', 'Gas washing bottle, exhaust neutralisation, incl. 1,5kg marble filling ', '<p>Gas washing bottle, exhaust neutralisation, incl. 1,5kg marble filling</p>\r\n', '0', 'Gas-washing-bottle-exhaust-neutralisation-incl-15kg-marble-filling', 2, 'SpeedWave-Xpert', '5306550 ', 3, 100),
(294, 'SW-X Vent tubeSet, 1.2m', 0, '', '', '', '', 'SW-X Vent tubeSet, 1.2m\r\n\r\n', '<p>PFA vent tube for DAP-60/100 and DAK-100; 1.2m</p>\r\n', '0', 'SW-X-Vent-tubeSet-12m', 2, 'SpeedWave-Xpert', '5306093 ', 3, 100),
(295, 'SW-X Oven bottom plate', 0, '', '', '', '', 'SW-X Oven bottom plate\r\n', '<p>SW-X Oven bottom plate</p>\r\n', '0', 'SW-X-Oven-bottom-plate', 2, 'SpeedWave-Xpert', '5306081 ', 3, 100),
(296, 'SW-X turntable ring', 0, '', '', '', '', 'SW-X turntable ring', '<p>Turntable ring for DAP-60/100 and DAK-100</p>\r\n', '0', 'SW-X-turntable-ring', 2, 'SpeedWave-Xpert', '5009148 ', 3, 100),
(297, 'Consumables DAP-40', 0, '', '', '', '', 'Consumables DAP-40', '<p>Consumables for approx. 2500 digestions with DAP-40, consists of:<br />\r\n10x Lid DAP-40 (5303446)<br />\r\n4x Rupture discs DAP-40 (5303445)</p>\r\n', '0', 'Consumables-DAP-40', 2, 'SpeedWave-Xpert', '5303448 ', 3, 100),
(298, 'DAP-40 Transportation rack', 0, '', '', '', '', 'DAP-40 Transportation rack', '<p>Transportation rack for max. 8 DAP-40 vessels, without vessels</p>\r\n', '0', 'DAP-40-Transportation-rack', 2, 'SpeedWave-Xpert', '5304260 ', 3, 100),
(299, 'Rupture disc DAP40', 0, '', '', '', '', 'Rupture disc DAP40\r\n\r\n', '<p>Rupture disc for DAP-40<br />\r\nmade of aluminium, 40 bar, set of 25 pcs.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Rupture-disc-DAP40', 2, 'SpeedWave-Xpert', '5303445 ', 3, 100),
(300, 'Lid DAP-40 ', 0, '', '', '', '', 'Lid DAP-40 ', '<p>Lid for DAP-40 made of TFM, set of 10 pcs.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Lid-DAP-40', 2, 'SpeedWave-Xpert', '5303446 ', 3, 100),
(301, 'Glass-Ring OPC ', 0, '', '', '', '', 'Glass-Ring OPC ', '<p>Glass-Ring for closure caps with pressure control (OPC)</p>\r\n', '0', 'Glass-Ring-OPC', 2, 'SpeedWave-Xpert', '5303574 ', 1, 100),
(302, 'Glass prism OPC ', 0, '', '', '', '', 'Glass prism OPC ', '<p>Glass prism for closure caps with pressure control (OPC)</p>\r\n', '0', 'Glass-prism-OPC', 2, 'SpeedWave-Xpert', '5303573 ', 1, 100),
(303, 'Polarisation foil ', 0, '', '', '', '', 'Polarisation foil ', '<p>Polarisation foil for prism OPC, Set of 24 pcs.</p>\r\n', '0', 'Polarisation-foil', 2, 'SpeedWave-Xpert', '5303588 ', 2, 100),
(304, 'Cap Insert DAP-40 OPC', 0, '', '', '', '', 'Cap Insert DAP-40 OPC\r\n', '<p>Cap insert for closure caps DAP-40 with pressure control (OPC)</p>\r\n', '0', 'Cap-Insert-DAP-40-OPC', 2, 'SpeedWave-Xpert', '5303598 ', 1, 100),
(305, 'Thumbscrew OPC ', 0, '', '', '', '', 'Thumbscrew OPC ', '<p>Thumbscrew for closure caps with pressure control (OPC)</p>\r\n', '0', 'Thumbscrew-OPC', 2, 'SpeedWave-Xpert', '5303571 ', 2, 100),
(306, 'O-Ring OPC ', 0, '', '', '', '', 'O-Ring OPC ', '<p>O-Ring (25x3mm)&nbsp; for closure caps with pressure control (OPC)</p>\r\n', '0', 'O-Ring-OPC', 2, 'SpeedWave-Xpert', '5306386 ', 1, 100),
(307, 'DAP-40 Vessel complete', 0, '', '', '', '', 'DAP-40 Vessel\r\ncomplete\r\n', '<p>Complete Vessel DAP-40 consists of: Lid, Closure cap, Rupture disc and Vessel<br />\r\nbottom</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'DAP-40-Vessel-complete', 2, 'SpeedWave-Xpert', '5303270 ', 3, 100),
(308, 'Rupture disc DAP60/80/100', 0, '', '', '', '', 'Rupture disc DAP60/80/100\r\n\r\n', '<p>Standard Rupture disc for DAP-60/80/100<br />\r\nmade of aluminium, 35-40 bar, set of 25 pcs.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', 'Rupture-disc-DAP6080100', 2, 'SpeedWave-Xpert', '5014616 ', 1, 100),
(309, 'Rupture disc DAP60X. SS', 0, '', '', '', '', 'Rupture disc DAP60X. SS\r\n\r\n', '<p>Rupture disc for DAP-60, 50bar,made of SS316, set of 25 pcs.</p>\r\n', '0', 'Rupture-disc-DAP60X-SS', 2, 'SpeedWave-Xpert', '5303740 ', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_tbl`
--

CREATE TABLE IF NOT EXISTS `subscriber_tbl` (
  `subs_id` int(11) NOT NULL AUTO_INCREMENT,
  `subs_email` varchar(250) NOT NULL,
  PRIMARY KEY (`subs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
  `sparepart_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `berat` int(11) NOT NULL,
  PRIMARY KEY (`sparepart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

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
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `discount_price` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `company_name`, `npwp_no`, `npwp_address`, `contact_person`, `no_tlp`, `no_fax`, `no_hp`, `email`, `password`, `billing_address`, `shipping_address`, `act_status`, `joindate`, `discount_price`) VALUES
(9, '12312asda', '21312321', 'asdas', '', '12312', '12312', '12321321321', 'fadil.nylon@gmail.com', '2fea6c02a98d6318d44cdf150775f07a', 'asda', 'ada', 1, '2017-03-19 17:41:49', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
