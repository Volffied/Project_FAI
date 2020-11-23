-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2020 pada 07.17
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

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
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stok` smallint(6) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `kode_kategori` bigint(20) NOT NULL,
  `kode_brand` bigint(20) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `gambar`, `status`, `kode_kategori`, `kode_brand`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'LOGITECH C922', 2029000, 50, 'https://assets.logitech.com/assets/65479/2/c922-pro-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(2, 'LOGITECH C920 HD PRO Webcam', 1529000, 50, 'https://assets.logitech.com/assets/65478/3/c920-pro-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(3, 'LOGITECH C310', 659000, 50, 'https://assets.logitech.com/assets/65486/4/c310-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(4, 'LOGITECH C270', 449000, 50, 'https://assets.logitech.com/assets/65480/3/c270-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(5, 'LOGITECH BCC950 Webcam', 3699000, 50, 'https://www.logitech.com/assets/64530/26/conferencecam-bcc950.png', 1, 2, 6, NULL, NULL, NULL),
(6, 'LOGITECH c615 Webcam 1080p', 1350000, 50, 'https://assets.logitech.com/assets/65481/4/c615-portable-hd-webcam-refresh.png', 1, 2, 6, NULL, NULL, NULL),
(7, 'Webcam Jete W1 VGApx', 230000, 50, 'https://jete.id/wp-content/uploads/2020/06/W1-SERIES-4-510x510.png', 1, 2, 0, NULL, NULL, NULL),
(8, 'JETE W2 Webcam 720p', 330000, 50, 'https://jete.id/wp-content/uploads/2020/06/W2-SERIES-4-510x510.png', 1, 2, 0, NULL, NULL, NULL),
(9, 'LOGITECH BRIO ULTRA HD PRO Webcam', 3890000, 50, 'https://assets.logitech.com/assets/64939/7/briopictograms.png', 1, 2, 6, NULL, NULL, NULL),
(10, 'LOGITECH C505 HD Webcam', 815000, 50, 'https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/video-conferencing/c505/gallery/c505-gallery-2.png?v=1', 1, 2, 6, NULL, NULL, NULL),
(11, 'MASTERLIQUID ML360 SUB-ZERO', 2200000, 50, 'https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1030/ml360-sub-zero-gallery-1-image.png', 1, 3, 0, NULL, NULL, NULL),
(12, 'HYPER 212 EVO V2', 570000, 50, 'https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1018/hyper-212-evo-v2-gallery-1-image.png', 1, 3, 0, NULL, NULL, NULL),
(13, 'MASTERLIQUID ML240 MIRROR', 2000000, 50, 'https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1010/ml240-mirror-gallery-1-image.png', 1, 3, 0, NULL, NULL, NULL),
(14, 'MASTERLIQUID ML120L V2 RGB', 868000, 50, 'https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1010/masterliquid-ml120l-v2-rgb-gallery-1-image.png', 1, 3, 0, NULL, NULL, NULL),
(15, 'MASTERLIQUID ML240L V2 RGB', 1060000, 50, 'https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1016/masterliquid-ml240l-v2-rgb-gallery-1-image.png', 1, 3, 0, NULL, NULL, NULL),
(16, 'ASUS ROG STRIX LC360 RGB', 3750000, 50, 'https://dlcdnwebimgs.asus.com/gain/0F5A6D15-E030-4EB0-84BD-3B86409C9D28/w717/h525', 1, 3, 1, NULL, NULL, NULL),
(17, 'ASUS TUF Gaming LC240 RGB', 2050000, 50, 'https://www.asus.com/media/global/products/80vilufg9yohqbe1/P_setting_xxx_0_90_end_500.png', 1, 3, 1, NULL, NULL, NULL),
(18, 'ASUS ROG STRIX LC240 RGB', 2900000, 50, 'https://dlcdnwebimgs.asus.com/gain/0E4EE232-39CC-4CBF-B304-C48104324F47/w717/h525', 1, 3, 1, NULL, NULL, NULL),
(19, 'ARCTIS LIQUID FREEZER ll 240', 1650000, 50, 'https://www.arctic.ac/media/2a/6c/fa/1597311066/Liquid_Freezer_II_240_G00_Award.png', 1, 3, 4, NULL, NULL, NULL),
(20, 'GIGABYTE AOURUS LIQUID Cooler 240', 2850000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/b4cde679f02ebe609bd5c364087ac426/Product/23527/png/1000', 1, 3, 8, NULL, NULL, NULL),
(21, 'ARCTIC LIQUID FREEZER ll 360', 1925000, 50, 'https://www.arctic.ac/media/9b/24/e1/1583752715/Liquid_Freezer_II_360_G00.png', 1, 3, 4, NULL, NULL, NULL),
(22, 'WD Blue™ SATA SSD 250GB', 6400000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(23, 'WD Blue™ SATA SSD 500GB', 1038000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(24, 'WD Blue™ SATA SSD 1TB', 1860000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(25, 'WD BLACK SN750 NVMe™ SSD 250GB', 809000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(26, 'WD BLACK SN750 NVMe™ SSD 500GB', 2140000, 50, 'https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png', 1, 3, 9, NULL, NULL, NULL),
(27, 'TRANSCEND SATA III 500GB SSD220Q', 797000, 50, 'https://cdn.transcend-info.com/products/images/ModelPic/1163/PP_SSD220Q.png', 1, 3, 0, NULL, NULL, NULL),
(28, 'TRANSCEND SATA III 1TB SSD230S', 2250000, 50, 'https://cdn.transcend-info.com/products/images/ModelPic/756/Pp_SSD230S-01.png', 1, 3, 0, NULL, NULL, NULL),
(29, 'RAZER SEIREN MINI', 799000, 50, 'https://assets2.razerzone.com/images/pnx.assets/c9a89f29f2c389eeb3118121e347c36a/diagram-microphone.png', 1, 5, 3, NULL, NULL, NULL),
(30, 'RAZER SEIREN X MERCURY', 1849000, 50, 'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE2JLPW?ver=9dca', 1, 5, 3, NULL, NULL, NULL),
(31, 'STEELSERIES QCK PRISM CLOTH Medium', 570000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/d3/4f/d34f96e2-260a-4287-bb59-d7651342790d/1200x_buy_qck-prism_m_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(32, 'STEELSERIES QCK PRISM CLOTH XL', 850000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/39/24/39247c2d-aa5f-419a-a41c-ff20cad535ef/1200x_buy_qck-prism_xl_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(33, 'STEELSERIES QCK PRISM CLOTH 3XL', 1600000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/63/db/63db8907-a560-4439-a6a4-beae5f37bfa2/qck_prism_3xl_prism_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(34, 'STEELSERIES QCK PRISM CLOTH 4XL', 1850000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/6c/4b/6c4b99b1-8b1c-4809-a23c-727bb8c30414/qck_prism_4xl_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(35, 'STEELSERIES QCK PRISM XL NEON RIDER', 1070000, 50, 'https://blossomzones.com/wp-content/uploads/2020/06/QCK-PRISM-XL-NEON-RIDER.jpg', 1, 2, 4, NULL, NULL, NULL),
(36, 'Mousepad Razer Firefly Hard Gaming', 750000, 50, 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/7/22377867/22377867_0fbf3e59-d652-4834-b9f2-fd1035528d30_700_525.png', 1, 2, 3, NULL, NULL, NULL),
(37, 'STEELSERIES QCK NEON RIDER', 380000, 50, 'https://media.steelseriescdn.com/thumbs/filer_public/cb/4f/cb4f7c43-fd7f-4727-804b-ceac3867e010/buyimg_qck_l_neonrider_003.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png', 1, 2, 4, NULL, NULL, NULL),
(38, 'LOGITECH G640 LARGE CLOTH GAMING MOUSEPAD', 599000, 50, 'https://resource.logitechg.com/e_trim/w_652,ar_4:3,c_limit,q_auto:best,f_auto/w_692,h_519,c_lpad,b_rgb:2f3132,dpr_auto/content/dam/gaming/en/products/g640/g640-gallery-1.png?v=1', 1, 2, 6, NULL, NULL, NULL),
(39, 'MSI RX5700XT Gaming X 8GB GDDR6', 7500000, 50, 'https://asset.msi.com/resize/image/global/product/product_1_20190911133259_5d78870b2757c.png62405b38c58fe0f07fcef2367d8a9ba1/600.png', 1, 3, 0, NULL, NULL, NULL),
(40, 'POWERCOLOR RX5500XT RED DRAGON 4GB GDDR6', 7500000, 50, 'https://www.powercolor.com/_upload/images//1912031642430.png', 1, 3, 0, NULL, NULL, NULL),
(41, 'MSI GEFORCE GTX 1070 TI GAMING 8G', 5900000, 50, 'https://asset.msi.com/resize/image/global/product/product_2_20171026100803_59f14383beebe.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 0, NULL, NULL, NULL),
(42, 'ASUS ROG STRIX GeForce RTX 2070', 8600000, 50, 'https://dlcdnwebimgs.asus.com/gain/3538E379-34A2-47AE-81FD-DF72CB88A40F/w717/h525', 1, 3, 1, NULL, NULL, NULL),
(43, 'MSI GeForce RTX 2080 Gaming X Trio', 8600000, 50, 'https://asset.msi.com/resize/image/global/product/product_2_20180919185410_5ba22ad274fa9.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 0, NULL, NULL, NULL),
(44, 'ZOTAC GeForce GTX 1080 Ti AMP Edition', 10850000, 50, 'https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/1080-01_front.png?itok=A6DcNcQc', 1, 3, 0, NULL, NULL, NULL),
(45, 'GIGABYTE Radeon RX 550 D5', 1950000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/16c12c86c485990d501eb1b801d4c322/Product/17196/png/1000', 1, 3, 8, NULL, NULL, NULL),
(46, 'GIGABYTE GT 1030 OC', 1100000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/3cbb1a7c3d25f2bf5297cad925582e3f/Product/17404/png/1000', 1, 3, 8, NULL, NULL, NULL),
(47, 'Radeon™ RX 560 Gaming OC 4G', 2000000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/f01c77b1072781d8a5a0022115a36baf/Product/17231/png/1000', 1, 3, 0, NULL, NULL, NULL),
(48, 'Sapphire Nitro Radeon RX 580', 2350000, 50, 'https://cdn.sapphiretech.global/assets/consumer/11265_01_20G_NITRO_RX_580/11265_01_RX580_NITRO_plus_8GB_800x500_04.png', 1, 3, 0, NULL, NULL, NULL),
(49, 'MSI GeForce GTX 1050 Ti', 2050000, 50, 'https://asset.msi.com/resize/image/global/product/product_4_20161017104822_58043bf6c379b.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 1, 3, 0, NULL, NULL, NULL),
(50, 'GIGABYTE GeForce GTX 1060 WINDFORCE OC', 38650000, 50, 'https://static.gigabyte.com/StaticFile/Image/Global/4f41cabdddac5354b336d1f758fc6102/Product/15430/png/1000', 1, 3, 8, NULL, NULL, NULL),
(51, 'Core™ i9-10980XE Extreme Edition Processor', 13400000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/processor-box-core-i9-extreme-edition-1x1.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(52, 'Intel® Core™ i9-10900 Processor', 7600000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/badge-corei9-10thgen-rwd.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(53, 'AMD Ryzen™ 5000 Series', 13700000, 50, 'https://www.amd.com/system/files/styles/992px/private/2020-10/648625-vermeer-black-chip-render-1260x709_2.png?itok=b6PL7Emc', 1, 3, 7, NULL, NULL, NULL),
(54, 'Core™ i7-10700 Processor', 4500000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/badge-10th-gen-core-i7-1x1.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(55, 'Pentium® Gold G6400 Processor', 1100000, 50, 'https://www.intel.com/content/dam/products/hero/foreground/processor-badge-pentium-gold-1x1.png.rendition.intel.web.225.225.png', 1, 3, 5, NULL, NULL, NULL),
(56, 'Processor AMD Ryzen 9 3900X', 8200000, 50, 'https://www.amd.com/system/files/styles/992px/private/2019-11/238593-ryzen-9-pib-left-facing-1260x709_0.png?itok=lahqo3M0', 1, 3, 7, NULL, NULL, NULL),
(57, 'Processor AMD Ryzen 7 3800X', 6300000, 50, 'https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-7-pib-left-facing-1260x709.png?itok=ACRb3hX0', 1, 3, 7, NULL, NULL, NULL),
(58, 'Processor AMD Ryzen 5 3600X', 3200000, 50, 'https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-5-pib-left-facing-1260x709.png?itok=umdtyaSy', 1, 3, 7, NULL, NULL, NULL),
(59, 'AEROX 3', 990000, 50, 'https://media.steelseriescdn.com/thumbs/catalog/items/62599/6388035630a44c45a9bf017c005d63ce.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(60, 'SENSEI TEN NEON RIDER EDITION', 1130000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/01213-sensei-ten-neon-rider-edition/5d4e0f16e11c4e1180f0bc932de13f27.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(61, 'ARCTIS 7X WIRELESS', 2500000, 50, 'https://media.steelseriescdn.com/thumbs/catalog/items/61466/06300a7492304a61b9b27d8549c519d1.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(62, 'ARCTIS 7 WHITE', 2550000, 50, 'https://media.steelseriescdn.com/thumbs/catalogue/products/00968-arctis-7-white-2019-edition/42cf75be63f84d9e871df5adb0f3da54.png.350x280_q100_crop-fit_optimize.png', 1, 5, 4, NULL, NULL, NULL),
(63, 'Razer Mamba Elite', 890000, 50, 'https://assets3.razerzone.com/aNOUc7Dg3QQquHItgSmcr3AkKZ0=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fha4%2Fh68%2F9004668452894%2FMamba-Elite-Base.png', 1, 5, 3, NULL, NULL, NULL),
(64, 'Razer Ornata V2 - US', 1400000, 50, 'https://assets3.razerzone.com/9q2HK0XP35dBKD9g3XOAJD-TZrI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb1%2Fh86%2F9020512993310%2FOrnata-V2-Base-500x500.png', 1, 5, 3, NULL, NULL, NULL),
(65, 'Razer Kraken Kitty - Quartz', 2100000, 50, 'https://assets3.razerzone.com/djHVzhcNM-4CDUH10OYt3G5U1nM=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb6%2Fh38%2F9004166381598%2F9263550005278.png', 1, 5, 3, NULL, NULL, NULL),
(66, 'Nintendo Switch', 4200000, 50, 'https://trello-attachments.s3.amazonaws.com/564a1e767d45a5aee81148a9/5e96343bef6c5043904b07af/08205fe05e5a2b6de2abcbb732665e75/split-cta-system.png', 1, 1, 0, NULL, NULL, NULL),
(67, 'PlayStation 5', 5600000, 50, 'https://gmedia.playstation.com/is/image/SIEPDC/playstation-5-with-dualsense-front-product-shot-01-ps5-en-30jul20?$1600px--t$', 1, 1, 2, NULL, NULL, NULL),
(68, 'PlayStation 4', 2800000, 50, 'https://gmedia.playstation.com/is/image/SIEPDC/ps4-slim-image-block-01-en-24jul20?$1600px--t$', 1, 1, 2, NULL, NULL, NULL),
(69, 'ROG SWIFT PG35VQ', 4500000, 50, 'https://dlcdnwebimgs.asus.com/gain/7EFC8E77-ED9D-4837-81F2-42124966C557/w717/h525', 1, 4, 1, NULL, NULL, NULL),
(70, 'ROG SWIFT PG248Q', 6300000, 50, 'https://dlcdnwebimgs.asus.com/gain/DCCD2302-9833-40A3-84ED-BA21673DFFA1/w717/h525', 1, 4, 1, NULL, NULL, NULL),
(71, 'ROG STRIX XG258Q', 6300000, 50, 'https://dlcdnwebimgs.asus.com/gain/958DE1B6-B114-462B-B99C-0BF405763BC9/w717/h525', 1, 4, 1, NULL, NULL, NULL),
(72, 'TUF Gaming VG34VQL1B Gaming Monitor', 6100000, 50, 'https://dlcdnwebimgs.asus.com/gain/37220b4f-dc77-423e-853b-fce0897b8865/', 1, 4, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id_brand` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `brand` (`id_brand`, `nama`, `gambar`, `desc`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ASUS', 'https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo.png', 'a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.', 1, NULL, NULL, NULL),
(2, 'SONY', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Sony_logo.svg/1024px-Sony_logo.svg.png', 'a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo.', 1, NULL, NULL, NULL),
(3, 'RAZER', 'https://d2o7dtsnwzl7g9.cloudfront.net/tekzone/media/image/4d/46/g0/razer-logo.png', 'a Singaporean–American multinational technology company that designs, develops, and sells consumer electronics, financial services, and gaming hardware. Founded by Min-Liang Tan and Robert Krakoff, the company is headquartered in Queenstown, Singapore and Irvine, California, United States.', 1, NULL, NULL, NULL),
(4, 'STEELSERIES', 'https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/SteelSeries_Logo.svg/1200px-SteelSeries_Logo.svg.png', 'a Danish manufacturer of gaming peripherals and accessories, including headsets, keyboards, mice, and gaming surfaces headquartered in Frederiskberg, Denmark.', 1, NULL, NULL, NULL),
(5, 'INTEL', 'https://cdn.freelogovectors.net/wp-content/uploads/2020/09/intelnewlogo.png', 'an American multinational corporation and technology company headquartered in Santa Clara, California, in Silicon Valley.', 1, NULL, NULL, NULL),
(6, 'LOGITECH', 'https://1000logos.net/wp-content/uploads/2020/05/Logitech-Logo.png', 'an American-Swiss manufacturer of computer peripherals and software, with headquarters in Lausanne, Switzerland and Newark, California.', 1, NULL, NULL, NULL),
(7, 'AMD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/AMD_Logo.svg/1200px-AMD_Logo.svg.png', ' an American multinational semiconductor company based in Santa Clara, California, that develops computer processors and related technologies for business and consumer markets.', 1, NULL, NULL, NULL),
(8, 'GIGABYTE', 'https://img.pngio.com/home-gigabyte-png-2048_339.png', 'a Taiwanese manufacturer and distributor of computer hardware. Gigabyte\'s principal business is motherboards.', 1, NULL, NULL, NULL),
(9, 'WD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Western_Digital_logo.svg/1280px-Western_Digital_logo.svg.png', 'an American computer hard disk drive manufacturer and data storage company. It designs, manufactures and sells data technology products, including storage devices, data center systems and cloud storage services.', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `kode_jenis_member` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `poin`, `email`, `password`, `notlp`, `alamat`, `status`, `kode_jenis_member`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lalita Laksita S.Farm', 0, 'usyi.widiastuti@gmail.com', '$2y$10$a17qolDrDqHAVReA04HzJ.vZ5ejpOmgF/.CGPljN3Im7rA5KG99P6', '(+62) 628 6449 625', 'Ki. Nanas No. 187, Manado 51622, DIY', 1, 3, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(2, 'Kamal Luhung Setiawan', 0, 'pratama.mulyono@gmail.co.id', '$2y$10$S6Nz/KIKOLbZNh5dghmjs.XEIChDEi0Wt4BhaIGuu7K9yQ0CCh/G2', '0870 3998 3670', 'Jr. Teuku Umar No. 952, Lhokseumawe 83938, MalUt', 1, 3, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(3, 'Banawi Jumari Marbun', 0, 'widya.wijayanti@gmail.com', '$2y$10$YdPPTCSMo3dVPsx9.J/m.Ols3sW7vw0DYy3KDspg..nFHfjBQC4w2', '0526 9898 420', 'Ds. Flora No. 468, Surabaya 74611, Bali', 1, 2, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(4, 'Sabri Prasasta', 0, 'haryanti.gatra@yahoo.co.id', '$2y$10$E70L21DW2jiJH5ZX3THjVu5occcEe9Hox1qR5oXf0tS1KLxkoqg/e', '(+62) 265 5856 963', 'Kpg. Gedebage Selatan No. 550, Palopo 83455, Bali', 1, 2, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(5, 'Yusuf Thamrin S.H.', 0, 'gaduh13@yahoo.co.id', '$2y$10$7fT/QQ4ZBwF.Al0wJ/GpleZBj0u5xo3QJnsATb6iYJSRBcAkHzqoG', '(+62) 545 6932 404', 'Gg. Sudirman No. 304, Semarang 53148, SumSel', 1, 2, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(6, 'Mutia Anastasia Oktaviani S.T.', 0, 'hana.dongoran@gmail.com', '$2y$10$GcKp/mxAWx5FzN2Hc.W2a.APkfM3QgWCWHXp1MNYNWTRdYvY3EN2a', '(+62) 606 9703 5195', 'Gg. Karel S. Tubun No. 323, Jambi 84157, DKI', 1, 2, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(7, 'Surya Putra', 0, 'dsihombing@yahoo.co.id', '$2y$10$thWoieckq/Tnr/dQZNIAdOOOEpa8kYtlZMzhQc15odXrqkFS6yx8O', '(+62) 380 6812 6988', 'Psr. Elang No. 34, Pasuruan 11994, Gorontalo', 1, 3, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(8, 'Artawan Habibi M.Ak', 0, 'kayla.wastuti@gmail.com', '$2y$10$PJ9CtBEvbUkv5qByeW3DnuTgsDg9u2UgWcyTEqce2tjVnV3uNKptm', '0639 8124 411', 'Gg. Dewi Sartika No. 507, Medan 90346, Maluku', 1, 1, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(9, 'Silvia Ajeng Farida', 0, 'ssaefullah@gmail.com', '$2y$10$gomPqRy.G68Lhop23he3vur9INO//2G.22TFxOf0y86eZUAMqKl1q', '(+62) 20 3185 581', 'Jln. Ir. H. Juanda No. 573, Bandung 94733, KalTim', 1, 3, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(10, 'Hasan Ramadan', 0, 'usyi.gunarto@yahoo.com', '$2y$10$HAipTrW65n28sOkW3jPMZuwEMBnHGnLbVCbDLGmNPcdcKE5R0293K', '(+62) 488 5105 265', 'Ki. Ki Hajar Dewantara No. 420, Mataram 52215, SulTra', 1, 2, NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dorder`
--

DROP TABLE IF EXISTS `dorder`;
CREATE TABLE `dorder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` smallint(6) NOT NULL,
  `total` mediumint(9) NOT NULL,
  `kode_horder` bigint(20) NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `horder`
--

DROP TABLE IF EXISTS `horder`;
CREATE TABLE `horder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_trans` date NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `grandtotal` mediumint(9) NOT NULL,
  `estimasi_waktu` smallint(6) NOT NULL,
  `metode_pembayaran` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_order` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `kode_pegawai` bigint(20) NOT NULL,
  `kode_promo` bigint(20) NOT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_member`
--

DROP TABLE IF EXISTS `jenis_member`;
CREATE TABLE `jenis_member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimal_poin` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kat` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'console', NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(2, 'accessories', NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(3, 'component', NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(4, 'pc', NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21'),
(5, 'gear', NULL, '2020-11-22 22:58:21', '2020-11-22 22:58:21');

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
(94, '2014_10_12_000000_create_users_table', 1),
(95, '2019_08_19_000000_create_failed_jobs_table', 1),
(96, '2020_11_12_111041_create_pegawai_models_table', 1),
(97, '2020_11_12_111130_create_kategori_models_table', 1),
(98, '2020_11_12_111223_create_barang_models_table', 1),
(99, '2020_11_12_111338_create_promo_models_table', 1),
(100, '2020_11_12_111410_create_customer_models_table', 1),
(101, '2020_11_12_111434_create_jenis_member_models_table', 1),
(102, '2020_11_12_111457_create_horder_models_table', 1),
(103, '2020_11_12_111523_create_dorder_models_table', 1),
(104, '2020_11_12_113414_refresh', 1),
(105, '2020_11_21_172509_create_chat_models_table', 1),
(106, '2020_11_21_173105_create_review_models_table', 1),
(107, '2020_11_23_023234_create_brand_models_table', 1);

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
  `jenis` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `email`, `password`, `notlp`, `jenis`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ana Janet Nurdiyanti', 'halim.dadi@gmail.co.id', '$2y$10$kRoapHM2f20tsDxaGjUWROTBczBpdQukjJ23QIDnVh8.W.5SymQN6', '0722 1988 326', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(2, 'Zizi Mila Purwanti S.Farm', 'raina.januar@yahoo.com', '$2y$10$NvlGWrZwOF1yLG.8IxkPM.uuT7MwsXwYeEbFJ4oY9axyj8p91F9QS', '(+62) 552 1676 1177', 1, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(3, 'Clara Utami', 'mpuspasari@gmail.co.id', '$2y$10$YHr.htvpyPOow9nGf/epAOVtWlroCZ3y7hemO0Ur3pzipObASieKq', '0796 4135 143', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(4, 'Anggabaya Emong Budiyanto S.Ked', 'gmaryati@gmail.com', '$2y$10$8fDwmD/3GvHklyMMye6Nv.e23tKjy9/HVQRyEKy6ZCDTVf4PgpuOq', '(+62) 997 9849 0260', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(5, 'Ajeng Maryati', 'najwa.astuti@gmail.com', '$2y$10$kDMtlWwCUexsCNfC.nQ4vejI91mcf0VYJU.i5TSxy9E/ZE6e9Fdvu', '(+62) 666 3117 092', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(6, 'Farah Widiastuti', 'agnes63@gmail.com', '$2y$10$81wkETJ2MyK6okEh7yllkex9debJNjL76tp3rStZbGoqnZjhPjNEy', '(+62) 213 0954 8065', 1, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(7, 'Niyaga Jumari Adriansyah S.T.', 'pranowo.ozy@yahoo.co.id', '$2y$10$CLP/nJW3P75Ou2MN0fBT..vuAM6wEkwvFzxYHrieH/iXejT5bOQse', '(+62) 226 4343 8442', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(8, 'Vivi Winarsih', 'raina92@yahoo.co.id', '$2y$10$cvhMjdJNElM7YKZFl3tR3efe9YCHAjnLncVc.bPsf.ORVNre2VVOu', '024 5915 0181', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(9, 'Dalima Astuti M.M.', 'hidayat.puspa@gmail.co.id', '$2y$10$fhDvz3ycc8/zhqg6tUVrI.7WvutYfj1/eNOe/RmgJq60MRQJwggle', '(+62) 490 1195 777', 2, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20'),
(10, 'Harsanto Manullang', 'prasetya.bagya@gmail.com', '$2y$10$enJ/zE1QxCJ7UgCN/LLBJO1vbNdaIqv66N.hQI6OCtiyV6LIpONNK', '(+62) 753 6625 7647', 1, 1, NULL, '2020-11-22 22:58:20', '2020-11-22 22:58:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `potongan` mediumint(9) NOT NULL,
  `status` smallint(6) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `horder`
--
ALTER TABLE `horder`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_member`
--
ALTER TABLE `jenis_member`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dorder`
--
ALTER TABLE `dorder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `horder`
--
ALTER TABLE `horder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_member`
--
ALTER TABLE `jenis_member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
