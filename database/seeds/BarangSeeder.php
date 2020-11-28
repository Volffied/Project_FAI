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
            "nama_barang"   =>  "C922 Webcam",
            "harga"         =>  2029000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65479/2/c922-pro-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "C920 HD PRO Webcam",
            "harga"         =>  1529000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65478/3/c920-pro-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "C310 Webcam",
            "harga"         =>  659000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65486/4/c310-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "C270 Webcam",
            "harga"         =>  449000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65480/3/c270-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "BCC950 Webcam",
            "harga"         =>  3699000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.logitech.com/assets/64530/26/conferencecam-bcc950.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "c615 1080p Webcam",
            "harga"         =>  1350000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/65481/4/c615-portable-hd-webcam-refresh.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "Kiyo Webcam",
            "harga"         =>  1400000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets2.razerzone.com/images/pnx.assets/b0e26b0152bddbb29e25cca21db8efa8/kiyo-base.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  3
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "BRIO ULTRA HD PRO Webcam",
            "harga"         =>  3890000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets.logitech.com/assets/64939/7/briopictograms.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "C505 HD Webcam",
            "harga"         =>  815000,
            "stok"          =>  50,
            "gambar"        =>  "https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/video-conferencing/c505/gallery/c505-gallery-2.png?v=1",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        //=================================== cooler
        BarangModel::insert([
            "nama_barang"   =>  "ROG STRIX LC360 RGB Cooler",
            "harga"         =>  3750000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/0F5A6D15-E030-4EB0-84BD-3B86409C9D28/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  1

        ]);
        BarangModel::insert([
            "nama_barang"   =>  "TUF Gaming LC240 RGB Cooler",
            "harga"         =>  2050000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.asus.com/media/global/products/80vilufg9yohqbe1/P_setting_xxx_0_90_end_500.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  1
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "ROG STRIX LC240 RGB Cooler",
            "harga"         =>  2900000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/0E4EE232-39CC-4CBF-B304-C48104324F47/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  1
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "AOURUS LIQUID Cooler 240",
            "harga"         =>  2850000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/b4cde679f02ebe609bd5c364087ac426/Product/23527/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  8
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "Hydro Series™ H115i RGB  Liquid CPU Cooler",
            "harga"         =>  2489000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.corsair.com/medias/sys_master/images/images/hd4/h36/9120710492190/-CW-9060038-WW-Gallery-H115i-RGB-PLATINUM-01.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  11

        ]);
        BarangModel::insert([
            "nama_barang"   =>  "MAG CoreLiquid 240R Cooler",
            "harga"         =>  1599000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_5_20200514174401_5ebd12e12f1b3.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  10

        ]);
        //================================== ssd
        BarangModel::insert([
            "nama_barang"   =>  "Blue™ SATA SSD 250GB",
            "harga"         =>  6400000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  9
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "Blue™ SATA SSD 500GB",
            "harga"         =>  1038000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  9
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "Blue™ SATA SSD 1TB",
            "harga"         =>  1860000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-3d-nand-sata-ssd/gallery/250gb/wd-blue-3d-nand-sata-ssd-250gb-right.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  9
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "BLACK SN750 NVMe™ SSD 250GB",
            "harga"         =>  809000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  9
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "BLACK SN750 NVMe™ SSD 500GB",
            "harga"         =>  2140000,
            "stok"          =>  50,
            "gambar"        =>  "https://shop.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-black-sn750-nvme-ssd/gallery/without-heatsink/wd-black-sn750-nvme-ssd-noheatsink1.png.thumb.1280.1280.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  9
        ]);
        //========================================  microphone
        BarangModel::insert([
            "nama_barang"   =>  "SEIREN MINI",
            "harga"         =>  799000,
            "stok"          =>  50,
            "gambar"        =>  "https://cdn.mos.cms.futurecdn.net/2dz35EMcWHyakDHxiLsnU6-1200-80.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  3
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "SEIREN X",
            "harga"         =>  1849000,
            "stok"          =>  50,
            "gambar"        =>  "https://d1k3jiaf8cocae.cloudfront.net/wp-content/uploads/microphone-razer-seiren.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  3
        ]);
        //================================== mousepad
        BarangModel::insert([
            "nama_barang"          =>  "MM800 Polaris RGB Mouse Pad",
            "harga"         =>  844000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.corsair.com/medias/sys_master/images/images/hf5/hc5/9110600974366/-CH-9440020-NA-Gallery-MM800-01.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  11
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK PRISM CLOTH Medium Mouse Pad",
            "harga"         =>  570000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/d3/4f/d34f96e2-260a-4287-bb59-d7651342790d/1200x_buy_qck-prism_m_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK PRISM CLOTH XL Mouse Pad",
            "harga"         =>  850000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/39/24/39247c2d-aa5f-419a-a41c-ff20cad535ef/1200x_buy_qck-prism_xl_02.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK PRISM CLOTH 3XL Mouse Pad",
            "harga"         =>  1600000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/63/db/63db8907-a560-4439-a6a4-beae5f37bfa2/qck_prism_3xl_prism_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK PRISM CLOTH 4XL Mouse Pad",
            "harga"         =>  1850000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/filer_public/6c/4b/6c4b99b1-8b1c-4809-a23c-727bb8c30414/qck_prism_4xl_buyimg_03.png__1920x1080_q100_crop-fit_optimize_subsampling-2.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK G FUEL EDITION Mouse Pad",
            "harga"         =>  1830000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/01140-qck-g-fuel-edition/f7f553d5bdd84acabebba473f57b2f66.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK FAZE EDITION Mouse Pad",
            "harga"         =>  1830000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/01040-qck-4-faze-clan-edition/7a45b79d05fb4303a597b6e72bfbce26.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Firefly Hard Gaming Mouse Pad",
            "harga"         =>  750000,
            "stok"          =>  50,
            "gambar"        =>  "https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/7/22377867/22377867_0fbf3e59-d652-4834-b9f2-fd1035528d30_700_525.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  3
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "QCK NEON RIDER Mouse Pad",
            "harga"         =>  380000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/01214-qck-large-neon-rider-edition/e32b574ef3fc47c8a30fc37246861cc5.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "G640 LARGE CLOTH GAMING Mouse Pad",
            "harga"         =>  599000,
            "stok"          =>  50,
            "gambar"        =>  "https://resource.logitechg.com/content/dam/gaming/en/products/g640/g640-gallery-1.png",
            "status"        =>  1,
            "kode_kategori" =>  2,
            "kode_brand"    =>  6
        ]);
        //========================== VGA
        BarangModel::insert([
            "nama_barang"          =>  "RX5700XT Gaming X 8GB GDDR6 VGA",
            "harga"         =>  7500000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_1_20190911133259_5d78870b2757c.png62405b38c58fe0f07fcef2367d8a9ba1/600.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  10
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "GEFORCE GTX 1070 TI GAMING 8G VGA",
            "harga"         =>  5900000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_2_20171026100803_59f14383beebe.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  10
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "ROG STRIX GeForce RTX 2070 VGA",
            "harga"         =>  8600000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/3538E379-34A2-47AE-81FD-DF72CB88A40F/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  1
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "GeForce RTX 2080 Gaming X Trio VGA",
            "harga"         =>  8600000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_2_20180919185410_5ba22ad274fa9.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  10
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Radeon RX 550 D5 VGA",
            "harga"         =>  1950000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/16c12c86c485990d501eb1b801d4c322/Product/17196/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  8
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "GT 1030 OC VGA",
            "harga"         =>  1100000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/3cbb1a7c3d25f2bf5297cad925582e3f/Product/17404/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  8
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Radeon™ RX 560 Gaming OC 4G VGA",
            "harga"         =>  2000000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/f01c77b1072781d8a5a0022115a36baf/Product/17231/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  10
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "GeForce GTX 1050 Ti VGA",
            "harga"         =>  2050000,
            "stok"          =>  50,
            "gambar"        =>  "https://asset.msi.com/resize/image/global/product/product_4_20161017104822_58043bf6c379b.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  10
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "GeForce GTX 1060 WINDFORCE OC VGA",
            "harga"         =>  38650000,
            "stok"          =>  50,
            "gambar"        =>  "https://static.gigabyte.com/StaticFile/Image/Global/4f41cabdddac5354b336d1f758fc6102/Product/15430/png/1000",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  8
        ]);
        //========================== processor
        BarangModel::insert([
            "nama_barang"          =>  "Core™ i9-10980XE Extreme Edition Processor",
            "harga"         =>  13400000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/processor-box-core-i9-extreme-edition-1x1.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  5
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Core™ i9-10900 Processor",
            "harga"         =>  7600000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/badge-corei9-10thgen-rwd.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  5
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Ryzen™ 5000 Series Processor",
            "harga"         =>  13700000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2020-10/648625-vermeer-black-chip-render-1260x709_2.png?itok=b6PL7Emc",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  7
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Core™ i7-10700 Processor",
            "harga"         =>  4500000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/badge-10th-gen-core-i7-1x1.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  5
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Pentium® Gold G6400 Processor",
            "harga"         =>  1100000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.intel.com/content/dam/products/hero/foreground/processor-badge-pentium-gold-1x1.png.rendition.intel.web.225.225.png",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  5
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Ryzen 9 3900X Processor",
            "harga"         =>  8200000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2019-11/238593-ryzen-9-pib-left-facing-1260x709_0.png?itok=lahqo3M0",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  7
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Ryzen 7 3800X Processor",
            "harga"         =>  6300000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-7-pib-left-facing-1260x709.png?itok=ACRb3hX0",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  7
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Ryzen 5 3600X Processor",
            "harga"         =>  3200000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-5-pib-left-facing-1260x709.png?itok=umdtyaSy",
            "status"        =>  1,
            "kode_kategori" =>  3,
            "kode_brand"    =>  7
        ]);
        //========================= campur
        BarangModel::insert([
            "nama_barang"          =>  "Aerox 3 Mouse",
            "harga"         =>  990000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalog/items/62599/6388035630a44c45a9bf017c005d63ce.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Sensei Ten Neon Rider Edition Mouse",
            "harga"         =>  1130000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/01213-sensei-ten-neon-rider-edition/5d4e0f16e11c4e1180f0bc932de13f27.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Arctis 7X Wireless Headset",
            "harga"         =>  2500000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalog/items/61466/06300a7492304a61b9b27d8549c519d1.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  4
        ]);

        BarangModel::insert([
            "nama_barang"          =>  "Arctis 7 White Headset",
            "harga"         =>  2550000,
            "stok"          =>  50,
            "gambar"        =>  "https://media.steelseriescdn.com/thumbs/catalogue/products/00968-arctis-7-white-2019-edition/42cf75be63f84d9e871df5adb0f3da54.png.350x280_q100_crop-fit_optimize.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  4
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Mamba Elite Mouse",
            "harga"         =>  890000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets3.razerzone.com/aNOUc7Dg3QQquHItgSmcr3AkKZ0=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fha4%2Fh68%2F9004668452894%2FMamba-Elite-Base.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  3
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Ornata V2 - US Keyboard",
            "harga"         =>  1400000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets3.razerzone.com/9q2HK0XP35dBKD9g3XOAJD-TZrI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb1%2Fh86%2F9020512993310%2FOrnata-V2-Base-500x500.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  3
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "K70 RGB MK.2 Mechanical Gaming Keyboard",
            "harga"         =>  1850000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.corsair.com/medias/sys_master/images/images/h8f/h80/9029811961886/-CH-9109010-NA-Gallery-K70-RGB-MK2-01.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  11
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "Kraken Kitty - Quartz Headset",
            "harga"         =>  2100000,
            "stok"          =>  50,
            "gambar"        =>  "https://assets3.razerzone.com/djHVzhcNM-4CDUH10OYt3G5U1nM=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb6%2Fh38%2F9004166381598%2F9263550005278.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  3
        ]);

        BarangModel::insert([
            "nama_barang"          =>  "Virtuoso Pearl RGB Wireless Headset",
            "harga"         =>  3448000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.corsair.com/ww/en/medias/sys_master/images/images/hee/ha8/9597248536606/virtuoso-rgb-config/Gallery/VIRTUOSO_PEARL_01/-virtuoso-rgb-config-Gallery-VIRTUOSO-PEARL-01.png_515Wx515H",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  11
        ]);

        BarangModel::insert([
            "nama_barang"          =>  "HS35 Green Stereo Gaming Headset",
            "harga"         =>  522000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.corsair.com/medias/sys_master/images/images/h56/h0c/9254292979742/-CA-9011197-EU-Gallery-HS35-GREEN-01.png",
            "status"        =>  1,
            "kode_kategori" =>  5,
            "kode_brand"    =>  11
        ]);
        //========================= console
        BarangModel::insert([
            "nama_barang"          =>  "XBOX One Console",
            "harga"         =>  3000000,
            "stok"          =>  50,
            "gambar"        =>  "https://www.skinit.com/media/wysiwyg/category/skins/gaming-skins/microsoft/xbox-one-x-desktop.png",
            "status"        =>  1,
            "kode_kategori" =>  1,
            "kode_brand"    =>  12
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "PlayStation 5 Console",
            "harga"         =>  5600000,
            "stok"          =>  50,
            "gambar"        =>  "https://gmedia.playstation.com/is/image/SIEPDC/playstation-5-with-dualsense-front-product-shot-01-ps5-en-30jul20?$1600px--t$",
            "status"        =>  1,
            "kode_kategori" =>  1,
            "kode_brand"    =>  2
        ]);
        BarangModel::insert([
            "nama_barang"   =>  "PlayStation 4 Console",
            "harga"         =>  2800000,
            "stok"          =>  50,
            "gambar"        =>  "https://gmedia.playstation.com/is/image/SIEPDC/ps4-slim-image-block-01-en-24jul20?$1600px--t$",
            "status"        =>  1,
            "kode_kategori" =>  1,
            "kode_brand"    =>  2
        ]);
        //========================= PC
        BarangModel::insert([
            "nama_barang"          =>  "ROG SWIFT PG35VQ Monitor",
            "harga"         =>  4500000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/7EFC8E77-ED9D-4837-81F2-42124966C557/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  4,
            "kode_brand"    =>  1
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "ROG SWIFT PG248Q Monitor",
            "harga"         =>  6300000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/DCCD2302-9833-40A3-84ED-BA21673DFFA1/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  4,
            "kode_brand"    =>  1
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "ROG STRIX XG258Q Monitor",
            "harga"         =>  6300000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/958DE1B6-B114-462B-B99C-0BF405763BC9/w717/h525",
            "status"        =>  1,
            "kode_kategori" =>  4,
            "kode_brand"    =>  1
        ]);
        BarangModel::insert([
            "nama_barang"          =>  "TUF Gaming VG34VQL1B Gaming Monitor",
            "harga"         =>  6100000,
            "stok"          =>  50,
            "gambar"        =>  "https://dlcdnwebimgs.asus.com/gain/37220b4f-dc77-423e-853b-fce0897b8865/",
            "status"        =>  1,
            "kode_kategori" =>  4,
            "kode_brand"    =>  1
        ]);
    }
}
