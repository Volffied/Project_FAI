-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 10.45
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proyek_fai`
--
CREATE DATABASE IF NOT EXISTS `db_proyek_fai` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_proyek_fai`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stok` smallint(6) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `kode_kategori` bigint(20) NOT NULL,
  `kode_brand` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `stok`, `gambar`, `status`, `kode_kategori`, `kode_brand`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'C922 Webcam', 2029000, 50, 'https://assets.logitech.com/assets/65479/2/c922-pro-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(2, 'C920 HD PRO Webcam', 1529000, 50, 'https://assets.logitech.com/assets/65478/3/c920-pro-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(3, 'C310 Webcam', 659000, 50, 'https://assets.logitech.com/assets/65486/4/c310-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(4, 'C270 Webcam', 449000, 50, 'https://assets.logitech.com/assets/65480/3/c270-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(5, 'BCC950 Webcam', 3699000, 50, 'https://www.logitech.com/assets/64530/26/conferencecam-bcc950.png', 1, 2, 6, NULL, NULL, NULL),
(6, 'C615 1080p Webcam', 1350000, 50, 'https://assets.logitech.com/assets/65481/4/c615-portable-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(7, 'Kiyo Webcam', 1400000, 50, 'https://assets2.razerzone.com/images/pnx.assets/b0e26b0152bddbb29e25cca21db8efa8/kiyo-base.png', 1, 2, 3, NULL, NULL, NULL),
(8, 'BRIO ULTRA HD PRO Webcam', 3890000, 50, 'https://assets.logitech.com/assets/64939/7/briopictograms.png', 1, 2, 6, NULL, NULL, NULL),
(9, 'C505 HD Webcam', 815000, 50, 'https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/video-conferencing/c505/gallery/c505-gallery-2.png?v=1', 1, 2, 6, NULL, NULL, NULL),
(10, 'ROG STRIX LC360 RGB Cooler', 3750000, 50, 'https://dlcdnwebimgs.asus.com/gain/0F5A6D15-E030-4EB0-84BD-3B86409C9D28/w717/h525', 1, 3, 1, NULL, NULL, NULL),
(11, 'TUF Gaming LC240 RGB Cooler', 2050000, 50, 'https://www.asus.com/media/global/products/80vilufg9yohqbe1/P_setting_xxx_0_90_end_500.png', 1, 3, 1, NULL, NULL, NULL),
(12, 'ROG STRIX LC240 RGB Cooler', 2900000, 50, 'https://dlcdnwebimgs.asus.com/gain/0E4EE232-39CC-4CBF-B304-C48104324F47/w717/h525', 1, 3, 1, NULL, NULL, NULL),
(13, 'AOURUS LIQUID Cooler 240', 2850000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/b4cde679f02ebe609bd5c364087ac426/Product/23527/png/1000', 1, 3, 8, NULL, NULL, NULL),
(14, 'Hydro Series™ H115i RGB Liquid CPU Cooler', 2489000, 50, 'https://www.corsair.com/medias/sys_master/images/images/hd4/h36/9120710492190/-CW-9060038-WW-Gallery-H115i-RGB-PLATINUM-01.png', 1, 3, 11, NULL, NULL, NULL),
(15, 'MAG CoreLiquid 240R Cooler', 1599000, 50, 'https://asset.msi.com/resize/image/global/product/product_5_20200514174401_5ebd12e12f1b3.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 10, NULL, NULL, NULL),
(16, 'Blue™ SATA SSD 250GB', 6400000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(17, 'Blue™ SATA SSD 500GB', 1038000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(18, 'Blue™ SATA SSD 1TB', 1860000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(19, 'BLACK SN750 NVMe™ SSD 250GB', 809000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(20, 'BLACK SN750 NVMe™ SSD 500GB', 2140000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(21, 'SEIREN MINI', 799000, 50, 'https://cdn.mos.cms.futurecdn.net/2dz35EMcWHyakDHxiLsnU6-1200-80.png', 1, 5, 3, NULL, NULL, NULL),
(22, 'SEIREN X', 1849000, 50, 'https://d1k3jiaf8cocae.cloudfront.net/wp-content/uploads/microphone-razer-seiren.png', 1, 5, 3, NULL, NULL, NULL),
(23, 'MM800 Polaris RGB Mouse Pad', 844000, 50, 'https://www.corsair.com/medias/sys_master/images/images/hf5/hc5/9110600974366/-CH-9440020-NA-Gallery-MM800-01.png', 1, 2, 11, NULL, NULL, NULL),
(24, 'QCK PRISM CLOTH Medium Mouse Pad', 570000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/d3/4f/d34f96e2-260a-4287-bb59-d7651342790d/1200x_buy_qck-prism_m_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(25, 'QCK PRISM CLOTH XL Mouse Pad', 850000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/39/24/39247c2d-aa5f-419a-a41c-ff20cad535ef/1200x_buy_qck-prism_xl_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(26, 'QCK PRISM CLOTH 3XL Mouse Pad', 1600000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/63/db/63db8907-a560-4439-a6a4-beae5f37bfa2/qck_prism_3xl_prism_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(27, 'QCK PRISM CLOTH 4XL Mouse Pad', 1850000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/6c/4b/6c4b99b1-8b1c-4809-a23c-727bb8c30414/qck_prism_4xl_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(28, 'QCK G FUEL EDITION Mouse Pad', 1830000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/01140-qck-g-fuel-edition/f7f553d5bdd84acabebba473f57b2f66.png.350x280_q100_crop-fit_optimize.png', 1, 2, 4, NULL, NULL, NULL),
(29, 'QCK FAZE EDITION Mouse Pad', 1830000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/01040-qck-4-faze-clan-edition/7a45b79d05fb4303a597b6e72bfbce26.png.350x280_q100_crop-fit_optimize.png', 1, 2, 4, NULL, NULL, NULL),
(30, 'Firefly Hard Gaming Mouse Pad', 750000, 50, 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/7/22377867/22377867_0fbf3e59-d652-4834-b9f2-fd1035528d30_700_525.png', 1, 2, 3, NULL, NULL, NULL),
(31, 'QCK NEON RIDER Mouse Pad', 380000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/01214-qck-large-neon-rider-edition/e32b574ef3fc47c8a30fc37246861cc5.png.350x280_q100_crop-fit_optimize.png', 1, 2, 4, NULL, NULL, NULL),
(32, 'G640 LARGE CLOTH GAMING Mouse Pad', 599000, 50, 'https://resource.logitechg.com/content/dam/gaming/en/products/g640/g640-gallery-1.png', 1, 2, 6, NULL, NULL, NULL),
(33, 'RX5700XT Gaming X 8GB GDDR6 VGA', 7500000, 50, 'https://asset.msi.com/resize/image/global/product/product_1_20190911133259_5d78870b2757c.png62405b38c58fe0f07fcef2367d8a9ba1/600.png', 1, 3, 10, NULL, NULL, NULL),
(34, 'GEFORCE GTX 1070 TI GAMING 8G VGA', 5900000, 50, 'https://asset.msi.com/resize/image/global/product/product_2_20171026100803_59f14383beebe.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 10, NULL, NULL, NULL),
(35, 'ROG STRIX GeForce RTX 2070 VGA', 8600000, 50, 'https://dlcdnwebimgs.asus.com/gain/3538E379-34A2-47AE-81FD-DF72CB88A40F/w717/h525', 1, 3, 1, NULL, NULL, NULL),
(36, 'GeForce RTX 2080 Gaming X Trio VGA', 8600000, 50, 'https://asset.msi.com/resize/image/global/product/product_2_20180919185410_5ba22ad274fa9.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 10, NULL, NULL, NULL),
(37, 'Radeon RX 550 D5 VGA', 1950000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/16c12c86c485990d501eb1b801d4c322/Product/17196/png/1000', 1, 3, 8, NULL, NULL, NULL),
(38, 'GT 1030 OC VGA', 1100000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/3cbb1a7c3d25f2bf5297cad925582e3f/Product/17404/png/1000', 1, 3, 8, NULL, NULL, NULL),
(39, 'Radeon™ RX 560 Gaming OC 4G VGA', 2000000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/f01c77b1072781d8a5a0022115a36baf/Product/17231/png/1000', 1, 3, 10, NULL, NULL, NULL),
(40, 'GeForce GTX 1050 Ti VGA', 2050000, 50, 'https://asset.msi.com/resize/image/global/product/product_4_20161017104822_58043bf6c379b.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 10, NULL, NULL, NULL),
(41, 'GeForce GTX 1060 WINDFORCE OC VGA', 38650000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/4f41cabdddac5354b336d1f758fc6102/Product/15430/png/1000', 1, 3, 8, NULL, NULL, NULL),
(42, 'Core™ i9 10980XE Extreme Edition Processor', 13400000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/processor-box-core-i9-extreme-edition-1x1.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(43, 'Core™ i9 10900 Processor', 7600000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/badge-corei9-10thgen-rwd.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(44, 'Ryzen™ 5000 Series Processor', 13700000, 50, 'https://www.amd.com/system/files/styles/992px/private/2020-10/648625-vermeer-black-chip-render-1260x709_2.png?itok=b6PL7Emc', 1, 3, 7, NULL, NULL, NULL),
(45, 'Core™ i7 10700 Processor', 4500000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/badge-10th-gen-core-i7-1x1.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(46, 'Pentium® Gold G6400 Processor', 1100000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/processor-badge-pentium-gold-1x1.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(47, 'Ryzen 9 3900X Processor', 8200000, 50, 'https://www.amd.com/system/files/styles/992px/private/2019-11/238593-ryzen-9-pib-left-facing-1260x709_0.png?itok=lahqo3M0', 1, 3, 7, NULL, NULL, NULL),
(48, 'Ryzen 7 3800X Processor', 6300000, 50, 'https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-7-pib-left-facing-1260x709.png?itok=ACRb3hX0', 1, 3, 7, NULL, NULL, NULL),
(49, 'Ryzen 5 3600X Processor', 3200000, 50, 'https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-5-pib-left-facing-1260x709.png?itok=umdtyaSy', 1, 3, 7, NULL, NULL, NULL),
(50, 'Aerox 3 Mouse', 990000, 50, 'https://media.steelseriescdn.com/thumbs/catalog/items/62599/6388035630a44c45a9bf017c005d63ce.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(51, 'Sensei Ten Neon Rider Edition Mouse', 1130000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/01213-sensei-ten-neon-rider-edition/5d4e0f16e11c4e1180f0bc932de13f27.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(52, 'Arctis 7X Wireless Headset', 2500000, 50, 'https://media.steelseriescdn.com/thumbs/catalog/items/61466/06300a7492304a61b9b27d8549c519d1.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(53, 'Arctis 7 White Headset', 2550000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/00968-arctis-7-white-2019-edition/42cf75be63f84d9e871df5adb0f3da54.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(54, 'Mamba Elite Mouse', 890000, 50, 'https://assets3.razerzone.com/aNOUc7Dg3QQquHItgSmcr3AkKZ0=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fha4%2Fh68%2F9004668452894%2FMamba-Elite-Base.png', 1, 5, 3, NULL, NULL, NULL),
(55, 'Ornata V2 US Keyboard', 1400000, 50, 'https://assets3.razerzone.com/9q2HK0XP35dBKD9g3XOAJD-TZrI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb1%2Fh86%2F9020512993310%2FOrnata-V2-Base-500x500.png', 1, 5, 3, NULL, NULL, NULL),
(56, 'K70 RGB MK.2 Mechanical Gaming Keyboard', 1850000, 50, 'https://www.corsair.com/medias/sys_master/images/images/h8f/h80/9029811961886/-CH-9109010-NA-Gallery-K70-RGB-MK2-01.png', 1, 5, 11, NULL, NULL, NULL),
(57, 'Kraken Kitty Quartz Headset', 2100000, 50, 'https://assets3.razerzone.com/djHVzhcNM-4CDUH10OYt3G5U1nM=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb6%2Fh38%2F9004166381598%2F9263550005278.png', 1, 5, 3, NULL, NULL, NULL),
(58, 'Virtuoso Pearl RGB Wireless Headset', 3448000, 50, 'https://www.corsair.com/ww/en/medias/sys_master/images/images/hee/ha8/9597248536606/virtuoso-rgb-config/Gallery/VIRTUOSO_PEARL_01/-virtuoso-rgb-config-Gallery-VIRTUOSO-PEARL-01.png_515Wx515H', 1, 5, 11, NULL, NULL, NULL),
(59, 'HS35 Green Stereo Gaming Headset', 522000, 50, 'https://www.corsair.com/medias/sys_master/images/images/h56/h0c/9254292979742/-CA-9011197-EU-Gallery-HS35-GREEN-01.png', 1, 5, 11, NULL, NULL, NULL),
(60, 'XBOX One Console', 3000000, 50, 'https://www.skinit.com/media/wysiwyg/category/skins/gaming-skins/microsoft/xbox-one-x-desktop.png', 1, 1, 12, NULL, NULL, NULL),
(61, 'PlayStation 5 Console', 5600000, 50, 'https://gmedia.playstation.com/is/image/SIEPDC/playstation-5-with-dualsense-front-product-shot-01-ps5-en-30jul20?$1600px--t$', 1, 1, 2, NULL, NULL, NULL),
(62, 'PlayStation 4 Console', 2800000, 50, 'https://gmedia.playstation.com/is/image/SIEPDC/ps4-slim-image-block-01-en-24jul20?$1600px--t$', 1, 1, 2, NULL, NULL, NULL),
(63, 'ROG SWIFT PG35VQ Monitor', 4500000, 50, 'https://dlcdnwebimgs.asus.com/gain/7EFC8E77-ED9D-4837-81F2-42124966C557/w717/h525', 1, 4, 1, NULL, NULL, NULL),
(64, 'ROG SWIFT PG248Q Monitor', 6300000, 50, 'https://dlcdnwebimgs.asus.com/gain/DCCD2302-9833-40A3-84ED-BA21673DFFA1/w717/h525', 1, 4, 1, NULL, NULL, NULL),
(65, 'ROG STRIX XG258Q Monitor', 6300000, 50, 'https://dlcdnwebimgs.asus.com/gain/958DE1B6-B114-462B-B99C-0BF405763BC9/w717/h525', 1, 4, 1, NULL, NULL, NULL),
(66, 'TUF Gaming VG34VQL1B Gaming Monitor', 6100000, 50, 'https://dlcdnwebimgs.asus.com/gain/37220b4f-dc77-423e-853b-fce0897b8865/', 1, 4, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id_brand` bigint(20) UNSIGNED NOT NULL,
  `nama_brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id_brand`, `nama_brand`, `gambar`, `desc`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ASUS', 'https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo.png', 'a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.', 1, NULL, NULL, NULL),
(2, 'SONY', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Sony_logo.svg/1024px-Sony_logo.svg.png', 'a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo.', 1, NULL, NULL, NULL),
(3, 'RAZER', 'https://d2o7dtsnwzl7g9.cloudfront.net/tekzone/media/image/4d/46/g0/razer-logo.png', 'a Singaporean–American multinational technology company that designs, develops, and sells consumer electronics, financial services, and gaming hardware. Founded by Min-Liang Tan and Robert Krakoff, the company is headquartered in Queenstown, Singapore and Irvine, California, United States.', 1, NULL, NULL, NULL),
(4, 'STEELSERIES', 'https://overclocking.com/wp-content/uploads/2019/10/logo-steelseries.png', 'a Danish manufacturer of gaming peripherals and accessories, including headsets, keyboards, mice, and gaming surfaces headquartered in Frederiskberg, Denmark.', 1, NULL, NULL, NULL),
(5, 'INTEL', 'https://assets.stickpng.com/images/58568d224f6ae202fedf2720.png', 'an American multinational corporation and technology company headquartered in Santa Clara, California, in Silicon Valley.', 1, NULL, NULL, NULL),
(6, 'LOGITECH', 'https://1000logos.net/wp-content/uploads/2020/05/Logitech-Logo.png', 'an American-Swiss manufacturer of computer peripherals and software, with headquarters in Lausanne, Switzerland and Newark, California.', 1, NULL, NULL, NULL),
(7, 'AMD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/AMD_Logo.svg/1200px-AMD_Logo.svg.png', ' an American multinational semiconductor company based in Santa Clara, California, that develops computer processors and related technologies for business and consumer markets.', 1, NULL, NULL, NULL),
(8, 'GIGABYTE', 'https://cdn.freebiesupply.com/logos/large/2x/gigabyte-1-logo-png-transparent.png', 'a Taiwanese manufacturer and distributor of computer hardware. Gigabyte\'s principal business is motherboards.', 1, NULL, NULL, NULL),
(9, 'WD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Western_Digital_logo.svg/1280px-Western_Digital_logo.svg.png', 'an American computer hard disk drive manufacturer and data storage company. It designs, manufactures and sells data technology products, including storage devices, data center systems and cloud storage services.', 1, NULL, NULL, NULL),
(10, 'MSI', 'https://cdn.freebiesupply.com/logos/large/2x/msi-5-logo-png-transparent.png', 'a Taiwanese multinational information technology corporation headquartered in New Taipei City, Taiwan.', 1, NULL, NULL, NULL),
(11, 'CORSAIR', 'https://www.topmarket.co.il/images/feature_variant/14/corsair.png', 'an American computer peripherals and hardware company headquartered in Fremont, California.', 1, NULL, NULL, NULL),
(12, 'MICROSOFT', 'https://svgsilh.com/png-512/80658.png', 'an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services.', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id_cart` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `kode_user` bigint(20) NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `kode_barang`, `kode_user`, `nama_kategori`, `qty`, `created_at`, `updated_at`) VALUES
(8, 3, 2, 'Accessories', 1, '2021-09-25 05:24:35', '2021-09-25 05:24:35'),
(9, 50, 2, 'Gear', 1, '2021-09-25 05:25:01', '2021-09-25 05:25:01'),
(10, 17, 2, 'Component', 1, '2021-09-25 05:25:03', '2021-09-25 05:25:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` int(11) NOT NULL DEFAULT 0,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0 COMMENT '0: Belum, 1:Verified',
  `google_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_member` bigint(20) NOT NULL DEFAULT 1 COMMENT '1(Newborn),2(Knight),3(Sorcerer),4(King),5(Demigod)',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `poin`, `email`, `password`, `notlp`, `alamat`, `gambar`, `status`, `google_id`, `kode_member`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Marvel', 23, 'marvel@gmail.com', '$2y$10$MA0LYhQ0wIINZpcOb5/tLOU1Y8U20ZauOluAopUtRx3K4idmbsdmq', '081231894694', 'Jl Raya', NULL, 1, NULL, 1, NULL, NULL, '2021-12-07 11:02:18'),
(2, 'William', 0, 'robertwilliamt@yahoo.com', '$2y$10$Wia0DlGTasirWUNMNAfsN.CpRZOtbPgknvcIXHibUs7tFuf7Ye.bG', '081231894694', 'Jl Raya', NULL, 1, NULL, 1, NULL, NULL, '2020-12-07 04:41:43'),
(3, 'Samuel', 400, 'sam@gmail.com', '$2y$10$ulYulZKc9zdMqHqdjqc78uevvj5uaZn1Lw8UypfjKWy5rlepJNPcq', '081231894694', 'Jl Raya', NULL, 1, NULL, 3, NULL, NULL, NULL),
(4, 'Yosua Yuwono', 958, 'yosua@gmail.com', '$2y$10$xJJ96jmUMZdwMH0WB32nu.6n7GTVIxTAjjEaz0SckrNDOsMimaWvO', '081231894694', 'Jl Raya', NULL, 0, NULL, 4, NULL, NULL, '2020-12-05 18:21:21'),
(5, 'Mikhael', 1700, 'mimi@gmail.com', '$2y$10$xWuEFju1npL.SJQL3yg4de9Jue5pBY.KcIMNrjbuj6ryJF2oBfBce', '081231894694', 'Jl Raya', NULL, 1, NULL, 5, NULL, NULL, NULL),
(6, 'Kala Sihombing', 950, 'lulut.hassanah@gmail.com', '$2y$10$IPxcoq6TbjKfQ3boIZxkoOrvlQsm2.sBG0/ipRj8xOq1aoorrm826', '(+62) 762 9110 4325', 'Ds. Babadan No. 419, Pagar Alam 11233, KalBar', NULL, 0, NULL, 4, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(7, 'Clara Nurdiyanti S.E.', 150, 'niyaga11@yahoo.com', '$2y$10$nQj9axkMJCEkwHlZliX3TOhY..EOry0BP8CFOchV/payulPNYMwme', '(+62) 262 2687 537', 'Kpg. Salam No. 769, Sukabumi 91825, BaBel', NULL, 0, NULL, 2, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(8, 'Kasiyah Uli Suartini M.Kom.', 150, 'oktaviani.aisyah@gmail.com', '$2y$10$yGzP1q4D5GB75Cf0OKdDQO/5mrfJa9rUWP/XNlDYTy2pqfYL0QJzC', '(+62) 633 7564 814', 'Kpg. Setiabudhi No. 580, Bekasi 57643, SulTra', NULL, 1, NULL, 2, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(9, 'Paiman Jinawi Winarno', 400, 'rnasyiah@yahoo.co.id', '$2y$10$0PkOYNYQrV7Z2i/xaBhid.1E1Mab7nUzUqGPA2mfyRsZcm247C1OO', '0292 8785 802', 'Ds. Setia Budi No. 525, Samarinda 44707, BaBel', NULL, 1, NULL, 3, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(10, 'Prabu Simanjuntak M.Farm', 950, 'putra.paiman@gmail.com', '$2y$10$lwWSHQmek3cNOFoBI8/8uecuM82ytDVtjgR7ztiRyiXKmx3gkVQsu', '(+62) 582 2092 1503', 'Dk. K.H. Maskur No. 412, Kupang 12039, Gorontalo', NULL, 0, NULL, 4, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(11, 'Silvia Widiastuti S.E.I', 400, 'pnamaga@yahoo.co.id', '$2y$10$k61uyknOU9LDcjQuRBfQ9.NM5AdXqW9oj.ZmfAZrGELkiQEYhDEWu', '0787 5064 1665', 'Psr. Dewi Sartika No. 660, Palembang 61445, NTT', NULL, 0, NULL, 3, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(12, 'Kardi Maheswara', 400, 'dadi.mulyani@gmail.com', '$2y$10$odPFKzvB7n5Wjmn59YB4t.xvrr7x7TZQhRScymZnB97R5tZaBRnyO', '026 7656 601', 'Kpg. Lada No. 829, Mataram 24823, SumUt', NULL, 1, NULL, 3, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(13, 'Mahfud Gaduh Salahudin M.Pd', 0, 'permadi.yani@gmail.co.id', '$2y$10$3EckOKoEahsGyM4ATWx9FONuy0a6Wm37DJJm8jnZ5XtiPWa.KD/0u', '0211 2872 1222', 'Jln. Ciumbuleuit No. 188, Metro 49840, NTB', NULL, 1, NULL, 1, NULL, '2020-12-05 12:43:21', '2020-12-05 12:43:21'),
(14, 'Anom Reza Siregar S.Pt', 950, 'ramadan.bakidin@gmail.com', '$2y$10$wFgqLSz2bNHRPHwqOxLEx.Q07j7zb1HvtlK9M3xTDBi6thPdsIYQy', '(+62) 472 4527 225', 'Psr. Gajah Mada No. 549, Sawahlunto 64157, Aceh', NULL, 1, NULL, 4, NULL, '2020-12-05 12:43:22', '2020-12-05 12:43:22'),
(15, 'Gandi Firgantoro S.E.I', 0, 'rudi.mardhiyah@yahoo.co.id', '$2y$10$R86M7Kx7Bo/PO2eNINcaAOgONykrj4XLEekYyoTZqBEQ4b8PazeSW', '(+62) 26 7588 2873', 'Jr. W.R. Supratman No. 904, Kotamobagu 74991, Riau', NULL, 1, NULL, 1, NULL, '2020-12-05 12:43:22', '2020-12-05 12:43:22'),
(16, 'sam', 151, 'samuel1@mhs.stts.edu', '$2y$10$HnVTiblMPPWPHPSsmJxNYeAcXto.8hYwZE6e2Lu.Rgr2hprl18yku', '082247443465', 'jl ngagel', NULL, 0, NULL, 2, NULL, '2020-12-07 04:51:48', '2020-12-07 04:51:48'),
(17, 'ROBERT WILLIAM', 8, 'robert1@mhs.stts.edu', '$2y$10$m43IVnS4K/zRuC0zUjbmwuksHoWzO6oWGYWyrOqzexpv2QSPXKHfi', 'default', 'default', NULL, 0, '107611841412764550078', 1, NULL, '2021-12-07 12:17:07', '2021-12-08 04:05:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dchat`
--

DROP TABLE IF EXISTS `dchat`;
CREATE TABLE `dchat` (
  `id_chat` bigint(20) UNSIGNED NOT NULL,
  `kode_hchat` bigint(20) NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` smallint(6) NOT NULL DEFAULT 0 COMMENT '0: Customer, 1:Pegawai',
  `status` bigint(20) NOT NULL DEFAULT 0 COMMENT '0: unread, 1: read',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dchat`
--

INSERT INTO `dchat` (`id_chat`, `kode_hchat`, `pesan`, `sender`, `jenis`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Halo, Marvel!<br>Ada yang bisa kami bantu?', 'Admin', 1, 1, NULL, '2020-12-05 12:43:17', '2021-12-07 11:08:31'),
(2, 2, 'Halo, William!<br>Ada yang bisa kami bantu?', 'Admin', 1, 1, NULL, '2020-12-05 12:43:18', '2021-09-25 05:37:31'),
(3, 3, 'Halo, Samuel!<br>Ada yang bisa kami bantu?', 'Admin', 1, 0, NULL, '2020-12-05 12:43:18', '2020-12-05 12:43:18'),
(4, 4, 'Halo, Yosua Yuwono!<br>Ada yang bisa kami bantu?', 'Admin', 1, 0, NULL, '2020-12-05 12:43:19', '2020-12-05 12:43:19'),
(5, 5, 'Halo, Mikhael!<br>Ada yang bisa kami bantu?', 'Admin', 1, 0, NULL, '2020-12-05 12:43:19', '2020-12-05 12:43:19'),
(6, 2, 'zzz', 'William', 0, 1, NULL, '2020-12-07 04:44:01', '2020-12-07 10:57:37'),
(7, 6, 'Halo, Sam!<br>Ada yang bisa kami bantu?', 'Admin', 1, 0, NULL, '2020-12-07 04:51:48', NULL),
(8, 2, 'aa', 'William', 0, 1, NULL, '2020-12-07 10:51:54', '2020-12-07 10:57:37'),
(9, 2, 'aa<br>- <i>Hairyanto<i>', 'Hairyanto Marbun S.E.', 1, 1, NULL, '2020-12-07 10:56:34', '2021-09-25 05:37:31'),
(10, 2, 'opo', 'William', 0, 1, NULL, '2020-12-07 10:57:15', '2020-12-07 10:57:37'),
(11, 2, 'opo', 'William', 0, 1, NULL, '2020-12-07 10:57:26', '2020-12-07 10:57:37'),
(12, 2, 'opo', 'William', 0, 0, NULL, '2020-12-07 10:57:39', '2020-12-07 10:57:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dorder`
--

DROP TABLE IF EXISTS `dorder`;
CREATE TABLE `dorder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `kode_horder` bigint(20) NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dorder`
--

INSERT INTO `dorder` (`id`, `qty`, `total`, `kode_horder`, `kode_barang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1529000, 1, 2, NULL, '2020-12-05 12:58:37', NULL),
(2, 1, 2029000, 2, 1, NULL, '2020-12-05 16:15:18', NULL),
(3, 1, 1599000, 3, 15, NULL, '2020-12-05 16:39:07', NULL),
(4, 1, 844000, 4, 23, NULL, '2020-12-05 18:21:21', NULL),
(5, 1, 890000, 4, 54, NULL, '2020-12-05 18:21:21', NULL),
(6, 1, 659000, 5, 3, NULL, '2020-12-07 04:41:43', NULL),
(7, 1, 659000, 6, 3, NULL, '2021-12-06 09:24:22', NULL),
(8, 1, 1849000, 7, 22, NULL, '2021-12-06 10:26:44', NULL),
(9, 1, 5900000, 8, 34, NULL, '2021-12-06 10:47:04', NULL),
(10, 1, 2050000, 9, 11, NULL, '2021-12-07 10:46:35', NULL),
(11, 1, 1529000, 10, 2, NULL, '2021-12-07 10:58:43', NULL),
(12, 1, 1130000, 11, 51, NULL, '2021-12-07 11:02:10', NULL),
(13, 1, 1529000, 12, 2, NULL, '2021-12-08 04:04:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hchat`
--

DROP TABLE IF EXISTS `hchat`;
CREATE TABLE `hchat` (
  `id_hchat` bigint(20) UNSIGNED NOT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `occupied` smallint(6) NOT NULL DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hchat`
--

INSERT INTO `hchat` (`id_hchat`, `kode_customer`, `occupied`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, NULL, NULL),
(2, 2, 0, NULL, NULL, '2020-12-07 10:57:38'),
(3, 3, 0, NULL, NULL, NULL),
(4, 4, 0, NULL, NULL, NULL),
(5, 5, 0, NULL, NULL, NULL),
(6, 16, 0, NULL, '2020-12-07 04:51:48', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `horder`
--

DROP TABLE IF EXISTS `horder`;
CREATE TABLE `horder` (
  `id_horder` bigint(20) UNSIGNED NOT NULL,
  `tanggal_trans` date NOT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `subtotal` bigint(20) NOT NULL COMMENT 'Harga Bersih',
  `grandtotal` bigint(20) NOT NULL,
  `estimasi_waktu` smallint(6) DEFAULT NULL COMMENT 'Dalam Detik',
  `metode_pembayaran` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_order` smallint(6) NOT NULL DEFAULT 0 COMMENT '0:Belum Bayar, 1:Belum diterima, 2:terkirim, 3:selesai, 4:batal',
  `kode_pegawai` bigint(20) DEFAULT NULL,
  `kode_promo` bigint(20) DEFAULT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `horder`
--

INSERT INTO `horder` (`id_horder`, `tanggal_trans`, `tanggal_pengiriman`, `subtotal`, `grandtotal`, `estimasi_waktu`, `metode_pembayaran`, `status_order`, `kode_pegawai`, `kode_promo`, `kode_customer`, `invoice`, `order_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2020-12-05', '2020-12-05', 1529000, 1498420, 10, 'bank_transfer', 1, 2, NULL, 2, NULL, '643068262', NULL, '2020-12-05 12:58:37', '2020-12-05 13:05:36'),
(2, '2020-12-05', NULL, 2029000, 1988420, NULL, 'bank_transfer', 1, NULL, NULL, 2, NULL, '815467501', NULL, '2020-12-05 16:15:17', '2020-12-05 17:44:01'),
(3, '2020-12-05', NULL, 1599000, 1567020, NULL, 'bank_transfer', 1, NULL, NULL, 2, NULL, '922186409', NULL, '2020-12-05 16:39:07', '2020-12-05 17:44:00'),
(4, '2020-12-06', NULL, 1734000, 1595280, NULL, 'bank_transfer', 1, NULL, NULL, 4, NULL, '562270678', NULL, '2020-12-05 18:21:21', '2020-12-05 18:21:39'),
(5, '2020-12-07', NULL, 659000, 579920, NULL, 'bank_transfer', 1, NULL, 1, 2, NULL, '100932000', NULL, '2020-12-07 04:41:43', '2020-12-07 04:42:05'),
(6, '2021-12-06', NULL, 659000, 659000, NULL, 'cstore', 4, NULL, NULL, 1, NULL, '785537465', NULL, '2021-12-06 09:24:21', '2021-12-06 10:32:56'),
(7, '2021-12-06', NULL, 1849000, 1849000, NULL, 'bank_transfer', 4, NULL, NULL, 1, NULL, '1321378005', NULL, '2021-12-06 10:26:44', '2021-12-07 10:57:39'),
(8, '2021-12-06', NULL, 5900000, 5900000, NULL, 'bank_transfer', 4, NULL, NULL, 1, NULL, '1344828831', NULL, '2021-12-06 10:47:04', '2021-12-07 10:57:41'),
(9, '2021-12-07', NULL, 2050000, 1845000, NULL, 'bank_transfer', 1, NULL, 1, 1, NULL, '847460615', NULL, '2021-12-07 10:46:35', '2021-12-07 11:01:29'),
(10, '2021-12-07', NULL, 1529000, 1529000, NULL, 'bank_transfer', 1, NULL, NULL, 1, NULL, '865899994', NULL, '2021-12-07 10:58:42', '2021-12-07 11:01:30'),
(11, '2021-12-07', '2021-12-07', 1130000, 1130000, 20, 'bank_transfer', 3, 2, NULL, 1, 'bukti/LOGITECH-B100.png', '680208451', NULL, '2021-12-07 11:02:10', '2021-12-07 11:06:41'),
(12, '2021-12-08', NULL, 1529000, 1539000, NULL, 'bank_transfer', 1, NULL, NULL, 17, NULL, '259626870', NULL, '2021-12-08 04:04:07', '2021-12-08 04:05:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_member`
--

DROP TABLE IF EXISTS `jenis_member`;
CREATE TABLE `jenis_member` (
  `id_member` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimal_poin` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_member`
--

INSERT INTO `jenis_member` (`id_member`, `nama`, `minimal_poin`, `potongan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'newborn', 0, 0, NULL, NULL, NULL),
(2, 'knight', 150, 2, NULL, NULL, NULL),
(3, 'sorcerer', 400, 5, NULL, NULL, NULL),
(4, 'king', 950, 8, NULL, NULL, NULL),
(5, 'demigod', 1700, 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kat` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kategori`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Console', NULL, NULL, NULL),
(2, 'Accessories', NULL, NULL, NULL),
(3, 'Component', NULL, NULL, NULL),
(4, 'PC', NULL, NULL, NULL),
(5, 'Gear', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(112, '2020_11_21_172509_create_chat_models_table', 1),
(182, '2014_10_12_000000_create_users_table', 2),
(183, '2019_08_19_000000_create_failed_jobs_table', 2),
(184, '2020_11_12_111041_create_pegawai_models_table', 2),
(185, '2020_11_12_111130_create_kategori_models_table', 2),
(186, '2020_11_12_111223_create_barang_models_table', 2),
(187, '2020_11_12_111338_create_promo_models_table', 2),
(188, '2020_11_12_111410_create_customer_models_table', 2),
(189, '2020_11_12_111434_create_jenis_member_models_table', 2),
(190, '2020_11_12_111457_create_horder_models_table', 2),
(191, '2020_11_12_111523_create_dorder_models_table', 2),
(192, '2020_11_12_113414_refresh', 2),
(193, '2020_11_21_173105_create_review_models_table', 2),
(194, '2020_11_23_023234_create_brand_models_table', 2),
(195, '2020_11_25_143956_create_cart_models_table', 2),
(196, '2020_11_30_162625_create_hchat_models_table', 2),
(197, '2020_11_30_162642_create_dchat_models_table', 2),
(198, '2020_12_04_113406_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0a108ed6-3902-4c16-89bb-f6a3bfcc1f09', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"785537465 - Your order successfully cancelled!\",\"kode_horder\":\"6\",\"status\":4}', NULL, '2021-12-06 10:32:56', '2021-12-06 10:32:56'),
('1594a60c-32c2-4cdf-b48d-88a784935ee4', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 17, '{\"chat_isi\":\"259626870 - Your order has been placed!\",\"kode_horder\":12,\"status\":0}', NULL, '2021-12-08 04:04:13', '2021-12-08 04:04:13'),
('268a6b9f-71c1-44b8-bfe4-ac9d3d67624c', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"680208451 - Order Finish !\",\"kode_horder\":\"11\",\"status\":3}', '2021-12-07 11:08:09', '2021-12-07 11:06:41', '2021-12-07 11:08:09'),
('31130c4b-d06e-469f-aff4-28d4943c9be2', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"865899994 - Your order has been placed!\",\"kode_horder\":10,\"status\":0}', NULL, '2021-12-07 10:58:43', '2021-12-07 10:58:43'),
('31c085bc-5de4-456b-adfe-60a9e8b3a3c5', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"847460615 - Your order has been placed!\",\"kode_horder\":9,\"status\":0}', NULL, '2021-12-07 10:46:38', '2021-12-07 10:46:38'),
('411d6a03-f2ac-44e3-ba8c-473e85577eb4', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 4, '{\"chat_isi\":\"562270678 - Your order has been placed!\",\"kode_horder\":4}', '2020-12-06 10:15:48', '2020-12-05 18:21:23', '2020-12-06 10:15:48'),
('74622677-b4f5-4113-a463-cc38dbe35099', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"1321378005 - Your order successfully cancelled!\",\"kode_horder\":\"7\",\"status\":4}', NULL, '2021-12-07 10:57:39', '2021-12-07 10:57:39'),
('7f14efdf-6d99-40ca-9745-4d759fa2749c', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"1344828831 - Your order successfully cancelled!\",\"kode_horder\":\"8\",\"status\":4}', NULL, '2021-12-07 10:57:41', '2021-12-07 10:57:41'),
('a07ae15c-ba3c-4806-8ab9-11660047ba20', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 2, '{\"chat_isi\":\"100932000 - Your order has been placed!\",\"kode_horder\":5,\"status\":0}', '2020-12-07 04:43:14', '2020-12-07 04:41:48', '2020-12-07 04:43:14'),
('a6ba822c-576c-4238-8a8b-a459f310834e', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"1321378005 - Your order has been placed!\",\"kode_horder\":7,\"status\":0}', NULL, '2021-12-06 10:26:45', '2021-12-06 10:26:45'),
('aa936176-5d70-41d9-a5c5-53a5f5268d55', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 2, '{\"chat_isi\":\"815467501 - Your order has been placed!\",\"kode_horder\":2,\"status\":1}', '2020-12-05 17:15:39', '2020-12-05 16:15:18', '2020-12-05 17:15:39'),
('ae8112a7-089c-45da-bfa6-8c6617f5a6c7', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 2, '{\"chat_isi\":\"922186409 - Your order has been placed!\",\"kode_horder\":3}', '2020-12-05 17:15:30', '2020-12-05 16:39:07', '2020-12-05 17:15:30'),
('b0b81563-6057-4240-8106-c79a49f1d60b', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"680208451 - Your order has been placed!\",\"kode_horder\":11,\"status\":0}', NULL, '2021-12-07 11:02:10', '2021-12-07 11:02:10'),
('b200b1fe-5967-4e86-a21a-6a6ecf2aba6f', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"1344828831 - Your order has been placed!\",\"kode_horder\":8,\"status\":0}', NULL, '2021-12-06 10:47:05', '2021-12-06 10:47:05'),
('cdf54bd8-1815-4515-9163-b692f0b49867', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"680208451 - Your order is on the way to you!\",\"kode_horder\":\"11\",\"status\":2}', NULL, '2021-12-07 11:05:41', '2021-12-07 11:05:41'),
('f9307622-41a5-4a34-afee-0f9c9c77d63e', 'App\\Notifications\\OrderNotification', 'App\\Model\\CustomerModel', 1, '{\"chat_isi\":\"785537465 - Your order has been placed!\",\"kode_horder\":6,\"status\":0}', '2021-12-06 09:41:17', '2021-12-06 09:24:26', '2021-12-06 09:41:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` smallint(6) NOT NULL COMMENT '0(Master),1(Admin),2(Kurir),3(Customer Service)',
  `status` smallint(6) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `email`, `password`, `notlp`, `jenis`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Master', 'masteradmin@gmail.com', '$2y$10$Of2BzQiOUhS8B4VLiB.NI.deuT9R0vClL3j3aAVs7jKvABKuj1Koq', '081231894694', 0, 1, NULL, NULL, NULL),
(2, 'Melinda Maryati', 'gada03@gmail.com', '$2y$10$6f0bvcca5RzAxa8Kynqk5ufWFf9OmeQvpfiFf7KQh3lmclYz72gcC', '0410 7292 752', 2, 1, NULL, '2020-12-05 12:43:14', '2021-12-07 11:06:41'),
(3, 'Farhunnisa Usada', 'santoso.karen@yahoo.co.id', '$2y$10$Kc.MRsoQrbNLDglsSNx8qewVULnZOEMWcEUVGgaeCuVHVg5rI1ijm', '(+62) 672 5623 4110', 1, 1, NULL, '2020-12-05 12:43:14', '2020-12-05 12:43:14'),
(4, 'Hairyanto Marbun S.E.', 'gdamanik@yahoo.com', '$2y$10$mnc9RuRd51JlZWIMoLvBRuNJ3UKPazr7S5bVRZI0aSbmoIeEDjZAy', '(+62) 895 8252 1560', 3, 1, NULL, '2020-12-05 12:43:14', '2020-12-05 12:43:14'),
(5, 'Yuliana Anita Rahimah', 'artawan.maryadi@gmail.com', '$2y$10$hv/tm3RyWkwQ/48qozPAUe5CoCzKGJaHY6AmQDVHojpBBWEGNMcfG', '0499 9991 345', 2, 1, NULL, '2020-12-05 12:43:14', '2020-12-05 12:43:14'),
(6, 'Widya Kusmawati S.I.Kom', 'saiful.palastri@gmail.com', '$2y$10$QSlqovBHnGRPchQb.Qhd7urfN.BsjVQvoOm1E3o7Ul5mAJMlgsPAa', '(+62) 28 8964 768', 1, 1, NULL, '2020-12-05 12:43:14', '2020-12-05 12:43:14'),
(7, 'Hasim Uwais', 'uhasanah@yahoo.co.id', '$2y$10$dxXukHNSErxBjj6dHx87C..vn60i1vbZagf0pWV3OdTU2Fi3aA7oi', '(+62) 680 0499 9808', 2, 1, NULL, '2020-12-05 12:43:14', '2020-12-05 12:43:14'),
(8, 'Lukman Mandala', 'prasetyo.laksmiwati@gmail.co.id', '$2y$10$t9V.I8UUFm9gr8NFSgWlgOGSzHPaEX.jY03urYvg4LbOM853zB4WO', '0557 5288 1192', 2, 1, NULL, '2020-12-05 12:43:14', '2020-12-05 12:43:14'),
(9, 'Adikara Utama Marpaung', 'puspa.hastuti@gmail.com', '$2y$10$.cVkmO5KMXa4WCHlZsbZVe.dpjRZEabYJE1guzL7Y2PFEZ8ZR8aA2', '0541 9728 442', 3, 1, NULL, '2020-12-05 12:43:15', '2020-12-05 12:43:15'),
(10, 'Jaka Hakim', 'anggriawan.bakiono@yahoo.co.id', '$2y$10$IlQ5YTDIynRqyFSMuumDqeUq7Y.iZkKmj.DighfFzgG0fW9wSpR/i', '0712 6269 396', 3, 1, NULL, '2020-12-05 12:43:15', '2020-12-05 12:43:15'),
(11, 'Darmaji Tarihoran', 'rahimah.maman@gmail.com', '$2y$10$SXAlQwKpUzPcYIHveozN2Og/Hm5T7mWuIBPppxZKxcas5NdMfCDre', '0605 9338 5695', 1, 1, NULL, '2020-12-05 12:43:15', '2020-12-05 12:43:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `id_promo` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `potongan` mediumint(9) NOT NULL,
  `status` smallint(6) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `nama`, `voucher`, `tanggal_awal`, `tanggal_akhir`, `potongan`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Promo Natal', 'NYXMAS', '2021-12-05', '2022-01-01', 10, 1, NULL, NULL, '2021-09-25 04:58:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_models`
--

DROP TABLE IF EXISTS `review_models`;
CREATE TABLE `review_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dchat`
--
ALTER TABLE `dchat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `dorder`
--
ALTER TABLE `dorder`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hchat`
--
ALTER TABLE `hchat`
  ADD PRIMARY KEY (`id_hchat`);

--
-- Indeks untuk tabel `horder`
--
ALTER TABLE `horder`
  ADD PRIMARY KEY (`id_horder`);

--
-- Indeks untuk tabel `jenis_member`
--
ALTER TABLE `jenis_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `review_models`
--
ALTER TABLE `review_models`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `dchat`
--
ALTER TABLE `dchat`
  MODIFY `id_chat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `dorder`
--
ALTER TABLE `dorder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hchat`
--
ALTER TABLE `hchat`
  MODIFY `id_hchat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `horder`
--
ALTER TABLE `horder`
  MODIFY `id_horder` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jenis_member`
--
ALTER TABLE `jenis_member`
  MODIFY `id_member` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `review_models`
--
ALTER TABLE `review_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
