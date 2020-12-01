<?php

use App\Model\BrandModel;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        BrandModel::insert([
            'nama_brand' =>  'ASUS',
            'gambar' => 'https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo.png',
            'desc' => 'a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.',
            'status' => 1
        ]);
        //2
        BrandModel::insert([
            'nama_brand' =>  'SONY',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Sony_logo.svg/1024px-Sony_logo.svg.png',
            'desc' => 'a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo.',
            'status' => 1
        ]);
        //3
        BrandModel::insert([
            'nama_brand' =>  'RAZER',
            'gambar' => 'https://d2o7dtsnwzl7g9.cloudfront.net/tekzone/media/image/4d/46/g0/razer-logo.png',
            'desc' => 'a Singaporean–American multinational technology company that designs, develops, and sells consumer electronics, financial services, and gaming hardware. Founded by Min-Liang Tan and Robert Krakoff, the company is headquartered in Queenstown, Singapore and Irvine, California, United States.',
            'status' => 1
        ]);
        //4
        BrandModel::insert([
            'nama_brand' =>  'STEELSERIES',
            'gambar' => 'https://overclocking.com/wp-content/uploads/2019/10/logo-steelseries.png',
            'desc' => 'a Danish manufacturer of gaming peripherals and accessories, including headsets, keyboards, mice, and gaming surfaces headquartered in Frederiskberg, Denmark.',
            'status' => 1
        ]);
        //5
        BrandModel::insert([
            'nama_brand' =>  'INTEL',
            'gambar' => 'https://assets.stickpng.com/images/58568d224f6ae202fedf2720.png',
            'desc' => 'an American multinational corporation and technology company headquartered in Santa Clara, California, in Silicon Valley.',
            'status' => 1
        ]);
        //6
        BrandModel::insert([
            'nama_brand' =>  'LOGITECH',
            'gambar' => 'https://1000logos.net/wp-content/uploads/2020/05/Logitech-Logo.png',
            'desc' => 'an American-Swiss manufacturer of computer peripherals and software, with headquarters in Lausanne, Switzerland and Newark, California.',
            'status' => 1
        ]);
        //7
        BrandModel::insert([
            'nama_brand' =>  'AMD',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/AMD_Logo.svg/1200px-AMD_Logo.svg.png',
            'desc' => ' an American multinational semiconductor company based in Santa Clara, California, that develops computer processors and related technologies for business and consumer markets.',
            'status' => 1
        ]);
        //8
        BrandModel::insert([
            'nama_brand' =>  'GIGABYTE',
            'gambar' => 'https://cdn.freebiesupply.com/logos/large/2x/gigabyte-1-logo-png-transparent.png',
            'desc' => "a Taiwanese manufacturer and distributor of computer hardware. Gigabyte's principal business is motherboards.",
            'status' => 1
        ]);
        //9
        BrandModel::insert([
            'nama_brand' =>  'WD',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Western_Digital_logo.svg/1280px-Western_Digital_logo.svg.png',
            'desc' => 'an American computer hard disk drive manufacturer and data storage company. It designs, manufactures and sells data technology products, including storage devices, data center systems and cloud storage services.',
            'status' => 1
        ]);
        //10
        BrandModel::insert([
            'nama_brand' =>  'MSI',
            'gambar' => 'https://cdn.freebiesupply.com/logos/large/2x/msi-5-logo-png-transparent.png',
            'desc' => 'a Taiwanese multinational information technology corporation headquartered in New Taipei City, Taiwan.',
            'status' => 1
        ]);
        //11
        BrandModel::insert([
            'nama_brand' =>  'CORSAIR',
            'gambar' => 'https://www.topmarket.co.il/images/feature_variant/14/corsair.png',
            'desc' => 'an American computer peripherals and hardware company headquartered in Fremont, California.',
            'status' => 1
        ]);
        //12
        BrandModel::insert([
            'nama_brand' =>  'MICROSOFT',
            'gambar' => 'https://svgsilh.com/png-512/80658.png',
            'desc' => 'an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services.',
            'status' => 1
        ]);
    }
}
