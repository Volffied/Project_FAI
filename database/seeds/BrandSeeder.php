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
        BrandModel::insert([
            'nama' =>  'ASUS',
            'gambar' => 'https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo.png',
            'desc' => 'a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.',
            'status' => 1
        ]);

        BrandModel::insert([
            'nama' =>  'SONY',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Sony_logo.svg/1024px-Sony_logo.svg.png',
            'desc' => 'a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo.',
            'status' => 1
        ]);

        BrandModel::insert([
            'nama' =>  'RAZER',
            'gambar' => 'https://d2o7dtsnwzl7g9.cloudfront.net/tekzone/media/image/4d/46/g0/razer-logo.png',
            'desc' => 'a Singaporean–American multinational technology company that designs, develops, and sells consumer electronics, financial services, and gaming hardware. Founded by Min-Liang Tan and Robert Krakoff, the company is headquartered in Queenstown, Singapore and Irvine, California, United States.',
            'status' => 1
        ]);

        BrandModel::insert([
            'nama' =>  'STEELSERIES',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/SteelSeries_Logo.svg/1200px-SteelSeries_Logo.svg.png',
            'desc' => 'a Danish manufacturer of gaming peripherals and accessories, including headsets, keyboards, mice, and gaming surfaces headquartered in Frederiskberg, Denmark.',
            'status' => 1
        ]);

        BrandModel::insert([
            'nama' =>  'INTEL',
            'gambar' => 'https://cdn.freelogovectors.net/wp-content/uploads/2020/09/intelnewlogo.png',
            'desc' => 'an American multinational corporation and technology company headquartered in Santa Clara, California, in Silicon Valley.',
            'status' => 1
        ]);
    }
}
