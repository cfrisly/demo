-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2021 a las 03:23:52
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vanidb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('billing','business','contract','mailing','pickup','residential','shipping','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int(10) UNSIGNED DEFAULT NULL,
  `postalcode` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(384) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billpayers`
--

CREATE TABLE `billpayers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'First name',
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Last name',
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_nr` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Tax/VAT Identification Number',
  `registration_nr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company/Trade Registration Number',
  `is_eu_registered` tinyint(1) NOT NULL DEFAULT 0,
  `is_organization` tinyint(1) NOT NULL DEFAULT 0,
  `address_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`, `state`) VALUES
(1, NULL, '2021-03-23 02:43:19', '2021-03-23 03:24:37', 'active'),
(2, NULL, '2021-06-06 23:55:57', '2021-06-06 23:55:57', 'active'),
(3, NULL, '2021-06-23 03:56:51', '2021-06-23 03:56:51', 'active'),
(4, NULL, '2021-07-13 09:55:45', '2021-07-13 09:55:45', 'active'),
(5, NULL, '2021-09-20 00:44:09', '2021-09-20 00:44:09', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `product_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `product_type`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'product', 2, 0, '300.0000', '2021-03-23 02:43:19', '2021-03-23 02:43:41'),
(2, 2, 'product', 3, 1, '150.0000', '2021-06-06 23:55:58', '2021-06-06 23:55:58'),
(3, 3, 'product', 2, 1, '300.0000', '2021-06-23 03:56:52', '2021-06-23 03:56:52'),
(5, 5, 'product', 2, 1, '300.0000', '2021-09-20 00:44:09', '2021-09-20 00:44:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `configuration` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`configuration`)),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` int(11) NOT NULL,
  `is_eu_member` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `name`, `phonecode`, `is_eu_member`) VALUES
('AD', 'Andorra', 376, 0),
('AE', 'United Arab Emirates', 971, 0),
('AF', 'Afghanistan', 93, 0),
('AG', 'Antigua and Barbuda', 1268, 0),
('AI', 'Anguilla', 1264, 0),
('AL', 'Albania', 355, 0),
('AM', 'Armenia', 374, 0),
('AN', 'Netherlands Antilles', 599, 0),
('AO', 'Angola', 244, 0),
('AP', 'Asia / Pacific Region', 0, 0),
('AQ', 'Antarctica', 0, 0),
('AR', 'Argentina', 54, 0),
('AS', 'American Samoa', 1684, 0),
('AT', 'Austria', 43, 1),
('AU', 'Australia', 61, 0),
('AW', 'Aruba', 297, 0),
('AX', 'Aland Islands', 358, 0),
('AZ', 'Azerbaijan', 994, 0),
('BA', 'Bosnia and Herzegovina', 387, 0),
('BB', 'Barbados', 1246, 0),
('BD', 'Bangladesh', 880, 0),
('BE', 'Belgium', 32, 1),
('BF', 'Burkina Faso', 226, 0),
('BG', 'Bulgaria', 359, 1),
('BH', 'Bahrain', 973, 0),
('BI', 'Burundi', 257, 0),
('BJ', 'Benin', 229, 0),
('BL', 'Saint Barthelemy', 590, 0),
('BM', 'Bermuda', 1441, 0),
('BN', 'Brunei Darussalam', 673, 0),
('BO', 'Bolivia', 591, 0),
('BQ', 'Bonaire, Sint Eustatius and Saba', 599, 0),
('BR', 'Brazil', 55, 0),
('BS', 'Bahamas', 1242, 0),
('BT', 'Bhutan', 975, 0),
('BV', 'Bouvet Island', 0, 0),
('BW', 'Botswana', 267, 0),
('BY', 'Belarus', 375, 0),
('BZ', 'Belize', 501, 0),
('CA', 'Canada', 1, 0),
('CC', 'Cocos (Keeling) Islands', 672, 0),
('CD', 'Congo, the Democratic Republic of the', 243, 0),
('CF', 'Central African Republic', 236, 0),
('CG', 'Congo', 242, 0),
('CH', 'Switzerland', 41, 0),
('CI', 'Cote D\'Ivoire', 225, 0),
('CK', 'Cook Islands', 682, 0),
('CL', 'Chile', 56, 0),
('CM', 'Cameroon', 237, 0),
('CN', 'China', 86, 0),
('CO', 'Colombia', 57, 0),
('CR', 'Costa Rica', 506, 0),
('CU', 'Cuba', 53, 0),
('CV', 'Cape Verde', 238, 0),
('CW', 'Curacao', 599, 0),
('CX', 'Christmas Island', 61, 0),
('CY', 'Cyprus', 357, 1),
('CZ', 'Czech Republic', 420, 1),
('DE', 'Germany', 49, 1),
('DJ', 'Djibouti', 253, 0),
('DK', 'Denmark', 45, 1),
('DM', 'Dominica', 1767, 0),
('DO', 'Dominican Republic', 1809, 0),
('DZ', 'Algeria', 213, 0),
('EC', 'Ecuador', 593, 0),
('EE', 'Estonia', 372, 1),
('EG', 'Egypt', 20, 0),
('EH', 'Western Sahara', 212, 0),
('ER', 'Eritrea', 291, 0),
('ES', 'Spain', 34, 1),
('ET', 'Ethiopia', 251, 0),
('FI', 'Finland', 358, 1),
('FJ', 'Fiji', 679, 0),
('FK', 'Falkland Islands (Malvinas)', 500, 0),
('FM', 'Micronesia, Federated States of', 691, 0),
('FO', 'Faroe Islands', 298, 0),
('FR', 'France', 33, 1),
('GA', 'Gabon', 241, 0),
('GB', 'United Kingdom', 44, 1),
('GD', 'Grenada', 1473, 0),
('GE', 'Georgia', 995, 0),
('GF', 'French Guiana', 594, 0),
('GG', 'Guernsey', 44, 0),
('GH', 'Ghana', 233, 0),
('GI', 'Gibraltar', 350, 0),
('GL', 'Greenland', 299, 0),
('GM', 'Gambia', 220, 0),
('GN', 'Guinea', 224, 0),
('GP', 'Guadeloupe', 590, 0),
('GQ', 'Equatorial Guinea', 240, 0),
('GR', 'Greece', 30, 1),
('GS', 'South Georgia and the South Sandwich Islands', 0, 0),
('GT', 'Guatemala', 502, 0),
('GU', 'Guam', 1671, 0),
('GW', 'Guinea-Bissau', 245, 0),
('GY', 'Guyana', 592, 0),
('HK', 'Hong Kong', 852, 0),
('HM', 'Heard Island and Mcdonald Islands', 0, 0),
('HN', 'Honduras', 504, 0),
('HR', 'Croatia', 385, 1),
('HT', 'Haiti', 509, 0),
('HU', 'Hungary', 36, 1),
('ID', 'Indonesia', 62, 0),
('IE', 'Ireland', 353, 1),
('IL', 'Israel', 972, 0),
('IM', 'Isle of Man', 44, 0),
('IN', 'India', 91, 0),
('IO', 'British Indian Ocean Territory', 246, 0),
('IQ', 'Iraq', 964, 0),
('IR', 'Iran, Islamic Republic of', 98, 0),
('IS', 'Iceland', 354, 0),
('IT', 'Italy', 39, 1),
('JE', 'Jersey', 44, 0),
('JM', 'Jamaica', 1876, 0),
('JO', 'Jordan', 962, 0),
('JP', 'Japan', 81, 0),
('KE', 'Kenya', 254, 0),
('KG', 'Kyrgyzstan', 996, 0),
('KH', 'Cambodia', 855, 0),
('KI', 'Kiribati', 686, 0),
('KM', 'Comoros', 269, 0),
('KN', 'Saint Kitts and Nevis', 1869, 0),
('KP', 'Korea, Democratic People\'s Republic of', 850, 0),
('KR', 'Korea, Republic of', 82, 0),
('KW', 'Kuwait', 965, 0),
('KY', 'Cayman Islands', 1345, 0),
('KZ', 'Kazakhstan', 7, 0),
('LA', 'Lao People\'s Democratic Republic', 856, 0),
('LB', 'Lebanon', 961, 0),
('LC', 'Saint Lucia', 1758, 0),
('LI', 'Liechtenstein', 423, 0),
('LK', 'Sri Lanka', 94, 0),
('LR', 'Liberia', 231, 0),
('LS', 'Lesotho', 266, 0),
('LT', 'Lithuania', 370, 1),
('LU', 'Luxembourg', 352, 1),
('LV', 'Latvia', 371, 1),
('LY', 'Libyan Arab Jamahiriya', 218, 0),
('MA', 'Morocco', 212, 0),
('MC', 'Monaco', 377, 0),
('MD', 'Moldova, Republic of', 373, 0),
('ME', 'Montenegro', 382, 0),
('MF', 'Saint Martin', 590, 0),
('MG', 'Madagascar', 261, 0),
('MH', 'Marshall Islands', 692, 0),
('MK', 'Macedonia, the Former Yugoslav Republic of', 389, 0),
('ML', 'Mali', 223, 0),
('MM', 'Myanmar', 95, 0),
('MN', 'Mongolia', 976, 0),
('MO', 'Macao', 853, 0),
('MP', 'Northern Mariana Islands', 1670, 0),
('MQ', 'Martinique', 596, 0),
('MR', 'Mauritania', 222, 0),
('MS', 'Montserrat', 1664, 0),
('MT', 'Malta', 356, 1),
('MU', 'Mauritius', 230, 0),
('MV', 'Maldives', 960, 0),
('MW', 'Malawi', 265, 0),
('MX', 'Mexico', 52, 0),
('MY', 'Malaysia', 60, 0),
('MZ', 'Mozambique', 258, 0),
('NA', 'Namibia', 264, 0),
('NC', 'New Caledonia', 687, 0),
('NE', 'Niger', 227, 0),
('NF', 'Norfolk Island', 672, 0),
('NG', 'Nigeria', 234, 0),
('NI', 'Nicaragua', 505, 0),
('NL', 'Netherlands', 31, 1),
('NO', 'Norway', 47, 0),
('NP', 'Nepal', 977, 0),
('NR', 'Nauru', 674, 0),
('NU', 'Niue', 683, 0),
('NZ', 'New Zealand', 64, 0),
('OM', 'Oman', 968, 0),
('PA', 'Panama', 507, 0),
('PE', 'Peru', 51, 0),
('PF', 'French Polynesia', 689, 0),
('PG', 'Papua New Guinea', 675, 0),
('PH', 'Philippines', 63, 0),
('PK', 'Pakistan', 92, 0),
('PL', 'Poland', 48, 1),
('PM', 'Saint Pierre and Miquelon', 508, 0),
('PN', 'Pitcairn', 0, 0),
('PR', 'Puerto Rico', 1787, 0),
('PS', 'Palestinian Territory, Occupied', 970, 0),
('PT', 'Portugal', 351, 1),
('PW', 'Palau', 680, 0),
('PY', 'Paraguay', 595, 0),
('QA', 'Qatar', 974, 0),
('RE', 'Reunion', 262, 0),
('RO', 'Romania', 40, 1),
('RS', 'Serbia', 381, 0),
('RU', 'Russian Federation', 7, 0),
('RW', 'Rwanda', 250, 0),
('SA', 'Saudi Arabia', 966, 0),
('SB', 'Solomon Islands', 677, 0),
('SC', 'Seychelles', 248, 0),
('SD', 'Sudan', 249, 0),
('SE', 'Sweden', 46, 1),
('SG', 'Singapore', 65, 0),
('SH', 'Saint Helena', 290, 0),
('SI', 'Slovenia', 386, 1),
('SJ', 'Svalbard and Jan Mayen', 47, 0),
('SK', 'Slovakia', 421, 1),
('SL', 'Sierra Leone', 232, 0),
('SM', 'San Marino', 378, 0),
('SN', 'Senegal', 221, 0),
('SO', 'Somalia', 252, 0),
('SR', 'Suriname', 597, 0),
('SS', 'South Sudan', 211, 0),
('ST', 'Sao Tome and Principe', 239, 0),
('SV', 'El Salvador', 503, 0),
('SX', 'Sint Maarten', 1, 0),
('SY', 'Syrian Arab Republic', 963, 0),
('SZ', 'Swaziland', 268, 0),
('TC', 'Turks and Caicos Islands', 1649, 0),
('TD', 'Chad', 235, 0),
('TF', 'French Southern Territories', 0, 0),
('TG', 'Togo', 228, 0),
('TH', 'Thailand', 66, 0),
('TJ', 'Tajikistan', 992, 0),
('TK', 'Tokelau', 690, 0),
('TL', 'Timor-Leste', 670, 0),
('TM', 'Turkmenistan', 7370, 0),
('TN', 'Tunisia', 216, 0),
('TO', 'Tonga', 676, 0),
('TR', 'Turkey', 90, 0),
('TT', 'Trinidad and Tobago', 1868, 0),
('TV', 'Tuvalu', 688, 0),
('TW', 'Taiwan, Province of China', 886, 0),
('TZ', 'Tanzania, United Republic of', 255, 0),
('UA', 'Ukraine', 380, 0),
('UG', 'Uganda', 256, 0),
('UM', 'United States Minor Outlying Islands', 1, 0),
('US', 'United States', 1, 0),
('UY', 'Uruguay', 598, 0),
('UZ', 'Uzbekistan', 998, 0),
('VA', 'Holy See (Vatican City State)', 39, 0),
('VC', 'Saint Vincent and the Grenadines', 1784, 0),
('VE', 'Venezuela', 58, 0),
('VG', 'Virgin Islands, British', 1284, 0),
('VI', 'Virgin Islands, U.s.', 1340, 0),
('VN', 'Viet Nam', 84, 0),
('VU', 'Vanuatu', 678, 0),
('WF', 'Wallis and Futuna', 681, 0),
('WS', 'Samoa', 684, 0),
('XK', 'Kosovo', 381, 0),
('YE', 'Yemen', 967, 0),
('YT', 'Mayotte', 269, 0),
('ZA', 'South Africa', 27, 0),
('ZM', 'Zambia', 260, 0),
('ZW', 'Zimbabwe', 263, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'organization',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'First name',
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Last name',
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_nr` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Tax/VAT Identification Number',
  `registration_nr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company/Trade Registration Number',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_purchase_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `address_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitations`
--

CREATE TABLE `invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`options`)),
  `expires_at` timestamp NULL DEFAULT NULL,
  `utilized_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conversions_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`generated_conversions`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`, `uuid`, `conversions_disk`, `generated_conversions`) VALUES
(13, 'product', 2, 'default', 'Hb1bcbd0c230645e09d83547ae8546056A', 'Hb1bcbd0c230645e09d83547ae8546056A.jpg', 'image/jpeg', 'public', 48272, '[]', '[]', '[]', 1, '2021-03-23 02:39:05', '2021-03-23 02:39:07', '7ff15d78-0e0b-4739-8b4a-bed251a389cf', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(14, 'product', 2, 'default', 'H3d15c424a7a14b198cdab8cecd016681t', 'H3d15c424a7a14b198cdab8cecd016681t.jpg', 'image/jpeg', 'public', 319537, '[]', '[]', '[]', 2, '2021-03-23 03:08:21', '2021-03-23 03:08:24', 'f50968cb-dd12-4942-9d30-4424dc6f6c02', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(15, 'product', 2, 'default', 'H5e3c9d9697da48c784530a5f8e7ba785P', 'H5e3c9d9697da48c784530a5f8e7ba785P.jpg', 'image/jpeg', 'public', 362638, '[]', '[]', '[]', 3, '2021-03-23 03:08:24', '2021-03-23 03:08:28', '35c084c7-195b-41e9-8eb2-442364d1dc9c', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(16, 'product', 2, 'default', 'H6aa7494c6f25423cb56467efb7614d0fX', 'H6aa7494c6f25423cb56467efb7614d0fX.jpg', 'image/jpeg', 'public', 403541, '[]', '[]', '[]', 4, '2021-03-23 03:08:28', '2021-03-23 03:08:30', 'dcb1dd15-c029-4b21-aebc-cb283dfbfe9a', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(17, 'product', 2, 'default', 'H8aa0c28df03344819c52b472fa2f2c81k (1)', 'H8aa0c28df03344819c52b472fa2f2c81k-(1).jpg', 'image/jpeg', 'public', 202840, '[]', '[]', '[]', 5, '2021-03-23 03:08:30', '2021-03-23 03:08:32', '8df07b6c-a927-492b-a0b3-0290bd401faa', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(18, 'product', 2, 'default', 'H8fcab1572c3a4370a2e7ca0b5745fd486', 'H8fcab1572c3a4370a2e7ca0b5745fd486.jpg', 'image/jpeg', 'public', 861022, '[]', '[]', '[]', 6, '2021-03-23 03:08:32', '2021-03-23 03:08:34', '6abf6986-2f9b-47c0-a661-7a576db30440', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(19, 'product', 2, 'default', 'Had309521f0cb473f998c51aaf4c48a07G', 'Had309521f0cb473f998c51aaf4c48a07G.jpg', 'image/jpeg', 'public', 100869, '[]', '[]', '[]', 7, '2021-03-23 03:08:34', '2021-03-23 03:08:37', 'dbac8f47-67dc-4864-98bd-892034d923c3', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(20, 'product', 2, 'default', 'Hd88891237a8641d5b09eedeaa3e6d9e1h', 'Hd88891237a8641d5b09eedeaa3e6d9e1h.jpg', 'image/jpeg', 'public', 375580, '[]', '[]', '[]', 8, '2021-03-23 03:08:37', '2021-03-23 03:08:40', '6d401f52-37dc-41d1-92f9-9a02ce70c6a8', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(21, 'product', 2, 'default', 'He82852b5fd094aa9aa01096a2a8e8b0bM', 'He82852b5fd094aa9aa01096a2a8e8b0bM.jpg', 'image/jpeg', 'public', 357241, '[]', '[]', '[]', 9, '2021-03-23 03:08:40', '2021-03-23 03:08:43', '9789ca91-2834-433d-80e0-d5e6459bff15', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(22, 'taxonomy', 1, 'default', '0132_637324252136928732', '0132_637324252136928732.jpg', 'image/jpeg', 'public', 256602, '[]', '[]', '[]', 10, '2021-03-23 03:13:04', '2021-03-23 03:13:05', '4e262d2c-c54e-4ee0-86ca-0c3327fcc424', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(23, 'taxon', 1, 'default', 'Hd88891237a8641d5b09eedeaa3e6d9e1h', 'Hd88891237a8641d5b09eedeaa3e6d9e1h.jpg', 'image/jpeg', 'public', 375580, '[]', '[]', '[]', 11, '2021-03-23 03:20:15', '2021-03-23 03:20:17', 'fb04c3a7-2de5-4ea8-bbe5-ebc763a472a1', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(24, 'taxon', 2, 'default', 'Hd88891237a8641d5b09eedeaa3e6d9e1h', 'Hd88891237a8641d5b09eedeaa3e6d9e1h.jpg', 'image/jpeg', 'public', 375580, '[]', '[]', '[]', 12, '2021-03-23 03:22:45', '2021-03-23 03:22:46', 'c770e949-8465-482d-9aa3-c19f2169aa22', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(26, 'product', 3, 'default', '19121388_637d79', '19121388_637d79.jfif', 'image/jpeg', 'public', 44715, '[]', '[]', '[]', 13, '2021-04-07 03:44:05', '2021-04-07 03:44:07', 'a2a86b1e-1064-4c3f-9881-2783ac6c2cf3', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(27, 'product', 3, 'default', '19121388_c3a3d0', '19121388_c3a3d0.jfif', 'image/jpeg', 'public', 66324, '[]', '[]', '[]', 14, '2021-04-07 03:44:19', '2021-04-07 03:44:21', '36724df7-6c5a-46ca-a65e-3bee03304352', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(28, 'taxon', 4, 'default', '19121388_c3a3d0', '19121388_c3a3d0.jfif', 'image/jpeg', 'public', 66324, '[]', '[]', '[]', 15, '2021-04-07 03:47:00', '2021-04-07 03:47:02', '4c53dc43-2a3d-412d-a7ca-8e5ef65fbe01', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(29, 'product', 4, 'default', 'H3b89a2b8311b4b71bd8f39e91fd56de7G', 'H3b89a2b8311b4b71bd8f39e91fd56de7G.jpg', 'image/jpeg', 'public', 85924, '[]', '[]', '[]', 16, '2021-06-23 12:02:54', '2021-06-23 12:02:56', '9d6d1912-23a6-4558-9955-b7995538d216', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(30, 'product', 4, 'default', 'H57925c1212514ae9ba4aac39121f174dl', 'H57925c1212514ae9ba4aac39121f174dl.jpg', 'image/jpeg', 'public', 228418, '[]', '[]', '[]', 17, '2021-06-23 12:06:45', '2021-06-23 12:06:46', '5a7100cc-bc24-4cf5-aaae-ffa136efbb20', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(31, 'product', 4, 'default', 'H1124390b872342d98be32375a8b58f2cF', 'H1124390b872342d98be32375a8b58f2cF.jpg', 'image/jpeg', 'public', 123116, '[]', '[]', '[]', 18, '2021-06-23 12:06:46', '2021-06-23 12:06:47', '6695885f-35ef-4553-aa31-04f03eff5448', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(32, 'product', 4, 'default', 'H3a9ba894acaf4d7398361ef16cfeec22r', 'H3a9ba894acaf4d7398361ef16cfeec22r.jpg', 'image/jpeg', 'public', 91441, '[]', '[]', '[]', 19, '2021-06-23 12:06:47', '2021-06-23 12:06:49', 'bc45efd9-f340-4d84-9ebe-0a302ce1a1c7', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(33, 'product', 4, 'default', 'Hf0f388bc8619441a9b91145d423109d8h', 'Hf0f388bc8619441a9b91145d423109d8h.jpg', 'image/jpeg', 'public', 38815, '[]', '[]', '[]', 20, '2021-06-23 12:06:49', '2021-06-23 12:06:50', '69766268-1b53-4b14-9b67-bdf914f266c9', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(34, 'taxonomy', 2, 'default', '_306937_2_5f04c49e0730f', '_306937_2_5f04c49e0730f.jpg', 'image/jpeg', 'public', 108815, '[]', '[]', '[]', 21, '2021-06-23 13:27:27', '2021-06-23 13:27:28', '868c469d-54fb-4838-854b-c714c248478f', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(35, 'taxon', 6, 'default', 'iStock_000012758744_Small-726x483', 'iStock_000012758744_Small-726x483.jpg', 'image/jpeg', 'public', 112300, '[]', '[]', '[]', 22, '2021-06-23 15:52:51', '2021-06-23 15:52:53', 'd7e69f01-582f-44a6-9c3d-9aceb0969313', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(36, 'product', 5, 'default', 'H4b5065ccb1bf4fb9b68a6796b045c6ecN', 'H4b5065ccb1bf4fb9b68a6796b045c6ecN.jpg', 'image/jpeg', 'public', 123489, '[]', '[]', '[]', 23, '2021-06-23 16:03:09', '2021-06-23 16:03:10', 'b7e90312-1530-449f-89f0-064fd1429bcb', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(37, 'product', 5, 'default', 'H7b8f768453404d2e87dc1bdaa56d4704A', 'H7b8f768453404d2e87dc1bdaa56d4704A.jpg', 'image/jpeg', 'public', 48431, '[]', '[]', '[]', 24, '2021-06-23 16:03:55', '2021-06-23 16:03:56', '1f27e21a-2600-4d48-aeca-895a53af8664', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(38, 'product', 6, 'default', 'H76f21bc0519d49298dfde0bf96cb6234l', 'H76f21bc0519d49298dfde0bf96cb6234l.jpg', 'image/jpeg', 'public', 193396, '[]', '[]', '[]', 25, '2021-06-30 06:35:07', '2021-06-30 06:35:09', 'a192dea4-214a-4f41-9954-7d7de8913131', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(39, 'product', 6, 'default', 'He850f3b52d4e4a7aa6215e5be8411ab2V (1)', 'He850f3b52d4e4a7aa6215e5be8411ab2V-(1).jpg', 'image/jpeg', 'public', 237417, '[]', '[]', '[]', 26, '2021-06-30 06:37:19', '2021-06-30 06:37:20', '354ac982-42ca-4cb3-bad0-c6ed7ef4cb53', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(40, 'product', 6, 'default', 'H06605c2d724e437a989226edbb7f10bd9', 'H06605c2d724e437a989226edbb7f10bd9.jpg', 'image/jpeg', 'public', 262449, '[]', '[]', '[]', 27, '2021-06-30 06:37:20', '2021-06-30 06:37:21', '8ef940ec-9f4a-4327-885e-e1480a609f48', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(41, 'product', 6, 'default', 'H9c0b970d48564663ba45f3d937f32893v', 'H9c0b970d48564663ba45f3d937f32893v.jpg', 'image/jpeg', 'public', 251247, '[]', '[]', '[]', 28, '2021-06-30 06:37:21', '2021-06-30 06:37:22', '9c3bec51-320b-460c-a20f-ebe96c58cb2e', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(42, 'product', 6, 'default', 'H758a25a6663f46379abee0fade135efbY', 'H758a25a6663f46379abee0fade135efbY.jpg', 'image/jpeg', 'public', 1210643, '[]', '[]', '[]', 29, '2021-06-30 06:37:22', '2021-06-30 06:37:28', 'c06b0b38-8d14-4c55-82cc-eb792ca360b4', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(43, 'product', 6, 'default', 'H64e960afc6284ab5ae1843364671ba04m', 'H64e960afc6284ab5ae1843364671ba04m.jpg', 'image/jpeg', 'public', 272627, '[]', '[]', '[]', 30, '2021-06-30 06:37:28', '2021-06-30 06:37:29', '37e6d1f6-056e-439c-94ba-6c7124e7f3b1', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(44, 'product', 6, 'default', 'H46cf622ea8d943e6b2509dd9442a92e0A', 'H46cf622ea8d943e6b2509dd9442a92e0A.jpg', 'image/jpeg', 'public', 211144, '[]', '[]', '[]', 31, '2021-06-30 06:37:29', '2021-06-30 06:37:30', 'f0c2b7eb-8995-43ec-8d56-1b813c317974', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(45, 'product', 6, 'default', 'H73899d13d95d4727a7e32b771d41c804d', 'H73899d13d95d4727a7e32b771d41c804d.jpg', 'image/jpeg', 'public', 75902, '[]', '[]', '[]', 32, '2021-06-30 06:37:30', '2021-06-30 06:37:31', '8d7af83d-a193-48f3-ba68-85db44fb96ba', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(46, 'product', 6, 'default', 'Hfa7945360c044ce3b723051737b9ee4ao', 'Hfa7945360c044ce3b723051737b9ee4ao.jpg', 'image/jpeg', 'public', 57396, '[]', '[]', '[]', 33, '2021-06-30 06:37:31', '2021-06-30 06:37:33', 'd1de72ed-efbd-417a-8884-d93965a453fe', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(47, 'product', 7, 'default', 'H81aa7ed591f543ee9de129c0cdf14dfe9', 'H81aa7ed591f543ee9de129c0cdf14dfe9.jpg', 'image/jpeg', 'public', 533737, '[]', '[]', '[]', 34, '2021-07-13 09:49:06', '2021-07-13 09:49:08', '1f2b72ef-088e-418f-ba46-0d1ddfa30d1b', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(48, 'product', 8, 'default', 'H5f31c2f18a574c76b094bd6934410aacI', 'H5f31c2f18a574c76b094bd6934410aacI.jpg', 'image/jpeg', 'public', 355294, '[]', '[]', '[]', 35, '2021-07-13 09:49:57', '2021-07-13 09:49:58', '17215b07-98df-46a5-ae95-164cb2d0eef8', 'public', '{\"thumbnail\":true,\"medium\":true}'),
(49, 'taxon', 7, 'default', 'H0b7a62abcf2f43e391713d060cf22d95Q', 'H0b7a62abcf2f43e391713d060cf22d95Q.jpg', 'image/jpeg', 'public', 320131, '[]', '[]', '[]', 36, '2021-07-14 00:20:18', '2021-07-14 00:20:20', '2485b240-5c4b-422e-ba89-f9ac8f410e1d', 'public', '{\"thumbnail\":true,\"medium\":true}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_11_24_104017_create_countries_table', 1),
(4, '2016_11_24_104459_create_provinces_table', 1),
(5, '2016_12_03_110323_create_addresses_table', 1),
(6, '2016_12_04_104214_create_persons_table', 1),
(7, '2016_12_04_191141_create_organizations_table', 1),
(8, '2016_12_18_113707_extend_users_table', 1),
(9, '2016_12_18_121118_create_profiles_table', 1),
(10, '2017_05_31_113121_create_acl_tables', 1),
(11, '2017_06_12_073443_create_appshell_permissions', 1),
(12, '2017_07_24_194147_create_customers_table', 1),
(13, '2017_09_26_145245_create_customer_addresses_table', 1),
(14, '2017_10_07_133259_create_products_table', 1),
(15, '2017_10_19_192447_create_vanilo_permissions', 1),
(16, '2017_10_28_111947_create_carts_table', 1),
(17, '2017_10_29_224033_create_cart_items_table', 1),
(18, '2017_11_27_131854_create_billpayers_table', 1),
(19, '2017_11_27_131855_create_orders_table', 1),
(20, '2017_11_27_145105_create_order_items_table', 1),
(21, '2018_02_26_213828_create_gears_tables', 1),
(22, '2018_05_12_100622_create_media_table', 1),
(23, '2018_05_13_105644_create_media_permissions', 1),
(24, '2018_05_27_210939_create_settings_permissions', 1),
(25, '2018_08_24_160805_create_taxonomies_table', 1),
(26, '2018_08_24_165408_create_taxons_table', 1),
(27, '2018_09_22_092746_create_category_permissions', 1),
(28, '2018_10_15_224808_add_cart_state', 1),
(29, '2018_11_01_181324_add_last_purchase_date_to_customer_table', 1),
(30, '2018_11_04_211505_create_model_taxons_table', 1),
(31, '2018_11_10_204207_add_sales_attributes_to_products', 1),
(32, '2018_12_08_111450_create_properties_table', 1),
(33, '2018_12_08_112321_create_property_values_table', 1),
(34, '2018_12_08_124157_create_model_property_values_table', 1),
(35, '2018_12_09_193651_create_property_permissions', 1),
(36, '2019_04_08_000000_add_stock_field_to_products_table', 1),
(37, '2019_06_29_215847_convert_user_type_to_varchar', 1),
(38, '2019_07_30_040905_create_channels_table', 1),
(39, '2019_07_30_071633_create_channel_permissions', 1),
(40, '2019_08_10_175251_streamline_provinces_table', 1),
(41, '2019_12_17_093757_create_payment_methods_table', 1),
(42, '2019_12_17_094730_create_payments_table', 1),
(43, '2020_05_24_204911_fix_accidental_taxa_named_permissions', 1),
(44, '2020_10_02_230537_upgrade_media_table_to_v8', 1),
(45, '2020_10_25_101244_update_permissions_to_appshell_v2', 1),
(46, '2020_12_08_150233_upgrade_media_table_to_v9', 1),
(47, '2020_12_08_162243_add_payment_method_permissions', 1),
(48, '2020_12_18_140413_create_invitations_table', 1),
(49, '2020_12_19_013824_add_invitation_permissions', 1),
(50, '2020_12_29_124643_add_unique_index_to_order_numbers', 1),
(51, '2021_02_28_161404_add_status_message_to_payments_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_permissions`
--

CREATE TABLE `model_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_property_values`
--

CREATE TABLE `model_property_values` (
  `property_value_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_roles`
--

CREATE TABLE `model_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_roles`
--

INSERT INTO `model_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_taxons`
--

CREATE TABLE `model_taxons` (
  `taxon_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_taxons`
--

INSERT INTO `model_taxons` (`taxon_id`, `model_type`, `model_id`, `created_at`, `updated_at`) VALUES
(1, 'product', 2, NULL, NULL),
(1, 'product', 4, NULL, NULL),
(1, 'product', 6, NULL, NULL),
(2, 'product', 2, NULL, NULL),
(2, 'product', 4, NULL, NULL),
(2, 'product', 6, NULL, NULL),
(3, 'product', 2, NULL, NULL),
(3, 'product', 4, NULL, NULL),
(3, 'product', 6, NULL, NULL),
(4, 'product', 3, NULL, NULL),
(4, 'product', 7, NULL, NULL),
(4, 'product', 8, NULL, NULL),
(5, 'product', 3, NULL, NULL),
(6, 'product', 5, NULL, NULL),
(7, 'product', 7, NULL, NULL),
(7, 'product', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `billpayer_id` int(10) UNSIGNED DEFAULT NULL,
  `shipping_address_id` int(10) UNSIGNED DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The product name at the moment of buying',
  `quantity` int(11) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizations`
--

CREATE TABLE `organizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_nr` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Tax/VAT Identification Number',
  `registration_nr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company/Trade Registration Number',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `payable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payable_id` bigint(20) UNSIGNED NOT NULL,
  `hash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `currency` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `amount_paid` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `status` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `configuration` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`configuration`)),
  `is_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `transaction_count` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'list users', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(2, 'create users', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(3, 'view users', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(4, 'edit users', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(5, 'delete users', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(6, 'list roles', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(7, 'create roles', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(8, 'view roles', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(9, 'edit roles', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(10, 'delete roles', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(11, 'list customers', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(12, 'create customers', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(13, 'view customers', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(14, 'edit customers', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(15, 'delete customers', 'web', '2021-03-22 09:31:41', '2021-03-22 09:31:41'),
(16, 'list addresses', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(17, 'create addresses', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(18, 'view addresses', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(19, 'edit addresses', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(20, 'delete addresses', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(21, 'list products', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(22, 'create products', 'web', '2021-03-22 09:31:42', '2021-03-22 09:31:42'),
(23, 'view products', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(24, 'edit products', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(25, 'delete products', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(26, 'list orders', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(27, 'create orders', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(28, 'view orders', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(29, 'edit orders', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(30, 'delete orders', 'web', '2021-03-22 09:31:43', '2021-03-22 09:31:43'),
(31, 'list media', 'web', '2021-03-22 09:31:47', '2021-03-22 09:31:47'),
(32, 'create media', 'web', '2021-03-22 09:31:47', '2021-03-22 09:31:47'),
(33, 'view media', 'web', '2021-03-22 09:31:47', '2021-03-22 09:31:47'),
(34, 'edit media', 'web', '2021-03-22 09:31:47', '2021-03-22 09:31:47'),
(35, 'delete media', 'web', '2021-03-22 09:31:48', '2021-03-22 09:31:48'),
(36, 'list settings', 'web', '2021-03-22 09:31:48', '2021-03-22 09:31:48'),
(37, 'create settings', 'web', '2021-03-22 09:31:48', '2021-03-22 09:31:48'),
(38, 'view settings', 'web', '2021-03-22 09:31:48', '2021-03-22 09:31:48'),
(39, 'edit settings', 'web', '2021-03-22 09:31:48', '2021-03-22 09:31:48'),
(40, 'delete settings', 'web', '2021-03-22 09:31:48', '2021-03-22 09:31:48'),
(41, 'list taxonomies', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:50'),
(42, 'create taxonomies', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:50'),
(43, 'view taxonomies', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:50'),
(44, 'edit taxonomies', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:50'),
(45, 'delete taxonomies', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:50'),
(46, 'list taxons', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:58'),
(47, 'create taxons', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:58'),
(48, 'view taxons', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:58'),
(49, 'edit taxons', 'web', '2021-03-22 09:31:50', '2021-03-22 09:31:58'),
(50, 'delete taxons', 'web', '2021-03-22 09:31:51', '2021-03-22 09:31:58'),
(51, 'list properties', 'web', '2021-03-22 09:31:53', '2021-03-22 09:31:53'),
(52, 'create properties', 'web', '2021-03-22 09:31:54', '2021-03-22 09:31:54'),
(53, 'view properties', 'web', '2021-03-22 09:31:54', '2021-03-22 09:31:54'),
(54, 'edit properties', 'web', '2021-03-22 09:31:54', '2021-03-22 09:31:54'),
(55, 'delete properties', 'web', '2021-03-22 09:31:54', '2021-03-22 09:31:54'),
(56, 'list property values', 'web', '2021-03-22 09:31:54', '2021-03-22 09:31:59'),
(57, 'create property values', 'web', '2021-03-22 09:31:55', '2021-03-22 09:31:59'),
(58, 'view property values', 'web', '2021-03-22 09:31:55', '2021-03-22 09:31:59'),
(59, 'edit property values', 'web', '2021-03-22 09:31:55', '2021-03-22 09:31:59'),
(60, 'delete property values', 'web', '2021-03-22 09:31:55', '2021-03-22 09:31:59'),
(61, 'list channels', 'web', '2021-03-22 09:31:56', '2021-03-22 09:31:56'),
(62, 'create channels', 'web', '2021-03-22 09:31:56', '2021-03-22 09:31:56'),
(63, 'view channels', 'web', '2021-03-22 09:31:56', '2021-03-22 09:31:56'),
(64, 'edit channels', 'web', '2021-03-22 09:31:56', '2021-03-22 09:31:56'),
(65, 'delete channels', 'web', '2021-03-22 09:31:56', '2021-03-22 09:31:56'),
(66, 'list payment methods', 'web', '2021-03-22 09:31:59', '2021-03-22 09:31:59'),
(67, 'create payment methods', 'web', '2021-03-22 09:31:59', '2021-03-22 09:31:59'),
(68, 'view payment methods', 'web', '2021-03-22 09:32:00', '2021-03-22 09:32:00'),
(69, 'edit payment methods', 'web', '2021-03-22 09:32:00', '2021-03-22 09:32:00'),
(70, 'delete payment methods', 'web', '2021-03-22 09:32:00', '2021-03-22 09:32:00'),
(71, 'list invitations', 'web', '2021-03-22 09:32:01', '2021-03-22 09:32:01'),
(72, 'create invitations', 'web', '2021-03-22 09:32:01', '2021-03-22 09:32:01'),
(73, 'view invitations', 'web', '2021-03-22 09:32:01', '2021-03-22 09:32:01'),
(74, 'edit invitations', 'web', '2021-03-22 09:32:01', '2021-03-22 09:32:01'),
(75, 'delete invitations', 'web', '2021-03-22 09:32:01', '2021-03-22 09:32:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE `persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'First name',
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Last Name',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('','m','f') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nin` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'National Identification Number',
  `nameorder` enum('western','eastern') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'western' COMMENT 'western: First Last, eastern: Last First',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferences`
--

CREATE TABLE `preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,4) DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('draft','inactive','active','unavailable','retired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `ext_title` varchar(511) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `units_sold` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `last_sale_at` datetime DEFAULT NULL,
  `stock` decimal(15,4) NOT NULL DEFAULT 0.0000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `sku`, `price`, `excerpt`, `description`, `state`, `ext_title`, `meta_keywords`, `meta_description`, `deleted_at`, `created_at`, `updated_at`, `units_sold`, `last_sale_at`, `stock`) VALUES
(2, 'Audifonos I9000 TWS', 'audifonos-i9000-tws', '001', '300.0000', NULL, 'hola', 'active', NULL, NULL, NULL, NULL, '2021-03-23 02:36:44', '2021-03-23 02:36:44', 0, NULL, '10.0000'),
(3, 'Dz 09 smartwatch', 'dz-09-smartwatch', '002', '150.0000', NULL, 'Reloj celular inteligente, con camara ranura para sim y micro SD perfecto para contestar llamadas.', 'active', NULL, NULL, NULL, NULL, '2021-04-07 03:29:08', '2021-04-07 03:29:08', 0, NULL, '1.0000'),
(4, 'Audífonos Bluetooth i12 TWS', 'audifonos-bluetooth-i12-tws', '003', '149.0000', 'Audifonos inalambricos.', 'Bluetooth 5.0 Compatible con iOS y Android\r\n10 Metros de alcance Inalámbrico\r\nBatería de 30 mAh por auricular y 300 mAh de la Base\r\nDuración de una Carga 2-3 Horas\r\nControl de Música Touch\r\nMicrófono incorporado para asistente de voz y llamadas\r\n\r\nDescripción:\r\n\r\nContenido de la Caja:\r\nAudífonos Inalámbricos TWS i12\r\nManual de Usuario: Ingles y chino\r\nCable de Carga Lightning\r\n\r\nBluetoooth: 5.0\r\nAlcance inalámbrico: 10 Metros\r\nCompatible: Apple y Android\r\nTiempo de Carga Audífonos: 1 Hora Aproximadamente\r\nMicrófono: Sí\r\nMantener presionado por 3 Segundos llamar al asistente de voz\r\nCapacidad Batería:  30 mAh en cada auricular y 300 mAh de la Base\r\n\r\nDetalles\r\nEnvío a domicilio GRATUITO dentro del perímetro de la Sumpango Sacatepequez.\r\nPara los departamentos hay un recargo de Q45 y la entrega es en un promedio de 72 horas hábiles aproximadamente\r\nLos envíos se realizan de lunes a viernes de 9:00 am a 5:30 pm y sábados de 9:00 am a 12:00 pm en ciudad capital\r\nSi resides en la Sumpango Sacatepequez tu pedido será entregado en el siguiente día hábil o el mismo día realizado la compra.\r\nPuedes pagar al recibir\r\nNo se realizan devoluciones en efectivo.', 'active', 'audifonos bluetooth', 'audifonos bluetooth i12 tws, airpods, audifonos inalambricos, audifonos wifi,', 'audifonos bluetooth i12 tws', NULL, '2021-06-23 12:02:53', '2021-06-23 12:02:53', 0, NULL, '14.0000'),
(5, 'Llavero funk pop Titan Levi', 'llavero-funk-pop-titan-levi', '004', '249.0000', 'Llavero Funk pop', 'Llavero de vinilo FUNK POP Attack on Titan Levi, figura de acción,  figura perfecta para regalo o coleccion.', 'active', 'Llavero Titan Levi', 'Laveros, Funk pop, Titan Levi, figuras coleccionable.', 'Llavero de colección, figura de colección', NULL, '2021-06-23 16:03:09', '2021-06-23 16:03:09', 0, NULL, '1.0000'),
(6, 'Auriculares Air 4 Pro', 'auriculares-air-4-pro', '005', '199.0000', 'Audifonos imitacion aire pods, audifonos aire mini', 'Descripción general\r\n\r\nDetalles rápidos\r\nCertificación:\r\nRohs\r\nEs inalámbrico:\r\nSí\r\nTipo De Wireless:\r\nOtros\r\nTarjeta de Memoria de apoyo:\r\nNo\r\nPrincipio Vocalism:\r\nTecnología híbrida\r\nControl de volumen:\r\nSí\r\nBotón de Control:\r\nNo\r\nMarca:\r\nYuroad\r\nNúmero de Modelo:\r\nBT013\r\nEstilo:\r\nGancho para los oídos\r\nComunicación:\r\nInalámbrico\r\nUso:\r\nReproductor multimedia portátil, Teléfono móvil, Aviación, Ordenador, DJ, Juego, Deportes, Audiófilo, Viajes, Profesional, Audífono, Para Bar Internet\r\nFunción:\r\nImpermeable, Micrófono\r\nLugar del origen:\r\nGuangdong, China\r\nLongitud del cable:\r\n20cm\r\nEstándar impermeable:\r\nIPX-4\r\nCancelación de Ruido activa:\r\nNO\r\nNombre del producto:\r\nWireless BT auriculares\r\nCaracterística:\r\nCómodo\r\nColor:\r\nColores personalizados\r\nPaquete:\r\nPaquete de venta al por menor\r\nEl tiempo de la música:\r\n3 ~ 5 horas\r\nTiempo de carga:\r\n1 hora\r\nTiempo de trabajo:\r\n3-4hours', 'active', 'Audifonos aire 4 pro', 'Audifonos inalambricos, Audifonos bluetooth, Audifonos impermeables, Audifonos inalambricos impermeables.', 'Audifonos inalambricos, Audifonos bluetooth, Audifonos impermeables, Audifonos inalambricos impermeables.', NULL, '2021-06-30 06:35:06', '2021-06-30 06:35:06', 0, NULL, '6.0000'),
(7, 'Reloj pulsera', 'reloj-pulsera', '006', '250.0000', NULL, 'Reloj de mano para hombre', 'active', NULL, NULL, NULL, NULL, '2021-07-13 09:49:05', '2021-07-13 09:49:05', 0, NULL, '2.0000'),
(8, 'Reloj pulsera', 'reloj-pulsera-2', '007', '250.0000', NULL, 'Reloj de mano para hombre', 'active', NULL, NULL, NULL, NULL, '2021-07-13 09:49:21', '2021-07-13 09:49:21', 0, NULL, '2.0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `person_id` int(10) UNSIGNED NOT NULL,
  `avatar_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `configuration` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`configuration`)),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `properties`
--

INSERT INTO `properties` (`id`, `name`, `type`, `slug`, `configuration`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nuevo', 'text', 'nuevo', NULL, NULL, '2021-06-23 12:04:58', '2021-06-23 12:04:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property_values`
--

CREATE TABLE `property_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'province',
  `code` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'National identification code',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-03-22 09:31:40', '2021-03-22 09:31:40'),
(2, 'Secretaria', 'web', '2021-06-30 06:47:53', '2021-06-30 06:47:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_permissions`
--

CREATE TABLE `role_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_permissions`
--

INSERT INTO `role_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(18, 2),
(19, 1),
(20, 1),
(21, 1),
(21, 2),
(22, 1),
(23, 1),
(23, 2),
(24, 1),
(25, 1),
(26, 1),
(26, 2),
(27, 1),
(28, 1),
(28, 2),
(29, 1),
(30, 1),
(31, 1),
(31, 2),
(32, 1),
(33, 1),
(33, 2),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(43, 2),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(48, 2),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(58, 2),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(68, 2),
(69, 1),
(70, 1),
(71, 1),
(71, 2),
(72, 1),
(73, 1),
(74, 1),
(75, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxonomies`
--

CREATE TABLE `taxonomies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `taxonomies`
--

INSERT INTO `taxonomies` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tecnología', 'tecnologia', '2021-03-23 03:11:26', '2021-03-23 03:11:26'),
(2, 'Hogar', 'hogar', '2021-06-23 13:27:26', '2021-06-23 13:27:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxons`
--

CREATE TABLE `taxons` (
  `id` int(10) UNSIGNED NOT NULL,
  `taxonomy_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext_title` varchar(511) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `taxons`
--

INSERT INTO `taxons` (`id`, `taxonomy_id`, `parent_id`, `priority`, `name`, `slug`, `ext_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 10, 'Audio', 'audio', 'audio, para tv,uriculares, proyectores y audio profesional', NULL, 'Audio profesional, auriculares y de mas productos relacionados con televisión y vídeo.', '2021-03-23 03:19:50', '2021-03-23 03:19:50'),
(2, 1, 1, 10, 'Audifonos', 'audifonos', 'audifonos para escuchar musica', NULL, 'audifonos alabricos e inalambricos', '2021-03-23 03:22:45', '2021-03-23 03:22:45'),
(3, 1, 2, 10, 'Audifonos inalambricos', 'audifonos-inalambricos', 'Audifonos inalambricos', NULL, 'airpods, tws.', '2021-03-23 03:23:50', '2021-03-23 03:23:50'),
(4, 1, NULL, 20, 'Reloj', 'reloj', 'Relojes inteligentes y relojes analogos', NULL, 'Todo tipo de relojes para todas las edades', '2021-04-07 03:46:59', '2021-04-07 03:46:59'),
(5, 1, 4, 10, 'Smartwatch', 'smartwatch', 'Relojes inteligentes, Smartwatch', 'Smartwatch', 'todo tipo de relojes inteligentes y accesorios', '2021-04-07 03:48:11', '2021-04-07 03:48:11'),
(6, 2, NULL, 10, 'Juguetes', 'juguetes', 'Juguetes', 'Juguetes de niño, juguetes de niña, juguetes control remoto, juguetes sin baterias, juguetes para niño, juguetes para niña', 'Todo tipo de juguetes para los mas pequeños de la casa.', '2021-06-23 15:52:51', '2021-06-23 15:52:51'),
(7, 1, 4, 20, 'Reloj mano', 'reloj-mano', 'Reloj de mano', 'reloj de cuerda, reloj de pulso, reloj autosustentable', 'Relojes de cuerda, reloj de pulso, reloj autosustentable', '2021-07-14 00:20:17', '2021-07-14 00:21:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `last_login_at` datetime DEFAULT NULL,
  `login_count` int(10) UNSIGNED DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `is_active`, `last_login_at`, `login_count`, `deleted_at`) VALUES
(1, 'Frisly', 'cfrisly@gmail.com', '$2y$10$WrgSLxS4gFbTyzTjrwrmZeiQznDJQ0bme7dglPfHSeExqj0BTQBRS', NULL, '2021-03-22 09:35:03', '2021-07-14 00:26:26', 'admin', 1, '2021-07-13 18:26:26', 34, NULL),
(2, 'Ruben', 'sifpared@gmail.com', '$2y$10$.LRmA96i.FGU5H6qDewEsOyo6X.ykdCwBoW7yk03LDNnJ9MnWlMHG', NULL, '2021-04-23 21:50:28', '2021-04-24 00:22:57', 'client', 1, '2021-04-23 18:22:57', 4, NULL),
(3, 'Lessly Quisquinay', 'lessly@correo.com', '$2y$10$OxgxoZZIUkqO2l1u7qj7gusUr/7N/i9C0mXzCYUJO0pwBuDhgZfDK', NULL, '2021-06-30 06:51:20', '2021-07-01 06:14:36', 'admin', 1, '2021-07-01 00:14:36', 4, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_country_id_foreign` (`country_id`);

--
-- Indices de la tabla `billpayers`
--
ALTER TABLE `billpayers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billpayers_address_id_foreign` (`address_id`);

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invitations_email_unique` (`email`),
  ADD KEY `invitations_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ix_unique_uuid` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_permissions`
--
ALTER TABLE `model_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indices de la tabla `model_property_values`
--
ALTER TABLE `model_property_values`
  ADD PRIMARY KEY (`property_value_id`,`model_id`,`model_type`),
  ADD KEY `model_property_values_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indices de la tabla `model_roles`
--
ALTER TABLE `model_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indices de la tabla `model_taxons`
--
ALTER TABLE `model_taxons`
  ADD PRIMARY KEY (`taxon_id`,`model_id`,`model_type`),
  ADD KEY `model_taxons_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number_unique` (`number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_billpayer_id_foreign` (`billpayer_id`),
  ADD KEY `orders_shipping_address_id_foreign` (`shipping_address_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indices de la tabla `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_hash_unique` (`hash`),
  ADD KEY `payments_payment_method_id_foreign` (`payment_method_id`);

--
-- Indices de la tabla `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `preferences_key_user_id_unique` (`key`,`user_id`),
  ADD KEY `preferences_key_index` (`key`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`),
  ADD KEY `profiles_person_id_foreign` (`person_id`);

--
-- Indices de la tabla `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_slug_unique` (`slug`);

--
-- Indices de la tabla `property_values`
--
ALTER TABLE `property_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_values_property_id_foreign` (`property_id`),
  ADD KEY `property_values_priority_index` (`priority`);

--
-- Indices de la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provinces_country_id_code_index` (`country_id`,`code`),
  ADD KEY `provinces_code_index` (`code`),
  ADD KEY `provinces_parent_id_foreign` (`parent_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `taxonomies`
--
ALTER TABLE `taxonomies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taxonomies_slug_unique` (`slug`);

--
-- Indices de la tabla `taxons`
--
ALTER TABLE `taxons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taxons_taxonomy_id_slug_parent_id_unique` (`taxonomy_id`,`slug`,`parent_id`),
  ADD KEY `taxons_parent_id_foreign` (`parent_id`),
  ADD KEY `taxons_priority_index` (`priority`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `billpayers`
--
ALTER TABLE `billpayers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `property_values`
--
ALTER TABLE `property_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `taxonomies`
--
ALTER TABLE `taxonomies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `taxons`
--
ALTER TABLE `taxons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Filtros para la tabla `billpayers`
--
ALTER TABLE `billpayers`
  ADD CONSTRAINT `billpayers_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);

--
-- Filtros para la tabla `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `invitations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `model_permissions`
--
ALTER TABLE `model_permissions`
  ADD CONSTRAINT `model_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_property_values`
--
ALTER TABLE `model_property_values`
  ADD CONSTRAINT `model_property_values_property_value_id_foreign` FOREIGN KEY (`property_value_id`) REFERENCES `property_values` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_roles`
--
ALTER TABLE `model_roles`
  ADD CONSTRAINT `model_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_taxons`
--
ALTER TABLE `model_taxons`
  ADD CONSTRAINT `model_taxons_taxon_id_foreign` FOREIGN KEY (`taxon_id`) REFERENCES `taxons` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_billpayer_id_foreign` FOREIGN KEY (`billpayer_id`) REFERENCES `billpayers` (`id`),
  ADD CONSTRAINT `orders_shipping_address_id_foreign` FOREIGN KEY (`shipping_address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`);

--
-- Filtros para la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`),
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `property_values`
--
ALTER TABLE `property_values`
  ADD CONSTRAINT `property_values_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `provinces_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `taxons`
--
ALTER TABLE `taxons`
  ADD CONSTRAINT `taxons_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `taxons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `taxons_taxonomy_id_foreign` FOREIGN KEY (`taxonomy_id`) REFERENCES `taxonomies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
