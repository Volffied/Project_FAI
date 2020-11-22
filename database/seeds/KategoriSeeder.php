<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KategoriModel::class,10)->make()->each(function($kategori){
            $kategori->save();
        });
    }
}
