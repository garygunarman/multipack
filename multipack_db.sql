-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2012 at 10:30 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `multipack_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_city`
--

CREATE TABLE IF NOT EXISTS `delivery_city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` int(11) NOT NULL DEFAULT '0',
  `city` varchar(100) NOT NULL DEFAULT '',
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=557 ;

--
-- Dumping data for table `delivery_city`
--

INSERT INTO `delivery_city` (`id`, `delivery_id`, `city`, `state`) VALUES
(1, 2, 'BANDA ACEH', 1),
(2, 2, 'BIREUN', 1),
(3, 2, 'BIANG KEUJERUEN', 1),
(4, 2, 'BLANGPIDIE', 1),
(5, 2, 'CALANG', 1),
(6, 2, 'JANTO', 1),
(7, 2, 'KOTA CANE', 1),
(8, 2, 'KREUNG GEUKEUH', 1),
(9, 2, 'KUALA SIMPANG', 1),
(10, 2, 'LANGSA', 1),
(11, 2, 'LHOKSEUMAWE', 1),
(12, 2, 'LHOKSUKOH', 1),
(13, 2, 'MEULBUOH', 1),
(14, 2, 'SABANG', 1),
(15, 2, 'SIGLI', 1),
(16, 2, 'SINABANG', 1),
(17, 2, 'SINGKIL', 1),
(18, 2, 'SUKAMAKMUR', 1),
(19, 2, 'TAKENGON', 1),
(20, 2, 'TAPAK TUAN', 1),
(21, 2, 'SUBULUSSALAM', 1),
(22, 2, 'MEREUDU', 1),
(23, 2, 'KREUENG SABEE', 1),
(24, 2, 'SIMPANG TIGA REDELON', 1),
(25, 2, 'OTHER PROV ACEH', 1),
(26, 2, 'BAGAN BATU', 2),
(27, 2, 'BAGAN SIAPI API', 2),
(28, 2, 'BANGKINANG', 2),
(29, 2, 'BENGKALIS', 2),
(30, 2, 'DUMAI', 2),
(31, 2, 'DURI', 2),
(32, 2, 'MINAS', 2),
(33, 2, 'PANGKALAN KERINCI', 2),
(34, 2, 'PASIR PANGARAYAN', 2),
(35, 2, 'PEKANBARU', 2),
(36, 2, 'PERAWANG', 2),
(37, 2, 'RENGAT', 2),
(38, 2, 'SIAK INDRAPURA', 2),
(39, 2, 'TELUK KUANTAN', 2),
(40, 2, 'TEMBILAHAN', 2),
(41, 2, 'UJUNG BATU', 2),
(42, 2, 'RUMBAI', 2),
(43, 2, 'MARPOYAN', 2),
(44, 2, 'DABO SINGKEP', 3),
(45, 2, 'BATAM', 3),
(46, 2, 'NATUNA/RANAI', 3),
(47, 2, 'TANJUNG BALAI KARIMUN', 3),
(48, 2, 'LAGOI', 3),
(49, 2, 'NONGSA', 3),
(50, 2, 'KABIL', 3),
(51, 2, 'TANJUNG PINANG', 3),
(52, 2, 'LINGGA/DAIK', 3),
(53, 2, 'TANJUNG UBAN', 3),
(54, 2, 'BANDAR SRI BINTAN', 3),
(55, 2, 'OTHER RIAU', 3),
(56, 2, 'BANGKO', 4),
(57, 2, 'JAMBI', 4),
(58, 2, 'KUALA TUNGKAL', 4),
(59, 2, 'MUARA BULIAN', 4),
(60, 2, 'MUARA BUNGKO', 4),
(61, 2, 'MUARA SABAK', 4),
(62, 2, 'MUARA TEBO', 4),
(63, 2, 'RAMBA', 4),
(64, 2, 'SAROLANGUN', 4),
(65, 2, 'SENGETI', 4),
(66, 2, 'SUNGAI PENUH', 4),
(67, 2, 'OTHER JAMBI', 4),
(68, 2, 'BALIGE', 5),
(69, 2, 'BINJAI', 5),
(70, 2, 'DOLOG SANGGUL', 5),
(71, 2, 'GUNUNG SITOLI/NIAS', 5),
(72, 2, 'KABAN JAHE', 5),
(73, 2, 'KISARAN', 5),
(74, 2, 'LAGUBOTI', 5),
(75, 2, 'LUBUK PAKAM', 5),
(76, 2, 'MEDAN', 5),
(77, 2, 'PADANG SIDEMPUAN', 5),
(78, 2, 'PANGURUPAN', 5),
(79, 2, 'PANYAMBUNGAN', 5),
(80, 2, 'PEMATANG SIANTAR', 5),
(81, 2, 'RANTAU PRAPAT', 5),
(82, 2, 'SALAK', 5),
(83, 2, 'SIBOLGA', 5),
(84, 2, 'SIBORONGGOBONG', 5),
(85, 2, 'SIDIKALANG', 5),
(86, 2, 'STABAT', 5),
(87, 2, 'TANJUNG BALAI ASAHAN', 5),
(88, 2, 'TANJUNG MORAWA', 5),
(89, 2, 'TARUTUNG', 5),
(90, 2, 'TEBING TINGGI', 5),
(91, 2, 'SEI RAMPAH', 5),
(92, 2, 'SIBUHUAN', 5),
(93, 2, 'SIPIROK', 5),
(94, 2, 'PANGKALAN BRANDAN', 5),
(95, 2, 'GUNUNG TUA', 5),
(96, 2, 'LIMAPULUH', 5),
(97, 2, 'BELAWAN', 5),
(98, 2, 'TELUK DALAM', 5),
(99, 2, 'OTHER SUMUT', 5),
(100, 2, 'BATU SANGKAR', 6),
(101, 2, 'BUKIT TINGGI', 6),
(102, 2, 'DHARMAS RAYA', 6),
(103, 2, 'KEP.PAGAI', 6),
(104, 2, 'LUBUK ALUNG', 6),
(105, 2, 'LUBUK BASUNG', 6),
(106, 2, 'LUBUK SIKAPING', 6),
(107, 2, 'SAWAH LUNTO', 6),
(108, 2, 'PADANG', 6),
(109, 2, 'PADANG PANJANG', 6),
(110, 2, 'PAINAN', 6),
(111, 2, 'PARIAMAN', 6),
(112, 2, 'PAYAKUMBUH', 6),
(113, 2, 'SOLOK', 6),
(114, 2, 'AROSUKA', 6),
(115, 2, 'TUA PEJAT', 6),
(116, 2, 'SIJUNJUNG/MUARA', 6),
(117, 2, 'SOLOK SELATAN', 6),
(118, 2, 'LIMA PULUH KOTA', 6),
(119, 2, 'PADANG PARIAMAN', 6),
(120, 2, 'OTHER SUMBAR', 6),
(121, 2, 'BATURAJA', 7),
(122, 2, 'EMPAT LAWANG', 7),
(123, 2, 'INDRALAYA', 7),
(124, 2, 'KAYU AGUNG', 7),
(125, 2, 'LAHAT', 7),
(126, 2, 'LUBUK LINGGAU', 7),
(127, 2, 'MARTA PURA', 7),
(128, 2, 'MUARA DUA', 7),
(129, 2, 'MUARA ENIM', 7),
(130, 2, 'PAGAR ALAM', 7),
(131, 2, 'PALEMBANG', 7),
(132, 2, 'BANYUASIN', 7),
(133, 2, 'PRABUMULIH', 7),
(134, 2, 'SEKAYU', 7),
(135, 2, 'SUNGAI LILIN', 7),
(136, 2, 'TANJUNG ENIM', 7),
(137, 2, 'PLAJU', 7),
(138, 2, 'MUSI RAWAS', 7),
(139, 2, 'OTHER SUMSEL', 7),
(140, 2, 'AMPLAPURA', 8),
(141, 2, 'BADUNG/MENGUWI', 8),
(142, 2, 'BANGLI', 8),
(143, 2, 'BULELENG', 8),
(144, 2, 'SINGARAJA', 8),
(145, 2, 'DENPASAR', 8),
(146, 2, 'GIANYAR UBUD', 8),
(147, 2, 'JEMBRANA/NEGARA', 8),
(148, 2, 'KLUNGKUNG/SAMARAPURA', 8),
(149, 2, 'KUTA', 8),
(150, 2, 'SANUR', 8),
(151, 2, 'NUSA DUA', 8),
(152, 2, 'TABANAN', 8),
(153, 2, 'NGURAH RAI', 8),
(154, 2, 'JIMBARAN', 8),
(155, 2, 'GILIMANUK', 8),
(156, 2, 'OTHER BALI', 8),
(157, 2, 'BELINYU', 9),
(158, 2, 'JEBUS', 9),
(159, 2, 'KELAPA', 9),
(160, 2, 'KOBA', 9),
(161, 2, 'MENTOK', 9),
(162, 2, 'PANGKAL PINANG', 9),
(163, 2, 'SUNGAI LIAT', 9),
(164, 2, 'TOBOALI', 9),
(165, 2, 'MANGGAR', 9),
(166, 2, 'BELITUNG', 9),
(167, 2, 'OTHER BANGKA BELITUNG', 9),
(168, 2, 'AGRAMAKMUR', 10),
(169, 2, 'BENGKULU', 10),
(170, 2, 'KAUR', 10),
(171, 2, 'CURUP', 10),
(172, 2, 'KEPAHYANG', 10),
(173, 2, 'LEBONG/MUARA AMAN', 10),
(174, 2, 'MANNA', 10),
(175, 2, 'MUKO MUKO', 10),
(176, 2, 'TAIS', 10),
(177, 2, 'OTHER BENGKULU', 10),
(178, 2, 'BANDAR LAMPUNG', 11),
(179, 2, 'KALIANDA', 11),
(180, 2, 'KOTA AGUNG', 11),
(181, 2, 'KOTA BUMI', 11),
(182, 2, 'MENGGALA', 11),
(183, 2, 'METRO', 11),
(184, 2, 'PRINGSEWU', 11),
(185, 2, 'LIWA', 11),
(186, 2, 'SUKADANA', 11),
(187, 2, 'GUNUNG SUGIH', 11),
(188, 2, 'BAKAUHEUNI', 11),
(189, 2, 'GEDONG TATAAN', 11),
(190, 2, 'BLAMBANGAN UMPU', 11),
(191, 2, 'BANDAR JAYA', 11),
(192, 2, 'BUKIT KEMUNING', 11),
(193, 2, 'KRUI', 11),
(194, 2, 'SUMBER JAYA', 11),
(195, 2, 'TALANG PADANG', 11),
(196, 2, 'OTHER LAMPUNG', 11),
(197, 2, 'BOGOR', 12),
(198, 2, 'CIBINONG', 12),
(199, 2, 'BEKASI', 12),
(200, 2, 'CIKARANG', 12),
(201, 2, 'DEPOK', 12),
(202, 2, 'KARAWANG', 12),
(203, 2, 'CIKAMPEK', 12),
(204, 2, 'CILEGON', 13),
(205, 2, 'RANGKAS BITUNG', 13),
(206, 2, 'SERANG', 13),
(207, 2, 'PANDEGLANG', 13),
(208, 2, 'MERAK', 13),
(209, 2, 'BALARAJA', 13),
(210, 2, 'BANDARA', 13),
(211, 2, 'SERPONG', 13),
(212, 2, 'TANGERANG', 13),
(213, 2, 'TIGARAKSA', 13),
(214, 2, 'OTHER BANTEN', 13),
(215, 2, 'SUKABUMI', 14),
(216, 2, 'CIANJUR', 14),
(217, 2, 'CIREBON', 14),
(218, 2, 'INDRAMAYU', 14),
(219, 2, 'KUNINGAN', 14),
(220, 2, 'MAJALENGKA', 14),
(221, 2, 'JATIBARANG', 14),
(222, 2, 'KADIPATEN', 14),
(223, 2, 'LOSARI', 14),
(224, 2, 'PALIMANAN', 14),
(225, 2, 'JATIWANGI', 14),
(226, 2, 'SUMBER', 14),
(227, 2, 'BANDUNG', 14),
(228, 2, 'BANJAR', 14),
(229, 2, 'CIAMIS', 14),
(230, 2, 'CIMAHI', 14),
(231, 2, 'GARUT', 14),
(232, 2, 'PURWAKARTA', 14),
(233, 2, 'SUBANG', 14),
(234, 2, 'SUMEDANG', 14),
(235, 2, 'TASIKMALAYA', 14),
(236, 2, 'CIMAREHE', 14),
(237, 2, 'SOREANG', 14),
(238, 2, 'SINGAPARNA', 14),
(239, 2, 'JATINANGOR', 14),
(240, 2, 'PADALARANG', 14),
(241, 2, 'RANCAEKEK', 14),
(242, 2, 'MAJALAYA', 14),
(243, 2, 'LEMBANG', 14),
(244, 2, 'OTHER JAWA BARAT', 14),
(245, 2, 'CILACAP', 15),
(246, 2, 'MAJENANG', 15),
(247, 2, 'BOYOLALI', 15),
(248, 2, 'KARANG ANYAR', 15),
(249, 2, 'KLATEN', 15),
(250, 2, 'SOLO', 15),
(251, 2, 'SRAGEN', 15),
(252, 2, 'SUKOHARJO', 15),
(253, 2, 'WONOGIRI', 15),
(254, 2, 'KARTOSURO', 15),
(255, 2, 'AMBARAWA', 15),
(256, 2, 'AJIBARANG', 15),
(257, 2, 'BANJARNEGARA', 15),
(258, 2, 'BANYUMAS', 15),
(259, 2, 'BATANG BLORA', 15),
(260, 2, 'BOJONEGORO', 15),
(261, 2, 'BREBES', 15),
(262, 2, 'BUMIAYU', 15),
(263, 2, 'CEPU', 15),
(264, 2, 'DEMAK', 15),
(265, 2, 'GROBONGAN', 15),
(266, 2, 'JEPARA', 15),
(267, 2, 'KENDAL', 15),
(268, 2, 'KUDUS', 15),
(269, 2, 'PATI', 15),
(270, 2, 'PEKALONGAN', 15),
(271, 2, 'PEMALANG', 15),
(272, 2, 'PURBALINGGA', 15),
(273, 2, 'PURWODADI', 15),
(274, 2, 'PURWOKERTO', 15),
(275, 2, 'REMBANG', 15),
(276, 2, 'SALATIGA', 15),
(277, 2, 'SEMARANG', 15),
(278, 2, 'SLAWI', 15),
(279, 2, 'TEGAL', 15),
(280, 2, 'UNGARAN', 15),
(281, 2, 'KEBUMEN', 15),
(282, 2, 'MAGELANG', 15),
(283, 2, 'PURWOREJO', 15),
(284, 2, 'TEMANGGUNG', 15),
(285, 2, 'WONOSOBO', 15),
(286, 2, 'MUNGKID', 15),
(287, 2, 'OTHER JATENG', 15),
(288, 2, 'BANTUL', 16),
(289, 2, 'D.I YOGYAKARTA', 16),
(290, 2, 'KULON PROGO', 16),
(291, 2, 'WATES', 16),
(292, 2, 'SLEMAN', 16),
(293, 2, 'WONOSARI', 16),
(294, 2, 'PRAMBANAN', 16),
(295, 2, 'OTHER JOGJAKARTA', 16),
(296, 2, 'BANGKALAN', 17),
(297, 2, 'GRESIK', 17),
(298, 2, 'JOMBANG', 17),
(299, 2, 'LAMONGAN', 17),
(300, 2, 'NGANJUK', 17),
(301, 2, 'PAMEKASAN', 17),
(302, 2, 'SAMPANG', 17),
(303, 2, 'SIDOARJO', 17),
(304, 2, 'SUMENEP', 17),
(305, 2, 'SURABAYA', 17),
(306, 2, 'TRENGGALEK', 17),
(307, 2, 'TUBAN', 17),
(308, 2, 'TULUNG AGUNG', 17),
(309, 2, 'PANDAAN', 17),
(310, 2, 'PASURUAN', 17),
(311, 2, 'JEMBER', 17),
(312, 2, 'BANYUWANGI', 17),
(313, 2, 'BONDOWOSO', 17),
(314, 2, 'PROBOLINGGO', 17),
(315, 2, 'LUMAJANG', 17),
(316, 2, 'SITOBUNDO', 17),
(317, 2, 'KRAKSAAN', 17),
(318, 2, 'PAITON', 17),
(319, 2, 'MALANG', 17),
(320, 2, 'BATU', 17),
(321, 2, 'BLITAR', 17),
(322, 2, 'KEPANJEN', 17),
(323, 2, 'SINGOSARI', 17),
(324, 2, 'MOJOKERTO', 17),
(325, 2, 'KENDIRI', 17),
(326, 2, 'MADIUN', 17),
(327, 2, 'CARUBAN', 17),
(328, 2, 'MAGETAN', 17),
(329, 2, 'NGAWI', 17),
(330, 2, 'PACITAN', 17),
(331, 2, 'PONOROGO', 17),
(332, 2, 'OTHER JATIM', 17),
(333, 2, 'BENGKAYANG', 18),
(334, 2, 'KETAPANG', 18),
(335, 2, 'MEMPAWAH', 18),
(336, 2, 'NANGAH PINOH/MELAWI', 18),
(337, 2, 'NGABANG', 18),
(338, 2, 'PONTIANAK', 18),
(339, 2, 'PUTUS SIBAU', 18),
(340, 2, 'SAMBAS', 18),
(341, 2, 'SANGGAU', 18),
(342, 2, 'SEKADAU', 18),
(343, 2, 'SINGKAWANG', 18),
(344, 2, 'SINTANG', 18),
(345, 2, 'KUBU RAYA/SUNGAI RAYA', 18),
(346, 2, 'KAYONG UTARA', 18),
(347, 2, 'WAJOK', 18),
(348, 2, 'OTHER KALIMANTAN BARAT', 18),
(349, 2, 'AMUNTAI', 19),
(350, 2, 'BALANGAN/PARINGIN', 19),
(351, 2, 'BANJAR/MARTAPURA', 19),
(352, 2, 'BANJARMASIN', 19),
(353, 2, 'BARABAI', 19),
(354, 2, 'BATU LICIN', 19),
(355, 2, 'BUNTOK/BARITO SEL', 19),
(356, 2, 'KANDANGAN', 19),
(357, 2, 'KOTA BARU', 19),
(358, 2, 'MARABAHAN', 19),
(359, 2, 'MUARA TEWEH', 19),
(360, 2, 'PELEIHARI', 19),
(361, 2, 'PURUKCAHU', 19),
(362, 2, 'RANTAU', 19),
(363, 2, 'SUNGAI DANAU', 19),
(364, 2, 'TAMIANGLAYANG', 19),
(365, 2, 'TANJUNG', 19),
(366, 2, 'BANJAR BARU', 19),
(367, 2, 'OTHER KALIMANTAN SELATAN', 19),
(368, 2, 'KASONGAN', 20),
(369, 2, 'KUALA KAPUAS', 20),
(370, 2, 'KUALA KURUN', 20),
(371, 2, 'KUALA PEMBUANG', 20),
(372, 2, 'LAMANDAU/NANGEBULIK', 20),
(373, 2, 'PALANGKARAYA', 20),
(374, 2, 'PANGKALAN BUN', 20),
(375, 2, 'PULAU PISAU', 20),
(376, 2, 'SAMPIT', 20),
(377, 2, 'SUKAMARA', 20),
(378, 2, 'BUNTOK', 20),
(379, 2, 'OTHER KALIMANTAN TENGAH', 20),
(380, 2, 'BALIKPAPAN', 21),
(381, 2, 'PANAJAM', 21),
(382, 2, 'TANAH GROGOT', 21),
(383, 2, 'TANJUNG REDEP/BERAU', 21),
(384, 2, 'KUTAI PANTAI/SENIPAH/HANDIL', 21),
(385, 2, 'SENDAWAR', 21),
(386, 2, 'ANGGANA', 21),
(387, 2, 'KUTAI BARAT', 21),
(388, 2, 'LOA KULU', 21),
(389, 2, 'MUARA BADAK', 21),
(390, 2, 'PALARAN', 21),
(391, 2, 'SAMARINDA', 21),
(392, 2, 'SANGA SANGA', 21),
(393, 2, 'TENGGARONG/ KUTAI KERTANI', 21),
(394, 2, 'BONTANG', 21),
(395, 2, 'TELUK PANDAN', 21),
(396, 2, 'SANGATA', 21),
(397, 2, 'TARAKAN', 21),
(398, 2, 'TANJUNG SELOR', 21),
(399, 2, 'MALINAU', 21),
(400, 2, 'NUNUKAN', 21),
(401, 2, 'SEBATIK', 21),
(402, 2, 'OTHER KALIMANTAN TIMUR', 21),
(403, 2, 'KEPULAUAN BANGGAI', 22),
(404, 2, 'BUAL', 22),
(405, 2, 'DONGGALA/BANAWA', 22),
(406, 2, 'LUWUK', 22),
(407, 2, 'MOROWALI/KOLONEDALE', 22),
(408, 2, 'PALU', 22),
(409, 2, 'PERIGI', 22),
(410, 2, 'POSO', 22),
(411, 2, 'TOJO UNA UNA/AMPANA', 22),
(412, 2, 'TOLI TOLI', 22),
(413, 2, 'OTHER SULAWESI TENGAH', 22),
(414, 2, 'BANTA ENG', 23),
(415, 2, 'BARRU', 23),
(416, 2, 'WATAMPONE', 23),
(417, 2, 'BULUKUMBA', 23),
(418, 2, 'ENREKANG', 23),
(419, 2, 'SUNGGUMINASA', 23),
(420, 2, 'JENE PONTO', 23),
(421, 2, 'MAKALE', 23),
(422, 2, 'MAKASAR', 23),
(423, 2, 'MAROS', 23),
(424, 2, 'MASAMBA', 23),
(425, 2, 'PALOPO', 23),
(426, 2, 'PARE-PARE', 23),
(427, 2, 'PINRANG', 23),
(428, 2, 'BENTENG', 23),
(429, 2, 'SENGKANG', 23),
(430, 2, 'SUNDENRENG RAPPANG', 23),
(431, 2, 'SINJAI', 23),
(432, 2, 'WATANSOMPENG', 23),
(433, 2, 'SOROAKO', 23),
(434, 2, 'MALILI', 23),
(435, 2, 'TAKALAR', 23),
(436, 2, 'BELOPA', 23),
(437, 2, 'OTHER SULAWESI SELATAN', 23),
(438, 2, 'MAJENE', 24),
(439, 2, 'MAMASA', 24),
(440, 2, 'MAMUJU', 24),
(441, 2, 'PASANGKAYU', 24),
(442, 2, 'POLEWALI', 24),
(443, 2, 'OTHER SULAWESI  BARAT', 24),
(444, 2, 'ANDOLO', 25),
(445, 2, 'BAU-BAU', 25),
(446, 2, 'RUMBIA', 25),
(447, 2, 'KENDARI', 25),
(448, 2, 'KOLAKA', 25),
(449, 2, 'LASU SUA', 25),
(450, 2, 'RAHA', 25),
(451, 2, 'UNAAHA', 25),
(452, 2, 'WAKATOBI/WANGI WANGI', 25),
(453, 2, 'PASAR WAJO', 25),
(454, 2, 'MALUKU', 25),
(455, 2, 'AMBON', 25),
(456, 2, 'DOBO', 25),
(457, 2, 'HUNIMOA', 25),
(458, 2, 'PIRU', 25),
(459, 2, 'MASOHI', 25),
(460, 2, 'NAMLEA', 25),
(461, 2, 'SAUMLAKI/TUAL', 25),
(462, 2, 'JAILOLO', 25),
(463, 2, 'LABUHA', 25),
(464, 2, 'MABA', 25),
(465, 2, 'SANANA', 25),
(466, 2, 'WEDA/SOASIU', 25),
(467, 2, 'TERNATE', 25),
(468, 2, 'TOBELO', 25),
(469, 2, 'TIDORE', 25),
(470, 2, 'OTHER SULAWESI TENGGARA', 25),
(471, 2, 'TILAMUTA', 26),
(472, 2, 'SUWAWA', 26),
(473, 2, 'GORONTALO', 26),
(474, 2, 'LIMBOTO', 26),
(475, 2, 'MARISA', 26),
(476, 2, 'KWANDANG', 26),
(477, 2, 'OTHER GORONTALO', 26),
(478, 2, 'AMURANG', 27),
(479, 2, 'BITUNG', 27),
(480, 2, 'KOTAMOBAGU', 27),
(481, 2, 'MANADO', 27),
(482, 2, 'AIRMADIDI', 27),
(483, 2, 'TAHUNA', 27),
(484, 2, 'TOMOHON', 27),
(485, 2, 'TONDANO', 27),
(486, 2, 'RATAHAN', 27),
(487, 2, 'BOROKO', 27),
(488, 2, 'OTHER SULAWESI UTARA', 27),
(489, 2, 'BIMA', 28),
(490, 2, 'BATU HIJAU', 28),
(491, 2, 'RAMBA/WOHA', 28),
(492, 2, 'DOMPU', 28),
(493, 2, 'GERUNG', 28),
(494, 2, 'MATARAM', 28),
(495, 2, 'PRAYA', 28),
(496, 2, 'SELONG', 28),
(497, 2, 'SEMBAWA-BESAR', 28),
(498, 2, 'TALIWANG', 28),
(499, 2, 'OTHER NTB', 28),
(500, 2, 'KALABAHI', 29),
(501, 2, 'ATAMBUA', 29),
(502, 2, 'ROTE NDAO', 29),
(503, 2, 'BAJAWA', 29),
(504, 2, 'ENDE', 29),
(505, 2, 'KAFEMENAHU', 29),
(506, 2, 'KUPANG', 29),
(507, 2, 'LABUAN BAJO', 29),
(508, 2, 'LARANTUKA', 29),
(509, 2, 'LEWOLEBA', 29),
(510, 2, 'MAUMERE', 29),
(511, 2, 'MANGGARAI/SOE', 29),
(512, 2, 'WAIKABUBAK', 29),
(513, 2, 'WAINGAPU', 29),
(514, 2, 'BORONG', 29),
(515, 2, 'MBAY', 29),
(516, 2, 'OELAMASI', 29),
(517, 2, 'TAMBOLAKA', 29),
(518, 2, 'WAIBAKUL', 29),
(519, 2, 'OTHER NTT', 29),
(520, 2, 'AGATS', 30),
(521, 2, 'BIAK', 30),
(522, 2, 'JAYAPURA', 30),
(523, 2, 'WARIS', 30),
(524, 2, 'MAAPI', 30),
(525, 2, 'MERAUKE', 30),
(526, 2, 'MULIA', 30),
(527, 2, 'NABIRE', 30),
(528, 2, 'OKSIBIL', 30),
(529, 2, 'PANIAI', 30),
(530, 2, 'SARMI', 30),
(531, 2, 'SORENDIWARI', 30),
(532, 2, 'KARUBAGA', 30),
(533, 2, 'WAMENA', 30),
(534, 2, 'BOTWA/MAROPEN', 30),
(535, 2, 'SUMOHAI', 30),
(536, 2, 'YAPEN WAROPEN', 30),
(537, 2, 'SENTANI', 30),
(538, 2, 'MAMBERAMO', 30),
(539, 2, 'BOVEN DIGUL', 30),
(540, 2, 'OTHER PAPUA', 30),
(541, 2, 'FAK-FAK', 31),
(542, 2, 'KAIMANA', 31),
(543, 2, 'MANOKWARI', 31),
(544, 2, 'RAJA AMPAT/WAISAI', 31),
(545, 2, 'SORONG', 31),
(546, 2, 'BINTUNI', 31),
(547, 2, 'SORONG SEL', 31),
(548, 2, 'RASEI', 31),
(549, 2, 'OTHER PAPUA BARAT', 31),
(550, 2, 'TIMIKA', 31),
(551, 2, 'TEMBAGA PURA', 31),
(552, 2, 'OTHER TIMIKA', 31),
(553, 2, 'DKI JAKARTA', 12),
(554, 2, 'AMBIL DI TEMPAT', 32);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_cost`
--

CREATE TABLE IF NOT EXISTS `delivery_cost` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_city_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT '',
  `cost` int(11) NOT NULL DEFAULT '0',
  `express_cost` int(11) NOT NULL,
  `weight` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=555 ;

--
-- Dumping data for table `delivery_cost`
--

INSERT INTO `delivery_cost` (`id`, `delivery_city_id`, `type`, `cost`, `express_cost`, `weight`) VALUES
(1, 1, 'Baju / Kaos', 29500, 0, 1),
(2, 2, 'Baju / Kaos', 25400, 0, 1),
(3, 3, 'Baju / Kaos', 40500, 0, 1),
(4, 4, 'Baju / Kaos', 49500, 0, 1),
(5, 5, 'Baju / Kaos', 45000, 0, 1),
(6, 6, 'Baju / Kaos', 28400, 0, 1),
(7, 7, 'Baju / Kaos', 35500, 0, 1),
(8, 8, 'Baju / Kaos', 28400, 0, 1),
(9, 9, 'Baju / Kaos', 28400, 0, 1),
(10, 10, 'Baju / Kaos', 25400, 0, 1),
(11, 11, 'Baju / Kaos', 25400, 0, 1),
(12, 12, 'Baju / Kaos', 28400, 0, 1),
(13, 13, 'Baju / Kaos', 25400, 0, 1),
(14, 14, 'Baju / Kaos', 28400, 0, 1),
(15, 15, 'Baju / Kaos', 28400, 0, 1),
(16, 16, 'Baju / Kaos', 35500, 0, 1),
(17, 17, 'Baju / Kaos', 35500, 0, 1),
(18, 18, 'Baju / Kaos', 35500, 0, 1),
(19, 19, 'Baju / Kaos', 35500, 0, 1),
(20, 20, 'Baju / Kaos', 35500, 0, 1),
(21, 21, 'Baju / Kaos', 28400, 0, 1),
(22, 22, 'Baju / Kaos', 28400, 0, 1),
(23, 23, 'Baju / Kaos', 28400, 0, 1),
(24, 24, 'Baju / Kaos', 28400, 0, 1),
(25, 25, 'Baju / Kaos', 50600, 0, 1),
(26, 26, 'Baju / Kaos', 48000, 0, 1),
(27, 27, 'Baju / Kaos', 38000, 0, 1),
(28, 28, 'Baju / Kaos', 36500, 0, 1),
(29, 29, 'Baju / Kaos', 35000, 0, 1),
(30, 30, 'Baju / Kaos', 29500, 0, 1),
(31, 31, 'Baju / Kaos', 29500, 0, 1),
(32, 32, 'Baju / Kaos', 18300, 0, 1),
(33, 33, 'Baju / Kaos', 25400, 0, 1),
(34, 34, 'Baju / Kaos', 25400, 0, 1),
(35, 35, 'Baju / Kaos', 9200, 0, 1),
(36, 36, 'Baju / Kaos', 25400, 0, 1),
(37, 37, 'Baju / Kaos', 20300, 0, 1),
(38, 38, 'Baju / Kaos', 30400, 0, 1),
(39, 39, 'Baju / Kaos', 25400, 0, 1),
(40, 40, 'Baju / Kaos', 20300, 0, 1),
(41, 41, 'Baju / Kaos', 25400, 0, 1),
(42, 42, 'Baju / Kaos', 15300, 0, 1),
(43, 43, 'Baju / Kaos', 15300, 0, 1),
(44, 44, 'Baju / Kaos', 60000, 0, 1),
(45, 45, 'Baju / Kaos', 20500, 0, 1),
(46, 46, 'Baju / Kaos', 31500, 0, 1),
(47, 47, 'Baju / Kaos', 15300, 0, 1),
(48, 48, 'Baju / Kaos', 31500, 0, 1),
(49, 49, 'Baju / Kaos', 11300, 0, 1),
(50, 50, 'Baju / Kaos', 11300, 0, 1),
(51, 51, 'Baju / Kaos', 12300, 0, 1),
(52, 52, 'Baju / Kaos', 30400, 0, 1),
(53, 53, 'Baju / Kaos', 21400, 0, 1),
(54, 54, 'Baju / Kaos', 32000, 0, 1),
(55, 55, 'Baju / Kaos', 40500, 0, 1),
(56, 56, 'Baju / Kaos', 48000, 0, 1),
(57, 57, 'Baju / Kaos', 17000, 0, 1),
(58, 58, 'Baju / Kaos', 17300, 0, 1),
(59, 59, 'Baju / Kaos', 11300, 0, 1),
(60, 60, 'Baju / Kaos', 16300, 0, 1),
(61, 61, 'Baju / Kaos', 65800, 0, 1),
(62, 62, 'Baju / Kaos', 17300, 0, 1),
(63, 63, 'Baju / Kaos', 65800, 0, 1),
(64, 64, 'Baju / Kaos', 17300, 0, 1),
(65, 65, 'Baju / Kaos', 65800, 0, 1),
(66, 66, 'Baju / Kaos', 17300, 0, 1),
(67, 67, 'Baju / Kaos', 80900, 0, 1),
(68, 68, 'Baju / Kaos', 47500, 0, 1),
(69, 69, 'Baju / Kaos', 33500, 0, 1),
(70, 70, 'Baju / Kaos', 35500, 0, 1),
(71, 71, 'Baju / Kaos', 35500, 0, 1),
(72, 72, 'Baju / Kaos', 15300, 0, 1),
(73, 73, 'Baju / Kaos', 15300, 0, 1),
(74, 74, 'Baju / Kaos', 35500, 0, 1),
(75, 75, 'Baju / Kaos', 13300, 0, 1),
(76, 76, 'Baju / Kaos', 9200, 0, 1),
(77, 77, 'Baju / Kaos', 18300, 0, 1),
(78, 78, 'Baju / Kaos', 35500, 0, 1),
(79, 79, 'Baju / Kaos', 35500, 0, 1),
(80, 80, 'Baju / Kaos', 18300, 0, 1),
(81, 81, 'Baju / Kaos', 24900, 0, 1),
(82, 82, 'Baju / Kaos', 35500, 0, 1),
(83, 83, 'Baju / Kaos', 20300, 0, 1),
(84, 84, 'Baju / Kaos', 35500, 0, 1),
(85, 85, 'Baju / Kaos', 23400, 0, 1),
(86, 86, 'Baju / Kaos', 20300, 0, 1),
(87, 87, 'Baju / Kaos', 20300, 0, 1),
(88, 88, 'Baju / Kaos', 20300, 0, 1),
(89, 89, 'Baju / Kaos', 25400, 0, 1),
(90, 90, 'Baju / Kaos', 17300, 0, 1),
(91, 91, 'Baju / Kaos', 35500, 0, 1),
(92, 92, 'Baju / Kaos', 35500, 0, 1),
(93, 93, 'Baju / Kaos', 35500, 0, 1),
(94, 94, 'Baju / Kaos', 15300, 0, 1),
(95, 95, 'Baju / Kaos', 20300, 0, 1),
(96, 96, 'Baju / Kaos', 20300, 0, 1),
(97, 97, 'Baju / Kaos', 23500, 0, 1),
(98, 98, 'Baju / Kaos', 35500, 0, 1),
(99, 99, 'Baju / Kaos', 44600, 0, 1),
(100, 100, 'Baju / Kaos', 23500, 0, 1),
(101, 101, 'Baju / Kaos', 29000, 0, 1),
(102, 102, 'Baju / Kaos', 56500, 0, 1),
(103, 103, 'Baju / Kaos', 35500, 0, 1),
(104, 104, 'Baju / Kaos', 17300, 0, 1),
(105, 105, 'Baju / Kaos', 20300, 0, 1),
(106, 106, 'Baju / Kaos', 17300, 0, 1),
(107, 107, 'Baju / Kaos', 17300, 0, 1),
(108, 108, 'Baju / Kaos', 9200, 0, 1),
(109, 109, 'Baju / Kaos', 12300, 0, 1),
(110, 110, 'Baju / Kaos', 16300, 0, 1),
(111, 111, 'Baju / Kaos', 16300, 0, 1),
(112, 112, 'Baju / Kaos', 12300, 0, 1),
(113, 113, 'Baju / Kaos', 12300, 0, 1),
(114, 114, 'Baju / Kaos', 28000, 0, 1),
(115, 115, 'Baju / Kaos', 30400, 0, 1),
(116, 116, 'Baju / Kaos', 30400, 0, 1),
(117, 117, 'Baju / Kaos', 30400, 0, 1),
(118, 118, 'Baju / Kaos', 16300, 0, 1),
(119, 119, 'Baju / Kaos', 16300, 0, 1),
(120, 120, 'Baju / Kaos', 45600, 0, 1),
(121, 121, 'Baju / Kaos', 28500, 0, 1),
(122, 122, 'Baju / Kaos', 51000, 0, 1),
(123, 123, 'Baju / Kaos', 10200, 0, 1),
(124, 124, 'Baju / Kaos', 10200, 0, 1),
(125, 125, 'Baju / Kaos', 15300, 0, 1),
(126, 126, 'Baju / Kaos', 12300, 0, 1),
(127, 127, 'Baju / Kaos', 17300, 0, 1),
(128, 128, 'Baju / Kaos', 17300, 0, 1),
(129, 129, 'Baju / Kaos', 15300, 0, 1),
(130, 130, 'Baju / Kaos', 17300, 0, 1),
(131, 131, 'Baju / Kaos', 5200, 0, 1),
(132, 132, 'Baju / Kaos', 33500, 0, 1),
(133, 133, 'Baju / Kaos', 10200, 0, 1),
(134, 134, 'Baju / Kaos', 15300, 0, 1),
(135, 135, 'Baju / Kaos', 17300, 0, 1),
(136, 136, 'Baju / Kaos', 13300, 0, 1),
(137, 137, 'Baju / Kaos', 15300, 0, 1),
(138, 138, 'Baju / Kaos', 25400, 0, 1),
(139, 139, 'Baju / Kaos', 32500, 0, 1),
(140, 140, 'Baju / Kaos', 40000, 0, 1),
(141, 141, 'Baju / Kaos', 23500, 0, 1),
(142, 142, 'Baju / Kaos', 24500, 0, 1),
(143, 143, 'Baju / Kaos', 26500, 0, 1),
(144, 144, 'Baju / Kaos', 17300, 0, 1),
(145, 145, 'Baju / Kaos', 17000, 0, 1),
(146, 146, 'Baju / Kaos', 23500, 0, 1),
(147, 147, 'Baju / Kaos', 15300, 0, 1),
(148, 148, 'Baju / Kaos', 9200, 0, 1),
(149, 149, 'Baju / Kaos', 18000, 0, 1),
(150, 150, 'Baju / Kaos', 5200, 0, 1),
(151, 151, 'Baju / Kaos', 19000, 0, 1),
(152, 152, 'Baju / Kaos', 15300, 0, 1),
(153, 153, 'Baju / Kaos', 5200, 0, 1),
(154, 154, 'Baju / Kaos', 5200, 0, 1),
(155, 155, 'Baju / Kaos', 15300, 0, 1),
(156, 156, 'Baju / Kaos', 23400, 0, 1),
(157, 157, 'Baju / Kaos', 30500, 0, 1),
(158, 158, 'Baju / Kaos', 17300, 0, 1),
(159, 159, 'Baju / Kaos', 17300, 0, 1),
(160, 160, 'Baju / Kaos', 17300, 0, 1),
(161, 161, 'Baju / Kaos', 17300, 0, 1),
(162, 162, 'Baju / Kaos', 9200, 0, 1),
(163, 163, 'Baju / Kaos', 11300, 0, 1),
(164, 164, 'Baju / Kaos', 17300, 0, 1),
(165, 165, 'Baju / Kaos', 17300, 0, 1),
(166, 166, 'Baju / Kaos', 23500, 0, 1),
(167, 167, 'Baju / Kaos', 23400, 0, 1),
(168, 168, 'Baju / Kaos', 26500, 0, 1),
(169, 169, 'Baju / Kaos', 19000, 0, 1),
(170, 170, 'Baju / Kaos', 20300, 0, 1),
(171, 171, 'Baju / Kaos', 32500, 0, 1),
(172, 172, 'Baju / Kaos', 20300, 0, 1),
(173, 173, 'Baju / Kaos', 20300, 0, 1),
(174, 174, 'Baju / Kaos', 20300, 0, 1),
(175, 175, 'Baju / Kaos', 20300, 0, 1),
(176, 176, 'Baju / Kaos', 20300, 0, 1),
(177, 177, 'Baju / Kaos', 16400, 0, 1),
(178, 178, 'Baju / Kaos', 14500, 0, 1),
(179, 179, 'Baju / Kaos', 11300, 0, 1),
(180, 180, 'Baju / Kaos', 13300, 0, 1),
(181, 181, 'Baju / Kaos', 25400, 0, 1),
(182, 182, 'Baju / Kaos', 12300, 0, 1),
(183, 183, 'Baju / Kaos', 12300, 0, 1),
(184, 184, 'Baju / Kaos', 12300, 0, 1),
(185, 185, 'Baju / Kaos', 12300, 0, 1),
(186, 186, 'Baju / Kaos', 12300, 0, 1),
(187, 187, 'Baju / Kaos', 12300, 0, 1),
(188, 188, 'Baju / Kaos', 33500, 0, 1),
(189, 189, 'Baju / Kaos', 15300, 0, 1),
(190, 190, 'Baju / Kaos', 15300, 0, 1),
(191, 191, 'Baju / Kaos', 30000, 0, 1),
(192, 192, 'Baju / Kaos', 32000, 0, 1),
(193, 193, 'Baju / Kaos', 25400, 0, 1),
(194, 194, 'Baju / Kaos', 25400, 0, 1),
(195, 195, 'Baju / Kaos', 15300, 0, 1),
(196, 196, 'Baju / Kaos', 32500, 0, 1),
(197, 197, 'Baju / Kaos', 9500, 0, 1),
(198, 198, 'Baju / Kaos', 17000, 0, 1),
(199, 199, 'Baju / Kaos', 9500, 0, 1),
(200, 200, 'Baju / Kaos', 8000, 0, 1),
(201, 201, 'Baju / Kaos', 17500, 0, 1),
(202, 202, 'Baju / Kaos', 10000, 0, 1),
(203, 203, 'Baju / Kaos', 11500, 0, 1),
(204, 204, 'Baju / Kaos', 7500, 0, 1),
(205, 205, 'Baju / Kaos', 2200, 0, 1),
(206, 206, 'Baju / Kaos', 10000, 0, 1),
(207, 207, 'Baju / Kaos', 10000, 0, 1),
(208, 208, 'Baju / Kaos', 10000, 0, 1),
(209, 209, 'Baju / Kaos', 7500, 0, 1),
(210, 210, 'Baju / Kaos', 15000, 0, 1),
(211, 211, 'Baju / Kaos', 5000, 0, 1),
(212, 212, 'Baju / Kaos', 5000, 0, 1),
(213, 213, 'Baju / Kaos', 7000, 0, 1),
(214, 214, 'Baju / Kaos', 2200, 0, 1),
(215, 215, 'Baju / Kaos', 10000, 0, 1),
(216, 216, 'Baju / Kaos', 11000, 0, 1),
(217, 217, 'Baju / Kaos', 9000, 0, 1),
(218, 218, 'Baju / Kaos', 15000, 0, 1),
(219, 219, 'Baju / Kaos', 6000, 0, 1),
(220, 220, 'Baju / Kaos', 4200, 0, 1),
(221, 221, 'Baju / Kaos', 4200, 0, 1),
(222, 222, 'Baju / Kaos', 4200, 0, 1),
(223, 223, 'Baju / Kaos', 4200, 0, 1),
(224, 224, 'Baju / Kaos', 4200, 0, 1),
(225, 225, 'Baju / Kaos', 4200, 0, 1),
(226, 226, 'Baju / Kaos', 4200, 0, 1),
(227, 227, 'Baju / Kaos', 15000, 0, 1),
(228, 228, 'Baju / Kaos', 33000, 0, 1),
(229, 229, 'Baju / Kaos', 13500, 0, 1),
(230, 230, 'Baju / Kaos', 15000, 0, 1),
(231, 231, 'Baju / Kaos', 15000, 0, 1),
(232, 232, 'Baju / Kaos', 10000, 0, 1),
(233, 233, 'Baju / Kaos', 10000, 0, 1),
(234, 234, 'Baju / Kaos', 0, 0, 1),
(235, 235, 'Baju / Kaos', 15000, 0, 1),
(236, 236, 'Baju / Kaos', 15000, 0, 1),
(237, 237, 'Baju / Kaos', 10000, 0, 1),
(238, 238, 'Baju / Kaos', 2200, 0, 1),
(239, 239, 'Baju / Kaos', 10000, 0, 1),
(240, 240, 'Baju / Kaos', 14000, 0, 1),
(241, 241, 'Baju / Kaos', 10000, 0, 1),
(242, 242, 'Baju / Kaos', 15000, 0, 1),
(243, 243, 'Baju / Kaos', 15000, 0, 1),
(244, 244, 'Baju / Kaos', 7200, 0, 1),
(245, 245, 'Baju / Kaos', 13000, 0, 1),
(246, 246, 'Baju / Kaos', 7200, 0, 1),
(247, 247, 'Baju / Kaos', 22500, 0, 1),
(248, 248, 'Baju / Kaos', 8200, 0, 1),
(249, 249, 'Baju / Kaos', 8200, 0, 1),
(250, 250, 'Baju / Kaos', 8200, 0, 1),
(251, 251, 'Baju / Kaos', 8200, 0, 1),
(252, 252, 'Baju / Kaos', 8200, 0, 1),
(253, 253, 'Baju / Kaos', 8200, 0, 1),
(254, 254, 'Baju / Kaos', 8200, 0, 1),
(255, 255, 'Baju / Kaos', 17000, 0, 1),
(256, 256, 'Baju / Kaos', 23500, 0, 1),
(257, 257, 'Baju / Kaos', 20000, 0, 1),
(258, 258, 'Baju / Kaos', 18500, 0, 1),
(259, 259, 'Baju / Kaos', 20000, 0, 1),
(260, 260, 'Baju / Kaos', 26000, 0, 1),
(261, 261, 'Baju / Kaos', 24000, 0, 1),
(262, 262, 'Baju / Kaos', 28000, 0, 1),
(263, 263, 'Baju / Kaos', 23500, 0, 1),
(264, 264, 'Baju / Kaos', 20000, 0, 1),
(265, 265, 'Baju / Kaos', 8200, 0, 1),
(266, 266, 'Baju / Kaos', 8200, 0, 1),
(267, 267, 'Baju / Kaos', 8200, 0, 1),
(268, 268, 'Baju / Kaos', 17000, 0, 1),
(269, 269, 'Baju / Kaos', 6200, 0, 1),
(270, 270, 'Baju / Kaos', 9200, 0, 1),
(271, 271, 'Baju / Kaos', 10200, 0, 1),
(272, 272, 'Baju / Kaos', 9200, 0, 1),
(273, 273, 'Baju / Kaos', 8200, 0, 1),
(274, 274, 'Baju / Kaos', 10200, 0, 1),
(275, 275, 'Baju / Kaos', 12200, 0, 1),
(276, 276, 'Baju / Kaos', 7200, 0, 1),
(277, 277, 'Baju / Kaos', 2200, 0, 1),
(278, 278, 'Baju / Kaos', 12300, 0, 1),
(279, 279, 'Baju / Kaos', 12300, 0, 1),
(280, 280, 'Baju / Kaos', 4200, 0, 1),
(281, 281, 'Baju / Kaos', 12300, 0, 1),
(282, 282, 'Baju / Kaos', 7200, 0, 1),
(283, 283, 'Baju / Kaos', 12300, 0, 1),
(284, 284, 'Baju / Kaos', 12300, 0, 1),
(285, 285, 'Baju / Kaos', 12300, 0, 1),
(286, 286, 'Baju / Kaos', 12300, 0, 1),
(287, 287, 'Baju / Kaos', 17300, 0, 1),
(288, 288, 'Baju / Kaos', 14500, 0, 1),
(289, 289, 'Baju / Kaos', 19000, 0, 1),
(290, 290, 'Baju / Kaos', 10200, 0, 1),
(291, 291, 'Baju / Kaos', 7200, 0, 1),
(292, 292, 'Baju / Kaos', 7200, 0, 1),
(293, 293, 'Baju / Kaos', 7200, 0, 1),
(294, 294, 'Baju / Kaos', 7200, 0, 1),
(295, 295, 'Baju / Kaos', 14300, 0, 1),
(296, 296, 'Baju / Kaos', 35000, 0, 1),
(297, 297, 'Baju / Kaos', 18000, 0, 1),
(298, 298, 'Baju / Kaos', 8200, 0, 1),
(299, 299, 'Baju / Kaos', 8200, 0, 1),
(300, 300, 'Baju / Kaos', 8200, 0, 1),
(301, 301, 'Baju / Kaos', 23400, 0, 1),
(302, 302, 'Baju / Kaos', 23400, 0, 1),
(303, 303, 'Baju / Kaos', 4200, 0, 1),
(304, 304, 'Baju / Kaos', 23400, 0, 1),
(305, 305, 'Baju / Kaos', 4200, 0, 1),
(306, 306, 'Baju / Kaos', 14300, 0, 1),
(307, 307, 'Baju / Kaos', 7200, 0, 1),
(308, 308, 'Baju / Kaos', 12300, 0, 1),
(309, 309, 'Baju / Kaos', 9200, 0, 1),
(310, 310, 'Baju / Kaos', 10200, 0, 1),
(311, 311, 'Baju / Kaos', 22000, 0, 1),
(312, 312, 'Baju / Kaos', 30000, 0, 1),
(313, 313, 'Baju / Kaos', 26500, 0, 1),
(314, 314, 'Baju / Kaos', 7200, 0, 1),
(315, 315, 'Baju / Kaos', 14300, 0, 1),
(316, 316, 'Baju / Kaos', 14300, 0, 1),
(317, 317, 'Baju / Kaos', 14300, 0, 1),
(318, 318, 'Baju / Kaos', 14300, 0, 1),
(319, 319, 'Baju / Kaos', 7200, 0, 1),
(320, 320, 'Baju / Kaos', 22000, 0, 1),
(321, 321, 'Baju / Kaos', 24500, 0, 1),
(322, 322, 'Baju / Kaos', 14300, 0, 1),
(323, 323, 'Baju / Kaos', 8200, 0, 1),
(324, 324, 'Baju / Kaos', 8200, 0, 1),
(325, 325, 'Baju / Kaos', 6200, 0, 1),
(326, 326, 'Baju / Kaos', 6200, 0, 1),
(327, 327, 'Baju / Kaos', 16500, 0, 1),
(328, 328, 'Baju / Kaos', 9200, 0, 1),
(329, 329, 'Baju / Kaos', 9200, 0, 1),
(330, 330, 'Baju / Kaos', 15300, 0, 1),
(331, 331, 'Baju / Kaos', 9200, 0, 1),
(332, 332, 'Baju / Kaos', 30400, 0, 1),
(333, 333, 'Baju / Kaos', 36000, 0, 1),
(334, 334, 'Baju / Kaos', 28400, 0, 1),
(335, 335, 'Baju / Kaos', 20300, 0, 1),
(336, 336, 'Baju / Kaos', 25400, 0, 1),
(337, 337, 'Baju / Kaos', 20300, 0, 1),
(338, 338, 'Baju / Kaos', 10200, 0, 1),
(339, 339, 'Baju / Kaos', 32500, 0, 1),
(340, 340, 'Baju / Kaos', 32500, 0, 1),
(341, 341, 'Baju / Kaos', 23400, 0, 1),
(342, 342, 'Baju / Kaos', 23400, 0, 1),
(343, 343, 'Baju / Kaos', 15300, 0, 1),
(344, 344, 'Baju / Kaos', 23400, 0, 1),
(345, 345, 'Baju / Kaos', 23400, 0, 1),
(346, 346, 'Baju / Kaos', 23400, 0, 1),
(347, 347, 'Baju / Kaos', 23400, 0, 1),
(348, 348, 'Baju / Kaos', 41600, 0, 1),
(349, 349, 'Baju / Kaos', 36000, 0, 1),
(350, 350, 'Baju / Kaos', 48500, 0, 1),
(351, 351, 'Baju / Kaos', 30000, 0, 1),
(352, 352, 'Baju / Kaos', 26500, 0, 1),
(353, 353, 'Baju / Kaos', 36000, 0, 1),
(354, 354, 'Baju / Kaos', 37000, 0, 1),
(355, 355, 'Baju / Kaos', 43000, 0, 1),
(356, 356, 'Baju / Kaos', 22400, 0, 1),
(357, 357, 'Baju / Kaos', 22400, 0, 1),
(358, 358, 'Baju / Kaos', 22400, 0, 1),
(359, 359, 'Baju / Kaos', 22400, 0, 1),
(360, 360, 'Baju / Kaos', 22400, 0, 1),
(361, 361, 'Baju / Kaos', 35500, 0, 1),
(362, 362, 'Baju / Kaos', 22400, 0, 1),
(363, 363, 'Baju / Kaos', 22400, 0, 1),
(364, 364, 'Baju / Kaos', 35500, 0, 1),
(365, 365, 'Baju / Kaos', 22400, 0, 1),
(366, 366, 'Baju / Kaos', 30000, 0, 1),
(367, 367, 'Baju / Kaos', 44600, 0, 1),
(368, 368, 'Baju / Kaos', 20300, 0, 1),
(369, 369, 'Baju / Kaos', 20300, 0, 1),
(370, 370, 'Baju / Kaos', 40500, 0, 1),
(371, 371, 'Baju / Kaos', 40500, 0, 1),
(372, 372, 'Baju / Kaos', 40500, 0, 1),
(373, 373, 'Baju / Kaos', 10200, 0, 1),
(374, 374, 'Baju / Kaos', 20300, 0, 1),
(375, 375, 'Baju / Kaos', 40500, 0, 1),
(376, 376, 'Baju / Kaos', 22400, 0, 1),
(377, 377, 'Baju / Kaos', 40500, 0, 1),
(378, 378, 'Baju / Kaos', 43000, 0, 1),
(379, 379, 'Baju / Kaos', 50600, 0, 1),
(380, 380, 'Baju / Kaos', 31000, 0, 1),
(381, 381, 'Baju / Kaos', 37500, 0, 1),
(382, 382, 'Baju / Kaos', 30400, 0, 1),
(383, 383, 'Baju / Kaos', 25400, 0, 1),
(384, 384, 'Baju / Kaos', 37500, 0, 1),
(385, 385, 'Baju / Kaos', 37500, 0, 1),
(386, 386, 'Baju / Kaos', 45000, 0, 1),
(387, 387, 'Baju / Kaos', 37500, 0, 1),
(388, 388, 'Baju / Kaos', 37500, 0, 1),
(389, 389, 'Baju / Kaos', 37500, 0, 1),
(390, 390, 'Baju / Kaos', 37500, 0, 1),
(391, 391, 'Baju / Kaos', 15300, 0, 1),
(392, 392, 'Baju / Kaos', 37500, 0, 1),
(393, 393, 'Baju / Kaos', 20300, 0, 1),
(394, 394, 'Baju / Kaos', 40500, 0, 1),
(395, 395, 'Baju / Kaos', 25400, 0, 1),
(396, 396, 'Baju / Kaos', 25400, 0, 1),
(397, 397, 'Baju / Kaos', 20300, 0, 1),
(398, 398, 'Baju / Kaos', 25400, 0, 1),
(399, 399, 'Baju / Kaos', 35500, 0, 1),
(400, 400, 'Baju / Kaos', 35500, 0, 1),
(401, 401, 'Baju / Kaos', 35500, 0, 1),
(402, 402, 'Baju / Kaos', 47600, 0, 1),
(403, 403, 'Baju / Kaos', 45600, 0, 1),
(404, 404, 'Baju / Kaos', 35500, 0, 1),
(405, 405, 'Baju / Kaos', 52000, 0, 1),
(406, 406, 'Baju / Kaos', 30400, 0, 1),
(407, 407, 'Baju / Kaos', 35500, 0, 1),
(408, 408, 'Baju / Kaos', 17300, 0, 1),
(409, 409, 'Baju / Kaos', 35500, 0, 1),
(410, 410, 'Baju / Kaos', 30400, 0, 1),
(411, 411, 'Baju / Kaos', 35500, 0, 1),
(412, 412, 'Baju / Kaos', 30400, 0, 1),
(413, 413, 'Baju / Kaos', 56700, 0, 1),
(414, 414, 'Baju / Kaos', 45000, 0, 1),
(415, 415, 'Baju / Kaos', 43000, 0, 1),
(416, 416, 'Baju / Kaos', 25400, 0, 1),
(417, 417, 'Baju / Kaos', 43500, 0, 1),
(418, 418, 'Baju / Kaos', 25400, 0, 1),
(419, 419, 'Baju / Kaos', 25400, 0, 1),
(420, 420, 'Baju / Kaos', 25400, 0, 1),
(421, 421, 'Baju / Kaos', 25400, 0, 1),
(422, 422, 'Baju / Kaos', 10200, 0, 1),
(423, 423, 'Baju / Kaos', 25400, 0, 1),
(424, 424, 'Baju / Kaos', 25400, 0, 1),
(425, 425, 'Baju / Kaos', 25400, 0, 1),
(426, 426, 'Baju / Kaos', 25400, 0, 1),
(427, 427, 'Baju / Kaos', 25400, 0, 1),
(428, 428, 'Baju / Kaos', 58000, 0, 1),
(429, 429, 'Baju / Kaos', 25400, 0, 1),
(430, 430, 'Baju / Kaos', 25400, 0, 1),
(431, 431, 'Baju / Kaos', 25400, 0, 1),
(432, 432, 'Baju / Kaos', 25400, 0, 1),
(433, 433, 'Baju / Kaos', 25400, 0, 1),
(434, 434, 'Baju / Kaos', 25400, 0, 1),
(435, 435, 'Baju / Kaos', 25400, 0, 1),
(436, 436, 'Baju / Kaos', 53000, 0, 1),
(437, 437, 'Baju / Kaos', 32500, 0, 1),
(438, 438, 'Baju / Kaos', 40500, 0, 1),
(439, 439, 'Baju / Kaos', 40500, 0, 1),
(440, 440, 'Baju / Kaos', 35450, 0, 1),
(441, 441, 'Baju / Kaos', 40500, 0, 1),
(442, 442, 'Baju / Kaos', 40500, 0, 1),
(443, 443, 'Baju / Kaos', 50600, 0, 1),
(444, 444, 'Baju / Kaos', 60500, 0, 1),
(445, 445, 'Baju / Kaos', 53000, 0, 1),
(446, 446, 'Baju / Kaos', 40500, 0, 1),
(447, 447, 'Baju / Kaos', 17300, 0, 1),
(448, 448, 'Baju / Kaos', 40500, 0, 1),
(449, 449, 'Baju / Kaos', 40500, 0, 1),
(450, 450, 'Baju / Kaos', 40500, 0, 1),
(451, 451, 'Baju / Kaos', 40500, 0, 1),
(452, 452, 'Baju / Kaos', 40500, 0, 1),
(453, 453, 'Baju / Kaos', 40500, 0, 1),
(454, 454, 'Baju / Kaos', 30400, 0, 1),
(455, 455, 'Baju / Kaos', 45000, 0, 1),
(456, 456, 'Baju / Kaos', 86500, 0, 1),
(457, 457, 'Baju / Kaos', 65800, 0, 1),
(458, 458, 'Baju / Kaos', 65800, 0, 1),
(459, 459, 'Baju / Kaos', 65800, 0, 1),
(460, 460, 'Baju / Kaos', 65800, 0, 1),
(461, 461, 'Baju / Kaos', 65800, 0, 1),
(462, 462, 'Baju / Kaos', 65800, 0, 1),
(463, 463, 'Baju / Kaos', 65800, 0, 1),
(464, 464, 'Baju / Kaos', 65800, 0, 1),
(465, 465, 'Baju / Kaos', 65800, 0, 1),
(466, 466, 'Baju / Kaos', 65800, 0, 1),
(467, 467, 'Baju / Kaos', 22400, 0, 1),
(468, 468, 'Baju / Kaos', 65800, 0, 1),
(469, 469, 'Baju / Kaos', 65800, 0, 1),
(470, 470, 'Baju / Kaos', 50600, 0, 1),
(471, 471, 'Baju / Kaos', 40500, 0, 1),
(472, 472, 'Baju / Kaos', 40500, 0, 1),
(473, 473, 'Baju / Kaos', 39500, 0, 1),
(474, 474, 'Baju / Kaos', 40500, 0, 1),
(475, 475, 'Baju / Kaos', 40500, 0, 1),
(476, 476, 'Baju / Kaos', 40500, 0, 1),
(477, 477, 'Baju / Kaos', 50600, 0, 1),
(478, 478, 'Baju / Kaos', 47500, 0, 1),
(479, 479, 'Baju / Kaos', 46500, 0, 1),
(480, 480, 'Baju / Kaos', 40500, 0, 1),
(481, 481, 'Baju / Kaos', 17300, 0, 1),
(482, 482, 'Baju / Kaos', 61000, 0, 1),
(483, 483, 'Baju / Kaos', 40500, 0, 1),
(484, 484, 'Baju / Kaos', 40500, 0, 1),
(485, 485, 'Baju / Kaos', 40500, 0, 1),
(486, 486, 'Baju / Kaos', 40500, 0, 1),
(487, 487, 'Baju / Kaos', 58000, 0, 1),
(488, 488, 'Baju / Kaos', 50600, 0, 1),
(489, 489, 'Baju / Kaos', 37000, 0, 1),
(490, 490, 'Baju / Kaos', 30000, 0, 1),
(491, 491, 'Baju / Kaos', 18300, 0, 1),
(492, 492, 'Baju / Kaos', 36500, 0, 1),
(493, 493, 'Baju / Kaos', 18300, 0, 1),
(494, 494, 'Baju / Kaos', 9200, 0, 1),
(495, 495, 'Baju / Kaos', 18300, 0, 1),
(496, 496, 'Baju / Kaos', 18300, 0, 1),
(497, 497, 'Baju / Kaos', 18300, 0, 1),
(498, 498, 'Baju / Kaos', 18300, 0, 1),
(499, 499, 'Baju / Kaos', 24400, 0, 1),
(500, 500, 'Baju / Kaos', 40500, 0, 1),
(501, 501, 'Baju / Kaos', 55500, 0, 1),
(502, 502, 'Baju / Kaos', 40500, 0, 1),
(503, 503, 'Baju / Kaos', 58000, 0, 1),
(504, 504, 'Baju / Kaos', 58000, 0, 1),
(505, 505, 'Baju / Kaos', 40500, 0, 1),
(506, 506, 'Baju / Kaos', 17300, 0, 1),
(507, 507, 'Baju / Kaos', 40500, 0, 1),
(508, 508, 'Baju / Kaos', 40500, 0, 1),
(509, 509, 'Baju / Kaos', 40500, 0, 1),
(510, 510, 'Baju / Kaos', 40500, 0, 1),
(511, 511, 'Baju / Kaos', 40500, 0, 1),
(512, 512, 'Baju / Kaos', 40500, 0, 1),
(513, 513, 'Baju / Kaos', 40500, 0, 1),
(514, 514, 'Baju / Kaos', 75000, 0, 1),
(515, 515, 'Baju / Kaos', 40500, 0, 1),
(516, 516, 'Baju / Kaos', 40500, 0, 1),
(517, 517, 'Baju / Kaos', 65800, 0, 1),
(518, 518, 'Baju / Kaos', 40500, 0, 1),
(519, 519, 'Baju / Kaos', 80900, 0, 1),
(520, 520, 'Baju / Kaos', 92500, 0, 1),
(521, 521, 'Baju / Kaos', 92500, 0, 1),
(522, 522, 'Baju / Kaos', 104000, 0, 1),
(523, 523, 'Baju / Kaos', 86000, 0, 1),
(524, 524, 'Baju / Kaos', 86000, 0, 1),
(525, 525, 'Baju / Kaos', 65800, 0, 1),
(526, 526, 'Baju / Kaos', 86000, 0, 1),
(527, 527, 'Baju / Kaos', 72900, 0, 1),
(528, 528, 'Baju / Kaos', 86000, 0, 1),
(529, 529, 'Baju / Kaos', 86000, 0, 1),
(530, 530, 'Baju / Kaos', 86000, 0, 1),
(531, 531, 'Baju / Kaos', 86000, 0, 1),
(532, 532, 'Baju / Kaos', 86000, 0, 1),
(533, 533, 'Baju / Kaos', 65800, 0, 1),
(534, 534, 'Baju / Kaos', 86000, 0, 1),
(535, 535, 'Baju / Kaos', 86000, 0, 1),
(536, 536, 'Baju / Kaos', 86000, 0, 1),
(537, 537, 'Baju / Kaos', 86000, 0, 1),
(538, 538, 'Baju / Kaos', 86000, 0, 1),
(539, 539, 'Baju / Kaos', 138500, 0, 1),
(540, 540, 'Baju / Kaos', 111200, 0, 1),
(541, 541, 'Baju / Kaos', 138500, 0, 1),
(542, 542, 'Baju / Kaos', 86000, 0, 1),
(543, 543, 'Baju / Kaos', 86000, 0, 1),
(544, 544, 'Baju / Kaos', 86000, 0, 1),
(545, 545, 'Baju / Kaos', 70800, 0, 1),
(546, 546, 'Baju / Kaos', 104000, 0, 1),
(548, 548, 'Baju / Kaos', 86000, 0, 1),
(549, 549, 'Baju / Kaos', 111200, 0, 1),
(550, 550, 'Baju / Kaos', 65800, 0, 1),
(551, 551, 'Baju / Kaos', 86000, 0, 1),
(552, 552, 'Baju / Kaos', 111200, 0, 1),
(553, 553, 'Baju / Kaos', 6000, 12000, 1),
(554, 554, 'Baju / Kaos', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_countries`
--

CREATE TABLE IF NOT EXISTS `delivery_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `delivery_countries`
--

INSERT INTO `delivery_countries` (`id`, `code`, `name`) VALUES
(1, 'ID', 'Indonesia'),
(2, 'US', 'U.S.A');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_state`
--

CREATE TABLE IF NOT EXISTS `delivery_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `delivery_state`
--

INSERT INTO `delivery_state` (`id`, `name`, `country_id`) VALUES
(1, 'PROVINSI D.I ACEH', 1),
(2, 'PROVINSI RIAU', 1),
(3, 'KEPULAUAN RIAU', 1),
(4, 'PROVINSI JAMBI', 1),
(5, 'PROVINSI SUMATERA UTARA', 1),
(6, 'PROVINSI SUMATERA BARAT', 1),
(7, 'PROVINSI SUMATERA SELATAN', 1),
(8, 'PROVINSI BALI', 1),
(9, 'PROVINSI BANGKA BELITUNG', 1),
(10, 'PROVINSI BENGKULU', 1),
(11, 'PROVINSI LAMPUNG', 1),
(12, 'DKI JAKARTA', 1),
(13, 'PROVINSI BANTEN', 1),
(14, 'PROVINSI JAWA BARAT', 1),
(15, 'PROVINSI JAWA TENGAH', 1),
(16, 'PROVINSI D.I YOGYAKARTA', 1),
(17, 'PROVINSI JAWA TIMUR', 1),
(18, 'PROVINSI KALIMANTAN BARAT', 1),
(19, 'PROVINSI KALIMANTAN SELATAN', 1),
(20, 'PROVINSI KALIMANTAN TENGAH', 1),
(21, 'PROVINSI KALIMANTAN TIMUR', 1),
(22, 'PROVINSI SULAWESI TENGAH', 1),
(23, 'PROVINSI SULAWESI SELATAN', 1),
(24, 'PROVINSI SULAWESI BARAT', 1),
(25, 'PROVINSI SULAWESI TENGGARA', 1),
(26, 'PROVINSI GORONTALO', 1),
(27, 'PROVINSI SULAWESI UTARA', 1),
(28, 'PROVINSI NTB', 1),
(29, 'PROVINSI NTT', 1),
(30, 'PROVINSI PAPUA', 1),
(31, 'PROVINSI PAPUA BARAT', 1),
(32, 'AMBIL DI TEMPAT', 1),
(33, 'Arizona', 2),
(34, 'Arkansas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fill` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `fill`, `type`) VALUES
(1, '<p>\r\n	<strong><span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Lorem</span></span></strong></p>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui.&nbsp;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong><span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Ipsum</span></span></strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit. Maecenas at justo id velit placerat molestie. Donec dictum lectus non odio. Cras a ante vitae enim iaculis aliquam. Mauris nunc quam, venenatis nec, euismod sit amet, egestas placerat, est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span></span></div>\r\n', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_bank` text NOT NULL,
  `account_number` text NOT NULL,
  `account_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `account_bank`, `account_number`, `account_name`) VALUES
(1, 'BCA', '6040155927', 'Michael Chrisyanto'),
(2, 'Mandiri', '52361888182', 'Michael Chrisyanto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '3a09d02853e62b71ba5562e96d37a8e4', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  `category_description` text,
  `category_level` int(11) NOT NULL,
  `category_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `category_level`, `category_order`) VALUES
(1, 'Send Bags', NULL, 0, 0),
(2, 'Paper Bags', NULL, 0, 1),
(3, 'Tote Bags', NULL, 0, 2),
(4, 'Plastic Bags', NULL, 0, 3),
(5, 'Paper Sacks', NULL, 0, 4),
(6, 'Boxes', NULL, 0, 5),
(7, 'Custom Packagings', NULL, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_relation`
--

CREATE TABLE IF NOT EXISTS `tbl_category_relation` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_child` int(11) NOT NULL,
  `category_parent` text NOT NULL,
  `relation_level` int(11) NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_category_relation`
--

INSERT INTO `tbl_category_relation` (`relation_id`, `category_child`, `category_parent`, `relation_level`) VALUES
(1, 1, 'top', 1),
(2, 2, 'top', 1),
(3, 3, 'top', 1),
(4, 4, 'top', 1),
(5, 5, 'top', 1),
(6, 6, 'top', 1),
(7, 7, 'top', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collection`
--

CREATE TABLE IF NOT EXISTS `tbl_collection` (
  `collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_name` text NOT NULL,
  `collection_order` int(11) NOT NULL,
  PRIMARY KEY (`collection_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_collection`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_collection_lookbook`
--

CREATE TABLE IF NOT EXISTS `tbl_collection_lookbook` (
  `lookbook_id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_id` int(11) NOT NULL,
  `lookbook_file` text NOT NULL,
  `lookbook_type` text NOT NULL,
  `lookbook_order` int(11) NOT NULL,
  PRIMARY KEY (`lookbook_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_collection_lookbook`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE IF NOT EXISTS `tbl_color` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` text NOT NULL,
  `color_image` text NOT NULL,
  `color_order` int(11) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_color`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fill` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fill`, `type`) VALUES
(1, '<p>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Melissa Shoes Indonesia</span></span></p>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Jl. Kemang Raya</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Jakarta</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Indonesia</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">+62 21 530 1234</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Online Inquiries</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">For all online inquiries, please contact info@melissashoes.co.id</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Wholesale Inquiries</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">For wholesale inquiries, please contact sales@melissashoes.co.id</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designer`
--

CREATE TABLE IF NOT EXISTS `tbl_designer` (
  `designer_id` int(11) NOT NULL AUTO_INCREMENT,
  `designer_name` text NOT NULL,
  `designer_order` int(11) NOT NULL,
  PRIMARY KEY (`designer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_designer`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_help`
--

CREATE TABLE IF NOT EXISTS `tbl_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fill` text NOT NULL,
  `type` text NOT NULL,
  `order_` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_help`
--

INSERT INTO `tbl_help` (`id`, `fill`, `type`, `order_`) VALUES
(2, '<p>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">1. Select Product</span></span></p>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;"><strong>Click on a category of choic</strong>e from the left section of the website. For a complete description and larger view of the image, click on your desired product.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">2. Add to Shopping Bag</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">Select your size and quantity, then click ADD TO BAG. Shortly you will be redirected to checkout page, and you can choose to CONTINUE SHOPPING or PROCEED TO ORDER.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">3. Review Your Bag</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">Click on the SHOPPING BAG icon on the right top of the website to review your items.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">4. Check Out</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">If you decide to finalise your order, click PROCEED TO ORDER &#39;Product availability is not guaranteed before you check out&#39;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px;">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n', 'payment', 2),
(3, '<p>\r\n	<span style="font-family:gotham rounded medium;"><span style="font-size: 11px; ">1. Select Product</span></span></p>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; "><strong>Click on a category of </strong>choice from the left section of the website. For a complete description and larger view of the image, click on your desired product.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded medium;"><span style="font-size: 11px; ">2. Add to Shopping Bag</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Select your size and quantity, then click ADD TO BAG. Shortly you will be redirected to checkout page, and you can choose to CONTINUE SHOPPING or PROCEED TO ORDER.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded medium;"><span style="font-size: 11px; ">3. Review Your Bag</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Click on the SHOPPING BAG icon on the right top of the website to review your items.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded medium;"><span style="font-size: 11px; ">4. Check Out</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">If you decide to finalise your order, click PROCEED TO ORDER &#39;Product availability is not guaranteed before you check out&#39;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded medium;"><span style="font-size: 11px; ">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n', 'delivery', 3),
(4, '<p>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">1. Select Product</span></span></p>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; "><span style="font-size:12px;">Click on </span>a category of choice from the left section of the website. For a complete description and larger view of the image, click on your desired product.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">2. Add to Shopping Bag</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Select your size and quantity, then click ADD TO BAG. Shortly you will be redirected to checkout page, and you can choose to CONTINUE SHOPPING or PROCEED TO ORDER.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">3. Review Your Bag</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">Click on the SHOPPING BAG icon on the right top of the website to review your items.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">4. Check Out</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">If you decide to finalise your order, click PROCEED TO ORDER &#39;Product availability is not guaranteed before you check out&#39;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">5. Sign In</span></span></div>\r\n<div>\r\n	<span style="font-family:gotham rounded book;"><span style="font-size: 11px; ">You will be asked to provide a valid email address. If you are a registered shopper, please use your registered email address so that your order will be automatically recorded in your account.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	z</div>\r\n', 'ordering', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE IF NOT EXISTS `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `link` text NOT NULL,
  `order_` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `filename`, `link`, `order_`) VALUES
(2, 'files/uploads/slideshow/melissa-2.jpg', '', 2),
(3, 'files/uploads/slideshow/melissa-3.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` text NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `parameter`, `value`) VALUES
(1, 'url', 'http://www.multipacksp.com'),
(2, 'account_image', 'files/uploads/info/account.jpg'),
(3, 'info_image', 'files/uploads/info/account.jpg'),
(4, 'email', 'info@multipacksp.com'),
(5, 'website_name', 'Multipack SP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` text NOT NULL,
  `order_billing_first_name` text NOT NULL,
  `order_billing_last_name` text NOT NULL,
  `order_billing_email` text NOT NULL,
  `order_billing_phone` text NOT NULL,
  `order_shipping_first_name` text NOT NULL,
  `order_shipping_last_name` text NOT NULL,
  `order_shipping_phone` text NOT NULL,
  `order_shipping_address` text NOT NULL,
  `order_shipping_country` text NOT NULL,
  `order_shipping_province` text NOT NULL,
  `order_shipping_city` text NOT NULL,
  `order_shipping_postal_code` text NOT NULL,
  `shipping_method` text NOT NULL,
  `order_gift_flag` tinyint(1) NOT NULL DEFAULT '0',
  `order_gift_message` text,
  `order_payment_method` text NOT NULL,
  `order_status` text NOT NULL,
  `order_purchase_amount` float NOT NULL,
  `order_shipping_amount` float NOT NULL,
  `order_voucher_value` float NOT NULL,
  `order_total_amount` float NOT NULL,
  `order_shipping_number` text,
  `order_date` datetime NOT NULL,
  `order_confirmed_date` datetime NOT NULL,
  `order_verified_date` datetime NOT NULL,
  `order_delivered_date` datetime NOT NULL,
  `order_confirm_bank` text,
  `order_confirm_name` text,
  `order_confirm_amount` text,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_order`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE IF NOT EXISTS `tbl_order_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `stock_name` text NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `item_gender` text NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_order_item`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_sold_out` tinyint(1) NOT NULL DEFAULT '0',
  `product_category` text NOT NULL,
  `product_sale` tinyint(1) NOT NULL DEFAULT '0',
  `product_new_arrival` tinyint(1) NOT NULL DEFAULT '0',
  `product_order` int(11) NOT NULL,
  `product_date_added` date NOT NULL,
  `collection_id` int(11) NOT NULL,
  `product_size_type_id` int(11) NOT NULL,
  `product_gender` varchar(6) NOT NULL,
  `product_visibility` int(11) NOT NULL DEFAULT '0',
  `product_delete` int(11) NOT NULL DEFAULT '0',
  `designer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `product_sold_out`, `product_category`, `product_sale`, `product_new_arrival`, `product_order`, `product_date_added`, `collection_id`, `product_size_type_id`, `product_gender`, `product_visibility`, `product_delete`, `designer_id`) VALUES
(1, '', 1, 'top', 0, 0, 0, '2012-11-23', 0, 1, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE IF NOT EXISTS `tbl_product_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `img_src` text NOT NULL,
  `image_type` text NOT NULL,
  `image_order` int(11) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_product_image`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_stock`
--

CREATE TABLE IF NOT EXISTS `tbl_product_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `stock_name` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stock_sold_out` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stock_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_product_stock`
--

INSERT INTO `tbl_product_stock` (`stock_id`, `type_id`, `size_id`, `stock_name`, `stock_quantity`, `stock_sold_out`) VALUES
(1, 1, 0, 'A5', 0, 1),
(2, 1, 0, 'A4', 0, 1),
(3, 1, 0, 'A3', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_type`
--

CREATE TABLE IF NOT EXISTS `tbl_product_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `type_code` text NOT NULL,
  `type_name` text NOT NULL,
  `type_price` double NOT NULL,
  `color_id` int(11) NOT NULL,
  `type_description` text NOT NULL,
  `type_specification` text NOT NULL,
  `type_weight` double NOT NULL,
  `type_sale` tinyint(1) NOT NULL DEFAULT '0',
  `type_sale_amount` double DEFAULT NULL,
  `type_sale_begin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_sale_end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_new_arrival` tinyint(1) NOT NULL DEFAULT '0',
  `type_image` text NOT NULL,
  `type_order` int(11) NOT NULL,
  `type_sold_out` tinyint(1) NOT NULL DEFAULT '0',
  `type_visibility` int(11) NOT NULL DEFAULT '0',
  `type_delete` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_product_type`
--

INSERT INTO `tbl_product_type` (`type_id`, `product_id`, `type_code`, `type_name`, `type_price`, `color_id`, `type_description`, `type_specification`, `type_weight`, `type_sale`, `type_sale_amount`, `type_sale_begin`, `type_sale_end`, `type_new_arrival`, `type_image`, `type_order`, `type_sold_out`, `type_visibility`, `type_delete`) VALUES
(1, 1, '', '', 0, 0, '', '', 0, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE IF NOT EXISTS `tbl_promo` (
  `promo_id` int(11) NOT NULL AUTO_INCREMENT,
  `promo_name` varchar(255) NOT NULL,
  `promo_description` text NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`promo_id`, `promo_name`, `promo_description`) VALUES
(1, 'Discount by Percentage', ''),
(2, 'Discount by Amount', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo_item`
--

CREATE TABLE IF NOT EXISTS `tbl_promo_item` (
  `promo_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `promo_id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `promo_value` text NOT NULL,
  `promo_start_datetime` datetime NOT NULL,
  `promo_end_datetime` datetime NOT NULL,
  PRIMARY KEY (`promo_item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_promo_item`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopping_bag`
--

CREATE TABLE IF NOT EXISTS `tbl_shopping_bag` (
  `bag_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bag_billing_first_name` text,
  `bag_billing_last_name` text,
  `bag_billing_email` text,
  `bag_billing_phone` text,
  `bag_shipping_first_name` text,
  `bag_shipping_last_name` text,
  `bag_shipping_phone` text,
  `bag_shipping_address` text,
  `bag_shipping_country` text,
  `bag_shipping_province` text,
  `bag_shipping_city` text,
  `bag_shipping_postal_code` text,
  `shipping_method` text NOT NULL,
  `bag_gift_flag` tinyint(1) DEFAULT '0',
  `bag_gift_message` text,
  `bag_payment_method` text,
  `bag_purchase_amount` double DEFAULT NULL,
  `bag_shipping_amount` double DEFAULT NULL,
  `bag_total_amount` double DEFAULT NULL,
  `bag_date` datetime DEFAULT NULL,
  `bag_counter` int(11) DEFAULT NULL,
  PRIMARY KEY (`bag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_shopping_bag`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopping_bag_item`
--

CREATE TABLE IF NOT EXISTS `tbl_shopping_bag_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `bag_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `stock_name` text NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `item_gender` text NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_shopping_bag_item`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE IF NOT EXISTS `tbl_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_type_id` int(11) NOT NULL,
  `size_name` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `size_order` int(11) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `size_type_id`, `size_name`, `size_order`) VALUES
(7, 1, 'L', 3),
(6, 1, 'M', 2),
(5, 1, 'S', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size_type`
--

CREATE TABLE IF NOT EXISTS `tbl_size_type` (
  `size_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_type_name` text NOT NULL,
  `size_type_order` int(11) NOT NULL,
  PRIMARY KEY (`size_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_size_type`
--

INSERT INTO `tbl_size_type` (`size_type_id`, `size_type_name`, `size_type_order`) VALUES
(1, 'Bags', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_first_name` text NOT NULL,
  `user_last_name` text NOT NULL,
  `user_phone` text NOT NULL,
  `user_address` text NOT NULL,
  `user_country` text NOT NULL,
  `user_province` text NOT NULL,
  `user_city` text NOT NULL,
  `user_postal_code` text NOT NULL,
  `user_created_date` datetime NOT NULL,
  `user_status` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_first_name`, `user_last_name`, `user_phone`, `user_address`, `user_country`, `user_province`, `user_city`, `user_postal_code`, `user_created_date`, `user_status`) VALUES
(1, 'gary.gunarman@yahoo.com', 'f227141848d66cb2d0921157499edf47', 'Gary', 'Gregorius', '08170102349', 'Mega Kebon Jeruk F3/6\r\nMeruya Selatan\r\nKembangan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11650', '2011-08-30 02:52:22', 'member'),
(3, 'gary@heymonstore.com', '60fe5d511373c7fb8ddf9989e0079817', 'Gary', 'Gregorius', '08170102349', 'Mega Kebon Jeruk F3/6\r\nMeruya Selatan\r\nKembangan\r\n', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11650', '2011-08-30 11:18:53', 'member'),
(23, 'dikejarmasmas_dimas@yahoo.com', 'cd62562929ed9d64a1fda3c911f9de9d', 'Dimas', 'Putra', '08170710288', 'JL. Pratama 5 Blok T No. 19 Perumahan Kemang Pratama 1', 'Indonesia', 'DKI JAKARTA', 'BEKASI', '17116', '2011-12-08 20:23:32', 'member'),
(6, 'nick@heymonstore.com', 'e5da5381632b9b2d4d3a2f013e27a911', 'Nicholas', 'Yudha', '0811170165', 'Jl. Sutera Magnolia 3 no. 3\r\nAlam Sutera\r\nSerpong', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '15326', '2011-10-31 18:00:26', 'member'),
(7, 'carolina@heymonstore.com', 'e5da5381632b9b2d4d3a2f013e27a911', 'Agatha', 'Carolina', '45467687', 'asdasdasd', 'Indonesia', 'DKI Jakarta', 'Jakarta Barat', '12345', '2011-11-03 23:20:28', 'member'),
(8, 'nick.yudha@gmail.com', 'e5da5381632b9b2d4d3a2f013e27a911', 'Nicholas', 'Yudha', '0811170165', 'Jl. Sutera Magnolia 3 No. 3\r\nAlam Sutera ', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '15326', '2011-11-21 14:52:38', 'member'),
(9, 'winawinch@hotmail.com', 'bd9ba4593e549837688e4a2ff12dd6f1', 'Irwina', 'Annisa', '+628158777707', 'Jalan Tebet Dalam II a no. 3, Jakarta Selatan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12810', '2011-11-25 20:29:54', 'member'),
(10, 'jihai_13@hotmail.com', '5a674af1b95cccd205ffb28393198773', 'jimmy ', 'limantara', '+6283896055317', 'tl.gong', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '14450', '2011-11-26 15:09:11', 'member'),
(12, 'diyang.renantia@gmail.com', '42d388f8b1db997faaf7dab487f11290', 'Diyang', 'Renantia', '085718860788', 'Komplek Depkes Jl. Biomedis Blok B4 no 8 Sunter Jaya Jakarta Utara', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '14350', '2011-11-28 01:27:21', 'member'),
(13, 'theangeworld@hotmail.com', '73f11411e7f056a1e74b70c957ee5d20', 'anggrek', 'anggunatami', '085691258390', 'bukit pamulang indah blok f 13 no 8 RT 04/13.kecamatan pamulang, kelurahan pamulang.Tangerang selatan.15417', 'Indonesia', 'PROVINSI BANTEN', 'TANGERANG', '15417', '2011-11-28 12:36:29', 'member'),
(14, 'ali.vivian@hotmail.com', 'b9f3e93cb64a0ceeb0e619a41a2c14fe', 'Vivian', 'Ali', '0818937318', 'Taman Ratu Indah Blok CC 2 No.1', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11520', '2011-11-28 23:40:40', 'member'),
(140, 'info@heymonstore.com', '7d665145b256e661775d2e8d12f82e25', 'Gary', 'Gregorius', '0817203040', 'Jalan ', 'Indonesia', 'KEPULAUAN RIAU', 'NONGSA', '283889', '2012-07-14 17:28:35', 'member'),
(141, 'info@heymonstore2.com', '7d665145b256e661775d2e8d12f82e25', 'Gary', 'Gregorius', '', '', '', '', '', '', '2012-07-14 18:45:25', 'member'),
(16, 'tika.lubis@yahoo.com', 'daa5ec12130adbcf239c8b6ee899d82f', 'Sartika', 'Lubis', '081287750087', 'Jl. Bambu Duri v No. 21, Jakarta Timur 13430. Pondok Bambu', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13430', '2011-11-30 16:42:42', 'member'),
(17, 'callmepinx@yahoo.com', 'f686516a8925d13b9ad090c2e1f8beed', 'Pingkan', 'R', '021-5484438', 'Jl. Kristal G-7\r\nPermata Hijau\r\n', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12210', '2011-12-01 22:08:47', 'member'),
(18, 'bonesbahar@yahoo.co.id', '86fb770405b51900a2111f989bf1d8a9', 'isnen', 'bahar', '085643656727', 'Prum Depkes B7 No. 17, Kramat, Magelang', 'Indonesia', 'PROVINSI JAWA TENGAH', 'MAGELANG', '56113', '2011-12-02 12:17:53', 'member'),
(19, 'gary@antikode.com', '7d665145b256e661775d2e8d12f82e25', 'Gary', 'Gregorius', '08170102349', 'Mega Kebon Jeruk F3/6\r\nMeruya Selatan\r\nKembangan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11650', '2011-12-03 00:29:06', 'member'),
(20, 'ratihpermatasari@hotmail.com', '15ae768dc870ce01663566174e1211ef', 'Ratih', 'Permatasari', '087888428090', 'Jl. Ir H Djuanda no. 227, Dago\r\nBandung-Jawa Barat', 'Indonesia', '', '', '40135', '2011-12-03 12:48:24', 'member'),
(21, 'irma_dwk87@yahoo.com', '48c00b2ea5062fa7dee25696f31494e6', 'Irma', 'Widya', '081908221259', 'PTB. Duren Sawit Timur Blok M1 No 8', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13440', '2011-12-04 19:39:33', 'member'),
(22, 'richiebestianto@live.com', '0116aa4987704e7deb8340bb250db71c', 'Richie', 'Bestianto', '08998886819', 'Jl. Trapesium III Blok A3 No.17\r\nTaman Kedoya Permai - Jakarta Barat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11530', '2011-12-07 12:47:39', 'member'),
(24, 'yukiandriani@ymail.com', 'b7b0ae5532585411f12c2b90a5509f56', 'yuki', 'andriani', '08568202070', 'Jln. Kijang 1 no. F56 slipi - kemanggisan ', 'Indonesia', 'DKI JAKARTA', '', '11480', '2011-12-09 00:52:56', 'member'),
(25, 'ifan@alfian.net', '7fa58dc81574eb16a83d3e08232b6948', 'Ifan', 'Alfian', '62817884326', 'PT XL Axiata, Tbk\r\nMenara Prima 6th Fl.\r\nJalan Lingkar Mega Kuningan Blok 6.2\r\nKawasan Mega Kuningan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12950', '2011-12-09 17:09:05', 'member'),
(26, 'cededarmawan@gmail.com', 'e79fd01231fb8948bffca0449ad1748a', 'karina citra', 'Darmawan', '08129558035', 'Jl. Hj Abdul Hamid No.32 RT6/RW4 Cawang 2 Jakarta Timur', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13630', '2011-12-09 19:35:27', 'member'),
(27, 'tiarzzz@gmail.com', '3adac60cfeba7a9c4b4a16b3f244be25', 'Bahtiar', 'Sidik', '08561480033', 'Jl. Hi. Hasbi No. 23\r\nRT 09/ RW 09\r\nKel. Bidaracina\r\nKec. Jatinegara\r\nJakarta Timur', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13330', '2011-12-11 17:15:43', 'member'),
(28, 'harumitanoto@yahoo.com', 'd20767da526868daa84d5e0de559dcd1', 'harumi', 'tanoto', '083894650039', 'pantai indah kapuk, katamaran indah 9 no. 2H', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '14460', '2011-12-12 23:01:13', 'member'),
(29, 'rennyfw@yahoo.com', 'e3ce45164943f543580cc212d447ddb2', 'renny', 'fw', '085737430328', 'jln budi raya no21 kebun jeruk jakarta barat, 11530 binus square', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11530', '2011-12-14 22:28:21', 'member'),
(30, 'idraz.skywalker@gmail.com', '5c48f84a6f707fc863e33e1a438f9625', 'm.bashori', 'erlangga', '+6281332935255', 'jl.Baja 3/2 PPI Kec.Manyar Kab.Gresik', 'Indonesia', 'PROVINSI JAWA TIMUR', 'GRESIK', '61151', '2011-12-15 13:35:21', 'member'),
(32, 'gitaprasetyo@hotmail.com', '629ab14fab772d78a58eea752bdfc0dc', 'gita', 'prasetyo', '087888006506', 'Jl. Senjoyo no 24', 'Indonesia', 'PROVINSI JAWA TENGAH', 'SALATIGA', '50743', '2011-12-22 14:36:27', 'member'),
(33, 'go_get_strong@rocketmail.com', '9ec6b948d13dfea2fc133d3366442da4', 'gita', 'prasetyo', '087888006506', 'Jl. Senjoyo no 24', 'Indonesia', 'PROVINSI JAWA TENGAH', 'SALATIGA', '50473', '2011-12-22 17:54:29', 'member'),
(34, 'alex.tho@live.com', '7aada53e8c385df6833e18b4ddb9223d', 'Alex', 'Tho', '08158000676', 'Jl. Pluit Barat VII No. 41\r\nPluit, Jakarta Utara', 'Indonesia', 'DKI JAKARTA', '', '14450', '2011-12-24 13:15:00', 'member'),
(74, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', '', '2012-02-29 19:02:50', 'member'),
(36, 'rynsrn@hotmail.com', '28a34010e84b881fb087359c7e280a08', 'Ririn', 'Susanti', '081213115711', 'amarapura blok d no 30', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12140', '2011-12-25 17:30:25', 'member'),
(37, 'jessicasoekidi@yahoo.com', 'c83fc359a03a477dc51ffca8e11ecdf6', 'Jessica', 'Soekidi', '+6285659333332', 'Taman Cipulir Estate Blok A/4 No. 14, Ciledug', 'Indonesia', 'PROVINSI BANTEN', 'TANGERANG', '15055', '2011-12-25 19:25:57', 'member'),
(38, 'linardy_90@hotmail.com', '30c343ba255a22d5a4d6c81f75dd320b', 'Linardy', 'Linardy', '082112156981', 'Jl. Kartini no 16a. Pancoran mas. Depok', 'Indonesia', 'DKI JAKARTA', '', 'H', '2011-12-27 00:08:55', 'member'),
(39, 'joey_verna@hotmail.com', 'da36a038c30ac2ab1890745202b7ee84', 'Joverna', 'huang', '08159971900', 'sunter mas tengah k blok e no 11. jakarta utara', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '14350', '2011-12-30 07:56:05', 'member'),
(40, 'tommypratama@hotmail.com', '956ab31643165f26af697982789d4721', 'tommy', 'pratama', '085866866655', 'tegalsari RT03 RW04, Manjung, Ngawen.', 'Indonesia', 'PROVINSI JAWA TENGAH', 'KLATEN', '57466', '2011-12-30 13:54:09', 'member'),
(41, 'audreysadono@yahoo.com', 'afba37b8ac151c5c56473395aac538ba', 'gabriella audrey', 'sadono', '087881913005', 'jalan taman bendungan jatiluhur VII no.2 JAkarta Pusat 10210', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '10210', '2011-12-30 18:08:40', 'member'),
(42, 'vinzbox@gmail.com', '3a300c48b47b714d9821dc473304aa84', 'Alvin', 'Archimeda', '0817436974', 'Jl. Bandung no 23 Cinere Depok', 'Indonesia', 'DKI JAKARTA', 'DEPOK', '16514', '2012-01-01 11:53:58', 'member'),
(43, 'dhea_oshin@yahoo.com', 'b72fde89cc36ae2747d5ad4845bf140d', 'dea', 'andini', '085780055516', 'jl. madrasah assalam no 12 rt 03 rw 03 gerendeng ', 'Indonesia', 'PROVINSI BANTEN', 'TANGERANG', '15113', '2012-01-05 21:05:00', 'member'),
(44, 'taufikdirgavasa@yahoo.com', '3aea7b1bb5394c9a917f4670d8bfe93e', 'taufik', 'dirgavasa', '085710883801', 'jl. anggrek cakra no20 rt05/rw07 kebon jeruk, jakarta barat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11530 ', '2012-01-06 03:28:42', 'member'),
(45, 'thechannelstones@yahoo.co.id', 'e10adc3949ba59abbe56e057f20f883e', 'Rian', 'Kurniawan', '085228994254', 'Jl. jati III no. 13 Ternate, Maluku Utara', 'Indonesia', '', '', '997714', '2012-01-07 15:40:52', 'member'),
(46, 'vodcramondz@yahoo.com', '80f2152842941734cca7299e75760202', 'Raymond ', 'Foo', '085275752654', 'Jln. Menggala No. 12/2-FF Medan, Kel. Sei Rengas I, Kec. Medan Kota, Kab. Kota Medan\r\nMedan\r\n20214', 'Indonesia', '', '', '20214', '2012-01-08 22:54:55', 'member'),
(47, 'foo.raymond@ymail.com', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'raymond', 'foo', '085275752654', 'Jln. Menggala No. 12/2-FF Medan, Kel. Sei Rengas I, Kec. Medan Kota, Kab. Kota Medan\r\nMedan', 'Indonesia', '', '', '20214', '2012-01-08 23:48:35', 'member'),
(48, 'randy@randyraharja.com', '2c7b134e3f472e145bf50d155dd55405', 'Randy', 'Raharja', '087775272845', 'Jalan Meruya Utara no 8A', 'Indonesia', 'DKI JAKARTA', '', '11620', '2012-01-09 19:07:45', 'member'),
(49, 'wiradianita@yahoo.co.id', '07aad1df9d8908b63e5e8170b2bcc819', 'Devi', 'Chameleon', '+6285852187187', 'Jl. Hos Cokroaminoto 62 Bangkalan - Madura - Jawa Timur - Indonesia', 'Indonesia', '', '', '69115', '2012-01-11 12:22:55', 'member'),
(50, 'ario_stm@yahoo.co.id', 'bae485a5802f8e963317c932ca2d2c38', 'Ario', 'Trihantoro', '081213936900', 'apartment mediterania garden 1 tower a lantai 6 c/b ( a 6cb) , tanjung duren , jakarta barat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11470', '2012-01-16 14:35:27', 'member'),
(51, 'ansmarcellviella@gmail.com', 'ac81624f4e98b990572f871d96656aed', 'Ario', 'Trihantoro', '081213936900', 'Apartemen Mediterania Garden 1 Tower A Lantai 6 c/b , Tanjung Duren , Jakarta barat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11470', '2012-01-16 14:47:07', 'member'),
(52, 'saiiasiioon@yahoo.com', '547169e9b90c798e0daae9e554ce04d0', 'Ario', 'Trihantoro', '081213936900', 'Apartemen Mediterania Garden 1 Tower a Lantai 6 c/b , Tanjung Duren , Jakarta Barat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11470', '2012-01-16 14:51:12', 'member'),
(53, 'distamaria@yahoo.com', '4f9bfd715bf2f58400162758e2125b0b', 'Dista Maria', 'Zefanya', '085739783872', 'Jl. Wiguna 2/21 Surabaya', 'Indonesia', 'PROVINSI JAWA TIMUR', 'SURABAYA', '60294', '2012-01-21 10:56:08', 'member'),
(54, 'novyti.ohyaan@yahoo.com', 'c3eca2a24ccc8cb03a402d8e9aef685d', 'Novyti', 'Ohyaan', '087853363605', 'Jl. Perum. Karah Indah II blok L no 26 Surabaya ', 'Indonesia', 'PROVINSI JAWA TIMUR', 'SURABAYA', '60232', '2012-01-21 11:39:34', 'member'),
(55, 'sandra_fetriana@yahoo.com', '0de7cd21d00ffa3b94687c3efb364f8a', 'sandra', 'harahap', '081287802246', 'Jl. Cempaka 2 BS 17 no. 16\r\nKranggan Permai. Jati Sampurna\r\nBekasi', 'Indonesia', 'PROVINSI JAWA BARAT', 'OTHER JAWA BARAT', '17433', '2012-01-21 21:34:47', 'member'),
(56, 'hilman_gokil@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hilman', 'satriawan', '08568932210', 'kotawisata, beverlyhills blok G1 no. 19\r\n(cibubur)', 'Indonesia', 'DKI JAKARTA', 'BOGOR', '16280', '2012-01-23 20:34:59', 'member'),
(57, 'inuuu@hotmail.com', '0b20137cde0f260dfb610e01988f541c', 'inoe', 'windyarum', '085714363500', 'Jl.kalimantan IX blok F2 no.19 sektor 14 Nusa Loka BSD Tangerang Selatan', 'Indonesia', 'PROVINSI BANTEN', 'SERPONG', '15310', '2012-01-25 22:52:18', 'member'),
(58, 'Laurasandjaja@ymail.com', 'df4915e872b15615cbb6ac7ce785ddc9', 'Laura', 'Sandjaja', '081399319877', 'Apartemen pakubuwono view #R35A. Jl pakubuwono 6 no 70 kebayoran lama', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12120', '2012-02-01 18:07:26', 'member'),
(59, 'lalitatian@gmail.com', 'd03ab5d086225ea8d4120a40bc5cf332', 'lalita', 'setiandi', '085780218899', 'jl. pancoran glodok #17-19 ', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11120', '2012-02-05 15:42:07', 'member'),
(60, 'hjaxgr@hnbgup.com', '5166f80c201ba48965ebb41d3d832204', 'xyibpdj', 'xyibpdj', '97156286765', 'mklARH  <a href="http://djzghbxumvps.com/">djzghbxumvps</a>, [url=http://zoitofhkjzyf.com/]zoitofhkjzyf[/url], [link=http://giytkrfrahzp.com/]giytkrfrahzp[/link], http://aofzkrtqzjwz.com/', '', '', '', '7836', '2012-02-06 14:31:02', 'member'),
(61, 'dhanirza@yahoo.com', 'b84b9374407d0c896c1e305f98ca08e2', 'Lembah Redhati', 'Nirza', '6282117885080', 'Jl Tubagus Ismail Komplek Alamanda No. E2 ', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '12345', '2012-02-10 02:22:21', 'member'),
(62, 'enzet_za@yahoo.com', '257de9f822177c22e0dcf553eb486dfe', 'Nathania', 'Eliza', '08997910533', 'Jl. Tanjungsari asri raya no 73 antapani 40291', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '40291', '2012-02-10 16:58:45', 'member'),
(63, 'rizkiaramadita@yahoo.com', 'ba972eb5b473fe7df1aae18edad0b422', 'Rizkia', 'Ramadita', '085659476569', 'Tabanan No. 2 Antapani', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '40291', '2012-02-10 17:50:09', 'member'),
(64, 'biyabiyabiya@hotmail.com', '93fc6d2024dce80e38c3a79c9947028d', 'fabiyya ', 'edrus ', '085719876662', 'jl . a-yani 2 gg.822 no 24 pontianak ( kalimantan barat)', 'Indonesia', 'PROVINSI KALIMANTAN BARAT', 'PONTIANAK', '78391', '2012-02-11 15:44:02', 'member'),
(65, 'fitrasandika@yahoo.com', '4f1718a3bf0dc566393a7ece281cee18', 'Sandika', 'Fitra', '085737067217', 'Griya Agung Budha Salahin\r\nJl. Cempaka Putih No. 10 Demulih, Kec.Susut, Kab. Bangli- Bali\r\n\r\nJl. Haji Basuki No. 138\r\nRT. 02 RW. 10 \r\nKelurahan Binong, Batununggal - Bandung', 'Indonesia', 'PROVINSI BALI', 'BANGLI', '80661', '2012-02-14 11:39:03', 'member'),
(66, 'falius@live.com', 'aafde6d7420e7fc772bc6b41c6125c78', 'Francisco', 'Vessalius', '087788215851', 'Jl. Kyai Tapa No.1', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11440', '2012-02-16 12:52:49', 'member'),
(67, 'wiwndyw@yahoo.com', 'c20de995040d07f9a83da7f706afdedc', 'Windy', 'Tenri Sau', '+6281263999991', 'Jl. STM Gg. Sukajadi No. 7C Kel. Sukamaju Kec. Medan Johor', 'Indonesia', 'PROVINSI SUMATERA UTARA', 'MEDAN', '20146', '2012-02-17 14:35:30', 'member'),
(68, 'amblomciusryan@yahoo.com', '1a8129722e2de6e91685b8d03e9144f0', 'Ryan', 'Aldian', '088218148770', 'jl.cibabat no 70 cimahi , bandung', 'Indonesia', 'PROVINSI JAWA BARAT', 'CIMAHI', '4015', '2012-02-17 16:01:37', 'member'),
(69, 'melanianikenlj@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Melania Niken', 'Larasati', '0410491891', 'PT AIRMAS ASRI\r\nJalan Cikini 4 no. 6 \r\nJakarta', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '10330', '2012-02-18 18:12:47', 'member'),
(70, 'ibnudanang_19@yahoo.com', '2f46e69cf0173576ef4da575e75c0aa9', 'Danang Ibnu', 'Pratomo', '085694125900', 'Perumahan Tanah Baru Blok H2 no.9 Rt02 Rw09,Kedung Halang,Bogor', 'Indonesia', 'DKI JAKARTA', 'BOGOR', '16153', '2012-02-19 14:00:40', 'member'),
(71, 'muffinajaibs@yahoo.com.au', '009de8081275f0351f5a053010c1c269', 'Ignatius', 'Pratisto', '087889600888', 'Komp. Polri Pejaten Jl.Siaga Raya Bl D/3\r\n', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12510', '2012-02-19 19:49:15', 'member'),
(72, 'l.stearman@brighton.ac.uk', '669737680cef4a578cff37c2771e8bbb', 'Garrett', 'Garrett', 'dHjkZZpjfT', 'Thank you so much.  I will use your post to get my hasbund talking.  Sorry is not enough but I think about you and your family daily.  Praying for comfort, strenth, peace, and the support you need.', 'Indonesia', '', '', 'OuPOYwMNyptOeFwAJzC', '2012-02-24 20:19:23', 'member'),
(73, 'ouchwoops@yahoo.com', 'f6ddada43d46034cb51d1a2556ffdc34', 'Lenara Rizki', 'Lathifah', '08561165203', 'Jl. Palayu Raya No.52, Bantarjati, Bogor', 'Indonesia', 'PROVINSI JAWA BARAT', 'OTHER JAWA BARAT', '16152', '2012-02-25 13:29:47', 'member'),
(75, 'randy.rhrj@gmail.com', 'befe9f8a14346e3e52c762f333395796', 'Randy', 'Raharja', '087775272845', 'Jalan meruta Utara no 8A', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11620', '2012-03-02 17:28:33', 'member'),
(77, 'cindy-23@Live.com', 'b1f2a8189da0ccab96c46dde34894739', 'cindy', 'octavia', '085697558800', 'jl. rempoa raya no. 57B rt 01 rw 01 ciputat tangerang', 'Indonesia', 'PROVINSI BANTEN', 'TANGERANG', '15412', '2012-03-06 23:27:33', 'member'),
(78, 'yolanda.fox@gmail.com', '31435008693ce6976f45dedc5532e2c1', 'Yolanda', 'Fox', '+6281314515714', 'Komp. Patria Jaya, Jl. Rinjani B I No. 30 Rt 001/ Rw 014, Jatirahayu, Pondok Melati', 'Indonesia', 'DKI JAKARTA', 'BEKASI', '17414', '2012-03-09 10:36:54', 'member'),
(79, 'lxrxsxys@yahoo.com', '6f3e9f401eaedeef45401b047bf20d00', 'Larasati', 'Dewi', '082122192255', 'Villa Pamulang Jl. Ismaya IV Blok U9 No. 18', 'Indonesia', 'PROVINSI BANTEN', 'TIGARAKSA', '15416', '2012-03-12 00:03:56', 'member'),
(80, 'renno.wijaya@hotmail.com', '069b04deb49279cfb3b13d3632e51622', 'renno', 'wijaya', '085711666305', 'Jl Rs Fatmawati no 15', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12430', '2012-03-12 14:32:29', 'member'),
(81, 'sa.putri@hotmail.com', '90b021ada49ad449ab2177dab97c3673', 'fatimah', 'saputri', '08989994669', 'Jl. Banyuwangi No.2 Menteng Jakarta Pusat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '10310', '2012-03-13 15:55:17', 'member'),
(82, 'little.k@live.com', '0efe620c06ef2b6ac149519d902cbb6e', 'Kharissa', 'Pitoyo', '081311193333', 'Villa Melati Mas Blok P1 no. 9', 'Indonesia', 'PROVINSI BANTEN', 'SERPONG', '15323', '2012-03-13 22:16:22', 'member'),
(83, 'shavieragitaanisha@yahoo.com', '391e328229a0f529fd0156a2ece33481', 'Shaviera Gita', 'Anisha', '081398980114', 'Jl. Cigadung Raya Tengah Cigadung Valley Residence II Kavling 2', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '40191', '2012-03-14 14:13:36', 'member'),
(84, 'nita.darsono@gmail.com', 'e837cdd28066e4934082cf35dd64ef2b', 'nita', 'darsono', '082139022888', 'jalan ciliwung 54 ', 'Indonesia', 'PROVINSI JAWA TIMUR', 'SURABAYA', '60241', '2012-03-14 15:52:50', 'member'),
(85, 'bilarenjani@hotmail.com', '97608de833e93ce3de524fc6807ab114', 'Nabila', 'Renjani', '087888511616', 'Jl. Kebon Nanas PWI no. 36\r\nCipinang Besar Selatan\r\nJakarta Timur', 'Indonesia', 'DKI JAKARTA', '', '13410', '2012-03-16 12:22:03', 'member'),
(86, 'vyaafauzia@yahoo.com', 'eebd8371b53ac4b25c519836a1502efc', 'vyaa fauzia', 'burhanuddin', '085656857095', 'jl.a.p.pettarani kompleks pemda blok E24 No 1/46A makassar, sulawesi selatan', 'Indonesia', 'PROVINSI SULAWESI SELATAN', 'MAKASAR', '90222', '2012-03-16 23:04:36', 'member'),
(87, 'dhira-@live.com', '830d7b929c6b0c67e735aa4788c949d7', 'Nadhira Syabanita ', 'Rioputri', '083897899588', 'jl. jatipadang utara no 16 rt01/07, pasar minggu. jaksel. 12540', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12540', '2012-03-17 06:43:17', 'member'),
(88, 'febi.asga@gmail.com', '3327598dda7a32d95c26fd10cac1f52e', 'Febi', 'Asga', '082114919111', 'Jl. Cucur Jaya Blok C1/10 Sektor 4 Bintaro Jaya.', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '15525', '2012-03-17 12:06:07', 'member'),
(89, 'wildandi.djajakusuma@gmail.com', '6e9852b90abc5da6e427abab50c77139', 'Wildandi', 'Djajakusuma', '0856 741 6445', 'Jl Garuda 8 no 7 Kranggan Permai, Jatisampurna Pd Gede Bekasi 17433', 'Indonesia', 'DKI JAKARTA', '', '17433', '2012-03-18 00:42:45', 'member'),
(90, 'rynsrn@aol.com', 'a88c141fec3ab50ac8ef53407d64bd59', 'ririn', 'wibowo', '081213115711', 'apartment hamptons park', 'Indonesia', 'DKI JAKARTA', '', '12140', '2012-03-19 12:23:49', 'member'),
(91, 'Wijaya_frans@yahoo.com', 'b1b911aa74d7acc7cd20ef9692c5fe06', 'Frans', 'Wijaya', '081280439939', 'Cempaka putih barat xix blok e no 72\r\nJakarta pusat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '10520', '2012-03-21 12:30:53', 'member'),
(92, 'jessicabratakencana@yahoo.com', 'b49c31bf50afecd768460c47cef3baf7', 'Jessica', 'Bratakencana', '+6281271001622', 'Taman Kedoya Permai blok A2 no. 16', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11530', '2012-03-21 17:19:10', 'member'),
(93, 'betty.f.devera@gmail.com', '2cb815f4728ffc5646695b7182d9f1ca', 'Betty', 'Fransisca', '6285890667770', 'Jl.Kh moh mansyur no.30', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '10140', '2012-03-26 12:01:20', 'member'),
(94, 'fransiska@cisarua.com', 'd844da9f91d5fd9ce15e484047d18482', 'siska', 'chandranita', '087721279666', 'jl.Hos.cokroaminoto no.68\r\n', 'Indonesia', 'PROVINSI JAWA BARAT', '', '43215', '2012-03-28 18:13:24', 'member'),
(95, 'gianluigi.gana@ymail.com', '7f7ca1f5bb8b053a54fca1ca74b529b0', 'muhammad', 'gana', '08982192608', 'Jalan Bambu Kuning Gang Rahmat No.2', 'Indonesia', 'PROVINSI RIAU', 'PEKANBARU', '28281', '2012-04-04 13:03:05', 'member'),
(96, 'hakimkomarul@yahoo.co.id', '11cff5cf0fc6854fd369bbeabf2c705b', 'Muhammad ', 'Komarul Hakim', '087897255666', 'Komplek Bukit Sejahtera jalan Kelapa Gading Blok AF 08 , Palembang , Sumatera Selatan', 'Indonesia', 'PROVINSI SUMATERA SELATAN', 'PALEMBANG', '30139', '2012-04-11 18:52:32', 'member'),
(97, 'bimatrisulo@gmail.com', '2881ae42e1442561cd38344f1eb6dff7', 'Bima', 'Trisulo', '0817898678', 'Jl. H. Sinen No. 20 RT07/07 Ragunan, Pasar Minggu', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12550', '2012-04-12 12:37:58', 'member'),
(98, 'dol_gandi@yahoo.com', '815b4482c3bbf68e3ed3264bdebb22f4', 'Ade', 'Gandi', '081977132813', 'Jl. Puluhdadi no 415 Rt06 Rw 02, Seturan, Catur Tunggal, Depok Sleman ', 'Indonesia', 'PROVINSI D.I YOGYAKARTA', 'SLEMAN', '55281', '2012-04-13 21:56:10', 'member'),
(99, 'nick@stilomo.com', '3019173df465dae98f8ce78bba996942', 'Edo', 'Edo', '0811170165', 'Test', 'Indonesia', 'PROVINSI BANTEN', '', '12345', '2012-04-15 20:32:04', 'member'),
(100, 'saryaadhitama@gmail.com', '20456fb124b1dcd59bc7806ddc701260', 'Satrya', 'Adhitama', '087774747295', 'Jalan Cempaka Lestari 3, G- 48, Lebak Bulus, Jakarta Selatan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12440', '2012-04-19 10:01:43', 'member'),
(101, 'lisaa.lie@hotmail.com', '630b99c13d15d5123372d8653340be5f', 'lisa', 'lie', '085780890002', 'jl. kaca-kaca buntu no 18a \r\npasar baru\r\njakarta pusat', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '10710', '2012-04-20 10:59:11', 'member'),
(103, 'tebakaja@live.com', 'a4845a1b8b3737413ee7b8e166521609', 'Tri Maulida', 'Rahardianti', '082115063924', 'Jl. Rancabentang 1 no. 4a, Ciumbuleuit', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '40134', '2012-04-26 11:05:19', 'member'),
(104, 'putri_mdj@yahoo.com', 'f61e6cb6bd0468172cc2624dccc25d0d', 'Putri', 'Djelantik', '081999045393', 'Jalan Pengembak no 2 Sanur', 'Indonesia', 'PROVINSI BALI', 'SANUR', '80228', '2012-04-27 21:30:14', 'member'),
(105, 'goldnasentaro@hotmail.com', 'f97633e99c8677a084db90f7d8f751fc', 'Rizka', 'Ramadhani', '081807977836', 'Jl.Siaga Raya No.B2 Komplek LAN Pejaten Barat Ps.Minggu', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12510', '2012-04-28 16:44:12', 'member'),
(106, 'yanti_octaviazz@hotmail.com', '3f78dc8aad24005d9a6bab06afad9855', 'Yanti', 'Octavia', '081908156094', 'jl. arteri tentara pelajar no.10, rt 003 rw 008 patal senayan,kebayoran lama,  jakarta selatan 12210', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12210', '2012-04-29 10:34:52', 'member'),
(107, 'tortue_to@yahoo.com', 'f5e83298a7020f76ce5a48855f609db1', 'Rati', 'Paramaningayu', '081219168022', 'jl. daksinapati timur 1 no 7 komp. unj. \r\nrawamangun - jaktim\r\n13220', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13220', '2012-04-29 19:22:37', 'member'),
(108, 'Laurabasuki@hotmail.com', 'c3f8d608d41f2567eb10b68acb9d25f6', 'Laura', 'Basuki', '081399319877', 'Apartemen Pakubuwono View #R35A\r\nJl. Pakubuwono 6 no 70 Kebayoran Lama Utara \r\nJakarta Selatan, DKI Jakarta 12120\r\n', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12120', '2012-05-01 08:05:42', 'member'),
(109, 'ayog555@yahoo.com', '51ee60ad5ff2800f0eadb4191d560f88', 'aryo', 'wahyutomo', '085743173555', 'JL. fajar indah 6 E62A RT 10 RW 15 jaten, karanganyar, solo\r\n', 'Indonesia', 'PROVINSI JAWA TENGAH', '', '57771', '2012-05-01 23:31:42', 'member'),
(110, 'dita.pranandia@yahoo.com', '061fba5bdfc076bb7362616668de87c8', 'Dita', 'Pranandia', '+6281383686883', 'PT Elnusa Tbk - Corp. Finance,\r\nGraha Elnusa, 5th floor.\r\nJl. TB Simatupang Kav. 1B\r\nCilandak', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12560', '2012-05-02 14:43:18', 'member'),
(111, 'rizkirahayuutami20@yahoo.com', '69ea1226c6225fa29086c21b95f2be3b', 'RizkiRahayu', 'Utami', '085782671881', 'KOMPLEK KODAM JAYA RT 08 RW02 NO.3 F6KRAMAT JATI.JAKARTA TIMUR.', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13510', '2012-05-02 23:26:35', 'member'),
(112, 'khairinalika@gmail.com', '84d961568a65073a3bcf0eb216b2a576', 'Khairina', 'Lika', '08174930310', 'Villa Kelapa 2, Jalan Janur Raya blok D-24 Pos Pengumben Jakarta barat.', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11550', '2012-05-03 20:01:26', 'member'),
(113, 'servinaa@gmail.com', 'd363288e23f5188be8d043784efe0377', 'servina', 'mariska', '087880534864', 'Jalan Balongan E2 / 7 Jatiwaringin Asri, Pondok Gede', 'Indonesia', 'PROVINSI JAWA BARAT', 'OTHER JAWA BARAT', '17411', '2012-05-06 23:03:15', 'member'),
(114, 'wilda_wr@yahoo.com', '14b41665f5aa69429a84a35fc6589a30', 'wilda', 'retno', '087877431642', 'jl. keahlian no 22 rt 07 rw 05 jatiwaringin pondok gede, bekasi', 'Indonesia', 'DKI JAKARTA', 'BEKASI', '17411', '2012-05-08 14:04:49', 'member'),
(115, 'venny.yusnita@gmail.com', 'd4699a8d25601d867f077f5f423bbd78', 'venny', 'yusnita', '08179775125', 'Perum balangan pratama jl jingga 2 no 16 cenggiling', 'Indonesia', 'PROVINSI BALI', '', '80361', '2012-05-09 00:37:27', 'member'),
(116, 'extraowl_jm@ymail.com', '00d49842f145fba10b245f538fae3df2', 'John', 'Marcell', '082132732742', 'Jl.Rungkut Mejoyo Utara KY 5', 'Indonesia', 'PROVINSI JAWA TIMUR', 'SURABAYA', '60292', '2012-05-13 09:54:27', 'member'),
(117, 'claudiopiererra@yahoo.com', '076db461b49d1a69ff2439f3dbc66fcc', 'claudio', 'piererra', '081287900825', ' Jl. Pulo Permata Sari blok C2/3', 'Indonesia', 'DKI JAKARTA', 'BEKASI', '17116', '2012-05-14 14:02:02', 'member'),
(118, 'dinda_hamzah@yahoo.com', '7fb5ccf0833d4f45ef756d8c41f095d8', 'dinda', 'hamzah', '08561703759', 'Jalan Amsar no 26 RT 004/RW 004 Ciganjur -Jaksel', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12630', '2012-05-20 20:22:10', 'member'),
(119, 'dheri@live.com', '4faae64ad893f77d319862b7de29cf79', 'dheri', 'fikrianto', '081219101224', 'komplek bank mandiri, jln. taska, no.15, cilandak barat, jakarta selatan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12430', '2012-05-23 21:57:32', 'member'),
(120, 'brietyalucia@ymail.com', 'c33367701511b4f6020ec61ded352059', 'Eva ', 'Permatasari', '081298911409', 'Jalan Wangko No. 22 Trikora Halim PerdanaKusuma RT 09/ RW 015 Kec : Makasar Kelurahan :  Halim Perdana Kusuma', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '13610', '2012-05-30 12:13:18', 'member'),
(121, 'iamvitha@yahoo.com', '80c52a8878e4fb586c3ca5bfac87851b', 'Juvita', 'Pratiwi', '089636751636', 'Jln. 28 Oktober No 75 Link IV\r\nTeling Atas Manado 95119', 'Indonesia', 'PROVINSI SULAWESI UTARA', 'MANADO', '95119', '2012-06-04 06:36:24', 'member'),
(122, 'yulisantika@yahoo.com', 'a3d79626ccc2fd2788c26a9b7f7a5be1', 'yuli', 'putri', '089693418245', 'Jalan parit makmur gg teratai 2 no 53,pontianak,daerah siantan', 'Indonesia', 'PROVINSI KALIMANTAN BARAT', '', '78956', '2012-06-05 22:46:38', 'member'),
(123, 'davidgordon313@gmail.com', '2921e3df64aba8f2d09fbf8c11dc0d8d', 'david', 'gordon', '0812998265', 'lippo karawaci, kondominium gold, richmond 11F', 'Indonesia', 'PROVINSI BANTEN', '', '15229', '2012-06-06 21:55:04', 'member'),
(124, 'lia_dhani21@yahoo.com', 'd8ac6e006a14a77ea97286998139c7f2', 'Lia', 'Kusumawardhani', '081233729234', 'Jalan simpang D. Maninjau Selatan 1 D1 / B6', 'Indonesia', 'PROVINSI JAWA TIMUR', 'MALANG', '12345', '2012-06-07 09:02:01', 'member'),
(125, 'isauriablabla@yahoo.com', 'd10d6b075de8234f2d33d8246aba5800', 'ifni', 'isauria', '62818950385', 'Jl. tubagus ismail raya no. 40a\r\nwisma ayah bunda kamar A6\r\n', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '40134', '2012-06-07 11:55:23', 'member'),
(126, 'sha_phi@rocketmail.com', 'a339ca4b634d2aaf329e9c659db6d8b2', 'Azalea', 'Phinata', '083854442474', 'Jl. Sawahan Sarimulyo I/8 RT 01 RW 01 Kel. Petemon Kec. Sawahan', 'Indonesia', 'PROVINSI JAWA TIMUR', 'SURABAYA', '60252', '2012-06-10 01:43:11', 'member'),
(127, 'm_elsa@ymail.com', '2eebd516988a47d9321fc63f32f73c97', 'Maria', 'Elsa', '085722834223', 'Jl. Asia Afrika 103', 'Indonesia', 'PROVINSI JAWA BARAT', 'BANDUNG', '40112', '2012-06-10 15:23:04', 'member'),
(128, 'joy.yohanes@yahoo.com', '55239d65008c6fa3a4d294ffeec1ef95', 'Joy Yohanes', 'Wangsa Seputra', '081390282425', 'Jl. KH Agus Salim 234 ', 'Indonesia', 'PROVINSI JAWA TENGAH', 'KUDUS', '59317', '2012-06-11 11:10:27', 'member'),
(129, 'joy_endut17@yahoo.co.uk', '55239d65008c6fa3a4d294ffeec1ef95', 'Joy Yohanes', 'Wangsa Seputra', '081390282425', 'Jl. KH Agus Salim 234', 'Indonesia', 'PROVINSI JAWA TENGAH', 'KUDUS', '59317', '2012-06-11 11:11:54', 'member'),
(130, 'janeodelialukman@yahoo.com', '179976f8dca63c65eb17aa6faab224d3', 'jane ', 'lukman', '0817140891', 'villa gading indah G no.11, kelapa gading, jakarta 14240', 'Indonesia', 'DKI JAKARTA', '', '14240', '2012-06-11 14:18:39', 'member'),
(132, 'g@gary.com', '7d665145b256e661775d2e8d12f82e25', 'Gary', 'Greg', '08170102349', 'Mega Kebon Jeruk F3/6', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11650', '2012-07-04 11:19:25', 'member'),
(133, 'g@g.com', 'f227141848d66cb2d0921157499edf47', 'G', 'Greg', '08208208208', 'Jalan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '12993', '2012-07-04 11:25:34', 'member'),
(134, 'gue@gary.com', '7d665145b256e661775d2e8d12f82e25', 'Gary', 'Gregorius', '08170902909090', 'Jalan Jalan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11650', '2012-07-04 14:16:33', 'member'),
(135, 'gar@y.com', 'f227141848d66cb2d0921157499edf47', 'G', 'G', '08190190290', 'Penthouse ', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '19299', '2012-07-04 14:17:54', 'member'),
(136, 'g@ar.com', '7d665145b256e661775d2e8d12f82e25', 'G', 'G', '08192939', 'Jalan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '191991', '2012-07-04 14:20:27', 'member'),
(137, 'z@ra.com', '22fc0691066ac5b70d702f8112602b5a', 'z', 'z', '01920021', 'Gary', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '11600', '2012-07-04 14:22:33', 'member'),
(138, 'ga@e.com', '7d665145b256e661775d2e8d12f82e25', 'Garu', 'Grei', '2910290192', 'Jalan', 'Indonesia', 'DKI JAKARTA', 'DKI JAKARTA', '1929939', '2012-07-04 14:37:20', 'member'),
(139, 'lala@gaga.com', '811584043b844704c9bb9a6e99dd05d3', 'Gary', 'G', '', '', '', '', '', '', '2012-07-05 07:39:58', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_purchase`
--

CREATE TABLE IF NOT EXISTS `tbl_user_purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_user_purchase`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucher`
--

CREATE TABLE IF NOT EXISTS `tbl_voucher` (
  `voucher_id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher_code` text COLLATE utf8_unicode_ci NOT NULL,
  `voucher_value` text COLLATE utf8_unicode_ci NOT NULL,
  `voucher_description` text COLLATE utf8_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `voucher_type` text COLLATE utf8_unicode_ci NOT NULL,
  `redeem_date` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`voucher_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_voucher`
--

