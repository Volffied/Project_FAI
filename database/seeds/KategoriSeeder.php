<?php

use Illuminate\Database\Seeder;
use App\Model\KategoriModel;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriModel::insert([
            'nama_kategori' => 'Console'
        ]);
        KategoriModel::insert([
            'nama_kategori' => 'Accessories'
        ]);
        KategoriModel::insert([
            'nama_kategori' => 'Component'
        ]);
        KategoriModel::insert([
            'nama_kategori' => 'PC'
        ]);
        KategoriModel::insert([
            'nama_kategori' => 'Gear'
        ]);
    }
}
