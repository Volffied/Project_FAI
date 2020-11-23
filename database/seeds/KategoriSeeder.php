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
            'nama' => 'Console'
        ]);
        KategoriModel::insert([
            'nama' => 'Accessories'
        ]);
        KategoriModel::insert([
            'nama' => 'Component'
        ]);
        KategoriModel::insert([
            'nama' => 'PC'
        ]);
        KategoriModel::insert([
            'nama' => 'Gear'
        ]);
    }
}
