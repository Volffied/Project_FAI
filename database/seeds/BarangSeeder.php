<?php

use Illuminate\Database\Seeder;
use App\Model\BarangModel;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //=========================== webcam
        BarangModel::insert([
            "nama"          =>  "LOGITECH C922",
            "harga"         =>  2029000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65479/2/c922-pro-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH C920 HD PRO Webcam",
            "harga"         =>  1529000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65478/3/c920-pro-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH C310",
            "harga"         =>  659000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65486/4/c310-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH C270",
            "harga"         =>  449000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65480/3/c270-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH BCC950 Webcam",
            "harga"         =>  3699000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.logitech.com/assets/64530/26/conferencecam-bcc950.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH c615 Webcam 1080p",
            "harga"         =>  1350000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65481/4/c615-portable-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "Webcam Jete W1 VGApx",
            "harga"         =>  230000,
            "stok"          =>  50,
            "gambar"        =>  "https://jete.id/wp-content/uploads/2020/06/W1-SERIES-4-510x510.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "JETE W2 Webcam 720p",
            "harga"         =>  330000,
            "stok"          =>  50,
            "gambar"        =>  "https://jete.id/wp-content/uploads/2020/06/W2-SERIES-4-510x510.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH BRIO ULTRA HD PRO Webcam",
            "harga"         =>  3890000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/64939/7/briopictograms.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH C505 HD Webcam",
            "harga"         =>  815000,
            "stok"          =>  50,
            "gambar"        =>  "https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/video-conferencing/c505/gallery/c505-gallery-2.png?v=1",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        //=================================== cooler
        BarangModel::insert([
            "nama"          =>  "MASTERLIQUID ML360 SUB-ZERO",
            "harga"         =>  2200000,
            "stok"          =>  50,
            "gambar"        =>  "https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1030/ml360-sub-zero-gallery-1-image.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "HYPER 212 EVO V2",
            "harga"         =>  570000,
            "stok"          =>  50,
            "gambar"        =>  "https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1018/hyper-212-evo-v2-gallery-1-image.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MASTERLIQUID ML240 MIRROR",
            "harga"         =>  2000000,
            "stok"          =>  50,
            "gambar"        =>  "https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1010/ml240-mirror-gallery-1-image.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MASTERLIQUID ML120L V2 RGB",
            "harga"         =>  868000,
            "stok"          =>  50,
            "gambar"        =>  "https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1010/masterliquid-ml120l-v2-rgb-gallery-1-image.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MASTERLIQUID ML240L V2 RGB",
            "harga"         =>  1060000,
            "stok"          =>  50,
            "gambar"        =>  "https://s3-eu-west-1.amazonaws.com/cdn.coolermaster.com/assets/1016/masterliquid-ml240l-v2-rgb-gallery-1-image.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS ROG STRIX LC360 RGB",
            "harga"         =>  3750000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/0F5A6D15-E030-4EB0-84BD-3B86409C9D28/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS TUF Gaming LC240 RGB",
            "harga"         =>  2050000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.asus.com/media/global/products/80vilufg9yohqbe1/P_setting_xxx_0_90_end_500.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS ROG STRIX LC240 RGB",
            "harga"         =>  2900000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/0E4EE232-39CC-4CBF-B304-C48104324F47/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ARCTIS LIQUID FREEZER ll 240",
            "harga"         =>  1650000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.arctic.ac/media/2a/6c/fa/1597311066/Liquid_Freezer_II_240_G00_Award.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "GIGABYTE AOURUS LIQUID Cooler 240",
            "harga"         =>  2850000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/b4cde679f02ebe609bd5c364087ac426/Product/23527/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ARCTIC LIQUID FREEZER ll 360",
            "harga"         =>  1925000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.arctic.ac/media/9b/24/e1/1583752715/Liquid_Freezer_II_360_G00.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        //================================== ssd
        BarangModel::insert([
            "nama"          =>  "WD Blue™ SATA SSD 250GB",
            "harga"         =>  6400000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "WD Blue™ SATA SSD 500GB",
            "harga"         =>  1038000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "WD Blue™ SATA SSD 1TB",
            "harga"         =>  1860000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "WD BLACK SN750 NVMe™ SSD 250GB",
            "harga"         =>  809000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "WD BLACK SN750 NVMe™ SSD 500GB",
            "harga"         =>  2140000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "TRANSCEND SATA III 500GB SSD220Q",
            "harga"         =>  797000,
            "stok"          =>  50,
            "gambar"        =>  "https://cdn.transcend-info.com/products/images/ModelPic/1163/PP_SSD220Q.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "TRANSCEND SATA III 1TB SSD230S",
            "harga"         =>  2250000,
            "stok"          =>  50,
            "gambar"        =>  "https://cdn.transcend-info.com/products/images/ModelPic/756/Pp_SSD230S-01.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        //========================================  microphone
        BarangModel::insert([
            "nama"          =>  "RAZER SEIREN MINI",
            "harga"         =>  799000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets2.razerzone.com/images/pnx.assets/c9a89f29f2c389eeb3118121e347c36a/diagram-microphone.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "RAZER SEIREN X MERCURY",
            "harga"         =>  1849000,
            "stok"          =>  50,
            "gambar"        =>  "https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE2JLPW?ver=9dca",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        //================================== mousepad
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK PRISM CLOTH Medium",
            "harga"         =>  570000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/d3/4f/d34f96e2-260a-4287-bb59-d7651342790d/1200x_buy_qck-prism_m_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK PRISM CLOTH XL",
            "harga"         =>  850000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/39/24/39247c2d-aa5f-419a-a41c-ff20cad535ef/1200x_buy_qck-prism_xl_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK PRISM CLOTH 3XL",
            "harga"         =>  1600000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/63/db/63db8907-a560-4439-a6a4-beae5f37bfa2/qck_prism_3xl_prism_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK PRISM CLOTH 4XL",
            "harga"         =>  1850000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/6c/4b/6c4b99b1-8b1c-4809-a23c-727bb8c30414/qck_prism_4xl_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK PRISM XL NEON RIDER",
            "harga"         =>  1070000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/06/QCK-PRISM-XL-NEON-RIDER.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "Mousepad Razer Firefly Hard Gaming",
            "harga"         =>  750000,
            "stok"          =>  50,
            "gambar"        =>  "https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/7/22377867/22377867_0fbf3e59-d652-4834-b9f2-fd1035528d30_700_525.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK NEON RIDER",
            "harga"         =>  380000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/cb/4f/cb4f7c43-fd7f-4727-804b-ceac3867e010/buyimg_qck_l_neonrider_003.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH G640 LARGE CLOTH GAMING MOUSEPAD",
            "harga"         =>  599000,
            "stok"          =>  50,
            "gambar"        =>  "https://resource.logitechg.com/e_trim/w_652,ar_4:3,c_limit,q_auto:best,f_auto/w_692,h_519,c_lpad,b_rgb:2f3132,dpr_auto/content/dam/gaming/en/products/g640/g640-gallery-1.png?v=1",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        //========================== VGA
        BarangModel::insert([
            "nama"          =>  "MSI RX5700XT Gaming X 8GB GDDR6",
            "harga"         =>  7500000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_1_20190911133259_5d78870b2757c.png62405b38c58fe0f07fcef2367d8a9ba1/600.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "POWERCOLOR RX5500XT RED DRAGON 4GB GDDR6",
            "harga"         =>  7500000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.powercolor.com/_upload/images//1912031642430.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MSI GEFORCE GTX 1070 TI GAMING 8G",
            "harga"         =>  5900000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_2_20171026100803_59f14383beebe.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS ROG STRIX GeForce RTX 2070",
            "harga"         =>  8600000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/3538E379-34A2-47AE-81FD-DF72CB88A40F/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MSI GeForce RTX 2080 Gaming X Trio",
            "harga"         =>  8600000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_2_20180919185410_5ba22ad274fa9.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ZOTAC GeForce GTX 1080 Ti AMP Edition",
            "harga"         =>  10850000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/1080-01_front.png?itok=A6DcNcQc",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "GIGABYTE Radeon RX 550 D5",
            "harga"         =>  1950000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/16c12c86c485990d501eb1b801d4c322/Product/17196/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "GIGABYTE GT 1030 OC",
            "harga"         =>  1100000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/3cbb1a7c3d25f2bf5297cad925582e3f/Product/17404/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Radeon™ RX 560 Gaming OC 4G",
            "harga"         =>  2000000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/f01c77b1072781d8a5a0022115a36baf/Product/17231/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Sapphire Nitro Radeon RX 580",
            "harga"         =>  2350000,
            "stok"          =>  50,
            "gambar"        =>  "https://cdn.sapphiretech.global/assets/consumer/11265_01_20G_NITRO_RX_580/11265_01_RX580_NITRO_plus_8GB_800x500_04.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MSI GeForce GTX 1050 Ti",
            "harga"         =>  2050000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_4_20161017104822_58043bf6c379b.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "GIGABYTE GeForce GTX 1060 WINDFORCE OC",
            "harga"         =>  38650000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/4f41cabdddac5354b336d1f758fc6102/Product/15430/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        //========================== processor
        BarangModel::insert([
            "nama"          =>  "Core™ i9-10980XE Extreme Edition Processor",
            "harga"         =>  13400000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/processor-box-core-i9-extreme-edition-1x1.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Intel® Core™ i9-10900 Processor",
            "harga"         =>  7600000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/badge-corei9-10thgen-rwd.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "AMD Ryzen™ 5000 Series",
            "harga"         =>  13700000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2020-10/648625-vermeer-black-chip-render-1260x709_2.png?itok=b6PL7Emc",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Core™ i7-10700 Processor",
            "harga"         =>  4500000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/badge-10th-gen-core-i7-1x1.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Pentium® Gold G6400 Processor",
            "harga"         =>  1100000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/processor-badge-pentium-gold-1x1.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Processor AMD Ryzen 9 3900X",
            "harga"         =>  8200000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2019-11/238593-ryzen-9-pib-left-facing-1260x709_0.png?itok=lahqo3M0",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Processor AMD Ryzen 7 3800X",
            "harga"         =>  6300000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-7-pib-left-facing-1260x709.png?itok=ACRb3hX0",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "Processor AMD Ryzen 5 3600X",
            "harga"         =>  3200000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-5-pib-left-facing-1260x709.png?itok=umdtyaSy",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        //========================= campur
        BarangModel::insert([
            "nama"          =>  "AEROX 3",
            "harga"         =>  990000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalog/items/62599/6388035630a44c45a9bf017c005d63ce.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "SENSEI TEN NEON RIDER EDITION",
            "harga"         =>  1130000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/01213-sensei-ten-neon-rider-edition/5d4e0f16e11c4e1180f0bc932de13f27.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "ARCTIS 7X WIRELESS",
            "harga"         =>  2500000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalog/items/61466/06300a7492304a61b9b27d8549c519d1.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);

        BarangModel::insert([
            "nama"          =>  "ARCTIS 7 WHITE",
            "harga"         =>  2550000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/00968-arctis-7-white-2019-edition/42cf75be63f84d9e871df5adb0f3da54.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "Razer Mamba Elite",
            "harga"         =>  890000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets3.razerzone.com/aNOUc7Dg3QQquHItgSmcr3AkKZ0=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fha4%2Fh68%2F9004668452894%2FMamba-Elite-Base.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "Razer Ornata V2 - US",
            "harga"         =>  1400000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets3.razerzone.com/9q2HK0XP35dBKD9g3XOAJD-TZrI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb1%2Fh86%2F9020512993310%2FOrnata-V2-Base-500x500.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "Razer Kraken Kitty - Quartz",
            "harga"         =>  2100000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets3.razerzone.com/djHVzhcNM-4CDUH10OYt3G5U1nM=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb6%2Fh38%2F9004166381598%2F9263550005278.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        //========================= console
        BarangModel::insert([
            "nama"          =>  "Nintendo Switch",
            "harga"         =>  4200000,
            "stok"          =>  50,
            "gambar"        =>  "https://trello-attachments.s3.amazonaws.com/564a1e767d45a5aee81148a9/5e96343bef6c5043904b07af/08205fe05e5a2b6de2abcbb732665e75/split-cta-system.png",
            "status"        =>  1,
            "kode_kategori" =>  1
        ]);
        BarangModel::insert([
            "nama"          =>  "PlayStation 5",
            "harga"         =>  5600000,
            "stok"          =>  50,
            "gambar"        =>  "https://gmedia.playstation.com/is/image/SIEPDC/playstation-5-with-dualsense-front-product-shot-01-ps5-en-30jul20?$1600px--t$",
            "status"        =>  1,
            "kode_kategori" =>  1
        ]);
        BarangModel::insert([
            "nama"          =>  "PlayStation 4",
            "harga"         =>  2800000,
            "stok"          =>  50,
            "gambar"        =>  "https://gmedia.playstation.com/is/image/SIEPDC/ps4-slim-image-block-01-en-24jul20?$1600px--t$",
            "status"        =>  1,
            "kode_kategori" =>  1
        ]);
        //========================= PC
        BarangModel::insert([
            "nama"          =>  "ROG SWIFT PG35VQ",
            "harga"         =>  4500000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/7EFC8E77-ED9D-4837-81F2-42124966C557/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  4
        ]);
        BarangModel::insert([
            "nama"          =>  "ROG SWIFT PG248Q",
            "harga"         =>  6300000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/DCCD2302-9833-40A3-84ED-BA21673DFFA1/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  4
        ]);
        BarangModel::insert([
            "nama"          =>  "ROG STRIX XG258Q",
            "harga"         =>  6300000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/958DE1B6-B114-462B-B99C-0BF405763BC9/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  4
        ]);
        BarangModel::insert([
            "nama"          =>  "TUF Gaming VG34VQL1B Gaming Monitor",
            "harga"         =>  6100000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/37220b4f-dc77-423e-853b-fce0897b8865/",
            "status"        =>  1,
            "kode_kategori" =>  4
        ]);
    }
}
