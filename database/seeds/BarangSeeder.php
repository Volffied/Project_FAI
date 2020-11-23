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
            "nama"          =>  "Webcam Digital Camera 1080p",
            "harga"         =>  250000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/digital-cam-1-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "Webcam Digital Camera 720p",
            "harga"         =>  185000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/digital-cam-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "CYBORG CW-66 HD Stream Webcam 720p",
            "harga"         =>  350000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/cw-66-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "JETE W7 Webcam 1080p",
            "harga"         =>  500000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/W7.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "REXUS SW-RX01 Webcam",
            "harga"         =>  400000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/SW-RX01-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "MAXTECH Webcam",
            "harga"         =>  200000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/maxtech-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH c615 Webcam 1080p",
            "harga"         =>  1350000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/C615.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "JETE W6 Webcam 1080p",
            "harga"         =>  500000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/W6.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "JETE W5 Webcam 720p",
            "harga"         =>  385000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/W5.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "NYK EVEREST A90 AutoFocus Webcam",
            "harga"         =>  485000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/A90-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "CYBORG CW-88 HD pro Stream Webcam 1080p",
            "harga"         =>  550000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/06/CW-88.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "Webcam MTECH WB-300",
            "harga"         =>  225000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/06/MTECH-250620-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "RAZER KIYO desktop Camera Streaming",
            "harga"         =>  1849000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2018/02/KIYO-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH B525 HD Webcam",
            "harga"         =>  1150000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2019/07/B525HD-416x357.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "LOGITECH C525 HD Webcam",
            "harga"         =>  1150000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2018/10/C525-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        //=================================== cooler
        BarangModel::insert([
            "nama"          =>  "ABKONCORE CT408B RGB SPECTRUM",
            "harga"         =>  590000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/CT408B_main3.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "DarkFlash Tracer DT-240",
            "harga"         =>  890000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/DT-240.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "SILVERSTONE TUNDRA TD03 Lite V2",
            "harga"         =>  490000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/TD03-LITE.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "SILVERSTONE TUNDRA TD02 Slim V2",
            "harga"         =>  750000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/TD02-SLIM-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "SILVERSTONE TUNDRA TD02 Lite V2",
            "harga"         =>  750000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/TD02-LITE.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS ROG STRIX LC360 RGB",
            "harga"         =>  3750000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/LC360.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS TUF Gaming LC240 RGB",
            "harga"         =>  2050000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/TUF-LC240.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS ROG STRIX LC240 RGB White Edition",
            "harga"         =>  3050000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/LC240-WHITE.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ASUS ROG STRIX LC240 RGB",
            "harga"         =>  2900000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/LC240.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ARCTIS LIQUID FREEZER ll 240",
            "harga"         =>  1650000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/LIQUID-FREEZER-240-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "GIGABYTE AOURUS LIQUID Cooler 240",
            "harga"         =>  2850000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/AORUS-240.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ARCTIC LIQUID FREEZER ll 360",
            "harga"         =>  1925000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/LIQUID-FREEZER-360.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        //================================== ssd
        BarangModel::insert([
            "nama"          =>  "SSD PLAYER X70 1TB NVMe M.2",
            "harga"         =>  1650000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/X70-1TB-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "SAMSUNG 860 PRO 1TB",
            "harga"         =>  3850000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/860-PRO-1TB.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "SAMSUNG 970 PRO 512GB NVMe M.2",
            "harga"         =>  2900000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/970-PRO-512GB.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "KLEVV NEO N400 240GB",
            "harga"         =>  430000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/N400.png",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "PATRIOT P300 128GB NVMe M.2",
            "harga"         =>  400000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/p300-128gb.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "PATRIOT P210 1TB",
            "harga"         =>  1400000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/P210-1TB.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "PATRIOT P210 512GB",
            "harga"         =>  875000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/P210-512GB.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "PATRIOT P300 1TB NVMe M.2",
            "harga"         =>  2000000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/P300-1TB.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "TRANSCEND 1105 250GB NVMe M.2",
            "harga"         =>  645000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/11/110S-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "ACE POWER 256GB SSD",
            "harga"         =>  460000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/A1-256GB.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MIDAS SSD 1TB NVMe M.2 Lightning Max",
            "harga"         =>  1850000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/LIGHTNING-MAX-3.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MIDAS SSD 512GB NVMe M.2 Lightning Max",
            "harga"         =>  1000000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/LIGHTNING-MAX-2.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        //========================================  microphone
        BarangModel::insert([
            "nama"          =>  "RAZER SEIREN MINI",
            "harga"         =>  799000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/SEIREN-MINI-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "SADES ORPHEUS MIC CONDENSER",
            "harga"         =>  679000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/ORPHEUS-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "NYK NECRO MIC CLIP On MCL-01",
            "harga"         =>  175000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/10/NECRO-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "MICROPHONE YOSSIC U200 CONDENSER",
            "harga"         =>  425000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/U200-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "MICROPHONE YOSSIC SHU03",
            "harga"         =>  490000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/SHU03.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "MTECH CM100 MICROPHONE CONDENSER",
            "harga"         =>  125000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/MTECH-CM100.png",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "MICROPHONE CONDENSER BM800",
            "harga"         =>  350000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/BM800-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "HYPERX QUADCAST",
            "harga"         =>  2100000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/06/Microphone-Gaming-HyperX-QuadCast-Bali-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "RAZER SEIREN X MERCURY",
            "harga"         =>  1849000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2019/12/SEIREN-X-MERCURY.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        BarangModel::insert([
            "nama"          =>  "RAZER SEIREN EMOTE",
            "harga"         =>  2649000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2019/12/SEIREN-EMOTE-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  5
        ]);
        //================================== mousepad
        BarangModel::insert([
            "nama"          =>  "RAZER GIGANTUS V2",
            "harga"         =>  279000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/GIGANTUS-V2-L-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "RAZER GIGANTUS V2 3XL",
            "harga"         =>  929000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/gigantus-v2.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "RAZER GIGANTUS V2 MEDIUM",
            "harga"         =>  225000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/09/GIGANTUS-V2-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "MOUSEPAD GAMING XXL",
            "harga"         =>  70000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/08/mousepad-black.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "NYK G-7000 RGB GAMING MOUSEPAD XXL",
            "harga"         =>  160000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/07/G-7000-416x416.jpg",
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
            "nama"          =>  "PATRIOT VIPER Gaming MOUSEPAD XL",
            "harga"         =>  150000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/06/VIPER-XL-416x416.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "STEELSERIES QCK NEON RIDER",
            "harga"         =>  380000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/06/QCK-NEON-RIDER.png",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "REXUS KVLAR TR@ RGB",
            "harga"         =>  200000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/04/TR2.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        BarangModel::insert([
            "nama"          =>  "AORUS AMP900 Gaming MOUSEPAD",
            "harga"         =>  300000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/02/AMP900.jpg",
            "status"        =>  1,
            "kode_kategori" =>  2
        ]);
        //========================== VGA
        BarangModel::insert([
            "nama"          =>  "MSI RX5700XT Gaming X 8GB GDDR6",
            "harga"         =>  7500000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/02/AMP900.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "POWERCOLOR RX5500XT RED DRAGON 4GB GDDR6",
            "harga"         =>  7500000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/02/AMP900.jpg",
            "status"        =>  1,
            "kode_kategori" =>  3
        ]);
        BarangModel::insert([
            "nama"          =>  "MSI RX5700XT Gaming X 8GB GDDR6",
            "harga"         =>  7500000,
            "stok"          =>  50,
            "gambar"        =>  "https://blossomzones.com/wp-content/uploads/2020/02/AMP900.jpg",
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
