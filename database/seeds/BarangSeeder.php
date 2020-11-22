<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BarangModel::class,10)->make()->each(function($barang){
            $barang->save();
        });
    }
}
