-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 09:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mingle`
--

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `html_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `html_class`) VALUES
(1, 'fas fa-address-book'),
(2, 'fas fa-address-card'),
(3, 'fas fa-adjust'),
(4, 'fas fa-align-center'),
(5, 'fas fa-align-justify'),
(6, 'fas fa-align-left'),
(7, 'fas fa-align-right'),
(8, 'fas fa-allergies'),
(9, 'fas fa-ambulance'),
(10, 'fas fa-american-sign-language-interpreting'),
(11, 'fas fa-anchor'),
(12, 'fas fa-angle-double-down'),
(13, 'fas fa-angle-double-left'),
(14, 'fas fa-angle-double-right'),
(15, 'fas fa-angle-double-up'),
(16, 'fas fa-angle-down'),
(17, 'fas fa-angle-left'),
(18, 'fas fa-angle-right'),
(19, 'fas fa-angle-up'),
(20, 'fas fa-archive'),
(21, 'fas fa-arrow-alt-circle-down'),
(22, 'fas fa-arrow-alt-circle-left'),
(23, 'fas fa-arrow-alt-circle-right'),
(24, 'fas fa-arrow-alt-circle-up'),
(25, 'fas fa-arrow-circle-down'),
(26, 'fas fa-arrow-circle-left'),
(27, 'fas fa-arrow-circle-right'),
(28, 'fas fa-arrow-circle-up'),
(29, 'fas fa-arrow-down'),
(30, 'fas fa-arrow-left'),
(31, 'fas fa-arrow-right'),
(32, 'fas fa-arrow-up'),
(33, 'fas fa-arrows-alt'),
(34, 'fas fa-arrows-alt-h'),
(35, 'fas fa-arrows-alt-v'),
(36, 'fas fa-assistive-listening-systems'),
(37, 'fas fa-asterisk'),
(38, 'fas fa-at'),
(39, 'fas fa-audio-description'),
(40, 'fas fa-backward'),
(41, 'fas fa-balance-scale'),
(42, 'fas fa-ban'),
(43, 'fas fa-band-aid'),
(44, 'fas fa-barcode'),
(45, 'fas fa-bars'),
(46, 'fas fa-baseball-ball'),
(47, 'fas fa-basketball-ball'),
(48, 'fas fa-bath'),
(49, 'fas fa-battery-empty'),
(50, 'fas fa-battery-full'),
(51, 'fas fa-battery-half'),
(52, 'fas fa-battery-quarter'),
(53, 'fas fa-battery-three-quarters'),
(54, 'fas fa-bed'),
(55, 'fas fa-beer'),
(56, 'fas fa-bell'),
(57, 'fas fa-bell-slash'),
(58, 'fas fa-bicycle'),
(59, 'fas fa-binoculars'),
(60, 'fas fa-birthday-cake'),
(61, 'fas fa-blind'),
(62, 'fas fa-bold'),
(63, 'fas fa-bolt'),
(64, 'fas fa-bomb'),
(65, 'fas fa-book'),
(66, 'fas fa-bookmark'),
(67, 'fas fa-bowling-ball'),
(68, 'fas fa-box'),
(69, 'fas fa-box-open'),
(70, 'fas fa-boxes'),
(71, 'fas fa-braille'),
(72, 'fas fa-briefcase'),
(73, 'fas fa-briefcase-medical'),
(74, 'fas fa-bug'),
(75, 'fas fa-building'),
(76, 'fas fa-bullhorn'),
(77, 'fas fa-bullseye'),
(78, 'fas fa-burn'),
(79, 'fas fa-bus'),
(80, 'fas fa-calculator'),
(81, 'fas fa-calendar'),
(82, 'fas fa-calendar-alt'),
(83, 'fas fa-calendar-check'),
(84, 'fas fa-calendar-minus'),
(85, 'fas fa-calendar-plus'),
(86, 'fas fa-calendar-times'),
(87, 'fas fa-camera'),
(88, 'fas fa-camera-retro'),
(89, 'fas fa-capsules'),
(90, 'fas fa-car'),
(91, 'fas fa-caret-down'),
(92, 'fas fa-caret-left'),
(93, 'fas fa-caret-right'),
(94, 'fas fa-caret-square-down'),
(95, 'fas fa-caret-square-left'),
(96, 'fas fa-caret-square-right'),
(97, 'fas fa-caret-square-up'),
(98, 'fas fa-caret-up'),
(99, 'fas fa-cart-arrow-down'),
(100, 'fas fa-cart-plus'),
(101, 'fas fa-certificate'),
(102, 'fas fa-chart-area'),
(103, 'fas fa-chart-bar'),
(104, 'fas fa-chart-line'),
(105, 'fas fa-chart-pie'),
(106, 'fas fa-check'),
(107, 'fas fa-check-circle'),
(108, 'fas fa-check-square'),
(109, 'fas fa-chess'),
(110, 'fas fa-chess-bishop'),
(111, 'fas fa-chess-board'),
(112, 'fas fa-chess-king'),
(113, 'fas fa-chess-knight'),
(114, 'fas fa-chess-pawn'),
(115, 'fas fa-chess-queen'),
(116, 'fas fa-chess-rook'),
(117, 'fas fa-chevron-circle-down'),
(118, 'fas fa-chevron-circle-left'),
(119, 'fas fa-chevron-circle-right'),
(120, 'fas fa-chevron-circle-up'),
(121, 'fas fa-chevron-down'),
(122, 'fas fa-chevron-left'),
(123, 'fas fa-chevron-right'),
(124, 'fas fa-chevron-up'),
(125, 'fas fa-child'),
(126, 'fas fa-circle'),
(127, 'fas fa-circle-notch'),
(128, 'fas fa-clipboard'),
(129, 'fas fa-clipboard-check'),
(130, 'fas fa-clipboard-list'),
(131, 'fas fa-clock'),
(132, 'fas fa-clone'),
(133, 'fas fa-closed-captioning'),
(134, 'fas fa-cloud'),
(135, 'fas fa-cloud-download-alt'),
(136, 'fas fa-cloud-upload-alt'),
(137, 'fas fa-code'),
(138, 'fas fa-code-branch'),
(139, 'fas fa-coffee'),
(140, 'fas fa-cog'),
(141, 'fas fa-cogs'),
(142, 'fas fa-columns'),
(143, 'fas fa-comment'),
(144, 'fas fa-comment-alt'),
(145, 'fas fa-comment-dots'),
(146, 'fas fa-comment-slash'),
(147, 'fas fa-comments'),
(148, 'fas fa-compass'),
(149, 'fas fa-compress'),
(150, 'fas fa-copy'),
(151, 'fas fa-copyright'),
(152, 'fas fa-couch'),
(153, 'fas fa-credit-card'),
(154, 'fas fa-crop'),
(155, 'fas fa-crosshairs'),
(156, 'fas fa-cube'),
(157, 'fas fa-cubes'),
(158, 'fas fa-cut'),
(159, 'fas fa-database'),
(160, 'fas fa-deaf'),
(161, 'fas fa-desktop'),
(162, 'fas fa-diagnoses'),
(163, 'fas fa-dna'),
(164, 'fas fa-dollar-sign'),
(165, 'fas fa-dolly'),
(166, 'fas fa-dolly-flatbed'),
(167, 'fas fa-donate'),
(168, 'fas fa-dot-circle'),
(169, 'fas fa-dove'),
(170, 'fas fa-download'),
(171, 'fas fa-edit'),
(172, 'fas fa-eject'),
(173, 'fas fa-ellipsis-h'),
(174, 'fas fa-ellipsis-v'),
(175, 'fas fa-envelope'),
(176, 'fas fa-envelope-open'),
(177, 'fas fa-envelope-square'),
(178, 'fas fa-eraser'),
(179, 'fas fa-euro-sign'),
(180, 'fas fa-exchange-alt'),
(181, 'fas fa-exclamation'),
(182, 'fas fa-exclamation-circle'),
(183, 'fas fa-exclamation-triangle'),
(184, 'fas fa-expand'),
(185, 'fas fa-expand-arrows-alt'),
(186, 'fas fa-external-link-alt'),
(187, 'fas fa-external-link-square-alt'),
(188, 'fas fa-eye'),
(189, 'fas fa-eye-dropper'),
(190, 'fas fa-eye-slash'),
(191, 'fas fa-fast-backward'),
(192, 'fas fa-fast-forward'),
(193, 'fas fa-fax'),
(194, 'fas fa-female'),
(195, 'fas fa-fighter-jet'),
(196, 'fas fa-file'),
(197, 'fas fa-file-alt'),
(198, 'fas fa-file-archive'),
(199, 'fas fa-file-audio'),
(200, 'fas fa-file-code'),
(201, 'fas fa-file-excel'),
(202, 'fas fa-file-image'),
(203, 'fas fa-file-medical'),
(204, 'fas fa-file-medical-alt'),
(205, 'fas fa-file-pdf'),
(206, 'fas fa-file-powerpoint'),
(207, 'fas fa-file-video'),
(208, 'fas fa-file-word'),
(209, 'fas fa-film'),
(210, 'fas fa-filter'),
(211, 'fas fa-fire'),
(212, 'fas fa-fire-extinguisher'),
(213, 'fas fa-first-aid'),
(214, 'fas fa-flag'),
(215, 'fas fa-flag-checkered'),
(216, 'fas fa-flask'),
(217, 'fas fa-folder'),
(218, 'fas fa-folder-open'),
(219, 'fas fa-font'),
(220, 'fas fa-font-awesome-logo-full'),
(221, 'fas fa-football-ball'),
(222, 'fas fa-forward'),
(223, 'fas fa-frown'),
(224, 'fas fa-futbol'),
(225, 'fas fa-gamepad'),
(226, 'fas fa-gavel'),
(227, 'fas fa-gem'),
(228, 'fas fa-genderless'),
(229, 'fas fa-gift'),
(230, 'fas fa-glass-martini'),
(231, 'fas fa-globe'),
(232, 'fas fa-golf-ball'),
(233, 'fas fa-graduation-cap'),
(234, 'fas fa-h-square'),
(235, 'fas fa-hand-holding'),
(236, 'fas fa-hand-holding-heart'),
(237, 'fas fa-hand-holding-usd'),
(238, 'fas fa-hand-lizard'),
(239, 'fas fa-hand-paper'),
(240, 'fas fa-hand-peace'),
(241, 'fas fa-hand-point-down'),
(242, 'fas fa-hand-point-left'),
(243, 'fas fa-hand-point-right'),
(244, 'fas fa-hand-point-up'),
(245, 'fas fa-hand-pointer'),
(246, 'fas fa-hand-rock'),
(247, 'fas fa-hand-scissors'),
(248, 'fas fa-hand-spock'),
(249, 'fas fa-hands'),
(250, 'fas fa-hands-helping'),
(251, 'fas fa-handshake'),
(252, 'fas fa-hashtag'),
(253, 'fas fa-hdd'),
(254, 'fas fa-heading'),
(255, 'fas fa-headphones'),
(256, 'fas fa-heart'),
(257, 'fas fa-heartbeat'),
(258, 'fas fa-history'),
(259, 'fas fa-hockey-puck'),
(260, 'fas fa-home'),
(261, 'fas fa-hospital'),
(262, 'fas fa-hospital-alt'),
(263, 'fas fa-hospital-symbol'),
(264, 'fas fa-hourglass'),
(265, 'fas fa-hourglass-end'),
(266, 'fas fa-hourglass-half'),
(267, 'fas fa-hourglass-start'),
(268, 'fas fa-i-cursor'),
(269, 'fas fa-id-badge'),
(270, 'fas fa-id-card'),
(271, 'fas fa-id-card-alt'),
(272, 'fas fa-image'),
(273, 'fas fa-images'),
(274, 'fas fa-inbox'),
(275, 'fas fa-indent'),
(276, 'fas fa-industry'),
(277, 'fas fa-info'),
(278, 'fas fa-info-circle'),
(279, 'fas fa-italic'),
(280, 'fas fa-key'),
(281, 'fas fa-keyboard'),
(282, 'fas fa-language'),
(283, 'fas fa-laptop'),
(284, 'fas fa-leaf'),
(285, 'fas fa-lemon'),
(286, 'fas fa-level-down-alt'),
(287, 'fas fa-level-up-alt'),
(288, 'fas fa-life-ring'),
(289, 'fas fa-lightbulb'),
(290, 'fas fa-link'),
(291, 'fas fa-lira-sign'),
(292, 'fas fa-list'),
(293, 'fas fa-list-alt'),
(294, 'fas fa-list-ol'),
(295, 'fas fa-list-ul'),
(296, 'fas fa-location-arrow'),
(297, 'fas fa-lock'),
(298, 'fas fa-lock-open'),
(299, 'fas fa-long-arrow-alt-down'),
(300, 'fas fa-long-arrow-alt-left'),
(301, 'fas fa-long-arrow-alt-right'),
(302, 'fas fa-long-arrow-alt-up'),
(303, 'fas fa-low-vision'),
(304, 'fas fa-magic'),
(305, 'fas fa-magnet'),
(306, 'fas fa-male'),
(307, 'fas fa-map'),
(308, 'fas fa-map-marker'),
(309, 'fas fa-map-marker-alt'),
(310, 'fas fa-map-pin'),
(311, 'fas fa-map-signs'),
(312, 'fas fa-mars'),
(313, 'fas fa-mars-double'),
(314, 'fas fa-mars-stroke'),
(315, 'fas fa-mars-stroke-h'),
(316, 'fas fa-mars-stroke-v'),
(317, 'fas fa-medkit'),
(318, 'fas fa-meh'),
(319, 'fas fa-mercury'),
(320, 'fas fa-microchip'),
(321, 'fas fa-microphone'),
(322, 'fas fa-microphone-slash'),
(323, 'fas fa-minus'),
(324, 'fas fa-minus-circle'),
(325, 'fas fa-minus-square'),
(326, 'fas fa-mobile'),
(327, 'fas fa-mobile-alt'),
(328, 'fas fa-money-bill-alt'),
(329, 'fas fa-moon'),
(330, 'fas fa-motorcycle'),
(331, 'fas fa-mouse-pointer'),
(332, 'fas fa-music'),
(333, 'fas fa-neuter'),
(334, 'fas fa-newspaper'),
(335, 'fas fa-notes-medical'),
(336, 'fas fa-object-group'),
(337, 'fas fa-object-ungroup'),
(338, 'fas fa-outdent'),
(339, 'fas fa-paint-brush'),
(340, 'fas fa-pallet'),
(341, 'fas fa-paper-plane'),
(342, 'fas fa-paperclip'),
(343, 'fas fa-parachute-box'),
(344, 'fas fa-paragraph'),
(345, 'fas fa-paste'),
(346, 'fas fa-pause'),
(347, 'fas fa-pause-circle'),
(348, 'fas fa-paw'),
(349, 'fas fa-pen-square'),
(350, 'fas fa-pencil-alt'),
(351, 'fas fa-people-carry'),
(352, 'fas fa-percent'),
(353, 'fas fa-phone'),
(354, 'fas fa-phone-slash'),
(355, 'fas fa-phone-square'),
(356, 'fas fa-phone-volume'),
(357, 'fas fa-piggy-bank'),
(358, 'fas fa-pills'),
(359, 'fas fa-plane'),
(360, 'fas fa-play'),
(361, 'fas fa-play-circle'),
(362, 'fas fa-plug'),
(363, 'fas fa-plus'),
(364, 'fas fa-plus-circle'),
(365, 'fas fa-plus-square'),
(366, 'fas fa-podcast'),
(367, 'fas fa-poo'),
(368, 'fas fa-portrait'),
(369, 'fas fa-pound-sign'),
(370, 'fas fa-power-off'),
(371, 'fas fa-prescription-bottle'),
(372, 'fas fa-prescription-bottle-alt'),
(373, 'fas fa-print'),
(374, 'fas fa-procedures'),
(375, 'fas fa-puzzle-piece'),
(376, 'fas fa-qrcode'),
(377, 'fas fa-question'),
(378, 'fas fa-question-circle'),
(379, 'fas fa-quidditch'),
(380, 'fas fa-quote-left'),
(381, 'fas fa-quote-right'),
(382, 'fas fa-random'),
(383, 'fas fa-recycle'),
(384, 'fas fa-redo'),
(385, 'fas fa-redo-alt'),
(386, 'fas fa-registered'),
(387, 'fas fa-reply'),
(388, 'fas fa-reply-all'),
(389, 'fas fa-retweet'),
(390, 'fas fa-ribbon'),
(391, 'fas fa-road'),
(392, 'fas fa-rocket'),
(393, 'fas fa-rss'),
(394, 'fas fa-rss-square'),
(395, 'fas fa-ruble-sign'),
(396, 'fas fa-rupee-sign'),
(397, 'fas fa-save'),
(398, 'fas fa-search'),
(399, 'fas fa-search-minus'),
(400, 'fas fa-search-plus'),
(401, 'fas fa-seedling'),
(402, 'fas fa-server'),
(403, 'fas fa-share'),
(404, 'fas fa-share-alt'),
(405, 'fas fa-share-alt-square'),
(406, 'fas fa-share-square'),
(407, 'fas fa-shekel-sign'),
(408, 'fas fa-shield-alt'),
(409, 'fas fa-ship'),
(410, 'fas fa-shipping-fast'),
(411, 'fas fa-shopping-bag'),
(412, 'fas fa-shopping-basket'),
(413, 'fas fa-shopping-cart'),
(414, 'fas fa-shower'),
(415, 'fas fa-sign'),
(416, 'fas fa-sign-in-alt'),
(417, 'fas fa-sign-language'),
(418, 'fas fa-sign-out-alt'),
(419, 'fas fa-signal'),
(420, 'fas fa-sitemap'),
(421, 'fas fa-sliders-h'),
(422, 'fas fa-smile'),
(423, 'fas fa-smoking'),
(424, 'fas fa-snowflake'),
(425, 'fas fa-sort'),
(426, 'fas fa-sort-alpha-down'),
(427, 'fas fa-sort-alpha-up'),
(428, 'fas fa-sort-amount-down'),
(429, 'fas fa-sort-amount-up'),
(430, 'fas fa-sort-down'),
(431, 'fas fa-sort-numeric-down'),
(432, 'fas fa-sort-numeric-up'),
(433, 'fas fa-sort-up'),
(434, 'fas fa-space-shuttle'),
(435, 'fas fa-spinner'),
(436, 'fas fa-square'),
(437, 'fas fa-square-full'),
(438, 'fas fa-star'),
(439, 'fas fa-star-half'),
(440, 'fas fa-step-backward'),
(441, 'fas fa-step-forward'),
(442, 'fas fa-stethoscope'),
(443, 'fas fa-sticky-note'),
(444, 'fas fa-stop'),
(445, 'fas fa-stop-circle'),
(446, 'fas fa-stopwatch'),
(447, 'fas fa-street-view'),
(448, 'fas fa-strikethrough'),
(449, 'fas fa-subscript'),
(450, 'fas fa-subway'),
(451, 'fas fa-suitcase'),
(452, 'fas fa-sun'),
(453, 'fas fa-superscript'),
(454, 'fas fa-sync'),
(455, 'fas fa-sync-alt'),
(456, 'fas fa-syringe'),
(457, 'fas fa-table'),
(458, 'fas fa-table-tennis'),
(459, 'fas fa-tablet'),
(460, 'fas fa-tablet-alt'),
(461, 'fas fa-tablets'),
(462, 'fas fa-tachometer-alt'),
(463, 'fas fa-tag'),
(464, 'fas fa-tags'),
(465, 'fas fa-tape'),
(466, 'fas fa-tasks'),
(467, 'fas fa-taxi'),
(468, 'fas fa-terminal'),
(469, 'fas fa-text-height'),
(470, 'fas fa-text-width'),
(471, 'fas fa-th'),
(472, 'fas fa-th-large'),
(473, 'fas fa-th-list'),
(474, 'fas fa-thermometer'),
(475, 'fas fa-thermometer-empty'),
(476, 'fas fa-thermometer-full'),
(477, 'fas fa-thermometer-half'),
(478, 'fas fa-thermometer-quarter'),
(479, 'fas fa-thermometer-three-quarters'),
(480, 'fas fa-thumbs-down'),
(481, 'fas fa-thumbs-up'),
(482, 'fas fa-thumbtack'),
(483, 'fas fa-ticket-alt'),
(484, 'fas fa-times'),
(485, 'fas fa-times-circle'),
(486, 'fas fa-tint'),
(487, 'fas fa-toggle-off'),
(488, 'fas fa-toggle-on'),
(489, 'fas fa-trademark'),
(490, 'fas fa-train'),
(491, 'fas fa-transgender'),
(492, 'fas fa-transgender-alt'),
(493, 'fas fa-trash'),
(494, 'fas fa-trash-alt'),
(495, 'fas fa-tree'),
(496, 'fas fa-trophy'),
(497, 'fas fa-truck'),
(498, 'fas fa-truck-loading'),
(499, 'fas fa-truck-moving'),
(500, 'fas fa-tty'),
(501, 'fas fa-tv'),
(502, 'fas fa-umbrella'),
(503, 'fas fa-underline'),
(504, 'fas fa-undo'),
(505, 'fas fa-undo-alt'),
(506, 'fas fa-universal-access'),
(507, 'fas fa-university'),
(508, 'fas fa-unlink'),
(509, 'fas fa-unlock'),
(510, 'fas fa-unlock-alt'),
(511, 'fas fa-upload'),
(512, 'fas fa-user'),
(513, 'fas fa-user-alt'),
(514, 'fas fa-user-alt-slash'),
(515, 'fas fa-user-astronaut'),
(516, 'fas fa-user-check'),
(517, 'fas fa-user-circle'),
(518, 'fas fa-user-clock'),
(519, 'fas fa-user-cog'),
(520, 'fas fa-user-edit'),
(521, 'fas fa-user-friends'),
(522, 'fas fa-user-graduate'),
(523, 'fas fa-user-lock'),
(524, 'fas fa-user-md'),
(525, 'fas fa-user-minus'),
(526, 'fas fa-user-ninja'),
(527, 'fas fa-user-plus'),
(528, 'fas fa-user-secret'),
(529, 'fas fa-user-shield'),
(530, 'fas fa-user-slash'),
(531, 'fas fa-user-tag'),
(532, 'fas fa-user-tie'),
(533, 'fas fa-user-times'),
(534, 'fas fa-users'),
(535, 'fas fa-users-cog'),
(536, 'fas fa-utensil-spoon'),
(537, 'fas fa-utensils'),
(538, 'fas fa-venus'),
(539, 'fas fa-venus-double'),
(540, 'fas fa-venus-mars'),
(541, 'fas fa-vial'),
(542, 'fas fa-vials'),
(543, 'fas fa-video'),
(544, 'fas fa-video-slash'),
(545, 'fas fa-volleyball-ball'),
(546, 'fas fa-volume-down'),
(547, 'fas fa-volume-off'),
(548, 'fas fa-volume-up'),
(549, 'fas fa-warehouse'),
(550, 'fas fa-weight'),
(551, 'fas fa-wheelchair'),
(552, 'fas fa-wifi'),
(553, 'fas fa-window-close'),
(554, 'fas fa-window-maximize'),
(555, 'fas fa-window-minimize'),
(556, 'fas fa-window-restore'),
(557, 'fas fa-wine-glass'),
(558, 'fas fa-won-sign'),
(559, 'fas fa-wrench'),
(560, 'fas fa-x-ray'),
(561, 'fas fa-yen-sign');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2010_10_12_000000_create_users_table', 1),
(53, '2011_10_12_100000_create_password_resets_table', 1),
(54, '2013_05_10_152133_create_icons_table', 1),
(55, '2014_05_10_152148_create_sponsors_table', 1),
(56, '2015_05_08_121741_create_organizations_table', 1),
(57, '2016_01_15_105324_create_roles_table', 1),
(58, '2016_01_15_114412_create_role_user_table', 1),
(59, '2016_01_26_115212_create_permissions_table', 1),
(60, '2016_01_26_115523_create_permission_role_table', 1),
(61, '2016_02_09_132439_create_permission_user_table', 1),
(62, '2016_05_10_152117_create_services_table', 1),
(63, '2018_05_16_104217_create_organization_sponsor_table', 1),
(64, '2018_05_16_105234_create_sponsor_user_table', 1),
(65, '2018_05_29_134830_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_description` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(2083) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_number` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donate_link` varchar(2083) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sponsor_message` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `lead_description`, `link`, `mail`, `telephone`, `location_name`, `zip`, `location`, `street`, `street_number`, `donate_link`, `user_id`, `sponsor_message`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Silbernetz', 'The network for lonely and isolated senior people;\r\nEmergency-Number, friendship service, access point for local activities', 'https://www.silbernetz.org', 'silbernetz@hvb-bb.de', '030 2354 48 22', 'Silbernetz im HVD BB', '13353', 'Berlin', 'Sprengelstraße', '15', 'https://www.silbernetz.org', 2, 'test', 'logos/Silbernetz.jpg', '2018-05-16 08:46:37', '2018-05-30 07:32:39'),
(2, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'local.mingle.eu', 'lorem@ipsum.de', '0123 456789', 'Lorem Ipsum EV', '012345', 'Lorem City', 'Ipsum Street', '37a', 'local.mingle.eu', 1, 'lorem', NULL, '2018-05-16 08:46:37', '2018-05-16 08:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `organization_sponsor`
--

CREATE TABLE `organization_sponsor` (
  `organization_id` int(10) UNSIGNED NOT NULL,
  `sponsor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `model`, `created_at`, `updated_at`) VALUES
(1, 'Can View Users', 'view.users', 'Can view users', 'Permission', '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(2, 'Can Create Users', 'create.users', 'Can create new users', 'Permission', '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(3, 'Can Edit Users', 'edit.users', 'Can edit users', 'Permission', '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(4, 'Can Delete Users', 'delete.users', 'Can delete users', 'Permission', '2018-05-18 10:22:45', '2018-05-18 10:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(2, 2, 1, '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(3, 3, 1, '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(4, 4, 1, '2018-05-18 10:22:45', '2018-05-18 10:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `multimedia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'Admin Role', 5, '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(2, 'User', 'user', 'User Role', 1, '2018-05-18 10:22:45', '2018-05-18 10:22:45'),
(3, 'Unverified', 'unverified', 'Unverified Role', 0, '2018-05-18 10:22:45', '2018-05-18 10:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2018-05-18 10:38:49', '2018-05-18 10:38:49'),
(2, 2, 1, '2018-05-18 10:38:49', '2018-05-18 10:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `organization_id` int(10) UNSIGNED NOT NULL,
  `icon_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `organization_id`, `icon_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 353, 'Emergency-Relief', 'Hotline: 0800 470 80 90 (free of costs); 24/7 confitential, anonymous, free of costs hotline; Finding og a \"Silbernetz-Friend\" possible; You can receive first support and get usefull information', '2018-05-16 08:46:37', '2018-05-16 08:46:37'),
(2, 1, 521, 'Silbernetz-Friend', 'making friends by a regular phone call; receiving information about local activities; Silbernetz-Friends support you first steps', '2018-05-16 08:46:37', '2018-05-16 08:46:37'),
(3, 1, 148, 'Local Cooperation', 'cooperation wirh supplier of regional and local services; providing information about local services; giving support for using regional services', '2018-05-16 08:46:37', '2018-05-16 08:46:37'),
(4, 2, 452, 'Lorem-Service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.; Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.; Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-05-16 08:46:37', '2018-05-19 11:57:51'),
(5, 2, 222, 'Ipsum-Service', 'Because sometimes Lorem is just not enough and you need Ipsum; We also offer you Ipsum, just ask', '2018-05-16 08:46:37', '2018-05-16 08:46:37'),
(6, 2, 225, 'test', 'test1;\r\ntest2\r\ntest2a', '2018-05-18 12:38:32', '2018-05-18 12:38:32'),
(7, 2, 52, 'Recharge', 'We help you to recharge your batteries;\r\nget new energy for your daily life', '2018-05-19 13:13:22', '2018-05-20 11:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_user`
--

CREATE TABLE `sponsor_user` (
  `sponsor_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@doe.com', '$2y$10$UKmVf3FAUBs2Y5NvzIYT3uT93pRwP4MUq4E.7NEnty.OWivrVdfp2', 'qnhigdVumxiF6KW8vsBwo0t4rDFrjmaNyW7JYxeijsztRKoUGTiK8raoK9gJ', '2018-05-16 06:46:15', '2018-05-16 06:46:15'),
(2, 'Jane Doe', 'jane@doe.com', '$2y$10$lwvwXUc9MwZY9j8WesMhwOFkhTYpCk7q7qqf8bCzqzc8XK8sm1.tO', 'RJTvaKIBkqJzY8WGcN7ziDYhMq9Y2182iOWavwitCk9iWHboPscfZ3E4ZCxv', '2018-05-18 10:38:49', '2018-05-18 10:38:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `icons_html_class_unique` (`html_class`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizations_name_unique` (`name`),
  ADD UNIQUE KEY `organizations_mail_unique` (`mail`),
  ADD KEY `organizations_user_id_foreign` (`user_id`);

--
-- Indexes for table `organization_sponsor`
--
ALTER TABLE `organization_sponsor`
  ADD KEY `organization_sponsor_organization_id_foreign` (`organization_id`),
  ADD KEY `organization_sponsor_sponsor_id_foreign` (`sponsor_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_organization_id_foreign` (`organization_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_organization_id_foreign` (`organization_id`),
  ADD KEY `services_icon_id_foreign` (`icon_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_user`
--
ALTER TABLE `sponsor_user`
  ADD KEY `sponsor_user_sponsor_id_foreign` (`sponsor_id`),
  ADD KEY `sponsor_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=562;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `organization_sponsor`
--
ALTER TABLE `organization_sponsor`
  ADD CONSTRAINT `organization_sponsor_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `organization_sponsor_sponsor_id_foreign` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `icons` (`id`),
  ADD CONSTRAINT `services_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`);

--
-- Constraints for table `sponsor_user`
--
ALTER TABLE `sponsor_user`
  ADD CONSTRAINT `sponsor_user_sponsor_id_foreign` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sponsor_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
